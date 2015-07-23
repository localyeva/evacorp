<?php
// 設定
require("./jphpmailer.php");
$script = "index.php";
$gtime = time();


// グローバル変数とサニタイジング
$action = htmlspecialchars($_POST['action']);

//お問い合わせフォーム内容
$reg_item = htmlspecialchars($_POST['item']);

$reg_name = htmlspecialchars($_POST['name']);
$reg_email = htmlspecialchars($_POST['email']);
$reg_tel = htmlspecialchars($_POST['tel']);
$reg_add = htmlspecialchars($_POST['add']);
$reg_age = htmlspecialchars($_POST['age']);
$reg_rate = htmlspecialchars($_POST['rate']);
$reg_career = htmlspecialchars($_POST['career']);
$reg_intro = htmlspecialchars($_POST['intro']);



$reg_url = htmlspecialchars($_POST['url']);

$reg_orther = htmlspecialchars($_POST['orther']);
// 処理分岐
if($action == "confim"){
//======================================================================================== お問い合わせ確認画面



	html_header();

	$br_reg_content = nl2br($reg_content);
?>
<div class="wrapContetn">
  <p class="taC t20b0"><img src="img/img_step02.png" alt="" width="528" height="28" /></p>
  <form method="post" class="form-1" action="<?php echo $script ?>?<?php echo $gtime ?>" >
    <div class="t20b0">
      <p class="hid_url">Leave this empty:
        <input type="text" name="url" value="<?php echo $reg_url ?>"/>
      </p>
      <!-- Anti spam part1: the contact form -->
      <table class="tableContact" cellspacing="0" >
        <tr>
          <th>希望職種</th>
          <td><?php echo $reg_item ?></td>
        </tr>
        <tr>
          <th>お名前</th>
          <td><?php echo $reg_name ?></td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td><?php echo $reg_email ?></td>
        </tr>
        <tr>
          <th>TEL</th>
          <td><?php echo $reg_tel ?></td>
        </tr>
        <tr>
          <th>ご住所</th>
          <td><?php echo $reg_add ?></td>
        </tr>
        <tr>
          <th>年齢</th>
          <td><?php echo $reg_age ?></td>
        </tr>
        <tr>
          <th>最終学歴</th>
          <td><?php echo $reg_rate ?></td>
        </tr>
        <tr>
          <th>職歴</th>
          <td><?php echo $reg_career ?></td>
        </tr>
        <tr>
          <th class="bd_bot">自己PR・備考</th>
          <td class="bd_bot"><?php echo $reg_intro ?></td>
        </tr>
      </table>
    </div>
    <input type="hidden" name="name" value="<?php echo $reg_name ?>" />
    <input type="hidden" name="email" value="<?php echo $reg_email ?>" />
    <input type="hidden" name="tel" value="<?php echo $reg_tel ?>" />
    <input type="hidden" name="item" value="<?php echo $reg_item ?>" />
    <input type="hidden" name="add" value="<?php echo $reg_add ?>" />
    <input type="hidden" name="age" value="<?php echo $reg_age ?>" />
    <input type="hidden" name="rate" value="<?php echo $reg_rate ?>" />
    <input type="hidden" name="career" value="<?php echo $reg_career ?>" />
    <input type="hidden" name="intro" value="<?php echo $reg_intro ?>" />
    <input type="hidden" name="url" value="<?php echo $reg_url ?>" />
    <p style="text-align:right;"><a href="javascript:history.back()">入力内容を修正する</a></p>
    <p align="center">
      <input type="image" src="img//btn_send.png" onMouseOver="this.src='img/btn_send.png'" onMouseOut="this.src='img/btn_send.png'"  class="t20b20"/>
      <input type="hidden" name="action" value="send" />
    </p>
    <p class="taC fz12">上記フォームで送信できない場合は、必要項目をご記入の上、<br />
      <a id="mailContact" href="#"></a>までメールをお送りください。</p>
    <!-- Anti spam part2: clickable email address -->
    
  </form>
</div>
<?php

	html_footer();

}elseif($action == "send"){
//========================================================================================== お問い合わせ確認画面



	$entry_time = gmdate("Y/m/d H:i:s",time()+9*3600);
	$entry_host = gethostbyaddr(getenv("REMOTE_ADDR"));
	$entry_ua = getenv("HTTP_USER_AGENT");



$msgBody = "

■希望職種
$reg_item

■お名前
$reg_name

■メールアドレス
$reg_email

■TEL
$reg_tel

■ご住所
$reg_add

■年齢
$reg_age

■最終学歴
$reg_rate


■職歴
$reg_career


■自己PR・備考
$reg_intro

";


//お問い合わせメッセージ送信
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

この度はエボラブルアジアの求人にお問い合わせいただきまして誠にありがとうございます。
こちらは自動返信メールとなっております。
弊社にて確認した後、改めてご連絡させていただきます。

以下、お問い合わせ内容となっております。
ご確認くださいませ。
---------------------------------------------------------------
---------------------------------------------------------------

$msgBody


---------------------------------------------------------------
EVOLABLE ASIA Co., Ltd

4F Saigon Finance Center, 9 Dinh Tien Hoang Street, District 1, HCMC
TEL:+84-8(39111489)
---------------------------------------------------------------

";



	// メール送信
	mb_language("ja");
	mb_internal_encoding("UTF-8");

	//$to = "takeda@alive-web.co.jp";
	//$from = "takeda@alive-web.co.jp";
	//$to = "info@evolable.asia";
	$to = "info@evolable.asia";
  $from = "info@evolable.asia";
	$fromname = "Evolable Asia 求人お問い合わせ";
       
       //メール送信
       $email_info = new JPHPmailer();
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
       $email_info->addTo('ito@evolable.asia');
       $email_info->addTo($to);
       $email_info->setFrom($from,$fromname);
       $email_info->setSubject($subject);
       $email_info->setBody($body);

       //if($email->Send()) {};
       
       //Anti spam advanced version 2 start: Don't send blank emails
       if( $reg_name <> "" && $reg_email <> "" ) {
              
              //Anti spam part1: the contact form start
              if($reg_url == ""){
                     
              // then send the form to your email
                     if($email_info->Send()) {};
              } // otherwise, let the spammer think that they got their message through
              //Anti spam part1: the contact form end
       }//Anti spam advanced version 2 end: Don't send blank emails
       $email_info = null;

	//お客様受け取りメール送信
	$email1 = new JPHPmailer();
	$email1->addTo($reg_email);
	$email1->setFrom($from,$fromname);
	$email1->setSubject($subject1);
	$email1->setBody($body1);

	//if($email1->send()) {};
	
	//Anti spam advanced version 2 start: Don't send blank emails
	if( $reg_name <> "" && $reg_email <> "" ) {
		
		//Anti spam advanced version 1 start: The preg_match() is there to make sure spammers can’t abuse your server by injecting extra fields (such as CC and BCC) into the header.
		if( $reg_email && !preg_match( "/[\r\n]/", $reg_email) ) {
			
			//Anti spam part1: the contact form start
			if($reg_url == ""){
				
		     	// then send the form to your email
				if($email1->Send()) {};
			} // otherwise, let the spammer think that they got their message through
			//Anti spam part1: the contact form end
		}//Anti spam advanced version 1 end
	}//Anti spam advanced version 2 end: Don't send blank emails
	
       flush();	

	header("Location: indexThx.php");
	exit;

}else{
//================================================================================================== 初期画面
	html_init("");
}

////////////////////////////////////////////////////////////////////////////// HTML初期画面
function html_init($err_msg){

	global $gtime, $script;
	global
		$reg_company,
				$reg_add,

		$reg_name,
		$reg_age,
		$job ,
		$reg_tel,
		$reg_rate,
		$reg_fax,
		$reg_email,
		$reg_content,
		$reg_url;

	html_header();

	if($err_msg){
?>
<?php
	}
?>
<div class="wrapContetn">
  <p class="txtContact">下記の情報に御記入の上、【入力内容を確認する】ボタンをクリックしてください。<br />
    折り返し当社よりご連絡させていただきます。 （半角カナは使用しないでください）<br />
    <span>※</span>印は必須項目です。</p>
  <p class="taC t20b0"><img src="img/img_step01.png" alt="" width="528" height="28" /></p>
  <form method="post" class="form-1" action="<?php echo $script ?>?<?php echo $gtime ?>" name="form1" onSubmit="return check()">
    <p class="hid_url">Leave this empty:
      <input type="text" name="url" />
    </p>
    <!-- Anti spam part1: the contact form -->
    <table class="tableContact" cellspacing="0" >
      <tr>
        <th>希望職種<em>※</em></th>
        <td><?php 
	  if(isset( $_GET['job'] )) {$job = $_GET['job'] ; }// else { $job = "null"; echo "123";};
	  ?>
          <select name="item" class="chkselect" id="itemList">
            <option value="">希望職種を選択して下さい</option>
            <?php
		
			$args = array( 'posts_per_page' => 5, 'post_type' => 'requirements' );
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) {
			?>
            <option <?php if($job == $post->post_title) { echo "selected";} ?> value="<?php echo $post->post_title; ?>"><?php echo $post->post_title; ?></option>
            <?php } ?>
            <option value="その他">その他</option>
          </select></td>
      </tr>
      <tr>
        <th>お名前<em>※</em></th>
        <td><input type="text" size="40" name="name" id="name" class="writingBox size01" value="<?php echo $reg_name ?>" /></td>
      </tr>
      <tr>
        <th>メールアドレス<em>※</em></th>
        <td><input type="text" size="40" name="email" id="email" class="writingBox size02" value="<?php echo $reg_email ?>" /></td>
      </tr>
      <tr>
        <th>TEL<em>※</em></th>
        <td><input type="text" size="40" name="tel" id="tel" class="writingBox size01" value="<?php echo $reg_tel ?>" /></td>
      </tr>
      <tr>
        <th>ご住所<em>※</em></th>
        <td><input type="text" size="40" name="add" id="add" class="writingBox size02" value="<?php echo $reg_add ?>" /></td>
      </tr>
      <tr>
        <th>年齢<em>※</em></th>
        <td><input type="text" size="40" name="age" id="age" class="writingBox size03" value="<?php echo $reg_age ?>" /></td>
      </tr>
      <tr>
        <th>最終学歴<em>※</em></th>
        <td><input type="text" size="40" name="rate" id="rate" class="writingBox size02" value="<?php echo $reg_rate ?>" /></td>
      </tr>
      <tr>
        <th>職歴<em>※</em></th>
        <td><textarea name="career" class="textarea01" id="career" rows="3" cols="5"></textarea></td>
      </tr>
      <tr>
        <th class="bd_bot">自己PR・備考<em>※</em></th>
        <td class="bd_bot"><textarea name="intro" class="textarea02" id="intro" rows="3" cols="5"></textarea></td>
      </tr>
    </table>
    <p class="t0b10 fz12">【個人情報の取扱いについて】</p>
    <ul class="t0b20 fz12">
      <li>・本フォームからお客様が記入・登録された個人情報は、資料送付・電子メール送信・電話連絡<br />
        　などの目的で利用・保管します。</li>
      <li>・プライバシーポリシーについては<a href="http://evolable.asia/privacypolicy/" target="_blank">こちら</a>をご覧ください。</li>
    </ul>
    <div>
      <label>
        <input type="checkbox" name="check1" value="ok">
        <span style="font-size:12px;"><b>個人情報の取扱いに同意する</b></span></label>
      <br>
      <br>
      <p class="taC">
        <input type="image" src="img/btn_confirm.png" onMouseOver="this.src='img/btn_confirm_on.png'" onMouseOut="this.src='img/btn_confirm.png'"  class="t20b20"/>
      </p>
      <input type="hidden" name="action" value="confim" />
      <br />
    </div>
    </center>
    <p class="taC fz12">上記フォームで送信できない場合は、必要項目をご記入の上、<br />
      <a id="mailContact" href="#"></a>までメールをお送りください。</p>
    <!-- Anti spam part2: clickable email address -->
  </form>
</div>
<?php

	html_footer();

}

////////////////////////////////////////////////////////////////////////////// HTMLヘッダー
function html_header(){

?>
<?php 
$job = "";
$job = $_GET['job']; 
include_once('/home/1705726298/evolable-asia/public_html/recruit_ja/app_config.php'); ?>
<?php include_once(APP_PATH_HOME.'wp-load.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="image/x-icon" href="http://evolable.asia/common/img/ico/favicon.ico" />
<link rel="icon" type="image/x-icon" href="http://evolable.asia/common/img/ico/favicon.ico" />
<title>応募フォーム｜EVA求人特設サイト｜ベトナムで働くならEVOLABLE ASIA(エボラブルアジア)</title>
<meta name="description" content="ベトナムでオフショア開発、ラボ型オフショア開発、BPOを行なうEVOLABLE ASIA(エボラブルアジア)の求人特設サイト。エボラブルアジアの求人応募フォームです。海外で働きたい方やインターンの希望者はこちらからどうぞ。" />
<meta name="keywords" content="ベトナム,オフショア開発,ラボ型オフショア開発,BPO,アウトソーシング,ホーチミン,エボラブルアジア,EVOLABLE ASIA,海外,求人,海外で働く,転職,インターン" />
<link type="text/css" rel="stylesheet" href="css/exvalidation.css" />
<link type="text/css" rel="stylesheet" href="css/base.css" />
<link rel="stylesheet" href="../common/css/import.css" type="text/css" media="all" />

<!-- Anti spam part1: the contact form start -->
<style>
.hid_url {
	display: none;
}
</style>
<!-- Anti spam part1: the contact form end -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-47878088-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>

<body id="contact">
<div id="headerWrap" class="clearfix"> 
  <!-- /header start -->
  <div class="headerLogo clearfix">
    <p class="logo"><a href="<?php echo APP_URL; ?>"><img src="img/logo.png" width="156" height="51" class="opa" /></a></p>
    <p class="floatR"><a href="#"><img src="img/btn_head.png" width="115" height="56" alt="" class="opa"/></a></p>
  </div>
  <h2 class="mb55"><img src="img/h2_contact.png" width="1000" height="43" alt="" /></h2>
  <!-- /header end --> 
</div>

<!--Container-->
<div id="container" class="clearfix">
  <?php
	}

	////////////////////////////////////////////////////////////////////////////// HTMLフッター
	function html_footer(){
	?>
</div>
<!--/Container-->
<div id="footerWrap"> 
  <!-- /footer start -->
  <div class="footer_bg">
    <div id="footerInner" class="t10b0 clearfix">
      <ul class="ul_menu floatL">
        <li><span>＋</span><a href="<?php echo APP_URL; ?>">トップ</a></li>
        <li><span>＋</span><a href="<?php echo APP_URL; ?>message">代表の想い</a></li>
        <li><span>＋</span><a href="<?php echo APP_URL; ?>">先輩の声</a>
          <ul class="child">
            <li>└ <a href="<?php echo APP_URL; ?>voice/index_senpai.php">社員</a></li>
            <li>└ <a href="<?php echo APP_URL; ?>voice/index_inter.php">インターン</a></li>
          </ul>
        </li>
      </ul>
      <ul class="ul_menu2 floatL">
        <li><span>＋</span><a href="<?php echo APP_URL; ?>job">仕事内容</a></li>
        <li><span>＋</span><a href="<?php echo APP_URL; ?>requirements">募集要項</a></li>
        <li><span>＋</span><a href="<?php echo APP_URL; ?>contact">お問い合せ</a></li>
      </ul>
      <p class="p_top01 floatL"><a  href="http://evolable.asia/"> <img src="<?php echo APP_URL_LINK; ?>img/top/btn_04.png" alt="" class="opa" /> </a> <a href="<?php echo APP_URL; ?>contact"><img src="<?php echo APP_URL_LINK; ?>img/top/btn_05.png" alt="" class="opa" /></a> </p>
      <div class="face">
        <div class="fb-like-box" data-href="https://www.facebook.com/evolable.asia.eva" data-width="444" data-height="177" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
      </div>
    </div>
    <!-- /footer end --> </div>
  <p class="copyright fz10 taC">Copyright ©ベトナムでのラボ型オフショア開発、BPOならEVOLABLE ASIA 求人サイト. All Rights Reserved.</p>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
<script type="text/javascript" src="./js/common.js"></script> 
<!--[if lte IE 10]><script src="common/js/PIE.js" type="text/javascript"></script><![endif]--> 
<script type="text/javascript" src="./js/ajaxzip3.js" charset="UTF-8"></script> 
<script type="text/javascript" src="./js/jquery.cookie.js"></script> 
<script type="text/javascript" src="./js/jquery.infieldlabel.js"></script> 
<script type="text/javascript" charset="utf-8">
	$(function(){ $("label").inFieldLabels(); });
</script> 
<script type="text/javascript" src="./js/exvalidation.js"></script> 
<script type="text/javascript" src="./js/exchecker-ja.js"></script> 
<script type="text/javascript">
	$(function(){
	  $("form").exValidation({
	    rules: {
				item: "chkrequired",
			name: "chkrequired",
			email: "chkrequired chkemail",
			tel: "chkrequired chktel",
			add: "chkrequired",
			age: "chkrequired",
			rate: "chkrequired",
			career: "chkrequired",
			intro: "chkrequired"
	    },
	    stepValidation: true,
	    scrollToErr: true,
	    errHoverHide: true
	  });
	});
</script> 
<script type="text/javascript">
	<!--
	function check(){
		var flag = 0;
		if(!document.form1.check1.checked){
			flag = 1;
		}
		if(flag){
			window.alert('「個人情報の取扱いに同意する」にチェックを入れて下さい');
			return false;
		}
		else{
			return true;
		}
	}
	// -->
</script> 
<script type="text/javascript" src="./js/jquery.gafunc.js"></script> 

<!-- Anti spam part2: clickable email address start --> 
<script type="text/javascript">
	$(function(){
		var address = "info" + "@" + "evolable.asia";
		$("#mailContact").attr("href", "mailto:" + address);
		$("#mailContact").text(address);
	});
</script> 
<!-- Anti spam part2: clickable email address end --> 
<script type="text/javascript">
	$(document).ready(function(){
		$("input:checkbox[name='check02[]']").click(function() {	
			if($("#check0203").is(":checked")) {
				$('#orther').addClass('chkrequired errPosRight');
			}
			else {
				$('#orther').removeClass('chkrequired errPosRight');
			}
		});	
		
		if($("#check0203").is(":checked")) {
				$('#orther').addClass('chkrequired errPosRight');
			}
			else {
				$('#orther').removeClass('chkrequired errPosRight');
			}
				
	})(jQuery);	
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=1493350260884645&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
<?php
	exit;
}
?>