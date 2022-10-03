<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>

         body{
            font-family: DejaVu Sans, sans-serif;
            font-size: 15px;
            text-align: justify;
            text-justify: inter-word;
        }
        .page-break {
            page-break-after: always;
        }
        .col-md-12{
            width: 100%;
        }
        .text-center{
            text-align: center;
        }
        .flex div{
            display: inline-block;
            width: 50%;

        }

    </style>
</head>
<body>

<div class="container">
 <div class="col-md-12 text-center">
        <b>
            Toshkent davlat yuridik universitetida o‘qitish uchun
        ikki tomonlama KONTRAKT (stipendiyasiz shaklda, magistratura uchun)
        </b>
    </div>

    <div class="col-md-12 text-center">
        <b>
               № _________
        </b>
    </div>

    <div class="col-md-12 text-center">
        <b>
               ID:002-00{{ $data->id_code }}

        </b>
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
    <div class="flex betwen">
        <div>
             Toshkent sh.
        </div>
        <div style="text-align: right;">
            @if($data->getting_date)
                {{date('Y' , strtotime($data->getting_date))}} yil «{{ date('d' , strtotime($data->getting_date)) }}» {{ get_month_name(date('m' , strtotime($data->getting_date))) }}
                @else
            {{date('Y')}} yil «{{ date('d') }}» {{ get_month_name(date('m')) }}
                @endif
        </div>
    </div>


Toshkent davlat yuridik universiteti (keyingi o‘rinlarda – <b>Ta’lim muassasasi</b>) nomidan Ustavga asosan ish yurituvchi Rektor Xakimov Raxim Rasuljonovich bir tomondan,
va talabalikka tavsiya etilgan abiturient <b>{{ $data->birthday }}</b> yilda tug‘ilgan <b>{{ $data->fio() }}</b>
(keyingi o‘rinlarda – <b>Talaba</b>) ikkinchi tomondan (birgalikda – Tomonlar), <b>Talaba</b>ni magistratura davomida o‘qitish maqsadida mazkur ikki tomonlama stipendiyasiz kontraktni (keyingi o‘rinlarda – Kontrakt)  Oliy va o‘rta maxsus, kasb-hunar ta’limi muassasalarida o‘qitishning to‘lov-kontrakt shakli va undan tushgan mablag‘larni taqsimlash tartibi to‘g‘risidagi nizom (ro‘yxat raqami 2431, 2013 yil 26 fevral), O‘zbekiston Respublikasi Vazirlar Mahkamasining 2019 yil 3 dekabrdagi 967-son qarori, Toshkent davlat yuridik universiteti rektorining 2020 yil 16 sentyabrdagi 02-121-son buyrug‘i, O’zbekiston Respublikasi ta’lim muassasalariga o’qishga qabul qilish bo’yicha Davlat komissiyasining 2020 yil 25 sentyabrdagi 5-son qaroriga muvofiq tuzdilar:


<div class="col-md-12 text-center">
    <b>
        1. KONTRAKT PREDMETI
    </b>
</div>

    1. Mazkur Kontraktga asosan <b>Ta’lim muassasasi</b> <b>Talaba</b>ni 2020/2021 o‘quv yili davomida belgilangan ta’lim standartlari va o‘quv dasturlariga muvofiq o‘qitadi, <b>Talaba</b> esa Kontraktning 3-bobida ko’rsatilgan tartib va miqdordagi to‘lovni amalga oshiradi hamda <b>Ta’lim muassasasi</b>da belgilangan tartibga muvofiq ta’lim olish majburiyatini oladi.

    <div class="col-md-12 text-center">
        <b>
            2.  TOMONLARNING HUQUQ VA MAJBURIYATLARI
        </b>
    </div>

2.1. Ta’lim muassasasining huquqlari:
<br>
2.1.1. <b>Talaba</b>dan shartnomaviy majburiyatlari bajarilishini, shu jumladan <b>Ta’lim muassasasi</b>ning ichki hujjatlarida belgilangan qoidalarga rioya qilishni, o’quv mash‘ulotlarida muntazam qatnashishni, Kontrakt bo‘yicha to‘lovlarni o‘z vaqtida amalga oshirishni talab qilish.
<br>
2.1.2. <b>Ta’lim muassasasi</b>ning ichki hujjatlarida belgilangan qoidalarga rioya qilmagan, bir semestr davomida darslarni uzrli sabablarsiz 74 soatdan ortiq qoldirgan yoki o‘qitish uchun belgilangan miqdordagi to‘lovni o‘z vaqtida amalga oshirmagan <b>Talaba</b>ga nisbatan belgilangan tartibda <b>talaba</b>lar safidan chetlashtirish, tegishli kursda qoldirish yoki boshqa choralarni qo‘llash.
<br>
2.1.3. <b>Talaba</b> <b>Ta’lim muassasasi</b>ning ichki hujjatlarida belgilangan qoidalarni qo’pol ravishda buzgan, xususan huquqbuzarlik sodir etgan hollarda Kontraktni bir tomonlama bekor qilish.
<br>
2.1.4. Mehnatga haq to‘lashning eng kam miqdori o‘zgarishi bilan mos ravishda Kontrakt bo‘yicha to‘lov miqdorini o‘zgartirish.
<br>
2.1.5. Istisno tariqasida Kontrakt bo‘yicha to‘lov muddatlarini uzaytirish (<b>Ta’lim muassasasi</b>ning buyrug‘i orqali).
<br>
2.2. <b>Ta’lim muassasasi</b>ning majburiyatlari:
<br>
2.2.1. O‘qitish uchun O‘zbekiston Respublikasining “Ta’lim to‘g‘risida”gi Qonuni va Kadrlar tayyorlash milliy dasturiga muvofiq <b>Ta’lim muassasasi</b> Ustavi va boshqa ichki hujjatlarida nazarda tutilgan zarur shart-sharoitlarni yaratadi.
<br>
2.2.2. <b>Talaba</b>larning qonun hujjatlarida belgilangan huquqlarining bajarilishini ta‘minlaydi.
<br>
2.2.3. <b>Talaba</b>ni tasdiqlangan o‘quv reja va dasturlarga muvofiq davlat standarti talablari darajasida o‘qitadi.
<br>
2.2.4. <b>Talaba</b> magistratura yo‘nalishini muvaffaqiyatli tamomlaganda belgilangan tartibda diplom beradi.
<br>
2.2.5. Abituriyent o’quv yilining birinchi yarmi uchun to’lovni amalga oshirganidan so’ng uni <b>talaba</b>lar safiga qabul qilish.
<br>

2.3. <b>Talaba</b>ning huquqlari:
<br>
2.3.1. <b>Ta’lim muassasasi</b>dan shartnomaviy majburiyatlari bajarilishini talab qilish.
<br>
2.3.2. <b>Ta’lim muassasasi</b>da tasdiqlangan o‘quv reja va dasturlarga muvofiq davlat standarti talablari darajasida ta’lim olish.
<br>
2.3.3. <b>Ta’lim muassasasi</b>ning Axborot-resurs markazi, sport inshooti, Wi-Fi hududlaridan foydalanish.
<br>
2.3.4. <b>Ta’lim muassasasi</b>ning ta’lim jarayonlarini yaxshilashga doir takliflar berish.
<br>
2.3.5. O‘qish uchun bir yillik to’lov summasini bir yola to’liq to’lash.
<br>
2.3.6. Kontraktni olgan kundan etiboran 3 (uch) ish kunida Kontrakt bo'yicha to'lovni stipendiyasiz yoki stipendiyali shaklini tanlash (o'zgartirish).
2.4. <b>Talaba</b>ning majburiyatlari:
<br>
2.4.1. Joriy o‘quv yili uchun belgilangan o‘qitish qiymatini Kontraktning 3-bobida ko‘rsatilgan tartib va miqdorda o‘z vaqtida to‘laydi.
<br>
2.4.2. Toshkent davlat yuridik universiteti Ustavi va boshqa ichki hujjatlari talablariga qat’iy rioya qiladi.
<br>
2.4.3. O’quv mashg’ulotlarida muntazam qatnashadi.
<br>
2.4.4. <b>Ta’lim muassasasi</b>da belgilangan tartib va doirada ta’lim oladi hamda ushbu jarayonda bilim darajasini oshirib boradi.
<br>
2.4.5. Kontraktni olgan kundan etiboran 3 (uch) ish kunida Kontrakt bo'yicha to'lovni stipendiyasiz yoki stipendiyali shaklini tanlash (o'zgartirish).
<br>
2.4.6. Kontraktni imzolangandan keyin <b>Ta’lim muassasasi</b>ga taqdim etadi. Kontrakt elektron shaklda <b>Ta’lim muassasasi</b>ning marketing.tsul.uz saytidan olingan taqdirda uning shartlari bilan tanishib, rozi bo’lgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi.

<div class="col-md-12 text-center">
    <b>
        3. TO’LOV MIQDORLARI VA MUDDATLARI
    </b>
</div>
3.1. 2020/2021 o‘quv yilida stipendiyasiz shaklda ta’lim olish uchun <b>Talaba</b> tomonidan to‘lanishi lozim bo‘lgan to’lov summasi pandemiya sharoitini inobatga olgan holda 10 (o’n) foiz chegirma bilan 9 904 631 (to’qqiz million to\qqiz yuz to’rt ming olti yuz o’ttiz bir) so‘mni tashkil etadi va Kontraktning ushbu bobida belgilangan tartibda to’lanadi. Mazkur summa mehnatga haq to’lashning eng kam miqdori o’zgarishi bilan mos ravishda <b>Ta’lim muassasasi</b> tomonidan o’zgartirilishi mumkin.
<br>
3.2. <b>Talaba</b> o’quv yilining birinchi yarmi uchun 4 952 315 (to’rt million to’qqiz yuz ellik ikki ming uch yuz o’n besh) so‘mni 2020 yilning 1 noyabrgacha to‘laydi.
<br>
3.3. <b>Talaba</b> o’quv yilining ikkinchi yarmi uchun 4 952 316 (to’rt million to’qqiz yuz ellik ikki ming uch yuz o’n olti ) so‘mni 2021 yilning 1 martgacha to‘laydi.
<br>
3.4. <b>Talaba</b> tomonidan Kontrakt bo‘yicha o‘qitish qiymatini to‘lashda to‘lov topshiriqnomasida ID raqamini, <b>Talaba</b>ning familiyasi, ismi, sharifi hamda o‘qiyotgan kursi to‘liq ko‘rsatiladi.
<br>
3.5. <b>Talaba</b> tegishli fanlar bo‘yicha akademik qarzdorlikni qayta topshirish sharti bilan keyingi kurs (semestr)ga o‘tkazilgan taqdirda, keyingi semestr uchun to‘lov <b>Talaba</b> tomonidan akademik qarzdorlik topshirilgunga qadar amalga oshiriladi.

<div class="col-md-12 text-center">
    <b>
        4. SHARTNOMANI BEKOR QILISH
    </b>
</div>


4. Kontrakt quyidagi hollarda bekor qilinadi:
<br>
4.1. Tomonlarning o‘zaro roziligi bilan.
<br>
4.2. Ta’lim muasasasining tashabbusiga ko‘ra Ustavi va boshqa ichki hujjatlariga muvofiq <b>Talaba</b> <b>talaba</b>lar safidan chiqarilganda.
<br>
4.3. O‘qitish qiymati belgilangan muddat ichida to‘lanmasa (bunda, <b>Ta’lim muassasasi</b> Kontraktni ni bir tomonlama bekor qiladi, <b>Talaba</b> <b>Talaba</b>lar safidan chiqariladi).
<br>
4.4. <b>Talaba</b>ning tashabbusiga ko‘ra (yozma murojaatga asosan).
<br>
4.5. Kontraktning 2.1.3-bandida ko‘rsatilgan hollarda (<b>Ta’lim muassasasi</b> tomonidan Kontraktning bir tomonlama bekor qilinishi va <b>talaba</b>lar safidan chiqarilishi haqida <b>Talaba</b>ga yozma xabarnoma yuborish orqali).
<br>
4.6. Qonunchilikda ko‘rsatilgan boshqa hollarda.

<div class="col-md-12 text-center">
    <b>
        5. FORS-MAJOR HOLATLAR
    </b>
</div>

5.1. Ushbu Kontraktga asosan majburiyatlarni bajarilmasligi holatlari yengib bo'lmaydigan kuchlar (fors-major) holatlar natijasida vujudga kelganda Tomonlar o'z majburiyatlarini bajarmaslikdan qisman yoki to‘liq ozod bo‘ladilar.
<br>
5.2. Yengib bo'lmaydigan kuchlar (fors-major) holatlariga Tomonlarning irodasi va faoliyatiga bog‘liq bo‘lmagan tabiat hodisalari (pandemiya, zilzila, ko'chki, bo'ron, qurg‘oqchilik va boshqalar) yoki ijtimoiy-iqtisodiy holatlar (urush holati, qamal, davlat manfaatlarini ko‘zlab import va eksportni taqiqlash va boshqalar) sababli yuzaga kelgan sharoitlarda Tomonlarga qabul qilingan majburiyatlarni bajarish imkonini bermaydigan favqulodda, oldini olib bo'lmaydigan va kutilmagan holatlar kiradi.
<br>
5.3. Kontrakt Tomonlaridan qaysi biri uchun majburiyatlarni yengib bo‘lmaydigan kuchlar (fors-major) holatlari sababli bajarmaslik ma'lum bo'lsa, darhol ikkinchi tomonga bu xaqda 10 kun ichida ushbu holatlar harakati sababini dalillar bilan taqdim etishi lozim.
<br>
5.4. Kontraktga asosan majburiyatlarni ijro qilish muddati ushbu yengib bo'lmaydigan kuchlar (fors-major) holatlar davom etish muddatiga qadar uzaytiriladi. Agar yengib bo'lmaydigan kuchlar (fors-major) ta'siri 30 (o‘ttiz) kundan ortiqroq davom qilsa, Tomonlar tashabbusiga binoan shartnoma bekor qilinishi mumkin.
<div class="col-md-12 text-center">
    <b>
        6. YAKUNIY QOIDALAR
    </b>
</div>

6.1. Kontrakt bevosita Tomonlar tomonidan imzolangan paytdan e’tiboran kuchga kiradi, Kontraktning 6.2-bandida ko’rsatilgan holat bundan mustasno.
<br>
6.2. Kontrakt elektron shaklda <b>Ta’lim muassasasi</b>ning marketing.tsul.uz saytida joylashtirilgan bo’lib, <b>Talaba</b> o’z ID raqami va passport ma’lumotlarini kiritganidan so’ng uning shartlari bilan tanishib, rozi bo’lgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi. Kontrakt <b>Talaba</b> tomonidan yuklab olingan paytdan e’tiboran tuzilgan va kuchga kirgan hisoblanadi.
<br>
<b>Talaba</b> Kontrakt shartlari bilan norozi bo’lgan taqdirda uch ish kunida, biroq joriy yilning 20 oktyabga qadar murojaat qilishi mumkin. Kontraktni tuzmagan va to’lovlarni amalga oshirmagan <b>Talaba</b>ni <b>Ta’lim muassasasi</b> <b>talaba</b>lar safidan chiqarishga haqli.
<br>
6.3. Tomonlar o‘rtasida vujudga keladigan nizolar o’zaro muzokaralar olib borish hamda talabnoma yuborish orqali hal etiladi, Kontraktning 4.2-4.5 bandlarida ko’rsatilgan holatlar bundan mustasno.
<br>
6.4. Mehnatga haq to‘lashning eng kam miqdori o‘zgarganda mos ravishda to‘lov-kontrakt qiymati miqdori navbatdagi semestr boshidan oshiriladi.
<br>
6.5. Kontrakt bo’yicha o’z majburiyatlarini bajarmagan Tomon qonunda belgilangan javobgarlikka tortiladi.
<p class="page-break"></p>
<div class="col-md-12 text-center">
    <b>
        Tomonlarning manzillari va to`lov rekvizitlari

    </b>
</div>
<div class="flex betwen" style="margin-top: 20px;">
    <div style="text-align: center;">
         Ta’lim muassasasi
    </div>
    <div  style="text-align: center;">
        Talaba
    </div>
</div>
<div class="flex betwen" style="position: relative; margin-top: 80px;" >
    <div>

            <img src="{{ public_path("pechat/pechat_yangi.png") }}" alt="" style="width: 90%; height: auto;">

    </div>
    <div>

       <b>{{ $data->fio() }}</b> <br><br>
        Manzili: {{ $data->address }} <br><br>
        Pasport seriyasi:  <b>{{ $data->passport_seria }}</b>  <br><br>
         Raqami: <b>{{ $data->passport_number }}</b> <br><br>

        Тел: <b>{{ $data->phone }}</b> <br> <br>

        Imzo ______________

    </div>
</div>

        <span class="page-break"></span>
        <div class="col-md-12 text-center">
    <b>
        2020 yil “___”_____________dagi  _________________ -son kontrakt
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

    <div class="flex betwen" style="position: relative; margin-top: 80px;" >

    <div>
         <div style="text-align: center; padding-left: 20px">
        <b>Ta’lim muassasasi</b>
         </div>
        <br>

            <img src="{{ public_path("pechat/pechat_yangi.png") }}" alt="" style="width: 90%; height: auto;">

    </div>
    <div style="margin-top: -10px">
       <div style="text-align: center">
           <b> Talaba</b>
       </div> <br>

       <b>{{ $data->fio() }}</b> <br>
        Manzili: {{ $data->address }} <br>
        Pasport seriyasi:  <b>{{ $data->passport_seria }}</b>
         Raqami: <b>{{ $data->passport_number }}</b> <br>


        <div style="width: 100%">Тел: {{ $data->phone }}</div>

        Imzo:





    </div>
</div>



</div>
</body>
</html>
