<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9dc86d44734ce673d712b0699617ae39e71867f06ebb0fe5d3a14f89d2072760 extends Twig_Template
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
        $__internal_b16a0c06ecc60edeb0c80671392c9484487367b1ffa8443ab3da47df7bb344da = $this->env->getExtension("native_profiler");
        $__internal_b16a0c06ecc60edeb0c80671392c9484487367b1ffa8443ab3da47df7bb344da->enter($__internal_b16a0c06ecc60edeb0c80671392c9484487367b1ffa8443ab3da47df7bb344da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b16a0c06ecc60edeb0c80671392c9484487367b1ffa8443ab3da47df7bb344da->leave($__internal_b16a0c06ecc60edeb0c80671392c9484487367b1ffa8443ab3da47df7bb344da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
