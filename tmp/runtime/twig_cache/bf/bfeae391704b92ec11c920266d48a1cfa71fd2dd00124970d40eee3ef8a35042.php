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

/* __string_template__ddf84d22ffc4d9526ea03fddf685d82f8c48ab39012afc87f4a9113cdcc40994 */
class __TwigTemplate_e8d170550e7cf6204f9e844a4e78a239dc5e176eb33bca05909adc0744aaf858 extends \Twig\Template
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
        echo gT("Survey general settings");
        echo " </strong>
        <a class=\"pull-right btn btn-default btn-xs pjax\" data-toggle=\"tooltip\" title=\"";
        // line 4
        echo gT("General survey settings");
        echo "\" href=\"";
        echo LS_Twig_Extension::createUrl("surveyAdministration/rendersidemenulink", ["subaction" => "generalsettings", "surveyid" => ($context["surveyid"] ?? null)]);
        echo "\">
            <i class=\"fa fa-cogs\"></i>
        </a>
    </div>
    <ul class=\"list-group\">
        <!-- Owner -->

        <li class=\"list-group-item\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4\">
                    ";
        // line 14
        echo gT("Owner:");
        echo "
                </div>
                <div class=\"col-8\">
                        ";
        // line 17
        echo flattenText(((($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["oSurvey"] ?? null), "aOptions", []), "owner", [], "array"), "users_name", [], "array")) . " (") . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["oSurvey"] ?? null), "aOptions", []), "owner", [], "array"), "email", [], "array"))) . ")"));
        echo "
                </div>
            </div>
        </li>
        <!-- Administrator -->
        <li class=\"list-group-item\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4\">
                    ";
        // line 25
        echo gT("Administrator:");
        echo "
                </div>
                <div class=\"col-8\">
                        ";
        // line 28
        echo flattenText(((($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["oSurvey"] ?? null), "aOptions", []), "admin", [], "array")) . " (") . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["oSurvey"] ?? null), "aOptions", []), "adminemail", [], "array"))) . ")"));
        echo "
                </div>
            </div>
        </li>
        <!-- Theme -->
        <li class=\"list-group-item\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4\">
                    ";
        // line 36
        echo gT("Theme:");
        echo "
                </div>
                <div class=\"col-8\">

                    ";
        // line 40
        if (array_key_exists("templateModel", $context)) {
            // line 41
            echo "                        ";
            if (LS_Twig_Extension::checkPermission("templates", "read")) {
                // line 42
                echo "                            ";
                $context["sTemplateOptionsUrl"] = LS_Twig_Extension::createUrl("themeOptions/updateSurvey", ["surveyid" => $this->getAttribute(($context["oSurvey"] ?? null), "sid", [])]);
                // line 43
                echo "                            ";
                $context["sTemplateEditorUrl"] = LS_Twig_Extension::createUrl("admin/themes/sa/view", ["templatename" => $this->getAttribute($this->getAttribute(($context["oSurvey"] ?? null), "aOptions", []), "template", [], "array")]);
                // line 44
                echo "                            ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["templateModel"] ?? null), "title", []));
                echo " ( ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["templateModel"] ?? null), "name", []));
                echo ")
                            <a href='";
                // line 45
                echo $this->sandbox->ensureToStringAllowed(($context["sTemplateOptionsUrl"] ?? null));
                echo "' title=\"";
                echo gT("Edit theme options");
                echo "\" class=\"btn btn-default btn-xs pull-right\"><i class=\"fa fa-paint-brush\"></i></a>
                            <a href='";
                // line 46
                echo $this->sandbox->ensureToStringAllowed(($context["sTemplateEditorUrl"] ?? null));
                echo "' title=\"";
                echo gT("Open theme editor in new window");
                echo "\" target=\"_blank\" class=\"btn btn-default btn-xs pull-right\"><i class=\"fa fa-object-group\"></i></a>
                        ";
            } else {
                // line 48
                echo "                            ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["oSurvey"] ?? null), "aOptions", []), "template", [], "array"));
                echo "
                        ";
            }
            // line 50
            echo "                    ";
        } else {
            // line 51
            echo "                        ";
            $context["errorMessage"] = sprintf(gT("Error: Theme \"%s\" is not installed."), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["oSurvey"] ?? null), "aOptions", []), "template", [], "array")));
            // line 52
            echo "                        ";
            echo $this->sandbox->ensureToStringAllowed(($context["errorMessage"] ?? null));
            echo "
                    ";
        }
        // line 54
        echo "                </div>

            </div>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__ddf84d22ffc4d9526ea03fddf685d82f8c48ab39012afc87f4a9113cdcc40994";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 54,  139 => 52,  136 => 51,  133 => 50,  127 => 48,  120 => 46,  114 => 45,  107 => 44,  104 => 43,  101 => 42,  98 => 41,  96 => 40,  89 => 36,  78 => 28,  72 => 25,  61 => 17,  55 => 14,  40 => 4,  36 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ddf84d22ffc4d9526ea03fddf685d82f8c48ab39012afc87f4a9113cdcc40994", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 40, "set" => 42];
        static $filters = [];
        static $functions = ["gT" => 3, "createUrl" => 4, "flattenText" => 17, "checkPermission" => 41, "sprintf" => 51];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['gT', 'createUrl', 'flattenText', 'checkPermission', 'sprintf']
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
