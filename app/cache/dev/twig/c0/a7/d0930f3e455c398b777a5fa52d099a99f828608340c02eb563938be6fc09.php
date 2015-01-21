<?php

/* IntechnologyBackendManagementBundle::layout.html.twig */
class __TwigTemplate_c0a7d0930f3e455c398b777a5fa52d099a99f828608340c02eb563938be6fc09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'int_bm_content' => array($this, 'block_int_bm_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        Hello world
        <div>
            ";
        // line 19
        echo "        </div>

        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 22
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 24
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
        <div>
            ";
        // line 34
        echo "            ";
        $this->displayBlock('int_bm_content', $context, $blocks);
        // line 36
        echo "        </div>
    </body>
</html>
";
    }

    // line 34
    public function block_int_bm_content($context, array $blocks = array())
    {
        // line 35
        echo "            ";
    }

    public function getTemplateName()
    {
        return "IntechnologyBackendManagementBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 35,  77 => 34,  70 => 36,  67 => 34,  63 => 28,  57 => 27,  48 => 24,  43 => 23,  38 => 22,  34 => 21,  30 => 19,  20 => 1,);
    }
}
