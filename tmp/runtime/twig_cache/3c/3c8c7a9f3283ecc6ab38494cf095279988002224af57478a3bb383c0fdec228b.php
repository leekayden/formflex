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

/* ./subviews/messages/justsaved.twig */
class __TwigTemplate_05274536380477295a20f681ca3dd135be4ed069ecb9767cafba29ecf398089a extends \Twig\Template
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
        // line 1
        if (((intval($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "showpopups", [])) >= 0) && $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "saved", []), "text", []))) {
            // line 2
            echo "    ";
            $context["savedClass"] = "success";
            // line 3
            echo "    ";
            if ( !$this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "saved", []), "success", [])) {
                // line 4
                echo "        ";
                $context["savedClass"] = "error";
                // line 5
                echo "    ";
            }
            // line 6
            echo "    ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "active", []) != "Y")) {
                // line 7
                echo "        ";
                $context["savedClass"] = "info";
                // line 8
                echo "    ";
            }
            // line 9
            echo "    <div class=\"alert alert-";
            echo $this->sandbox->ensureToStringAllowed(($context["savedClass"] ?? null));
            echo " alert-dismissible fade in";
            if ((intval($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "showpopups", [])) > 0)) {
                echo " ls-js-hidden";
            }
            echo " \" role=\"alert\">
        <button class=\"close ls-no-js-hidden\" data-dismiss=\"alert\"><span aria-hidden=\"true\">x</span><span class=\"sr-only\">";
            // line 10
            echo gT("Close");
            echo "</span></button>
        ";
            // line 11
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "saved", []), "text", []));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/messages/justsaved.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  64 => 10,  55 => 9,  52 => 8,  49 => 7,  46 => 6,  43 => 5,  40 => 4,  37 => 3,  34 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/messages/justsaved.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\messages\\justsaved.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1, "set" => 2];
        static $filters = [];
        static $functions = ["intval" => 1, "gT" => 10];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['intval', 'gT']
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
