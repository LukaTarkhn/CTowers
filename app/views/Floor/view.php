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
            <p class="pick-heading" style="margin-bottom: -25px"><i class="icon icon-arrow-carrot-up"></i></p>
            <p class="pick-heading">ქალაქის ხედით</p>
            <div class="apartment-pick">
                <?php if ($floor->floor > 20 && $floor->floor < 26):  ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3545.15 1235">
                        <image x="0.08" width="3545" height="1235" xlink:href="/public/images/gallery/gegma20.png"/>
                        <a href="/ka/apartment/<?= $items[14]['id'] ?>">
                            <polygon id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="517.78 520.5 463.58 1165.5 373.58 1165.5 136.58 1192.5 157.58 1099.5 34.58 1105.5 0.58 1066.5 97.58 838.5 52.58 832.5 43.58 799.5 203.94 442.61 412.58 520.5 517.78 520.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[13]['id'] ?>">
                            <polygon id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="513.32 617.5 757.58 617.5 724.58 1165.5 463.58 1165.5 513.32 617.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[12]['id'] ?>">
                            <polygon id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="757.58 617.5 724.58 1165.5 1087.58 1165.5 1105.58 617.5 757.58 617.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[11]['id'] ?>">
                            <polygon id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1105.58 617.5 1087.58 1165.5 1303.58 1165.5 1324.58 617.5 1105.58 617.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1324.58 617.5 1303.58 1165.5 1492.58 1165.5 1507.58 617.5 1324.58 617.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1507.58 617.5 1492.58 1165.5 1816.58 1165.5 1816.58 617.5 1507.58 617.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1816.58 1165.5 2146.58 1165.5 2134.58 910.5 2134.58 617.5 1816.58 617.5 1816.58 1165.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2146.58 617.5 2146.58 1165.5 2401.58 1165.5 2380.58 617.5 2146.58 617.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2380.58 617.5 2401.58 1165.5 2659.58 1165.5 2629.58 617.5 2380.58 617.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2629.58 617.5 2659.58 1165.5 2827.58 1165.5 2806.58 617.5 2629.58 617.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2806.58 617.5 2827.58 1165.5 3037.58 1165.5 2995.58 617.5 2806.58 617.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2995.58 617.5 3127.58 617.5 3127.58 565.5 3466.58 565.5 3544.58 1165.5 3037.58 1165.5 2995.58 617.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2989.58 520.5 3118.58 520.5 3118.58 565.5 3466.58 565.5 3400.58 13.5 2956.58 13.5 2989.58 520.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2761.58 13.5 2806.58 520.5 2995.58 520.5 2956.58 13.5 2761.58 13.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2593.58 13.5 2629.58 520.5 2806.58 520.5 2761.58 13.5 2593.58 13.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[18]['id'] ?>">
                            <polygon id="<?= $items[18]['kvmeter'] ?>&nbsp;㎡<?php if ($items[18]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[18]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2062.58 25.5 2062.58 91.5 2134.58 91.5 2134.58 520.5 1816.58 520.5 1816.58 25.5 2062.58 25.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[17]['id'] ?>">
                            <polygon id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1816.58 13.5 1816.58 520.5 1507.58 520.5 1507.58 175.5 1324.58 175.5 1324.58 13.5 1816.58 13.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[16]['id'] ?>">
                            <polygon id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1324.58 13.5 1324.58 175.5 1117.58 175.5 1102.58 520.5 772.58 520.5 799.58 13.5 1324.58 13.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[15]['id'] ?>">
                            <polygon id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="220.58 85.5 247.58 235.5 157.58 262.5 187.58 436.5 412.58 520.5 772.58 520.5 799.58 13.5 589.58 13.5 586.58 82.5 220.58 85.5"/>
                        </a>
                    </svg>
                <?php else: ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2883.1 997.04">
                        <image x="0.1" width="2883" height="997" xlink:href="/public/images/gallery/gegma.png"/>
                        <a href="/ka/apartment/<?= $items[12]['id'] ?>">
                            <polygon id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="158.6 367.5 133.6 213.5 202.6 198.5 178.6 67.5 472.6 67.5 472.6 12.5 650.6 12.5 622.6 429.5 346.6 429.5 158.6 367.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[13]['id'] ?>">
                            <polygon id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="928.6 12.5 1079.6 12.5 1079.6 144.5 920.6 144.5 904.6 429.5 622.6 429.5 650.6 12.5 928.6 12.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[14]['id'] ?>">
                            <polygon id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1481.6 12.5 1481.6 429.5 1229.6 429.5 1229.6 150.5 1079.6 144.5 1079.6 12.5 1481.6 12.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[15]['id'] ?>">
                            <polygon id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1676.6 25.5 1682.6 79.5 1733.6 79.5 1739.6 429.5 1481.6 429.5 1481.6 19.61 1676.6 25.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2111.6 19.5 2135.6 423.5 2434.6 429.5 2399.6 12.5 2111.6 12.5 2111.6 19.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2771.6 12.5 2822.6 460.5 2546.6 460.5 2539.6 429.5 2434.6 429.5 2399.6 12.5 2771.6 12.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2876.6 961.5 2822.6 460.5 2546.6 460.5 2546.6 498.5 2441.6 498.5 2477.6 961.5 2876.6 961.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2141.6 498.5 2162.6 948.5 2476.59 948.5 2441.6 498.5 2141.6 498.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1937.6 498.5 1958.6 948.5 2162.6 948.5 2141.6 498.5 1937.6 498.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1739.6 498.5 1753.6 948.5 1958.6 948.5 1937.6 498.5 1739.6 498.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1481.6 498.5 1481.6 948.5 1753.6 948.5 1739.6 498.5 1481.6 498.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1225.6 498.5 1219.6 948.5 1481.6 948.5 1481.6 498.5 1225.6 498.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="899.6 498.5 881.6 948.5 1219.6 948.5 1219.6 498.5 899.6 498.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="611.6 498.5 584.6 948.5 881.6 948.5 899.6 498.5 611.6 498.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="416.6 498.5 374.6 948.5 584.6 948.5 611.6 498.5 416.6 498.5"/>
                        </a>
                        <a href="/ka/apartment/<?= $items[11]['id'] ?>">
                            <polygon id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;გაყიდულია<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="151.6 370.5 22.6 673.5 86.6 693.5 0.6 868.5 28.6 900.5 124.6 900.5 106.6 970.5 122.6 996.5 313.6 970.5 374.6 972.5 419.74 429.5 346.6 429.5 158.6 370.5 151.6 370.5"/>
                        </a>
                    </svg>
                <?php endif; ?>
                <div class="description"></div>
            </div>

            <p class="pick-heading">ზღვის ხედით</p>
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
            <p class="pick-heading" style="margin-bottom: -25px"><i class="icon icon-arrow-carrot-up"></i></p>
            <p class="pick-heading">City view</p>
            <div class="apartment-pick">
                <?php if ($floor->floor > 20 && $floor->floor < 26):  ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3545.15 1235">
                        <image x="0.08" width="3545" height="1235" xlink:href="/public/images/gallery/gegma20.png"/>
                        <a href="/en/apartment/<?= $items[14]['id'] ?>">
                            <polygon id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="517.78 520.5 463.58 1165.5 373.58 1165.5 136.58 1192.5 157.58 1099.5 34.58 1105.5 0.58 1066.5 97.58 838.5 52.58 832.5 43.58 799.5 203.94 442.61 412.58 520.5 517.78 520.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[13]['id'] ?>">
                            <polygon id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="513.32 617.5 757.58 617.5 724.58 1165.5 463.58 1165.5 513.32 617.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[12]['id'] ?>">
                            <polygon id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="757.58 617.5 724.58 1165.5 1087.58 1165.5 1105.58 617.5 757.58 617.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[11]['id'] ?>">
                            <polygon id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1105.58 617.5 1087.58 1165.5 1303.58 1165.5 1324.58 617.5 1105.58 617.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1324.58 617.5 1303.58 1165.5 1492.58 1165.5 1507.58 617.5 1324.58 617.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1507.58 617.5 1492.58 1165.5 1816.58 1165.5 1816.58 617.5 1507.58 617.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1816.58 1165.5 2146.58 1165.5 2134.58 910.5 2134.58 617.5 1816.58 617.5 1816.58 1165.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2146.58 617.5 2146.58 1165.5 2401.58 1165.5 2380.58 617.5 2146.58 617.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2380.58 617.5 2401.58 1165.5 2659.58 1165.5 2629.58 617.5 2380.58 617.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2629.58 617.5 2659.58 1165.5 2827.58 1165.5 2806.58 617.5 2629.58 617.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2806.58 617.5 2827.58 1165.5 3037.58 1165.5 2995.58 617.5 2806.58 617.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2995.58 617.5 3127.58 617.5 3127.58 565.5 3466.58 565.5 3544.58 1165.5 3037.58 1165.5 2995.58 617.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2989.58 520.5 3118.58 520.5 3118.58 565.5 3466.58 565.5 3400.58 13.5 2956.58 13.5 2989.58 520.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2761.58 13.5 2806.58 520.5 2995.58 520.5 2956.58 13.5 2761.58 13.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2593.58 13.5 2629.58 520.5 2806.58 520.5 2761.58 13.5 2593.58 13.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[18]['id'] ?>">
                            <polygon id="<?= $items[18]['kvmeter'] ?>&nbsp;㎡<?php if ($items[18]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[18]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2062.58 25.5 2062.58 91.5 2134.58 91.5 2134.58 520.5 1816.58 520.5 1816.58 25.5 2062.58 25.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[17]['id'] ?>">
                            <polygon id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1816.58 13.5 1816.58 520.5 1507.58 520.5 1507.58 175.5 1324.58 175.5 1324.58 13.5 1816.58 13.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[16]['id'] ?>">
                            <polygon id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1324.58 13.5 1324.58 175.5 1117.58 175.5 1102.58 520.5 772.58 520.5 799.58 13.5 1324.58 13.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[15]['id'] ?>">
                            <polygon id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="220.58 85.5 247.58 235.5 157.58 262.5 187.58 436.5 412.58 520.5 772.58 520.5 799.58 13.5 589.58 13.5 586.58 82.5 220.58 85.5"/>
                        </a>
                    </svg>
                <?php else: ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2883.1 997.04">
                        <image x="0.1" width="2883" height="997" xlink:href="/public/images/gallery/gegma.png"/>
                        <a href="/en/apartment/<?= $items[12]['id'] ?>">
                            <polygon id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="158.6 367.5 133.6 213.5 202.6 198.5 178.6 67.5 472.6 67.5 472.6 12.5 650.6 12.5 622.6 429.5 346.6 429.5 158.6 367.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[13]['id'] ?>">
                            <polygon id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="928.6 12.5 1079.6 12.5 1079.6 144.5 920.6 144.5 904.6 429.5 622.6 429.5 650.6 12.5 928.6 12.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[14]['id'] ?>">
                            <polygon id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1481.6 12.5 1481.6 429.5 1229.6 429.5 1229.6 150.5 1079.6 144.5 1079.6 12.5 1481.6 12.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[15]['id'] ?>">
                            <polygon id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1676.6 25.5 1682.6 79.5 1733.6 79.5 1739.6 429.5 1481.6 429.5 1481.6 19.61 1676.6 25.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2111.6 19.5 2135.6 423.5 2434.6 429.5 2399.6 12.5 2111.6 12.5 2111.6 19.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2771.6 12.5 2822.6 460.5 2546.6 460.5 2539.6 429.5 2434.6 429.5 2399.6 12.5 2771.6 12.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2876.6 961.5 2822.6 460.5 2546.6 460.5 2546.6 498.5 2441.6 498.5 2477.6 961.5 2876.6 961.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2141.6 498.5 2162.6 948.5 2476.59 948.5 2441.6 498.5 2141.6 498.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1937.6 498.5 1958.6 948.5 2162.6 948.5 2141.6 498.5 1937.6 498.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1739.6 498.5 1753.6 948.5 1958.6 948.5 1937.6 498.5 1739.6 498.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1481.6 498.5 1481.6 948.5 1753.6 948.5 1739.6 498.5 1481.6 498.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1225.6 498.5 1219.6 948.5 1481.6 948.5 1481.6 498.5 1225.6 498.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="899.6 498.5 881.6 948.5 1219.6 948.5 1219.6 498.5 899.6 498.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="611.6 498.5 584.6 948.5 881.6 948.5 899.6 498.5 611.6 498.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="416.6 498.5 374.6 948.5 584.6 948.5 611.6 498.5 416.6 498.5"/>
                        </a>
                        <a href="/en/apartment/<?= $items[11]['id'] ?>">
                            <polygon id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;Sold<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="151.6 370.5 22.6 673.5 86.6 693.5 0.6 868.5 28.6 900.5 124.6 900.5 106.6 970.5 122.6 996.5 313.6 970.5 374.6 972.5 419.74 429.5 346.6 429.5 158.6 370.5 151.6 370.5"/>
                        </a>
                    </svg>
                <?php endif; ?>
                <div class="description"></div>
            </div>

            <p class="pick-heading">Sea view</p>
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
            <p class="pick-heading" style="margin-bottom: -25px"><i class="icon icon-arrow-carrot-up"></i></p>
            <p class="pick-heading">Вид на город</p>
            <div class="apartment-pick">
                <?php if ($floor->floor > 20 && $floor->floor < 26):  ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3545.15 1235">
                        <image x="0.08" width="3545" height="1235" xlink:href="/public/images/gallery/gegma20.png"/>
                        <a href="/ru/apartment/<?= $items[14]['id'] ?>">
                            <polygon id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="517.78 520.5 463.58 1165.5 373.58 1165.5 136.58 1192.5 157.58 1099.5 34.58 1105.5 0.58 1066.5 97.58 838.5 52.58 832.5 43.58 799.5 203.94 442.61 412.58 520.5 517.78 520.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[13]['id'] ?>">
                            <polygon id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="513.32 617.5 757.58 617.5 724.58 1165.5 463.58 1165.5 513.32 617.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[12]['id'] ?>">
                            <polygon id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="757.58 617.5 724.58 1165.5 1087.58 1165.5 1105.58 617.5 757.58 617.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[11]['id'] ?>">
                            <polygon id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1105.58 617.5 1087.58 1165.5 1303.58 1165.5 1324.58 617.5 1105.58 617.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1324.58 617.5 1303.58 1165.5 1492.58 1165.5 1507.58 617.5 1324.58 617.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1507.58 617.5 1492.58 1165.5 1816.58 1165.5 1816.58 617.5 1507.58 617.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1816.58 1165.5 2146.58 1165.5 2134.58 910.5 2134.58 617.5 1816.58 617.5 1816.58 1165.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2146.58 617.5 2146.58 1165.5 2401.58 1165.5 2380.58 617.5 2146.58 617.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2380.58 617.5 2401.58 1165.5 2659.58 1165.5 2629.58 617.5 2380.58 617.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2629.58 617.5 2659.58 1165.5 2827.58 1165.5 2806.58 617.5 2629.58 617.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2806.58 617.5 2827.58 1165.5 3037.58 1165.5 2995.58 617.5 2806.58 617.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2995.58 617.5 3127.58 617.5 3127.58 565.5 3466.58 565.5 3544.58 1165.5 3037.58 1165.5 2995.58 617.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2989.58 520.5 3118.58 520.5 3118.58 565.5 3466.58 565.5 3400.58 13.5 2956.58 13.5 2989.58 520.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2761.58 13.5 2806.58 520.5 2995.58 520.5 2956.58 13.5 2761.58 13.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2593.58 13.5 2629.58 520.5 2806.58 520.5 2761.58 13.5 2593.58 13.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[18]['id'] ?>">
                            <polygon id="<?= $items[18]['kvmeter'] ?>&nbsp;㎡<?php if ($items[18]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[18]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2062.58 25.5 2062.58 91.5 2134.58 91.5 2134.58 520.5 1816.58 520.5 1816.58 25.5 2062.58 25.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[17]['id'] ?>">
                            <polygon id="<?= $items[17]['kvmeter'] ?>&nbsp;㎡<?php if ($items[17]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[17]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1816.58 13.5 1816.58 520.5 1507.58 520.5 1507.58 175.5 1324.58 175.5 1324.58 13.5 1816.58 13.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[16]['id'] ?>">
                            <polygon id="<?= $items[16]['kvmeter'] ?>&nbsp;㎡<?php if ($items[16]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[16]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1324.58 13.5 1324.58 175.5 1117.58 175.5 1102.58 520.5 772.58 520.5 799.58 13.5 1324.58 13.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[15]['id'] ?>">
                            <polygon id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="220.58 85.5 247.58 235.5 157.58 262.5 187.58 436.5 412.58 520.5 772.58 520.5 799.58 13.5 589.58 13.5 586.58 82.5 220.58 85.5"/>
                        </a>
                    </svg>
                <?php else: ?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2883.1 997.04">
                        <image x="0.1" width="2883" height="997" xlink:href="/public/images/gallery/gegma.png"/>
                        <a href="/ru/apartment/<?= $items[12]['id'] ?>">
                            <polygon id="<?= $items[12]['kvmeter'] ?>&nbsp;㎡<?php if ($items[12]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[12]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="158.6 367.5 133.6 213.5 202.6 198.5 178.6 67.5 472.6 67.5 472.6 12.5 650.6 12.5 622.6 429.5 346.6 429.5 158.6 367.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[13]['id'] ?>">
                            <polygon id="<?= $items[13]['kvmeter'] ?>&nbsp;㎡<?php if ($items[13]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[13]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="928.6 12.5 1079.6 12.5 1079.6 144.5 920.6 144.5 904.6 429.5 622.6 429.5 650.6 12.5 928.6 12.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[14]['id'] ?>">
                            <polygon id="<?= $items[14]['kvmeter'] ?>&nbsp;㎡<?php if ($items[14]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[14]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1481.6 12.5 1481.6 429.5 1229.6 429.5 1229.6 150.5 1079.6 144.5 1079.6 12.5 1481.6 12.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[15]['id'] ?>">
                            <polygon id="<?= $items[15]['kvmeter'] ?>&nbsp;㎡<?php if ($items[15]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[15]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1676.6 25.5 1682.6 79.5 1733.6 79.5 1739.6 429.5 1481.6 429.5 1481.6 19.61 1676.6 25.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[0]['id'] ?>">
                            <polygon id="<?= $items[0]['kvmeter'] ?>&nbsp;㎡<?php if ($items[0]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[0]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2111.6 19.5 2135.6 423.5 2434.6 429.5 2399.6 12.5 2111.6 12.5 2111.6 19.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[1]['id'] ?>">
                            <polygon id="<?= $items[1]['kvmeter'] ?>&nbsp;㎡<?php if ($items[1]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[1]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2771.6 12.5 2822.6 460.5 2546.6 460.5 2539.6 429.5 2434.6 429.5 2399.6 12.5 2771.6 12.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[2]['id'] ?>">
                            <polygon id="<?= $items[2]['kvmeter'] ?>&nbsp;㎡<?php if ($items[2]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[2]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2876.6 961.5 2822.6 460.5 2546.6 460.5 2546.6 498.5 2441.6 498.5 2477.6 961.5 2876.6 961.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[3]['id'] ?>">
                            <polygon id="<?= $items[3]['kvmeter'] ?>&nbsp;㎡<?php if ($items[3]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[3]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="2141.6 498.5 2162.6 948.5 2476.59 948.5 2441.6 498.5 2141.6 498.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[4]['id'] ?>">
                            <polygon id="<?= $items[4]['kvmeter'] ?>&nbsp;㎡<?php if ($items[4]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[4]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1937.6 498.5 1958.6 948.5 2162.6 948.5 2141.6 498.5 1937.6 498.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[5]['id'] ?>">
                            <polygon id="<?= $items[5]['kvmeter'] ?>&nbsp;㎡<?php if ($items[5]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[5]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1739.6 498.5 1753.6 948.5 1958.6 948.5 1937.6 498.5 1739.6 498.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[6]['id'] ?>">
                            <polygon id="<?= $items[6]['kvmeter'] ?>&nbsp;㎡<?php if ($items[6]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[6]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1481.6 498.5 1481.6 948.5 1753.6 948.5 1739.6 498.5 1481.6 498.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[7]['id'] ?>">
                            <polygon id="<?= $items[7]['kvmeter'] ?>&nbsp;㎡<?php if ($items[7]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[7]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="1225.6 498.5 1219.6 948.5 1481.6 948.5 1481.6 498.5 1225.6 498.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[8]['id'] ?>">
                            <polygon id="<?= $items[8]['kvmeter'] ?>&nbsp;㎡<?php if ($items[8]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[8]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="899.6 498.5 881.6 948.5 1219.6 948.5 1219.6 498.5 899.6 498.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[9]['id'] ?>">
                            <polygon id="<?= $items[9]['kvmeter'] ?>&nbsp;㎡<?php if ($items[9]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[9]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="611.6 498.5 584.6 948.5 881.6 948.5 899.6 498.5 611.6 498.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[10]['id'] ?>">
                            <polygon id="<?= $items[10]['kvmeter'] ?>&nbsp;㎡<?php if ($items[10]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[10]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="416.6 498.5 374.6 948.5 584.6 948.5 611.6 498.5 416.6 498.5"/>
                        </a>
                        <a href="/ru/apartment/<?= $items[11]['id'] ?>">
                            <polygon id="<?= $items[11]['kvmeter'] ?>&nbsp;㎡<?php if ($items[11]['status'] == 1): ?>&nbsp;Продано<?php endif; ?>" class="<?php if ($items[11]['status'] == 1): ?>sold-polygon<?php else: ?>enabled<?php endif; ?>" points="151.6 370.5 22.6 673.5 86.6 693.5 0.6 868.5 28.6 900.5 124.6 900.5 106.6 970.5 122.6 996.5 313.6 970.5 374.6 972.5 419.74 429.5 346.6 429.5 158.6 370.5 151.6 370.5"/>
                        </a>
                    </svg>
                <?php endif; ?>
                <div class="description"></div>
            </div>

            <p class="pick-heading">Вид на море</p>
            <p class="pick-heading" style="margin-top: -25px"><i class="icon icon-arrow-carrot-down"></i></p>
        </div>
    </section>
<?php endif ?>

