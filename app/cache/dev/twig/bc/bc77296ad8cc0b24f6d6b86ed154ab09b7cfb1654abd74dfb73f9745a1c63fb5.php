<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1cbfdef5444d9b1a6763b909f3d837ab5584c89a204ad0d2b2ecf3cd3bc36dc0 extends Twig_Template
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
        $__internal_af5d13309b1ca5380159c86edfe264b2016afe480fa79c2fb92f656d88d0ac6e = $this->env->getExtension("native_profiler");
        $__internal_af5d13309b1ca5380159c86edfe264b2016afe480fa79c2fb92f656d88d0ac6e->enter($__internal_af5d13309b1ca5380159c86edfe264b2016afe480fa79c2fb92f656d88d0ac6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_af5d13309b1ca5380159c86edfe264b2016afe480fa79c2fb92f656d88d0ac6e->leave($__internal_af5d13309b1ca5380159c86edfe264b2016afe480fa79c2fb92f656d88d0ac6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
