<?php
    $not_top = ($page_id === 'top') ? '' : $path . 'index.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  viewport-fit=cover">
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="" />
    <meta property="og:url" content="<?php echo $page_description; ?>">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta name="robots" content="noindex">
    <link rel="icon" href="<?php echo $path; ?>img/favicon.ico" />
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="<?php echo $path; ?>css/style.css">
    <?php if ($page_id === 'top'): ?>
        <script>
            if (sessionStorage.getItem('hasLoaded')) {
                document.documentElement.classList.add('is-visited');
            }
        </script>
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.js"></script>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body id="top" class="<?php echo ($page_id === 'thanks') ? 'c-height' : ''; ?>">

    <?php if ($page_id === 'top'): ?>
    <div class="p-loader js-loader">
        <div class="p-loader__inner">
            <p class="p-loader__percent"><span class="js-loader-percent">0</span>%</p>
            <div class="p-loader__bar">
                <div class="p-loader__bar-inner js-loader-bar"></div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <header class="l-header js-header">
        <div class="l-header__inner">
        <?php if ($page_id === 'top'): ?>
            <h1 class="l-header__logo js-header-logo">
                <a class="l-header__logo-link" href="#top">w/Kengo</a>
            </h1>
        <?php else: ?>
            <div class="l-header__logo js-header-logo">
                <a class="l-header__logo-link" href="<?php echo $path; ?>index.php">w/Kengo</a>
            </div>
        <?php endif; ?>
            <div class="l-header__nav-container">
                <nav class="l-header__nav js-nav">
                    <ul class="l-header__nav-list">
                        <li class="l-header__nav-item">
                            <a class="l-header__nav-link c-hover c-hover__underline" href="<?php echo $path; ?>index.php">Top</a>
                        </li>
                        <li class="l-header__nav-item">
                            <a class="l-header__nav-link c-hover c-hover__underline" href="<?php echo $not_top; ?>#about">About</a>
                        </li>
                        <li class="l-header__nav-item">
                            <a class="l-header__nav-link c-hover c-hover__underline" href="<?php echo $not_top; ?>#services">Services</a>
                        </li>
                        <li class="l-header__nav-item">
                            <a class="l-header__nav-link c-hover c-hover__underline" href="<?php echo $not_top; ?>#works">Works</a>
                        </li>
                        <li class="l-header__nav-item">
                            <a class="l-header__nav-link c-hover c-hover__underline" href="<?php echo $not_top; ?>#skills">Skills</a>
                        </li>
                        <li class="l-header__nav-item">
                            <a class="l-header__nav-link c-hover c-hover__underline" href="<?php echo $not_top; ?>#flow">Flow</a>
                        </li>
                        <li class="l-header__nav-item">
                            <a class="l-header__nav-link c-hover c-hover__underline" href="<?php echo $not_top; ?>#faq">FAQ</a>
                        </li>
                        <li class="l-header__nav-item">
                            <a class="l-header__nav-link c-hover c-hover__underline" href="<?php echo $path; ?>contact/contact.php">Contact</a>
                        </li>
                    </ul>
                </nav>
                <button class="l-header__menu-button js-menu-trigger">
                    <div class="l-header__menu-box">
                        <span class="l-header__menu-line"></span>
                        <span class="l-header__menu-line"></span>
                        <span class="l-header__menu-line"></span>
                    </div>
                </button>
            </div>
        </div>
        <div class="l-menu js-menu">
            <nav class="l-menu__nav">
                <ul class="l-menu__nav-list">
                    <li class="l-menu__nav-item">
                        <a class="l-menu__nav-link c-hover c-hover__underline" href="<?php echo $path; ?>index.php"><span>Top</span><img src="<?php echo $path; ?>img/arrow.svg" alt=""></a>
                    </li>
                    <li class="l-menu__nav-item">
                        <a class="l-menu__nav-link c-hover c-hover__underline" href="<?php echo $not_top; ?>#about"><span>About</span><img src="<?php echo $path; ?>img/arrow.svg" alt=""></a>
                    </li>
                    <li class="l-menu__nav-item">
                        <a class="l-menu__nav-link c-hover c-hover__underline" href="<?php echo $not_top; ?>#services"><span>Services</span><img src="<?php echo $path; ?>img/arrow.svg" alt=""></a>
                    </li>
                    <li class="l-menu__nav-item">
                        <a class="l-menu__nav-link c-hover c-hover__underline" href="<?php echo $not_top; ?>#works"><span>Works</span><img src="<?php echo $path; ?>img/arrow.svg" alt=""></a>
                    </li>
                    <li class="l-menu__nav-item">
                        <a class="l-menu__nav-link c-hover c-hover__underline" href="<?php echo $not_top; ?>#skills"><span>Skills</span><img src="<?php echo $path; ?>img/arrow.svg" alt=""></a>
                    </li>
                    <li class="l-menu__nav-item">
                        <a class="l-menu__nav-link c-hover c-hover__underline" href="<?php echo $not_top; ?>#flow"><span>Flow</span><img src="<?php echo $path; ?>img/arrow.svg" alt=""></a>
                    </li>
                    <li class="l-menu__nav-item">
                        <a class="l-menu__nav-link c-hover c-hover__underline" href="<?php echo $not_top; ?>#faq"><span>FAQ</span><img src="<?php echo $path; ?>img/arrow.svg" alt=""></a>
                    </li>
                    <li class="l-menu__nav-item l-menu__nav-item--contact">
                        <a class="l-menu__nav-link c-hover c-hover__underline" href="<?php echo $path; ?>contact/contact.php"><span>Contact</span><img src="<?php echo $path; ?>img/arrow.svg" alt=""></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>