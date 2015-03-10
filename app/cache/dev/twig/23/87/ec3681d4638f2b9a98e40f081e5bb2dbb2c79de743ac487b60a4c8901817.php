<?php

/* AAKRStoreBundle:Default:dodaj_film.html.twig */
class __TwigTemplate_2387ec3681d4638f2b9a98e40f081e5bb2dbb2c79de743ac487b60a4c8901817 extends Twig_Template
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
        echo "
<form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("aakr_store_dodaj_film");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
   ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

   <input type=\"submit\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "AAKRStoreBundle:Default:dodaj_film.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 2,  19 => 1,);
    }
}
