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

/* ./subviews/survey/group_subviews/group_container.twig */
class __TwigTemplate_dff837527b63bfd70c8eabe7e6e424ec042c16fbbb493ff0722c8199a0aacd54 extends \Twig\Template
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
        echo "
<div class=\"";
        // line 21
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "groupcontainer", []));
        echo " space-col\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "groupcontainer", []));
        echo ">

    ";
        // line 24
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/survey/group_subviews/group_name.twig");
        echo "

    ";
        // line 27
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/survey/group_subviews/group_desc.twig");
        echo "

    ";
        // line 34
        echo "
    <!-- PRESENT THE QUESTIONS -->
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aGroup"] ?? null), "aQuestions", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["aQuestion"]) {
            // line 37
            echo "         ";
            echo twig_include($this->env, $context, "./subviews/survey/question_container.twig");
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aQuestion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    <!-- Hidden inputs -->
    ";
        // line 41
        if (($this->getAttribute(($context["aGroup"] ?? null), "show_last_group", []) == true)) {
            // line 42
            echo "        <input type='hidden' name='lastgroup' value='";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aGroup"] ?? null), "lastgroup", []));
            echo "' id='lastgroup' />
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if (($this->getAttribute(($context["aGroup"] ?? null), "show_last_answer", []) == true)) {
            // line 46
            echo "        <input type='hidden' name='lastanswer' value='";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aGroup"] ?? null), "lastanswer", []));
            echo "' id='lastanswer' />
    ";
        }
        // line 48
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/group_subviews/group_container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 48,  109 => 46,  107 => 45,  104 => 44,  98 => 42,  96 => 41,  92 => 39,  75 => 37,  58 => 36,  54 => 34,  48 => 27,  42 => 24,  35 => 21,  32 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/survey/group_subviews/group_container.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\survey\\group_subviews\\group_container.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 36, "if" => 41];
        static $filters = [];
        static $functions = ["include" => 24];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
