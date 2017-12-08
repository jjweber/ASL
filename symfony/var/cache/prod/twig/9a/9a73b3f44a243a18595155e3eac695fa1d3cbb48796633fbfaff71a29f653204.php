<?php

/* :templates:hello.html.twig */
class __TwigTemplate_c927525784e225d9cbaf5e822fca2e7a09540d81e471ca9c6f6938f0fffba983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":templates:hello.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Hello Page</h1>
            <p class=\"lead\">This is the <b>";
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : null)), "html", null, true);
        echo "</b> page.</p><br>
            <hr class=\"my-4\">
            <h2>Hello World!</h2>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return ":templates:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":templates:hello.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/templates/hello.html.twig");
    }
}
