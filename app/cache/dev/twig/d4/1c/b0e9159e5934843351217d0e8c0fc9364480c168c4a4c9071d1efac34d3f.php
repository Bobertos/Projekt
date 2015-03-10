<?php

/* AAKRStoreBundle:Default:dodaj_recenzje.html.twig */
class __TwigTemplate_d41cb0e9159e5934843351217d0e8c0fc9364480c168c4a4c9071d1efac34d3f extends Twig_Template
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
        // line 2
        echo "Dodaje recenzje<br/>

";
        // line 5
        echo "<form action=\"/~s177015/app_dev.php/doraj_recenzje/";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["tytul"]) ? $context["tytul"] : $this->getContext($context, "tytul")), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
";
        // line 8
        echo "   ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

   <input type=\"submit\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "AAKRStoreBundle:Default:dodaj_recenzje.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  23 => 5,  19 => 2,);
    }
}
