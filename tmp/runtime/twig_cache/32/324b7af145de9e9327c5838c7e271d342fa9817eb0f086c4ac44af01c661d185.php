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

/* ./subviews/navigation/save_links.twig */
class __TwigTemplate_da0a42ba5d528dba9582b66eca2d58435efaddba9f4670d7cafae65b30237f1d extends \Twig\Template
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", []), "load", []), "show", []) == "Y")) {
            // line 21
            echo "    <!-- Load unfinished survey button -->
    <li class=\"";
            // line 22
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "loadlinksli", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "loadlinksli", []));
            echo ">
        <a href=\"#\" data-limesurvey-submit='{ \"loadall\":\"loadall\" }' class='";
            // line 23
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "loadlinkslia", []));
            echo " animate' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "loadlinkslia", []));
            echo ">
            ";
            // line 24
            echo gT("Load unfinished survey");
            echo "
        </a>
    </li>
";
        }
        // line 28
        echo "
";
        // line 29
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aNavigator", []), "save", []), "show", []) == "Y")) {
            // line 30
            echo "    <!-- Resume later button -->
    <li class=\"";
            // line 31
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "savelinksli", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "savelinksli", []));
            echo ">
        <a href=\"#\" data-limesurvey-submit='{ \"saveall\":\"saveall\" }' class='";
            // line 32
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "savelinkslia", []));
            echo " animate'>
            ";
            // line 33
            echo gT("Resume later");
            echo "
        </a>
        ";
            // line 35
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "saved", []), "text", []) && ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "showpopups", []) > 0))) {
                // line 36
                echo "            <div class=\"alert-popup\"></div>
            ";
                // line 37
                echo LS_Twig_Extension::registerScript("saveflashmessage", (((("
                \$('.alert-popup').popover({
                    title: '" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(                // line 39
($context["aSurveyInfo"] ?? null), "saved", []), "title", []))) . "',
                    content: '<div>") . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(                // line 40
($context["aSurveyInfo"] ?? null), "saved", []), "text", []))) . "</div>',
                    html: true,
                    container: 'body',
                    placement: 'bottom',
                    delay: { 'show': 500, 'hide': 100 },
                    trigger: 'click',
                }).popover('show');
                setTimeout(function(){ \$('.alert-popup').popover('destroy'); }, 3500);
                "), "POS_POSTSCRIPT");
                // line 48
                echo "
        ";
            }
            // line 50
            echo "    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/save_links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 50,  99 => 48,  89 => 40,  87 => 39,  84 => 37,  81 => 36,  79 => 35,  74 => 33,  70 => 32,  64 => 31,  61 => 30,  59 => 29,  56 => 28,  49 => 24,  43 => 23,  37 => 22,  34 => 21,  32 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/save_links.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\save_links.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 20];
        static $filters = [];
        static $functions = ["gT" => 24, "registerScript" => 37];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
