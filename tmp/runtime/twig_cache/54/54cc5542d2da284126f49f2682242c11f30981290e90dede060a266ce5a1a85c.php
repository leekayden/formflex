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

/* __string_template__ec192a5dabf87b2568f021d2c10791a45ad63cf8c0b380707ae55a45cdd4c18e */
class __TwigTemplate_fb18820a660e359d10f0e495d88cfa1b35f98906c2affa0f33b17fb761d760e5 extends \Twig\Template
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
        echo "<!-- Hints  -->
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <strong>";
        // line 4
        echo gT("Hints and warnings:");
        echo "</strong>
    </div>
    <ul class=\"list-group\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["warnings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
            // line 8
            echo "        <li class=\"list-group-item\">
            <div class=\"ls-flex-row col-12 text-warning\">
                ";
            // line 10
            echo $this->sandbox->ensureToStringAllowed($context["warning"]);
            echo "
            </div>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hints"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hint"]) {
            // line 15
            echo "        <li class=\"list-group-item\">
            <div class=\"ls-flex-row col-12 text-info\">
                ";
            // line 17
            echo $this->sandbox->ensureToStringAllowed($context["hint"]);
            echo "
            </div>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hint'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__ec192a5dabf87b2568f021d2c10791a45ad63cf8c0b380707ae55a45cdd4c18e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  70 => 17,  66 => 15,  61 => 14,  51 => 10,  47 => 8,  43 => 7,  37 => 4,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ec192a5dabf87b2568f021d2c10791a45ad63cf8c0b380707ae55a45cdd4c18e", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 7];
        static $filters = [];
        static $functions = ["gT" => 4];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
