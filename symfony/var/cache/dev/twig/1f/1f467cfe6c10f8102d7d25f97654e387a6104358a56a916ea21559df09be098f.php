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
        $__internal_315da450eb875a27dd61b77b9d8b60281cf0ed6ef696e4eca70546ce53df1d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315da450eb875a27dd61b77b9d8b60281cf0ed6ef696e4eca70546ce53df1d1a->enter($__internal_315da450eb875a27dd61b77b9d8b60281cf0ed6ef696e4eca70546ce53df1d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/footer.html.twig"));

        $__internal_ce17bc07ae113f3adad6ccdfce114d3d09e764b92945e6fc05445fc226c4092c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce17bc07ae113f3adad6ccdfce114d3d09e764b92945e6fc05445fc226c4092c->enter($__internal_ce17bc07ae113f3adad6ccdfce114d3d09e764b92945e6fc05445fc226c4092c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/footer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_315da450eb875a27dd61b77b9d8b60281cf0ed6ef696e4eca70546ce53df1d1a->leave($__internal_315da450eb875a27dd61b77b9d8b60281cf0ed6ef696e4eca70546ce53df1d1a_prof);

        
        $__internal_ce17bc07ae113f3adad6ccdfce114d3d09e764b92945e6fc05445fc226c4092c->leave($__internal_ce17bc07ae113f3adad6ccdfce114d3d09e764b92945e6fc05445fc226c4092c_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dddad0465579faa54535a1ec22e3636b2eea5a96be10256ecd0679e624c45aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dddad0465579faa54535a1ec22e3636b2eea5a96be10256ecd0679e624c45aba->enter($__internal_dddad0465579faa54535a1ec22e3636b2eea5a96be10256ecd0679e624c45aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_05c4eb4312b888b2f7ac57216e9ce03b1f3e8960e4c0f675a2ee00248d6ae723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c4eb4312b888b2f7ac57216e9ce03b1f3e8960e4c0f675a2ee00248d6ae723->enter($__internal_05c4eb4312b888b2f7ac57216e9ce03b1f3e8960e4c0f675a2ee00248d6ae723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 4
        echo "
    <p>@asl by: Justin Weber</p>

";
        
        $__internal_05c4eb4312b888b2f7ac57216e9ce03b1f3e8960e4c0f675a2ee00248d6ae723->leave($__internal_05c4eb4312b888b2f7ac57216e9ce03b1f3e8960e4c0f675a2ee00248d6ae723_prof);

        
        $__internal_dddad0465579faa54535a1ec22e3636b2eea5a96be10256ecd0679e624c45aba->leave($__internal_dddad0465579faa54535a1ec22e3636b2eea5a96be10256ecd0679e624c45aba_prof);

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
