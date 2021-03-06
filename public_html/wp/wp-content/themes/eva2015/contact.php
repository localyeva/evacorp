<?php
/*
 * Author: KhangLe
 * Template Name: Contact
 * 
 */

$reg_company = @$_SESSION['contact']['company'];
$reg_division = @$_SESSION['contact']['division'];
$reg_name = @$_SESSION['contact']['name'];
$reg_email = @$_SESSION['contact']['email'];
$reg_tel = @$_SESSION['contact']['tel'];
$reg_inq = @$_SESSION['contact']['inq'];
$reg_inq_other = @$_SESSION['contact']['inq_other'];
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

$reg_inq_all = '';
$arr_inq = array('知人の紹介', '雑誌', '新聞', 'テレビ', 'インターネット記事', 'インターネット検索', 'Facebook', 'EVOLABLE ASIAブログ', 'その他');
$arr_inq_checked = array('', '', '', '', '', '', '', '', '');
if (is_array($reg_inq)) {
    foreach ($reg_inq as $value) {
        $key = array_search($value, $arr_inq);
        $arr_inq_checked[$key] = 'checked';
        //
        $reg_inq_all .= htmlspecialchars($value) . "<br/>";
    }
}

get_header();
?>

<section>
    <div class="keyvisual-contact">
        <div class="text">
            <p class="lead main">
                <?php echo get_contact_text_1() ?>
            </p>
            <p class="lead">
                <?php echo get_contact_text_2() ?>
            </p>
        </div>
    </div>

    <div class="container contact">

        <p class="eva-info">
            EVOLABLE ASIA Co., Ltd<br/>
            4 Floor, Saigon Finance Center<br/>
            No 9, Dinh Tien Hoang Street, Dist.1, HCM City.<br/>
            Tel : (84.8) 39111489<br/>
            Fax : (84.8) 39118767<br/>
            Email : info@evolable.asia
        </p>

        <h2 class="title">下記に必要事項をご記入の上、お問い合わせください。</h2>
        <p>
            <span class="red">※</span>
            印の入力は必須です。
        </p>

        <form id="contact-form" class="form-horizontal" method="POST" action="<?php bloginfo('url') ?>/contact/confirm" novalidate="novalidate">
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
                <label for="contact-tel" class="col-sm-3 control-label">どこでエボラブルアジアを知りましたか?</label>
                <div class="col-sm-9">
                    <div class="checkbox">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value="知人の紹介" <?php echo $arr_inq_checked[0] ?>/> 知人の紹介
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value="雑誌" <?php echo $arr_inq_checked[1] ?>/> 雑誌
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value="新聞" <?php echo $arr_inq_checked[2] ?>/> 新聞
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value="テレビ <?php echo $arr_inq_checked[3] ?>"/> テレビ
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value="インターネット記事" <?php echo $arr_inq_checked[4] ?>/> インターネット記事
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value="インターネット検索" <?php echo $arr_inq_checked[5] ?>/> インターネット検索
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value="Facebook" <?php echo $arr_inq_checked[6] ?>/> Facebook
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value="テレビ" <?php echo $arr_inq_checked[7] ?>/> EVOLABLE ASIAブログ
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="other">
                            <input type="checkbox" id="inq_o" name="inq[]" for="contact-inq_other_text" value="その他" <?php echo $arr_inq_checked[8] ?>/> その他
                            <input type="text" id="contact-inq_other_text" name="inq_other" class="form-control" <?php echo ($arr_inq_checked[8] == 'checked') ? '' : 'disabled="disabled"' ?> value="<?php echo $reg_inq_other ?>" />
                        </label>
                    </div>
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

            <div class="col-sm-12 privacy">
                <h3>【個人情報の取り扱いについて】</h3>
                <ul>
                    <li>
                        <strong>EVOLABLE ASIA CO., Ltd</strong>（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。
                    </li>
                    <li>
                        <strong>個人情報の管理</strong><br>
                        当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。
                    </li>
                    <li>
                        <strong>個人情報の利用目的</strong><br>
                        お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
                        <p><strong>個人情報の第三者への開示・提供の禁止</strong><br>
                            当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。
                            ・お客さまの同意がある場合
                            ・お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合
                            ・法令に基づき開示することが必要である場合
                        </p>
                    </li>
                    <li>
                        <strong>個人情報の安全対策</strong><br>
                        当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>
                        <p><strong>ご本人の照会</strong><br>
                            お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</p>
                        <p><strong>法令、規範の遵守と見直し</strong><br>
                            当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>
                        <p><strong>お問い合せ</strong><br>
                            当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。<br>
                            EVOLABLE ASIA Co.,Ltd <br>
                            4rd Fl, SaiGon Financial Center<br>
                            No. 9 Dinh Tien Hoang, District 1, HCMC<br>
                            Tel: 08-39111489 Fax: 08-39118767<br>
                            Mail: <a href="mailto:info@evolable.asia">info@evolable.asia</a>
                        </p>
                    </li>
                </ul>
            </div>

            <div class="form-group send">
                <div class="col-sm-12 hold-btn-send">
                    <button class="btn btn-success center-block" type="submit">同意して送信</button>
                    <input type="hidden" name="submit" value="submit"/>
                </div>
            </div>

        </form>
    </div>
</section>

<?php
get_footer();
?>