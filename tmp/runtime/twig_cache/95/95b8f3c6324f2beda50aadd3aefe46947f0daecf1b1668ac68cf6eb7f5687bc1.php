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

/* ./subviews/navigation/language_changer.twig */
class __TwigTemplate_566e5ae09c5bb4d36d70d01bb618fb9848bcaebb86fa7d921f01a5576dc7ca12 extends \Twig\Template
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
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "alanguageChanger", []), "show", []) == true)) {
            // line 13
            echo "    
    ";
            // line 15
            echo "    ";
            $context["aLCD"] = $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "alanguageChanger", []), "datas", []);
            // line 16
            echo "
    ";
            // line 22
            echo "    ";
            $context["htmlOptions"] = ["class" => "form-control", "data-targeturl" => $this->getAttribute(            // line 24
($context["aLCD"] ?? null), "targetUrl", [])];
            // line 27
            echo "    <!-- Language Changer -->
    <div class=\" ";
            // line 28
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "formgroup", []));
            echo " form-change-lang form-inline\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "formgroup", []));
            echo " >
        <label class=\"";
            // line 29
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "controllabel", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "controllabel", []));
            echo " for=\"lang\">
            <span class=\"control-label\" ";
            // line 30
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "languagechanger", []));
            echo ">";
            echo gT("Language:");
            echo "</span>
            ";
            // line 31
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(            // line 32
($context["C"] ?? null), "Html", []), "dropDownList", [0 => "lang", 1 => $this->getAttribute(            // line 34
($context["aLCD"] ?? null), "sSelected", []), 2 => $this->getAttribute(            // line 35
($context["aLCD"] ?? null), "aListLang", []), 3 =>             // line 36
($context["htmlOptions"] ?? null)], "method"));
            // line 38
            echo "
        </label>
        <!-- for no js functionality (need form) -->
        ";
            // line 41
            $context["buttonhtmlOptions"] = ["type" => "submit", "value" => "changelang", "name" => "move", "class" => "btn btn-info ls-language-changer-item "];
            // line 48
            echo "        ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(            // line 49
($context["C"] ?? null), "Html", []), "htmlButton", [0 => gT("Change the language"), 1 =>             // line 51
($context["buttonhtmlOptions"] ?? null)], "method"));
            // line 53
            echo "
    </div>

    ";
            // line 57
            echo "    ";
            echo LS_Twig_Extension::registerScript("activateLanguageChanger", "activateLanguageChanger(); ", "POS_END");
            echo "
    
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/language_changer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 57,  89 => 53,  87 => 51,  86 => 49,  84 => 48,  82 => 41,  77 => 38,  75 => 36,  74 => 35,  73 => 34,  72 => 32,  71 => 31,  65 => 30,  59 => 29,  53 => 28,  50 => 27,  48 => 24,  46 => 22,  43 => 16,  40 => 15,  37 => 13,  35 => 12,  32 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/language_changer.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\language_changer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 12, "set" => 15];
        static $filters = [];
        static $functions = ["gT" => 30, "registerScript" => 57];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['gT', 'registerScript']
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
