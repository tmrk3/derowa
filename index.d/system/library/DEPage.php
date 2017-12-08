<?php
class DEPage extends DEObject {
    
    // Template path
    public $template_path;
    
    /** 
     * Response type
     * Value is print_html, redirect, download or json
     */
    public $response_type;
    public $redirect_url;

    public $content_type;
    public $filename;
    public $content;
    public $json;

    public $html_dir;
    
    public $request_param;
    
    // Constructor
    public function __construct () {
        $this->response_type = "print_html";
        $this->json = array(
            "anchor"    =>false,
            "error"     =>false,
            "message"   =>false,
            "data"      =>false
        );
    }

    // Initialize
    public function init () {
        $this->tmp = $this->request_param->get("tmp");
    }
    
    // Action of default
    // Return: Page object
    public function action_default () {
        return $this;
    }
    
    // Get Page name (Work after send_result method)
    public function get_pagename () {
        return "Default Page of DEPage";
    }

    /**
     * Instance method to create another Page object
     * @param Page name(Class name)
     * @return HTTP response and contents
     */
    public function create_page ($page) {
        $module_name = "Page_".$page;
        $new_page = new $module_name;
        $new_page->set_request_param($this->request_param);
        $new_page->set_html_dir($this->html_dir);
        $new_page->init();
        // $new_page->action_default();
        return $new_page;
    }

    // Set reuqest data
    public function set_request_param ($request_param) {
        $this->request_param = $request_param;
        return $this;
    }

    // Set html base dir
    public function set_html_dir ($html_dir) {
        $this->html_dir = $html_dir;
        return $this;
    }
    
    // TODO derclare content type and response types
    public static $PRINT;
    public static $REDIRECT;
    public static $JSON;


    // Send content
    public function send_result() {
        if ($this->response_type == "print_html") {
            include $this->html_dir."/".$this->template_path;
        }
        else if ($this->response_type == "redirect") {
            // print_r("Location: ".$this->redirect_url);
            header("Location: ".$this->redirect_url);
        }
        else if ($this->response_type == "download") {
            header("Content-type: ".$this->content_type);
            header("Content-Disposition: attachment; filename="."\"".$this->filename."\"");
            echo $this->content;
        }
        else if ($this->response_type == "json") {
            header("Content-type: "."application/json");
            echo json_encode($this->json);
        }
        else {
            //
        }
    }
    
    
}
