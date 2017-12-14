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
        $__internal_7aa2880d20e20e2364d54f209f99b404717a5ac1e631bd722eb756e6ce3af84e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa2880d20e20e2364d54f209f99b404717a5ac1e631bd722eb756e6ce3af84e->enter($__internal_7aa2880d20e20e2364d54f209f99b404717a5ac1e631bd722eb756e6ce3af84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8eea31f508a96e37051870f3240c0380fb9c088130cfce2699b4348fab68c4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eea31f508a96e37051870f3240c0380fb9c088130cfce2699b4348fab68c4c2->enter($__internal_8eea31f508a96e37051870f3240c0380fb9c088130cfce2699b4348fab68c4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aa2880d20e20e2364d54f209f99b404717a5ac1e631bd722eb756e6ce3af84e->leave($__internal_7aa2880d20e20e2364d54f209f99b404717a5ac1e631bd722eb756e6ce3af84e_prof);

        
        $__internal_8eea31f508a96e37051870f3240c0380fb9c088130cfce2699b4348fab68c4c2->leave($__internal_8eea31f508a96e37051870f3240c0380fb9c088130cfce2699b4348fab68c4c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85e27ae4e1456e39c3ab4e3038d8ce2f3b3db91ff59c12bc10ebceb2153bd3a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e27ae4e1456e39c3ab4e3038d8ce2f3b3db91ff59c12bc10ebceb2153bd3a1->enter($__internal_85e27ae4e1456e39c3ab4e3038d8ce2f3b3db91ff59c12bc10ebceb2153bd3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_975b89d893e891d1e792a05025e6faeb50ce7fa5afd0de7e8047ce7cab7dfdb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975b89d893e891d1e792a05025e6faeb50ce7fa5afd0de7e8047ce7cab7dfdb7->enter($__internal_975b89d893e891d1e792a05025e6faeb50ce7fa5afd0de7e8047ce7cab7dfdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_975b89d893e891d1e792a05025e6faeb50ce7fa5afd0de7e8047ce7cab7dfdb7->leave($__internal_975b89d893e891d1e792a05025e6faeb50ce7fa5afd0de7e8047ce7cab7dfdb7_prof);

        
        $__internal_85e27ae4e1456e39c3ab4e3038d8ce2f3b3db91ff59c12bc10ebceb2153bd3a1->leave($__internal_85e27ae4e1456e39c3ab4e3038d8ce2f3b3db91ff59c12bc10ebceb2153bd3a1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e732e6a7310e12bdb302ed16bea12fa98013ac3f456606f9bc4a20050a954aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e732e6a7310e12bdb302ed16bea12fa98013ac3f456606f9bc4a20050a954aa->enter($__internal_0e732e6a7310e12bdb302ed16bea12fa98013ac3f456606f9bc4a20050a954aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d8849a11a0ecce7c5b08d5c6592d43b244ee8b2cdabb0fb9280b2abd1ca68f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8849a11a0ecce7c5b08d5c6592d43b244ee8b2cdabb0fb9280b2abd1ca68f62->enter($__internal_d8849a11a0ecce7c5b08d5c6592d43b244ee8b2cdabb0fb9280b2abd1ca68f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d8849a11a0ecce7c5b08d5c6592d43b244ee8b2cdabb0fb9280b2abd1ca68f62->leave($__internal_d8849a11a0ecce7c5b08d5c6592d43b244ee8b2cdabb0fb9280b2abd1ca68f62_prof);

        
        $__internal_0e732e6a7310e12bdb302ed16bea12fa98013ac3f456606f9bc4a20050a954aa->leave($__internal_0e732e6a7310e12bdb302ed16bea12fa98013ac3f456606f9bc4a20050a954aa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae47acdecb8def80b44b32e53e6f043de71da9d15170a798db7c4922c0d7a559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae47acdecb8def80b44b32e53e6f043de71da9d15170a798db7c4922c0d7a559->enter($__internal_ae47acdecb8def80b44b32e53e6f043de71da9d15170a798db7c4922c0d7a559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a7153adea3f45c4fa81f71cab1d2e36f3971bddec9f65553339208df2df1ea07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7153adea3f45c4fa81f71cab1d2e36f3971bddec9f65553339208df2df1ea07->enter($__internal_a7153adea3f45c4fa81f71cab1d2e36f3971bddec9f65553339208df2df1ea07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a7153adea3f45c4fa81f71cab1d2e36f3971bddec9f65553339208df2df1ea07->leave($__internal_a7153adea3f45c4fa81f71cab1d2e36f3971bddec9f65553339208df2df1ea07_prof);

        
        $__internal_ae47acdecb8def80b44b32e53e6f043de71da9d15170a798db7c4922c0d7a559->leave($__internal_ae47acdecb8def80b44b32e53e6f043de71da9d15170a798db7c4922c0d7a559_prof);

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
