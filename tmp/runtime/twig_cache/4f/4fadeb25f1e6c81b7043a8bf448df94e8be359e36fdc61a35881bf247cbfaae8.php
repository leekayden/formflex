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

/* ./subviews/navigation/clearall_links.twig */
class __TwigTemplate_74791e6974bc4b06ef097106afd5149339c3926b41e99e76bb7031a445311ccc extends \Twig\Template
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
        // line 16
        echo "
";
        // line 20
        echo "

";
        // line 22
        if ((($this->getAttribute(($context["aSurveyInfo"] ?? null), "bShowClearAll", []) == true) || ($this->getAttribute(($context["aSurveyInfo"] ?? null), "bShowClearAll", []) == null))) {
            // line 23
            echo "  ";
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "showclearall", []) == "on")) {
                // line 24
                echo "    <!-- Exit and clear survey -->
    <li class=\"";
                // line 25
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "clearalllinks", []));
                echo "\" ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "clearalllinks", []));
                echo ">
        <a href=\"#\" data-limesurvey-submit='{ \"clearall\":\"clearall\" }'  data-confirmedby='{ \"confirm-clearall\":\"confirm\" }' data-confirmlabel='";
                // line 26
                echo gT("Please confirm you want to clear your response?");
                echo "' class='";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "clearalllink", []));
                echo " animate' ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "clearalllink", []));
                echo ">
            ";
                // line 27
                echo gT("Exit and clear survey");
                echo "
        </a>
    </li>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/clearall_links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 27,  53 => 26,  47 => 25,  44 => 24,  41 => 23,  39 => 22,  35 => 20,  32 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/clearall_links.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\clearall_links.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 22];
        static $filters = [];
        static $functions = ["gT" => 26];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['gT']
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
