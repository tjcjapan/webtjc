<!DOCTYPE html>
<html lang="ja">
<html>

<?= $this->element('header');?>

<div class="contents">
    <div class="inner">

        <section>

            <h2>真イエス教会｜日本</h2>

            <table class="ta1">
                <tr>
                    <th colspan="2" class="tamidashi"><?= h($name); ?></th>
                </tr>
                <tr>
                    <th>外観</th>
                    <td><?= h($img); ?></td>
                </tr>
                <tr>
                    <th>郵便番号</th>
                    <td><?= h($postalCode); ?></td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td><?= h($address); ?></td>
                </tr>
                <tr>
                    <th>地図</th>
                    <td>
                        <div class="ggmap">
                            <iframe src="<?= h($map); ?>" width="350" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><?= h($tel); ?></td>
                </tr>
                <tr>
                    <th>礼拝案内</th>
                    <td><?= h($timeGuide); ?></td>
                </tr>
                <tr>
                    <th>交通案内</th>
                    <td><?= h($trafficGuide); ?></td>
                </tr>
                <tr>
                    <th>詳細紹介</th>
                    <td><?= $detailUrl; ?></td>
                </tr>
            </table>

        </section>
    </div>
    <!--/inner-->
</div>
<!--/contents-->

<?= $this->element('footer');?>

</html>