{{--2 tomonlama stipendiyali--}}
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/agreement.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
@endphp
<style>
    body {
        font-family: DejaVu Sans, sans-serif !important;
    }
</style>
<div class="row p-2">
    <div class="col-md-2"></div>
    <div class="col-md-8 ">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center text-bold">
                <h4 class="text-bold">
                    Toshkent davlat yuridik universitetiga oʻqishi koʻchirilgan fuqaroni oʼqitish uchun
                    ikki tomonlama KONTRAKT (stipendiyasiz shaklda)

                </h4>
                <h4 class="text-bold">SHARTNOMA №________</h4>
                <h4 class="text-bold">ID: <b>002-00{{$student->id_code}}</b></h4>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6 text-left" style="width:40%;display:inline-block"><p>Toshkent shahri</p></div>
            <div class="col-md-6 text-right" style="width:50%;display:inline-block"><p>{{$year}} yil “{{$day}}” {{$month}}</p></div>
            <div class="col-md-12 mt-1 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp Toshkent davlat yuridik universiteti (keyingi oʻrinlarda – Taʼlim
                    muassasasi) nomidan 2020-yil 25-sentyabrdagi 08-176-son buyruq asosida ish yurituvchi prorektor
                    Iminov Azizulla Abdulatibovich bir tomondan, va <b>{{$student->birthday}}</b> yilda tugʻilgan
                    <b>{{$student->fio()}}</b> (keyingi oʻrinlarda – Talaba) ikkinchi tomondan (birgalikda –
                    Tomonlar),“Yurisprudensiya” taʼlim yoʻnalishi boʻyicha Talabani bakalavriat <b>{{$student->course}}</b> kurs davomida
                    oʻqitish maqsadida mazkur ikki tomonlama kontraktni (keyingi oʻrinlarda – Kontrakt) Oliy va oʻrta
                    maxsus, kasb-hunar taʼlimi muassasalarida oʻqitishning toʻlov-kontrakt shakli va undan tushgan
                    mablagʻlarni taqsimlash tartibi toʻgʻrisidagi nizom (roʻyxat raqami 2431, 2013-yil 26-fevral), OʻzR
                    Vazirlar Mahkamasining 2019-yil 3 dekabrdagi 967-son,
                    2021-yil 10-iyundagi 359-son qarorlari, Toshkent davlat yuridik universiteti rektorining 2022 yil
                    29-apreldagi 08-104-um son buyrugʼi, Oʻzbekiston Respublikasi taʼlim muassasalariga oʻqishga qabul
                    qilish boʻyicha Davlat komissiyasining 2022 yil 22-apreldagi 13-son qaroriga muvofiq tuzdilar:


                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    1. KONTRAKT PREDMETI
                </h4>
            </div>
            <div class="col-md-12 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp 1.1. Mazkur Kontraktga asosan Taʼlim muassasasi Talabani
                    2021/2022 oʼquv yili bahorgi semestr uchun belgilangan taʼlim standartlari va oʼquv dasturlariga
                    muvofiq oʼqitadi, Talaba esa Kontraktning 3-bobida koʻrsatilgan tartib va miqdordagi toʻlovni amalga
                    oshiradi hamda Taʼlim muassasasida belgilangan tartibga muvofiq taʼlim olish majburiyatini oladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp 1.2. Talabaning bakalavriat taʼlim yoʻnalishini muvaffaqiyatli tamomlash
                    muddati
                    @php
                    $ended = 2022+4-$student->course;
                    @endphp
                    {{$ended}} -yil iyun oyi hisoblanadi.

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
                    <b>2.1.</b> <b>Taʻlim muassasasining huquqlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.1. Talabadan shartnomaviy majburiyatlari bajarilishini, shu jumladan Taʼlim muassasasining ichki
                    hujjatlarida belgilangan qoidalarga rioya qilishni, oʼquv mashgʼulotlarida muntazam qatnashishni,
                    Taʼlim muassasasiga koʻchirishga doir tegishli hujjatlar taqdim etilishini, Kontrakt boʼyicha
                    toʻlovlarni oʼz vaqtida amalga oshirishni talab qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.2 Taʼlim muassasasining ichki hujjatlarida belgilangan qoidalarga rioya qilmagan, oʻqitish uchun
                    belgilangan miqdordagi toʻlovni oʻz vaqtida amalga oshirmagan Talabaga nisbatan belgilangan tartibda
                    talabalar safidan chetlashtirish yoki boshqa choralarni qoʻllash, GPA koʻrsatkichini toʻplay
                    olmagan, semestr va oʻquv yili yakuni natijalari boʻyicha akademik qarzdorligi bor Talabani tegishli
                    kursda qoldirish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.3.Talaba Taʼlim muassasasiga koʻchirishga doir tegishli hujjatlar taqdim etmagan, shuningdek
                    Taʼlim muassasasining ichki hujjatlarida belgilangan qoidalarni qoʼpol ravishda buzgan, xususan
                    huquqbuzarlik sodir etgan hollarda Kontraktni bir tomonlama bekor qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.4.Mehnatga haq toʻlashning eng kam miqdori oʻzgarishi bilan mos ravishda Kontrakt boʻyicha
                    toʻlov miqdorini bir tomonlama oʻzgartirish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.5.Istisno tariqasida Kontrakt boʼyicha toʻlov muddatlarini uzaytirish (Taʼlim muassasasining
                    buyrugʼi orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.6.Talaba belgilangan toʻlovni amalga oshirmaganda elektron tizimlardan foydalanishi va dars
                    mashgʼulotlariga qatnashishini cheklash.
                </p>

            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.2.</b> <b>Taʻlim muassasasining majburiyatlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.1. Oʻqitish uchun Oʻzbekiston Respublikasining “Taʼlim toʻgʻrisida”gi Qonuni va Kadrlar
                    tayyorlash milliy dasturiga muvofiq Taʼlim muassasasi Ustavi va boshqa ichki hujjatlarida nazarda
                    tutilgan zarur shart-sharoitlarni yaratadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.2. Talabalarning qonun hujjatlarida belgilangan huquqlarining bajarilishini taʼminlaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.3. Talabani tasdiqlangan oʻquv reja va dasturlarga muvofiq davlat standarti talablari darajasida
                    oʻqitadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.4. Talaba bakalavriat yoʻnalishini muvaffaqiyatli tamomlaganda belgilangan tartibda diplom
                    beradi.
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
                    2.3.1. Taʼlim muassasasidan shartnomaviy majburiyatlari bajarilishini talab qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.2. Taʼlim muassasasida tasdiqlangan oʻquv reja va dasturlarga muvofiq davlat standarti talablari
                    darajasida taʼlim olish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.3. Taʼlim muassasasining Axborot-resurs markazi, sport inshooti, Wi-Fi hududlaridan foydalanish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.4. Taʼlim muassasasining taʼlim jarayonlarini yaxshilashga doir takliflar berish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.5. Oʻqish uchun bir yillik toʼlov summasini bir yola toʼliq toʼlash.
                </p>

            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.4.</b> <b>Talabaning majburiyatlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.1. Joriy oʻquv yili uchun belgilangan oʻqitish qiymatini Kontraktning
                    3-bobida koʻrsatilgan tartib va miqdorda oʻz vaqtida toʻlaydi.

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.2.Akadem qarzdor boʻlgan talabalar oʻqishni davom ettirish uchun qonunchilikda belgilangan
                    kredit miqdorlariga mos ravishda toʻlovlarni amalga oshiradilar.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.3.Toshkent davlat yuridik universiteti Ustavi va boshqa ichki hujjatlari bilan tanishadi va
                    ularning talablariga qatʼiy rioya qiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.4.Oʻquv mashgʻulotlarida belgilangan tartib va meʼyorlarga muvofiq qatnashadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.5.Taʼlim muassasasida belgilangan tartib va doirada taʼlim oladi hamda ushbu jarayonda bilim
                    darajasini oshirib boradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.6.Kontraktni imzolangandan keyin Taʼlim muassasasiga taqdim etadi. Kontrakt elektron shaklda
                    Taʼlim muassasasining marketing.tsul.uz saytidan olingan taqdirda uning shartlari bilan tanishib,
                    rozi boʻlgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi.

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.7.Oʻzining xatti-harakatlari, OAV va ijtimoiy tarmoqlardagi chiqishlari bilan universitetning
                    ishchanlik obroʻsi va manfaatlariga putur yetkazmaslik hamda zarar yetkazishi mumkin boʻlgan
                    xatti-harakatlarini sodir etishdan tiyiladi.

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.8.Talabani Taʼlim muassasasiga oʻqishini koʻchirishga doir tegishli xujjatlarni belgilangan
                    tartibda taqdim etadi.

                </p>

            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    3. TOʻLOV MIQDORLARI VA MUDDATLARI
                </h4>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1. 2021/2022 oʻquv yilining bahorgi semestr uchun stipendiyasiz shaklda taʼlim olish uchun Talaba
                    tomonidan toʼlanishi lozim boʼlgan toʻlov summasi <b>{{$student->all_summa}}</b>
                    ({{$student->all_summa_word}}) soʻmni tashkil etadi va Kontraktning ushbu bobida belgilangan
                    tartibda toʼlanadi. Mazkur summa mehnatga haq toʼlashning eng kam miqdori oʻzgarishi bilan mos
                    ravishda Taʼlim muassasasi tomonidan oʻzgartirilishi mumkin.

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2. Talaba bahorgi semestr uchun <b>{{$student->all_summa}}</b>
                    ({{$student->all_summa_word}}) soʻmni quyidagi muddatlarda toʻlaydi: <br>
                    1-iyungacha - <b>{{$student->all_summa}}</b> soʻm;


                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3.Talaba tomonidan Kontrakt boʻyicha oʻqitish qiymatini toʻlashda toʻlov topshiriqnomasida ID
                    raqamini, Talabaning familiyasi, ismi, sharifi hamda oʻqiyotgan kursi toʻliq koʻrsatiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.4.Talaba tegishli fanlar boʻyicha akademik qarzdorlikni qayta topshirish sharti bilan keyingi kurs
                    (semestr)ga oʻtkazilgan taqdirda, keyingi semestr uchun toʻlov Talaba tomonidan akademik qarzdorlik
                    topshirilgunga qadar amalga oshiriladi.
                </p>
                <p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    4. SHARTNOMANI BEKOR QILISH
                </h4>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.Kontrakt quyidagi hollarda bekor qilinadi:
                </p>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.1. Tomonlarning oʻzaro roziligi bilan.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.2. Taʼlim muasasasining tashabbusiga koʻra Ustavi va boshqa ichki hujjatlariga muvofiq Talaba
                    talabalar safidan chiqarilganda.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.3.Oʻqitish qiymati belgilangan muddat ichida toʻlanmasa yoki Talaba Taʼlim muassasasiga
                    koʻchirishga doir tegishli hujjatlar taqdim etmasa (bunda, Taʼlim muassasasi Kontraktni bir
                    tomonlama bekor qiladi).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.4.Talabaning tashabbusiga koʻra (yozma murojaatga asosan).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.5.Kontraktning 2.1.3, 2.4.7-bandlarida koʻrsatilgan hollarda (Taʼlim muassasasi tomonidan
                    Kontraktning bir tomonlama bekor qilinishi va talabalar safidan chiqarilishi haqida Talabaga yozma
                    xabarnoma yuborish orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.6. Qonunchilikda koʻrsatilgan boshqa hollarda.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.2. Kontrakt Tomonlarning oʻzaro roziligi bilan oʼzgartiriladi, 2.1.4, 2.1.5-bandlarda koʻrsatilgan
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
                    5.1.Ushbu Shartnomaga asosan majburiyatlarni bajarilmasligi holatlari yengib boʻlmas kuchlar
                    (fors-major) holatlar natijasida vujudga kelganda Tomonlar oʻz majburiyatlarini bajarishdan qisman
                    yoki toʻliq ozod boʻladilar.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.2. Yengib boʻlmaydigan kuchlar (fors-major) holatlariga Tomonlarning irodasi va faoliyatiga
                    bogʻliq boʻlmagan tabiat hodisalari (pandemiya, zilzila, koʻchki, boʻron, qurgʻoqchilik va
                    boshqalar) yoki ijtimoiy-iqtisodiy holatlar (urush holati, qamal, davlat manfaatlarini koʻzlab
                    import va eksportni taʻqiqlash va boshqalar) sababli yuzaga kelgan sharoitlarda Tomonlarga qabul
                    qilingan majburiyatlarni bajarish imkonini bermaydigan favqulodda, oldini olib boʻlmaydigan va
                    kutilmagan holatlar kiradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.3. Shartnoma Tomonlaridan qaysi biri uchun majburiyatlarni yengib boʻlmaydigan kuchlar
                    (fors-major) holatlari sababli bajarmaslik maʻlum boʻlsa, darhol ikkinchi tomonga bu xaqda 10 kun
                    ichida dalillar bilan taqdim etishi lozim.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.4.Shartnomaga asosan majburiyatlarni ijro qilish muddati ushbu yengib boʻlmaydigan kuchlar
                    (fors-major) holatlar davom etish muddatiga qadar uzaytiriladi. Agar yengib boʻlmaydigan kuchlar
                    (fors-major) taʻsiri 30 (oʻttiz) kundan ortiqroq davom qilsa, Tomonlar tashabbusiga binoan Shartnoma
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
                    6.1. Kontrakt bevosita Tomonlar tomonidan imzolangan paytdan eʼtiboran kuchga kiradi, Kontraktning
                    6.2-bandida koʻrsatilgan holat bundan mustasno.
                </p>

                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.2. Kontrakt elektron shaklda Taʼlim muassasasining marketing.tsul.uz saytida joylashtirilgan
                    boʻlib, Talaba oʻz ID raqami va passport maʼlumotlarini kiritganidan soʻng uning shartlari bilan
                    tanishib, rozi boʻlgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi. Kontrakt
                    Talaba tomonidan yuklab olingan paytdan eʼtiboran tuzilgan va kuchga kirgan hisoblanadi.
                    <br>
                    Talaba Kontrakt shartlari bilan norozi boʻlgan taqdirda uch ish kunida, biroq joriy yilning 5
                    oktyabga qadar murojaat qilishi mumkin. Kontraktni tuzmagan va toʻlovlarni amalga oshirmagan
                    Talabani Taʼlim muassasasi talabalar safidan chiqarishga haqli.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.3. Tomonlar oʻrtasida vujudga keladigan nizolar oʻzaro muzokaralar olib borish hamda talabnoma
                    yuborish orqali hal etiladi, Kontraktning 4.1.2-4.1.5-bandlarida koʻrsatilgan holatlar bundan
                    mustasno.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.4. Mehnatga haq toʻlashning eng kam miqdori oʻzgarganda mos ravishda toʻlov-kontrakt qiymati
                    miqdori navbatdagi semestr boshidan oshiriladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.5.Kontrakt boʻyicha oʻz majburiyatlarini bajarmagan Tomon qonunda belgilangan javobgarlikka
                    tortiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.6.Tomonlar Kontrakt boʻyicha nizolarni muzokaralar va talabnoma yuborish yoʻli bilan hal
                    qilishadi, aks holda nizo fuqarolik sudida koʼrib chiqiladi.
                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    Tomonlarning manzillari va toʻlov rekvizitlari
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
