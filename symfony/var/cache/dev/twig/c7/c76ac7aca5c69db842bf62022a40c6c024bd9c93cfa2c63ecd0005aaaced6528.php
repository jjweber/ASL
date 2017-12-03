<?php

/* aslViews/index.html.twig */
class __TwigTemplate_c4e492e5310256b19498137f5ea7a55f79390190a2b0bacd102d0adbb4d51c6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "aslViews/index.html.twig", 1);
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
        $__internal_1715f55a475319fae484a202b6147902c3ef7e2a8b154e26263a94db97c5b240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1715f55a475319fae484a202b6147902c3ef7e2a8b154e26263a94db97c5b240->enter($__internal_1715f55a475319fae484a202b6147902c3ef7e2a8b154e26263a94db97c5b240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aslViews/index.html.twig"));

        $__internal_9b1d39eb65f7309408b5a4a7ef82a961facb811adb1f9b209124c819802ef12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1d39eb65f7309408b5a4a7ef82a961facb811adb1f9b209124c819802ef12e->enter($__internal_9b1d39eb65f7309408b5a4a7ef82a961facb811adb1f9b209124c819802ef12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aslViews/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1715f55a475319fae484a202b6147902c3ef7e2a8b154e26263a94db97c5b240->leave($__internal_1715f55a475319fae484a202b6147902c3ef7e2a8b154e26263a94db97c5b240_prof);

        
        $__internal_9b1d39eb65f7309408b5a4a7ef82a961facb811adb1f9b209124c819802ef12e->leave($__internal_9b1d39eb65f7309408b5a4a7ef82a961facb811adb1f9b209124c819802ef12e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a92d94470780dd0f1f81ad258b16d93ca048991bdbd02e564551a46816f998fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a92d94470780dd0f1f81ad258b16d93ca048991bdbd02e564551a46816f998fd->enter($__internal_a92d94470780dd0f1f81ad258b16d93ca048991bdbd02e564551a46816f998fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b964b43d05bc195aec007b7604e986a73f17f3e6625fd7c834495e0ebfbc831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b964b43d05bc195aec007b7604e986a73f17f3e6625fd7c834495e0ebfbc831->enter($__internal_6b964b43d05bc195aec007b7604e986a73f17f3e6625fd7c834495e0ebfbc831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"starter-template\">
        <h1>Welcome Page</h1>
        <p class=\"lead\">This is the landing page.<br> Welcome and enjoy.</p>
    </div>
";
        
        $__internal_6b964b43d05bc195aec007b7604e986a73f17f3e6625fd7c834495e0ebfbc831->leave($__internal_6b964b43d05bc195aec007b7604e986a73f17f3e6625fd7c834495e0ebfbc831_prof);

        
        $__internal_a92d94470780dd0f1f81ad258b16d93ca048991bdbd02e564551a46816f998fd->leave($__internal_a92d94470780dd0f1f81ad258b16d93ca048991bdbd02e564551a46816f998fd_prof);

    }

    public function getTemplateName()
    {
        return "aslViews/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"starter-template\">
        <h1>Welcome Page</h1>
        <p class=\"lead\">This is the landing page.<br> Welcome and enjoy.</p>
    </div>
{% endblock body %}", "aslViews/index.html.twig", "/Users/jweber0169/Documents/asl/app/Resources/views/aslViews/index.html.twig");
    }
}
