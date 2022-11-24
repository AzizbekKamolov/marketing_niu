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
                    Mutaxassisni qoʻshma ta’lim dasturi boʻyicha tayorlash haqida uch tomonlama
                    KONTRAKT

                    <br>
                    (stipendiyasiz shaklda)

                </h4>
                <br>
                <h4 class="text-bold"> №{{$student->id_code}}</h4>
                <br>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6 text-left"><p>Toshkent shahri</p></div>
            <div class="col-md-6 text-right"><p>{{date('Y' , strtotime($getting_date))}} yil
                    “{{date('d', strtotime($getting_date))}}
                    ” {{get_month_name(date('m' , strtotime($getting_date)))}}</p></div>
            <div class="col-md-12 mt-1 mb-1">
                <br>
                <p>
                    &nbsp &nbsp &nbsp &nbspToshkent davlat yuridik universiteti (keyingi o‘rinlarda – Ta’lim muassasasi)
                    nomidan Ustavga asosan @include('student.agreements_by_id.show.includes.include_variables') bir tomondan, va
                      _____________________________________________ (keyingi o'rinlarda - Tashkilot) nomidan
                    _____________________________________________ (vakolat beruvchi hujjat turi) asosan ish yurituvchi
                    _____________________________________________ (rahbarning familiyasi , ismi , sharifi, lavozimi)
                    ikkinchi tomondan
                    ______________________
                    yilda tug‘ilgan
                    <b>{{$student->fio()}}</b>
                    (keyingi oʻrinlarda – Talaba) uchinchi tomondan (birgalikda – Tomonlar) “Yurisprudensiya” ta’lim
                    yoʻnalishi doirasida M.S.Narikbayev nomidagi KAZGYU universiteti (Qozogʻiston Respublikasi) (keyingi
                    oʻrinlarda – KAZGYU universiteti) bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha talabani
                    bakalavriat bosqichida oʻqitish maqsadida mazkur kontraktni (keyingi oʻrinlarda – Kontrakt)
                    Oʻzbekiston Respublikasi Prezidentining 2020-yil 29-apreldagi
                    PF–5987-son Farmoni, 2019-yil 11-iyuldagi PQ–4391-son qarori, Oʻzbekiston Respublikasi Vazirlar
                    Mahkamasining 2019-yil 3-dekabrdagi 967-son va 2021-yil 6-iyuldagi 421-son qarori hamda Oliy va
                    oʻrta maxsus, kasb-hunar ta’limi muassasalarida oʻqitishning toʻlov-kontrakt shakli va undan tushgan
                    mablagʻlarni taqsimlash tartibi toʻgʻrisidagi nizomga (roʻyxat raqami 2431, 2013-yil 26-fevral)
                    muvofiq tuzdilar:

                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    1.SHARTNOMA PREDMETI
                </h4>
            </div>
            <div class="col-md-12 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.1.</b> Mazkur Kontraktga asosan Ta’lim muassasasi Talabani
                    2022/2023-oʻquv yili hamda 2023/2024-oʻquv yilining bahorgi semestri davomida belgilangan ta’lim
                    standartlari va oʻquv dasturlariga muvofiq oʻqitadi, Talaba esa Kontraktning 2-bobida koʻrsatilgan
                    tartib va miqdordagi toʻlovni amalga oshiradi hamda Ta’lim muassasasida belgilangan tartibga muvofiq
                    ta‘lim olish majburiyatini oladi.


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
                    <b>2.1.</b> KAZGYU universiteti bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha
                    2022/2023-oʻquv yili hamda 2023/2024-oʻquv yilining bahorgi semestri davomida ta’lim olishini
                    inobatga olgan holda Kontrakt boʻyicha toʻlovlar miqdori va muddatlari quyidagicha belgilandi:

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.1.1</b> . 2022/2023-oʻquv yili uchun toʻlov 34 500 000,0 (oʻttiz toʻrt million besh yuz ming)
                    soʻmni tashkil qiladi va quyidagi muddatlarda toʻlanadi:
                </p>
                <p>
                    2022-yil 1-noyabrgacha – 8 625 000,0 (sakkiz million olti yuz yigirma besh ming) soʻm; <br>
                    2022-yil 15-dekabrgacha – 8 625 000,0 (sakkiz million olti yuz yigirma besh ming) soʻm; <br>
                    2023-yil 15-fevralgacha – 8 625 000,0 (sakkiz million olti yuz yigirma besh ming) soʻm; <br>
                    2023-yil 01-maygacha – 8 625 000,0 (sakkiz million olti yuz yigirma besh ming) soʻm. <br>

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.1.2</b> 2023/2024-oʻquv yilining bahorgi semestri uchun toʻlov 23 100 000,0 (yigirma uch
                    million bir yuz ming) soʻm miqdorini tashkil qiladi va quyidagi muddatlarda toʻlanadi:
                </p>
                <p>
                    2024-yil 15-fevralgacha – 11 550 000,0 (oʻn bir million besh yuz ellik ming) soʻm; <br>
                    2024-yil 01-maygacha – 11 550 000,0 (oʻn bir million besh yuz ellik ming) soʻm.


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
                    <b>2.3.</b>KAZGYU universiteti bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha Kontraktni
                    stipendiyasizdan shakldan stipendiyali shakliga oʻtishga yoʻl qoʻyilmaydi.
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
                    3.1.5.Talabaga o’zma xabarnoma yuborish orqali Kontraktning 2-bobida ko’rsatilgan to’lov
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
                    3.2.2.Talabalarning qonun hujjatlarida belgilangan huquqlarining bajarilishini ta’minlaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2.3. Talabani tasdiqlangan oʻquv reja va dasturlarga muvofiq davlat standarti talablari darajasida
                    oʻqitadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2.4. Talaba KAZGYU universiteti bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha bakalavriat
                    yoʻnalishini muvaffaqiyatli tamomlaganda belgilangan tartibda diplom beradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2.5.KAZGYU universitetining xatiga asosan Talabani talabalar safiga kiritadi.
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
                    3.3.3.Ta’lim muassasasining Axborot-resurs markazi, sport inshooti, Wi-Fi hududlaridan foydalanish.
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
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>3.5.</b> <b>Tashkilotning huquqlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 page-break">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.5.1.Ta’lim muassasasidan shartnomaviy majburiyatlari bajarilishini talab qilish
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.5.2. Ta’lim muassasasining ta’lim jarayonlarini yaxshilashga doir takliflar berish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.5.3. O’qish uchun bir yillik to’lov summasini bir yola to’liq to’lash.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.5.4. Ta’lim muassasasidan Kontrakt bo’yicha to’lovni amalga oshirish uchun kerakli hujjat so’rash.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.5.5. Ta’lim muassasasidan Talabaning davomati va o’zlashtirishi haqida ma’lumot so’rash.
                </p>

            </div>

            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>3.6.</b> <b>Tashkilotning majburiyatlari::</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 page-break">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.6.1. Joriy o’quv yili uchun belgilangan o’qitish qiymatini Kontraktning 3-bobida ko’rsatilgan
                    tartib va miqdorda o’z vaqtida to’laydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.6.2. Boshqa Tomonlarning talabiga ko’ra Kontraktning to’lovlari yuzasidan taqqoslash
                    dalolatnomasini tuzish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.6.3. Kontraktni imzolangandan keyin Ta’lim muassasasiga taqdim etadi.
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
                    4.6.Talaba Ta’lim muasasasining talabalari safidan chiqarilganda KAZGYU universitetining talabalari
                    safidan ham avtomatik ravishda chiqariladi, shuningdek Talaba KAZGYU universitetining talabalari
                    safidan chiqarilganda Ta’lim muasasasining talabalari safidan avtomatik ravishda chiqariladi.
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
                    6.5. Ta’lim muasasasida oʻqitishning modul tizimi sharoitlarida talabalar bilimini nazorat
                    qilish tartibi va baholash mezonlari toʻgʻrisidagi nizom (roʻyxat raqami 2780, 2016 yil 22 aprel)ga
                    muvofiq qayta oʻzlashtirish uchun belgilangan tartibda oʻquv fanlari boʻyicha kelgusi semestrning
                    yakuniy nazorat davri boshlangunga qadar tegishli fanlar boʻyicha akademik qarzdorlikni qayta
                    topshirish sharti bilan keyingi kurs (semestr)ga oʻtkazilgan Talabadan ushbu semestr uchun ham
                    toʻlov undiriladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.6. KAZGYU universiteti va Talaba oʻrtasida mutaxassisni qoʻshma ta’lim dasturi boʻyicha tayorlash
                    haqida ikki tomonlama shartnoma(kontrakt) tuzilmagan taqdirda, mazkur Kontrakt oʻz kuchini
                    yoʻqotadi.

                </p>
            </div>
            @if($type_show == 'pdf')
                @include('student.agreement.join_training.agreements.includes.rekvizit_pdf')
            @elseif($type_show == 'show')
                @include('student.agreement.join_training.agreements.includes.rekvizit')
            @endif
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
