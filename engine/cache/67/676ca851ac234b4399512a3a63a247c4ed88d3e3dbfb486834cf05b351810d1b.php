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

/* mainRequest.twig */
class __TwigTemplate_6f5ac42f29b90b969042290d711665bbae5c1dbad1ed90bbab9a29b7b77d18d2 extends \Twig\Template
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
        echo "<h4>Заявки</h4>
<table>
    <tr>
        <td>Статус</td>
        <td>Дата</td>
        <td>Отдел</td>
        <td>Текст</td>
        <td>Перейти <br> к заявке</td>
    </tr>
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
    </tr>
</table>";
    }

    public function getTemplateName()
    {
        return "mainRequest.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mainRequest.twig", "W:\\domains\\localhost\\templates\\mainRequest.twig");
    }
}
