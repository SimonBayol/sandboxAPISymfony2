<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4960843504ff421ed992c6cbe92d94837b45c45f4732cf6b64c15a1682849d5a extends Twig_Template
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
        $__internal_8c14dc24848531bac91f3bf348b4b8c3eaace869e4935dc2fae6a17bfc80ea9f = $this->env->getExtension("native_profiler");
        $__internal_8c14dc24848531bac91f3bf348b4b8c3eaace869e4935dc2fae6a17bfc80ea9f->enter($__internal_8c14dc24848531bac91f3bf348b4b8c3eaace869e4935dc2fae6a17bfc80ea9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8c14dc24848531bac91f3bf348b4b8c3eaace869e4935dc2fae6a17bfc80ea9f->leave($__internal_8c14dc24848531bac91f3bf348b4b8c3eaace869e4935dc2fae6a17bfc80ea9f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
