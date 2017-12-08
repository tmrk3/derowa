<?php

// TODO: Consider to consolidate with DERequest
// Extract parameters from URL
class DEParams {
    
    protected $params = array();
    protected $blank_if_null = FALSE;
    
    public function __construct ($blank_if_null) {
        $params = array();
        if (null === $blank_if_null){$blank_if_null = FALSE;}
        $this->blank_if_null = $blank_if_null;
    }
    
    public function get ($k) {
        $val = null;
        if (array_key_exists($k, $this->params)) {
            $val = $this->params[$k];
        }
        if ($this->blank_if_null && null === $val) {$val = "";} 
        return $val;
    }
    
    public function set ($k, $val) {
        $this->params[$k] = $val;
        return $this;
    }
    
    function extract_request_param ($request_data) {
        foreach ($request_data as $r) {
            $ks = array_keys($r);
            foreach ($ks as $k) {
                    $this->set($k, $r[$k]);
            }
        }
        $ra = $this->get("ra");
        if ($this->get("ra") == "") {
            $ra = $this->extract_action("ra", $request_data);
        }
        $this->set("route_action" , $ra);
        $this->set("route_current", $this->get("rc"));
        $this->set("route_next"   , $this->get("rn"));
        return $this;
    }
    
    function extract_action ($search_key, $request_data) {
        foreach ($request_data as $r) {
            foreach ($r as $k=>$v) {
                $strs = explode("-", $k);
                if (count($strs) == 0) {continue;}
                if (count($strs) == 1) {continue;}
                if ($strs[0] == $search_key) {
                    return $strs[1];
                }
            }
        }
        return "";
    }
}
