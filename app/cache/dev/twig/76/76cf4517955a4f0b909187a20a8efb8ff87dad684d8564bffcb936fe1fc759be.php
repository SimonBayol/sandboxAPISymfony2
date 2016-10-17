<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0d57198f5efcb44a5b99cee4229a074a3497eae40c9bfa93034d7ea27fdbdabc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c915a08c8fbf6f93a6d4ba92d5ba96d0ffde7c9796e9fbda272ab39d37240ca = $this->env->getExtension("native_profiler");
        $__internal_1c915a08c8fbf6f93a6d4ba92d5ba96d0ffde7c9796e9fbda272ab39d37240ca->enter($__internal_1c915a08c8fbf6f93a6d4ba92d5ba96d0ffde7c9796e9fbda272ab39d37240ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c915a08c8fbf6f93a6d4ba92d5ba96d0ffde7c9796e9fbda272ab39d37240ca->leave($__internal_1c915a08c8fbf6f93a6d4ba92d5ba96d0ffde7c9796e9fbda272ab39d37240ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9ed5745ba548ede61fdc15ac2e9d6fa1cb24f3be49014739379cb12c3cd45c3 = $this->env->getExtension("native_profiler");
        $__internal_f9ed5745ba548ede61fdc15ac2e9d6fa1cb24f3be49014739379cb12c3cd45c3->enter($__internal_f9ed5745ba548ede61fdc15ac2e9d6fa1cb24f3be49014739379cb12c3cd45c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f9ed5745ba548ede61fdc15ac2e9d6fa1cb24f3be49014739379cb12c3cd45c3->leave($__internal_f9ed5745ba548ede61fdc15ac2e9d6fa1cb24f3be49014739379cb12c3cd45c3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b099287b95944c110bdef83e8f52a86ccbe6d3f8c41eb77049e03e696e47002c = $this->env->getExtension("native_profiler");
        $__internal_b099287b95944c110bdef83e8f52a86ccbe6d3f8c41eb77049e03e696e47002c->enter($__internal_b099287b95944c110bdef83e8f52a86ccbe6d3f8c41eb77049e03e696e47002c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b099287b95944c110bdef83e8f52a86ccbe6d3f8c41eb77049e03e696e47002c->leave($__internal_b099287b95944c110bdef83e8f52a86ccbe6d3f8c41eb77049e03e696e47002c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f81ab4435cdbf30fb514d2029d899453466af032e80cb3e83bf60caef14615f1 = $this->env->getExtension("native_profiler");
        $__internal_f81ab4435cdbf30fb514d2029d899453466af032e80cb3e83bf60caef14615f1->enter($__internal_f81ab4435cdbf30fb514d2029d899453466af032e80cb3e83bf60caef14615f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f81ab4435cdbf30fb514d2029d899453466af032e80cb3e83bf60caef14615f1->leave($__internal_f81ab4435cdbf30fb514d2029d899453466af032e80cb3e83bf60caef14615f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
";
    }
}
