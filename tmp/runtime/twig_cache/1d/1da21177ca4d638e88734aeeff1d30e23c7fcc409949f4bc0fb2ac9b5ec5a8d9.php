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

/* ./subviews/navigation/navigator_complement.twig */
class __TwigTemplate_4016f1caabde2b7a6f1d6d0b798e970fe72008ff423988214ac7357fdcec7d2a extends \Twig\Template
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
        // line 6
        if ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", []), "load", []), "show", []) == "Y") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", []), "save", []), "show", []) == "Y")) || ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", []), "bShow", []) == true)) || ($this->getAttribute(($context["aSurveyInfo"] ?? null), "bShowClearAll", []) == true))) {
            // line 7
            echo "    <!-- extra tools, can be shown with javascript too (just remove ls-js-hidden class -->
    <div class=\"row ls-js-hidden\">
        <!-- Extra button container -->
        <div class=\"col-xs-6 clearall-saveall-wrapper\">
            ";
            // line 11
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", []), "load", []), "show", []) == "Y") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", []), "save", []), "show", []) == "Y"))) {
                // line 12
                echo "                ";
                echo twig_include($this->env, $context, "./subviews/navigation/save_buttons.twig");
                echo "
            ";
            }
            // line 14
            echo "            ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "bShowClearAll", []) == true)) {
                // line 15
                echo "                ";
                echo twig_include($this->env, $context, "./subviews/navigation/clearall_buttons.twig");
                echo "
            ";
            }
            // line 17
            echo "        </div>
         <!-- Index container -->
        ";
            // line 19
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", []), "bShow", []) == true)) {
                // line 20
                echo "            ";
                echo twig_include($this->env, $context, "./subviews/navigation/question_index_buttons.twig");
                echo "
        ";
            }
            // line 22
            echo "    </div>
";
        }
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/navigator_complement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  69 => 22,  63 => 20,  61 => 19,  57 => 17,  51 => 15,  48 => 14,  42 => 12,  40 => 11,  34 => 7,  32 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/navigator_complement.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\navigator_complement.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 6];
        static $filters = [];
        static $functions = ["include" => 12];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['include']
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
