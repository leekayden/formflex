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

/* ./subviews/header/custom_header.twig */
class __TwigTemplate_864e38151ad93a16dae12a6d7beaf45c21b71d8390856c549dc0ecf7ffdaea00 extends \Twig\Template
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
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "notables", []) == "2")) {
            // line 20
            echo "    ";
            echo LS_Twig_Extension::registerTemplateCssFile("./css/noTablesGeneral.css");
            echo "
";
        } elseif (($this->getAttribute($this->getAttribute(        // line 21
($context["aSurveyInfo"] ?? null), "options", []), "notables", []) == "1")) {
            // line 22
            echo "    ";
            echo LS_Twig_Extension::registerTemplateCssFile("./css/noTablesOnMobile.css");
            echo "
";
        }
        // line 24
        echo "
";
        // line 26
        echo "<style>
    ";
        // line 27
        if ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "backgroundimage", []) == "on") && LS_Twig_Extension::imageSrc($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "backgroundimagefile", [])))) {
            // line 28
            echo "        body {
            background-image: url(";
            // line 29
            echo LS_Twig_Extension::imageSrc($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "backgroundimagefile", [])));
            echo ");
            background-attachment: fixed;
            background-size: cover;

        }

        body .top-container {
            background-color: rgba(236, 240, 241, 0.2);
        }
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "brandlogo", []) == "on")) {
            // line 41
            echo "        body .top-container {
            margin-top: 70px;
        }
    ";
        }
        // line 45
        echo "
    body {
         padding-bottom: 10px;
         padding-top: 60px;/* now is redefine in JS to fit any title length */
         background-color:";
        // line 49
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "bodybackgroundcolor", []));
        echo " ;
         color: ";
        // line 50
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "fontcolor", []));
        echo ";
    }

    .navbar-default .navbar-nav > li > a:hover {
        color: ";
        // line 54
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "fontcolor", []));
        echo ";
    }


    .question-container {
      background-color: ";
        // line 59
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "questionbackgroundcolor", []));
        echo ";

      ";
        // line 61
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "questionborder", []) == "on")) {
            // line 62
            echo "        border:  1px solid #e6e6e6;
      ";
        }
        // line 64
        echo "
      ";
        // line 65
        if ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "questioncontainershadow", []) == "on") && ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "questionborder", []) == "on"))) {
            // line 66
            echo "        box-shadow: 0 1px 2px rgba(0,0,0,.2);
      ";
        }
        // line 68
        echo "    }

    ";
        // line 70
        $context["checkicon"] = (("\"\\" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "checkicon", []))) . "\"");
        // line 71
        echo "    .checkbox-item input[type=\"checkbox\"]:checked + label::after, .checkbox-item input[type=\"radio\"]:checked + label::after {
        content: ";
        // line 72
        echo $this->sandbox->ensureToStringAllowed(($context["checkicon"] ?? null));
        echo ";
    }

    ";
        // line 75
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "animatecheckbox", []) == "on")) {
            // line 76
            echo "
        ";
            // line 77
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "checkboxanimationduration", []) < 1)) {
                // line 78
                echo "            ";
                $context["checkboxanimationduration"] = 500;
                // line 79
                echo "        ";
            } else {
                // line 80
                echo "            ";
                $context["checkboxanimationduration"] = $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "checkboxanimationduration", []);
                // line 81
                echo "        ";
            }
            // line 82
            echo "
        .checkbox-item input[type=\"checkbox\"]:checked + label::after{
            animation-name: ";
            // line 84
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "checkboxanimation", []));
            echo ";
            animation-duration: ";
            // line 85
            echo $this->sandbox->ensureToStringAllowed(($context["checkboxanimationduration"] ?? null));
            echo "ms;
            animation-fill-mode: both;
            animation-iteration-count: 1;
            display: inline-block;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
        .checkbox-item input[type=\"checkbox\"] + label::after{
            display: none;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
    ";
        }
        // line 102
        echo "
    ";
        // line 103
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "animateradio", []) == "on")) {
            // line 104
            echo "
        ";
            // line 105
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "radioanimationduration", []) < 1)) {
                // line 106
                echo "            ";
                $context["radioanimationduration"] = 500;
                // line 107
                echo "        ";
            } else {
                // line 108
                echo "            ";
                $context["radioanimationduration"] = $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "radioanimationduration", []);
                // line 109
                echo "        ";
            }
            // line 110
            echo "
        .radio-item input[type=\"radio\"]:checked + label::after{
            animation-name: ";
            // line 112
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "radioanimation", []));
            echo ";
            animation-duration: ";
            // line 113
            echo $this->sandbox->ensureToStringAllowed(($context["radioanimationduration"] ?? null));
            echo "ms;
            animation-fill-mode: both;
            animation-iteration-count: 1;
            display: inline-block;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
        .radio-item input[type=\"radio\"] + label::after{
            display:none;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
    ";
        }
        // line 130
        echo "
    ";
        // line 131
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "animatequestion", []) == "on")) {
            // line 132
            echo "
        ";
            // line 133
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "questionanimationduration", []) < 1)) {
                // line 134
                echo "            ";
                $context["questionanimationduration"] = 500;
                // line 135
                echo "        ";
            } else {
                // line 136
                echo "            ";
                $context["questionanimationduration"] = $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "questionanimationduration", []);
                // line 137
                echo "        ";
            }
            // line 138
            echo "
        .question-container {
            animation-name: ";
            // line 140
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "questionanimation", []));
            echo ";
            animation-duration: ";
            // line 141
            echo $this->sandbox->ensureToStringAllowed(($context["questionanimationduration"] ?? null));
            echo "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 145
        echo "
    ";
        // line 146
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "animatealert", []) == "on")) {
            // line 147
            echo "
        ";
            // line 148
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "alertanimationduration", []) < 1)) {
                // line 149
                echo "            ";
                $context["alertanimationduration"] = 500;
                // line 150
                echo "        ";
            } else {
                // line 151
                echo "            ";
                $context["alertanimationduration"] = $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "alertanimationduration", []);
                // line 152
                echo "        ";
            }
            // line 153
            echo "
        .alert {
            animation-name: ";
            // line 155
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "alertanimation", []));
            echo ";
            animation-duration: ";
            // line 156
            echo $this->sandbox->ensureToStringAllowed(($context["alertanimationduration"] ?? null));
            echo "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 160
        echo "
    ";
        // line 161
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "animatebody", []) == "on")) {
            // line 162
            echo "
        ";
            // line 163
            if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "bodyanimationduration", []) < 1)) {
                // line 164
                echo "            ";
                $context["bodyanimationduration"] = 500;
                // line 165
                echo "        ";
            } else {
                // line 166
                echo "            ";
                $context["bodyanimationduration"] = $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "bodyanimationduration", []);
                // line 167
                echo "        ";
            }
            // line 168
            echo "
        #outerframeContainer {
            animation-name: ";
            // line 170
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "bodyanimation", []));
            echo ";
            animation-duration: ";
            // line 171
            echo $this->sandbox->ensureToStringAllowed(($context["bodyanimationduration"] ?? null));
            echo "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 175
        echo "
    ";
        // line 176
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "zebrastriping", []) == "on")) {
            // line 177
            echo "    .question-container:nth-of-type(odd){
        background-color: ";
            // line 178
            echo LS_Twig_Extension::darkencss($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "questionbackgroundcolor", [])));
            echo "
    }
    .question-container:nth-of-type(even){
        background-color: ";
            // line 181
            echo LS_Twig_Extension::lightencss($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "questionbackgroundcolor", [])));
            echo "
    }
    ";
        }
        // line 184
        echo "
    ";
        // line 185
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "stickymatrixheaders", []) == "on")) {
            // line 186
            echo "
        .sticky .ls-heading.stickyBar {
            background: white;
            opacity: 1;
        }
        .sticky .ls-heading.stickyBar>td,
        .sticky .ls-heading.stickyBar>th {
            word-break: break-word;
        }

        .sticky .ls-heading.stickyBar>td:first-child {
            visibility: hidden;
        }

        .sticky .ls-heading:nth-child(n+2) {
            display: none;
            background: white;
        }

        tbody>.ls-heading-repeat:not(.stickyBar) {
            display: none;
        }
        @media (max-width: 1024px){
            .sticky .ls-heading.stickyBar {
                display: none;
            }
        }
    ";
        }
        // line 214
        echo "
    ";
        // line 215
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "greyoutselected", []) == "on")) {
            // line 216
            echo "
        tr.radio-list.selected{
            opacity: 0.5;
        }
        tr.radio-list.selected:hover,
        tr.radio-list.selected:active{
            opacity: 1;
        }
    ";
        }
        // line 225
        echo "
    ";
        // line 226
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "crosshover", []) == "on")) {
            // line 227
            echo "        @media (min-width: 1024px){
            table.ls-answers.table-hover,
            table.ls-answers.table-col-hover
            {
                overflow: hidden;
                }

            table.ls-answers.table-hover>tbody>tr:hover td,
            table.ls-answers.table-hover>tbody>tr:hover th,
            table.ls-answers.table-col-hover>tbody>tr:hover td,
            table.ls-answers.table-col-hover>tbody>tr:hover th {
                background-color: ";
            // line 238
            echo LS_Twig_Extension::darkencss($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "questionbackgroundcolor", [])), 50, 0.2);
            echo ";
            }

            table.ls-answers.table-hover>tbody>tr>td, th {
                position: relative;
            }
            table.ls-answers.table-col-hover>tbody>tr>td, th {
                position: relative;
            }
            table.ls-answers.table-hover>tbody>tr>td:hover::after,
            table.ls-answers.table-col-hover>tbody>tr>td:hover::after {
                content: \"\";
                position: absolute;
                background-color: ";
            // line 251
            echo LS_Twig_Extension::darkencss($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "questionbackgroundcolor", [])), 50, 0.2);
            echo ";
                left: 0;
                top: -5000px;
                height: 10000px;
                width: 100%;
                z-index: 2;
                pointer-events: none;
            }
        }
    ";
        }
        // line 261
        echo "
</style>


";
        // line 265
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "stickymatrixheaders", []) == "on")) {
            // line 266
            echo "    ";
            echo LS_Twig_Extension::registerTemplateScript("scripts/sticky.min.js", "POS_BEGIN");
            echo "
    ";
            // line 267
            echo LS_Twig_Extension::registerScript("StickyMatrixHeaderScript", "
        var stickyRows = new StickyTableRows();
        \$('thead>tr.ls-heading').each(function(itrt, item){
            if(\$(item).closest('div.question-container').hasClass('array-flexible-dual-scale')) {
                return;
            }
            stickyRows.add(item);
        });
        stickyRows.init();
    ", "POS_POSTSCRIPT");
            // line 276
            echo "
";
        }
        // line 278
        echo "
";
        // line 279
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "greyoutselected", []) == "on")) {
            // line 280
            echo "    ";
            echo LS_Twig_Extension::registerScript("GreyOutSelectedScript", "
    \$('td.radio-item > input[type=radio]').on('click', function(){
        if(\$(this).val() != '' ) {
            \$(this).closest('tr.radio-list').addClass('selected');
        } else {
            \$(this).closest('tr.radio-list').removeClass('selected');
        }
    })
    ", "POS_POSTSCRIPT");
            // line 288
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/header/custom_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 288,  504 => 280,  502 => 279,  499 => 278,  495 => 276,  484 => 267,  479 => 266,  477 => 265,  471 => 261,  458 => 251,  442 => 238,  429 => 227,  427 => 226,  424 => 225,  413 => 216,  411 => 215,  408 => 214,  378 => 186,  376 => 185,  373 => 184,  367 => 181,  361 => 178,  358 => 177,  356 => 176,  353 => 175,  346 => 171,  342 => 170,  338 => 168,  335 => 167,  332 => 166,  329 => 165,  326 => 164,  324 => 163,  321 => 162,  319 => 161,  316 => 160,  309 => 156,  305 => 155,  301 => 153,  298 => 152,  295 => 151,  292 => 150,  289 => 149,  287 => 148,  284 => 147,  282 => 146,  279 => 145,  272 => 141,  268 => 140,  264 => 138,  261 => 137,  258 => 136,  255 => 135,  252 => 134,  250 => 133,  247 => 132,  245 => 131,  242 => 130,  222 => 113,  218 => 112,  214 => 110,  211 => 109,  208 => 108,  205 => 107,  202 => 106,  200 => 105,  197 => 104,  195 => 103,  192 => 102,  172 => 85,  168 => 84,  164 => 82,  161 => 81,  158 => 80,  155 => 79,  152 => 78,  150 => 77,  147 => 76,  145 => 75,  139 => 72,  136 => 71,  134 => 70,  130 => 68,  126 => 66,  124 => 65,  121 => 64,  117 => 62,  115 => 61,  110 => 59,  102 => 54,  95 => 50,  91 => 49,  85 => 45,  79 => 41,  77 => 40,  74 => 39,  61 => 29,  58 => 28,  56 => 27,  53 => 26,  50 => 24,  44 => 22,  42 => 21,  37 => 20,  35 => 19,  32 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/custom_header.twig", "C:\\xampp2\\htdocs\\limesurvey\\themes\\survey\\fruity\\views\\subviews\\header\\custom_header.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 19, "set" => 70];
        static $filters = [];
        static $functions = ["registerTemplateCssFile" => 20, "imageSrc" => 27, "darkencss" => 178, "lightencss" => 181, "registerTemplateScript" => 266, "registerScript" => 267];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['registerTemplateCssFile', 'imageSrc', 'darkencss', 'lightencss', 'registerTemplateScript', 'registerScript']
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
