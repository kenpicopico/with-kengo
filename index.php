<?php
$path = './';
$page_id = 'top';
$page_title = 'w/Kengo';
$page_description = '';
?>

    <?php include($path . '/include/header.php'); ?>
    <main class="p-top">
        <section class="p-top-mv">
            <div class="p-top-mv__inner">
                <div class="p-top-mv__contents">
                    <h2 class="p-top-mv__title">コーディングで、<br>Web制作を支えます。</h2>
                    <p class="p-top-mv__subtitle">Web制作会社・広告代理店様のコーディングパートナーとして、<br class="u-pc-only">デザインデータの実装からWordPress構築まで対応します。</p>
                    <p class="p-top-mv__text">HTML / SCSS / JavaScript / WordPress / PHP</p>
                    <div class="p-top-mv__button">
                        <a class="c-button c-button--blue u-shadow" href="<?php echo $path; ?>contact/contact.php">
                            <span class="c-button__text">制作について相談する</span>
                            <img class="c-button__arrow" src="<?php echo $path; ?>img/arrow.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <p class="p-top-mv__deco">
                <picture>
                    <source srcset="<?php echo $path; ?>img/name.svg" media="(min-width: 769px)"/>
                    <source srcset="<?php echo $path; ?>img/name_tab.svg" media="(min-width: 600px)"/>
                    <source srcset="<?php echo $path; ?>img/name_sp.svg" media="(max-width: 599px)"/>
                    <img src="<?php echo $path; ?>img/name.svg" alt="">
                </picture>
            </p>
        </section>

        <section id="about" class="p-top-about">
            <div class="l-inner">
                <h2 class="c-title">About</h2>
                <p class="p-top-about__name c-fadein js-fadein"><span>ひだか けんご</span>日高健吾</p>
                <p class="p-top-about__heading c-fadein js-fadein">コーディングを中心に、Web制作をサポートします。</p>
                <p class="p-top-about__text c-fadein js-fadein">
                    Web制作会社でのコーディング業務を経験し、現在はフリーランスとしてWeb制作を行っています。<br>
                    HTML / SCSS / JavaScriptを中心としたWebサイト制作に加え、WordPressのオリジナルテーマ制作やPHPを使用したカスタマイズにも対応しています。<br>
                    デザインデータをもとにしたコーディングはもちろん、レスポンシブ対応やJavaScriptによるインタラクション、WordPressへの組み込みまで、Webサイト制作に必要な実装を一貫してサポートします。<br>
                    制作会社様・広告代理店様の外部コーダーとして、案件単位でのご依頼から継続的なパートナー契約まで柔軟に対応しています。
                </p>
            </div>
        </section>

        <section id="services" class="p-top-services">
            <div class="l-inner">
                <h2 class="c-title">Services</h2>
                <ul class="p-top-services__list">
                    <li class="p-top-services__item c-card c-fadein-side js-fadein-side">
                        <p class="c-card__number">01｜Web Coding</p>
                        <h3 class="c-card__theme">Webサイトコーディング</h3>
                        <p class="c-card__text">Figmaなどのデザインデータをもとに、PC・スマートフォンに対応したレスポンシブなWebサイトを実装します。</p>
                    </li>
                    <li class="p-top-services__item c-card c-fadein-side js-fadein-side">
                        <p class="c-card__number">02｜WordPress</p>
                        <h3 class="c-card__theme">WordPress構築・カスタマイズ</h3>
                        <p class="c-card__text">オリジナルテーマの制作から、既存サイトのカスタマイズまで対応します。<br>カスタム投稿タイプやPHPを使用した機能実装にも対応可能です。</p>
                    </li>
                    <li class="p-top-services__item c-card c-fadein-side js-fadein-side">
                        <p class="c-card__number">03｜LP</p>
                        <h3 class="c-card__theme">LPコーディング</h3>
                        <p class="c-card__text">広告用ランディングページのコーディングに対応します。<br>アニメーションやインタラクションを含め、デザインの意図を崩さず実装します。</p>
                    </li>
                    <li class="p-top-services__item c-card c-fadein-side js-fadein-side">
                        <p class="c-card__number">04｜Maintenance</p>
                        <h3 class="c-card__theme">サイト更新・保守</h3>
                        <p class="c-card__text">既存サイトの修正・更新、レイアウト調整や軽微な機能追加など、継続的なWebサイト運用もサポートします。</p>
                    </li>
                </ul>
            </div>
        </section>

        <section id="works" class="p-top-works">
            <div class="l-inner">
                <h2 class="c-title">Works</h2>
                <p class="p-top-works__text">現在公開可能な実績一覧</p>
                <ul class="p-top-works__list">
                    <li class="p-top-works__item c-fadein js-fadein">
                        <a class="p-top-works__link c-hover" href="<?php echo $path; ?>pages/work_jpndp.php">
                            <div class="p-top-works__img">
                                <img class="c-hover__img-zoom" src="<?php echo $path; ?>img/works/jpndp_top.webp" alt="">
                            </div>
                            <h3 class="p-top-works__title">架空コーポレートサイト</h3>
                            <p class="p-top-works__skills">2026-08　HTML/SCSS/jQuery</p>
                        </a>
                    </li>
                    <li class="p-top-works__item c-fadein js-fadein">
                        <a class="p-top-works__link c-hover" href="<?php echo $path; ?>pages/work_with_kengo.php">
                            <div class="p-top-works__img">
                                <img class="c-hover__img-zoom" src="<?php echo $path; ?>img/works/with-kengo_top.webp" alt="">
                            </div>
                            <h3 class="p-top-works__title">ポートフォリオサイト</h3>
                            <p class="p-top-works__skills">2026-08　PHP/SCSS/jQuery</p>
                        </a>
                    </li>
                    <li class="p-top-works__item c-fadein js-fadein">
                        <a class="p-top-works__link c-hover" href="<?php echo $path; ?>pages/work_teare_note.php">
                            <div class="p-top-works__img">
                                <img class="c-hover__img-zoom" src="<?php echo $path; ?>img/works/teare-note_top.webp" alt="">
                            </div>
                            <h3 class="p-top-works__title">WordPressサイト</h3>
                            <p class="p-top-works__skills">2026-05　PHP/SCSS/jQuery</p>
                        </a>
                    </li>
                    <li class="p-top-works__item c-fadein js-fadein">
                        <a class="p-top-works__link c-hover" href="<?php echo $path; ?>pages/work_hangar.php">
                            <div class="p-top-works__img">
                                <img class="c-hover__img-zoom" src="<?php echo $path; ?>img/works/hangar_top.webp" alt="">
                            </div>
                            <h3 class="p-top-works__title">コーポレートサイト</h3>
                            <p class="p-top-works__skills">2026-01　HTML/SCSS/jQuery</p>
                        </a>
                    </li>
                    <li class="p-top-works__item c-fadein js-fadein">
                        <a class="p-top-works__link c-hover" href="<?php echo $path; ?>pages/work_kenpie_design.php">
                            <div class="p-top-works__img">
                                <img class="c-hover__img-zoom" src="<?php echo $path; ?>img/works/kenpie-design_top.webp" alt="">
                            </div>
                            <h3 class="p-top-works__title">WordPressサイト</h3>
                            <p class="p-top-works__skills">2021-07　PHP/SCSS/jQuery</p>
                        </a>
                    </li>
                    <li class="p-top-works__item c-fadein js-fadein">
                        <a class="p-top-works__link c-hover" href="<?php echo $path; ?>pages/work_scorta.php">
                            <div class="p-top-works__img">
                                <img class="c-hover__img-zoom" src="<?php echo $path; ?>img/works/scorta_top.webp" alt="">
                            </div>
                            <h3 class="p-top-works__title">WordPressサイト</h3>
                            <p class="p-top-works__skills">2021-06　PHP/SCSS/jQuery</p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section id="skills" class="p-top-skills">
            <div class="l-inner">
                <h2 class="c-title">Skills</h2>
                <ul class="p-top-skills__list">
                    <li class="p-top-skills__item c-fadein-side js-fadein-side">
                        <p class="p-top-skills__theme">FRONTEND</p>
                        <h3 class="p-top-skills__title">HTML / SCSS / jQuery / Javascript</h3>
                        <p class="p-top-skills__text">Webサイトのコーディング、レスポンシブ対応、<br class="u-pc-only">JavaScript・jQueryを使用した動的なUI実装に対応します。<br>BEM、FLOCSSを採用したcss設計にも対応可能です。</p>
                    </li>
                    <li class="p-top-skills__item c-fadein-side js-fadein-side">
                        <p class="p-top-skills__theme">BACKEND</p>
                        <h3 class="p-top-skills__title">PHP / WordPress</h3>
                        <p class="p-top-skills__text">WordPressのオリジナルテーマ制作やカスタマイズ、<br class="u-pc-only">PHPを使用した機能実装・CMS構築に対応します。</p>
                    </li>
                    <li class="p-top-skills__item c-fadein-side js-fadein-side">
                        <p class="p-top-skills__theme">TOOLS</p>
                        <h3 class="p-top-skills__title">cursor / figma / slack / discord</h3>
                        <p class="p-top-skills__text">Figmaのデザインデータをもとにしたコーディングから、<br class="u-pc-only">Slack・Discordを使用したチームでの案件進行まで対応します。</p>
                    </li>
                </ul>
            </div>
        </section>

        <section id="flow" class="p-top-flow">
            <div class="l-inner">
                <h2 class="c-title">Flow</h2>
                <div class="p-top-flow__list">
                    <dl class="p-top-flow__item">
                        <dt class="p-top-flow__step"><span>STEP</span>1</dt>
                        <dd class="p-top-flow__data">
                            <h3 class="p-top-flow__title">お問い合わせ</h3>
                            <p class="p-top-flow__text">お問い合わせフォームより、案件概要やご相談内容をお送りください。</p>
                        </dd>
                    </dl>
                    <dl class="p-top-flow__item">
                        <dt class="p-top-flow__step"><span>STEP</span>2</dt>
                        <dd class="p-top-flow__data">
                            <h3 class="p-top-flow__title">お打ち合わせ・仕様確認</h3>
                            <p class="p-top-flow__text">デザインデータ、ページ数、納期、実装内容などを確認し、対応範囲やスケジュールをご相談します。</p>
                        </dd>
                    </dl>
                    <dl class="p-top-flow__item">
                        <dt class="p-top-flow__step"><span>STEP</span>3</dt>
                        <dd class="p-top-flow__data">
                            <h3 class="p-top-flow__title">コーディング</h3>
                            <p class="p-top-flow__text">デザインの意図を確認しながら、PC・スマートフォンに対応したコーディングを行います。</p>
                        </dd>
                    </dl>
                    <dl class="p-top-flow__item">
                        <dt class="p-top-flow__step"><span>STEP</span>4</dt>
                        <dd class="p-top-flow__data">
                            <h3 class="p-top-flow__title">確認・納品</h3>
                            <p class="p-top-flow__text">表示確認・動作確認を行ったうえで、指定の方法で納品します。</p>
                        </dd>
                    </dl>
                </div>
            </div>
        </section>

        <section id="faq" class="p-top-faq">
            <div class="l-inner">
                <h2 class="c-title">FAQ</h2>
                <div class="p-top-faq__list">
                    <dl class="p-top-faq__item js-faq-button c-fadein-side js-fadein-side">
                        <dt class="p-top-faq__question">
                            <span class="p-top-faq__question-initial">Q.</span>
                            <p class="p-top-faq__question-text">デザインからお願いできますか？</p>
                            <img class="p-top-faq__question-arrow" src="<?php echo $path; ?>img/arrow.svg" alt="">
                        </dt>
                        <dd class="p-top-faq__answer">
                            <div class="p-top-faq__answer-inner">
                                <span class="p-top-faq__answer-initial">A.</span>
                                <p class="p-top-faq__answer-text">現在はデザイン制作ではなく、デザインデータをもとにしたコーディングを中心に対応しています。</p>
                            </div>
                        </dd>
                    </dl>
                    <dl class="p-top-faq__item js-faq-button c-fadein-side js-fadein-side">
                        <dt class="p-top-faq__question">
                            <span class="p-top-faq__question-initial">Q.</span>
                            <p class="p-top-faq__question-text">WordPressの案件は対応できますか？</p>
                            <img class="p-top-faq__question-arrow" src="<?php echo $path; ?>img/arrow.svg" alt="">
                        </dt>
                        <dd class="p-top-faq__answer">
                            <div class="p-top-faq__answer-inner">
                                <span class="p-top-faq__answer-initial">A.</span>
                                <p class="p-top-faq__answer-text">はい。オリジナルテーマの制作やPHPを使用したカスタマイズ、カスタム投稿タイプなどに対応しています。</p>
                            </div>
                        </dd>
                    </dl>
                    <dl class="p-top-faq__item js-faq-button c-fadein-side js-fadein-side">
                        <dt class="p-top-faq__question">
                            <span class="p-top-faq__question-initial">Q.</span>
                            <p class="p-top-faq__question-text">継続案件にも対応できますか？</p>
                            <img class="p-top-faq__question-arrow" src="<?php echo $path; ?>img/arrow.svg" alt="">
                        </dt>
                        <dd class="p-top-faq__answer">
                            <div class="p-top-faq__answer-inner">
                                <span class="p-top-faq__answer-initial">A.</span>
                                <p class="p-top-faq__answer-text">はい。案件単位でのご依頼に加え、継続的なコーディングパートナーとしてのご依頼も対応しています。</p>
                            </div>
                        </dd>
                    </dl>
                    <dl class="p-top-faq__item js-faq-button c-fadein-side js-fadein-side">
                        <dt class="p-top-faq__question">
                            <span class="p-top-faq__question-initial">Q.</span>
                            <p class="p-top-faq__question-text">制作会社からの外注は可能ですか？</p>
                            <img class="p-top-faq__question-arrow" src="<?php echo $path; ?>img/arrow.svg" alt="">
                        </dt>
                        <dd class="p-top-faq__answer">
                            <div class="p-top-faq__answer-inner">
                                <span class="p-top-faq__answer-initial">A.</span>
                                <p class="p-top-faq__answer-text">はい。制作会社様・広告代理店様からのコーディング業務の外注を歓迎しています。</p>
                            </div>
                        </dd>
                    </dl>
                    <dl class="p-top-faq__item js-faq-button c-fadein-side js-fadein-side">
                        <dt class="p-top-faq__question">
                            <span class="p-top-faq__question-initial">Q.</span>
                            <p class="p-top-faq__question-text">デザインデータは何に対応していますか？</p>
                            <img class="p-top-faq__question-arrow" src="<?php echo $path; ?>img/arrow.svg" alt="">
                        </dt>
                        <dd class="p-top-faq__answer">
                            <div class="p-top-faq__answer-inner">
                                <span class="p-top-faq__answer-initial">A.</span>
                                <p class="p-top-faq__answer-text">Figmaを中心に、Web制作に必要なデザインデータからのコーディングに対応しています。</p>
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </section>

        <section class="c-contact">
            <div class="l-inner">
                <h2 class="c-title">Contact</h2>
                <p class="c-contact__text">
                    WebサイトのコーディングやWordPress構築など、Web制作に関するご相談を承っています。<br>
                    「案件の一部だけお願いしたい」<br>
                    「コーディングを外注したい」<br>
                    「継続的に依頼できるコーダーを探している」<br>
                    といったご相談もお気軽にお問い合わせください。
                </p>
                <div class="c-contact__button">
                    <a class="c-button c-button--white u-shadow" href="<?php echo $path; ?>contact/contact.php">
                        <span class="c-button__text">お問い合わせはこちら</span>
                        <img class="c-button__arrow" src="<?php echo $path; ?>img/arrow.svg" alt="">
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include($path . '/include/floating.php'); ?>
    <?php include($path . '/include/totop.php'); ?>
    <?php include($path . '/include/footer.php'); ?>