<?php

/* product/show.html.twig */
class __TwigTemplate_ea77884a7cb9630e217a5b2cdce1c8c2ca8b80212997a0803d12dda2d51f6232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
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
        $__internal_2c78298d0afcef6b307add734d7c10cf5628d0ce7ed8fd2e1a46bd1ccdcb84e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c78298d0afcef6b307add734d7c10cf5628d0ce7ed8fd2e1a46bd1ccdcb84e4->enter($__internal_2c78298d0afcef6b307add734d7c10cf5628d0ce7ed8fd2e1a46bd1ccdcb84e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_107943ab6d67d78a52654671501ceed565a5be6fa2150d36aaa25cff0e2abe6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107943ab6d67d78a52654671501ceed565a5be6fa2150d36aaa25cff0e2abe6e->enter($__internal_107943ab6d67d78a52654671501ceed565a5be6fa2150d36aaa25cff0e2abe6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c78298d0afcef6b307add734d7c10cf5628d0ce7ed8fd2e1a46bd1ccdcb84e4->leave($__internal_2c78298d0afcef6b307add734d7c10cf5628d0ce7ed8fd2e1a46bd1ccdcb84e4_prof);

        
        $__internal_107943ab6d67d78a52654671501ceed565a5be6fa2150d36aaa25cff0e2abe6e->leave($__internal_107943ab6d67d78a52654671501ceed565a5be6fa2150d36aaa25cff0e2abe6e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5139b907d3585a09c16ce0ea586db474d0ad205a4404ab84376a69a5f4b91ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5139b907d3585a09c16ce0ea586db474d0ad205a4404ab84376a69a5f4b91ddc->enter($__internal_5139b907d3585a09c16ce0ea586db474d0ad205a4404ab84376a69a5f4b91ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65175b7726124e0170e1695f27e6e8abe59378d3babf1485d5694978cfa9e3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65175b7726124e0170e1695f27e6e8abe59378d3babf1485d5694978cfa9e3ca->enter($__internal_65175b7726124e0170e1695f27e6e8abe59378d3babf1485d5694978cfa9e3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sku</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "sku", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_65175b7726124e0170e1695f27e6e8abe59378d3babf1485d5694978cfa9e3ca->leave($__internal_65175b7726124e0170e1695f27e6e8abe59378d3babf1485d5694978cfa9e3ca_prof);

        
        $__internal_5139b907d3585a09c16ce0ea586db474d0ad205a4404ab84376a69a5f4b91ddc->leave($__internal_5139b907d3585a09c16ce0ea586db474d0ad205a4404ab84376a69a5f4b91ddc_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Product</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ product.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ product.name }}</td>
            </tr>
            <tr>
                <th>Sku</th>
                <td>{{ product.sku }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ product.price }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('product_edit', { 'id': product.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "product/show.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/product/show.html.twig");
    }
}