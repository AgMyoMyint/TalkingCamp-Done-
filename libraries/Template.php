<?php

class Template{

    //Path to Template
    protected $template;
    //Variables to pass in
    protected $vars= array();

    public function  __construct($template){
        $this->template = $template;
    }

    public function __get($key){
        return $this->vars[$key];
    }


    public function __set($key,$value){
        $this->vars[$key] = $value;
    }


    public function __toString()
    {
        // TODO: Implement __toString() method.
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();

        include basename($this->template);

        return ob_get_clean();


    }
}