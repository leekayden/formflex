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

/* ./subviews/header/nav_bar.twig */
class __TwigTemplate_baeecbbed5bd698af8677c4ce18514e64f8dd95708c50a323be62597a32efae4 extends \Twig\Template
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
        // line 19
        echo "
<!-- Bootstrap Navigation Bar -->
";
        // line 21
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navbar", [])) {
            // line 22
            echo "<div class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navbar", []));
            echo " navbar-fixed-top\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navbar", []));
            echo ">
    <div class=\"";
            // line 23
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navbarheader", []));
            echo "  \" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navbarheader", []));
            echo " >
        <button type=\"button\" class=\"";
            // line 24
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navbartoggle", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navbartoggle", []));
            echo "  >
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>

        ";
            // line 32
            echo "        ";
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "brandlogo", []) == "on")) {
                // line 33
                echo "            <div class=\"";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navbarbrand", []));
                echo " logo-container hidden-xs\"  ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navbarbrand", []));
                echo "  >
                ";
                // line 34
                echo LS_Twig_Extension::image($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "brandlogofile", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "name", [])), ["class" => "logo img-responsive"]);
                echo "
            </div>
        ";
            } else {
                // line 37
                echo "            <div class=\"";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navbarbrand", []));
                echo "\"  ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navbarbrand", []));
                echo " >
                ";
                // line 38
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "name", []));
                echo "
            </div>
        ";
            }
            // line 41
            echo "    </div>
    <div id=\"";
            // line 42
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "navbar", []));
            echo "\" class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navbarcollapse", []));
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navbarcollapse", []));
            echo " >
        <ul class=\"";
            // line 43
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "navbarlink", []));
            echo " navbar-right\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "navbarlink", []));
            echo ">
            ";
            // line 44
            echo twig_include($this->env, $context, "./subviews/navigation/save_links.twig");
            echo "
            ";
            // line 45
            echo twig_include($this->env, $context, "./subviews/navigation/clearall_links.twig");
            echo "
            ";
            // line 46
            echo twig_include($this->env, $context, "./subviews/navigation/question_index_menu.twig");
            echo "
            ";
            // line 47
            echo twig_include($this->env, $context, "./subviews/navigation/language_changer_top_menu.twig");
            echo "
        </ul>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/header/nav_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 47,  117 => 46,  113 => 45,  109 => 44,  103 => 43,  95 => 42,  92 => 41,  86 => 38,  79 => 37,  73 => 34,  66 => 33,  63 => 32,  51 => 24,  45 => 23,  38 => 22,  36 => 21,  32 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/nav_bar.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\header\\nav_bar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 21];
        static $filters = [];
        static $functions = ["image" => 34, "include" => 44];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['image', 'include']
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
