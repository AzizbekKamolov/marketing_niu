{{--2 tomonlama stipendiyali--}}
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@include('student.agreements_by_id.show.includes.style_show')
<div class="row">
    <div class="col-md-2"> </div>
    <div class="col-md-8 ">
        <div class="row">
            <div class="col-md-12 text-center text-bold">
                <h4 class="text-bold">
                    Toshkent davlat yuridik universitetida oʻqitish uchun
                    ikki tomonlama toʻlov kontrakt
                    <br>
                    (stipendiyali shaklda, 2,3 va 4-kurslar uchun)
                </h4>
                <h4 class="text-bold">SHARTNOMASI № {{$student->id_code}}</h4>
                <h4 class="text-bold">ID: <b>002-00{{$student->id_code}}</b></h4>
            </div>
            {{--            <div style="display: inline-block; width: 49%" class="">--}}
            {{--                {{$dateArray['year']}} yil “{{$dateArray['day']}} ” {{$dateArray['month']}}--}}
            {{--            </div>--}}
            {{--            <div style="display: inline-block; width: 49%" class=" text-right">--}}
            {{--                <span>Toshkent shahri</span>--}}
            {{--            </div>--}}
            <div class="col-md-6 text-left"><p>Toshkent shahri</p></div>
            <div class="col-md-6 text-right"><p>{{$dateArray['year']}} yil “{{$dateArray['day']}}
                    ” {{$dateArray['month']}}</p></div>
            <div class="col-md-12 mt-1 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp Toshkent davlat yuridik universiteti (keyingi oʻrinlarda – Taʻlim
                    muassasasi) nomidan Ustavga asosan ish yurituvchi rektor Tashkulov Akbar Djurabaevich bir tomondan
                    va
                    @if($student->birthday)
                    <b>{{date('Y-m-d' , strtotime($student->birthday))}}</b>
                    yilda
                    tug’ilgan @endif  <b>{{$student->fio()}}</b> (keyingi oʻrinlarda – Talaba) ikkinchi tomondan (birgalikda –
                    Tomonlar), “Yurisprudensiya” taʻlim yoʻnalishi boʻyicha Talabani bakalavriat {{$student->course}} - kurs davomida
                    oʻqitish maqsadida mazkur ikki tomonlama stipendiyali shakldagi toʻlov kontrakt shartnomasini
                    (keyingi oʻrinlarda – Shartnoma) Oliy va oʻrta maxsus, kasb-hunar taʻlimi muassasalarida
                    oʻqitishning toʻlov-kontrakt shakli va undan tushgan mablagʻlarni taqsimlash tartibi toʻgʻrisidagi
                    nizom (roʻyxat raqami 2431, 2013-yil 26-fevral), Oʻzbekiston Respublikasi Vazirlar Mahkamasining
                    2019-yil 3-dekabrdagi 967-son, 2021-yil 10-iyundagi 359-son qarorlari, Toshkent davlat yuridik
                    universiteti kengashining 2022-yil 31-avgustdagi 1-son majlis bayonnomasiga muvofiq tuzdilar:

                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    1. SHARTNOMA PREDMETI
                </h4>
            </div>
            <div class="col-md-12 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.1.</b> Mazkur Shartnomaga asosan Taʻlim muassasasi Talabani
                    2022/2023 oʻquv yili davomida belgilangan taʻlim standartlari, malaka talablari, oʻquv reja va
                    dasturlariga muvofiq oʻqitadi, Talaba esa Shartnomaning 3-bobida koʻrsatilgan tartib va miqdordagi
                    toʻlovni amalga oshiradi hamda Taʻlim muassasasida belgilangan tartibga muvofiq taʻlim olish
                    majburiyatini oladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.2.</b> Talabaning bakalavriat taʻlim yoʻnalishini muvaffaqiyatli
                    tamomlash muddati 2024-yil iyun oyi hisoblanadi.
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
                    2.1.1. Talabadan shartnomaviy majburiyatlari bajarilishini, shu jumladan Taʻlim muassasasining ichki
                    hujjatlarida belgilangan qoidalarga rioya qilishni, oʻquv mashgʻulotlarida muntazam qatnashishni,
                    Shartnoma boʻyicha toʻlovlarni oʻz vaqtida amalga oshirishni talab qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.2 Oʻzbekiston Respublikasi Vazirlar Mahkamasining 2021-yil 10-iyundagi 359-son qarori bilan
                    tasdiqlangan Toshkent davlat yuridik universitetida taʼlimning kredit-modul tizimida oʻquv
                    jarayonini tashkil etish tartibi toʻgʻrisida nizom, Oliy taʼlim toʻgʻrisida nizom (roʻyxat raqami
                    1222, 22.02.2003-yil) hamda Taʼlim muassasasining ichki hujjatlarida belgilangan qoidalarda nazarda
                    tutilgan asoslar boʻyicha Talabaga nisbatan belgilangan tartibda talabalar safidan chetlashtirish
                    yoki boshqa choralarni qoʻllash, GPA koʻrsatkichini toʻplay olmagan, semestr va oʻquv yili yakuni
                    natijalari boʻyicha akademik qarzdorligi bor Talabani tegishli kursda qoldirish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.3.Talaba Taʻlim muassasasining ichki hujjatlarida belgilangan qoidalarni qoʻpol ravishda buzgan,
                    xususan huquqbuzarlik sodir etgan hollarda Shartnomani bir tomonlama bekor qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.4.Mehnatga haq toʻlashning eng kam miqdori oʻzgarishi bilan mos ravishda Shartnoma boʻyicha
                    toʻlov miqdorini oʻzgartirish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.5.Istisno tariqasida Shartnoma boʻyicha toʻlov muddatlarini uzaytirish (Taʻlim muassasasi
                    rektorining buyrugʻi orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.6.Talaba belgilangan to’lovni amalga oshirmaganda elektron tizimlardan foydalanishi va dars
                    mashg‘ulotlariga qatnashishini cheklash.
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
                    2.2.1. Oʻqitish uchun Oʻzbekiston Respublikasining “Taʻlim toʻgʻrisida”gi Qonuniga muvofiq Taʻlim
                    muassasasi Ustavi va boshqa ichki hujjatlarida nazarda tutilgan zarur shart-sharoitlarni yaratadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.2. Talabalarning qonunchilik hujjatlarida belgilangan huquqlarining bajarilishini ta’minlaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.3. Talabani tasdiqlangan malaka talablari, oʻquv reja va dasturlarga muvofiq davlat standarti
                    talablari darajasida oʻqitadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.4.Talaba bakalavriat bosqichining yurisprudensiya taʻlim yoʻnalishini muvaffaqiyatli
                    tamomlaganda belgilangan tartibda diplom beradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.5. Talaba oʻquv yilining birinchi yarmi uchun toʻlovni amalga oshirganidan soʻng uni talabalar
                    safiga qabul qiladi.
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
                    2.3.2. Taʻlim muassasasida tasdiqlangan malaka talablari, oʻquv reja va dasturlarga muvofiq davlat
                    standarti talablari darajasida taʻlim olish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.3. Taʻlim muassasasining Axborot-resurs markazi, sport inshooti, Wi-Fi hududlaridan foydalanish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.4. Taʻlim muassasasining taʻlim jarayonlarini yaxshilashga doir takliflar berish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.5.Oʻqish uchun bir yillik toʻlov summasini bir yola toʻliq toʻlash.
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
                    2.4.1.Joriy oʻquv yili uchun belgilangan oʻqitish qiymatini Kontraktning 3-bobida koʻrsatilgan
                    tartib va miqdorda oʻz vaqtida toʻlaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.2.Akadem qarzdor boʻlgan talabalar oʻqishni davom ettirish uchun qonunchilikda belgilangan
                    tartibda kredit miqdorlariga mos ravishda toʻlovlarni amalga oshiradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.3.Taʻlim muassasi Ustavi va boshqa ichki hujjatlari, shu jumladan oʻquv tusdagi hujjatlar bilan
                    tanishadi va ularning talablariga qat’iy rioya qiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.4.Oʻquv mashgʻulotlarida belgilangan tartib va qoidalarga muvofiq ishtirok etadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.5. Fanlardan oʻzlashtirish koʻrsatkichlarini, jumladan nazorat turlaridan qoʻyilgan natijalarini
                    mustaqil ravishda bilib boradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.6. Taʻlim muassasasida belgilangan tartib va qoidagalarga muvofiq taʻlim oladi hamda oʻz bilim
                    darajasini oshirib boradi.

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.7. Shartnoma elektron shaklda Taʻlim muassasasining marketing.tsul.uz yoki Oliy va oʻrta taʻlim
                    vazirligining kontrakt.edu.uz saytida joylashtirilgan boʻlib, Talaba oʻz ID raqami yoki passport
                    maʻlumotlarini kiritadi va shartnoma shartlari bilan tanishadi. Agar talaba shartnoma shartlariga
                    rozi boʻlsa, u holda bu haqida tegishli tugmani bosadi va uni yuklab oladi. Shundan soʻng, shartnoma
                    stipendiyasiz shaklga qayta oʻzgartirilmaydi va koʻrib chiqilmaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.8.Oʻzining xatti-harakatlari, OAV va ijtimoiy tarmoqlardagi chiqishlari bilan universitetning
                    ishchanlik obroʻsi va manfaatlariga putur yetkazmaslik hamda zarar yetkazishi mumkin boʻlgan
                    xatti-harakatlarini sodir etishdan tiyiladi.
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
                    3.1.2022/2023-oʻquv yilida stipensiyali shaklda ta’lim olish uchun Talaba tomonidan toʻlanishi lozim
                    boʻlgan toʻlov summasi <b>{{$student->all_summa}}</b> ({{$student->all_summa_word}})
                    soʻmni tashkil etadi va Shartnomaning ushbu bobida belgilangan tartibda toʻlanadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2. Talaba kuzgi semestr uchun <b>{{$student->part1_summa}}</b>
                    ( {{$student->part1_summa_word}} )
                    so‘mni quyidagi muddatlarda to‘laydi:
                    <br>2022-yil 10-dekabrgacha - <b>{{$student->part_four_1_summa}} so‘m;</b>
                    <br>2023-yil 1-yanvargacha - <b>{{$student->part_four_2_summa}} so‘m.</b>


                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3. Talaba bahorgi semestr uchun <b>{{$student->part2_summa}}</b>
                    ( {{$student->part2_summa_word}}
                    ) so‘mni quyidagi muddatlarda to‘laydi:
                    <br>2023-yil 15-aprelgacha - <b>{{$student->part_four_3_summa}} so‘m</b>;
                    <br>2023-yil 1-iyulgacha -<b>{{$student->part_four_4_summa}} so‘m</b>.


                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.4.Talaba tomonidan Shartnoma boʻyicha oʻqitish qiymatini toʻlashda toʻlov topshiriqnomasida ID raqamini, Talabaning familiyasi, ismi, sharifi hamda oʻqiyotgan kursi toʻliq koʻrsatiladi.

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
                    4.1.2. Taʻlim muasasasining tashabbusiga koʻra Ustavi va boshqa ichki hujjatlariga muvofiq Talaba talabalar safidan chiqarilganda.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.3. Oʻqitish qiymati belgilangan muddat ichida toʻlanmasa (bunda, Taʻlim muassasasi Shartnomani bir tomonlama bekor qiladi, Talaba Talabalar safidan chiqariladi).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.4.Talabaning tashabbusiga koʻra (yozma murojaatga asosan).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.5.Shartnomaning 2.1.3-bandida koʻrsatilgan hollarda (Taʻlim muassasasi tomonidan Shartnomaning bir tomonlama bekor qilinishi va talabalar safidan chiqarilishi haqida Talabaga yozma xabarnoma yuborish orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1.6. Qonunchilikda koʻrsatilgan boshqa hollarda.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.2. Shartnoma Tomonlarning oʻzaro roziligi bilan oʻzgartiriladi, 2.1.4, 2.1.5-bandlarda koʻrsatilgan holatlar bundan mustasno.
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
                    5.1. Ushbu Shartnomaga asosan majburiyatlarni bajarilmasligi holatlari yengib boʻlmas kuchlar
                    (fors-major) holatlar natijasida vujudga kelganda Tomonlar oʻz majburiyatlarini bajarishdan qisman
                    yoki toʻliq ozod boʻladilar.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.2.Yengib boʻlmaydigan kuchlar (fors-major) holatlariga Tomonlarning irodasi va faoliyatiga bogʻliq
                    boʻlmagan tabiat hodisalari (pandemiya, zilzila, koʻchki, boʻron, qurgʻoqchilik va boshqalar) yoki
                    ijtimoiy-iqtisodiy holatlar (urush holati, qamal, davlat manfaatlarini koʻzlab import va eksportni
                    taʻqiqlash va boshqalar) sababli yuzaga kelgan sharoitlarda Tomonlarga qabul qilingan
                    majburiyatlarni bajarish imkonini bermaydigan favqulodda, oldini olib boʻlmaydigan va kutilmagan
                    holatlar kiradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.3. Shartnoma Tomonlaridan qaysi biri uchun majburiyatlarni yengib boʻlmaydigan kuchlar
                    (fors-major) holatlari sababli bajarmaslik maʻlum boʻlsa, darhol ikkinchi tomonga bu xaqda 10 kun
                    ichida dalillar bilan taqdim etishi lozim.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.4. Shartnomaga asosan majburiyatlarni ijro qilish muddati ushbu yengib boʻlmaydigan kuchlar
                    (fors-major) holatlar davom etish muddatiga qadar uzaytiriladi. Agar yengib boʻlmaydigan kuchlar
                    (fors-major) taʻsiri 30 (oʻttiz) kundan ortiqroq davom qilsa, Tomonlar tashabbusiga binoan Shartnoma
                    bekor qilinishi mumkin.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.5. Fors-major holatlarning mavjudligi va ularning amal qilish muddati Oʼzbekiston Respublikasi
                    davlat vakolatli organi tomonidan berilgan hujjat bilan tasdiqlanadi.
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
                    6.1. Shartnoma bevosita Tomonlar tarafidan imzolangan paytdan e’tiboran kuchga kiradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.2.Shartnoma elektron shaklda Ta’lim muassasasining marketing.tsul.uz yoki Oliy va o‘rta ta’lim
                    vazirligining kontrakt.edu.uz saytida joylashtirilgan boʻlib, Talaba oʻz ID raqami yoki passport
                    maʻlumotlarini kiritganidan soʻng shartnoma shartlari bilan tanishadi. Agar talaba shartnoma
                    shartlariga rozi boʻlsa, u holda bu haqida tegishli tugmani bosgan va uni yuklab olgan vaqtdan
                    eʻtiboran shartnomani imzolagan hisoblanadi.
                    <br>
                    Talaba shartnoma shartlaridan norozi boʻlgan taqdirda uch ish kunida universitet Talabalarga xizmat
                    koʻrsatish boʻlimiga murojaat qilishi mumkin. Shartnomani tuzmagan va toʻlovlarni amalga oshirmagan
                    Talabani Ta’lim muassasasi talabalar safidan chiqarishga haqli.

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.3. Mehnatga haq toʻlashning eng kam miqdori oʻzgarganda mos ravishda toʻlov-kontrakt qiymati
                    miqdori navbatdagi semestr boshidan oshiriladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.4. Shartnoma boʻyicha oʻz majburiyatlarini bajarmagan Tomon qonunchilikda belgilangan
                    javobgarlikka tortiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.5. Tomonlar oʻrtasida Shartnoma boʻyicha vujudga kelgan nizolar muzokaralar va talabnoma yuborish
                    yoʻli bilan hal etadilar. Agar tomonlar nizoni oʻzaro muzokaralar va talabnoma yuborish yoʻli bilan
                    hal eta olmasalar, mazkur nizo sudlovlilik va sudga taalluqlilik qoidalariga muvofiq fuqarolik
                    sudida hal etiladi.
                </p>

            </div>
             @include('student.agreements_by_id.show.includes.rekvisit_show')
            @include('student.agreements_by_id.show.includes.form_accept')


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
