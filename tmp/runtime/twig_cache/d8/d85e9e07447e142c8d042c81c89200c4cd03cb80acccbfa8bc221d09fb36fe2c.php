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

/* ./subviews/logincomponents/captcha.twig */
class __TwigTemplate_de648408cc45c874004cbec68fba26950c9d588ba8b895d0d4a2ee3df7057b13 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'formheading' => [$this, 'block_formheading'],
            'description' => [$this, 'block_description'],
            'formcontent' => [$this, 'block_formcontent'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincoldivdiva", []));
        echo " h3\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincoldivdiva", []));
        echo ">
    ";
        // line 2
        $this->displayBlock('formheading', $context, $blocks);
        // line 5
        echo "</div>
<div class=\"";
        // line 6
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincoldivdivb", []));
        echo " well container-fluid\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincoldivdivb", []));
        echo ">

    ";
        // line 8
        $this->displayBlock('description', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        if ( !empty($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", []), "aEnterErrors", []))) {
            // line 13
            echo "        <ul class='";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincoldivdivbul", []));
            echo " alert alert-danger list-unstyled' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincoldivdivbul", []));
            echo ">
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", []), "aEnterErrors", []));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 15
                echo "                <li>";
                echo $this->sandbox->ensureToStringAllowed($context["error"]);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </ul>
    ";
        }
        // line 19
        echo "
    <div class=\"form-";
        // line 20
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aForm", []), "sType", []));
        echo " ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincoldivdivbdiv", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincoldivdivbdiv", []));
        echo " >
        ";
        // line 26
        echo "        ";
        // line 27
        $context["htmlOptions"] = ["id" => ("form-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(        // line 28
($context["aSurveyInfo"] ?? null), "aForm", []), "sType", []))), "name" => "limesurvey", "class" => "ls-form form form-horizontal"];
        // line 33
        echo "
        ";
        // line 35
        echo "        <!-- Start of the main Form-->
        ";
        // line 36
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(        // line 37
($context["C"] ?? null), "Html", []), "form", [0 => $this->getAttribute(        // line 38
($context["aSurveyInfo"] ?? null), "surveyUrl", []), 1 => "post", 2 =>         // line 40
($context["htmlOptions"] ?? null)], "method"));
        // line 42
        echo "

        ";
        // line 44
        $this->displayBlock('formcontent', $context, $blocks);
        // line 76
        echo "        </form>
    </div>
</div>
";
    }

    // line 2
    public function block_formheading($context, array $blocks = [])
    {
        // line 3
        echo "        ";
        echo gT("Before you start, please prove you are human.");
        echo "
    ";
    }

    // line 8
    public function block_description($context, array $blocks = [])
    {
        // line 9
        echo "        
    ";
    }

    // line 44
    public function block_formcontent($context, array $blocks = [])
    {
        // line 45
        echo "
            <div class='";
        // line 46
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivb", []));
        echo "  form-group ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivb", []));
        echo ">

                <!-- Doesn't seems aria capable -->
                <label class='";
        // line 49
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivblabel", []));
        echo " control-label col-sm-4' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivblabel", []));
        echo " >
                    ";
        // line 50
        echo gT("Please solve the following equation:");
        echo "
                    <small class=\"";
        // line 51
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivblabelsmall", []));
        echo " text-danger asterisk fa fa-asterisk pull-left small\"  ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivblabelsmall", []));
        echo " ></small>
                    <span  class=\"";
        // line 52
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivblabelspan", []));
        echo " sr-only text-danger asterisk\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivblabelspan", []));
        echo ">
                        ( ";
        // line 53
        echo gT("Mandatory");
        echo " )
                    <span>
                </label>
                <div class=\"col-sm-2\">
                    <div class='";
        // line 57
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivbdivdivdiv", []));
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivbdivdivdiv", []));
        echo " >
                        ";
        // line 59
        echo "                        ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(LS_Twig_Extension::renderCaptcha(), "renderOut", [], "method"));
        echo "
                        <a href=\"#\" class=\"btn btn-sm btn-default\" id=\"reloadCaptcha\" title=\"";
        // line 60
        echo gT("Reload captcha");
        echo "\" data-toggle=\"captcha\"><i class=\"fa fa-refresh\"></i></a>
                    </div>
                </div>
                <div class='";
        // line 63
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivbdiv", []));
        echo " col-sm-6' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivbdiv", []));
        echo ">
                    <input class='form-control ";
        // line 64
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivbdivdivinput", []));
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivbdivdivinput", []));
        echo " >
                </div>
            </div>

            <div class='";
        // line 68
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivc", []));
        echo " form-group ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivc", []));
        echo ">
                <div class='";
        // line 69
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivcdiv", []));
        echo " col-sm-7 col-md-offset-3 ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivcdiv", []));
        echo ">
                    <button class='";
        // line 70
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "maincolformdivcdivbutton", []));
        echo " btn btn-default' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "maincolformdivcdivbutton", []));
        echo ">
                        ";
        // line 71
        echo gT("Continue");
        echo "
                    </button>
                </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "./subviews/logincomponents/captcha.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 71,  230 => 70,  224 => 69,  218 => 68,  209 => 64,  203 => 63,  197 => 60,  192 => 59,  186 => 57,  179 => 53,  173 => 52,  167 => 51,  163 => 50,  157 => 49,  149 => 46,  146 => 45,  143 => 44,  138 => 9,  135 => 8,  128 => 3,  125 => 2,  118 => 76,  116 => 44,  112 => 42,  110 => 40,  109 => 38,  108 => 37,  107 => 36,  104 => 35,  101 => 33,  99 => 28,  98 => 27,  96 => 26,  88 => 20,  85 => 19,  81 => 17,  72 => 15,  68 => 14,  61 => 13,  59 => 12,  56 => 11,  54 => 8,  47 => 6,  44 => 5,  42 => 2,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/logincomponents/captcha.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\logincomponents\\captcha.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 2, "if" => 12, "for" => 14, "set" => 27];
        static $filters = [];
        static $functions = ["empty" => 12, "gT" => 3, "renderCaptcha" => 59];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set'],
                [],
                ['empty', 'gT', 'renderCaptcha']
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
