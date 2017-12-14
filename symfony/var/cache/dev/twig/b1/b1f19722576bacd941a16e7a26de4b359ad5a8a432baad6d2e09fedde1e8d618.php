<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
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
        $__internal_7d61d98c43bca4aa64cd572780fdbbdf1d257648b6c0ea900664b1d6229be6bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d61d98c43bca4aa64cd572780fdbbdf1d257648b6c0ea900664b1d6229be6bb->enter($__internal_7d61d98c43bca4aa64cd572780fdbbdf1d257648b6c0ea900664b1d6229be6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_640cf5644cc01cf83f031b84f0db9727576e89bb2f307268b6ca96c3bf1b3605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640cf5644cc01cf83f031b84f0db9727576e89bb2f307268b6ca96c3bf1b3605->enter($__internal_640cf5644cc01cf83f031b84f0db9727576e89bb2f307268b6ca96c3bf1b3605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "homepage")) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "userspage")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userspage");
        echo "\">Users</a>
                    </li>

                    <li class=\"nav-item ";
        // line 32
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "hellopage")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hellopage");
        echo "\">Hello</a>
                    </li>

                    <li class=\"nav-item ";
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "productpage")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("productpage");
        echo "\">Products</a>
                    </li>

                    <li class=\"nav-item ";
        // line 40
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "registerForm")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 41
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
                    ";
        // line 59
        echo "                    </h1>
                </div>

            </div>
            <!-- /.row -->

            <div class=\"row\">

                <div class=\"col-md-8\">
                    ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 69
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
        // line 100
        $this->displayBlock('footer', $context, $blocks);
        // line 103
        echo "
        </div>

        ";
        // line 106
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "    </body>
</html>
";
        
        $__internal_7d61d98c43bca4aa64cd572780fdbbdf1d257648b6c0ea900664b1d6229be6bb->leave($__internal_7d61d98c43bca4aa64cd572780fdbbdf1d257648b6c0ea900664b1d6229be6bb_prof);

        
        $__internal_640cf5644cc01cf83f031b84f0db9727576e89bb2f307268b6ca96c3bf1b3605->leave($__internal_640cf5644cc01cf83f031b84f0db9727576e89bb2f307268b6ca96c3bf1b3605_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad9ebf5fa7cbe34db7b10f80b17c2812cdaa7c45073833c115c2f5f4c0c35f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9ebf5fa7cbe34db7b10f80b17c2812cdaa7c45073833c115c2f5f4c0c35f15->enter($__internal_ad9ebf5fa7cbe34db7b10f80b17c2812cdaa7c45073833c115c2f5f4c0c35f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_afb5bad7bad231a3098a2449ae3026e3fc5676bc305d77f3a542911c0d69108b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb5bad7bad231a3098a2449ae3026e3fc5676bc305d77f3a542911c0d69108b->enter($__internal_afb5bad7bad231a3098a2449ae3026e3fc5676bc305d77f3a542911c0d69108b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_afb5bad7bad231a3098a2449ae3026e3fc5676bc305d77f3a542911c0d69108b->leave($__internal_afb5bad7bad231a3098a2449ae3026e3fc5676bc305d77f3a542911c0d69108b_prof);

        
        $__internal_ad9ebf5fa7cbe34db7b10f80b17c2812cdaa7c45073833c115c2f5f4c0c35f15->leave($__internal_ad9ebf5fa7cbe34db7b10f80b17c2812cdaa7c45073833c115c2f5f4c0c35f15_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9748421fa5677e95c858851a4bfa5479a99cd57ed86a5946217b6a7cbbad52e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9748421fa5677e95c858851a4bfa5479a99cd57ed86a5946217b6a7cbbad52e3->enter($__internal_9748421fa5677e95c858851a4bfa5479a99cd57ed86a5946217b6a7cbbad52e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b88f51cd3dc80e9f54cc86dcfdd4631db7ab6e8cf5add174a84cc5690bf8a3b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88f51cd3dc80e9f54cc86dcfdd4631db7ab6e8cf5add174a84cc5690bf8a3b5->enter($__internal_b88f51cd3dc80e9f54cc86dcfdd4631db7ab6e8cf5add174a84cc5690bf8a3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b88f51cd3dc80e9f54cc86dcfdd4631db7ab6e8cf5add174a84cc5690bf8a3b5->leave($__internal_b88f51cd3dc80e9f54cc86dcfdd4631db7ab6e8cf5add174a84cc5690bf8a3b5_prof);

        
        $__internal_9748421fa5677e95c858851a4bfa5479a99cd57ed86a5946217b6a7cbbad52e3->leave($__internal_9748421fa5677e95c858851a4bfa5479a99cd57ed86a5946217b6a7cbbad52e3_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_33570e2945d076e144c7ceede777cccc555aa96194c850ed117415a5458dc2ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33570e2945d076e144c7ceede777cccc555aa96194c850ed117415a5458dc2ea->enter($__internal_33570e2945d076e144c7ceede777cccc555aa96194c850ed117415a5458dc2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d78d7bb3dbee46e4d06250a2ea1012daad3e1383e4aca7e1c2f26fde75deb77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d78d7bb3dbee46e4d06250a2ea1012daad3e1383e4aca7e1c2f26fde75deb77->enter($__internal_1d78d7bb3dbee46e4d06250a2ea1012daad3e1383e4aca7e1c2f26fde75deb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d78d7bb3dbee46e4d06250a2ea1012daad3e1383e4aca7e1c2f26fde75deb77->leave($__internal_1d78d7bb3dbee46e4d06250a2ea1012daad3e1383e4aca7e1c2f26fde75deb77_prof);

        
        $__internal_33570e2945d076e144c7ceede777cccc555aa96194c850ed117415a5458dc2ea->leave($__internal_33570e2945d076e144c7ceede777cccc555aa96194c850ed117415a5458dc2ea_prof);

    }

    // line 100
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1f7a157287aefd02700da793526ffe545de02f8186d22f288c92aac85d461224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7a157287aefd02700da793526ffe545de02f8186d22f288c92aac85d461224->enter($__internal_1f7a157287aefd02700da793526ffe545de02f8186d22f288c92aac85d461224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_cb739bc1feb95cdcd8b3ada47b4563a9e0d567021147a782d2c4897524c8738f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb739bc1feb95cdcd8b3ada47b4563a9e0d567021147a782d2c4897524c8738f->enter($__internal_cb739bc1feb95cdcd8b3ada47b4563a9e0d567021147a782d2c4897524c8738f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 101
        echo "               ";
        $this->loadTemplate("templates/footer.html.twig", "base.html.twig", 101)->display($context);
        // line 102
        echo "            ";
        
        $__internal_cb739bc1feb95cdcd8b3ada47b4563a9e0d567021147a782d2c4897524c8738f->leave($__internal_cb739bc1feb95cdcd8b3ada47b4563a9e0d567021147a782d2c4897524c8738f_prof);

        
        $__internal_1f7a157287aefd02700da793526ffe545de02f8186d22f288c92aac85d461224->leave($__internal_1f7a157287aefd02700da793526ffe545de02f8186d22f288c92aac85d461224_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc222d2fee5bcb67aa544325cfca90f9d08fadf6552974ca335bbe8ce4adbba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc222d2fee5bcb67aa544325cfca90f9d08fadf6552974ca335bbe8ce4adbba2->enter($__internal_bc222d2fee5bcb67aa544325cfca90f9d08fadf6552974ca335bbe8ce4adbba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e824867a81df5382699959621d864e74a02b644b2ea86cc0acee347de4aabe1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e824867a81df5382699959621d864e74a02b644b2ea86cc0acee347de4aabe1a->enter($__internal_e824867a81df5382699959621d864e74a02b644b2ea86cc0acee347de4aabe1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_e824867a81df5382699959621d864e74a02b644b2ea86cc0acee347de4aabe1a->leave($__internal_e824867a81df5382699959621d864e74a02b644b2ea86cc0acee347de4aabe1a_prof);

        
        $__internal_bc222d2fee5bcb67aa544325cfca90f9d08fadf6552974ca335bbe8ce4adbba2->leave($__internal_bc222d2fee5bcb67aa544325cfca90f9d08fadf6552974ca335bbe8ce4adbba2_prof);

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
        return array (  308 => 111,  304 => 110,  300 => 109,  296 => 108,  293 => 107,  284 => 106,  274 => 102,  271 => 101,  262 => 100,  245 => 68,  233 => 9,  229 => 8,  224 => 7,  215 => 6,  197 => 5,  185 => 113,  183 => 106,  178 => 103,  176 => 100,  143 => 69,  141 => 68,  130 => 59,  111 => 41,  105 => 40,  99 => 37,  93 => 36,  87 => 33,  81 => 32,  75 => 29,  69 => 28,  63 => 25,  56 => 24,  42 => 11,  40 => 6,  36 => 5,  30 => 1,);
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

                    <li class=\"nav-item {% if app.request.attributes.get('_route') == 'userspage' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ path('userspage') }}\">Users</a>
                    </li>

                    <li class=\"nav-item {% if app.request.attributes.get('_route') == 'hellopage' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ path('hellopage') }}\">Hello</a>
                    </li>

                    <li class=\"nav-item {% if app.request.attributes.get('_route') == 'productpage' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ path('productpage') }}\">Products</a>
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
                    {#<h1 class=\"page-header\">{{ title }}
                        <small>{{ title }} Subheading</small>#}
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
