<?php

/* :circuit:circuit.html.twig */
class __TwigTemplate_0d45bdcc5894b0416aa9189ceb8e15e1b74cd3224e3da8bd2b94ac9d7c137b87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":circuit:circuit.html.twig", 1);
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
        $__internal_c94b83bda6626c998fbc1fba660ab2a3db0ced2a32b8b69491d93c314efd724f = $this->env->getExtension("native_profiler");
        $__internal_c94b83bda6626c998fbc1fba660ab2a3db0ced2a32b8b69491d93c314efd724f->enter($__internal_c94b83bda6626c998fbc1fba660ab2a3db0ced2a32b8b69491d93c314efd724f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":circuit:circuit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c94b83bda6626c998fbc1fba660ab2a3db0ced2a32b8b69491d93c314efd724f->leave($__internal_c94b83bda6626c998fbc1fba660ab2a3db0ced2a32b8b69491d93c314efd724f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_71a94c487e7fd4a0fd07f1170f1d3d1a8451c75469bd36e9c2f3508e55b9f900 = $this->env->getExtension("native_profiler");
        $__internal_71a94c487e7fd4a0fd07f1170f1d3d1a8451c75469bd36e9c2f3508e55b9f900->enter($__internal_71a94c487e7fd4a0fd07f1170f1d3d1a8451c75469bd36e9c2f3508e55b9f900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h3>Nos circuits<br><br></h3>
    <h5>Voici un récapitulatif de l'ensemble des circuits qui vous sont proposés<br><br></h5>
    ";
        // line 6
        if (((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")) == 0)) {
            // line 7
            echo "    <p> Pour réserver un voyage, merci de commencer par vous connecter.<br> </p>
    ";
        }
        // line 9
        echo "
    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Pays de départ</th>
                <th>Ville de départ</th>
                <th>Ville d'arrivée</th>
                <th>Duree du circuit</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["circuits"]) ? $context["circuits"] : $this->getContext($context, "circuits")));
        foreach ($context['_seq'] as $context["_key"] => $context["circuit"]) {
            // line 23
            echo "            <tr>
              
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "paysDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeArrivee", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "dureeCircuit", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">En savoir plus sur le voyage</a>
                </td>
                <td>
                    ";
            // line 34
            if (((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")) == 1)) {
                // line 35
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reserver", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-warning\">Réserver ce voyage</button></a>
                    ";
            } elseif ((            // line 36
(isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")) == 2)) {
                // line 37
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reserver", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-warning\">Modifier ce voyage</button></a>
                    ";
            }
            // line 39
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
     ";
        // line 44
        if (((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")) == 2)) {
            // line 45
            echo "    <p><a href=\"";
            echo $this->env->getExtension('routing')->getPath("nouveau_voyage");
            echo "\"><button class=\"btn btn-info\">Ajouter un nouveau circuit</button></a></p>
    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if (((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")) == 0)) {
            // line 49
            echo "    <p> <br> Pour réserver un voyage, merci de commencer par vous connecter.</p>
    ";
        }
        
        $__internal_71a94c487e7fd4a0fd07f1170f1d3d1a8451c75469bd36e9c2f3508e55b9f900->leave($__internal_71a94c487e7fd4a0fd07f1170f1d3d1a8451c75469bd36e9c2f3508e55b9f900_prof);

    }

    public function getTemplateName()
    {
        return ":circuit:circuit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 49,  138 => 48,  135 => 47,  129 => 45,  127 => 44,  123 => 42,  115 => 39,  109 => 37,  107 => 36,  102 => 35,  100 => 34,  94 => 31,  89 => 29,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  69 => 23,  65 => 22,  50 => 9,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <h3>Nos circuits<br><br></h3>*/
/*     <h5>Voici un récapitulatif de l'ensemble des circuits qui vous sont proposés<br><br></h5>*/
/*     {% if utilisateur == 0 %}*/
/*     <p> Pour réserver un voyage, merci de commencer par vous connecter.<br> </p>*/
/*     {% endif %}*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <th>Pays de départ</th>*/
/*                 <th>Ville de départ</th>*/
/*                 <th>Ville d'arrivée</th>*/
/*                 <th>Duree du circuit</th>*/
/*                 <th> </th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for circuit in circuits %}*/
/*             <tr>*/
/*               */
/*                 <td>{{ circuit.description }}</td>*/
/*                 <td>{{ circuit.paysDepart }}</td>*/
/*                 <td>{{ circuit.villeDepart }}</td>*/
/*                 <td>{{ circuit.villeArrivee }}</td>*/
/*                 <td>{{ circuit.dureeCircuit }}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('circuit_show', { 'id': circuit.id }) }}">En savoir plus sur le voyage</a>*/
/*                 </td>*/
/*                 <td>*/
/*                     {% if utilisateur == 1 %}*/
/*                         <a href="{{ path('reserver', { 'id': circuit.id })}}"><button class="btn btn-warning">Réserver ce voyage</button></a>*/
/*                     {% elseif utilisateur == 2 %}*/
/*                         <a href="{{ path('reserver', { 'id': circuit.id })}}"><button class="btn btn-warning">Modifier ce voyage</button></a>*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*      {% if utilisateur == 2 %}*/
/*     <p><a href="{{ path('nouveau_voyage')}}"><button class="btn btn-info">Ajouter un nouveau circuit</button></a></p>*/
/*     {% endif %}*/
/* */
/*     {% if utilisateur == 0 %}*/
/*     <p> <br> Pour réserver un voyage, merci de commencer par vous connecter.</p>*/
/*     {% endif %}*/
/* {% endblock %} */
/* */
