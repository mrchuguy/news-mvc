<?php

class Model
{
    protected $db;

    public function __construct() {
        $this->db = new mysqli('localhost', 'root', '', 'r2d2-news');
    }

    public function get_data(){}
}