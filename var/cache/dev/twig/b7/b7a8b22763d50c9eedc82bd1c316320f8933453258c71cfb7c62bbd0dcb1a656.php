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

/* article/homepage.html.twig */
class __TwigTemplate_36b3c1a946e9f0f16ed8b866c4aa8f6dc9761e4c624d482d8296648e6f1a0fdf extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div
\t\t\tclass=\"row\">

\t\t\t<!-- Article List -->

\t\t\t<div
\t\t\t\tclass=\"col-sm-12 col-md-8\">

\t\t\t\t<!-- H1 Article -->
\t\t\t\t<a class=\"main-article-link\" href=\"#\">
\t\t\t\t\t<div class=\"main-article mb-5 pb-3\">
\t\t\t\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/meteor-shower.jpg"), "html", null, true);
        echo "\" alt=\"meteor shower\">
\t\t\t\t\t\t<h1 class=\"text-center mt-2\">Ursid Meteor Shower:
\t\t\t\t\t\t\t<br>Healthier than a regular shower?</h1>
\t\t\t\t\t</div>
\t\t\t\t</a>

\t\t\t\t<!-- Supporting Articles -->

\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 25
            echo "\t\t\t\t\t<div class=\"article-container my-1\">
\t\t\t\t\t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img class=\"article-img\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["article"], "imagePath", [], "any", false, false, false, 27)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div class=\"article-title d-inline-block pl-3 align-middle\">
\t\t\t\t\t\t\t\t<span>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<small>(";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nonDeletedComments", [], "any", false, false, false, 30)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tcomments)</small>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "tags", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 34
                echo "\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-light\">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 35), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/alien-profile.png"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 40), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"pl-5 article-details float-right\">
\t\t\t\t\t\t\t\t\t";
            // line 43
            echo ((twig_get_attribute($this->env, $this->source, $context["article"], "publishedAt", [], "any", false, false, false, 43)) ? ($this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["article"], "publishedAt", [], "any", false, false, false, 43))) : (""));
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t</div>

\t\t\t<!-- Right bar ad space -->


\t\t\t<div class=\"col-sm-12 col-md-4 text-center\">
\t\t\t\t<div class=\"ad-space mx-auto mt-1 pb-2 pt-2\">
\t\t\t\t\t<img class=\"advertisement-img\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/space-ice.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<span class=\"advertisement-text\">New:</span>
\t\t\t\t\t\tSpace Ice Cream!</p>
\t\t\t\t\t<button class=\"btn btn-info\">Buy Now!</button>
\t\t\t\t</div>

\t\t\t\t<div class=\"quote-space pb-2 pt-2 px-5\">
\t\t\t\t\t<h3 class=\"text-center pb-3\">Trending Quotes</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"fa fa-comment\"></i>
\t\t\t\t\t\t\"Our two greatest problems are gravity and paperwork. We can lick gravity, but sometimes the paperwork is overwhelming.\"
\t\t\t\t\t\t<br>—
\t\t\t\t\t\t<a href=\"https://en.wikipedia.org/wiki/Wernher_von_Braun\">Wernher von Braun, Rocket Engineer</a>
\t\t\t\t\t</p>

\t\t\t\t\t<p class=\"pt-4\">
\t\t\t\t\t\t<i class=\"fa fa-comment\"></i>
\t\t\t\t\t\t\"Let's face it, space is a risky business. I always considered every launch a barely controlled explosion.\"
\t\t\t\t\t\t<br>—
\t\t\t\t\t\t<a href=\"https://en.wikipedia.org/wiki/Aaron_Cohen_(Deputy_NASA_administrator)\">Aaron Cohen, NASA Administrator</a>
\t\t\t\t\t</p>

\t\t\t\t\t<p class=\"pt-4\">
\t\t\t\t\t\t<i class=\"fa fa-comment\"></i>
\t\t\t\t\t\t\"If offered a seat on a rocket ship, don't ask what seat. Just get on.\"<br>—
\t\t\t\t\t\t<a href=\"https://en.wikipedia.org/wiki/Christa_McAuliffe\">Christa McAuliffe, Challenger Astronaut</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 55,  156 => 48,  145 => 43,  139 => 40,  135 => 39,  132 => 38,  123 => 35,  120 => 34,  116 => 33,  110 => 30,  106 => 29,  101 => 27,  97 => 26,  94 => 25,  90 => 24,  79 => 16,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"container\">
\t\t<div
\t\t\tclass=\"row\">

\t\t\t<!-- Article List -->

\t\t\t<div
\t\t\t\tclass=\"col-sm-12 col-md-8\">

\t\t\t\t<!-- H1 Article -->
\t\t\t\t<a class=\"main-article-link\" href=\"#\">
\t\t\t\t\t<div class=\"main-article mb-5 pb-3\">
\t\t\t\t\t\t<img src=\"{{ asset('images/meteor-shower.jpg') }}\" alt=\"meteor shower\">
\t\t\t\t\t\t<h1 class=\"text-center mt-2\">Ursid Meteor Shower:
\t\t\t\t\t\t\t<br>Healthier than a regular shower?</h1>
\t\t\t\t\t</div>
\t\t\t\t</a>

\t\t\t\t<!-- Supporting Articles -->

\t\t\t\t{% for article in articles %}
\t\t\t\t\t<div class=\"article-container my-1\">
\t\t\t\t\t\t<a href=\"{{ path('article_show', {slug: article.slug}) }}\">
\t\t\t\t\t\t\t<img class=\"article-img\" src=\"{{ asset(article.imagePath) }}\">
\t\t\t\t\t\t\t<div class=\"article-title d-inline-block pl-3 align-middle\">
\t\t\t\t\t\t\t\t<span>{{ article.title }}</span>
\t\t\t\t\t\t\t\t<small>({{ article.nonDeletedComments|length }}
\t\t\t\t\t\t\t\t\tcomments)</small>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t{% for tag in article.tags %}
\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-light\">{{ tag.name }}</span>
\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"{{ asset('images/alien-profile.png') }}\">
\t\t\t\t\t\t\t\t\t{{ article.author }}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"pl-5 article-details float-right\">
\t\t\t\t\t\t\t\t\t{{ article.publishedAt ? article.publishedAt|ago }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>

\t\t\t<!-- Right bar ad space -->


\t\t\t<div class=\"col-sm-12 col-md-4 text-center\">
\t\t\t\t<div class=\"ad-space mx-auto mt-1 pb-2 pt-2\">
\t\t\t\t\t<img class=\"advertisement-img\" src=\"{{ asset('images/space-ice.png') }}\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<span class=\"advertisement-text\">New:</span>
\t\t\t\t\t\tSpace Ice Cream!</p>
\t\t\t\t\t<button class=\"btn btn-info\">Buy Now!</button>
\t\t\t\t</div>

\t\t\t\t<div class=\"quote-space pb-2 pt-2 px-5\">
\t\t\t\t\t<h3 class=\"text-center pb-3\">Trending Quotes</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"fa fa-comment\"></i>
\t\t\t\t\t\t\"Our two greatest problems are gravity and paperwork. We can lick gravity, but sometimes the paperwork is overwhelming.\"
\t\t\t\t\t\t<br>—
\t\t\t\t\t\t<a href=\"https://en.wikipedia.org/wiki/Wernher_von_Braun\">Wernher von Braun, Rocket Engineer</a>
\t\t\t\t\t</p>

\t\t\t\t\t<p class=\"pt-4\">
\t\t\t\t\t\t<i class=\"fa fa-comment\"></i>
\t\t\t\t\t\t\"Let's face it, space is a risky business. I always considered every launch a barely controlled explosion.\"
\t\t\t\t\t\t<br>—
\t\t\t\t\t\t<a href=\"https://en.wikipedia.org/wiki/Aaron_Cohen_(Deputy_NASA_administrator)\">Aaron Cohen, NASA Administrator</a>
\t\t\t\t\t</p>

\t\t\t\t\t<p class=\"pt-4\">
\t\t\t\t\t\t<i class=\"fa fa-comment\"></i>
\t\t\t\t\t\t\"If offered a seat on a rocket ship, don't ask what seat. Just get on.\"<br>—
\t\t\t\t\t\t<a href=\"https://en.wikipedia.org/wiki/Christa_McAuliffe\">Christa McAuliffe, Challenger Astronaut</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "article/homepage.html.twig", "/home/riad/symfony_projects/the _spacebar_security/templates/article/homepage.html.twig");
    }
}
