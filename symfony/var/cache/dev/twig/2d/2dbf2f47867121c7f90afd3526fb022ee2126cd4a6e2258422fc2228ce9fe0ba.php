<?php

/* templates/hello.html.twig */
class __TwigTemplate_e015985d64aa7c9dec9c75055a3d2ccc831f62febb461a6777574366b609132d extends Twig_Template
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
        $__internal_6c8c88f1a75384e1e66c4cf3457fd13896ee037f13c2ace2cc787243cdc6f226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8c88f1a75384e1e66c4cf3457fd13896ee037f13c2ace2cc787243cdc6f226->enter($__internal_6c8c88f1a75384e1e66c4cf3457fd13896ee037f13c2ace2cc787243cdc6f226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/hello.html.twig"));

        $__internal_e4bc0060b92288c03085dd4b45d12ea51f52e8134fd6ad56a95e16a84eb840a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bc0060b92288c03085dd4b45d12ea51f52e8134fd6ad56a95e16a84eb840a7->enter($__internal_e4bc0060b92288c03085dd4b45d12ea51f52e8134fd6ad56a95e16a84eb840a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/hello.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c8c88f1a75384e1e66c4cf3457fd13896ee037f13c2ace2cc787243cdc6f226->leave($__internal_6c8c88f1a75384e1e66c4cf3457fd13896ee037f13c2ace2cc787243cdc6f226_prof);

        
        $__internal_e4bc0060b92288c03085dd4b45d12ea51f52e8134fd6ad56a95e16a84eb840a7->leave($__internal_e4bc0060b92288c03085dd4b45d12ea51f52e8134fd6ad56a95e16a84eb840a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d12646c3c6c0106d1f0ac4f8aea76fe4821eda4777eb419860c402ef34b3d28d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12646c3c6c0106d1f0ac4f8aea76fe4821eda4777eb419860c402ef34b3d28d->enter($__internal_d12646c3c6c0106d1f0ac4f8aea76fe4821eda4777eb419860c402ef34b3d28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7975ba9eed584a025eb99ec1d4ae8020a5b51bfb98db065e180171af2747aa6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7975ba9eed584a025eb99ec1d4ae8020a5b51bfb98db065e180171af2747aa6a->enter($__internal_7975ba9eed584a025eb99ec1d4ae8020a5b51bfb98db065e180171af2747aa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Hello Page</h1>
            <p class=\"lead\">This is the <b>";
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</b> page.</p><br>
            <hr class=\"my-4\">
            <h2>Hello World!</h2>
        </div>
    </div>

";
        
        $__internal_7975ba9eed584a025eb99ec1d4ae8020a5b51bfb98db065e180171af2747aa6a->leave($__internal_7975ba9eed584a025eb99ec1d4ae8020a5b51bfb98db065e180171af2747aa6a_prof);

        
        $__internal_d12646c3c6c0106d1f0ac4f8aea76fe4821eda4777eb419860c402ef34b3d28d->leave($__internal_d12646c3c6c0106d1f0ac4f8aea76fe4821eda4777eb419860c402ef34b3d28d_prof);

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

{% endblock body %}", "templates/hello.html.twig", "/Users/jweber0169/Documents/asl/app/Resources/views/templates/hello.html.twig");
    }
}
