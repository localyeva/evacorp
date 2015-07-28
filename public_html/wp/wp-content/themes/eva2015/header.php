<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジアのお問い合わせページです。" />
        <meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />

        <title><?php echo bloginfo('name') ?></title>

        <!-- Bootstrap -->
        <link href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/css/style.css" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?> 
    </head>
    <body>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-47878088-1']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
        
        <div class="clearfix" id="headerWrap">
            <!-- /header start -->
            <div class="headerL clearfix">
                <p id="logo"><a href="<?php echo bloginfo('url') ?>"><img width="152" height="61" class="opa" alt="evolable asia" src="<?php echo get_template_directory_uri() ?>/img/header/logo.png" style="opacity: 1;"></a></p>
                <h1>ベトナムでのオフショア開発、ラボ型オフショア開発、<br>BPOのエボラブルアジアのお問い合わせページです。</h1>
            </div>
            <p class="btnContact"><img width="137" height="39" alt="ベトナムでのラボ型開発やBPOのご相談はコチラ" src="<?php echo get_template_directory_uri() ?>/img/header/txt_bpo.png"><a href="<?php bloginfo('url') ?>/contact"><img width="175" height="39" class="opa" alt="お問合わせ/ご相談" src="<?php echo get_template_directory_uri() ?>/img/header/btn_bpo.png" style="opacity: 1;"></a></p>
            <!-- /header end -->
        </div>

        <div id="gNaviWrap"> 
            <!-- /globalNavi start -->
            <ul class="clearfix" id="gNavi">
                <li id="gNavi01"><a href="<?php echo bloginfo('url') ?>">HOME</a></li>
                <li id="gNavi02"><a href="<?php echo bloginfo('url') ?>/news">ニュース</a></li>
                <li id="gNavi03"><a href="<?php echo bloginfo('url') ?>/company">企業情報</a></li>
                <li id="gNavi04"><a href="<?php echo bloginfo('url') ?>/service">サービス</a></li>
                <li id="gNavi05"><a href="<?php echo bloginfo('url') ?>/recommend">参加企業の声</a></li>
                <li id="gNavi06"><a href="<?php echo bloginfo('url') ?>/vietnam">ベトナムの魅力</a></li>
                <li id="gNavi07"><a href="<?php echo bloginfo('url') ?>/faq">FAQ</a></li>
                <li id="gNavi08"><a href="<?php echo bloginfo('url') ?>/recruit">求人情報</a></li>
                <li id="gNavi09"><a href="<?php echo bloginfo('url') ?>/contact">お問い合わせ</a></li>
            </ul>
            <!-- /globalNavi end --> 
        </div>