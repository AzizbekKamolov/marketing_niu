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

@include('student.agreement.join_training.agreements.includes.php_function')
@include('student.agreement.join_training.agreements.includes.style_pdf')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 ">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center text-bold">
                <h4 class="text-bold">
                    2020 yil 21-oktyabrdagi {{$student->id_code}}-sonli shartnomaga
                    QOʻSHIMCHA KELISHUV № 1

                    <br>
                    (stipendiyasiz shaklda)

                </h4>
                <h4 class="text-bold"> №{{$student->id_code}}</h4>
                <h4 class="text-bold">ID: <b>{{$student->id_code}}</b></h4>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6 text-left"><p>Toshkent shahri</p></div>
            <div class="col-md-6 text-right"><p>{{date('Y' , strtotime($getting_date))}} yil
                    “{{date('d', strtotime($getting_date))}}
                    ” {{get_month_name(date('m' , strtotime($getting_date)))}}</p></div>
            <div class="col-md-12 mt-1 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp Toshkent davlat yuridik universiteti (keyingi oʻrinlarda – Ta’lim
                    muassasasi) nomidan Ustavga asosan ish yurituvchi @include('student.agreements_by_id.show.includes.include_variables'), bir tomondan, va
                    _____________ yilda tugʻilgan
                    <b>{{$student->fio()}}</b>
                    (keyingi oʻrinlarda – Talaba) ikkinchi tomondan 2021-yil 12-oktyabrdagi {{$student->id_code}}-sonli
                    kontrakt
                    shartnomasi (keyingi o‘rinlarda – Asosiy shartnoma)ga quyidagilar bo‘yicha qo‘shimcha kelishuv
                    tuzdilar:
                </p>
                <p>
                    1. Asosiy Shartnomaning 2.1.2-bandi quyidagi tahrirda bayon etilsin:
                    “2.1.2. 2022/2023 o‘quv yili uchun 17 400 000 (o'n yetti million to'rt yuz ming ) so'm. Bunda
                    belgilangan
                    to‘lov-kontrakt miqdorini bo‘lib quyidagi muddatlarda Ta’lim muassasasiga to‘lanadi:

                </p>
                2022-yil 15-noyabrgacha –4 350 000 (to'rt million uch yuz ellik ming) so'm; <br>
                2022-yil 15-dekabrgacha – 4 350 000 (to'rt million uch yuz ellik ming) so'm. <br>
                2023-yil 15-fevralgacha – 4 350 000 (to'rt million uch yuz ellik ming) so'm; <br>
                2023-yil 01-maygacha – 4 350 000 (to'rt million uch yuz ellik ming) so'm.” <br>

                2. Asosiy Shartnomaga 2.1.3-band qo‘shilsin va quyidagi tahrirda bayon etilsin:
                “2.1.3. 2022/2023 o‘quv yili uchun GrDUga 8 936 000 (sakkiz million to‘qqiz yuz o‘ttiz olti ming) so'm.
                Bunda belgilangan to‘lov-kontrakt miqdorini bo‘lib quyidagi muddatlarda GrDUning yoki Ta’lim
                muassasining hisob raqamiga to‘lanadi: <br>
                2022-yil 20-noyabrgacha – 2 234 000 (ikki million ikki yuz o’ttiz to’rt ming) so'm; <br>
                2022-yil 15-dekabrgacha – 2 234 000 (ikki million ikki yuz o’ttiz to’rt ming) so'm; <br>
                2023-yil 15-fevralgacha – 2 234 000 (ikki million ikki yuz o’ttiz to’rt ming) so'm; <br>
                2023-yil 01-maygacha – 2 234 000 (ikki million ikki yuz o’ttiz to’rt ming) so'm.” <br>

                3. Ushbu qoʻshimcha kelishuv ikki nusxada tuzilib, tomonlarga bir nusxadan beriladi va ularning har biri
                teng yuridik kuchga ega hisoblanadi.
                <br>
                4. Ushbu qoʻshimcha kelishuv 2021 yil 12-oktyabrdagi _________-sonli shartnomaning ajralmas qismi
                hisoblanadi va Asosiy shartnomaning boshqa bandlari oʻzgarishsiz qoldiriladi.
                <br>

            </div>
            @include('student.agreement.join_training.agreements.includes.qoshimcha_kelishuv_rekvizit')

            <span class="page-break"></span>
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center text-bold">
                <h4 class="text-bold">
                    Mutaxassisni qoʻshma ta’lim dasturi boʻyicha tayorlash haqida ikki tomonlama
                    KONTRAKT
                    <br>
                    (stipendiyasiz shaklda)

                </h4>
                <h4 class="text-bold"> №{{$student->id_code}}</h4>
                <h4 class="text-bold">ID: <b>{{$student->id_code}}</b></h4>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6 text-left"><p>Toshkent shahri</p></div>
            <div class="col-md-6 text-right"><p>2021 yil
                    “12” oktabr</p></div>
            <div class="col-md-12 mt-1 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp Toshkent davlat yuridik universiteti (keyingi oʻrinlarda – Ta’lim
                    muassasasi) nomidan Ustavga asosan ish yurituvchi rektor v.v.b. Rustambekov Islambek Rustambekovich,
                    bir tomondan, va _____________ yilda tugʻilgan
                    <b>{{$student->fio()}}</b>
                    (keyingi oʻrinlarda – Talaba) ikkinchi tomondan (birgalikda – Tomonlar) “Yurisprudensiya” ta’lim
                    yoʻnalishi doirasida Yanka Kupala nomidagi Grodno davlat universiteti (Belarus Respublikasi)
                    (keyingi oʻrinlarda – GrDU) bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha talabani bakalavriat
                    __-kurs bosqichida oʻqitish maqsadida mazkur kontraktni (keyingi oʻrinlarda – Kontrakt) Oʻzbekiston
                    Respublikasi Prezidentining 2020-yil 29-apreldagi
                    PF–5987-son Farmoni, 2019-yil 11-iyuldagi PQ–4391-son qarori, Oʻzbekiston Respublikasi Vazirlar
                    Mahkamasining 2019 yil 3 dekabrdagi 967-son va 2021-yil 6-iyuldagi 421-son qarorlari hamda Oliy va
                    oʻrta maxsus, kasb-hunar ta’limi muassasalarida oʻqitishning toʻlov-kontrakt shakli va undan tushgan
                    mablagʻlarni taqsimlash tartibi toʻgʻrisidagi nizomga (roʻyxat raqami 2431, 2013 yil 26 fevral)
                    muvofiq tuzdilar:

                </p>

            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    1.KONTRAKT PREDMETI
                </h4>
            </div>
            <div class="col-md-12 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.1.</b>Mazkur Kontraktga asosan GrDU Talabani 2021/2022 va 2023/2024
                    oʻquv yillari davomida belgilangan ta’lim standartlari va oʻquv dasturlariga muvofiq oʻqitadi,
                    Ta’lim muassasasi esa Talabani 2022/2023 oʻquv yili davomida belgilangan ta’lim standartlari va
                    oʻquv dasturlariga muvofiq oʻqitadi, Talaba esa Kontraktning 2-bobida koʻrsatilgan tartib va
                    miqdordagi toʻlovni amalga oshiradi hamda Ta’lim muassasasida belgilangan tartibga muvofiq ta‘lim
                    olish majburiyatini oladi.


                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.2.</b>Talabaning bakalavriat ta’lim yo‘nalishini muvaffaqiyatli
                    tamomlash muddati
                    2024 -yil iyun oyi hisoblanadi
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
                    <b>2.1.</b>GrDU bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha Talaba 2022/2023 oʻquv yili davomida
                    Ta’lim muassasasida ta’lim olishini inobatga olgan holda Kontrakt boʻyicha toʻlovlar miqdori va
                    muddatlari quyidagicha belgilandi:


                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.1.1</b>. 2021/2022- va 2023/2024-o‘quv yillari uchun har bir o‘quv yiliga 36 (oʻttiz olti)
                    bazaviy hisoblash miqdorini tashkil qiladi va quyidagi muddatlarda Ta’lim muassasasiga toʻlanadi:
                </p>
                <p>
                    2021-yil 15-oktyabgacha – 9 (toʻqqiz) bazaviy hisoblash miqdori; <br>
                    2021-yil 15-dekabrgacha – 9 (toʻqqiz) bazaviy hisoblash miqdori; <br>
                    2022-yil 15-fevralgacha – 9 (toʻqqiz) bazaviy hisoblash miqdori; <br>
                    2022-yil 01-maygacha – 9 (toʻqqiz) bazaviy hisoblash miqdori; <br>
                    2023-yil 15-oktyabgacha – 9 (toʻqqiz) bazaviy hisoblash miqdori; <br>
                    2023-yil 15-dekabrgacha – 9 (toʻqqiz) bazaviy hisoblash miqdori; <br>
                    2024-yil 15-fevralgacha – 9 (toʻqqiz) bazaviy hisoblash miqdori; <br>
                    2024-yil 01-maygacha – 9 (toʻqqiz) bazaviy hisoblash miqdori. <br>

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.1.2</b>. 2022/2023 o‘quv yili uchun 84 (sakson toʻrt) bazaviy hisoblash miqdori. Bunda
                    belgilangan to‘lov-kontrakt miqdorini bo‘lib quyidagi muddatlarda Ta’lim muassasasiga to‘lanadi:
                </p>
                <p>
                    2022-yil 1-noyabrgacha – 21 (yigirma bir) bazaviy hisoblash miqdori; <br>
                    2022-yil 15-dekabrgacha – 21 (yigirma bir) bazaviy hisoblash miqdori. <br>
                    2023-yil 15-fevralgacha – 21 (yigirma bir) bazaviy hisoblash miqdori; <br>
                    2023-yil 01-maygacha – 21 (yigirma bir) bazaviy hisoblash miqdori. <br>


                </p>


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
                    <b>2.3.</b>GrDU bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha Kontraktni stipendiyasizdan shakldan
                    stipendiyali shakliga oʻtishga yoʻl qoʻyilmaydi.
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
                    3.1.1.Talabadan shartnomaviy majburiyatlari bajarilishini, shu jumladan Ta’lim muassasasining ichki
                    hujjatlarida belgilangan qoidalarga rioya qilishni, oʻquv mashgʻulotlarida muntazam qatnashishni,
                    Kontrakt boʻyicha toʻlovlarni oʻz vaqtida amalga oshirishni talab qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1.2.Ta’lim muassasasining ichki hujjatlarida belgilangan qoidalarga rioya qilmagan, bir semestr
                    davomida darslarni uzrli sabablarsiz 74 soatdan ortiq qoldirgan yoki oʻqitish uchun belgilangan
                    miqdordagi toʻlovni oʻz vaqtida amalga oshirmagan Talabaga nisbatan belgilangan tartibda talabalar
                    safidan chetlashtirish, tegishli kursda qoldirish yoki boshqa choralarni qoʻllash.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1.3. Talaba Ta’lim muassasasining ichki hujjatlarida belgilangan qoidalarni qoʻpol ravishda
                    buzgan, xususan huquqbuzarlik sodir etgan hollarda Kontraktni bir tomonlama bekor qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1.4. Istisno tariqasida Kontrakt boʻyicha toʻlov muddatlarini uzaytirish (Ta’lim muassasasining
                    buyrugʻi orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1.5. Talabaga yozma xabarnoma yuborish orqali Kontraktning 2-bobida ko’rsatilgan to’lov
                    miqdorlarini bir tomonlama o’zgartirish.
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
                    3.2.1. Oʻqitish uchun Oʻzbekiston Respublikasining “Ta’lim toʻgʻrisida”gi Qonuni va Kadrlar
                    tayyorlash milliy dasturiga muvofiq Ta’lim muassasasi Ustavi va boshqa ichki hujjatlarida nazarda
                    tutilgan zarur shart-sharoitlarni yaratadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2.2. Talabalarning qonun hujjatlarida belgilangan huquqlarining bajarilishini ta’minlaydi.
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
                    3.3.1. Ta’lim muassasasidan shartnomaviy majburiyatlari bajarilishini talab qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3.2. Ta’lim muassasasida tasdiqlangan oʻquv reja va dasturlarga muvofiq davlat standarti talablari
                    darajasida ta’lim olish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3.3. Ta’lim muassasasining Axborot-resurs markazi, sport inshooti, Wi-Fi hududlaridan foydalanish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3.4.Ta’lim muassasasining ta’lim jarayonlarini yaxshilashga doir takliflar berish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3.5.Oʻqish uchun bir yillik toʻlov summasini bir yola toʻliq toʻlash.
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
                    3.4.2.Toshkent davlat yuridik universiteti Ustavi va boshqa ichki hujjatlari talablariga qat’iy
                    rioya qiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.4.3. Oʻquv mashgʻulotlarida muntazam qatnashadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.4.4. Ta’lim muassasasida belgilangan tartib va doirada ta’lim oladi hamda ushbu jarayonda bilim
                    darajasini oshirib boradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.4.5. Kontraktni imzolangandan keyin Ta’lim muassasasiga taqdim etadi. Kontrakt elektron shaklda
                    Ta’lim muassasasining marketing.tsul.uz saytidan olingan taqdirda uning shartlari bilan tanishib,
                    rozi boʻlgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi.
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
                    avtomatik ravishda chiqariladi, shuningdek Talaba GrDUning talabalari safidan chiqarilganda Ta’lim
                    muasasasining talabalari safidan avtomatik ravishda chiqariladi.
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
                    6.2. Kontrakt elektron shaklda Ta’lim muassasasining marketing.tsul.uz saytida
                    joylashtirilgan boʻlib, Talaba oʻz passport ma’lumotlarini kiritganidan soʻng uning shartlari bilan
                    tanishib, rozi boʻlgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi.
                    Kontrakt Talaba tomonidan yuklab olingan paytdan e’tiboran tuzilgan va kuchga kirgan hisoblanadi.
                    Talaba Kontrakt shartlari bilan norozi boʻlgan taqdirda uch ish kunida, biroq joriy
                    yilning 15 oktyabga qadar murojaat qilishi mumkin. Kontraktni tuzmagan va toʻlovlarni amalga
                    oshirmagan Talabani Ta’lim muassasasi talabalar safidan chiqarishga haqli

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
                    6.5. Ta’lim muasasasida oʻqitishning modul tizimi sharoitlarida talabalar bilimini nazorat qilish
                    tartibi va baholash mezonlari toʻgʻrisidagi nizom (roʻyxat raqami 2780, 2016 yil 22 aprel)ga muvofiq
                    qayta oʻzlashtirish uchun belgilangan tartibda oʻquv fanlari boʻyicha kelgusi semestrning yakuniy
                    nazorat davri boshlangunga qadar tegishli fanlar boʻyicha akademik qarzdorlikni qayta topshirish
                    sharti bilan keyingi kurs (semestr)ga oʻtkazilgan Talabadan ushbu semestr uchun ham toʻlov
                    undiriladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.6.GrDU va Talaba oʻrtasida mutaxassisni qoʻshma ta’lim dasturi boʻyicha tayorlash haqida ikki
                    tomonlama shartnoma(kontrakt) tuzilmagan taqdirda, mazkur Kontrakt oʻz kuchini yoʻqotadi.

                </p>
            </div>

            @include('student.agreement.join_training.agreements.includes.rekvizit_rustambekov')
            @include('student.agreement.join_training.agreements.includes.qr_code')
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
