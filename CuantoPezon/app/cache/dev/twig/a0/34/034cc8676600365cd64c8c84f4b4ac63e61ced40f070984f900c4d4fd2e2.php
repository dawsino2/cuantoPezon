<?php

/* ICM06CuantoPezonBundle:Default:listado.html.twig */
class __TwigTemplate_a034034cc8676600365cd64c8c84f4b4ac63e61ced40f070984f900c4d4fd2e2 extends Twig_Template
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
        echo "<h1>home de CuantoPezón.com</h1>
<table border=\"1\">
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "noticias"));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 4
            echo "    <tr>
        <td><img width=\"100\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("imagenes/" . $this->getAttribute($this->getContext($context, "noticia"), "imagen"))), "html", null, true);
            echo "\"></td>
        <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "noticia"), "titulo"), "html", null, true);
            echo "</td>
        <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "noticia"), "descripcion"), "html", null, true);
            echo "</td>
        <td><a href=\"borra/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "noticia"), "idNoticia"), "html", null, true);
            echo "\">Borrar</a></td>
        <td><a href=\"modifica/";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "noticia"), "idNoticia"), "html", null, true);
            echo "\">Modificar</a></td>
    </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</table>
<br>
<a href=\"nuevo\">Nueva Noticia</a>";
    }

    public function getTemplateName()
    {
        return "ICM06CuantoPezonBundle:Default:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
