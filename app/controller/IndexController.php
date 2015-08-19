<?php

class IndexController extends Controller {

    public function index ()
    {
        $this->call->view()->display('index/index.tpl', 0);
    }

}