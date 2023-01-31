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

/* /survey/questions/answer/longfreetext/answer.twig */
class __TwigTemplate_d833c5c5584f4cb969af1a836490c1810806e5be22e666fe43b0a3127f9482e4 extends \Twig\Template
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
        // line 15
        echo "<!-- Long free text -->

<!-- answer -->
";
        // line 18
        if (($context["withColumn"] ?? null)) {
            // line 19
            echo "<div class='";
            echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
            echo " row'>
    <div class=\"";
            // line 20
            echo $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null));
            echo "\">
";
        } else {
            // line 22
            echo "<div class='";
            echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null));
            echo " ";
            echo $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null));
            echo "'>
";
        }
        // line 24
        echo "    <textarea
        class=\"form-control ";
        // line 25
        echo $this->sandbox->ensureToStringAllowed(($context["kpclass"] ?? null));
        echo "\"
        name=\"";
        // line 26
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
        id=\"answer";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
        placeholder=\"";
        // line 28
        echo LS_Twig_Extension::flatString(LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["placeholder"] ?? null)), 1), 1);
        echo "\"
        rows=\"";
        // line 29
        echo $this->sandbox->ensureToStringAllowed(($context["drows"] ?? null));
        echo "\"
        ";
        // line 30
        if (($context["inputsize"] ?? null)) {
            echo " cols=\"";
            echo $this->sandbox->ensureToStringAllowed(($context["inputsize"] ?? null));
            echo "\" ";
        }
        // line 31
        echo "        ";
        if (($context["maxlength"] ?? null)) {
            echo " maxlength=\"";
            echo $this->sandbox->ensureToStringAllowed(($context["maxlength"] ?? null));
            echo "\" ";
        }
        // line 32
        echo "        aria-labelledby=\"ls-question-text-";
        echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\"
    >";
        // line 33
        echo $this->sandbox->ensureToStringAllowed(($context["dispVal"] ?? null));
        echo "</textarea>
";
        // line 34
        if (($context["withColumn"] ?? null)) {
            // line 35
            echo "    </div>
</div>
";
        } else {
            // line 38
            echo "</div>
";
        }
        // line 40
        echo "
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/longfreetext/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  109 => 38,  104 => 35,  102 => 34,  98 => 33,  93 => 32,  86 => 31,  80 => 30,  76 => 29,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  57 => 24,  49 => 22,  44 => 20,  39 => 19,  37 => 18,  32 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/longfreetext/answer.twig", "C:\\xampp2\\htdocs\\limesurvey\\application\\views\\survey\\questions\\answer\\longfreetext\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 18];
        static $filters = [];
        static $functions = ["flatString" => 28, "processString" => 28];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['flatString', 'processString']
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
