<?php

/* FOSFacebookBundle::loginButton.html.twig */
class __TwigTemplate_0becf349e671e2b538312900e12a3ac1 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<fb:login-button scope=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "scope"), "html", null, true);
        echo "\" autologoutlink=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "autologoutlink"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
        echo "</fb:login-button>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::loginButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
