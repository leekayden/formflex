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

/* __string_template__ae808a5852f1e2d40ea5c06ed43aede74f22f3a16a3fe4265ac1c5668293d5a4 */
class __TwigTemplate_f3eff1b1a0e3e54e492107af90b527808be6e257db7e6339423076258914252c extends \Twig\Template
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
        echo "<!-- Survey's texts -->
<div class=\"panel panel-default\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">
        <strong>";
        // line 5
        echo gT("Text elements:");
        echo "</strong>
        <a class=\"pull-right btn btn-default btn-xs pjax\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo gT("Survey text elements");
        echo "\" href=\"";
        echo LS_Twig_Extension::createUrl("surveyAdministration/rendersidemenulink", ["subaction" => "surveytexts", "surveyid" => ($context["surveyid"] ?? null)]);
        echo "\">
            <i class=\"fa fa-cogs\"></i>
        </a>
    </div>
    <!-- List group -->
    <ul class=\"list-group\">
            <!-- Description -->
        <li class=\"list-group-item\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4\">
                    ";
        // line 16
        echo gT("Description:");
        echo "
                </div>
                <div class=\"col-8\">
                        ";
        // line 19
        if (($this->getAttribute(($context["surveyTextContent"] ?? null), "surveyls_description", []) != "")) {
            // line 20
            echo "                            ";
            echo LS_Twig_Extension::getExpressionManagerOutput($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["surveyTextContent"] ?? null), "surveyls_description", [])));
            echo "
                        ";
        }
        // line 22
        echo "                </div>
            </div>
        </li>
        <!-- Welcome -->
        <li class=\"list-group-item\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4\">
                    ";
        // line 29
        echo gT("Welcome:");
        echo "
                </div>
                <div class=\"col-8\">
                        ";
        // line 32
        if (($this->getAttribute(($context["surveyTextContent"] ?? null), "surveyls_welcometext", []) != "")) {
            // line 33
            echo "                            ";
            echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["surveyTextContent"] ?? null), "surveyls_welcometext", [])), "welcome_text");
            echo "
                        ";
        }
        // line 35
        echo "                </div>
            </div>
        </li>

        <!-- End message -->
        <li class=\"list-group-item\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4\">
                    ";
        // line 43
        echo gT("End message:");
        echo "
                </div>
                <div class=\"col-8\">
                    ";
        // line 46
        if (($this->getAttribute(($context["surveyTextContent"] ?? null), "surveyls_endtext", []) != "")) {
            // line 47
            echo "                        ";
            echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["surveyTextContent"] ?? null), "surveyls_endtext", [])), "end_text");
            echo "
                    ";
        }
        // line 49
        echo "                </div>
            </div>
        </li>
        ";
        // line 52
        if (($this->getAttribute(($context["oSurvey"] ?? null), "showsurveypolicynotice", []) > 0)) {
            // line 53
            echo "                    <!-- Data security notice -->
                    <li class=\"list-group-item\">
                        <div class=\"ls-flex-row col-12\">
                            <div class=\"col-4\">
                                 ";
            // line 57
            echo gT("Privacy policy text:");
            echo "
                            </div>
                            <div class=\"col-8\">
                                ";
            // line 60
            if (($this->getAttribute(($context["surveyTextContent"] ?? null), "surveyls_policy_notice", []) != "")) {
                // line 61
                echo "                                    ";
                echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["surveyTextContent"] ?? null), "surveyls_policy_notice", [])), "security_notice");
                echo "
                                ";
            }
            // line 63
            echo "                            </div>
                        </div>
                    </li>
                    <!-- Data security notice error -->
                    <li class=\"list-group-item\">
                        <div class=\"ls-flex-row col-12\">
                            <div class=\"col-4\">
                                ";
            // line 70
            echo gT("Privacy policy error text:");
            echo "
                            </div>
                            <div class=\"col-8\">
                                ";
            // line 73
            if (($this->getAttribute(($context["surveyTextContent"] ?? null), "surveyls_policy_error", []) != "")) {
                // line 74
                echo "                                    ";
                echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["surveyTextContent"] ?? null), "surveyls_policy_error", [])), "security_error");
                echo "
                                ";
            }
            // line 75
            echo "                               
                            </div>
                        </div>
                    </li>
                    <!-- Data security notice label -->
                    <li class=\"list-group-item\">
                        <div class=\"ls-flex-row col-12\">
                            <div class=\"col-4\">
                                ";
            // line 83
            echo gT("Privacy policy label text:");
            echo "
                            </div>
                            <div class=\"col-8\">
                                ";
            // line 86
            if (($this->getAttribute(($context["surveyTextContent"] ?? null), "surveyls_policy_notice_label", []) != "")) {
                // line 87
                echo "                                    ";
                echo LS_Twig_Extension::getExpressionManagerOutput($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["surveyTextContent"] ?? null), "surveyls_policy_notice_label", [])));
                echo "
                                ";
            }
            // line 88
            echo "   
                            </div>
                        </div>
                    </li>
            ";
        }
        // line 93
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__ae808a5852f1e2d40ea5c06ed43aede74f22f3a16a3fe4265ac1c5668293d5a4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 93,  192 => 88,  186 => 87,  184 => 86,  178 => 83,  168 => 75,  162 => 74,  160 => 73,  154 => 70,  145 => 63,  139 => 61,  137 => 60,  131 => 57,  125 => 53,  123 => 52,  118 => 49,  112 => 47,  110 => 46,  104 => 43,  94 => 35,  88 => 33,  86 => 32,  80 => 29,  71 => 22,  65 => 20,  63 => 19,  57 => 16,  42 => 6,  38 => 5,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ae808a5852f1e2d40ea5c06ed43aede74f22f3a16a3fe4265ac1c5668293d5a4", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 19];
        static $filters = [];
        static $functions = ["gT" => 5, "createUrl" => 6, "getExpressionManagerOutput" => 20, "getTextDisplayWidget" => 33];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['gT', 'createUrl', 'getExpressionManagerOutput', 'getTextDisplayWidget']
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
