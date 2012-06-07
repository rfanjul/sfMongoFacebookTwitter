<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a5015c245f98e9ad10c39a973bb06df7 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo $this->env->getExtension('translator')->trans("registration.email", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username"), "%confirmationUrl%" => $this->getContext($context, "confirmationUrl")), "FOSUserBundle");
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
