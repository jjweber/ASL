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
        $__internal_54e5d35b6140c80807b2f0f6d411d4f8b0d9acdb4fc277888c262bf82011b5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e5d35b6140c80807b2f0f6d411d4f8b0d9acdb4fc277888c262bf82011b5dc->enter($__internal_54e5d35b6140c80807b2f0f6d411d4f8b0d9acdb4fc277888c262bf82011b5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fa2f5e9c89ec9af3f68de40cab1e3c8189f58be75192ff8d97e83535ab1a4b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2f5e9c89ec9af3f68de40cab1e3c8189f58be75192ff8d97e83535ab1a4b95->enter($__internal_fa2f5e9c89ec9af3f68de40cab1e3c8189f58be75192ff8d97e83535ab1a4b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "productpage")) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "registerForm")) {
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
        
        $__internal_54e5d35b6140c80807b2f0f6d411d4f8b0d9acdb4fc277888c262bf82011b5dc->leave($__internal_54e5d35b6140c80807b2f0f6d411d4f8b0d9acdb4fc277888c262bf82011b5dc_prof);

        
        $__internal_fa2f5e9c89ec9af3f68de40cab1e3c8189f58be75192ff8d97e83535ab1a4b95->leave($__internal_fa2f5e9c89ec9af3f68de40cab1e3c8189f58be75192ff8d97e83535ab1a4b95_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_89733a88d591e882d1c9a3d2da483fc714f5b0729c6deab7b502386bd89bd587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89733a88d591e882d1c9a3d2da483fc714f5b0729c6deab7b502386bd89bd587->enter($__internal_89733a88d591e882d1c9a3d2da483fc714f5b0729c6deab7b502386bd89bd587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f29b2034d930eb26edcea4dc09ca417043b3880bb752aeddab7c15a83becc911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29b2034d930eb26edcea4dc09ca417043b3880bb752aeddab7c15a83becc911->enter($__internal_f29b2034d930eb26edcea4dc09ca417043b3880bb752aeddab7c15a83becc911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f29b2034d930eb26edcea4dc09ca417043b3880bb752aeddab7c15a83becc911->leave($__internal_f29b2034d930eb26edcea4dc09ca417043b3880bb752aeddab7c15a83becc911_prof);

        
        $__internal_89733a88d591e882d1c9a3d2da483fc714f5b0729c6deab7b502386bd89bd587->leave($__internal_89733a88d591e882d1c9a3d2da483fc714f5b0729c6deab7b502386bd89bd587_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24c44ca40ba28d80c282ef8da0c421e0b4b67793654074c4f30fef1b61d8ff4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c44ca40ba28d80c282ef8da0c421e0b4b67793654074c4f30fef1b61d8ff4d->enter($__internal_24c44ca40ba28d80c282ef8da0c421e0b4b67793654074c4f30fef1b61d8ff4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_474acba8e7cbb9c324cea6281fc3ea8e4f97c91f31c6840d62e941225bc51aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474acba8e7cbb9c324cea6281fc3ea8e4f97c91f31c6840d62e941225bc51aea->enter($__internal_474acba8e7cbb9c324cea6281fc3ea8e4f97c91f31c6840d62e941225bc51aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_474acba8e7cbb9c324cea6281fc3ea8e4f97c91f31c6840d62e941225bc51aea->leave($__internal_474acba8e7cbb9c324cea6281fc3ea8e4f97c91f31c6840d62e941225bc51aea_prof);

        
        $__internal_24c44ca40ba28d80c282ef8da0c421e0b4b67793654074c4f30fef1b61d8ff4d->leave($__internal_24c44ca40ba28d80c282ef8da0c421e0b4b67793654074c4f30fef1b61d8ff4d_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_7619d2a82c18be9521dc8692e32bc50edfe95c9b98e97e116423e6a65797eee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7619d2a82c18be9521dc8692e32bc50edfe95c9b98e97e116423e6a65797eee4->enter($__internal_7619d2a82c18be9521dc8692e32bc50edfe95c9b98e97e116423e6a65797eee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c39befb3f8edf6b9f4c8a5e4ba1b49c6ce05388cf3c00f66629f072f3d7c3784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39befb3f8edf6b9f4c8a5e4ba1b49c6ce05388cf3c00f66629f072f3d7c3784->enter($__internal_c39befb3f8edf6b9f4c8a5e4ba1b49c6ce05388cf3c00f66629f072f3d7c3784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c39befb3f8edf6b9f4c8a5e4ba1b49c6ce05388cf3c00f66629f072f3d7c3784->leave($__internal_c39befb3f8edf6b9f4c8a5e4ba1b49c6ce05388cf3c00f66629f072f3d7c3784_prof);

        
        $__internal_7619d2a82c18be9521dc8692e32bc50edfe95c9b98e97e116423e6a65797eee4->leave($__internal_7619d2a82c18be9521dc8692e32bc50edfe95c9b98e97e116423e6a65797eee4_prof);

    }

    // line 100
    public function block_footer($context, array $blocks = array())
    {
        $__internal_eb3338b828e4bdfb50f4e90ecd6156140a81be8331316a9e5aabe207996ae721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3338b828e4bdfb50f4e90ecd6156140a81be8331316a9e5aabe207996ae721->enter($__internal_eb3338b828e4bdfb50f4e90ecd6156140a81be8331316a9e5aabe207996ae721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_1dd7a1c4245a3f4f27a2f20ab3728c156d579704c3ce8243ace4f54bd594261f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd7a1c4245a3f4f27a2f20ab3728c156d579704c3ce8243ace4f54bd594261f->enter($__internal_1dd7a1c4245a3f4f27a2f20ab3728c156d579704c3ce8243ace4f54bd594261f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 101
        echo "               ";
        $this->loadTemplate("templates/footer.html.twig", "base.html.twig", 101)->display($context);
        // line 102
        echo "            ";
        
        $__internal_1dd7a1c4245a3f4f27a2f20ab3728c156d579704c3ce8243ace4f54bd594261f->leave($__internal_1dd7a1c4245a3f4f27a2f20ab3728c156d579704c3ce8243ace4f54bd594261f_prof);

        
        $__internal_eb3338b828e4bdfb50f4e90ecd6156140a81be8331316a9e5aabe207996ae721->leave($__internal_eb3338b828e4bdfb50f4e90ecd6156140a81be8331316a9e5aabe207996ae721_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b4230d03f5c0d5b8c8348b8f6cbe46f8cc22ce08a755053b7c8737491a799fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4230d03f5c0d5b8c8348b8f6cbe46f8cc22ce08a755053b7c8737491a799fb->enter($__internal_0b4230d03f5c0d5b8c8348b8f6cbe46f8cc22ce08a755053b7c8737491a799fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e1ce560b877742b01334d71be3846262a642cd87093ffb969d3fd0e493cece52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ce560b877742b01334d71be3846262a642cd87093ffb969d3fd0e493cece52->enter($__internal_e1ce560b877742b01334d71be3846262a642cd87093ffb969d3fd0e493cece52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e1ce560b877742b01334d71be3846262a642cd87093ffb969d3fd0e493cece52->leave($__internal_e1ce560b877742b01334d71be3846262a642cd87093ffb969d3fd0e493cece52_prof);

        
        $__internal_0b4230d03f5c0d5b8c8348b8f6cbe46f8cc22ce08a755053b7c8737491a799fb->leave($__internal_0b4230d03f5c0d5b8c8348b8f6cbe46f8cc22ce08a755053b7c8737491a799fb_prof);

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
