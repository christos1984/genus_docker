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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 3, $this->source); })()), "subFamily", [], "any", false, false, false, 3), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 4, $this->source); })()), "speciesCount", [], "any", false, false, false, 4), 'row', ["label" => "Number of Species"]);
        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 7, $this->source); })()), "funFact", [], "any", false, false, false, 7), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 8, $this->source); })()), "isPublished", [], "any", false, false, false, 8), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 9, $this->source); })()), "firstDiscoveredAt", [], "any", false, false, false, 9), 'row');
        echo "
    <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Save</button>
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["genusForm"]) || array_key_exists("genusForm", $context) ? $context["genusForm"] : (function () { throw new RuntimeError('Variable "genusForm" does not exist.', 11, $this->source); })()), 'form_end');
        
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
        return array (  73 => 11,  68 => 9,  64 => 8,  60 => 7,  57 => 6,  55 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(genusForm) }}
    {{ form_row(genusForm.name) }}
    {{ form_row(genusForm.subFamily) }}
    {{ form_row(genusForm.speciesCount, {
        'label': 'Number of Species'
    }) }}
    {{ form_row(genusForm.funFact) }}
    {{ form_row(genusForm.isPublished) }}
    {{ form_row(genusForm.firstDiscoveredAt) }}
    <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Save</button>
{{ form_end(genusForm) }}", "admin/genus/_form.html.twig", "/var/www/symfony/app/Resources/views/admin/genus/_form.html.twig");
    }
}
