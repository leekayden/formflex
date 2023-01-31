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

/* __string_template__9983cd0e7dd9e965c8a13ef3725809715f5425b3a2aa5fc8586a0737aada521e */
class __TwigTemplate_ec31b3c374767e7619eb157f368a81889186ca4227a37303a2b873b0c1a6675b extends \Twig\Template
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
        echo "<div class=\"panel panel-default\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">
        <strong> ";
        // line 4
        echo gT("Share survey");
        echo " </strong>
    </div>
    <!-- List group -->
    <ul class=\"list-group\">
        <!-- Base language -->
        <li class=\"list-group-item\" id=\"adminsidepanel__surveysummary--mainLanguageLink\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4\">
                    ";
        // line 12
        echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["oSurvey"] ?? null), "language", [])), false);
        echo " (";
        echo gT("Base language");
        echo "):
                </div>
                <div class=\"col-8\">
                    ";
        // line 15
        if ($this->getAttribute(($context["oSurvey"] ?? null), "sid", [])) {
            echo " ";
            // line 16
            echo "                        ";
            $context["tmp_url"] = $this->getAttribute(($context["surveyUrls"] ?? null), $this->getAttribute(($context["oSurvey"] ?? null), "language", []), [], "array");
            // line 17
            echo "                    ";
        }
        // line 18
        echo "                    <a href='";
        echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null));
        echo "' target='_blank'> ";
        echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null));
        echo " </a>
                </div>
            </div>
        </li>
        <!-- Additional languages  -->
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
            // line 24
            echo "        <li class=\"list-group-item\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4\">
                    ";
            // line 27
            echo (getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"]), false) . ":");
            echo "
                </div>
                <div class=\"col-8\">
                    ";
            // line 30
            if ($this->getAttribute(($context["oSurvey"] ?? null), "sid", [])) {
                echo " ";
                // line 31
                echo "                        ";
                $context["tmp_url"] = $this->getAttribute(($context["surveyUrls"] ?? null), $context["langname"], [], "array");
                // line 32
                echo "                    ";
            }
            // line 33
            echo "                    <a href='";
            echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null));
            echo "' target='_blank'> ";
            echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null));
            echo " </a>
                </div>
            </div>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        <!-- End URL -->
        <li class=\"list-group-item\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4\">
                    ";
        // line 43
        echo gT("End URL:");
        echo "
                </div>
                <div class=\"col-8\">
                        ";
        // line 46
        echo $this->sandbox->ensureToStringAllowed(($context["endurl"] ?? null));
        echo "
                </div>
            </div>
        </li>
        <!-- Number of questions/groups -->
        <li class=\"list-group-item\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4\">
                    ";
        // line 54
        echo gT("Number of questions/groups:");
        echo "
                </div>
                <div class=\"col-8\">
                    ";
        // line 57
        echo (($this->sandbox->ensureToStringAllowed(($context["sumcount3"] ?? null)) . "/") . $this->sandbox->ensureToStringAllowed(($context["sumcount2"] ?? null)));
        echo "
                </div>
            </div>
        </li>
        <!-- Sharing panel -->
        ";
        // line 62
        if (($this->getAttribute(($context["oSurvey"] ?? null), "active", []) == "Y")) {
            // line 63
            echo "            <li class=\"list-group-item\">
                <div class=\"ls-flex-row col-12\">
                    <div class=\"col-4\">
                        ";
            // line 66
            echo gT("Sharing panel:");
            echo "
                    </div>
                    <div class=\"col-8\">
                        <a href=\"#sharingdialog\" class=\"btn btn-default selector_openSharePanel\" data-toggle=\"modal\" id=\"sharePanelButton_";
            // line 69
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["oSurvey"] ?? null), "sid", []));
            echo "\" data-surveyid=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["oSurvey"] ?? null), "sid", []));
            echo "\">
                            ";
            // line 70
            echo gT("Open sharing panel");
            echo "
                        </a>
                    </div>
                </div>
            </li>
        ";
        }
        // line 76
        echo "    </ul>
</div>

";
        // line 79
        if (($this->getAttribute(($context["oSurvey"] ?? null), "active", []) == "Y")) {
            // line 80
            echo "    <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"sharingdialog\"> 
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\">";
            // line 85
            echo gT("Share survey");
            echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\"> ";
            // line 90
            echo gT("Share QR-code:");
            echo "</div>
                            <div class=\"panel-body\">
                                <ul class=\"list-group\">
                                    ";
            // line 93
            if ($this->getAttribute(($context["oSurvey"] ?? null), "sid", [])) {
                echo " ";
                // line 94
                echo "                                        ";
                $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => $this->getAttribute(($context["oSurvey"] ?? null), "sid", []), "lang" => $this->getAttribute(($context["oSurvey"] ?? null), "language", [])]);
                // line 95
                echo "                                    ";
            }
            // line 96
            echo "                                    <li class=\"list-group-item\">
                                        <div class=\"ls-flex-row col-12\">
                                            <div class=\"col-6\">
                                                ";
            // line 99
            echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["oSurvey"] ?? null), "language", [])), false);
            echo "
                                            </div>
                                            <div class=\"col-6\">
                                                <div class=\"row selector__qrcode_container\">
                                                    <div class=\"col-6\">
                                                        <button class=\"btn btn-default selector__qrcode_trigger\">";
            // line 104
            echo gT("Generate QR-Code");
            echo "</button>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <div class=\"selector__qrcode\" data-url=\"";
            // line 107
            echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null));
            echo "\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
                // line 114
                echo "                                        ";
                if ($this->getAttribute(($context["oSurvey"] ?? null), "sid", [])) {
                    echo " ";
                    // line 115
                    echo "                                            ";
                    $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => $this->getAttribute(($context["oSurvey"] ?? null), "sid", []), "lang" => $context["langname"]]);
                    // line 116
                    echo "                                        ";
                }
                // line 117
                echo "                                        <li class=\"list-group-item\">
                                            <div class=\"ls-flex-row col-12\">
                                                <div class=\"col-6\">
                                                    ";
                // line 120
                echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"]), false);
                echo "
                                                </div>
                                                <div class=\"col-6\">
                                                    <div class=\"row selector__qrcode_container\">
                                                        <div class=\"col-6\">
                                                            <button class=\"btn btn-default selector__qrcode_trigger\">";
                // line 125
                echo gT("Generate QR-Code");
                echo "</button>
                                                        </div>
                                                        <div class=\"col-6\">
                                                            <div class=\"selector__qrcode\" data-url=\"";
                // line 128
                echo $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null));
                echo "\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                ";
            // line 142
            echo gT("Share on Facebook:");
            echo "
                                <button class=\"btn btn-xs btn-warning pull-right facebook-button\" id=\"selector_activateFacebookSharing\">";
            // line 143
            echo gT("Enable");
            echo "</button>
                            </div>
                            <div class=\"panel-body\">
                                <ul class=\"list-group\">
                                    ";
            // line 147
            if ($this->getAttribute(($context["oSurvey"] ?? null), "sid", [])) {
                echo " ";
                // line 148
                echo "                                        ";
                $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => $this->getAttribute(($context["oSurvey"] ?? null), "sid", []), "lang" => $this->getAttribute(($context["oSurvey"] ?? null), "language", [])]);
                // line 149
                echo "                                    ";
            }
            // line 150
            echo "                                    <li class=\"list-group-item\">
                                        <div class=\"ls-flex-row col-12\">
                                            <div class=\"col-6\">
                                                ";
            // line 153
            echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["oSurvey"] ?? null), "language", [])), false);
            echo "
                                            </div>
                                            <div class=\"col-6\">
                                                <button class=\"btn btn-disabled facebook-button selector_fb_share_disabled\" disabled ><i class=\"fa fa-facebook-square\"></i> ";
            // line 156
            echo gT("Disabled");
            echo "</button>
                                                <iframe class=\"selector_fb_share hidden\" data-src=\"https://www.facebook.com/plugins/share_button.php?href=";
            // line 157
            echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null)));
            echo "&layout=button_count&size=large&mobile_iframe=true&appId=328433594315978&width=106&height=28\" width=\"106\" height=\"28\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>
                                            </div>
                                        </div>
                                    </li>
                                    ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
                // line 162
                echo "                                        ";
                if ($this->getAttribute(($context["oSurvey"] ?? null), "sid", [])) {
                    echo " ";
                    // line 163
                    echo "                                            ";
                    $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => $this->getAttribute(($context["oSurvey"] ?? null), "sid", []), "lang" => $context["langname"]]);
                    // line 164
                    echo "                                        ";
                }
                // line 165
                echo "                                        <li class=\"list-group-item\">
                                            <div class=\"ls-flex-row col-12\">
                                                <div class=\"col-6\">
                                                    ";
                // line 168
                echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"]), false);
                echo "
                                                </div>
                                                <div class=\"col-6\">
                                                    <button class=\"btn btn-disabled facebook-button selector_fb_share_disabled\" disabled ><i class=\"fa fa-facebook-square\"></i> ";
                // line 171
                echo gT("Disabled");
                echo "</button>
                                                    <iframe class=\"selector_fb_share hidden\" data-src=\"https://www.facebook.com/plugins/share_button.php?href=";
                // line 172
                echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null)));
                echo "&layout=button_count&size=small&mobile_iframe=true&appId=1321262851319939&width=183&height=20\" width=\"103\" height=\"20\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>
                                                </div>
                                            </div>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                ";
            // line 184
            echo gT("Share on Twitter:");
            echo "
                            </div>
                            <div class=\"panel-body\">
                                <ul class=\"list-group\">
                                    ";
            // line 188
            if ($this->getAttribute(($context["oSurvey"] ?? null), "sid", [])) {
                echo " ";
                // line 189
                echo "                                        ";
                $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => $this->getAttribute(($context["oSurvey"] ?? null), "sid", []), "lang" => $this->getAttribute(($context["oSurvey"] ?? null), "language", [])]);
                // line 190
                echo "                                    ";
            }
            // line 191
            echo "                                    <li class=\"list-group-item\">
                                        <div class=\"ls-flex-row col-12\">
                                            <div class=\"col-6\">
                                                ";
            // line 194
            echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["oSurvey"] ?? null), "language", [])), false);
            echo "
                                            </div>
                                            <div class=\"col-6\">
                                                <a class=\"btn btn-default twitter-button\" target='_blank' href=\"https://twitter.com/intent/tweet?text=";
            // line 197
            echo twig_urlencode_filter(gT("Thanks for taking this survey!"));
            echo "&url=";
            echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null)));
            echo "&hashtags=limesurvey,survey\">
                                                    <i class=\"fa fa-twitter\"></i>";
            // line 198
            echo gT("Tweet it");
            echo "
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aAdditionalLanguages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
                // line 204
                echo "                                        ";
                if ($this->getAttribute(($context["oSurvey"] ?? null), "sid", [])) {
                    echo " ";
                    // line 205
                    echo "                                            ";
                    $context["tmp_url"] = LS_Twig_Extension::createAbsoluteUrl("survey/index", ["sid" => $this->getAttribute(($context["oSurvey"] ?? null), "sid", []), "lang" => $context["langname"]]);
                    // line 206
                    echo "                                        ";
                }
                // line 207
                echo "                                        <li class=\"list-group-item\">
                                            <div class=\"ls-flex-row col-12\">
                                                <div class=\"col-6\">
                                                    ";
                // line 210
                echo getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"]), false);
                echo "
                                                </div>
                                                <div class=\"col-6\">
                                                    <a class=\"btn btn-default twitter-button\" target='_blank' href=\"https://twitter.com/intent/tweet?text=";
                // line 213
                echo twig_urlencode_filter(gT("Thanks for taking this survey!"));
                echo "&url=";
                echo twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null)));
                echo "&hashtags=limesurvey,survey\">
                                                        <i class=\"fa fa-twitter\"></i>";
                // line 214
                echo gT("Tweet it");
                echo "
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
            // line 226
            echo gT("Close");
            echo "</button>
                </div>
            </div>
        </div>
    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__9983cd0e7dd9e965c8a13ef3725809715f5425b3a2aa5fc8586a0737aada521e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 226,  475 => 220,  463 => 214,  457 => 213,  451 => 210,  446 => 207,  443 => 206,  440 => 205,  436 => 204,  432 => 203,  424 => 198,  418 => 197,  412 => 194,  407 => 191,  404 => 190,  401 => 189,  398 => 188,  391 => 184,  382 => 177,  371 => 172,  367 => 171,  361 => 168,  356 => 165,  353 => 164,  350 => 163,  346 => 162,  342 => 161,  335 => 157,  331 => 156,  325 => 153,  320 => 150,  317 => 149,  314 => 148,  311 => 147,  304 => 143,  300 => 142,  291 => 135,  278 => 128,  272 => 125,  264 => 120,  259 => 117,  256 => 116,  253 => 115,  249 => 114,  245 => 113,  236 => 107,  230 => 104,  222 => 99,  217 => 96,  214 => 95,  211 => 94,  208 => 93,  202 => 90,  194 => 85,  187 => 80,  185 => 79,  180 => 76,  171 => 70,  165 => 69,  159 => 66,  154 => 63,  152 => 62,  144 => 57,  138 => 54,  127 => 46,  121 => 43,  114 => 38,  100 => 33,  97 => 32,  94 => 31,  91 => 30,  85 => 27,  80 => 24,  76 => 23,  65 => 18,  62 => 17,  59 => 16,  56 => 15,  48 => 12,  37 => 4,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9983cd0e7dd9e965c8a13ef3725809715f5425b3a2aa5fc8586a0737aada521e", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 15, "set" => 16, "for" => 23];
        static $filters = ["url_encode" => 157];
        static $functions = ["gT" => 4, "getLanguageNameFromCode" => 12, "createAbsoluteUrl" => 94];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['url_encode'],
                ['gT', 'getLanguageNameFromCode', 'createAbsoluteUrl']
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
