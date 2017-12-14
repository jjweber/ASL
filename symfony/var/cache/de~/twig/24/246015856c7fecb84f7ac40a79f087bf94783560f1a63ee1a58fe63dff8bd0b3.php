<?php

/* product/new.html.twig */
class __TwigTemplate_64b380223c68a77d37ab7fb00d72192d7e5cd389df8ab24cb987a88ebce9b35e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/new.html.twig", 1);
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
        $__internal_a9b609a4ac14e2557d0e6101f709e8cd0f42a5484a0857b3a43560e2267e28ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b609a4ac14e2557d0e6101f709e8cd0f42a5484a0857b3a43560e2267e28ba->enter($__internal_a9b609a4ac14e2557d0e6101f709e8cd0f42a5484a0857b3a43560e2267e28ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $__internal_e8ba406252cb572765755b32c12c329cc37f9670ae07dfeb1bab1f32662fe01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ba406252cb572765755b32c12c329cc37f9670ae07dfeb1bab1f32662fe01e->enter($__internal_e8ba406252cb572765755b32c12c329cc37f9670ae07dfeb1bab1f32662fe01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9b609a4ac14e2557d0e6101f709e8cd0f42a5484a0857b3a43560e2267e28ba->leave($__internal_a9b609a4ac14e2557d0e6101f709e8cd0f42a5484a0857b3a43560e2267e28ba_prof);

        
        $__internal_e8ba406252cb572765755b32c12c329cc37f9670ae07dfeb1bab1f32662fe01e->leave($__internal_e8ba406252cb572765755b32c12c329cc37f9670ae07dfeb1bab1f32662fe01e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_346aec67c15f202b8523b8b27d58297f94ee39b793c99c16bd51ff3744f194c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_346aec67c15f202b8523b8b27d58297f94ee39b793c99c16bd51ff3744f194c4->enter($__internal_346aec67c15f202b8523b8b27d58297f94ee39b793c99c16bd51ff3744f194c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ccfa49c937e78342f27d2fbd4c979854a5a8995ae82b2900df380d0f1c3c975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ccfa49c937e78342f27d2fbd4c979854a5a8995ae82b2900df380d0f1c3c975->enter($__internal_7ccfa49c937e78342f27d2fbd4c979854a5a8995ae82b2900df380d0f1c3c975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7ccfa49c937e78342f27d2fbd4c979854a5a8995ae82b2900df380d0f1c3c975->leave($__internal_7ccfa49c937e78342f27d2fbd4c979854a5a8995ae82b2900df380d0f1c3c975_prof);

        
        $__internal_346aec67c15f202b8523b8b27d58297f94ee39b793c99c16bd51ff3744f194c4->leave($__internal_346aec67c15f202b8523b8b27d58297f94ee39b793c99c16bd51ff3744f194c4_prof);

    }

    public function getTemplateName()
    {
        return "product/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Product creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "product/new.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/product/new.html.twig");
    }
}
