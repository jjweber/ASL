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
        $__internal_0d6a9cf87f5a68c5328a1885b3bb10c4d5f2d8ca0de72f799cd316f7c2ec6015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d6a9cf87f5a68c5328a1885b3bb10c4d5f2d8ca0de72f799cd316f7c2ec6015->enter($__internal_0d6a9cf87f5a68c5328a1885b3bb10c4d5f2d8ca0de72f799cd316f7c2ec6015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_93fcc1c65e5e0809db5f0e057a15b919dd9d445e23d2577b9c5eea7a1bec7fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fcc1c65e5e0809db5f0e057a15b919dd9d445e23d2577b9c5eea7a1bec7fd2->enter($__internal_93fcc1c65e5e0809db5f0e057a15b919dd9d445e23d2577b9c5eea7a1bec7fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d6a9cf87f5a68c5328a1885b3bb10c4d5f2d8ca0de72f799cd316f7c2ec6015->leave($__internal_0d6a9cf87f5a68c5328a1885b3bb10c4d5f2d8ca0de72f799cd316f7c2ec6015_prof);

        
        $__internal_93fcc1c65e5e0809db5f0e057a15b919dd9d445e23d2577b9c5eea7a1bec7fd2->leave($__internal_93fcc1c65e5e0809db5f0e057a15b919dd9d445e23d2577b9c5eea7a1bec7fd2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e7b639537b48e5fa96aa3a3f0effcb1bb5163dad54b40eea747a0b2053b66c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7b639537b48e5fa96aa3a3f0effcb1bb5163dad54b40eea747a0b2053b66c7->enter($__internal_6e7b639537b48e5fa96aa3a3f0effcb1bb5163dad54b40eea747a0b2053b66c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fa95663d7c6b77901cea34f719361bb86144f47af247ec5e0f798aed17bb870c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa95663d7c6b77901cea34f719361bb86144f47af247ec5e0f798aed17bb870c->enter($__internal_fa95663d7c6b77901cea34f719361bb86144f47af247ec5e0f798aed17bb870c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fa95663d7c6b77901cea34f719361bb86144f47af247ec5e0f798aed17bb870c->leave($__internal_fa95663d7c6b77901cea34f719361bb86144f47af247ec5e0f798aed17bb870c_prof);

        
        $__internal_6e7b639537b48e5fa96aa3a3f0effcb1bb5163dad54b40eea747a0b2053b66c7->leave($__internal_6e7b639537b48e5fa96aa3a3f0effcb1bb5163dad54b40eea747a0b2053b66c7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_527d4004368fb26d14eac37bf15f75a539d6435e5962c22d47b13c2b81bb8c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527d4004368fb26d14eac37bf15f75a539d6435e5962c22d47b13c2b81bb8c9c->enter($__internal_527d4004368fb26d14eac37bf15f75a539d6435e5962c22d47b13c2b81bb8c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_38e5341e3aa469a5d4dd48de4f06a3aafdaeaeebd6a65fba10671a313ada5cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e5341e3aa469a5d4dd48de4f06a3aafdaeaeebd6a65fba10671a313ada5cce->enter($__internal_38e5341e3aa469a5d4dd48de4f06a3aafdaeaeebd6a65fba10671a313ada5cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_38e5341e3aa469a5d4dd48de4f06a3aafdaeaeebd6a65fba10671a313ada5cce->leave($__internal_38e5341e3aa469a5d4dd48de4f06a3aafdaeaeebd6a65fba10671a313ada5cce_prof);

        
        $__internal_527d4004368fb26d14eac37bf15f75a539d6435e5962c22d47b13c2b81bb8c9c->leave($__internal_527d4004368fb26d14eac37bf15f75a539d6435e5962c22d47b13c2b81bb8c9c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e0ff04fa64badded046ef2da5b100483211e086d759614e79f75ae190ed01c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0ff04fa64badded046ef2da5b100483211e086d759614e79f75ae190ed01c9->enter($__internal_5e0ff04fa64badded046ef2da5b100483211e086d759614e79f75ae190ed01c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3c351f6d8f7839df565edc8fcd94cd568b92a60c9984db5243256dc6c2d3afb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c351f6d8f7839df565edc8fcd94cd568b92a60c9984db5243256dc6c2d3afb3->enter($__internal_3c351f6d8f7839df565edc8fcd94cd568b92a60c9984db5243256dc6c2d3afb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3c351f6d8f7839df565edc8fcd94cd568b92a60c9984db5243256dc6c2d3afb3->leave($__internal_3c351f6d8f7839df565edc8fcd94cd568b92a60c9984db5243256dc6c2d3afb3_prof);

        
        $__internal_5e0ff04fa64badded046ef2da5b100483211e086d759614e79f75ae190ed01c9->leave($__internal_5e0ff04fa64badded046ef2da5b100483211e086d759614e79f75ae190ed01c9_prof);

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
