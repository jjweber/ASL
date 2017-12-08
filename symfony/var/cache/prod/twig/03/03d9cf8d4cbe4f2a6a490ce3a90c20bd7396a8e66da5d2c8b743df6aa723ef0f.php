<?php

/* :templates:index.html.twig */
class __TwigTemplate_7700fc7638086f46f7fc98367dd634a0e89a4ec3b225b3c5bcad3c1d1a88b5ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":templates:index.html.twig", 1);
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
            <h1 class=\"display-3\">Welcome</h1>
            <p class=\"lead\">This is the <b>";
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : null)), "html", null, true);
        echo "</b> page.</p><br>
            <hr class=\"my-4\">
            <p><strong>Welcome and enjoy.</strong></p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":templates:index.html.twig";
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
        return new Twig_Source("", ":templates:index.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/templates/index.html.twig");
    }
}
