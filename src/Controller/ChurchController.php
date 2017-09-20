<?php
namespace App\Controller;

class ChurchController extends AppController {

    public function index(){
        $paramVal = $this->request->param('name');
        $this->viewBuilder()->setLayout('');

        $name = '東京教会';
        $img = '';
        $postalCode = '359-0025';
        $address = '埼玉県所沢市上安松341-1';
        $tel = '03-2345-8789';
        $map = 'https://goo.gl/Roquxp';
        $detailUrl = "<a href='http://members.ja.tjc.org/sites/ja/jp/tokyo/mychurch.aspx'>詳細紹介へ</a>";
        $trafficGuide = '';
        $timeGuide = '';

        switch ($paramVal) {
            case 'tokyo':
                $name = '東京教会';
                $img = '';
                $postalCode = '359-0025';
                $address = '埼玉県所沢市上安松341-1';
                $tel = '+81(04)2994-8336';
                $map = 'https://goo.gl/Roquxp';
                $detailUrl = "<a href='http://members.ja.tjc.org/sites/ja/jp/tokyo/mychurch.aspx'>詳細紹介へ</a>";
                $trafficGuide = '';
                $timeGuide = '';
                break;
            case 'sumida':
                $name = '墨田教会';
                $img = '';
                $postalCode = '359-0025';
                $address = '墨田';
                $tel = '03-2345-8789';
                $map = 'https://goo.gl/Roquxp';
                $detailUrl = '';
                $trafficGuide = '';
                $timeGuide = '';
                break;
            case 'chiba':
                $name = '千葉教会';
                $img = '';
                $postalCode = '359-0025';
                $address = '千葉';
                $tel = '03-2345-8789';
                $map = 'https://goo.gl/Roquxp';
                $detailUrl = '';
                $trafficGuide = '';
                $timeGuide = '';
                break;
            case 'yokohama':
                $name = '横浜教会';
                $img = '';
                $postalCode = '359-0025';
                $address = '横浜';
                $tel = '03-2345-8789';
                $map = 'https://goo.gl/Roquxp';
                $detailUrl = '';
                $trafficGuide = '';
                $timeGuide = '';
                break;
            case 'osaka':
                $name = '大阪祈祷所';
                $img = '';
                $postalCode = '359-0025';
                $address = '大阪';
                $tel = '03-2345-8789';
                $map = 'https://goo.gl/Roquxp';
                $detailUrl = '';
                $trafficGuide = '';
                $timeGuide = '';
                break;
        }

        $this->set(compact('name', 'img', 'postalCode', 'address', 'tel', 'map', 'detailUrl', 'trafficGuide', 'timeGuide'));
    }
}