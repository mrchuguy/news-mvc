<?php

class View
{
    public $template;
    public $page;
    public $data;

    public function render(){
        include_once 'app/views/'.$this->template.'.php';
    }
}