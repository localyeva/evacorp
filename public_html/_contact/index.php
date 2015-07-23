<?php // include_once('/home/1705726298/evolable-asia/public_html/app_config.php');   ?>
<?php include_once(APP_PATH_WP . 'wp-load.php'); ?>
<?php
// 設定
require("./jphpmailer.php");
$script = "index.php";
$gtime = time();

// グローバル変数とサニタイジング
$action = htmlspecialchars($_POST['action']);

//お問い合わせフォーム内容
$reg_company = htmlspecialchars($_POST['company']);
$reg_division = htmlspecialchars($_POST['division']);
$reg_name = htmlspecialchars($_POST['name']);
$reg_email = htmlspecialchars($_POST['email']);
$reg_tel = htmlspecialchars($_POST['tel']);
$reg_itemSelect = htmlspecialchars($_POST['itemSelect']);
$reg_content = htmlspecialchars($_POST['content']);
$reg_inq_other = htmlspecialchars($_POST['inq_other']);
$reg_inq = $_POST['inq'];
$reg_inq_sent = htmlspecialchars($_POST['inq_all']);
if (is_array($reg_inq)) {
    for ($i = 0; $i < count($reg_inq); $i++) {
        $reg_inq_all .= htmlspecialchars($reg_inq[$i]) . "<br/>";
    }
}
// 処理分岐
if ($action == "confim") {
//======================================================================================== お問い合わせ確認画面



    html_header();

    $br_reg_content = nl2br($reg_content);
    ?>

    <div id="mainContent">
        <!-- /mainContent start -->
        <ul id="bread" class="clearfix">
            <li><a href="/">TOP</a></li>
            <li>お問い合わせ</li>
        </ul>
        <h2 class="t0b30"><img src="img/h2_contact.jpg" alt="お問い合わせ CONTACT" width="770" height="210" /></h2>
        <p class="line22">EVOLABLE ASIA Co., Ltd<br />
            4 Floor, Saigon Finance Center<br />
            No 9, Dinh Tien Hoang Street, Dist.1, HCM City.<br />
            Tel : (84.8) 39111489<br />
            Fax : (84.8) 39118767<br />
            Email : info@evolable.asia</p>
        <form method="post" class="form-1" action="<?php echo $script ?>?<?php echo $gtime ?>" >
            <table class="tableContact">
                <tr>
                    <th>会社名</th>
                    <td><?php echo $reg_company ?></td>
                </tr>
                <?php
                if (isset($reg_division) && $reg_division != '') {
                    ?>
                    <tr>
                        <th>部署名</th>
                        <td><?php echo $reg_division ?></td>
                    </tr>
                    <?php
                }
                ?>
                <tr>
                    <th>お名前</th>
                    <td><?php echo $reg_name ?></td>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <td><?php echo $reg_email ?></td>
                </tr>
                <tr>
                    <th>Tel</th>
                    <td><?php echo $reg_tel ?></td>
                </tr>
                <?php
                if (isset($reg_inq_all) && $reg_inq_all != '') {
                    ?>
                    <tr>
                        <th>どこでエボラブルアジアを知りましたか?</th>
                        <td><?php echo $reg_inq_all ?>
                            <?php if ($reg_inq_other != '') { ?>その他 : 	<?php echo $reg_inq_other ?><?php } ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                <tr>
                    <th>お問い合わせ項目</th>
                    <td><?php echo $reg_itemSelect ?></td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td><?php echo nl2br($reg_content); ?></td>
                </tr>
            </table>

            <input type="hidden" name="company" value="<?php echo $reg_company ?>" />
            <input type="hidden" name="division" value="<?php echo $reg_division ?>" />
            <input type="hidden" name="name" value="<?php echo $reg_name ?>" />
            <input type="hidden" name="email" value="<?php echo $reg_email ?>" />
            <input type="hidden" name="tel" value="<?php echo $reg_tel ?>" />
            <input type="hidden" name="itemSelect" value="<?php echo $reg_itemSelect ?>" />
            <input type="hidden" name="inq_all" value="<?php echo $reg_inq_all ?>" />
            <input type="hidden" name="inq_other" value="<?php echo $reg_inq_other ?>" />
            <input type="hidden" name="content" value="<?php echo $reg_content ?>" />


            <p style="text-align:right;">
                <a href="javascript:history.back()">入力内容を修正する</a>
            </p>

            <p align="center">
                <input type="image" src="img/btn_send.png"  class="t20b20" />
                <input type="hidden" name="action" value="send" />
            </p>

        </form>
        <!-- /maincontent end -->
    </div>
    <?php get_sidebar(); ?>
    <?php
    html_footer();
} elseif ($action == "send") {
//========================================================================================== お問い合わせ確認画面
    $reg_inq_sent = htmlspecialchars_decode($reg_inq_sent);
    $reg_inq_sent = strip_tags($reg_inq_sent, '<br><br/>');
    $reg_inq_sent = str_replace("<br/><br/>", "\n", $reg_inq_sent);
    $reg_inq_sent = str_replace("<br/>", "\n", $reg_inq_sent);


    $entry_time = gmdate("Y/m/d H:i:s", time() + 9 * 3600);
    $entry_host = gethostbyaddr(getenv("REMOTE_ADDR"));
    $entry_ua = getenv("HTTP_USER_AGENT");



    $msgBody = "

■会社名
$reg_company";

    if (isset($reg_division) && $reg_division != '') {
        $msgBody .= "

■部署名
$reg_division
";
    }
    $msgBody .= "

■お名前
$reg_name

■メールアドレス
$reg_email

■電話番号
$reg_tel";

    if (isset($reg_inq_sent) && $reg_inq_sent != '') {
        $msgBody .= "

■どこでエボラブルアジアを知りましたか?
$reg_inq_sent
";
        if (isset($reg_inq_other) && $reg_inq_other != '') {
            $msgBody .= "その他:
$reg_inq_other;
";
        }
    }
    $msgBody .= "

■お問い合わせ項目
$reg_itemSelect

■お問い合わせ内容
$reg_content
";


//お問い合わせメッセージ送信
//$subject = "test content subject";
//$body = "content body";

    $subject = "ホームページからお問い合わせがありました";
    $body = "

登録日時：$entry_time
ホスト名：$entry_host
ブラウザ：$entry_ua


ホームページからお問い合わせがありました。


$msgBody


";

//お客様用メッセージ
    $subject1 = "お問い合わせありがとうございました";
    $body1 = "

$reg_name 様

この度はエボラブルアジアにお問い合わせいただきまして誠にありがとうございます。
こちらは自動返信メールとなっております。
弊社にて確認した後、改めてご連絡させていただきます。

以下、お問い合わせ内容となっております。
ご確認くださいませ。
---------------------------------------------------------------
---------------------------------------------------------------

$msgBody


---------------------------------------------------------------
エボラブル アジア
5F Saigon Finance Center, 9 Dinh Tien Hoang Street,
District 1, HCMC
電話番号(Phone)：+84-8(39111489)
FAX：+84-8(39118767)
---------------------------------------------------------------

";



    // メール送信
    mb_language("ja");
    mb_internal_encoding("UTF-8");



    //$to = "info@evolableasia.vn";
    $to = "info@evolable.asia";
    $from = "info@evolable.asia";
    $fromname = "エボラブル アジア お問い合わせ";

    //メール送信
    $email_info = new JPHPmailer();
    //$email_info->addTo($to);
    $email_info->addTo('info@evolable.asia');
    $email_info->addTo('fujita@evolable.asia');
    $email_info->addTo('iwabuchi@evolable.asia');
    $email_info->addTo('k.arai@evolableasia.com');
    $email_info->addTo('k.ueda@evolableasia.com');
    $email_info->addTo('kashiwagi@evolable.asia');
    $email_info->addTo('iwabuchi@evolable.asia');
    $email_info->addTo('m.fujita@evolableasia.com');
    $email_info->addTo('yoshizako@evolable.asia');
    $email_info->addTo('oishi@evolableasia.com');
    $email_info->addTo('sul@evolable.asia');
    $email_info->addTo('tsukagoshi@evolableasia.com');
    $email_info->addTo('umezawa@evolable.asia');
    $email_info->addTo('yoshimura@evolable.asia');
    $email_info->addTo('watanabe@evolableasia.com');
    $email_info->addTo('y_sol@soltecvn.com');
    $email_info->addTo('yano@evolableasia.com');
    $email_info->addTo('y.otani@evolableasia.com');
    $email_info->addTo('ito@evolable.asia');
    $email_info->setFrom($from, $fromname);
    $email_info->setSubject($subject);
    $email_info->setBody($body);
    if ($email_info->Send()) {
        
    };
    $email_info = null;
    //お客様受け取りメール送信
    $email1 = new JPHPmailer();
    $email1->addTo($reg_email);
    $email1->setFrom($from, $fromname);
    $email1->setSubject($subject1);
    $email1->setBody($body1);

    if ($email1->send()) {
        
    };
    $email1 = null;

    //メール送信
    /*
      $email = new JPHPmailer();
      //$email->addTo($to);
      $email->addTo('ito@evalable.asia');
      $email->setFrom($from, $fromname);
      $email->setSubject($subject1);
      $email->setBody($body1);

      if($email->Send()) {};
     */
    flush();
    header("Location: indexThx.php");
    exit;
} else {
//================================================================================================== 初期画面
    html_init("");
}

////////////////////////////////////////////////////////////////////////////// HTML初期画面
function html_init($err_msg) {

    global $gtime, $script;
    global
    $reg_company,
    $reg_name,
    $reg_tel,
    $reg_division,
    $reg_email,
    $reg_itemSelect,
    $reg_inq_sent,
    $reg_content;

    html_header();

    if ($err_msg) {
        ?>

        <?php
    }
    ?>




    <div id="mainContent">
        <!-- /mainContent start -->
        <ul id="bread" class="clearfix">
            <li><a href="<?php echo home_url(); ?>">TOP</a></li>
            <li>お問い合わせ</li>
        </ul>
        <h2 class="t0b30"><img src="img/h2_contact.jpg" alt="お問い合わせ CONTACT" width="770" height="210" /></h2>
        <p class="line22">EVOLABLE ASIA Co., Ltd<br />
            4 Floor, Saigon Finance Center<br />
            No 9, Dinh Tien Hoang Street, Dist.1, HCM City.<br />
            Tel : (84.8) 39111489<br />
            Fax : (84.8) 39118767<br />
            Email : <a href="mailto:info@evolable.asia">info@evolable.asia</a></p>
        <form method="post" class="form-1" action="<?php echo $script ?>?<?php echo $gtime ?>" name="form1" onSubmit="return check()" >
            <table class="tableContact">
                <tr>
                    <th>会社名<em>※</em></th>
                    <td><input type="text" size="40" name="company" id="company" value="<?php echo $reg_company ?>" /></td>
                </tr>
                <tr>
                    <th>部署名</th>
                    <td><input type="text" size="40" name="division" id="division" value="<?php echo $reg_division ?>" /></td>
                </tr>
                <tr>
                    <th>お名前<em>※</em></th>
                    <td><input type="text" size="40" name="name" id="name" value="<?php echo $reg_name ?>" /></td>
                </tr>
                <tr>
                    <th>E-mail<em>※</em></th>
                    <td><input type="text" size="40" name="email" id="email" value="<?php echo $reg_email ?>" /></td>
                </tr>
                <tr>
                    <th>Tel<em>※</em></th>
                    <td><input type="text" size="30" name="tel" id="tel" value="<?php echo $reg_tel ?>" /></td>
                </tr>
                <tr>
                    <th>どこでエボラブルアジアを知りましたか?</th>
                    <td>
                        <div id="chkcheckbox">
                            <ul class="clearfix"> <li>
                                    <label>
                                        <input type="checkbox" name="inq[]" value="知人の紹介">
                                        知人の紹介</label>
                                </li> <li>
                                    <label>
                                        <input type="checkbox" name="inq[]" value="雑誌">
                                        雑誌</label>
                                </li> <li>
                                    <label>
                                        <input type="checkbox" name="inq[]" value="新聞">
                                        新聞</label>
                                </li> <li>
                                    <label>
                                        <input type="checkbox" name="inq[]" value="テレビ">
                                        テレビ</label>
                                </li> 
                            </ul>
                            <ul class="clearfix">
                                <li>
                                    <label>
                                        <input type="checkbox" name="inq[]" value="インターネット記事">
                                        インターネット記事</label>
                                </li> <li>
                                    <label>
                                        <input type="checkbox" name="inq[]" value="インターネット検索">
                                        インターネット検索</label>
                                </li> <li>
                                    <label>
                                        <input type="checkbox" name="inq[]" value="Facebook">
                                        Facebook</label>
                                </li> <li>
                                    <label>
                                        <input type="checkbox" name="inq[]" value="EVOLABLE ASIAブログ">
                                        EVOLABLE ASIAブログ</label>
                                </li> </ul>
                            <div class="otherInq clearfix">
                                <p class="floatL"><label>
                                        <input type="checkbox" id="inq_o" name="inq_o" value="other">
                                        その他 </label></p>
                                <p class="floatL ml10"><input type="text" id="inq_other_text" name="inq_other" value="<?php echo $reg_inq_other ?>" class="writingBox" size="30" disabled="disabled"></p>

                            </div>

                        </div>
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ項目<em>※</em></th>
                    <td><select class="chkselect styled" id="itemSelect" name="itemSelect">
                            <option value="">▼下記からお選びください</option>
                            <option value="ベトナムでラボ型オフショア開発に関心がある">ベトナムでラボ型オフショア開発に関心がある</option>
                            <option value="ベトナムでラボ型オフショア開発を検討している">ベトナムでラボ型オフショア開発を検討している</option>
                            <option value="ベトナムでBPOを検討している">ベトナムでBPOを検討している</option>
                            <option value="エボラブルアジアデザインチームに興味がある">エボラブルアジアデザインチームに興味がある</option>
                            <option value="ベトナムのITビジネス事情を視察したいと思っている">ベトナムのITビジネス事情を視察したいと思っている</option>
                            <option value="ベトナムを活用してコストダウンする提案をしてほしい">ベトナムを活用してコストダウンする提案をしてほしい</option>
                            <option value="詳しい資料を送ってほしい">詳しい資料を送ってほしい</option>
                            <option value="採用に関するお問い合わせ">採用に関するお問い合わせ</option>
                            <option value="その他">その他</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th>お問い合わせ内容<em>※</em></th>
                    <td><textarea name="content" class="content" id="content" rows="3" cols="5"></textarea></td>
                </tr>
            </table>
            <p><em>※</em>は必須項目です</p>
            <div class="taC">
                <input type="image" src="img/btn_confirm01.png"  class="t20b20"/>
                <input type="hidden" name="action" value="confim" /><br />
            </div>
            </center>
        </form>
        <!-- /maincontent end -->
    </div>
    <?php get_sidebar(); ?>
    <?php
    html_footer();
}

////////////////////////////////////////////////////////////////////////////// HTMLヘッダー
function html_header() {
    ?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>お問い合わせ｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア</title>
            <meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジアのお問い合わせページです。" />
            <meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />
            <link rel="icon" href="<?php echo APP_URL; ?>common/img/ico/favicon.ico" type="image/vnd.microsoft.icon" />
            <link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/sub.css" type="text/css" media="all" />
            <link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/top.css" type="text/css" media="all" />
            <link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/base.css" type="text/css" media="all" />
            <link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/layout.css" type="text/css" media="all" />

            <link type="text/css" rel="stylesheet" href="css/exvalidation.css" />
            <link type="text/css" rel="stylesheet" href="css/base.css" />
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
            <?php include(TEMPLATEPATH . '/tracklist-finderjp.php'); ?>
        </head>
        <body id="contact">

            <?php include(TEMPLATEPATH . '/header2.php'); ?>
            <?php include(TEMPLATEPATH . '/gNavi.php'); ?>

            <!--Container-->
            <div id="container" class="clearfix">

                <?php
            }

////////////////////////////////////////////////////////////////////////////// HTMLフッター
            function html_footer() {
                ?>

            </div>
            <!--/Container-->
            <?php get_footer(); ?>
            <script type="text/javascript" src="./js/jquery.customSelect.js"></script>
            <script type="text/javascript">
                $(function () {
                    $('select.styled').customSelect();
                });
            </script>
            <script type="text/javascript" src="./js/ajaxzip3.js" charset="UTF-8"></script>
            <script type="text/javascript" src="./js/jquery.cookie.js"></script>
            <script type="text/javascript" src="./js/exvalidation.js"></script>
            <script type="text/javascript" src="./js/exchecker-ja.js"></script>
            <script type="text/javascript">
                $(function () {
                    $("form").exValidation({
                        rules: {
                            company: "chkrequired",
                            name: "chkrequired",
                            email: "chkrequired chkemail",
                            tel: "chkrequired ",
                            content: "chkrequired"
                        },
                        stepValidation: true,
                        scrollToErr: true,
                        errHoverHide: true
                    });
                });
            </script>
            <script type="text/javascript">
                $(function () {
                    $('input[name=inq_o]').change(function () {
                        var ch = $('input[name=inq_o]:checked').length;
                        if (ch == '1') {
                            $('#inq_other_text').removeAttr("disabled", "disabled");
                        }
                        ;
                        if (ch == '0') {
                            $('input[id=inq_other_text]').attr("disabled", "disabled");
                            $('input[id=inq_other_text]').val('');
                        }
                        ;
                    }).change();

                });
            </script>
            <script type="text/javascript" src="./js/jquery.gafunc.js"></script>
        </body>
    </html>
    <?php
    exit;
}
?>