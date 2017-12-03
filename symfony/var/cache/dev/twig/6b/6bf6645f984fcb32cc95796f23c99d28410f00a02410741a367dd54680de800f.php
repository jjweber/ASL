<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0daaa3d5cfd073d06a3840dd526eb53dc2929fac357308915d14d50f05ae0819 extends Twig_Template
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
        $__internal_d47920be74a7297805b03bea98dea27e027ec5eac90e550dae270d5694df8967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d47920be74a7297805b03bea98dea27e027ec5eac90e550dae270d5694df8967->enter($__internal_d47920be74a7297805b03bea98dea27e027ec5eac90e550dae270d5694df8967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_559c7ad202e6aced056bece22b32230aff1f427ca516f9de3412a28acc447620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559c7ad202e6aced056bece22b32230aff1f427ca516f9de3412a28acc447620->enter($__internal_559c7ad202e6aced056bece22b32230aff1f427ca516f9de3412a28acc447620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d47920be74a7297805b03bea98dea27e027ec5eac90e550dae270d5694df8967->leave($__internal_d47920be74a7297805b03bea98dea27e027ec5eac90e550dae270d5694df8967_prof);

        
        $__internal_559c7ad202e6aced056bece22b32230aff1f427ca516f9de3412a28acc447620->leave($__internal_559c7ad202e6aced056bece22b32230aff1f427ca516f9de3412a28acc447620_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f99ebf118e0f5bfb7347c5d04ba26b0de8d0a5305e79e725be898959bae01cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f99ebf118e0f5bfb7347c5d04ba26b0de8d0a5305e79e725be898959bae01cc->enter($__internal_3f99ebf118e0f5bfb7347c5d04ba26b0de8d0a5305e79e725be898959bae01cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_be5adb7512a9f21580e0c6bb435afff0271c1035b0a69096a7793326fac6afe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5adb7512a9f21580e0c6bb435afff0271c1035b0a69096a7793326fac6afe5->enter($__internal_be5adb7512a9f21580e0c6bb435afff0271c1035b0a69096a7793326fac6afe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_be5adb7512a9f21580e0c6bb435afff0271c1035b0a69096a7793326fac6afe5->leave($__internal_be5adb7512a9f21580e0c6bb435afff0271c1035b0a69096a7793326fac6afe5_prof);

        
        $__internal_3f99ebf118e0f5bfb7347c5d04ba26b0de8d0a5305e79e725be898959bae01cc->leave($__internal_3f99ebf118e0f5bfb7347c5d04ba26b0de8d0a5305e79e725be898959bae01cc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_561899efa233437a78e699b72c8f96c80145e8f28a3c33c3e5549677bfb842e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561899efa233437a78e699b72c8f96c80145e8f28a3c33c3e5549677bfb842e2->enter($__internal_561899efa233437a78e699b72c8f96c80145e8f28a3c33c3e5549677bfb842e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d67b7fe5b2ef0f8352ee427306313a8a578ab18d00b0cb29f051b75f1280a543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67b7fe5b2ef0f8352ee427306313a8a578ab18d00b0cb29f051b75f1280a543->enter($__internal_d67b7fe5b2ef0f8352ee427306313a8a578ab18d00b0cb29f051b75f1280a543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d67b7fe5b2ef0f8352ee427306313a8a578ab18d00b0cb29f051b75f1280a543->leave($__internal_d67b7fe5b2ef0f8352ee427306313a8a578ab18d00b0cb29f051b75f1280a543_prof);

        
        $__internal_561899efa233437a78e699b72c8f96c80145e8f28a3c33c3e5549677bfb842e2->leave($__internal_561899efa233437a78e699b72c8f96c80145e8f28a3c33c3e5549677bfb842e2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_802412450d662de756bb85bf5e33e1ac3d3b5ed0810eaf83199b3394e3d7e4e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802412450d662de756bb85bf5e33e1ac3d3b5ed0810eaf83199b3394e3d7e4e5->enter($__internal_802412450d662de756bb85bf5e33e1ac3d3b5ed0810eaf83199b3394e3d7e4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d1a4233250fbe4d313a823f3498b6bcd86d02a4cab0db4295a67dc4109403ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a4233250fbe4d313a823f3498b6bcd86d02a4cab0db4295a67dc4109403ebe->enter($__internal_d1a4233250fbe4d313a823f3498b6bcd86d02a4cab0db4295a67dc4109403ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d1a4233250fbe4d313a823f3498b6bcd86d02a4cab0db4295a67dc4109403ebe->leave($__internal_d1a4233250fbe4d313a823f3498b6bcd86d02a4cab0db4295a67dc4109403ebe_prof);

        
        $__internal_802412450d662de756bb85bf5e33e1ac3d3b5ed0810eaf83199b3394e3d7e4e5->leave($__internal_802412450d662de756bb85bf5e33e1ac3d3b5ed0810eaf83199b3394e3d7e4e5_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/jweber0169/Documents/asl/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
