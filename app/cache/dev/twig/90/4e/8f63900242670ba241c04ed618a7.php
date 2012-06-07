<?php

/* QuorraCoreBundle::base.html.twig */
class __TwigTemplate_904e8f63900242670ba241c04ed618a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
\t\t";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "\t</div>
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
        // line 59
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

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "QuorraCoreBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
