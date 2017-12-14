<?php

/* product/index.html.twig */
class __TwigTemplate_521fc7833ba56df4f78ef86c19beb730f1e3f8b9e55b6b2bf8c3dd1eb63421a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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
        $__internal_4934afd4e6281cc5ab6c05ea67f2eb2597e31ce536eed40816306aab924361f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4934afd4e6281cc5ab6c05ea67f2eb2597e31ce536eed40816306aab924361f1->enter($__internal_4934afd4e6281cc5ab6c05ea67f2eb2597e31ce536eed40816306aab924361f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_095e48568a880b19a06c78374741ae89f55281441b3d0b7b304d6786a556a122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095e48568a880b19a06c78374741ae89f55281441b3d0b7b304d6786a556a122->enter($__internal_095e48568a880b19a06c78374741ae89f55281441b3d0b7b304d6786a556a122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4934afd4e6281cc5ab6c05ea67f2eb2597e31ce536eed40816306aab924361f1->leave($__internal_4934afd4e6281cc5ab6c05ea67f2eb2597e31ce536eed40816306aab924361f1_prof);

        
        $__internal_095e48568a880b19a06c78374741ae89f55281441b3d0b7b304d6786a556a122->leave($__internal_095e48568a880b19a06c78374741ae89f55281441b3d0b7b304d6786a556a122_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d20670f70072642f834af806de23b8d6c22ef4f7f15dcae92f692a1c065139b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d20670f70072642f834af806de23b8d6c22ef4f7f15dcae92f692a1c065139b->enter($__internal_9d20670f70072642f834af806de23b8d6c22ef4f7f15dcae92f692a1c065139b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10fb4f6dda9d13772ba33eaf5f4e81cc4bc9ea90238e2d7a0b64f614ed6def32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fb4f6dda9d13772ba33eaf5f4e81cc4bc9ea90238e2d7a0b64f614ed6def32->enter($__internal_10fb4f6dda9d13772ba33eaf5f4e81cc4bc9ea90238e2d7a0b64f614ed6def32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Products list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Sku</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "sku", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_new");
        echo "\">Create a new product</a>
        </li>
    </ul>
";
        
        $__internal_10fb4f6dda9d13772ba33eaf5f4e81cc4bc9ea90238e2d7a0b64f614ed6def32->leave($__internal_10fb4f6dda9d13772ba33eaf5f4e81cc4bc9ea90238e2d7a0b64f614ed6def32_prof);

        
        $__internal_9d20670f70072642f834af806de23b8d6c22ef4f7f15dcae92f692a1c065139b->leave($__internal_9d20670f70072642f834af806de23b8d6c22ef4f7f15dcae92f692a1c065139b_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Products list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Sku</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for product in products %}
            <tr>
                <td><a href=\"{{ path('product_show', { 'id': product.id }) }}\">{{ product.id }}</a></td>
                <td>{{ product.name }}</td>
                <td>{{ product.sku }}</td>
                <td>{{ product.price }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('product_show', { 'id': product.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('product_edit', { 'id': product.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('product_new') }}\">Create a new product</a>
        </li>
    </ul>
{% endblock %}
", "product/index.html.twig", "/Users/jweber0169/Documents/asl/symfony/app/Resources/views/product/index.html.twig");
    }
}
