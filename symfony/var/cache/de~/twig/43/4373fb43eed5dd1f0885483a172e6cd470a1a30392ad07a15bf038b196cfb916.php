<?php

/* templates/registerForm.html.twig */
class __TwigTemplate_8bee43f7743f8728a828ba9b52d25f7888ee5b35bd5d3effe21c3c4cd9dc0a19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "templates/registerForm.html.twig", 1);
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
        $__internal_d9e336e6fd7e78cddf35a85bf273b9d72295ea20968a722727a3fab94bfad998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e336e6fd7e78cddf35a85bf273b9d72295ea20968a722727a3fab94bfad998->enter($__internal_d9e336e6fd7e78cddf35a85bf273b9d72295ea20968a722727a3fab94bfad998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/registerForm.html.twig"));

        $__internal_07e205e2729d812e0f68d50a8c2ee364cf84fa26ccff69ed918bbfb239af4588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e205e2729d812e0f68d50a8c2ee364cf84fa26ccff69ed918bbfb239af4588->enter($__internal_07e205e2729d812e0f68d50a8c2ee364cf84fa26ccff69ed918bbfb239af4588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/registerForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9e336e6fd7e78cddf35a85bf273b9d72295ea20968a722727a3fab94bfad998->leave($__internal_d9e336e6fd7e78cddf35a85bf273b9d72295ea20968a722727a3fab94bfad998_prof);

        
        $__internal_07e205e2729d812e0f68d50a8c2ee364cf84fa26ccff69ed918bbfb239af4588->leave($__internal_07e205e2729d812e0f68d50a8c2ee364cf84fa26ccff69ed918bbfb239af4588_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_12b3ce18df17a19d7be3e9387706ffff6a25b48c8297d5177762b98e2c20b593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b3ce18df17a19d7be3e9387706ffff6a25b48c8297d5177762b98e2c20b593->enter($__internal_12b3ce18df17a19d7be3e9387706ffff6a25b48c8297d5177762b98e2c20b593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_082f9c9e43759b9674c469ed93d319dcd69012e4855bef2d3c951b2d65aa702d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082f9c9e43759b9674c469ed93d319dcd69012e4855bef2d3c951b2d65aa702d->enter($__internal_082f9c9e43759b9674c469ed93d319dcd69012e4855bef2d3c951b2d65aa702d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div id=\"wrapper\">
        <div id=\"container\">

            Your application is ready. Here is your form.

            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
    </div>

";
        
        $__internal_082f9c9e43759b9674c469ed93d319dcd69012e4855bef2d3c951b2d65aa702d->leave($__internal_082f9c9e43759b9674c469ed93d319dcd69012e4855bef2d3c951b2d65aa702d_prof);

        
        $__internal_12b3ce18df17a19d7be3e9387706ffff6a25b48c8297d5177762b98e2c20b593->leave($__internal_12b3ce18df17a19d7be3e9387706ffff6a25b48c8297d5177762b98e2c20b593_prof);

    }

    public function getTemplateName()
    {
        return "templates/registerForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  61 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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

    <div id=\"wrapper\">
        <div id=\"container\">

            Your application is ready. Here is your form.

            {{ form_errors(form) }}
            {{ form_start(form,{\"method\":\"POST\"}) }}
            {{ form_end(form) }}

        </div>
    </div>

{% endblock body %}", "templates/registerForm.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/templates/registerForm.html.twig");
    }
}
