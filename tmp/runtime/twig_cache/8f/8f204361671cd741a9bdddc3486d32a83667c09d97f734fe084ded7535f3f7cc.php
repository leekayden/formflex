<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__18e75bf03809047b7c85d121096711424bd00665d5b46de44274d0bf00823135 */
class __TwigTemplate_a39de8248e8fa31de5591526963fbf219497b443f49becb8475a0d0f4730bed9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <strong>";
        // line 3
        echo gT("Database usage");
        echo ":</strong>
    </div>
    <ul class=\"list-group\">
        <!-- usage -->
        ";
        // line 7
        if ((($context["tableusage"] ?? null) != false)) {
            // line 8
            echo "            ";
            if ((($this->getAttribute(($context["tableusage"] ?? null), "dbtype", []) == "mysql") || ($this->getAttribute(($context["tableusage"] ?? null), "dbtype", []) == "mysqli"))) {
                // line 9
                echo "                ";
                $context["column_usage"] = (($this->getAttribute($this->getAttribute(($context["tableusage"] ?? null), "column", []), 0, [], "array") / $this->getAttribute($this->getAttribute(($context["tableusage"] ?? null), "column", []), 1, [], "array")) * 100);
                // line 10
                echo "                ";
                $context["size_usage"] = (($this->getAttribute($this->getAttribute(($context["tableusage"] ?? null), "size", []), 0, [], "array") / $this->getAttribute($this->getAttribute(($context["tableusage"] ?? null), "size", []), 1, [], "array")) * 100);
                // line 11
                echo "                <li class=\"list-group-item\">
                    <div class=\"ls-flex-row col-12\">
                        <div class=\"col-4\">
                            ";
                // line 14
                echo gT("Table column usage");
                echo ":
                        </div>
                        <div class=\"col-8\">
                            <div class='progressbar' style='width:";
                // line 17
                echo twig_round($this->sandbox->ensureToStringAllowed(($context["column_usage"] ?? null)));
                echo "%; height:15px;' name='";
                echo twig_round($this->sandbox->ensureToStringAllowed(($context["column_usage"] ?? null)), 2);
                echo "'></div>
                        </div>
                    </div>
                </li>
                <li class=\"list-group-item\">
                    <div class=\"ls-flex-row col-12\">
                        <div class=\"col-4\">
                            ";
                // line 24
                echo gT("Table size usage");
                echo "
                        </div>
                        <div class=\"col-8\">
                            <div class='progressbar' style='width:";
                // line 27
                echo twig_round($this->sandbox->ensureToStringAllowed(($context["size_usage"] ?? null)));
                echo "%; height:15px;' name='";
                echo twig_round($this->sandbox->ensureToStringAllowed(($context["size_usage"] ?? null)), 2);
                echo "'></div>
                        </div>
                    </div>
                </li>
            ";
            } elseif (((($this->getAttribute(            // line 31
($context["arrCols"] ?? null), "dbtype", []) == "mssql") || ($this->getAttribute(($context["arrCols"] ?? null), "dbtype", []) == "postgre")) || ($this->getAttribute(($context["arrCols"] ?? null), "dbtype", []) == "dblib"))) {
                // line 32
                echo "                ";
                $context["column_usage"] = (($this->getAttribute($this->getAttribute(($context["tableusage"] ?? null), "column", []), 0, [], "array") / $this->getAttribute($this->getAttribute(($context["tableusage"] ?? null), "column", []), 1, [], "array")) * 100);
                // line 33
                echo "                <li class=\"list-group-item\">
                    <div class=\"ls-flex-row col-12\">
                        <div class=\"col-4\">
                            ";
                // line 36
                echo gT("Table column usage");
                echo "
                        </div>
                        <div class=\"col-8\">
                            <div class='progressbar' style='width:";
                // line 39
                echo twig_round($this->sandbox->ensureToStringAllowed(($context["column_usage"] ?? null)));
                echo "%; height:15px;' name='";
                echo twig_round($this->sandbox->ensureToStringAllowed(($context["column_usage"] ?? null)), 2);
                echo "'></div>
                        </div>
                    </div>
                </li>
            ";
            }
            // line 44
            echo "        ";
        } else {
            // line 45
            echo "        <li class=\"list-group-item\">
            <div class=\"ls-flex-row col-12\">
                ";
            // line 47
            echo gT("No info or no data found");
            echo "
            </div>
        </li>
        ";
        }
        // line 51
        echo "    </ul>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "__string_template__18e75bf03809047b7c85d121096711424bd00665d5b46de44274d0bf00823135";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 51,  125 => 47,  121 => 45,  118 => 44,  108 => 39,  102 => 36,  97 => 33,  94 => 32,  92 => 31,  83 => 27,  77 => 24,  65 => 17,  59 => 14,  54 => 11,  51 => 10,  48 => 9,  45 => 8,  43 => 7,  36 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__18e75bf03809047b7c85d121096711424bd00665d5b46de44274d0bf00823135", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 7, "set" => 9];
        static $filters = ["round" => 17];
        static $functions = ["gT" => 3];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['round'],
                ['gT']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
