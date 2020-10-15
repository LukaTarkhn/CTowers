</div>
<?php
function Parse($p1, $p2, $p3){
    $num1 = strpos($p1, $p2);
    if ($num1 === false) return 0;
    $num2 = substr($p1, $num1);
    return substr(strip_tags(substr($num2, 0, strpos($num2, $p3))), -9);
}

$video1 = file_get_contents('https://www.ipcamlive.com/5edfd00ed0cba');
$token1 = Parse($video1,'var token',';');
$video2 = file_get_contents('https://www.ipcamlive.com/5ee1f7e469e75');
$token2 = Parse($video2,'var token',';');
?>

<style>
    html,
    body,
    section,
    .inner-container {
        height: 100%;
    }
    .inner-container {
        display: flex;align-items: center;justify-content: center;

    }
    #armor-apartment {
        background: url(/public/images/gallery/pattern1.gif) repeat top left #fdfdfd;
        display: flex;
        flex-direction: column;
        color: #888888;
        padding: 20px 30px;
        max-width: 400px;
        margin: 40px auto;
    }
    .contact-form {
        display: flex;
        flex-direction: column;
    }
    #armor-apartment button {
        background-color: #f7931d;
        font-size: 17px;
        color: #fff;
    }
    #armor-apartment input,
    #armor-apartment select{
        width: 100%;
        height: 50px;
        padding: 10px;
        color: #000;
        border: 1px solid #dddddd;
        margin-bottom: 10px;
    }
    .image-block img {
        min-height: 370px;
    }
    .sub-heading, html, body, h1, h2, span, p, small, div, a, h3, .btn, .right-icon, .btn-services, .btn-mask, .section-heading, .min-heder, #bingc-phone-button-tooltip {
    font-family: CITI-Nus-Regular;
    }
    body {
        overflow-y: auto!important;
    }
    .services-section,
    .main-conteiner {
        background: #263238;
    }
    html, body, section, .inner-container {
        height: auto;
    }
</style>
<div id="main-preloader" class="main-preloader semi-dark-background">
    <div class="main-preloader-inner center">
        <h1 class="preloader-percentage center" style="font-size: 12px;">
            Calligraphy Towers
        </h1>
        <div class="center" style="background-color: #263238;">
            <img src="/public/images/grandmaison.png" alt="" style="height:200px">
        </div>
        <div class="preloader-bar-outer">
            <div class="preloader-bar"></div>
        </div>
    </div>
</div>
<?php $lang = \ibuild\App::$app->getProperty('language');?>
<?php if ($lang['code'] === 'GE'): ?>
<section>
    <div class="header-logo">
        <a href="/">
            <img src="/public/images/gallery/logo2.png" alt="">
        </a>
    </div>
    <a href="#call-back" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button" style="bottom: 7%; right: 2%;">
        <svg class="bingc-phone-button-circle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
            <circle class="bingc-phone-button-circle-outside" cx="50" cy="50" r="50"></circle>
            <circle class="bingc-phone-button-circle-inside" cx="50" cy="50" r="40"></circle>
        </svg>
        <svg id="bingc-phone-button-icon-icon" class="bingc-phone-button-icon-icon bingc-phone-button-icon-show" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 16.877 16.877" xml:space="preserve">
            <path d="M5.301,5.587L1.404,1.688c0.503-0.503,1.005-1.007,1.509-1.511C3.146-0.056,3.522-0.06,3.756,0.17l3.036,3.039 c0.232,0.232,0.232,0.614-0.003,0.848L6.124,4.721L5.505,5.34C5.429,5.417,5.36,5.499,5.301,5.587z M8.507,11.938 c-0.638-0.549-1.25-1.132-1.844-1.725C6.07,9.616,5.489,9.006,4.939,8.365c-0.45-0.52-0.538-1.273-0.303-1.907L0.636,2.457 c-0.931,0.957-0.812,3.33,0.208,5.415c0.438,0.902,1.006,1.716,1.593,2.49c0.586,0.768,1.229,1.494,1.906,2.176 c0.679,0.681,1.401,1.327,2.171,1.913c0.774,0.589,1.59,1.153,2.486,1.59c2.088,1.019,4.462,1.131,5.418,0.199l-4.001-4.001 C9.783,12.474,9.029,12.387,8.507,11.938z M16.702,13.119l-3.036-3.037c-0.233-0.23-0.615-0.23-0.848,0.003h-0.002l-0.667,0.666 l-0.615,0.618c-0.076,0.076-0.159,0.143-0.247,0.205l3.896,3.898c0.504-0.505,1.007-1.007,1.512-1.51 C16.93,13.729,16.935,13.352,16.702,13.119z"></path>
        </svg>
    </a>
    <div id="call-back" class="zoom-anim-dialog mfp-hide">
        <p class="call-back--header"><b>საკონტაქტო ინფორმაცია</b></p>
        <span>*2806 (ISRAEL)</span>
        <span>+995 571 07 55 55</span>
        <span>+995 571 02 55 55</span>
        <span>info@calligraphy-towers.com</span>
        <p class="call-back--header"><b>ჩვენ დაგირეკავთ</b></p>
        <h6 class="callsuccess dark-background">მადლობა, მალე დაგირეკავთ</h6>
        <h6 class="callerror red-text"></h6>
        <form id="call-form">
            <input id="phone" name="phone" type="tel" placeholder="თქვენი ტელეფონის ნომერი" required>
            <button type="submit" value="Send">დამირეკეთ</button>
        </form>
    </div>
    <div id="calculator" class="zoom-anim-dialog mfp-hide">
        <p class="call-back--header"><b>კრედიტის კალკულატორი</b></p>
        <form class="calculator-form">
            <label for="price">გადასახდელი თანხის ოდენობა:</label>
            <input type="number" id="price" name="price" class="input-field"  required>
            <label for="percent">წინასწარი გადახდა:</label>
            <select id="percent" name="percent" class="input-field" required>
                <option value="20">20%</option>
                <option value="30">30%</option>
                <option value="40">40%</option>
                <option value="50">50%</option>
                <option value="60">60%</option>
                <option value="70">70%</option>
                <option value="80">80%</option>
                <option value="90">90%</option>
            </select>
            <label for="months">გადახდის ხანგრძლივობა <b style="color: #0b2e13">0%</b> პროცენტად:</label>
            <select id="months" name="months" class="input-field" required>
                <option value="27">27 თვე</option>
                <option value="26">26 თვე</option>
                <option value="25">25 თვე</option>
                <option value="24">24 თვე</option>
                <option value="23">23 თვე</option>
                <option value="22">22 თვე</option>
                <option value="21">21 თვე</option>
                <option value="20">20 თვე</option>
                <option value="19">19 თვე</option>
                <option value="18">18 თვე</option>
                <option value="17">17 თვე</option>
                <option value="16">16 თვე</option>
                <option value="15">15 თვე</option>
                <option value="14">14 თვე</option>
                <option value="13">13 თვე</option>
                <option value="12">12 თვე</option>
                <option value="11">11 თვე</option>
                <option value="10">10 თვე</option>
                <option value="9">9 თვე</option>
                <option value="8">8 თვე</option>
                <option value="7">7 თვე</option>
                <option value="6">6 თვე</option>
                <option value="5">5 თვე</option>
                <option value="4">4 თვე</option>
                <option value="3">3 თვე</option>
                <option value="2">2 თვე</option>
                <option value="1">1 თვე</option>
            </select>
            <label for="equal">ყოველთვიური გადასახადი:</label>
            <input type="text" id="equal" name="equal" class="input-field" value="0$" disabled>
        </form>
    </div>
    <div id="calculator2" class="zoom-anim-dialog mfp-hide">
        <p class="call-back--header"><b>კრედიტის კალკულატორი</b></p>
        <form class="calculator-form">
            <label for="price2">გადასახდელი თანხის ოდენობა:</label>
            <input type="number" id="price2" name="price2" class="input-field"  required>
            <label for="percent2">წინასწარი გადახდა:</label>
            <select id="percent2" name="percent2" class="input-field" required>
                <option value="20">20%</option>
                <option value="30">30%</option>
                <option value="40">40%</option>
                <option value="50">50%</option>
                <option value="60">60%</option>
                <option value="70">70%</option>
                <option value="80">80%</option>
                <option value="90">90%</option>
            </select>
            <label for="months2">გადახდის ხანგრძლივობა <b style="color: #0b2e13">7%</b> პროცენტად:</label>
            <select id="months2" name="months2" class="input-field" required>
                <option value="27">27 თვე</option>
                <option value="26">26 თვე</option>
                <option value="25">25 თვე</option>
                <option value="24">24 თვე</option>
                <option value="23">23 თვე</option>
                <option value="22">22 თვე</option>
                <option value="21">21 თვე</option>
                <option value="20">20 თვე</option>
                <option value="19">19 თვე</option>
                <option value="18">18 თვე</option>
                <option value="17">17 თვე</option>
                <option value="16">16 თვე</option>
                <option value="15">15 თვე</option>
                <option value="14">14 თვე</option>
                <option value="13">13 თვე</option>
                <option value="12">12 თვე</option>
                <option value="11">11 თვე</option>
                <option value="10">10 თვე</option>
                <option value="9">9 თვე</option>
                <option value="8">8 თვე</option>
                <option value="7">7 თვე</option>
                <option value="6">6 თვე</option>
                <option value="5">5 თვე</option>
                <option value="4">4 თვე</option>
                <option value="3">3 თვე</option>
                <option value="2">2 თვე</option>
                <option value="1">1 თვე</option>
            </select>
            <label for="equal2">ყოველთვიური გადასახადი:</label>
            <input type="text" id="equal2" name="equal2" class="input-field" value="0$" disabled>
        </form>
    </div>
    <a style="position: absolute; top: 43%;right: 57px" href="#armor-apartment" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button">
        <div style="background: #4caf50;text-align: center; font-size: 16px; width: 160px;font-family: CITI-Nus-Regular !important;">
            დაჯავშნა
        </div>
    </a>
    <a style="position: absolute; top: 48%;right: 57px" href="#calculator2" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button">
        <div style="background: #015d7c;text-align: center; font-size: 16px; width: 160px;font-family: CITI-Nus-Regular !important;">
            იპოთეკური სესხი
        </div>
    </a>
    <a style="position: absolute; top: 53%;right: 57px" href="#calculator" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button">
        <div style="background: #015d7c;text-align: center; font-size: 16px; width: 160px;font-family: CITI-Nus-Regular !important;">
            შიდა უპროცენტო განვადება
        </div>
    </a>
    <div id="armor-apartment" class="zoom-anim-dialog mfp-hide">
        <p class="call-back--header"><b>დაჯავშნა</b></p>
        <form action="/armores/add" method="post" data-toggle="validator" class="contact-form wow fadeInRight" style="margin-top: 20px; visibility: visible; animation-duration: 1.5s; animation-delay: 0.15s; animation-name: fadeInRight;" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            <input type="text" id="person" name="person" class="input-field" placeholder="სრული სახელი" required="">
            <input type="text" id="mobile" name="mobile" class="input-field" placeholder="ტელეფონის ნომერი" required="">
            <input type="email" id="email" name="email" class="input-field" placeholder="ელ.ფოსტა" required="">
            <select id="cars" name="duration" class="input-field">
                <option value="1">2-5 დღე 300 $</option>
                <option value="2">6-14 დღე 500 $</option>
                <option value="3">15-25 დღე 1000 $</option>
            </select>
            <input type="hidden" id="floor" name="floor" class="input-field" value="<?=$apartment->floorid?>" required="">
            <input type="hidden" id="apartment" name="apartment" class="input-field" value="<?=$apartment->apartmentno?>" required=""> <br>
            <button type="submit" class="btn btn-default standard-button red-button" style="border-radius: 4px; background-color: #3F51B5">დაბრონვა</button>
        </form>
    </div>

    <div class="inner-container services-section " id="services">
        <div class="container">
            <div class="row">
                <!-- Start: Section Heading -->
                <div class="section-header col-sm-8 col-sm-offset-2">
                    <div class="overflow">
                        <div class="line-outer">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="overflow">
                        <div class="section-heading-outer m-b-15">
                            <p class="sub-heading">ბინა №<?=$apartment->apartmentno?></p>
                            <a class="sub-heading" href="/ka/bfloor/<?=($apartment->floorid) - 4?>">
                                <p class="sub-heading" style="color: #006cfa">სხვა ბინის არჩევა</p>
                            </a>
                            <div class="real-videos" style="justify-content: center; margin-bottom: 0">
                                <?php if ($apartment->floorid < 6 ): ?>
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=D5f0yOSW0Ww?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 11): ?>  
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=qIrSULwZKpI?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 16): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=1eR47nCscxc?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 21): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=zL0OKObhylg?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 26): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=kWKVKR7LC6c?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 31): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=9eng3icrSk0?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 36): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=7WBYKyaziN4?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 45): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=gOthWPIEr-I?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php endif; ?> 
                             </div>
                        </div>
                    </div>
                </div>
                <!-- End: Section Heading -->
                <div class="clearfix"></div>

                <div class="each-services-outer overflow section-separator sp-bottom">
                    <div class="btn-form-outer" >
                        <div class="number-info" style="border-bottom: 1px solid #484848; padding-bottom: 10px">
                            <div class="number-info--block">
                                <span style="font-size: 30px">ბინა №<?=$apartment->apartmentno?></span>
                            </div>
                            <div class="number-info--block">
                                <?php if ($apartment->status == 1): ?>
                                    <span style="color: #ee3148; font-size: 30px">გაყიდულია</span>
                                <?php else: ?>
                                    <span style="color: #00c054; font-size: 30px">გაყიდვაშია</span>
                                <?php endif;?>
                            </div>
                            <div class="number-info--block">
                                <span style="font-size: 30px"><?=$apartment->kvmeter?>㎡</span>
                            </div>
                        </div>
                    </div>
                    <div class="main-conteiner" style="margin-top: 20px">
                        <div class="image-block" style="margin-right: 15px">
                            <div class="zoom-gallery">
                                <a href="/images/floors/apartmentsb/<?=$apartment->img?>" title="<?=$apartment->kvmeter?>㎡ render">
                                    <img src="/images/floors/apartmentsb/<?=$apartment->img?>" width="180" height="180">
                                </a>
                            </div>
                        </div>
                        <div class="image-block">
                            <div class="zoom-gallery">
                                <a href="/images/floors/apartmentsb/plans/<?=$apartment->img?>" title="<?=$apartment->kvmeter?>㎡ render">
                                    <img src="/images/floors/apartmentsb/plans/<?=$apartment->img?>" width="180" height="180">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="js-img-compare"></div>
</section>
<?php elseif($lang['code'] === 'EN'): ?>
<section>
    <div class="header-logo">
        <a href="/">
            <img src="/public/images/gallery/logo2.png" alt="">
        </a>
    </div>
    <a href="#call-back" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button" style="bottom: 7%; right: 2%;">
        <svg class="bingc-phone-button-circle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
            <circle class="bingc-phone-button-circle-outside" cx="50" cy="50" r="50"></circle>
            <circle class="bingc-phone-button-circle-inside" cx="50" cy="50" r="40"></circle>
        </svg>
        <svg id="bingc-phone-button-icon-icon" class="bingc-phone-button-icon-icon bingc-phone-button-icon-show" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 16.877 16.877" xml:space="preserve">
            <path d="M5.301,5.587L1.404,1.688c0.503-0.503,1.005-1.007,1.509-1.511C3.146-0.056,3.522-0.06,3.756,0.17l3.036,3.039 c0.232,0.232,0.232,0.614-0.003,0.848L6.124,4.721L5.505,5.34C5.429,5.417,5.36,5.499,5.301,5.587z M8.507,11.938 c-0.638-0.549-1.25-1.132-1.844-1.725C6.07,9.616,5.489,9.006,4.939,8.365c-0.45-0.52-0.538-1.273-0.303-1.907L0.636,2.457 c-0.931,0.957-0.812,3.33,0.208,5.415c0.438,0.902,1.006,1.716,1.593,2.49c0.586,0.768,1.229,1.494,1.906,2.176 c0.679,0.681,1.401,1.327,2.171,1.913c0.774,0.589,1.59,1.153,2.486,1.59c2.088,1.019,4.462,1.131,5.418,0.199l-4.001-4.001 C9.783,12.474,9.029,12.387,8.507,11.938z M16.702,13.119l-3.036-3.037c-0.233-0.23-0.615-0.23-0.848,0.003h-0.002l-0.667,0.666 l-0.615,0.618c-0.076,0.076-0.159,0.143-0.247,0.205l3.896,3.898c0.504-0.505,1.007-1.007,1.512-1.51 C16.93,13.729,16.935,13.352,16.702,13.119z"></path>
        </svg>
    </a>
    <div id="call-back" class="zoom-anim-dialog mfp-hide">
        <p class="call-back--header"><b>Contact</b></p>
        <span>*2806 (ISRAEL)</span>
        <span>+995 571 07 55 55</span>
        <span>+995 571 02 55 55</span>
        <span>info@calligraphy-towers.com</span>
        <p class="call-back--header"><b>We call you</b></p>
        <h6 class="callsuccess dark-background">Thanks, we call you</h6>
        <h6 class="callerror red-text"></h6>
        <form id="call-form">
            <input id="phone" name="phone" type="tel" placeholder="Mobile number" required>
            <button type="submit" value="Send">CALL ME</button>
        </form>
    </div>
    <div id="calculator" class="zoom-anim-dialog mfp-hide">
        <p class="call-back--header"><b>Loan calculator</b></p>
        <form class="calculator-form">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" class="input-field"  required>
            <label for="percent">Minimum advance payment:</label>
            <select id="percent" name="percent" class="input-field" required>
                <option value="20">20%</option>
                <option value="30">30%</option>
                <option value="40">40%</option>
                <option value="50">50%</option>
                <option value="60">60%</option>
                <option value="70">70%</option>
                <option value="80">80%</option>
                <option value="90">90%</option>
            </select>
            <label for="months">Duration of payment <b style="color: #0b2e13">0%</b> rate:</label>
            <select id="months" name="months" class="input-field" required>
                <option value="27">27 month</option>
                <option value="26">26 month</option>
                <option value="25">25 month</option>
                <option value="24">24 month</option>
                <option value="23">23 month</option>
                <option value="22">22 month</option>
                <option value="21">21 month</option>
                <option value="20">20 month</option>
                <option value="19">19 month</option>
                <option value="18">18 month</option>
                <option value="17">17 month</option>
                <option value="16">16 month</option>
                <option value="15">15 month</option>
                <option value="14">14 month</option>
                <option value="13">13 month</option>
                <option value="12">12 month</option>
                <option value="11">11 month</option>
                <option value="10">10 month</option>
                <option value="9">9 month</option>
                <option value="8">8 month</option>
                <option value="7">7 month</option>
                <option value="6">6 month</option>
                <option value="5">5 month</option>
                <option value="4">4 month</option>
                <option value="3">3 month</option>
                <option value="2">2 month</option>
                <option value="1">1 month</option>
            </select>
            <label for="equal">Monthly payment:</label>
            <input type="text" id="equal" name="equal" class="input-field" value="0$" disabled>
        </form>
    </div>
    <div id="calculator2" class="zoom-anim-dialog mfp-hide">
        <p class="call-back--header"><b>Loan calculator</b></p>
        <form class="calculator-form">
            <label for="price2">Price:</label>
            <input type="number" id="price2" name="price2" class="input-field"  required>
            <label for="percent2">Minimum advance payment:</label>
            <select id="percent2" name="percent2" class="input-field" required>
                <option value="20">20%</option>
                <option value="30">30%</option>
                <option value="40">40%</option>
                <option value="50">50%</option>
                <option value="60">60%</option>
                <option value="70">70%</option>
                <option value="80">80%</option>
                <option value="90">90%</option>
            </select>
            <label for="months2">Duration of payment <b style="color: #0b2e13">0%</b> rate:</label>
            <select id="months2" name="months2" class="input-field" required>
                <option value="27">27 month</option>
                <option value="26">26 month</option>
                <option value="25">25 month</option>
                <option value="24">24 month</option>
                <option value="23">23 month</option>
                <option value="22">22 month</option>
                <option value="21">21 month</option>
                <option value="20">20 month</option>
                <option value="19">19 month</option>
                <option value="18">18 month</option>
                <option value="17">17 month</option>
                <option value="16">16 month</option>
                <option value="15">15 month</option>
                <option value="14">14 month</option>
                <option value="13">13 month</option>
                <option value="12">12 month</option>
                <option value="11">11 month</option>
                <option value="10">10 month</option>
                <option value="9">9 month</option>
                <option value="8">8 month</option>
                <option value="7">7 month</option>
                <option value="6">6 month</option>
                <option value="5">5 month</option>
                <option value="4">4 month</option>
                <option value="3">3 month</option>
                <option value="2">2 month</option>
                <option value="1">1 month</option>
            </select>
            <label for="equal2">Monthly payment:</label>
            <input type="text" id="equal2" name="equal2" class="input-field" value="0$" disabled>
        </form>
    </div>
    <a style="position: absolute; top: 43%;right: 57px" href="#armor-apartment" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button">
        <div style="background: #4caf50;text-align: center; font-size: 16px; width: 160px">
            Armor
        </div>
    </a>
    <a style="position: absolute; top: 48%;right: 57px" href="#calculator2" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button">
        <div style="background: #015d7c;text-align: center; font-size: 16px; width: 160px;font-family: CITI-Nus-Regular !important;">
            mortgage loan
        </div>
    </a>
    <a style="position: absolute; top: 53%;right: 57px" href="#calculator" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button">
        <div style="background: #015d7c;text-align: center; font-size: 16px; width: 160px;font-family: CITI-Nus-Regular !important;">
            Internal interest-free installment
        </div>
    </a>
    <div id="armor-apartment" class="zoom-anim-dialog mfp-hide">
        <p class="call-back--header"><b>Armor</b></p>
        <form action="/armores/add" method="post" data-toggle="validator" class="contact-form wow fadeInRight" style="margin-top: 20px; visibility: visible; animation-duration: 1.5s; animation-delay: 0.15s; animation-name: fadeInRight;" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            <input type="text" id="person" name="person" class="input-field" placeholder="Full Name" required="">
            <input type="text" id="mobile" name="mobile" class="input-field" placeholder="Phone number" required="">
            <input type="email" id="email" name="email" class="input-field" placeholder="Email" required="">
            <select id="cars" name="duration" class="input-field">
                <option value="1">2-5 Day 300 $</option>
                <option value="2">6-14 Day 500 $</option>
                <option value="3">15-25 Day 1000 $</option>
            </select>
            <input type="hidden" id="floor" name="floor" class="input-field" value="<?=$apartment->floorid?>" required="">
            <input type="hidden" id="apartment" name="apartment" class="input-field" value="<?=$apartment->apartmentno?>" required=""> <br>
            <button type="submit" class="btn btn-default standard-button red-button" style="border-radius: 4px; background-color: #3F51B5">Armor</button>
        </form>
    </div>

    <div class="inner-container services-section " id="services">
        <div class="container">
            <div class="row">
                <!-- Start: Section Heading -->
                <div class="section-header col-sm-8 col-sm-offset-2">
                    <div class="overflow">
                        <div class="line-outer">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="overflow">
                        <div class="section-heading-outer m-b-15">
                            <p class="sub-heading">Apartment №<?=$apartment->apartmentno?></p>
                            <a class="sub-heading" href="/en/bfloor/<?=($apartment->floorid) - 1?>">
                                <p class="sub-heading" style="color: #006cfa">Pick other apartment</p>
                            </a>
                            <div class="real-videos" style="justify-content: center; margin-bottom: 0">
                                <?php if ($apartment->floorid < 6 ): ?>
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=D5f0yOSW0Ww?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 11): ?>  
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=qIrSULwZKpI?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 16): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=1eR47nCscxc?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 21): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=zL0OKObhylg?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 26): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=kWKVKR7LC6c?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 31): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=9eng3icrSk0?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 36): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=7WBYKyaziN4?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 45): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=gOthWPIEr-I?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php endif; ?> 
                             </div>
                        </div>
                    </div>
                </div>
                <!-- End: Section Heading -->
                <div class="clearfix"></div>

                <div class="each-services-outer overflow section-separator sp-bottom">
                    <div class="btn-form-outer" >
                        <div class="number-info" style="border-bottom: 1px solid #484848; padding-bottom: 10px">
                            <div class="number-info--block">
                                <span style="font-size: 30px">Apartment №<?=$apartment->apartmentno?></span>
                            </div>
                            <div class="number-info--block">
                                <?php if ($apartment->status == 1): ?>
                                    <span style="color: #ee3148; font-size: 30px">Sold</span>
                                <?php else: ?>
                                    <span style="color: #00c054; font-size: 30px">For sale</span>
                                <?php endif;?>
                            </div>
                            <div class="number-info--block">
                                <span style="font-size: 30px"><?=$apartment->kvmeter?>㎡</span>
                            </div>
                        </div>
                    </div>
                    <div class="main-conteiner" style="margin-top: 20px">
                        <div class="image-block" style="margin-right: 15px">
                            <div class="zoom-gallery">
                                <a href="/images/floors/apartmentsb/<?=$apartment->img?>" title="<?=$apartment->kvmeter?>㎡ render">
                                    <img src="/images/floors/apartmentsb/<?=$apartment->img?>" width="180" height="180">
                                </a>
                            </div>
                        </div>
                        <div class="image-block">
                            <div class="zoom-gallery">
                                <a href="/images/floors/apartmentsb/plans/<?=$apartment->img?>" title="<?=$apartment->kvmeter?>㎡ render">
                                    <img src="/images/floors/apartmentsb/plans/<?=$apartment->img?>" width="180" height="180">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="js-img-compare"></div>
</section>
<?php elseif($lang['code'] === 'RU'): ?>
<section>
    <div class="header-logo">
        <a href="/">
            <img src="/public/images/gallery/logo2.png" alt="">
        </a>
    </div>
    <a href="#call-back" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button" style="bottom: 7%; right: 2%;">
        <svg class="bingc-phone-button-circle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
            <circle class="bingc-phone-button-circle-outside" cx="50" cy="50" r="50"></circle>
            <circle class="bingc-phone-button-circle-inside" cx="50" cy="50" r="40"></circle>
        </svg>
        <svg id="bingc-phone-button-icon-icon" class="bingc-phone-button-icon-icon bingc-phone-button-icon-show" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 16.877 16.877" xml:space="preserve">
            <path d="M5.301,5.587L1.404,1.688c0.503-0.503,1.005-1.007,1.509-1.511C3.146-0.056,3.522-0.06,3.756,0.17l3.036,3.039 c0.232,0.232,0.232,0.614-0.003,0.848L6.124,4.721L5.505,5.34C5.429,5.417,5.36,5.499,5.301,5.587z M8.507,11.938 c-0.638-0.549-1.25-1.132-1.844-1.725C6.07,9.616,5.489,9.006,4.939,8.365c-0.45-0.52-0.538-1.273-0.303-1.907L0.636,2.457 c-0.931,0.957-0.812,3.33,0.208,5.415c0.438,0.902,1.006,1.716,1.593,2.49c0.586,0.768,1.229,1.494,1.906,2.176 c0.679,0.681,1.401,1.327,2.171,1.913c0.774,0.589,1.59,1.153,2.486,1.59c2.088,1.019,4.462,1.131,5.418,0.199l-4.001-4.001 C9.783,12.474,9.029,12.387,8.507,11.938z M16.702,13.119l-3.036-3.037c-0.233-0.23-0.615-0.23-0.848,0.003h-0.002l-0.667,0.666 l-0.615,0.618c-0.076,0.076-0.159,0.143-0.247,0.205l3.896,3.898c0.504-0.505,1.007-1.007,1.512-1.51 C16.93,13.729,16.935,13.352,16.702,13.119z"></path>
        </svg>
    </a>
    <div id="call-back" class="zoom-anim-dialog mfp-hide">
        <p class="call-back--header"><b>Контакты</b></p>
        <span>*2806 (ISRAEL)</span>
        <span>+995 571 07 55 55</span>
        <span>+995 571 02 55 55</span>
        <span>info@calligraphy-towers.com</span>
        <p class="call-back--header"><b>Мы вам позвоним</b></p>
        <h6 class="callsuccess dark-background">Спасибо, мы скоро вам позвоним</h6>
        <h6 class="callerror red-text"></h6>
        <form id="call-form">
            <input id="phone" name="phone" type="tel" placeholder="Ваш номер телефона" required>
            <button type="submit" value="Send">Позвоните мне</button>
        </form>
    </div>
    <div id="calculator" class="zoom-anim-dialog mfp-hide">
        <p class="call-back--header"><b>Калькулатор кредита</b></p>
        <form class="calculator-form">
            <label for="price">Итоговая цена:</label>
            <input type="number" id="price" name="price" class="input-field"  required>
            <label for="percent">Минимальная предоплата:</label>
            <select id="percent" name="percent" class="input-field" required>
                <option value="20">20%</option>
                <option value="30">30%</option>
                <option value="40">40%</option>
                <option value="50">50%</option>
                <option value="60">60%</option>
                <option value="70">70%</option>
                <option value="80">80%</option>
                <option value="90">90%</option>
            </select>
            <label for="months">Продолжительность платежа <b style="color: #0b2e13">0%</b> Процентная ставка:</label>
            <select id="months" name="months" class="input-field" required>
                <option value="27">27 Месяц</option>
                <option value="26">26 Месяц</option>
                <option value="25">25 Месяц</option>
                <option value="24">24 Месяц</option>
                <option value="23">23 Месяц</option>
                <option value="22">22 Месяц</option>
                <option value="21">21 Месяц</option>
                <option value="20">20 Месяц</option>
                <option value="19">19 Месяц</option>
                <option value="18">18 Месяц</option>
                <option value="17">17 Месяц</option>
                <option value="16">16 Месяц</option>
                <option value="15">15 Месяц</option>
                <option value="14">14 Месяц</option>
                <option value="13">13 Месяц</option>
                <option value="12">12 Месяц</option>
                <option value="11">11 Месяц</option>
                <option value="10">10 Месяц</option>
                <option value="9">9 Месяц</option>
                <option value="8">8 Месяц</option>
                <option value="7">7 Месяц</option>
                <option value="6">6 Месяц</option>
                <option value="5">5 Месяц</option>
                <option value="4">4 Месяц</option>
                <option value="3">3 Месяц</option>
                <option value="2">2 Месяц</option>
                <option value="1">1 Месяц</option>
            </select>
            <label for="equal">Ежемесячный платёж:</label>
            <input type="text" id="equal" name="equal" class="input-field" value="0$" disabled>
        </form>
    </div>
    <div id="calculator2" class="zoom-anim-dialog mfp-hide">
        <p class="call-back--header"><b>Калькулатор кредита</b></p>
        <form class="calculator-form">
            <label for="price2">Итоговая цена:</label>
            <input type="number" id="price2" name="price2" class="input-field"  required>
            <label for="percent2">Минимальная предоплата:</label>
            <select id="percent2" name="percent2" class="input-field" required>
                <option value="20">20%</option>
                <option value="30">30%</option>
                <option value="40">40%</option>
                <option value="50">50%</option>
                <option value="60">60%</option>
                <option value="70">70%</option>
                <option value="80">80%</option>
                <option value="90">90%</option>
            </select>
            <label for="months2">Продолжительность платежа <b style="color: #0b2e13">0%</b> Процентная ставка:</label>
            <select id="months2" name="months2" class="input-field" required>
                <option value="27">27 Месяц</option>
                <option value="26">26 Месяц</option>
                <option value="25">25 Месяц</option>
                <option value="24">24 Месяц</option>
                <option value="23">23 Месяц</option>
                <option value="22">22 Месяц</option>
                <option value="21">21 Месяц</option>
                <option value="20">20 Месяц</option>
                <option value="19">19 Месяц</option>
                <option value="18">18 Месяц</option>
                <option value="17">17 Месяц</option>
                <option value="16">16 Месяц</option>
                <option value="15">15 Месяц</option>
                <option value="14">14 Месяц</option>
                <option value="13">13 Месяц</option>
                <option value="12">12 Месяц</option>
                <option value="11">11 Месяц</option>
                <option value="10">10 Месяц</option>
                <option value="9">9 Месяц</option>
                <option value="8">8 Месяц</option>
                <option value="7">7 Месяц</option>
                <option value="6">6 Месяц</option>
                <option value="5">5 Месяц</option>
                <option value="4">4 Месяц</option>
                <option value="3">3 Месяц</option>
                <option value="2">2 Месяц</option>
                <option value="1">1 Месяц</option>
            </select>
            <label for="equal2">Ежемесячный платёж:</label>
            <input type="text" id="equal2" name="equal2" class="input-field" value="0$" disabled>
        </form>
    </div>
    <a style="position: absolute; top: 43%;right: 57px" href="#armor-apartment" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button">
        <div style="background: #4caf50;text-align: center; font-size: 16px; width: 160px">
            Забронировать
        </div>
    </a>
    <a style="position: absolute; top: 48%;right: 57px" href="#calculator2" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button">
        <div style="background: #015d7c;text-align: center; font-size: 16px; width: 160px;font-family: CITI-Nus-Regular !important;">
            Ипотечный заем
        </div>
    </a>
    <a style="position: absolute; top: 53%;right: 57px" href="#calculator" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button">
        <div style="background: #015d7c;text-align: center; font-size: 16px; width: 160px;font-family: CITI-Nus-Regular !important;">
            Внутренний беспроцентный ипотека
        </div>
    </a>
    <div id="armor-apartment" class="zoom-anim-dialog mfp-hide">
        <p class="call-back--header"><b>Забронировать</b></p>
        <form action="/armores/add" method="post" data-toggle="validator" class="contact-form wow fadeInRight" style="margin-top: 20px; visibility: visible; animation-duration: 1.5s; animation-delay: 0.15s; animation-name: fadeInRight;" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            <input type="text" id="person" name="person" class="input-field" placeholder="Полное имя" required="">
            <input type="text" id="mobile" name="mobile" class="input-field" placeholder="Номер телефона" required="">
            <input type="email" id="email" name="email" class="input-field" placeholder="Емайл" required="">
            <select id="cars" name="duration" class="input-field">
                <option value="1">2-5 Дня 300 $</option>
                <option value="2">6-14 Дня 500 $</option>
                <option value="3">15-25 Дня 1000 $</option>
            </select>
            <input type="hidden" id="floor" name="floor" class="input-field" value="<?=$apartment->floorid?>" required="">
            <input type="hidden" id="apartment" name="apartment" class="input-field" value="<?=$apartment->apartmentno?>" required=""> <br>
            <button type="submit" class="btn btn-default standard-button red-button" style="border-radius: 4px; background-color: #3F51B5">Забронировать</button>
        </form>
    </div>

    <div class="inner-container services-section " id="services">
        <div class="container">
            <div class="row">
                <!-- Start: Section Heading -->
                <div class="section-header col-sm-8 col-sm-offset-2">
                    <div class="overflow">
                        <div class="line-outer">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="overflow">
                        <div class="section-heading-outer m-b-15">
                            <p class="sub-heading">Квартира №<?=$apartment->apartmentno?></p>
                            <a class="sub-heading" href="/ru/bfloor/<?=($apartment->floorid) - 1?>">
                                <p class="sub-heading" style="color: #006cfa">Выбрать другую квартиру</p>
                            </a>
                            <div class="real-videos" style="justify-content: center; margin-bottom: 0">
                                <?php if ($apartment->floorid < 6 ): ?>
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=D5f0yOSW0Ww?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 11): ?>  
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=qIrSULwZKpI?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 16): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=1eR47nCscxc?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 21): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=zL0OKObhylg?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 26): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=kWKVKR7LC6c?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 31): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=9eng3icrSk0?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 36): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=7WBYKyaziN4?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php elseif($apartment->floorid < 45): ?> 
                                    <a class="popup-youtube-2" href="https://www.youtube.com/watch?v=gOthWPIEr-I?autoplay=1">
                                        <img src="/public/images/gallery/play-button.png" alt="">
                                    </a>
                                <?php endif; ?> 
                             </div>
                        </div>
                    </div>
                </div>
                <!-- End: Section Heading -->
                <div class="clearfix"></div>

                <div class="each-services-outer overflow section-separator sp-bottom">
                    <div class="btn-form-outer" >
                        <div class="number-info" style="border-bottom: 1px solid #484848; padding-bottom: 10px">
                            <div class="number-info--block">
                                <span style="font-size: 30px">Квартира №<?=$apartment->apartmentno?></span>
                            </div>
                            <div class="number-info--block">
                                <?php if ($apartment->status == 1): ?>
                                    <span style="color: #ee3148; font-size: 30px">Продано</span>
                                <?php else: ?>
                                    <span style="color: #00c054; font-size: 30px">Продается</span>
                                <?php endif;?>
                            </div>
                            <div class="number-info--block">
                                <span style="font-size: 30px"><?=$apartment->kvmeter?>㎡</span>
                            </div>
                        </div>
                    </div>
                    <div class="main-conteiner" style="margin-top: 20px">
                        <div class="image-block" style="margin-right: 15px">
                            <div class="zoom-gallery">
                                <a href="/images/floors/apartmentsb/<?=$apartment->img?>" title="<?=$apartment->kvmeter?>㎡ render">
                                    <img src="/images/floors/apartmentsb/<?=$apartment->img?>" width="180" height="180">
                                </a>
                            </div>
                        </div>
                        <div class="image-block">
                            <div class="zoom-gallery">
                                <a href="/images/floors/apartmentsb/plans/<?=$apartment->img?>" title="<?=$apartment->kvmeter?>㎡ render">
                                    <img src="/images/floors/apartmentsb/plans/<?=$apartment->img?>" width="180" height="180">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="js-img-compare"></div>
</section>
<?php endif ?>