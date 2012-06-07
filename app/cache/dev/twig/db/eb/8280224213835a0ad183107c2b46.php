<?php

/* QuorraCoreBundle:Default:index.html.twig */
class __TwigTemplate_dbeb8280224213835a0ad183107c2b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "QuorraCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"social-networks\">\t
\t<!-- inside a twig template -->
\t";
        // line 7
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 8
            echo "\t\t<p> 
\t\t\t<a href=\"/profile\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "</a>
\t\t</p>
\t";
        } else {
            // line 12
            echo "\t";
            echo $this->env->getExtension('facebook')->renderLoginButton(array("autologoutlink" => true));
            echo "
\t";
        }
        // line 14
        echo "\t\t
\t
</div>
<ul>
\t<li>
\t\t<img src=\"/images/iphone.png\" />
\t</li>
\t<li>
\t\t<div class=\"clear h60\"></div>
\t\t<img src=\"/images/logo.png\" />
\t\t<p>
\t\t\tQuorra.es es el portal de icompra/venta de divisas para los pequeños inversones. Da la opción de jugar con pequeñas cantidades de dinero con las que puedas demostrar que este es tu negocio.
\t\t\t<br /><br/>
\t\t\t ¿ Como ? Quorra.com te proporcionará un perfil con tu historico, con el que podrás demostrar a los inversores que pueden confiar en ti, para que manejes su dinero. Serás un gran broker.

\t\t</p>
\t\t<div class=\"clear h60\"></div>
\t\t<a href=\"#\" class=\"download-demo\">
\t\t\t<img src=\"/images/buttons/demo.png\" />
\t\t</a>
\t</li>\t\t\t
</ul>
";
    }

    public function getTemplateName()
    {
        return "QuorraCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
