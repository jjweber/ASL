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
        $__internal_75be1fd1cffaa3a29a2e9e14012e66bba7f44b4c1e03c31320705b95a628299f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75be1fd1cffaa3a29a2e9e14012e66bba7f44b4c1e03c31320705b95a628299f->enter($__internal_75be1fd1cffaa3a29a2e9e14012e66bba7f44b4c1e03c31320705b95a628299f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/index.html.twig"));

        $__internal_2d484d7cd251531beafe9480ab718c97a25038dab807f5c7fab6ccd8d4ca5a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d484d7cd251531beafe9480ab718c97a25038dab807f5c7fab6ccd8d4ca5a54->enter($__internal_2d484d7cd251531beafe9480ab718c97a25038dab807f5c7fab6ccd8d4ca5a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75be1fd1cffaa3a29a2e9e14012e66bba7f44b4c1e03c31320705b95a628299f->leave($__internal_75be1fd1cffaa3a29a2e9e14012e66bba7f44b4c1e03c31320705b95a628299f_prof);

        
        $__internal_2d484d7cd251531beafe9480ab718c97a25038dab807f5c7fab6ccd8d4ca5a54->leave($__internal_2d484d7cd251531beafe9480ab718c97a25038dab807f5c7fab6ccd8d4ca5a54_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b1fb1e98e5cc7241321489b62ace4b99dc6e03ff2864a667659572a1ed476d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1fb1e98e5cc7241321489b62ace4b99dc6e03ff2864a667659572a1ed476d4->enter($__internal_3b1fb1e98e5cc7241321489b62ace4b99dc6e03ff2864a667659572a1ed476d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe2fa5b7ad26a64e949d40d789dd08311f5d4a98c35e0b43ac753965463ccdaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2fa5b7ad26a64e949d40d789dd08311f5d4a98c35e0b43ac753965463ccdaa->enter($__internal_fe2fa5b7ad26a64e949d40d789dd08311f5d4a98c35e0b43ac753965463ccdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Welcome</h1>
            <p class=\"lead\">This is the <b>";
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</b> page.</p><br>
            <hr class=\"my-4\">
            <p><strong>Welcome and enjoy.</strong></p>
        </div>
    </div>
";
        
        $__internal_fe2fa5b7ad26a64e949d40d789dd08311f5d4a98c35e0b43ac753965463ccdaa->leave($__internal_fe2fa5b7ad26a64e949d40d789dd08311f5d4a98c35e0b43ac753965463ccdaa_prof);

        
        $__internal_3b1fb1e98e5cc7241321489b62ace4b99dc6e03ff2864a667659572a1ed476d4->leave($__internal_3b1fb1e98e5cc7241321489b62ace4b99dc6e03ff2864a667659572a1ed476d4_prof);

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
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Welcome</h1>
            <p class=\"lead\">This is the <b>{{ name|upper }}</b> page.</p><br>
            <hr class=\"my-4\">
            <p><strong>Welcome and enjoy.</strong></p>
        </div>
    </div>
{% endblock body %}", "templates/index.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/templates/index.html.twig");
    }
}
