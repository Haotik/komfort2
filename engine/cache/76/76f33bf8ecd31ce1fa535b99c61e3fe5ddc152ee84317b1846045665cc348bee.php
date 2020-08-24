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

/* base.twig */
class __TwigTemplate_f6d1ba94a01a5fd777a91ca775a1aa425a53e2bc5c49fefd085f8c2eed5b978a extends \Twig\Template
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
        echo "<!DOCTYPE html>
<head>
  <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"/css/main.css\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/images/favicon.png\">
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$(\".house\").select2();
        });
    </script>

  <title>";
        // line 15
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
</head>
";
        // line 18
        echo "<body>
    <header>
        ";
        // line 20
        $this->loadTemplate("nav.twig", "base.twig", 20)->display($context);
        // line 21
        echo "    </header>
    ";
        // line 22
        if ((twig_length_filter($this->env, ($context["error"] ?? null)) > 0)) {
            // line 23
            echo "        ";
            $this->loadTemplate("error.twig", "base.twig", 23)->display($context);
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <div class=\"container\">
        ";
        // line 26
        echo ($context["content"] ?? null);
        echo "
    </div>
    <footer>
        ";
        // line 29
        $this->loadTemplate("footer.twig", "base.twig", 29)->display($context);
        // line 30
        echo "    </footer>
</body>
";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  84 => 29,  78 => 26,  75 => 25,  72 => 24,  69 => 23,  67 => 22,  64 => 21,  62 => 20,  58 => 18,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.twig", "W:\\domains\\localhost\\templates\\base.twig");
    }
}
