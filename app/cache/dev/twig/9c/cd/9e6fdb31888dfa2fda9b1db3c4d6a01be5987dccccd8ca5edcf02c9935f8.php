<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_9ccd9e6fdb31888dfa2fda9b1db3c4d6a01be5987dccccd8ca5edcf02c9935f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  24 => 4,  19 => 1,  125 => 44,  121 => 42,  114 => 38,  109 => 35,  100 => 31,  94 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  75 => 23,  71 => 21,  67 => 20,  64 => 19,  62 => 18,  57 => 15,  54 => 14,  48 => 12,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
