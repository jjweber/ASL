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
        $__internal_315cbf2ff18f96fffd4c0bfa4b891835f799a1385af4a28ce5079b05a48f7779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315cbf2ff18f96fffd4c0bfa4b891835f799a1385af4a28ce5079b05a48f7779->enter($__internal_315cbf2ff18f96fffd4c0bfa4b891835f799a1385af4a28ce5079b05a48f7779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/footer.html.twig"));

        $__internal_3712f0721fae41519b3190bc662ea4828dcd81f68be2a59d3d7ccb8c356cc9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3712f0721fae41519b3190bc662ea4828dcd81f68be2a59d3d7ccb8c356cc9d9->enter($__internal_3712f0721fae41519b3190bc662ea4828dcd81f68be2a59d3d7ccb8c356cc9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/footer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_315cbf2ff18f96fffd4c0bfa4b891835f799a1385af4a28ce5079b05a48f7779->leave($__internal_315cbf2ff18f96fffd4c0bfa4b891835f799a1385af4a28ce5079b05a48f7779_prof);

        
        $__internal_3712f0721fae41519b3190bc662ea4828dcd81f68be2a59d3d7ccb8c356cc9d9->leave($__internal_3712f0721fae41519b3190bc662ea4828dcd81f68be2a59d3d7ccb8c356cc9d9_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_61489d306c5cd47705e70c302a7ec36ec5d9e0c2e0cd744bbd2a81f452ef8f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61489d306c5cd47705e70c302a7ec36ec5d9e0c2e0cd744bbd2a81f452ef8f4a->enter($__internal_61489d306c5cd47705e70c302a7ec36ec5d9e0c2e0cd744bbd2a81f452ef8f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_3b8a94b899ea42dc163b0b5b92a90d1ae6c48c20d5022a1ff5145ebcca5e7951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8a94b899ea42dc163b0b5b92a90d1ae6c48c20d5022a1ff5145ebcca5e7951->enter($__internal_3b8a94b899ea42dc163b0b5b92a90d1ae6c48c20d5022a1ff5145ebcca5e7951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 4
        echo "
    <p>@asl by: Justin Weber</p>

";
        
        $__internal_3b8a94b899ea42dc163b0b5b92a90d1ae6c48c20d5022a1ff5145ebcca5e7951->leave($__internal_3b8a94b899ea42dc163b0b5b92a90d1ae6c48c20d5022a1ff5145ebcca5e7951_prof);

        
        $__internal_61489d306c5cd47705e70c302a7ec36ec5d9e0c2e0cd744bbd2a81f452ef8f4a->leave($__internal_61489d306c5cd47705e70c302a7ec36ec5d9e0c2e0cd744bbd2a81f452ef8f4a_prof);

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
