<?php

/* templates/footer.html.twig */
class __TwigTemplate_5f95daa22610c64bbd360863a2e50be390e4b838e4d834739adf477f44aa910e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "templates/footer.html.twig", 1);
        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_113d34225419ea71d9a522b21ecd4cc6028f4671e17fa44c19469e7b5581fcdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113d34225419ea71d9a522b21ecd4cc6028f4671e17fa44c19469e7b5581fcdd->enter($__internal_113d34225419ea71d9a522b21ecd4cc6028f4671e17fa44c19469e7b5581fcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/footer.html.twig"));

        $__internal_be26b96b0e136a0e432c1a756a9e3914e7f39d231b9f9c7932dec3bb21de37f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be26b96b0e136a0e432c1a756a9e3914e7f39d231b9f9c7932dec3bb21de37f7->enter($__internal_be26b96b0e136a0e432c1a756a9e3914e7f39d231b9f9c7932dec3bb21de37f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/footer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_113d34225419ea71d9a522b21ecd4cc6028f4671e17fa44c19469e7b5581fcdd->leave($__internal_113d34225419ea71d9a522b21ecd4cc6028f4671e17fa44c19469e7b5581fcdd_prof);

        
        $__internal_be26b96b0e136a0e432c1a756a9e3914e7f39d231b9f9c7932dec3bb21de37f7->leave($__internal_be26b96b0e136a0e432c1a756a9e3914e7f39d231b9f9c7932dec3bb21de37f7_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_aa11138187974fefb60699b5ce3695fd0fb56ce1b4dcc0bf8fd636c2a45a497f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa11138187974fefb60699b5ce3695fd0fb56ce1b4dcc0bf8fd636c2a45a497f->enter($__internal_aa11138187974fefb60699b5ce3695fd0fb56ce1b4dcc0bf8fd636c2a45a497f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_673cd9b2b19a8b7539d2ea2459143cb1e49a2fea67385a7d1a9c63df2718f978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673cd9b2b19a8b7539d2ea2459143cb1e49a2fea67385a7d1a9c63df2718f978->enter($__internal_673cd9b2b19a8b7539d2ea2459143cb1e49a2fea67385a7d1a9c63df2718f978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 4
        echo "
    <p>@asl by: Justin Weber</p>

";
        
        $__internal_673cd9b2b19a8b7539d2ea2459143cb1e49a2fea67385a7d1a9c63df2718f978->leave($__internal_673cd9b2b19a8b7539d2ea2459143cb1e49a2fea67385a7d1a9c63df2718f978_prof);

        
        $__internal_aa11138187974fefb60699b5ce3695fd0fb56ce1b4dcc0bf8fd636c2a45a497f->leave($__internal_aa11138187974fefb60699b5ce3695fd0fb56ce1b4dcc0bf8fd636c2a45a497f_prof);

    }

    public function getTemplateName()
    {
        return "templates/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block footer %}

    <p>@asl by: Justin Weber</p>

{% endblock footer %}", "templates/footer.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/templates/footer.html.twig");
    }
}
