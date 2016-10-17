<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_a62b5afd62203c85a0d487a1778f8bc3c394e12b1b18d643b81513590c836779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5279189e2cb6a80fb80d7f1721ebd6838ed04d0915cb60c2599f4d7f6ac9f84 = $this->env->getExtension("native_profiler");
        $__internal_e5279189e2cb6a80fb80d7f1721ebd6838ed04d0915cb60c2599f4d7f6ac9f84->enter($__internal_e5279189e2cb6a80fb80d7f1721ebd6838ed04d0915cb60c2599f4d7f6ac9f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5279189e2cb6a80fb80d7f1721ebd6838ed04d0915cb60c2599f4d7f6ac9f84->leave($__internal_e5279189e2cb6a80fb80d7f1721ebd6838ed04d0915cb60c2599f4d7f6ac9f84_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b277bb10e5d0c4204f6c5e7a8428fd175c9a6e35acf18e8335ce9f7fbc4f005 = $this->env->getExtension("native_profiler");
        $__internal_5b277bb10e5d0c4204f6c5e7a8428fd175c9a6e35acf18e8335ce9f7fbc4f005->enter($__internal_5b277bb10e5d0c4204f6c5e7a8428fd175c9a6e35acf18e8335ce9f7fbc4f005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5b277bb10e5d0c4204f6c5e7a8428fd175c9a6e35acf18e8335ce9f7fbc4f005->leave($__internal_5b277bb10e5d0c4204f6c5e7a8428fd175c9a6e35acf18e8335ce9f7fbc4f005_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da0319adbe165780ce9a7d5fa7a8097b37007615ca7692d7595b5c393a5313d7 = $this->env->getExtension("native_profiler");
        $__internal_da0319adbe165780ce9a7d5fa7a8097b37007615ca7692d7595b5c393a5313d7->enter($__internal_da0319adbe165780ce9a7d5fa7a8097b37007615ca7692d7595b5c393a5313d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_da0319adbe165780ce9a7d5fa7a8097b37007615ca7692d7595b5c393a5313d7->leave($__internal_da0319adbe165780ce9a7d5fa7a8097b37007615ca7692d7595b5c393a5313d7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_09afce4df899eaceddee85ed98eb0d51e30d22989231ae03efe7db22bd074200 = $this->env->getExtension("native_profiler");
        $__internal_09afce4df899eaceddee85ed98eb0d51e30d22989231ae03efe7db22bd074200->enter($__internal_09afce4df899eaceddee85ed98eb0d51e30d22989231ae03efe7db22bd074200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_09afce4df899eaceddee85ed98eb0d51e30d22989231ae03efe7db22bd074200->leave($__internal_09afce4df899eaceddee85ed98eb0d51e30d22989231ae03efe7db22bd074200_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5761ae5340032f7d714e0ee508a81dfb6ebba18698f323a2e35d0c70cf50ea95 = $this->env->getExtension("native_profiler");
        $__internal_5761ae5340032f7d714e0ee508a81dfb6ebba18698f323a2e35d0c70cf50ea95->enter($__internal_5761ae5340032f7d714e0ee508a81dfb6ebba18698f323a2e35d0c70cf50ea95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5761ae5340032f7d714e0ee508a81dfb6ebba18698f323a2e35d0c70cf50ea95->leave($__internal_5761ae5340032f7d714e0ee508a81dfb6ebba18698f323a2e35d0c70cf50ea95_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
";
    }
}
