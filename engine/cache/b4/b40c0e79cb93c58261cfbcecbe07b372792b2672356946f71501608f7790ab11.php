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

/* mainOwner.twig */
class __TwigTemplate_af0239ad6394ee12b16f72ca81ed584d60686a41115db4b06f252e8f0bc8fc52 extends \Twig\Template
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
        echo "<h4>Собственник</h4>
 <img src=\"images/sob.png\" alt=\"имя\"> <span>Bvz</span><br>
<img src=\"images/tel.png\" alt=\"телефон\"><span>Bvz</span><br>
<img src=\"images/money.png\" alt=\"сумма\"><span>Bvz</span><br>";
    }

    public function getTemplateName()
    {
        return "mainOwner.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mainOwner.twig", "W:\\domains\\localhost\\templates\\mainOwner.twig");
    }
}
