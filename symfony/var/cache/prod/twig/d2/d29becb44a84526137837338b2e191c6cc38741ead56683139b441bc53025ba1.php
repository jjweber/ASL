<?php

/* :templates:users.html.twig */
class __TwigTemplate_5a8c188af750bef54d0df34a3ecda3cc36c38021a2c9b65f8100f4691048b4ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":templates:users.html.twig", 1);
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
    <div id=\"wrapper\">
        <div id=\"container\">
            <a href=\"/addForm\">Add User</a>
            ";
        // line 8
        if ((isset($context["users"]) ? $context["users"] : null)) {
            // line 9
            echo "             <ul>
                 ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 11
                echo "                     <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()));
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()));
                echo " <a href=\"/gUser/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">Edit</a> | <a
                                 href=\"/deleteUser/";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\"></a></li>
                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "             </ul>
             ";
        }
        // line 16
        echo "        </div>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return ":templates:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  63 => 14,  55 => 12,  46 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":templates:users.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/templates/users.html.twig");
    }
}
