<?php

/* AAKRStoreBundle:Default:koszyk.html.twig */
class __TwigTemplate_77298b71b846049670adb65b80c763b8452eebc35f328fbc4bc6ca688d48b318 extends Twig_Template
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
<h1>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["komunikat"]) ? $context["komunikat"] : $this->getContext($context, "komunikat")), "html", null, true);
        echo "</h1><br/><br/>
";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["idUzytkownika"]) ? $context["idUzytkownika"] : $this->getContext($context, "idUzytkownika")), "html", null, true);
        echo "<br/><br/>
<h2>Koszyk</h2>

 <ul>
     ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filmy"]) ? $context["filmy"] : $this->getContext($context, "filmy")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 11
            echo "         <li>
            <a href=\"/ShopProject/web/app_dev.php/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "id", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["idUzytkownika"]) ? $context["idUzytkownika"] : $this->getContext($context, "idUzytkownika")), "html", null, true);
            echo "\">
                ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "tytul", array()), "html", null, true);
            echo "   ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "cena", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "id", array()), "html", null, true);
            echo "
            </a>
             
             
         </li>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo " </ul>
 

";
    }

    public function getTemplateName()
    {
        return "AAKRStoreBundle:Default:koszyk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  66 => 13,  60 => 12,  57 => 11,  53 => 10,  46 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
