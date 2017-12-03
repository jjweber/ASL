<?php

/* base.html.twig */
class __TwigTemplate_022e5fbe7553c6a016dcf07c24e69cb5d15b6be45fa6378c7d9809f11e8f699d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aae279221403222705dbb1aa319c914dd8006ae7a082485646ad49587ccc0b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae279221403222705dbb1aa319c914dd8006ae7a082485646ad49587ccc0b3a->enter($__internal_aae279221403222705dbb1aa319c914dd8006ae7a082485646ad49587ccc0b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d0a00c7d0c4c1b1f31d62b71959af943c76113eebeb339a8833fec49da2052f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a00c7d0c4c1b1f31d62b71959af943c76113eebeb339a8833fec49da2052f5->enter($__internal_d0a00c7d0c4c1b1f31d62b71959af943c76113eebeb339a8833fec49da2052f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>

        <nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
            <a class=\"navbar-brand\" href=\"#\">Navbar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
                <ul class=\"navbar-nav mr-auto\">
                    
                    ";
        // line 24
        echo "                    <li class=\"nav-item ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "homepage")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
                    </li>

                    <li class=\"nav-item ";
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "hellopage")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hellopage");
        echo "\">Hello</a>
                    </li>

                </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
            </div>
        </nav>

        <div role=\"main\" class=\"container\">

            ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "
        </div><!-- /.container -->

        <div id=\"footer\">

            ";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "
        </div>

        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    </body>
</html>
";
        
        $__internal_aae279221403222705dbb1aa319c914dd8006ae7a082485646ad49587ccc0b3a->leave($__internal_aae279221403222705dbb1aa319c914dd8006ae7a082485646ad49587ccc0b3a_prof);

        
        $__internal_d0a00c7d0c4c1b1f31d62b71959af943c76113eebeb339a8833fec49da2052f5->leave($__internal_d0a00c7d0c4c1b1f31d62b71959af943c76113eebeb339a8833fec49da2052f5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_44cbd9769f162c7760dcf65ad5db1e7bbaa4c39870ed0bd84b104954e31f0b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44cbd9769f162c7760dcf65ad5db1e7bbaa4c39870ed0bd84b104954e31f0b4c->enter($__internal_44cbd9769f162c7760dcf65ad5db1e7bbaa4c39870ed0bd84b104954e31f0b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06b34596f97186272d9d46e4e313622fa10f9e26d1bb471ee62a0031a4bc01a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b34596f97186272d9d46e4e313622fa10f9e26d1bb471ee62a0031a4bc01a6->enter($__internal_06b34596f97186272d9d46e4e313622fa10f9e26d1bb471ee62a0031a4bc01a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_06b34596f97186272d9d46e4e313622fa10f9e26d1bb471ee62a0031a4bc01a6->leave($__internal_06b34596f97186272d9d46e4e313622fa10f9e26d1bb471ee62a0031a4bc01a6_prof);

        
        $__internal_44cbd9769f162c7760dcf65ad5db1e7bbaa4c39870ed0bd84b104954e31f0b4c->leave($__internal_44cbd9769f162c7760dcf65ad5db1e7bbaa4c39870ed0bd84b104954e31f0b4c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b97d3ab6daf19c4d0d76d54dc1db92b700cd679bf191ed137a2200516da6b418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97d3ab6daf19c4d0d76d54dc1db92b700cd679bf191ed137a2200516da6b418->enter($__internal_b97d3ab6daf19c4d0d76d54dc1db92b700cd679bf191ed137a2200516da6b418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0871614be2a87b2705d5f8d77ec67b2b431b39be6d8e434baffab427b9df2541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0871614be2a87b2705d5f8d77ec67b2b431b39be6d8e434baffab427b9df2541->enter($__internal_0871614be2a87b2705d5f8d77ec67b2b431b39be6d8e434baffab427b9df2541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_0871614be2a87b2705d5f8d77ec67b2b431b39be6d8e434baffab427b9df2541->leave($__internal_0871614be2a87b2705d5f8d77ec67b2b431b39be6d8e434baffab427b9df2541_prof);

        
        $__internal_b97d3ab6daf19c4d0d76d54dc1db92b700cd679bf191ed137a2200516da6b418->leave($__internal_b97d3ab6daf19c4d0d76d54dc1db92b700cd679bf191ed137a2200516da6b418_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc69fcad8bc2b350e4ace4bde6b599f916a698a90df3cfa11333da7bfc6bdbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc69fcad8bc2b350e4ace4bde6b599f916a698a90df3cfa11333da7bfc6bdbb4->enter($__internal_fc69fcad8bc2b350e4ace4bde6b599f916a698a90df3cfa11333da7bfc6bdbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b2a74409d7c4dd33ca285aadb5d257d3f16a6a0e5568d387ea9afd3ec1aae3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2a74409d7c4dd33ca285aadb5d257d3f16a6a0e5568d387ea9afd3ec1aae3a->enter($__internal_4b2a74409d7c4dd33ca285aadb5d257d3f16a6a0e5568d387ea9afd3ec1aae3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4b2a74409d7c4dd33ca285aadb5d257d3f16a6a0e5568d387ea9afd3ec1aae3a->leave($__internal_4b2a74409d7c4dd33ca285aadb5d257d3f16a6a0e5568d387ea9afd3ec1aae3a_prof);

        
        $__internal_fc69fcad8bc2b350e4ace4bde6b599f916a698a90df3cfa11333da7bfc6bdbb4->leave($__internal_fc69fcad8bc2b350e4ace4bde6b599f916a698a90df3cfa11333da7bfc6bdbb4_prof);

    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        $__internal_08d9b5e2383e99b6876330dfb2eeb36050ad2012c0f7f6352b1175fd1ab3c96f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d9b5e2383e99b6876330dfb2eeb36050ad2012c0f7f6352b1175fd1ab3c96f->enter($__internal_08d9b5e2383e99b6876330dfb2eeb36050ad2012c0f7f6352b1175fd1ab3c96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_f29fd351d2960c68477e1e32da41ff370eb588a98458eb44eea60d80eeba4f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29fd351d2960c68477e1e32da41ff370eb588a98458eb44eea60d80eeba4f6c->enter($__internal_f29fd351d2960c68477e1e32da41ff370eb588a98458eb44eea60d80eeba4f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 49
        echo "               ";
        $this->loadTemplate("templates/footer.html.twig", "base.html.twig", 49)->display($context);
        // line 50
        echo "            ";
        
        $__internal_f29fd351d2960c68477e1e32da41ff370eb588a98458eb44eea60d80eeba4f6c->leave($__internal_f29fd351d2960c68477e1e32da41ff370eb588a98458eb44eea60d80eeba4f6c_prof);

        
        $__internal_08d9b5e2383e99b6876330dfb2eeb36050ad2012c0f7f6352b1175fd1ab3c96f->leave($__internal_08d9b5e2383e99b6876330dfb2eeb36050ad2012c0f7f6352b1175fd1ab3c96f_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_874e9953709cd7789cbc6d8c658b2a0b583e5dab41a7f4c11c9395fc706cdf27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874e9953709cd7789cbc6d8c658b2a0b583e5dab41a7f4c11c9395fc706cdf27->enter($__internal_874e9953709cd7789cbc6d8c658b2a0b583e5dab41a7f4c11c9395fc706cdf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4fd5d8adc33b4ffa02004bfa551f3db0ac4305d434be1e56929f3c49a1efe5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd5d8adc33b4ffa02004bfa551f3db0ac4305d434be1e56929f3c49a1efe5fe->enter($__internal_4fd5d8adc33b4ffa02004bfa551f3db0ac4305d434be1e56929f3c49a1efe5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_4fd5d8adc33b4ffa02004bfa551f3db0ac4305d434be1e56929f3c49a1efe5fe->leave($__internal_4fd5d8adc33b4ffa02004bfa551f3db0ac4305d434be1e56929f3c49a1efe5fe_prof);

        
        $__internal_874e9953709cd7789cbc6d8c658b2a0b583e5dab41a7f4c11c9395fc706cdf27->leave($__internal_874e9953709cd7789cbc6d8c658b2a0b583e5dab41a7f4c11c9395fc706cdf27_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 59,  228 => 58,  224 => 57,  220 => 56,  217 => 55,  208 => 54,  198 => 50,  195 => 49,  186 => 48,  169 => 42,  157 => 9,  153 => 8,  148 => 7,  139 => 6,  121 => 5,  109 => 61,  107 => 54,  102 => 51,  100 => 48,  93 => 43,  91 => 42,  75 => 29,  69 => 28,  63 => 25,  56 => 24,  42 => 11,  40 => 6,  36 => 5,  30 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
        {% endblock %}
    </head>
    <body>

        <nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
            <a class=\"navbar-brand\" href=\"#\">Navbar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
                <ul class=\"navbar-nav mr-auto\">
                    
                    {# If statements for active class #}
                    <li class=\"nav-item {% if app.request.attributes.get('_route') == 'homepage' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Home</a>
                    </li>

                    <li class=\"nav-item {% if app.request.attributes.get('_route') == 'hellopage' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ path('hellopage') }}\">Hello</a>
                    </li>

                </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
            </div>
        </nav>

        <div role=\"main\" class=\"container\">

            {% block body %}{% endblock %}

        </div><!-- /.container -->

        <div id=\"footer\">

            {% block footer %}
               {% include('templates/footer.html.twig') %}
            {% endblock %}

        </div>

        {% block javascripts %}
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script type=\"text/javascript\" src=\"{{ asset('assets/js/jquery-3.2.1.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('assets/js/popper.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('assets/js/main.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/jweber0169/Documents/asl/app/Resources/views/base.html.twig");
    }
}
