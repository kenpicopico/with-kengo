<?php
$path = '../';
$page_id = 'privacy';
$page_title = 'プライバシーポリシー | w/Kengo';
$page_description = '';
?>

    <?php include($path . '/include/header.php'); ?>

    <main class="p-privacy">
        <section class="p-privacy-mv">
            <h1 class="p-privacy-mv__title">プライバシーポリシー</h1>
        </section>

        <section class="p-privacy-main">
            <div class="p-privacy-main__contents">
                <p class="p-privacy-main__text">当サイト（以下「当サイト」）では、お問い合わせいただいた方の個人情報を適切に取り扱い、保護することを重要な責務と考えています。</p>
                <dl class="p-privacy-main__list">
                    <dt class="p-privacy-main__heading">1. 取得する個人情報</dt>
                    <dd class="p-privacy-main__text">
                        当サイトでは、お問い合わせの際に以下の情報をご提供いただく場合があります。<br>
                        ・お名前<br>
                        ・お名前（フリガナ）<br>
                        ・会社名<br>
                        ・メールアドレス<br>
                        ・お問い合わせ内容<br>
                        ・その他、お問い合わせに際してご本人が任意で提供された情報
                    </dd>
                </dl>
                <dl class="p-privacy-main__list">
                    <dt class="p-privacy-main__heading">2. 個人情報の利用目的</dt>
                    <dd class="p-privacy-main__text">
                        取得した個人情報は、以下の目的で利用します。<br>
                        ・お問い合わせへの回答・連絡<br>
                        ・Webサイト制作、コーディング等のご依頼に関する連絡・確認<br>
                        ・ご依頼いただいた業務の遂行に必要な連絡<br>
                        ・その他、上記に付随する業務上の連絡<br>
                        取得した個人情報を、これらの目的以外に利用することはありません。
                    </dd>
                </dl>
                <dl class="p-privacy-main__list">
                    <dt class="p-privacy-main__heading">3. 個人情報の第三者提供</dt>
                    <dd class="p-privacy-main__text">
                        取得した個人情報は、以下の場合を除き、第三者に提供することはありません。<br>
                        ・ご本人の同意がある場合<br>
                        ・法令に基づき開示・提供が必要となる場合
                    </dd>
                </dl>
                <dl class="p-privacy-main__list">
                    <dt class="p-privacy-main__heading">4. 個人情報の管理</dt>
                    <dd class="p-privacy-main__text">取得した個人情報について、漏えい、紛失、改ざん、不正アクセス等を防止するため、適切な安全管理措置を講じます。</dd>
                </dl>
                <dl class="p-privacy-main__list">
                    <dt class="p-privacy-main__heading">5. 個人情報の開示・訂正・削除等</dt>
                    <dd class="p-privacy-main__text">ご本人から、自己の個人情報について、開示、訂正、削除等を希望される場合は、下記のお問い合わせ先までご連絡ください。ご本人であることを確認したうえで、適切に対応します。</dd>
                </dl>
                <dl class="p-privacy-main__list">
                    <dt class="p-privacy-main__heading">6. プライバシーポリシーの変更</dt>
                    <dd class="p-privacy-main__text">本ポリシーの内容は、法令その他の必要に応じて、予告なく変更する場合があります。変更後のプライバシーポリシーは、当サイトに掲載した時点から適用されます。</dd>
                </dl>
                <dl class="p-privacy-main__list">
                    <dt class="p-privacy-main__heading">7. お問い合わせ</dt>
                    <dd class="p-privacy-main__text">個人情報の取り扱いに関するお問い合わせは、当サイトのお問い合わせフォームよりご連絡ください。</dd>
                </dl>
            </div>
            <div class="p-privacy-main__button">
                <a class="c-button c-button--white u-shadow" href="<?php echo $path; ?>index.php">
                    <span class="c-button__text">トップに戻る</span>
                    <img class="c-button__arrow" src="<?php echo $path; ?>img/arrow.svg" alt="">
                </a>
            </div>
        </section>
    </main>

    <?php include($path . '/include/floating.php'); ?>
    <?php include($path . '/include/totop.php'); ?>
    <?php include($path . '/include/footer.php'); ?>