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

/* ./subviews/navigation/question_index_buttons.twig */
class __TwigTemplate_9f1ba80b8ff3f1f4573ab9895f52f768a83f3234907cdd98cac989f086f48c5f extends \Twig\Template
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
        // line 7
        echo "
<div class=\"col-sm-6 index-wrapper\">
    ";
        // line 9
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "format", []) == "G")) {
            // line 10
            echo "        ";
            echo twig_include($this->env, $context, "./subviews/navigation/question_index_groups_buttons.twig");
            echo "
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "format", []) == "S")) {
            // line 14
            echo "        ";
            echo twig_include($this->env, $context, "./subviews/navigation/question_index_questions_buttons.twig");
            echo "
    ";
        }
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/question_index_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  49 => 14,  47 => 13,  44 => 12,  38 => 10,  36 => 9,  32 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/question_index_buttons.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\question_index_buttons.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 9];
        static $filters = [];
        static $functions = ["include" => 10];

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
