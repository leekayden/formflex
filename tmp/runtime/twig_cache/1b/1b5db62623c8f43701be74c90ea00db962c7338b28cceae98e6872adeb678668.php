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

/* ./subviews/privacy/privacy_modal.twig */
class __TwigTemplate_18d710f77dff15bdc60e7c71f1a79a1300f8010ed93ab943561a5d835d21c038 extends \Twig\Template
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
        // line 17
        echo "
";
        // line 18
        if ($this->getAttribute(($context["aSurveyInfo"] ?? null), "datasecurity_error", [])) {
            // line 19
            echo "<div class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "activealert", []));
            echo " alert alert-danger alert-dismissible fade in alert-dismissible ";
            if ( !$this->getAttribute(($context["aSurveyInfo"] ?? null), "datasecuritynotaccepted", [])) {
                echo "ls-js-hidden ";
            }
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "activealert", []));
            echo " id=\"datasecurity_error\">
\t<a ";
            // line 20
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "activealertbutton", []));
            echo " class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "activealertbutton", []));
            echo " close\" aria-hidden=\"true\">&times;</a>
\t";
            // line 21
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "datasecurity_error", []));
            echo "
</div>
\t";
            // line 23
            if ($this->getAttribute(($context["aSurveyInfo"] ?? null), "datasecuritynotaccepted", [])) {
                // line 24
                echo "\t\t";
                $context["describeprivacy"] = ("datasecurity_error " . $this->sandbox->ensureToStringAllowed(($context["describeprivacy"] ?? null)));
                // line 25
                echo "\t";
            }
        }
        // line 27
        echo "<input required class=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "privacydataseccheckbox", []));
        echo "\" type=\"checkbox\" name=\"datasecurity_accepted\" id=\"datasecurity_accepted\" />
<label for=\"datasecurity_accepted\" class=\"control-label ";
        // line 28
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "privacydataseccheckboxlabel", []));
        echo "\">";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "datasecurity_notice_label", []));
        echo "</label>

<div class=\"collapse fade\" id=\"data-security-modal-";
        // line 30
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sid", []));
        echo "\">
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h4 class=\"modal-title\">";
        // line 33
        echo gT("Privacy policy");
        echo "</h4>
        </div>
        <div class=\"panel-body ";
        // line 35
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "privacydatasecmodalbody", []));
        echo "\">
            ";
        // line 36
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "datasecurity_notice", []));
        echo "
        </div>
        <div class=\"ls-no-js-hidden panel-footer\">
            <button type=\"button\" class=\"btn btn-primary\" onclick=\"\$('#datasecurity_accepted').prop('checked',true).trigger('change');\" data-dismiss=\"modal\">";
        // line 39
        echo gT("Accept");
        echo "</button>
            <button type=\"button\" class=\"btn btn-default\" onclick=\"\$('#data-security-modal-";
        // line 40
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sid", []));
        echo "').collapse('hide');\">";
        echo gT("Close");
        echo "</button>
        </div>
    </div>
</div>
<script>
\$(function() {
    \$(\"#ls-button-submit\").on(\"click\", function() {
        if(!\$('#datasecurity_accepted').prop('checked')) {
            /* dynamic show error */
            \$('#datasecurity_error').removeClass(\"ls-js-hidden\");
            if(\$('#datasecurity_error').length) {
                /* add it in aria and role */
                \$('#datasecurity_error').attr(\"role\", \"alert\");
                \$('#datasecurity_accepted').attr(\"aria-describedby\", \"datasecurity_error ";
        // line 53
        echo $this->sandbox->ensureToStringAllowed(($context["datasecuritynotice"] ?? null));
        echo "\");
            }
        }
    });
});
\$(\"#datasecurity_accepted\").on(\"change\", function() {
    if(\$('#datasecurity_accepted').prop('checked')) {
        /* dynamic hide error */
        \$('#datasecurity_error').addClass(\"ls-js-hidden\");
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "./subviews/privacy/privacy_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 53,  105 => 40,  101 => 39,  95 => 36,  91 => 35,  86 => 33,  80 => 30,  73 => 28,  68 => 27,  64 => 25,  61 => 24,  59 => 23,  54 => 21,  48 => 20,  37 => 19,  35 => 18,  32 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/privacy/privacy_modal.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\privacy\\privacy_modal.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 18, "set" => 24];
        static $filters = [];
        static $functions = ["gT" => 33];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
