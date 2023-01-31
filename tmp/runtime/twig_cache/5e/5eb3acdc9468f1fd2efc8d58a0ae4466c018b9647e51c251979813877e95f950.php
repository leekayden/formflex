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

/* /survey/questions/answer/listradio/rows/answer_row.twig */
class __TwigTemplate_10fe49669bdb03c089abe4ed48be49cf39af10668278e05d0c61a2c77c5b7991 extends \Twig\Template
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
        // line 12
        echo "
<!-- answer_row -->
<li id='javatbd";
        // line 14
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "' class='answer-item radio-item' ";
        echo $this->sandbox->ensureToStringAllowed(($context["sDisplayStyle"] ?? null));
        echo " >
    <input
        type=\"radio\"
        value=\"";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null));
        echo "\"
        name=\"";
        // line 18
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "\"
        id=\"answer";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null));
        echo "\"
        ";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null));
        echo "
        onclick=\"if (document.getElementById('answer";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "othertext') != null) document.getElementById('answer";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo "othertext').value='';checkconditions(this.value, this.name, this.type)\"
     />
    <label for=\"answer";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null));
        echo $this->sandbox->ensureToStringAllowed(($context["code"] ?? null));
        echo "\" class=\"control-label radio-label\">
        ";
        // line 24
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["answer"] ?? null)));
        echo "
    </label>
</li>
<!-- end of answer_row -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/listradio/rows/answer_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  68 => 23,  61 => 21,  57 => 20,  52 => 19,  48 => 18,  44 => 17,  36 => 14,  32 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/listradio/rows/answer_row.twig", "C:\\xampp2\\htdocs\\limesurvey\\application\\views\\survey\\questions\\answer\\listradio\\rows\\answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = ["processString" => 24];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['processString']
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
