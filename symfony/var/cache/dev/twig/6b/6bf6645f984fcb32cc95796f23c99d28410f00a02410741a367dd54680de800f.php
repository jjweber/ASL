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
        $__internal_8159028409fddc258d4c682e6594005ea903446ee6ff8dc45c60d13a9c73db53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8159028409fddc258d4c682e6594005ea903446ee6ff8dc45c60d13a9c73db53->enter($__internal_8159028409fddc258d4c682e6594005ea903446ee6ff8dc45c60d13a9c73db53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c0fd56b6b7e54b764fa24592019ef386104b70a15f5509bed929afc17fd921b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fd56b6b7e54b764fa24592019ef386104b70a15f5509bed929afc17fd921b1->enter($__internal_c0fd56b6b7e54b764fa24592019ef386104b70a15f5509bed929afc17fd921b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8159028409fddc258d4c682e6594005ea903446ee6ff8dc45c60d13a9c73db53->leave($__internal_8159028409fddc258d4c682e6594005ea903446ee6ff8dc45c60d13a9c73db53_prof);

        
        $__internal_c0fd56b6b7e54b764fa24592019ef386104b70a15f5509bed929afc17fd921b1->leave($__internal_c0fd56b6b7e54b764fa24592019ef386104b70a15f5509bed929afc17fd921b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_55547b741193f037eba9924069ca8d83a00b2b91e71611910d35159821cb46fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55547b741193f037eba9924069ca8d83a00b2b91e71611910d35159821cb46fb->enter($__internal_55547b741193f037eba9924069ca8d83a00b2b91e71611910d35159821cb46fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6e0d18899d5a5d072ba58f537b7937e36bbdc9bb206413556d7930e4fabaeef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0d18899d5a5d072ba58f537b7937e36bbdc9bb206413556d7930e4fabaeef8->enter($__internal_6e0d18899d5a5d072ba58f537b7937e36bbdc9bb206413556d7930e4fabaeef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6e0d18899d5a5d072ba58f537b7937e36bbdc9bb206413556d7930e4fabaeef8->leave($__internal_6e0d18899d5a5d072ba58f537b7937e36bbdc9bb206413556d7930e4fabaeef8_prof);

        
        $__internal_55547b741193f037eba9924069ca8d83a00b2b91e71611910d35159821cb46fb->leave($__internal_55547b741193f037eba9924069ca8d83a00b2b91e71611910d35159821cb46fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aeb42c685964da9dc9966a5b2af770392be4af4a60bfe0ef32fd1c50cd111e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb42c685964da9dc9966a5b2af770392be4af4a60bfe0ef32fd1c50cd111e23->enter($__internal_aeb42c685964da9dc9966a5b2af770392be4af4a60bfe0ef32fd1c50cd111e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_52be5f1a8b29643cf2ac2c55d7ce227069e8fd9755d8dedfd015f345700588e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52be5f1a8b29643cf2ac2c55d7ce227069e8fd9755d8dedfd015f345700588e9->enter($__internal_52be5f1a8b29643cf2ac2c55d7ce227069e8fd9755d8dedfd015f345700588e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_52be5f1a8b29643cf2ac2c55d7ce227069e8fd9755d8dedfd015f345700588e9->leave($__internal_52be5f1a8b29643cf2ac2c55d7ce227069e8fd9755d8dedfd015f345700588e9_prof);

        
        $__internal_aeb42c685964da9dc9966a5b2af770392be4af4a60bfe0ef32fd1c50cd111e23->leave($__internal_aeb42c685964da9dc9966a5b2af770392be4af4a60bfe0ef32fd1c50cd111e23_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cce1002ec3ac9881111358c90bddf9cbb3d7417b75124ffb0c7c3262ff34106c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cce1002ec3ac9881111358c90bddf9cbb3d7417b75124ffb0c7c3262ff34106c->enter($__internal_cce1002ec3ac9881111358c90bddf9cbb3d7417b75124ffb0c7c3262ff34106c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5792a300a6eff472fd7fab127a99768c8b75e777278568758dc2c23fbd5f880d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5792a300a6eff472fd7fab127a99768c8b75e777278568758dc2c23fbd5f880d->enter($__internal_5792a300a6eff472fd7fab127a99768c8b75e777278568758dc2c23fbd5f880d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5792a300a6eff472fd7fab127a99768c8b75e777278568758dc2c23fbd5f880d->leave($__internal_5792a300a6eff472fd7fab127a99768c8b75e777278568758dc2c23fbd5f880d_prof);

        
        $__internal_cce1002ec3ac9881111358c90bddf9cbb3d7417b75124ffb0c7c3262ff34106c->leave($__internal_cce1002ec3ac9881111358c90bddf9cbb3d7417b75124ffb0c7c3262ff34106c_prof);

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
