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

/* mainComments.twig */
class __TwigTemplate_11b7206b67b471d63f054f8bd4d395a1fae08a589c6194d513fda2582cf7fe5a extends \Twig\Template
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
        echo "<details>
    <summary style=\"border: 1px solid grey; background-color:lightgreen; min-width: 200px\">Комментарии</summary>
    <form action=\"index.php\" method=\"post\">
        <input type=\"hidden\" name=\"flat\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["flat"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"house\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["house"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"isNull\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["commentCheck"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"addComent\" value=\"true\">
        <textarea name=\"text\" id=\"commentArea\">тут будет коментарий</textarea>
        <br>
        <input type=\"submit\" value=\"Добавить комментарий\">
    </form>
    </div>
</details>";
    }

    public function getTemplateName()
    {
        return "mainComments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mainComments.twig", "W:\\domains\\localhost\\templates\\mainComments.twig");
    }
}
