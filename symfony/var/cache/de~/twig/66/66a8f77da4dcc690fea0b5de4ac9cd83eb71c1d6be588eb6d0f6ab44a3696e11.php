<?php

/* product/new.html.twig */
class __TwigTemplate_0597ed7640b57e05d3bd2a7b086602d9aff73b0a23b162ba5ed73a9f6365c74d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/new.html.twig", 1);
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
        $__internal_a33d95e2ad0bd2f0e027c3a39f27267ab39ae0bb6741c9f60bca471c02181b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33d95e2ad0bd2f0e027c3a39f27267ab39ae0bb6741c9f60bca471c02181b22->enter($__internal_a33d95e2ad0bd2f0e027c3a39f27267ab39ae0bb6741c9f60bca471c02181b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $__internal_cec821188b96cf80bed74168571a5b09a30babd475dd67e256d685822128f987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec821188b96cf80bed74168571a5b09a30babd475dd67e256d685822128f987->enter($__internal_cec821188b96cf80bed74168571a5b09a30babd475dd67e256d685822128f987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a33d95e2ad0bd2f0e027c3a39f27267ab39ae0bb6741c9f60bca471c02181b22->leave($__internal_a33d95e2ad0bd2f0e027c3a39f27267ab39ae0bb6741c9f60bca471c02181b22_prof);

        
        $__internal_cec821188b96cf80bed74168571a5b09a30babd475dd67e256d685822128f987->leave($__internal_cec821188b96cf80bed74168571a5b09a30babd475dd67e256d685822128f987_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a61a307349009714dbaae27134b867c66e635f8f4aca76126e2398ba8a46258f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61a307349009714dbaae27134b867c66e635f8f4aca76126e2398ba8a46258f->enter($__internal_a61a307349009714dbaae27134b867c66e635f8f4aca76126e2398ba8a46258f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_387c1b24c2fdc4252bc69e668258db5cb3f26c5ef6c4e448b9ca193dc6e0709e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387c1b24c2fdc4252bc69e668258db5cb3f26c5ef6c4e448b9ca193dc6e0709e->enter($__internal_387c1b24c2fdc4252bc69e668258db5cb3f26c5ef6c4e448b9ca193dc6e0709e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_387c1b24c2fdc4252bc69e668258db5cb3f26c5ef6c4e448b9ca193dc6e0709e->leave($__internal_387c1b24c2fdc4252bc69e668258db5cb3f26c5ef6c4e448b9ca193dc6e0709e_prof);

        
        $__internal_a61a307349009714dbaae27134b867c66e635f8f4aca76126e2398ba8a46258f->leave($__internal_a61a307349009714dbaae27134b867c66e635f8f4aca76126e2398ba8a46258f_prof);

    }

    public function getTemplateName()
    {
        return "product/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Product creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "product/new.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/product/new.html.twig");
    }
}
