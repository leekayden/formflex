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

/* ./subviews/logincomponents/token.twig */
class __TwigTemplate_67b48eedbb59f896ae99d30e17abfeb33502475f30209dba486f3126a582ce1d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'formheading' => [$this, 'block_formheading'],
            'description' => [$this, 'block_description'],
            'formcontent' => [$this, 'block_formcontent'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./subviews/logincomponents/captcha.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("./subviews/logincomponents/captcha.twig", "./subviews/logincomponents/token.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_formheading($context, array $blocks = [])
    {
        // line 4
        echo "        ";
        echo gT("To participate in this restricted survey, you need a valid access code.");
        echo "
    ";
    }

    // line 7
    public function block_description($context, array $blocks = [])
    {
        // line 8
        echo "        <p class='";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincoldivdivbp", []));
        echo " text-info' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincoldivdivbp", []));
        echo ">
            ";
        // line 9
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", []), "token", []) == null)) {
            // line 10
            echo "                ";
            echo gT("If you have been issued an access code, please enter it in the box below and click continue.");
            echo "
            ";
        } else {
            // line 12
            echo "                ";
            echo gT("Please confirm the access code by answering the security question below and click continue.");
            echo "
            ";
        }
        // line 14
        echo "        </p>
    ";
    }

    // line 18
    public function block_formcontent($context, array $blocks = [])
    {
        // line 19
        echo "
        <div class='";
        // line 20
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolform", []));
        echo " form-group' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolform", []));
        echo ">
            <label class='";
        // line 21
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformlabel", []));
        echo " control-label col-sm-3' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformlabel", []));
        echo ">
                <small class=\"";
        // line 22
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformlabelsmall", []));
        echo " text-danger asterisk fa fa-asterisk small \" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformlabelsmall", []));
        echo " ></small>
                ";
        // line 23
        echo gT("Access code:");
        echo "
                <span class=\"";
        // line 24
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformlabelspan", []));
        echo " sr-only text-danger asterisk \" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformlabelspan", []));
        echo ">
                    ( ";
        // line 25
        echo gT("Mandatory");
        echo " )
                </span>

            </label>

            <div class='";
        // line 30
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdiva", []));
        echo " col-sm-7' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdiva", []));
        echo ">
                ";
        // line 31
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", []), "token", []) == null)) {
            // line 32
            echo "                    <input class='";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivainput", []));
            echo " form-control' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivainput", []));
            echo " >
                ";
        } else {
            // line 34
            echo "
                    ";
            // line 35
            $context["passwordFieldHtmlOptions"] = ["id" => "token", "required" => true, "readonly" => true, "class" => "form-control"];
            // line 42
            echo "
                    ";
            // line 43
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(            // line 44
($context["C"] ?? null), "Html", []), "passwordField", [0 => "token", 1 => $this->getAttribute($this->getAttribute(            // line 46
($context["aSurveyInfo"] ?? null), "aForm", []), "token", []), 2 =>             // line 47
($context["passwordFieldHtmlOptions"] ?? null)], "method"));
            // line 49
            echo "
                ";
        }
        // line 51
        echo "            </div>
        </div>

        ";
        // line 55
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", []), "bCaptchaEnabled", []) == true)) {
            // line 56
            echo "            <div class='";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivb", []));
            echo "  form-group ' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivb", []));
            echo ">

                <!-- Doesn't seems aria capable -->
                <label class='";
            // line 59
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivblabel", []));
            echo " control-label col-sm-3' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivblabel", []));
            echo " >
                    ";
            // line 60
            echo gT("Please solve the following equation:");
            echo "
                    <small class=\"";
            // line 61
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivblabelsmall", []));
            echo " text-danger asterisk fa fa-asterisk pull-left small\"  ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivblabelsmall", []));
            echo " ></small>
                    <span  class=\"";
            // line 62
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivblabelspan", []));
            echo " sr-only text-danger asterisk\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivblabelspan", []));
            echo ">
                        ( ";
            // line 63
            echo gT("Mandatory");
            echo " )
                    </span>
                </label>
                <div class=\"col-sm-2\">
                    <div class='";
            // line 67
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivbdivdivdiv", []));
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivbdivdivdiv", []));
            echo " >
                        ";
            // line 69
            echo "                        ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(LS_Twig_Extension::renderCaptcha(), "renderOut", [], "method"));
            echo "
                        <a href=\"#\" class=\"btn btn-sm btn-default\" id=\"reloadCaptcha\" title=\"";
            // line 70
            echo gT("Reload captcha");
            echo "\" data-toggle=\"captcha\"><i class=\"fa fa-refresh\"></i></a>
                    </div>
                </div>
                <div class='";
            // line 73
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivbdiv", []));
            echo " col-sm-5' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivbdiv", []));
            echo ">
                    <input class='form-control ";
            // line 74
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivbdivdivinput", []));
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivbdivdivinput", []));
            echo " >
                </div>
            </div>
        ";
        }
        // line 78
        echo "
        ";
        // line 79
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", []), "hiddenFields", []));
        echo "

        <div class='";
        // line 81
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivc", []));
        echo " form-group ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivc", []));
        echo ">
            <div class='";
        // line 82
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivcdiv", []));
        echo " col-sm-7 col-md-offset-3 ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivcdiv", []));
        echo ">
                <button type=\"submit\" class='";
        // line 83
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivcdivbutton", []));
        echo " btn btn-default' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivcdivbutton", []));
        echo ">
                    ";
        // line 84
        echo gT("Continue");
        echo "
                </button>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "./subviews/logincomponents/token.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 84,  255 => 83,  249 => 82,  243 => 81,  238 => 79,  235 => 78,  226 => 74,  220 => 73,  214 => 70,  209 => 69,  203 => 67,  196 => 63,  190 => 62,  184 => 61,  180 => 60,  174 => 59,  165 => 56,  162 => 55,  157 => 51,  153 => 49,  151 => 47,  150 => 46,  149 => 44,  148 => 43,  145 => 42,  143 => 35,  140 => 34,  132 => 32,  130 => 31,  124 => 30,  116 => 25,  110 => 24,  106 => 23,  100 => 22,  94 => 21,  88 => 20,  85 => 19,  82 => 18,  77 => 14,  71 => 12,  65 => 10,  63 => 9,  56 => 8,  53 => 7,  46 => 4,  43 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/logincomponents/token.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\logincomponents\\token.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 9, "set" => 35];
        static $filters = [];
        static $functions = ["gT" => 4, "renderCaptcha" => 69];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['gT', 'renderCaptcha']
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
