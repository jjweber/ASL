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
        $__internal_b1295a249ab53d79fc2c8f50a38929520c8dcc278a546290ceb90c6218660f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1295a249ab53d79fc2c8f50a38929520c8dcc278a546290ceb90c6218660f9a->enter($__internal_b1295a249ab53d79fc2c8f50a38929520c8dcc278a546290ceb90c6218660f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cf0d314e2742106d89ce55ecbef11dca48724d902da70eb65b1ec465b5eb0ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0d314e2742106d89ce55ecbef11dca48724d902da70eb65b1ec465b5eb0ccc->enter($__internal_cf0d314e2742106d89ce55ecbef11dca48724d902da70eb65b1ec465b5eb0ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1295a249ab53d79fc2c8f50a38929520c8dcc278a546290ceb90c6218660f9a->leave($__internal_b1295a249ab53d79fc2c8f50a38929520c8dcc278a546290ceb90c6218660f9a_prof);

        
        $__internal_cf0d314e2742106d89ce55ecbef11dca48724d902da70eb65b1ec465b5eb0ccc->leave($__internal_cf0d314e2742106d89ce55ecbef11dca48724d902da70eb65b1ec465b5eb0ccc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_501be685c7c69ff0824cc0cdb970bca55cf06db308567a584eee816fa2985244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501be685c7c69ff0824cc0cdb970bca55cf06db308567a584eee816fa2985244->enter($__internal_501be685c7c69ff0824cc0cdb970bca55cf06db308567a584eee816fa2985244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7e0b57c91d900d1f9c3b8e2154202ef7fa01939283bd0c5355f27e2878d5192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e0b57c91d900d1f9c3b8e2154202ef7fa01939283bd0c5355f27e2878d5192->enter($__internal_f7e0b57c91d900d1f9c3b8e2154202ef7fa01939283bd0c5355f27e2878d5192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f7e0b57c91d900d1f9c3b8e2154202ef7fa01939283bd0c5355f27e2878d5192->leave($__internal_f7e0b57c91d900d1f9c3b8e2154202ef7fa01939283bd0c5355f27e2878d5192_prof);

        
        $__internal_501be685c7c69ff0824cc0cdb970bca55cf06db308567a584eee816fa2985244->leave($__internal_501be685c7c69ff0824cc0cdb970bca55cf06db308567a584eee816fa2985244_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_733c74a5e59c67763f31ea1db0ea9b14176979272ffe5cad366565cfecc2739a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733c74a5e59c67763f31ea1db0ea9b14176979272ffe5cad366565cfecc2739a->enter($__internal_733c74a5e59c67763f31ea1db0ea9b14176979272ffe5cad366565cfecc2739a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_552419d75320cf107f19c02b83d4aa78f1ae682f2f02d8453da0b66ed419b75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552419d75320cf107f19c02b83d4aa78f1ae682f2f02d8453da0b66ed419b75d->enter($__internal_552419d75320cf107f19c02b83d4aa78f1ae682f2f02d8453da0b66ed419b75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_552419d75320cf107f19c02b83d4aa78f1ae682f2f02d8453da0b66ed419b75d->leave($__internal_552419d75320cf107f19c02b83d4aa78f1ae682f2f02d8453da0b66ed419b75d_prof);

        
        $__internal_733c74a5e59c67763f31ea1db0ea9b14176979272ffe5cad366565cfecc2739a->leave($__internal_733c74a5e59c67763f31ea1db0ea9b14176979272ffe5cad366565cfecc2739a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc924313afa03597fda54e6568737508caed7655ad5f1007f022bcb1588f5ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc924313afa03597fda54e6568737508caed7655ad5f1007f022bcb1588f5ca7->enter($__internal_cc924313afa03597fda54e6568737508caed7655ad5f1007f022bcb1588f5ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_14db9254c070f45222794c8814f3c371097035e785d14e02620d06e407609d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14db9254c070f45222794c8814f3c371097035e785d14e02620d06e407609d22->enter($__internal_14db9254c070f45222794c8814f3c371097035e785d14e02620d06e407609d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_14db9254c070f45222794c8814f3c371097035e785d14e02620d06e407609d22->leave($__internal_14db9254c070f45222794c8814f3c371097035e785d14e02620d06e407609d22_prof);

        
        $__internal_cc924313afa03597fda54e6568737508caed7655ad5f1007f022bcb1588f5ca7->leave($__internal_cc924313afa03597fda54e6568737508caed7655ad5f1007f022bcb1588f5ca7_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/jweber0169/Documents/asl/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
