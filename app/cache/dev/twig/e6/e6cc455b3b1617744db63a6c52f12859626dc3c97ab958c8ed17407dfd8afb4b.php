<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_08d6cbda7daf019ff822d9bf346a5240c7e38d7d8e8815809342420649736e45 extends Twig_Template
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
        $__internal_1ea5e0877d39216d5c22373f54f1341e4887a2a8a138e803e5623fba1f2dbd93 = $this->env->getExtension("native_profiler");
        $__internal_1ea5e0877d39216d5c22373f54f1341e4887a2a8a138e803e5623fba1f2dbd93->enter($__internal_1ea5e0877d39216d5c22373f54f1341e4887a2a8a138e803e5623fba1f2dbd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1ea5e0877d39216d5c22373f54f1341e4887a2a8a138e803e5623fba1f2dbd93->leave($__internal_1ea5e0877d39216d5c22373f54f1341e4887a2a8a138e803e5623fba1f2dbd93_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
