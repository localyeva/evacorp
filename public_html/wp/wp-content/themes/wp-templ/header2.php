<?php
	$requesturi =  @$_SERVER[REQUEST_URI];
	$pagename_a = explode("/", @$requesturi);
	$pagename = @$pagename_a[1];
	$pagename01 = @$pagename_a[2];
	$pagename02 = @$pagename_a[3];
	$h1text = "ベトナム（ホーチミン/ハノイ）でのオフショア開発、<br />BPO（アウトソーシング）、ラボ型オフショア開発ならエボラブルアジア";

	if($pagename == "news") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアのニュースページです。";
	if($pagename == "recommend") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジア参加企業の声ページです。";
	if($pagename == "about_vietnam") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアのコラムページです。";
	if($pagename == "vietnam") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアのベトナムの魅力ページです。";
	if($pagename == "faq") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアのよくあるご質問ページです。";
	if($pagename == "recruit") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアの求人情報ページです。";
	if($pagename == "contact") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアのお問い合わせページです。";
	if($pagename == "sitemap") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアのサイトマップページです。";
	if($pagename == "privacypolicy") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアのプライバシーポリシーページです。";

	if($pagename == "company") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアの企業情報ページです。";
	if($pagename == "company" && $pagename01 == "company_profile") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアの会社概要ページです。";
	if($pagename == "company" && $pagename01 == "greeting") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアの代表挨拶ページです。";
	if($pagename == "company" && $pagename01 == "staff") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアのスタッフ紹介ページです。";
	if($pagename == "company" && $pagename01 == "circle") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアの社内取組み紹介ページです。";
	if($pagename == "company" && $pagename01 == "gallery") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアのギャラリーページです。";
	if($pagename == "company" && $pagename01 == "movie") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアの動画紹介ページです。";

	if($pagename == "service") $h1text = "ベトナムでのオフショア開発、ラボ型オフショア開発、<br />BPOのエボラブルアジアのサービスページです。";
	if($pagename == "service" && $pagename01 == "about_labo") $h1text = "ベトナムでのラボ型オフショア開発のエボラブルアジア<br />のラボ型オフショア開発ページです。";
	if($pagename == "service" && $pagename01 == "labo_result") $h1text = "ベトナムでのラボ型オフショア開発のエボラブルアジア<br />のラボ型オフショア開発の実績ページです。";
	if($pagename == "service" && $pagename01 == "about_bpo") $h1text = "ベトナムでのBPOのエボラブルアジアのBPO<br />（アウトソーシング）についての紹介ページです。";
	if($pagename == "service" && $pagename01 == "bpo_result") $h1text = "ベトナムでのBPOのエボラブルアジアのBPO<br />（アウトソーシング）実績ページです。";
?>
<div id="headerWrap" class="clearfix">
	<!-- /header start -->
	<div class="headerL clearfix">
            <p id="logo"><a href="<?php echo get_home_url() ?>"><img src="<?php echo get_home_url(); ?>/common/img/header/logo.png" alt="evolable asia" width="152" height="61" class="opa" /></a></p>
		<h1><?php echo $h1text; ?></h1>
	</div>
	<p class="btnContact"><img src="<?phpecho get_home_url() ?>/common/img/header/txt_bpo.png" alt="ベトナムでのラボ型開発やBPOのご相談はコチラ" width="137" height="39" /><a href="<?php echo home_url(); ?>/contact/"><img src="<?php echo APP_URL; ?>common/img/header/btn_bpo.png" alt="お問合わせ/ご相談" width="175" height="39" class="opa" /></a></p>
	<!-- /header end -->
</div>