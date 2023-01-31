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

/* __string_template__ed2447a60b488515ae84a65a951bbd3f523f549b0e59d5349406730bc9eddf85 */
class __TwigTemplate_b676073a976261a62a4e6625d937401e783a8c15c46ef895751e2f86593a95f9 extends \Twig\Template
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
        // line 6
        echo "
<!-- quickaddModal -->
<div class=\"modal fade labelsets-update\" id=\"quickaddModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"quickaddModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span >&times;</span></button>
                <h4 class=\"modal-title\">";
        // line 13
        echo gT("quick-add labels");
        echo "</h4>
            </div>

            <div class=\"modal-body\">
                <p>
                    ";
        // line 18
        echo gT("Enter one label per line. You can provide a code by separating code and label text with a semicolon or tab. For multilingual surveys you add the translation(s) on the same line separated with a semicolon or tab.");
        echo "
                </p>
                <textarea id='quickaddarea' class='tipme' title='' cols='100' rows='10' style='width:570px;'></textarea>
            </div>
            <div class=\"modal-footer button-list\">
                <button class='btn btn-cancel' id='btnqacancel' type='button'  data-dismiss=\"modal\">";
        // line 23
        echo gT("Cancel");
        echo "</button>
                <button class='btn btn-default' id='btnqareplace' type='button'>";
        // line 24
        echo gT("Replace");
        echo "</button>
                <button class='btn btn-success' id='btnqainsert' type='button'>";
        // line 25
        echo gT("Add");
        echo "</button>
            </div>
        </div>
    </div>
</div>

<!--labelset browser Modal -->
<div class=\"modal fade labelsets-update\" id=\"labelsetbrowserModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"labelsetbrowserModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span >&times;</span></button>
                <h4 class=\"modal-title\">";
        // line 37
        echo gT("Manage label sets");
        echo "</h4>
            </div>

            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <div class=\"row\" id=\"labelsetsLoader\">
                        <div class=\"ls-flex ls-flex-column align-items-center align-content-center\" style=\"height: 200px;\">
                            <div class=\"loader--loaderWidget ls-flex ls-flex-column align-content-center align-items-center\" style=\"min-height: 100%;\">
                                <div class=\"ls-flex align-content-center align-items-center\">
                                <div class=\"loader-adminpanel text-center\">
                                    <div class=\"contain-pulse animate-pulse\">
                                        <div class=\"square\"></div>
                                        <div class=\"square\"></div>
                                        <div class=\"square\"></div>
                                        <div class=\"square\"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id=\"labelsetsModalContent\" style=\"display: none;\">
                        <div class=\"row\" id=\"labelsetsSelectorContainer\">
                            <div class=\"col-sm-12\">
                                <label for=\"labelsets\">";
        // line 61
        echo gT("Label sets list");
        echo "</label>
                            </div>
                            <div class=\"col-sm-12\">
                                <select id='labelsets' size='10' style='width:250px;'>
                                    <option>--";
        // line 65
        echo gT("Label sets");
        echo "--</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div id=\"labelsetalert\" class=\"col-sm-12\" style=\"display: none;\"></div>
                            <div id='labelsetpreview' class=\"col-sm-12 ls-space margin top-15\" >
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class=\"modal-footer button-list\">
                <button class='btn btn-cancel' id='btnqacancel' type='button'  data-dismiss=\"modal\">";
        // line 79
        echo gT("Cancel");
        echo "</button>
                <button id='btnlsreplace' type='button' class='btn btn-default'>";
        // line 80
        echo gT("Replace");
        echo "</button>
                <button id='btnlsinsert' type='button' class='btn btn-success'>";
        // line 81
        echo gT("Add");
        echo "</button>
            </div>
        </div>
    </div>
</div>

<!-- Save as labelset Modal -->
<div class=\"modal fade\" id=\"saveaslabelModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"saveaslabelModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span >&times;</span></button>
                <h4 class=\"modal-title\">
                    ";
        // line 94
        echo gT("Save as label set");
        echo "
                </h4>

            </div>

            <div class=\"modal-body\">
                <p>
                    <input type=\"radio\" name=\"savelabeloption\" id=\"newlabel\">
                    <label for=\"newlabel\">";
        // line 102
        echo gT("New label set");
        echo "</label>
                </p>
                <p>
                    <input type=\"radio\" name=\"savelabeloption\" id=\"replacelabel\">
                    <label for=\"replacelabel\">";
        // line 106
        echo gT("Replace the existing record.");
        echo "
                </p>
            </div>

            <div class=\"modal-footer button-list\">
                <button class='btn btn-cancel' id='btnlacancel' type='button'  data-dismiss=\"modal\">";
        // line 111
        echo gT("Cancel");
        echo "</button>
                <button id='btnsavelabelset' class='btn btn-success' type='button'>";
        // line 112
        echo gT("Save");
        echo "</button>
            </div>
        </div>
    </div>
</div>

<!-- Confirm labelset replacement -->
<div class=\"modal fade\" id=\"dialog-confirm-replaceModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"dialog-confirm-replaceModal\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span >&times;</span></button>
                <h4 class=\"modal-title\">
                    ";
        // line 125
        echo gT("Replace label set?");
        echo "
                </h4>
            </div>

            <div class=\"modal-body\">
                <p>
                    <span id='strReplaceMessage'></span>
                </p>
            </div>

            <div class=\"modal-footer button-list\">
                <button class='btn btn-default' id='btnlconfirmreplace' type='button' data-dismiss=\"modal\"  >";
        // line 136
        echo gT("OK");
        echo "</button>
                <button class='btn btn-warning' id='btnlacancel' type='button'  data-dismiss=\"modal\">";
        // line 137
        echo gT("Cancel");
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__ed2447a60b488515ae84a65a951bbd3f523f549b0e59d5349406730bc9eddf85";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 137,  215 => 136,  201 => 125,  185 => 112,  181 => 111,  173 => 106,  166 => 102,  155 => 94,  139 => 81,  135 => 80,  131 => 79,  114 => 65,  107 => 61,  80 => 37,  65 => 25,  61 => 24,  57 => 23,  49 => 18,  41 => 13,  32 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ed2447a60b488515ae84a65a951bbd3f523f549b0e59d5349406730bc9eddf85", "");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = ["gT" => 13];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['gT']
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
