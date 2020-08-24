<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.twig */
class __TwigTemplate_9463573c8f388b45fc023cc70800c43c8e7e32256bbda6901851354ca11147ea extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"counters\" id=\"mainCounters\">
    <form action=\"#\" method=\"post\">
    ";
        // line 3
        $this->loadTemplate("mainCounters.twig", "index.twig", 3)->display($context);
        // line 4
        echo "</div>
<div class=\"owner\" id=\"mainOwner\">
    ";
        // line 6
        $this->loadTemplate("mainOwner.twig", "index.twig", 6)->display($context);
        // line 7
        echo "</div>
<div class=\"inputForm\" id=\"mainInput\">
    ";
        // line 9
        $this->loadTemplate("mainInput.twig", "index.twig", 9)->display($context);
        // line 10
        echo "</div>
<div class=\"requests\" id=\"mainRequest\">
    ";
        // line 12
        $this->loadTemplate("mainRequest.twig", "index.twig", 12)->display($context);
        // line 13
        echo "</div>
<div class=\"writeJournal\" id=\"mainJournal\">
    <h4>Последние введеные показания</h4>
    ";
        // line 16
        $this->loadTemplate("mainJournal.twig", "index.twig", 16)->display($context);
        // line 17
        echo "</div>
<div class=\"comment\" id=\"comment\">
    ";
        // line 19
        $this->loadTemplate("mainComments.twig", "index.twig", 19)->display($context);
        // line 20
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  72 => 19,  68 => 17,  66 => 16,  61 => 13,  59 => 12,  55 => 10,  53 => 9,  49 => 7,  47 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "W:\\domains\\localhost\\templates\\index.twig");
    }
}
