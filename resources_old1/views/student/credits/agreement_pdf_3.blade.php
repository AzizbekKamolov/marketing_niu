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
                    Toshkent davlat yuridik universitetida bakalavriat (sirtqi taʻlim shakl ) talabasini qayta oʻqitish uchun
                </h4>
                <h4 class="text-bold">SHARTNOMA ________</h4>
                <h4 class="text-bold">ID: <b>002-00{{$student->id_code}}</b></h4>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6 text-left" style="width: 30%;display: inline-block"><p>Toshkent shahri</p></div>
            <div class="col-md-6 text-right" style="width: 50%;display: inline-block"><p>{{$year}} yil “{{$day}}” {{$month}}</p></div>
            <div class="col-md-12 mt-1 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp Toshkent davlat yuridik universiteti (keyingi oʻrinlarda – Taʻlim
                    muassasasi) nomidan buyruqga asosan ish yurituvchi prorektor A.Iminov bir tomondan,
                    va sirtqi ta’lim shakli bakalavriat taʼlim yoʻnalishining
                    <b>{{$student->course}}</b> - kurs talabasi
                    <b>{{$student->fio()}}</b> (keyingi oʻrinlarda – Talaba) ikkinchi tomondan (birgalikda – Tomonlar),
                    oʻzlashtirilmagan fanlardan qayta oʻqitish maqsadida mazkur ikki tomonlama shartnomani (keyingi
                    oʻrinlarda – Shartnoma) Oliy va oʻrta maxsus, kasb-hunar taʻlimi muassasalarida oʻqitishning
                    toʻlov-kontrakt shakli va undan tushgan mablagʻlarni taqsimlash tartibi toʻgʻrisidagi nizom (roʻyxat
                    raqami 2431, 2013-yil 26-fevral), Oʻzbekiston Respublikasi Vazirlar Mahkamasining 2021-yil
                    10-iyundagi “Oʻzbekiston Respublikasi Adliya vazirligi tizimidagi taʼlim muassasalarida kredit-modul
                    tizimini joriy etish chora-tadbirlari toʻgʻrisida”gi Qarori 359-son qaroriga muvofiq tuzdilar:

                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    1. SHARTNOMA PREDMETI
                </h4>
            </div>
            <div class="col-md-12 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.1.</b> 1.1. Mazkur <b>Shartnomaga</b> asosan <b>Ta'lim muassasasi
                        Talabani</b>
                    belgilangan ta'lim standartlari va o'quv dasturlariga muvofiq 2021/2022 o'quv yilining kuzgi
                    semestridan o'zlashtirmagan fanlarni qayta o'qitadi, <b>Talaba</b> esa <b>Shartnomaning</b> 3-bobida
                    ko'rsatilgan
                    tartib va miqdordagi to'lovni amalga oshiradi hamda <b>Ta'lim muassasasida</b> belgilangan tartibga
                    muvofiq
                    ta'lim olish majburiyatini oladi.
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
                    <b>2.1.</b> <b>Ta'lim muassasasining huquqlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.1. <b>Talabadan</b> shartnomaviy majburiyatlari bajarilishini, shu jumladan <b>Ta'lim
                        muassasasining</b> ichki
                    hujjatlarida belgilangan qoidalarga rioya qilishni, o'quv mashg'ulotlarida muntazam qatnashishni,
                    <b>Shartnoma</b> bo'yicha to'lovlarni o'z vaqtida amalga oshirishni talab qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.2 Ta'lim muassasasining ichki hujjatlarida belgilangan qoidalarga rioya qilmagan, o'qitish uchun
                    belgilangan miqdordagi to'lovni o'z vaqtida amalga oshirmagan Talabaga nisbatan belgilangan tartibda
                    talabalar safidan chetlashtirish yoki boshqa choralarni qo'llash, semestr yakuni bo'yicha akademik
                    qarzdorligi bor Talabani tegishli kursda qoldirish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.3.Talaba Ta'lim muassasasining ichki hujjatlarida belgilangan qoidalarni qo'pol ravishda buzgan,
                    xususan huquqbuzarlik sodir etgan hollarda Shartnomani bir tomonlama bekor qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.4.Istisno tariqasida Shartnoma bo'yicha to'lov muddatlarini uzaytirish (Ta'lim muassasasining
                    buyrug'i orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.5.Talaba belgilangan to'lovni amalga oshirmaganda elektron tizimlardan foydalanishi va dars
                    mashg'ulotlariga qatnashishini cheklash.
                </p>

            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.2.</b> <b>Ta'lim muassasasining majburiyatlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.1. Qayta o'qitish uchun O'zbekiston Respublikasining “Ta'lim to'g'risida”gi Qonuni, Vazirlar
                    Mahkamasining 2021-yil 10-iyundagi 359-son qarori va boshqa normativ-huquqiy hujjatlarga muvofiq
                    Ta'lim muassasasi Ustavi va boshqa ichki hujjatlarida nazarda tutilgan zarur shart-sharoitlarni
                    yaratadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.2. Talabalarning qonun hujjatlarida belgilangan huquqlarining bajarilishini ta'minlaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.3. Talabani tasdiqlangan o'quv reja va dasturlarga muvofiq davlat standarti talablari darajasida
                    o'qitadi.
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
                    2.3.1. Ta'lim muassasasidan shartnomaviy majburiyatlari bajarilishini talab qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.2. Ta'lim muassasasida tasdiqlangan o'quv reja va dasturlarga muvofiq davlat standarti talablari
                    darajasida qayta o'qitish xizmatlarini olish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.3. Ta'lim muassasasining Axborot-resurs markazi, sport inshooti, Wi-Fi hududlaridan foydalanish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.4. Ta'lim muassasasining ta'lim jarayonlarini yaxshilashga doir takliflar berish.
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
                    2.4.1. Qayta o'qitish qiymatini Shartnomaning 3-bobida ko'rsatilgan tartib va miqdorda o'z vaqtida
                    to'laydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.2.Toshkent davlat yuridik universiteti Ustavi va boshqa ichki hujjatlari bilan tanishadi va
                    ularning talablariga qat'iy rioya qiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.3.O'quv mashg'ulotlarida belgilangan tartib va me'yorlarga muvofiq qatnashadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.4.Ta'lim muassasasida belgilangan tartib va doirada ta'lim oladi hamda ushbu jarayonda bilim
                    darajasini oshirib boradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.5.Shartnomani imzolangandan keyin Ta'lim muassasasiga taqdim etadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.6.O'zining xatti-harakatlari, OAV va ijtimoiy tarmoqlardagi chiqishlari bilan universitetning
                    ishshanlik obro'si va manfaatlariga putur yetkazmaslik hamda zarar yetkazishi mumkin bo'lgan
                    xatti-harakatlarini sodir etishdan tiyiladi.

                </p>

            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    3. TO'LOV MIQDORLARI VA MUDDATLARI
                </h4>
            </div>
            <div class="col-md-12 mb-1">
               <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1. 2021/2022 oʻquv yili kuzgi semestri hisobidan qayta oʻqitish uchun Talaba tomonidan bir kredit
                    miqdoriga <b>{{$one_credit_summa}}</b> ({{$summa_one_credit_word}}) soʻm,
                    jami <b>{{$credits}}</b>-kredit uchun <b>{{$summa}}</b> ({{$summa_word}}) soʻmni
                    Shartnomaning ushbu
                    bobida belgilangan tartibda oldindan toʻlanadi.

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2. Talaba Shartnomaning 3.1-bandidagi toʻlovni 2022-yil 25-iyuliga qadar toʻlaydi.


                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3. Talaba tomonidan Shartnoma boʻyicha oʻqitish qiymatini toʻlashda toʻlov topshiriqnomasida
                    Shartnoma raqamini, Talabaning familiyasi, ismi, sharifi toʻliq koʻrsatiladi.


                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    4. SHARTNOMANI BEKOR QILISH VA O'ZGARTIRISH
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
                    4.1.1. Tomonlarning o'zaro roziligi bilan.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.2. Ta'lim muasasasining tashabbusiga ko'ra Ustavi va boshqa ichki hujjatlariga muvofiq Talaba
                    talabalar safidan chiqarilganda.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.3.O'qitish qiymati belgilangan muddat ichida to'lanmasa (bunda, Ta'lim muassasasi Shartnomani
                    bir tomonlama bekor qiladi, Talaba Talabalar safidan chiqariladi).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.4.Talabaning tashabbusiga ko'ra (yozma murojaatga asosan).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.5. Shartnomaning 2.1.3-bandida ko'rsatilgan hollarda (Ta'lim muassasasi tomonidan Shartnomaning
                    bir tomonlama bekor qilinishi va talabalar safidan chiqarilishi haqida Talabaga yozma xabarnoma
                    yuborish orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.6. Qonunchilikda ko'rsatilgan boshqa hollarda.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.2. Shartnoma Tomonlarning o'zaro roziligi bilan o'zgartiriladi, 2.1.4, 2.1.5-bandlarda
                    ko'rsatilgan holatlar bundan mustasno.
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
                    5.1.Ushbu Shartnomaga asosan majburiyatlarni bajarilmasligi holatlari yengib bo'lmas kuchlar
                    (fors-major) holatlar natijasida vujudga kelganda Tomonlar o'z majburiyatlarini bajarishdan qisman
                    yoki to'liq ozod bo'ladilar.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.2. Yengib bo'lmaydigan kuchlar (fors-major) holatlariga Tomonlarning irodasi va faoliyatiga
                    bog'liq bo'lmagan tabiat hodisalari (pandemiya, zilzila, ko'chki, bo'ron, qurg'oqchilik va
                    boshqalar) yoki ijtimoiy-iqtisodiy holatlar (urush holati, qamal, davlat manfaatlarini ko'zlab
                    import va eksportni ta'qiqlash va boshqalar) sababli yuzaga kelgan sharoitlarda Tomonlarga qabul
                    qilingan majburiyatlarni bajarish imkonini bermaydigan favqulodda, oldini olib bo'lmaydigan va
                    kutilmagan holatlar kiradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.3. Shartnoma Tomonlaridan qaysi biri uchun majburiyatlarni yengib bo'lmaydigan kuchlar
                    (fors-major) holatlari sababli bajarmaslik ma'lum bo'lsa, darhol ikkinchi tomonga bu xaqda 10 kun
                    ichida dalillar bilan taqdim etishi lozim.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.4.Shartnomaga asosan majburiyatlarni ijro qilish muddati ushbu yengib bo'lmaydigan kuchlar
                    (fors-major) holatlar davom etish muddatiga qadar uzaytiriladi. Agar yengib bo'lmaydigan kuchlar
                    (fors-major) ta'siri 30 (o'ttiz) kundan ortiqroq davom qilsa, Tomonlar tashabbusiga binoan Shartnoma
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
                    6.1. Shartnoma bevosita Tomonlar tomonidan imzolangan paytdan e'tiboran kuchga kiradi.
                </p>

                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.2. Tomonlar o'rtasida vujudga keladigan nizolar o'zaro muzokaralar olib borish hamda talabnoma
                    yuborish orqali hal etiladi, Shartnomaning 4.1.2-4.1.5 bandlarida ko'rsatilgan holatlar bundan
                    mustasno.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.3. Shartnoma bo'yicha o'z majburiyatlarini bajarmagan Tomon qonunda belgilangan javobgarlikka
                    tortiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.4. Tomonlar Shartnoma bo'yicha nizolarni muzokaralar va talabnoma yuborish yo'li bilan hal
                    qilishadi, aks holda nizo fuqarolik sudida ko'rib chiqiladi.
                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    Tomonlarning manzillari va to'lov rekvizitlari
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
                             <img style="width:280px" src="{{asset('pechat/pechat_kredit2.jpg')}}">
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
