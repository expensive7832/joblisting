<?php
  class Template{
    protected $temp;
    protected $vars = array();

    public function __construct($temp){
        $this->temp = $temp;
    }

    public function __set($key, $val){
        $this->vars[$key] = $val;
    }

    public function __get($key){
        $this->vars[$key];
    }

    public function __toString(){
        extract($this->vars);
        chdir(dirname($this->temp));
        ob_start();
        return include basename($this->temp);
        ob_get_clean();
    }
 }



?>