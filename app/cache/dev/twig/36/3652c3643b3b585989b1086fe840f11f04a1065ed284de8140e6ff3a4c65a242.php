<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_fb29966ada3876d3f7d16c379fb59d51318e4d431c3c05ab15d337404a93f86d extends Twig_Template
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
        $__internal_9f9d3b616a6d5b4d4708bd16a853c46c83b4b925bd06c2be2185cb0ad4b48056 = $this->env->getExtension("native_profiler");
        $__internal_9f9d3b616a6d5b4d4708bd16a853c46c83b4b925bd06c2be2185cb0ad4b48056->enter($__internal_9f9d3b616a6d5b4d4708bd16a853c46c83b4b925bd06c2be2185cb0ad4b48056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9f9d3b616a6d5b4d4708bd16a853c46c83b4b925bd06c2be2185cb0ad4b48056->leave($__internal_9f9d3b616a6d5b4d4708bd16a853c46c83b4b925bd06c2be2185cb0ad4b48056_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
