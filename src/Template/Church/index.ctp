<!DOCTYPE html>
<html lang="ja">
<html>

<?= $this->element('header');?>

<div class="contents bg1 mt-top">
    <div class="inner">

        <section>

            <h2>真イエス教会｜日本</h2>

            <table class="ta1">
                <tr>
                    <th colspan="2" class="tamidashi"><?= h($name); ?></th>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td><?= h($address); ?></td>
                </tr>
                <tr>
                    <th>地図</th>
                    <td><iframe src="<?= h($map); ?>" width="400" height="500" frameborder="0" style="border:0" allowfullscreen></iframe></td>
                </tr>
                <tr>
                    <th>見出し</th>
                    <td>ここに説明など入れて下さい。サンプルテキスト。</td>
                </tr>
                <tr>
                    <th>見出し</th>
                    <td>ここに説明など入れて下さい。サンプルテキスト。</td>
                </tr>
                <tr>
                    <th>見出し</th>
                    <td>ここに説明など入れて下さい。サンプルテキスト。</td>
                </tr>
                <tr>
                    <th>見出し</th>
                    <td>ここに説明など入れて下さい。サンプルテキスト。</td>
                </tr>
                <tr>
                    <th>見出し</th>
                    <td>ここに説明など入れて下さい。サンプルテキスト。</td>
                </tr>
            </table>

        </section>
    </div>
    <!--/inner-->
</div>
<!--/contents-->

<?= $this->element('footer');?>

</html>