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

/* ./subviews/header/google_analytics.twig */
class __TwigTemplate_723139ab41ba3af9f8d0ef9917505d358f79f13c86f7a49f17531d0162e5e56c extends \Twig\Template
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
        if ((($this->getAttribute(($context["aSurveyInfo"] ?? null), "googleanalyticsapikey", [], "any", true, true) && $this->getAttribute(($context["aSurveyInfo"] ?? null), "googleanalyticsapikey", [])) && $this->getAttribute(($context["aSurveyInfo"] ?? null), "googleanalyticsstyle", []))) {
            // line 18
            echo "    ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "googleanalyticsstyle", [], "any", true, true) && ($this->getAttribute(($context["aSurveyInfo"] ?? null), "googleanalyticsstyle", []) == 1))) {
                // line 19
                echo "        <script>
        (function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments) },i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '";
                // line 25
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "googleanalyticsapikey", []));
                echo "', 'auto');  // Replace with your property ID.
        ga('send', 'pageview');
        </script>
    ";
            } else {
                // line 29
                echo "        ";
                $context["trackUrl"] = LS_Twig_Extension::getGoogleAnalyticsTrackingUrl($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sid", [])), ((($this->getAttribute(($context["aSurveyInfo"] ?? null), "trackUrlPageName", [], "any", true, true) &&  !(null === $this->getAttribute(($context["aSurveyInfo"] ?? null), "trackUrlPageName", [])))) ? ($this->getAttribute(($context["aSurveyInfo"] ?? null), "trackUrlPageName", [])) : ("")));
                // line 30
                echo "        <script>
        (function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments) }
        ,i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '";
                // line 35
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "googleanalyticsapikey", []));
                echo "', 'auto');
        ga('send', 'pageview');
        ga('send', 'pageview', '";
                // line 37
                echo $this->sandbox->ensureToStringAllowed(($context["trackUrl"] ?? null));
                echo "');
        </script>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "./subviews/header/google_analytics.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 37,  62 => 35,  55 => 30,  52 => 29,  45 => 25,  37 => 19,  34 => 18,  32 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/google_analytics.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\header\\google_analytics.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 17, "set" => 29];
        static $filters = [];
        static $functions = ["getGoogleAnalyticsTrackingUrl" => 29];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['getGoogleAnalyticsTrackingUrl']
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
