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
        $__internal_9567dbd90fb34e22baedffb4c9e517c33c4f04eb08bff43d3e499d9971f14fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9567dbd90fb34e22baedffb4c9e517c33c4f04eb08bff43d3e499d9971f14fea->enter($__internal_9567dbd90fb34e22baedffb4c9e517c33c4f04eb08bff43d3e499d9971f14fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_72edfdd1bfd4c5140a18cd6997ab4453c13b71865004d18c2ed0964289d32a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72edfdd1bfd4c5140a18cd6997ab4453c13b71865004d18c2ed0964289d32a02->enter($__internal_72edfdd1bfd4c5140a18cd6997ab4453c13b71865004d18c2ed0964289d32a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

                    <li class=\"nav-item ";
        // line 32
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "registerForm")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registerForm");
        echo "\">Register Form</a>
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
        // line 49
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "
                        <small>";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " Subheading</small>
                    </h1>
                </div>

            </div>
            <!-- /.row -->

            <div class=\"row\">

                <div class=\"col-md-8\">
                    ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 61
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
        // line 92
        $this->displayBlock('footer', $context, $blocks);
        // line 95
        echo "
        </div>

        ";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        // line 105
        echo "    </body>
</html>
";
        
        $__internal_9567dbd90fb34e22baedffb4c9e517c33c4f04eb08bff43d3e499d9971f14fea->leave($__internal_9567dbd90fb34e22baedffb4c9e517c33c4f04eb08bff43d3e499d9971f14fea_prof);

        
        $__internal_72edfdd1bfd4c5140a18cd6997ab4453c13b71865004d18c2ed0964289d32a02->leave($__internal_72edfdd1bfd4c5140a18cd6997ab4453c13b71865004d18c2ed0964289d32a02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_470f5c9e9e2e28c3a351305c25cf5db4378876857a7cf6ed657bcd98938a502e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470f5c9e9e2e28c3a351305c25cf5db4378876857a7cf6ed657bcd98938a502e->enter($__internal_470f5c9e9e2e28c3a351305c25cf5db4378876857a7cf6ed657bcd98938a502e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec5b148661f11f74753ee69fd79acd1dc36659062e973d217a573909bc666ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5b148661f11f74753ee69fd79acd1dc36659062e973d217a573909bc666ac7->enter($__internal_ec5b148661f11f74753ee69fd79acd1dc36659062e973d217a573909bc666ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ec5b148661f11f74753ee69fd79acd1dc36659062e973d217a573909bc666ac7->leave($__internal_ec5b148661f11f74753ee69fd79acd1dc36659062e973d217a573909bc666ac7_prof);

        
        $__internal_470f5c9e9e2e28c3a351305c25cf5db4378876857a7cf6ed657bcd98938a502e->leave($__internal_470f5c9e9e2e28c3a351305c25cf5db4378876857a7cf6ed657bcd98938a502e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b6a52aa5fb8e437f99e6d8887808a17f1ca6ff8cdb4ca1e2c60ab0549c4d053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b6a52aa5fb8e437f99e6d8887808a17f1ca6ff8cdb4ca1e2c60ab0549c4d053->enter($__internal_2b6a52aa5fb8e437f99e6d8887808a17f1ca6ff8cdb4ca1e2c60ab0549c4d053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7f4e30df1121a7f2271e0f6e96b64d118ca47f64328a86e813ad4fd85d60519c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f4e30df1121a7f2271e0f6e96b64d118ca47f64328a86e813ad4fd85d60519c->enter($__internal_7f4e30df1121a7f2271e0f6e96b64d118ca47f64328a86e813ad4fd85d60519c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7f4e30df1121a7f2271e0f6e96b64d118ca47f64328a86e813ad4fd85d60519c->leave($__internal_7f4e30df1121a7f2271e0f6e96b64d118ca47f64328a86e813ad4fd85d60519c_prof);

        
        $__internal_2b6a52aa5fb8e437f99e6d8887808a17f1ca6ff8cdb4ca1e2c60ab0549c4d053->leave($__internal_2b6a52aa5fb8e437f99e6d8887808a17f1ca6ff8cdb4ca1e2c60ab0549c4d053_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_c59bca9b58cb8ae3a867d96263ac77e158ef7f0a4accafd825e6b7b58bfbae11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c59bca9b58cb8ae3a867d96263ac77e158ef7f0a4accafd825e6b7b58bfbae11->enter($__internal_c59bca9b58cb8ae3a867d96263ac77e158ef7f0a4accafd825e6b7b58bfbae11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b71e040f3d7694a4499ab632ebd3afd41cf7c2a947707d1926ca55b8adf7d603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71e040f3d7694a4499ab632ebd3afd41cf7c2a947707d1926ca55b8adf7d603->enter($__internal_b71e040f3d7694a4499ab632ebd3afd41cf7c2a947707d1926ca55b8adf7d603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b71e040f3d7694a4499ab632ebd3afd41cf7c2a947707d1926ca55b8adf7d603->leave($__internal_b71e040f3d7694a4499ab632ebd3afd41cf7c2a947707d1926ca55b8adf7d603_prof);

        
        $__internal_c59bca9b58cb8ae3a867d96263ac77e158ef7f0a4accafd825e6b7b58bfbae11->leave($__internal_c59bca9b58cb8ae3a867d96263ac77e158ef7f0a4accafd825e6b7b58bfbae11_prof);

    }

    // line 92
    public function block_footer($context, array $blocks = array())
    {
        $__internal_faab548352344a93bb3d1e832939199e5637d5099b26031c1052cf6130bdc952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faab548352344a93bb3d1e832939199e5637d5099b26031c1052cf6130bdc952->enter($__internal_faab548352344a93bb3d1e832939199e5637d5099b26031c1052cf6130bdc952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_9f61f69f180144d333a84cc5ca6def010814c43824b96e77501a263b44c24379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f61f69f180144d333a84cc5ca6def010814c43824b96e77501a263b44c24379->enter($__internal_9f61f69f180144d333a84cc5ca6def010814c43824b96e77501a263b44c24379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 93
        echo "               ";
        $this->loadTemplate("templates/footer.html.twig", "base.html.twig", 93)->display($context);
        // line 94
        echo "            ";
        
        $__internal_9f61f69f180144d333a84cc5ca6def010814c43824b96e77501a263b44c24379->leave($__internal_9f61f69f180144d333a84cc5ca6def010814c43824b96e77501a263b44c24379_prof);

        
        $__internal_faab548352344a93bb3d1e832939199e5637d5099b26031c1052cf6130bdc952->leave($__internal_faab548352344a93bb3d1e832939199e5637d5099b26031c1052cf6130bdc952_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_99ea3430c111c8a42324f51e1faa5ccceb8028f2958eed9887be9fd0e9c3333e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ea3430c111c8a42324f51e1faa5ccceb8028f2958eed9887be9fd0e9c3333e->enter($__internal_99ea3430c111c8a42324f51e1faa5ccceb8028f2958eed9887be9fd0e9c3333e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_736e0b2fa7df1796b56712d66d132afc18903b9dcecb9c1a13b0e14d3f13d5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736e0b2fa7df1796b56712d66d132afc18903b9dcecb9c1a13b0e14d3f13d5fe->enter($__internal_736e0b2fa7df1796b56712d66d132afc18903b9dcecb9c1a13b0e14d3f13d5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_736e0b2fa7df1796b56712d66d132afc18903b9dcecb9c1a13b0e14d3f13d5fe->leave($__internal_736e0b2fa7df1796b56712d66d132afc18903b9dcecb9c1a13b0e14d3f13d5fe_prof);

        
        $__internal_99ea3430c111c8a42324f51e1faa5ccceb8028f2958eed9887be9fd0e9c3333e->leave($__internal_99ea3430c111c8a42324f51e1faa5ccceb8028f2958eed9887be9fd0e9c3333e_prof);

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
        return array (  290 => 103,  286 => 102,  282 => 101,  278 => 100,  275 => 99,  266 => 98,  256 => 94,  253 => 93,  244 => 92,  227 => 60,  215 => 9,  211 => 8,  206 => 7,  197 => 6,  179 => 5,  167 => 105,  165 => 98,  160 => 95,  158 => 92,  125 => 61,  123 => 60,  110 => 50,  106 => 49,  87 => 33,  81 => 32,  75 => 29,  69 => 28,  63 => 25,  56 => 24,  42 => 11,  40 => 6,  36 => 5,  30 => 1,);
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

                    <li class=\"nav-item {% if app.request.attributes.get('_route') == 'registerForm' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ path('registerForm') }}\">Register Form</a>
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
