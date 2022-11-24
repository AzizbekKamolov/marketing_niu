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
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center text-bold">
                <h4 class="text-bold">
                    Mutaxassisni qoʻshma taʻlim dasturi boʻyicha tayyorlash haqida ikki tomonlama
                    KONTRAKT
                    <br>
                    (stipendiyasiz sirtqi ta’lim shakli)

                </h4>
                <h4 class="text-bold"> №{{$student->id_code}}</h4>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6 text-left"><p>Toshkent shahri</p></div>
            <div class="col-md-6 text-right"><p>{{date('Y' , strtotime($getting_date))}} yil
                    “{{date('d', strtotime($getting_date))}}
                    ” {{get_month_name(date('m' , strtotime($getting_date)))}}</p></div>
            <div class="col-md-12 mt-1 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbspToshkent davlat yuridik universiteti (keyingi oʻrinlarda – Taʻlim muassasasi)
                    nomidan Ustavga asosan ish yurituvchi @include('student.agreements_by_id.show.includes.include_variables'), bir tomondan,
                    va
                    <b>{{$student->fio()}}</b>
                    (keyingi oʻrinlarda – Talaba), ikkinchi tomondan, (birgalikda – Tomonlar) “Yurisprudensiya (faoliyat
                    turlari boʻyicha)” taʻlim yoʻnalishi doirasida Belarus Respublikasi Yanka Kupala nomidagi Grodno
                    davlat universiteti (keyingi oʻrinlarda – GrGU) bilan tuzilgan qoʻshma taʻlim dasturi boʻyicha
                    talabani bakalavriat bosqichida oʻqitish maqsadida mazkur kontraktni (keyingi oʻrinlarda – Kontrakt)
                    Oʻzbekiston Respublikasi Prezidentining 2020-yil 29-apreldagi
                    PF–5987-son Farmoni, 2019-yil 11-iyuldagi PQ–4391-son qarori, Oʻzbekiston Respublikasi Vazirlar
                    Mahkamasining 2019-yil 3-dekabrdagi 967-son va 2021-yil 6-iyuldagi 421-son qarori hamda Oliy va
                    oʻrta maxsus, kasb-hunar taʻlimi muassasalarida oʻqitishning toʻlov-kontrakt shakli va undan tushgan
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
                    &nbsp &nbsp &nbsp &nbsp <b>1.1.</b> Kontraktga asosan Taʻlim muassasasi Talabani Kontraktning
                    2.1-bandida koʻrsatib oʻtilgan davr davomida belgilangan taʻlim standartlari va oʻquv dasturlariga
                    muvofiq toʻlov-kontrakt shakli asosida oʻqitadi, Talaba esa Kontraktning 2-bobida koʻrsatilgan
                    tartib
                    va miqdordagi toʻlovni amalga oshiradi hamda Taʻlim muassasasida belgilangan tartibga muvofiq taʻlim
                    olish majburiyatini oladi.


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
                    <b>2.1.</b> GrGU bilan tuzilgan qoʻshma taʻlim dasturi boʻyicha taʻlim olish joylari
                    va oʻqitishning toʻlov miqdorlari tegishli boʻlgan oliy taʻlim tashkilotlar, oʻqitishning toʻlov
                    miqdorlari va toʻlovlar reja-jadvali oʻquv yillari kesimida quyidagicha belgilandi:


                </p>
                @include('student.agreement.join_training.agreements.12_table')
                <br>
                * mazkur summaning yillik miqdori O‘zbekiston Respublikasi belgilangan bazaviy hisoblash miqdorining 31
                baravar miqdoridan kelib chiqib belgilangan. <br>
                ** mazkur summaning yillik miqdori O‘zbekiston Respublikasi belgilangan bazaviy hisoblash miqdorining 77
                baravar miqdoridan kelib chiqib belgilangan.


            </div>

            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.2.</b>Oʻquv yili davomida bazaviy hisoblash miqdori o‘zgarganda Taʼlim muassasasi tomonidan
                    oʻqitishning toʻlov miqdori qayta hisob-kitob qilinadi va bir tomonlama Kontraktga tegishli
                    oʻzgartirishlar kiritiladi.
                    Bunda, qayta hisob-kitob faqatgina oʻquv yilining qolgan muddati uchun amalga oshiriladi.
                    Qayta hisob-kitob natijasida toʻlanishi lozim boʻlgan qoʻshimcha mablagʻ oʻqitish uchun toʻlovni
                    oshirilganligi toʻgʻrisidagi xabarnoma olingan kundan boshlab Talaba tomonidan bir oy muddatda
                    amalga oshirilishi lozim.
                    Oʻqitishning toʻlov miqdori kamaytirilganda ortiqcha toʻlangan mablagʻ keyingi toʻlovlar hisobiga
                    oʻtkaziladi yoki toʻlovni amalga oshirgan Talabaning yozma murojaatiga koʻra qaytarib beriladi.

                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.3.</b>GrGU bilan tuzilgan qoʻshma taʻlim dasturi boʻyicha Kontraktni stipendiyasiz shakldan
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
                    3.1.1.Talabadan shartnomaviy majburiyatlari bajarilishini, shu jumladan Taʻlim muassasasining ichki
                    hujjatlarida belgilangan qoidalarga rioya qilishni, oʻquv mashgʻulotlarida muntazam qatnashishni,
                    Kontrakt boʻyicha toʻlovlarni oʻz vaqtida amalga oshirishni talab qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1.2.Oʻzbekiston Respublikasi Vazirlar Mahkamasining 2021-yil 6-iyuldagi 421-son qarori bilan
                    tasdiqlangan Oʻzbekiston Respublikasi va xorijiy hamkor oliy taʼlim tashkilotlarining qoʻshma taʼli
                    dasturlari asosida taʼlim faoliyatini tashkil etish tartibi toʻgʻrisida nizom, Oliy taʼlim
                    toʻgʻrisida nizom (roʻyxat raqami 1222, 22.02.2003-yil) hamda Taʼlim muassasasining ichki
                    hujjatlarida belgilangan qoidalarida nazarda tutilgan asoslar boʻyicha Talabaga nisbatan belgilangan
                    tartibda talabalar safidan chetlashtirish, tegishli kursda qoldirish yoki boshqa choralarni
                    qoʻllash.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1.3. Talaba Taʻlim muassasasining ichki hujjatlarida belgilangan qoidalarni qoʻpol ravishda
                    buzgan, xususan huquqbuzarlik sodir etgan hollarda Kontraktni bir tomonlama bekor qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1.4. Istisno tariqasida Kontrakt boʻyicha toʻlov muddatlarini uzaytirish (Taʻlim muassasasining
                    buyrugʻi orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.1.5.Talabaga yozma xabarnoma yuborish orqali Kontraktning 2-bobida koʻrsatilgan oʻqitishning
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
                    3.2.4. Talaba tomonidan toʻlangan yoki tijorat banki tomonidan taʻlim krediti boʻyicha oʻtkazilgan
                    va GrGUga tegishli boʻlgan toʻlov-kontrakt miqdorini GrGUga oʻtkazadi. Bunda GrGU va Talaba
                    o‘rtasida tuzilgan shartnomada GrGUga tegishli bo‘lgan oʻqitishning toʻlov miqdorlari 200 000 (ikki
                    yuz ming) Rossiya rubl miqdorida belgilanganligini inobatga olgan holda mablagʻlarni xorijiy
                    valyutaga konvertatsiya qilish, xalqaro hisob-kitoblarni amalga oshirish, valyuta kursi tufayli
                    yutqazishlar bilan bogʻliq va boshqa xarajatlar toʻliq Talaba hisobidan qoplanadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2.5.Talaba GrGU bilan tuzilgan qoʻshma taʻlim dasturi boʻyicha bakalavriat yoʻnalishini
                    muvaffaqiyatli tamomlaganda belgilangan tartibda diplom beradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2.6.GrGUning xatiga asosan Talabani talabalar safiga kiritadi.
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
                    3.4.5. Kontraktni imzolangandan keyin Ta’lim muassasasiga taqdim etadi. Kontrakt elektron shaklda
                    Ta’lim muassasasining marketing.tsul.uz saytidan olingan taqdirda uning shartlari bilan tanishib,
                    rozi boʻlgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi.
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
                    4.6.Talaba Taʻlim muasasasining talabalari safidan chiqarilganda GrGUning talabalari safidan ham
                    avtomatik ravishda chiqariladi, shuningdek Talaba GrGUning talabalari safidan chiqarilganda Taʻlim
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
                    6.2. Kontrakt elektron shaklda Ta’lim muassasasining marketing.tsul.uz saytida joylashtirilgan
                    boʻlib, Talaba oʻz passport ma’lumotlarini kiritganidan soʻng uning shartlari bilan tanishib, rozi
                    boʻlgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi. Kontrakt Talaba tomonidan
                    yuklab olingan paytdan e’tiboran tuzilgan va kuchga kirgan hisoblanadi.
                    Talaba Kontrakt shartlari bilan norozi boʻlgan taqdirda uch ish kunida, biroq joriy yilning 15
                    oktyabga qadar murojaat qilishi mumkin. Belgilangan muddatda Kontraktni tuzmagan va toʻlovlarni
                    amalga oshirmagan Talabani Taʻlim muassasasi talabalar safidan chiqarishga haqli.


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
                    6.5.Taʻlim muasasasida Oʻzbekiston Respublikasi Vazirlar Mahkamasining 2021-yil 10-iyundagi 359-son
                    qarori bilan tasdiqlangan Toshkent davlat yuridik universitetida taʼlimning kredit-modul tizimida
                    oʻquv jarayonini tashkil etish tartibi toʻgʻrisidagi nizom hamda Oʻqitishning modul tizimi
                    sharoitlarida talabalar bilimini nazorat qilish tartibi va baholash mezonlari toʻgʻrisidagi nizom
                    (roʻyxat raqami 2780, 2016-yil 22-aprel)ga muvofiq qayta oʻzlashtirish uchun belgilangan tartibda
                    oʻquv fanlari boʻyicha kelgusi semestrning yakuniy nazorat davri boshlangunga qadar tegishli fanlar
                    boʻyicha akademik qarzdorlikni qayta topshirish sharti bilan keyingi kurs (semestr)ga oʻtkazilgan
                    Talabadan ushbu semestr uchun ham toʻlov undiriladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.6.GrGU va Talaba oʻrtasida taʻlim olish va tegishli hisob-kitoblarni amalga oshirish boʻyicha
                    alohida toʻlov-kontrakt shartnomasi tuziladi. Bunda GrGU va Talaba oʻrtasida tuzilgan shartnomaning
                    shartlari mazkur Kontrakt shartlari oʻrtasida tafovutlar boʻlgan taqdirda GrGU va Talaba oʻrtasida
                    tuzilgan shartnomaning shartlari qoʻllaniladi (shu jumladan mazkur Kontraktning 2.1-bandida
                    koʻrsatilgan oʻqitishning toʻlov miqdorlari).
                    GrGU va Talaba oʻrtasida mutaxassisni qoʻshma taʻlim dasturi boʻyicha tayorlash haqida ikki
                    tomonlama shartnoma(kontrakt) tuzilmagan taqdirda, mazkur Kontrakt oʻz kuchini yoʻqotadi.


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
