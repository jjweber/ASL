<?php

/* templates/registerForm.html.twig */
class __TwigTemplate_7e573783472f114dad752c1ef48af51e0be9bec04925d2cc005c7eeaa8b76593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "templates/registerForm.html.twig", 1);
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
        $__internal_e72041b12e0bd6fb5b4f397d59ea0efd40f09df731bdaf4d2d1d30717b588ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72041b12e0bd6fb5b4f397d59ea0efd40f09df731bdaf4d2d1d30717b588ac4->enter($__internal_e72041b12e0bd6fb5b4f397d59ea0efd40f09df731bdaf4d2d1d30717b588ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/registerForm.html.twig"));

        $__internal_cedc9edbe2bca1304fbb5abb9e2e23455de1cfa90127f78bfe38ff9ba1887d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cedc9edbe2bca1304fbb5abb9e2e23455de1cfa90127f78bfe38ff9ba1887d90->enter($__internal_cedc9edbe2bca1304fbb5abb9e2e23455de1cfa90127f78bfe38ff9ba1887d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/registerForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e72041b12e0bd6fb5b4f397d59ea0efd40f09df731bdaf4d2d1d30717b588ac4->leave($__internal_e72041b12e0bd6fb5b4f397d59ea0efd40f09df731bdaf4d2d1d30717b588ac4_prof);

        
        $__internal_cedc9edbe2bca1304fbb5abb9e2e23455de1cfa90127f78bfe38ff9ba1887d90->leave($__internal_cedc9edbe2bca1304fbb5abb9e2e23455de1cfa90127f78bfe38ff9ba1887d90_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98e161a450445083e26918d3c956e408a2c3f71137cdeac289870595e20b76b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e161a450445083e26918d3c956e408a2c3f71137cdeac289870595e20b76b7->enter($__internal_98e161a450445083e26918d3c956e408a2c3f71137cdeac289870595e20b76b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7d7e8f46d5703331e2b5c8304c306dcbec430a4262519373c74abdc25351526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d7e8f46d5703331e2b5c8304c306dcbec430a4262519373c74abdc25351526->enter($__internal_f7d7e8f46d5703331e2b5c8304c306dcbec430a4262519373c74abdc25351526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div id=\"wrapper\">
        <div id=\"container\">

            Your application is ready. Here is your form.

            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
    </div>

";
        
        $__internal_f7d7e8f46d5703331e2b5c8304c306dcbec430a4262519373c74abdc25351526->leave($__internal_f7d7e8f46d5703331e2b5c8304c306dcbec430a4262519373c74abdc25351526_prof);

        
        $__internal_98e161a450445083e26918d3c956e408a2c3f71137cdeac289870595e20b76b7->leave($__internal_98e161a450445083e26918d3c956e408a2c3f71137cdeac289870595e20b76b7_prof);

    }

    public function getTemplateName()
    {
        return "templates/registerForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  61 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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

    <div id=\"wrapper\">
        <div id=\"container\">

            Your application is ready. Here is your form.

            {{ form_errors(form) }}
            {{ form_start(form,{\"method\":\"POST\"}) }}
            {{ form_end(form) }}

        </div>
    </div>

{% endblock body %}", "templates/registerForm.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/templates/registerForm.html.twig");
    }
}
