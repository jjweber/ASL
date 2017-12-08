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
        $__internal_59fc56204583d9a6d4b83554268e7d6e39d61715a99a8938fb9a861c1105a9f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59fc56204583d9a6d4b83554268e7d6e39d61715a99a8938fb9a861c1105a9f9->enter($__internal_59fc56204583d9a6d4b83554268e7d6e39d61715a99a8938fb9a861c1105a9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d9b46ae4caafe50f0971d0abcaaba5f632e25537b0a95c7ed8721f3815e7a9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b46ae4caafe50f0971d0abcaaba5f632e25537b0a95c7ed8721f3815e7a9c9->enter($__internal_d9b46ae4caafe50f0971d0abcaaba5f632e25537b0a95c7ed8721f3815e7a9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "userspage")) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "hellopage")) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "registerForm")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 37
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
        // line 53
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "
                        <small>";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " Subheading</small>
                    </h1>
                </div>

            </div>
            <!-- /.row -->

            <div class=\"row\">

                <div class=\"col-md-8\">
                    ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
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
        // line 96
        $this->displayBlock('footer', $context, $blocks);
        // line 99
        echo "
        </div>

        ";
        // line 102
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo "    </body>
</html>
";
        
        $__internal_59fc56204583d9a6d4b83554268e7d6e39d61715a99a8938fb9a861c1105a9f9->leave($__internal_59fc56204583d9a6d4b83554268e7d6e39d61715a99a8938fb9a861c1105a9f9_prof);

        
        $__internal_d9b46ae4caafe50f0971d0abcaaba5f632e25537b0a95c7ed8721f3815e7a9c9->leave($__internal_d9b46ae4caafe50f0971d0abcaaba5f632e25537b0a95c7ed8721f3815e7a9c9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_988fb2e18d1f49f91ebd346e35b71a3a7fdca107a2fec68fbb7f8e7367969089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988fb2e18d1f49f91ebd346e35b71a3a7fdca107a2fec68fbb7f8e7367969089->enter($__internal_988fb2e18d1f49f91ebd346e35b71a3a7fdca107a2fec68fbb7f8e7367969089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87176a97d4c06f02453f9c693b5af66259ad06f4886f9fa21f605d1057ed12db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87176a97d4c06f02453f9c693b5af66259ad06f4886f9fa21f605d1057ed12db->enter($__internal_87176a97d4c06f02453f9c693b5af66259ad06f4886f9fa21f605d1057ed12db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_87176a97d4c06f02453f9c693b5af66259ad06f4886f9fa21f605d1057ed12db->leave($__internal_87176a97d4c06f02453f9c693b5af66259ad06f4886f9fa21f605d1057ed12db_prof);

        
        $__internal_988fb2e18d1f49f91ebd346e35b71a3a7fdca107a2fec68fbb7f8e7367969089->leave($__internal_988fb2e18d1f49f91ebd346e35b71a3a7fdca107a2fec68fbb7f8e7367969089_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac6c0fb7f261b6f826f52a8c681cd076e0a80b8325ca5a743b5a07b86134c8a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6c0fb7f261b6f826f52a8c681cd076e0a80b8325ca5a743b5a07b86134c8a7->enter($__internal_ac6c0fb7f261b6f826f52a8c681cd076e0a80b8325ca5a743b5a07b86134c8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_83cd3fc6998e1a4a93a91b536bfe54a99495d6b8621513f262111f026229d0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83cd3fc6998e1a4a93a91b536bfe54a99495d6b8621513f262111f026229d0d0->enter($__internal_83cd3fc6998e1a4a93a91b536bfe54a99495d6b8621513f262111f026229d0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_83cd3fc6998e1a4a93a91b536bfe54a99495d6b8621513f262111f026229d0d0->leave($__internal_83cd3fc6998e1a4a93a91b536bfe54a99495d6b8621513f262111f026229d0d0_prof);

        
        $__internal_ac6c0fb7f261b6f826f52a8c681cd076e0a80b8325ca5a743b5a07b86134c8a7->leave($__internal_ac6c0fb7f261b6f826f52a8c681cd076e0a80b8325ca5a743b5a07b86134c8a7_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_a290ae2a3f2821fbc11934a8521c03517a2445bd0bfe4be87ffcdcc95b8dd611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a290ae2a3f2821fbc11934a8521c03517a2445bd0bfe4be87ffcdcc95b8dd611->enter($__internal_a290ae2a3f2821fbc11934a8521c03517a2445bd0bfe4be87ffcdcc95b8dd611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a101fae6c52d393a6771772a85abdd2f3a884e450d9aafef711ecb0700a74ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a101fae6c52d393a6771772a85abdd2f3a884e450d9aafef711ecb0700a74ca3->enter($__internal_a101fae6c52d393a6771772a85abdd2f3a884e450d9aafef711ecb0700a74ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a101fae6c52d393a6771772a85abdd2f3a884e450d9aafef711ecb0700a74ca3->leave($__internal_a101fae6c52d393a6771772a85abdd2f3a884e450d9aafef711ecb0700a74ca3_prof);

        
        $__internal_a290ae2a3f2821fbc11934a8521c03517a2445bd0bfe4be87ffcdcc95b8dd611->leave($__internal_a290ae2a3f2821fbc11934a8521c03517a2445bd0bfe4be87ffcdcc95b8dd611_prof);

    }

    // line 96
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d4a902eac5377275b3efe6a85f249bec00d5577df75baef65a60978e17bd2e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a902eac5377275b3efe6a85f249bec00d5577df75baef65a60978e17bd2e7b->enter($__internal_d4a902eac5377275b3efe6a85f249bec00d5577df75baef65a60978e17bd2e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_2506adb1db630f826a1cfe7f861f261213c5de3d363f4af0ad74e9a7b29da7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2506adb1db630f826a1cfe7f861f261213c5de3d363f4af0ad74e9a7b29da7e4->enter($__internal_2506adb1db630f826a1cfe7f861f261213c5de3d363f4af0ad74e9a7b29da7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 97
        echo "               ";
        $this->loadTemplate("templates/footer.html.twig", "base.html.twig", 97)->display($context);
        // line 98
        echo "            ";
        
        $__internal_2506adb1db630f826a1cfe7f861f261213c5de3d363f4af0ad74e9a7b29da7e4->leave($__internal_2506adb1db630f826a1cfe7f861f261213c5de3d363f4af0ad74e9a7b29da7e4_prof);

        
        $__internal_d4a902eac5377275b3efe6a85f249bec00d5577df75baef65a60978e17bd2e7b->leave($__internal_d4a902eac5377275b3efe6a85f249bec00d5577df75baef65a60978e17bd2e7b_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e977250eccf0a7b9c0359e9a136a22e166e4b9b7d3474bb2de6d858658ab695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e977250eccf0a7b9c0359e9a136a22e166e4b9b7d3474bb2de6d858658ab695->enter($__internal_2e977250eccf0a7b9c0359e9a136a22e166e4b9b7d3474bb2de6d858658ab695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6080b96ce33bcb43dae697ceb5f64d7f5fa38f7d8ae727aec25c75853076f555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6080b96ce33bcb43dae697ceb5f64d7f5fa38f7d8ae727aec25c75853076f555->enter($__internal_6080b96ce33bcb43dae697ceb5f64d7f5fa38f7d8ae727aec25c75853076f555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6080b96ce33bcb43dae697ceb5f64d7f5fa38f7d8ae727aec25c75853076f555->leave($__internal_6080b96ce33bcb43dae697ceb5f64d7f5fa38f7d8ae727aec25c75853076f555_prof);

        
        $__internal_2e977250eccf0a7b9c0359e9a136a22e166e4b9b7d3474bb2de6d858658ab695->leave($__internal_2e977250eccf0a7b9c0359e9a136a22e166e4b9b7d3474bb2de6d858658ab695_prof);

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
        return array (  302 => 107,  298 => 106,  294 => 105,  290 => 104,  287 => 103,  278 => 102,  268 => 98,  265 => 97,  256 => 96,  239 => 64,  227 => 9,  223 => 8,  218 => 7,  209 => 6,  191 => 5,  179 => 109,  177 => 102,  172 => 99,  170 => 96,  137 => 65,  135 => 64,  122 => 54,  118 => 53,  99 => 37,  93 => 36,  87 => 33,  81 => 32,  75 => 29,  69 => 28,  63 => 25,  56 => 24,  42 => 11,  40 => 6,  36 => 5,  30 => 1,);
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
