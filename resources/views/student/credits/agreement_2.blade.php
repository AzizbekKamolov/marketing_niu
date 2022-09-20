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

    $month = get_month_name(date('m'));
    $day = date('d');
    $year = date('Y');
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
                    Toshkent davlat yuridik universitetida magistratura talabasini qayta oʻqitish uchun
                </h4>
                <h4 class="text-bold">SHARTNOMA №________</h4>
                <h4 class="text-bold">ID: <b>002-00{{$student->id_code}}</b></h4>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6 text-left"><p>Toshkent shahri</p></div>
            <div class="col-md-6 text-right"><p>{{$year}} yil “{{$day}}” {{$month}}</p></div>
            <div class="col-md-12 mt-1 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp Toshkent davlat yuridik universiteti (keyingi oʻrinlarda – Taʻlim
                    muassasasi) nomidan Ustavga asosan ish yurituvchi 2020-yil 25-sentyabrdagi 08-176-son buyruq asosida
                    ish yurituvchi prorektor Iminov Azizulla Abdulatibovich,
                    va magistratura talabasi
                    <b>{{$student->fio()}}</b> (keyingi oʻrinlarda – Talaba) ikkinchi tomondan (birgalikda –
                    Tomonlar), oʻzlashtirilmagan fanlardan qayta oʻqitish maqsadida mazkur ikki tomonlama
                    shartnomani (keyingi oʻrinlarda – Shartnoma) Oliy va oʻrta maxsus, kasb-hunar taʻlimi muassasalarida
                    oʻqitishning toʻlov-kontrakt shakli va undan tushgan mablagʻlarni taqsimlash tartibi toʻgʻrisidagi
                    nizom (roʻyxat raqami 2431, 2013-yil 26-fevral), Oʻzbekiston Respublikasi Vazirlar Mahkamasining
                    2021-yil 10-iyundagi “Oʻzbekiston Respublikasi Adliya vazirligi tizimidagi taʼlim muassasalarida
                    kredit-modul tizimini joriy etish chora-tadbirlari toʻgʻrisida”gi Qarori 359-son qarori, Toshkent
                    davlat yuridik universiteti rektorining 2022 yil 29-apreldagi 08-104-um-son buyrugʻiga muvofiq
                    tuzdilar:

                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    1. SHARTNOMA PREDMETI
                </h4>
            </div>
            <div class="col-md-12 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.1.</b> 1.1. Mazkur <b>Shartnomaga</b> asosan <b>Taʻlim muassasasi
                        Talabani</b>
                    belgilangan taʻlim standartlari va oʻquv dasturlariga muvofiq 2021/2022 oʻquv yilining bahorgi
                    semestridan oʻzlashtirmagan fanlarni qayta oʻqitadi, <b>Talaba</b> esa <b>Shartnomaning</b> 3-bobida
                    koʻrsatilgan
                    tartib va miqdordagi toʻlovni amalga oshiradi hamda <b>Taʻlim muassasasida</b> belgilangan tartibga
                    muvofiq
                    taʻlim olish majburiyatini oladi.
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
                    2.1.1. <b>Talabadan</b> shartnomaviy majburiyatlari bajarilishini, shu jumladan <b>Taʻlim
                        muassasasining</b> ichki
                    hujjatlarida belgilangan qoidalarga rioya qilishni, oʻquv mashgʻulotlarida muntazam qatnashishni,
                    <b>Shartnoma</b> boʻyicha toʻlovlarni oʻz vaqtida amalga oshirishni talab qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.2 Taʻlim muassasasining ichki hujjatlarida belgilangan qoidalarga rioya qilmagan, oʻqitish uchun
                    belgilangan miqdordagi toʻlovni oʻz vaqtida amalga oshirmagan Talabaga nisbatan belgilangan tartibda
                    talabalar safidan chetlashtirish yoki boshqa choralarni qoʻllash, semestr yakuni boʻyicha akademik
                    qarzdorligi bor Talabani tegishli kursda qoldirish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.3.Talaba Taʻlim muassasasining ichki hujjatlarida belgilangan qoidalarni qoʻpol ravishda buzgan,
                    xususan huquqbuzarlik sodir etgan hollarda Shartnomani bir tomonlama bekor qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.4.Istisno tariqasida Shartnoma boʻyicha toʻlov muddatlarini uzaytirish (Taʻlim muassasasining
                    buyrugʻi orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.5.Talaba belgilangan toʻlovni amalga oshirmaganda elektron tizimlardan foydalanishi va dars
                    mashgʻulotlariga qatnashishini cheklash.
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
                    2.2.1. Qayta oʻqitish uchun Oʻzbekiston Respublikasining “Taʻlim toʻgʻrisida”gi Qonuni, Vazirlar
                    Mahkamasining 2021-yil 10-iyundagi 359-son qarori va boshqa normativ-huquqiy hujjatlarga muvofiq
                    Taʻlim muassasasi Ustavi va boshqa ichki hujjatlarida nazarda tutilgan zarur shart-sharoitlarni
                    yaratadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.2. Talabalarning qonun hujjatlarida belgilangan huquqlarining bajarilishini taʻminlaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.3. Talabani tasdiqlangan oʻquv reja va dasturlarga muvofiq davlat standarti talablari darajasida
                    oʻqitadi.
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
                    2.3.1. Taʻlim muassasasidan shartnomaviy majburiyatlari bajarilishini talab qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.2. Taʻlim muassasasida tasdiqlangan oʻquv reja va dasturlarga muvofiq davlat standarti talablari
                    darajasida qayta oʻqitish xizmatlarini olish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.3. Taʻlim muassasasining Axborot-resurs markazi, sport inshooti, Wi-Fi hududlaridan foydalanish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.4. Taʻlim muassasasining taʻlim jarayonlarini yaxshilashga doir takliflar berish.
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
                    2.4.1. Qayta oʻqitish qiymatini Shartnomaning 3-bobida koʻrsatilgan tartib va miqdorda oʻz vaqtida
                    toʻlaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.2.Toshkent davlat yuridik universiteti Ustavi va boshqa ichki hujjatlari bilan tanishadi va
                    ularning talablariga qatʻiy rioya qiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.3.Oʻquv mashgʻulotlarida belgilangan tartib va meʻyorlarga muvofiq qatnashadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.4.Taʻlim muassasasida belgilangan tartib va doirada taʻlim oladi hamda ushbu jarayonda bilim
                    darajasini oshirib boradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.5.Shartnomani imzolangandan keyin Taʻlim muassasasiga taqdim etadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.6.Oʻzining xatti-harakatlari, OAV va ijtimoiy tarmoqlardagi chiqishlari bilan universitetning
                    ishshanlik obroʻsi va manfaatlariga putur yetkazmaslik hamda zarar yetkazishi mumkin boʻlgan
                    xatti-harakatlarini sodir etishdan tiyiladi.

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
                    3.1. 2021/2022 oʻquv yili bahorgi semestri hisobidan qayta oʻqitish uchun Talaba tomonidan bir kredit
                    miqdoriga <b>{{$one_credit_summa}}</b> ({{$summa_one_credit_word}}) soʻm,
                    jami <b>{{$credits}}</b>-kredit uchun <b>{{$summa}}</b> ({{$summa_word}}) soʻmni
                    Shartnomaning ushbu
                    bobida belgilangan tartibda oldindan toʻlanadi.

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2. Talaba Shartnomaning 3.1-bandidagi toʻlovni 2022-yil 1-iyunga qadar toʻlaydi.


                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3. Talaba tomonidan Shartnoma boʻyicha oʻqitish qiymatini toʻlashda toʻlov topshiriqnomasida
                    Shartnoma raqamini, Talabaning familiyasi, ismi, sharifi toʻliq koʻrsatiladi.


                </p>
                <p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    4. SHARTNOMANI BEKOR QILISH VA OʻZGARTIRISH
                </h4>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.Shartnoma quyidagi hollarda bekor qilinadi:
                </p>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.1. Tomonlarning oʻzaro roziligi bilan.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.2. Taʻlim muasasasining tashabbusiga koʻra Ustavi va boshqa ichki hujjatlariga muvofiq Talaba
                    talabalar safidan chiqarilganda.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.3.Oʻqitish qiymati belgilangan muddat ichida toʻlanmasa (bunda, Taʻlim muassasasi Shartnomani
                    bir tomonlama bekor qiladi, Talaba Talabalar safidan chiqariladi).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.4.Talabaning tashabbusiga koʻra (yozma murojaatga asosan).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.5. Shartnomaning 2.1.3-bandida koʻrsatilgan hollarda (Taʻlim muassasasi tomonidan Shartnomaning
                    bir tomonlama bekor qilinishi va talabalar safidan chiqarilishi haqida Talabaga yozma xabarnoma
                    yuborish orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.6. Qonunchilikda koʻrsatilgan boshqa hollarda.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.2. Shartnoma Tomonlarning oʻzaro roziligi bilan oʻzgartiriladi, 2.1.4, 2.1.5-bandlarda
                    koʻrsatilgan holatlar bundan mustasno.
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
                    6.1. Shartnoma bevosita Tomonlar tomonidan imzolangan paytdan eʻtiboran kuchga kiradi.
                </p>

                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.2. Tomonlar oʻrtasida vujudga keladigan nizolar oʻzaro muzokaralar olib borish hamda talabnoma
                    yuborish orqali hal etiladi, Shartnomaning 4.1.2-4.1.5 bandlarida koʻrsatilgan holatlar bundan
                    mustasno.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.3. Shartnoma boʻyicha oʻz majburiyatlarini bajarmagan Tomon qonunda belgilangan javobgarlikka
                    tortiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.4. Tomonlar Shartnoma boʻyicha nizolarni muzokaralar va talabnoma yuborish yoʻli bilan hal
                    qilishadi, aks holda nizo fuqarolik sudida koʻrib chiqiladi.
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
                            <p>Toshkent davlat yuridik universiteti</p>
                            <p>
                                Oʻzbekiston Respublikasi
                                Moliya vazirligi Gʻaznachiligi
                                Bank: HKKM MB Toshkent sh. B.B.
                                H/r: 23402000300100001010
                                STIR: 201122919, MFO: 00014
                                Sh.h.r: 400110860262667094100009002
                                STIR: 201122349, KOD 7094100
                                Tel.: (71) 233-66-36,
                                Manzil: Sayilgoh koʻchasi, 35-uy


                            </p>
                            <p>
                                Prorektor _____________A. Iminov
                            </p>
                            <p>
                                Bosh buxgalter _______________ M.Parpiyev
                            </p>
                            <p>
                                Shartnomaviy ta’lim xizmatlari
                                bo‘limi boshlig‘i ___________ A.Xundibayev

                            </p>
                            <p>
                                Yuridik byuro
                                katta yuriskonsulti
                                ______________E.Xosilov

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
            <div class="col-md-12 text-center" style="padding-bottom: 50px">
                <div class="tasdiq btn-success "
                     style="width: 100%; padding: 10px !important;margin-left:10px; margin-right: 10px ">
                    <p>
                        Men , Talaba <b>{{ $student->fio() }}</b> , shartnoma mazmuni bilan to'liq tanishdim va uning
                        shartlariga roziman hamda shaxsiy ma`lumotlarim
                        to'g'riligini tasdiqlayman
                    </p>
                </div>
                <form id="accept-form" action="{{route('student.credits.agreement_pdf')}}" method="post">
                    {{csrf_field()}}
                    {{method_field('POST')}}
                    <input type="text" hidden value="{{$student->id_code}}" name="id_code">
                       <input type="text" hidden value="{{$credit_id}}" name="credit_id">
                </form>
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
