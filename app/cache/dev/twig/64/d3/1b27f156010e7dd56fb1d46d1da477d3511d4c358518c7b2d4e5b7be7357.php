<?php

/* IntechnologyBackendManagementBundle:Company:index.html.twig */
class __TwigTemplate_64d31b27f156010e7dd56fb1d46d1da477d3511d4c358518c7b2d4e5b7be7357 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("IntechnologyBackendManagementBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'int_bm_content' => array($this, 'block_int_bm_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntechnologyBackendManagementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_int_bm_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_dashboard");
        echo "\">Home</a></div>
    <div><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("_company_create");
        echo "\">Add new company</a></div>
    <ul>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 8
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_company_update", array("id" => $this->getAttribute($context["company"], "getId", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "IntechnologyBackendManagementBundle:Company:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  53 => 8,  49 => 7,  44 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
