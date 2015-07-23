<?php

/*
 * Author: KhangLe
 * Template Name: contact
 * 
 */
get_header();
?>

<section>
    <div class="container contact">
        
        <div class="container banner">
            <img class="img-responsive center-block" alt="お問い合わせ CONTACT" src="<?php echo get_template_directory_uri() ?>/img/h2_contact.jpg">
        </div>
        
        <p>
            EVOLABLE ASIA Co., Ltd<br/>
            4 Floor, Saigon Finance Center<br/>
            No 9, Dinh Tien Hoang Street, Dist.1, HCM City.<br/>
            Tel : (84.8) 39111489<br/>
            Fax : (84.8) 39118767<br/>
            Email : info@evolable.asia
        </p>
        
        <h2 class="title">下記に必要事項をご記入の上、お問い合わせください。</h2>
        <p>
            <span class="red">*</span>
            印の入力は必須です。
        </p>

        <form id="contact_form" class="form-horizontal" method="POST" onsubmit="return form_validation()" action="" novalidate="novalidate">
            <div class="form-group">
                <label for="contact-company-name" class="col-sm-3 control-label">会社名<span class="red">※</span></label>
                <div class="col-sm-9">
                    <input type="text" id="contact-company-name" name="company" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="form-group">
                <label for="contact-division-name" class="col-sm-3 control-label">部署名</label>
                <div class="col-sm-9">
                    <input type="text" id="contact-division-name" name="division" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="form-group">
                <label for="contact-name" class="col-sm-3 control-label">お名前<span class="red">※</span></label>
                <div class="col-sm-9">
                    <input type="text" id="contact-name" name="name" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="form-group">
                <label for="contact-email" class="col-sm-3 control-label">E-mail<span class="red">※</span></label>
                <div class="col-sm-9">
                    <input type="email" id="contact-email" name="email" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="form-group">
                <label for="contact-tel" class="col-sm-3 control-label">Tel<span class="red">※</span></label>
                <div class="col-sm-9">
                    <input type="text" id="contact-tel" name="tel" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="form-group">
                <label for="contact-tel" class="col-sm-3 control-label">どこでエボラブルアジアを知りましたか?</label>
                <div class="col-sm-9">
                    <div class="checkbox">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value="知人の紹介"/> 知人の紹介
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value="雑誌"/> 雑誌
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value="新聞"/> 新聞
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value="テレビ"/> テレビ
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value="インターネット記事"/> インターネット記事
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value=" インターネット検索"/> インターネット検索
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value="Facebook"/> Facebook
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="inq[]" value="テレビ"/> EVOLABLE ASIAブログ
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="other">
                            <input type="checkbox" id="inq_o" name="inq_o" for="contact-inq_other_text" value="その他"/> その他
                            <input type="text" id="contact-inq_other_text" name="inq_other" class="form-control" disabled="disabled" />
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="contact-item" class="col-sm-3 control-label">お問い合わせ項目<span class="red">※</span></label>
                <div class="col-sm-9">
                    <select id="contact-item" name="itemSelect" class="form-control">
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
                </div>
            </div>
            <div class="form-group">
                <label for="contact-content" class="col-sm-3 control-label">お問い合わせ内容<span class="red">※</span></label>
                <div class="col-sm-9">
                    <textarea id="contact-content" class="form-control"></textarea>
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
                        <a href="mailto:privacy@evolableasia.vn">privacy@evolableasia.vn</a>
                        <br/>
                        上記を確認の上、ご同意いただける方は「同意して送信」ボタンを押してください。
                    </li>
                </ul>
            </div>

            <div class="form-group send">
                <div class="col-sm-12 hold-btn-send">
                    <button class="btn btn-success center-block" type="submit">同意して送信</button>
                </div>
            </div>

        </form>
    </div>
</section>

<?php get_footer() ?>