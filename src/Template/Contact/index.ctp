<!DOCTYPE html>
<html lang="ja">
<html>

<?= $this->element('header');?>

<div class="contents">
    <div class="inner">

        <section>
            <?= $this->Form->create($entity, ['type' => 'post',
                                            'url' => ['controller' => 'contact']]);?>
            <h2>お問合わせ</h2>
            <table class="ta1">
                <tr>
                    <th colspan="2" class="tamidashi"><span class="required">※</span>マークは入力必須です</th>
                </tr>
                <tr>
                    <th>お名前<span class="required">※</span></th>
                    <td><?= $this->Form->input('name', ['type'=>'text',
                                                        'class' => 'ws',
                                                        'label'=>false,
                                                        'size'=>'20px',
                                                        'required' => false,
                                                        'error' => false]); ?>
                        <div class="error-message"><?= $this->Form->error('name') ?></div>
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス<span class="required">※</span></th>
                    <td><?= $this->Form->input('email', ['type'=>'text',
                                                         'class' => 'ws',
                                                         'label'=>false,
                                                         'size'=>'50px',
                                                         'required' => false,
                                                         'error' => false]); ?>
                        <div class="error-message"><?= $this->Form->error('email') ?></div>
                    </td>
                </tr>
                <tr>
                    <th>ご住所(都道府県)</th>
                    <td>
                        <?= $this->Form->input('pref',array(
                            'type' => 'select',
                            'options' => $codes,
                            'label' => false
                        ));?>
                    </td>
                </tr>
                <tr>
                    <th>ご住所(市区町村以下)</th>
                    <td><?= $this->Form->input('address', ['type'=>'text', 'label'=>false, 'class' => 'wl', 'size'=>'80px']); ?></td>
                </tr>
                <tr>
                    <th>お問い合わせ項目<span class="required">※</span></th>
                    <td>
                        <?= $this->Form->input('inquiry',array(
                            'type' => 'select',
                            'multiple' => 'checkbox',
                            'options' => $items,
                            'label' => false,
                            'required' => false,
                            'error' => false
                        ));?>
                        <div class="error-message"><?= $this->Form->error('inquiry') ?></div>
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ詳細<span class="required">※</span></th>
                    <td>
                        <?= $this->Form->textarea('message', ['cols' => 80, 'class' => 'wl', 'rows' => 8, 'required' => false, 'error' => false]);?>
                        <div class="error-message"><?= $this->Form->error('message') ?></div>
                    </td>

                </tr>
            </table>

            <p class="c">
                <?= $this->Form->button('確認画面へ', ['type' => 'submit'])?>
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