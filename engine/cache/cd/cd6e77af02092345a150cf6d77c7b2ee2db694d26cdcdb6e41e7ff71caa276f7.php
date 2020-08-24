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

/* mainInput.twig */
class __TwigTemplate_a2e22cb12d64f0b06410cfc381bc236c861fc9d5668121f4747cd100926c974d extends \Twig\Template
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
        echo "<span>
    <select name=\"osnovanie\">
        <option value=\"\"></option>
        <option value=\"Телефон\">Телефон</option>
        <option value=\"Телефон\">Телефон</option>
        <option value=\"Телефон\">Телефон</option>
        <option value=\"Телефон\">Телефон</option>
        <option value=\"Телефон\">Телефон</option>
        <option value=\"Телефон\">Телефон</option>
    </select>
от <input type=\"text\" name=\"date\" value=\"дата\"> <br>
Ф.И.О. <input type=\"text\" name=\"FIO\" value=\"Имя\">
Телефон <input type=\"text\" name=\"phone\" value=\"Телефон\">
Кто внес <input type=\"text\" name=\"autor\" value=\"Автор\">
<br>
</span>
<input type=\"submit\" value=\"Внести показания\">
<input type=\"hidden\" name=\"inputFlag\" value=\"true\">
</form>";
    }

    public function getTemplateName()
    {
        return "mainInput.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mainInput.twig", "W:\\domains\\localhost\\templates\\mainInput.twig");
    }
}
