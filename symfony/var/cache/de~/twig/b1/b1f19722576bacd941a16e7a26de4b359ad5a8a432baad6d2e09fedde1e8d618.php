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
        $__internal_c62c962fa5434a793058ba0e73237446f4e6d6bc629d8fa9aa5c953bca979bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62c962fa5434a793058ba0e73237446f4e6d6bc629d8fa9aa5c953bca979bec->enter($__internal_c62c962fa5434a793058ba0e73237446f4e6d6bc629d8fa9aa5c953bca979bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_564be5da9704775379bf3a6f089cb30a34db35c7410cdcfebe4596c9b38337c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564be5da9704775379bf3a6f089cb30a34db35c7410cdcfebe4596c9b38337c1->enter($__internal_564be5da9704775379bf3a6f089cb30a34db35c7410cdcfebe4596c9b38337c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c62c962fa5434a793058ba0e73237446f4e6d6bc629d8fa9aa5c953bca979bec->leave($__internal_c62c962fa5434a793058ba0e73237446f4e6d6bc629d8fa9aa5c953bca979bec_prof);

        
        $__internal_564be5da9704775379bf3a6f089cb30a34db35c7410cdcfebe4596c9b38337c1->leave($__internal_564be5da9704775379bf3a6f089cb30a34db35c7410cdcfebe4596c9b38337c1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4db189dc3e32b88030aafd04c9bdbd8ed456c03318b96a8bc26c3248d7334e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db189dc3e32b88030aafd04c9bdbd8ed456c03318b96a8bc26c3248d7334e16->enter($__internal_4db189dc3e32b88030aafd04c9bdbd8ed456c03318b96a8bc26c3248d7334e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61ffcc67819a7799b344b443e6577eacaf566fc02b1012f6e904b5bf425cd61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ffcc67819a7799b344b443e6577eacaf566fc02b1012f6e904b5bf425cd61b->enter($__internal_61ffcc67819a7799b344b443e6577eacaf566fc02b1012f6e904b5bf425cd61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_61ffcc67819a7799b344b443e6577eacaf566fc02b1012f6e904b5bf425cd61b->leave($__internal_61ffcc67819a7799b344b443e6577eacaf566fc02b1012f6e904b5bf425cd61b_prof);

        
        $__internal_4db189dc3e32b88030aafd04c9bdbd8ed456c03318b96a8bc26c3248d7334e16->leave($__internal_4db189dc3e32b88030aafd04c9bdbd8ed456c03318b96a8bc26c3248d7334e16_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a068c8be31d5583504685ebe1ac58b82b16e436bb93cdf0071330b72838219fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a068c8be31d5583504685ebe1ac58b82b16e436bb93cdf0071330b72838219fc->enter($__internal_a068c8be31d5583504685ebe1ac58b82b16e436bb93cdf0071330b72838219fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ce0406e1806ea5212ceba97c4a673e8bb1b8a39d2d46a95b65b192a10a46df7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0406e1806ea5212ceba97c4a673e8bb1b8a39d2d46a95b65b192a10a46df7b->enter($__internal_ce0406e1806ea5212ceba97c4a673e8bb1b8a39d2d46a95b65b192a10a46df7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ce0406e1806ea5212ceba97c4a673e8bb1b8a39d2d46a95b65b192a10a46df7b->leave($__internal_ce0406e1806ea5212ceba97c4a673e8bb1b8a39d2d46a95b65b192a10a46df7b_prof);

        
        $__internal_a068c8be31d5583504685ebe1ac58b82b16e436bb93cdf0071330b72838219fc->leave($__internal_a068c8be31d5583504685ebe1ac58b82b16e436bb93cdf0071330b72838219fc_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8e5886a84058c88a60951f838ce49cc994ae4bdd929636fe71d4a7d42b3ec55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e5886a84058c88a60951f838ce49cc994ae4bdd929636fe71d4a7d42b3ec55->enter($__internal_b8e5886a84058c88a60951f838ce49cc994ae4bdd929636fe71d4a7d42b3ec55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f71b3e2e1da1296e3dd6ff15dd4b0c0dbbcac1eefb838400f894a9e9d722797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f71b3e2e1da1296e3dd6ff15dd4b0c0dbbcac1eefb838400f894a9e9d722797->enter($__internal_9f71b3e2e1da1296e3dd6ff15dd4b0c0dbbcac1eefb838400f894a9e9d722797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f71b3e2e1da1296e3dd6ff15dd4b0c0dbbcac1eefb838400f894a9e9d722797->leave($__internal_9f71b3e2e1da1296e3dd6ff15dd4b0c0dbbcac1eefb838400f894a9e9d722797_prof);

        
        $__internal_b8e5886a84058c88a60951f838ce49cc994ae4bdd929636fe71d4a7d42b3ec55->leave($__internal_b8e5886a84058c88a60951f838ce49cc994ae4bdd929636fe71d4a7d42b3ec55_prof);

    }

    // line 100
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7c053becc820bf9cb32a65c5f34b5ef4fd04ea878d1e636b6371eb3d2e79fddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c053becc820bf9cb32a65c5f34b5ef4fd04ea878d1e636b6371eb3d2e79fddd->enter($__internal_7c053becc820bf9cb32a65c5f34b5ef4fd04ea878d1e636b6371eb3d2e79fddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ce0dccd42cd962cf93a3c1b21f26d23ec6a1a380d010ac469f75ac597e8722d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0dccd42cd962cf93a3c1b21f26d23ec6a1a380d010ac469f75ac597e8722d6->enter($__internal_ce0dccd42cd962cf93a3c1b21f26d23ec6a1a380d010ac469f75ac597e8722d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 101
        echo "               ";
        $this->loadTemplate("templates/footer.html.twig", "base.html.twig", 101)->display($context);
        // line 102
        echo "            ";
        
        $__internal_ce0dccd42cd962cf93a3c1b21f26d23ec6a1a380d010ac469f75ac597e8722d6->leave($__internal_ce0dccd42cd962cf93a3c1b21f26d23ec6a1a380d010ac469f75ac597e8722d6_prof);

        
        $__internal_7c053becc820bf9cb32a65c5f34b5ef4fd04ea878d1e636b6371eb3d2e79fddd->leave($__internal_7c053becc820bf9cb32a65c5f34b5ef4fd04ea878d1e636b6371eb3d2e79fddd_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79d3f00b049efceb4785e8164a9c70a5e6a14c00467332cd9d7d1cfc91e83cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d3f00b049efceb4785e8164a9c70a5e6a14c00467332cd9d7d1cfc91e83cba->enter($__internal_79d3f00b049efceb4785e8164a9c70a5e6a14c00467332cd9d7d1cfc91e83cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c718e1c7e6941365afee1a519c5aa8297804feb6024ebff38a986d89220fa71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c718e1c7e6941365afee1a519c5aa8297804feb6024ebff38a986d89220fa71f->enter($__internal_c718e1c7e6941365afee1a519c5aa8297804feb6024ebff38a986d89220fa71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c718e1c7e6941365afee1a519c5aa8297804feb6024ebff38a986d89220fa71f->leave($__internal_c718e1c7e6941365afee1a519c5aa8297804feb6024ebff38a986d89220fa71f_prof);

        
        $__internal_79d3f00b049efceb4785e8164a9c70a5e6a14c00467332cd9d7d1cfc91e83cba->leave($__internal_79d3f00b049efceb4785e8164a9c70a5e6a14c00467332cd9d7d1cfc91e83cba_prof);

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
