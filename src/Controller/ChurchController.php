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
        $tel = '81(04)2994-8336';
        $map = 'https://goo.gl/a8q8iT';
        $detailUrl = 'http://members.ja.tjc.org/sites/ja/jp/tokyo/mychurch.aspx';
        $trafficGuide = <<<EOT
電車でお越しの方<br/>
新宿駅より：<br/>
新宿駅からJR中央線 西国分寺駅でJR武蔵野線に乗り換え、新秋津駅下車。徒歩10分。<br/>
池袋駅より：<br/>
池袋駅から西武池袋線の準急列車または通勤快速列車で秋津駅下車。徒歩15分。
EOT;
        $timeGuide = <<<EOT
土曜日（安息日）<br/>
10:30 - 11:00 &nbsp;&nbsp;祈り会<br/>
11:10 - 12:10 &nbsp;&nbsp;午前の集会<br/>
13:30 - 14:00 &nbsp;&nbsp;讃美歌練習<br/>
14:10 - 15:10 &nbsp;&nbsp;午後の集会
EOT;
        $remarks = '';

        switch ($paramVal) {
            case 'sumida':
                $name = '墨田教会';
                $img = '';
                $postalCode = '131-0042';
                $address = '東京都墨田区東墨田1-5-10';
                $tel = '81(33)619-7233';
                $map = 'https://goo.gl/G5BbpB';
                $detailUrl = 'http://members.ja.tjc.org/sites/ja/jp/sumida/mychurch.aspx';
                $trafficGuide = <<<EOT
電車でお越しの方<br/>
亀戸駅より：<br/>
総武線亀戸駅→東武亀戸線小村井駅→徒歩10分<br/>
平井駅より：<br/>
総武線平井駅→徒歩25分
EOT;
                $timeGuide = <<<EOT
金曜日<br/>
19:00 - 20:00 &nbsp;&nbsp;集会<br/>                
土曜日（安息日）<br/>
10:30 - 11:00 &nbsp;&nbsp;祈り会<br/>
11:10 - 12:10 &nbsp;&nbsp;午前の集会<br/>
13:30 - 14:00 &nbsp;&nbsp;昼特別集会（賛美歌、聖書朗読等）<br/>
14:10 - 15:10 &nbsp;&nbsp;午後の集会<br/>
15:30 - 16:30 &nbsp;&nbsp;団契集会
EOT;
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
                $postalCode = '220-0042';
                $address = '神奈川県横浜市西区戸部町4-110';
                $tel = '81 (45) 231-2188';
                $map = 'https://goo.gl/hBuVZq';
                $detailUrl = 'http://members.ja.tjc.org/sites/ja/jp/yokohama/mychurch.aspx';
                $trafficGuide = <<<EOT
電車でお越しの方<br/>
横浜駅より：<br/>
横浜駅からJR京浜東北線にて桜木町駅下車。徒歩10分。<br/>
EOT;
                $timeGuide = <<<EOT
土曜日（安息日）<br/>
10:30 - 11:10 &nbsp;&nbsp;祈り会<br/>
11:10 - 12:10 &nbsp;&nbsp;午前の集会<br/>
13:30 - 14:10 &nbsp;&nbsp;讃美歌練習<br/>
14:10 - 15:10 &nbsp;&nbsp;午後の集会<br/>
15:10 - 16:30 &nbsp;&nbsp;団契集会
EOT;
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

        $this->set(compact('name', 'img', 'postalCode', 'address', 'tel', 'map', 'detailUrl', 'trafficGuide', 'timeGuide', 'remarks'));
    }
}