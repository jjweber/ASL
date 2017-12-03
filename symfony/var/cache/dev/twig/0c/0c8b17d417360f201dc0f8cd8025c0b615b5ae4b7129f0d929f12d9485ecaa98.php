<?php

/* templates/footer.html.twig */
class __TwigTemplate_879b72f56ff68d03950710c9c33b83985e76f4e6a3d92c032e1a364e1605cb91 extends Twig_Template
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
        $__internal_37ae86605c673bc8976884fa9245980c00ef9479ff27407077172cbcf45e6200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ae86605c673bc8976884fa9245980c00ef9479ff27407077172cbcf45e6200->enter($__internal_37ae86605c673bc8976884fa9245980c00ef9479ff27407077172cbcf45e6200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/footer.html.twig"));

        $__internal_7df8ca332a3852e882400a6d619360d242e4ea00fce84634d56a5d26263a8d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df8ca332a3852e882400a6d619360d242e4ea00fce84634d56a5d26263a8d69->enter($__internal_7df8ca332a3852e882400a6d619360d242e4ea00fce84634d56a5d26263a8d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/footer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37ae86605c673bc8976884fa9245980c00ef9479ff27407077172cbcf45e6200->leave($__internal_37ae86605c673bc8976884fa9245980c00ef9479ff27407077172cbcf45e6200_prof);

        
        $__internal_7df8ca332a3852e882400a6d619360d242e4ea00fce84634d56a5d26263a8d69->leave($__internal_7df8ca332a3852e882400a6d619360d242e4ea00fce84634d56a5d26263a8d69_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_acd5eb9493ed7d11d06b349f3d7d3a342f9d661a669645e6a02ea01118e139c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd5eb9493ed7d11d06b349f3d7d3a342f9d661a669645e6a02ea01118e139c4->enter($__internal_acd5eb9493ed7d11d06b349f3d7d3a342f9d661a669645e6a02ea01118e139c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_df9842aa351412852a13b295b73a3cbba0c276cbfb903854e7c242ea17016de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9842aa351412852a13b295b73a3cbba0c276cbfb903854e7c242ea17016de0->enter($__internal_df9842aa351412852a13b295b73a3cbba0c276cbfb903854e7c242ea17016de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 4
        echo "
    <p>@asl by: Justin Weber</p>

";
        
        $__internal_df9842aa351412852a13b295b73a3cbba0c276cbfb903854e7c242ea17016de0->leave($__internal_df9842aa351412852a13b295b73a3cbba0c276cbfb903854e7c242ea17016de0_prof);

        
        $__internal_acd5eb9493ed7d11d06b349f3d7d3a342f9d661a669645e6a02ea01118e139c4->leave($__internal_acd5eb9493ed7d11d06b349f3d7d3a342f9d661a669645e6a02ea01118e139c4_prof);

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

{% endblock footer %}", "templates/footer.html.twig", "/Users/jweber0169/Documents/asl/app/Resources/views/templates/footer.html.twig");
    }
}
