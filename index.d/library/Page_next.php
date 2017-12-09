<?php
class Page_next extends DEPage {
    
    public $param1;
    
    public function __construct () {
        parent::__construct();
        $this->template_path = $GLOBALS["sys_vars"]["templates"]["next"];

    }

    public function init () {
        $this->param1 = "";
    }
    
    public function action_default () {
        return $this;
    }
    
    
    public function set_param1 ($v) {
        $this->param1 = $v;
    }
    
    public function get_param1 () {
        return $this->param1;
    }
    
}
