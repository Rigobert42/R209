<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_37f1b9b4dc0cc398adbc0977ae3f55d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        yield "        ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 12
        yield "
        ";
        // line 13
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 17
        yield "    </head>
    <body>
\t\t<div class=\"container\">
\t\t\t<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">Dashboard</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t  <span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t  <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t  <a class=\"nav-link active\" aria-current=\"page\" href=\"/register\">Se connecter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t  <a class=\"nav-link\" href=\"/cv\">Curiculum Vitae</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t  <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\tAdmin
\t\t\t\t\t  </a>
\t\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veille_index");
        yield "\">Veille</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_index");
        yield "\">Formation</a></li>
\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competence_index");
        yield "\">Competence</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_index");
        yield "\">Category</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_index");
        yield "\">Niveau</a></li>
\t\t\t\t\t  </ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t  <a class=\"nav-link\" href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" >logout</a>
\t\t\t\t\t</li>
\t\t\t\t  </ul>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
        ";
        // line 54
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 55
        yield "\t\t</div>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        yield "            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        yield "
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        yield "            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        yield "
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  213 => 54,  198 => 14,  188 => 13,  173 => 9,  163 => 8,  143 => 5,  129 => 55,  127 => 54,  118 => 48,  111 => 44,  107 => 43,  103 => 42,  98 => 40,  94 => 39,  74 => 22,  67 => 17,  65 => 13,  62 => 12,  59 => 8,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </head>
    <body>
\t\t<div class=\"container\">
\t\t\t<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('app_dashboard') }}\">Dashboard</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t  <span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t  <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t  <a class=\"nav-link active\" aria-current=\"page\" href=\"/register\">Se connecter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t  <a class=\"nav-link\" href=\"/cv\">Curiculum Vitae</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t  <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\tAdmin
\t\t\t\t\t  </a>
\t\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_veille_index') }}\">Veille</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_formation_index') }}\">Formation</a></li>
\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_competence_index') }}\">Competence</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_category_index') }}\">Category</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_niveau_index') }}\">Niveau</a></li>
\t\t\t\t\t  </ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t  <a class=\"nav-link\" href=\"{{ path('app_logout') }}\" >logout</a>
\t\t\t\t\t</li>
\t\t\t\t  </ul>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
        {% block body %}{% endblock %}
\t\t</div>
    </body>
</html>
", "base.html.twig", "C:\\Users\\bebe4\\Documents\\folio\\templates\\base.html.twig");
    }
}
