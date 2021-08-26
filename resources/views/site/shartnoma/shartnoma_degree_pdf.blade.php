<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <style type="text/css">
        body{
            font-family: DejaVu Sans, sans-serif;
        }
        .flex{
            display: flex;
            justify-content: space-between;
        }
        p{
            display: block;
        }
        .bold{
            font-size: 22px ;
            font-weight: bold;
        }
        .col-md-12 h5{
            font-size: 19px !important;
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }
        .col-md-12{
            text-align: center;
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }
        p{
            margin-bottom: 10px !important;
        }
        .page-break {
            page-break-after: always;
        }
        .abs1{
            position: absolute;
            left: 0;
            width: 50%;
            /*height: 50px;*/
        }
        .abs2{
            position: absolute;
            right: 0;
            width: 50%;
            /*height: 50px;*/
        }

    </style>
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
</head>
<body>

<div class=" p-5">
    <div class="col-md-12">

        <h5>
            Mutaxassisni qoʻshma ta’lim dasturi boʻyicha tayorlash haqida ikki tomonlama
            KONTRAKT
            (stipendiyasiz shaklda)
        </h5>

    </div>
    <div class="col-md-12 mb-5">
        <div class="col-md-6 ml-auto mr-auto text-center">
             <b>ID: {{ $data->id_code }}</b>
        </div>
        <div class="col-md-6 ml-auto mr-auto text-center">
            № _________
        </div>
    </div>

<div  class="col-md-12" style="width: 100%; " >
    <div style="display: inline-block; width: 49%;">
        Toshkent sh.
    </div>
    <div style="display: inline-block; width: 49%; text-align: right;">
        @if($data->getting_date)
         2020 yil «{{ date('d' , strtotime($data->getting_date)) }}» {{ get_month_name(date('m' , strtotime($data->getting_date))) }}
         @else

         @endif

    </div>
</div>

@php
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
    @endphp


<p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Toshkent davlat yuridik universiteti (keyingi oʻrinlarda – <b>Ta’lim muassasasi</b>) nomidan Ustavga asosan ish yurituvchi rektor Xakimov Raxim Rasuljonovich bir tomondan, <b>{{ date('d-m-Y' , strtotime($data->birthday)) }}</b> yilda tugʻilgan <b>{{ $data->fio() }}</b>

(keyingi oʻrinlarda – <b>Talaba</b>) ikkinchi tomondan (birgalikda – <b>Tomonlar</b>) “Yurisprudensiya” ta’lim yoʻnalishi doirasida Yanka Kupala nomidagi Grodno davlat universiteti (Belarus Respublikasi) (keyingi oʻrinlarda – <b>GrDU</b>) bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha talabani bakalavriat bosqichida oʻqitish maqsadida mazkur kontraktni (keyingi oʻrinlarda – <b>Kontrakt</b>) Oʻzbekiston Respublikasi Prezidentining 2020-yil 29-apreldagi
PF–5987-son Farmoni, 2019-yil 11-iyuldagi PQ–4391-son qarori, Oʻzbekiston Respublikasi Vazirlar Mahkamasining 2019 yil 3 dekabrdagi 967-son qarori hamda Oliy va oʻrta maxsus, kasb-hunar ta’limi muassasalarida oʻqitishning toʻlov-kontrakt shakli va undan tushgan mablagʻlarni taqsimlash tartibi toʻgʻrisidagi nizomga (roʻyxat raqami 2431, 2013 yil 26 fevral) muvofiq tuzdilar:
</p>


<div class="col-md-12">

        <h5>
            1. KONTRAKT PREDMETI
        </h5>

</div>


<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    1.1. Mazkur <b>Kontraktga</b> asosan <b>Ta’lim muassasasi Talabani</b> 2022/2023 oʻquv yili davomida belgilangan ta’lim standartlari va oʻquv dasturlariga muvofiq oʻqitadi, <b>Talaba</b> esa <b>Kontraktning</b> 2-bobida koʻrsatilgan tartib va miqdordagi toʻlovni amalga oshiradi hamda <b>Ta’lim muassasasida</b> belgilangan tartibga muvofiq ta‘lim olish majburiyatini oladi.
</p>

<div class="col-md-12">

        <h5>
            2.  HISOB-KITOB QILISH TARTIBI
        </h5>

</div>


<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.1. <b>GrDU</b> bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha <b>Talaba</b> 2022/2023 oʻquv yili davomida <b>Ta’lim muassasasida</b> ta’lim olishini inobatga olgan holda <b>Kontrakt</b> boʻyicha toʻlovlar miqdori va muddatlari quyidagicha belgilandi:
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
2.1.1. 2020/2021-, 2021/2022- va 2023/2024-o‘quv yillari uchun har bir o‘quv yiliga 42 (qirq ikki) bazaviy hisoblash miqdorini tashkil qiladi va quyidagi muddatlarda <b>Ta’lim muassasasiga</b> toʻlanadi:

</p>
<p style="padding-left: 100px;">
    2020-yil 1-noyabrgacha – 10,5 (o‘nu, besh) bazaviy hisoblash miqdori;<br>
2020-yil 15-dekabrgacha – 10,5 (o‘nu, besh) bazaviy hisoblash miqdori;<br>
2021-yil 15-fevralgacha – 10,5 (o‘nu, besh) bazaviy hisoblash miqdori;<br>
2021-yil 01-maygacha – 10,5 (o‘nu, besh) bazaviy hisoblash miqdori;<br>
2021-yil 15-oktyabgacha – 10,5 (o‘nu, besh) bazaviy hisoblash miqdori;<br>
2021-yil 15-dekabrgacha – 10,5 (o‘nu, besh) bazaviy hisoblash miqdori;<br>
2022-yil 15-fevralgacha – 10,5 (o‘nu, besh) bazaviy hisoblash miqdori;<br>
2022-yil 01-maygacha – 10,5 (o‘nu, besh) bazaviy hisoblash miqdori;<br>
2023-yil 15-oktyabgacha – 10,5 (o‘nu, besh) bazaviy hisoblash miqdori;<br>
2023-yil 15-dekabrgacha – 10,5 (o‘nu, besh) bazaviy hisoblash miqdori;<br>
2024-yil 15-fevralgacha – 10,5 (o‘nu, besh) bazaviy hisoblash miqdori;<br>
2024-yil 01-maygacha – 10,5 (o‘nu, besh) bazaviy hisoblash miqdori.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
2.1.2. 2022/2023 o‘quv yili uchun 125 (bir yuz yigirma besh) bazaviy hisoblash miqdori. Bunda belgilangan to‘lov-kontrakt miqdorini bo‘lib quyidagi muddatlarda <b>Ta’lim muassasasiga</b> to‘lanadi:

</p>
<p style="padding-left: 100px;">
    2022-yil 15-oktyabgacha – 31,25 (o‘ttiz biru, yigirma besh) bazaviy hisoblash miqdori; <br>
    2022-yil 15-dekabrgacha – 31,25 (o‘ttiz biru, yigirma besh) bazaviy hisoblash miqdori. <br>
    2023-yil 15-fevralgacha – 31,25 (o‘ttiz biru, yigirma besh) bazaviy hisoblash miqdori; <br>
    2023-yil 01-maygacha – 31,25 (o‘ttiz biru, yigirma besh) bazaviy hisoblash miqdori. <br>
</p>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
2.2. <b>Kontraktni</b> amal qilish davrida bazaviy hisoblash miqdori oʻzgargan taqdirda <b>Kontrakt</b> boʻyicha tegishli ravishda oʻzgargan toʻlov miqdori oʻquv yilining keyingi davrida uchun toʻlanadi.

</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
2.3. <b>GrDU</b> bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha <b>Kontraktni</b> stipendiyasiz shakldan stipendiyali shakliga oʻtishga yoʻl qoʻyilmaydi.

</p>

<div class="col-md-12">

        <h5>
            3. TOMONLARNING HUQUQ VA MAJBURIYATLARI
        </h5>

</div>


<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>3.1. <b>Ta’lim muassasasining</b> huquqlari:</b>
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.1.1. <b>Talabadan</b> shartnomaviy majburiyatlari bajarilishini, shu jumladan <b>Ta’lim muassasasining</b> ichki hujjatlarida belgilangan qoidalarga rioya qilishni, oʻquv mashgʻulotlarida muntazam qatnashishni, <b>Kontrakt</b> boʻyicha toʻlovlarni oʻz vaqtida amalga oshirishni talab qilish.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.1.2. <b>Ta’lim muassasasining</b> ichki hujjatlarida belgilangan qoidalarga rioya qilmagan, bir semestr davomida darslarni uzrli sabablarsiz 74 soatdan ortiq qoldirgan yoki oʻqitish uchun belgilangan miqdordagi toʻlovni oʻz vaqtida amalga oshirmagan <b>Talabaga</b> nisbatan belgilangan tartibda talabalar safidan chetlashtirish, tegishli kursda qoldirish yoki boshqa choralarni qoʻllash.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.1.3. <b>Talaba Ta’lim muassasasining</b> ichki hujjatlarida belgilangan qoidalarni qoʻpol ravishda buzgan, xususan huquqbuzarlik sodir etgan hollarda <b>Kontraktni</b> bir tomonlama bekor qilish.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.1.4. Istisno tariqasida <b>Kontrakt</b> boʻyicha toʻlov muddatlarini uzaytirish (<b>Ta’lim muassasasining</b> buyrugʻi orqali).
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>3.2. Ta’lim muassasasining majburiyatlari:</b>
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.2.1. Oʻqitish uchun Oʻzbekiston Respublikasining “Ta’lim toʻgʻrisida”gi Qonuni va Kadrlar tayyorlash milliy dasturiga muvofiq <b>Ta’lim muassasasi</b> Ustavi va boshqa ichki hujjatlarida nazarda tutilgan zarur shart-sharoitlarni yaratadi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.2.2. <b>Talabalarning</b> qonun hujjatlarida belgilangan huquqlarining bajarilishini ta’minlaydi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.2.3. <b>Talabani</b> tasdiqlangan oʻquv reja va dasturlarga muvofiq davlat standarti talablari darajasida oʻqitadi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.2.4. <b>Talaba</b> GrDU bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha bakalavriat yoʻnalishini muvaffaqiyatli tamomlaganda belgilangan tartibda diplom beradi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.2.5. <b>GrDUning</b> xatiga asosan Talabani talabalar safiga kiritadi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>3.3. Talabaning huquqlari:</b>
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.3.1. <b>Ta’lim muassasasidan</b> shartnomaviy majburiyatlari bajarilishini talab qilish.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.3.2. <b>Ta’lim muassasasida</b> tasdiqlangan oʻquv reja va dasturlarga muvofiq davlat standarti talablari darajasida ta’lim olish.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.3.3. <b>Ta’lim muassasasining</b> Axborot-resurs markazi, sport inshooti, Wi-Fi hududlaridan foydalanish.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.3.4. <b>Ta’lim muassasasining</b> ta’lim jarayonlarini yaxshilashga doir takliflar berish.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.3.5. Oʻqish uchun bir yillik toʻlov summasini bir yola toʻliq toʻlash.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>3.4. Talabaning majburiyatlari:</b>
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.4.1. Joriy oʻquv yili uchun belgilangan oʻqitish qiymatini <b>Kontraktning</b> 2-bobida koʻrsatilgan tartib va miqdorda oʻz vaqtida toʻlaydi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.4.2. Toshkent davlat yuridik universiteti Ustavi va boshqa ichki hujjatlari talablariga qat’iy rioya qiladi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.4.3. Oʻquv mashgʻulotlarida muntazam qatnashadi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.4.4. <b>Ta’lim muassasasida</b> belgilangan tartib va doirada ta’lim oladi hamda ushbu jarayonda bilim darajasini oshirib boradi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.4.5. <b>Kontraktni</b> imzolangandan keyin <b>Ta’lim muassasasiga</b> taqdim etadi. <b>Kontrakt</b> elektron shaklda <b>Ta’lim muassasasining</b> marketing.tsul.uz saytidan olingan taqdirda uning shartlari bilan tanishib, rozi boʻlgan holda bu haqda tegishli tugmani bosadi va <b>Kontraktni</b> yuklab oladi.
</p>


<div class="col-md-12">

        <h5>
            4. SHARTNOMANI BEKOR QILISH
        </h5>

</div>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4. <b>Kontrakt</b> quyidagi hollarda bekor qilinadi:
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4.1. Tomonlarning oʻzaro roziligi bilan.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4.2. <b>Ta’lim muasasasining</b> tashabbusiga koʻra Ustavi va boshqa ichki hujjatlariga muvofiq <b>Talaba</b> talabalar safidan chiqarilganda.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4.3. Oʻqitish qiymati belgilangan muddat ichida toʻlanmasa (bunda, <b>Ta’lim muassasasi</b> <b>Kontraktni</b> bir tomonlama bekor qiladi, <b>Talaba</b> Talabalar safidan chiqariladi).
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4.4. <b>Talabaning</b> tashabbusiga koʻra (yozma murojaatga asosan).
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4.5. <b>Kontraktning</b> 3.1.3-bandida koʻrsatilgan hollarda (<b>Ta’lim muassasasi</b> tomonidan <b>Kontraktning</b> bir tomonlama bekor qilinishi va talabalar safidan chiqarilishi haqida Talabaga yozma xabarnoma yuborish orqali).
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4.6. <b>Talaba</b> <b>Ta’lim muasasasining</b> talabalari safidan chiqarilganda GrDUning talabalari safidan ham avtomatik ravishda chiqariladi, shuningdek Talaba <b>GrDUning</b> talabalari safidan chiqarilganda <b>Ta’lim muasasasining</b> talabalari safidan avtomatik ravishda chiqariladi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4.7. Qonunchilikda koʻrsatilgan boshqa hollarda.
</p>

<div class="col-md-12">

        <h5>
            5. FORS-MAJOR HOLATLAR
        </h5>

</div>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
5.1. Ushbu <b>Kontraktga</b> asosan majburiyatlarni bajarilmasligi holatlari yengib boʻlmaydigan kuchlar (fors-major) holatlar natijasida vujudga kelganda <b>Tomonlar</b> oʻz majburiyatlarini bajarmaslikdan qisman yoki toʻliq ozod boʻladilar.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
5.2. Yengib boʻlmaydigan kuchlar (fors-major) holatlariga <b>Tomonlarning</b> irodasi va faoliyatiga bogʻliq boʻlmagan tabiat hodisalari (pandemiya, zilzila, koʻchki, boʻron, qurgʻoqchilik va boshqalar) yoki ijtimoiy-iqtisodiy holatlar (urush holati, qamal, davlat manfaatlarini koʻzlab import va eksportni taqiqlash va boshqalar) sababli yuzaga kelgan sharoitlarda <b>Tomonlarga</b> qabul qilingan majburiyatlarni bajarish imkonini bermaydigan favqulodda, oldini olib boʻlmaydigan va kutilmagan holatlar kiradi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
5.3. <b>Kontrakt Tomonlaridan</b> qaysi biri uchun majburiyatlarni yengib boʻlmaydigan kuchlar (fors-major) holatlari sababli bajarmaslik ma’lum boʻlsa, darhol ikkinchi tomonga bu xaqda 10 kun ichida ushbu holatlar harakati sababini dalillar bilan taqdim etishi lozim.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
5.4. <b>Kontraktga</b> asosan majburiyatlarni ijro qilish muddati ushbu yengib boʻlmaydigan kuchlar (fors-major) holatlar davom etish muddatiga qadar uzaytiriladi. Agar yengib boʻlmaydigan kuchlar (fors-major) ta’siri 30 (oʻttiz) kundan ortiqroq davom qilsa, Tomonlar tashabbusiga binoan shartnoma bekor qilinishi mumkin.
</p>

<div class="col-md-12">

        <h5>
            6. YAKUNIY QOIDALAR

        </h5>

</div>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
6.1. <b>Kontrakt</b> bevosita <b>Tomonlar</b> tomonidan imzolangan paytdan e’tiboran kuchga kiradi, Kontraktning 6.2-bandida koʻrsatilgan holat bundan mustasno.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
6.2. <b>Kontrakt</b> elektron shaklda <b>Ta’lim muassasasining</b> marketing.tsul.uz saytida joylashtirilgan boʻlib, <b>Talaba</b> oʻz passport ma’lumotlarini kiritganidan soʻng uning shartlari bilan tanishib, rozi boʻlgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi. <b>Kontrakt</b> <b>Talaba</b> tomonidan yuklab olingan paytdan e’tiboran tuzilgan va kuchga kirgan hisoblanadi.
Talaba <b>Kontrakt</b> shartlari bilan norozi boʻlgan taqdirda uch ish kunida, biroq joriy yilning 1 noyabrga qadar murojaat qilishi mumkin. Kontraktni tuzmagan va toʻlovlarni amalga oshirmagan Talabani Ta’lim muassasasi talabalar safidan chiqarishga haqli.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
6.3. Talaba tomonidan shartnoma boʻyicha oʻqitish qiymatini toʻlashda toʻlov topshiriqnomasida shartnomaning tartib raqami va sanasi, talabaning familiyasi, ismi, sharifi hamda oʻqiyotgan kursi toʻliq koʻrsatiladi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
6.4. Tomonlar oʻrtasida vujudga keladigan nizolar oʻzaro muzokaralar olib borish hamda talabnoma yuborish orqali hal etiladi, Kontraktning 4.2-4.6 bandlarida koʻrsatilgan holatlar bundan mustasno.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
6.5. <b>Ta’lim muasasasida</b> oʻqitishning modul tizimi sharoitlarida talabalar bilimini nazorat qilish tartibi va baholash mezonlari toʻgʻrisidagi nizom (roʻyxat raqami 2780, 2016 yil 22 aprel)ga muvofiq qayta oʻzlashtirish uchun belgilangan tartibda oʻquv fanlari boʻyicha kelgusi semestrning yakuniy nazorat davri boshlangunga qadar tegishli fanlar boʻyicha akademik qarzdorlikni qayta topshirish sharti bilan keyingi kurs (semestr)ga oʻtkazilgan <b>Talabadan</b> ushbu semestr uchun ham toʻlov undiriladi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
6.6. <b>GrDU</b> va <b>Talaba</b> oʻrtasida mutaxassisni qoʻshma ta’lim dasturi boʻyicha tayorlash haqida ikki tomonlama shartnoma(kontrakt) tuzilmagan taqdirda, mazkur <b>Kontrakt</b> oʻz kuchini yoʻqotadi.
</p>
<div class="page-break"></div>

<div class="col-md-12">
    <h5>
        Tomonlarning manzillari va to`lov rekvizitlari
    </h5>
</div>
<div  class="col-md-12" style="width: 100%; " >
    <div style="display: inline-block; width: 49%;" class="abs1">
         <p class="">
                Ta’lim muassasasi
            </p>
            <img src="{{ public_path("pechat/pechat3.jpg") }}" alt="" style="width: 100%; height: auto;">

    </div>
    <div style="display: inline-block; width: 49%; text-align: left;" class="abs2">
        <p style="text-align: center !important; ">
            Talaba
        </p>


                <b>{{ $data->fio() }}</b>
                <br>
                Yashash manzili: {{ $data->address }} <br>

                Pasport seriyasi:  {{ $data->passport_seria }}  <br>
                Raqami: {{ $data->passport_number }}<br>

                Тел: {{ $data->phone }}<br>

                Imzo ______________



    </div>
</div>

    <span class="page-break"></span>
        <div class="col-md-12 text-center" style="text-align: center">
    <b>
        2020 yil
        @if($data->getting_date)
                {{date('Y' , strtotime($data->getting_date))}} yil «{{ date('d' , strtotime($data->getting_date)) }}» {{ get_month_name(date('m' , strtotime($data->getting_date))) }}
                @else
            {{date('Y')}} yil «{{ date('d') }}» {{ get_month_name(date('m')) }}
                @endif
        dagi  _________________ -son kontrakt
1-sonli Qo’shimcha kelishuv
    </b>
        </div>
{{--        <span style="float: left;">Toshkent sh.</span>--}}
{{--        <span style="float: right;">2020 yil «{{ date('d') }}» {{ get_month_name(date('m')) }} </span>--}}

        <p style="padding-bottom: 2px !important; margin-bottom: 2px !important;">
Toshkent davlat yuridik universiteti nomidan Ustav asosida ish yurituvchi Rektor Xakimov Raxim Rasuljonovich (keyingi o‘rinlarda – Ta’lim muassasasi) bir tomondan va  talaba  {{$data->fio()}}  (keyingi o‘rinlarda – Talaba)  ikkinchi tomondan, tomonlar o’rtasida tuzilgan Toshkent davlat yuridik universitetida o’qitish uchun 2020 yil “_____” ____________dagi _____________________-son kontraktga quyidagilar haqida mazkur  Qo’shimcha kelishuvni tuzdilar:
        </p>
        <p style="padding-bottom: 2px !important; margin-bottom: 2px !important;">
1. Kontraktning 6-bobidagi “Tomonlarning manzillari va to’lov rekvizitlari” bo’limida  Ta’lim muassasasi rekvizitlaridagi hisob raqamiga oid qatorlaridagi                                                      “Sh.h.r: 400910860262667950100009001” yozuvli raqam o’zgartirilib, quyidagi tahrirda berilsin:
  “Sh.h.r: 400910860262667094100009002”.
        </p>
        <p style="padding-bottom: 2px !important; margin-bottom: 2px !important;">
2. Ushbu Qo’shimcha kelishuv elektron shaklda Ta’lim muassasasining marketing.tsul.uz. saytida joylashtirilgan va Ta’lim muassasasi tomonidan Talabaga tegishli xabar berilgandan so’ng  Talaba o’z ID raqami va pasport ma’lumotlarini kiritganidan so’ng uning shartlari bilan tanishib, rozi bo’lgan holda bu haqda tegishli tugmani bosadi va Qo’shimcha kelishuvni yuklab oladi. Qo’shimcha kelishuv Talaba tomonidan yuklab olingan paytdan e’tiboran tuzilgan va kuchga kirgan hisoblanadi.
        </p>
        <p style="padding-bottom: 2px !important; margin-bottom: 2px !important;">
            3. Ushbu  Qo’shimcha kelishuv 2020 yil “_____” ____________dagi  ______________-son kontraktning ajralmas qismi hisoblanadi va kontraktning qolgan qismi o’zgarishsiz qoladi.
        </p>
        <span class="page-break"></span>

    <div >
        <div class="abs1">
            <p class="center bold">
                Ta’lim muassasasi
            </p>
            {{-- <img  src="{{ asset('pechat/pechat3.jpg') }}" style="width: 110%; height: auto;"> --}}
            @if($data->course == 1)
            <img src="{{ public_path("pechat/pechat_yangi.png") }}" alt="" style="width: 110%; height: auto;">
            @else
            <img src="{{ public_path("pechat/pechat_yangi.png") }}" alt="" style="width: 110%; height: auto;">
            @endif

        </div>
        <div class="abs2">
            <p class="center bold">
                Talaba
            </p>
            <ul style="clear: both;">
                <li class="saaa">
                    <p style="padding: 0;margin: 0;text-align: center">
                       <b>{{ $data->fio() }}</b>
                    </p>
                    <hr style="padding: 0;margin:0; border-top: 0.8px solid black;">
                    <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(F.I.SH)</p>
                </li>
            </ul>

            <br/>
                Manzili: {{ $data->address }}
            <br/>

                Pasport seriyasi: <b>{{ $data->passport_seria }}</b>
                 <br>
                 Pasport raqami: <b>{{ $data->passport_number }}</b>
            <br/>
            Tel: <b>{{ $data->phone }}</b>
            <br>
            Imzo __________

        </div>

    </div>




</div>
</body>
</html>
