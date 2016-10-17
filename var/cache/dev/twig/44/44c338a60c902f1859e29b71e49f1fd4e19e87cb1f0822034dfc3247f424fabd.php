<?php

/* :circuit:show.html.twig */
class __TwigTemplate_62eec76ad4656200ea075aeb3dc774cfa2ab289c8243e3ee2991b2ec00466a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":circuit:show.html.twig", 1);
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
        $__internal_083695fceab8d5b539aa9bb44ddd268b0b09bcb926efdee9e47bea96bc0e48d4 = $this->env->getExtension("native_profiler");
        $__internal_083695fceab8d5b539aa9bb44ddd268b0b09bcb926efdee9e47bea96bc0e48d4->enter($__internal_083695fceab8d5b539aa9bb44ddd268b0b09bcb926efdee9e47bea96bc0e48d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":circuit:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_083695fceab8d5b539aa9bb44ddd268b0b09bcb926efdee9e47bea96bc0e48d4->leave($__internal_083695fceab8d5b539aa9bb44ddd268b0b09bcb926efdee9e47bea96bc0e48d4_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_d9d9ff0d759009000c138f3f868e27a7740f3aca912b9300cd96f5b4437cb104 = $this->env->getExtension("native_profiler");
        $__internal_d9d9ff0d759009000c138f3f868e27a7740f3aca912b9300cd96f5b4437cb104->enter($__internal_d9d9ff0d759009000c138f3f868e27a7740f3aca912b9300cd96f5b4437cb104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    \t
\t<div class=\"circuit\">
    \t<h2>
       \t\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "description", array()), "html", null, true);
        echo "
       \t</h2>
    \t
    \t<h3>Détails</h3>
\t\t<div class=\"circuit_details\">
\t\t
\t\t\t<p>Description: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "description", array()), "html", null, true);
        echo "</p>
\t\t\t
\t\t\t<p>Départ de ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "villeDepart", array()), "html", null, true);
        echo " pour ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "dureeCircuit", array()), "html", null, true);
        echo " j. de voyage à travers le ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "paysDepart", array()), "html", null, true);
        echo ", pour terminer à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "villeArrivee", array()), "html", null, true);
        echo ".</p>
\t\t\t
\t\t\t<h3>Étapes</h3>
\t\t \t<table>
\t\t \t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t    \t<th>Numéro</th>
\t\t\t\t\t\t<th>Ville</th>
\t\t\t\t\t\t<th>Nombre jours</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
 \t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "etapes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["etape"]) {
            // line 29
            echo "\t \t\t<tr>
\t\t\t   <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "numeroEtape", array()), "html", null, true);
            echo "</td>
\t\t\t   <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "villeEtape", array()), "html", null, true);
            echo "</td> 
\t\t\t   <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "nombreJours", array()), "html", null, true);
            echo " j.</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etape'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo " ";
        // line 35
        echo "\t\t\t</tbody>
\t\t\t</table>
\t\t</div> ";
        // line 38
        echo "\t\t
\t\t<div class=\"programmations\">
\t\t<h3>Programmations de ce circuit</h3>
\t\t<table>
\t\t \t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t    \t<th>Date de départ</th>
\t\t\t\t\t\t<th>Nombre de personnes</th>
\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "programmations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["programmation"]) {
            // line 51
            echo "\t\t\t<tr>
\t\t\t   <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["programmation"], "dateDepart", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t   <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["programmation"], "nombrePersonnes", array()), "html", null, true);
            echo "</td> 
\t\t\t   <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["programmation"], "prix", array()), "html", null, true);
            echo " euros</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programmation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t</table>
\t</div> ";
        // line 59
        echo "    <ul>
        <li>
            <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("circuit_index");
        echo "\">Retour à la liste</a>
                    ";
        // line 62
        if (((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")) == 2)) {
            // line 63
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("circuit_index");
            echo "\">Ajouter une étape</a>
            <a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("circuit_index");
            echo "\">Modifier la programmation</a>
\t\t    ";
        }
        // line 66
        echo "        </li>


    </ul>
\t</div> ";
        // line 71
        echo "    
";
        
        $__internal_d9d9ff0d759009000c138f3f868e27a7740f3aca912b9300cd96f5b4437cb104->leave($__internal_d9d9ff0d759009000c138f3f868e27a7740f3aca912b9300cd96f5b4437cb104_prof);

    }

    public function getTemplateName()
    {
        return ":circuit:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 71,  172 => 66,  167 => 64,  162 => 63,  160 => 62,  156 => 61,  152 => 59,  149 => 57,  140 => 54,  136 => 53,  132 => 52,  129 => 51,  125 => 50,  111 => 38,  107 => 35,  105 => 34,  96 => 32,  92 => 31,  88 => 30,  85 => 29,  81 => 28,  59 => 15,  54 => 13,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/*     	*/
/* 	<div class="circuit">*/
/*     	<h2>*/
/*        		{{ circuit.description }}*/
/*        	</h2>*/
/*     	*/
/*     	<h3>Détails</h3>*/
/* 		<div class="circuit_details">*/
/* 		*/
/* 			<p>Description: {{ circuit.description }}</p>*/
/* 			*/
/* 			<p>Départ de {{ circuit.villeDepart }} pour {{ circuit.dureeCircuit }} j. de voyage à travers le {{ circuit.paysDepart }}, pour terminer à {{ circuit.villeArrivee }}.</p>*/
/* 			*/
/* 			<h3>Étapes</h3>*/
/* 		 	<table>*/
/* 		 		<thead>*/
/* 					<tr>*/
/* 				    	<th>Numéro</th>*/
/* 						<th>Ville</th>*/
/* 						<th>Nombre jours</th>*/
/* 						<th></th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/*  			{% for etape in circuit.etapes %}*/
/* 	 		<tr>*/
/* 			   <td>{{ etape.numeroEtape }}</td>*/
/* 			   <td>{{ etape.villeEtape }}</td> */
/* 			   <td>{{ etape.nombreJours }} j.</td>*/
/* 			</tr>*/
/* 			{% endfor %} {# circuit.etapes #}*/
/* 			</tbody>*/
/* 			</table>*/
/* 		</div> {# circuit_details #}*/
/* 		*/
/* 		<div class="programmations">*/
/* 		<h3>Programmations de ce circuit</h3>*/
/* 		<table>*/
/* 		 		<thead>*/
/* 					<tr>*/
/* 				    	<th>Date de départ</th>*/
/* 						<th>Nombre de personnes</th>*/
/* 						<th>Prix</th>*/
/* 						<th></th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 		{%  for programmation in circuit.programmations %}*/
/* 			<tr>*/
/* 			   <td>{{ programmation.dateDepart|date('d-m-Y')  }}</td>*/
/* 			   <td>{{ programmation.nombrePersonnes }}</td> */
/* 			   <td>{{ programmation.prix }} euros</td>*/
/* 			</tr>*/
/* 		{% endfor %}*/
/* 		</table>*/
/* 	</div> {# programmations #}*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('circuit_index') }}">Retour à la liste</a>*/
/*                     {% if utilisateur == 2 %}*/
/*             <a href="{{ path('circuit_index') }}">Ajouter une étape</a>*/
/*             <a href="{{ path('circuit_index') }}">Modifier la programmation</a>*/
/* 		    {% endif %}*/
/*         </li>*/
/* */
/* */
/*     </ul>*/
/* 	</div> {# circuit #}*/
/*     */
/* {% endblock %}  {# main #}*/
/* */
