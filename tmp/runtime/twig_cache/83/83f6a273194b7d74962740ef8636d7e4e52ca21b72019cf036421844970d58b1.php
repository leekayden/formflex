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

/* ./subviews/content/submit.twig */
class __TwigTemplate_c74d33a74c5b2e88c6a660b84c47aedd6fade22ff7d85a152acea7c2cc22aa1d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'endtext' => [$this, 'block_endtext'],
            'assessments' => [$this, 'block_assessments'],
            'printanswer' => [$this, 'block_printanswer'],
            'publicstatistics' => [$this, 'block_publicstatistics'],
            'endurl' => [$this, 'block_endurl'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        echo "
";
        // line 28
        echo "<!-- main form -->
";
        // line 29
        echo twig_include($this->env, $context, "./subviews/header/start_form.twig");
        echo "
    ";
        // line 31
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "EM", []), "ScriptsAndHiddenInputs", []));
        echo "
    <div class=\"";
        // line 32
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "submitwrapper", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "submitwrapper", []));
        echo ">
        <div class='";
        // line 33
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "submitwrappertext", []));
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "submitwrappertext", []));
        echo ">
            ";
        // line 34
        $this->displayBlock('endtext', $context, $blocks);
        // line 42
        echo "
            ";
        // line 43
        $this->displayBlock('assessments', $context, $blocks);
        // line 49
        echo "
            ";
        // line 50
        $this->displayBlock('printanswer', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('publicstatistics', $context, $blocks);
        // line 73
        echo "
            ";
        // line 75
        echo "            ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "sPluginHTML", []));
        echo "

            ";
        // line 77
        $this->displayBlock('endurl', $context, $blocks);
        // line 83
        echo "        </div>
    </div>
</form> <!-- main form -->
";
    }

    // line 34
    public function block_endtext($context, array $blocks = [])
    {
        // line 35
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "showDefault", []) == true)) {
            // line 36
            echo "                <p ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "submitwrappertextpa", []));
            echo ">";
            echo gT("Thank you!");
            echo "</p>
                <p ";
            // line 37
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "submitwrappertextpb", []));
            echo ">";
            echo gT("Your survey responses have been recorded.");
            echo "</p>
            ";
        } else {
            // line 39
            echo "                ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "sEndText", []));
            echo "
            ";
        }
        // line 41
        echo "            ";
    }

    // line 43
    public function block_assessments($context, array $blocks = [])
    {
        // line 44
        echo "            ";
        // line 45
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aAssessments", []), "show", [])) {
            // line 46
            echo "                ";
            echo twig_include($this->env, $context, "./subviews/messages/assessments.twig");
            echo "
            ";
        }
        // line 48
        echo "            ";
    }

    // line 50
    public function block_printanswer($context, array $blocks = [])
    {
        // line 51
        echo "            ";
        // line 52
        echo "            ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "aPrintAnswers", []), "show", []) == true)) {
            // line 53
            echo "                <!--  Link to Print Answer Preview -->
                <div class=\"";
            // line 54
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "submitwrapperdiva", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "submitwrapperdiv", []));
            echo ">
                    <a href=\"";
            // line 55
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "aPrintAnswers", []), "sUrl", []));
            echo "\" title=";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "aPrintAnswers", []), "sTitle", []));
            echo " class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "submitwrapperdivaa", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "submitwrapperdivaa", []));
            echo ">
                        ";
            // line 56
            echo gT("Print your answers.");
            echo "
                    </a>
                </div>
            ";
        }
        // line 60
        echo "            ";
    }

    // line 62
    public function block_publicstatistics($context, array $blocks = [])
    {
        // line 63
        echo "            ";
        // line 64
        echo "            ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "aPublicStatistics", []), "show", []) == true)) {
            // line 65
            echo "                <!-- Link to Public statistics -->
                <div class=\"";
            // line 66
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "submitwrapperdivb", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "submitwrapperdivb", []));
            echo ">
                    <a href=\"";
            // line 67
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "aPublicStatistics", []), "sUrl", []));
            echo "\" title=";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "aPublicStatistics", []), "sTitle", []));
            echo " class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "submitwrapperdivba", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "submitwrapperdivba", []));
            echo ">
                        ";
            // line 68
            echo gT("View the statistics for this survey.");
            echo "
                    </a>
                </div>
            ";
        }
        // line 72
        echo "            ";
    }

    // line 77
    public function block_endurl($context, array $blocks = [])
    {
        // line 78
        echo "            ";
        // line 79
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "sSurveylsUrl", [])) {
            // line 80
            echo "                <a href=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "sSurveylsUrl", []));
            echo "\">";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", []), "sSurveylsUrlDescription", []));
            echo "</a>
            ";
        }
        // line 82
        echo "            ";
    }

    public function getTemplateName()
    {
        return "./subviews/content/submit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 82,  231 => 80,  228 => 79,  226 => 78,  223 => 77,  219 => 72,  212 => 68,  202 => 67,  196 => 66,  193 => 65,  190 => 64,  188 => 63,  185 => 62,  181 => 60,  174 => 56,  164 => 55,  158 => 54,  155 => 53,  152 => 52,  150 => 51,  147 => 50,  143 => 48,  137 => 46,  134 => 45,  132 => 44,  129 => 43,  125 => 41,  119 => 39,  112 => 37,  105 => 36,  102 => 35,  99 => 34,  92 => 83,  90 => 77,  84 => 75,  81 => 73,  79 => 62,  76 => 61,  74 => 50,  71 => 49,  69 => 43,  66 => 42,  64 => 34,  58 => 33,  52 => 32,  47 => 31,  43 => 29,  40 => 28,  37 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/submit.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\content\\submit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 34, "if" => 35];
        static $filters = [];
        static $functions = ["include" => 29, "gT" => 36];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                [],
                ['include', 'gT']
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
