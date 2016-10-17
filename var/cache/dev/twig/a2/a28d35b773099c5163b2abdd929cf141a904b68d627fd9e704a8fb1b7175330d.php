<?php

/* :menu:accueil.html.twig */
class __TwigTemplate_429d1c4c2d022fcfdf0bb7b426c1bbfaf77fd9a76e92c34e1e8311bfe73fd498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":menu:accueil.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "agvoybase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_620366afbb5e9d573d1dc62fd51489ac955d0822da9717c8bb7cf70ae2a04763 = $this->env->getExtension("native_profiler");
        $__internal_620366afbb5e9d573d1dc62fd51489ac955d0822da9717c8bb7cf70ae2a04763->enter($__internal_620366afbb5e9d573d1dc62fd51489ac955d0822da9717c8bb7cf70ae2a04763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menu:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_620366afbb5e9d573d1dc62fd51489ac955d0822da9717c8bb7cf70ae2a04763->leave($__internal_620366afbb5e9d573d1dc62fd51489ac955d0822da9717c8bb7cf70ae2a04763_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_4c37c3ed00eb04615215b42f8a82e18f07263576676c21b078f63bf33325244f = $this->env->getExtension("native_profiler");
        $__internal_4c37c3ed00eb04615215b42f8a82e18f07263576676c21b078f63bf33325244f->enter($__internal_4c37c3ed00eb04615215b42f8a82e18f07263576676c21b078f63bf33325244f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h3><center>Bienvenue dans l'agence TSP </center></h3><br>
   
\t
\t<div id=\"photos\" class=\"col-sm-offset-3 col-md-offset-3 col-lg-offset-3 col-xs-offset-3 col-xs-6 col-sm-6 col-md-6 col-lg-6\">
\t\t\tDéfilé photos
\t\t\tPraesent id fermentum lorem. Ut est lorem, fringilla at accumsan nec, euismod at nunc. Aenean mattis sollicitudin mattis. Nullam pulvinar vestibulum bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nulla purus, gravida ac interdum ut, blandit eget ex. Duis a luctus dolor.

Integer auctor massa maximus nulla scelerisque accumsan. Aliquam ac malesuada ex. Pellentesque tortor magna, vulputate eu vulputate ut, venenatis ac lectus. Praesent ut lacinia sem. Mauris a lectus eget felis mollis feugiat. Quisque efficitur, mi ut semper pulvinar, urna urna blandit massa, eget tincidunt augue nulla vitae est.
\t<br><br><br>
\t</div>
\t
\t
\t
\t<div id=\"apropos\" class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
\t\t\t<p align=\"justify\">Spécialisés depuis plus de 50 ans dans l'organisation de voyages, nous vous proposons un choix innonbrable de destinations. Que ce soient vos désirs, nous nous engageons à rendre vos vancances innoubliables.  </p>

\t<br><br><center><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\"><button type=\"button\" class=\"btn btn-info\">Nous contacter</button></a></center>
\t</div>
\t
\t<div id=\"nouveautes\" class=\" col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-offset-1 col-xs-5 col-sm-5 col-md-5 col-lg-5\">
\t\t\tVoici tous les voyages que nous vous proposons <br><br>


\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["circuits"]) ? $context["circuits"] : $this->getContext($context, "circuits")));
        foreach ($context['_seq'] as $context["_key"] => $context["circuit"]) {
            // line 28
            echo "\t\t\t 
\t\t            <tr>
\t\t                <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "description", array()), "html", null, true);
            echo " : <br></a></td>
\t\t                <td><p align=\"justify\">Venez découvrir ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeDepart", array()), "html", null, true);
            echo ", pendant ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "dureeCircuit", array()), "html", null, true);
            echo " jours de voyage à travers le ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "paysDepart", array()), "html", null, true);
            echo ", pour terminer à ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeArrivee", array()), "html", null, true);
            echo ".</p></td>
\t\t            </tr>
            \t
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "      
          </div>
    
    
";
        
        $__internal_4c37c3ed00eb04615215b42f8a82e18f07263576676c21b078f63bf33325244f->leave($__internal_4c37c3ed00eb04615215b42f8a82e18f07263576676c21b078f63bf33325244f_prof);

    }

    public function getTemplateName()
    {
        return ":menu:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  82 => 31,  76 => 30,  72 => 28,  68 => 27,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <h3><center>Bienvenue dans l'agence TSP </center></h3><br>*/
/*    */
/* 	*/
/* 	<div id="photos" class="col-sm-offset-3 col-md-offset-3 col-lg-offset-3 col-xs-offset-3 col-xs-6 col-sm-6 col-md-6 col-lg-6">*/
/* 			Défilé photos*/
/* 			Praesent id fermentum lorem. Ut est lorem, fringilla at accumsan nec, euismod at nunc. Aenean mattis sollicitudin mattis. Nullam pulvinar vestibulum bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nulla purus, gravida ac interdum ut, blandit eget ex. Duis a luctus dolor.*/
/* */
/* Integer auctor massa maximus nulla scelerisque accumsan. Aliquam ac malesuada ex. Pellentesque tortor magna, vulputate eu vulputate ut, venenatis ac lectus. Praesent ut lacinia sem. Mauris a lectus eget felis mollis feugiat. Quisque efficitur, mi ut semper pulvinar, urna urna blandit massa, eget tincidunt augue nulla vitae est.*/
/* 	<br><br><br>*/
/* 	</div>*/
/* 	*/
/* 	*/
/* 	*/
/* 	<div id="apropos" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">*/
/* 			<p align="justify">Spécialisés depuis plus de 50 ans dans l'organisation de voyages, nous vous proposons un choix innonbrable de destinations. Que ce soient vos désirs, nous nous engageons à rendre vos vancances innoubliables.  </p>*/
/* */
/* 	<br><br><center><a href="{{ path('contact') }}"><button type="button" class="btn btn-info">Nous contacter</button></a></center>*/
/* 	</div>*/
/* 	*/
/* 	<div id="nouveautes" class=" col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-offset-1 col-xs-5 col-sm-5 col-md-5 col-lg-5">*/
/* 			Voici tous les voyages que nous vous proposons <br><br>*/
/* */
/* */
/* 			{% for circuit in circuits %}*/
/* 			 */
/* 		            <tr>*/
/* 		                <td><a href="{{ path('circuit_show', { 'id': circuit.id }) }}">{{ circuit.description }} : <br></a></td>*/
/* 		                <td><p align="justify">Venez découvrir {{ circuit.villeDepart }}, pendant {{ circuit.dureeCircuit }} jours de voyage à travers le {{ circuit.paysDepart }}, pour terminer à {{ circuit.villeArrivee }}.</p></td>*/
/* 		            </tr>*/
/*             	*/
/*           {%  endfor %}      */
/*           </div>*/
/*     */
/*     */
/* {% endblock %} {# main #}*/
/* */
