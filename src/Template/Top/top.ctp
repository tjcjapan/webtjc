<!DOCTYPE html>
<html lang="ja">
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="ここにサイト説明を入れます">
    <meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
    <title>
        <?= TITLE ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('fixmenu.css') ?>
    <?= $this->Html->script('openclose.js') ?>
    <?= $this->Html->script('ddmenu_min.js') ?>
    <?= $this->Html->script('fixmenu.js') ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <style>
        body.is-fixed .nav-fix-pos {position: static !important;top: auto;}
        body.is-fixed .header {margin-bottom: 0px;}
        body.is-fixed .mt-top {margin-top: 650px;}
        body.is-fixed .mt-top2 {margin-top: 250px;}
        .menuimg a {background: none;}
        #menubar ul.ddmenu {display: none;}
    </style>
    <![endif]-->
</head>
<body id="top">

<header class="header">
    <div class="inner">
        <h1 id="logo"><a href="index.html"><img src="img/logo.png" alt="Sample Company"></a></h1>
    </div>
    <!--/inner-->
</header>

<div id="menu-box" class="nav-fix-pos">
    <!--PC用（481px以上端末）メニュー-->
    <nav id="menubar">
        <ul>
            <li class="menuimg menu1"><a href="index.html">トップ</a></li>
            <li class="menuimg menu2"><a href="company.html">Company</a></li>
            <li class="menuimg menu3"><a href="works.html">Works</a>
                <ul class="ddmenu">
                    <li><a href="works1.html">Works:1</a></li>
                    <li><a href="works1.html">Works:2</a></li>
                    <li><a href="works1.html">Works:3</a></li>
                </ul>
            </li>
            <li class="menuimg menu4"><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
</div>
<!--/menubox-->

<!--スマホ用（480px以下端末）メニュー-->
<nav id="menubar-s">
    <ul>
        <li class="menuimg menu1"><a href="index.html">Home</a></li>
        <li class="menuimg menu2"><a href="company.html">Company</a></li>
        <li class="menuimg menu3"><a href="works.html">Works</a></li>
        <li class="menuimg menu4"><a href="contact.html">Contact</a></li>
    </ul>
</nav>

<div class="contents bg1 mt-top">
    <div class="inner">

        <section>

            <h2>Topics</h2>

            <div class="list">
                <a href="works1.html">
                    <img src="img/sample1.jpg" alt="" class="img">
                    <h4>Sample Title</h4>
                    <p>ここに説明など入れて下さい。</p>
                </a>
            </div>

            <div class="list">
                <a href="works1.html">
                    <img src="img/sample2.jpg" alt="" class="img">
                    <h4>Sample Title</h4>
                    <p>ここに説明など入れて下さい。</p>
                </a>
            </div>

            <div class="list">
                <a href="works1.html">
                    <img src="img/sample3.jpg" alt="" class="img">
                    <h4>Sample Title</h4>
                    <p>ここに説明など入れて下さい。</p>
                </a>
            </div>

            <p class="c"><a href="index_type2.html">上の背景画像にこのブロックが重なったイメージのindex_type2.htmlもあります。</a></p>

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
                    <dt>2017/02/06</dt>
                    <dd>tp_biz42公開。<span class="newicon">NEW</span></dd>
                    <dt>20XX/00/00</dt>
                    <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                    <dt>20XX/00/00</dt>
                    <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                    <dt>20XX/00/00</dt>
                    <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                    <dt>20XX/00/00</dt>
                    <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                    <dt>20XX/00/00</dt>
                    <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                    <dt>20XX/00/00</dt>
                    <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
                </dl>
            </section>

            <section>

                <h2>テンプレートのご利用前に必ずお読み下さい</h2>

                <h3>利用規約のご案内</h3>
                <p>このテンプレートは、<a href="http://template-party.com/">Template Party</a>にて無料配布している『ビジネスサイト向け 無料ホームページテンプレート tp_biz42』です。必ずダウンロード先のサイトの<a href="http://template-party.com/read.html">利用規約</a>をご一読の上でご利用下さい。</p>
                <p><span class="color1">■<strong>HP最下部の著作表示『Web Design:Template-Party』は無断で削除しないで下さい。</strong></span><br>
                    わざと見えなく加工する事も禁止です。</p>
                <p><span class="color1">■<strong>下部の著作を外したい場合は</strong></span><br>
                    <a href="http://template-party.com/">Template-Party</a>の<a href="http://template-party.com/member.html">ライセンス契約</a>を行う事でHP下部の著作を外す事ができます。</p>

                <h3>テンプレートに梱包されているjsファイル(javascript)について</h3>
                <p>これらのファイルは全て<a href="http://www.crytus.co.jp/">有限会社クリタス様</a>提供のプログラムです。jsファイルは改変せずにご利用下さい。<br>
                    また、当サイトのテンプレート以外に使いたいなど、「プログラムのみ」を使う場合は<a href="http://template-party.com/free_program/openclose_license.html">こちらの規約</a>をお守り下さい。</p>

                <h3>当テンプレートの詳しい使い方は</h3>
                <p><a href="company.html#about">こちらをご覧下さい。</a></p>

            </section>

        </div>
        <!--/main-->

        <div class="sub">

            <nav class="box1">
                <h2>Menu</h2>
                <ul class="submenu mb10">
                    <li><a href="company.html">会社概要</a></li>
                    <li><a href="contact.html">お問い合わせ</a></li>
                </ul>
            </nav>

            <section class="box1">
                <h2>この見出しはh2タグです</h2>
                <p>このボックスは、class="box1"と指定すれば出ます。</p>
            </section>

            <aside>
                <h2>関連情報</h2>
                <ul class="submenu">
                    <li><a href="#">関連情報リンク</a></li>
                    <li><a href="#">関連情報リンク</a></li>
                    <li><a href="#">関連情報リンク</a></li>
                </ul>
            </aside>

        </div>
        <!--/sub-->

    </div>
    <!--/inner-->
</div>
<!--/contents-->

<p class="pagetop"><a href="#">↑</a></p>

<footer>
    <div id="copyright">
        <small>Copyright&copy; <a href="index.html">Sample Company</a> All Rights Reserved.</small>
    </div>

</footer>

<!--スマホ用更新情報　480px以下-->
<script type="text/javascript">
    if (OCwindowWidth() <= 480) {
        open_close("newinfo_hdr", "newinfo");
    }
</script>

<!--メニューの３本バー-->
<div id="menubar_hdr" class="close"><span></span><span></span><span></span></div>
<!--メニューの開閉処理条件設定　480px以下-->
<script type="text/javascript">
    if (OCwindowWidth() <= 480) {
        open_close("menubar_hdr", "menubar-s");
    }
</script>
</body>
</html>