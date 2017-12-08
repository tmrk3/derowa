<?php
class DEResponse {
    
    protected $my_response = array();
    
    public function __construct () {
    
    }
    
    public function run () {
        
    }
    
    public function get_response () {
        
    }
    
    public function get ($key) {
        if ($this->my_response[$key] != null) {
            return $this->my_response[$key];
        }
        return null;
    }
    
}
