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

/* ./subviews/survey/question.twig */
class __TwigTemplate_4593bc004d002b7c92808a891c9e23122e94daa574e4eff86b735f8e33e8bccf extends \Twig\Template
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
        // line 28
        echo "

";
        // line 31
        $context["aShow"] = $this->getAttribute(($context["aSurveyInfo"] ?? null), "aShow", []);
        // line 32
        echo "
    <!-- Question ";
        // line 33
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "code", []));
        echo " -->

    ";
        // line 36
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/survey/question_subviews/question_text_container.twig");
        echo "

    ";
        // line 39
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "questionhelptextposition", []) != "bottom")) {
            // line 40
            echo "        ";
            echo twig_include($this->env, $context, "./subviews/survey/question_subviews/survey_question_help.twig");
            echo "
    ";
        }
        // line 42
        echo "
    ";
        // line 44
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/survey/question_subviews/valid_message_and_help.twig");
        echo "

    ";
        // line 47
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/survey/question_subviews/answers.twig");
        echo "

    ";
        // line 50
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "questionhelptextposition", []) == "bottom")) {
            // line 51
            echo "        ";
            echo twig_include($this->env, $context, "./subviews/survey/question_subviews/survey_question_help.twig");
            echo "
    ";
        }
        // line 53
        echo "    
    <!-- End of question ";
        // line 54
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "code", []));
        echo " -->
";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/question.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 54,  85 => 53,  79 => 51,  76 => 50,  70 => 47,  64 => 44,  61 => 42,  55 => 40,  52 => 39,  46 => 36,  41 => 33,  38 => 32,  36 => 31,  32 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/survey/question.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\survey\\question.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 31, "if" => 39];
        static $filters = [];
        static $functions = ["include" => 36];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
