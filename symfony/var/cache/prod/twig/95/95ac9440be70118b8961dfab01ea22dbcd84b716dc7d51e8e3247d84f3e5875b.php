<?php

/* :templates:updateForm.html.twig */
class __TwigTemplate_0023a7d14de05110afdfe36136ba5597f091ea959cd321a74d4b61e9b97a7143 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "% extends 'base.html.twig' %}

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div id=\"wrapper\">
        <div id=\"container\">

            ";
        // line 8
        if ((isset($context["users"]) ? $context["users"] : null)) {
            // line 9
            echo "
                <form action=\"/updateUser/";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), 0, array(), "array"), "id", array(), "array"), "html", null, true);
            echo "\" method=\"POST\">
                    <label for=\"name\">First Name</label>
                    <input type=\"text\" id=\"name\" name=\"name\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), 0, array(), "array"), "name", array(), "array"), "html", null, true);
            echo "\"/>
                    <label for=\"lastname\">First Name</label>
                    <input type=\"text\" id=\"lastname\" name=\"lastname\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), 0, array(), "array"), "lastname", array(), "array"), "html", null, true);
            echo "\"/>
                    <label for=\"email\">First Name</label>
                    <input type=\"text\" id=\"email\" name=\"email\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), 0, array(), "array"), "email", array(), "array"), "html", null, true);
            echo "\"/>
                    <input type=\"submit\"/>
                </form>

            ";
        } else {
            // line 21
            echo "                Can't find this user!
            ";
        }
        // line 23
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return ":templates:updateForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  64 => 21,  56 => 16,  51 => 14,  46 => 12,  41 => 10,  38 => 9,  36 => 8,  30 => 4,  24 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":templates:updateForm.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/templates/updateForm.html.twig");
    }
}
