<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__486f957d3c4ca2ff0855a56437e2d62ef074666c62e0c4a14631cf37324d9caa */
class __TwigTemplate_39b6ed2f757487a02eb695aa5a8aa61d0ddea240e1e642dc4d619e3189d97c38 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<ul class=\"ft-list\">
<li class=\"fav\"><i class=\"far fa-regular fa-heart\"></i></li>
<li class=\"dnw\"><i class=\"fas fa-cloud-download-alt\"></i></i></li>
<li class=\"shr\"><i class=\"fas fa-share-alt\"></i></li>
<li class=\"view\">View Details</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "__string_template__486f957d3c4ca2ff0855a56437e2d62ef074666c62e0c4a14631cf37324d9caa";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__486f957d3c4ca2ff0855a56437e2d62ef074666c62e0c4a14631cf37324d9caa", "");
    }
}
