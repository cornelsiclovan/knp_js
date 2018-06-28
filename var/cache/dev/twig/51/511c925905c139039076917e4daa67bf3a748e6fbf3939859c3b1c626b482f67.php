<?php

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_a4accbfa0e5ac2def99c3fa40bf2c37705c7329ae1b3f80d7fad577b67ecc449 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "request", array()), "isXmlHttpRequest", array())) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "@Doctrine/Collector/db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->source); })()), "querycount", array()) > 0) || (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->source); })()), "invalidEntityCount", array()) > 0))) {
            // line 5
            echo "
        ";
            // line 6
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 6, $this->source); })()), 1)) : (1));
            // line 7
            echo "
        ";
            // line 8
            ob_start();
            // line 9
            echo "            ";
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 9, $this->source); })()) == 1)) {
                // line 10
                echo "
                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
                    <span class=\"sf-toolbar-value sf-toolbar-status ";
                // line 12
                if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 12, $this->source); })()), "querycount", array()) > 50)) {
                    echo "sf-toolbar-status-yellow";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 12, $this->source); })()), "querycount", array()), "html", null, true);
                echo "</span>
                    ";
                // line 13
                if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->source); })()), "querycount", array()) > 0)) {
                    // line 14
                    echo "                        <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 14, $this->source); })()), "time", array()) * 1000)), "html", null, true);
                    echo " ms</span>
                    ";
                }
                // line 16
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->source); })()), "invalidEntityCount", array()) > 0)) {
                    // line 17
                    echo "                        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 17, $this->source); })()), "invalidEntityCount", array()), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 19
                echo "
            ";
            } else {
                // line 21
                echo "
                ";
                // line 22
                $context["status"] = (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 22, $this->source); })()), "invalidEntityCount", array()) > 0)) ? ("red") : ((((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 22, $this->source); })()), "querycount", array()) > 50)) ? ("yellow") : (""))));
                // line 23
                echo "
                ";
                // line 24
                echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
                echo "

                ";
                // line 26
                if (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 26, $this->source); })()), "querycount", array()) == 0) && (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 26, $this->source); })()), "invalidEntityCount", array()) > 0))) {
                    // line 27
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->source); })()), "invalidEntityCount", array()), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-label\">errors</span>
                ";
                } else {
                    // line 30
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 30, $this->source); })()), "querycount", array()), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">";
                    // line 33
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 33, $this->source); })()), "time", array()) * 1000)), "html", null, true);
                    echo "</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
                ";
                }
                // line 37
                echo "
            ";
            }
            // line 39
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        ";
            // line 41
            ob_start();
            // line 42
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status ";
            // line 44
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 44, $this->source); })()), "querycount", array()) > 50)) ? ("sf-toolbar-status-yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 44, $this->source); })()), "querycount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 48
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 48, $this->source); })()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status ";
            // line 52
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 52, $this->source); })()), "invalidEntityCount", array()) > 0)) ? ("sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 52, $this->source); })()), "invalidEntityCount", array()), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 54, $this->source); })()), "cacheEnabled", array())) {
                // line 55
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 57, $this->source); })()), "cacheHitsCount", array()), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status ";
                // line 61
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 61, $this->source); })()), "cacheMissesCount", array()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 61, $this->source); })()), "cacheMissesCount", array()), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status ";
                // line 65
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 65, $this->source); })()), "cachePutsCount", array()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 65, $this->source); })()), "cachePutsCount", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            } else {
                // line 68
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            ";
            }
            // line 73
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 74
            echo "
        ";
            // line 75
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 75, $this->source); })()), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 75, $this->source); })()), "")) : (""))));
            echo "

    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 80
    public function block_menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 81
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 81, $this->source); })()), 1)) : (1));
        // line 82
        echo "
    ";
        // line 83
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 83, $this->source); })()) == 1)) {
            // line 84
            echo "
        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>Doctrine</strong>
            <span class=\"count\">
                <span>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 89, $this->source); })()), "querycount", array()), "html", null, true);
            echo "</span>
                <span>";
            // line 90
            echo twig_escape_filter($this->env, sprintf("%0.0f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 90, $this->source); })()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </span>
        </span>

    ";
        } else {
            // line 95
            echo "
        <span class=\"label ";
            // line 96
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 96, $this->source); })()), "invalidEntityCount", array()) > 0)) ? ("label-status-error") : (""));
            echo " ";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 96, $this->source); })()), "querycount", array()) == 0)) ? ("disabled") : (""));
            echo "\">
            <span class=\"icon\">";
            // line 97
            echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
            echo "</span>
            <strong>Doctrine</strong>
            ";
            // line 99
            if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 99, $this->source); })()), "invalidEntityCount", array())) {
                // line 100
                echo "                <span class=\"count\">
                    <span>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 101, $this->source); })()), "invalidEntityCount", array()), "html", null, true);
                echo "</span>
                </span>
            ";
            }
            // line 104
            echo "        </span>

    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 109
    public function block_panel($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 110
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 110, $this->source); })()), 1)) : (1));
        // line 111
        echo "
    ";
        // line 112
        if (("explain" == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 112, $this->source); })()))) {
            // line 113
            echo "        ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\HttpKernelExtension']->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\HttpKernelExtension']->controller("DoctrineBundle:Profiler:explain", array("token" =>             // line 114
(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 114, $this->source); })()), "panel" => "db", "connectionName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 116
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 116, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "connection"), "method"), "query" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 117
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 117, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "query"), "method"))));
            // line 118
            echo "
    ";
        } else {
            // line 120
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 124
    public function block_queries($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "queries"));

        // line 125
        echo "    ";
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 125, $this->source); })()) == 1)) {
            // line 126
            echo "        <style>
            .hidden { display: none; }
            .queries-table td, .queries-table th { vertical-align: top; }
            .queries-table td > div { margin-bottom: 6px; }
            .highlight pre { margin: 0; white-space: pre-wrap; }
            .highlight .keyword   { color: #8959A8; font-weight: bold; }
            .highlight .word      { color: #222222; }
            .highlight .variable  { color: #916319; }
            .highlight .symbol    { color: #222222; }
            .highlight .comment   { color: #999999; }
            .highlight .backtick  { color: #718C00; }
            .highlight .string    { color: #718C00; }
            .highlight .number    { color: #F5871F; font-weight: bold; }
            .highlight .error     { color: #C82829; }
        </style>
    ";
        }
        // line 142
        echo "
    ";
        // line 143
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 143, $this->source); })()) > 1)) {
            // line 144
            echo "        <h2>Query Metrics</h2>
    
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 148, $this->source); })()), "querycount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Database Queries</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">";
            // line 153
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 153, $this->source); })()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
                <span class=\"label\">Query time</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 158, $this->source); })()), "invalidEntityCount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Invalid entities</span>
            </div>
    
            ";
            // line 162
            if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 162, $this->source); })()), "cacheEnabled", array())) {
                // line 163
                echo "                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 164, $this->source); })()), "cacheHitsCount", array()), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 168
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 168, $this->source); })()), "cacheMissesCount", array()), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 172, $this->source); })()), "cachePutsCount", array()), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache puts</span>
                </div>
            ";
            }
            // line 176
            echo "        </div>
    ";
        }
        // line 178
        echo "
    <h2>Queries</h2>

    ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 181, $this->source); })()), "queries", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 182
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 182, $this->source); })()), "connections", array())) > 1)) {
                // line 183
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo " <small>connection</small></h3>
        ";
            }
            // line 185
            echo "
        ";
            // line 186
            if (twig_test_empty($context["queries"])) {
                // line 187
                echo "            <div class=\"empty\">
                <p>No database queries were performed.</p>
            </div>
        ";
            } else {
                // line 191
                echo "            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                // line 194
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                // line 195
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 199
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "\">
                    ";
                // line 200
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["queries"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 201
                    echo "                        <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                            <td class=\"nowrap\">";
                    // line 202
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                    echo "</td>
                            <td class=\"nowrap\">";
                    // line 203
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["query"], "executionMS", array()) * 1000)), "html", null, true);
                    echo "&nbsp;ms</td>
                            <td>
                                ";
                    // line 205
                    echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatQuery(twig_get_attribute($this->env, $this->source, $context["query"], "sql", array()), true);
                    echo "

                                <div>
                                    <strong class=\"font-normal text-small\">Parameters</strong>: ";
                    // line 208
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\YamlExtension']->encode(twig_get_attribute($this->env, $this->source, $context["query"], "params", array())), "html", null, true);
                    echo "
                                </div>

                                <div class=\"text-small font-normal\">
                                    <a href=\"#\" ";
                    // line 212
                    echo ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 212, $this->source); })()) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                    &nbsp;&nbsp;

                                    <a href=\"#\" ";
                    // line 216
                    echo ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 216, $this->source); })()) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>

                                    ";
                    // line 218
                    if (twig_get_attribute($this->env, $this->source, $context["query"], "explainable", array())) {
                        // line 219
                        echo "                                        &nbsp;&nbsp;
                                        <a class=\"link-inverse\" href=\"";
                        // line 220
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", array("panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 220, $this->source); })()), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"])), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\">Explain query</a>
                                    ";
                    }
                    // line 222
                    echo "                                </div>

                                <div id=\"formatted-query-";
                    // line 224
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 225
                    echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatQuery(twig_get_attribute($this->env, $this->source, $context["query"], "sql", array()));
                    echo "
                                </div>

                                <div id=\"original-query-";
                    // line 228
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 229
                    echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatQuery($this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->replaceQueryParameters((twig_get_attribute($this->env, $this->source, $context["query"], "sql", array()) . ";"), twig_get_attribute($this->env, $this->source, $context["query"], "params", array())), true);
                    echo "
                                </div>

                                ";
                    // line 232
                    if (twig_get_attribute($this->env, $this->source, $context["query"], "explainable", array())) {
                        // line 233
                        echo "                                    <div id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\"></div>
                                ";
                    }
                    // line 235
                    echo "                            </td>
                        </tr>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 238
                echo "                </tbody>
            </table>
        ";
            }
            // line 241
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "
    <h2>Database Connections</h2>

    ";
        // line 245
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 245, $this->source); })()), "connections", array())) {
            // line 246
            echo "        <div class=\"empty\">
            <p>There are no configured database connections.</p>
        </div>
    ";
        } else {
            // line 250
            echo "        ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 250, $this->source); })()), "connections", array()), "labels" => array(0 => "Name", 1 => "Service")), false);
            echo "
    ";
        }
        // line 252
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 255
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 255, $this->source); })()), "managers", array())) {
            // line 256
            echo "        <div class=\"empty\">
            <p>There are no configured entity managers.</p>
        </div>
    ";
        } else {
            // line 260
            echo "        ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 260, $this->source); })()), "managers", array()), "labels" => array(0 => "Name", 1 => "Service")), false);
            echo "
    ";
        }
        // line 262
        echo "
    <h2>Second Level Cache</h2>

    ";
        // line 265
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 265, $this->source); })()), "cacheEnabled", array())) {
            // line 266
            echo "        <div class=\"empty\">
            <p>Second Level Cache is not enabled.</p>
        </div>
    ";
        } else {
            // line 270
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 270, $this->source); })()), "cacheCounts", array())) {
                // line 271
                echo "            <div class=\"empty\">
                <p>Second level cache information is not available.</p>
            </div>
        ";
            } else {
                // line 275
                echo "            ";
                if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 275, $this->source); })()) == 1)) {
                    // line 276
                    echo "                ";
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 276, $this->source); })()), "cacheCounts", array())), false);
                    echo "
            ";
                } else {
                    // line 278
                    echo "                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 280
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 280, $this->source); })()), "cacheCounts", array()), "hits", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Hits</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 285
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 285, $this->source); })()), "cacheCounts", array()), "misses", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Misses</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 290
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 290, $this->source); })()), "cacheCounts", array()), "puts", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Puts</span>
                    </div>
                </div>
            ";
                }
                // line 295
                echo "
            ";
                // line 296
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 296, $this->source); })()), "cacheRegions", array()), "hits", array())) {
                    // line 297
                    echo "                <h3>Number of cache hits</h3>
                ";
                    // line 298
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 298, $this->source); })()), "cacheRegions", array()), "hits", array())), false);
                    echo "
            ";
                }
                // line 300
                echo "
            ";
                // line 301
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 301, $this->source); })()), "cacheRegions", array()), "misses", array())) {
                    // line 302
                    echo "                <h3>Number of cache misses</h3>
                ";
                    // line 303
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 303, $this->source); })()), "cacheRegions", array()), "misses", array())), false);
                    echo "
            ";
                }
                // line 305
                echo "
            ";
                // line 306
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 306, $this->source); })()), "cacheRegions", array()), "puts", array())) {
                    // line 307
                    echo "                <h3>Number of cache puts</h3>
                ";
                    // line 308
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 308, $this->source); })()), "cacheRegions", array()), "puts", array())), false);
                    echo "
            ";
                }
                // line 310
                echo "        ";
            }
            // line 311
            echo "    ";
        }
        // line 312
        echo "
    <h2>Entities Mapping</h2>

    ";
        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 315, $this->source); })()), "entities", array()));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 316
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 316, $this->source); })()), "managers", array())) > 1)) {
                // line 317
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
                echo " <small>entity manager</small></h3>
        ";
            }
            // line 319
            echo "
        ";
            // line 320
            if (twig_test_empty($context["classes"])) {
                // line 321
                echo "            <div class=\"empty\">
                <p>No loaded entities.</p>
            </div>
        ";
            } else {
                // line 325
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 333
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["classes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 334
                    echo "                    ";
                    $context["contains_errors"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", false, true), $context["class"], array(), "array", true, true));
                    // line 335
                    echo "                    <tr class=\"";
                    echo (((isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new Twig_Error_Runtime('Variable "contains_errors" does not exist.', 335, $this->source); })())) ? ("status-error") : (""));
                    echo "\">
                        <td>";
                    // line 336
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                        <td class=\"font-normal\">
                            ";
                    // line 338
                    if ((isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new Twig_Error_Runtime('Variable "contains_errors" does not exist.', 338, $this->source); })())) {
                        // line 339
                        echo "                                <ul>
                                    ";
                        // line 340
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 340, $this->source); })()), "mappingErrors", array()), $context["manager"], array(), "array"), $context["class"], array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 341
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 343
                        echo "                                </ul>
                            ";
                    } else {
                        // line 345
                        echo "                                No errors.
                            ";
                    }
                    // line 347
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 350
                echo "                </tbody>
            </table>
        ";
            }
            // line 353
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        ";
        // line 412
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 412, $this->source); })()) == 1)) {
            // line 413
            echo "            function toggleRunnableQuery(target) {
                var targetSelector = target.getAttribute('data-toggle-selector');
                var targetDataAltContent = target.getAttribute('data-toggle-alt-content');
                var targetElement = document.querySelector(targetSelector);
                target.setAttribute('data-toggle-alt-content', target.innerHTML);

                if (targetElement.style.display != 'block') {
                    targetElement.style.display = 'block';
                    target.innerHTML = targetDataAltContent;
                } else {
                    targetElement.style.display = 'none';
                    target.innerHTML = targetDataAltContent;
                }

                return false;
            }
        ";
        }
        // line 430
        echo "
        //]]></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Doctrine/Collector/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  957 => 430,  938 => 413,  936 => 412,  876 => 354,  870 => 353,  865 => 350,  857 => 347,  853 => 345,  849 => 343,  840 => 341,  836 => 340,  833 => 339,  831 => 338,  826 => 336,  821 => 335,  818 => 334,  814 => 333,  804 => 325,  798 => 321,  796 => 320,  793 => 319,  787 => 317,  784 => 316,  780 => 315,  775 => 312,  772 => 311,  769 => 310,  764 => 308,  761 => 307,  759 => 306,  756 => 305,  751 => 303,  748 => 302,  746 => 301,  743 => 300,  738 => 298,  735 => 297,  733 => 296,  730 => 295,  722 => 290,  714 => 285,  706 => 280,  702 => 278,  696 => 276,  693 => 275,  687 => 271,  684 => 270,  678 => 266,  676 => 265,  671 => 262,  665 => 260,  659 => 256,  657 => 255,  652 => 252,  646 => 250,  640 => 246,  638 => 245,  633 => 242,  619 => 241,  614 => 238,  598 => 235,  590 => 233,  588 => 232,  582 => 229,  576 => 228,  570 => 225,  564 => 224,  560 => 222,  551 => 220,  548 => 219,  546 => 218,  537 => 216,  526 => 212,  519 => 208,  513 => 205,  508 => 203,  504 => 202,  497 => 201,  480 => 200,  476 => 199,  469 => 195,  465 => 194,  460 => 191,  454 => 187,  452 => 186,  449 => 185,  443 => 183,  440 => 182,  423 => 181,  418 => 178,  414 => 176,  407 => 172,  400 => 168,  393 => 164,  390 => 163,  388 => 162,  381 => 158,  373 => 153,  365 => 148,  359 => 144,  357 => 143,  354 => 142,  336 => 126,  333 => 125,  327 => 124,  316 => 120,  312 => 118,  310 => 117,  309 => 116,  308 => 114,  306 => 113,  304 => 112,  301 => 111,  298 => 110,  292 => 109,  282 => 104,  276 => 101,  273 => 100,  271 => 99,  266 => 97,  260 => 96,  257 => 95,  249 => 90,  245 => 89,  238 => 84,  236 => 83,  233 => 82,  230 => 81,  224 => 80,  213 => 75,  210 => 74,  207 => 73,  200 => 68,  192 => 65,  183 => 61,  176 => 57,  172 => 55,  170 => 54,  163 => 52,  156 => 48,  147 => 44,  143 => 42,  141 => 41,  138 => 40,  135 => 39,  131 => 37,  124 => 33,  117 => 30,  110 => 27,  108 => 26,  103 => 24,  100 => 23,  98 => 22,  95 => 21,  91 => 19,  85 => 17,  82 => 16,  76 => 14,  74 => 13,  66 => 12,  62 => 10,  59 => 9,  57 => 8,  54 => 7,  52 => 6,  49 => 5,  46 => 4,  40 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends app.request.isXmlHttpRequest ? '@WebProfiler/Profiler/ajax_layout.html.twig' : '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.querycount > 0 or collector.invalidEntityCount > 0 %}

        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% if profiler_markup_version == 1 %}

                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
                    <span class=\"sf-toolbar-value sf-toolbar-status {% if collector.querycount > 50 %}sf-toolbar-status-yellow{% endif %}\">{{ collector.querycount }}</span>
                    {% if collector.querycount > 0 %}
                        <span class=\"sf-toolbar-info-piece-additional-detail\">in {{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                    {% endif %}
                    {% if collector.invalidEntityCount > 0 %}
                        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\">{{ collector.invalidEntityCount }}</span>
                    {% endif %}

            {% else %}

                {% set status = collector.invalidEntityCount > 0 ? 'red' : collector.querycount > 50 ? 'yellow' %}

                {{ include('@Doctrine/Collector/icon.svg') }}

                {% if collector.querycount == 0 and collector.invalidEntityCount > 0 %}
                    <span class=\"sf-toolbar-value\">{{ collector.invalidEntityCount }}</span>
                    <span class=\"sf-toolbar-label\">errors</span>
                {% else %}
                    <span class=\"sf-toolbar-value\">{{ collector.querycount }}</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time * 1000) }}</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
                {% endif %}

            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status {{ collector.querycount > 50 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.querycount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status {{ collector.invalidEntityCount > 0 ? 'sf-toolbar-status-red' : '' }}\">{{ collector.invalidEntityCount }}</span>
            </div>
            {% if collector.cacheEnabled %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ collector.cacheHitsCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status {{ collector.cacheMissesCount > 0 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.cacheMissesCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status {{ collector.cachePutsCount > 0 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.cachePutsCount }}</span>
                </div>
            {% else %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            {% endif %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status|default('') }) }}

    {% endif %}
{% endblock %}

{% block menu %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if profiler_markup_version == 1 %}

        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>Doctrine</strong>
            <span class=\"count\">
                <span>{{ collector.querycount }}</span>
                <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>
            </span>
        </span>

    {% else %}

        <span class=\"label {{ collector.invalidEntityCount > 0 ? 'label-status-error' }} {{ collector.querycount == 0 ? 'disabled' }}\">
            <span class=\"icon\">{{ include('@Doctrine/Collector/icon.svg') }}</span>
            <strong>Doctrine</strong>
            {% if collector.invalidEntityCount %}
                <span class=\"count\">
                    <span>{{ collector.invalidEntityCount }}</span>
                </span>
            {% endif %}
        </span>

    {% endif %}
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if 'explain' == page %}
        {{ render(controller('DoctrineBundle:Profiler:explain', {
            token: token,
            panel: 'db',
            connectionName: app.request.query.get('connection'),
            query: app.request.query.get('query')
        })) }}
    {% else %}
        {{ block('queries') }}
    {% endif %}
{% endblock %}

{% block queries %}
    {% if profiler_markup_version == 1 %}
        <style>
            .hidden { display: none; }
            .queries-table td, .queries-table th { vertical-align: top; }
            .queries-table td > div { margin-bottom: 6px; }
            .highlight pre { margin: 0; white-space: pre-wrap; }
            .highlight .keyword   { color: #8959A8; font-weight: bold; }
            .highlight .word      { color: #222222; }
            .highlight .variable  { color: #916319; }
            .highlight .symbol    { color: #222222; }
            .highlight .comment   { color: #999999; }
            .highlight .backtick  { color: #718C00; }
            .highlight .string    { color: #718C00; }
            .highlight .number    { color: #F5871F; font-weight: bold; }
            .highlight .error     { color: #C82829; }
        </style>
    {% endif %}

    {% if profiler_markup_version > 1 %}
        <h2>Query Metrics</h2>
    
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.querycount }}</span>
                <span class=\"label\">Database Queries</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                <span class=\"label\">Query time</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">{{ collector.invalidEntityCount }}</span>
                <span class=\"label\">Invalid entities</span>
            </div>
    
            {% if collector.cacheEnabled %}
                <div class=\"metric\">
                \t<span class=\"value\">{{ collector.cacheHitsCount }}</span>
                \t<span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">{{ collector.cacheMissesCount }}</span>
                \t<span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">{{ collector.cachePutsCount }}</span>
                \t<span class=\"label\">Cache puts</span>
                </div>
            {% endif %}
        </div>
    {% endif %}

    <h2>Queries</h2>

    {% for connection, queries in collector.queries %}
        {% if collector.connections|length > 1 %}
            <h3>{{ connection }} <small>connection</small></h3>
        {% endif %}

        {% if queries is empty %}
            <div class=\"empty\">
                <p>No database queries were performed.</p>
            </div>
        {% else %}
            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-{{ loop.index }}\">
                    {% for i, query in queries %}
                        <tr id=\"queryNo-{{ i }}-{{ loop.parent.loop.index }}\">
                            <td class=\"nowrap\">{{ loop.index }}</td>
                            <td class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms</td>
                            <td>
                                {{ query.sql|doctrine_pretty_query(highlight_only = true) }}

                                <div>
                                    <strong class=\"font-normal text-small\">Parameters</strong>: {{ query.params|yaml_encode }}
                                </div>

                                <div class=\"text-small font-normal\">
                                    <a href=\"#\" {{ profiler_markup_version == 1 ? 'onclick=\"return toggleRunnableQuery(this);\"' }} class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                    &nbsp;&nbsp;

                                    <a href=\"#\" {{ profiler_markup_version == 1 ? 'onclick=\"return toggleRunnableQuery(this);\"' }} class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>

                                    {% if query.explainable %}
                                        &nbsp;&nbsp;
                                        <a class=\"link-inverse\" href=\"{{ path('_profiler', { panel: 'db', token: token, page: 'explain', connection: connection, query: i }) }}\" onclick=\"return explain(this);\" data-target-id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\">Explain query</a>
                                    {% endif %}
                                </div>

                                <div id=\"formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                    {{ query.sql|doctrine_pretty_query }}
                                </div>

                                <div id=\"original-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                    {{ (query.sql ~ ';')|doctrine_replace_query_parameters(query.params)|doctrine_pretty_query(highlight_only = true) }}
                                </div>

                                {% if query.explainable %}
                                    <div id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\"></div>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}

    <h2>Database Connections</h2>

    {% if not collector.connections %}
        <div class=\"empty\">
            <p>There are no configured database connections.</p>
        </div>
    {% else %}
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.connections, labels: ['Name', 'Service'] }, with_context = false ) }}
    {% endif %}

    <h2>Entity Managers</h2>

    {% if not collector.managers %}
        <div class=\"empty\">
            <p>There are no configured entity managers.</p>
        </div>
    {% else %}
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.managers, labels: ['Name', 'Service'] }, with_context = false ) }}
    {% endif %}

    <h2>Second Level Cache</h2>

    {% if not collector.cacheEnabled %}
        <div class=\"empty\">
            <p>Second Level Cache is not enabled.</p>
        </div>
    {% else %}
        {% if not collector.cacheCounts %}
            <div class=\"empty\">
                <p>Second level cache information is not available.</p>
            </div>
        {% else %}
            {% if profiler_markup_version == 1 %}
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheCounts }, with_context = false) }}
            {% else %}
                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.cacheCounts.hits }}</span>
                        <span class=\"label\">Hits</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.cacheCounts.misses }}</span>
                        <span class=\"label\">Misses</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.cacheCounts.puts }}</span>
                        <span class=\"label\">Puts</span>
                    </div>
                </div>
            {% endif %}

            {% if collector.cacheRegions.hits %}
                <h3>Number of cache hits</h3>
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheRegions.hits }, with_context = false) }}
            {% endif %}

            {% if collector.cacheRegions.misses %}
                <h3>Number of cache misses</h3>
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheRegions.misses }, with_context = false) }}
            {% endif %}

            {% if collector.cacheRegions.puts %}
                <h3>Number of cache puts</h3>
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.cacheRegions.puts }, with_context = false) }}
            {% endif %}
        {% endif %}
    {% endif %}

    <h2>Entities Mapping</h2>

    {% for manager, classes in collector.entities %}
        {% if collector.managers|length > 1 %}
            <h3>{{ manager }} <small>entity manager</small></h3>
        {% endif %}

        {% if classes is empty %}
            <div class=\"empty\">
                <p>No loaded entities.</p>
            </div>
        {% else %}
            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                {% for class in classes %}
                    {% set contains_errors = collector.mappingErrors[manager] is defined and collector.mappingErrors[manager][class] is defined %}
                    <tr class=\"{{ contains_errors ? 'status-error' }}\">
                        <td>{{ class }}</td>
                        <td class=\"font-normal\">
                            {% if contains_errors %}
                                <ul>
                                    {% for error in collector.mappingErrors[manager][class] %}
                                        <li>{{ error }}</li>
                                    {% endfor %}
                                </ul>
                            {% else %}
                                No errors.
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        {% if profiler_markup_version == 1 %}
            function toggleRunnableQuery(target) {
                var targetSelector = target.getAttribute('data-toggle-selector');
                var targetDataAltContent = target.getAttribute('data-toggle-alt-content');
                var targetElement = document.querySelector(targetSelector);
                target.setAttribute('data-toggle-alt-content', target.innerHTML);

                if (targetElement.style.display != 'block') {
                    targetElement.style.display = 'block';
                    target.innerHTML = targetDataAltContent;
                } else {
                    targetElement.style.display = 'none';
                    target.innerHTML = targetDataAltContent;
                }

                return false;
            }
        {% endif %}

        //]]></script>
{% endblock %}
", "@Doctrine/Collector/db.html.twig", "/Users/mac/Documents/sites/knp_js/vendor/doctrine/doctrine-bundle/Resources/views/Collector/db.html.twig");
    }
}
