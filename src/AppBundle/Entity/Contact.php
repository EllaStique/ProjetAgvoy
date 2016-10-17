<?php

/**
 * Classe "Contact" = une demande de contact
 *
 * 
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etape
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContactRepository")
 */
class Contact
{
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="Sujet", type="string", length=50)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $Sujet;
	
	
    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=30)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $Nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=30)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $Prenom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Contenu", type="string", length = 500)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $Contenu;
    
    /**
     * @var string
     *
     * @ORM\Column(name="AdresseMail", type="string", length=50)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $AdresseMail;

  

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->Sujet;
    }
    
    /**
     * Set sujet
     *
     * @param string
     * @return Contact
     */
    public function setSujet($sujet)
    {
    	$this->Sujet = $sujet;
    
    	return $this;
    }
    
    
    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
    	return $this->Nom;
    }
    
    /**
     * Set nom
     *
     * @param string
     * @return Contact
     */
    public function setNom($nom)
    {
    	$this->Nom = $nom;
    
    	return $this;
    }
    
    
    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
    	return $this->Prenom;
    }
    /**
     * Set prenom
     *
     * @param string
     * @return Contact
     */
    public function setPrenom($prenom)
    {
    	$this->Prenom = $prenom;
    
    	return $this;
    }
    
    
    /**
     * Get Contenu
     *
     * @return string
     */
    public function getContenu()
    {
    	return $this->Contenu;
    }
    /**
     * Set contenu
     *
     * @param string
     * @return Contact
     */
    public function setContenu($contenu)
    {
    	$this->Contenu = $contenu;
    
    	return $this;
    }
    
    
    /**
     * Get adressemail
     *
     * @return string
     */
    public function getAdresseMail()
    {
    	return $this->AdresseMail;
    }
    /**
     * Set adressemail
     *
     * @param string
     * @return Contact
     */
    public function setAdresseMail($adressemail)
    {
    	$this->AdresseMail = $adressemail;
    
    	return $this;
    }   
    
}
