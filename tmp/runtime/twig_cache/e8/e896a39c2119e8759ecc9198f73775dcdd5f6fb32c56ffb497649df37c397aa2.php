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

/* ./subviews/navigation/navigator.twig */
class __TwigTemplate_e590fc0f7664d859dc942d984c89cba2bc0af69cc6bf7eeb4195378161879167 extends \Twig\Template
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
        // line 21
        echo "
";
        // line 23
        $context["aNavigator"] = $this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", []);
        // line 24
        echo "
<!-- PRESENT THE NAVIGATOR -->
<div class=\"";
        // line 26
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navigatorcontainer", []));
        echo " row navigator space-col\" id=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "navigatorcontainer", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navigatorcontainer", []));
        echo ">

    <!-- Previous button container -->
    <div class=\"";
        // line 29
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navigatorbuttonl", []));
        echo " col-xs-6 text-left\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navigatorbuttonl", []));
        echo ">

        ";
        // line 32
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["aNavigator"] ?? null), "aMovePrev", []), "show", [])) {
            // line 33
            echo "            <!-- Button previous -->
            <button ";
            // line 34
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navigatorbuttonprev", []));
            echo " accesskey=\"p\" class=\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aNavigator"] ?? null), "disabled", []));
            echo " ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navigatorbuttonprev", []));
            echo " btn btn-lg btn-default \" >
                ";
            // line 35
            echo gT("Previous");
            echo "
            </button>
        ";
        }
        // line 38
        echo "    </div>
    <div class=\"";
        // line 39
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navigatorbuttonr", []));
        echo " col-xs-6 text-right\">

        ";
        // line 42
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["aNavigator"] ?? null), "aMoveNext", []), "show", [])) {
            // line 43
            echo "
            ";
            // line 45
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["aNavigator"] ?? null), "aMoveNext", []), "value", []) == "movesubmit")) {
                // line 46
                echo "                ";
                if (((( !empty($this->getAttribute(($context["aSurveyInfo"] ?? null), "mandViolation", [])) &&  !empty($this->getAttribute(($context["aSurveyInfo"] ?? null), "mandSoft", []))) && empty($this->getAttribute(($context["aSurveyInfo"] ?? null), "mandNonSoft", []))) && ($this->getAttribute(($context["aSurveyInfo"] ?? null), "showPopups", []) != 1))) {
                    // line 47
                    echo "                <span class=\"checkbox-item\">
                    <input class=\"";
                    // line 48
                    echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "mandsoftcheckbox", []));
                    echo "\" type=\"checkbox\" name=\"mandSoft\" id=\"mandSoft\" value=\"";
                    echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", []), "aMoveNext", []), "value", []));
                    echo "\" />
                    <label for=\"mandSoft\" class=\"control-label ";
                    // line 49
                    echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "mandsoftcheckboxlabel", []));
                    echo "\">";
                    echo gT("Continue without answering");
                    echo "</label>&nbsp;
                </span>
                ";
                }
                // line 52
                echo "                <!-- Button submit -->
                <button ";
                // line 53
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navigatorbuttonsubmit", []));
                echo " accesskey=\"n\" class=\" ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aNavigator"] ?? null), "disabled", []));
                echo " ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navigatorbuttonsubmit", []));
                echo " btn btn-lg btn-primary\">
                    ";
                // line 54
                echo gT("Submit");
                echo "
                </button>
            ";
            } else {
                // line 57
                echo "                <!-- Button Next -->
                <button ";
                // line 58
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navigatorbuttonnext", []));
                echo " accesskey=\"n\" class=\" ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aNavigator"] ?? null), "disabled", []));
                echo " ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navigatorbuttonnext", []));
                echo " btn btn-lg btn-primary \" >
                    ";
                // line 59
                echo gT("Next");
                echo "
                </button>
            ";
            }
            // line 62
            echo "        ";
        }
        // line 63
        echo "    </div>
</div>
<!-- Extra navigator part -->
";
        // line 66
        echo twig_include($this->env, $context, "./subviews/navigation/navigator_complement.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/navigator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 66,  152 => 63,  149 => 62,  143 => 59,  135 => 58,  132 => 57,  126 => 54,  118 => 53,  115 => 52,  107 => 49,  101 => 48,  98 => 47,  95 => 46,  92 => 45,  89 => 43,  86 => 42,  81 => 39,  78 => 38,  72 => 35,  64 => 34,  61 => 33,  58 => 32,  51 => 29,  41 => 26,  37 => 24,  35 => 23,  32 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/navigator.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\navigator.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 23, "if" => 32];
        static $filters = [];
        static $functions = ["gT" => 35, "empty" => 46, "include" => 66];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['gT', 'empty', 'include']
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
