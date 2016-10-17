<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c0870ae62dd0504a7b22e17ff106e066c5823088d429afea2f661641106a8133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_844b229c48927e694867adea57a07b157a465f64dfb48ac0ad3300282aaad6b1 = $this->env->getExtension("native_profiler");
        $__internal_844b229c48927e694867adea57a07b157a465f64dfb48ac0ad3300282aaad6b1->enter($__internal_844b229c48927e694867adea57a07b157a465f64dfb48ac0ad3300282aaad6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_844b229c48927e694867adea57a07b157a465f64dfb48ac0ad3300282aaad6b1->leave($__internal_844b229c48927e694867adea57a07b157a465f64dfb48ac0ad3300282aaad6b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
