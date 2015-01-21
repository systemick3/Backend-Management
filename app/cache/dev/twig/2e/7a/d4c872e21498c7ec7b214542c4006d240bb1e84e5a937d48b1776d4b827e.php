<?php

/* IntechnologyBackendManagementBundle:Default:index.html.twig */
class __TwigTemplate_2e7ad4c872e21498c7ec7b214542c4006d240bb1e84e5a937d48b1776d4b827e extends Twig_Template
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
        echo "    Hello!
    <div></div><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("_companies");
        echo "\">Companies</a></div>
    <div></div><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_deployments");
        echo "\">Deployments</a></div>
    <div></div><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_users");
        echo "\">Users</a></div>
";
    }

    public function getTemplateName()
    {
        return "IntechnologyBackendManagementBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  46 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
