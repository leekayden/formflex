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

/* ./subviews/navigation/question_index_menu.twig */
class __TwigTemplate_66514fb47eaf4c1e7ce32f7eee56eb438d731b5e6fc54f61f8365bc6ae640965 extends \Twig\Template
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
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", []), "bShow", []) == true)) {
            // line 29
            echo "    ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "format", []) == "G")) {
                // line 30
                echo "        <!-- Question index, group, ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", []), "type", []));
                echo " -->
        <li class=\"";
                // line 31
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "indexmenugli", []));
                echo " dropdown index-menu-";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", []), "type", []));
                echo "\" ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "indexmenugli", []));
                echo " >
            <a class=\"";
                // line 32
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "indexmenuglia", []));
                echo " dropdown-toggle\" ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "indexmenuglia", []));
                echo " href=\"#\" >
                ";
                // line 33
                echo gT("Question index");
                echo "
                <span class=\"";
                // line 34
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "indexmenugspan", []));
                echo " caret\" ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "indexmenugspan", []));
                echo "></span>
            </a>

            <ul class=\"";
                // line 37
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "indexmenusgul", []));
                echo " dropdown-menu\" ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "indexmenusgul", []));
                echo ">
                ";
                // line 39
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", []), "items", []));
                foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
                    // line 40
                    echo "                    ";
                    $context["statusClass"] = "";
                    // line 41
                    echo "
                    ";
                    // line 42
                    if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", [], "any", false, true), "index-item-unanswered", [], "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", []), "index-item-unanswered") == true))) {
                        // line 43
                        echo "                        ";
                        $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null)) . " bg-warning");
                        // line 44
                        echo "                    ";
                    }
                    // line 45
                    echo "
                    ";
                    // line 46
                    if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", [], "any", false, true), "index-item-error", [], "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", []), "index-item-error") == true))) {
                        // line 47
                        echo "                        ";
                        $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null)) . " bg-danger");
                        // line 48
                        echo "                    ";
                    }
                    // line 49
                    echo "
                    ";
                    // line 50
                    if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", [], "any", false, true), "index-item-current", [], "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", []), "index-item-current") == true))) {
                        // line 51
                        echo "                        ";
                        $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null)) . " disabled");
                        // line 52
                        echo "                    ";
                    }
                    // line 53
                    echo "

                    <li class=\"";
                    // line 55
                    echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["indexItem"], "coreClass", []));
                    echo " ";
                    echo $this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null));
                    echo "\"  ";
                    echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "indexmenusgli", []));
                    echo ">
                        <a href='";
                    // line 56
                    echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["indexItem"], "url", []));
                    echo "' data-limesurvey-submit='";
                    echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["indexItem"], "submit", []));
                    echo "' class='aminate'>
                            ";
                    // line 57
                    echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["indexItem"], "text", []));
                    echo "
                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "            </ul>
        </li>
    ";
            }
            // line 64
            echo "
    ";
            // line 66
            echo "    ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "format", []) == "S")) {
                // line 67
                echo "        <!-- Question index, question by question, ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", []), "type", []));
                echo " -->
        <li class=\"";
                // line 68
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "indexmenusli", []));
                echo " dropdown index-menu-";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", []), "type", []));
                echo "\" ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "indexmenusli", []));
                echo ">
            <a class=\"";
                // line 69
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "indexmenuslia", []));
                echo " dropdown-toggle animate\" ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "indexmenuslia", []));
                echo ">
                ";
                // line 70
                echo gT("Question index");
                echo "
                <span class=\"";
                // line 71
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "indexmenusspan", []));
                echo " caret\" ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "indexmenusspan", []));
                echo "></span>
            </a>
            <!-- TODO: Remove this when support is added -->
            <ul class=\"";
                // line 74
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "indexmenusddul", []));
                echo " dropdown-menu\" ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "indexmenusddul", []));
                echo ">
            ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", []), "items", []));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 76
                    echo "                ";
                    // line 77
                    echo "                <li>
                    <div class=\"";
                    // line 78
                    echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "indexmenusddh", []));
                    echo " dropdown-header\" ";
                    echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "indexmenusddh", []));
                    echo ">
                        ";
                    // line 79
                    echo LS_Twig_Extension::flatEllipsizeText($this->sandbox->ensureToStringAllowed($this->getAttribute($context["group"], "text", [])), true, 30, " &hellip; ", 0.6);
                    echo "
                        <span class=\"";
                    // line 80
                    echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "indexmenusddspan", []));
                    echo " caret\" ";
                    echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "indexmenusddspan", []));
                    echo "></span>
                    </div>
                    <ul class=\"";
                    // line 82
                    echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "indexmenusddul", []));
                    echo " dropdown-menu\" ";
                    echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "indexmenusddul", []));
                    echo ">
                        ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "questions", []));
                    foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
                        // line 84
                        echo "                            ";
                        $context["statusClass"] = "";
                        // line 85
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", [], "any", false, true), "index-item-unanswered", [], "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", []), "index-item-unanswered") == true))) {
                            // line 86
                            echo "                                ";
                            $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null)) . " bg-warning");
                            // line 87
                            echo "                            ";
                        }
                        // line 88
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", [], "any", false, true), "index-item-error", [], "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", []), "index-item-error") == true))) {
                            // line 89
                            echo "                                ";
                            $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null)) . " bg-danger");
                            // line 90
                            echo "                            ";
                        }
                        // line 91
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", [], "any", false, true), "index-item-current", [], "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", []), "index-item-current") == true))) {
                            // line 92
                            echo "                                ";
                            $context["statusClass"] = ($this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null)) . " disabled");
                            // line 93
                            echo "                            ";
                        }
                        // line 94
                        echo "                            <li class=\"";
                        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["indexItem"], "coreClass", []));
                        echo " ";
                        echo $this->sandbox->ensureToStringAllowed(($context["statusClass"] ?? null));
                        echo "\"  ";
                        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "indexmenussli", []));
                        echo ">
                                <a href='";
                        // line 95
                        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["indexItem"], "url", []));
                        echo "' data-limesurvey-submit='";
                        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["indexItem"], "submit", []));
                        echo "' class='animate'>
                                    ";
                        // line 96
                        echo LS_Twig_Extension::flatEllipsizeText($this->sandbox->ensureToStringAllowed($this->getAttribute($context["indexItem"], "text", [])), true, 30, " &hellip; ", 0.6);
                        echo "
                                </a>
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "                    </ul>
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "            ";
                if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", []), "type", []) == "full")) {
                    // line 104
                    echo "                <li> 
                    ";
                    // line 105
                    echo gT("Question by question mode not yet supported.");
                    echo "
                </li>
            ";
                }
                // line 108
                echo "            </ul>
        </li>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/question_index_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 108,  302 => 105,  299 => 104,  296 => 103,  288 => 100,  278 => 96,  272 => 95,  263 => 94,  260 => 93,  257 => 92,  254 => 91,  251 => 90,  248 => 89,  245 => 88,  242 => 87,  239 => 86,  236 => 85,  233 => 84,  229 => 83,  223 => 82,  216 => 80,  212 => 79,  206 => 78,  203 => 77,  201 => 76,  197 => 75,  191 => 74,  183 => 71,  179 => 70,  173 => 69,  165 => 68,  160 => 67,  157 => 66,  154 => 64,  149 => 61,  139 => 57,  133 => 56,  125 => 55,  121 => 53,  118 => 52,  115 => 51,  113 => 50,  110 => 49,  107 => 48,  104 => 47,  102 => 46,  99 => 45,  96 => 44,  93 => 43,  91 => 42,  88 => 41,  85 => 40,  80 => 39,  74 => 37,  66 => 34,  62 => 33,  56 => 32,  48 => 31,  43 => 30,  40 => 29,  38 => 28,  35 => 27,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/question_index_menu.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\navigation\\question_index_menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 28, "for" => 39, "set" => 40];
        static $filters = [];
        static $functions = ["gT" => 33, "flatEllipsizeText" => 79];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                [],
                ['gT', 'flatEllipsizeText']
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
