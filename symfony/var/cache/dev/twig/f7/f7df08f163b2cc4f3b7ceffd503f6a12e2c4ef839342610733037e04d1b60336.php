<?php

/* templates/regdone.html.twig */
class __TwigTemplate_77698f1e8840171f21015b92ec9b4e00a8f5522635b7249b568a4e30ecf31996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "templates/regdone.html.twig", 1);
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
        $__internal_4876499cafe99896f926e9933e565d5c93c2a9793fc3baf05608f38114738ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4876499cafe99896f926e9933e565d5c93c2a9793fc3baf05608f38114738ae7->enter($__internal_4876499cafe99896f926e9933e565d5c93c2a9793fc3baf05608f38114738ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/regdone.html.twig"));

        $__internal_45dab36366b512dde5f7444c95337b504f69e61b6412963ddc6664c67d9646f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45dab36366b512dde5f7444c95337b504f69e61b6412963ddc6664c67d9646f9->enter($__internal_45dab36366b512dde5f7444c95337b504f69e61b6412963ddc6664c67d9646f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/regdone.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4876499cafe99896f926e9933e565d5c93c2a9793fc3baf05608f38114738ae7->leave($__internal_4876499cafe99896f926e9933e565d5c93c2a9793fc3baf05608f38114738ae7_prof);

        
        $__internal_45dab36366b512dde5f7444c95337b504f69e61b6412963ddc6664c67d9646f9->leave($__internal_45dab36366b512dde5f7444c95337b504f69e61b6412963ddc6664c67d9646f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36872ec5490774023746ebc0e195c74f546473397a3cfcadd6de094d1e41e8af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36872ec5490774023746ebc0e195c74f546473397a3cfcadd6de094d1e41e8af->enter($__internal_36872ec5490774023746ebc0e195c74f546473397a3cfcadd6de094d1e41e8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6d1eda78e81a4c47c1099418bafa71f8c600db59f11479581b8bbbbb80f06f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d1eda78e81a4c47c1099418bafa71f8c600db59f11479581b8bbbbb80f06f0->enter($__internal_d6d1eda78e81a4c47c1099418bafa71f8c600db59f11479581b8bbbbb80f06f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div id=\"wrapper\">
        <div id=\"container\">

            Your Form Has Been Successfully Submitted!

        </div>
    </div>

";
        
        $__internal_d6d1eda78e81a4c47c1099418bafa71f8c600db59f11479581b8bbbbb80f06f0->leave($__internal_d6d1eda78e81a4c47c1099418bafa71f8c600db59f11479581b8bbbbb80f06f0_prof);

        
        $__internal_36872ec5490774023746ebc0e195c74f546473397a3cfcadd6de094d1e41e8af->leave($__internal_36872ec5490774023746ebc0e195c74f546473397a3cfcadd6de094d1e41e8af_prof);

    }

    public function getTemplateName()
    {
        return "templates/regdone.html.twig";
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

    <div id=\"wrapper\">
        <div id=\"container\">

            Your Form Has Been Successfully Submitted!

        </div>
    </div>

{% endblock body %}", "templates/regdone.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/templates/regdone.html.twig");
    }
}
