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
        $__internal_e2167c8014f1dac516eece1fc4a2605b5b244466bbd2a441583f93cd2438311d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2167c8014f1dac516eece1fc4a2605b5b244466bbd2a441583f93cd2438311d->enter($__internal_e2167c8014f1dac516eece1fc4a2605b5b244466bbd2a441583f93cd2438311d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b1031377ef3ab6b150ec11dc781f7ccca0b45d6d1d05e58e7565e523528560e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1031377ef3ab6b150ec11dc781f7ccca0b45d6d1d05e58e7565e523528560e2->enter($__internal_b1031377ef3ab6b150ec11dc781f7ccca0b45d6d1d05e58e7565e523528560e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

            <!-- Portfolio Item Row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "
                        <small>";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " Subheading</small>
                    </h1>
                </div>

            </div>
            <!-- /.row -->

            <div class=\"row\">

                <div class=\"col-md-8\">
                    ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "
                </div>

                <div class=\"col-md-4\">
                    <h3>Project Description</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolores facilis iste iusto minus, molestiae mollitia nisi temporibus! Adipisci aliquam amet ea inventore iure maiores modi officia, perspiciatis ratione voluptatum.</p>
                    <h3>Project Details</h3>
                    <ul>
                        <li>Lorem Ipsum</li>
                        <li>Dolor Sit Amet</li>
                        <li>Consectetur</li>
                        <li>Adipiscing Elit</li>
                    </ul>
                </div>

            </div>
            <!-- /.row -->

            <!-- Related Projects Row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h3 class=\"page-header\">Related Projects</h3>
                </div>
            </div>



        </div><!-- /.container -->

        <div id=\"footer\">

            ";
        // line 88
        $this->displayBlock('footer', $context, $blocks);
        // line 91
        echo "
        </div>

        ";
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "    </body>
</html>
";
        
        $__internal_e2167c8014f1dac516eece1fc4a2605b5b244466bbd2a441583f93cd2438311d->leave($__internal_e2167c8014f1dac516eece1fc4a2605b5b244466bbd2a441583f93cd2438311d_prof);

        
        $__internal_b1031377ef3ab6b150ec11dc781f7ccca0b45d6d1d05e58e7565e523528560e2->leave($__internal_b1031377ef3ab6b150ec11dc781f7ccca0b45d6d1d05e58e7565e523528560e2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6fde38d9e8c29d2feb699c2bfdadda96d98ff295821d199f5fe8a8c9a352a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6fde38d9e8c29d2feb699c2bfdadda96d98ff295821d199f5fe8a8c9a352a78->enter($__internal_b6fde38d9e8c29d2feb699c2bfdadda96d98ff295821d199f5fe8a8c9a352a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7cd01263fcc2cfa186ee847da77b297aaf9590d5490454c5c2b050af63ea2b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7cd01263fcc2cfa186ee847da77b297aaf9590d5490454c5c2b050af63ea2b5->enter($__internal_a7cd01263fcc2cfa186ee847da77b297aaf9590d5490454c5c2b050af63ea2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a7cd01263fcc2cfa186ee847da77b297aaf9590d5490454c5c2b050af63ea2b5->leave($__internal_a7cd01263fcc2cfa186ee847da77b297aaf9590d5490454c5c2b050af63ea2b5_prof);

        
        $__internal_b6fde38d9e8c29d2feb699c2bfdadda96d98ff295821d199f5fe8a8c9a352a78->leave($__internal_b6fde38d9e8c29d2feb699c2bfdadda96d98ff295821d199f5fe8a8c9a352a78_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d4da296622bdd485106973fa5758f178c1f65b5e2c18b385e18fab4a458658e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4da296622bdd485106973fa5758f178c1f65b5e2c18b385e18fab4a458658e7->enter($__internal_d4da296622bdd485106973fa5758f178c1f65b5e2c18b385e18fab4a458658e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d6b4ec7f0102f1929462f5932604c9e5c362dcf8a0ddebddf31fa2a7a51458e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b4ec7f0102f1929462f5932604c9e5c362dcf8a0ddebddf31fa2a7a51458e4->enter($__internal_d6b4ec7f0102f1929462f5932604c9e5c362dcf8a0ddebddf31fa2a7a51458e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d6b4ec7f0102f1929462f5932604c9e5c362dcf8a0ddebddf31fa2a7a51458e4->leave($__internal_d6b4ec7f0102f1929462f5932604c9e5c362dcf8a0ddebddf31fa2a7a51458e4_prof);

        
        $__internal_d4da296622bdd485106973fa5758f178c1f65b5e2c18b385e18fab4a458658e7->leave($__internal_d4da296622bdd485106973fa5758f178c1f65b5e2c18b385e18fab4a458658e7_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1303bfe2d83459280336601d0848e181c654c441c6e92b0b853563bfccd2f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1303bfe2d83459280336601d0848e181c654c441c6e92b0b853563bfccd2f67->enter($__internal_f1303bfe2d83459280336601d0848e181c654c441c6e92b0b853563bfccd2f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e39f183119bdcadf1d5b74ed38acf5df5c64ec6b26ab3c0651455b56122b32c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39f183119bdcadf1d5b74ed38acf5df5c64ec6b26ab3c0651455b56122b32c1->enter($__internal_e39f183119bdcadf1d5b74ed38acf5df5c64ec6b26ab3c0651455b56122b32c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e39f183119bdcadf1d5b74ed38acf5df5c64ec6b26ab3c0651455b56122b32c1->leave($__internal_e39f183119bdcadf1d5b74ed38acf5df5c64ec6b26ab3c0651455b56122b32c1_prof);

        
        $__internal_f1303bfe2d83459280336601d0848e181c654c441c6e92b0b853563bfccd2f67->leave($__internal_f1303bfe2d83459280336601d0848e181c654c441c6e92b0b853563bfccd2f67_prof);

    }

    // line 88
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a5f5caaf25da40e7177a30d01d2275b123aa146ea05f246cf2ca95211475b29a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f5caaf25da40e7177a30d01d2275b123aa146ea05f246cf2ca95211475b29a->enter($__internal_a5f5caaf25da40e7177a30d01d2275b123aa146ea05f246cf2ca95211475b29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_0cbb2c9e40cff2cfa8c221adfe512dfff9827c78da02690d59ca015c48886005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbb2c9e40cff2cfa8c221adfe512dfff9827c78da02690d59ca015c48886005->enter($__internal_0cbb2c9e40cff2cfa8c221adfe512dfff9827c78da02690d59ca015c48886005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 89
        echo "               ";
        $this->loadTemplate("templates/footer.html.twig", "base.html.twig", 89)->display($context);
        // line 90
        echo "            ";
        
        $__internal_0cbb2c9e40cff2cfa8c221adfe512dfff9827c78da02690d59ca015c48886005->leave($__internal_0cbb2c9e40cff2cfa8c221adfe512dfff9827c78da02690d59ca015c48886005_prof);

        
        $__internal_a5f5caaf25da40e7177a30d01d2275b123aa146ea05f246cf2ca95211475b29a->leave($__internal_a5f5caaf25da40e7177a30d01d2275b123aa146ea05f246cf2ca95211475b29a_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4cf7cdc845c97ecea62e4e4e57b2a25d1030d1a78c93f5cdefc4037ee873b4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf7cdc845c97ecea62e4e4e57b2a25d1030d1a78c93f5cdefc4037ee873b4e9->enter($__internal_4cf7cdc845c97ecea62e4e4e57b2a25d1030d1a78c93f5cdefc4037ee873b4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_01a2ce8b87832a8a7cdb2b48e9041c55c59a43aa501bedd691e9263fc545e79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a2ce8b87832a8a7cdb2b48e9041c55c59a43aa501bedd691e9263fc545e79e->enter($__internal_01a2ce8b87832a8a7cdb2b48e9041c55c59a43aa501bedd691e9263fc545e79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_01a2ce8b87832a8a7cdb2b48e9041c55c59a43aa501bedd691e9263fc545e79e->leave($__internal_01a2ce8b87832a8a7cdb2b48e9041c55c59a43aa501bedd691e9263fc545e79e_prof);

        
        $__internal_4cf7cdc845c97ecea62e4e4e57b2a25d1030d1a78c93f5cdefc4037ee873b4e9->leave($__internal_4cf7cdc845c97ecea62e4e4e57b2a25d1030d1a78c93f5cdefc4037ee873b4e9_prof);

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
        return array (  278 => 99,  274 => 98,  270 => 97,  266 => 96,  263 => 95,  254 => 94,  244 => 90,  241 => 89,  232 => 88,  215 => 56,  203 => 9,  199 => 8,  194 => 7,  185 => 6,  167 => 5,  155 => 101,  153 => 94,  148 => 91,  146 => 88,  113 => 57,  111 => 56,  98 => 46,  94 => 45,  75 => 29,  69 => 28,  63 => 25,  56 => 24,  42 => 11,  40 => 6,  36 => 5,  30 => 1,);
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

            <!-- Portfolio Item Row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">{{ title }}
                        <small>{{ title }} Subheading</small>
                    </h1>
                </div>

            </div>
            <!-- /.row -->

            <div class=\"row\">

                <div class=\"col-md-8\">
                    {% block body %}{% endblock %}

                </div>

                <div class=\"col-md-4\">
                    <h3>Project Description</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolores facilis iste iusto minus, molestiae mollitia nisi temporibus! Adipisci aliquam amet ea inventore iure maiores modi officia, perspiciatis ratione voluptatum.</p>
                    <h3>Project Details</h3>
                    <ul>
                        <li>Lorem Ipsum</li>
                        <li>Dolor Sit Amet</li>
                        <li>Consectetur</li>
                        <li>Adipiscing Elit</li>
                    </ul>
                </div>

            </div>
            <!-- /.row -->

            <!-- Related Projects Row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h3 class=\"page-header\">Related Projects</h3>
                </div>
            </div>



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
", "base.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/base.html.twig");
    }
}
