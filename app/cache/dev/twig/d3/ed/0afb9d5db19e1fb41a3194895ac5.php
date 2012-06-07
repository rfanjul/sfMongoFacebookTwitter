<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_d3ed0afb9d5db19e1fb41a3194895ac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html xmlns:fb=\"http://www.facebook.com/2008/fbml\">
\t<!--[if lt IE 7]> <html class=\"no-js ie6 oldie\" lang=\"en\"> <![endif]-->
\t<!--[if IE 7]>    <html class=\"no-js ie7 oldie\" lang=\"en\"> <![endif]-->
\t<!--[if IE 8]>    <html class=\"no-js ie8 oldie\" lang=\"en\"> <![endif]-->
\t<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

\t<title></title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">
\t<meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">


  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t

</head>
<body>
    <!-- inside a twig template -->
\t\t";
        // line 22
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "fbAsyncInit" => "onFbInit();"));
        echo "

<div id=\"container\">
\t<div id=\"page\">
\t\t<div>
        ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 28
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">
                ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 33
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 35
        echo "    </div>

    ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 38
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "\">
        ";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 42
        echo "
    <div>
        ";
        // line 44
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 46
        echo "    </div>
\t\t
\t</div>
 \t<div id=\"central\">
\t</div>
\t<div id=\"footer\">
\t  <ul>
\t\t<li>
\t\t\t<img src=\"/images/icons/twitter.png\" />
\t\t\t<p>
\t\t\t\tSiguenos en nuestra cuenta de twitter <a href=\"#\">@quorra</a>
\t\t\t</p>
\t\t</li>
\t\t<li>
\t\t\t<img src=\"/images/icons/help.png\" />
\t\t\t<p>
\t\t\t\tFor help & support head to
\t\t\t\tour <a href=\"#\">GetSatisfaction</a> page.
\t\t\t</p>
\t\t</li>
\t\t<li>
\t\t\t<img src=\"/images/icons/copy.png\" />
\t\t\t<p>
\t\t\t\tCopyright 2010 My 
\t\t\t\tCompany, LLC.
\t\t\t</p>
\t\t</li>
\t  <ul>
\t</div>
</div>
<script>
  function goLogIn(){
      window.location = \"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html", null, true);
        echo "\";
  }

  function onFbInit() {
      if (typeof(FB) != 'undefined' && FB != null ) {
          FB.Event.subscribe('auth.statusChange', function(response) {
              setTimeout(goLogIn, 500);
          });
      }
  }
</script>
</body>
</html>
";
    }

    // line 44
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 45
        echo "        ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
