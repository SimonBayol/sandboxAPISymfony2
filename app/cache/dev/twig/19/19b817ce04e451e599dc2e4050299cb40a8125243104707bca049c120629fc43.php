<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_502423772d821483b2073d71046514de12858a25a341c47cee0f1adf17b1388a extends Twig_Template
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
        $__internal_f35b7c57f038261acb44f939daeca8f3d99d8dc5f7527c2d70d3f7052909d4e7 = $this->env->getExtension("native_profiler");
        $__internal_f35b7c57f038261acb44f939daeca8f3d99d8dc5f7527c2d70d3f7052909d4e7->enter($__internal_f35b7c57f038261acb44f939daeca8f3d99d8dc5f7527c2d70d3f7052909d4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f35b7c57f038261acb44f939daeca8f3d99d8dc5f7527c2d70d3f7052909d4e7->leave($__internal_f35b7c57f038261acb44f939daeca8f3d99d8dc5f7527c2d70d3f7052909d4e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
