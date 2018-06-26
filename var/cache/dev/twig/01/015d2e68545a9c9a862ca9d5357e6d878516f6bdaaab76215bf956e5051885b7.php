<?php

/* lift/_form.html.twig */
class __TwigTemplate_f277f37aefa41548e31f0c0cb7ea33aed8e2a19157b975fac61fa5b6a1fa6bed extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lift/_form.html.twig"));

        // line 1
        echo "<form name=\"rep_log\" method=\"post\" class=\"form-inline js-new-rep-log-form\" novalidate=\"novalidate\" data-url=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rep_log_new");
        echo "\">


    <div class=\"form-group\">
        <label class=\"sr-only control-label required\" for=\"rep_log_item\">What did you lift?</label>
        <select id=\"rep_log_item\" name=\"item\" required=\"required\" class=\"form-control\">
            <option value=\"\" selected=\"selected\">What did you lift?</option>
            <option value=\"cat\">Cat</option>
            <option value=\"fat_cat\">Big Fat Cat</option>
            <option value=\"laptop\">My Laptop</option>
            <option value=\"coffee_cup\">Coffee Cup</option>
        </select>
    </div>

    <div class=\"form-group\">
        <label class=\"sr-only control-label required\" for=\"rep_log_reps\">How many times?</label>
        <input type=\"number\" id=\"rep_log_reps\" name=\"reps\" required=\"required\" placeholder=\"How many times?\" class=\"form-control\" />
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">I Lifted it!</button>
</form>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lift/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form name=\"rep_log\" method=\"post\" class=\"form-inline js-new-rep-log-form\" novalidate=\"novalidate\" data-url=\"{{ path('rep_log_new') }}\">


    <div class=\"form-group\">
        <label class=\"sr-only control-label required\" for=\"rep_log_item\">What did you lift?</label>
        <select id=\"rep_log_item\" name=\"item\" required=\"required\" class=\"form-control\">
            <option value=\"\" selected=\"selected\">What did you lift?</option>
            <option value=\"cat\">Cat</option>
            <option value=\"fat_cat\">Big Fat Cat</option>
            <option value=\"laptop\">My Laptop</option>
            <option value=\"coffee_cup\">Coffee Cup</option>
        </select>
    </div>

    <div class=\"form-group\">
        <label class=\"sr-only control-label required\" for=\"rep_log_reps\">How many times?</label>
        <input type=\"number\" id=\"rep_log_reps\" name=\"reps\" required=\"required\" placeholder=\"How many times?\" class=\"form-control\" />
    </div>

    <button type=\"submit\" class=\"btn btn-primary\">I Lifted it!</button>
</form>", "lift/_form.html.twig", "/Users/mac/Documents/sites/knp_js/app/Resources/views/lift/_form.html.twig");
    }
}
