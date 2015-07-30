<?php
/*
 * Author: KhangLe
 * Template Name: Contact-Thankyou
 * 
 */

get_header();
?>

<section>
    <div class="container contact">
        <div class="">
            <!--        <ul id="bread" class="clearfix">
                        <li><a href="<?php echo home_url(); ?>">TOP</a></li>
                        <li>お問い合わせ</li>
                    </ul>-->
            <h2 class="t0b30"><img src="<?php echo get_template_directory_uri() ?>/img/h2_contact.jpg" alt="お問い合わせ CONTACT" width="770" height="210" class="img-responsive" /></h2>
            <p class="t20b20 taC fwB fz16"> お問い合わせありがとうございます。 </p>
            <p class="t20b20">送信が完了いたしました。<br />
                弊社で確認後、折り返しご連絡させていただきます。<br />
            </p>
            <p class=" t20b0 txtContact02 fwB"><a href="/">←TOPへ戻る</a></p>
            <p class="taC t30b0">上記フォームで送信できない場合は、必要項目をご記入の上、<br />
                <a href="mailto:info@evolable.asia">info@evolable.asia</a>までメールをお送りください。</p>
        </div>
    </div>
</section>

<?php
get_footer();
?>