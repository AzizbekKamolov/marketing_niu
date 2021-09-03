<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/agreement.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    {{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"--}}
    {{--          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">--}}
</head>
<body>
@php

function yuzlik($yuz){
          $yuz = intval($yuz);
          $ar_mln = array(
          '0' => '',
          '1' => 'ming',
          '2' => 'million'
        );
        $ar_son = array(
          '0' => '',
          '1' => 'bir',
          '2' => 'ikki',
          '3' => 'uch',
          '4' => 'to`rt',
          '5' => 'besh',
          '6' => 'olti',
          '7' => 'yetti',
          '8' => 'sakkiz',
          '9' => 'to`qqiz',
        );
        $ar_on = array(
          '0' => '',
          '1' => 'o`n',
          '2' => 'yigirma',
          '3' => 'o`ttiz',
          '4' => 'qirq',
          '5' => 'ellik',
          '6' => 'oltmish',
          '7' => 'yetmish',
          '8' => 'sakson',
          '9' => 'to`qson'
        );
        if ($yuz > 99) {
          $birlar = $yuz%10;
          $bb = $yuz/10;
          $onlar = $bb%10;
          $bb = $bb/10;
          $yuzlar = $bb%10;
          $text = $ar_son[$yuzlar].' yuz '.$ar_on[$onlar].' '.$ar_son[$birlar];
        }
        elseif($yuz<100 && $yuz > 9){
          $birlar = $yuz%10;
          $bb = $yuz/10;
          $onlar = $bb%10;
          $text = $ar_on[$onlar].' '.$ar_son[$birlar];
        }
        elseif($yuz>0 && $yuz < 10){
          $text = $ar_son[$yuz];
        }
        else{
          $text = '';
        }

          return $text;
}
    function convert_to_word($number){
        $result = number_format($number , '2');
        $result = explode('.', $result);
        $bir = explode(',' , $result[0]);
        $re_bir = array_reverse($bir);
        $ar_mln = array(
          '0' => '',
          '1' => 'ming',
          '2' => 'million',
          '3' => 'milliard'
        );
        $ar_son = array(
          '0' => '',
          '1' => 'bir',
          '2' => 'ikki',
          '3' => 'uch',
          '4' => 'to`rt',
          '5' => 'besh',
          '6' => 'olti',
          '7' => 'yetti',
          '8' => 'sakkiz',
          '9' => 'to`qqiz',
        );
        $ar_on = array(
          '0' => '',
          '1' => 'o`n',
          '2' => 'yigirma',
          '3' => 'o`ttiz',
          '4' => 'qirq',
          '5' => 'ellik',
          '6' => 'oltmish',
          '7' => 'yetmish',
          '8' => 'sakson',
          '9' => 'to`qson'
        );

        $ar_text = [];
        $i = 0;
        foreach ($re_bir as $key => $value) {
          // echo $value%10;
          if (yuzlik($value) != '') {

          $ar_text[$i] = yuzlik($value).' '.$ar_mln[$key].' ';
          }
          else{
            $ar_text[$i] = '';
          }
          // echo yuzlik($value).' '.$ar_mln[$key].' ' ;
          $i++;
        }
        $ress = array_reverse($ar_text);
        $ress = implode(' ', $ress);
        return $ress;
    }

     function get_month_name($start_month){

        if ($start_month == "01") {
            $start_month = "Yanvar";
        }
        if ($start_month == "02") {
            $start_month = "Fevral";
        }
        if ($start_month == "03") {
            $start_month = "Mart";
        }
        if ($start_month == "04") {
            $start_month = "Aprel";
        }
        if ($start_month == "05") {
            $start_month = "May";
        }
        if ($start_month == "06") {
            $start_month = "Iyun";
        }
        if ($start_month == "07") {
            $start_month = "Iyul";
        }
        if ($start_month == "08") {
            $start_month = "Avgust";
        }
        if ($start_month == "09") {
            $start_month = "Sentabr";
        }
        if ($start_month == "10") {
            $start_month = "Oktabr";
        }
        if ($start_month == "11") {
            $start_month = "Noyabr";
        }
        if ($start_month == "12") {
            $start_month = "Dekabr";
        }
        return $start_month;
    }

$month = get_month_name(date('m'));
$day = date('d');
    @endphp
<style>
    body {
        font-family: DejaVu Sans, sans-serif !important;
    }
</style>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 ">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center text-bold">
                <h4 class="text-bold">
                    Talabalar turar joyidan xona va jihozlar berish to’g’risida
                </h4>
                <h4 class="text-bold">SHARTNOMA №________</h4>
            </div>
            <div class="col-md-3"></div>
            <div style="display: inline-block; width: 49%" class="" >
                <span>2021 yil “{{$day}}” {{$month}}</span>
            </div>
            <div style="display: inline-block; width: 49%" class=" text-right">
                <span>Toshkent shahri</span>
            </div>
            <div class="col-md-12 mt-1 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp Toshkent davlat yuridik universiteti nomidan O’zbekiston Respublikasi adliya
                    vazirining 441-шт-son buyrug’iga asosan harakat qiluvchi rektor v.v.b. I.Rustambekov keyingi
                    o’rinlarda “Universitet” deb nomlanuvchi bir tarafdan va <b>{{$student->birthday}}</b> yilda
                    tug’ilgan, pasport seriyasi
                    <b>{{$student->passport_seria}}</b> raqami <b>{{$student->passport_number}}</b>, universitet
                    talabasi <b>{{$student->fio()}}</b> keyingi
                    o’rinlarda “Talaba” deb nomlanuvchi ikkinchi tarafdan, keyingi o’rinlarda birgalikda “Taraflar” deb
                    nomlanuvchi, ushbu shartnomani quyidagilar haqida tuzdilar.

                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    I. Shartnoma mazmuni
                </h4>
            </div>
            <div class="col-md-12 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.1.</b> Universitet belgilangan tartibda va shartlarda talabaga
                    Talabalar turar
                    joyidan xona va jihozlarni berish, umumiy foydalanishdagi joylardan foydalanish imkoniyatini
                    yaratish, talaba esa shartnomada belgilangan haqni o’z vaqtida to’lash hamda Talabalar turar joyida
                    belgilangan tartib va qoidalarga rioya etish majburiyatini oladi.
                </p>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.2.</b> Talabalar turar joyidan talabaga vaqtinchalik yashash va
                    foydalanish
                    uchun mazkur shartnomaning 1-ilovasida ko’rsatilgan xona hamda jihozlar beriladi, shartnoma muddati
                    tugaganidan so’ng Talabalar turar joyi mudiriga xona va jihozlarni but, toza va ozoda holda
                    2-ilovaga muvofiq qaytaradi.
                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    II. Taraflarning huquq va majburiyatlari
                </h4>
            </div>
            <div class="col-md-12 mb-1 page-break">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.1.</b> Universitet quyidagi huquqlarga ega:
                    talabalarning yashash xonalari toza va ozodaligini nazorat qilish va yashash sharoitlarini muntazam
                    ravishda tekshirib turish;
                    <br> &nbsp &nbsp &nbsp &nbsp Talabalar turar joyi hayotida faol ishtirok etayotgan namunali xulqli
                    talabalarni rag’batlantirish;
                    <br> &nbsp &nbsp &nbsp &nbsp Talabalar turar joyida belgilangan tartib va qoidalar talaba tomonidan
                    buzilganida yoki
                    majburiyatlar bajarilmaganda ogohlantirish yoki belgilangan tartib qo’pol ravishda buzilganda
                    shartnomani bir tomonlama bekor qilish va Talabalar turar joyidan chiqarib yuborish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.2.</b> Universitet quyidagi majburiyatlarni o’z zimmasiga oladi:
                    belgilangan tartibda xona va jihozlarni o’z vaqtida talabaga foydalanishga berish;
                    xonani joriy va kapital ta’mirlash;
                    talabaga berilgan jihozlarning yaroqligini doimiy nazorat qilish;
                    tarbiyaviy, madaniy hamda sport-sog’lomlashtirish tadbirlarini tashkil etish;
                    yozgi ta’til davrida Talabalar turar joylaridagi umumiy foydalanish joylarini joriy ta’mirdan
                    chiqarish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.3.</b> Talabaning huquqlari:
                    <br> &nbsp &nbsp &nbsp &nbsp Talabalar turar joyidagi jihozlardan foydalanish;
                    foydalanishga yaroqsiz jihozlar yangilanishini, maishiy foydalanishda yuzaga kelgan kamchiliklarni
                    bartaraf etishni so’rab murojaat qilish;
                    <br> &nbsp &nbsp &nbsp &nbsp Talabalar turar joyida o’tkaziladigan tarbiyaviy, madaniy hamda
                    sport-sog’lomlashtirish tadbirlarida
                    ishtirok etish;
                    <br> &nbsp &nbsp &nbsp &nbsp Talabalar Kengashi orqali talabalar turar joyida mavjud sharoitlarni
                    takomillashtirish, madaniy
                    hordiq olishni tashkil etish masalalarini hal etishda ishtirok etish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.4.</b> Talaba quyidagi majburiyatlarni o’z zimmasiga oladi:
                    <br> &nbsp &nbsp &nbsp &nbsp Talabalar turar joyi Ichki tartib qoidalari (keyingi o’rinlarda – ichki
                    tartib qoidalari)ga qat’iy
                    amal qilish;
                    <br> &nbsp &nbsp &nbsp &nbsp Navbatchilik jadvaliga binoan xonalarda, qavatlarda, umumiy foydalanish
                    joylarida (hojatxona,
                    yuvinish xonasi, oshxona va boshqa joylarda) navbatchilik qilish;
                    <br> &nbsp &nbsp &nbsp &nbsp umumiy foydalanish joylari, yashash xonalari hamda dam olish joylarida
                    namunali tozalikni tashkil
                    etish, undagi jihozlardan to’g’ri va unumli foydalanish;
                    <br> &nbsp &nbsp &nbsp &nbsp Talabalar turar joyi mol-mulkidan to’g’ri va unumli foydalanish va
                    zarar yetkazmaslik;
                    energiya iste’mol qiluvchi asbob va uskunalardan oqilona foydalanish qoidalariga rioya qilish;
                    <br> &nbsp &nbsp &nbsp &nbsp yashash xonasi va umumiy foydalanish joylarini har doim saranjom
                    tutish;
                    <br> &nbsp &nbsp &nbsp &nbsp derazadan chiqindi va boshqa narsalarni tashlamaslik;
                    <br> &nbsp &nbsp &nbsp &nbsp Talabalar turar joyida yashayotgan boshqa talabalar bilan samimiy va
                    ahil munosabatda bo’lish;
                    eshik qulflarini Talabalar turar joyi mudiri ruxsatisiz almashtirmaslik;
                    Talabalar turar joyida o’tkaziladigan hashar, ko’kalamzorlashtirish va obodonlashtirish ishlarida
                    muntazam va faol qatnashish;
                    <br> &nbsp &nbsp &nbsp &nbsp o’qishni tugatgach yoki talabalar safidan chiqarilgan hollarda bir
                    hafta muddatda, shuningdek,
                    Talabalar turar joyidan uzoq muddatga ketishdan oldin (yozgi va qishki ta’tilga, dam olishga,
                    amaliyotga) jihozlarni va xona kalitini Talabalar turar joyi mudiriga topshirish;
                    <br> &nbsp &nbsp &nbsp &nbsp yashash xonasida kir yuvmaslik, energiya tarmoqlari (o’tkazgichlar)ni
                    o’z xohishicha
                    o’zgartirmaslik, ulanmaslik va qo’shimcha yoritgich o’rnatmaslik;
                    <br> &nbsp &nbsp &nbsp &nbsp yashash xonasida orgtexnika jihozlari, jumladan nusxa ko’chirish,
                    rangli va rangsiz printer hamda
                    turli nashriyot asbob-uskunalarini ishlatmaslik (noutbuk, planshetlar bundan mustasno);
                    <br> &nbsp &nbsp &nbsp &nbsp xona devorlari ko’rinishini o’zgartirmaslik, ovoz chiqaruvchi
                    qurilmalar ovozini va boshqa ovozlarni
                    xona tashqarisidan eshitilmasligini ta’minlash va musiqa asboblarini chalmaslik;
                    <br> &nbsp &nbsp &nbsp &nbsp xavfli va yong’in chiqarishi mumkin bo’lgan moddalar, tegishli
                    tekshiruvdan o’tmagan uskunalardan
                    mutlaqo foydalanmaslik;
                    <br> &nbsp &nbsp &nbsp &nbsp Talabalar turar joyi mudiri ruxsatisiz begona odamlarning xonada
                    bo’lishiga yo’l qo’ymaslik;
                    <br> &nbsp &nbsp &nbsp &nbsp spirtli ichimliklar, tamaki mahsulotlari, giyohvand hamda psixotrop
                    moddalar saqlamaslik va iste’mol
                    qilmaslik.
                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    III. Xonani foydalanishga berish muddati va foydalanganlik uchun haq to’lash tartibi
                </h4>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1. Xona va jihozlar talabaga 2021/2022 o’quv yili uchun beriladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2. Talaba xona va jihozlardan foydalanadigan o’quv yili uchun 100% oldindan <b>{{$general_payment_sum ? number_format($general_payment_sum, 2, ',', ' ') :''}}</b>
                    (<b>{{convert_to_word($general_payment_sum)}}</b>) so’m miqdorida haq to’laydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3. Xona va jihozlardan foydalanganlik uchun haq komissiya tavsiya bergan kundan 10 kun muddatda
                    to’lanadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.4. To’lanadigan haq miqdori bir kunlik to`lov asosida yani kunlik to`lov 8 000,0 so`m miqdorida
                    amalga
                    oshiriladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.5. Shartnomada belgilangan haqni o’z vaqtida to’lamagan talabaga unga ajratilgan xonadan va
                    jihozlardan foydalanishiga yo’l qo’yilmaydi.
                </p>

            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    IV. Taraflarning javobgarligi
                </h4>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1. Ushbu shartnoma shartlarini bajarmaslik yoki lozim darajada bajarmaslik taraflar uchun qonun
                    hujjatlariga muvofiq javobgarlikni yuzaga keltiradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.2. Talaba ushbu shartnoma shartlarini, Talabalar turar joyi to’g’risidagi Nizom talablarini
                    bajarmagan, Ichki tartib qoidalarini bir marta qo’pol ravishda buzgan hollarda shartnoma bekor
                    qilinib,
                    Talabalar turar joyidan chiqarib yuboriladi hamda yetkazilgan zarar to’la miqdorda talaba tomonidan
                    qoplanadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.3. Shartnoma yuzasidan vujudga keladigan har qanday nizoli masalalar taraflar o’rtasida kelishuv
                    yo’li
                    bilan hal qilinadi. Kelishuvga erishilmagan hollarda nizo qonunchilikda belgilangan tartibda ko’rib
                    chiqiladi.
                </p>

            </div>
            <div class="col-md-12 text-center ">
                <h4 class="text-bold">
                    V. Fors major holatlari
                </h4>
            </div>
            <div class="col-md-12 mb-1 page-break">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.1. Taraflar ixtiyoriga bog’liq bo’lmagan, ularni oldindan bilish yoki oldini olish imkoniyati
                    bo’lmagan holatlar (yengib bo’lmas kuch) oqibatida majburiyatlarni bajarmaganlik yoki lozim darajada
                    bajarmaganlik uchun taraflarning birortasi ikkinchi taraf oldida javobgar bo’lmaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.2. O’z majburiyatlarini bajara olmayotgan taraf yengib bo’lmas kuchning mavjudligi va uning
                    shartnoma
                    bo’yicha majburiyatlarni bajarishga ta’siri haqida ikkinchi tarafga xabarnoma berishi lozim.
                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    VI. Boshqa shartlar
                </h4>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.1. Shartnoma imzolangan vaqtdan boshlab kuchga kiradi va majburiyatlar to’liq bajarilgunga qadar
                    amal
                    qiladi.
                    6.2. Shartnomani muddatidan oldin bekor qilish tomonlarning kelishuvi bo’yicha yoki qonun
                    xujjatlarida
                    nazarda tutilgan asoslarda va tartibda amalga oshiriladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.3. Mazkur shartnoma quyidagi hollarda:
                    Ichki tartib qoidalari talaba tomonidan bir marta qo’pol ravishda buzilgan;
                    shartnoma bo’yicha o’z vaqtida haq to’lanmagan;
                    talaba belgilangan tartibda talabalar safidan chiqarilgan taqdirda shartnoma bir tomonlama bekor
                    qilingan hisoblanadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.4. Ushbu shartnoma yuzasidan bo’ladigan barcha o’zgartirish va qo’shimchalar yozma ravishda
                    tuziladi
                    hamda ular ikki tomondan imzolangandan so’ng kuchga kiradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.5. Shartnoma ikki nusxada tuzilgan bo’lib, bir nusxasi universitetda qoladi, ikkinchi nusxasi
                    talabaga
                    beriladi.
                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    VII. Taraflarning manzillari va imzolari
                </h4>
            </div>
            <div class="col-md-12">
                <table class="w-100">
                    <tbody>
                    <tr>
                        <td class="w-50" style="width: 49%">
                            <p class="w-100 text-center text-bold">
                                “Universitet”
                            </p>
                        </td>
                        <td class="w-50" style="width: 49%">
                            <p class="w-100 text-center text-bold">
                                “Talaba”
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="w-50" style="width: 49%">

                            <p>
                                Toshkent davlat yuridik universiteti
                                Toshkent shahri Sayilgoh 35-uy
                                O’zbekiston moliya vazirligi g’aznachiligi
                                h/r 23402000300100001010
                                STIR 201122919
                                HKKM MB Toshkent shahri BB
                                MFO 00014
                                shh/r: 400110860262667094100009002 HKKM MB Toshkent shaxri BB MFO 00014
                                STIR 201122349 OKONX 922110
                            </p>
                            <p>
                                Prorektor. ____________ A.Iminov
                            </p>
                            <p>
                                Bosh buхgalter.__________ M.Parpiyev
                            </p>
                            <p>

                                Talabalar turar joyi mudiri
                            </p>
                            <p>

                                _____________ N.Shayzakov

                            </p>
                        </td>
                        <td class="w-50" style="width: 49%">

                            <p class="word-line">
                                <b>{{$student->fio()}}</b>
                            </p>
                            <p class="w-100 text-center">
                                (F.I.Sh.)
                            </p>
                            <p>
                                Manzili: <b>{{$student->address}}</b>
                            </p>

                            <p>
                                Pasport seriyasi <b>{{$student->passport_seria}}</b> raqami <b>{{$student->passport_number}}</b>
                            </p>
                            <p>
                                Talaba _________________
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 text-center" style="padding-bottom: 50px">
                <button type="button" class="tasdiq btn btn-success">
                    Men , Talaba <b>{{ $student->fio() }}</b> , Talabalar turar joyi uchun
                    Kontrakt mazmuni bilan to'liq tanishdim va uning shartlariga roziman hamda shaxsiy ma`lumotlarim
                    to'g'riligini tasdiqlayman
                </button>
                <form id="accept-form" action="{{route('student.other_agreement.pdf_agreement')}}" method="post">
                    {{csrf_field()}}
                    {{method_field('POST')}}
                    <input type="text" hidden value="{{$student->id}}" name="student_id">
                    <input type="text" hidden value="{{$agreement->id}}" name="other_agreement_type_id">
                </form>
            </div>


        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.tasdiq').click(function(){
        if(confirm('Tasdiqlaysizmi?')){
            $('#accept-form').submit();
        }

    })
</script>
</body>
</html>
