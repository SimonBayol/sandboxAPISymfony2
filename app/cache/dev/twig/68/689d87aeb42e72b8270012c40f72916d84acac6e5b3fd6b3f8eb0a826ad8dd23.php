<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e546a37b9c696c0e4f8f25103e3ca4c96a4e37da0e726319005e51d4e16717aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_deb79079af59eabc7ce096a6b820156a652441394df20074dd9abd5d3b05fc37 = $this->env->getExtension("native_profiler");
        $__internal_deb79079af59eabc7ce096a6b820156a652441394df20074dd9abd5d3b05fc37->enter($__internal_deb79079af59eabc7ce096a6b820156a652441394df20074dd9abd5d3b05fc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deb79079af59eabc7ce096a6b820156a652441394df20074dd9abd5d3b05fc37->leave($__internal_deb79079af59eabc7ce096a6b820156a652441394df20074dd9abd5d3b05fc37_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bcc0f53c25e66e5e79300e1a5153776c5b022b64cf9753b3a2038ba4d7c0f54 = $this->env->getExtension("native_profiler");
        $__internal_5bcc0f53c25e66e5e79300e1a5153776c5b022b64cf9753b3a2038ba4d7c0f54->enter($__internal_5bcc0f53c25e66e5e79300e1a5153776c5b022b64cf9753b3a2038ba4d7c0f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5bcc0f53c25e66e5e79300e1a5153776c5b022b64cf9753b3a2038ba4d7c0f54->leave($__internal_5bcc0f53c25e66e5e79300e1a5153776c5b022b64cf9753b3a2038ba4d7c0f54_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09e5f5d53205c48064a78f91c86121682621b7b0efccea9e575c1e6ef44fce80 = $this->env->getExtension("native_profiler");
        $__internal_09e5f5d53205c48064a78f91c86121682621b7b0efccea9e575c1e6ef44fce80->enter($__internal_09e5f5d53205c48064a78f91c86121682621b7b0efccea9e575c1e6ef44fce80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_09e5f5d53205c48064a78f91c86121682621b7b0efccea9e575c1e6ef44fce80->leave($__internal_09e5f5d53205c48064a78f91c86121682621b7b0efccea9e575c1e6ef44fce80_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TwigBundle::layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
