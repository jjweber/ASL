<?php

/* product/new.html.twig */
class __TwigTemplate_0597ed7640b57e05d3bd2a7b086602d9aff73b0a23b162ba5ed73a9f6365c74d extends Twig_Template
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
        $__internal_a7dfec165f38f2b526f7b32256539794ce7641210027ae79c46e5d8367d236c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7dfec165f38f2b526f7b32256539794ce7641210027ae79c46e5d8367d236c0->enter($__internal_a7dfec165f38f2b526f7b32256539794ce7641210027ae79c46e5d8367d236c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $__internal_4c3830fcf27f604030d02f6d1bd9aad93c36b3bdbba5865a503677637fdc0853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3830fcf27f604030d02f6d1bd9aad93c36b3bdbba5865a503677637fdc0853->enter($__internal_4c3830fcf27f604030d02f6d1bd9aad93c36b3bdbba5865a503677637fdc0853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7dfec165f38f2b526f7b32256539794ce7641210027ae79c46e5d8367d236c0->leave($__internal_a7dfec165f38f2b526f7b32256539794ce7641210027ae79c46e5d8367d236c0_prof);

        
        $__internal_4c3830fcf27f604030d02f6d1bd9aad93c36b3bdbba5865a503677637fdc0853->leave($__internal_4c3830fcf27f604030d02f6d1bd9aad93c36b3bdbba5865a503677637fdc0853_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53d67e90d76ca5eba2605e4fa354e42d8ec03657d797504a1fb975ff84b0a97d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d67e90d76ca5eba2605e4fa354e42d8ec03657d797504a1fb975ff84b0a97d->enter($__internal_53d67e90d76ca5eba2605e4fa354e42d8ec03657d797504a1fb975ff84b0a97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5f58fc59ed0b190997b0ad833347b02b69d8780858229c3bef0b17dbdd72a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f58fc59ed0b190997b0ad833347b02b69d8780858229c3bef0b17dbdd72a87->enter($__internal_c5f58fc59ed0b190997b0ad833347b02b69d8780858229c3bef0b17dbdd72a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_c5f58fc59ed0b190997b0ad833347b02b69d8780858229c3bef0b17dbdd72a87->leave($__internal_c5f58fc59ed0b190997b0ad833347b02b69d8780858229c3bef0b17dbdd72a87_prof);

        
        $__internal_53d67e90d76ca5eba2605e4fa354e42d8ec03657d797504a1fb975ff84b0a97d->leave($__internal_53d67e90d76ca5eba2605e4fa354e42d8ec03657d797504a1fb975ff84b0a97d_prof);

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
