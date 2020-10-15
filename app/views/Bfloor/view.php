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
<?php $items = array(); ?>
<?php  foreach ($apartments as $apartment): ?>
    <?php if ($floor->floor == $apartment->floorid):  ?>
        <?php $items[] = $apartment ?>
    <?php endif; ?>
<?php endforeach; ?>
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
        <a class="sub-heading" href="/">
            <p class="sub-heading" style="color: #006cfa">სხვა სართულის არჩევა</p>
        </a>
        <p class="sub-heading" style="top: 2%">სართული <?=$floor->floor?></p>
        <div class="inner-container">
            <div class="real-videos" title="ხედების დათვალიერება">
                <a class="popup-youtube-1" href="https://www.youtube.com/watch?v=MDzcHdGExJo?autoplay=1">
                    <img src="/public//images/gallery/play-button.png" alt="">
                </a>
            </div>
            <p class="pick-heading" style="margin-bottom: -25px"><i class="icon icon-arrow-carrot-up"></i></p>
            <p class="pick-heading">ზღვის ხედით</p>
            <div class="apartment-pick">
                <?php if ($floor->floor == 5):  ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2736 923">
                        <image width="2736" height="923" xlink:href="/public/images/floors/bfloor5.png"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2049.06 153.61 2049.06 116.11 2290.54 116.11 2290.54 335.1 2226.05 335.1 2226.05 399.59 2062.56 399.59 2059.56 153.61 2049.06 153.61"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2291.48 116.11 2291.48 337.67 2227.82 337.67 2227.82 401.83 2362.32 401.83 2362.32 328.83 2591.32 330.17 2591.32 154.83 2578.65 154.83 2518.65 116.11 2291.48 116.11"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2591.32 331.83 2364.65 331.83 2367.32 551.5 2591.32 551.5 2591.32 588.17 2654.65 588.17 2654.65 318.83 2595.32 318.83 2591.32 331.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2364.65 469.17 2364.65 553.83 2589.48 553.83 2589.48 708.5 2602.98 708.5 2600.48 778 2465.98 808 2298.48 804.5 2298.48 469.17 2364.65 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2029.98 469.17 2297.23 469.17 2296.98 806.17 2029.98 806.17 2029.98 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1896.65 469.17 2026.65 469.17 2026.65 806.17 1899.32 806.17 1896.65 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1895.11 469.17 1898.32 806.17 1766.65 806.17 1766.65 469.17 1895.11 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">
                            <rect id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1632.23" y="469.17" width="132.5" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1629.73 469.17 1630.98 806.17 1499.98 806.17 1499.98 469.17 1629.73 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[9]['id'] ?>">
                            <rect id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1368" y="469.17" width="130.32" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1365.32 469.17 1366.65 806.17 1233.32 806.17 1233.32 469.17 1365.32 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[11]['id'] ?>">
                            <rect id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1099.23" y="469.17" width="132.75" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[12]['id'] ?>">
                            <rect id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="967.32" y="469.17" width="131" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[13]['id'] ?>">
                            <rect id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="833.32" y="469.17" width="133.35" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[14]['id'] ?>">
                            <rect id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="700.65" y="469.17" width="131.17" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[15]['id'] ?>">
                            <rect id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="435.32" y="469.17" width="264.17" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[16]['id'] ?>">
                            <polygon id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="433.23 469.17 432.98 806.17 264.98 806.17 129.98 775.5 129.98 547.5 370.98 547.5 370.98 469.17 433.23 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[17]['id'] ?>">
                            <polygon id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="370.98 325.17 369.31 546.17 127.98 546.17 127.98 590.83 76.65 590.83 77.98 316.17 136.31 316.17 136.31 324.83 370.98 325.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[18]['id'] ?>">
                            <polygon id="<?= $items[18]['kvmeter'] ?>&nbsp;㎡<?php if ($items[18]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[18]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="370.98 324.13 139.48 324.13 139.48 152.25 156.98 152.25 214.98 115.5 442.98 115.5 439.98 324.13 430.98 324.13 430.98 396 370.98 396 370.98 324.13"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[19]['id'] ?>">
                            <polygon id="<?= $items[19]['kvmeter'] ?>&nbsp;㎡<?php if ($items[19]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[19]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="433.23 407.5 433.23 325.83 442.98 325.83 444.15 115.5 700.65 115.5 700.65 407.5 433.23 407.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[20]['id'] ?>">
                            <rect id="<?= $items[20]['kvmeter'] ?>&nbsp;㎡<?php if ($items[20]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[20]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="704.48" y="115.5" width="131.5" height="290"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[21]['id'] ?>">
                            <rect id="<?= $items[21]['kvmeter'] ?>&nbsp;㎡<?php if ($items[21]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[21]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1106.98" y="115.5" width="242" height="290"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[22]['id'] ?>">
                            <polygon id="<?= $items[22]['kvmeter'] ?>&nbsp;㎡<?php if ($items[22]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[22]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1351.48 115.5 1351.48 405.5 1499.98 405.5 1497.48 115.5 1351.48 115.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[23]['id'] ?>">
                            <polygon id="<?= $items[23]['kvmeter'] ?>&nbsp;㎡<?php if ($items[23]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[23]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1499.98 116.11 1749.48 116.11 1746.98 408.5 1504.48 405.5 1499.98 116.11" fill="#fff"/>
                        </a>
                    </svg>
                <?php elseif($floor->floor == 9 || $floor->floor == 16): ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 619.2 168">
                        <image width="2580" height="700" transform="scale(0.24)" xlink:href="/public/images/floors/bfloor.png"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="473.83 11.5 473.83 1.83 531.33 1.83 531.33 55.33 515.83 55.33 515.5 71.83 476.33 71.83 475.33 11.17 473.83 11.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="516 71.58 516 55.67 531.67 55.67 531.58 1.83 585.83 1.83 601.17 11.17 602.67 11.17 602.67 52.5 547.83 52 547.83 71.83 516 71.58"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="548.38 52.63 603.75 52.63 603.75 50.75 618.25 50.75 619.2 116 606 116 604.63 105.63 587.75 105.38 587.63 107 571.13 106.75 571.13 90.13 548.38 89.88 548.38 52.63"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="533.75 87.25 547.75 87.25 547.75 90.63 570.25 90.63 570.25 107.13 604.13 107.13 604.13 121.5 605.5 121.5 605.5 160.63 574 168 533.75 167.5 533.75 87.25"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="500.88 87.25 533.13 87.25 533.13 167.38 500.88 166.88 500.88 87.25"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">
                            <rect id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="470.33" y="87.25" width="30.23" height="79.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">
                            <rect id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="438" y="87.25" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">
                            <rect id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="405.81" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[8]['id'] ?>">
                            <rect id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="373.63" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[9]['id'] ?>">
                            <rect id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="341.44" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[10]['id'] ?>">
                            <rect id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="308.5" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[11]['id'] ?>">
                            <rect id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="277.31" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[12]['id'] ?>">
                            <rect id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="245.13" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[13]['id'] ?>">
                            <rect id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="212.94" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[14]['id'] ?>">
                            <rect id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="182.33" y="87.21" width="31.35" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[15]['id'] ?>">
                            <rect id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="150.33" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[16]['id'] ?>">
                            <rect id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="85.88" y="87.4" width="64.65" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[17]['id'] ?>">
                            <polygon id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="85.63 87.4 85.13 167.23 45.5 167.23 12.88 160.5 14.13 104.63 31.63 104.38 31.63 106.75 48.63 106.75 48.63 90.63 70.13 90.63 70.13 86.63 85.63 86.63 85.63 87.4"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[18]['id'] ?>">
                            <polygon id="<?= $items[18]['kvmeter'] ?>&nbsp;㎡<?php if ($items[18]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[18]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="13.63 115.75 13.81 104.38 31.78 104.22 31.78 106.53 48.44 106.47 48.44 90.25 69.88 90.25 69.88 51.19 1 51.19 0 116.31 13.56 116.31 13.63 115.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[19]['id'] ?>">
                            <polygon id="<?= $items[19]['kvmeter'] ?>&nbsp;㎡<?php if ($items[19]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[19]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="14.83 50 70.83 50 70.83 71.33 85.63 71.33 85.63 54.5 87.33 54.5 87.33 1.83 14.83 1.83 14.83 50"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[20]['id'] ?>">
                            <polygon id="<?= $items[20]['kvmeter'] ?>&nbsp;㎡<?php if ($items[20]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[20]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="87.88 1.83 87.88 54.88 85.88 54.88 85.88 72.13 150.67 72.13 150.67 1.83 87.88 1.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[21]['id'] ?>">
                            <rect id="<?= $items[21]['kvmeter'] ?>&nbsp;㎡<?php if ($items[21]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[21]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="151.17" y="1.83" width="31.25" height="70.29"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[22]['id'] ?>">
                            <rect id="<?= $items[22]['kvmeter'] ?>&nbsp;㎡<?php if ($items[22]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[22]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="247.75" y="1.83" width="57.88" height="70.29"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[23]['id'] ?>">
                            <polygon id="<?= $items[23]['kvmeter'] ?>&nbsp;㎡<?php if ($items[23]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[23]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="305.94 1.83 341.19 1.83 341.44 54.94 337.38 54.94 337.38 72.13 305.94 72.13 305.94 1.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[24]['id'] ?>">
                            <polygon id="<?= $items[24]['kvmeter'] ?>&nbsp;㎡<?php if ($items[24]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[24]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="337.75 72.13 337.75 55.33 341.92 55.33 341.92 1.83 401.83 1.83 401.83 72.13 337.75 72.13"/>
                        </a>
                    </svg>
                <?php elseif($floor->floor == 44): ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2598 720">
                        <image width="2598" height="720" xlink:href="/public/images/floors/bfloor44.png"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <rect id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1035.6" y="16.61" width="244.49" height="286.49"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <rect id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1283.67" y="16.61" width="145.33" height="286.49"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1430.67 16.61 1680.67 16.61 1682.33 57 1672.33 57 1673.67 303.09 1430.67 303.09 1430.67 16.61"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1980.5 16.61 1980.5 55 1989 55 1989 306.5 2155.5 306.5 2155.5 236.5 2223.5 236.5 2219.5 16.61 1980.5 16.61"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2221.33 16.61 2448.33 16.61 2505 51 2519.33 51 2519.33 229.33 2289.33 229.33 2288.33 304.33 2158.33 304.33 2158.33 238.67 2226 238.67 2221.33 16.61"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2521 219 2582.67 219 2586.33 491.67 2530.67 491.67 2531 452.67 2524 452.67 2523 446 2292 446 2292 231.67 2521.67 231.67 2521 219"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2292 449.5 2519.33 449.5 2519.33 632.5 2529.5 632.5 2529.5 652.5 2396.5 680.5 2234 680.5 2234 369.5 2289.5 369.5 2292 449.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">
                            <rect id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="2095" y="369.5" width="136" height="311"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1960 369.5 2094 371.17 2094 680.5 1965.33 680.5 1960 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1826.5 369.5 1957 369.5 1960 680.5 1830.5 680.5 1826.5 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1694.5 369.5 1823.5 369.5 1826.5 680.5 1699.5 680.5 1694.5 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[11]['id'] ?>">
                            <polygon id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1560.5 369.5 1693.17 369.5 1696.5 680.5 1564.17 680.5 1560.5 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[12]['id'] ?>">
                            <polygon id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1429 369.5 1558.75 369.5 1562.5 680.5 1433.25 680.5 1429 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[13]['id'] ?>">
                            <polygon id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1427 369.5 1429 680.5 1299 680.5 1299 369.5 1427 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[14]['id'] ?>">
                            <rect id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1163" y="369.5" width="132.67" height="311"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[15]['id'] ?>">
                            <polygon id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1032.33 369.5 1161.83 369.5 1160.33 680.5 1030 680.5 1032.33 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[16]['id'] ?>">
                            <polygon id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="898.5 369.5 1030 369.5 1027.67 680.5 898.5 680.5 898.5 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[17]['id'] ?>">
                            <polygon id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="897.38 369.5 895 680.5 740.5 680.5 740.5 369.5 897.38 369.5"/>
                        </a>
                    </svg>
                <?php elseif($floor->floor == 45): ?>
                    <svg style="height: 500px;width: 1200px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 921.5 767">
                        <image width="921" height="767" transform="translate(0.5)" xlink:href="/public/images/floors/bfloor45.jpg"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="322.5 8 330.5 346 494.5 346 494.5 270 560.5 269 560.5 8 322.5 8" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="562 8 562.75 270.75 496 270.75 496 346 630.25 346 630.25 262.67 915.5 266 915.5 8 562 8" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="631.33 263.75 915.5 267.38 915.5 498.67 793.5 498.67 794.83 505.33 718.83 505.33 718.83 438.67 631.33 437.33 631.33 263.75" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="627.5 419.75 627.5 439.25 716.5 439.25 716.5 507.25 915.5 505.33 915.5 759.33 563.75 759.33 563.75 419.75 627.5 419.75" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">
                            <rect id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="431" y="419.75" width="130.5" height="339.58" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">
                            <rect id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="297.5" y="419.75" width="130" height="339.58" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">
                            <rect id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="164.5" y="419.75" width="129" height="339.58" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="159.5 419.75 159.5 759.33 36.83 759.33 16.83 743.33 6.83 735.33 0.5 709.33 0.5 419.75 159.5 419.75" stroke-miterlimit="10"/>
                        </a>
                    </svg>
                <?php else: ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 619.2 168">
                        <image width="2580" height="700" transform="scale(0.24)" xlink:href="/public/images/floors/bfloor.png"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="473.83 11.5 473.83 1.83 531.33 1.83 531.33 55.33 515.83 55.33 515.5 71.83 476.33 71.83 475.33 11.17 473.83 11.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="516 71.58 516 55.67 531.67 55.67 531.58 1.83 585.83 1.83 601.17 11.17 602.67 11.17 602.67 52.5 547.83 52 547.83 71.83 516 71.58"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">    
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="548.38 52.63 603.75 52.63 603.75 50.75 618.25 50.75 619.2 116 606 116 604.63 105.63 587.75 105.38 587.63 107 571.13 106.75 571.13 90.13 548.38 89.88 548.38 52.63"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">    
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="533.75 87.25 547.75 87.25 547.75 90.63 570.25 90.63 570.25 107.13 604.13 107.13 604.13 121.5 605.5 121.5 605.5 160.63 574 168 533.75 167.5 533.75 87.25"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">    
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="500.88 87.25 533.13 87.25 533.13 167.38 500.88 166.88 500.88 87.25"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">    
                            <rect id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="470.33" y="87.25" width="30.23" height="79.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">    
                            <rect id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="438" y="87.25" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">    
                            <rect id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="405.81" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[8]['id'] ?>">    
                            <rect id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="373.63" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[9]['id'] ?>">    
                            <rect id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="341.44" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[10]['id'] ?>">    
                            <rect id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="308.5" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[11]['id'] ?>">    
                            <rect id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="277.31" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[12]['id'] ?>">    
                            <rect id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="245.13" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[13]['id'] ?>">    
                            <rect id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="212.94" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[14]['id'] ?>">    
                            <rect id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="182.33" y="87.21" width="31.35" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[15]['id'] ?>">    
                            <rect id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="150.33" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[16]['id'] ?>">    
                            <rect id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="118.33" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[17]['id'] ?>">    
                            <rect id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="86.15" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[18]['id'] ?>">    
                            <polygon id="<?= $items[18]['kvmeter'] ?>&nbsp;㎡<?php if ($items[18]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[18]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="85.63 87.4 85.13 167.23 45.5 167.23 12.88 160.5 14.13 104.63 31.63 104.38 31.63 106.75 48.63 106.75 48.63 90.63 70.13 90.63 70.13 86.63 85.63 86.63 85.63 87.4"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[19]['id'] ?>">    
                            <polygon id="<?= $items[19]['kvmeter'] ?>&nbsp;㎡<?php if ($items[19]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[19]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="13.63 115.75 13.81 104.38 31.78 104.22 31.78 106.53 48.44 106.47 48.44 90.25 69.88 90.25 69.88 51.19 1 51.19 0 116.31 13.56 116.31 13.63 115.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[20]['id'] ?>">    
                            <polygon id="<?= $items[20]['kvmeter'] ?>&nbsp;㎡<?php if ($items[20]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[20]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="14.83 50 70.83 50 70.83 71.33 85.63 71.33 85.63 54.5 87.33 54.5 87.33 1.83 14.83 1.83 14.83 50"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[21]['id'] ?>">    
                            <polygon id="<?= $items[21]['kvmeter'] ?>&nbsp;㎡<?php if ($items[21]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[21]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="87.88 1.83 87.88 54.88 85.88 54.88 85.88 72.13 150.67 72.13 150.67 1.83 87.88 1.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[22]['id'] ?>">    
                            <rect id="<?= $items[22]['kvmeter'] ?>&nbsp;㎡<?php if ($items[22]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[22]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="151.17" y="1.83" width="31.25" height="70.29"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[23]['id'] ?>">    
                            <rect id="<?= $items[23]['kvmeter'] ?>&nbsp;㎡<?php if ($items[23]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[23]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="247.75" y="1.83" width="57.88" height="70.29"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[24]['id'] ?>">    
                            <polygon id="<?= $items[24]['kvmeter'] ?>&nbsp;㎡<?php if ($items[24]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[24]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="305.94 1.83 341.19 1.83 341.44 54.94 337.38 54.94 337.38 72.13 305.94 72.13 305.94 1.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[25]['id'] ?>">    
                            <polygon id="<?= $items[25]['kvmeter'] ?>&nbsp;㎡<?php if ($items[25]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[25]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="337.75 72.13 337.75 55.33 341.92 55.33 341.92 1.83 401.83 1.83 401.83 72.13 337.75 72.13"/>
                        </a>    
                    </svg>
                <?php endif; ?>
               <div class="description"></div>
            </div>

            <p class="pick-heading">ქალაქისა და ზღვის ხედით</p>
            
            <p class="pick-heading" style="margin-top: -25px"><i class="icon icon-arrow-carrot-down"></i></p>
        </div>
    </section>
<?php elseif($lang['code'] === 'EN'): ?>
    <section>
        <div class="header-logo">
            <a href="/">
                <img src="/public/images/gallery/logo2.png" alt="">
            </a>
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
            <p class="sub-heading" style="color: #006cfa">Pick other floor</p>
        </a>
        <p class="sub-heading" style="top: 2%">Flor <?=$floor->floor?></p>
        <div class="inner-container">
            <div class="real-videos" title="Views">
                <a class="popup-youtube-1" href="https://www.youtube.com/watch?v=MDzcHdGExJo?autoplay=1">
                    <img src="/public//images/gallery/play-button.png" alt="">
                </a>
            </div>
            <p class="pick-heading" style="margin-bottom: -25px"><i class="icon icon-arrow-carrot-up"></i></p>
            <p class="pick-heading">Sea view</p>
            <div class="apartment-pick">
                <?php if ($floor->floor == 5):  ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2736 923">
                        <image width="2736" height="923" xlink:href="/public/images/floors/bfloor5.png"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2049.06 153.61 2049.06 116.11 2290.54 116.11 2290.54 335.1 2226.05 335.1 2226.05 399.59 2062.56 399.59 2059.56 153.61 2049.06 153.61"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2291.48 116.11 2291.48 337.67 2227.82 337.67 2227.82 401.83 2362.32 401.83 2362.32 328.83 2591.32 330.17 2591.32 154.83 2578.65 154.83 2518.65 116.11 2291.48 116.11"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2591.32 331.83 2364.65 331.83 2367.32 551.5 2591.32 551.5 2591.32 588.17 2654.65 588.17 2654.65 318.83 2595.32 318.83 2591.32 331.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2364.65 469.17 2364.65 553.83 2589.48 553.83 2589.48 708.5 2602.98 708.5 2600.48 778 2465.98 808 2298.48 804.5 2298.48 469.17 2364.65 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2029.98 469.17 2297.23 469.17 2296.98 806.17 2029.98 806.17 2029.98 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1896.65 469.17 2026.65 469.17 2026.65 806.17 1899.32 806.17 1896.65 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1895.11 469.17 1898.32 806.17 1766.65 806.17 1766.65 469.17 1895.11 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">
                            <rect id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1632.23" y="469.17" width="132.5" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1629.73 469.17 1630.98 806.17 1499.98 806.17 1499.98 469.17 1629.73 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[9]['id'] ?>">
                            <rect id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1368" y="469.17" width="130.32" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1365.32 469.17 1366.65 806.17 1233.32 806.17 1233.32 469.17 1365.32 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[11]['id'] ?>">
                            <rect id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1099.23" y="469.17" width="132.75" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[12]['id'] ?>">
                            <rect id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="967.32" y="469.17" width="131" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[13]['id'] ?>">
                            <rect id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="833.32" y="469.17" width="133.35" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[14]['id'] ?>">
                            <rect id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="700.65" y="469.17" width="131.17" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[15]['id'] ?>">
                            <rect id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="435.32" y="469.17" width="264.17" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[16]['id'] ?>">
                            <polygon id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="433.23 469.17 432.98 806.17 264.98 806.17 129.98 775.5 129.98 547.5 370.98 547.5 370.98 469.17 433.23 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[17]['id'] ?>">
                            <polygon id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="370.98 325.17 369.31 546.17 127.98 546.17 127.98 590.83 76.65 590.83 77.98 316.17 136.31 316.17 136.31 324.83 370.98 325.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[18]['id'] ?>">
                            <polygon id="<?= $items[18]['kvmeter'] ?>&nbsp;㎡<?php if ($items[18]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[18]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="370.98 324.13 139.48 324.13 139.48 152.25 156.98 152.25 214.98 115.5 442.98 115.5 439.98 324.13 430.98 324.13 430.98 396 370.98 396 370.98 324.13"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[19]['id'] ?>">
                            <polygon id="<?= $items[19]['kvmeter'] ?>&nbsp;㎡<?php if ($items[19]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[19]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="433.23 407.5 433.23 325.83 442.98 325.83 444.15 115.5 700.65 115.5 700.65 407.5 433.23 407.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[20]['id'] ?>">
                            <rect id="<?= $items[20]['kvmeter'] ?>&nbsp;㎡<?php if ($items[20]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[20]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="704.48" y="115.5" width="131.5" height="290"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[21]['id'] ?>">
                            <rect id="<?= $items[21]['kvmeter'] ?>&nbsp;㎡<?php if ($items[21]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[21]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1106.98" y="115.5" width="242" height="290"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[22]['id'] ?>">
                            <polygon id="<?= $items[22]['kvmeter'] ?>&nbsp;㎡<?php if ($items[22]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[22]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1351.48 115.5 1351.48 405.5 1499.98 405.5 1497.48 115.5 1351.48 115.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[23]['id'] ?>">
                            <polygon id="<?= $items[23]['kvmeter'] ?>&nbsp;㎡<?php if ($items[23]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[23]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1499.98 116.11 1749.48 116.11 1746.98 408.5 1504.48 405.5 1499.98 116.11" fill="#fff"/>
                        </a>
                    </svg>
                <?php elseif($floor->floor == 9 || $floor->floor == 16): ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 619.2 168">
                        <image width="2580" height="700" transform="scale(0.24)" xlink:href="/public/images/floors/bfloor.png"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="473.83 11.5 473.83 1.83 531.33 1.83 531.33 55.33 515.83 55.33 515.5 71.83 476.33 71.83 475.33 11.17 473.83 11.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="516 71.58 516 55.67 531.67 55.67 531.58 1.83 585.83 1.83 601.17 11.17 602.67 11.17 602.67 52.5 547.83 52 547.83 71.83 516 71.58"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="548.38 52.63 603.75 52.63 603.75 50.75 618.25 50.75 619.2 116 606 116 604.63 105.63 587.75 105.38 587.63 107 571.13 106.75 571.13 90.13 548.38 89.88 548.38 52.63"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="533.75 87.25 547.75 87.25 547.75 90.63 570.25 90.63 570.25 107.13 604.13 107.13 604.13 121.5 605.5 121.5 605.5 160.63 574 168 533.75 167.5 533.75 87.25"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="500.88 87.25 533.13 87.25 533.13 167.38 500.88 166.88 500.88 87.25"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">
                            <rect id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="470.33" y="87.25" width="30.23" height="79.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">
                            <rect id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="438" y="87.25" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">
                            <rect id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="405.81" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[8]['id'] ?>">
                            <rect id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="373.63" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[9]['id'] ?>">
                            <rect id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="341.44" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[10]['id'] ?>">
                            <rect id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="308.5" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[11]['id'] ?>">
                            <rect id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="277.31" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[12]['id'] ?>">
                            <rect id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="245.13" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[13]['id'] ?>">
                            <rect id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="212.94" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[14]['id'] ?>">
                            <rect id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="182.33" y="87.21" width="31.35" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[15]['id'] ?>">
                            <rect id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="150.33" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[16]['id'] ?>">
                            <rect id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="85.88" y="87.4" width="64.65" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[17]['id'] ?>">
                            <polygon id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="85.63 87.4 85.13 167.23 45.5 167.23 12.88 160.5 14.13 104.63 31.63 104.38 31.63 106.75 48.63 106.75 48.63 90.63 70.13 90.63 70.13 86.63 85.63 86.63 85.63 87.4"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[18]['id'] ?>">
                            <polygon id="<?= $items[18]['kvmeter'] ?>&nbsp;㎡<?php if ($items[18]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[18]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="13.63 115.75 13.81 104.38 31.78 104.22 31.78 106.53 48.44 106.47 48.44 90.25 69.88 90.25 69.88 51.19 1 51.19 0 116.31 13.56 116.31 13.63 115.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[19]['id'] ?>">
                            <polygon id="<?= $items[19]['kvmeter'] ?>&nbsp;㎡<?php if ($items[19]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[19]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="14.83 50 70.83 50 70.83 71.33 85.63 71.33 85.63 54.5 87.33 54.5 87.33 1.83 14.83 1.83 14.83 50"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[20]['id'] ?>">
                            <polygon id="<?= $items[20]['kvmeter'] ?>&nbsp;㎡<?php if ($items[20]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[20]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="87.88 1.83 87.88 54.88 85.88 54.88 85.88 72.13 150.67 72.13 150.67 1.83 87.88 1.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[21]['id'] ?>">
                            <rect id="<?= $items[21]['kvmeter'] ?>&nbsp;㎡<?php if ($items[21]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[21]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="151.17" y="1.83" width="31.25" height="70.29"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[22]['id'] ?>">
                            <rect id="<?= $items[22]['kvmeter'] ?>&nbsp;㎡<?php if ($items[22]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[22]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="247.75" y="1.83" width="57.88" height="70.29"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[23]['id'] ?>">
                            <polygon id="<?= $items[23]['kvmeter'] ?>&nbsp;㎡<?php if ($items[23]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[23]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="305.94 1.83 341.19 1.83 341.44 54.94 337.38 54.94 337.38 72.13 305.94 72.13 305.94 1.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[24]['id'] ?>">
                            <polygon id="<?= $items[24]['kvmeter'] ?>&nbsp;㎡<?php if ($items[24]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[24]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="337.75 72.13 337.75 55.33 341.92 55.33 341.92 1.83 401.83 1.83 401.83 72.13 337.75 72.13"/>
                        </a>
                    </svg>
                <?php elseif($floor->floor == 44): ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2598 720">
                        <image width="2598" height="720" xlink:href="/public/images/floors/bfloor44.png"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <rect id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1035.6" y="16.61" width="244.49" height="286.49"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <rect id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1283.67" y="16.61" width="145.33" height="286.49"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1430.67 16.61 1680.67 16.61 1682.33 57 1672.33 57 1673.67 303.09 1430.67 303.09 1430.67 16.61"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1980.5 16.61 1980.5 55 1989 55 1989 306.5 2155.5 306.5 2155.5 236.5 2223.5 236.5 2219.5 16.61 1980.5 16.61"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2221.33 16.61 2448.33 16.61 2505 51 2519.33 51 2519.33 229.33 2289.33 229.33 2288.33 304.33 2158.33 304.33 2158.33 238.67 2226 238.67 2221.33 16.61"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2521 219 2582.67 219 2586.33 491.67 2530.67 491.67 2531 452.67 2524 452.67 2523 446 2292 446 2292 231.67 2521.67 231.67 2521 219"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2292 449.5 2519.33 449.5 2519.33 632.5 2529.5 632.5 2529.5 652.5 2396.5 680.5 2234 680.5 2234 369.5 2289.5 369.5 2292 449.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">
                            <rect id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="2095" y="369.5" width="136" height="311"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1960 369.5 2094 371.17 2094 680.5 1965.33 680.5 1960 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1826.5 369.5 1957 369.5 1960 680.5 1830.5 680.5 1826.5 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1694.5 369.5 1823.5 369.5 1826.5 680.5 1699.5 680.5 1694.5 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[11]['id'] ?>">
                            <polygon id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1560.5 369.5 1693.17 369.5 1696.5 680.5 1564.17 680.5 1560.5 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[12]['id'] ?>">
                            <polygon id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1429 369.5 1558.75 369.5 1562.5 680.5 1433.25 680.5 1429 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[13]['id'] ?>">
                            <polygon id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1427 369.5 1429 680.5 1299 680.5 1299 369.5 1427 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[14]['id'] ?>">
                            <rect id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1163" y="369.5" width="132.67" height="311"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[15]['id'] ?>">
                            <polygon id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1032.33 369.5 1161.83 369.5 1160.33 680.5 1030 680.5 1032.33 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[16]['id'] ?>">
                            <polygon id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="898.5 369.5 1030 369.5 1027.67 680.5 898.5 680.5 898.5 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[17]['id'] ?>">
                            <polygon id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="897.38 369.5 895 680.5 740.5 680.5 740.5 369.5 897.38 369.5"/>
                        </a>
                    </svg>
                <?php elseif($floor->floor == 45): ?>
                    <svg style="height: 500px;width: 1200px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 921.5 767">
                        <image width="921" height="767" transform="translate(0.5)" xlink:href="/public/images/floors/bfloor45.jpg"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="322.5 8 330.5 346 494.5 346 494.5 270 560.5 269 560.5 8 322.5 8" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="562 8 562.75 270.75 496 270.75 496 346 630.25 346 630.25 262.67 915.5 266 915.5 8 562 8" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="631.33 263.75 915.5 267.38 915.5 498.67 793.5 498.67 794.83 505.33 718.83 505.33 718.83 438.67 631.33 437.33 631.33 263.75" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="627.5 419.75 627.5 439.25 716.5 439.25 716.5 507.25 915.5 505.33 915.5 759.33 563.75 759.33 563.75 419.75 627.5 419.75" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">
                            <rect id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="431" y="419.75" width="130.5" height="339.58" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">
                            <rect id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="297.5" y="419.75" width="130" height="339.58" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">
                            <rect id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="164.5" y="419.75" width="129" height="339.58" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="159.5 419.75 159.5 759.33 36.83 759.33 16.83 743.33 6.83 735.33 0.5 709.33 0.5 419.75 159.5 419.75" stroke-miterlimit="10"/>
                        </a>
                    </svg>
                <?php else: ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 619.2 168">
                        <image width="2580" height="700" transform="scale(0.24)" xlink:href="/public/images/floors/bfloor.png"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="473.83 11.5 473.83 1.83 531.33 1.83 531.33 55.33 515.83 55.33 515.5 71.83 476.33 71.83 475.33 11.17 473.83 11.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="516 71.58 516 55.67 531.67 55.67 531.58 1.83 585.83 1.83 601.17 11.17 602.67 11.17 602.67 52.5 547.83 52 547.83 71.83 516 71.58"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">    
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="548.38 52.63 603.75 52.63 603.75 50.75 618.25 50.75 619.2 116 606 116 604.63 105.63 587.75 105.38 587.63 107 571.13 106.75 571.13 90.13 548.38 89.88 548.38 52.63"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">    
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="533.75 87.25 547.75 87.25 547.75 90.63 570.25 90.63 570.25 107.13 604.13 107.13 604.13 121.5 605.5 121.5 605.5 160.63 574 168 533.75 167.5 533.75 87.25"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">    
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="500.88 87.25 533.13 87.25 533.13 167.38 500.88 166.88 500.88 87.25"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">    
                            <rect id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="470.33" y="87.25" width="30.23" height="79.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">    
                            <rect id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="438" y="87.25" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">    
                            <rect id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="405.81" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[8]['id'] ?>">    
                            <rect id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="373.63" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[9]['id'] ?>">    
                            <rect id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="341.44" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[10]['id'] ?>">    
                            <rect id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="308.5" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[11]['id'] ?>">    
                            <rect id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="277.31" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[12]['id'] ?>">    
                            <rect id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="245.13" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[13]['id'] ?>">    
                            <rect id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="212.94" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[14]['id'] ?>">    
                            <rect id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="182.33" y="87.21" width="31.35" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[15]['id'] ?>">    
                            <rect id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="150.33" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[16]['id'] ?>">    
                            <rect id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="118.33" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[17]['id'] ?>">    
                            <rect id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="86.15" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[18]['id'] ?>">    
                            <polygon id="<?= $items[18]['kvmeter'] ?>&nbsp;㎡<?php if ($items[18]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[18]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="85.63 87.4 85.13 167.23 45.5 167.23 12.88 160.5 14.13 104.63 31.63 104.38 31.63 106.75 48.63 106.75 48.63 90.63 70.13 90.63 70.13 86.63 85.63 86.63 85.63 87.4"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[19]['id'] ?>">    
                            <polygon id="<?= $items[19]['kvmeter'] ?>&nbsp;㎡<?php if ($items[19]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[19]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="13.63 115.75 13.81 104.38 31.78 104.22 31.78 106.53 48.44 106.47 48.44 90.25 69.88 90.25 69.88 51.19 1 51.19 0 116.31 13.56 116.31 13.63 115.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[20]['id'] ?>">    
                            <polygon id="<?= $items[20]['kvmeter'] ?>&nbsp;㎡<?php if ($items[20]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[20]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="14.83 50 70.83 50 70.83 71.33 85.63 71.33 85.63 54.5 87.33 54.5 87.33 1.83 14.83 1.83 14.83 50"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[21]['id'] ?>">    
                            <polygon id="<?= $items[21]['kvmeter'] ?>&nbsp;㎡<?php if ($items[21]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[21]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="87.88 1.83 87.88 54.88 85.88 54.88 85.88 72.13 150.67 72.13 150.67 1.83 87.88 1.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[22]['id'] ?>">    
                            <rect id="<?= $items[22]['kvmeter'] ?>&nbsp;㎡<?php if ($items[22]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[22]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="151.17" y="1.83" width="31.25" height="70.29"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[23]['id'] ?>">    
                            <rect id="<?= $items[23]['kvmeter'] ?>&nbsp;㎡<?php if ($items[23]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[23]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="247.75" y="1.83" width="57.88" height="70.29"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[24]['id'] ?>">    
                            <polygon id="<?= $items[24]['kvmeter'] ?>&nbsp;㎡<?php if ($items[24]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[24]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="305.94 1.83 341.19 1.83 341.44 54.94 337.38 54.94 337.38 72.13 305.94 72.13 305.94 1.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[25]['id'] ?>">    
                            <polygon id="<?= $items[25]['kvmeter'] ?>&nbsp;㎡<?php if ($items[25]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[25]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="337.75 72.13 337.75 55.33 341.92 55.33 341.92 1.83 401.83 1.83 401.83 72.13 337.75 72.13"/>
                        </a>    
                    </svg>
                <?php endif; ?>
                <div class="description"></div>
            </div>
            <p class="pick-heading">City and Sea view</p>
            
            <p class="pick-heading" style="margin-top: -25px"><i class="icon icon-arrow-carrot-down"></i></p>
        </div>
    </section>
<?php elseif($lang['code'] === 'RU'): ?>
    <section>
        <div class="header-logo">
            <a href="/">
                <img src="/public/images/gallery/logo2.png" alt="">
            </a>
        </div>
        <a href="#call-back" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button" style="bottom: 7%; right: 2%;">
            <div id="bingc-phone-button-tooltip" class="bingc-phone-button-tooltip bingc-phone-button-tooltip-bottom-left bingc-phone-button-tooltip-show-first bingc-phone-button-tooltip-show-second"> Хотите, перезвоним Вам<br>в удобное время? 
            <svg version="1.1" class="bingc-phone-button-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 14" enable-background="new 0 0 18 14" xml:space="preserve">
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
            <p class="sub-heading" style="color: #006cfa">Выбрать другой этаж</p>
        </a>
        <p class="sub-heading" style="top: 2%">этаж <?=$floor->floor?></p>
        <div class="inner-container">
            <div class="real-videos" title="Виды">
                <a class="popup-youtube-1" href="https://www.youtube.com/watch?v=MDzcHdGExJo?autoplay=1">
                    <img src="/public/images/gallery/play-button.png" alt="">
                </a>
            </div>
            <p class="pick-heading" style="margin-bottom: -25px"><i class="icon icon-arrow-carrot-up"></i></p>
            <p class="pick-heading">Вид на море</p>
            <div class="apartment-pick">
                <?php if ($floor->floor == 5):  ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2736 923">
                        <image width="2736" height="923" xlink:href="/public/images/floors/bfloor5.png"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2049.06 153.61 2049.06 116.11 2290.54 116.11 2290.54 335.1 2226.05 335.1 2226.05 399.59 2062.56 399.59 2059.56 153.61 2049.06 153.61"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2291.48 116.11 2291.48 337.67 2227.82 337.67 2227.82 401.83 2362.32 401.83 2362.32 328.83 2591.32 330.17 2591.32 154.83 2578.65 154.83 2518.65 116.11 2291.48 116.11"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2591.32 331.83 2364.65 331.83 2367.32 551.5 2591.32 551.5 2591.32 588.17 2654.65 588.17 2654.65 318.83 2595.32 318.83 2591.32 331.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2364.65 469.17 2364.65 553.83 2589.48 553.83 2589.48 708.5 2602.98 708.5 2600.48 778 2465.98 808 2298.48 804.5 2298.48 469.17 2364.65 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2029.98 469.17 2297.23 469.17 2296.98 806.17 2029.98 806.17 2029.98 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1896.65 469.17 2026.65 469.17 2026.65 806.17 1899.32 806.17 1896.65 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1895.11 469.17 1898.32 806.17 1766.65 806.17 1766.65 469.17 1895.11 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">
                            <rect id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1632.23" y="469.17" width="132.5" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1629.73 469.17 1630.98 806.17 1499.98 806.17 1499.98 469.17 1629.73 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[9]['id'] ?>">
                            <rect id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1368" y="469.17" width="130.32" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1365.32 469.17 1366.65 806.17 1233.32 806.17 1233.32 469.17 1365.32 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[11]['id'] ?>">
                            <rect id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1099.23" y="469.17" width="132.75" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[12]['id'] ?>">
                            <rect id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="967.32" y="469.17" width="131" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[13]['id'] ?>">
                            <rect id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="833.32" y="469.17" width="133.35" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[14]['id'] ?>">
                            <rect id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="700.65" y="469.17" width="131.17" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[15]['id'] ?>">
                            <rect id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="435.32" y="469.17" width="264.17" height="337"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[16]['id'] ?>">
                            <polygon id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="433.23 469.17 432.98 806.17 264.98 806.17 129.98 775.5 129.98 547.5 370.98 547.5 370.98 469.17 433.23 469.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[17]['id'] ?>">
                            <polygon id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="370.98 325.17 369.31 546.17 127.98 546.17 127.98 590.83 76.65 590.83 77.98 316.17 136.31 316.17 136.31 324.83 370.98 325.17"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[18]['id'] ?>">
                            <polygon id="<?= $items[18]['kvmeter'] ?>&nbsp;㎡<?php if ($items[18]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[18]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="370.98 324.13 139.48 324.13 139.48 152.25 156.98 152.25 214.98 115.5 442.98 115.5 439.98 324.13 430.98 324.13 430.98 396 370.98 396 370.98 324.13"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[19]['id'] ?>">
                            <polygon id="<?= $items[19]['kvmeter'] ?>&nbsp;㎡<?php if ($items[19]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[19]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="433.23 407.5 433.23 325.83 442.98 325.83 444.15 115.5 700.65 115.5 700.65 407.5 433.23 407.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[20]['id'] ?>">
                            <rect id="<?= $items[20]['kvmeter'] ?>&nbsp;㎡<?php if ($items[20]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[20]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="704.48" y="115.5" width="131.5" height="290"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[21]['id'] ?>">
                            <rect id="<?= $items[21]['kvmeter'] ?>&nbsp;㎡<?php if ($items[21]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[21]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1106.98" y="115.5" width="242" height="290"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[22]['id'] ?>">
                            <polygon id="<?= $items[22]['kvmeter'] ?>&nbsp;㎡<?php if ($items[22]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[22]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1351.48 115.5 1351.48 405.5 1499.98 405.5 1497.48 115.5 1351.48 115.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[23]['id'] ?>">
                            <polygon id="<?= $items[23]['kvmeter'] ?>&nbsp;㎡<?php if ($items[23]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[23]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1499.98 116.11 1749.48 116.11 1746.98 408.5 1504.48 405.5 1499.98 116.11" fill="#fff"/>
                        </a>
                    </svg>
                <?php elseif($floor->floor == 9 || $floor->floor == 16): ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 619.2 168">
                        <image width="2580" height="700" transform="scale(0.24)" xlink:href="/public/images/floors/bfloor.png"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="473.83 11.5 473.83 1.83 531.33 1.83 531.33 55.33 515.83 55.33 515.5 71.83 476.33 71.83 475.33 11.17 473.83 11.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="516 71.58 516 55.67 531.67 55.67 531.58 1.83 585.83 1.83 601.17 11.17 602.67 11.17 602.67 52.5 547.83 52 547.83 71.83 516 71.58"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="548.38 52.63 603.75 52.63 603.75 50.75 618.25 50.75 619.2 116 606 116 604.63 105.63 587.75 105.38 587.63 107 571.13 106.75 571.13 90.13 548.38 89.88 548.38 52.63"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="533.75 87.25 547.75 87.25 547.75 90.63 570.25 90.63 570.25 107.13 604.13 107.13 604.13 121.5 605.5 121.5 605.5 160.63 574 168 533.75 167.5 533.75 87.25"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="500.88 87.25 533.13 87.25 533.13 167.38 500.88 166.88 500.88 87.25"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">
                            <rect id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="470.33" y="87.25" width="30.23" height="79.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">
                            <rect id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="438" y="87.25" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">
                            <rect id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="405.81" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[8]['id'] ?>">
                            <rect id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="373.63" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[9]['id'] ?>">
                            <rect id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="341.44" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[10]['id'] ?>">
                            <rect id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="308.5" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[11]['id'] ?>">
                            <rect id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="277.31" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[12]['id'] ?>">
                            <rect id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="245.13" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[13]['id'] ?>">
                            <rect id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="212.94" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[14]['id'] ?>">
                            <rect id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="182.33" y="87.21" width="31.35" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[15]['id'] ?>">
                            <rect id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="150.33" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[16]['id'] ?>">
                            <rect id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="85.88" y="87.4" width="64.65" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[17]['id'] ?>">
                            <polygon id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="85.63 87.4 85.13 167.23 45.5 167.23 12.88 160.5 14.13 104.63 31.63 104.38 31.63 106.75 48.63 106.75 48.63 90.63 70.13 90.63 70.13 86.63 85.63 86.63 85.63 87.4"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[18]['id'] ?>">
                            <polygon id="<?= $items[18]['kvmeter'] ?>&nbsp;㎡<?php if ($items[18]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[18]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="13.63 115.75 13.81 104.38 31.78 104.22 31.78 106.53 48.44 106.47 48.44 90.25 69.88 90.25 69.88 51.19 1 51.19 0 116.31 13.56 116.31 13.63 115.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[19]['id'] ?>">
                            <polygon id="<?= $items[19]['kvmeter'] ?>&nbsp;㎡<?php if ($items[19]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[19]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="14.83 50 70.83 50 70.83 71.33 85.63 71.33 85.63 54.5 87.33 54.5 87.33 1.83 14.83 1.83 14.83 50"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[20]['id'] ?>">
                            <polygon id="<?= $items[20]['kvmeter'] ?>&nbsp;㎡<?php if ($items[20]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[20]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="87.88 1.83 87.88 54.88 85.88 54.88 85.88 72.13 150.67 72.13 150.67 1.83 87.88 1.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[21]['id'] ?>">
                            <rect id="<?= $items[21]['kvmeter'] ?>&nbsp;㎡<?php if ($items[21]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[21]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="151.17" y="1.83" width="31.25" height="70.29"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[22]['id'] ?>">
                            <rect id="<?= $items[22]['kvmeter'] ?>&nbsp;㎡<?php if ($items[22]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[22]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="247.75" y="1.83" width="57.88" height="70.29"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[23]['id'] ?>">
                            <polygon id="<?= $items[23]['kvmeter'] ?>&nbsp;㎡<?php if ($items[23]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[23]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="305.94 1.83 341.19 1.83 341.44 54.94 337.38 54.94 337.38 72.13 305.94 72.13 305.94 1.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[24]['id'] ?>">
                            <polygon id="<?= $items[24]['kvmeter'] ?>&nbsp;㎡<?php if ($items[24]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[24]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="337.75 72.13 337.75 55.33 341.92 55.33 341.92 1.83 401.83 1.83 401.83 72.13 337.75 72.13"/>
                        </a>
                    </svg>
                <?php elseif($floor->floor == 44): ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2598 720">
                        <image width="2598" height="720" xlink:href="/public/images/floors/bfloor44.png"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <rect id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1035.6" y="16.61" width="244.49" height="286.49"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <rect id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1283.67" y="16.61" width="145.33" height="286.49"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1430.67 16.61 1680.67 16.61 1682.33 57 1672.33 57 1673.67 303.09 1430.67 303.09 1430.67 16.61"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1980.5 16.61 1980.5 55 1989 55 1989 306.5 2155.5 306.5 2155.5 236.5 2223.5 236.5 2219.5 16.61 1980.5 16.61"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2221.33 16.61 2448.33 16.61 2505 51 2519.33 51 2519.33 229.33 2289.33 229.33 2288.33 304.33 2158.33 304.33 2158.33 238.67 2226 238.67 2221.33 16.61"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2521 219 2582.67 219 2586.33 491.67 2530.67 491.67 2531 452.67 2524 452.67 2523 446 2292 446 2292 231.67 2521.67 231.67 2521 219"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2292 449.5 2519.33 449.5 2519.33 632.5 2529.5 632.5 2529.5 652.5 2396.5 680.5 2234 680.5 2234 369.5 2289.5 369.5 2292 449.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">
                            <rect id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="2095" y="369.5" width="136" height="311"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1960 369.5 2094 371.17 2094 680.5 1965.33 680.5 1960 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1826.5 369.5 1957 369.5 1960 680.5 1830.5 680.5 1826.5 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1694.5 369.5 1823.5 369.5 1826.5 680.5 1699.5 680.5 1694.5 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[11]['id'] ?>">
                            <polygon id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1560.5 369.5 1693.17 369.5 1696.5 680.5 1564.17 680.5 1560.5 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[12]['id'] ?>">
                            <polygon id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1429 369.5 1558.75 369.5 1562.5 680.5 1433.25 680.5 1429 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[13]['id'] ?>">
                            <polygon id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1427 369.5 1429 680.5 1299 680.5 1299 369.5 1427 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[14]['id'] ?>">
                            <rect id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="1163" y="369.5" width="132.67" height="311"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[15]['id'] ?>">
                            <polygon id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1032.33 369.5 1161.83 369.5 1160.33 680.5 1030 680.5 1032.33 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[16]['id'] ?>">
                            <polygon id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="898.5 369.5 1030 369.5 1027.67 680.5 898.5 680.5 898.5 369.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[17]['id'] ?>">
                            <polygon id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="897.38 369.5 895 680.5 740.5 680.5 740.5 369.5 897.38 369.5"/>
                        </a>
                    </svg>
                <?php elseif($floor->floor == 45): ?>
                    <svg style="height: 500px;width: 1200px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 921.5 767">
                        <image width="921" height="767" transform="translate(0.5)" xlink:href="/public/images/floors/bfloor45.jpg"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="322.5 8 330.5 346 494.5 346 494.5 270 560.5 269 560.5 8 322.5 8" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="562 8 562.75 270.75 496 270.75 496 346 630.25 346 630.25 262.67 915.5 266 915.5 8 562 8" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="631.33 263.75 915.5 267.38 915.5 498.67 793.5 498.67 794.83 505.33 718.83 505.33 718.83 438.67 631.33 437.33 631.33 263.75" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="627.5 419.75 627.5 439.25 716.5 439.25 716.5 507.25 915.5 505.33 915.5 759.33 563.75 759.33 563.75 419.75 627.5 419.75" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">
                            <rect id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="431" y="419.75" width="130.5" height="339.58" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">
                            <rect id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="297.5" y="419.75" width="130" height="339.58" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">
                            <rect id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="164.5" y="419.75" width="129" height="339.58" stroke-miterlimit="10"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="159.5 419.75 159.5 759.33 36.83 759.33 16.83 743.33 6.83 735.33 0.5 709.33 0.5 419.75 159.5 419.75" stroke-miterlimit="10"/>
                        </a>
                    </svg>
                <?php else: ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 619.2 168">
                        <image width="2580" height="700" transform="scale(0.24)" xlink:href="/public/images/floors/bfloor.png"/>
                        <a href="/ka/bapartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="473.83 11.5 473.83 1.83 531.33 1.83 531.33 55.33 515.83 55.33 515.5 71.83 476.33 71.83 475.33 11.17 473.83 11.5"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="516 71.58 516 55.67 531.67 55.67 531.58 1.83 585.83 1.83 601.17 11.17 602.67 11.17 602.67 52.5 547.83 52 547.83 71.83 516 71.58"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[2]['id'] ?>">    
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="548.38 52.63 603.75 52.63 603.75 50.75 618.25 50.75 619.2 116 606 116 604.63 105.63 587.75 105.38 587.63 107 571.13 106.75 571.13 90.13 548.38 89.88 548.38 52.63"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[3]['id'] ?>">    
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="533.75 87.25 547.75 87.25 547.75 90.63 570.25 90.63 570.25 107.13 604.13 107.13 604.13 121.5 605.5 121.5 605.5 160.63 574 168 533.75 167.5 533.75 87.25"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[4]['id'] ?>">    
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="500.88 87.25 533.13 87.25 533.13 167.38 500.88 166.88 500.88 87.25"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[5]['id'] ?>">    
                            <rect id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="470.33" y="87.25" width="30.23" height="79.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[6]['id'] ?>">    
                            <rect id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="438" y="87.25" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[7]['id'] ?>">    
                            <rect id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="405.81" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[8]['id'] ?>">    
                            <rect id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="373.63" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[9]['id'] ?>">    
                            <rect id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="341.44" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[10]['id'] ?>">    
                            <rect id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="308.5" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[11]['id'] ?>">    
                            <rect id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="277.31" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[12]['id'] ?>">    
                            <rect id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="245.13" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[13]['id'] ?>">    
                            <rect id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="212.94" y="87.21" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[14]['id'] ?>">    
                            <rect id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="182.33" y="87.21" width="31.35" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[15]['id'] ?>">    
                            <rect id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="150.33" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[16]['id'] ?>">    
                            <rect id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="118.33" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[17]['id'] ?>">    
                            <rect id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="86.15" y="87.4" width="32.19" height="79.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[18]['id'] ?>">    
                            <polygon id="<?= $items[18]['kvmeter'] ?>&nbsp;㎡<?php if ($items[18]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[18]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="85.63 87.4 85.13 167.23 45.5 167.23 12.88 160.5 14.13 104.63 31.63 104.38 31.63 106.75 48.63 106.75 48.63 90.63 70.13 90.63 70.13 86.63 85.63 86.63 85.63 87.4"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[19]['id'] ?>">    
                            <polygon id="<?= $items[19]['kvmeter'] ?>&nbsp;㎡<?php if ($items[19]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[19]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="13.63 115.75 13.81 104.38 31.78 104.22 31.78 106.53 48.44 106.47 48.44 90.25 69.88 90.25 69.88 51.19 1 51.19 0 116.31 13.56 116.31 13.63 115.75"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[20]['id'] ?>">    
                            <polygon id="<?= $items[20]['kvmeter'] ?>&nbsp;㎡<?php if ($items[20]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[20]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="14.83 50 70.83 50 70.83 71.33 85.63 71.33 85.63 54.5 87.33 54.5 87.33 1.83 14.83 1.83 14.83 50"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[21]['id'] ?>">    
                            <polygon id="<?= $items[21]['kvmeter'] ?>&nbsp;㎡<?php if ($items[21]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[21]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="87.88 1.83 87.88 54.88 85.88 54.88 85.88 72.13 150.67 72.13 150.67 1.83 87.88 1.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[22]['id'] ?>">    
                            <rect id="<?= $items[22]['kvmeter'] ?>&nbsp;㎡<?php if ($items[22]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[22]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="151.17" y="1.83" width="31.25" height="70.29"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[23]['id'] ?>">    
                            <rect id="<?= $items[23]['kvmeter'] ?>&nbsp;㎡<?php if ($items[23]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[23]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" x="247.75" y="1.83" width="57.88" height="70.29"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[24]['id'] ?>">    
                            <polygon id="<?= $items[24]['kvmeter'] ?>&nbsp;㎡<?php if ($items[24]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[24]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="305.94 1.83 341.19 1.83 341.44 54.94 337.38 54.94 337.38 72.13 305.94 72.13 305.94 1.83"/>
                        </a>
                        <a href="/ka/bapartment/<?= $items[25]['id'] ?>">    
                            <polygon id="<?= $items[25]['kvmeter'] ?>&nbsp;㎡<?php if ($items[25]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[25]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="337.75 72.13 337.75 55.33 341.92 55.33 341.92 1.83 401.83 1.83 401.83 72.13 337.75 72.13"/>
                        </a>    
                    </svg>
                <?php endif; ?>
                <div class="description"></div>
            </div>
            <p class="pick-heading">Вид на город и море</p>
            <p class="pick-heading" style="margin-top: -25px"><i class="icon icon-arrow-carrot-down"></i></p>
        </div>
    </section>
<?php endif ?>

