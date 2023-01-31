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

/* ./subviews/header/progress_bar.twig */
class __TwigTemplate_ff435f816cfbe7a3330c89ac819fb0ed4d42bf636a5cbcac219b65cfaad0ce53 extends \Twig\Template
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
        // line 20
        if (((($this->getAttribute(($context["aSurveyInfo"] ?? null), "showprogress", []) == "Y") && ($this->getAttribute(($context["aSurveyInfo"] ?? null), "format", []) != "A")) &&  !$this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []))) {
            // line 21
            echo "    <!-- Top container -->
    <div class=\"";
            // line 22
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "topcontainer", []));
            echo " space-col\"  ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "topcontainer", []));
            echo " >
        <div class=\"";
            // line 23
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "topcontent", []));
            echo " container-fluid\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "topcontent", []));
            echo " >
            ";
            // line 24
            $context["progressValue"] = ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "progress", []), "total", []) > 0)) ? (intval(((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "progress", []), "currentstep", []) - 1) / $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "progress", []), "total", [])) * 100))) : (0));
            // line 25
            echo "            <div class=\"sr-only\">";
            echo sprintf(gT("You have completed %s%% of this survey"), $this->sandbox->ensureToStringAllowed(($context["progressValue"] ?? null)));
            echo "</div>
                <div class=\"";
            // line 26
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "progress", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "progress", []));
            echo "  aria-hidden=\"true\">
                    <div class=\"";
            // line 27
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "progressbar", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "progressbar", []));
            echo " style=\"min-width: 2em; width: ";
            echo $this->sandbox->ensureToStringAllowed(($context["progressValue"] ?? null));
            echo "%;\">
                        ";
            // line 28
            echo $this->sandbox->ensureToStringAllowed(($context["progressValue"] ?? null));
            echo "%
                    </div>
                </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/header/progress_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 28,  62 => 27,  56 => 26,  51 => 25,  49 => 24,  43 => 23,  37 => 22,  34 => 21,  32 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/progress_bar.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\header\\progress_bar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 20, "set" => 24];
        static $filters = [];
        static $functions = ["intval" => 24, "sprintf" => 25, "gT" => 25];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['intval', 'sprintf', 'gT']
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
