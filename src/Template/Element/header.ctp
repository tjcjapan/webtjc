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
    <?= $this->Html->script('jquery-3.2.1.min.js') ?>
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

<body>

<header class="header">
    <div class="inner">
        <h1 id="logo"><a href="/"><img src="/img/logo.png" alt="Sample Company"></a></h1>
    </div>
    <!--/inner-->
</header>

<div id="menu-box" class="nav-fix-pos">
    <!--PC用（481px以上端末）メニュー-->
    <nav id="menubar">
        <ul>
            <li class="menuimg menu1"><a href="/">トップ</a></li>
            <li class="menuimg menu2"><a href=<?= LIVE_URL ?>>集会放送</a></li>
            <li class="menuimg menu3"><a href="#">教会紹介</a>
                <ul class="ddmenu">
                    <li><a href="/church/tokyo">東京教会</a></li>
                    <li><a href="/church/sumida">東京墨田教会</a></li>
                    <li><a href="/church/chiba">千葉教会</a></li>
                    <li><a href="/church/yokohama">横浜教会</a></li>
                    <li><a href="/church/osaka">大阪祈祷所</a></li>
                </ul>
            </li>
            <li class="menuimg menu4"><a href="/contact">お問合わせ</a></li>
        </ul>
    </nav>
</div>
<!--/menubox-->

<!--スマホ用（480px以下端末）メニュー-->
<nav id="menubar-s">
    <ul>
        <li class="menuimg menu1"><a href="/">トップ</a></li>
        <li class="menuimg menu2"><a href=<?= LIVE_URL ?>>集会放送</a></li>
        <li class="menuimg menu4"><a href="/contact">お問い合わせ</a></li>
    </ul>
</nav>