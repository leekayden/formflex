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

/* ./subviews/navigation/language_changer_top_menu.twig */
class __TwigTemplate_8ef3cc0954ae26a6cd50c94e4fe8f5344eb70781bc8699a6f3e7e0dc3dbe4cbc extends \Twig\Template
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
        // line 26
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "alanguageChanger", []), "show", []) == true)) {
            // line 27
            echo "
    ";
            // line 29
            echo "    ";
            $context["aLCD"] = $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "alanguageChanger", []), "datas", []);
            // line 30
            echo "
    <!-- Language Changer, top menu version -->
    <li class=\"";
            // line 32
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "lctli", []));
            echo " dropdown\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "lctli", []));
            echo " >
        <a class=\"";
            // line 33
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "lctla", []));
            echo " dropdown-toggle animate\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "lctla", []));
            echo " >

            ";
            // line 36
            echo "            ";
            echo gT("Language:");
            echo " ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aLCD"] ?? null), "aListLang", []), $this->getAttribute(($context["aLCD"] ?? null), "sSelected", []), [], "array"));
            echo "
            <span class=\"";
            // line 37
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "lctspan", []));
            echo " caret\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "lctspan", []));
            echo " ></span>
        </a>

        <ul class=\"";
            // line 40
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "lctdropdown", []));
            echo " dropdown-menu\" id=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "lctdropdown", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "lctdropdown", []));
            echo " >
            ";
            // line 42
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aLCD"] ?? null), "aListLang", []));
            foreach ($context['_seq'] as $context["value"] => $context["lang"]) {
                // line 43
                echo "                <li class=\"";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "lctdropdownli", []));
                echo "\" ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "lctdropdownli", []));
                echo ">
                    <a href='#' data-limesurvey-lang='";
                // line 44
                echo $this->sandbox->ensureToStringAllowed($context["value"]);
                echo "' class=\"";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "lctdropdownlia", []));
                echo " animate\" ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "lctdropdownlia", []));
                echo ">
                        ";
                // line 45
                echo $this->sandbox->ensureToStringAllowed($context["lang"]);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        </ul>
    </li>

";
        }
        // line 53
        echo "
";
        // line 54
        echo LS_Twig_Extension::registerScript("BasicThemeScripts-TopLanguageChanger", (("basicThemeScripts.initTopMenuLanguageChanger('." . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "lctdropdownlia", []))) . "', 'form#limesurvey'); "), "POS_POSTSCRIPT");
        echo "

";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/language_changer_top_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 54,  119 => 53,  113 => 49,  103 => 45,  95 => 44,  88 => 43,  83 => 42,  75 => 40,  67 => 37,  60 => 36,  53 => 33,  47 => 32,  43 => 30,  40 => 29,  37 => 27,  35 => 26,  32 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/language_changer_top_menu.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\language_changer_top_menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 26, "set" => 29, "for" => 42];
        static $filters = [];
        static $functions = ["gT" => 36, "registerScript" => 54];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
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
