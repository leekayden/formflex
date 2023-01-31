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

/* ./subviews/header/head.twig */
class __TwigTemplate_2059c8782b64bc3ca3f5db644ad9af63b2564ac024e284fa0b4b3b48b1f3fad3 extends \Twig\Template
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
        // line 17
        echo "
";
        // line 18
        if ($this->getAttribute(($context["aSurveyInfo"] ?? null), "jYesNo", [])) {
            // line 19
            echo "    ";
            echo LS_Twig_Extension::registerScript("activateConfirmLanguage", (("\$.extend(LSvar.lang," . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "jYesNo", []))) . ")"), "POS_BEGIN");
            echo "
";
        }
        // line 21
        echo LS_Twig_Extension::registerScript("activateActionLink", "activateActionLink();", "POS_POSTSCRIPT");
        echo "
";
        // line 22
        echo LS_Twig_Extension::registerScript("activateConfirmButton", "activateConfirmButton();", "POS_POSTSCRIPT");
        echo "

<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"generator\" content=\"LimeSurvey http://www.limesurvey.org\" />

    ";
        // line 30
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "metas", []));
        echo "

    <title>
        ";
        // line 33
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_title", [])), 1);
        echo "
    </title>
    ";
        // line 35
        if (LS_Twig_Extension::imageSrc("./files/favicon.ico")) {
            // line 36
            echo "        <link rel=\"shortcut icon\" href=\"";
            echo LS_Twig_Extension::imageSrc("./files/favicon.ico");
            echo "\" />
    ";
        }
        // line 38
        echo "    <script type=\"text/javascript\">
        if(window.basicThemeScripts === undefined){ 
            window.basicThemeScripts = new ThemeScripts(); 
        } 
    </script>
    ";
        // line 44
        echo "    ";
        echo LS_Twig_Extension::registerScript("LSvarTemplateInit", "LSvar= LSvar || {};", "POS_HEAD");
        echo "
    ";
        // line 45
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "fixnumauto", []) && ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "fixnumauto", []) != "off"))) {
            // line 46
            echo "        ";
            echo LS_Twig_Extension::registerScript("LSvarTemplateRealFixNumAuto", (("LSvar.bFixNumAuto = " . ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "fixnumauto", []) == "enable")) ? (1) : (0))) . ";"), "POS_HEAD");
            echo "
        ";
            // line 47
            echo LS_Twig_Extension::registerScript("LSvarTemplateRealNumRealValue", (("LSvar.bNumRealValue = " . ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "fixnumauto", []) == "disable")) ? (1) : (0))) . ";"), "POS_HEAD");
            echo "
    ";
        }
        // line 49
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/header/custom_header.twig");
        echo "

    ";
        // line 51
        echo twig_include($this->env, $context, "./subviews/header/google_analytics.twig");
        echo "
</head>
";
    }

    public function getTemplateName()
    {
        return "./subviews/header/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 51,  101 => 49,  96 => 47,  91 => 46,  89 => 45,  84 => 44,  77 => 38,  71 => 36,  69 => 35,  64 => 33,  58 => 30,  47 => 22,  43 => 21,  37 => 19,  35 => 18,  32 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/head.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\header\\head.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 18];
        static $filters = [];
        static $functions = ["registerScript" => 19, "processString" => 33, "imageSrc" => 35, "include" => 49];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['registerScript', 'processString', 'imageSrc', 'include']
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
