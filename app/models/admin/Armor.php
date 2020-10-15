<?php


namespace app\models\admin;


use app\models\AppModel;
use ibuild\App;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class Armor extends AppModel
{
    public $attributes = [
        'person' => '',
        'mobile' => '',
        'email' => '',
        'floor' => '',
        'apartment' => '',
        'duration' => '',
    ];

    public static function mailOrder($apartment, $user_email, $person, $mobile, $duration, $durationENG, $durationRUS) {
        // Create the Transport
        $transport = (new Swift_SmtpTransport(App::$app->getProperty('smtp_host'), App::$app->getProperty('smtp_port'),
            App::$app->getProperty('smtp_protocol')))
            ->setUsername(App::$app->getProperty('smtp_login'))
            ->setPassword(App::$app->getProperty('smtp_password'))
        ;
        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        // Create a message
        $message_client = (new Swift_Message("აპარტამენტი N{$apartment}-დაჯავშნის ინსტრუქცია"))
            ->setFrom([App::$app->getProperty('smtp_login') => App::$app->getProperty('brand_name')])
            ->setTo($user_email)
            ->setBody("მოგესალმებით, <br>
თქვენი მოთხოვნა აპარტამენტი <b>N {$apartment}</b>-ის დაჯავშნა <b>{$duration}</b> მიღებულია. <br>
გთხოვთ ჯავშანის გასააქტიურებლად მიყვეთ ქვემოთ მოყვანილ ინსტრუქციას და გადაიხადოთ შესაბამისი თანხა. <br>
დაჯავშნის თანხა შედის ბინის სრულ ღირებულებაში <br><br>

ქვემოთ მოყვანილ ანგარშზე ჩარიცხეთ ჯავშანის თანხა (ექვივალენტი ლარში) {$duration} და განხორციელებული ჩარიცხვის სქრინი გადმოაგზავნეთ მეილზე: realpalace2012@gmail.com<br>
<b><i>საბანკო რეკვიზიტები ეროვნულ ვალუტაში</i></b> <br>
მიმღების სახელი:	<b>შპს REAL PALACE</b> <br>
ანგარიშის ნომერი (ლარი): <b>GE81TB7648536050100001</b> <br>
მიმღების ბანკი: <b>ს.ს. „თიბისი ბანკი“</b> <br>
ბანკის კოდი: <b>TBCBGE22</b>

<br><br><br>


Здравствуйте, <br>
ваш запрос на бронирование апартамента <b>N {$apartment}</b> на <b>{$durationRUS}</b> принят. <br>
Для активации бронирования просим следовать инструкциям и оплотить нужную сумму. <br>
Стоимость бронирования входить в полную стоимость квартиры <br><br>

Переведите сумму бронирования на указанный ниже счет (эквивалент в лари) {$durationRUS} и отправьте скрин успешного зачисления по электронной почте: realpalace2012@gmail.com<br>
<b> <i> Банковские реквизиты в национальной валюте </i> </b><br>
Имя получателя: <b> LTD Grand Maison  </b><br>
Номер счета (GEL): <b> GE81TB7648536050100001 </b><br>
Банк получателя: <b> JSC TBC BANK </b><br>
Код банка: <b> TBCBGE22 </b> 

<br><br><br>


Welcome, <br>
Your request for an apartment <b> N {$apartment} </b> <b> {$durationENG} </b> has been armored. <br>
Please follow the instructions below to activate your reservation and pay the appropriate amount. <br>
Reservation fee included in full apartment price <br><br>

Transfer your reservation amount (equivalent to GEL) {$durationENG} and send the transfer screen to: realpalace2012@gmail.com<br>
<b> <i> Bank Details of National Currency </i> </b><br>
Name of Beneficiary: <b> Grand Maison  LTD </b><br>
Account number (GEL): <b> GE81TB7648536050100001 </b><br>
Beneficiary’s Bank: <b> JSC TBC Bank </b><br>
Bank code: <b> TBCBGE22 </b>", 'text/html')
        ;

        $message_admin = (new Swift_Message("კლიენტმა '{$person}' დაჯავშნა აპარტამენტი N{$apartment}"))
            ->setFrom([App::$app->getProperty('smtp_login') => App::$app->getProperty('brand_name')])
            ->setTo(App::$app->getProperty('admin_email'))
            ->setBody("კლიენტმა <b>{$person}</b> დაჯავშნა აპარტამენტი <b>N{$apartment}</b>, ხანგრძლივობით <b>{$duration}</b>,<br> ელ.ფოსტა: <b>{$user_email}</b><br> ტელეფონი: <b>{$mobile}</b><br>", 'text/html')
        ;

        // Send the message to client
        $result = $mailer->send($message_client);
        $result = $mailer->send($message_admin);
    }
}