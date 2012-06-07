<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1da2ee7dde791f813b17df90bb91ccd7 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_jsonencode_filter($this->getAttribute($this->getContext($context, "exception"), "toarray"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
