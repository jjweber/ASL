<?php

/* product/index.html.twig */
class __TwigTemplate_d767fb2605f423bfc21358c66c5d120963a69c3cd01f60102486a1b00a5ae7e8 extends Twig_Template
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
        $__internal_7427e9d335c7ffb0d2805fa99c95d0a870ad0339775fd6284e9d0d828edd75a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7427e9d335c7ffb0d2805fa99c95d0a870ad0339775fd6284e9d0d828edd75a9->enter($__internal_7427e9d335c7ffb0d2805fa99c95d0a870ad0339775fd6284e9d0d828edd75a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_c321f7820839763b97a9dbf3afc7d4c642ac0de2e490e2e839f3696286fcb62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c321f7820839763b97a9dbf3afc7d4c642ac0de2e490e2e839f3696286fcb62c->enter($__internal_c321f7820839763b97a9dbf3afc7d4c642ac0de2e490e2e839f3696286fcb62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7427e9d335c7ffb0d2805fa99c95d0a870ad0339775fd6284e9d0d828edd75a9->leave($__internal_7427e9d335c7ffb0d2805fa99c95d0a870ad0339775fd6284e9d0d828edd75a9_prof);

        
        $__internal_c321f7820839763b97a9dbf3afc7d4c642ac0de2e490e2e839f3696286fcb62c->leave($__internal_c321f7820839763b97a9dbf3afc7d4c642ac0de2e490e2e839f3696286fcb62c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bacefb1fa9ca9bfaabda70a003e4f802a25c6ad995acabce367bcf19adee3af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bacefb1fa9ca9bfaabda70a003e4f802a25c6ad995acabce367bcf19adee3af->enter($__internal_3bacefb1fa9ca9bfaabda70a003e4f802a25c6ad995acabce367bcf19adee3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab8fd84766bc220dd2981ec337fd5e4b3f3e7f75eb6d8b80bcc041ec9c5d6f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8fd84766bc220dd2981ec337fd5e4b3f3e7f75eb6d8b80bcc041ec9c5d6f2b->enter($__internal_ab8fd84766bc220dd2981ec337fd5e4b3f3e7f75eb6d8b80bcc041ec9c5d6f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
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
        
        $__internal_ab8fd84766bc220dd2981ec337fd5e4b3f3e7f75eb6d8b80bcc041ec9c5d6f2b->leave($__internal_ab8fd84766bc220dd2981ec337fd5e4b3f3e7f75eb6d8b80bcc041ec9c5d6f2b_prof);

        
        $__internal_3bacefb1fa9ca9bfaabda70a003e4f802a25c6ad995acabce367bcf19adee3af->leave($__internal_3bacefb1fa9ca9bfaabda70a003e4f802a25c6ad995acabce367bcf19adee3af_prof);

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
