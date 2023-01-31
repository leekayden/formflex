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

/* __string_template__b30953a0600693eb1e1cda4dee9413cc977504a119d42ea17ff3fa941f5b763d */
class __TwigTemplate_07533b7f3196ff1241294c0564e988e2ad34b5f46aa468f1677784404714bd1a extends \Twig\Template
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
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <strong>";
        // line 3
        echo gT("Publication and access settings");
        echo ":</strong>
        <a class=\"pull-right btn btn-default btn-xs pjax\" data-toggle=\"tooltip\" title=\"";
        // line 4
        echo gT("Edit publication and access settings");
        echo "\" href=\"";
        echo LS_Twig_Extension::createUrl("surveyAdministration/rendersidemenulink", ["subaction" => "publication", "surveyid" => ($context["surveyid"] ?? null)]);
        echo "\">
            <i class=\"fa fa-cogs\"></i>
        </a>
    </div>
    <ul class=\"list-group\">
        <!-- Start date/time -->
        <li class=\"list-group-item\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4\">
                    ";
        // line 13
        echo gT("Start date/time:");
        echo "
                </div>
                <div class=\"col-8\">
                    ";
        // line 16
        echo $this->sandbox->ensureToStringAllowed(($context["startdate"] ?? null));
        echo "
                </div>
            </div>
        </li>
        <!-- Expiration date/time -->
        <li class=\"list-group-item\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4\">
                    ";
        // line 24
        echo gT("Expiration date/time:");
        echo "
                </div>
                <div class=\"col-8\">
                    ";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(($context["expdate"] ?? null));
        echo "
                </div>
            </div>
        </li>
        <!-- Publicly available -->
        <li class=\"list-group-item\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4\">
                    ";
        // line 35
        echo gT("Listed publicly:");
        echo "
                </div>
                <div class=\"col-8\">
                    ";
        // line 38
        echo (($this->getAttribute(($context["oSurvey"] ?? null), "isListPublic", [])) ? (gT("Yes")) : (gT("No")));
        echo "
                </div>
            </div>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b30953a0600693eb1e1cda4dee9413cc977504a119d42ea17ff3fa941f5b763d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  88 => 35,  77 => 27,  71 => 24,  60 => 16,  54 => 13,  40 => 4,  36 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b30953a0600693eb1e1cda4dee9413cc977504a119d42ea17ff3fa941f5b763d", "");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = ["gT" => 3, "createUrl" => 4];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['gT', 'createUrl']
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
