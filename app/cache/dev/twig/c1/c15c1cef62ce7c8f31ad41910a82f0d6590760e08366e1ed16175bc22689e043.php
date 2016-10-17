<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b59458a6d11978f0152b0bd50f29424bbf07c38e1e7594d5f54058dbc80d344a extends Twig_Template
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
        $__internal_b91d61d3648fbf10d2e7e802c0a6abf9aec28ba647e3e25fbec90c0b2ff485bd = $this->env->getExtension("native_profiler");
        $__internal_b91d61d3648fbf10d2e7e802c0a6abf9aec28ba647e3e25fbec90c0b2ff485bd->enter($__internal_b91d61d3648fbf10d2e7e802c0a6abf9aec28ba647e3e25fbec90c0b2ff485bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b91d61d3648fbf10d2e7e802c0a6abf9aec28ba647e3e25fbec90c0b2ff485bd->leave($__internal_b91d61d3648fbf10d2e7e802c0a6abf9aec28ba647e3e25fbec90c0b2ff485bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return "{% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}
";
    }
}
