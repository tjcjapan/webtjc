<?php
namespace App\Controller;

class TopController extends AppController {

    public function top(){
        $this->viewBuilder()->setLayout('');
    }
}