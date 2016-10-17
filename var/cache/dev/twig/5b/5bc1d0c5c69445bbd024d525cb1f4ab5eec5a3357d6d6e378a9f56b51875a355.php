<?php

/* :circuit:brouillon.html.twig */
class __TwigTemplate_09fb6004715d1738c3fb2e669b116808cecf7b26e93151abcb6cc39c17d7ae1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":circuit:brouillon.html.twig", 1);
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
        $__internal_fc43d1114ecd6b3d8e9a5c1e0a83b24a06f4f2d13eb3719e67d9144ba6f90d3c = $this->env->getExtension("native_profiler");
        $__internal_fc43d1114ecd6b3d8e9a5c1e0a83b24a06f4f2d13eb3719e67d9144ba6f90d3c->enter($__internal_fc43d1114ecd6b3d8e9a5c1e0a83b24a06f4f2d13eb3719e67d9144ba6f90d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":circuit:brouillon.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc43d1114ecd6b3d8e9a5c1e0a83b24a06f4f2d13eb3719e67d9144ba6f90d3c->leave($__internal_fc43d1114ecd6b3d8e9a5c1e0a83b24a06f4f2d13eb3719e67d9144ba6f90d3c_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f8a9b318c3926805637dd17ce39900fecd9d1b1e4a32e5b1fdd1dcbc2139a779 = $this->env->getExtension("native_profiler");
        $__internal_f8a9b318c3926805637dd17ce39900fecd9d1b1e4a32e5b1fdd1dcbc2139a779->enter($__internal_f8a9b318c3926805637dd17ce39900fecd9d1b1e4a32e5b1fdd1dcbc2139a779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1>Circuits en cours de création</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Paysdepart</th>
                <th>Villedepart</th>
                <th>Villearrivee</th>
                <th>Dureecircuit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brouillons"]) ? $context["brouillons"] : $this->getContext($context, "brouillons")));
        foreach ($context['_seq'] as $context["_key"] => $context["circuit"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "paysDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeArrivee", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "dureeCircuit", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_brouillon_etape", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">Ajouter des étapes</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_brouillon_prog", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">Progrmmer le circuit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
    
    <p><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("nouveau_voyage");
        echo "\">Ajouter un nouveau circuit</a></p>
";
        
        $__internal_f8a9b318c3926805637dd17ce39900fecd9d1b1e4a32e5b1fdd1dcbc2139a779->leave($__internal_f8a9b318c3926805637dd17ce39900fecd9d1b1e4a32e5b1fdd1dcbc2139a779_prof);

    }

    public function getTemplateName()
    {
        return ":circuit:brouillon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  113 => 41,  101 => 35,  93 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <h1>Circuits en cours de création</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Description</th>*/
/*                 <th>Paysdepart</th>*/
/*                 <th>Villedepart</th>*/
/*                 <th>Villearrivee</th>*/
/*                 <th>Dureecircuit</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for circuit in brouillons %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('circuit_show', { 'id': circuit.id }) }}">{{ circuit.id }}</a></td>*/
/*                 <td>{{ circuit.description }}</td>*/
/*                 <td>{{ circuit.paysDepart }}</td>*/
/*                 <td>{{ circuit.villeDepart }}</td>*/
/*                 <td>{{ circuit.villeArrivee }}</td>*/
/*                 <td>{{ circuit.dureeCircuit }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('circuit_brouillon_etape', { 'id': circuit.id }) }}">Ajouter des étapes</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('circuit_brouillon_prog', { 'id': circuit.id }) }}">Progrmmer le circuit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     */
/*     <p><a href="{{ path('nouveau_voyage')}}">Ajouter un nouveau circuit</a></p>*/
/* {% endblock %} {# main #}*/
/* */
