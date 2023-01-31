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

/* ./subviews/navigation/question_index_groups_buttons.twig */
class __TwigTemplate_fd5e18d139966399e8f0bfd959a78ec0c2bbfe3306d818f44851ce52eff0bc91 extends \Twig\Template
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
        // line 6
        echo "<div class=\"list-group index-button-full\">
  <div class=\"list-group-item\">
      <div class=\"h4 list-group-item-heading\">";
        // line 8
        echo gT("Question index");
        echo "</div>
  </div>
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", []), "items", []));
        foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
            // line 11
            echo "    ";
            $context["templateClass"] = "";
            // line 12
            echo "    ";
            if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", [], "any", false, true), "index-item-unanswered", [], "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", []), "index-item-unanswered") == true))) {
                // line 13
                echo "        ";
                $context["templateClass"] = ($this->sandbox->ensureToStringAllowed(($context["templateClass"] ?? null)) . " list-group-item-warning");
                // line 14
                echo "    ";
            }
            // line 15
            echo "    ";
            if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", [], "any", false, true), "index-item-error", [], "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", []), "index-item-error") == true))) {
                // line 16
                echo "        ";
                $context["templateClass"] = ($this->sandbox->ensureToStringAllowed(($context["templateClass"] ?? null)) . " list-group-item-danger");
                // line 17
                echo "    ";
            }
            // line 18
            echo "    ";
            if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", [], "any", false, true), "index-item-current", [], "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", []), "index-item-current") == true))) {
                // line 19
                echo "        ";
                $context["templateClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null)) . " disabled");
                // line 20
                echo "    ";
            }
            // line 21
            echo "    <button type=\"submit\" name=\"move\" value=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["indexItem"], "step", []));
            echo "\" class=\"list-group-item ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["indexItem"], "coreClass", []));
            echo " ";
            echo $this->sandbox->ensureToStringAllowed(($context["templateClass"] ?? null));
            echo "\" >";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["indexItem"], "text", []));
            echo "</button>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/question_index_groups_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  41 => 10,  36 => 8,  32 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/question_index_groups_buttons.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\question_index_groups_buttons.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 10, "set" => 11, "if" => 12];
        static $filters = [];
        static $functions = ["gT" => 8];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
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
