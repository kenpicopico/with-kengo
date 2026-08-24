$(function(){

//ローディング
    const isFirstVisit = !sessionStorage.getItem('hasLoaded');
    if (isFirstVisit) {
        // ---- 初回訪問: ローダーを表示してカウントアップ ----
        const $loader = $('.js-loader');
        const $percentText = $('.js-loader-percent');
        const $bar = $('.js-loader-bar');

        // ローダー表示中はスクロール禁止
        $('body,html').addClass('no-scroll');

        let percent = 0;

        const timer = setInterval(() => {
            // ランダムに加算(実際の読み込みと連動させなくてもOKな演出的カウントアップ)
            percent += Math.floor(Math.random() * 10) + 5;

            if (percent >= 100) {
                percent = 100;
                clearInterval(timer);

                // 100%表示を少し見せてからフェードアウト
                setTimeout(() => {
                    $loader.addClass('is-loaded');
                    $('body,html').removeClass('no-scroll');

                    // ローダーが消えるタイミングでheaderとMVのアニメーションを開始
                    setTimeout(() => {
                        $('.p-top-mv').addClass('is-show');
                        setTimeout(() => {
                            $('.l-header').addClass('is-show');

                            // すべてのアニメーションが終わったタイミングでフラグを保存
                            sessionStorage.setItem('hasLoaded', 'true');
                        }, 600);
                    }, 1000);
                }, 1000);
            }

            $percentText.text(percent);
            $bar.css('width', percent + '%');
        }, 150);

    } else {
        // ---- 2回目以降: ローダーを出さず、即座に表示状態にする ----
        $('.js-loader').addClass('is-loaded');
        $('.p-top-mv').addClass('is-show');
        $('.l-header').addClass('is-show');
    }

//header
    let $header = $(".js-header");
    let $toTop = $(".js-totop");
    let $floating = $(".js-floating");
    $toTop.hide();
    $floating.hide();

    $(window).on('scroll', function() {
        let scrollTop = $(this).scrollTop();
        
        if (scrollTop > 100) {
            $header.addClass("is-scroll");
            $toTop.fadeIn(300);
            $floating.fadeIn(300);
        } else {
            $header.removeClass("is-scroll");
            $toTop.fadeOut(300);
            $floating.fadeOut(300);
        }
    });

//トップに戻る
    $toTop.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, 500, 'swing');
    });

//メニュー
    let $menuBtn = $(".js-menu-trigger");
    let $menu = $(".js-menu");
    let $nav = $(".js-nav");

    function closeMenu() {
        $menuBtn.removeClass('is-active');
        $menu.removeClass('is-active');
        $nav.removeClass('is-active');
        $("body,html").removeClass('no-scroll');
    }

    $menuBtn.on('click', function(){
        $(this).toggleClass('is-active');
        $menu.toggleClass('is-active');
        $nav.toggleClass('is-active');
        $("body,html").toggleClass('no-scroll');
    });

    $(".l-menu__nav-link").on('click', function(){
        closeMenu();
    });
    $(".l-header__logo-link").on('click', function(){
        closeMenu();
    });
    $(".l-menu__sns-link").on('click', function(){
        closeMenu();
    });


//内部リンク
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
      
        const href = $(this).attr('href');
        const target = href === '#' ? $('html') : $(href);
      
        if (target.length) {
            let position = target.offset().top;
            $('html, body').animate(
                { scrollTop: position },
                500,
                'swing'
            );
        }
    });

//fade-inアニメーション
    $(window).on('scroll', function() {
        const isSP = window.innerWidth <= 768;
        const offsetValue = isSP ? 50 : 200;

        $('.js-fadein').each(function(){
            let targetTop = $(this).offset().top;
            let scroll = $(window).scrollTop();
            let winHeight = $(window).height();
        
            if (scroll > targetTop - winHeight + offsetValue) {
                $(this).addClass('is-visible');
            }
        });
        $('.js-fadein-side').each(function(){
            let targetTop = $(this).offset().top;
            let scroll = $(window).scrollTop();
            let winHeight = $(window).height();
        
            if (scroll > targetTop - winHeight + offsetValue) {
                $(this).addClass('is-visible');
            }
        });
    });

//FAQ
    let $faqBtn = $(".js-faq-button");
    $faqBtn.on('click', function(){
        $(this).toggleClass('is-active');
    });


//実績ページ
    // デバイスごとの「実寸」プリセット（ここが肝：iframe自体はこの実寸で描画される）
    if($(".p-work-preview").length){
        const DEVICES = {
            pc:  { width: 1280 },
            tab: { width: 768 },
            sp:  { width: 375 },
        };
        const DISPLAY_HEIGHT = 800;

        const $previewWrap = $('.js-preview-inner');
        const $stage = $('.js-stage');
        const $frameOuter = $('.js-frame-outer');
        const $iframe = $('.js-frame');
        const $tabs = $('.js-tabs');
        const $buttons = $('.js-preview-btn');
    
        const BREAKPOINT = 768; // これ以下は強制的にSP表示にする
    
        // 768px以下ならタブの選択に関わらずSPを、それ以外は選択中のタブを返す
        function getCurrentDeviceKey() {
            if ($(window).width() <= BREAKPOINT) return 'sp';
            return $buttons.filter('.is-active').data('device');
        }
    
        function applyDevice(key) {
            const d = DEVICES[key];
    
            // stageの使える幅を取得(背景なしなのでpaddingは引かない)
            const availableWidth = $previewWrap.width();

            // 実寸のiframeを、使える幅にscale()で収める
            const scale = Math.min(1, availableWidth / d.width);
    
            // 表示上の高さを840pxで固定するため、scale後にちょうど840pxになるよう
            // iframe自体の実寸高さを逆算する(840 ÷ scale)
            const nativeHeight = DISPLAY_HEIGHT / scale;

            const frameWidth = d.width * scale;
    
            // iframe自体は実寸のまま描画させる(レスポンシブCSSを正しく発火させるため)
            $iframe.css({
                width: d.width + 'px',
                height: nativeHeight + 'px',
                transform: 'scale(' + scale + ')'
            });
    
            // 縮小後の見た目サイズに合わせて外枠のサイズも更新(余白ができないように)
            $frameOuter.css({
                width: frameWidth + 'px',
                height: DISPLAY_HEIGHT + 'px'
            });

            $stage.css({ width: frameWidth + 'px' });
            $tabs.css({ width: frameWidth + 'px' });
        }
    
        $buttons.on('click', function () {
            $buttons.removeClass('is-active');
            $(this).addClass('is-active');
            applyDevice(getCurrentDeviceKey());
        });
    
        $(window).on('resize', function () {
            applyDevice(getCurrentDeviceKey());
        });
    
        // 初期表示
        applyDevice(getCurrentDeviceKey());
    }

//実績PC画像表示切り替え
    if($(".p-work-gallery").length){
        const $galleryImg = $(".js-gallery-img");
        const $galleryBtn = $(".js-gallery-btn");

        $galleryBtn.on('click', function(){
            $galleryImg.removeClass('is-active');
            $(this).closest(".js-gallery-img").addClass('is-active');
        });
    }

//お問い合わせ
    if($(".p-contact-form").length){
        const $agreeCheckbox = $(".js-agree-checkbox");
        const $submitButton = $("#form_submit_button");

        $submitButton.prop('disabled', !$agreeCheckbox.is(':checked'));

        // チェック状態の変化を監視
        $agreeCheckbox.on('change', function () {
            $submitButton.prop('disabled', !$(this).is(':checked'));
        });

    }
    

});