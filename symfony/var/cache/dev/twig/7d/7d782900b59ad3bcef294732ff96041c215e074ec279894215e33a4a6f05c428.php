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
        $__internal_06a435b81f714a151e374abd2cf426eab77b2dffca23c4c6f6ea730f08091c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a435b81f714a151e374abd2cf426eab77b2dffca23c4c6f6ea730f08091c7c->enter($__internal_06a435b81f714a151e374abd2cf426eab77b2dffca23c4c6f6ea730f08091c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ba434bfb9329e5339a0c8f635b5c7f18ba58b4a1f6779409fe351871197b6569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba434bfb9329e5339a0c8f635b5c7f18ba58b4a1f6779409fe351871197b6569->enter($__internal_ba434bfb9329e5339a0c8f635b5c7f18ba58b4a1f6779409fe351871197b6569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_06a435b81f714a151e374abd2cf426eab77b2dffca23c4c6f6ea730f08091c7c->leave($__internal_06a435b81f714a151e374abd2cf426eab77b2dffca23c4c6f6ea730f08091c7c_prof);

        
        $__internal_ba434bfb9329e5339a0c8f635b5c7f18ba58b4a1f6779409fe351871197b6569->leave($__internal_ba434bfb9329e5339a0c8f635b5c7f18ba58b4a1f6779409fe351871197b6569_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0908ed3053a1b72730c81f2d69ff149f24a9b63c3fcec5873c11a4a08caebd9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0908ed3053a1b72730c81f2d69ff149f24a9b63c3fcec5873c11a4a08caebd9c->enter($__internal_0908ed3053a1b72730c81f2d69ff149f24a9b63c3fcec5873c11a4a08caebd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf6d4bb115a8b6db15b148641892c6b1c54c48976d263c3b7f3b47a8b37397a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf6d4bb115a8b6db15b148641892c6b1c54c48976d263c3b7f3b47a8b37397a2->enter($__internal_cf6d4bb115a8b6db15b148641892c6b1c54c48976d263c3b7f3b47a8b37397a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cf6d4bb115a8b6db15b148641892c6b1c54c48976d263c3b7f3b47a8b37397a2->leave($__internal_cf6d4bb115a8b6db15b148641892c6b1c54c48976d263c3b7f3b47a8b37397a2_prof);

        
        $__internal_0908ed3053a1b72730c81f2d69ff149f24a9b63c3fcec5873c11a4a08caebd9c->leave($__internal_0908ed3053a1b72730c81f2d69ff149f24a9b63c3fcec5873c11a4a08caebd9c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0cc9faa2b787355d163f1374610710f8b49d60cb7d07363f40c46ba59160bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0cc9faa2b787355d163f1374610710f8b49d60cb7d07363f40c46ba59160bfb->enter($__internal_b0cc9faa2b787355d163f1374610710f8b49d60cb7d07363f40c46ba59160bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ed7300fd836fa08dfb551d768291cf6fe90ded7c726737b1ca155911f7ead5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7300fd836fa08dfb551d768291cf6fe90ded7c726737b1ca155911f7ead5ea->enter($__internal_ed7300fd836fa08dfb551d768291cf6fe90ded7c726737b1ca155911f7ead5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ed7300fd836fa08dfb551d768291cf6fe90ded7c726737b1ca155911f7ead5ea->leave($__internal_ed7300fd836fa08dfb551d768291cf6fe90ded7c726737b1ca155911f7ead5ea_prof);

        
        $__internal_b0cc9faa2b787355d163f1374610710f8b49d60cb7d07363f40c46ba59160bfb->leave($__internal_b0cc9faa2b787355d163f1374610710f8b49d60cb7d07363f40c46ba59160bfb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1d5fd6fd5623f5bb454b4a881f42de4a5c9024aac13b579a9e325ca3aae49a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d5fd6fd5623f5bb454b4a881f42de4a5c9024aac13b579a9e325ca3aae49a1->enter($__internal_b1d5fd6fd5623f5bb454b4a881f42de4a5c9024aac13b579a9e325ca3aae49a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42197d5ef10d5195a637cbd395835a9418f84d5d9744255daf264e0f1711dc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42197d5ef10d5195a637cbd395835a9418f84d5d9744255daf264e0f1711dc39->enter($__internal_42197d5ef10d5195a637cbd395835a9418f84d5d9744255daf264e0f1711dc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_42197d5ef10d5195a637cbd395835a9418f84d5d9744255daf264e0f1711dc39->leave($__internal_42197d5ef10d5195a637cbd395835a9418f84d5d9744255daf264e0f1711dc39_prof);

        
        $__internal_b1d5fd6fd5623f5bb454b4a881f42de4a5c9024aac13b579a9e325ca3aae49a1->leave($__internal_b1d5fd6fd5623f5bb454b4a881f42de4a5c9024aac13b579a9e325ca3aae49a1_prof);

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
", "@Twig/layout.html.twig", "/Users/jweber0169/Documents/asl/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
