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

/* ./subviews/header/start_form.twig */
class __TwigTemplate_54d2d22c97dd03b80f9f8a104bca54ef6c009a6dc1e99b39bfa3547abf3d4ec8 extends \Twig\Template
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
        // line 24
        echo "
";
        // line 30
        $context["htmlOptions"] = ["id" => "limesurvey", "name" => "limesurvey", "autocomplete" => "off", "class" => "survey-form-container form"];
        // line 37
        echo "
";
        // line 39
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "upload_file", []) == true)) {
            // line 40
            echo "    ";
            $context["htmlOptions"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["htmlOptions"] ?? null)), ["enctype" => "multipart/form-data"]);
        }
        // line 45
        echo "
<!-- Start of the main Form-->
";
        // line 47
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(        // line 48
($context["C"] ?? null), "Html", []), "form", [0 => $this->getAttribute(        // line 49
($context["aSurveyInfo"] ?? null), "surveyUrl", []), 1 => "post", 2 =>         // line 51
($context["htmlOptions"] ?? null)], "method"));
        // line 53
        echo "

<!-- Ajax value -->
<!-- Needs to be set by javascript! Because if JavaScript is disabled, ajaxmode will completely fail! -->
";
        // line 57
        echo LS_Twig_Extension::registerScript("AJAXACTIVATE", "
    \$('#limesurvey').append('<input type=\"hidden\" name=\"ajax\" value=\"off\" id=\"ajax\" />');
    ", "POS_POSTSCRIPT");
        // line 61
        echo "


<!-- Field Names -->
<input type='hidden' name='fieldnames' value='";
        // line 65
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "hiddenfieldnames", []));
        echo "' id='fieldnames' />

";
        // line 68
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "hiddenInputs", []));
        echo "

<!-- Submit button -->
<button type=\"submit\" id=\"defaultbtn\" value=\"default\" name=\"move\" class=\"submit hidden\" style=\"display:none\">";
        // line 71
        echo gT("default");
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "./subviews/header/start_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 71,  76 => 68,  71 => 65,  65 => 61,  61 => 57,  55 => 53,  53 => 51,  52 => 49,  51 => 48,  50 => 47,  46 => 45,  42 => 40,  40 => 39,  37 => 37,  35 => 30,  32 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/start_form.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\header\\start_form.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 30, "if" => 39];
        static $filters = ["merge" => 40];
        static $functions = ["registerScript" => 58, "gT" => 71];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge'],
                ['registerScript', 'gT']
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
