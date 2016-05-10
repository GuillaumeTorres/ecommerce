<?php

/* EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_767e9f7ac6deaec786fb3e53b36e3dc7869e9227ed6964d177eaac9f052ff9d9 extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("rechercheProduits");
        echo "\" method=\"POST\" class=\"navbar-form form-search pull-right\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche"), 'widget');
        echo "
    <button type=\"submit\" class=\"btn\">Rechercher</button>
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  24 => 2,  19 => 1,  179 => 64,  174 => 31,  169 => 12,  164 => 7,  159 => 6,  153 => 5,  148 => 65,  146 => 64,  142 => 63,  138 => 62,  130 => 57,  117 => 50,  102 => 40,  100 => 39,  91 => 32,  89 => 31,  83 => 27,  81 => 26,  76 => 24,  61 => 13,  59 => 12,  55 => 11,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 1,  127 => 43,  121 => 51,  118 => 39,  109 => 45,  98 => 30,  94 => 29,  88 => 27,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  63 => 18,  56 => 13,  53 => 12,  51 => 10,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
