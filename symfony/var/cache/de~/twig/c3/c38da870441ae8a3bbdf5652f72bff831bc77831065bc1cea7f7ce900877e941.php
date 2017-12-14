<?php

/* product/show.html.twig */
class __TwigTemplate_0ce4d8ee284d503f9bee5888efaf43d1ec89fe3019e0037ed2e6d2c5c6367d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0e98aa3d797d1e0de9090fd3d057ec20b0568c6cf362f1ec3755605b6f09293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e98aa3d797d1e0de9090fd3d057ec20b0568c6cf362f1ec3755605b6f09293->enter($__internal_c0e98aa3d797d1e0de9090fd3d057ec20b0568c6cf362f1ec3755605b6f09293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_7cbf02a462fbe8736b8c2d999250d7356f1e99c302a05066b7d6ebe66ff6c065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbf02a462fbe8736b8c2d999250d7356f1e99c302a05066b7d6ebe66ff6c065->enter($__internal_7cbf02a462fbe8736b8c2d999250d7356f1e99c302a05066b7d6ebe66ff6c065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0e98aa3d797d1e0de9090fd3d057ec20b0568c6cf362f1ec3755605b6f09293->leave($__internal_c0e98aa3d797d1e0de9090fd3d057ec20b0568c6cf362f1ec3755605b6f09293_prof);

        
        $__internal_7cbf02a462fbe8736b8c2d999250d7356f1e99c302a05066b7d6ebe66ff6c065->leave($__internal_7cbf02a462fbe8736b8c2d999250d7356f1e99c302a05066b7d6ebe66ff6c065_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_63dd1e71e38ae84817e268b51c1b122156b9a5100fcedad252ee98233cf2bbee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63dd1e71e38ae84817e268b51c1b122156b9a5100fcedad252ee98233cf2bbee->enter($__internal_63dd1e71e38ae84817e268b51c1b122156b9a5100fcedad252ee98233cf2bbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca47d48cc9641aeb786cc23d68d6879546396d90c0195099a85f9844ac7b9814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca47d48cc9641aeb786cc23d68d6879546396d90c0195099a85f9844ac7b9814->enter($__internal_ca47d48cc9641aeb786cc23d68d6879546396d90c0195099a85f9844ac7b9814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sku</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "sku", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ca47d48cc9641aeb786cc23d68d6879546396d90c0195099a85f9844ac7b9814->leave($__internal_ca47d48cc9641aeb786cc23d68d6879546396d90c0195099a85f9844ac7b9814_prof);

        
        $__internal_63dd1e71e38ae84817e268b51c1b122156b9a5100fcedad252ee98233cf2bbee->leave($__internal_63dd1e71e38ae84817e268b51c1b122156b9a5100fcedad252ee98233cf2bbee_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Product</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ product.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ product.name }}</td>
            </tr>
            <tr>
                <th>Sku</th>
                <td>{{ product.sku }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ product.price }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('product_edit', { 'id': product.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "product/show.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/product/show.html.twig");
    }
}
