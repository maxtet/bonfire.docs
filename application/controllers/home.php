<?php

class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->tpl->set_global('title', 'Bonfire');
    }

    public function index()
    {
        $this->tpl->view('home');
    }
    
    public function view($cat, $post)
    {
        $data = array(
            'requirements' => array(
                'title' => 'Системные требования - Bonfire'
            ),
            'license' => array(
                'title' => 'Лицензия - Bonfire'
            ),
            'changelog' => array(
                'title' => 'Список изменений - Bonfire'
            )
        );
        $this->tpl->set_global('title', $data[$post]['title']);
        $this->tpl->view($cat.'/'.$post);
    }

}