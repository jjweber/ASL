<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b45f0130a829c6fcaa935260daf2e81b54ffe3de71577284e553c7bc84b9dc45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45f0130a829c6fcaa935260daf2e81b54ffe3de71577284e553c7bc84b9dc45->enter($__internal_b45f0130a829c6fcaa935260daf2e81b54ffe3de71577284e553c7bc84b9dc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f5c01a7a6ef2cd77484d1d0bc0400dece4fd3d4dcd4f60adec4f318d5b669be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c01a7a6ef2cd77484d1d0bc0400dece4fd3d4dcd4f60adec4f318d5b669be4->enter($__internal_f5c01a7a6ef2cd77484d1d0bc0400dece4fd3d4dcd4f60adec4f318d5b669be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b45f0130a829c6fcaa935260daf2e81b54ffe3de71577284e553c7bc84b9dc45->leave($__internal_b45f0130a829c6fcaa935260daf2e81b54ffe3de71577284e553c7bc84b9dc45_prof);

        
        $__internal_f5c01a7a6ef2cd77484d1d0bc0400dece4fd3d4dcd4f60adec4f318d5b669be4->leave($__internal_f5c01a7a6ef2cd77484d1d0bc0400dece4fd3d4dcd4f60adec4f318d5b669be4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3002e5c8c138294ccaa26544796ffd9adb7f7f06908c20388a77787d9b65aa16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3002e5c8c138294ccaa26544796ffd9adb7f7f06908c20388a77787d9b65aa16->enter($__internal_3002e5c8c138294ccaa26544796ffd9adb7f7f06908c20388a77787d9b65aa16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8e6733177305f2f1dfe60e07e5d60bca4df62a9b75e43ce966590bd6b0c540eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6733177305f2f1dfe60e07e5d60bca4df62a9b75e43ce966590bd6b0c540eb->enter($__internal_8e6733177305f2f1dfe60e07e5d60bca4df62a9b75e43ce966590bd6b0c540eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8e6733177305f2f1dfe60e07e5d60bca4df62a9b75e43ce966590bd6b0c540eb->leave($__internal_8e6733177305f2f1dfe60e07e5d60bca4df62a9b75e43ce966590bd6b0c540eb_prof);

        
        $__internal_3002e5c8c138294ccaa26544796ffd9adb7f7f06908c20388a77787d9b65aa16->leave($__internal_3002e5c8c138294ccaa26544796ffd9adb7f7f06908c20388a77787d9b65aa16_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1eaec894d3ba49c939d8e097b967397bb05e47ce0318336718e6961fbe7b1818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eaec894d3ba49c939d8e097b967397bb05e47ce0318336718e6961fbe7b1818->enter($__internal_1eaec894d3ba49c939d8e097b967397bb05e47ce0318336718e6961fbe7b1818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dc4a6791aa4fb164c456ab28a632e06f86e65948223e1d9d8f1f083787c30cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4a6791aa4fb164c456ab28a632e06f86e65948223e1d9d8f1f083787c30cbb->enter($__internal_dc4a6791aa4fb164c456ab28a632e06f86e65948223e1d9d8f1f083787c30cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dc4a6791aa4fb164c456ab28a632e06f86e65948223e1d9d8f1f083787c30cbb->leave($__internal_dc4a6791aa4fb164c456ab28a632e06f86e65948223e1d9d8f1f083787c30cbb_prof);

        
        $__internal_1eaec894d3ba49c939d8e097b967397bb05e47ce0318336718e6961fbe7b1818->leave($__internal_1eaec894d3ba49c939d8e097b967397bb05e47ce0318336718e6961fbe7b1818_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_24695a542c1a53f1eedeb18aca04b4e912e78f214cb1a1d8d20a5cee0e50da36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24695a542c1a53f1eedeb18aca04b4e912e78f214cb1a1d8d20a5cee0e50da36->enter($__internal_24695a542c1a53f1eedeb18aca04b4e912e78f214cb1a1d8d20a5cee0e50da36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bc7b9f2f99be52ff9a61087bab04b3a4041b78d777efcac7eec22d861f1850ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7b9f2f99be52ff9a61087bab04b3a4041b78d777efcac7eec22d861f1850ec->enter($__internal_bc7b9f2f99be52ff9a61087bab04b3a4041b78d777efcac7eec22d861f1850ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bc7b9f2f99be52ff9a61087bab04b3a4041b78d777efcac7eec22d861f1850ec->leave($__internal_bc7b9f2f99be52ff9a61087bab04b3a4041b78d777efcac7eec22d861f1850ec_prof);

        
        $__internal_24695a542c1a53f1eedeb18aca04b4e912e78f214cb1a1d8d20a5cee0e50da36->leave($__internal_24695a542c1a53f1eedeb18aca04b4e912e78f214cb1a1d8d20a5cee0e50da36_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/jweber0169/Documents/asl/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
