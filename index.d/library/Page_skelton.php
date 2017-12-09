<?php
class Page_skelton extends DEPage {

    public function __construct () {
        parent::__construct();
        $this->template_path = $GLOBALS["sys_vars"]["templates"]["skelton"];
        
    }

    public function init () {
        //
    }

    public function action_default () {
        return $this;
    }

}
