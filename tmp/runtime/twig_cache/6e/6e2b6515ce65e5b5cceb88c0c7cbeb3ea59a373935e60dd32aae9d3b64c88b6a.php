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

/* ./subviews/content/firstpage.twig */
class __TwigTemplate_841a50ec892438791e312f00510f18174fec463cde68349553e930973fbbc917 extends \Twig\Template
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
        // line 19
        echo "
";
        // line 21
        echo twig_include($this->env, $context, "./subviews/messages/no_js_alert.twig");
        echo "

";
        // line 24
        echo twig_include($this->env, $context, "./subviews/navigation/language_changer_first_page.twig");
        echo "

";
        // line 27
        echo twig_include($this->env, $context, "./subviews/header/start_form.twig");
        echo " <!-- main form -->

    ";
        // line 30
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "EM", []), "ScriptsAndHiddenInputs", []));
        echo "

    ";
        // line 33
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/messages/welcome.twig");
        echo "

    ";
        // line 35
        echo twig_include($this->env, $context, "./subviews/privacy/privacy.twig");
        echo "

    ";
        // line 38
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/navigation/navigator.twig");
        echo "
</form> <!-- main form -->

";
        // line 41
        echo LS_Twig_Extension::registerScript("BasicFirstPageThemeScripts", "
    if(window.basicThemeScripts === undefined){ 
        window.basicThemeScripts = new ThemeScripts(); 
    } 
", "POS_POSTSCRIPT");
        // line 45
        echo "
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/firstpage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 45,  77 => 41,  70 => 38,  65 => 35,  59 => 33,  53 => 30,  48 => 27,  43 => 24,  38 => 21,  35 => 19,  32 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/firstpage.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\content\\firstpage.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = ["include" => 21, "registerScript" => 41];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['include', 'registerScript']
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
