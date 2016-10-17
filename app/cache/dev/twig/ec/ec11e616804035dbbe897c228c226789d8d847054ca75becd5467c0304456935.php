<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_502e6eff94062ff39db7770609db63ab747e0bf4dbfcd28a8faa3a2af8151585 extends Twig_Template
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
        $__internal_9250f52ac6118286c8d9c5c6659701daa9de502fbf7b8e7e7bd4f0c0e3892fcf = $this->env->getExtension("native_profiler");
        $__internal_9250f52ac6118286c8d9c5c6659701daa9de502fbf7b8e7e7bd4f0c0e3892fcf->enter($__internal_9250f52ac6118286c8d9c5c6659701daa9de502fbf7b8e7e7bd4f0c0e3892fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9250f52ac6118286c8d9c5c6659701daa9de502fbf7b8e7e7bd4f0c0e3892fcf->leave($__internal_9250f52ac6118286c8d9c5c6659701daa9de502fbf7b8e7e7bd4f0c0e3892fcf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
