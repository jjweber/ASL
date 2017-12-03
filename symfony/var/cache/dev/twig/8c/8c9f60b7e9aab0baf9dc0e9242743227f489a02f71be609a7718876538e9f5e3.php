<?php

/* aslViews/hello.html.twig */
class __TwigTemplate_89e7708f9e5f3bfd70245194f97120e45930d525f0c23fbc6014351195360ac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "aslViews/hello.html.twig", 1);
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
        $__internal_714abe253c9c9dae0c58bde1d20833386e13c190fa669a68e90cb4b2d71b4243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714abe253c9c9dae0c58bde1d20833386e13c190fa669a68e90cb4b2d71b4243->enter($__internal_714abe253c9c9dae0c58bde1d20833386e13c190fa669a68e90cb4b2d71b4243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aslViews/hello.html.twig"));

        $__internal_bc595b12aa9694002217f88971edf02ba26e7feab115fde0607613e5b9a57d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc595b12aa9694002217f88971edf02ba26e7feab115fde0607613e5b9a57d95->enter($__internal_bc595b12aa9694002217f88971edf02ba26e7feab115fde0607613e5b9a57d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aslViews/hello.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_714abe253c9c9dae0c58bde1d20833386e13c190fa669a68e90cb4b2d71b4243->leave($__internal_714abe253c9c9dae0c58bde1d20833386e13c190fa669a68e90cb4b2d71b4243_prof);

        
        $__internal_bc595b12aa9694002217f88971edf02ba26e7feab115fde0607613e5b9a57d95->leave($__internal_bc595b12aa9694002217f88971edf02ba26e7feab115fde0607613e5b9a57d95_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_16f8246fbc5d7a5dedf16d523812ad98547d9d9089c49482808cdd3cc7d4416e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f8246fbc5d7a5dedf16d523812ad98547d9d9089c49482808cdd3cc7d4416e->enter($__internal_16f8246fbc5d7a5dedf16d523812ad98547d9d9089c49482808cdd3cc7d4416e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb29c191c266d0b12c8b7bef86f5db2a3f6003c5c2baf83dca3d754ccb19a60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb29c191c266d0b12c8b7bef86f5db2a3f6003c5c2baf83dca3d754ccb19a60a->enter($__internal_fb29c191c266d0b12c8b7bef86f5db2a3f6003c5c2baf83dca3d754ccb19a60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"starter-template\">
        <h1>Hello Page</h1>
        <p class=\"lead\">This is the hello page.</p><br>
        <h2>Hello World!</h2>
    </div>

";
        
        $__internal_fb29c191c266d0b12c8b7bef86f5db2a3f6003c5c2baf83dca3d754ccb19a60a->leave($__internal_fb29c191c266d0b12c8b7bef86f5db2a3f6003c5c2baf83dca3d754ccb19a60a_prof);

        
        $__internal_16f8246fbc5d7a5dedf16d523812ad98547d9d9089c49482808cdd3cc7d4416e->leave($__internal_16f8246fbc5d7a5dedf16d523812ad98547d9d9089c49482808cdd3cc7d4416e_prof);

    }

    public function getTemplateName()
    {
        return "aslViews/hello.html.twig";
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

{% block body %}
    <div class=\"starter-template\">
        <h1>Hello Page</h1>
        <p class=\"lead\">This is the hello page.</p><br>
        <h2>Hello World!</h2>
    </div>

{% endblock body %}", "aslViews/hello.html.twig", "/Users/jweber0169/Documents/asl/app/Resources/views/aslViews/hello.html.twig");
    }
}
