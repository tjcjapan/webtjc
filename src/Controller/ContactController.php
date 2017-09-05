<?php
namespace App\Controller;

class ContactController extends AppController {

    public function index(){
        $this->viewBuilder()->setLayout('');
    }
}