<?php

/* templates/index.html.twig */
class __TwigTemplate_f32a3a8f61019410a5f62cfbacbe82fcfda41a178df8e53e041100429b76ef7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "templates/index.html.twig", 1);
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
        $__internal_fb617aff62e6231550ab16527d681de093fd4854845f78df3bffdb87d4e7efa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb617aff62e6231550ab16527d681de093fd4854845f78df3bffdb87d4e7efa9->enter($__internal_fb617aff62e6231550ab16527d681de093fd4854845f78df3bffdb87d4e7efa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/index.html.twig"));

        $__internal_777a03af55d4cc64a147abf3e52b721934c0ae7672e80e493358d5c3b3be6bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777a03af55d4cc64a147abf3e52b721934c0ae7672e80e493358d5c3b3be6bb9->enter($__internal_777a03af55d4cc64a147abf3e52b721934c0ae7672e80e493358d5c3b3be6bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb617aff62e6231550ab16527d681de093fd4854845f78df3bffdb87d4e7efa9->leave($__internal_fb617aff62e6231550ab16527d681de093fd4854845f78df3bffdb87d4e7efa9_prof);

        
        $__internal_777a03af55d4cc64a147abf3e52b721934c0ae7672e80e493358d5c3b3be6bb9->leave($__internal_777a03af55d4cc64a147abf3e52b721934c0ae7672e80e493358d5c3b3be6bb9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0b05276d95a1228d124dca9182b6a7fd6d6e3057bec900da90b0c4ba9517db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b05276d95a1228d124dca9182b6a7fd6d6e3057bec900da90b0c4ba9517db8->enter($__internal_c0b05276d95a1228d124dca9182b6a7fd6d6e3057bec900da90b0c4ba9517db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa7beec58ca591d6a78dc0411871b4ae12747cc387e29a3cae7edc95f87d970b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7beec58ca591d6a78dc0411871b4ae12747cc387e29a3cae7edc95f87d970b->enter($__internal_aa7beec58ca591d6a78dc0411871b4ae12747cc387e29a3cae7edc95f87d970b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div id=\"wrapper\">
        <div id=\"container\">

            Your application is ready. Here is your form.
";
        // line 14
        echo "        </div>
    </div>

";
        
        $__internal_aa7beec58ca591d6a78dc0411871b4ae12747cc387e29a3cae7edc95f87d970b->leave($__internal_aa7beec58ca591d6a78dc0411871b4ae12747cc387e29a3cae7edc95f87d970b_prof);

        
        $__internal_c0b05276d95a1228d124dca9182b6a7fd6d6e3057bec900da90b0c4ba9517db8->leave($__internal_c0b05276d95a1228d124dca9182b6a7fd6d6e3057bec900da90b0c4ba9517db8_prof);

    }

    public function getTemplateName()
    {
        return "templates/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
{#
            {{ form_errors(form) }}
            {{ form_start(form,{\"method\":\"POST\"}) }}
            {{ form_end(form) }}
#}
        </div>
    </div>

{% endblock body %}", "templates/index.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/templates/index.html.twig");
    }
}
