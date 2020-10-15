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
$token2 = Parse($video1,'var token',';');
?>
<style>
    html,
    body,
    section,
    .inner-container {
        height: 100%;
        background: #263238;
    }
    .inner-container {
        display: flex; flex-direction: column;align-items: center;justify-content: center;

    }
    .apartment-pick {
        width: 80%;
    }
    .sub-heading {
        position: absolute;
        width: 100%;
        top:5%
    }
    .pick-heading {
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        line-height: 40px;
        font-weight: 600;
        color: #1cc1ff;
        text-transform: uppercase;
        margin-bottom: 0px;
    }
    .pick-heading, .sub-heading, html, body, h1, h2, span, p, small, div, a, h3, .btn, .right-icon, .btn-services, .btn-mask, .section-heading, .min-heder, #bingc-phone-button-tooltip {
    font-family: CITI-Nus-Regular;
}
</style>

<?php $lang = \ibuild\App::$app->getProperty('language');?>
<?php if ($lang['code'] === 'GE'): ?>
    <section>
    <div class="header-logo">
            <a href="/">
                <img src="/public/images/gallery/logo.png" alt="">
            </a>
        </div>
    <div class="needed-btns" style="z-index: 9999">
        <div class="livecams">
            <div class="real-videos">
                <a class="popup-cam-1" href="https://www.ipcamlive.com/player/player.php?alias=5edfd00ed0cba&autoplay=1&token=<?php echo $token1; ?>">
                    <img src="/public/images/gallery/live1.png" alt="">
                </a>
            </div>
        </div>
        <div class="soc-buttons">
            <a target="_blank" href="https://www.facebook.com/calligraphytowersbatumi/">
                <i class="icon icon-social-facebook"></i></a>
            <a target="_blank" href="https://www.instagram.com/calligraphytowers/">
                <i class="icon icon-social-instagram"></i></a>
        </div>
        <div class="pick-language">
            <a href="/ka">
                <img src="/public/images/gallery/GE.png" alt="">
            </a>
            <a href="/ru">
                <img src="/public/images/gallery/RU.png" alt="">
            </a>
            <a href="/en">
                <img src="/public/images/gallery/EN.png" alt="">
            </a>
        </div>
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
        <a class="sub-heading" href="/">
            <p class="sub-heading" style="color: #006cfa">უკან დაბრუნება</p>
        </a>
        <div class="inner-container">
            <div class="apartment-pick">
                <div class="zoom-gallery" style="padding:10%; justify-content: center;">
                    <?php foreach ($media as $image): ?>
                            <?php if ($image['image'] == ''): ?>
                            <?php else: ?>
                                <a href="/public/images/<?=$image['image']?>" title="Calligraphy Towers">
                                    <img src="/public/images/<?=$image['image']?>" width="200" height="200">
                                </a>
                            <?php endif; ?> 
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php elseif($lang['code'] === 'EN'):  ?>
    <section>
    <div class="header-logo">
            <a href="/">
                <img src="/public/images/gallery/logo.png" alt="">
            </a>
        </div>
    <div class="needed-btns" style="z-index: 9999">
        <div class="livecams">
            <div class="real-videos">
                <a class="popup-cam-1" href="https://www.ipcamlive.com/player/player.php?alias=5edfd00ed0cba&autoplay=1&token=<?php echo $token1; ?>">
                    <img src="/public/images/gallery/live1.png" alt="">
                </a>
            </div>
        </div>
        <div class="soc-buttons">
            <a target="_blank" href="https://www.facebook.com/calligraphytowersbatumi/">
                <i class="icon icon-social-facebook"></i></a>
            <a target="_blank" href="https://www.instagram.com/calligraphytowers/">
                <i class="icon icon-social-instagram"></i></a>
        </div>
        <div class="pick-language">
            <a href="/ka">
                <img src="/public/images/gallery/GE.png" alt="">
            </a>
            <a href="/ru">
                <img src="/public/images/gallery/RU.png" alt="">
            </a>
            <a href="/en">
                <img src="/public/images/gallery/EN.png" alt="">
            </a>
        </div>
    </div>
        <a href="#call-back" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button" style="bottom: 7%; right: 2%;">
            <div id="bingc-phone-button-tooltip" class="bingc-phone-button-tooltip bingc-phone-button-tooltip-bottom-left bingc-phone-button-tooltip-show-first bingc-phone-button-tooltip-show-second"> Do you want to call you<br>back at a convenient time? 
            <svg version="1.1" class="bingc-phone-button-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 14" enable-background="new 0 0 18 14" xml:space="preserve">
                <polyline fill="#B3B3B3" points="17.977,0 0.083,0 17.977,13.927 "></polyline>
            </svg>
            </div>
            <svg class="bingc-phone-button-circle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <circle class="bingc-phone-button-circle-outside" cx="50" cy="50" r="50"></circle>
                <circle class="bingc-phone-button-circle-inside" cx="50" cy="50" r="40"></circle>
            </svg>
            <div id="bingc-phone-button-icon-text" class="bingc-phone-button-icon-text"><span>Contact<br>button</span></div>
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
        <a class="sub-heading" href="/">
            <p class="sub-heading" style="color: #006cfa">Back to home</p>
        </a>
        <div class="inner-container">
            <div class="apartment-pick">
                <div class="zoom-gallery" style="padding:10%; justify-content: center;">
                    <?php foreach ($media as $image): ?>
                            <?php if ($image['image'] == ''): ?>
                            <?php else: ?>
                                <a href="/public/images/<?=$image['image']?>" title="Calligraphy Towers">
                                    <img src="/public/images/<?=$image['image']?>" width="200" height="200">
                                </a>
                            <?php endif; ?> 
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php elseif($lang['code'] === 'RU'):  ?>
    <section>
        <div class="header-logo">
            <a href="/">
                <img src="/public/images/gallery/logo.png" alt="">
            </a>
        </div>
        <div class="needed-btns" style="z-index: 9999">
            <div class="livecams">
                <div class="real-videos">
                    <a class="popup-cam-1" href="https://www.ipcamlive.com/player/player.php?alias=5edfd00ed0cba&autoplay=1&token=<?php echo $token1; ?>">
                        <img src="/public/images/gallery/live1.png" alt="">
                    </a>
                </div>
            </div>
            <div class="soc-buttons">
                <a target="_blank" href="https://www.facebook.com/calligraphytowersbatumi/">
                    <i class="icon icon-social-facebook"></i></a>
                <a target="_blank" href="https://www.instagram.com/calligraphytowers/">
                    <i class="icon icon-social-instagram"></i></a>
            </div>
            <div class="pick-language">
                <a href="/ka">
                    <img src="/public/images/gallery/GE.png" alt="">
                </a>
                <a href="/ru">
                    <img src="/public/images/gallery/RU.png" alt="">
                </a>
                <a href="/en">
                    <img src="/public/images/gallery/EN.png" alt="">
                </a>
            </div>
        </div>
        <a href="#call-back" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button" style="bottom: 7%; right: 2%;">
            <div id="bingc-phone-button-tooltip" class="bingc-phone-button-tooltip bingc-phone-button-tooltip-bottom-left bingc-phone-button-tooltip-show-first bingc-phone-button-tooltip-show-second"> Хотите, перезвоним Вам<br>в удобное время? <svg version="1.1" class="bingc-phone-button-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 14" enable-background="new 0 0 18 14" xml:space="preserve">
                <polyline fill="#B3B3B3" points="17.977,0 0.083,0 17.977,13.927 "></polyline>
            </svg>
                        </div>
                        <svg class="bingc-phone-button-circle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
            <circle class="bingc-phone-button-circle-outside" cx="50" cy="50" r="50"></circle>
                            <circle class="bingc-phone-button-circle-inside" cx="50" cy="50" r="40"></circle>
            </svg>
                        <div id="bingc-phone-button-icon-text" class="bingc-phone-button-icon-text"><span>КНОПКА<br>СВЯЗИ</span></div>
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
        <a class="sub-heading" href="/">
            <p class="sub-heading" style="color: #006cfa">Вернутся назад</p>
        </a>
        <div class="inner-container">
            <div class="apartment-pick">
                <div class="zoom-gallery" style="padding:10%; justify-content: center;">
                    <?php foreach ($media as $image): ?>
                            <?php if ($image['image'] == ''): ?>
                            <?php else: ?>
                                <a href="/public/images/<?=$image['image']?>" title="Calligraphy Towers">
                                    <img src="/public/images/<?=$image['image']?>" width="200" height="200">
                                </a>
                            <?php endif; ?> 
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif;  ?>
