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
        $__internal_d550219e932ce2dbadb9efff40bf36c4008c0452b48848a049f372a2a4cea86f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d550219e932ce2dbadb9efff40bf36c4008c0452b48848a049f372a2a4cea86f->enter($__internal_d550219e932ce2dbadb9efff40bf36c4008c0452b48848a049f372a2a4cea86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/registerForm.html.twig"));

        $__internal_5c71f6d0f718fee648f19e1507b65bf5c1c7b0b499a3301e688c80d08d432014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c71f6d0f718fee648f19e1507b65bf5c1c7b0b499a3301e688c80d08d432014->enter($__internal_5c71f6d0f718fee648f19e1507b65bf5c1c7b0b499a3301e688c80d08d432014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/registerForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d550219e932ce2dbadb9efff40bf36c4008c0452b48848a049f372a2a4cea86f->leave($__internal_d550219e932ce2dbadb9efff40bf36c4008c0452b48848a049f372a2a4cea86f_prof);

        
        $__internal_5c71f6d0f718fee648f19e1507b65bf5c1c7b0b499a3301e688c80d08d432014->leave($__internal_5c71f6d0f718fee648f19e1507b65bf5c1c7b0b499a3301e688c80d08d432014_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b51221050b6616499da72f0c4819eacb13d403eae88af8dbc434697e3f882941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51221050b6616499da72f0c4819eacb13d403eae88af8dbc434697e3f882941->enter($__internal_b51221050b6616499da72f0c4819eacb13d403eae88af8dbc434697e3f882941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8029b79f16f0195292643c4a35bed6a8283795831285efaa51cdf4281f8b80b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8029b79f16f0195292643c4a35bed6a8283795831285efaa51cdf4281f8b80b5->enter($__internal_8029b79f16f0195292643c4a35bed6a8283795831285efaa51cdf4281f8b80b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8029b79f16f0195292643c4a35bed6a8283795831285efaa51cdf4281f8b80b5->leave($__internal_8029b79f16f0195292643c4a35bed6a8283795831285efaa51cdf4281f8b80b5_prof);

        
        $__internal_b51221050b6616499da72f0c4819eacb13d403eae88af8dbc434697e3f882941->leave($__internal_b51221050b6616499da72f0c4819eacb13d403eae88af8dbc434697e3f882941_prof);

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
