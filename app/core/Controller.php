<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29.11.2018
 * Time: 19:58
 */

abstract class Controller
{
    /**
     *
     * @var Model
     */
    protected $model;
    /**
     *
     * @var View
     */
    protected $view;

    public function __construct() {
        $this->view = new View();
    }

    abstract public function action_index();
}