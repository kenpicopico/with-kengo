<?php
$path = '../';
$page_id = 'work_kenpie_design';
$page_title = 'kenpie design | w/Kengo';
$page_description = '';
?>

    <?php include($path . '/include/header.php'); ?>

    <main class="p-work">

        <section class="p-work-preview">
            <p class="p-work-preview__type"><span>WordPressサイト</span></p>
            <h1 class="p-work-preview__sitename">旧ポートフォリオサイト</h1>
            <p class="p-work-preview__date">2021-07</p>
            <div class="p-work-preview__outer">
                <div class="p-work-preview__inner js-preview-inner">
                    <div class="p-work-preview__stage js-stage">
                        <div class="p-work-preview__frame-outer js-frame-outer">
                            <iframe class="js-frame" src="https://kenpie-design.com/"></iframe>
                        </div>
                    </div>
                    <div class="p-work-preview__tab js-tabs">
                        <div class="p-work-preview__tab-inner">
                            <button class="p-work-preview__tab-btn js-preview-btn is-active" data-device="pc" aria-label="PC表示">
                                <img src="<?php echo $path; ?>img/pc.svg" alt="">
                            </button>
                            <button class="p-work-preview__tab-btn js-preview-btn" data-device="tab" aria-label="タブレット表示">
                                <img src="<?php echo $path; ?>img/tab.svg" alt="">
                            </button>
                            <button class="p-work-preview__tab-btn js-preview-btn" data-device="sp" aria-label="スマホ表示">
                                <img src="<?php echo $path; ?>img/sp.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="p-work-preview__bg">
                    <div class="p-work-preview__bg-cover">
                        <img src="<?php echo $path; ?>img/works/kenpie-design_top.webp" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="p-work-desc">
            <div class="l-inner">
                <ul class="p-work-desc__list">
                    <li class="p-work-desc__item c-card">
                        <p class="c-card__number">01｜Role</p>
                        <h3 class="c-card__theme">担当ロール</h3>
                        <p class="c-card__text u-text-bold">ALL（Design/Coding）</p>
                    </li>
                    <li class="p-work-desc__item c-card">
                        <p class="c-card__number">02｜Skills</p>
                        <h3 class="c-card__theme">使用したスキル</h3>
                        <p class="c-card__text">PHP / SCSS / jQuery</p>
                    </li>
                    <li class="p-work-desc__item c-card">
                        <p class="c-card__number">03｜Implementation</p>
                        <h3 class="c-card__theme">実装内容</h3>
                        <p class="c-card__text">
                            ・WordPressオリジナルテーマ<br>
                            ・レスポンシブ対応<br>
                            ・ローディングアニメーション<br>
                            ・スクロールアニメーション<br>
                            ・投稿機能<br>
                            ・フォーム
                        </p>
                    </li>
                    <li class="p-work-desc__item c-card">
                        <p class="c-card__number">04｜Details</p>
                        <h3 class="c-card__theme">制作概要</h3>
                        <p class="c-card__text">自作した旧ポートフォリオサイトです。デザインからコーデイングまでWordPressのオリジナルテーマとして作成しました。カスタム投稿タイプを追加してyoutubeやblog、newsの投稿機能をつけています。過去に学習したコーディングについてのブログやyoutube動画も紹介しています。</p>
                    </li>
                </ul>
            </div>
            <div class="p-work-desc__button">
                <a class="c-button c-button--white u-shadow" href="https://kenpie-design.com/" target="_blank">
                    <span class="c-button__text">Webサイトを見る</span>
                    <img class="c-button__arrow" src="<?php echo $path; ?>img/arrow.svg" alt="">
                </a>
            </div>
        </section>

        <section class="p-work-gallery">
            <div class="p-work-gallery__inner">
                <div class="p-work-gallery__pc">
                    <div class="p-work-gallery__pc-img js-gallery-img c-fadein-side js-fadein-side is-active">
                        <div class="p-work-gallery__pc-cover">
                            <button class="p-work-gallery__pc-btn js-gallery-btn">
                                <img src="<?php echo $path; ?>img/eye.svg" alt="">
                            </button>
                            <img src="<?php echo $path; ?>img/works/kenpie-design_01.webp" alt="">
                        </div>
                    </div>
                    <div class="p-work-gallery__pc-img js-gallery-img c-fadein-side js-fadein-side">
                        <div class="p-work-gallery__pc-cover">
                            <button class="p-work-gallery__pc-btn js-gallery-btn">
                                <img src="<?php echo $path; ?>img/eye.svg" alt="">
                            </button>
                            <img src="<?php echo $path; ?>img/works/kenpie-design_02.webp" alt="">
                        </div>
                    </div>
                    <div class="p-work-gallery__pc-img js-gallery-img c-fadein-side js-fadein-side">
                        <div class="p-work-gallery__pc-cover">
                            <button class="p-work-gallery__pc-btn js-gallery-btn">
                                <img src="<?php echo $path; ?>img/eye.svg" alt="">
                            </button>
                            <img src="<?php echo $path; ?>img/works/kenpie-design_03.webp" alt="">
                        </div>
                    </div>
                    <div class="p-work-gallery__pc-img js-gallery-img c-fadein-side js-fadein-side">
                        <div class="p-work-gallery__pc-cover">
                            <button class="p-work-gallery__pc-btn js-gallery-btn">
                                <img src="<?php echo $path; ?>img/eye.svg" alt="">
                            </button>
                            <img src="<?php echo $path; ?>img/works/kenpie-design_04.webp" alt="">
                        </div>
                    </div>
                    <div class="p-work-gallery__pc-img js-gallery-img c-fadein-side js-fadein-side">
                        <div class="p-work-gallery__pc-cover">
                            <button class="p-work-gallery__pc-btn js-gallery-btn">
                                <img src="<?php echo $path; ?>img/eye.svg" alt="">
                            </button>
                            <img src="<?php echo $path; ?>img/works/kenpie-design_05.webp" alt="">
                        </div>
                    </div>
                </div>
                <div class="p-work-gallery__sp">
                    <div class="p-work-gallery__sp-img c-fadein-side js-fadein-side">
                        <img src="<?php echo $path; ?>img/works/kenpie-design_sp_01.webp" alt="">
                    </div>
                    <div class="p-work-gallery__sp-img c-fadein-side js-fadein-side">
                        <img src="<?php echo $path; ?>img/works/kenpie-design_sp_02.webp" alt="">
                    </div>
                    <div class="p-work-gallery__sp-img c-fadein-side js-fadein-side">
                        <img src="<?php echo $path; ?>img/works/kenpie-design_sp_03.webp" alt="">
                    </div>
                </div>
            </div>
            <div class="p-work-gallery__button">
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