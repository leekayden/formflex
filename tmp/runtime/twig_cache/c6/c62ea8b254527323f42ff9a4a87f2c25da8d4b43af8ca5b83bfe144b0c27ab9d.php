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

/* ./subviews/messages/warnings.twig */
class __TwigTemplate_17429e5779e013b9bd89203d48570f4c03a4b25d17bca42c1131425715e4cdf7 extends \Twig\Template
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
        // line 27
        echo "
";
        // line 29
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "active", []) != "Y")) {
            // line 30
            echo "    <!-- Preview mode warning -->
    <div class=\"";
            // line 31
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "activealert", []));
            echo " alert alert-warning alert-dismissible fade in alert-dismissible\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "activealert", []));
            echo " >
        <button  ";
            // line 32
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "activealertbutton", []));
            echo " class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "activealertbutton", []));
            echo " close\" ><span aria-hidden=\"true\">×</span></button>
        ";
            // line 33
            echo gT("This survey is currently not active. You will not be able to save your responses.");
            echo "
    </div>
";
        }
        // line 36
        echo "
";
        // line 38
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "errorHtml", []), "show", [])) {
            // line 39
            echo "    <p class=' ";
            echo " fade in alert-dismissible alert alert-danger ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "errorHtml", []));
            echo " ' role='alert'>
        <button  ";
            // line 40
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "errorHtmlbutton", []));
            echo " class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "errorHtmlbutton", []));
            echo " close\" ><span aria-hidden=\"true\">×</span></button>
    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "errorHtml", []), "messages", []));
            foreach ($context['_seq'] as $context["_key"] => $context["aMessage"]) {
                // line 42
                echo "        <!-- Error Html warnings -->
            ";
                // line 43
                echo $this->sandbox->ensureToStringAllowed($context["aMessage"]);
                echo "
            <br/>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    </p>
";
        }
        // line 48
        echo "
";
        // line 49
        echo makeFlashMessage();
        echo "
";
    }

    public function getTemplateName()
    {
        return "./subviews/messages/warnings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 49,  95 => 48,  91 => 46,  82 => 43,  79 => 42,  75 => 41,  69 => 40,  63 => 39,  61 => 38,  58 => 36,  52 => 33,  46 => 32,  40 => 31,  37 => 30,  35 => 29,  32 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/messages/warnings.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\messages\\warnings.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 29, "for" => 41];
        static $filters = [];
        static $functions = ["gT" => 33, "makeFlashMessage" => 49];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                [],
                ['gT', 'makeFlashMessage']
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
