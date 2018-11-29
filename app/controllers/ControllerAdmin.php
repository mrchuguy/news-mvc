<?php

class ControllerAdmin extends Controller{
    protected $name;
    protected $text;
    public $date;
    public function action_index()
    {
        $this->view->template = 'template_admin_view';
        $this->view->page = 'page_admin_index_view';
        $this->view->render();
    }
    public function action_add(){
        $this->name = filter_input(INPUT_POST, 'name');
        $this->text = filter_input(INPUT_POST, 'text');
        $this->date = time();
        $this->model = new ModelAdmin();
        $this->model->add_data($this->name, $this->text, $this->date);
        header('Location: /news/index');
    }
}
