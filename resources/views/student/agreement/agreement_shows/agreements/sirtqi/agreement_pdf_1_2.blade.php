{{--2 tomonlama stipendiyasiz--}}
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

    $month = get_month_name(date('m' , strtotime($getting_date)));
    $day = date('d', strtotime($getting_date));
    $year = date('Y' , strtotime($getting_date));
    $summa = '10,960,400';
    $summa_word = 'O’n million to‘qqiz yuz oltmish ming to`rt yuz';
@endphp
<style>
    body {
        font-family: DejaVu Sans, sans-serif !important;
    }
</style>
<div class="row page-break">
    <div class="col-md-2"></div>
    <div class="col-md-8 ">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center text-bold">
                <h4 class="text-bold">
                    Toshkent davlat yuridik universitetida o‘qitish uchun
                    ikki tomonlama KONTRAKT (sirtqi ta’lim shaklda, {{$student->course}} - kurslar uchun)
                </h4>
                <h4 class="text-bold"> № {{$student->id_code}}</h4>
                <h4 class="text-bold">ID: <b>002-00{{$student->id_code}}</b></h4>
            </div>
            <div class="col-md-3"></div>
            {{--            <div style="display: inline-block; width: 49%" class="">--}}
            {{--                <span>2021 yil “{{$day}}” {{$month}}</span>--}}
            {{--            </div>--}}
            {{--            <div style="display: inline-block; width: 49%" class=" text-right">--}}
            {{--                <span>Toshkent shahri</span>--}}
            {{--            </div>--}}
            <div class="col-md-6 text-left"><p>Toshkent shahri</p></div>
            <div class="col-md-6 text-right"><p>{{$year}} yil “{{$day}}” {{$month}}</p></div>
            <div class="col-md-12 mt-1 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp Toshkent davlat yuridik universiteti (keyingi o‘rinlarda – Ta’lim
                    muassasasi) nomidan Ustavga asosan ish yurituvchi Rektor vazifasini vaqtincha bajaruvchi Rustambekov
                    Islombek Rustambekovich bir tomondan, va <b>{{$student->birthday}}</b> yilda
                    tug’ilgan <b>{{$student->fio()}}</b> (keyingi o‘rinlarda – Talaba) ikkinchi tomondan (birgalikda –
                    Tomonlar),“Yurisprudensiya” ta’lim yo‘nalishi bo‘yicha Talabani bakalavriat
                    <b>{{$student->course}}</b>-kurs davomida o‘qitish
                    maqsadida mazkur ikki tomonlama kontraktni (keyingi o‘rinlarda – Kontrakt) Oliy va o‘rta maxsus,
                    kasb-hunar ta’limi muassasalarida o‘qitishning to‘lov-kontrakt shakli va undan tushgan mablag‘larni
                    taqsimlash tartibi to‘g‘risidagi nizom (ro‘yxat raqami 2431, 2013 yil 26 fevral), O‘zR Vazirlar
                    Mahkamasining 2019 yil 3 dekabrdagi 967-son, 2021 yil 10 iyundagi 359-son qarorlari, Toshkent davlat
                    yuridik universiteti rektorining 2021 yil 13 sentyabrdagi 02-252-son buyrug‘iga muvofiq tuzdilar:

                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    1. KONTRAKT PREDMETI
                </h4>
            </div>
            <div class="col-md-12 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.1.</b> Mazkur <b>Kontraktga</b> asosan <b>Ta’lim muassasasi
                        Talabani</b> 2021/2022
                    o‘quv yili davomida belgilangan ta’lim standartlari va o‘quv dasturlariga muvofiq o‘qitadi, Talaba
                    esa Kontraktning 3-bobida ko’rsatilgan tartib va miqdordagi to‘lovni amalga oshiradi hamda Ta’lim
                    muassasasida belgilangan tartibga muvofiq ta‘lim olish majburiyatini oladi.
                </p>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.2.</b> <b>Talabaning</b> bakalavriat ta’lim yo‘nalishini
                    muvaffaqiyatli
                    tamomlash muddati
                    @php
                        $ended = 2022+5-$student->course;
                    @endphp
                    {{$ended}}-yil iyun oyi hisoblanadi.

                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    2. TOMONLARNING HUQUQ VA MAJBURIYATLARI
                </h4>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.1.</b> <b>Ta’lim muassasasining huquqlari</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.1. Talabadan shartnomaviy majburiyatlari bajarilishini, shu jumladan Ta’lim
                    muassasasining
                    ichki hujjatlarida belgilangan qoidalarga rioya qilishni, o’quv mashg‘ulotlarida muntazam
                    qatnashishni, Kontrakt bo‘yicha to‘lovlarni o‘z vaqtida amalga oshirishni talab qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.2 Ta’lim muassasasining ichki hujjatlarida belgilangan qoidalarga rioya qilmagan,
                    o‘qitish uchun belgilangan miqdordagi to‘lovni o‘z vaqtida amalga oshirmagan Talabaga nisbatan
                    belgilangan tartibda talabalar safidan chetlashtirish yoki boshqa choralarni qo’llash, GPA
                    ko‘rsatkichini to‘play olmagan, semestr va o‘quv yili yakuni natijalari bo‘yicha akademik
                    qarzdorligi bor Talabani tegishli kursda qoldirish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.3.Talaba Ta’lim muassasasining ichki hujjatlarida belgilangan qoidalarni qo’pol ravishda
                    buzgan, xususan huquqbuzarlik sodir etgan hollarda Kontraktni bir tomonlama bekor qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.4. Mehnatga haq to‘lashning eng kam miqdori o’zgarishi bilan mos ravishda Kontrakt bo‘yicha
                    to’lov miqdorini bir tomonlama o’zgartirish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.5.Istisno tariqasida Kontrakt bo‘yicha to‘lov muddatlarini uzaytirish (Ta’lim
                    muassasasining buyrug‘i orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.6.Talaba belgilangan to’lovni amalga oshirmaganda elektron tizimlardan foydalanishi va
                    dars mashg‘ulotlariga qatnashishini cheklash.
                </p>

            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.2.</b> <b>Ta’lim muassasasining majburiyatlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.1. O‘qitish uchun O‘zbekiston Respublikasining “Ta’lim to‘g‘risida”gi Qonuni va Kadrlar
                    tayyorlash milliy dasturiga muvofiq Ta’lim muassasasi Ustavi va boshqa ichki hujjatlarida nazarda
                    tutilgan zarur shart-sharoitlarni yaratadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.2. Talabalarning qonun hujjatlarida belgilangan huquqlarining bajarilishini ta‘minlaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.3. Talabani tasdiqlangan o‘quv reja va dasturlarga muvofiq davlat standarti talablari
                    darajasida o‘qitadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.4. Talaba bakalavriat yo‘nalishini muvaffaqiyatli tamomlaganda belgilangan tartibda
                    diplom beradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.5. Abituriyent o’quv yilining birinchi yarmi uchun to’lovni amalga oshirganidan so’ng uni
                    talabalar safiga qabul qilish.
                </p>

            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.3.</b> <b>Talabaning huquqlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.1. Ta’lim muassasasidan shartnomaviy majburiyatlari bajarilishini talab qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.2. Ta’lim muassasasida tasdiqlangan o‘quv reja va dasturlarga muvofiq davlat standarti
                    talablari darajasida ta’lim olish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.3. Ta’lim muassasasining Axborot-resurs markazi, sport inshooti, Wi-Fi hududlaridan
                    foydalanish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.4. Ta’lim muassasasining ta’lim jarayonlarini yaxshilashga doir takliflar berish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.5. O‘qish uchun bir yillik to’lov summasini bir yola to’liq to’lash.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.6. Kontrakt bo‘yicha to‘lovni stipendiyasiz yoki stipendiyali shaklini joriy yilning
                    1 oktyabrga qadar tanlash.
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.4.</b> <b>Talabaning majburiyatlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 page-break">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.1. Joriy o‘quv yili uchun belgilangan o‘qitish qiymatini Kontraktning 3-bobida
                    ko‘rsatilgan tartib va miqdorda o‘z vaqtida to‘laydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.2.Akadem qarzdor bo‘lgan talabalar o‘qishni davom ettirish uchun qonunchilikda
                    belgilangan kredit miqdorlariga mos ravishda to‘lovlarni amalga oshiradilar.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.3.Toshkent davlat yuridik universiteti Ustavi va boshqa ichki hujjatlari bilan tanishadi
                    va ularning talablariga qat’iy rioya qiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.4.O’quv mashg’ulotlarida belgilangan tartib va me’yorlarga muvofiq qatnashadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.5.Ta’lim muassasasida belgilangan tartib va doirada ta’lim oladi hamda ushbu jarayonda
                    bilim darajasini oshirib boradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.6.Kontrakt bo‘yicha to‘lovni stipendiyasiz yoki stipendiyali shaklini joriy yilning
                    1 oktyabrga qadar tanlaydi.

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.7.Kontraktni imzolangandan keyin Ta’lim muassasasiga taqdim etadi. Kontrakt elektron
                    shaklda Ta’lim muassasasining marketing.tsul.uz saytidan olingan taqdirda uning shartlari bilan
                    tanishib, rozi bo’lgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.8.O`zining xatti-harakatlari, OAV va ijtimoiy tarmoqlardagi chiqishlari bilan
                    universitetning ishсhanlik obro`si va manfaatlariga putur yetkazmaslik hamda zarar yetkazishi mumkin
                    bo`lgan xatti-harakatlarini sodir etishdan tiyiladi.
                </p>
            </div>


            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    3. TO’LOV MIQDORLARI VA MUDDATLARI
                </h4>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1. 2021/2022 o‘quv yilida sirtqi ta’lim olish uchun Talaba tomonidan to‘lanishi lozim bo‘lgan
                    to’lov summasi <b>{{$student->all_summa}}</b> ({{$student->all_summa_word}}) so‘mni tashkil etadi va
                    Kontraktning ushbu bobida belgilangan tartibda to’lanadi. Mazkur summa mehnatga haq to’lashning eng
                    kam miqdori o’zgarishi bilan mos ravishda Ta’lim muassasasi tomonidan o’zgartirilishi mumkin.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2. Talaba kuzgi semestr uchun <b>{{$student->part1_summa}}</b> ( {{$student->part1_summa_word}} ) so‘mni quyidagi muddatlarda to‘laydi:
                    <br>1-oktyabrgacha -{{$student->part_four_1_summa}} so‘m;
                    <br>1-yanvargacha -{{$student->part_four_2_summa}}  so‘m.


                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3. Talaba bahorgi semestr uchun <b>{{$student->part2_summa}}</b> ( {{$student->part2_summa_word}} )  so‘mni quyidagi muddatlarda to‘laydi:
                    <br>1-aprelgacha -{{$student->part_four_3_summa}} so‘m;
                    <br>1-iyulgacha -{{$student->part_four_4_summa}}  so‘m.


                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.4. Talaba tomonidan Kontrakt bo‘yicha o‘qitish qiymatini to‘lashda to‘lov topshiriqnomasida ID
                    raqamini, Talabaning familiyasi, ismi, sharifi hamda o‘qiyotgan kursi to‘liq ko‘rsatiladi.

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.5. Talaba tegishli fanlar bo‘yicha akademik qarzdorlikni qayta topshirish sharti bilan keyingi
                    kurs (semestr)ga o‘tkazilgan taqdirda, keyingi semestr uchun to‘lov Talaba tomonidan akademik
                    qarzdorlik topshirilgunga qadar amalga oshiriladi.

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
                    4.1. Kontrakt quyidagi hollarda bekor qilinadi:
                </p>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.1. Tomonlarning o‘zaro roziligi bilan.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.2. Ta’lim muasasasining tashabbusiga ko‘ra Ustavi va boshqa ichki hujjatlariga muvofiq Talaba
                    talabalar safidan chiqarilganda.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.3. O‘qitish qiymati belgilangan muddat ichida to‘lanmasa (bunda, Ta’lim muassasasi Kontraktni ni
                    bir tomonlama bekor qiladi, Talaba Talabalar safidan chiqariladi).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.4.Talabaning tashabbusiga ko‘ra (yozma murojaatga asosan).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.5. Kontraktning 2.1.3-bandida ko‘rsatilgan hollarda (Ta’lim muassasasi tomonidan Kontraktning
                    bir
                    tomonlama bekor qilinishi va talabalar safidan chiqarilishi haqida Talabaga yozma xabarnoma yuborish
                    orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.6. Qonunchilikda ko‘rsatilgan boshqa hollarda.
                </p>

            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.2. Kontrakt Tomonlarning o‘zaro roziligi bilan o’zgartiriladi, 2.1.4, 2.1.5-bandlarda ko‘rsatilgan
                    holatlar bundan mustasno.
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
                    5.1. Ushbu Kontraktga asosan majburiyatlarni bajarilmasligi holatlari yengib bo‘lmas kuchlar
                    (fors-major) holatlar natijasida vujudga kelganda Tomonlar o‘z majburiyatlarini bajarishdan qisman
                    yoki to‘liq ozod bo‘ladilar.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.2. Yengib bo‘lmaydigan kuchlar (fors-major) holatlariga Tomonlarning irodasi va faoliyatiga
                    bog‘liq bo‘lmagan tabiat hodisalari (pandemiya, zilzila, ko‘chki, bo‘ron, qurg‘oqchilik va
                    boshqalar) yoki ijtimoiy-iqtisodiy holatlar (urush holati, qamal, davlat manfaatlarini ko‘zlab
                    import va eksportni ta‘qiqlash va boshqalar) sababli yuzaga kelgan sharoitlarda Tomonlarga qabul
                    qilingan majburiyatlarni bajarish imkonini bermaydigan favqulodda, oldini olib bo‘lmaydigan va
                    kutilmagan holatlar kiradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.3. Kontrakt Tomonlaridan qaysi biri uchun majburiyatlarni yengib bo‘lmaydigan kuchlar (fors-major)
                    holatlari sababli bajarmaslik ma‘lum bo‘lsa, darhol ikkinchi tomonga bu xaqda 10 kun ichida dalillar
                    bilan taqdim etishi lozim.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.4. Kontraktga asosan majburiyatlarni ijro qilish muddati ushbu yengib bo‘lmaydigan kuchlar
                    (fors-major) holatlar davom etish muddatiga qadar uzaytiriladi. Agar yengib bo‘lmaydigan kuchlar
                    (fors-major) ta‘siri 30 (o‘ttiz) kundan ortiqroq davom qilsa, Tomonlar tashabbusiga binoan Kontrakt
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
                    6.1. Kontrakt bevosita Tomonlar tomonidan imzolangan paytdan e’tiboran kuchga kiradi, Kontraktning
                    6.2-bandida ko’rsatilgan holat bundan mustasno.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.2. Kontrakt elektron shaklda Ta’lim muassasasining marketing.tsul.uz saytida joylashtirilgan
                    bo’lib, Talaba o’z ID raqami va passport ma’lumotlarini kiritganidan so’ng uning shartlari bilan
                    tanishib, rozi bo’lgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi. Kontrakt
                    Talaba tomonidan yuklab olingan paytdan e’tiboran tuzilgan va kuchga kirgan hisoblanadi.
                    <br> &nbsp &nbsp &nbsp &nbsp Talaba Kontrakt shartlari bilan norozi bo’lgan taqdirda uch ish kunida,
                    biroq joriy yilning 5
                    oktyabga qadar murojaat qilishi mumkin. Kontraktni tuzmagan va to’lovlarni amalga oshirmagan
                    Talabani Ta’lim muassasasi talabalar safidan chiqarishga haqli.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.3. Tomonlar o‘rtasida vujudga keladigan nizolar o’zaro muzokaralar olib borish hamda talabnoma
                    yuborish orqali hal etiladi, Kontraktning 4.1.2-4.1.5 bandlarida ko’rsatilgan holatlar bundan
                    mustasno.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.4. Mehnatga haq to‘lashning eng kam miqdori o‘zgarganda mos ravishda to‘lov-kontrakt qiymati
                    miqdori navbatdagi semestr boshidan oshiriladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.5. Kontrakt bo’yicha o’z majburiyatlarini bajarmagan Tomon qonunda belgilangan javobgarlikka
                    tortiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.6. Tomonlar Kontrakt bo’yicha nizolarni muzokaralar va talabnoma yuborish yo'li bilan hal
                    qilishadi, aks holda nizo fuqarolik sudida ko’rib chiqiladi.
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
                             <img style="width:280px" src="{{asset('pechat/pechat_last2.jpg')}}">
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
                                Tel: <b>{{$student->phone}}</b>
                            </p>
                            <p>
                                Talaba _________________
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
              <div class="col-md-12 text-right ">
                <img src="data:image/png;base64, {!! $qr_code !!}">
            </div>
{{--            <div class="col-md-12 text-center" style="padding-bottom: 50px">--}}
{{--                <div class="tasdiq btn-success "--}}
{{--                     style="width: 100%; padding: 10px !important;margin-left:10px; margin-right: 10px ">--}}
{{--                    <p>--}}
{{--                        Men , Talaba <b>{{ $student->fio() }}</b> , shartnoma mazmuni bilan to'liq tanishdim va uning--}}
{{--                        shartlariga roziman hamda shaxsiy ma`lumotlarim--}}
{{--                        to'g'riligini tasdiqlayman--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <form id="accept-form" action="{{route('student.agreement.pdf_agreement')}}" method="post">--}}
{{--                    {{csrf_field()}}--}}
{{--                    {{method_field('POST')}}--}}
{{--                    <input type="text" hidden value="{{$student->id}}" name="student_id">--}}
{{--                    <input type="text" hidden value="{{$agreement_type->id}}" name="agreement_type_id">--}}
{{--                    <input type="text" hidden value="{{$agreement_side_type->id}}" name="agreement_side_type_id">--}}
{{--                    <input type="text" hidden value="{{$getting_date}}" name="getting_date">--}}
{{--                </form>--}}
{{--            </div>--}}


        </div>
    </div>
    <div class="col-md-2"></div>
</div>
@include('student.agreement.agreement_shows.agreements.schot_include')
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