<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ContactTable extends Table {
    public function validationDefault(Validator $validator) {
        $validator->notEmpty('name', 'お名前を入力してください')
                  ->notEmpty('email', 'メールアドレスを入力してください')
                  ->add('email', 'validFormat', ['rule' => 'email', 'message' => '正しいメールアドレスを入力してください'])
                  ->notEmpty('inquiry', 'お問い合わせ項目を選択してください')
                  ->notEmpty('message', 'お問い合わせ内容を選択してください');
        return $validator;
    }
}

