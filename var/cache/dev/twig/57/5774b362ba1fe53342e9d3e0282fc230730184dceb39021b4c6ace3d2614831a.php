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
            'stylesheets' => array($this, 'block_stylesheets'),
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
                </tbody>
                <tfoot>
                    <tr>
                        <td>&nbsp;</td>
                        <th>Total</th>
                        <th class=\"js-total-weight\"></th>
                        <td>&nbsp;</td>
                    </tr>
                </tfoot>
            </table>
            <div class=\"js-new-rep-log-form-wrapper\">
                ";
        // line 34
        echo twig_include($this->env, $context, "lift/_form.html.twig");
        echo "
            </div>
        </div>
        <div class=\"col-md-5\">
            <div class=\"leaderboard\">
                <h2 class=\"text-center\">
                    <img class=\"dumbbell\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dumbbell.png"), "html", null, true);
        echo "\" />
                    Leaderboard
                </h2>

                ";
        // line 44
        echo twig_include($this->env, $context, "lift/_leaderboard.html.twig");
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 52
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/sweetalert2/6.1.0/sweetalert2.min.css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"https://cdn.jsdelivr.net/sweetalert2/6.1.0/sweetalert2.min.js\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/RepLogApp.js"), "html", null, true);
        echo "\"></script>


    <script>

        \$(document).ready(function(){
            var \$wrapper = \$('.js-rep-log-table');
            var repLogRep = new RepLogApp(\$wrapper);
        });
     </script>

    <script type=\"text/template\" id=\"js-rep-log-row-template\">
        <tr data-weight=\"<%= totalWeightLifted %>\">
            <td><%= itemLabel %></td>
            <td><%= reps %></td>
            <td><%= totalWeightLifted %></td>
            <td>
                <a href=\"#\"
                   class=\"js-delete-rep-log\"
                   data-url=\"<%= links._self %>\"
                >
                    <span class=\"fa fa-trash\"></span>
                </a>
            </td>
        </tr>
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
        return array (  137 => 60,  130 => 57,  124 => 56,  113 => 52,  107 => 51,  94 => 44,  87 => 40,  78 => 34,  46 => 4,  40 => 3,  15 => 1,);
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
                </tbody>
                <tfoot>
                    <tr>
                        <td>&nbsp;</td>
                        <th>Total</th>
                        <th class=\"js-total-weight\"></th>
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

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/sweetalert2/6.1.0/sweetalert2.min.css\" />
{% endblock %}

{% block javascripts %}
     {{ parent() }}

    <script src=\"https://cdn.jsdelivr.net/sweetalert2/6.1.0/sweetalert2.min.js\"></script>
    <script src=\"{{ asset('assets/js/RepLogApp.js') }}\"></script>


    <script>

        \$(document).ready(function(){
            var \$wrapper = \$('.js-rep-log-table');
            var repLogRep = new RepLogApp(\$wrapper);
        });
     </script>

    <script type=\"text/template\" id=\"js-rep-log-row-template\">
        <tr data-weight=\"<%= totalWeightLifted %>\">
            <td><%= itemLabel %></td>
            <td><%= reps %></td>
            <td><%= totalWeightLifted %></td>
            <td>
                <a href=\"#\"
                   class=\"js-delete-rep-log\"
                   data-url=\"<%= links._self %>\"
                >
                    <span class=\"fa fa-trash\"></span>
                </a>
            </td>
        </tr>
    </script>

 {% endblock %}
", "lift/index.html.twig", "/Users/imac/Documents/sites_acasa/js/app/Resources/views/lift/index.html.twig");
    }
}
