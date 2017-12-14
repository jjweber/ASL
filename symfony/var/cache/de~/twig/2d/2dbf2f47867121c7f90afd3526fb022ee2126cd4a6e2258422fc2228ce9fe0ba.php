<?php

/* templates/hello.html.twig */
class __TwigTemplate_e015985d64aa7c9dec9c75055a3d2ccc831f62febb461a6777574366b609132d extends Twig_Template
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
        $__internal_b85f6ffcc9bf80b984dc9b305f1a72e296685b166f3d44889b91948947070dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85f6ffcc9bf80b984dc9b305f1a72e296685b166f3d44889b91948947070dae->enter($__internal_b85f6ffcc9bf80b984dc9b305f1a72e296685b166f3d44889b91948947070dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/hello.html.twig"));

        $__internal_b49b409c48a961e759c67d5c12ad6a4e6b58509ac1488f8a64c2bfefe1958924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49b409c48a961e759c67d5c12ad6a4e6b58509ac1488f8a64c2bfefe1958924->enter($__internal_b49b409c48a961e759c67d5c12ad6a4e6b58509ac1488f8a64c2bfefe1958924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/hello.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b85f6ffcc9bf80b984dc9b305f1a72e296685b166f3d44889b91948947070dae->leave($__internal_b85f6ffcc9bf80b984dc9b305f1a72e296685b166f3d44889b91948947070dae_prof);

        
        $__internal_b49b409c48a961e759c67d5c12ad6a4e6b58509ac1488f8a64c2bfefe1958924->leave($__internal_b49b409c48a961e759c67d5c12ad6a4e6b58509ac1488f8a64c2bfefe1958924_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17432ddfc325c0f30e22dd8c3a85ca8407b4354b5b0e15ce255f647ce2d54d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17432ddfc325c0f30e22dd8c3a85ca8407b4354b5b0e15ce255f647ce2d54d1f->enter($__internal_17432ddfc325c0f30e22dd8c3a85ca8407b4354b5b0e15ce255f647ce2d54d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f1888d7d4d862b668ee898ce86a99af104548ee43b9e914de80f6cd30263d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1888d7d4d862b668ee898ce86a99af104548ee43b9e914de80f6cd30263d47->enter($__internal_0f1888d7d4d862b668ee898ce86a99af104548ee43b9e914de80f6cd30263d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Hello Page</h1>
            <p class=\"lead\">This is the <b>";
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "</b> page.</p><br>
            <hr class=\"my-4\">
            <h2>Hello World!</h2>
        </div>
    </div>

";
        
        $__internal_0f1888d7d4d862b668ee898ce86a99af104548ee43b9e914de80f6cd30263d47->leave($__internal_0f1888d7d4d862b668ee898ce86a99af104548ee43b9e914de80f6cd30263d47_prof);

        
        $__internal_17432ddfc325c0f30e22dd8c3a85ca8407b4354b5b0e15ce255f647ce2d54d1f->leave($__internal_17432ddfc325c0f30e22dd8c3a85ca8407b4354b5b0e15ce255f647ce2d54d1f_prof);

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
