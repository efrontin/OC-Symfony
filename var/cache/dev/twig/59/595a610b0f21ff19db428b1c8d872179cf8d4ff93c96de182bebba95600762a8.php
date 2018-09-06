<?php

/* @OCCore/layout.html.twig */
class __TwigTemplate_4a68663d0c95a82ec33e8db39919251379837e2f2a06ec5c70991ce7f84f4bb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adb6dcf4712c0f7c892a76a74f6f10b53d5c2a6e7b5dc6716d5c7c4faa124730 = $this->env->getExtension("native_profiler");
        $__internal_adb6dcf4712c0f7c892a76a74f6f10b53d5c2a6e7b5dc6716d5c7c4faa124730->enter($__internal_adb6dcf4712c0f7c892a76a74f6f10b53d5c2a6e7b5dc6716d5c7c4faa124730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCCore/layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          ";
        // line 36
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
            // line 37
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("oc_platform_add");
            echo "\">Ajouter une annonce</a></li>
          ";
        }
        // line 39
        echo "        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 42
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "

        <h3>Utilisateur</h3>
        ";
        // line 45
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 46
            echo "          Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
          <br>
          <a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
        ";
        } else {
            // line 50
            echo "          <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
        ";
        }
        // line 52
        echo "      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "
  </body>
</html>
";
        
        $__internal_adb6dcf4712c0f7c892a76a74f6f10b53d5c2a6e7b5dc6716d5c7c4faa124730->leave($__internal_adb6dcf4712c0f7c892a76a74f6f10b53d5c2a6e7b5dc6716d5c7c4faa124730_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c10758ac98381fd62b3748787e4d193af4a5acc40c3e5861fcc0b093137b1c0 = $this->env->getExtension("native_profiler");
        $__internal_1c10758ac98381fd62b3748787e4d193af4a5acc40c3e5861fcc0b093137b1c0->enter($__internal_1c10758ac98381fd62b3748787e4d193af4a5acc40c3e5861fcc0b093137b1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_1c10758ac98381fd62b3748787e4d193af4a5acc40c3e5861fcc0b093137b1c0->leave($__internal_1c10758ac98381fd62b3748787e4d193af4a5acc40c3e5861fcc0b093137b1c0_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_026bef771cbe53cdc42d5189f8291f17e3e9e8ff337eef4266a1285660687346 = $this->env->getExtension("native_profiler");
        $__internal_026bef771cbe53cdc42d5189f8291f17e3e9e8ff337eef4266a1285660687346->enter($__internal_026bef771cbe53cdc42d5189f8291f17e3e9e8ff337eef4266a1285660687346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_026bef771cbe53cdc42d5189f8291f17e3e9e8ff337eef4266a1285660687346->leave($__internal_026bef771cbe53cdc42d5189f8291f17e3e9e8ff337eef4266a1285660687346_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cbe955792c63c80ea0961b680d8f9c827404f27bbb671ff1089ec0848c2be19 = $this->env->getExtension("native_profiler");
        $__internal_9cbe955792c63c80ea0961b680d8f9c827404f27bbb671ff1089ec0848c2be19->enter($__internal_9cbe955792c63c80ea0961b680d8f9c827404f27bbb671ff1089ec0848c2be19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "        ";
        
        $__internal_9cbe955792c63c80ea0961b680d8f9c827404f27bbb671ff1089ec0848c2be19->leave($__internal_9cbe955792c63c80ea0961b680d8f9c827404f27bbb671ff1089ec0848c2be19_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4bb657a03f6c35533b452909b0a723013055783ba95eaea467344d77cce6bd6f = $this->env->getExtension("native_profiler");
        $__internal_4bb657a03f6c35533b452909b0a723013055783ba95eaea467344d77cce6bd6f->enter($__internal_4bb657a03f6c35533b452909b0a723013055783ba95eaea467344d77cce6bd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    ";
        // line 68
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_4bb657a03f6c35533b452909b0a723013055783ba95eaea467344d77cce6bd6f->leave($__internal_4bb657a03f6c35533b452909b0a723013055783ba95eaea467344d77cce6bd6f_prof);

    }

    public function getTemplateName()
    {
        return "@OCCore/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 68,  186 => 67,  180 => 66,  173 => 55,  167 => 54,  159 => 13,  157 => 12,  151 => 11,  139 => 9,  129 => 71,  127 => 66,  120 => 62,  112 => 56,  110 => 54,  106 => 52,  100 => 50,  95 => 48,  89 => 46,  87 => 45,  81 => 42,  76 => 39,  70 => 37,  68 => 36,  64 => 35,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# src/OC/CoreBundle/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*       {# On charge le CSS de bootstrap depuis le site directement #}*/
/*       <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*     {% endblock %}*/
/*   </head>*/
/* */
/*   <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>Ma plateforme d'annonces</h1>*/
/*       <p>*/
/*         Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.*/
/*       </p>*/
/*       <p>*/
/*         <a class="btn btn-primary btn-lg" href="https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2">*/
/*           Participer au MOOC »*/
/*         </a>*/
/*       </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3>Les annonces</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('oc_platform_home') }}">Accueil</a></li>*/
/*           {% if is_granted('ROLE_AUTEUR') %}*/
/*             <li><a href="{{ path('oc_platform_add') }}">Ajouter une annonce</a></li>*/
/*           {% endif %}*/
/*         </ul>*/
/* */
/*         <h4>Dernières annonces</h4>*/
/*         {{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/* */
/*         <h3>Utilisateur</h3>*/
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*           Connecté en tant que {{ app.user.username }}*/
/*           <br>*/
/*           <a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/*         {% else %}*/
/*           <a href="{{ path('fos_user_security_login') }}">Connexion</a>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*       <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>*/
/*     </footer>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/*   </body>*/
/* </html>*/
/* */
