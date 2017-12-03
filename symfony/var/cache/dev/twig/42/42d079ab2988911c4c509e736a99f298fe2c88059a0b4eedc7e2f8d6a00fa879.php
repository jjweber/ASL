<?php

/* templates/index.html.twig */
class __TwigTemplate_f32a3a8f61019410a5f62cfbacbe82fcfda41a178df8e53e041100429b76ef7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "templates/index.html.twig", 1);
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
        $__internal_0f706d9983534347f8e38497405aec2983fab50fcc7c77450081278284d38e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f706d9983534347f8e38497405aec2983fab50fcc7c77450081278284d38e3f->enter($__internal_0f706d9983534347f8e38497405aec2983fab50fcc7c77450081278284d38e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/index.html.twig"));

        $__internal_fa089700c8a0eec3d37adacb133bde734ab89bc8c52e2a1858ea7fe985b923db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa089700c8a0eec3d37adacb133bde734ab89bc8c52e2a1858ea7fe985b923db->enter($__internal_fa089700c8a0eec3d37adacb133bde734ab89bc8c52e2a1858ea7fe985b923db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f706d9983534347f8e38497405aec2983fab50fcc7c77450081278284d38e3f->leave($__internal_0f706d9983534347f8e38497405aec2983fab50fcc7c77450081278284d38e3f_prof);

        
        $__internal_fa089700c8a0eec3d37adacb133bde734ab89bc8c52e2a1858ea7fe985b923db->leave($__internal_fa089700c8a0eec3d37adacb133bde734ab89bc8c52e2a1858ea7fe985b923db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87f34c3d56ebfc8ace06965adad506671dfa82f302987c94f113ca0bb1b5eca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f34c3d56ebfc8ace06965adad506671dfa82f302987c94f113ca0bb1b5eca2->enter($__internal_87f34c3d56ebfc8ace06965adad506671dfa82f302987c94f113ca0bb1b5eca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_217adcc68c18cf8bb755e751d0edcd843b635d4b9da46919af2379a4520eb7ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217adcc68c18cf8bb755e751d0edcd843b635d4b9da46919af2379a4520eb7ec->enter($__internal_217adcc68c18cf8bb755e751d0edcd843b635d4b9da46919af2379a4520eb7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Welcome</h1>
            <p class=\"lead\">This is the <b>";
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</b> page.</p><br>
            <hr class=\"my-4\">
            <p><strong>Welcome and enjoy.</strong></p>
        </div>
    </div>
";
        
        $__internal_217adcc68c18cf8bb755e751d0edcd843b635d4b9da46919af2379a4520eb7ec->leave($__internal_217adcc68c18cf8bb755e751d0edcd843b635d4b9da46919af2379a4520eb7ec_prof);

        
        $__internal_87f34c3d56ebfc8ace06965adad506671dfa82f302987c94f113ca0bb1b5eca2->leave($__internal_87f34c3d56ebfc8ace06965adad506671dfa82f302987c94f113ca0bb1b5eca2_prof);

    }

    public function getTemplateName()
    {
        return "templates/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Welcome</h1>
            <p class=\"lead\">This is the <b>{{ name|upper }}</b> page.</p><br>
            <hr class=\"my-4\">
            <p><strong>Welcome and enjoy.</strong></p>
        </div>
    </div>
{% endblock body %}", "templates/index.html.twig", "/Users/jweber0169/Documents/asl/app/Resources/views/templates/index.html.twig");
    }
}
