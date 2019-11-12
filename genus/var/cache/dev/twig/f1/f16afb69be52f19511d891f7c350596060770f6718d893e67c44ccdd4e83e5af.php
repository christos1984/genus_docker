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

/* genus/show.html.twig */
class __TwigTemplate_f6d4d039d250ff7b186f9f39368664ea57a6229ec1f28900c4f4e8bb7123e401 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "genus/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Genus ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["genus"]) || array_key_exists("genus", $context) ? $context["genus"] : (function () { throw new RuntimeError('Variable "genus" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2 class=\"genus-name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["genus"]) || array_key_exists("genus", $context) ? $context["genus"] : (function () { throw new RuntimeError('Variable "genus" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h2>

    <div class=\"sea-creature-container\">
        <div class=\"genus-photo\"></div>
        <div class=\"genus-details\">
            <dl class=\"genus-details-list\">
                <dt>Subfamily:</dt>
                <dd>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["genus"]) || array_key_exists("genus", $context) ? $context["genus"] : (function () { throw new RuntimeError('Variable "genus" does not exist.', 13, $this->source); })()), "subFamily", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</dd>
                <dt>Known Species:</dt>
                <dd>";
        // line 15
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["genus"]) || array_key_exists("genus", $context) ? $context["genus"] : (function () { throw new RuntimeError('Variable "genus" does not exist.', 15, $this->source); })()), "speciesCount", [], "any", false, false, false, 15)), "html", null, true);
        echo "</dd>
                <dt>Fun Fact:</dt>
                <dd>";
        // line 17
        echo $this->extensions['AppBundle\Twig\MarkdownExtension']->parseMarkdown(twig_get_attribute($this->env, $this->source, (isset($context["genus"]) || array_key_exists("genus", $context) ? $context["genus"] : (function () { throw new RuntimeError('Variable "genus" does not exist.', 17, $this->source); })()), "funFact", [], "any", false, false, false, 17));
        echo "</dd>
                <dt>Recent Notes</dt>
                <dd>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["recentNoteCount"]) || array_key_exists("recentNoteCount", $context) ? $context["recentNoteCount"] : (function () { throw new RuntimeError('Variable "recentNoteCount" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</dd>

                <dt>Lead Scientists</dt>
                <dd>
                    <ul class=\"list-group\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["genus"]) || array_key_exists("genus", $context) ? $context["genus"] : (function () { throw new RuntimeError('Variable "genus" does not exist.', 24, $this->source); })()), "genusScientists", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["genusScientist"]) {
            // line 25
            echo "                         <li class=\"list-group-item js-scientist-item\" >
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 27
$context["genusScientist"], "user", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
            // line 28
            echo "\">
                                    ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["genusScientist"], "user", [], "any", false, false, false, 29), "fullName", [], "any", false, false, false, 29), "html", null, true);
            echo "
                                    (";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genusScientist"], "yearsStudied", [], "any", false, false, false, 30), "html", null, true);
            echo " years)
                                </a>
                                <a href=\"#\"
                                    data-url=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genus_scientists_remove", ["genusId" => twig_get_attribute($this->env, $this->source,             // line 34
(isset($context["genus"]) || array_key_exists("genus", $context) ? $context["genus"] : (function () { throw new RuntimeError('Variable "genus" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 35
$context["genusScientist"], "user", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
            // line 36
            echo "\"
                                   class=\"btn btn-link btn-xs pull-right js-remove-scientist-user\"
                                >
                                    <span class=\"fa fa-close\"></span>
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genusScientist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </ul>
                </dd>
            </dl>
        </div>
    </div>
    <div id=\"js-notes-wrapper\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>

    <script type=\"text/babel\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/notes.react.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/babel\">
        var notesUrl = '";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genus_show_notes", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["genus"]) || array_key_exists("genus", $context) ? $context["genus"] : (function () { throw new RuntimeError('Variable "genus" does not exist.', 59, $this->source); })()), "slug", [], "any", false, false, false, 59)]), "html", null, true);
        echo "';

        ReactDOM.render(
          <NoteSection url={notesUrl} />,
          document.getElementById('js-notes-wrapper')
        );
    </script>
    <script>
    jQuery(document).ready(function() {
        \$('.js-remove-scientist-user').on('click', function(e) {
                e.preventDefault();

                var \$el = \$(this).closest('.js-scientist-item');

                \$(this).find('.fa-close')
                    .removeClass('fa-close')
                    .addClass('fa-spinner')
                    .addClass('fa-spin');
                
                \$.ajax({
                    url: \$(this).data('url'),
                    method: 'DELETE'
                }).done(function() {
                    \$el.fadeOut();
                });
                    
            });
    });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "genus/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 59,  198 => 57,  189 => 52,  179 => 51,  163 => 43,  151 => 36,  149 => 35,  148 => 34,  147 => 33,  141 => 30,  137 => 29,  134 => 28,  132 => 27,  131 => 26,  128 => 25,  124 => 24,  116 => 19,  111 => 17,  106 => 15,  101 => 13,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Genus {{ genus.name }}{% endblock %}

{% block body %}
    <h2 class=\"genus-name\">{{ genus.name }}</h2>

    <div class=\"sea-creature-container\">
        <div class=\"genus-photo\"></div>
        <div class=\"genus-details\">
            <dl class=\"genus-details-list\">
                <dt>Subfamily:</dt>
                <dd>{{ genus.subFamily.name }}</dd>
                <dt>Known Species:</dt>
                <dd>{{ genus.speciesCount|number_format }}</dd>
                <dt>Fun Fact:</dt>
                <dd>{{ genus.funFact|markdownify }}</dd>
                <dt>Recent Notes</dt>
                <dd>{{ recentNoteCount }}</dd>

                <dt>Lead Scientists</dt>
                <dd>
                    <ul class=\"list-group\">
                        {% for genusScientist in genus.genusScientists %}
                         <li class=\"list-group-item js-scientist-item\" >
                                <a href=\"{{ path('user_show', {
                                    'id': genusScientist.user.id
                                }) }}\">
                                    {{ genusScientist.user.fullName }}
                                    ({{ genusScientist.yearsStudied }} years)
                                </a>
                                <a href=\"#\"
                                    data-url=\"{{ path('genus_scientists_remove', {
                                       genusId: genus.id,
                                       userId: genusScientist.user.id
                                   }) }}\"
                                   class=\"btn btn-link btn-xs pull-right js-remove-scientist-user\"
                                >
                                    <span class=\"fa fa-close\"></span>
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </dd>
            </dl>
        </div>
    </div>
    <div id=\"js-notes-wrapper\"></div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>

    <script type=\"text/babel\" src=\"{{ asset('js/notes.react.js') }}\"></script>
    <script type=\"text/babel\">
        var notesUrl = '{{ path('genus_show_notes', {'slug': genus.slug}) }}';

        ReactDOM.render(
          <NoteSection url={notesUrl} />,
          document.getElementById('js-notes-wrapper')
        );
    </script>
    <script>
    jQuery(document).ready(function() {
        \$('.js-remove-scientist-user').on('click', function(e) {
                e.preventDefault();

                var \$el = \$(this).closest('.js-scientist-item');

                \$(this).find('.fa-close')
                    .removeClass('fa-close')
                    .addClass('fa-spinner')
                    .addClass('fa-spin');
                
                \$.ajax({
                    url: \$(this).data('url'),
                    method: 'DELETE'
                }).done(function() {
                    \$el.fadeOut();
                });
                    
            });
    });
    </script>
{% endblock %}
", "genus/show.html.twig", "/var/www/symfony/app/Resources/views/genus/show.html.twig");
    }
}
