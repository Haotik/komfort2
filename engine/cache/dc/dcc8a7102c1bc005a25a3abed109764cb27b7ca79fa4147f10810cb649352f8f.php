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

/* mainJournal.twig */
class __TwigTemplate_ccf0a4159d609851a2614c39ab44f4f6b1e75e615c2d1f95450989482d58be54 extends \Twig\Template
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
        echo "<table>
    <tr>
        <td>Дата</td>
        <td>Дом</td>
        <td>Квартира</td>
        <td>ХВС</td>
        <td>ГВС</td>
        <td>ХВС2</td>
        <td>ГВС2</td>
        <td>Т1</td>
        <td>Т2</td>
        <td>Кто записал</td>
        <td>Основание</td>
    </tr>
</table>";
    }

    public function getTemplateName()
    {
        return "mainJournal.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mainJournal.twig", "W:\\domains\\localhost\\templates\\mainJournal.twig");
    }
}
