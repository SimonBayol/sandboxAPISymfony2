<?php

/* ::base.html.twig */
class __TwigTemplate_ec681e748ed698200380a10f49beb9d2a242aa40f5719ed95abeac62e87ef645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bbf24f83c047044740f4034ee0292ef727aa744416669ad8b490e3aa5a712c5 = $this->env->getExtension("native_profiler");
        $__internal_8bbf24f83c047044740f4034ee0292ef727aa744416669ad8b490e3aa5a712c5->enter($__internal_8bbf24f83c047044740f4034ee0292ef727aa744416669ad8b490e3aa5a712c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8bbf24f83c047044740f4034ee0292ef727aa744416669ad8b490e3aa5a712c5->leave($__internal_8bbf24f83c047044740f4034ee0292ef727aa744416669ad8b490e3aa5a712c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1d8348b2ff568c85ab53e2c731e8b27e8e7d237691a811779adb6b65df5faf0 = $this->env->getExtension("native_profiler");
        $__internal_e1d8348b2ff568c85ab53e2c731e8b27e8e7d237691a811779adb6b65df5faf0->enter($__internal_e1d8348b2ff568c85ab53e2c731e8b27e8e7d237691a811779adb6b65df5faf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e1d8348b2ff568c85ab53e2c731e8b27e8e7d237691a811779adb6b65df5faf0->leave($__internal_e1d8348b2ff568c85ab53e2c731e8b27e8e7d237691a811779adb6b65df5faf0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d28798ed9f1e7c3e8f5166cd3dcabc3e1317ab6d06b3162efa2d140df6509ebc = $this->env->getExtension("native_profiler");
        $__internal_d28798ed9f1e7c3e8f5166cd3dcabc3e1317ab6d06b3162efa2d140df6509ebc->enter($__internal_d28798ed9f1e7c3e8f5166cd3dcabc3e1317ab6d06b3162efa2d140df6509ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d28798ed9f1e7c3e8f5166cd3dcabc3e1317ab6d06b3162efa2d140df6509ebc->leave($__internal_d28798ed9f1e7c3e8f5166cd3dcabc3e1317ab6d06b3162efa2d140df6509ebc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f03a0b30819d78c14b54f655433831345a10cd5fa6f5b345fc68259d31b74ea1 = $this->env->getExtension("native_profiler");
        $__internal_f03a0b30819d78c14b54f655433831345a10cd5fa6f5b345fc68259d31b74ea1->enter($__internal_f03a0b30819d78c14b54f655433831345a10cd5fa6f5b345fc68259d31b74ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f03a0b30819d78c14b54f655433831345a10cd5fa6f5b345fc68259d31b74ea1->leave($__internal_f03a0b30819d78c14b54f655433831345a10cd5fa6f5b345fc68259d31b74ea1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4bb6ba06237426881379a587223d746fd3f74b93ab6e069adc3538f441225f5 = $this->env->getExtension("native_profiler");
        $__internal_e4bb6ba06237426881379a587223d746fd3f74b93ab6e069adc3538f441225f5->enter($__internal_e4bb6ba06237426881379a587223d746fd3f74b93ab6e069adc3538f441225f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e4bb6ba06237426881379a587223d746fd3f74b93ab6e069adc3538f441225f5->leave($__internal_e4bb6ba06237426881379a587223d746fd3f74b93ab6e069adc3538f441225f5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
