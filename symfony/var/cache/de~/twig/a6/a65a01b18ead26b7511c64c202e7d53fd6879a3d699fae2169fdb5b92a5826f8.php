<?php

/* templates/hello.html.twig */
class __TwigTemplate_5f61e25344a7c38ff0dfec70865bdfd8536482ff0cb7537593f5334a2bf97fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "templates/hello.html.twig", 1);
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
        $__internal_7df0dfae9f59b05a31aac7b579e54b8f308cbb35c0dad8ec667a2ca9ce1f5e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df0dfae9f59b05a31aac7b579e54b8f308cbb35c0dad8ec667a2ca9ce1f5e4f->enter($__internal_7df0dfae9f59b05a31aac7b579e54b8f308cbb35c0dad8ec667a2ca9ce1f5e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/hello.html.twig"));

        $__internal_2ff8ac6ce9c23690a7c4e4120280cf5fe5ffdd9b0fb4efa7dae7d926b98d151e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff8ac6ce9c23690a7c4e4120280cf5fe5ffdd9b0fb4efa7dae7d926b98d151e->enter($__internal_2ff8ac6ce9c23690a7c4e4120280cf5fe5ffdd9b0fb4efa7dae7d926b98d151e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/hello.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7df0dfae9f59b05a31aac7b579e54b8f308cbb35c0dad8ec667a2ca9ce1f5e4f->leave($__internal_7df0dfae9f59b05a31aac7b579e54b8f308cbb35c0dad8ec667a2ca9ce1f5e4f_prof);

        
        $__internal_2ff8ac6ce9c23690a7c4e4120280cf5fe5ffdd9b0fb4efa7dae7d926b98d151e->leave($__internal_2ff8ac6ce9c23690a7c4e4120280cf5fe5ffdd9b0fb4efa7dae7d926b98d151e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfc394cad65bbcc36a301f7f004f4f6106a1ba8f7651e03de80f9b343fa5ba73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc394cad65bbcc36a301f7f004f4f6106a1ba8f7651e03de80f9b343fa5ba73->enter($__internal_cfc394cad65bbcc36a301f7f004f4f6106a1ba8f7651e03de80f9b343fa5ba73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e525b06f0ff98c0049e3ae5c6bd12e104fc1d685bb0e2be7432f967f597415b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e525b06f0ff98c0049e3ae5c6bd12e104fc1d685bb0e2be7432f967f597415b->enter($__internal_7e525b06f0ff98c0049e3ae5c6bd12e104fc1d685bb0e2be7432f967f597415b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Hello Page</h1>
            <p class=\"lead\">This is the <b>";
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["name"] ?? $this->getContext($context, "name"))), "html", null, true);
        echo "</b> page.</p><br>
            <hr class=\"my-4\">
            <h2>Hello World!</h2>
        </div>
    </div>

";
        
        $__internal_7e525b06f0ff98c0049e3ae5c6bd12e104fc1d685bb0e2be7432f967f597415b->leave($__internal_7e525b06f0ff98c0049e3ae5c6bd12e104fc1d685bb0e2be7432f967f597415b_prof);

        
        $__internal_cfc394cad65bbcc36a301f7f004f4f6106a1ba8f7651e03de80f9b343fa5ba73->leave($__internal_cfc394cad65bbcc36a301f7f004f4f6106a1ba8f7651e03de80f9b343fa5ba73_prof);

    }

    public function getTemplateName()
    {
        return "templates/hello.html.twig";
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
            <h1 class=\"display-3\">Hello Page</h1>
            <p class=\"lead\">This is the <b>{{ name|upper }}</b> page.</p><br>
            <hr class=\"my-4\">
            <h2>Hello World!</h2>
        </div>
    </div>

{% endblock body %}", "templates/hello.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/templates/hello.html.twig");
    }
}
