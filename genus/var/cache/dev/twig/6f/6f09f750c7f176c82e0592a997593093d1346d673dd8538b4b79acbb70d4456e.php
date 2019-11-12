<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/genus/_form.html.twig */
class __TwigTemplate_e5154fb9a01d27aeb6d68ce4aea1d47dc07dd03258c22eaa779c50b8cc004a6c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/genus/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/genus/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 2, $this->source); })()), 'errors');
        echo "

    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), 'row');
        echo "

    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 6, $this->source); })()), "subFamily", [], "any", false, false, false, 6), 'row', ["label" => "Taxonomic Subfamily", "attr" => ["class" => "foo"], "placeholder" => "Select a Subfamily"]);
        // line 12
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 13, $this->source); })()), "speciesCount", [], "any", false, false, false, 13), 'row', ["label" => "Number of Species"]);
        // line 15
        echo "
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 16, $this->source); })()), "funFact", [], "any", false, false, false, 16), 'row');
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 17, $this->source); })()), "isPublished", [], "any", false, false, false, 17), 'row', ["help" => "Should this genus be shown on the site?"]);
        // line 19
        echo "

    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 21, $this->source); })()), "firstDiscoveredAt", [], "any", false, false, false, 21), 'row');
        echo "

    <h3>Scientists</h3>
    <div class=\"row js-genus-scientist-wrapper\" 
        data-prototype=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 25, $this->source); })()), "genusScientists", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "prototype", [], "any", false, false, false, 25), 'widget'), "html_attr");
        echo "\"          
        data-index=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 26, $this->source); })()), "genusScientists", [], "any", false, false, false, 26)), "html", null, true);
        echo "\">
        
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 28, $this->source); })()), "genusScientists", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["genusScientistForm"]) {
            // line 29
            echo "        <div class=\"col-xs-4 js-genus-scientist-item\">
            <a href=\"#\" class=\"js-remove-scientist pull-right\">
                <span class=\"fa fa-close\"></span>
            </a>
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["genusScientistForm"], 'errors');
            echo "
            ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["genusScientistForm"], "user", [], "any", false, false, false, 34), 'row');
            echo "
            ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["genusScientistForm"], "yearsStudied", [], "any", false, false, false, 35), 'row');
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genusScientistForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    <a href=\"#\" class=\"js-genus-scientist-add\">
            <span class=\"fa fa-plus-circle\"></span>
            Add Another Scientist
        </a>
    </div>

    <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Save</button>
";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/genus/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 45,  120 => 38,  111 => 35,  107 => 34,  103 => 33,  97 => 29,  93 => 28,  88 => 26,  84 => 25,  77 => 21,  73 => 19,  71 => 17,  67 => 16,  64 => 15,  62 => 13,  59 => 12,  57 => 6,  52 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(genusForm) }}
    {{ form_errors(genusForm) }}

    {{ form_row(genusForm.name) }}

    {{ form_row(genusForm.subFamily, {
        'label': 'Taxonomic Subfamily',
        'attr': {
            'class': 'foo'
        },
        'placeholder': 'Select a Subfamily'
    }) }}
    {{ form_row(genusForm.speciesCount, {
        'label': 'Number of Species'
    }) }}
    {{ form_row(genusForm.funFact) }}
    {{ form_row(genusForm.isPublished, {
        help: 'Should this genus be shown on the site?'
    }) }}

    {{ form_row(genusForm.firstDiscoveredAt) }}

    <h3>Scientists</h3>
    <div class=\"row js-genus-scientist-wrapper\" 
        data-prototype=\"{{ form_widget(genusForm.genusScientists.vars.prototype)|e('html_attr') }}\"          
        data-index=\"{{ genusForm.genusScientists|length }}\">
        
    {% for genusScientistForm in genusForm.genusScientists %}
        <div class=\"col-xs-4 js-genus-scientist-item\">
            <a href=\"#\" class=\"js-remove-scientist pull-right\">
                <span class=\"fa fa-close\"></span>
            </a>
            {{ form_errors(genusScientistForm) }}
            {{ form_row(genusScientistForm.user) }}
            {{ form_row(genusScientistForm.yearsStudied) }}
        </div>
    {% endfor %}
    <a href=\"#\" class=\"js-genus-scientist-add\">
            <span class=\"fa fa-plus-circle\"></span>
            Add Another Scientist
        </a>
    </div>

    <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Save</button>
{{ form_end(genusForm) }}
", "admin/genus/_form.html.twig", "/var/www/symfony/app/Resources/views/admin/genus/_form.html.twig");
    }
}
