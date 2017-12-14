<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_941de5b402ff662b739a76814fb0cabb9e7345a1cc628ddfe33a2c16e9215abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941de5b402ff662b739a76814fb0cabb9e7345a1cc628ddfe33a2c16e9215abd->enter($__internal_941de5b402ff662b739a76814fb0cabb9e7345a1cc628ddfe33a2c16e9215abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1e4b8bbf7f17fcbeb9c902b1b0dd390f8392e2c979ad2a9c4c9ba2163fd165ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4b8bbf7f17fcbeb9c902b1b0dd390f8392e2c979ad2a9c4c9ba2163fd165ba->enter($__internal_1e4b8bbf7f17fcbeb9c902b1b0dd390f8392e2c979ad2a9c4c9ba2163fd165ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_941de5b402ff662b739a76814fb0cabb9e7345a1cc628ddfe33a2c16e9215abd->leave($__internal_941de5b402ff662b739a76814fb0cabb9e7345a1cc628ddfe33a2c16e9215abd_prof);

        
        $__internal_1e4b8bbf7f17fcbeb9c902b1b0dd390f8392e2c979ad2a9c4c9ba2163fd165ba->leave($__internal_1e4b8bbf7f17fcbeb9c902b1b0dd390f8392e2c979ad2a9c4c9ba2163fd165ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b525d5e972cdb047f88f059dce0f0aa76294df2aff39eba349703e024de68da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b525d5e972cdb047f88f059dce0f0aa76294df2aff39eba349703e024de68da->enter($__internal_4b525d5e972cdb047f88f059dce0f0aa76294df2aff39eba349703e024de68da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2cf7881b98f576b751e39a9142b29bb28418c6ae106ad06120f1d25eabe5fe38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf7881b98f576b751e39a9142b29bb28418c6ae106ad06120f1d25eabe5fe38->enter($__internal_2cf7881b98f576b751e39a9142b29bb28418c6ae106ad06120f1d25eabe5fe38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2cf7881b98f576b751e39a9142b29bb28418c6ae106ad06120f1d25eabe5fe38->leave($__internal_2cf7881b98f576b751e39a9142b29bb28418c6ae106ad06120f1d25eabe5fe38_prof);

        
        $__internal_4b525d5e972cdb047f88f059dce0f0aa76294df2aff39eba349703e024de68da->leave($__internal_4b525d5e972cdb047f88f059dce0f0aa76294df2aff39eba349703e024de68da_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_efd6cec06a577898a7331d1b19f70cd574b9201bdabb007b135bcfbd5372604c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd6cec06a577898a7331d1b19f70cd574b9201bdabb007b135bcfbd5372604c->enter($__internal_efd6cec06a577898a7331d1b19f70cd574b9201bdabb007b135bcfbd5372604c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e30c7628de53c1c95a4d25b2336011949df525d8db1c6da3c73858c9b78c12ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30c7628de53c1c95a4d25b2336011949df525d8db1c6da3c73858c9b78c12ae->enter($__internal_e30c7628de53c1c95a4d25b2336011949df525d8db1c6da3c73858c9b78c12ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e30c7628de53c1c95a4d25b2336011949df525d8db1c6da3c73858c9b78c12ae->leave($__internal_e30c7628de53c1c95a4d25b2336011949df525d8db1c6da3c73858c9b78c12ae_prof);

        
        $__internal_efd6cec06a577898a7331d1b19f70cd574b9201bdabb007b135bcfbd5372604c->leave($__internal_efd6cec06a577898a7331d1b19f70cd574b9201bdabb007b135bcfbd5372604c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_701d847ec7ce862d9c4b6555e9d9a0803bc1be093dbd29d050c49a0f03eb2301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701d847ec7ce862d9c4b6555e9d9a0803bc1be093dbd29d050c49a0f03eb2301->enter($__internal_701d847ec7ce862d9c4b6555e9d9a0803bc1be093dbd29d050c49a0f03eb2301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ca846d055071715eec78737cf3adc9dda8334ab42bf8b2c6d266b8fbd4980cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca846d055071715eec78737cf3adc9dda8334ab42bf8b2c6d266b8fbd4980cd->enter($__internal_6ca846d055071715eec78737cf3adc9dda8334ab42bf8b2c6d266b8fbd4980cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6ca846d055071715eec78737cf3adc9dda8334ab42bf8b2c6d266b8fbd4980cd->leave($__internal_6ca846d055071715eec78737cf3adc9dda8334ab42bf8b2c6d266b8fbd4980cd_prof);

        
        $__internal_701d847ec7ce862d9c4b6555e9d9a0803bc1be093dbd29d050c49a0f03eb2301->leave($__internal_701d847ec7ce862d9c4b6555e9d9a0803bc1be093dbd29d050c49a0f03eb2301_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/jweber0169/Documents/asl/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
