<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Circuit;
use AppBundle\Entity\Contact;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Accueil controller.
 */
class AgenceController extends Controller
{
    /**
     * Page d'accueil.
     *
     * @Route("/accueil", name="accueil")
     * @Route("/", name="accueil_index")
     * @Method("GET")
     * 
     */
    public function accueilAction()
    {
        $em = $this->getDoctrine()->getManager();

        $circuits = $em->getRepository('AppBundle:Circuit')->findAll();

        return $this->render('menu/accueil.html.twig', array(
            'circuits' => $circuits,
        ));
    }
    
    /**
     * Page de contact.
     *
     * @Route("/contact", name="contact")
     * 
     */
    public function contactAction( Request $request )
    {
      
    
    $contact=new Contact() ;
    // Création du formulaire (formbuilder)
	$contactform = $this->createFormBuilder($contact)
		->add('Sujet', TextareaType::class)
		// Idée : champ déroulant "type de problème : information, problème...)
		->add('Nom', TextareaType::class)
		->add('Prenom', TextareaType::class)
		->add('AdresseMail', EmailType::class)
		->add('Contenu', TextareaType::class)
		->add('save', SubmitType::class, array('label' => 'Envoyer votre message'))
	// Générer le formulaire :	
		->getForm();
		$contactform->handleRequest($request);
		
		
		if ($contactform->isSubmitted() && $contactform->isValid()) {
			$this->addFlash('success', 'Demande bien envoyée');
		
			return $this->redirectToRoute('accueil');
		}
		
	return $this->render('menu/contact.html.twig', array('contactform' => $contactform->createView(), 
			
	));
		  
    }
    
    /**
     * Page de panier.
     *
     * @Route("/panier", name="panier")
     * @Method("GET")
     */
    public function panierAction()
    {
    	$em = $this->getDoctrine()->getManager();
    
    	$circuits = $em->getRepository('AppBundle:Circuit')->findAll();
    
    	return $this->render('menu/panier.html.twig');
    }
    

  /**
     * S'enregistrer
     * @Route("/register", name="user_register")
     * @Method("GET")
     */
    public function registerAction(Request $request)
    {
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $user = $userManager->createUser();
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);

                $userManager->updateUser($user);

                if (null === $response = $event->getResponse()) {
                    $url = $this->generateUrl('fos_user_registration_confirmed');
                    $response = new RedirectResponse($url);
                }

                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                return $response;
            }

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_FAILURE, $event);

            if (null !== $response = $event->getResponse()) {
                return $response;
            }
        }

        return $this->render('circuit/register.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     *
     * @Route("/login", name="user_login")
     * @Method("GET")
     */

    public function loginAction(Request $request)
    {
        /** @var $session \Symfony\Component\HttpFoundation\Session\Session */
        $session = $request->getSession();

        if (class_exists('\Symfony\Component\Security\Core\Security')) {
            $authErrorKey = Security::AUTHENTICATION_ERROR;
            $lastUsernameKey = Security::LAST_USERNAME;
        } else {
            // BC for SF < 2.6
            $authErrorKey = SecurityContextInterface::AUTHENTICATION_ERROR;
            $lastUsernameKey = SecurityContextInterface::LAST_USERNAME;
        }

        // get the error if any (works with forward and redirect -- see below)
        if ($request->attributes->has($authErrorKey)) {
            $error = $request->attributes->get($authErrorKey);
        } elseif (null !== $session && $session->has($authErrorKey)) {
            $error = $session->get($authErrorKey);
            $session->remove($authErrorKey);
        } else {
            $error = null;
        }

        if (!$error instanceof AuthenticationException) {
            $error = null; // The value does not come from the security component.
        }

        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get($lastUsernameKey);

        if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
        } else {
            // BC for SF < 2.4
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }

        return $this->render('circuit/login.html.twig',array(
            'last_username' => $lastUsername,
            'error' => $error,
            'csrf_token' => $csrfToken,
        ));
    }

   /**
     * Réserver un voyage.
     *
     * @Route("/reserver/{id}", name="reserver", requirements={
     *              "id": "\d+"
     *     })
     * @Method("GET")
     */
    public function reserverAction(Circuit $circuit, Request $request)
    {
        

        
        return $this->render('menu/reserver.html.twig', array(
            'circuit' => $circuit
            ));


    }




    /**
     * Formulaire de création de voyage.
     *
     * @Route("/nouveau", name="nouveau_voyage")
     *
     */
    public function nouveauAction( Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    
    	$circuits = $em->getRepository('AppBundle:Circuit')->findAll();
    	
    	
    	$newcircuit=new Circuit() ;
    	// Création du formulaire (formbuilder)
    	$circuitform = $this->createFormBuilder($newcircuit)
    	->add('Description', TextareaType::class)
    	// Idée : champ déroulant "type de problème : information, problème...)
    	->add('PaysDepart', TextareaType::class)
    	->add('VilleDepart', TextareaType::class)
    	->add('VilleArrivee', TextareaType::class)
    	->add('DureeCircuit', IntegerType::class)
    	->add('save', SubmitType::class, array('label' => 'Ajouter un voyage'))
    	
    	
    	// Générer le formulaire :
    	->getForm();
    	$circuitform->handleRequest($request);
    
    	//Formulaire d'étapes à part
    
    	if ($circuitform->isSubmitted() && $circuitform->isValid()) {
    		$this->addFlash('success', 'Circuit bien ajouté aux brouillons');
    		
    		// Enregistrer dans la base de données
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($newcircuit);
    		$em->flush();
    		 
    		return $this->redirectToRoute('circuit_brouillon');
    	}
    	
    	return $this->render('menu/nouveau.html.twig', array('circuitform' => $circuitform->createView(),
    				
    	));
    	
    	}

     /**
     * Lists all Circuit entities.
     *
     * @Route("/circuit", name="circuit_index")
     * @Method("GET")
     */
    public function circuitAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $circuits = $em->getRepository('AppBundle:Circuit')->findAll();

        if (!$user){
            return $this->render('circuit/circuit.html.twig', array(
                'circuits' => $circuits, 'utilisateur' => 0
            ));
        }

        return $this->render('circuit/circuit.html.twig', array(
            'circuits' => $circuits, 'utilisateur' => $user->hasRole('ROLE_ADMIN') + 1
        ));
    }

    /**
     * Finds and displays a Circuit entity.
     *
     * @Route("/circuit/{id}", name="circuit_show", requirements={
     *              "id": "\d+"
     *     })
     * @Method("GET")
     */
    public function showAction(Circuit $circuit)
    {
        return $this->render('circuit/show.html.twig', array(
            'circuit' => $circuit,
        ));
    }

    /**
     * Page récapitulative des brouillons de circuits
     * 
     * @Route("/circuit/administration", name="circuit_brouillon")
     * @Method("GET")
     */
    
    public function listAction(){
    	$em = $this->getDoctrine()->getManager();
    	
    	$brouillons = $em->getRepository('AppBundle:Circuit')->findAll();
    	
    	return $this->render('circuit/brouillon.html.twig', array(
    			'brouillons' => $brouillons,
    	));
    }
  
  /**
   * Pour rajouter des étapes au circuit
   * @Route("/circuit/administration/{id}/etape", name="circuit_brouillon_etape", requirements={
	 *              "id": "\d+"
	 *     })
   */
    public function etapeAction( Circuit $circuit_brouillon, Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    	    	
    	$newetape=new Etape() ;
    	// Création du formulaire (formbuilder)
    	$circuitform = $this->createFormBuilder($newetape)
    	->add('numeroEtape', IntegerType::class)
    	// Idée : champ déroulant "type de problème : information, problème...)
    	->add('villeEtape', TextareaType::class)
    	->add('nombreJours', IntegerType::class)
    	->add('save', SubmitType::class, array('label' => 'Ajouter une étape au voyage'))
    	
    	// Générer le formulaire :
    	->getForm();
    	$circuitform->handleRequest($request);
    	
    	$em = $this->getDoctrine()->getManager();
    	// $newetape.setCircuit( $circuit_brouillon);
    	   	
    	
    	if ($circuitform->isSubmitted() && $circuitform->isValid()) 
    	{
    	
    		// Enregistrer dans la base de données
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($newetape);
    		$em->persist($circuit_brouillon);
    		$circuit_brouillon->addEtape($newetape);
    		
    		$em->flush();
    		$this->addFlash('success', 'Etape enregistrée');
    	
    		return $this->redirectToRoute('circuit_show', ['id' => $circuit_brouillon->getId()]);
    	}
    	
    	return $this->render('circuit/etapebrouillon.html.twig', array('circuitform' => $circuitform->createView(),  ));
    }
    
    /**
     * Pour ajouter la programmation du circuit
     * @Route("/circuit/administration/{id}/prog", name="circuit_brouillon_prog", requirements={
     *              "id": "\d+"
     *     })
     */
    public function progAction(Circuit $circuit_brouillon, Request $request)
    {    
    	$newProg=new ProgrammationCircuit() ;
    	// Création du formulaire (formbuilder)
    	$circuitform = $this->createFormBuilder($newProg)
    	->add('dateDepart', DateType::class)
    	// Idée : champ déroulant "type de problème : information, problème...)
    	->add('nombrePersonnes', TextareaType::class)
    	->add('prix', TextareaType::class)
    	->add('save', SubmitType::class, array('label' => 'Enregistrer cette programmation du voyage'))
    	 
    	// Générer le formulaire :
    	->getForm();
    	$circuitform->handleRequest($request);
    	$em = $this->getDoctrine()->getManager();
    	 
    	
    	//$newProg.setCircuit($circuit_brouillon);
    	 
    	if ($circuitform->isSubmitted() && $circuitform->isValid())
    	{
    		$this->addFlash('success', 'Etape enregistrée');
    		$em->persist($newProg);
    		$circuit_brouillon->addProgrammation($newProg);
    		$em->persist($circuit_brouillon);
    		$em->flush();
    		
    		 
    		return $this->redirectToRoute('circuit_show', ['id' => $circuit_brouillon->getId()]);
    	}
    	 
    	return $this->render('circuit/progbrouillon.html.twig', array('circuitform' => $circuitform->createView(),  ));
    }
    	
  
}
