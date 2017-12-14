<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9686a4200268e8228f08a645977c6ab94f42aa617b6e80356a4d3defaa116264 extends Twig_Template
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
        $__internal_b391328fbc9c47ba1ff193acfa1acc7079efa0336886c76f32a0be7ff504064e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b391328fbc9c47ba1ff193acfa1acc7079efa0336886c76f32a0be7ff504064e->enter($__internal_b391328fbc9c47ba1ff193acfa1acc7079efa0336886c76f32a0be7ff504064e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7090e504eb47651a4d42ac37e47cf68b7515a67cf6bf0cb350c30d42250c430d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7090e504eb47651a4d42ac37e47cf68b7515a67cf6bf0cb350c30d42250c430d->enter($__internal_7090e504eb47651a4d42ac37e47cf68b7515a67cf6bf0cb350c30d42250c430d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b391328fbc9c47ba1ff193acfa1acc7079efa0336886c76f32a0be7ff504064e->leave($__internal_b391328fbc9c47ba1ff193acfa1acc7079efa0336886c76f32a0be7ff504064e_prof);

        
        $__internal_7090e504eb47651a4d42ac37e47cf68b7515a67cf6bf0cb350c30d42250c430d->leave($__internal_7090e504eb47651a4d42ac37e47cf68b7515a67cf6bf0cb350c30d42250c430d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad59152ec443cb9ea0e3169ae671bf0df46bdb3a8b9813b5c14113f831ac1fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad59152ec443cb9ea0e3169ae671bf0df46bdb3a8b9813b5c14113f831ac1fc7->enter($__internal_ad59152ec443cb9ea0e3169ae671bf0df46bdb3a8b9813b5c14113f831ac1fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a2d9f3a0c25319a50a2a76f2a5ff114e2b61d7bf11263dd61427121bc57806bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d9f3a0c25319a50a2a76f2a5ff114e2b61d7bf11263dd61427121bc57806bc->enter($__internal_a2d9f3a0c25319a50a2a76f2a5ff114e2b61d7bf11263dd61427121bc57806bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a2d9f3a0c25319a50a2a76f2a5ff114e2b61d7bf11263dd61427121bc57806bc->leave($__internal_a2d9f3a0c25319a50a2a76f2a5ff114e2b61d7bf11263dd61427121bc57806bc_prof);

        
        $__internal_ad59152ec443cb9ea0e3169ae671bf0df46bdb3a8b9813b5c14113f831ac1fc7->leave($__internal_ad59152ec443cb9ea0e3169ae671bf0df46bdb3a8b9813b5c14113f831ac1fc7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c227238a28646c7a524fbcd1cfdb8d75b909dc9e9c6db60bdb3ac7baac4fbf68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c227238a28646c7a524fbcd1cfdb8d75b909dc9e9c6db60bdb3ac7baac4fbf68->enter($__internal_c227238a28646c7a524fbcd1cfdb8d75b909dc9e9c6db60bdb3ac7baac4fbf68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6754fc08e3480bbe0f5c1437b270f854d3f12c4882418d5d09c82647d9a257cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6754fc08e3480bbe0f5c1437b270f854d3f12c4882418d5d09c82647d9a257cb->enter($__internal_6754fc08e3480bbe0f5c1437b270f854d3f12c4882418d5d09c82647d9a257cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6754fc08e3480bbe0f5c1437b270f854d3f12c4882418d5d09c82647d9a257cb->leave($__internal_6754fc08e3480bbe0f5c1437b270f854d3f12c4882418d5d09c82647d9a257cb_prof);

        
        $__internal_c227238a28646c7a524fbcd1cfdb8d75b909dc9e9c6db60bdb3ac7baac4fbf68->leave($__internal_c227238a28646c7a524fbcd1cfdb8d75b909dc9e9c6db60bdb3ac7baac4fbf68_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51a1e9a515c2b0d152f50b50d61c6d6e7db727b78d5b0077ad6a61d2f67b0369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a1e9a515c2b0d152f50b50d61c6d6e7db727b78d5b0077ad6a61d2f67b0369->enter($__internal_51a1e9a515c2b0d152f50b50d61c6d6e7db727b78d5b0077ad6a61d2f67b0369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7410e0e47fe221b67ea7f310174e1460bfa29f66f135d7b3eae8f298a3a18d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7410e0e47fe221b67ea7f310174e1460bfa29f66f135d7b3eae8f298a3a18d3c->enter($__internal_7410e0e47fe221b67ea7f310174e1460bfa29f66f135d7b3eae8f298a3a18d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7410e0e47fe221b67ea7f310174e1460bfa29f66f135d7b3eae8f298a3a18d3c->leave($__internal_7410e0e47fe221b67ea7f310174e1460bfa29f66f135d7b3eae8f298a3a18d3c_prof);

        
        $__internal_51a1e9a515c2b0d152f50b50d61c6d6e7db727b78d5b0077ad6a61d2f67b0369->leave($__internal_51a1e9a515c2b0d152f50b50d61c6d6e7db727b78d5b0077ad6a61d2f67b0369_prof);

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
