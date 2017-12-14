<?php

/* templates/index.html.twig */
class __TwigTemplate_0778f95df9d2fc69a652d7ff9c765d27185cb932fb23657f71605e8977a668eb extends Twig_Template
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
        $__internal_c97c6b260ff0f8e4218985012a8f201154282b298b3ef3bb13eba95d752ef9d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97c6b260ff0f8e4218985012a8f201154282b298b3ef3bb13eba95d752ef9d8->enter($__internal_c97c6b260ff0f8e4218985012a8f201154282b298b3ef3bb13eba95d752ef9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/index.html.twig"));

        $__internal_55ac1c84a07466cea15c2bb4f212f12c242349525833bce963996444dc6bc31a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ac1c84a07466cea15c2bb4f212f12c242349525833bce963996444dc6bc31a->enter($__internal_55ac1c84a07466cea15c2bb4f212f12c242349525833bce963996444dc6bc31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c97c6b260ff0f8e4218985012a8f201154282b298b3ef3bb13eba95d752ef9d8->leave($__internal_c97c6b260ff0f8e4218985012a8f201154282b298b3ef3bb13eba95d752ef9d8_prof);

        
        $__internal_55ac1c84a07466cea15c2bb4f212f12c242349525833bce963996444dc6bc31a->leave($__internal_55ac1c84a07466cea15c2bb4f212f12c242349525833bce963996444dc6bc31a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_065432b5637970ef624c174672da075ab76c48647d7e75736a5135b07a423b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065432b5637970ef624c174672da075ab76c48647d7e75736a5135b07a423b93->enter($__internal_065432b5637970ef624c174672da075ab76c48647d7e75736a5135b07a423b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3072a49db2f37672dccc917c57d50bc1c016d36550ba7e42d96295ad208974b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3072a49db2f37672dccc917c57d50bc1c016d36550ba7e42d96295ad208974b5->enter($__internal_3072a49db2f37672dccc917c57d50bc1c016d36550ba7e42d96295ad208974b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Welcome</h1>
            <p class=\"lead\">This is the <b>";
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["name"] ?? $this->getContext($context, "name"))), "html", null, true);
        echo "</b> page.</p><br>
            <hr class=\"my-4\">
            <p><strong>Welcome and enjoy.</strong></p>
        </div>
    </div>
";
        
        $__internal_3072a49db2f37672dccc917c57d50bc1c016d36550ba7e42d96295ad208974b5->leave($__internal_3072a49db2f37672dccc917c57d50bc1c016d36550ba7e42d96295ad208974b5_prof);

        
        $__internal_065432b5637970ef624c174672da075ab76c48647d7e75736a5135b07a423b93->leave($__internal_065432b5637970ef624c174672da075ab76c48647d7e75736a5135b07a423b93_prof);

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
{% endblock body %}", "templates/index.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/templates/index.html.twig");
    }
}
