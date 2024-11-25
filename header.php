<?php
$page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$page_index = ($page == basename(dirname($_SERVER['PHP_SELF']), "/") || $page == 'index.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>The Mall Lifestore</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="The Mall Lifestore">
    <meta property="og:image" content="<?php echo $root; ?>assets/img/og.jpg">
    <meta property="og:type" content="website">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $root; ?>assets/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root; ?>assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $root; ?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $root; ?>assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $root; ?>assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $root; ?>assets/img/favicon/safari-pinned-tab.svg" color="#ff0000">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS:LIBRARY -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/library/animate.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/liMarquee/liMarquee.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/select2/select2.min.css">
    <!-- CSS:CONFIG -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/font.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-default.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-rwd.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/template.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/tourist.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/branch-single.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/wonder-single.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/brand-and-shop-single.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/mcc-hall.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/about.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/misc-tabs.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/giftcard.css?v=<?php echo time(); ?>">


    <!-- JS:LIBRARY -->
    <script src="<?php echo $root; ?>assets/js/library/modernizr-custom.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-migrate-3.4.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery.easing.1.3.min.js"></script>

    <!-- web by ::* www.plaimanas.com -->
</head>

<body
    <?php echo ($page_index) ? 'class="homepage"' : ''; ?>>
    <div id="page">
        <header id="header">
            <div class="header-wrapper">
                <div class="header-container">
                    <div class="header-l">
                        <div class="search show-lg header-search-trigger">
                            <i class="ic ic-search c-white"></i>
                        </div>

                        <div class="burger-icon header-menu-trigger">
                            <span class="burger-line burger-line-1"></span>
                            <span class="burger-line burger-line-2"></span>
                            <span class="burger-line burger-line-3"></span>
                        </div>
                    </div>

                    <div class="header-m c-white">
                        <div class="menu-wrapper">
                            <ul class="main-menu main-menu1">
                                <li class="menu-item">
                                    <a
                                        href="javascript:;"
                                        data-menu-trigger="whatson"
                                        class="fsw-btn header-menu-trigger
                                        <?php echo in_array($page, ['promotions.php', 'happening.php', 'pr-news.php', 'blog-and-vlog.php', 'single-promotion.php', 'search.php']) ? 'current' : ''; ?>
                                        ">WHAT'S ON</a>
                                </li>
                                <li class="menu-item">
                                    <a
                                        href="javascript:;"
                                        data-menu-trigger="brandshop"
                                        class="fsw-btn header-menu-trigger
                                        <?php echo in_array($page, ['branch-single.php', 'wonder-single.php', 'brand-and-shop.php', 'brand-and-shop-single.php']) ? 'current' : ''; ?>
                                        ">BRAND & SHOP</a>
                                </li>
                            </ul>
                            <a href="./index.php" class="site-logo" id="site_logo">
                                <img class="filter-red" src="./assets/img/design/site-logo.svg" alt="">
                            </a>
                            <ul class="main-menu main-menu2 fsw-btn">
                                <li class="menu-item">
                                    <a
                                        href="javascript:;"
                                        data-menu-trigger="food"
                                        class="fsw-btn header-menu-trigger
                                        <?php echo ($page === 'dining.php') ? 'current' : ''; ?>
                                        ">FOOD</a>
                                </li>
                                <li class="menu-item">
                                    <a
                                        href="javascript:;"
                                        data-menu-trigger="aboutus"
                                        class="fsw-btn header-menu-trigger
                                        <?php echo ($page === 'about.php') ? 'current' : ''; ?>
                                        ">ABOUT US</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="header-r">
                        <ul class="social-list c-white">
                            <li><a target="_blank" href="https://www.facebook.com/themallshoppingcenter/"><i class="ic ic-facebook"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/themalllifestore/"><i class="ic ic-instagram"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/TheMallThailand"><i class="ic ic-x"></i></a></li>
                            <li><a target="_blank" href="https://www.tiktok.com/@themallgroup"><i class="ic ic-tiktok"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/@TheMallGroup"><i class="ic ic-youtube"></i></a></li>
                        </ul>

                        <div class="lang-select show-lg">
                            <?php
                            $lang_arr = [
                                [
                                    'name' => 'TH',
                                    'flag' => './assets/img/design/th-flag.svg'
                                ],
                                [
                                    'name' => 'EN',
                                    'flag' => './assets/img/design/en-flag.svg'
                                ],
                                [
                                    'name' => 'CN',
                                    'flag' => './assets/img/design/cn-flag.svg'
                                ]
                            ];

                            $selected_lang = $lang_arr[0]
                            ?>
                            <div class="selected-value c-white">
                                <img src="<?php echo $selected_lang['flag']; ?>" class="current-lang" alt="Selected Language">
                                <i class="ic ic-angle-down"></i>
                            </div>

                            <div class="options-wrapper">
                                <ul class="options">
                                    <?php
                                    foreach ($lang_arr as $lang) {
                                    ?>
                                        <li>
                                            <a href="javascript:;" class="option" data-lang="<?php echo $lang['name']; ?>" data-flag="<?php echo $lang['flag']; ?>">
                                                <img src=" <?php echo $lang['flag']; ?>" alt="">
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>

                        <div class="search hidden-device-lg header-search-trigger">
                            <i class="ic ic-search c-white fsw-h4"></i>
                        </div>
                    </div>
                </div>

                <div class="header-search">
                    <div class="search-container">
                        <div class="search">
                            <i class="ic ic-search c-white"></i>
                        </div>

                        <form action="<?php echo $root; ?>search.php">
                            <div class="input c-white">
                                <label class="label anim fixed" for="fullname-lastname">Keyword</label>
                                <input type="text" name="search" id="search" autocomplete="off">
                            </div>

                            <button type="submit" class="submit-btn c-white fsw-btn2">
                                SEARCH
                            </button>
                        </form>

                        <a href="javascript:;" class="search-close header-search-close">
                            <i class="ic ic-close c-white"></i>
                        </a>
                    </div>


                </div>
            </div>
        </header>

        <!-- PC MENU -->
        <div class="pcMenu-container show-lg">
            <div class="menu-tab whatson">
                <div class="panel-scroll" data-lenis-prevent>
                    <div class="menu-content-wrapper">
                        <h3 class="tab-title fsw-button">WHAT'S ON</h3>
                        <ul class="menu-content">
                            <li><a href="<?php echo $root; ?>promotions.php">PROMOTIONS</a></li>
                            <li><a href="<?php echo $root; ?>happening.php">HAPPENING</a></li>
                            <li><a href="<?php echo $root; ?>pr-news.php">PR NEWS/CSR</a></li>
                            <li><a href="<?php echo $root; ?>blog-and-vlog.php">BLOG & VLOG</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="menu-tab brandshop">
                <div class="panel-scroll" data-lenis-prevent>
                    <div class="menu-content-wrapper">
                        <h3 class="tab-title fsw-button">BRANDS & SHOP</h3>
                        <div class="menu-content">
                            <?php
                            $brandshop_arr = [
                                [
                                    "name" => "ALL BRANDS",
                                    "link" => "brand-and-shop.php",
                                    "image" => "./assets/img/design/header-menu-all-brand.png"
                                ],
                                [
                                    "name" => "BEAYTY & WELLNESS",
                                    "link" => "brand-and-shop.php",
                                    "image" => "./assets/img/design/header-menu-beauty.jpg"
                                ],
                                [
                                    "name" => "FASHION & ACCESSORIES",
                                    "link" => "brand-and-shop.php",
                                    "image" => "./assets/img/design/header-menu-fashion.jpg"
                                ],
                                [
                                    "name" => "LIFESTYLE & LIVING",
                                    "link" => "brand-and-shop.php",
                                    "image" => "./assets/img/design/header-menu-lifestyle.jpg"
                                ],
                                [
                                    "name" => "GOLD & JEWELRY",
                                    "link" => "brand-and-shop.php",
                                    "image" => "./assets/img/design/header-menu-jewelry.jpg"
                                ],
                                [
                                    "name" => "IT & ELECTRONIC",
                                    "link" => "brand-and-shop.php",
                                    "image" => "./assets/img/design/header-menu-it.jpg"
                                ],
                                [
                                    "name" => "BANK & INSURANCE",
                                    "link" => "brand-and-shop.php",
                                    "image" => "./assets/img/design/header-menu-bank.jpg"
                                ],
                                [
                                    "name" => "ENTERTAINMENT",
                                    "link" => "brand-and-shop.php",
                                    "image" => "./assets/img/design/header-menu-entertainment.jpg"
                                ],

                            ];

                            foreach ($brandshop_arr as $brandshop) {
                            ?>
                                <div class="menu-content-item">
                                    <a href="<?php echo $brandshop["link"] ?>" class="link-overlay">&nbsp;</a>
                                    <div class="image">
                                        <img src="<?php echo $brandshop['image']; ?>" alt="">
                                    </div>
                                    <div class="text">
                                        <h4><?php echo $brandshop['name']; ?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-tab food">
                <div class="panel-scroll" data-lenis-prevent>
                    <div class="menu-content-wrapper">
                        <h3 class="tab-title fsw-button">WONDER OF FOOD DESTINATION</h3>
                        <div class="menu-content">
                            <?php
                            $food_arr = [
                                [
                                    "name" => "ALL BRANDS",
                                    "link" => "dining.php",
                                    "image" => "./assets/img/design/header-menu-all-brand.png"
                                ],
                                [
                                    "name" => "FAST FOOD",
                                    "link" => "dining.php",
                                    "image" => "./assets/img/design/header-menu-fast-food.jpg"
                                ],
                                [
                                    "name" => "WESTERN",
                                    "link" => "dining.php",
                                    "image" => "./assets/img/design/header-menu-western.jpg"
                                ],
                                [
                                    "name" => "THAI",
                                    "link" => "dining.php",
                                    "image" => "./assets/img/design/header-menu-thai.jpg"
                                ],
                                [
                                    "name" => "JAPANESE",
                                    "link" => "dining.php",
                                    "image" => "./assets/img/design/header-menu-japanese.jpg"
                                ],
                                [
                                    "name" => "KOREAN",
                                    "link" => "dining.php",
                                    "image" => "./assets/img/design/header-menu-korean.jpg"
                                ],
                                [
                                    "name" => "CHINESE",
                                    "link" => "dining.php",
                                    "image" => "./assets/img/design/header-menu-chinese.jpg"
                                ],
                                [
                                    "name" => "CAFE",
                                    "link" => "dining.php",
                                    "image" => "./assets/img/design/header-menu-cafe.jpg"
                                ],
                                [
                                    "name" => "GOURMET MARKET",
                                    "link" => "dining.php",
                                    "image" => "./assets/img/design/header-menu-market.jpg"
                                ],

                            ];

                            foreach ($food_arr as $food) {
                            ?>
                                <div class="menu-content-item">
                                    <a href="<?php echo $food["link"] ?>" class="link-overlay">&nbsp;</a>
                                    <div class="image">
                                        <img src="<?php echo $food['image']; ?>" alt="">
                                    </div>
                                    <div class="text">
                                        <h4><?php echo $food['name']; ?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-tab aboutus">
                <div class="panel-scroll" data-lenis-prevent>
                    <div class="menu-content-wrapper">
                        <h3 class="tab-title fsw-button">ABOUT US</h3>
                        <ul class="menu-content">
                            <li><a href="<?php echo $root; ?>directory.php">DIRECTORY & SERVICES</a></li>
                            <li><a href="<?php echo $root; ?>misc.php">RETAIL SPACE SOLUTION</a></li>
                            <li><a href="<?php echo $root; ?>tourist.php">TOURIST</a></li>
                            <li><a href="<?php echo $root; ?>misc.php">CONTACT US</a></li>
                            <li><a href="<?php echo $root; ?>about.php">ABOUT US</a></li>
                            <li><a href="<?php echo $root; ?>misc.php">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <!-- MOBILE MENU -->
        <div class="mobileMenu-container">
            <div class="content">
                <div class="mobile-header">
                    <div class="burger-icon header-menu-trigger">
                        <span class="burger-line burger-line-1"></span>
                        <span class="burger-line burger-line-2"></span>
                        <span class="burger-line burger-line-3"></span>
                    </div>
                </div>

                <div class="accordion-container toggle c-white">
                    <div class="accordion">
                        <h3 class="entry-title">WHAT'S ON</h3>
                        <div class="entry-panel">
                            <ul class="accordion-links">
                                <li><a href="<?php echo $root; ?>promotions.php">PROMOTIONS</a></li>
                                <li><a href="<?php echo $root; ?>happening.php">HAPPENING</a></li>
                                <li><a href="<?php echo $root; ?>pr-news.php">PR NEWS/CSR</a></li>
                                <li><a href="<?php echo $root; ?>blog-and-vlog.php">BLOG & VLOG</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion">
                        <h3 class="entry-title">BRANDS & SHOP</h3>
                        <div class="entry-panel">
                            <p class="subtitle fsw-button c-gray-light">BRANDS & SHOP</p>
                            <ul class="accordion-links">
                                <li><a href="<?php echo $root; ?>brand-and-shop.php">ALL BRANDS</a></li>
                                <li><a href="<?php echo $root; ?>brand-and-shop.php">BEAUTY&WELLNESS</a></li>
                                <li><a href="<?php echo $root; ?>brand-and-shop.php">FASHION&ACCESSORIES</a></li>
                                <li><a href="<?php echo $root; ?>brand-and-shop.php">LIFESTYLE&LIVING</a></li>
                                <li><a href="<?php echo $root; ?>brand-and-shop.php">GOLD&JEWELRY</a></li>
                                <li><a href="<?php echo $root; ?>brand-and-shop.php">IT&ELECTRONIC</a></li>
                                <li><a href="<?php echo $root; ?>brand-and-shop.php">BANK&INSURANCE</a></li>
                                <li><a href="<?php echo $root; ?>brand-and-shop.php">ENTERTAINMENT</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion">
                        <h3 class="entry-title">FOOD</h3>
                        <div class="entry-panel">
                            <ul class="accordion-links">
                                <li><a href="<?php echo $root; ?>dining.php">ALL BRANDS</a></li>
                                <li><a href="<?php echo $root; ?>dining.php">FAST FOOD</a></li>
                                <li><a href="<?php echo $root; ?>dining.php">WESTERN</a></li>
                                <li><a href="<?php echo $root; ?>dining.php">THAI</a></li>
                                <li><a href="<?php echo $root; ?>dining.php">JAPANESE</a></li>
                                <li><a href="<?php echo $root; ?>dining.php">KOREAN</a></li>
                                <li><a href="<?php echo $root; ?>dining.php">CHINESE</a></li>
                                <li><a href="<?php echo $root; ?>dining.php">CAFE</a></li>
                                <li><a href="<?php echo $root; ?>dining.php">Gourmet Market</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="accordion">
                        <h3 class="entry-title">ABOUT US</h3>
                        <div class="entry-panel">
                            <ul class="accordion-links">
                                <li><a href="<?php echo $root; ?>directory.php">DIRECTORY & SERVICES</a></li>
                                <li><a href="<?php echo $root; ?>misc.php">RETAIL SPACE SOLUTION</a></li>
                                <li><a href="<?php echo $root; ?>tourist.php">TOURIST</a></li>
                                <li><a href="<?php echo $root; ?>misc.php">CONTACT US</a></li>
                                <li><a href="<?php echo $root; ?>about.php">ABOUT US</a></li>
                                <li><a href="<?php echo $root; ?>misc.php">FAQ</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="content-footer">
                <ul class="social-list c-white">
                    <li><a href=""><i class="ic ic-facebook"></i></a></li>
                    <li><a href=""><i class="ic ic-instagram"></i></a></li>
                    <li><a href=""><i class="ic ic-x"></i></a></li>
                    <li><a href=""><i class="ic ic-tiktok"></i></a></li>
                    <li><a href=""><i class="ic ic-youtube"></i></a></li>
                </ul>

                <div class="lang-select">
                    <?php
                    $lang_arr = [
                        [
                            'name' => 'TH',
                            'flag' => './assets/img/design/th-flag.svg'
                        ],
                        [
                            'name' => 'EN',
                            'flag' => './assets/img/design/en-flag.svg'
                        ],
                        [
                            'name' => 'CN',
                            'flag' => './assets/img/design/cn-flag.svg'
                        ]
                    ];

                    $selected_lang = $lang_arr[0]
                    ?>
                    <div class="selected-value c-white">
                        <img src="<?php echo $selected_lang['flag']; ?>" class="current-lang" alt="Selected Language">
                        <i class="ic ic-angle-down"></i>
                    </div>

                    <div class="options-wrapper">
                        <ul class="options">
                            <?php
                            foreach ($lang_arr as $lang) {
                            ?>
                                <li>
                                    <a href="javascript:;" class="option" data-lang="<?php echo $lang['name']; ?>" data-flag="<?php echo $lang['flag']; ?>">
                                        <img src=" <?php echo $lang['flag']; ?>" alt="">
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>