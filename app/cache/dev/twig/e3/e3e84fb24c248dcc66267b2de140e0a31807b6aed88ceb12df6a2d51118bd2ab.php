<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2030bf25ca9a6e2e197b470a6ab7e35b378ce54360e006b77ee65e48cdc80180 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_029c726eceb3d6c86e74b1f865a3b5b5d14b28d5efe5e7d897267cbaf7368c42 = $this->env->getExtension("native_profiler");
        $__internal_029c726eceb3d6c86e74b1f865a3b5b5d14b28d5efe5e7d897267cbaf7368c42->enter($__internal_029c726eceb3d6c86e74b1f865a3b5b5d14b28d5efe5e7d897267cbaf7368c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_029c726eceb3d6c86e74b1f865a3b5b5d14b28d5efe5e7d897267cbaf7368c42->leave($__internal_029c726eceb3d6c86e74b1f865a3b5b5d14b28d5efe5e7d897267cbaf7368c42_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_27e0092b1981cc7005fe43e90a7d9d7cd8082bfc611f219d5d8d090eae245967 = $this->env->getExtension("native_profiler");
        $__internal_27e0092b1981cc7005fe43e90a7d9d7cd8082bfc611f219d5d8d090eae245967->enter($__internal_27e0092b1981cc7005fe43e90a7d9d7cd8082bfc611f219d5d8d090eae245967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_27e0092b1981cc7005fe43e90a7d9d7cd8082bfc611f219d5d8d090eae245967->leave($__internal_27e0092b1981cc7005fe43e90a7d9d7cd8082bfc611f219d5d8d090eae245967_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
