<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_edaf73c63603964fb658c57af8131b0c2cdc9036093ba63fa1e26ededaf215dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9875f3e93021013d065df85c4d30cb60c5efb444a049f4ae4d9119b1ac0fac7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9875f3e93021013d065df85c4d30cb60c5efb444a049f4ae4d9119b1ac0fac7c->enter($__internal_9875f3e93021013d065df85c4d30cb60c5efb444a049f4ae4d9119b1ac0fac7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_91b470a4878ce69904003b03fe1f36a8881e37cee42bac6cd7e1d7e5992b5123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b470a4878ce69904003b03fe1f36a8881e37cee42bac6cd7e1d7e5992b5123->enter($__internal_91b470a4878ce69904003b03fe1f36a8881e37cee42bac6cd7e1d7e5992b5123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9875f3e93021013d065df85c4d30cb60c5efb444a049f4ae4d9119b1ac0fac7c->leave($__internal_9875f3e93021013d065df85c4d30cb60c5efb444a049f4ae4d9119b1ac0fac7c_prof);

        
        $__internal_91b470a4878ce69904003b03fe1f36a8881e37cee42bac6cd7e1d7e5992b5123->leave($__internal_91b470a4878ce69904003b03fe1f36a8881e37cee42bac6cd7e1d7e5992b5123_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_090dac09eeab7a0622283bfbbc64713e321e1be064e01825f7edc3e9034a367d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090dac09eeab7a0622283bfbbc64713e321e1be064e01825f7edc3e9034a367d->enter($__internal_090dac09eeab7a0622283bfbbc64713e321e1be064e01825f7edc3e9034a367d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ed4bb304dc9bed01c1f9872415c46e8c19115fb3f62635992c3b7204e700d117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4bb304dc9bed01c1f9872415c46e8c19115fb3f62635992c3b7204e700d117->enter($__internal_ed4bb304dc9bed01c1f9872415c46e8c19115fb3f62635992c3b7204e700d117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ed4bb304dc9bed01c1f9872415c46e8c19115fb3f62635992c3b7204e700d117->leave($__internal_ed4bb304dc9bed01c1f9872415c46e8c19115fb3f62635992c3b7204e700d117_prof);

        
        $__internal_090dac09eeab7a0622283bfbbc64713e321e1be064e01825f7edc3e9034a367d->leave($__internal_090dac09eeab7a0622283bfbbc64713e321e1be064e01825f7edc3e9034a367d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/jweber0169/Documents/asl/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
