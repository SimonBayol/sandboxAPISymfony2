<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_646bf39ef315d61c80df0c4d4d1f20caa7d52be88f1aeaafd9d56c9b39a90806 extends Twig_Template
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
        $__internal_7c15a6eb76eeff4cbaac0f158c64eb11a100ef50d7fb24d4739a262a627453c0 = $this->env->getExtension("native_profiler");
        $__internal_7c15a6eb76eeff4cbaac0f158c64eb11a100ef50d7fb24d4739a262a627453c0->enter($__internal_7c15a6eb76eeff4cbaac0f158c64eb11a100ef50d7fb24d4739a262a627453c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7c15a6eb76eeff4cbaac0f158c64eb11a100ef50d7fb24d4739a262a627453c0->leave($__internal_7c15a6eb76eeff4cbaac0f158c64eb11a100ef50d7fb24d4739a262a627453c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include 'TwigBundle:Exception:error.xml.twig' %}
";
    }
}
