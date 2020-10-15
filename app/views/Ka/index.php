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


<?php $floor1 = 0 ?>
<?php $floor2 = 0 ?>
<?php $floor3 = 0 ?>
<?php $floor4 = 0 ?>
<?php $floor5 = 0 ?>
<?php $floor6 = 0 ?>
<?php $floor7 = 0 ?>
<?php $floor8 = 0 ?>
<?php $floor9 = 0 ?>
<?php $floor10 = 0 ?>
<?php $floor11 = 0 ?>
<?php $floor12 = 0 ?>
<?php $floor13 = 0 ?>
<?php $floor14 = 0 ?>
<?php $floor15 = 0 ?>
<?php $floor16 = 0 ?>
<?php $floor17 = 0 ?>
<?php $floor18 = 0 ?>
<?php $floor19 = 0 ?>
<?php $floor20 = 0 ?>
<?php $floor21 = 0 ?>
<?php $floor22 = 0 ?>
<?php $floor23 = 0 ?>
<?php $floor24 = 0 ?>
<?php $floor25 = 0 ?>
<?php $floor26 = 0 ?>
<?php $floor27 = 0 ?>
<?php $floor28 = 0 ?>
<?php $floor29 = 0 ?>
<?php $floor30 = 0 ?>
<?php $floor31 = 0 ?>
<?php $floor32 = 0 ?>
<?php $floor33 = 0 ?>
<?php $floor34 = 0 ?>
<?php $floor35 = 0 ?>


<?php  foreach ($apartments as $apartment): ?>
    <?php if ($apartment->floorid == 1 && $apartment->status == 1):  ?><?php $floor1 = $floor1 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 2 && $apartment->status == 1):  ?><?php $floor2 = $floor2 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 3 && $apartment->status == 1):  ?><?php $floor3 = $floor3 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 4 && $apartment->status == 1):  ?><?php $floor4 = $floor4 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 5 && $apartment->status == 1):  ?><?php $floor5 = $floor5 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 6 && $apartment->status == 1):  ?><?php $floor6 = $floor6 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 7 && $apartment->status == 1):  ?><?php $floor7 = $floor7 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 8 && $apartment->status == 1):  ?><?php $floor8 = $floor8 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 9 && $apartment->status == 1):  ?><?php $floor9 = $floor9 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 10 && $apartment->status == 1):  ?><?php $floor10 = $floor10 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 11 && $apartment->status == 1):  ?><?php $floor11 = $floor11 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 12 && $apartment->status == 1):  ?><?php $floor12 = $floor12 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 13 && $apartment->status == 1):  ?><?php $floor13 = $floor13 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 14 && $apartment->status == 1):  ?><?php $floor14 = $floor14 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 15 && $apartment->status == 1):  ?><?php $floor15 = $floor15 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 16 && $apartment->status == 1):  ?><?php $floor16 = $floor16 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 17 && $apartment->status == 1):  ?><?php $floor17 = $floor17 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 18 && $apartment->status == 1):  ?><?php $floor18 = $floor18 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 19 && $apartment->status == 1):  ?><?php $floor19 = $floor19 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 20 && $apartment->status == 1):  ?><?php $floor20 = $floor20 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 21 && $apartment->status == 1):  ?><?php $floor21 = $floor21 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 22 && $apartment->status == 1):  ?><?php $floor22 = $floor22 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 23 && $apartment->status == 1):  ?><?php $floor23 = $floor23 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 24 && $apartment->status == 1):  ?><?php $floor24 = $floor24 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 25 && $apartment->status == 1):  ?><?php $floor25 = $floor25 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 26 && $apartment->status == 1):  ?><?php $floor26 = $floor26 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 27 && $apartment->status == 1):  ?><?php $floor27 = $floor27 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 28 && $apartment->status == 1):  ?><?php $floor28 = $floor28 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 29 && $apartment->status == 1):  ?><?php $floor29 = $floor29 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 30 && $apartment->status == 1):  ?><?php $floor30 = $floor30 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 31 && $apartment->status == 1):  ?><?php $floor31 = $floor31 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 32 && $apartment->status == 1):  ?><?php $floor32 = $floor32 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 33 && $apartment->status == 1):  ?><?php $floor33 = $floor33 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 34 && $apartment->status == 1):  ?><?php $floor34 = $floor34 + 1 ?><?php endif;  ?>
    <?php if ($apartment->floorid == 35 && $apartment->status == 1):  ?><?php $floor35 = $floor35 + 1 ?><?php endif;  ?>
<?php  endforeach; ?>



<?php $bfloor4 = 0 ?>
<?php $bfloor5 = 0 ?>
<?php $bfloor6 = 0 ?>
<?php $bfloor7 = 0 ?>
<?php $bfloor8 = 0 ?>
<?php $bfloor9 = 0 ?>
<?php $bfloor10 = 0 ?>
<?php $bfloor11 = 0 ?>
<?php $bfloor12 = 0 ?>
<?php $bfloor13 = 0 ?>
<?php $bfloor14 = 0 ?>
<?php $bfloor15 = 0 ?>
<?php $bfloor16 = 0 ?>
<?php $bfloor17 = 0 ?>
<?php $bfloor18 = 0 ?>
<?php $bfloor19 = 0 ?>
<?php $bfloor20 = 0 ?>
<?php $bfloor21 = 0 ?>
<?php $bfloor22 = 0 ?>
<?php $bfloor23 = 0 ?>
<?php $bfloor24 = 0 ?>
<?php $bfloor25 = 0 ?>
<?php $bfloor26 = 0 ?>
<?php $bfloor27 = 0 ?>
<?php $bfloor28 = 0 ?>
<?php $bfloor29 = 0 ?>
<?php $bfloor30 = 0 ?>
<?php $bfloor31 = 0 ?>
<?php $bfloor32 = 0 ?>
<?php $bfloor33 = 0 ?>
<?php $bfloor34 = 0 ?>
<?php $bfloor35 = 0 ?>
<?php $bfloor36 = 0 ?>
<?php $bfloor37 = 0 ?>
<?php $bfloor38 = 0 ?>
<?php $bfloor39 = 0 ?>
<?php $bfloor40 = 0 ?>
<?php $bfloor41 = 0 ?>
<?php $bfloor42 = 0 ?>
<?php $bfloor43 = 0 ?>
<?php $bfloor44 = 0 ?>
<?php $bfloor45 = 0 ?>

<?php  foreach ($bapartments as $bapartment): ?>
    <?php if ($bapartment->floorid == 5 && $bapartment->status == 1):  ?><?php $bfloor5 = $bfloor5 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 6 && $bapartment->status == 1):  ?><?php $bfloor6 = $bfloor6 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 7 && $bapartment->status == 1):  ?><?php $bfloor7 = $bfloor7 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 8 && $bapartment->status == 1):  ?><?php $bfloor8 = $bfloor8 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 9 && $bapartment->status == 1):  ?><?php $bfloor9 = $bfloor9 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 10 && $bapartment->status == 1):  ?><?php $bfloor10 = $bfloor10 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 11 && $bapartment->status == 1):  ?><?php $bfloor11 = $bfloor11 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 12 && $bapartment->status == 1):  ?><?php $bfloor12 = $bfloor12 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 13 && $bapartment->status == 1):  ?><?php $bfloor13 = $bfloor13 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 14 && $bapartment->status == 1):  ?><?php $bfloor14 = $bfloor14 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 15 && $bapartment->status == 1):  ?><?php $bfloor15 = $bfloor15 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 16 && $bapartment->status == 1):  ?><?php $bfloor16 = $bfloor16 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 17 && $bapartment->status == 1):  ?><?php $bfloor17 = $bfloor17 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 18 && $bapartment->status == 1):  ?><?php $bfloor18 = $bfloor18 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 19 && $bapartment->status == 1):  ?><?php $bfloor19 = $bfloor19 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 20 && $bapartment->status == 1):  ?><?php $bfloor20 = $bfloor20 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 21 && $bapartment->status == 1):  ?><?php $bfloor21 = $bfloor21 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 22 && $bapartment->status == 1):  ?><?php $bfloor22 = $bfloor22 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 23 && $bapartment->status == 1):  ?><?php $bfloor23 = $bfloor23 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 24 && $bapartment->status == 1):  ?><?php $bfloor24 = $bfloor24 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 25 && $bapartment->status == 1):  ?><?php $bfloor25 = $bfloor25 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 26 && $bapartment->status == 1):  ?><?php $bfloor26 = $bfloor26 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 27 && $bapartment->status == 1):  ?><?php $bfloor27 = $bfloor27 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 28 && $bapartment->status == 1):  ?><?php $bfloor28 = $bfloor28 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 29 && $bapartment->status == 1):  ?><?php $bfloor29 = $bfloor29 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 30 && $bapartment->status == 1):  ?><?php $bfloor30 = $bfloor30 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 31 && $bapartment->status == 1):  ?><?php $bfloor31 = $bfloor31 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 32 && $bapartment->status == 1):  ?><?php $bfloor32 = $bfloor32 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 33 && $bapartment->status == 1):  ?><?php $bfloor33 = $bfloor33 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 34 && $bapartment->status == 1):  ?><?php $bfloor34 = $bfloor34 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 35 && $bapartment->status == 1):  ?><?php $bfloor35 = $bfloor35 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 36 && $bapartment->status == 1):  ?><?php $bfloor36 = $bfloor36 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 37 && $bapartment->status == 1):  ?><?php $bfloor37 = $bfloor37 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 38 && $bapartment->status == 1):  ?><?php $bfloor38 = $bfloor38 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 39 && $bapartment->status == 1):  ?><?php $bfloor39 = $bfloor39 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 40 && $bapartment->status == 1):  ?><?php $bfloor40 = $bfloor40 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 41 && $bapartment->status == 1):  ?><?php $bfloor41 = $bfloor41 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 42 && $bapartment->status == 1):  ?><?php $bfloor42 = $bfloor42 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 43 && $bapartment->status == 1):  ?><?php $bfloor43 = $bfloor43 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 44 && $bapartment->status == 1):  ?><?php $bfloor44 = $bfloor44 + 1 ?><?php endif;  ?>
    <?php if ($bapartment->floorid == 45 && $bapartment->status == 1):  ?><?php $bfloor45 = $bfloor45 + 1 ?><?php endif;  ?>
<?php  endforeach; ?>

<style>
    .pick-heading, .sub-heading, html, body, h1, h2, span, p, small, div, a, h3, .btn, .right-icon, .btn-services, .btn-mask, .section-heading, .min-heder, #bingc-phone-button-tooltip {
    font-family: CITI-Nus-Regular;
}
    .needed-btns {
        background-color: #1e272e;
        padding-bottom: 10px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
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
<!-- Start: Side Navbar  Area
============================= -->
<div id="fp-nav" class="left">
    <div id="fp-nolink">
        <div class="logo-outer" title="სართულის არჩევა">
            <a href="#1"><img src="/public/images/gallery/logo.png" alt="" class="img-responsive logo-1"></a>
            <a href="#1"><img src="/public/images/gallery/logo2.png" alt="" class="img-responsive logo-2"></a>
        </div>
        <ul>
            <li></li>
            <li title="კომპლექსის შესახებ">
                <a href="#2" class="" >
                            <span>   
                                <svg class="svg-inline--fa fa-file-alt fa-w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.508 32.508"><defs/><path d="M0 11.257l16.254-9.075 16.254 9.075-16.254 9.074L0 11.257z"/><path d="M0 16.255l1.908-1.614 14.346 7.715 14.32-7.748 1.934 1.647-16.254 9.072L0 16.255z"/><path d="M0 21.254l1.908-1.615 14.346 7.716 14.32-7.75 1.934 1.649-16.254 9.072L0 21.254z"/></svg>
                            </span>
                </a>
            </li>
            <li title="აპარტამენტები">
                <a href="#3" class="">
                            <span>    
                                <svg class="svg-inline--fa fa-brush fa-w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs/><path d="M134.95 205.661l39.733 39.732 70.711-70.711-39.732-39.732c10.953-36.731 1.087-76.694-26.416-104.197C150.923 2.43 109.663-7.228 71.568 5.546a15 15 0 00-7.064 23.441l41.73 53.563-23.684 23.685-53.563-41.732a14.998 14.998 0 00-23.44 7.064c-12.776 38.096-3.118 79.355 25.206 107.678 27.503 27.503 67.466 37.37 104.197 26.416zM377.05 306.339l-39.732-39.732-70.711 70.71 39.732 39.732c-10.953 36.731-1.087 76.694 26.416 104.198 20.056 20.057 46.597 30.754 73.91 30.753 11.258 0 22.649-1.818 33.768-5.547a15 15 0 007.064-23.441l-41.73-53.563 23.684-23.684 53.563 41.73a14.998 14.998 0 0023.44-7.064c12.776-38.096 3.118-79.355-25.206-107.678-27.504-27.502-67.466-37.366-104.198-26.414zM138.365 324.137c-5.858-5.858-15.355-5.858-21.213 0L14.621 426.668c-19.495 19.495-19.495 51.216 0 70.711s51.216 19.495 70.711 0l102.531-102.531c5.858-5.858 5.858-15.355 0-21.213zM395.699 243.581c6.61 6.61 15.4 10.252 24.749 10.252s18.138-3.642 24.749-10.252l56.568-56.569c13.646-13.646 13.646-35.851 0-49.497L374.486 10.235c-13.646-13.646-35.85-13.646-49.498 0L268.42 66.804c-13.646 13.646-13.646 35.851 0 49.497zM286.098 176.405l-126.52 126.519.002.002 49.495 49.496 126.52-126.52z"/></svg>
                            </span>
                </a>
            </li>
            <li title="მედია">
                <a href="#4" class="">
                            <span>
                                <svg class="svg-inline--fa fa-photo-video fa-w-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 297 297"><defs/><path d="M140.401 97.954c-13.824 0-26.609 7.308-33.701 19.134l34.601 34.601L178.336 127c-4.57-16.965-20.15-29.046-37.935-29.046zM262.367 170.596v-5.437l-58.757-29.378a14.292 14.292 0 00-14.285.89l-34.185 22.79c11.051.366 21.314.934 30.599 1.607 36.431 2.638 63.569 7.085 76.628 9.528zM76.747 107.137a14.162 14.162 0 00-10.082-4.177 14.16 14.16 0 00-10.082 4.177L0 163.719v6.905c46.115-8.767 90.662-11.573 128.638-11.596l-51.891-51.891z"/><path d="M281.681 87.98h-5.171v107.865c0 15.062-12.255 27.317-27.318 27.317H34.633v19.695c0 8.448 6.872 15.32 15.32 15.32h231.728c8.447 0 15.319-6.872 15.319-15.32V103.299c0-8.446-6.872-15.319-15.319-15.319z"/><path d="M249.192 38.823H13.174C5.91 38.823 0 44.733 0 51.998v91.719l46.581-46.581c5.365-5.364 12.497-8.318 20.084-8.318s14.719 2.955 20.083 8.319l9.714 9.714c9.924-14.328 26.32-23.039 43.939-23.039 23.29 0 43.8 15.243 50.838 36.983 6.226-1.34 12.837-.593 18.697 2.338l52.431 26.215v-97.35c0-7.265-5.91-13.175-13.175-13.175zM115.643 77.449a7.054 7.054 0 01-5.001 2.071 7.056 7.056 0 01-5.001-2.071l-7.11-7.11a7.073 7.073 0 010-10.001 7.075 7.075 0 0110.001 0l7.11 7.11a7.072 7.072 0 01.001 10.001zm41.884-9.19a7.07 7.07 0 11-14.142 0V58.204a7.07 7.07 0 1114.142 0v10.055zm43.176 10.104l-7.11 7.11a7.054 7.054 0 01-5.001 2.071 7.073 7.073 0 01-5.001-12.072l7.11-7.11a7.072 7.072 0 0110.002 10.001zM262.367 195.845v-10.834c-25.98-4.968-139.951-23.857-262.367.012v10.821c0 7.264 5.91 13.174 13.174 13.174h236.018c7.265.002 13.175-5.909 13.175-13.173z"/></svg>
                            </span>
                </a>
            </li>
            <li title="კითხვები">
                <a href="#5" class="">
                            <span>               
                                <svg class="svg-inline--fa fa-question-circle fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 365.442 365.442"><defs/><path d="M212.994 274.074h-68.522c-3.042 0-5.708 1.149-7.992 3.429-2.286 2.286-3.427 4.948-3.427 7.994v68.525c0 3.046 1.145 5.712 3.427 7.994 2.284 2.279 4.947 3.426 7.992 3.426h68.522c3.042 0 5.715-1.144 7.99-3.426 2.29-2.282 3.433-4.948 3.433-7.994v-68.525c0-3.046-1.14-5.708-3.433-7.994-2.275-2.286-4.948-3.429-7.99-3.429zM302.935 68.951c-7.806-14.378-17.891-26.506-30.266-36.406-12.367-9.896-26.271-17.799-41.685-23.697C215.567 2.952 200.246 0 185.016 0 127.157 0 83 25.315 52.544 75.946c-1.521 2.473-2.046 5.137-1.571 7.993.478 2.852 1.953 5.232 4.427 7.135l46.824 35.691c2.474 1.52 4.854 2.281 7.139 2.281 3.427 0 6.375-1.525 8.852-4.57 13.702-17.128 23.887-28.072 30.548-32.833 8.186-5.518 18.461-8.276 30.833-8.276 11.61 0 21.838 3.046 30.692 9.132 8.85 6.092 13.271 13.135 13.271 21.129 0 8.942-2.375 16.178-7.135 21.698-4.757 5.518-12.754 10.845-23.986 15.986-14.842 6.661-28.457 16.988-40.823 30.978-12.375 13.991-18.558 28.885-18.558 44.682v12.847c0 3.62.994 7.187 2.996 10.708 2 3.524 4.425 5.283 7.282 5.283h68.521c3.046 0 5.708-1.472 7.994-4.432 2.279-2.942 3.426-6.036 3.426-9.267 0-4.757 2.617-11.14 7.847-19.13 5.235-7.994 11.752-14.186 19.562-18.565 7.419-4.186 13.219-7.56 17.411-10.133 4.196-2.566 9.664-6.715 16.423-12.421 6.756-5.712 11.991-11.375 15.698-16.988 3.713-5.614 7.046-12.896 9.996-21.844 2.956-8.945 4.428-18.558 4.428-28.835-.002-15.798-3.907-30.881-11.706-45.244z"/></svg>
                            </span>
                </a>
            </li>
            <li title="კონტაქტი">
                <a href="#6" class="">
                            <span>                
                                <svg class="svg-inline--fa fa-envelope fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 307.837 307.837"><defs/><path d="M143.044 171.255c2.56 2.643 6.844 4.32 11.421 4.314 4.571.036 8.867-1.701 11.301-4.207L278.677 57.688c7.554-7.602 4.988-13.766-5.734-13.766H36.792c-10.716 0-13.3 6.182-5.776 13.807l112.028 113.526zM13.569 232.058l76.853-78.578-76.788-77.82C6.104 68.034 0 70.54 0 81.257v145.275c0 10.711 6.074 13.187 13.569 5.526z"/><path d="M36.702 263.915h234.426c10.717 0 13.336-6.217 5.848-13.879l-76.459-78.291-17.053 17.197c-7.996 8.002-18.629 11.57-29.011 11.588-10.347-.012-21.057-3.598-29.154-11.713l-17.334-17.572-77.092 78.804c-7.495 7.654-4.887 13.866 5.829 13.866zM307.837 226.508V83.16c0-10.716-6.122-13.24-13.676-5.639l-76.018 76.519 76.143 77.987c7.482 7.668 13.551 5.198 13.551-5.519z"/></svg>
                            </span>
                </a>
            </li>
        </ul>
    </div>
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
<nav class="navbar navbar-fixed-top main-navbar-top navbar-top-js" id="main-navbar-top" >
    <div class="container relative">
        <div id="fp-nolink">
            <!-- Left Side Navigation Button -->
            <div style="position: absolute;" >
                <a href="#1">
                    <img style="margin-top: 7px;width: 60px; padding: 4px" src="/public/images/gallery/logo.png" alt="">
                </a>
            </div>
            <div class="navbar-header">
                <!-- Menu Button show Mobile view -->
                <button type="button" class="nav-trigger nav-trigger-animate"  data-target="#js-navbar-menu">
                    <span aria-hidden="true" class="icon"></span>
                </button>
            </div>

            <!-- Main Menu List -->
            <div class="navbar-collapse" id="js-navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li></li>
                    <li><a class="btn-nav" href="#2">კომპლექსის შესახებ</a></li>
                    <li><a class="btn-nav" href="#3">აპარტამენტები</a></li>
                    <li><a class="btn-nav" href="#4">მედია</a></li>
                    <li><a class="btn-nav" href="#5">კითხვები</a></li>
                    <li><a class="btn-nav" href="#6">კონტაქტი</a></li>
                </ul>
            </div>
        </div>


        <!-- Right Side Navigation Button -->
        <div class="navbar-collapse-right" >
            <ul class="nav navbar-nav navbar-right" style="width: 90px;">
                <li style="width: 100%;">
                    <div class="pick-language" style="align-items: center; height: 70px;">

                    </div>
                </li>
            </ul>
        </div>

    </div>
</nav>
<!-- End: Navbar Area
============================= -->
<section class="content-area" id="fullpage">
    <div class="container-fluid">
        <div class="row">
            <!--Start: 1st Page Slider Section
                - HOME PAGE
            ====================================-->
            <div class="section section-item home-section overflow hide-overlay overlay-color bg-image-1" data-heading="">
                <div class="inner-container for-desktop">
                    <div class="footer-button">
                        <a href="#" class="btn">
                            <p class="icon" style="color: #ffffff">
                                <i class="icon icon-arrow-carrot-down"></i>
                                აირჩიეთ სართული
                                <i class="icon icon-arrow-carrot-down"></i>
                            </p>
                        </a>
                    </div>
                    <div class="floor-pick">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2721 2343">
                            <image width="2721" height="2343" xlink:href="/public/images/gallery/mappedtowers.png"/>
                            <a href="/ka/bfloor/1">
                                <rect id="<?php if ($floor5 < 24): ?>სართული&nbsp;5<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 24): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="2029" width="1049" height="48.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/2">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;6<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1981" width="1049" height="48.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/3">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;7<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1933" width="1049" height="48.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/4">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;8<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1885" width="1049" height="48.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/5">
                                <rect id="<?php if ($floor5 < 25): ?>სართული&nbsp;9<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 25): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1841" width="1049" height="44.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/6">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;10<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1792" width="1049" height="49" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/7">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;11<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1745.5" width="1049" height="49" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/8">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;12<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1696.5" width="1049" height="49" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/9">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;13<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1647" width="1049" height="49.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/10">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;14<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1602" width="1049" height="44.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/11">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;15<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1551" width="1049" height="50.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/12">
                                <rect id="<?php if ($floor5 < 25): ?>სართული&nbsp;16<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 25): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1505" width="1049" height="46.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/13">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;17<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1459" width="1049" height="46.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/14">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;18<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1408" width="1049" height="50.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/15">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;19<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1362" width="1049" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/16">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;20<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1316" width="1049" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/17">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;21<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1266" width="1049" height="49.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/18">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;22<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1216" width="1049" height="49.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/19">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;23<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1166" width="1049" height="49.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/20">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;24<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1122" width="1049" height="43.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/21">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;25<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1078" width="1049" height="43.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/22">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;26<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="1029" width="1049" height="48.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/23">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;27<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="980" width="1049" height="48.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/24">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;28<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="931" width="1049" height="48.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/25">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;29<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="882" width="1049" height="48.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/26">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;30<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="833" width="1049" height="48.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/27">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;31<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="789" width="1049" height="43.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/28">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;32<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="745" width="1049" height="43.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/29">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;33<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="694" width="1049" height="50.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/30">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;34<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="643" width="1049" height="50.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/31">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;35<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="596" width="1049" height="46.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/32">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;36<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="549" width="1049" height="46.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/33">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;37<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="502" width="1049" height="46.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/34">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;38<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="455" width="1049" height="46.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/35">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;39<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="413" width="1049" height="41.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/36">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;40<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="363" width="1049" height="49.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/37">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;41<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="316" width="1049" height="49.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/38">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;42<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="271" width="1049" height="49.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/39">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;43<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 26): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1208.5" y="223" width="1049" height="49.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/40">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;44<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 18): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1480" y="171" width="780" height="52" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/bfloor/41">
                                <rect id="<?php if ($floor5 < 26): ?>სართული&nbsp;45<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 8): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="1890" y="120" width="370" height="52" stroke-miterlimit="10"/>
                            </a>

                            <!-- A Block -->
                            <polygon id="მალე გაყიდვაში" class="sold-polygon"  points="1077 632 1121 836 1115.83 2125.17 1079.67 2125.17 410.67 2125 410.67 680 667.13 682.12 664.13 659.62 679.12 641.62 698.62 632 1077 632"/>
                            <!-- <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;1<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="2084.5" width="669.5" height="41" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;2<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="2043.5" width="669.5" height="41" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;3<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="2002.5" width="669.5" height="41" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;4<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1957" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;5<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1914" width="669.5" height="41.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;6<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1863" width="669.5" height="49.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;7<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1816" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;8<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1770" width="669.5" height="44.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;9<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1721" width="669.5" height="47.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;10<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1678.5" width="669.5" height="41" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;11<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1631" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;12<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1583" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;13<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1533" width="669.5" height="47.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;14<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1489.5" width="669.5" height="41" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;15<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1442" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;16<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1394" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;17<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1351" width="669.5" height="40.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;18<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1303" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;19<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1257" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;20<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1211" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;21<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1165" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;22<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1119" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;23<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1073" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;24<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="1027" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;25<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="980" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;26<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="933" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;27<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="886" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;28<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="839" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;29<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="792" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;30<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="744" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;31<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="412.5" y="698" width="669.5" height="45.5" stroke-miterlimit="10"/>
                            </a>
                            <a href="/ka/floor/10">
                                <rect id="<?php if ($floor5 < 16): ?>სართული&nbsp;32<?php else: ?>გაყიდულია<?php endif; ?>" class="<?php if ($floor5 < 16): ?>enabled<?php else: ?>sold-polygon<?php endif; ?>" x="662" y="642" width="420" height="45.5" stroke-miterlimit="10"/>
                            </a> -->
                        </svg>
                        <div class="description"></div>
                    </div> <!-- End: .container -->
                </div> <!-- End: .inner-container -->



                <div class="inner-container for-mobile">
                    <a href="#blockB" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button" style="top: 0; right:0; height: 100%; width: 60%;"></a>
                    <div id="blockB" class="zoom-anim-dialog mfp-hide" style="text-align:center;margin-top: -100px;">
                            <h3 class="header">
                                <i class="icon icon-arrow-carrot-down"></i>
                                    აირჩიეთ სართული
                                <i class="icon icon-arrow-carrot-down"></i>
                            </h3>
                            <h3 class="header">B ბლოკი</h3>
                            <?php  foreach ($bfloors as $floor): ?>
                                <?php  if ($floor->floor == 100 || $floor->floor == 200 || $floor->floor == 300 || $floor->floor == 400 || $floor->floor == 500 
                                || $floor->floor == 0 || $floor->floor == 1 || $floor->floor == 2 || $floor->floor == 3 || $floor->floor == 41): ?>
                                
                                <?php else: ?>
                                    <a href="/ka/bfloor/<?=$floor->id?>" class="floorbutton">სართული <?=$floor->floor?></a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                    </div>

                    <a href="#blockA" class="popup-with-move-anim bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button" style="top: 0; height: 100%; width: 40%;"></a>
                    <div id="blockA" class="zoom-anim-dialog mfp-hide" style="text-align:center;margin-top: -100px;">
                            <h3 class="header">
                                <i class="icon icon-arrow-carrot-down"></i>
                                    მალე გაყიდვაში
                                <i class="icon icon-arrow-carrot-down"></i>
                            </h3>
                            <!-- <h3 class="header">A ბლოკი</h3>
                            <?php  foreach ($floors as $floor): ?>
                                <?php  if ($floor->floor == 100 || $floor->floor == 200 || $floor->floor == 300 || $floor->floor == 400 || $floor->floor == 500 
                                || $floor->floor == 0 || $floor->floor == 1 || $floor->floor == 2 || $floor->floor == 3 || $floor->floor == 41 || $floor->id == 13): ?>
                                
                                <?php else: ?>
                                    <a href="/ka/floor/<?=$floor->id?>" class="floorbutton">სართული <?=$floor->floor?></a>
                                <?php endif; ?>
                            <?php endforeach; ?> -->
                    </div>
                </div>
            </div>
            <!--End: 1st Page Slider Section
                - HOME PAGE
            ====================================-->

            <!--Start: 2nd Page Slider Section
                - SERVICES PAGE
            ====================================-->
            <div class=" section section-item combine-section hide-overlay overflow semi-dark-background" data-heading="">

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
                                        <p class="sub-heading">კომპლექსის შესახებ</p>
                                    </div>
                                </div>
                                <div class="overflow">
                                    <div class="section-heading-outer p-l-50 p-r-50">
                                        <h2 class="section-heading">Calligraphy Towers</h2>
                                        <h3 class="section-heading min-heder">
                                        ბათუმში მდებარე, პრემიუმ კლასის კომპლექსი Calligraphy Towers</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Section Heading -->
                            <div class="clearfix"></div>

                            <div class="each-services-outer overflow section-separator sp-bottom">
                                <div class="main-conteiner">
                                    <div class="image-block">
                                        <img src="/public/images/gallery/1.1.jpg" alt="">
                                    </div>
                                    <div class="info-block">
                                        <div class="overflow">
                                            <div class="title-outer">
                                            <?php if ($aboutus):  ?>
                                                <?php foreach ($aboutus as $about):  ?>
                                                    <div style="color:#fff"><?=$about->content_geo?></div>
                                                <?php endforeach;?>
                                            <?php endif;  ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow m-t-30 middle-objects" style="padding-bottom: 30px; border-bottom: 1px solid #484848;">
                                    <div class="btn-form-outer">  <!-- Button Area -->
                                        <a style="font-family: CITI-MT-Regular;" href="#towers-more-info" class="btn right-icon btn-services">მეტის ნახვა <i class="icon icon-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="btn-form-outer">
                                    <div class="number-info">
                                        <div class="number-info--block">
                                            <span>1036</span>
                                            <span>აპარტამენტი</span>
                                        </div>
                                        <div class="number-info--block">
                                            <span>1630 ₾</span>
                                            <span>მინიმალური ფასი</span>
                                        </div>
                                        <div class="number-info--block">
                                            <?php $sold = 0 ?>
                                            <?php foreach ($apartments as $apartment): ?>
                                                <?php if ($apartment['status'] == 1): ?>
                                                    <?php $sold = $sold + 1 ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>

                                            <?php foreach ($bapartments as $apartment): ?>
                                                <?php if ($apartment['status'] == 1): ?>
                                                    <?php $sold = $sold + 1 ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                            <span><?=$sold?></span>
                                            <span>უკვე გაყიდულია</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: .each-services-outer
                            ===================================-->

                            <div class="services-full-view">
                                <div class="services-details" id="towers-more-info">
                                    <div class="services-inner relative overflow">
                                        <!-- Content Area -->
                                        <div class="col-xs-12">
                                            <div class="services-content-outer">
                                                <div class="line-outer" style="margin-left: 50%;">
                                                    <div class="line"></div>
                                                </div>
                                                <div class="head-image">
                                                    <img src="/public/images/gallery/1.1-scale.jpg" alt="">
                                                    <div class="logo">
                                                        <img src="/public/images/gallery/logo2.png" alt="">
                                                    </div>
                                                    <div class="back-button-outer overflow" style="background-color: rgba(28, 9, 9, 0.80); border-radius: 10px;padding: 10px;">
                                                        <a href="#" class="btn btn-services-back btn-mask"><i class="icon icon-arrow-carrot-left-alt2"></i></a>
                                                    </div>
                                                </div>
                                                <div class="middle-block">
                                                    <div class="text-block">
                                                        <div class="overflow">
                                                            <div class="pera-outer">
                                                                <p>
                                                               
                                                                    კომპლექსის თანამედროვე ინფრასტრუქტურა სრულად უზრუნველყოფს მყიდველის შემოსავალსა და ფინანსურ სტაბილურობას.<br><br>
                                                                    <strong>Calligraphy Towers</strong>-ში აპარტამენტის შეძენისას ,თქვენ აკეთებთ ინვესტიციას მუდმივად მზარდ უძრავ ქონებაში, ხოლო მისი გაქირავებით იღებთ გარანტირებულ სტაბილურ შემოსავალს.<br><br>
                                                                    შენობას უნიკალრს ხდის  გრანდიოზული მასშტაბი შერწყმული  5* ინფრასტრუქტურასთან,რომელიც აწესებს მომსახურეობის, მართვისა და მშენებლობის მაღალ სტანდარტებს. <br><br>
                                                                    <strong>Calligraphy Tower</strong> არქიტექტურულ და საინჟინრო პროექტირებაში ჩართულნი არიან საერთაშორისო საპროექტო-საინჟინრო ორგანიზაციები. შენობის სავენტელაციო ფასადს ამზადებს კომპანია მრავალწლიანი გამოცდილებით -SPS GROUP<br><br>
                                                                    <strong>ჩვენი უპირატესობა:</strong> <br>
                                                                    <strong>Calligraphy Towers</strong>-ში აპარტამენტის შეძენისას , მესაკუთრეები ღებულობენ  ხედის უცვლელობის 100%-იან გარანტიას .<br><br>
                                                                    მფლობელს უნარჩუნდება საუკეთესო ხედები წლების შემდეგაც კი, კოპლექსის წინ ახალი კორპუსის აშენების  არანაირი პერსპექტივა არ არსებობს.<br><br>
                                                                    კომლექსი  შედგება 4 ბლოკისგან- 3 ცათამბჯენისგან Calligraph: A-Tower, B-Tower, C-Tower და სამსართულიანი პლატფორმა D,  საერთო ინფრასტრუქტურით<br><br>
                                                                    “Calligraph A. Tower” – ში  განთავსდება  მსოფლიო დონის  ცნობილი  ბრენდული სასტუმრო ინფრასტრუქტურა მოიცავს ყველაფერს რაც საჭიროა აქტიური დასვენებისთვის:<br><br>

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="overflow m-t-15">
                                                            <div class="list-outer">
                                                                <div class="list col-sm-6">
                                                                    <div class="row">
                                                                        <i class="icon icon-icon-ribbon"></i> სავაჭრო  ცენტრი
                                                                    </div>
                                                                </div>
                                                                <div class="list col-sm-6">
                                                                    <div class="row">
                                                                        <i class="icon icon-icon-ribbon"></i> კინოთეატრი Calligraph Cinema 
                                                                    </div>
                                                                </div>
                                                                <div class="list col-sm-6">
                                                                    <div class="row">
                                                                        <i class="icon icon-icon-ribbon"></i> Piano & Lounge Bar ცოცხალი მუსიკით
                                                                    </div>
                                                                </div>
                                                                <div class="list col-sm-6">
                                                                    <div class="row">
                                                                        <i class="icon icon-icon-ribbon"></i> Coworking ზონა
                                                                    </div>
                                                                </div>
                                                                <div class="list col-sm-6">
                                                                    <div class="row">
                                                                        <i class="icon icon-icon-ribbon"></i> ღია და დახურული აუზი
                                                                    </div>
                                                                </div>
                                                                <div class="list col-sm-6">
                                                                    <div class="row">
                                                                        <i class="icon icon-icon-ribbon"></i> SPA ცენტრი
                                                                    </div>
                                                                </div>
                                                                <div class="list col-sm-6">
                                                                    <div class="row">
                                                                        <i class="icon icon-icon-ribbon"></i> ფიტნეს დარბაზი
                                                                    </div>
                                                                </div>
                                                                <div class="list col-sm-6">
                                                                    <div class="row">
                                                                        <i class="icon icon-icon-ribbon"></i> ფიტნეს დარბაზი
                                                                    </div>
                                                                </div>
                                                                <div class="list col-sm-6">
                                                                    <div class="row">
                                                                        <i class="icon icon-icon-ribbon"></i> 300 საპარგინგე  ადგილზე  მეტი 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="overflow">
                                                        <div class="title-outer">
                                                            <div class="zoom-gallery">
                                                                <a href="/public/images/gallery/1.jpg" title="Calligraphy Towers">
                                                                    <img src="/public/images/gallery/1.jpg" width="180" height="180">
                                                                </a>
                                                                <a href="/public/images/gallery/5.jpg" title="Calligraphy Towers Apartment">
                                                                    <img src="/public/images/gallery/5.jpg" width="180" height="180">
                                                                </a>
                                                                <a href="/public/images/gallery/7.jpg" title="Calligraphy Towers Apartment">
                                                                    <img src="/public/images/gallery/7.jpg" width="180" height="180">
                                                                </a>
                                                                <a href="/public/images/gallery/2.jpg" title="Calligraphy Towers">
                                                                    <img src="/public/images/gallery/2.jpg" width="180" height="180">
                                                                </a>
                                                                <a href="/public/images/gallery/3.jpg" title="Calligraphy Towers">
                                                                    <img src="/public/images/gallery/3.jpg" width="180" height="180">
                                                                </a>
                                                                <a href="/public/images/gallery/6.jpg" title="Calligraphy Towers">
                                                                    <img src="/public/images/gallery/6.jpg" width="180" height="180">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- End: .services-content-outer -->
                                        </div> <!-- End: Content Area -->
                                    </div> <!-- End: .services-inner -->
                                </div> <!-- End: .services-details -->
                            </div> <!-- End: .services-full-view -->

                        </div> <!-- End: .row -->
                    </div> <!-- End: .container -->
                </div> <!-- End: . -->

            </div>
            <!--End: 2nd Page Slider Section
                - Services PAGE
            ====================================-->

            <!--Start: 3nd Page Slider Section
                - SERVICES PAGE
            ====================================-->
            <div class=" section section-item combine-section hide-overlay overflow semi-dark-background" data-heading="">

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
                                        <p class="sub-heading">აპარტამენტები</p>
                                    </div>
                                </div>
                                <div class="overflow">
                                    <div class="section-heading-outer p-l-50 p-r-50">
                                        <h2 class="section-heading">აპარტამენტების ჩაბარების კონდიცია</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Section Heading -->
                            <div class="clearfix"></div>

                            <div class="each-services-outer overflow section-separator sp-bottom">
                                <div class="main-conteiner">
                                    <div class="image-block" style="width: 17%">
                                        <div class="real-videos" style="flex-direction: column; flex-wrap: nowrap">
                                            <a class="popup-360-1" style="margin: 0; margin-bottom: 5px; border-radius: 4px;" href="https://kuula.co/share/7cWqP?fs=1&vr=0&sd=1&autorotate=0.59&thumbs=1&chromeless=0&logo=0">
                                                <img src="/public/images/gallery/360-camera.png" alt="">
                                            </a>
                                            <a class="popup-360-2" style="margin: 0; margin-bottom: 5px; border-radius: 4px;" href="https://kuula.co/share/7cWPK?fs=1&vr=0&sd=1&autorotate=0.59&thumbs=1&chromeless=0&logo=0">
                                                <img src="/public/images/gallery/360-camera.png" alt="">
                                            </a>
                                            <a class="popup-360-3" style="margin: 0; margin-bottom: 5px; border-radius: 4px;" href="https://kuula.co/share/7cLHp?fs=1&vr=0&sd=1&autorotate=0.59&thumbs=1&chromeless=0&logo=0">
                                                <img src="/public/images/gallery/360-camera.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="info-block" style="width: 70%; padding-left: 0;">
                                        <div class="overflow">
                                            <div class="title-outer">
                                                <div class="js-img-compare">
                                                    <div style="display: none;">
                                                        <span class="images-compare-label">დასრულებული რემონტით</span>
                                                        <img src="/public/images/gallery/complete.jpg" alt="Before">
                                                    </div>
                                                    <div>
                                                        <span class="images-compare-label">თეთრი კარკასი</span>
                                                        <img src="/public/images/gallery/whitecarcase.jpg" alt="After">
                                                    </div>
                                                </div>

                                                <div style="display: flex; justify-content: center;">
                                                    <button class="js-front-btn remont-btn">დასრულებული რემონტით</button>
                                                    <button class="js-back-btn remont-btn">თეთრი კარკასი</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: .each-services-outer
                            ===================================-->

                        </div> <!-- End: .row -->
                    </div> <!-- End: .container -->
                </div> <!-- End: . -->

            </div>
            <!--End: 3nd Page Slider Section
                - Services PAGE
            ====================================-->

            <!--Start: 4rd Page Slider Section
                - PORTFOLIO PAGE 1
            ====================================-->
            <div class=" section section-item combine-section hide-overlay overflow semi-dark-background" data-heading="">

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
                                        <p class="sub-heading">მედია</p>
                                    </div>
                                </div>
                                <div class="overflow">
                                    <div class="section-heading-outer p-l-50 p-r-50">
                                        <h2 class="section-heading">Calligraphy Towers მედია</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Section Heading -->
                            <div class="clearfix"></div>

                            <div class="each-services-outer overflow section-separator sp-bottom">
                                <div class="main-conteiner">
                                    <div class="image-block" style="margin-right: 20px;">
                                        <div class="overflow">
                                            <div class="title-outer head-image">
                                                <div style="padding: 10px; text-align: center;">
                                                    <a href="/photos" class="btn" style="font-size: 16px;">ფოტოები</a>
                                                </div>
                                                <img style="max-height: 380px;border-radius: 60px;" src="/public/images/gallery/media-img.jpg" alt="">
                                                <div class="logo" style="display:flex; flex-direction: column;top: 48px; right: 0;">
                                                    <img src="/public/images/gallery/image-icon.png" alt="">
                                                </div>
                                                <div style="padding: 10px; text-align: center;">
                                                    <a href="/photos" class="btn btn-mask" style="font-size: 16px;">ყველა ფოტოს ნახვა <i class="icon icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-block">
                                        <div class="overflow">
                                            <div class="title-outer head-image">
                                                <div class="back-button-outer overflow" style="padding: 10px;text-align: center;">
                                                    <a href="#media-video" class="btn right-icon btn-services btn-mask" style="font-size: 16px;">ვიდეოები</a>
                                                </div>
                                                <img style="min-height: 380px;border-radius: 60px;" src="/public/images/gallery/media-vde.jpg" alt="">
                                                <div class="logo" style="display:flex; flex-direction: column; top: 48px; right: 0;">
                                                    <img src="/public/images/gallery/video-icon.png" alt="">
                                                </div>
                                                <div class="back-button-outer overflow" style="padding: 10px;text-align: center;">
                                                    <a href="#media-video" class="btn right-icon btn-services btn-mask" style="font-size: 16px;">ყველა ვიდეოს ნახვა <i class="icon icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: .each-services-outer
                            ===================================-->
                            <div class="services-full-view">
                                <div class="services-details" id="media-video">
                                    <div class="services-inner relative overflow">
                                        <!-- Content Area -->
                                        <div class="col-xs-12">
                                            <div class="middle-block">
                                                <div class="overflow" style="width: 100%">
                                                        <div class="title-outer" style="display: flex; justify-content: center; width:100%">
                                                            <div style="width: 80%; margin-top: 20%;">
                                                                <?php foreach ($media as $video): ?>
                                                                    <?php if ($video['video'] == ''): ?>
                                                                    <?php else: ?> 
                                                                        <iframe height="220" width="240"  
                                                                            src="https://www.youtube.com/embed/<?=$video['video']?>"> 
                                                                        </iframe>
                                                                    <?php endif; ?> 
                                                                <?php endforeach; ?>
                                                                <br>
                                                                <div style="background-color: rgba(28, 9, 9, 0.80); border-radius: 10px;padding: 10px;margin-bottom: 10px">
                                                                    <a style="width:100%;font-size:25px" href="#" class="btn btn-services-back btn-mask"><i class="icon icon-arrow-carrot-left-alt2"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div> <!-- End: Content Area -->
                                    </div> <!-- End: .services-inner -->
                                </div> <!-- End: .services-details -->
                            </div> <!-- End: .services-full-view -->

                        </div> <!-- End: .row -->
                    </div> <!-- End: .container -->
                </div> <!-- End: . -->

            </div>
            <!--End: 4rd Page Slider Section
                - PORTFOLIO PAGE 1
            ====================================-->



            <!--Start: 5th Page Slider Section
                - PORTFOLIO PAGE 2
            ====================================-->
            <div class=" section section-item combine-section hide-overlay overflow semi-dark-background" data-heading="">

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
                                        <p class="sub-heading">ხშირად დასმული კითხვები</p>
                                    </div>
                                </div>
                                <div class="overflow">
                                    <div class="section-heading-outer p-l-50 p-r-50">
                                        <h2 class="section-heading">FAQ. კითხვა — პასუხი</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Section Heading -->
                            <div class="clearfix"></div>

                            <div class="each-services-outer overflow section-separator sp-bottom">
                                <div class="main-conteiner">
                                    <div class="image-block" style="margin-right: 20px;width: 100%">
                                        <div class="overflow">
                                            <div class="title-outer">
                                                <div class="panel-group wrap" id="bs-collapse">

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-one">
                                                                შესაძლებელია  თუ არა  ინდივიდუალური დაგეგმარება?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-one" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            დიახ, ნებისმიერ მომხმარებელს სურვილისამებრ შეუძლია შეცვალოს შიდა დაგეგმარება
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-two">
                                                                მოქმედებს თუ არა შიდა უპროცენტო განვადება?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-two" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            დიახ, მოქმედებს შიდა 0 % -იანი განვადება 36 თვემდე პერიოდით, პირველადი შემოსატანი 30%
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-tree">
                                                                იბეგრება უძრავი ქონება გადასახადით?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-tree" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            არა
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-four">
                                                                შენდება თუ არა პროექტი  ახალი  რეგულაციების  გათვალისწინებით?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-four" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            ყველა პროექტი, რომელიც შენდება საქართველოში, პასუხობს სეისმომდგრადობის მოთხოვნებს, წინააღმდეგ შემთხვევაში მუნიციპალიტეტთან შეთანხმება შეუძლებელი
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-five">
                                                                იქნება თუ არა ბინების მართვა?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-five" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            კომპლექსი ახალი რეგულაციებით  შენდება, გამოყენებულ იქნება ენერგოეფექტური მინაპაკეტი, ცეცხლგამძლე ბლოკი, ვინტილირებადი ფასადი, ხმის დამხშობი იზოლაციით, Mitsubishi-ის  ფირმის ლიფტებით (ცეცხლგამძლე კაბინები).</br>
                                                            მშენებლობა ევროსტანდარტის მქონე ტექნოლოგიებით მიმდინარეობს, ვიყენებთ ავსტრიული ბრენდის - Doka -ს საყალიბე სისტემას,რაც გარანტირებულს ხდის მშენებლობის სიზუსტეს და საბოლოოდ უმაღლესი , ხარისხის პროდუქტის მიღებას.
                                                            კომპლექსი  აღიჭურვება თანამედროვე ევროპული სტანდარტების შესაბამისი მოქმედი ხანძარსაწინააღმდეგო სისტემით. 
                                                            სადარბაზო  მოპირკეთდება  ბუნებრივი ქვით.
                                                            შესასვლელი კარი რკინის აღიჭურვება ელექტრონული ჩამკეტით და ერთი უნივერსალური  ცეცხლგამძლე გასაღებით.
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-six">
                                                                უზრუნველყოფს  თუ არა კომპანია  აპარტამენტების მართვას და გაქირავებას ?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-six" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            კომპანია გთავაზობთ აპარტამენტების მართვას პირადი კაბინეტიდან: კომუნალური მომსახურებების გადახდა, შემოსავლის აღრიცხვა, გასამრჯელოს გამოტანა, კლიენტების მოზიდვის წყაროები, აპარტამენტების იჯარის საიტებთან ონლაინ-სინქრონიზატორი (Airbnb, Booking.com და ასზე მეტი საიტი მთელს მსოფლიოში). სრულად ეს ინფორმაცია თქვენს აპარტამენტებზე იქნება თქვენთვის გამჭირვალე და ხელმისაწვდომი ონლაინ.
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-seven">
                                                                როგორი მდგომარებით ბარდება ბინა?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-seven" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            ჩვენ  გაბარებთ  აპარტამანეტებს  თქვენთვის  სასურველ კონდიციაში : შავი კარკაკასით , თეთრი კარკასით  ან სრული რემონტით, ავეჯითა და ტექნიკით
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-8">
                                                                რა არის «თეთრი» და «შავი კარკასი»?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-8" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            თეთრი კარკასი - იგულისხმება შენობა რომლშიც იატაკი მოჭიმულია, ფანჯრები, რკინის შესასვლელი კარი, შიდა ტიხრები თქვენი პროექტისამებრ ამოყვანილი და შელესილი. წყლის და კანალიზაციის ძირითადი ვერტიკალური დგარები ბინაში შეყვანილი. </br>
                                                            უპირატესობები: თეთრი კარკასის ყიდვისას თქვენ, დაზოგავთ დრო და ძალისხმევას შავ სამუშაოებზე.</br>
                                                            შავი კარკასი - იგულისხმება ბინაში შესასვლელი რკინის კარი, მეტალოპლასტმასის კარფანჯარა, კომუნიკაცია მიყვანილი კარებამდე. უპირატესობა: დაბალი ფასი.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-9">
                                                                შეუძლია თუ არა უცხო ქვეყნის მოქალაქეს ბინის შეძენა საქართველოში?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-9" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            უცხო ქვეყნის მოქალაქეებს არ აქვს მნიშვნელობა რომელი ქვეყნის მოქალაქეები იქნებიამ შეუძლიათ უძრავი ქონების შეიძენა საქართველოში.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-10">
                                                                როგორი პირობებია საქართველოს რეზიდენტებსა და არარეზიდენტებზე, უძრავი ქონების გასაფორმებლად?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-10" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            უძრავი ქონების შეძენისას პირობები არის ერთნაირი, როგორც საქართველოს მოქალაქეებისათვის ასევე, სხვა ნებისმიერი ქვეყნის მოქალაქისთვის
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-11">
                                                                შესაძლებელია თუ არა ბინის დისტანციურად შეძენა?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-11" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            დიახ, შესაძლებელია. თქვენ უნდა გაეცნოთ, უძრავი ქონების ნასყიდობის ხელშეკრულებას, გააკეთოთ გადარიცხვა კომპანიის ანგარიშზე, კომპანიის წარმომადგენლები კი, მოგაწვდიან შესაბამის, დამადასტურებელ საბუთებსა და ჩეკებს. ამ პროცედურისთვის  დაგჭირდებათ, მხოლოდ  პირადობის მოწმობა ან საზღვარგარეთის პასპორტი.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-12">
                                                                რა პროცედურებია საჭირო საქართველოში მშენებარე სახლში ბინის შესაძენად?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-12" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            ბინის ყიდვა მშენებარე სახლში:</br>
                                                            1. ყიდვა-გაყიდვის წინასწარი ხელშეკრულების გაფომება სამშენებლო-დეველოპერულ კომპანიას (გამყიდველსა) და მყიდველს შორის.</br>
                                                            2. ხელშეკრულებით გათვალისწინებული გრაფიკის მიხედვით თანხის შემოტანა.</br>
                                                            3. საკუთრების დარეგისტრირება საჯარო რეესტრში. ბინის შეძენისას მშენებარე სახლში – ფორმდება ორი ხელშეკრულება ერთი წინასწარი და მეორე საბოლაო. წინასწარი ხელშეკრულება მოიცავს: - კომპანიის ვალდებულება ჩაბარდეს სახლი მითითებულ ვადებში და მდგომარეობაში, რომელიც მითითებულია ხელშეკრულებაში  - მხარეების ვალდებულები არიან სამომავლოდ საბოლაო ხელშეკრულება გააფორმონ. -წინასწარი ხელშეკრულების ხელის მოწერიდან საბოლაო ხელშეკრულების გაფორმებამდე მყიდველი ირეგისტრირებს ბინას როგორც სამომავლო მფლობელი. -საბოლაო ხელშეკრულების გაფორმების მომენტისთვის ორივე მხარემ უნდა შეასრულოს თავიანით მოვალეობები: კომპანია ააშენებს და ჩააბარებს სახლს კონტრაქტში მითითებულ ვადებში და მდგომარეობაში. მყიდველი ვალდებულია დაფაროს ბინის ღირებულება ბოლომდე. -ამის შემდეგ მოხდება ბინის შეძენის ხელშეკრულების დარეგისტრირება მყიდველის მიერ საჯარო რეესტრში როგორც საკუთრების.</br></br>

                                                            საჯარო რეესტრში რეგისტრაციისთვის საჭირო დოკუმენტები:</br>
                                                            1. პირადობის დამადასტურებელი მოწმობა </br>
                                                            2. ყიდვა-გაყიდვის ხელშეკრულება </br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-13">
                                                                რა ღირს საჯარო რეესტრის გაფორმების მომსახურება?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-13" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            გაფორმების ღირებულება და ვადები საჯარო რეესტრში: 4 სამუშაო დღე -50 ლარი
                                                            1 სამუშაო დღე -150 ლარი
                                                            ხელშეკრულების შეტანის დღეს გაფორმება – 200 ლარი
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of panel -->

                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#" href="#col-14">
                                                                რა ღირს კომუნალური გადასახადები საქართველოში?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="col-14" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                            - წყალი 1 ტონა  0,19 USD
                                                            - ნაგავი 1,13 USD
                                                            - ელექტრო ენერგია 1 კილოვატზე  0,06 USD
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end of panel -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: .each-services-outer
                            ===================================-->
                        </div> <!-- End: .row -->
                    </div> <!-- End: .container -->
                </div> <!-- End: . -->

            </div>
            <!--End: 5th Page Slider Section
                - PORTFOLIO PAGE 2
            ====================================-->

            <!--Start: 9th Page Slider Section
                - CONTACT US PAGE
            ====================================-->
            <div class=" section section-item combine-section hide-overlay overflow" data-heading="">
                <div class="overlay-color relative bg-image-2">

                    <div class="inner-container contact-us" id="contact">
                        <div class="container">
                            <div class="row">

                                <!-- Start: Section Heading -->
                                <div class="section-header col-sm-10 col-sm-offset-1">
                                    <div class="overflow">
                                        <div class="line-outer">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                    <div class="overflow">
                                        <div class="section-heading-outer m-b-15">
                                            <p class="sub-heading">დაგვიკავშირდით</p>
                                        </div>
                                    </div>
                                    <div class="overflow">
                                        <div class="section-heading-outer p-l-50 p-r-50">
                                            <h2 class="section-heading">დაგვიკავშირდით კონსულტაციისათვის</h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Section Heading -->

                                <div class="clearfix"></div>

                                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 overflow">
                                    <div class="row single-form-outer">
                                        <h6 class="success dark-background">თქვენი შეტყობინება გადმოგზავნილია, მალე გიპასუხებთ</h6>
                                        <h6 class="error red-text"></h6>
                                        <form id="contact-form" method="post" class="dark-background single-form">

                                            <div class="col-xs-12">
                                                <div class="input-outer">
                                                    <div class="group relative">
                                                        <input name="phone" class="contact-name form-control" id="phone" type="text"  required="">
                                                        <label class="input-label" for="contact-name">
                                                            <span class="label-text">ტელეფონი</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12">
                                                <div class="input-outer ">
                                                    <div class="group relative">
                                                        <input name="email" class="contact-email form-control" id="email" type="email"  required="">
                                                        <label class="input-label" for="contact-email">
                                                            <span class="label-text">ელ.ფოსტა</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-xs-12">
                                                <div class="input-outer ">
                                                    <div class="group relative">
                                                        <textarea class="contact-message form-control" name="message" id="message" rows="3" required=""></textarea>
                                                        <label class="input-label" for="contact-message">
                                                            <span class="label-text">შეტყობინება</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Subject Button -->
                                            <div class="btn-form text-center col-xs-12">
                                                <div class="button-outer relative" style="text-align: right;">
                                                    <button class="btn btn-fill right-icon">გაგზავნა <i class="icon icon-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </form>

                                    </div> <!-- /#testimonials-1 -->
                                </div> <!-- End: .col-xs-12 -->

                                <div class="clearfix"></div>

                                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 contact-footer" style="background-color: rgb(38 50 56 / 85%);;">
                                    <div class="row">

                                        <div class="about col-sm-1 m-t-15" style="padding-right: 0;">

                                            <div class="overflow">
                                                <div class="logo-outer">
                                                    <a href="https://realpalace.ge" class="logo-link">
                                                        <img src="/public/images/grandmaison.png" alt="" class="img-responsive logo">
                                                    </a>
                                                </div>
                                            </div>

                                        </div> <!-- End: .about -->
                                        <div class="other-link col-sm-11">
                                            <div class="row">

                                                <div class="each-section col-sm-4 col-xs-12">

                                                    <div class="overflow">
                                                        <p class="title">ოფისის მისამართი</p>
                                                    </div>
                                                    <ul class="nav">
                                                        <li class="overflow">
                                                            <div class="li-inner">
                                                                <span class="btn-mask">საქართველო, ქ. ბათუმი, ჟიული შარტავას #18</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div> <!-- End: .each-section -->
                                                <div class="each-section col-sm-4 col-xs-12">

                                                    <div class="overflow">
                                                        <p class="title">დაგვიკავშირდით</p>
                                                    </div>
                                                    <ul class="nav">

                                                        <li class="overflow">
                                                            <div class="li-inner">
                                                                <a href="callto:+995571075555" class="btn-mask">*2806 (ISRAEL)</a>
                                                            </div>
                                                        </li>
                                                        <li class="overflow">
                                                            <div class="li-inner">
                                                                <a href="callto:+995571075555" class="btn-mask">+995 571 07 55 55</a>
                                                            </div>
                                                        </li>
                                                        <li class="overflow">
                                                            <div class="li-inner">
                                                                <a href="callto:+995571025555" class="btn-mask">+995 571 02 55 55</a>
                                                            </div>
                                                        </li>
                                                        <li class="overflow">
                                                            <div class="li-inner">
                                                                <a href="mailto:info@calligraphy-towers.com" class="btn-mask">info@calligraphy-towers.com</a>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                </div> <!-- End: .each-section -->
                                                <div class="each-section col-sm-4 col-xs-12">

                                                    <div class="overflow">
                                                        <p class="title">სოც.ქსელები</p>
                                                    </div>
                                                    <ul class="nav">
                                                        <li class="overflow">
                                                            <div class="li-inner">
                                                                <ul class="nav social-icon">
                                                                    <li><a target="_blank" href="https://www.facebook.com/calligraphytowersbatumi/"><i class="icon icon-social-facebook"></i></a></li>
                                                                    <li><a target="_blank" href="https://www.instagram.com/calligraphytowers/"><i class="icon icon-social-instagram"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                </div> <!-- End: .each-section -->

                                            </div>

                                        </div> <!-- End: .other-link -->
                                    </div> <!-- End: .row -->
                                </div> <!-- End: .contact-footer -->
                                <iframe src="https://www.google.com/maps/d/embed?mid=1V5UIFZT29rmUBEMCkpksH6PyO5T89nhh" width="100%" height="600"></iframe>
                            </div> <!-- End: .row -->
                        </div> <!-- End: .container -->
                    </div> <!-- End: .inner-container -->

                </div>
            </div>
            <!--End: 9th Page Slider Section
                - CONTACT US PAGE
            ====================================-->


        </div> <!-- End: .row -->
    </div> <!-- End: .container -->
</section>

