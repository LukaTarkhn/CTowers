<meta property="og:site_name" content="Grand Maison  - სამშენებლო კომპანია" />
<meta property="og:title" content="<?=$project->title_geo?>" />
<meta property="og:image" content="/images/<?=$project->img?>" />
<meta property="og:url" content="realpalace.ge/project/<?=$project->id?>" />
<meta property="og:type" content="article" />

<?php $lang = \ibuild\App::$app->getProperty('language');?>
<?php if ($lang['code'] === 'GE'): ?>
    <div class="GE">
        <!-- NAVIGATION -->
        <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation" role="navigation">

            <div class="container">
                <div class="navbar-header">

                    <!-- NAVBAR EXPAND COLLAPSE ON MOBILE -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">ნავიგაცია</span>
                        <span class="icon icon-menu"></span>
                    </button>

                    <!-- LOGO -->
                    <a href="/ka">
                        <img src="/images/logo.png" alt="LOGO" class="inner-main-logo">
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="navigation">
                    <!-- NAVIGATION LINK -->
                    <ul class="nav navbar-nav navbar-right main-navigation" id="internal-scroll">
                        <li><a href="/ka" class="MTRegular">მთავარ გვერდზე დაბრუნება</a>
                        </li>
                        <li><a href="#section10" class="MTRegular">კონტაქტი</a>
                        </li>
                    </ul>

                </div>

            </div>
            <!-- /END CONTAINER -->
        </div>
        <!-- /END NAIVATION -->
        <section class="about-us" id="section1">

            <div class="container">
                <div class="row">

                    <!-- FEATURED IMAGE AREA -->
                    <div class="col-lg-6 visible-lg">
                        <div class="featured-image">
                            <img src="/images/<?=$project->img?>" alt="">
                            <!-- ABOUT US FEATURED IMAGE -->
                            <div class="image-border">

                            </div>
                        </div>
                    </div>

                    <!-- ABOUT US BOX -->
                    <div class="col-lg-7 col-sm-12 overflow-box pull-right">
                        <div class="about-box diffuse-shadow wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                            <div class="about-content">

                                <!-- SECTION HEADING -->
                                <h3 class="section-heading text-left MTMedium"><?=$project->title_geo?></h3>

                                <!-- PARAGRAPH -->
                                <span class="text-left NusRegular"><?=$project->content_geo?></span>
                            </div>

                            <div class="four-lines">
                                <div class="line red-line-bottom">
                                </div>
                                <div class="line green-line-bottom">
                                </div>
                                <div class="line purple-line-bottom">
                                </div>
                                <div class="line yellow-line-bottom">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php elseif($lang['code'] === 'EN'): ?>
    <div class="EN">
        <!-- NAVIGATION -->
        <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation" role="navigation">

            <div class="container">
                <div class="navbar-header">

                    <!-- NAVBAR EXPAND COLLAPSE ON MOBILE -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Navigation</span>
                        <span class="icon icon-menu"></span>
                    </button>

                    <!-- LOGO -->
                    <a href="/en">
                        <img src="/images/logo.png" alt="LOGO" class="inner-main-logo">
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="navigation">
                    <!-- NAVIGATION LINK -->
                    <ul class="nav navbar-nav navbar-right main-navigation" id="internal-scroll">
                        <li><a href="/en" class="MTRegular">Return to home page</a>
                        </li>
                        <li><a href="#section10" class="MTRegular">Contact</a>
                        </li>
                    </ul>

                </div>

            </div>
            <!-- /END CONTAINER -->
        </div>
        <!-- /END NAIVATION -->
        <section class="about-us" id="section1">

            <div class="container">
                <div class="row">

                    <!-- FEATURED IMAGE AREA -->
                    <div class="col-lg-6 visible-lg">
                        <div class="featured-image">
                            <img src="/images/<?=$project->img?>" alt="">
                            <!-- ABOUT US FEATURED IMAGE -->
                            <div class="image-border">

                            </div>
                        </div>
                    </div>

                    <!-- ABOUT US BOX -->
                    <div class="col-lg-7 col-sm-12 overflow-box pull-right">
                        <div class="about-box diffuse-shadow wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                            <div class="about-content">

                                <!-- SECTION HEADING -->
                                <h3 class="section-heading text-left MTMedium"><?=$project->title_eng?></h3>

                                <!-- PARAGRAPH -->
                                <span class="text-left NusRegular"><?=$project->content_eng?></span>
                            </div>

                            <div class="four-lines">
                                <div class="line red-line-bottom">
                                </div>
                                <div class="line green-line-bottom">
                                </div>
                                <div class="line purple-line-bottom">
                                </div>
                                <div class="line yellow-line-bottom">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php elseif($lang['code'] === 'RU'): ?>
    <div class="RU">
        <!-- NAVIGATION -->
        <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation" role="navigation">

            <div class="container">
                <div class="navbar-header">

                    <!-- NAVBAR EXPAND COLLAPSE ON MOBILE -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Навигация</span>
                        <span class="icon icon-menu"></span>
                    </button>

                    <!-- LOGO -->
                    <a href="/ru">
                        <img src="/images/logo.png" alt="LOGO" class="inner-main-logo">
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="navigation">
                    <!-- NAVIGATION LINK -->
                    <ul class="nav navbar-nav navbar-right main-navigation" id="internal-scroll">
                        <li><a href="/ru" class="MTRegular">Вернуться на главную страницу</a>
                        </li>
                        <li><a href="#section10" class="MTRegular">Контакт</a>
                        </li>
                    </ul>

                </div>

            </div>
            <!-- /END CONTAINER -->
        </div>
        <!-- /END NAIVATION -->
        <section class="about-us" id="section1">

            <div class="container">
                <div class="row">

                    <!-- FEATURED IMAGE AREA -->
                    <div class="col-lg-6 visible-lg">
                        <div class="featured-image">
                            <img src="/images/<?=$project->img?>" alt="">
                            <!-- ABOUT US FEATURED IMAGE -->
                            <div class="image-border">

                            </div>
                        </div>
                    </div>

                    <!-- ABOUT US BOX -->
                    <div class="col-lg-7 col-sm-12 overflow-box pull-right">
                        <div class="about-box diffuse-shadow wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                            <div class="about-content">

                                <!-- SECTION HEADING -->
                                <h3 class="section-heading text-left MTMedium"><?=$project->title_rus?></h3>

                                <!-- PARAGRAPH -->
                                <span class="text-left NusRegular"><?=$project->content_rus?></span>
                            </div>

                            <div class="four-lines">
                                <div class="line red-line-bottom">
                                </div>
                                <div class="line green-line-bottom">
                                </div>
                                <div class="line purple-line-bottom">
                                </div>
                                <div class="line yellow-line-bottom">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php endif ?>

