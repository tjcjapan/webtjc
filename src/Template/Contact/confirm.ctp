<!DOCTYPE html>
<html lang="ja">
<html>

<?= $this->element('header');?>

<div class="contents">
    <div class="inner">

        <section>
            <?= $this->Form->create('contact', ['type' => 'post',
                'url' => ['controller' => 'contact',
                    'action' => 'send']]);?>
            <h2>お問合わせ</h2>
            <table class="ta1">
                <tr>
                    <th colspan="2" class="tamidashi">入力内容をご確認ください</th>
                </tr>
                <tr>
                    <th>お名前※</th>
                    <td><?= h($this->request->session()->read('name')) ?></td>
                </tr>
                <tr>
                    <th>メールアドレス※</th>
                    <td><?= h($this->request->session()->read('email')) ?></td>
                </tr>
                <tr>
                    <th>ご住所(都道府県)</th>
                    <td><?= h($this->request->session()->read('pref')) ?></td>
                    </td>
                </tr>
                <tr>
                    <th>ご住所(市区町村以下)</th>
                    <td><?= h($this->request->session()->read('address')) ?></td>
                </tr>
                <tr>
                    <th>お問い合わせ項目※</th>
                    <td><?= h($this->request->session()->read('inquiry')) ?></td>
                </tr>
                <tr>
                    <th>お問い合わせ詳細※</th>
                    <td><?= nl2br($this->request->session()->read('message')) ?></td>
                </tr>
            </table>

            <p class="c">
                <?= $this->Form->button('送信する', ['type' => 'submit'])?>
                <?= $this->Form->end();?>
            </p>
            </form>

        </section>

    </div>
    <!--/inner-->
</div>
<!--/contents-->

<?= $this->element('footer');?>

</html>