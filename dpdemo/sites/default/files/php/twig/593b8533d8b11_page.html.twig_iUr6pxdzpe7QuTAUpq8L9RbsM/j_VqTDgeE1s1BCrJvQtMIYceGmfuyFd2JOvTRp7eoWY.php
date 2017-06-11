<?php

/* themes/custom/mytheme/templates/page.html.twig */
class __TwigTemplate_3122145585324792dde1f8c5feafc115cf92e8cf24e1489989b36e1f6e9c967f extends Twig_Template
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
        $tags = array("if" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"page\">
    ";
        // line 2
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "headline", array())) {
            // line 3
            echo "    <section id=\"headline\">
       ";
            // line 4
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "headline", array()), "html", null, true));
            echo " 
    </section>
    ";
        }
        // line 7
        echo "    <header id=\"header\">
        <nav class=\"navbar navbar-inverse\">
            <div class=\"container-fluid\">
                
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    ";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
                </div>
            </div>
        </nav>
   
    </header>
    <section id=\"main\">
    <div class=\"container\">
        <div class=\"row\">
            
            <div id=\"content\" class=\"col-md-9 col-sm-9 col-xs-12\">
                ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
            </div>
            ";
        // line 25
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array())) {
            // line 26
            echo "            <aside id=\"sidebar\" class=\"sidebar col-md-3 col-sm-3 col-xs-12\">
                ";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array()), "html", null, true));
            echo "
            </aside>
            ";
        }
        // line 30
        echo "        </div>
    </div>
    </section>
     ";
        // line 33
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 34
            echo "    <footer id=\"footer\" class=\"container-fluid text-center\">
        
            ";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
        
    </footer>
    ";
        }
        // line 40
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  105 => 36,  101 => 34,  99 => 33,  94 => 30,  88 => 27,  85 => 26,  83 => 25,  78 => 23,  64 => 12,  57 => 7,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"page\">
    {% if page.headline %}
    <section id=\"headline\">
       {{page.headline}} 
    </section>
    {% endif %}
    <header id=\"header\">
        <nav class=\"navbar navbar-inverse\">
            <div class=\"container-fluid\">
                
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    {{page.header}}
                </div>
            </div>
        </nav>
   
    </header>
    <section id=\"main\">
    <div class=\"container\">
        <div class=\"row\">
            
            <div id=\"content\" class=\"col-md-9 col-sm-9 col-xs-12\">
                {{page.content}}
            </div>
            {% if page.sidebar %}
            <aside id=\"sidebar\" class=\"sidebar col-md-3 col-sm-3 col-xs-12\">
                {{page.sidebar}}
            </aside>
            {% endif %}
        </div>
    </div>
    </section>
     {% if page.footer %}
    <footer id=\"footer\" class=\"container-fluid text-center\">
        
            {{page.footer}}
        
    </footer>
    {% endif %}
</div>";
    }
}
