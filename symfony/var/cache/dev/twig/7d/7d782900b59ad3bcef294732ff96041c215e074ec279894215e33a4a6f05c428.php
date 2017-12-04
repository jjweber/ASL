<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_66e7e75ec9c0010641dbe585aeeac70571ef1f0833e1a7882f58c23aa7e6cdbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c37626e3613df0d0041ac63ddd804df0490aca0e25e38f8f7eb5ca47c250932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c37626e3613df0d0041ac63ddd804df0490aca0e25e38f8f7eb5ca47c250932->enter($__internal_2c37626e3613df0d0041ac63ddd804df0490aca0e25e38f8f7eb5ca47c250932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a3d2c0f2730971618a4ff944fc9e4805ed74418a40f2c1b6701b82a308d50e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d2c0f2730971618a4ff944fc9e4805ed74418a40f2c1b6701b82a308d50e80->enter($__internal_a3d2c0f2730971618a4ff944fc9e4805ed74418a40f2c1b6701b82a308d50e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2c37626e3613df0d0041ac63ddd804df0490aca0e25e38f8f7eb5ca47c250932->leave($__internal_2c37626e3613df0d0041ac63ddd804df0490aca0e25e38f8f7eb5ca47c250932_prof);

        
        $__internal_a3d2c0f2730971618a4ff944fc9e4805ed74418a40f2c1b6701b82a308d50e80->leave($__internal_a3d2c0f2730971618a4ff944fc9e4805ed74418a40f2c1b6701b82a308d50e80_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_05a627f2d23881181d0dd67ece6376f31749b42fb50d2ca73ea5a21d2889732d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a627f2d23881181d0dd67ece6376f31749b42fb50d2ca73ea5a21d2889732d->enter($__internal_05a627f2d23881181d0dd67ece6376f31749b42fb50d2ca73ea5a21d2889732d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d1ed7736e6059dbd8b9f5b5c09790bb95d556bff2826510c75a4e495f8fcf79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1ed7736e6059dbd8b9f5b5c09790bb95d556bff2826510c75a4e495f8fcf79->enter($__internal_6d1ed7736e6059dbd8b9f5b5c09790bb95d556bff2826510c75a4e495f8fcf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6d1ed7736e6059dbd8b9f5b5c09790bb95d556bff2826510c75a4e495f8fcf79->leave($__internal_6d1ed7736e6059dbd8b9f5b5c09790bb95d556bff2826510c75a4e495f8fcf79_prof);

        
        $__internal_05a627f2d23881181d0dd67ece6376f31749b42fb50d2ca73ea5a21d2889732d->leave($__internal_05a627f2d23881181d0dd67ece6376f31749b42fb50d2ca73ea5a21d2889732d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bec3031ef1daf88e6e3dbdc6ea1d3266f015c1cee9151579b5d7ac5adaf1393b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec3031ef1daf88e6e3dbdc6ea1d3266f015c1cee9151579b5d7ac5adaf1393b->enter($__internal_bec3031ef1daf88e6e3dbdc6ea1d3266f015c1cee9151579b5d7ac5adaf1393b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_990fe6139d6af505277f19b25ebf1c6526027c4e723ad59f7931be5c52189e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990fe6139d6af505277f19b25ebf1c6526027c4e723ad59f7931be5c52189e00->enter($__internal_990fe6139d6af505277f19b25ebf1c6526027c4e723ad59f7931be5c52189e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_990fe6139d6af505277f19b25ebf1c6526027c4e723ad59f7931be5c52189e00->leave($__internal_990fe6139d6af505277f19b25ebf1c6526027c4e723ad59f7931be5c52189e00_prof);

        
        $__internal_bec3031ef1daf88e6e3dbdc6ea1d3266f015c1cee9151579b5d7ac5adaf1393b->leave($__internal_bec3031ef1daf88e6e3dbdc6ea1d3266f015c1cee9151579b5d7ac5adaf1393b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb811097baa155486b964b455a4fbb47b9e92f2abe4128b275b1ef96d8645087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb811097baa155486b964b455a4fbb47b9e92f2abe4128b275b1ef96d8645087->enter($__internal_eb811097baa155486b964b455a4fbb47b9e92f2abe4128b275b1ef96d8645087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49cbcea4421b2b24dc078b8f00d17b8e6dc08bf88bb11c564366f59be865a614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49cbcea4421b2b24dc078b8f00d17b8e6dc08bf88bb11c564366f59be865a614->enter($__internal_49cbcea4421b2b24dc078b8f00d17b8e6dc08bf88bb11c564366f59be865a614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_49cbcea4421b2b24dc078b8f00d17b8e6dc08bf88bb11c564366f59be865a614->leave($__internal_49cbcea4421b2b24dc078b8f00d17b8e6dc08bf88bb11c564366f59be865a614_prof);

        
        $__internal_eb811097baa155486b964b455a4fbb47b9e92f2abe4128b275b1ef96d8645087->leave($__internal_eb811097baa155486b964b455a4fbb47b9e92f2abe4128b275b1ef96d8645087_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/jweber0169/Documents/asl/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
