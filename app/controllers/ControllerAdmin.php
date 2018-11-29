<?php

class ControllerAdmin extends Controller{
    public function action_index()
    {
        $this->view->template = 'template_admin_view';
        $this->view->page = 'page_admin_index_view';
        $this->view->render();
    }
}
