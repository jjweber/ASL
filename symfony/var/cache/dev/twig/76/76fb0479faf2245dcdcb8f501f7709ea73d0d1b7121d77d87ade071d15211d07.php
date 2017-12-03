<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_540208acb6eb8e68f2ef3e007d7996a1eb047223c9fe99bdc16804a2f1c9db94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52d8e0cea5af220cb7d4aab6c845c8242ee89579d15d1968d2350af8b21190c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d8e0cea5af220cb7d4aab6c845c8242ee89579d15d1968d2350af8b21190c1->enter($__internal_52d8e0cea5af220cb7d4aab6c845c8242ee89579d15d1968d2350af8b21190c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_88d0e41e0503bb4fd383387a8d8e429d4286fd3c04b6c91f712e833d9abbce7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d0e41e0503bb4fd383387a8d8e429d4286fd3c04b6c91f712e833d9abbce7c->enter($__internal_88d0e41e0503bb4fd383387a8d8e429d4286fd3c04b6c91f712e833d9abbce7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52d8e0cea5af220cb7d4aab6c845c8242ee89579d15d1968d2350af8b21190c1->leave($__internal_52d8e0cea5af220cb7d4aab6c845c8242ee89579d15d1968d2350af8b21190c1_prof);

        
        $__internal_88d0e41e0503bb4fd383387a8d8e429d4286fd3c04b6c91f712e833d9abbce7c->leave($__internal_88d0e41e0503bb4fd383387a8d8e429d4286fd3c04b6c91f712e833d9abbce7c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e9193e4ee83553585c3db4a9b4569b6db957c859068640ea050862f549e5c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9193e4ee83553585c3db4a9b4569b6db957c859068640ea050862f549e5c9f->enter($__internal_1e9193e4ee83553585c3db4a9b4569b6db957c859068640ea050862f549e5c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7d4d5e35ebbe071f1f7590609c9c7acc143b02fdbbbde7754e17de80937e95b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d4d5e35ebbe071f1f7590609c9c7acc143b02fdbbbde7754e17de80937e95b->enter($__internal_f7d4d5e35ebbe071f1f7590609c9c7acc143b02fdbbbde7754e17de80937e95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f7d4d5e35ebbe071f1f7590609c9c7acc143b02fdbbbde7754e17de80937e95b->leave($__internal_f7d4d5e35ebbe071f1f7590609c9c7acc143b02fdbbbde7754e17de80937e95b_prof);

        
        $__internal_1e9193e4ee83553585c3db4a9b4569b6db957c859068640ea050862f549e5c9f->leave($__internal_1e9193e4ee83553585c3db4a9b4569b6db957c859068640ea050862f549e5c9f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_537c2b4e2ea1d569b9466c5c717daebba1d8bb4235a187e05749ed1c0c6fe55e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537c2b4e2ea1d569b9466c5c717daebba1d8bb4235a187e05749ed1c0c6fe55e->enter($__internal_537c2b4e2ea1d569b9466c5c717daebba1d8bb4235a187e05749ed1c0c6fe55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_856fcdc0242bc8a3c3bc81d4c1acaf545f67381838d877edc854641f797954e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856fcdc0242bc8a3c3bc81d4c1acaf545f67381838d877edc854641f797954e0->enter($__internal_856fcdc0242bc8a3c3bc81d4c1acaf545f67381838d877edc854641f797954e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_856fcdc0242bc8a3c3bc81d4c1acaf545f67381838d877edc854641f797954e0->leave($__internal_856fcdc0242bc8a3c3bc81d4c1acaf545f67381838d877edc854641f797954e0_prof);

        
        $__internal_537c2b4e2ea1d569b9466c5c717daebba1d8bb4235a187e05749ed1c0c6fe55e->leave($__internal_537c2b4e2ea1d569b9466c5c717daebba1d8bb4235a187e05749ed1c0c6fe55e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6236e347e385fbe6c66b398f404862ee67dccf178f011a3ebf872dc50069cf29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6236e347e385fbe6c66b398f404862ee67dccf178f011a3ebf872dc50069cf29->enter($__internal_6236e347e385fbe6c66b398f404862ee67dccf178f011a3ebf872dc50069cf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_910692aff9c692e297241ada06bb0a3368d94ef8204cdb36bd22b1c62ef67dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910692aff9c692e297241ada06bb0a3368d94ef8204cdb36bd22b1c62ef67dc6->enter($__internal_910692aff9c692e297241ada06bb0a3368d94ef8204cdb36bd22b1c62ef67dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_910692aff9c692e297241ada06bb0a3368d94ef8204cdb36bd22b1c62ef67dc6->leave($__internal_910692aff9c692e297241ada06bb0a3368d94ef8204cdb36bd22b1c62ef67dc6_prof);

        
        $__internal_6236e347e385fbe6c66b398f404862ee67dccf178f011a3ebf872dc50069cf29->leave($__internal_6236e347e385fbe6c66b398f404862ee67dccf178f011a3ebf872dc50069cf29_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/jweber0169/Documents/asl/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
