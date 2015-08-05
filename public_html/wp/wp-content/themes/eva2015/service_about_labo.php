<?php
/*
 * Author: KhangLe
 * Template Name: Service-About-Labo
 * 
 */

$reg_company = @$_SESSION['contact']['company'];
$reg_division = @$_SESSION['contact']['division'];
$reg_name = @$_SESSION['contact']['name'];
$reg_email = @$_SESSION['contact']['email'];
$reg_tel = @$_SESSION['contact']['tel'];
$reg_itemSelect = @$_SESSION['contact']['itemSelect'];
$reg_content = @$_SESSION['contact']['content'];

$arr_itemSelect = array(
    '▼下記からお選びください',
    'ベトナムでラボ型オフショア開発に関心がある',
    'ベトナムでラボ型オフショア開発を検討している',
    'ベトナムでBPOを検討している',
    'エボラブルアジアデザインチームに興味がある',
    'ベトナムのITビジネス事情を視察したいと思っている',
    'ベトナムを活用してコストダウンする提案をしてほしい',
    '詳しい資料を送ってほしい',
    '採用に関するお問い合わせ',
    'その他',
);

get_header();
?>

<section>

    <div class="container service-about-labo">
        <div class="row">
            <div class="col-md-12 col-xs-12">

                <h2 class="mb50"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/h2_labo.png" width="769" height="377" alt="ラボ型開発"/></h2>
                <p class="taC t0b50"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/txt_labo01.png" alt="ラボ型開発のススメ" width="550" height="267" /></p>
                <div class="aboutBlock t0b30">
                    <div class="inner">
                        <h3><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/h3_labo01.png" alt="海外でオフショア開発での問題点" width="748" height="36" /></h3>
                        <ul class="txtList01">
                            <li>オフショア開発でもコストが高い（1人月30〜35万円）</li>
                            <li>品質に不安が残る</li>
                            <li>コミュニケーションが上手くいかない</li>
                            <li>安いと思ったが手間ばかりかかり、反対にコストが高くつく</li>
                        </ul>
                        <p class="person01"><img src="<?php echo get_template_directory_uri() ?>/img/service/img_person01.png" alt="海外でのオフショア開発の問題点" width="167" height="167" /></p>
                    </div>
                    <!-- /aboutBlock -->
                </div>

                <div class="aboutBlock">
                    <div class="inner">
                        <h3><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/h3_labo02.png" alt="自社単独での海外進出の問題点" width="748" height="36" /></h3>
                        <ul class="txtList01">
                            <li>業務を行うまでに、会社設立など時間とお金がかかる</li>
                            <li>家賃などのコストが高い</li>
                            <li>本業以外の業務（会計、支払いなど）に、時間が割かれる</li>
                            <li>数人規模では、海外開発のメリットが出ない</li>
                            <li>人材がすぐ辞める。自社単独での求人が難しい</li>
                        </ul>
                        <p class="person01"><img src="<?php echo get_template_directory_uri() ?>/img/service/img_person01.png" alt="自社単独での海外進出の問題点" width="167" height="167" /></p>
                    </div>
                    <!-- /aboutBlock -->
                </div>
                <p class="taC t0b30"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/txt_labo02.png" alt="エボラブルアジアでオフショア開発の問題点を解決" width="730" height="157" /></p>
                <div class="aboutBlock">
                    <div class="inner">
                        <h3><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/h3_labo03.png" alt="エボラブルアジアのラボ型オフショア開発" width="747" height="36" /></h3>
                        <ul class="txtList02">
                            <li>受託型オフショア開発よりも安い開発コストを実現！</li>
                            <li>品質も高いクオリティを実現！</li>
                            <li>日本とのコミュニケーションも円滑に！</li>
                            <li>会社設立などをせず、ベトナムですぐに開発が可能！</li>
                            <li>家賃など煩雑な経費は一切なし！</li>
                            <li>ベトナム人1人規模から可能！</li>
                            <li>ベトナム人のモチベーション維持も可能！</li>
                        </ul>
                        <p class="taC txtStyle01"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/txt_labo04.png" alt="つまり、素早く、海外での開発をスタートすることができ、質の高い開発を低コストで行うことが可能です！" width="737" height="103" /></p>
                        <p class="person03"><img src="<?php echo get_template_directory_uri() ?>/img/service/img_person03.png" alt="素早く、質の高い開発を低コストで実現" width="166" height="316" /></p>
                    </div>
                    <!-- /aboutBlock -->
                </div>

                <p class="taC mt50 mb50"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/txt_labo05.png" alt="なぜラボ型開発で夢のような環境が実現するのか" width="422" height="48" /></p>
                <p class="taC"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/txt_labo06.jpg" width="707" height="1042" alt="ラボ型オフショア開発とは？" /></p>
                        <!--<p class="taC t0b15"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/txt_labo06.png" width="769" height="427" alt="ラボ型オフショア開発とは？" /></p>
                        <p>弊社でのラボ型オフショア開発とは、クライアントから1名プロジェクトマネージャーに ベトナムにお越し頂き、そのプロジェクトマネージャーがベトナム人とチームを形成し開発を行っていく開発形態を意味します。ラボ型開発であれば、日本とのコミュニケーションの円滑化、開発クオリティの向上、無駄な販管費がかからず、安価な開発が可能となります。※日本での遠隔でのプロジェクトコントロールも可能です。その場合、弊社日本人エンジニアによる「開発サポート」サービスをご推奨いたします。</p>-->


                <p class="taC mt50 mb50"><a href="#contact_form"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/btn_fix_new.png" alt="お問い合わせ" width="422" height="89" class="opa" /></a></p>

                <p class="taC mt50 mb50"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/bnr_fix.png" alt="ラボ型オフショア開発" width="656" height="346" /></p>






                <h3 class="h3About h3About01 mt70">EVOLABLE ASIAでは</h3>
                <p class="taC t20b50"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/txt_labo07.png" alt="EVOLABLE ASIAを利用するメリット" width="769" height="334" /></p>
                <p class="fwB fz14">小規模から大規模までのラボが在籍<br>総勢400名以上のベトナム人スタッフが在籍しています。</p>
                <ul class="laboList clearfix">
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/img_labo01.jpg" alt="ラボ型開発の様子1" width="242" height="168" /></li>
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/img_labo02.jpg" alt="ラボ型開発の様子2" width="242" height="168" /></li>
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/img_labo03.jpg" alt="ラボ型開発の様子3" width="242" height="168" /></li>
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/img_labo04.jpg" alt="ラボ型開発の様子4" width="242" height="168" /></li>
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/img_labo05.jpg" alt="ラボ型開発の様子5" width="242" height="168" /></li>
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/img_labo06.jpg" alt="ラボ型開発の様子6" width="242" height="168" /></li>
                </ul>
                <p class="fwB fz18 mt70">さらに品質を高めるためエボラブルアジア独自の対応を行っています。</p>
                <ul class="laboList clearfix">
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/img_japanese_school.jpg" alt="社内で日本語スクールを実施" width="242" height="168" class="t0b5" />
                        社内で日本語スクールを実施</li>
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/img_for_vietnam.jpg" alt="ベトナム人スタッフの個別面談を実施" width="242" height="168" class="t0b5" />
                        ベトナム人スタッフの個別面談を実施</li>
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/img_skill_lecture.jpg" alt="クライアント様のフォローアップ" width="242" height="168" class="t0b5" />
                        クライアント様のフォローアップ</li>
                </ul>
                <p class="fwB fz18 mt70">また、ラボ型開発を開始後、<br>
                    ご利用のベトナム人のチームと共に自社のベトナム法人への<br>
                    移行も可能なので、最も安全な海外進出が可能です。</p>
                <p class="taC mt40"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/txt_labo08.png" alt="海外で開発を行うならまずはラボ型開発が一番合理的です" width="769" height="59" /></p>


<!-- <div class="btnAbout"><a href="../labo_result/"><img src="<?php echo get_template_directory_uri() ?>/img/service/btn_about01.png" width="304" height="63" alt="開発実績" class="opa"/></a><a href="../../recommend/"><img src="<?php echo get_template_directory_uri() ?>/img/service/btn_about02.png" width="305" height="63" alt="お客様の声" class="opa"/></a></div> !-->


                <p class="taC mt50 mb50"><a href="#contact_form"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/btn_fix_new.png" alt="問い合わせる" width="422" height="89" class="opa" /></a></p>

                <h3 class="h3_fix01">開発実績</h3>
                <div class="clearfix mb50">
                    <div class="leftSide">
                        <p class="mb10"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/img_fix_new01.png" alt="おやこでスマほん" width="325" height="182" /></p>
                        <p class="fz18 fwB">おやこでスマほん</p>
                        <p>株式会社スマートエデュケーション</p>
                        <p class="mb10 mt10"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/line.png" alt="おやこでスマほん" width="368" height="1" /></p>
                        「おやこでスマほん」は、世界や日本の名作童話をはじめ、著名絵本作家らの書下ろし・インタラクティブ型作品や、写真満載の図鑑など、100作品以上がお楽しみいただけます。
                        ベトナムのスタッフは、この作品のオーサリングに携わってます。
                    </div>

                    <div class="leftSide ml30">
                        <p class="mb10"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/img_fix_new02.png" alt="柔道整復師の過去問題集" width="234" height="182" /></p>
                        <p class="fz18 fwB">柔道整復師の過去問題集</p>
                        <p>株式会社ギブリー</p>
                        <p class="mb10 mt10"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/line.png" alt="柔道整復師の過去問題集" width="368" height="1" /></p>
                        第1回〜全ての問題、2013年までの柔道整復師の国家試験を収録した過去問アプリです。
                    </div>

                </div>


                <h3 class="h3_fix01">参加企業の声</h3>
                <div class="clearfix">
                    <p class="floatL mr20"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/img_fix_new03.png" alt="参加企業の声" width="270" height="211" /></p>
                    <div class="overflow">
                        <p class="title">
                            <img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/logo01.png" alt="株式会社オーエフ" class="mr10" width="152" height="53" />
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
                    <p class="floatL mr20"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/img_fix_new04.png" alt="参加企業の声" width="270" height="210" /></p>
                    <div class="overflow">
                        <p class="title">
                            <img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/logo_03.png" alt="SMARTEDUCATION, LTD." class="mr10"width="170" height="53" />
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



                <p class="taC mt50 mb30" id="contact_form"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/h3_fix.png" alt="" width="769" height="140" /></p>


                <!-- // form contact -->
                <div class="container contact">
                    <h3 class="h3_fix02">お電話でのお問い合わせ</h3>
                    <p class="mb50"><img src="<?php echo get_template_directory_uri() ?>/img/service/about_labo/img_tel.png" alt="" width="566" height="32" /></p>
                    <h2 class="title">フォームからお問い合わせ</h2>
                    <h3 class="title">下記に必要事項をご記入の上、お問い合わせください。</h3>
                    <p>
                        <span class="red">※</span>
                        印の入力は必須です。
                    </p>

                    <form id="contact-form" class="form-horizontal" method="POST" action="<?php bloginfo('url') ?>/service/about-labo/confirm" novalidate="novalidate">
                        <div class="form-group">
                            <label for="contact-company-name" class="col-sm-3 control-label">会社名<span class="red">※</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="contact-company-name" name="company" class="form-control" placeholder="" value="<?php echo $reg_company ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-division-name" class="col-sm-3 control-label">部署名</label>
                            <div class="col-sm-9">
                                <input type="text" id="contact-division-name" name="division" class="form-control" placeholder="" value="<?php echo $reg_division ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-name" class="col-sm-3 control-label">お名前<span class="red">※</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="contact-name" name="ur_name" class="form-control" placeholder="" value="<?php echo $reg_name ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-email" class="col-sm-3 control-label">E-mail<span class="red">※</span></label>
                            <div class="col-sm-9">
                                <input type="email" id="contact-email" name="email" class="form-control" placeholder="" value="<?php echo $reg_email ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-tel" class="col-sm-3 control-label">Tel<span class="red">※</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="contact-tel" name="tel" class="form-control" placeholder="" value="<?php echo $reg_tel ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-item" class="col-sm-3 control-label">お問い合わせ項目<span class="red">※</span></label>
                            <div class="col-sm-9">
                                <?php
                                echo mwp_dropdownList($arr_itemSelect, array('id' => 'contact-item', 'name' => 'itemSelect', 'class' => 'form-control'), $reg_itemSelect, false, array(0));
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-content" class="col-sm-3 control-label">お問い合わせ内容<span class="red">※</span></label>
                            <div class="col-sm-9">
                                <textarea id="contact-content" name="content" class="form-control"><?php echo $reg_content ?></textarea>
                            </div>
                        </div>

                        <div class="form-group send">
                            <div class="col-sm-12 hold-btn-send">
                                <button class="btn btn-success center-block" type="submit">同意して送信</button>
                                <input type="hidden" name="submit" value="submit"/>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- // end form contact -->

            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>