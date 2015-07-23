<?php include_once('/home/1705726298/evolable-asia/public_html/app_config.php'); ?>
<?php include_once(APP_PATH_WP.'wp-load.php'); ?>
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



// 処理分岐
if($action == "confim"){
//======================================================================================== お問い合わせ確認画面



	html_header();

	$br_reg_content = nl2br($reg_content);
?>

<div id="mainContent">
		<!-- /mainContent start -->
		<ul id="bread" class="clearfix">
			<li class="home"><a href="<?php echo home_url(); ?>">TOP</a> </li>
			<li> <a href="<?php echo home_url(); ?>/service/">サービス</a></li>
			<li>ラボ型オフショア開発とは</li>
		</ul>
		
<form method="post" class="form-1" action="<?php echo $script ?>?<?php echo $gtime ?>" >
	<table class="tableContact">
			<tr>
				<th>会社名</th>
				<td><?php echo $reg_company ?></td>
			</tr>
			<?php
				if(isset($reg_division) && $reg_division != '')
				{
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
			<tr>
				<th>お問い合わせ項目</th>
				<td><?php echo $reg_itemSelect ?></td>
			</tr>
			<tr>
				<th>お問い合わせ内容</th>
				<td><?php echo $reg_content ?></td>
			</tr>
		</table>

<input type="hidden" name="company" value="<?php echo $reg_company ?>" />
<input type="hidden" name="division" value="<?php echo $reg_division ?>" />
<input type="hidden" name="name" value="<?php echo $reg_name ?>" />
<input type="hidden" name="email" value="<?php echo $reg_email ?>" />
<input type="hidden" name="tel" value="<?php echo $reg_tel ?>" />
<input type="hidden" name="itemSelect" value="<?php echo $reg_itemSelect ?>" />
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

}elseif($action == "send"){
//========================================================================================== お問い合わせ確認画面



	$entry_time = gmdate("Y/m/d H:i:s",time()+9*3600);
	$entry_host = gethostbyaddr(getenv("REMOTE_ADDR"));
	$entry_ua = getenv("HTTP_USER_AGENT");



$msgBody = "

■会社名
$reg_company";

if(isset($reg_division) && $reg_division != '')
{
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
$reg_tel

■お問い合わせ項目
$reg_itemSelect

■お問い合わせ内容
$reg_content
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

	


	//お客様受け取りメール送信
	$email1 = new JPHPmailer();
  	$email1->addTo($reg_email);
  	$email1->setFrom($from, $fromname);
  	$email1->setSubject($subject1);
  	$email1->setBody($body1);

	if($email1->send()) {};
       $email1 = null;

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
  	$email_info->setFrom($from, $fromname);
  	$email_info->setSubject($subject);
  	$email_info->setBody($body);
	if($email_info->Send()) {};
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
		$reg_name,
		$reg_tel,
		$reg_division,
		$reg_email,
		$reg_itemSelect,
		$reg_content;

	html_header();

	if($err_msg){
?>

<?php
	}
?>




<div id="mainContent">
		<!-- /mainContent start -->
		<ul id="bread" class="clearfix">
			<li class="home"><a href="<?php echo home_url(); ?>">TOP</a> </li>
			<li> <a href="<?php echo home_url(); ?>/service/">サービス</a></li>
			<li>ラボ型オフショア開発とは</li>
		</ul>
		
		
		<h2 class="mb50"><img src="<?php echo APP_URL; ?>img/service/about_labo/h2_labo.png" width="769" height="377" alt="ラボ型開発"/></h2>
		<p class="taC t0b50"><img src="<?php echo APP_URL; ?>img/service/about_labo/txt_labo01.png" alt="ラボ型開発のススメ" width="550" height="267" /></p>
		<div class="aboutBlock t0b30">
			<div class="inner">
				<h3><img src="<?php echo APP_URL; ?>img/service/about_labo/h3_labo01.png" alt="海外でオフショア開発での問題点" width="748" height="36" /></h3>
				<ul class="txtList01">
					<li>オフショア開発でもコストが高い（1人月30〜35万円）</li>
					<li>品質に不安が残る</li>
					<li>コミュニケーションが上手くいかない</li>
					<li>安いと思ったが手間ばかりかかり、反対にコストが高くつく</li>
				</ul>
				<p class="person01"><img src="<?php echo APP_URL; ?>img/service/img_person01.png" alt="海外でのオフショア開発の問題点" width="167" height="167" /></p>
			</div>
		<!-- /aboutBlock -->
		</div>

		<div class="aboutBlock">
			<div class="inner">
				<h3><img src="<?php echo APP_URL; ?>img/service/about_labo/h3_labo02.png" alt="自社単独での海外進出の問題点" width="748" height="36" /></h3>
				<ul class="txtList01">
					<li>業務を行うまでに、会社設立など時間とお金がかかる</li>
					<li>家賃などのコストが高い</li>
					<li>本業以外の業務（会計、支払いなど）に、時間が割かれる</li>
					<li>数人規模では、海外開発のメリットが出ない</li>
					<li>人材がすぐ辞める。自社単独での求人が難しい</li>
				</ul>
				<p class="person01"><img src="<?php echo APP_URL; ?>img/service/img_person01.png" alt="自社単独での海外進出の問題点" width="167" height="167" /></p>
			</div>
		<!-- /aboutBlock -->
		</div>
		<p class="taC t0b30"><img src="<?php echo APP_URL; ?>img/service/about_labo/txt_labo02.png" alt="エボラブルアジアでオフショア開発の問題点を解決" width="730" height="157" /></p>
		<div class="aboutBlock">
			<div class="inner">
				<h3><img src="<?php echo APP_URL; ?>img/service/about_labo/h3_labo03.png" alt="エボラブルアジアのラボ型オフショア開発" width="747" height="36" /></h3>
				<ul class="txtList02">
					<li>受託型オフショア開発よりも安い開発コストを実現！</li>
					<li>品質も高いクオリティを実現！</li>
					<li>日本とのコミュニケーションも円滑に！</li>
					<li>会社設立などをせず、ベトナムですぐに開発が可能！</li>
					<li>家賃など煩雑な経費は一切なし！</li>
					<li>ベトナム人1人規模から可能！</li>
					<li>ベトナム人のモチベーション維持も可能！</li>
				</ul>
				<p class="taC txtStyle01"><img src="<?php echo APP_URL; ?>img/service/about_labo/txt_labo04.png" alt="つまり、素早く、海外での開発をスタートすることができ、質の高い開発を低コストで行うことが可能です！" width="737" height="103" /></p>
				<p class="person03"><img src="<?php echo APP_URL; ?>img/service/img_person03.png" alt="素早く、質の高い開発を低コストで実現" width="166" height="316" /></p>
			</div>
		<!-- /aboutBlock -->
		</div>

		<p class="taC mt50 mb50"><img src="<?php echo APP_URL; ?>img/service/about_labo/txt_labo05.png" alt="なぜラボ型開発で夢のような環境が実現するのか" width="422" height="48" /></p>
        <p class="taC"><img src="<?php echo APP_URL; ?>img/service/about_labo/txt_labo06.jpg" width="707" height="1042" alt="ラボ型オフショア開発とは？" /></p>
		<!--<p class="taC t0b15"><img src="<?php echo APP_URL; ?>img/service/about_labo/txt_labo06.png" width="769" height="427" alt="ラボ型オフショア開発とは？" /></p>
		<p>弊社でのラボ型オフショア開発とは、クライアントから1名プロジェクトマネージャーに ベトナムにお越し頂き、そのプロジェクトマネージャーがベトナム人とチームを形成し開発を行っていく開発形態を意味します。ラボ型開発であれば、日本とのコミュニケーションの円滑化、開発クオリティの向上、無駄な販管費がかからず、安価な開発が可能となります。※日本での遠隔でのプロジェクトコントロールも可能です。その場合、弊社日本人エンジニアによる「開発サポート」サービスをご推奨いたします。</p>-->
		
		
		<p class="taC mt50 mb50"><a href="#contact_form"><img src="<?php echo APP_URL; ?>img/service/about_labo/btn_fix_new.png" alt="お問い合わせ" width="422" height="89" class="opa" /></a></p>
		
		<p class="taC mt50 mb50"><img src="<?php echo APP_URL; ?>img/service/about_labo/bnr_fix.png" alt="ラボ型オフショア開発" width="656" height="346" /></p>
		
		
		
		
		
		
		<h3 class="h3About h3About01 mt70">EVOLABLE ASIAでは</h3>
		<p class="taC t20b50"><img src="<?php echo APP_URL; ?>img/service/about_labo/txt_labo07.png" alt="EVOLABLE ASIAを利用するメリット" width="769" height="334" /></p>
		<p class="fwB fz14">小規模から大規模までのラボが在籍<br>総勢400名以上のベトナム人スタッフが在籍しています。</p>
		<ul class="laboList clearfix">
			<li><img src="<?php echo APP_URL; ?>img/service/about_labo/img_labo01.jpg" alt="ラボ型開発の様子1" width="242" height="168" /></li>
			<li><img src="<?php echo APP_URL; ?>img/service/about_labo/img_labo02.jpg" alt="ラボ型開発の様子2" width="242" height="168" /></li>
			<li><img src="<?php echo APP_URL; ?>img/service/about_labo/img_labo03.jpg" alt="ラボ型開発の様子3" width="242" height="168" /></li>
			<li><img src="<?php echo APP_URL; ?>img/service/about_labo/img_labo04.jpg" alt="ラボ型開発の様子4" width="242" height="168" /></li>
			<li><img src="<?php echo APP_URL; ?>img/service/about_labo/img_labo05.jpg" alt="ラボ型開発の様子5" width="242" height="168" /></li>
			<li><img src="<?php echo APP_URL; ?>img/service/about_labo/img_labo06.jpg" alt="ラボ型開発の様子6" width="242" height="168" /></li>
		</ul>
		<p class="fwB fz18 mt70">さらに品質を高めるためエボラブルアジア独自の対応を行っています。</p>
		<ul class="laboList clearfix">
			<li><img src="<?php echo APP_URL; ?>img/service/about_labo/img_japanese_school.jpg" alt="社内で日本語スクールを実施" width="242" height="168" class="t0b5" />
			社内で日本語スクールを実施</li>
			<li><img src="<?php echo APP_URL; ?>img/service/about_labo/img_for_vietnam.jpg" alt="ベトナム人スタッフの個別面談を実施" width="242" height="168" class="t0b5" />
			ベトナム人スタッフの個別面談を実施</li>
			<li><img src="<?php echo APP_URL; ?>img/service/about_labo/img_skill_lecture.jpg" alt="クライアント様のフォローアップ" width="242" height="168" class="t0b5" />
			クライアント様のフォローアップ</li>
		</ul>
		<p class="fwB fz18 mt70">また、ラボ型開発を開始後、<br>
ご利用のベトナム人のチームと共に自社のベトナム法人への<br>
移行も可能なので、最も安全な海外進出が可能です。</p>
		<p class="taC mt40"><img src="<?php echo APP_URL; ?>img/service/about_labo/txt_labo08.png" alt="海外で開発を行うならまずはラボ型開発が一番合理的です" width="769" height="59" /></p>
		
		
		<!-- <div class="btnAbout"><a href="../labo_result/"><img src="<?php echo APP_URL; ?>img/service/btn_about01.png" width="304" height="63" alt="開発実績" class="opa"/></a><a href="../../recommend/"><img src="<?php echo APP_URL; ?>img/service/btn_about02.png" width="305" height="63" alt="お客様の声" class="opa"/></a></div> !-->
		
		
		<p class="taC mt50 mb50"><a href="#contact_form"><img src="<?php echo APP_URL; ?>img/service/about_labo/btn_fix_new.png" alt="問い合わせる" width="422" height="89" class="opa" /></a></p>
		
		<h3 class="h3_fix01">開発実績</h3>
		<div class="clearfix mb50">
			<div class="leftSide">
				<p class="mb10"><img src="<?php echo APP_URL; ?>img/service/about_labo/img_fix_new01.png" alt="おやこでスマほん" width="325" height="182" /></p>
				<p class="fz18 fwB">おやこでスマほん</p>
				<p>株式会社スマートエデュケーション</p>
				<p class="mb10 mt10"><img src="<?php echo APP_URL; ?>img/service/about_labo/line.png" alt="おやこでスマほん" width="368" height="1" /></p>
				「おやこでスマほん」は、世界や日本の名作童話をはじめ、著名絵本作家らの書下ろし・インタラクティブ型作品や、写真満載の図鑑など、100作品以上がお楽しみいただけます。
ベトナムのスタッフは、この作品のオーサリングに携わってます。
			</div>
			
			<div class="leftSide ml30">
				<p class="mb10"><img src="<?php echo APP_URL; ?>img/service/about_labo/img_fix_new02.png" alt="柔道整復師の過去問題集" width="234" height="182" /></p>
				<p class="fz18 fwB">柔道整復師の過去問題集</p>
				<p>株式会社ギブリー</p>
				<p class="mb10 mt10"><img src="<?php echo APP_URL; ?>img/service/about_labo/line.png" alt="柔道整復師の過去問題集" width="368" height="1" /></p>
				第1回〜全ての問題、2013年までの柔道整復師の国家試験を収録した過去問アプリです。
			</div>
			
		</div>
		
		
		<h3 class="h3_fix01">参加企業の声</h3>
		<div class="clearfix">
			<p class="floatL mr20"><img src="<?php echo APP_URL; ?>img/service/about_labo/img_fix_new03.png" alt="参加企業の声" width="270" height="211" /></p>
			<div class="overflow">
				<p class="title">
				<img src="<?php echo APP_URL; ?>img/service/about_labo/logo01.png" alt="株式会社オーエフ" class="mr10" width="152" height="53" />
				<span class="fwB fz18">株式会社オーエフ</span>
				</p>
				
				<div class="mt10">
					<p class="icoQ1">御社の事業内容とベトナムでの事業について教えてください。</p>
					<p class="line20">
					株式会社オーエフデスクは、マンション内インターネット回線の施工から、マンションプロバイダー及びその周辺サービスの運用、サーバ及びNWの保守、コールセンタによるユーザサポートなどを主業務としております。また、WEBサイト制作及びWEBサービスの開発・自社運営なども多岐に渡って行っており、これら弊社が行っているアプリケーション開発全般をベトナムラボで行っていきたいと考えています。
					</p>
				</div>
				
			</div>
		</div>
		
		<p class="icoQ2 mt10">進出先としてベトナム、そして弊社を選んだ決め手を教えてください。</p>
		<p class="line20">
		弊社はもともとベトナム以外でのオフショア開発を行っておりましたが、品質・コスト共に十分に満足できる成果は上がっておらず、よりよい開発パートナーの模索を行っておりました。そんな折に、ベトナム人スタッフの評判とラボ型開発のメリットをお聞きし、コストパフォーマンスへの期待だけでなく、将来性にも大きな魅力を感じ、ラボ開設を決めました。
		</p>
		
		<p class="icoQ3 mt20">実際に駐在して感じた弊社の魅力があれば教えてください。</p>
		<p class="line20">
		まだ、エボラブルアジアの特徴なのかベトナム人スタッフの特徴なのかは判断のつかないところではありますが、どなたもまじめで、チームワークを重視し協調性が高いという印象を持っています。また、仕事に対するモチベーションの高さ、特に、難しいことにチャレンジしたいという意欲の高さには個人的にも刺激を受けています。
		</p>
		
		<p class="icoQ4 mt20">進出を考えられている企業様に一言お願いします！</p>
		<p class="line20">
		言葉の壁は当然ありますが、ラボ型開発は内製に近い感覚で、スタッフと一緒にプロジェクトに取り組むことができ、スタッフも素直にかつ、高いモチベーションで業務に取り組んでくれます。そこが通常のオフショア開発と比べて大きなメリットだと感じています。まずは誰かが飛び込んで実際にやってみることをお勧めします。
		</p>
		
		
		
		
		<div class="clearfix mt50">
			<p class="floatL mr20"><img src="<?php echo APP_URL; ?>img/service/about_labo/img_fix_new04.png" alt="参加企業の声" width="270" height="210" /></p>
			<div class="overflow">
				<p class="title">
				<img src="<?php echo APP_URL; ?>img/service/about_labo/logo_03.png" alt="SMARTEDUCATION, LTD." class="mr10"width="170" height="53" />
				<span class="fwB fz18">SMARTEDUCATION, LTD.</span>
				</p>
				
				<div class="mt10">
					<p class="icoQ1">御社の事業内容とベトナムでの事業について教えてください。</p>
					<p class="line20">
					私たちは「世界中の子供達のいきる力を育てたい」という思いで、スマートデバイス上で表現する知育教材を作っています。<br />
ベトナムでは絵本プラットフォームアプリ「おやこでスマほん」内で楽しめる新しい絵本作りを主に行っています。
					</p>
				</div>
				
			</div>
		</div>
		
		<p class="icoQ2 mt10">進出先としてベトナム、そして弊社を選んだ決め手を教えてください。</p>
		<p class="line20">
		エンジニアでなくてもアプリ上で絵本を作成できる弊社独自のオーサリング環境に従い、どのようにして絵本を安定的に作って行くか課題でした。スタッフに は、まず環境を覚えてもらい、個々の作品に理解と共感をしてもらう必要があります。ベトナム人は「勤勉」「親日」ということもあり、コストを抑えつつス ピード感を持って、課題を解決できる可能性を感じたからです。
		</p>
		
		<p class="icoQ3 mt20">実際に駐在して感じた弊社の魅力があれば教えてください。</p>
		<p class="line20">
		人事や総務などの管理業務を行って頂けるため、自分は日本にいた時と同様にコンテンツ制作業務に集中出来る点です。
		</p>
		
		<p class="icoQ4 mt20">ベトナム人スタッフに任せている業務や彼らの活躍について教えてください。</p>
		<p class="line20">
		絵本のオーサリングはもちろんの事、制作物のチェックなどもベトナム人スタッフが行います。自分たちでチェックする機能を持つことで、作品の精度が上がりました。
また現地でもグラフィック素材を調達しています。最初は私自身が行っていた、日本から送られてくるシナリオに合せて演出を考え、現地法人へ発注するディレク ション業務などもを任せています。自分たちがオーサリングする作品にどのような素材があればより良い作品になるか、そこから考え携わる事で作品のクオリ ティーが上がりました。また新しいスタッフの教育も現地スタッフのみで行っています。
		</p>
		
		
		
		<p class="taC mt50 mb30" id="contact_form"><img src="<?php echo APP_URL; ?>img/service/about_labo/h3_fix.png" alt="" width="769" height="140" /></p>
		
		<h3 class="h3_fix02">お電話でのお問い合わせ</h3>
		<p class="mb50"><img src="<?php echo APP_URL; ?>img/service/about_labo/img_tel.png" alt="" width="566" height="32" /></p>
		
		<h3 class="h3_fix02">フォームからお問い合わせ</h3>
		
		<form method="post" class="form-1" action="<?php echo $script ?>?<?php echo $gtime ?>" name="form1" onsubmit="return check()" >
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
				<th>お問い合わせ項目<em>※</em></th>
				<td>
				<select class="styled chkselect" id="itemSelect" name="itemSelect">
					<option value=''>▼下記からお選びください</option>
					<option value="ベトナムでラボ型オフショア開発に関心がある">ベトナムでラボ型オフショア開発に関心がある</option>
					<option value="ベトナムでラボ型オフショア開発を検討している">ベトナムでラボ型オフショア開発を検討している</option>
					<option value="ベトナムのITビジネス事情を視察したいと思っている">ベトナムのITビジネス事情を視察したいと思っている</option>
					<option value="ベトナムを活用してコストダウンする提案をしてほしい">ベトナムを活用してコストダウンする提案をしてほしい</option>
					<option value="詳しい資料を送ってほしい">詳しい資料を送ってほしい</option>
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
function html_header(){

?>
<?php include_once('/home/1705726298/evolable-asia/public_html/app_config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ラボ型オフショア開発｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア</title>
<meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジアのお問い合わせページです。" />
<meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />
<link rel="icon" href="<?php echo APP_URL; ?>common/img/ico/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/sub.css?20141121" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/top.css?20141121" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/base.css?20141121" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/layout.css?20141121" type="text/css" media="all" />

<link type="text/css" rel="stylesheet" href="css/exvalidation.css?20141121" />
<link type="text/css" rel="stylesheet" href="css/base.css?20141121" />
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
<?php include(TEMPLATEPATH . '/tracklist-finderjp.php'); ?>
</head>
<body id="service">

<?php include(TEMPLATEPATH . '/header2.php'); ?>
<?php include(TEMPLATEPATH . '/gNavi.php'); ?>

<!--Container-->
<div id="container" class="clearfix">

	<?php
	}

	////////////////////////////////////////////////////////////////////////////// HTMLフッター
	function html_footer(){
	?>

</div>
<!--/Container-->
<?php get_footer(); ?>
<script type="text/javascript" src="./js/jquery.customSelect.js"></script>
<script type="text/javascript">
$(function(){
$('select.styled').customSelect();
});
</script>
<script type="text/javascript" src="./js/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript" src="./js/jquery.cookie.js"></script>
<script type="text/javascript" src="./js/exvalidation.js"></script>
<script type="text/javascript" src="./js/exchecker-ja.js"></script>
<script type="text/javascript">
	$(function(){
	  $("form").exValidation({
	    rules: {
			company: "chkrequired",
			itemSelect: "chkselect",
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
<script type="text/javascript" src="./js/jquery.gafunc.js"></script>
</body>
</html>
<?php
	exit;
}
?>