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
        $__internal_9e2d77ae670d2b9b862a7fea8fae9cc4ac15138d84cfa00baf0301ad4822e3a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2d77ae670d2b9b862a7fea8fae9cc4ac15138d84cfa00baf0301ad4822e3a2->enter($__internal_9e2d77ae670d2b9b862a7fea8fae9cc4ac15138d84cfa00baf0301ad4822e3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/index.html.twig"));

        $__internal_c612c8acf89220b23a1468a5b6ab01094490efe3773f225757953fffee90c22b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c612c8acf89220b23a1468a5b6ab01094490efe3773f225757953fffee90c22b->enter($__internal_c612c8acf89220b23a1468a5b6ab01094490efe3773f225757953fffee90c22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e2d77ae670d2b9b862a7fea8fae9cc4ac15138d84cfa00baf0301ad4822e3a2->leave($__internal_9e2d77ae670d2b9b862a7fea8fae9cc4ac15138d84cfa00baf0301ad4822e3a2_prof);

        
        $__internal_c612c8acf89220b23a1468a5b6ab01094490efe3773f225757953fffee90c22b->leave($__internal_c612c8acf89220b23a1468a5b6ab01094490efe3773f225757953fffee90c22b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_80c586ae8249c9051d49f9206b1b11b0cc866b05d361ce8a740b50e80dc72f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c586ae8249c9051d49f9206b1b11b0cc866b05d361ce8a740b50e80dc72f65->enter($__internal_80c586ae8249c9051d49f9206b1b11b0cc866b05d361ce8a740b50e80dc72f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_596fcb5269c9bbfbec7646881df2617ed83bab137f8c2d90f12c660c6d767efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596fcb5269c9bbfbec7646881df2617ed83bab137f8c2d90f12c660c6d767efd->enter($__internal_596fcb5269c9bbfbec7646881df2617ed83bab137f8c2d90f12c660c6d767efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_596fcb5269c9bbfbec7646881df2617ed83bab137f8c2d90f12c660c6d767efd->leave($__internal_596fcb5269c9bbfbec7646881df2617ed83bab137f8c2d90f12c660c6d767efd_prof);

        
        $__internal_80c586ae8249c9051d49f9206b1b11b0cc866b05d361ce8a740b50e80dc72f65->leave($__internal_80c586ae8249c9051d49f9206b1b11b0cc866b05d361ce8a740b50e80dc72f65_prof);

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
