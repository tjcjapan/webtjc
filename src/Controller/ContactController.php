<?php
namespace App\Controller;
use Cake\Mailer\Email;
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;

class ContactController extends AppController {

    public $session;

    public function initialize()
    {
        parent::initialize();
        $this->session = $this->request->getSession();
    }

    public function index(){
        $this->viewBuilder()->setLayout('');
        $this->set('codes', Configure::read('Pref.codes'));
        $this->set('items', Configure::read('Inquiry.items'));

        $table = TableRegistry::get('Contact');
        $entity = $table->newEntity($this->request->getData());

        if($this->request->is('post')) {
            if(!$entity->errors()) {
                // sessionに入れる
                $this->session->write(['name' => $this->request->getData('name'),
                                       'email' => $this->request->getData('email'),
                                       'pref' => $this->request->getData('pref'),
                                       'address' => $this->request->getData('address'),
                                       'inquiry' => implode(',', $this->request->getData('inquiry')),
                                       'message' => $this->request->getData('message')]);
                //エラーなし、確認画面に遷移する
                $this->setAction('confirm');
            }
        }

        $this->set(compact('entity'));
    }

    public function confirm(){
        $this->viewBuilder()->setLayout('');
    }

    public function send(){
        $this->viewBuilder()->setLayout('');
        $data = ['name' => h($this->session->read('name')),
            'email' => h($this->session->read('email')),
            'pref' => h($this->session->read('pref')),
            'address' => h($this->session->read('address')),
            'inquiry_type' => h($this->session->read('inquiry')),
            'inquiry_contents' => h($this->session->read('message'))];


        // 問い合わせ内容をDBに保存する
        $table = TableRegistry::get('Contact');
        $entity = $table->newEntity($data);
        $table->save($entity);

        // 管理者にメールを送信する
        $email = new Email('default');
        $email->setFrom(['japan@yahoo.co.jp' => 'テスト'])
            ->setTo('zhimin.wang@gmo-research.jp')
            ->setTemplate('contact')
            ->setViewVars($data)
            ->setSubject('メールテスト(管理者)')
            ->send();

        // 問い合わせのものにメールを送信する
        $email->setFrom(['japan@yahoo.co.jp' => 'テスト'])
            ->setTo($this->session->read('email'))
            ->setTemplate('self')
            ->setViewVars($data)
            ->setSubject('メールテスト(自分)')
            ->send();

        // sessionをクリアする
        $this->session->destroy();

        $this->render('complete');
    }
}