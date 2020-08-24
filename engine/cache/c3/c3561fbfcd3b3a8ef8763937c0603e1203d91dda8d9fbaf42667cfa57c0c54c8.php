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

/* nav.twig */
class __TwigTemplate_9d3540728a4013609ebda8decce979d42493ab1b8c7f0135495a4f1fb1e648f7 extends \Twig\Template
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
        echo "<div class=\"header_left\">
    <form action=\"index.php\" method=\"post\">
        Дом <select name=\"house\" class=\"house\">
                <option>";
        // line 4
        echo twig_escape_filter($this->env, ($context["house"] ?? null), "html", null, true);
        echo "</option>
                <option>Ленина 59</option>
                <option>Ленина 59-2</option>
                <option>Ленина 61</option>
                <option>Ленина 63</option>
                <option>Ленина 63-2</option>
                <option>Ленина 65</option>
                <option>Ленина 65-2</option>
                <option>Ленина 65-3</option>
                <option>Ленина 67</option>
                <option>Ленина 67-1</option>
                <option>Ленина 69</option>
                <option>Ленина 69-2</option>
                <option>Ленина 69-3</option>
                <option>Ленина 71</option>
                <option>Ленина 71-2</option>
                <option>Ленина 73</option>
                <option>Ленина 73-2</option>
                <option>Ленина 75</option>
                <option>Ленина 77</option>
                <option>Ленина 77-2</option>
                <option>Ленина 79</option>
                <option>Всесвятская 2</option>
                <option>Всесвятская 4</option>
                <option>Всесвятская 4-2</option>
                <option>Всесвятская 4-3</option>
                <option>Всесвятская 6</option>
                <option>Всесвятская 8</option>
                <option>Батова 2</option>
                <option>Батова 4</option>
                <option>Батова 6</option>
            </select> <br>
        Кв. <input type=\"text\" name=\"kv\" id=\"flat\" value=";
        // line 36
        echo twig_escape_filter($this->env, ($context["flat"] ?? null), "html", null, true);
        echo "> <br>
        <input type=\"submit\" value=\"Найти\">
        <label><input name = \"check\" type = \"radio\" value = \"norm\" ";
        // line 38
        echo twig_escape_filter($this->env, ($context["check1"] ?? null), "html", null, true);
        echo ">обычный режим </label> <br>
        <label><input name = \"check\" type = \"radio\" value = \"apply\" ";
        // line 39
        echo twig_escape_filter($this->env, ($context["check2"] ?? null), "html", null, true);
        echo ">режим проверки </label> <br>
    </form>
</div>
<div class=\"header_nav\">
  <a href=\"#\" class=\"header_nav_item\">Внести показания</a>
  <a href=\"#\" class=\"header_nav_item\">Архив показаний</a>
  <a href=\"#\" class=\"header_nav_item\">Журнал записи</a>
  <a href=\"#\" class=\"header_nav_item\">Заявки</a>
  <a href=\"#\" class=\"header_nav_item\">Офисы</a>
</div>";
    }

    public function getTemplateName()
    {
        return "nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 39,  82 => 38,  77 => 36,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nav.twig", "W:\\domains\\localhost\\templates\\nav.twig");
    }
}
