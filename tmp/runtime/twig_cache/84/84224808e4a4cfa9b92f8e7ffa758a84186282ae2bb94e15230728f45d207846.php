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

/* ./subviews/content/save.twig */
class __TwigTemplate_d724333d342604116c918459db4f491569ab516fbafcf7b5666baf97c14a4ec5 extends \Twig\Template
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
        // line 32
        echo "



";
        // line 37
        echo twig_include($this->env, $context, "./subviews/header/start_form.twig");
        echo " <!-- main form -->

    ";
        // line 40
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "EM", []), "ScriptsAndHiddenInputs", []));
        echo "

    <div class=\"";
        // line 42
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "savecontainer", []));
        echo " well clearfix \" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "savecontainer", []));
        echo ">
        <div class=\"";
        // line 43
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "savecontainertitle", []));
        echo " h2\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "savecontainertitle", []));
        echo ">";
        echo gT("Save your unfinished survey");
        echo "</div>
        <div class=\"";
        // line 44
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "savecontainertext", []));
        echo " text-info\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "savecontainertext", []));
        echo ">
            <p ";
        // line 45
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "savecontainertextpa", []));
        echo "> ";
        echo gT("Enter a name and password for this survey and click save below.");
        echo " </p>
            <p ";
        // line 46
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "savecontainertextpb", []));
        echo "> ";
        echo gT("Your survey will be saved using that name and password, and can be completed later by logging in with the same name and password.");
        echo " </p>
            <p class='";
        // line 47
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "savecontainertextpc", []));
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "savecontainertextpc", []));
        echo "> ";
        echo gT("If you give an email address, an email containing the details will be sent to you.");
        echo " </p>
            <p ";
        // line 48
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "savecontainertextpd", []));
        echo "> ";
        echo gT("After having clicked the save button you can either close this browser window or continue filling out the survey.");
        echo " </p>
        </div>
        <div class=\"";
        // line 50
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "savecontainerwarning", []));
        echo " text-warning\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "savecontainerwarning", []));
        echo ">
            <p> ";
        // line 51
        echo gT("To remain anonymous please use a pseudonym as your username, also an email address is not required.");
        echo " </p>
        </div>
    </div>

    <div class=\"";
        // line 55
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformcontainer", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformcontainer", []));
        echo ">

        ";
        // line 57
        if ((LS_Twig_Extension::safecount($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aSaveForm", []), "aErrors", [])) > 0)) {
            // line 58
            echo "            <ul class='";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aSaveForm", []), "sClass", []));
            echo "  ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformcontainerul", []));
            echo " alert alert-danger list-unstyled '  >
                ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aSaveForm", []), "aErrors", []));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 60
                echo "                    <li ";
                echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformcontainerli", []));
                echo " >";
                echo $this->sandbox->ensureToStringAllowed($context["error"]);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "            </ul>
        ";
        }
        // line 64
        echo "
        ";
        // line 70
        echo "        ";
        $context["htmlOptions"] = ["id" => "form-save", "name" => "form-save", "class" => "ls-form"];
        // line 76
        echo "
        ";
        // line 82
        echo "        <!-- Save Form -->
        ";
        // line 83
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(        // line 84
($context["C"] ?? null), "Html", []), "form", [0 => $this->getAttribute(        // line 85
($context["aSurveyInfo"] ?? null), "surveyUrl", []), 1 => "post", 2 =>         // line 87
($context["htmlOptions"] ?? null)], "method"));
        // line 89
        echo "
            <!-- Hidden fields  -->
            ";
        // line 91
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aSaveForm", []), "sHiddenField", []));
        echo "

            <!-- Name and Password -->
            <div class='";
        // line 94
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurvey", []));
        echo " form-horizontal' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurvey", []));
        echo ">
                <div class='";
        // line 95
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydiva", []));
        echo " form-group ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydiva", []));
        echo ">

                    <!-- Saved name  -->
                    <label class='";
        // line 98
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivalabel", []));
        echo " control-label col-sm-3' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivalabel", []));
        echo ">
                        ";
        // line 99
        echo gT("Name:");
        echo "
                        <small class=\"";
        // line 100
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivalabelsmall", []));
        echo " text-danger asterisk fa fa-asterisk pull-left small \" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivalabelsmall", []));
        echo " ></small>
                        <span class=\"";
        // line 101
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivalabelspan", []));
        echo " sr-only text-danger asterisk\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivalabelspan", []));
        echo ">";
        echo gT("Mandatory");
        echo "<span>
                    </label>
                    <div class='";
        // line 103
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivb", []));
        echo " col-sm-7 ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivb", []));
        echo ">

                        ";
        // line 105
        $context["htmlOptions"] = ["id" => "savename", "name" => "savename", "class" => "form-control", "required" => true];
        // line 112
        echo "
                        ";
        // line 114
        echo "                        ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", []), "textField", [0 => "savename", 1 => LS_Twig_Extension::getPost("savename"), 2 =>         // line 117
($context["htmlOptions"] ?? null)], "method"));
        // line 118
        echo "
                    </div>

                </div>

                <!-- Password -->
                <div class='";
        // line 124
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivc", []));
        echo " form-group' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivc", []));
        echo ">
                    <label class='";
        // line 125
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivclabel", []));
        echo " control-label col-sm-3 ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivclabel", []));
        echo ">
                        ";
        // line 126
        echo gT("Password:");
        echo "
                        <small class=\"";
        // line 127
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivcsmall", []));
        echo " text-danger asterisk fa fa-asterisk pull-left small\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivcsmall", []));
        echo " ></small>
                        <span class=\"";
        // line 128
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivcspan", []));
        echo " sr-only text-danger asterisk\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivcspan", []));
        echo ">";
        echo gT("Mandatory");
        echo "<span>
                    </label>

                    <div class='";
        // line 131
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivcdiv", []));
        echo " col-sm-7 ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivcdiv", []));
        echo ">

                        ";
        // line 133
        $context["htmlOptions"] = ["id" => "savepass", "name" => "savepass", "class" => "form-control", "required" => true];
        // line 140
        echo "
                        ";
        // line 141
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", []), "passwordField", [0 => "savepass", 1 => "", 2 =>         // line 144
($context["htmlOptions"] ?? null)], "method"));
        // line 145
        echo "
                    </div>
                </div>

                <!-- Confirm password -->
                <div class='";
        // line 150
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivd", []));
        echo " form-group ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivd", []));
        echo ">
                    <label class='";
        // line 151
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivdlabel", []));
        echo " control-label col-sm-3 ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivdlabel", []));
        echo " >
                        ";
        // line 152
        echo gT("Repeat password:");
        echo "
                        <small class=\"";
        // line 153
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivdlabelsmall", []));
        echo "  text-danger asterisk fa fa-asterisk pull-left small\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivdlabelsmall", []));
        echo "></small>
                        <span class=\"";
        // line 154
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivdlabelspan", []));
        echo " sr-only text-danger asterisk\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivdlabelspan", []));
        echo ">";
        echo gT("Mandatory");
        echo "<span>
                    </label>

                    <div class='";
        // line 157
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivddiv", []));
        echo " col-sm-7 ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivddiv", []));
        echo ">
                        ";
        // line 158
        $context["htmlOptions"] = ["id" => "savepass2", "name" => "savepass2", "class" => "form-control", "required" => true];
        // line 165
        echo "
                        ";
        // line 166
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", []), "passwordField", [0 => "savepass2", 1 => "", 2 =>         // line 169
($context["htmlOptions"] ?? null)], "method"));
        // line 170
        echo "
                    </div>
                </div>

                <!-- Email -->
                <div class='";
        // line 175
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydive", []));
        echo "  form-group ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydive", []));
        echo ">
                    <label class='";
        // line 176
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivelabel", []));
        echo " control-label col-sm-3 ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivelabel", []));
        echo " >
                        ";
        // line 177
        echo gT("Your email address:");
        echo "
                    </label>
                    <div class='";
        // line 179
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivediv", []));
        echo " col-sm-7 ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivediv", []));
        echo ">

                        ";
        // line 181
        $context["htmlOptions"] = ["id" => "saveemail", "name" => "saveemail", "class" => "form-control"];
        // line 187
        echo "
                        ";
        // line 188
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", []), "emailField", [0 => "saveemail", 1 => "", 2 =>         // line 191
($context["htmlOptions"] ?? null)], "method"));
        // line 192
        echo "
                    </div>
                </div>


                ";
        // line 197
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aSaveForm", []), "aCaptcha", []), "show", [])) {
            // line 198
            echo "                    <!-- Captcha -->
                    <div class='";
            // line 199
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivf", []));
            echo " form-group ' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivd", []));
            echo " >
                        <label class='";
            // line 200
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivflabel", []));
            echo " control-label col-sm-3 ' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivdlabel", []));
            echo "  >
                            ";
            // line 201
            echo gT("Security question:");
            echo "
                        </label>
                        <div class='";
            // line 203
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivfdiv", []));
            echo " col-sm-7 ' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivddiv", []));
            echo " >
                            <div class='";
            // line 204
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivfdivdiv", []));
            echo " input-group' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivddivdiv", []));
            echo ">
                                <div class='";
            // line 205
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivfdivdivdiv", []));
            echo " ' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivddivdivdiv", []));
            echo " >
                                    <img src='";
            // line 206
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aSaveForm", []), "aCaptcha", []), "sImageUrl", []));
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivddivdivdivimg", []));
            echo "   />
                                </div>
                                <input class='";
            // line 208
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivfdivdivinput", []));
            echo "  form-control'  ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivfdivdivinput", []));
            echo " />
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 213
        echo "
                <!-- save button -->
                <div class='";
        // line 215
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivg", []));
        echo " form-group' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivg", []));
        echo ">
                    <div class='";
        // line 216
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivgdiv", []));
        echo "  col-sm-7 col-md-offset-3' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivgdiv", []));
        echo ">
                        <button ";
        // line 217
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivgdivbutton", []));
        echo "  class='";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivgdivbutton", []));
        echo " btn btn-default' >
                            ";
        // line 218
        echo gT("Save Now");
        echo "
                        </button>
                    </div>
                </div>
            </div>


        <div class='";
        // line 225
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivh", []));
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivh", []));
        echo ">
            <div class=\"";
        // line 226
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivhdiv", []));
        echo " \" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "saveformsurveydivhdiv", []));
        echo ">
                <a href=\"";
        // line 227
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyUrl", []));
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "saveformsurveydivhdiva", []));
        echo "\">";
        echo gT("Return to survey");
        echo "</a>
            </div>
        </div>
    </div>

</form> <!-- main form -->
";
    }

    public function getTemplateName()
    {
        return "./subviews/content/save.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 227,  475 => 226,  469 => 225,  459 => 218,  453 => 217,  447 => 216,  441 => 215,  437 => 213,  427 => 208,  420 => 206,  414 => 205,  408 => 204,  402 => 203,  397 => 201,  391 => 200,  385 => 199,  382 => 198,  380 => 197,  373 => 192,  371 => 191,  370 => 188,  367 => 187,  365 => 181,  358 => 179,  353 => 177,  347 => 176,  341 => 175,  334 => 170,  332 => 169,  331 => 166,  328 => 165,  326 => 158,  320 => 157,  310 => 154,  304 => 153,  300 => 152,  294 => 151,  288 => 150,  281 => 145,  279 => 144,  278 => 141,  275 => 140,  273 => 133,  266 => 131,  256 => 128,  250 => 127,  246 => 126,  240 => 125,  234 => 124,  226 => 118,  224 => 117,  222 => 114,  219 => 112,  217 => 105,  210 => 103,  201 => 101,  195 => 100,  191 => 99,  185 => 98,  177 => 95,  171 => 94,  165 => 91,  161 => 89,  159 => 87,  158 => 85,  157 => 84,  156 => 83,  153 => 82,  150 => 76,  147 => 70,  144 => 64,  140 => 62,  129 => 60,  125 => 59,  118 => 58,  116 => 57,  109 => 55,  102 => 51,  96 => 50,  89 => 48,  81 => 47,  75 => 46,  69 => 45,  63 => 44,  55 => 43,  49 => 42,  43 => 40,  38 => 37,  32 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/save.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\content\\save.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 57, "for" => 59, "set" => 70];
        static $filters = [];
        static $functions = ["include" => 37, "gT" => 43, "count" => 57, "getPost" => 116];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                [],
                ['include', 'gT', 'count', 'getPost']
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
