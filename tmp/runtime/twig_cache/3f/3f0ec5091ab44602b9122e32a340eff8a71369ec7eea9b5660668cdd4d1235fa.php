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

/* /subviews/privacy/privacy_datasecurity_notice_label.twig */
class __TwigTemplate_e782449b3cbd10175cc91386a7cfe52ee8a79e5679ac9944b131de500f3516e4 extends \Twig\Template
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
        // line 4
        $context["STARTPOLICYLINK"] = "";
        // line 5
        $context["ENDPOLICYLINK"] = "";
        // line 6
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", []) == 2)) {
            // line 7
            echo "    ";
            $context["STARTPOLICYLINK"] = (("<a href='#data-security-modal-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sid", []))) . "' data-toggle='collapse'>");
            // line 8
            echo "    ";
            $context["ENDPOLICYLINK"] = "</a>";
            // line 9
            echo "    ";
            if (((strpos((" " . ($context["dataSecurityNoticeLabel"] ?? null)), "{STARTPOLICYLINK}") == false) && (strpos((" " . ($context["dataSecurityNoticeLabel"] ?? null)), "{ENDPOLICYLINK}") == false))) {
                // line 10
                echo "        ";
                $context["dataSecurityNoticeLabel"] = ((($this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null)) . "<br/> {STARTPOLICYLINK}") . gT("Show policy")) . "{ENDPOLICYLINK}");
                // line 11
                echo "    ";
            }
        }
        // line 13
        $context["haveENDPOLICYLINK"] = strpos((" " . $this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null))), "{ENDPOLICYLINK}");
        // line 14
        $context["dataSecurityNoticeLabel"] = str_replace("{STARTPOLICYLINK}", $this->sandbox->ensureToStringAllowed(($context["STARTPOLICYLINK"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null)));
        // line 15
        $context["dataSecurityNoticeLabel"] = str_replace("{ENDPOLICYLINK}", $this->sandbox->ensureToStringAllowed(($context["ENDPOLICYLINK"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null)));
        // line 16
        if ((($context["haveENDPOLICYLINK"] ?? null) == false)) {
            // line 17
            echo "    ";
            $context["dataSecurityNoticeLabel"] = ($this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["ENDPOLICYLINK"] ?? null)));
        }
        // line 19
        echo $this->sandbox->ensureToStringAllowed(($context["dataSecurityNoticeLabel"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "/subviews/privacy/privacy_datasecurity_notice_label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  62 => 17,  60 => 16,  58 => 15,  56 => 14,  54 => 13,  50 => 11,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  36 => 6,  34 => 5,  32 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/subviews/privacy/privacy_datasecurity_notice_label.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\privacy\\privacy_datasecurity_notice_label.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 4, "if" => 6];
        static $filters = [];
        static $functions = ["strpos" => 9, "gT" => 10, "str_replace" => 14];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                ['strpos', 'gT', 'str_replace']
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
