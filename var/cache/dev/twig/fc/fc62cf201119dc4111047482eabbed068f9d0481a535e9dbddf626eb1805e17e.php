<?php

/* lift/_repRow.html.twig */
class __TwigTemplate_aefa590ab956b3bd583bf711dfdf8d8ffc19ff5f12a430273574b9ca8dd004e4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lift/_repRow.html.twig"));

        // line 1
        echo "<tr data-weight=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["repLog"]) || array_key_exists("repLog", $context) ? $context["repLog"] : (function () { throw new Twig_Error_Runtime('Variable "repLog" does not exist.', 1, $this->source); })()), "totalWeightLifted", array()), "html", null, true);
        echo "\">
    <td>";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["repLog"]) || array_key_exists("repLog", $context) ? $context["repLog"] : (function () { throw new Twig_Error_Runtime('Variable "repLog" does not exist.', 2, $this->source); })()), "itemLabel", array())), "html", null, true);
        echo "</td>
    <td>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["repLog"]) || array_key_exists("repLog", $context) ? $context["repLog"] : (function () { throw new Twig_Error_Runtime('Variable "repLog" does not exist.', 3, $this->source); })()), "reps", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["repLog"]) || array_key_exists("repLog", $context) ? $context["repLog"] : (function () { throw new Twig_Error_Runtime('Variable "repLog" does not exist.', 4, $this->source); })()), "totalWeightLifted", array()), "html", null, true);
        echo "</td>
    <td>
        <a href=\"#\"
           class=\"js-delete-rep-log\"
           data-url=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rep_log_delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["repLog"]) || array_key_exists("repLog", $context) ? $context["repLog"] : (function () { throw new Twig_Error_Runtime('Variable "repLog" does not exist.', 8, $this->source); })()), "id", array()))), "html", null, true);
        echo "\"
        >
            <span class=\"fa fa-trash\"></span>
        </a>
    </td>
</tr>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lift/_repRow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  39 => 4,  35 => 3,  31 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr data-weight=\"{{ repLog.totalWeightLifted }}\">
    <td>{{ repLog.itemLabel|trans }}</td>
    <td>{{ repLog.reps }}</td>
    <td>{{ repLog.totalWeightLifted }}</td>
    <td>
        <a href=\"#\"
           class=\"js-delete-rep-log\"
           data-url=\"{{ path('rep_log_delete', {id: repLog.id}) }}\"
        >
            <span class=\"fa fa-trash\"></span>
        </a>
    </td>
</tr>", "lift/_repRow.html.twig", "/Users/mac/Documents/sites/knp_js/app/Resources/views/lift/_repRow.html.twig");
    }
}
