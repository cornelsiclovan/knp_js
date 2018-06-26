<?php

/* lift/index.html.twig */
class __TwigTemplate_f402f4beaeb979b9b6ae60abcc6a3d74cdc810ef37ecd64a11840d9d6c4412d4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lift/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lift/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-7 js-rep-log-table\">
            <h2>
                Lift History
                <a href=\"#list-stuff-form\" class=\"btn btn-md btn-success pull-right\">
                    <span class=\"fa fa-plus\"></span> Add
                </a>
            </h2>

            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>What</th>
                    <th>How many times?</th>
                    <th>Weight</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repLogs"]) || array_key_exists("repLogs", $context) ? $context["repLogs"] : (function () { throw new Twig_Error_Runtime('Variable "repLogs" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["repLog"]) {
            // line 24
            echo "                    ";
            echo twig_include($this->env, $context, "lift/_repRow.html.twig");
            echo "
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 26
            echo "                    <tr>
                        <td colspan=\"4\">Get liftin'!</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repLog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td>&nbsp;</td>
                        <th>Total</th>
                        <th class=\"js-total-weight\">";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["totalWeight"]) || array_key_exists("totalWeight", $context) ? $context["totalWeight"] : (function () { throw new Twig_Error_Runtime('Variable "totalWeight" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "</th>
                        <td>&nbsp;</td>
                    </tr>
                </tfoot>
            </table>
            <div class=\"js-new-rep-log-form-wrapper\">
                ";
        // line 41
        echo twig_include($this->env, $context, "lift/_form.html.twig");
        echo "
            </div>
        </div>
        <div class=\"col-md-5\">
            <div class=\"leaderboard\">
                <h2 class=\"text-center\">
                    <img class=\"dumbbell\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dumbbell.png"), "html", null, true);
        echo "\" />
                    Leaderboard
                </h2>

                ";
        // line 51
        echo twig_include($this->env, $context, "lift/_leaderboard.html.twig");
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/RepLogApp.js"), "html", null, true);
        echo "\"></script>

    <script>

        \$(document).ready(function(){
            var \$wrapper = \$('.js-rep-log-table');
            var repLogRep = new RepLogApp(\$wrapper);
        });
     </script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lift/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 59,  160 => 58,  154 => 57,  141 => 51,  134 => 47,  125 => 41,  116 => 35,  109 => 30,  100 => 26,  84 => 24,  66 => 23,  45 => 4,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-7 js-rep-log-table\">
            <h2>
                Lift History
                <a href=\"#list-stuff-form\" class=\"btn btn-md btn-success pull-right\">
                    <span class=\"fa fa-plus\"></span> Add
                </a>
            </h2>

            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>What</th>
                    <th>How many times?</th>
                    <th>Weight</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                {% for repLog in repLogs %}
                    {{ include('lift/_repRow.html.twig') }}
                {% else %}
                    <tr>
                        <td colspan=\"4\">Get liftin'!</td>
                    </tr>
                {% endfor %}
                </tbody>
                <tfoot>
                    <tr>
                        <td>&nbsp;</td>
                        <th>Total</th>
                        <th class=\"js-total-weight\">{{ totalWeight }}</th>
                        <td>&nbsp;</td>
                    </tr>
                </tfoot>
            </table>
            <div class=\"js-new-rep-log-form-wrapper\">
                {{ include('lift/_form.html.twig') }}
            </div>
        </div>
        <div class=\"col-md-5\">
            <div class=\"leaderboard\">
                <h2 class=\"text-center\">
                    <img class=\"dumbbell\" src=\"{{ asset('assets/images/dumbbell.png') }}\" />
                    Leaderboard
                </h2>

                {{ include('lift/_leaderboard.html.twig') }}
            </div>
        </div>
    </div>

{% endblock %}
{% block javascripts %}
     {{ parent() }}
    <script src=\"{{ asset('assets/js/RepLogApp.js') }}\"></script>

    <script>

        \$(document).ready(function(){
            var \$wrapper = \$('.js-rep-log-table');
            var repLogRep = new RepLogApp(\$wrapper);
        });
     </script>
 {% endblock %}
", "lift/index.html.twig", "/Users/imac/Documents/sites_acasa/js/app/Resources/views/lift/index.html.twig");
    }
}
