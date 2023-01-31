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

/* __string_template__90a2765980248ae8e4d1e94631f69d13a76f93f927a44e6f53d37420572387c6 */
class __TwigTemplate_b2587269866dc000de65f39a1d38cd13b160d357a9c2a55b697b403a38f7ddb6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 27
        echo LS_Twig_Extension::registerTemplateCssFile("css/errors.css");
        echo "
";
        // line 28
        $context["aError"] = $this->getAttribute(($context["aSurveyInfo"] ?? null), "aError", []);
        // line 29
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 31
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", []));
        echo "\" dir=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", []));
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", []));
        echo " dir-";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", []));
        echo " ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "html", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "html", []));
        echo ">

    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

        <title>
            ";
        // line 39
        if ($this->getAttribute(($context["aError"] ?? null), "error", [])) {
            // line 40
            echo "                ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "error", []));
            echo "
            ";
        } else {
            // line 42
            echo "                Error ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_title", []));
            echo "
            ";
        }
        // line 44
        echo "        </title>

        ";
        // line 50
        echo "        <meta name=\"generator\" content=\"LimeSurvey http://www.limesurvey.org\" />
        ";
        // line 51
        if (LS_Twig_Extension::imageSrc("./files/favicon.ico")) {
            // line 52
            echo "            <link rel=\"shortcut icon\" href=\"";
            echo LS_Twig_Extension::imageSrc("./files/favicon.ico");
            echo "\" />
        ";
        }
        // line 54
        echo "    </head>

    <body  class=\"";
        // line 56
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "body", []));
        echo " lang-";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", []));
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(($context["surveyformat"] ?? null));
        echo "\" marginwidth=\"0\" marginheight=\"0\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "body", []));
        echo ">
        <article id=\"block_error\">
            <div>
                ";
        // line 59
        if ($this->getAttribute(($context["aError"] ?? null), "error", [])) {
            // line 60
            echo "                    <h1>";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "error", []));
            echo "</h1>
                ";
        }
        // line 62
        echo "                <h2>";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "title", []));
        echo "</h2>
                <p>
                    ";
        // line 64
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "message", []));
        echo "
                </p>
                <p>
                    ";
        // line 67
        if ($this->getAttribute(($context["aError"] ?? null), "contact", [])) {
            // line 68
            echo "                        ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "contact", []));
            echo "
                    ";
        } else {
            // line 70
            echo "                        ";
            echo sprintf(gT("For further information please contact %s:"), $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "admin", [])));
            echo "
                        ";
            // line 71
            if ($this->getAttribute(($context["aSurveyInfo"] ?? null), "adminemail", [])) {
                // line 72
                echo "                            <br>
                            <a href='mailto:";
                // line 73
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "adminemail", []));
                echo "'>";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "adminemail", []));
                echo "</a>
                        ";
            }
            // line 75
            echo "                    ";
        }
        // line 76
        echo "                </p>
            </div>
            ";
        // line 78
        if ( !twig_test_empty($this->getAttribute(($context["aError"] ?? null), "trace", []))) {
            // line 79
            echo "                <pre>
                    ";
            // line 80
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "trace", []));
            echo "
                </pre>
            ";
        }
        // line 83
        echo "            <div>
            </div>
        </article>
        ";
        // line 86
        $this->displayBlock('footer', $context, $blocks);
        // line 89
        echo "    </body>
</html>
";
    }

    // line 86
    public function block_footer($context, array $blocks = [])
    {
        // line 87
        echo "            ";
        echo twig_include($this->env, $context, "./subviews/footer/footer.twig");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__90a2765980248ae8e4d1e94631f69d13a76f93f927a44e6f53d37420572387c6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 87,  188 => 86,  182 => 89,  180 => 86,  175 => 83,  169 => 80,  166 => 79,  164 => 78,  160 => 76,  157 => 75,  150 => 73,  147 => 72,  145 => 71,  140 => 70,  134 => 68,  132 => 67,  126 => 64,  120 => 62,  114 => 60,  112 => 59,  100 => 56,  96 => 54,  90 => 52,  88 => 51,  85 => 50,  81 => 44,  75 => 42,  69 => 40,  67 => 39,  46 => 31,  42 => 29,  40 => 28,  36 => 27,  33 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__90a2765980248ae8e4d1e94631f69d13a76f93f927a44e6f53d37420572387c6", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 28, "if" => 39, "block" => 86];
        static $filters = ["format" => 70];
        static $functions = ["registerTemplateCssFile" => 27, "imageSrc" => 51, "gT" => 70, "include" => 87];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['format'],
                ['registerTemplateCssFile', 'imageSrc', 'gT', 'include']
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
