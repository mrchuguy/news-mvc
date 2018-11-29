<?php

class ControllerNews extends Controller
{
    public function action_index() {
        $this->view->template = 'template_news_view';
        $this->view->page='page_news_index_view';
        $this->model = new ModelNews();
        $this->view->data = $this->model->get_data();
        $this->view->render();
    }
}