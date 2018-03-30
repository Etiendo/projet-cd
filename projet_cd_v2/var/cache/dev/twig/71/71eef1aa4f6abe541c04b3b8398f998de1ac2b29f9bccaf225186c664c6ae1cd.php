<?php

/* default/index.html.twig */
class __TwigTemplate_1ca7613ddf1abc19fef5b614e234a58d196cc748d5962ff59bd11f8ddcec07f1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<header>
    <div id=\"header\" class=\"container\">
        <div id=\"logo\">
            <h1>
                <a href=\"#\">Ma fromagerie préférée</a>
            </h1>
        </div>
        <div id=\"menu\">
            <ul>
                <li class=\"active\">
                    <a href=";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo " accesskey=\"1\">Inscription</a>
                </li>
                <li>
                    <a href=";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo ">Connexion</a>
                </li>
            </ul>
        </div>
    </div>
</header>

    <div id=\"banner\"></div>
    <div id=\"page\" class=\"container\">
        <div class=\"mainbox\">
            <h2>Les échoppes à proximité</h2>
            <div class=\"box\">
                <div id=\"map\" class=\"map\"></div>
                <span id=\"zoom\">Trouvez vos échoppes !</span>
            </div>
            <div class=\"row\">
            <div class=\"col-3\">
                <p>Nom de l'échoppe</p>
            </div>
            <div class=\"col-3\">
                <p>Lattitude</p>
            </div>
            <div class=\"col-3\">
                <p>Longitude</p>
            </div>
        </div>
    <?php foreach (\$poisGeneric as \$poi) {
?>
        <div class=\"row\">
            <div class=\"col-3\">
                <p><?php echo \$poi['name']; ?></p>
            </div>
            <div class=\"col-3\">
                <p><?php echo \$poi['lat']; ?></p>
            </div>
            <div class=\"col-3\">
                <p><?php echo \$poi['lng']; ?></p>
            </div>
        </div>
    <?php
} ?>
        </div>
    </div>    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  66 => 15,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<header>
    <div id=\"header\" class=\"container\">
        <div id=\"logo\">
            <h1>
                <a href=\"#\">Ma fromagerie préférée</a>
            </h1>
        </div>
        <div id=\"menu\">
            <ul>
                <li class=\"active\">
                    <a href={{ path('fos_user_registration_register')}} accesskey=\"1\">Inscription</a>
                </li>
                <li>
                    <a href={{ path('fos_user_security_login')}}>Connexion</a>
                </li>
            </ul>
        </div>
    </div>
</header>

    <div id=\"banner\"></div>
    <div id=\"page\" class=\"container\">
        <div class=\"mainbox\">
            <h2>Les échoppes à proximité</h2>
            <div class=\"box\">
                <div id=\"map\" class=\"map\"></div>
                <span id=\"zoom\">Trouvez vos échoppes !</span>
            </div>
            <div class=\"row\">
            <div class=\"col-3\">
                <p>Nom de l'échoppe</p>
            </div>
            <div class=\"col-3\">
                <p>Lattitude</p>
            </div>
            <div class=\"col-3\">
                <p>Longitude</p>
            </div>
        </div>
    <?php foreach (\$poisGeneric as \$poi) {
?>
        <div class=\"row\">
            <div class=\"col-3\">
                <p><?php echo \$poi['name']; ?></p>
            </div>
            <div class=\"col-3\">
                <p><?php echo \$poi['lat']; ?></p>
            </div>
            <div class=\"col-3\">
                <p><?php echo \$poi['lng']; ?></p>
            </div>
        </div>
    <?php
} ?>
        </div>
    </div>    
    {% endblock %}", "default/index.html.twig", "/Applications/MAMP/htdocs/projet-cd/projet_cd_v2/app/Resources/views/default/index.html.twig");
    }
}
