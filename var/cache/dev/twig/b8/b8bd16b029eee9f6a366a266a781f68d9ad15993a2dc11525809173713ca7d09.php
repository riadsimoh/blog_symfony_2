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

/* @Httplug/script/httplug.js.twig */
class __TwigTemplate_4d3a23367a599a7d647c20a66abea696e4b081afcb81cc50253c131c221dd6a8 extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/script/httplug.js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/script/httplug.js.twig"));

        // line 1
        echo "/**
 * Toggle visibility on elements.
 */
document.addEventListener(\"DOMContentLoaded\", function() {
    Array.prototype.forEach.call(document.getElementsByClassName('httplug-toggle'), function (source) {
        source.addEventListener('click', function() {
            Array.prototype.forEach.call(document.querySelectorAll(source.getAttribute('data-toggle')), function (target) {
                target.classList.toggle('httplug-hidden');
            });
        });
    });
});

/**
 * Copy as cURL.
 */
document.addEventListener(\"DOMContentLoaded\", function () {
    Array.prototype.forEach.call(document.getElementsByClassName('httplug-toolbar'), function (toolbar) {
        var button = toolbar.querySelector('.httplug-copy-as-curl>button');
        button.addEventListener('click', function() {
            var input = toolbar.querySelector('.httplug-copy-as-curl>input');
            input.select();
            document.execCommand('copy');
            input.setSelectionRange(0, 0);
       });
    });
})
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Httplug/script/httplug.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Toggle visibility on elements.
 */
document.addEventListener(\"DOMContentLoaded\", function() {
    Array.prototype.forEach.call(document.getElementsByClassName('httplug-toggle'), function (source) {
        source.addEventListener('click', function() {
            Array.prototype.forEach.call(document.querySelectorAll(source.getAttribute('data-toggle')), function (target) {
                target.classList.toggle('httplug-hidden');
            });
        });
    });
});

/**
 * Copy as cURL.
 */
document.addEventListener(\"DOMContentLoaded\", function () {
    Array.prototype.forEach.call(document.getElementsByClassName('httplug-toolbar'), function (toolbar) {
        var button = toolbar.querySelector('.httplug-copy-as-curl>button');
        button.addEventListener('click', function() {
            var input = toolbar.querySelector('.httplug-copy-as-curl>input');
            input.select();
            document.execCommand('copy');
            input.setSelectionRange(0, 0);
       });
    });
})
", "@Httplug/script/httplug.js.twig", "/home/riad/symfony_projects/the _spacebar_security/vendor/php-http/httplug-bundle/Resources/views/script/httplug.js.twig");
    }
}
