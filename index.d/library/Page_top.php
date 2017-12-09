<?php
class Page_top extends DEPage {
    
    public $from;
    public $text1_3;
    public $data_submit1_5;
    public $flg1_7;

    public function __construct () {
        parent::__construct();
        $this->template_path = $GLOBALS["sys_vars"]["templates"]["top"];
        
    }

    public function init () {
        $this->set_from("");
        $this->text1_3 = $this->request_param->get("text1_3");
        $this->data_submit1_5 = array();
        $this->flg1_7 = $this->request_param->get("flg1_7");
    }

    public function action_default () {
        $this->set_from("Direct or 1-1");
        return $this;
    }

    public function action_link1_2 () {
        $this->set_from("1-2");
        return $this;
    }

    public function action_submit1_3 () {
        $this->set_from("1-3");
        return $this;
    }

    public function action_submit1_4_1 () {
        $this->set_from("1_4_1");
        return $this;
    }

    public function action_submit1_4_2 () {
        $this->set_from("1_4_2");
        return $this;
    }

    public function action_submit1_4_3 () {
        $this->set_from("1_4_3");
        return $this;
    }

    public function action_submit1_4_4 () {
        $this->set_from("1_4_4");
        return $this;
    }

    public function action_submit1_5 () {
        $this->set_from("1_5");
        
        $this->data_submit1_5 = array(
            array("abc", "def"),
            array("123", "456")
        );
        return $this;
    }

    public function action_button_ajax () {
        $this->set_from("1_6");
        
        $arr = array(
            array($this->get_from()),
            array("abc", "def"),
            array("123", "456")
        );
        $this->response_type = "json";
        $this->json = $arr;
        return $this;
    }

    public function action_redirect () {
        $this->set_from("1_7");
        
        if ($this->flg1_7 == "stop") {
            return $this;
        }
        
        $this->response_type = "redirect";
        $this->redirect_url = "./?rc=top&ra=redirect&flg1_7=stop";
        return $this;
    }
    

    public function action_link_next () {
        return $this->create_page("next");
    }

    public function action_link_next_with_param () {
        $res = $this->create_page("next");
        $res->set_param1("from top");
        return $res;
    }
    
    
    public function set_from ($v) {
        $this->from = $v;
    }

    public function get_from ($enc = false) {
        $v = "";
        if ($enc == "html") {
            $v = htmlentities($this->from);
        }
        else if ($enc == "url") {
            $v = urlencode($this->from);
        }
        else {
            $v = $this->from;
        }
        return $v;
    }
}
