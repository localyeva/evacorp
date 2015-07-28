<?php include_once('/home/1705726298/evolable-asia/public_html/app_config.php'); ?>
<?php include_once(APP_PATH_WP.'wp-load.php'); ?>
<?php get_header(); ?>
<title>会社概要｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア</title>
<meta name="description" content="ベトナムでのオフショア開発、ラボ型オフショア開発、BPOのエボラブルアジアの会社概要ページです。" />
<meta name="keywords" content="ベトナム, オフショア開発, ラボ型オフショア開発, BPO, アウトソーシング, ホーチミン, エボラブルアジア, Evolable Asia" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/sub.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/individual/top.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/layout.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo APP_URL; ?>common/css/base.css" type="text/css" media="all" />
<!-- FACE BOOK start -->
<meta property="og:title" content="会社概要｜オフショア ベトナム｜ベトナムでのラボ型オフショア開発、BPOならエボラブルアジア" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" />
<meta property="og:image" content="" />
<!-- //FACE BOOK end -->
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

<body id="company">
<?php include(TEMPLATEPATH . '/header2.php'); ?>
<?php include(TEMPLATEPATH . '/gNavi.php'); ?>
<div id="container" class="clearfix">
	<!-- /container start -->

	<div id="mainContent">
		<!-- /mainContent start -->

		<ul id="bread" class="clearfix">
			<li> <a href="<?php echo home_url(); ?>">TOP</a> </li>
			<li> <a href="<?php echo home_url(); ?>/company/">企業情報</a> </li>
			<li>会社概要</li>
		</ul>
		<h2 class="t0b35"><img src="<?php echo APP_URL; ?>img/company/profile/h2_profile.jpg" width="770" height="210" alt="会社概要" /></h2>
		<?php
			$wp_query = new WP_Query();
			$param=array(
					'post_type'=>'company_profile',
					'order' => 'DESC',
					'post_status'=>'publish',
					'posts_per_page' => '1',
					'paged' => $paged,
					);
			$wp_query->query($param);
			if($wp_query->have_posts()):while($wp_query->have_posts()) : $wp_query->the_post();
		?>
		<table class="profileTable">
			<tr>
				<th><p>社名<span>Company name</span></p></th>
				<td><?php the_field('name'); ?></td>
			</tr>
			<tr>
				<th><p>所在地<span>Address</span></p></th>
				<td><?php the_field('location'); ?></td>
			</tr>
			<tr>
				<th><p>電話番号(Phone)</p></th>
				<td><?php the_field('phone_number'); ?></td>
			</tr>
			<tr>
				<th><p>FAX</p></th>
				<td><?php the_field('fax'); ?></td>
			</tr>
			<tr>
				<th><p>役員<span>Office</span></p></th>
				<td><?php the_field('officer'); ?></td>
			</tr>
			<tr>
				<th><p>設立<span>Date of establishment</span></p></th>
				<td><?php the_field('establishment'); ?></td>
			</tr>
			<tr>
				<th><p>資本金<span>Capital stock</span></p></th>
				<td><?php the_field('Capital'); ?></td>
			</tr>
			<tr>
				<th><p>事業内容<span>Business Description</span></p></th>
				<td><?php the_field('desc'); ?></td>
			</tr>
			<tr>
				<th><p>ライセンスNo.<span>License No.</span></p></th>
				<td><?php the_field('licence'); ?></td>
			</tr>
			<tr>
				<th><p>従業員数<span>Number of Employees</span></p></th>
				<td><?php the_field('staff'); ?></td>
			</tr>
			<tr>
				<th><p>主要取引銀行<span>Main Bank</span></p></th>
				<td><?php the_field('bank'); ?></td>
			</tr>
			<tr>
				<th><p>経営理念<span>Management Principles</span></p></th>
				<td><?php the_field('principles'); ?></td>
			</tr>
		</table>
		<?php endwhile;endif;?>
		<h3 class="h3Company">関連会社</h3>
		<ul class="ul_profile01">
			<li class="clearfix t0b20">
				<p class="floatL"><a href="http://www.evolableasia.com/" target="_blank"><img src="<?php echo APP_URL; ?>img/company/profile/img_logo01.png" alt="株式会社エボラブルアジア" width="152" height="95" class="opa" /></a></p>
				<p class="desc"><b>株式会社エボラブルアジア</b><br />
「オンラインに特化した旅行会社として、また、旅行コンテンツOEM提供モデルを競争力として、旅行業界における主要分野（国内、海外、航空券、ホテル、旅行）とのM＆Aを含めた資本業務提携を積極的に行うことで、お客様視点を全ての基盤とした、次世代の総合旅行サービス提供。」</p>
			</li>
			<li class="clearfix">
				<p class="floatL"><a href="http://soltecvn.com/" target="_blank"><img src="<?php echo APP_URL; ?>img/company/profile/img_logo02.png" alt="Soltec Vietnam" width="152" height="95" class="opa" /></a></p>
				<p class="desc"><b>Soltec Vietnam</b><br />Soltec Vietnam Companyは2010年9月17日に、（株）ソルテック工業の100％出資子会社として誕生致しました。弊社は、親会社である（株）ソルテック工業の長年培った経験と技術を生かし、ベトナムにおいて日本の品質基準に準じた各種プラント設備製作・据付工事・配管工事を展開させて頂きます。また独自の教育管理ノウハウを生かして、日本品質をベトナムで実現しております。そこで培われたマネジメントノウハウの一部はEvolable Asia Co.,Ltdにも生かされています。</p>
			</li>
		</ul>
		
		<ul class="ul_company02">
			<li>
				<h3 class="h3Company">ホーチミン本社</h3>
				<div class="clearfix">
				
					<div class="floatL">
				<p class="imageProfile"><img src="<?php echo APP_URL; ?>img/company/profile/img_outside.jpg" alt="オフィス外観" width="220" height="300" /></p>
				<p><b>オフィス外観</b><br />エボラブルアジアのオフィスがあるビル<br />です。このビルの4、5、6、9階にオフ<br />ィスがあります。</p>
			</div>
			<div class="profileContent01 t0b30">
				<ul class="ul_profile02 clearfix t0b20">
					<li>
						<p class="imageProfile"><img src="<?php echo APP_URL; ?>img/company/profile/img_entrance.jpg" alt="エントランス" width="220" height="137" /></p>
						<p><b>エントランス</b><br />4階のエボラブルアジアのエントランスです。参加企業のロゴを掲示しています。</p>
					</li>
					<li class="noMR">
						<p class="imageProfile"><img src="<?php echo APP_URL; ?>img/company/profile/img_4thfloor.jpg" alt="4階オフィス" width="220" height="137" /></p>
						<p><b>4階オフィス</b><br />4階のエボラブルアジアのオフィスです。</p>
					</li>
				</ul>
				<ul class="ul_profile02 clearfix">
					<li>
						<p class="imageProfile"><img src="<?php echo APP_URL; ?>img/company/profile/img_9thfloor.jpg" alt="9階オフィス" width="220" height="137" /></p>
						<p><b>9階オフィス</b><br />9階のエボラブルアジアのオフィスです。</p>
					</li>
					<li class="noMR">
						<p class="imageProfile"><img src="<?php echo APP_URL; ?>img/company/profile/img_meetingroom.jpg" alt="ミーティングルーム" width="220" height="137" /></p>
						<p><b>ミーティングルーム</b><br />各階にミーティングルームを併設しています。</p>
					</li>
				</ul>
			</div>
					
				</div>
				
				<p class="t20b0"><iframe width="770" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=vi&amp;q=9+%C4%90inh+Ti%C3%AAn+Ho%C3%A0ng,+%C4%90a+Kao,+Qu%E1%BA%ADn+1,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam&amp;aq=&amp;sll=10.793525,106.69241&amp;sspn=0.036634,0.045662&amp;ie=UTF8&amp;geocode=FXWbpAAdqh5cBg&amp;split=0&amp;hq=&amp;hnear=9+%C4%90inh+Ti%C3%AAn+Ho%C3%A0ng,+%C4%90a+Kao,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam&amp;t=m&amp;ll=10.794103,106.696129&amp;spn=0.03794,0.066004&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=vi&amp;q=9+%C4%90inh+Ti%C3%AAn+Ho%C3%A0ng,+%C4%90a+Kao,+Qu%E1%BA%ADn+1,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam&amp;aq=&amp;sll=10.793525,106.69241&amp;sspn=0.036634,0.045662&amp;ie=UTF8&amp;geocode=FXWbpAAdqh5cBg&amp;split=0&amp;hq=&amp;hnear=9+%C4%90inh+Ti%C3%AAn+Ho%C3%A0ng,+%C4%90a+Kao,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam&amp;t=m&amp;ll=10.794103,106.696129&amp;spn=0.03794,0.066004&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left"></a></small></p>
				
				
			</li>
			
			<li>
				<h3 class="h3Company">ホーチミン支社</h3>
				<div class="clearfix">
				
					<div class="imgFront">
						<img src="/img/company/top/img_outside_branch.jpg" width="220" height="300" alt="" class="imgbor"/>
						<p class="fwB"><strong>オフィス外観</strong></p>
						<p>エボラブルアジア ホーチミン支社が入っているビルの外観です。</p>
					</div>
					<ul class="ul_company03 clearfix">
						<li>
							<img src="/img/company/top/img_entrance_branch.jpg" width="220" height="137" alt="" class="imgbor" />
							<p class="fwB">エントランス</p>
							<p>エントランスにはオシャレなソファが置いてあり、遊び心に溢れています。</p>
						</li>
						<li class="noMR">
							<img src="/img/company/top/img_office_branch.jpg" width="220" height="137" alt="" class="imgbor" />
							<p class="fwB">オフィス</p>
							<p>ベトナムIT企業には少ない、オシャレなオフィス内装です。</p>
						</li>
						<li>
							<img src="/img/company/top/img_staff_branch.jpg" width="220" height="137" alt="" class="imgbor" />
							<p class="fwB">エボラブルアジアスタッフ</p>
							<p>若くて元気なスタッフがアナタのビジネスをサポートします。</p>
						</li>
						<li class="noMR">
							<img src="/img/company/top/img_meeting_branch.jpg" width="220" height="137" alt="" class="imgbor" />
							<p class="fwB">ミーティングルーム</p>
							<p>和風を意識したミーティングルーム「利休」など複数のミーティングルームを用意しています。</p>
						</li>
					</ul>
					
				</div>
				
				<p class="t20b0">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7838.5885118572605!2d106.70368189999999!3d10.788760100000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4b325be895%3A0x8aaa2fb73d5902a8!2zNiBOZ3V54buFbiBUaOG7iyBNaW5oIEtoYWksIMSQYSBLYW8sIFF14bqtbiAx!5e0!3m2!1svi!2s!4v1404196139020" width="770" height="450" frameborder="0" style="border:0"></iframe>
				</p>
				
				
			</li>
			
			
			<li>
				<h3 class="h3Company">ハノイ支社</h3>
				<div class="clearfix">
				
					<div class="imgFront mb40">
						<img src="/img/company/top/img_outside_hanoi.jpg" width="220" height="300" alt="" class="imgbor"/>
						<p class="fwB">オフィス外観</p>
						<p>エボラブルアジア ハノイ支社が入っているビルの外観です。</p>
					</div>
					<ul class="ul_company03 clearfix">
						<li>
							<img src="/img/company/top/img_entrance_hanoi.jpg" width="220" height="137" alt="" class="imgbor" />
							<p class="fwB">エントランス</p>
							<p>ハノイ支店のエントランスです。</p>
						</li>
						<li class="noMR">
							<img src="/img/company/top/img_office_hanoi.jpg" width="220" height="137" alt="" class="imgbor" />
							<p class="fwB">オフィス</p>
							<p>数百人規模を想定したオフィスの広さになります。</p>
						</li>
						
					</ul>
					
				</div>
				
				<p class="t20b0">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7447.984561908287!2d105.78090755223319!3d21.03299485825661!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjHCsDAxJzUwLjIiTiAxMDXCsDQ3JzA5LjQiRQ!5e0!3m2!1sen!2smy!4v1404196574210" width="770" height="450" frameborder="0" style="border:0"></iframe></p>
				
				
			</li>
			
			
		</ul>

		<?php include(TEMPLATEPATH . '/contactBox.php'); ?>
		<!-- /maincontent end -->
	</div>

	<?php get_sidebar(); ?>
    <!-- /container end -->
</div>
<?php get_footer(); ?>
</body>
</html>