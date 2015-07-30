<?php
/*
 * Author: KhangLe
 * Template Name: Contact-Confirm
 * 
 */

if (isset($_POST['submit']) && isset($_SESSION['contact'])) {

    //お問い合わせフォーム内容
    $reg_company = @htmlspecialchars(stripslashes($_POST['company']));
    $reg_division = @htmlspecialchars(stripslashes($_POST['division']));
    $reg_name = @htmlspecialchars(stripslashes($_POST['ur_name']));
    $reg_email = @htmlspecialchars($_POST['email']);
    $reg_tel = @htmlspecialchars($_POST['tel']);
    $reg_inq = @$_POST['inq'];
    $reg_inq_other = @htmlspecialchars(stripslashes($_POST['inq_other']));
    $reg_itemSelect = @$_POST['itemSelect'];

    $reg_content = @htmlspecialchars(stripslashes($_POST['content']));

    $reg_inq_all = NULL;
    $arr_inq = array('知人の紹介', '雑誌', '新聞', 'テレビ', 'インターネット記事', 'インターネット検索', 'Facebook', 'EVOLABLE ASIAブログ', 'その他');
    $arr_inq_checked = array('', '', '', '', '', '', '', '', '');
    if (is_array($reg_inq)) {
        foreach ($reg_inq as $value) {
            $key = array_search($value, $arr_inq);
            $arr_inq_checked[$key] = 'checked';
            //
            if ($value != 'その他') {
                $reg_inq_all[] = htmlspecialchars($value);
            } else {
                $reg_inq_all[] = htmlspecialchars($reg_inq_other);
            }
        }
    }

    $_SESSION['contact'] = array(
        'company' => $reg_company,
        'division' => $reg_division,
        'name' => $reg_name,
        'email' => $reg_email,
        'tel' => $reg_tel,
        'inq' => $reg_inq,
        'inq_other' => $reg_inq_other,
        'inq_all' => $reg_inq_all,
        'itemSelect' => $reg_itemSelect,
        'content' => $reg_content,
    );
} elseif (isset($_POST['send'])) {
    //
    require_once 'lib/Twig/Autoloader.php';
    Twig_Autoloader::register();

    $loader = new Twig_Loader_Filesystem(__DIR__ . '/mail_temp');

    $twig = new Twig_Environment($loader);

    $template_admin = $twig->loadTemplate('contact-admin.html');

    //Admin用メッセージ
    $subject_admin = 'ホームページからお問い合わせがありました';
    $body_admin = $template_admin->render(array(
        'entry_time' => gmdate("Y/m/d H:i:s", time() + 9 * 3600),
        'entry_host' => gethostbyaddr(getenv("REMOTE_ADDR")),
        'entry_ua' => getenv("HTTP_USER_AGENT"),
        //
        'company' => $_SESSION['contact']['company'],
        'division' => $_SESSION['contact']['division'],
        'name' => $_SESSION['contact']['name'],
        'email' => $_SESSION['contact']['email'],
        'tel' => $_SESSION['contact']['tel'],
        'inq' => $_SESSION['contact']['inq'],
        'inq_other' => $_SESSION['contact']['inq_other'],
        'inq_all' => $_SESSION['contact']['inq_all'],
        'itemSelect' => $_SESSION['contact']['itemSelect'],
        'content' => $_SESSION['contact']['content'],
    ));

    //お客様用メッセージ
    $template_client = $twig->loadTemplate('contact-client.html');

    $subject_client = 'お問い合わせありがとうございました';
    $body_client = $template_client->render(array(
        'company' => $_SESSION['contact']['company'],
        'division' => $_SESSION['contact']['division'],
        'name' => $_SESSION['contact']['name'],
        'email' => $_SESSION['contact']['email'],
        'tel' => $_SESSION['contact']['tel'],
        'inq' => $_SESSION['contact']['inq'],
        'inq_other' => $_SESSION['contact']['inq_other'],
        'inq_all' => $_SESSION['contact']['inq_all'],
        'itemSelect' => $_SESSION['contact']['itemSelect'],
        'content' => $_SESSION['contact']['content'],
    ));

    // メール送信
    require_once 'lib/Mail.php';

    $fromname = 'エボラブル アジア お問い合わせ';

    $mail = new Mail();
    $mail->from = 'info@evolable.asia';
    $mail->fromName = $fromname;
    $mail->to = array(
        'info@evolable.asia',
        'fujita@evolable.asia',
        'iwabuchi@evolable.asia',
        'k.arai@evolableasia.com',
        'k.ueda@evolableasia.com',
        'kashiwagi@evolable.asia',
        'iwabuchi@evolable.asia',
        'm.fujita@evolableasia.com',
        'yoshizako@evolable.asia',
        'oishi@evolableasia.com',
        'sul@evolable.asia',
        'tsukagoshi@evolableasia.com',
        'umezawa@evolable.asia',
        'yoshimura@evolable.asia',
        'watanabe@evolableasia.com',
        'y_sol@soltecvn.com',
        'yano@evolableasia.com',
        'y.otani@evolableasia.com',
        'ito@evolable.asia',
    );
    $mail->title = $subject_admin;
    $mail->body = nl2br($body_admin);
    $mail->send();

    // お客様受け取りメール送信
    $mail2 = new Mail();
    $mail2->from = 'info@evolable.asia';
    $mail2->fromName = $fromname;
    $mail2->to = $_SESSION['contact']['email'];
    $mail2->title = $subject_client;
    $mail2->body = nl2br($body_client);
    $result = $mail2->send();

    unset($_SESSION['contact'], $loader, $twig, $subject_admin, $body_admin, $template_client, $body_client, $mail, $mail2);

    wp_redirect(home_url() . '/thankyou');
    exit();
} else {
    wp_redirect(home_url() . '/contact');
    exit();
}

get_header();
?>

<section>
    <div class="container contact">

        <p class="eva-info">
            EVOLABLE ASIA Co., Ltd<br/>
            4 Floor, Saigon Finance Center<br/>
            No 9, Dinh Tien Hoang Street, Dist.1, HCM City.<br/>
            Tel : (84.8) 39111489<br/>
            Fax : (84.8) 39118767<br/>
            Email : info@evolable.asia
        </p>

        <table class="table table-bordered">
            <colgroup>
                <col class="col-sm-2">
                <col class="col-sm-10">
            </colgroup>
            <tr>
                <td>会社名</td>
                <td><?php echo $_SESSION['contact']['company'] ?></td>
            </tr>
            <tr>
                <td>部署名</td>
                <td><?php echo $_SESSION['contact']['division'] ?></td>
            </tr>
            <tr>
                <td>お名前</td>
                <td><?php echo $_SESSION['contact']['name'] ?></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><?php echo $_SESSION['contact']['email'] ?></td>
            </tr>
            <tr>
                <td>Tel</td>
                <td><?php echo $_SESSION['contact']['tel'] ?></td>
            </tr>
            <tr>
                <td>どこでエボラブルアジアを知りましたか?</td>
                <td>
                    <?php if (!is_null($_SESSION['contact']['inq_all'])): ?>
                        <ul>
                            <?php foreach ($_SESSION['contact']['inq_all'] as $value): ?>
                                <li><?php echo $value ?></li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td>お問い合わせ項目</td>
                <td><?php echo $_SESSION['contact']['itemSelect'] ?></td>
            </tr>
            <tr>
                <td>お問い合わせ内容</td>
                <td><?php echo $_SESSION['contact']['content'] ?></td>
            </tr>
        </table>
        <table class="table table-borderless">
            <tr>
                <td>
                    <form method="POST">
                        <div class="center">
                            <a class="btn inline-block" href="<?php echo bloginfo('url') ?>/contact">
                                <button class="btn btn-warning center-block inline-block btn-confirm" type="button">
                                    戻る
                                </button>
                            </a>
                            <button class="btn btn-success center-block inline-block btn-confirm" type="submit" name="send">同意して送信</button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</section>

<?php get_footer(); ?>