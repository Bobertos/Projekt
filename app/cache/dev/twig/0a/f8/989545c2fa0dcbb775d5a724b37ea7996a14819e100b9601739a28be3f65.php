<?php

/* AAKRStoreBundle:Default:pokaz_film.html.twig */
class __TwigTemplate_0af8989545c2fa0dcbb775d5a724b37ea7996a14819e100b9601739a28be3f65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    

    
<h2>Film:</h2>


Tytuł Filmu:<br/><br/>

<h12>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "tytul", array()), "html", null, true);
        echo "</h1> <br/><br/>

Gatunek:<br/><br/>

<h12>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "gatunek", array()), "html", null, true);
        echo "</h1><br/><br/>

Aktorzy:<br/><br/>

<h12>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "aktorzy", array()), "html", null, true);
        echo "</h1><br/><br/>

Cena:<br/><br/>

<h12>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "cena", array()), "html", null, true);
        echo "</h1><br/><br/>

<a href=\"/~s177015/app_dev.php/doraj_recenzje/";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "id", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "tytul", array()), "html", null, true);
        echo "\"> Dodaj recenzje </a><br/><br/>
<a href=\"/~s177015/app_dev.php/do_koszyka/";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "id", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["idUzytkownika"]) ? $context["idUzytkownika"] : $this->getContext($context, "idUzytkownika")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "cena", array()), "html", null, true);
        echo "\"> Dodaj do koszyka </a><br/><br/>



Recenzje:<br/><br/>

<ul>
     ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recenzjeFilmu"]) ? $context["recenzjeFilmu"] : $this->getContext($context, "recenzjeFilmu")));
        foreach ($context['_seq'] as $context["_key"] => $context["recenzja"]) {
            // line 35
            echo "         <li>
";
            // line 37
            echo "                ";
            echo twig_escape_filter($this->env, $context["recenzja"], "html", null, true);
            echo "
";
            // line 39
            echo "             
             
         </li>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recenzja'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo " </ul>

 

";
    }

    public function getTemplateName()
    {
        return "AAKRStoreBundle:Default:pokaz_film.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 43,  107 => 39,  102 => 37,  99 => 35,  95 => 34,  81 => 27,  75 => 26,  70 => 24,  63 => 20,  56 => 16,  49 => 12,  39 => 4,  36 => 3,  11 => 1,);
    }
}
