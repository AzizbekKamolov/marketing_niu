<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->

    <!-- Optional theme -->
    {{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"--}}
    {{--          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">--}}
</head>
<body>
<style>

.text-bold{
    font-weight: bold;
    /*font-weight: bolder;*/
}
*{
    font-family: "Times New Roman";
    font-size: 11px;
}

/*body{*/
/*    padding-left: 30px;*/
/*    padding-right: 30px;*/
/*}*/
.mt-1{
    margin-top: 7px;
}
.mb-1{
    margin-bottom: 7px;
}
.word-line{
    /*padding-top: 30px;*/
    border-bottom: 1px solid black
}
td{
    vertical-align: top;
    padding: 7px;
}
.page-break{
    page-break-after: always;
}
.text-center{
    text-align: center;
}
    .text-right{
        display: inline-block;
        width: 49%;
        text-align: right;
    }
    .text-left{
        display: inline-block;
        width: 49%;

    }
</style>
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

    $month = get_month_name(date('m' , strtotime($getting_date)));
    $day = date('d', strtotime($getting_date));
    $year = date('Y' , strtotime($getting_date));
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
                    Mutaxassisni qoʻshma taʻlim dasturi boʻyicha tayyorlash haqida ikki tomonlama
                    KONTRAKT
                    <br>
                     (stipendiyasiz shaklda)

                </h4>
                <h4 class="text-bold"> №{{$student->id_code}}</h4>
                <h4 class="text-bold">ID: <b>{{$student->id_code}}</b></h4>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6 text-left"><p>Toshkent shahri</p></div>
            <div class="col-md-6 text-right"><p>{{$year}} yil “{{$day}}” {{$month}}</p></div>
            <div class="col-md-12 mt-1 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbspToshkent davlat yuridik universiteti (keyingi oʻrinlarda – Taʻlim muassasasi)
                    nomidan Ustavga asosan ish yurituvchi rektor Tashkulov Akbar Djurabayevich, bir tomondan,
                    va
                    <b>{{$student->fio()}}</b>
                    (keyingi oʻrinlarda – Talaba) ikkinchi tomondan (birgalikda – Tomonlar), “Yurisprudensiya”
                    taʻlim yoʻnalishi boʻyicha Yanka Kupala nomidagi Grodno davlat universiteti (Belarus
                    Respublikasi) (keyingi oʻrinlarda – GrDU) bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha talabani
                    bakalavriat bosqichida oʻqitish maqsadida mazkur ikki tomonlama stipendiyasiz shakldagi toʻlov
                    kontrakt shartnomasini (keyingi oʻrinlarda – Shartnoma) Oliy va oʻrta maxsus, kasb-hunar taʻlimi
                    muassasalarida oʻqitishning toʻlov-kontrakt shakli va undan tushgan mablagʻlarni taqsimlash tartibi
                    toʻgʻrisidagi nizom (roʻyxat raqami 2431, 2013-yil 26-fevral), Oʻzbekiston Respublikasi Vazirlar
                    Mahkamasining 2019-yil 3-dekabrdagi 967-son, 2021-yil 10-iyundagi 359-son qarorlari, Toshkent
                    davlat yuridik universiteti kengashining 2022-yil 31-avgustdagi 1-son majlis bayonnomasiga muvofiq tuzdilar:


                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    1.SHARTNOMA PREDMETI
                </h4>
            </div>
            <div class="col-md-12 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.1.</b> Mazkur Shartnomaga asosan Taʻlim muassasasi Talabani 2024/2025 oʻquv yili
                    davomida belgilangan taʻlim standartlari, malaka talablari, oʻquv reja va dasturlariga muvofiq
                    oʻqitadi, Talaba esa Shartnomaning 2-bobida koʻrsatilgan tartib va miqdordagi toʻlovni amalga oshiradi hamda
                    Taʻlim muassasasida belgilangan tartibga muvofiq taʻlim olish majburiyatini oladi.

                </p>
            </div>

            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    2.HISOB-KITOB QILISH TARTIBI
                </h4>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.1.</b> GrDU bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha Talaba 2022/2023 oʻquv yili
                    davomida Ta’lim muassasasida ta’lim olishini inobatga olgan holda Kontrakt boʻyicha toʻlovlar
                    miqdori va muddatlari quyidagicha belgilandi:

                </p><p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.1.1</b> 2022/2023-, 2023/2024- va 2025/2026-o‘quv yillari uchun har bir o‘quv yiliga 31
                    (o‘ttiz bir) bazaviy hisoblash miqdorini tashkil qiladi va quyidagi muddatlarda Ta’lim
                    muassasasiga toʻlanadi:

                </p>

            </div>
            <div class="col-md-12 mb-1 ">
               &nbsp &nbsp 2022-yil 1-noyabrgacha – 7,75 (yettiyu, yetmish besh) bazaviy hisoblash miqdori;
               &nbsp &nbsp 2022-yil 15-dekabrgacha – 7,75 (yettiyu, yetmish besh) bazaviy hisoblash miqdori;
               &nbsp &nbsp 2023-yil 15-fevralgacha – 7,75 (yettiyu, yetmish besh) bazaviy hisoblash miqdori;
               &nbsp &nbsp 2023-yil 01-maygacha – 7,75 (yettiyu, yetmish besh) bazaviy hisoblash miqdori;
               &nbsp &nbsp 2023-yil 15-oktyabgacha – 7,75 (yettiyu, yetmish besh) bazaviy hisoblash miqdori;
               &nbsp &nbsp 2023-yil 15-dekabrgacha – 7,75 (yettiyu, yetmish besh) bazaviy hisoblash miqdori;
               &nbsp &nbsp 2024-yil 15-fevralgacha – 7,75 (yettiyu, yetmish besh) bazaviy hisoblash miqdori;
               &nbsp &nbsp 2024-yil 01-maygacha – 7,75 (yettiyu, yetmish besh) bazaviy hisoblash miqdori;
               &nbsp &nbsp 2025-yil 15-oktyabgacha – 7,75 (yettiyu, yetmish besh) bazaviy hisoblash miqdori;
               &nbsp &nbsp 2025-yil 15-dekabrgacha – 7,75 (yettiyu, yetmish besh) bazaviy hisoblash miqdori;
               &nbsp &nbsp 2026-yil 15-fevralgacha – 7,75 (yettiyu, yetmish besh) bazaviy hisoblash miqdori;
               &nbsp &nbsp 2026-yil 01-maygacha – 7,75 (yettiyu, yetmish besh) bazaviy hisoblash miqdori.
               &nbsp &nbsp <b>2.1.2.</b> 2024/2025 o‘quv yili uchun 77 (yetmish yetti) bazaviy hisoblash miqdori. Bunda
               &nbsp &nbsp belgilangan to‘lov-kontrakt miqdorini bo‘lib quyidagi muddatlarda Ta’lim muassasasiga to‘lanadi:
               &nbsp &nbsp 2024-yil 15-oktyabgacha – 19,25 (o‘n to‘qqizu, yigirma besh) bazaviy hisoblash miqdori;
               &nbsp &nbsp 2024-yil 15-dekabrgacha – 19,25 (o‘n to‘qqizu, yigirma besh) bazaviy hisoblash miqdori.
               &nbsp &nbsp 2025-yil 15-fevralgacha – 19,25 (o‘n to‘qqizu, yigirma besh) bazaviy hisoblash miqdori;
               &nbsp &nbsp 2025-yil 01-maygacha – 19,25 (o‘n to‘qqizu, yigirma besh) bazaviy hisoblash miqdori.

            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.2.</b> Kontraktni amal qilish davrida bazaviy hisoblash miqdori oʻzgargan taqdirda Kontrakt
                    boʻyicha tegishli ravishda oʻzgargan toʻlov miqdori oʻquv yilining keyingi davrida uchun toʻlanadi.
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.3.</b>GrDU bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha Kontraktni stipendiyasizdan shakldan stipendiyali
                    shakliga oʻtishga yoʻl qoʻyilmaydi.
                </p>
            </div>


            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    3. TOMONLARNING HUQUQ VA MAJBURIYATLARI
                </h4>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b> 3.1. Ta’lim muassasasining huquqlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1.1.Talabadan shartnomaviy majburiyatlari bajarilishini, shu jumladan Taʻlim muassasasining ichki
                    hujjatlarida belgilangan qoidalarga rioya qilishni, oʻquv mashgʻulotlarida muntazam qatnashishni,
                    Kontrakt boʻyicha toʻlovlarni oʻz vaqtida amalga oshirishni talab qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1.2. Ta’lim muassasasining ichki hujjatlarida belgilangan qoidalarga rioya qilmagan, bir
                    semestr davomida darslarni uzrli sabablarsiz 74 soatdan ortiq qoldirgan yoki oʻqitish uchun
                    belgilangan miqdordagi toʻlovni oʻz vaqtida amalga oshirmagan Talabaga nisbatan belgilangan
                    tartibda talabalar safidan chetlashtirish, tegishli kursda qoldirish yoki boshqa choralarni qoʻllash.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1.3. Talaba Taʻlim muassasasining ichki hujjatlarida belgilangan qoidalarni qoʻpol ravishda
                    buzgan, xususan huquqbuzarlik sodir etgan hollarda Kontraktni bir tomonlama bekor qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1.4. Istisno tariqasida Kontrakt boʻyicha toʻlov muddatlarini uzaytirish (Ta’lim
                    muassasasining buyrugʻi orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1.5. Talabaga yozma xabarnoma yuborish orqali Kontraktning 2-bobida koʻrsatilgan oʻqitishning
                    toʻlov miqdorlarini bir tomonlama oʻzgartirish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1.6.Talabani GPA oʻtish ballini toʻplay olmagan yoki akademik qarzdorliklar soni talablarini
                    bajarmagan taqdirda qayta oʻqish uchun tegishli kursda qoldirish.
                </p>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b> 3.2. Ta’lim muassasasining majburiyatlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2.1. Oʻqitish uchun Oʻzbekiston Respublikasining “Taʻlim toʻgʻrisida”gi Qonuniga muvofiq Taʻlim
                    muassasasi Ustavi va boshqa ichki hujjatlarida nazarda tutilgan zarur shart-sharoitlarni yaratadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2.2.Talabaning qonunchilik hujjatlarida belgilangan huquqlarining bajarilishini taʻminlaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2.3. Talabani tasdiqlangan oʻquv reja va dasturlarga muvofiq davlat standarti talablari darajasida
                    oʻqitadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2.4. Talaba GrDU bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha bakalavriat yoʻnalishini
                    muvaffaqiyatli tamomlaganda belgilangan tartibda diplom beradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2.5.GrDUning xatiga asosan Talabani talabalar safiga kiritadi.
                </p>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b> 3.3. Talabaning huquqlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3.1. Taʻlim muassasasidan shartnomaviy majburiyatlari bajarilishini talab qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3.2. Taʻlim muassasasida tasdiqlangan oʻquv reja va dasturlarga muvofiq davlat standarti talablari
                    darajasida taʻlim olish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3.3. Taʻlim muassasasining Axborot-resurs markazi, sport inshooti, Wi-Fi hududlaridan foydalanish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3.4.Taʻlim muassasasining ta’lim jarayonlarini yaxshilashga doir takliflar berish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3.5.Oʻqish uchun bir yillik toʻlov summasini bir yo‘la toʻliq toʻlash.
                </p>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b> 3.4. Talabaning majburiyatlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.4.1. Joriy oʻquv yili uchun belgilangan oʻqitish qiymatini Kontraktning 2-bobida koʻrsatilgan
                    tartib va miqdorda oʻz vaqtida toʻlaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.4.2.Ta’lim muassasi Ustavi va boshqa ichki hujjatlari talablariga qatʻiy rioya qiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.4.3. Oʻquv mashgʻulotlarida muntazam qatnashadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.4.4. Taʻlim muassasasida belgilangan tartib va doirada taʻlim oladi hamda ushbu jarayonda bilim
                    darajasini oshirib boradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.4.5. Kontraktni imzolangandan keyin Ta’lim muassasasiga taqdim etadi. Kontrakt elektron shaklda Ta’lim muassasasining marketing.tsul.uz saytidan olingan taqdirda uning shartlari bilan tanishib, rozi boʻlgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.4.6. Ta’lim muassasi tomonidan Kontrakt mablagʻlarni xorijiy valyutaga konvertatsiya qilish,
                    xalqaro hisob-kitoblarni amalga oshirish, valyuta kursi tufayli yutqazishlar bilan bogʻliq va boshqa
                    xarajatlar toʻliq qoplash.
                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    4. SHARTNOMANI BEKOR QILISH
                </h4>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.Kontrakt quyidagi hollarda bekor qilinadi:
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1. Tomonlarning oʻzaro roziligi bilan.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.2. Taʻlim muasasasining tashabbusiga koʻra Ustavi va boshqa ichki hujjatlariga muvofiq Talaba
                    talabalar safidan chiqarilganda.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.3.Oʻqitish qiymati belgilangan muddat ichida toʻlanmasa (bunda, Taʻlim muassasasi Kontraktni bir
                    tomonlama bekor qiladi, Talaba Talabalar safidan chiqariladi).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.4.Talabaning tashabbusiga koʻra (yozma murojaatga asosan).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.5. Kontraktning 3.1.3-bandida koʻrsatilgan hollarda (Taʻlim muassasasi tomonidan Kontraktning bir
                    tomonlama bekor qilinishi va talabalar safidan chiqarilishi haqida Talabaga yozma xabarnoma yuborish
                    orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.6.Talaba Ta’lim muasasasining talabalari safidan chiqarilganda GrDUning talabalari safidan ham
                    avtomatik ravishda chiqariladi, shuningdek Talaba GrDUning talabalari safidan chiqarilganda
                    Ta’lim muasasasining talabalari safidan avtomatik ravishda chiqariladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.7. Qonunchilikda koʻrsatilgan boshqa hollarda.
                </p>
            </div>

            <div class="col-md-12 text-center ">
                <h4 class="text-bold">
                    5. FORS-MAJOR HOLATLAR
                </h4>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.1. Ushbu Kontraktga asosan majburiyatlarni bajarilmasligi holatlari yengib boʻlmaydigan
                    kuchlar (fors-major) holatlar natijasida vujudga kelganda Tomonlar oʻz majburiyatlarini
                    bajarmaslikdan qisman yoki toʻliq ozod boʻladilar.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.2. Yengib boʻlmaydigan kuchlar (fors-major) holatlariga Tomonlarning irodasi va faoliyatiga
                    bogʻliq boʻlmagan tabiat hodisalari (pandemiya, zilzila, koʻchki, boʻron, qurgʻoqchilik va
                    boshqalar) yoki ijtimoiy-iqtisodiy holatlar (urush holati, qamal, davlat manfaatlarini
                    koʻzlab import va eksportni taqiqlash va boshqalar) sababli yuzaga kelgan sharoitlarda
                    Tomonlarga qabul qilingan majburiyatlarni bajarish imkonini bermaydigan favqulodda, oldini
                    olib boʻlmaydigan va kutilmagan holatlar kiradi
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.3. Kontrakt Tomonlaridan qaysi biri uchun majburiyatlarni yengib boʻlmaydigan kuchlar (fors-major)
                    holatlari sababli bajarmaslik maʻlum boʻlsa, darhol ikkinchi tomonga bu xaqda 10 kun ichida ushbu
                    holatlar harakati sababini dalillar bilan taqdim etishi lozim.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.4. Kontraktga asosan majburiyatlarni ijro qilish muddati ushbu yengib boʻlmaydigan kuchlar
                    (fors-major) holatlar davom etish muddatiga qadar uzaytiriladi. Agar yengib boʻlmaydigan kuchlar
                    (fors-major) taʻsiri 30 (oʻttiz) kundan ortiqroq davom qilsa, Tomonlar tashabbusiga binoan shartnoma
                    bekor qilinishi mumkin.


                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    6. YAKUNIY QOIDALAR
                </h4>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.1. Kontrakt bevosita Tomonlar tomonidan imzolangan paytdan e’tiboran kuchga kiradi,
                    Kontraktning 6.2-bandida koʻrsatilgan holat bundan mustasno.
                    &nbsp &nbsp &nbsp &nbsp
                    6.2. Kontrakt elektron shaklda Ta’lim muassasasining marketing.tsul.uz saytida
                    joylashtirilgan boʻlib, Talaba oʻz passport ma’lumotlarini kiritganidan soʻng uning shartlari bilan
                    tanishib, rozi boʻlgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi. Kontrakt
                    Talaba tomonidan yuklab olingan paytdan e’tiboran tuzilgan va kuchga kirgan hisoblanadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.2. Kontrakt elektron shaklda Ta’lim muassasasining marketing.tsul.uz saytida joylashtirilgan
                    boʻlib, Talaba oʻz passport ma’lumotlarini kiritganidan soʻng uning shartlari bilan tanishib, rozi
                    boʻlgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi. Kontrakt Talaba tomonidan
                    yuklab olingan paytdan e’tiboran tuzilgan va kuchga kirgan hisoblanadi.Talaba Kontrakt shartlari
                    bilan norozi boʻlgan taqdirda uch ish kunida, biroq joriy yilning 15 oktyabga qadar murojaat qilishi
                    mumkin. Belgilangan muddatda Kontraktni tuzmagan va toʻlovlarni amalga oshirmagan Talabani Taʻlim
                    muassasasi talabalar safidan chiqarishga haqli. Talaba Kontrakt shartlari bilan norozi boʻlgan
                    taqdirda uch ish kunida, biroq joriy yilning 15 oktyabga qadar murojaat qilishi mumkin.
                    Kontraktni tuzmagan va toʻlovlarni amalga oshirmagan Talabani Ta’lim muassasasi talabalar
                    safidan chiqarishga haqli.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.3. Talaba tomonidan shartnoma boʻyicha oʻqitish qiymatini toʻlashda toʻlov topshiriqnomasida
                    shartnomaning tartib raqami va sanasi, talabaning familiyasi, ismi, sharifi hamda oʻqiyotgan kursi
                    toʻliq koʻrsatiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.4. Tomonlar oʻrtasida vujudga keladigan nizolar oʻzaro muzokaralar olib borish hamda talabnoma
                    yuborish orqali hal etiladi, Kontraktning 4.2–4.6-bandlarida koʻrsatilgan holatlar bundan mustasno.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.5. Ta’lim muasasasida oʻqitishning modul tizimi sharoitlarida talabalar bilimini nazorat
                    qilish tartibi va baholash mezonlari toʻgʻrisidagi nizom (roʻyxat raqami 2780, 2016 yil 22 aprel)ga
                    muvofiq qayta oʻzlashtirish uchun belgilangan tartibda oʻquv fanlari boʻyicha kelgusi semestrning
                    yakuniy nazorat davri boshlangunga qadar tegishli fanlar boʻyicha akademik qarzdorlikni qayta
                    topshirish sharti bilan keyingi kurs (semestr)ga oʻtkazilgan Talabadan ushbu semestr uchun ham
                    toʻlov undiriladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.6. GrDU va Talaba oʻrtasida mutaxassisni qoʻshma ta’lim dasturi boʻyicha tayorlash
                    haqida ikki tomonlama shartnoma(kontrakt) tuzilmagan taqdirda, mazkur Kontrakt oʻz kuchini
                    yoʻqotadi.

                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    Tomonlarning manzillari va to`lov rekvizitlari
                </h4>
            </div>
            <div class="col-md-12">
                <table class="w-100">
                    <tbody>
                    <tr>
                        <td class="w-50" style="width: 49%">
                            <p class="w-100 text-center text-bold">
                                Ta’lim muassasasi
                            </p>
                        </td>
                        <td class="w-50" style="width: 49%">
                            <p class="w-100 text-center text-bold">
                                Talaba
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="w-50" style="width: 49%">
                            <img src="{{public_path('/pechat/pechat-join-2022.png')}}" alt="" style="width: 100%">
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
                                Pasport seriyasi <b>{{$student->passport_seria}}</b> raqami
                                <b>{{$student->passport_number}}</b>
                            </p>

                            <p>
                                Talaba _________________
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.tasdiq').click(function () {
        if (confirm('Tasdiqlaysizmi?')) {
            $('#accept-form').submit();
        }

    })
</script>
</body>
</html>
