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

/* base/nav.html.twig */
class __TwigTemplate_c2744c0d85cb7b847af5ff7b2567333a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/nav.html.twig"));

        // line 1
        echo "<nav class=\"menu\">

<ul class=\"nav_links\">
";
        // line 4
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 5
            echo "    <li>
        <a href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patients");
            echo "\"> Gestion des patients </a>
        <a href=\"";
            // line 7
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affichage_sejour");
            echo "\"> Gestion des séjours </a>
    </li>
    <li>
        <a class=\"button\" href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
    </li>
";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INFIRMIER")) {
            // line 13
            echo "    <li>
        <a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_menuSejour");
            echo "\"> Gestion des séjours </a>
    </li>
";
        }
        // line 17
        echo "
";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 19
            echo "    <li>
        <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> Logout </a>
    </li>
";
        } else {
            // line 23
            echo "    <li>
        <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> Login </a>
    </li>
";
        }
        // line 27
        echo "</ul>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  95 => 24,  92 => 23,  86 => 20,  83 => 19,  81 => 18,  78 => 17,  72 => 14,  69 => 13,  63 => 10,  57 => 7,  53 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"menu\">

<ul class=\"nav_links\">
{% if is_granted('ROLE_ADMIN') %}
    <li>
        <a href=\"{{ path('patients') }}\"> Gestion des patients </a>
        <a href=\"{{ path('app_affichage_sejour') }}\"> Gestion des séjours </a>
    </li>
    <li>
        <a class=\"button\" href=\"{{path('app_register')}}\">Inscription</a>
    </li>
{% elseif is_granted('ROLE_INFIRMIER') %}
    <li>
        <a href=\"{{ path('app_menuSejour') }}\"> Gestion des séjours </a>
    </li>
{% endif %}

{% if is_granted('IS_AUTHENTICATED_FULLY') %}
    <li>
        <a href=\"{{ path('app_logout') }}\"> Logout </a>
    </li>
{% else %}
    <li>
        <a href=\"{{ path('app_login') }}\"> Login </a>
    </li>
{% endif %}
</ul>
</nav>", "base/nav.html.twig", "/home/sio2022/Documents/Symfony/AP_Symfony_Sejour_lang-miroux-oudshoorn/templates/base/nav.html.twig");
    }
}
