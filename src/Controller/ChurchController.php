<?php
namespace App\Controller;

class ChurchController extends AppController {

    public function index(){
        $name = $this->request->param('name');
        $this->viewBuilder()->setLayout('');

        switch ($name) {
            case 'tokyo':
                $name = '東京教会';
                $address = '東京';
                $tel = '03-2345-8789';
                $map = 'https://goo.gl/Roquxp';
                break;
            case 'sumida':
                $name = '墨田教会';
                $address = '墨田';
                $tel = '03-2345-8789';
                $map = 'https://goo.gl/Roquxp';
                break;
            default:
                $name = '東京教会';
                $address = '東京';
                $tel = '03-2345-8789';
                $map = 'https://goo.gl/Roquxp';
        }

        $this->set(compact('name', 'tel', 'address', 'map'));
    }
}