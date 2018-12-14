<?php

/* G:\xampp\htdocs\jdih/plugins/rainlab/user/components/account/signin.htm */
class __TwigTemplate_793b318fd4d58df9a0c0f89a72793294b361ead23d27c4168735266f4ea72095 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form class=\"form-login form-listing\" data-request=\"onSignin\" data-request-flash>
    <h3 class=\"title-formlogin\">Log in Layanan Advokasi</h3>
    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 3
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 4
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "</div>
    ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 6
        echo "    <!-- <p data-control=\"flash-message\" data-interval=\"60\" class=\"success\">
        This message is created from a static element. It will go away in 5 seconds.
    </p> -->
    <span class=\"input-login icon-form\"><input type=\"text\" placeholder=\"Your Email*\" name=\"login\" id=\"userSigninLogin\" required=\"required\"><i class=\"fa fa-user\"></i></span>
    <span class=\"input-login icon-form\"><input type=\"password\" placeholder=\"Password*\" name=\"password\" id=\"userSigninPassword\" required=\"required\"><i class=\"fa fa-lock\"></i></span>
    <div class=\"flat-fogot clearfix\">
        <label class=\"float-left\">
           <span class=\"input-check\">
                <input type=\"checkbox\" id=\"rem\" name=\"check\" value=\"0\">
                <label for=\"rem\" class=\"remember\">Remember me</label> 
            </span>
        </label>
        <label class=\"float-right link-register\">
            <a href=\"reset/\">Reset your password</a>
        </label>
    </div>
    <!-- ";
        // line 22
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("captcha"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "<br> -->
    <span class=\"wrap-button\">
        <button type=\"submit\" id=\"login-button\" class=\" login-btn effect-button\" title=\"log in\">LOG IN</button>
    </span>
</form>";
    }

    public function getTemplateName()
    {
        return "G:\\xampp\\htdocs\\jdih/plugins/rainlab/user/components/account/signin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 22,  39 => 6,  30 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"form-login form-listing\" data-request=\"onSignin\" data-request-flash>
    <h3 class=\"title-formlogin\">Log in Layanan Advokasi</h3>
    {% flash %}
        <div class=\"alert alert-{{ type }}\">{{ message }}</div>
    {% endflash %}
    <!-- <p data-control=\"flash-message\" data-interval=\"60\" class=\"success\">
        This message is created from a static element. It will go away in 5 seconds.
    </p> -->
    <span class=\"input-login icon-form\"><input type=\"text\" placeholder=\"Your Email*\" name=\"login\" id=\"userSigninLogin\" required=\"required\"><i class=\"fa fa-user\"></i></span>
    <span class=\"input-login icon-form\"><input type=\"password\" placeholder=\"Password*\" name=\"password\" id=\"userSigninPassword\" required=\"required\"><i class=\"fa fa-lock\"></i></span>
    <div class=\"flat-fogot clearfix\">
        <label class=\"float-left\">
           <span class=\"input-check\">
                <input type=\"checkbox\" id=\"rem\" name=\"check\" value=\"0\">
                <label for=\"rem\" class=\"remember\">Remember me</label> 
            </span>
        </label>
        <label class=\"float-right link-register\">
            <a href=\"reset/\">Reset your password</a>
        </label>
    </div>
    <!-- {% component 'captcha' %}<br> -->
    <span class=\"wrap-button\">
        <button type=\"submit\" id=\"login-button\" class=\" login-btn effect-button\" title=\"log in\">LOG IN</button>
    </span>
</form>", "G:\\xampp\\htdocs\\jdih/plugins/rainlab/user/components/account/signin.htm", "");
    }
}
