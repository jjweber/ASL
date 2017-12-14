<?php

/* templates/hello.html.twig */
class __TwigTemplate_5f61e25344a7c38ff0dfec70865bdfd8536482ff0cb7537593f5334a2bf97fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "templates/hello.html.twig", 1);
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
        $__internal_4551c68165028ea451a167ba540e118930e288c91bb9db64b85be5267a97c5ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4551c68165028ea451a167ba540e118930e288c91bb9db64b85be5267a97c5ea->enter($__internal_4551c68165028ea451a167ba540e118930e288c91bb9db64b85be5267a97c5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/hello.html.twig"));

        $__internal_e8f7e466820a9e90470b49e3a1392aa090994103a51cd9ddc1fbffc329745acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f7e466820a9e90470b49e3a1392aa090994103a51cd9ddc1fbffc329745acf->enter($__internal_e8f7e466820a9e90470b49e3a1392aa090994103a51cd9ddc1fbffc329745acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/hello.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4551c68165028ea451a167ba540e118930e288c91bb9db64b85be5267a97c5ea->leave($__internal_4551c68165028ea451a167ba540e118930e288c91bb9db64b85be5267a97c5ea_prof);

        
        $__internal_e8f7e466820a9e90470b49e3a1392aa090994103a51cd9ddc1fbffc329745acf->leave($__internal_e8f7e466820a9e90470b49e3a1392aa090994103a51cd9ddc1fbffc329745acf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eec35fa71f7630f73709a31490f4bedb0708450ac4a24b325aa34d15d79576e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eec35fa71f7630f73709a31490f4bedb0708450ac4a24b325aa34d15d79576e->enter($__internal_9eec35fa71f7630f73709a31490f4bedb0708450ac4a24b325aa34d15d79576e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14f601e748b2662d9559346451e8952fd6e176a5b141d775a1965f43d8e9c59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f601e748b2662d9559346451e8952fd6e176a5b141d775a1965f43d8e9c59a->enter($__internal_14f601e748b2662d9559346451e8952fd6e176a5b141d775a1965f43d8e9c59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Hello Page</h1>
            <p class=\"lead\">This is the <b>";
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["name"] ?? $this->getContext($context, "name"))), "html", null, true);
        echo "</b> page.</p><br>
            <hr class=\"my-4\">
            <h2>Hello World!</h2>
        </div>
    </div>

";
        
        $__internal_14f601e748b2662d9559346451e8952fd6e176a5b141d775a1965f43d8e9c59a->leave($__internal_14f601e748b2662d9559346451e8952fd6e176a5b141d775a1965f43d8e9c59a_prof);

        
        $__internal_9eec35fa71f7630f73709a31490f4bedb0708450ac4a24b325aa34d15d79576e->leave($__internal_9eec35fa71f7630f73709a31490f4bedb0708450ac4a24b325aa34d15d79576e_prof);

    }

    public function getTemplateName()
    {
        return "templates/hello.html.twig";
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
            <h1 class=\"display-3\">Hello Page</h1>
            <p class=\"lead\">This is the <b>{{ name|upper }}</b> page.</p><br>
            <hr class=\"my-4\">
            <h2>Hello World!</h2>
        </div>
    </div>

{% endblock body %}", "templates/hello.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/templates/hello.html.twig");
    }
}
