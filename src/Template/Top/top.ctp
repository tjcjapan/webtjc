<!DOCTYPE html>
<html lang="ja">
<html>

<?= $this->element('header');?>

<div class="contents bg1 mt-top">
    <div class="inner">

        <section>

            <h2>真イエス教会｜日本</h2>

            <div class="list">
                <a href="/church/tokyo">
                    <img src="img/sample1.jpg" alt="" class="img">
                    <h4>東京教会</h4>
                    <p>ここに説明など入れて下さい。</p>
                </a>
            </div>

            <div class="list">
                <a href="/church/sumida">
                    <img src="img/sample2.jpg" alt="" class="img">
                    <h4>墨田教会</h4>
                    <p>ここに説明など入れて下さい。</p>
                </a>
            </div>

            <div class="list">
                <a href="/church/chiba">
                    <img src="img/sample3.jpg" alt="" class="img">
                    <h4>千葉教会</h4>
                    <p>ここに説明など入れて下さい。</p>
                </a>
            </div>
        </section>

    </div>
    <!--/inner-->
</div>
<!--/contents-->

<div class="contents">
    <div class="inner">

        <div class="main">

            <section id="new">
                <h2 id="newinfo_hdr" class="close">更新情報・お知らせ</h2>
                <dl id="newinfo">
                    <dt>2017/10/01</dt>
                    <dd>真イエス教会｜日本のホームページをリニューアルしました<span class="newicon">NEW</span></dd>
                </dl>
            </section>

        </div>
        <!--/main-->

        <div class="sub">

            <nav class="box1">
                <h2>Menu</h2>
                <ul class="submenu mb10">
                    <li><a href="company.html">集会放送</a></li>
                    <li><a href="contact.html">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
        <!--/sub-->

    </div>
    <!--/inner-->
</div>
<!--/contents-->

<?= $this->element('footer');?>

<!--スマホ用更新情報　480px以下-->
<script type="text/javascript">
    if (OCwindowWidth() <= 480) {
        open_close("newinfo_hdr", "newinfo");
    }
</script>

</html>