<?php

/* product/edit.html.twig */
class __TwigTemplate_a276b091e2785b3026050b668c68b22f117200170a66998494d91e1f3e0721f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/edit.html.twig", 1);
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
        $__internal_7ba50f39527e455b3b527b52fc9cc39332ff80c0b8fc1173829ccad7231f0dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba50f39527e455b3b527b52fc9cc39332ff80c0b8fc1173829ccad7231f0dd6->enter($__internal_7ba50f39527e455b3b527b52fc9cc39332ff80c0b8fc1173829ccad7231f0dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $__internal_459cf0dacc8a5dac4179881e5183a9667cf2b4f980334d86fae3920f8a7af41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459cf0dacc8a5dac4179881e5183a9667cf2b4f980334d86fae3920f8a7af41c->enter($__internal_459cf0dacc8a5dac4179881e5183a9667cf2b4f980334d86fae3920f8a7af41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ba50f39527e455b3b527b52fc9cc39332ff80c0b8fc1173829ccad7231f0dd6->leave($__internal_7ba50f39527e455b3b527b52fc9cc39332ff80c0b8fc1173829ccad7231f0dd6_prof);

        
        $__internal_459cf0dacc8a5dac4179881e5183a9667cf2b4f980334d86fae3920f8a7af41c->leave($__internal_459cf0dacc8a5dac4179881e5183a9667cf2b4f980334d86fae3920f8a7af41c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a74b295e63507ace533ff67dff128aae5b11328d4dcae4a1bc95581535e5b648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74b295e63507ace533ff67dff128aae5b11328d4dcae4a1bc95581535e5b648->enter($__internal_a74b295e63507ace533ff67dff128aae5b11328d4dcae4a1bc95581535e5b648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8dfd0b61904cd4e839a77bf4ccd106bbae67dec013e4835e4f34dac130d5ef47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfd0b61904cd4e839a77bf4ccd106bbae67dec013e4835e4f34dac130d5ef47->enter($__internal_8dfd0b61904cd4e839a77bf4ccd106bbae67dec013e4835e4f34dac130d5ef47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8dfd0b61904cd4e839a77bf4ccd106bbae67dec013e4835e4f34dac130d5ef47->leave($__internal_8dfd0b61904cd4e839a77bf4ccd106bbae67dec013e4835e4f34dac130d5ef47_prof);

        
        $__internal_a74b295e63507ace533ff67dff128aae5b11328d4dcae4a1bc95581535e5b648->leave($__internal_a74b295e63507ace533ff67dff128aae5b11328d4dcae4a1bc95581535e5b648_prof);

    }

    public function getTemplateName()
    {
        return "product/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Product edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "product/edit.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/product/edit.html.twig");
    }
}
