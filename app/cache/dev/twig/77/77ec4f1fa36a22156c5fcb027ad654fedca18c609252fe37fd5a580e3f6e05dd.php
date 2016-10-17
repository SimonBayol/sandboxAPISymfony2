<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9c2cc4c14e78a2151123e1cbb272051e2d7196ec8ea8bfc04907e92ba25a10d3 extends Twig_Template
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
        $__internal_8acdc56cba9192d696dd431b62241d7ab3807874592c747671ef2beacd142621 = $this->env->getExtension("native_profiler");
        $__internal_8acdc56cba9192d696dd431b62241d7ab3807874592c747671ef2beacd142621->enter($__internal_8acdc56cba9192d696dd431b62241d7ab3807874592c747671ef2beacd142621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8acdc56cba9192d696dd431b62241d7ab3807874592c747671ef2beacd142621->leave($__internal_8acdc56cba9192d696dd431b62241d7ab3807874592c747671ef2beacd142621_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
