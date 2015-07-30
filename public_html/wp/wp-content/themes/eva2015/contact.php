<?php
/*
 * Author: KhangLe
 * Template Name: Contact
 * 
 */
get_header();

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

        <form id="contact-form" class="form-horizontal" method="POST" action="<?php bloginfo('url') ?>/contact_confirm" novalidate="novalidate">
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
                        このお問い合わせフォームでご提供いただく個人情報は、お問い合わせを適切に受け付けて管理するため、及び弊社が提供するサービスに関する情報を電子メール等でご提供するために利用します。
                    </li>
                    <li>
                        当個人情報を第三者に提供することはありません。
                    </li>
                    <li>
                        当個人情報の取扱いを委託することがあります。委託にあたっては、委託先における個人情報の安全管理が図られるよう、委託先に対する必要かつ適切な監督を行います。
                    </li>
                    <li>
                        当個人情報の利用目的の通知、開示、内容の訂正・追加または削除、利用の停止・消去および第三者への提供の停止（「開示等」といいます。）を受け付けております。開示等の求めは、以下の「個人情報苦情及び相談窓口」で受け付けます。
                        <br/>
                        ＜個人情報苦情及び相談窓口＞
                        <br/>
                        株式会社フランジア・ジャパン　個人情報保護管理者（経営管理本部長)　メール：
                        <br/>
                        <a href="mailto:info@evolable.asia">info@evolable.asia</a>
                        <br/>
                        上記を確認の上、ご同意いただける方は「同意して送信」ボタンを押してください。
                    </li>
                </ul>
            </div>

            <div class="form-group send">
                <div class="col-sm-12 hold-btn-send">
                    <button class="btn btn-success center-block" type="submit" name="submit">同意して送信</button>
                </div>
            </div>

        </form>
    </div>
</section>

<?php
get_footer();
?>