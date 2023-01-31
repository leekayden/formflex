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

/* __string_template__429ed495ddf9233b50b6ab75deacf71a000d5fb31a39179fcb0064c7ffe3b928 */
class __TwigTemplate_279f206f4499a2979b515e52b97f6e3153e8dd12d5e4f0c28b4183e52f9d86dc extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 21
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", []));
        echo "\" dir=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", []));
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", []));
        echo " dir-";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", []));
        echo " ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "html", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "html", []));
        echo ">
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
        <title>";
        // line 24
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["print"] ?? null), "sitename", []));
        echo " - ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_title", []));
        echo "</title>
    </head>
    <body>

    ";
        // line 29
        echo "    <x-test id=\"action::printableSurvey\"></x-test>

    <div id=\"limesurvey\">
            <h1>";
        // line 32
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_title", []));
        echo "</h1>

            <div class=\"survey-description\">";
        // line 34
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_description", []));
        echo "</div>

            <div class=\"survey-welcome\">";
        // line 36
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_welcometext", []));
        echo "</div>

            <p class=\"x-questions\">";
        // line 38
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["print"] ?? null), "therearexquestions", []));
        echo "</p>

            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["print"] ?? null), "groups", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 41
            echo "                ";
            $context["groupTemplate"] = "./subviews/print/print_group.twig";
            // line 42
            echo "                ";
            echo twig_include($this->env, $context, $this->sandbox->ensureToStringAllowed(($context["groupTemplate"] ?? null)));
            echo "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
            ";
        // line 45
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["print"] ?? null), "privacy", []));
        echo "
            
            <p class=\"submit-by\">
                ";
        // line 48
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["print"] ?? null), "end", []));
        echo "<br />
                ";
        // line 49
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["print"] ?? null), "submit_by", []));
        echo "<br />
                ";
        // line 50
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["print"] ?? null), "submit_text", []));
        echo "<br />
                ";
        // line 51
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["print"] ?? null), "thanks", []));
        echo "<br />
            </p>

        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "__string_template__429ed495ddf9233b50b6ab75deacf71a000d5fb31a39179fcb0064c7ffe3b928";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 51,  139 => 50,  135 => 49,  131 => 48,  125 => 45,  122 => 44,  105 => 42,  102 => 41,  85 => 40,  80 => 38,  75 => 36,  70 => 34,  65 => 32,  60 => 29,  51 => 24,  35 => 21,  32 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__429ed495ddf9233b50b6ab75deacf71a000d5fb31a39179fcb0064c7ffe3b928", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 40, "set" => 41];
        static $filters = [];
        static $functions = ["include" => 42];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
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
