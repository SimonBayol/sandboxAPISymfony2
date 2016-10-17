<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0788948a82a6569730f41f965221cb9b2dbce4a3f907ead8241ceea4640f4e23 extends Twig_Template
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
        $__internal_5a16f988b498490bafbee489868edcf2338ff2c98f3516e3844f38b5efaafbbc = $this->env->getExtension("native_profiler");
        $__internal_5a16f988b498490bafbee489868edcf2338ff2c98f3516e3844f38b5efaafbbc->enter($__internal_5a16f988b498490bafbee489868edcf2338ff2c98f3516e3844f38b5efaafbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5a16f988b498490bafbee489868edcf2338ff2c98f3516e3844f38b5efaafbbc->leave($__internal_5a16f988b498490bafbee489868edcf2338ff2c98f3516e3844f38b5efaafbbc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
