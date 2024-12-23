<?php


class HomeController extends Controller {

    public function index() {
        $this->f3->set('email', '');
        $this->f3->set('errors', null);
        echo Template::instance()->render('index.html');
    }

}
