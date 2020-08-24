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

/* mainCounters.twig */
class __TwigTemplate_2ad2cdc7088360bf827fbdb1f6ebf5f9f3f5ae789b2c7f63ee0ee07c91666d6e extends \Twig\Template
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
        echo "<h4>Счетчики</h4>
<div class=\"containerCounter\">
    <div class=\"counter\" style=\"padding-top: 12px;\">
        <img src=\"images/pok.png\" alt=\"\">
        <img src=\"images/date.png\" alt=\"\">
        <img src=\"images/sost.png\" alt=\"\">
        <img src=\"images/tek.png\" alt=\"\">
        <img src=\"images/vnesti.png\" alt=\"\">
    </div>
    <div class=\"counter\">
        <h5>ХВС</h5>
        <span>202</span>
        <span>date</span>
        <span>sost</span>
        <span>now</span>
        <input type=\"text\" class=\"counterInput\" name=\"counter1\">
    </div>
    <div class=\"counter\">
        <h5>ГВС</h5>
        <span>202</span>
        <span>date</span>
        <span>sost</span>
        <span>now</span>
        <input type=\"text\" class=\"counterInput\" name=\"counter2\">
    </div>
    <div class=\"counter\">
        <h5>ХВС2</h5>
        <span>202</span>
        <span>date</span>
        <span>sost</span>
        <span>now</span>
        <input type=\"text\" class=\"counterInput\" name=\"counter3\">
    </div>
    <div class=\"counter\">
        <h5>ГВС2</h5>
        <span>202</span>
        <span>date</span>
        <span>sost</span>
        <span>now</span>
        <input type=\"text\" class=\"counterInput\" name=\"counter4\">
    </div>
    <div class=\"counter\">
        <h5>Т1</h5>
        <span>202</span>
        <span>date</span>
        <span>sost</span>
        <span>now</span>
        <input type=\"text\" class=\"counterInput\" name=\"counter5\">
    </div>
    <div class=\"counter\">
        <h5>Т2</h5>
        <span>202</span>
        <span>date</span>
        <span>sost</span>
        <span>now</span>
        <input type=\"text\" class=\"counterInput\" name=\"counter6\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "mainCounters.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mainCounters.twig", "W:\\domains\\localhost\\templates\\mainCounters.twig");
    }
}
