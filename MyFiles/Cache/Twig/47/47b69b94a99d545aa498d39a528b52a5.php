<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Master/EditListView.html.twig */
class __TwigTemplate_1da8b955d6c412c6072b3f1d1e0eddc5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["currentView"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        yield "
<script>
    var editListViewDeleteCancel = \"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
        yield "\";
    var editListViewDeleteConfirm = \"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("confirm"), "html", null, true);
        yield "\";
    var editListViewDeleteMessage = \"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("are-you-sure"), "html", null, true);
        yield "\";
    var editListViewDeleteTitle = \"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("confirm-delete"), "html", null, true);
        yield "\";
</script>

<div class=\"";
        // line 29
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 29), "card", [], "any", false, false, false, 29)) ? ("") : ("container-fluid"));
        yield "\">
    ";
        // line 31
        yield "    <div class=\"row\">
        ";
        // line 32
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["header"], "method", false, false, false, 32);
        // line 33
        yield "        ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 33), "", ($context["fsc"] ?? null)], "method", false, false, false, 33);
        yield "
    </div>

    ";
        // line 37
        yield "    <div>
        ";
        // line 38
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["statistics"], "method", false, false, false, 38);
        // line 39
        yield "        ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [($context["fsc"] ?? null)], "method", false, false, false, 39);
        yield "
    </div>

    ";
        // line 43
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 43), "btnNew", [], "any", false, false, false, 43)) {
            // line 44
            yield "        ";
            $context["formName"] = (("form" . CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 44)) . "New");
            // line 45
            yield "        <form id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formName"] ?? null), "html", null, true);
            yield "\" method=\"post\" enctype=\"multipart/form-data\" onsubmit=\"animateSpinner('add')\">
            ";
            // line 46
            yield $this->env->getFunction('formToken')->getCallable()();
            yield "
            <input type=\"hidden\" name=\"action\" value=\"insert\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 48), "html", null, true);
            yield "\"/>
            <div class=\"card border-success shadow mb-2\">
                <div class=\"card-body p-2\">
                    <button class=\"btn btn-spin-action btn-sm btn-outline-success mr-1\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formName"] ?? null), "html", null, true);
            yield "Collapse\" aria-expanded=\"false\">
                        <i class=\"fas fa-plus-square fa-fw\" aria-hidden=\"true\"></i>
                        ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
            yield "
                    </button>
                    ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "title", [], "any", false, false, false, 56), "html", null, true);
            yield "
                </div>
                <div class=\"collapse\" id=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formName"] ?? null), "html", null, true);
            yield "Collapse\">
                    <div class=\"card-body border-top\">
                        <div class=\"form-row\">
                            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 61));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 62
                yield "                                ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "edit", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 62)], "method", false, false, false, 62);
                yield "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "                        </div>
                    </div>
                    <div class=\"card-footer text-right p-2\">
                        <button class=\"btn btn-spin-action btn-sm btn-success\" type=\"submit\">
                            <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
            yield "</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <script>
            \$(document).ready(function () {
                \$('#";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formName"] ?? null), "html", null, true);
            yield "Collapse').on('shown.bs.collapse', function () {
                    \$('#";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formName"] ?? null), "html", null, true);
            yield "Collapse input[type=\"text\"]').first().focus();
                });
            });
        </script>
    ";
        }
        // line 84
        yield "
    ";
        // line 86
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 86));
        foreach ($context['_seq'] as $context["counter"] => $context["model"]) {
            // line 87
            yield "        ";
            $context["formName"] = (("form" . CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 87)) . $context["counter"]);
            // line 88
            yield "        <form id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formName"] ?? null), "html", null, true);
            yield "\" method=\"post\" enctype=\"multipart/form-data\" onsubmit=\"animateSpinner('add')\">
            ";
            // line 89
            yield $this->env->getFunction('formToken')->getCallable()();
            yield "
            <input type=\"hidden\" name=\"action\" value=\"edit\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 91), "html", null, true);
            yield "\"/>
            <input type=\"hidden\" name=\"code\" value=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 92), "html", null, true);
            yield "\"/>
            <div class=\"card shadow mb-2\"";
            // line 93
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "selected", [], "any", false, false, false, 93) == CoreExtension::getAttribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 93))) {
                yield " id=\"EditListViewSelected\"";
            }
            yield ">
                <div class=\"card-body\">
                    <div class=\"form-row\">
                        ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 96));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 97
                yield "                            ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "edit", [$context["model"]], "method", false, false, false, 97);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "                    </div>
                </div>
                <div class=\"card-footer p-2\">
                    <div class=\"form-row\">
                        ";
            // line 103
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 103), "btnDelete", [], "any", false, false, false, 103)) {
                // line 104
                yield "                            <div class=\"col-auto\">
                                <button type=\"button\" class=\"btn btn-spin-action btn-sm btn-danger\"
                                        onclick=\"editListViewDelete('";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 106) . $context["counter"]), "html", null, true);
                yield "');\">
                                    <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
                yield "</span>
                                </button>
                            </div>
                        ";
            }
            // line 112
            yield "                        <div class=\"col\">
                            ";
            // line 114
            yield "                            ";
            $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["actions"], "method", false, false, false, 114);
            // line 115
            yield "                            ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [false, (CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 115) . $context["counter"])], "method", false, false, false, 115);
            yield "
                        </div>
                        <div class=\"col-auto\">
                            ";
            // line 118
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 118), "btnUndo", [], "any", false, false, false, 118)) {
                // line 119
                yield "                                <button class=\"btn btn-spin-action btn-sm btn-secondary\" type=\"reset\">
                                    <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("undo"), "html", null, true);
                yield "</span>
                                </button>
                            ";
            }
            // line 124
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 124), "btnSave", [], "any", false, false, false, 124)) {
                // line 125
                yield "                                <button class=\"btn btn-spin-action btn-sm btn-primary\" type=\"submit\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
                yield "</span>
                                </button>
                            ";
            }
            // line 130
            yield "                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['counter'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "
    ";
        // line 138
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 138)) > 0)) {
            // line 139
            yield "        ";
            $context["formName"] = (("form" . CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 139)) . "Offset");
            // line 140
            yield "        <form id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formName"] ?? null), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"animateSpinner('add')\">
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 141), "html", null, true);
            yield "\"/>
            <input type=\"hidden\" name=\"offset\" value=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 142), "html", null, true);
            yield "\"/>
            <div class=\"text-center pt-3\">
                <div class=\"btn-group\">
                    ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 145));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 146
                yield "                        ";
                $context["btnClass"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 146)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 147
                yield "                        <button type=\"button\" class=\"btn-spin-action ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btnClass"] ?? null), "html", null, true);
                yield "\"
                                onclick=\"editListViewSetOffset('";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 148), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 148), "html", null, true);
                yield "');\">
                            ";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 149), "html", null, true);
                yield "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            yield "                </div>
            </div>
        </form>
    ";
        }
        // line 156
        yield "
    ";
        // line 158
        yield "    <div class=\"row\">
        ";
        // line 159
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["footer"], "method", false, false, false, 159);
        // line 160
        yield "        ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 160), "", ($context["fsc"] ?? null)], "method", false, false, false, 160);
        yield "
    </div>
</div>

";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 165));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 166
            yield "    ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "modal", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 166), CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 166)], "method", false, false, false, 166);
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/EditListView.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  378 => 166,  374 => 165,  366 => 160,  364 => 159,  361 => 158,  358 => 156,  352 => 152,  343 => 149,  337 => 148,  332 => 147,  329 => 146,  325 => 145,  319 => 142,  315 => 141,  310 => 140,  307 => 139,  304 => 138,  301 => 136,  290 => 130,  284 => 127,  280 => 125,  277 => 124,  271 => 121,  267 => 119,  265 => 118,  258 => 115,  255 => 114,  252 => 112,  245 => 108,  240 => 106,  236 => 104,  234 => 103,  228 => 99,  219 => 97,  215 => 96,  207 => 93,  203 => 92,  199 => 91,  194 => 89,  189 => 88,  186 => 87,  181 => 86,  178 => 84,  170 => 79,  166 => 78,  154 => 69,  147 => 64,  138 => 62,  134 => 61,  128 => 58,  123 => 56,  118 => 54,  113 => 52,  106 => 48,  101 => 46,  96 => 45,  93 => 44,  90 => 43,  83 => 39,  81 => 38,  78 => 37,  71 => 33,  69 => 32,  66 => 31,  62 => 29,  56 => 26,  52 => 25,  48 => 24,  44 => 23,  40 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/EditListView.html.twig", "C:\\wamp64\\www\\facturascripts\\Dinamic\\View\\Master\\EditListView.html.twig");
    }
}
