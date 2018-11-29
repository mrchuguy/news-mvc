<?php

abstract class Model
{
    protected $db;

    public function __construct() {
        $this->db = new mysqli('localhost', 'root', '', 'r2d2-news');
    }

    abstract public function get_data();
}