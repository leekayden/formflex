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

/* ./subviews/messages/welcome.twig */
class __TwigTemplate_a47d8e7fbc87cff036dfd36d3890c39e49472fad35d45c9a5a8e878d990e802a extends \Twig\Template
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
        // line 23
        echo "
<!-- Welcome Message -->
<div id=\"";
        // line 25
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "welcomecontainer", []));
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "welcomecontainer", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "welcomecontainer", []));
        echo ">

    <!-- Survey Name -->
    <h1 class=\"";
        // line 28
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "surveyname", []));
        echo " text-center\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveyname", []));
        echo " >
        ";
        // line 29
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "name", [])), 1);
        echo "
    </h1>

    <!-- Survey description -->
    <div class=\"";
        // line 33
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "description", []));
        echo " text-info text-center\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "description", []));
        echo ">
        ";
        // line 34
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "description", [])), 1);
        echo "
    </div>

    <!-- Welcome text -->
    <div class=\"";
        // line 38
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "welcome", []));
        echo " h4 text-primary\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "welcome", []));
        echo ">
        ";
        // line 39
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "welcome", [])), 1);
        echo "
    </div>

    <!-- Question count -->
    <div class=\"";
        // line 43
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "questioncount", []));
        echo " text-muted\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "questioncount", []));
        echo ">
        <div class='";
        // line 44
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "questioncounttext", []));
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "questioncounttext", []));
        echo ">

            ";
        // line 47
        echo "            ";
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "bShowxquestions", []) == true)) {
            // line 48
            echo "                ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "iTotalquestions", []) < 1)) {
                // line 49
                echo "                    ";
                echo gT("There are no questions in this survey.");
                echo "
                ";
            } elseif (($this->getAttribute(            // line 50
($context["aSurveyInfo"] ?? null), "iTotalquestions", []) == 1)) {
                // line 51
                echo "                    ";
                echo gT("There is 1 question in this survey.");
                echo "
                ";
            } else {
                // line 53
                echo "                    ";
                echo sprintf(gT("There are %s questions in this survey."), $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "iTotalquestions", [])));
                echo "
              ";
            }
            // line 55
            echo "            ";
        }
        // line 56
        echo "        </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/messages/welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 56,  123 => 55,  117 => 53,  111 => 51,  109 => 50,  104 => 49,  101 => 48,  98 => 47,  91 => 44,  85 => 43,  78 => 39,  72 => 38,  65 => 34,  59 => 33,  52 => 29,  46 => 28,  36 => 25,  32 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/messages/welcome.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\messages\\welcome.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 47];
        static $filters = ["format" => 53];
        static $functions = ["processString" => 29, "gT" => 49];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['format'],
                ['processString', 'gT']
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
