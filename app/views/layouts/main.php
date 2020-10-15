<?php $lang = \ibuild\App::$app->getProperty('language');?>
<!DOCTYPE html>
<html lang="<?=$lang['code']?>">

<head>
    <?php if ($lang['code'] === 'GE'): ?>
    <link rel="alternate" hreflang="en" href="https://blackseatowers.com/en" />
    <link rel="alternate" hreflang="ru" href="https://blackseatowers.com/ru" />

    <link rel="canonical" href="https://blackseatowers.com/ka" />
    <?php elseif($lang['code'] === 'EN'):  ?>
        <link rel="alternate" hreflang="ka" href="https://blackseatowers.com/ka" />
        <link rel="alternate" hreflang="ru" href="https://blackseatowers.com/ru" />

        <link rel="canonical" href="https://blackseatowers.com/en" />
    <?php elseif($lang['code'] === 'RU'):  ?>
        <link rel="alternate" hreflang="ka" href="https://blackseatowers.com/ka" />
        <link rel="alternate" hreflang="en" href="https://blackseatowers.com/en" />

        <link rel="canonical" href="https://blackseatowers.com/ru" />
    <?php endif;  ?>

    <!-- TITLE AND META -->
    <?=$this->getMeta();?>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta property="og:site_name" content="Calligraphy Towers - Grand Maison  - სამშენებლო კომპანია" />
    <meta property="og:title" content="Calligraphy Towers" />
    <meta property="og:image" content="/public/images/gallery/headermapped.jpg" />
    <meta property="og:url" content="https://blackseatowers.com" />
    <meta property="og:type" content="website" />
    <meta name="resource-type" content="document"/>
    <meta name="google-site-verification" content="0vNAVT43vkQ4Vh5Ma7v4iCW-r4cCCSKFj-QDszxddKA" />


    <!-- FAV AND TOUCH ICONS   -->
    <link rel="apple-touch-icon" sizes="57x57" href="/public/images/gallery/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/public/images/gallery/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/public/images/gallery/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/public/images/gallery/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/public/images/gallery/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/public/images/gallery/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/public/images/gallery/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/public/images/gallery/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/public/images/gallery/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/public/images/gallery/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/images/gallery/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/public/images/gallery/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/images/gallery/favicon/favicon-16x16.png">
    <link rel="manifest" href="/public/images/gallery/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/public/images/gallery/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link type='text/css' rel="stylesheet" href="/admintemp/plugins/fontawesome-free/css/all.min.css">
    <link type='text/css' rel="stylesheet" href="/fonts/archyedt-bold.min.css" style="font-display: swap;">


    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css">

    <!-- Image Slider -->
    <link rel="stylesheet" href="/public/css/plagin-css/owl.carousel.min.css">

    <!-- Full Page Scroll -->
    <link rel="stylesheet" href="/public/css/plagin-css/jquery.fullPage.min.css">

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="/public/icons/rik-icons/styles.min.css">

    <!--   COUSTOM CSS link  -->
    <link rel="stylesheet" href="/public/css/style.min.css">
    <link rel="stylesheet" href="/public/css/responsive.min.css">

    <!--[if lt IE 9]>
    <script src="/public/js/plagin-js/html5shiv.js"></script>
    <script src="/public/js/plagin-js/respond.min.js"></script>
    <![endif]-->


    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="/public/js/plagin-js/magnific-popup/magnific-popup.min.css">

    <!-- image Compare CSS file -->
    <link rel="stylesheet" href="/public/js/plagin-js/image-compare/images-compare.min.css">
</head>
<body>

    <div class="hide65279">
    <?=$content?>

    <!-- SCRIPTS
    ========================================-->
    <script src="/public/js/plagin-js/jquery-1.11.3.min.js"></script>
    <script src="/public/js/plagin-js/preloader.min.js"></script>
    <script src="/public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/public/js/plagin-js/plagin.min.js"></script>
    <script src="/public/js/plagin-js/hammer2.0.8.min.js"></script>
    <!-- Custom Script
    ==========================================-->
    <script src="/public/js/custom-scripts.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script src="/public/js/plagin-js/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Image Compare JS file -->
    <script src="/public/js/plagin-js/image-compare/jquery.images-compare.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var imagesCompareElement = $('.js-img-compare').imagesCompare();
            var imagesCompare = imagesCompareElement.data('imagesCompare');
            var events = imagesCompare.events();
            $('.js-front-btn').on('click', function (event) {
                event.preventDefault();
                imagesCompare.setValue(1, true);
            });

            $('.js-back-btn').on('click', function (event) {
                event.preventDefault();
                imagesCompare.setValue(0, true);
            });

            $('.js-toggle-btn').on('click', function (event) {
                event.preventDefault();
                if (imagesCompare.getValue() >= 0 && imagesCompare.getValue() < 1) {
                    imagesCompare.setValue(1, true);
                } else {
                    imagesCompare.setValue(0, true);
                }
            });
        });
    </script>

    </body>
</html>
