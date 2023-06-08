<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>

        body{
            font-family: DejaVu Sans, sans-serif;
            font-size: 16px;
            text-align: justify;
            text-justify: inter-word;
        }
        ul {
            list-style-type: none;
        }
        .center{
            text-align: center;
        }
        .bold{
            font-weight: bold;
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
        .page-break {
            page-break-after: always;
        }

    </style>
</head>
<body>
    <div style="
    margin-top: 34.488188976px;
    margin-left: 43.38582677px;
    margin-right: 16.692913386px;
    margin-bottom: 34.488188976px

    ">
    <p class="center bold" >
        Toshkent davlat yuridik universitetida o’qitish uchun  <br/>
ikki tomonlama KONTRAKT ( @if($data->step == 1 ) <b>stipendiyali</b> @else <b>stipendiyasiz</b> @endif  shaklda, 2,3 va 4-kurslar uchun)
    </p>
    <p class="center bold">
        № ______
<br>
ID: <b>002-00{{ $data->id_code }}</b>
    </p>

   <p>
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
        <span style="float: left;">Toshkent sh.</span>
        <span style="float: right;">
            @if($data->getting_date)
                {{date('Y' , strtotime($data->getting_date))}} yil «{{ date('d' , strtotime($data->getting_date)) }}» {{ get_month_name(date('m' , strtotime($data->getting_date))) }}
                @else
            {{date('Y')}} yil «{{ date('d') }}» {{ get_month_name(date('m')) }}
                @endif
        </span>
   </p>
    <br>
    <p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Toshkent davlat yuridik universiteti (keyingi o‘rinlarda – Ta’lim muassasasi) nomidan Ustavga asosan ish yurituvchi Rektor Xakimov Raxim Rasuljonovich bir tomondan, va {{ $data->birthday }} yilda tug‘ilgan <span>
        <ul style="clear: both;">

    <li class="saaa">
        <p style="padding: 0;margin: 0;text-align: center">
          <b> {{ $data->fio() }}</b>
        </p>
        <hr style="padding: 0;margin:0; border-top: 0.8px solid black;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(Talabaning familiyasi, ismi, sharifi)</p>
    </li>
</ul>
    </span>
(keyingi o‘rinlarda – <b>Talaba</b>) ikkinchi tomondan (birgalikda – <b>Tomonlar</b>), “Yurisprudensiya” ta’lim yo‘nalishi bo‘yicha <b> Talabani</b> bakalavriat 2020-2021 o'quv yili davomida o‘qitish maqsadida mazkur ikki tomonlama kontraktni (keyingi o‘rinlarda – <b> Kontrakt</b>)  Oliy va o‘rta maxsus, kasb-hunar ta’limi muassasalarida o‘qitishning to‘lov-kontrakt shakli va undan tushgan mablag‘larni taqsimlash tartibi to‘g‘risidagi nizom (ro‘yxat raqami 2431, 2013 yil 26 fevral), O‘zbekiston Respublikasi Vazirlar Mahkamasining 2019 yil 3 dekabrdagi 967-son qarori, Toshkent davlat yuridik universiteti rektorining 2020 yil 16 sentyabrdagi 02-121-son buyrug’iga muvofiq tuzdilar:

    </p>
    <p class="center bold">
       <u> 1. KONTRAKT PREDMETI </u>
    </p>

    <p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  1. Mazkur <b> Kontraktga </b> asosan <b> Ta’lim muassasasi Talabani </b> 2020/2021 o’quv yili davomida belgilangan ta’lim standartlari va o’quv dasturlariga muvofiq o’qitadi, <b> Talaba </b> esa <b> Kontraktning</b> 3-bobida ko’rsatilgan tartib va miqdordagi to‘lovni amalga oshiradi hamda <b>Ta’lim muassasasida </b> belgilangan tartibga muvofiq ta’lim olish majburiyatini oladi.
    </p>

    <p class="center bold">
       <u>2. TOMONLARNING HUQUQ VA MAJBURIYATLARI </u>
    </p>
    <p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b>2.1. Ta’lim muassasasining huquqlari:</b>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.1.1. <b>Talabadan shartnomaviy</b> majburiyatlari bajarilishini, shu jumladan <b> Ta’lim muassasasining </b>ichki hujjatlarida belgilangan qoidalarga rioya qilishni, o’quv mashg’ulotlarida muntazam qatnashishni, <b>Kontrakt</b> bo’yicha to’lovlarni o’z vaqtida amalga oshirishni talab qilish.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.1.2. <b>Ta’lim muassasasining </b> ichki hujjatlarida belgilangan qoidalarga rioya qilmagan, bir semestr davomida darslarni uzrli sabablarsiz 74 soatdan ortiq qoldirgan yoki o‘qitish uchun belgilangan miqdordagi to‘lovni o‘z vaqtida amalga oshirmagan <b> Talabaga </b> nisbatan belgilangan tartibda talabalar safidan chetlashtirish, tegishli kursda qoldirish yoki boshqa choralarni qo’llash.

   <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.1.3. <b> Talaba Ta’lim muassasasining </b> ichki hujjatlarida belgilangan qoidalarni qo’pol ravishda buzgan, xususan huquqbuzarlik sodir etgan hollarda <b> Kontraktni </b> bir tomonlama bekor qilish.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.1.4. Mehnatga haq to'lashning eng kam miqdori o’zgarishi bilan mos ravishda <b>Kontrakt </b> bo’yicha to’lov miqdorini o’zgartirish.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.1.5. Istisno tariqasida <b> Kontrakt </b> bo’yicha to’lov muddatlarini uzaytirish (<b>Ta’lim muassasasining </b> buyrug’i orqali).
    <br/>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b>2.2. Ta’lim muassasasining majburiyatlari: </b>
  <br/>
    &nbsp;&nbsp;&nbsp;
    2.2.1. O‘qitish uchun O‘zbekiston Respublikasining “Ta’lim to‘g‘risida”gi Qonuni va Kadrlar tayyorlash milliy dasturiga muvofiq <b> Ta’lim muassasasi </b> Ustavi va boshqa ichki hujjatlarida nazarda tutilgan zarur shart-sharoitlarni yaratadi.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.2.2. <b> Talabalarning </b> qonun hujjatlarida belgilangan huquqlarining bajarilishini ta’minlaydi.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.2.3. Talabani tasdiqlangan o‘quv reja va dasturlarga muvofiq davlat standarti talablari darajasida o‘qitadi.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.2.4. Talaba bakalavriat yo’nalishini muvaffaqiyatli tamomlaganda belgilangan tartibda diplom beradi.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b>2.3. Talabaning huquqlari: </b>
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.3.1. <b> Ta’lim muassasasidan </b> shartnomaviy majburiyatlari bajarilishini talab qilish.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.3.2. Ta’lim muassasasida tasdiqlangan o‘quv reja va dasturlarga muvofiq davlat standarti talablari darajasida ta’lim olish.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.3.3. Ta’lim muassasasining Axborot-resurs markazi, sport inshooti, Wi-Fi hududlaridan foydalanish.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.3.4. Ta’lim muassasasining ta’lim jarayonlarini yaxshilashga doir takliflar berish.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.3.5. O’qish uchun bir yillik to’lov summasini bir yola to’liq to’lash.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.3.6. Kontrakt bo’yicha to‘lovni stipendiyasiz yoki stipendiyali shaklini joriy yilning 15 sentyabrga qadar tanlash.
     <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b>2.4. Talabaning majburiyatlari:  </b>
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    2.4.1. Joriy o‘quv yili uchun belgilangan o‘qitish qiymatini <b> Kontraktning </b> 3-bobida ko’rsatilgan tartib va miqdorda o‘z vaqtida to‘laydi.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.4.2. Toshkent davlat yuridik universiteti Ustavi va boshqa ichki hujjatlari talablariga qat’iy rioya qiladi.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.4.3. O’quv mashg’ulotlarida muntazam qatnashadi.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.4.4. <b>Ta’lim muassasasida </b> belgilangan tartib va doirada ta’lim oladi hamda ushbu jarayonda bilim darajasini oshirib boradi.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.4.5. <b> Kontrakt </b> bo’yicha to‘lovni stipendiyasiz yoki stipendiyali shaklini joriy yilning 15 sentyabrga qadar tanlaydi.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    2.4.6. <b>Kontraktni</b> imzolangandan keyin Ta’lim muassasasiga taqdim etadi. Kontrakt elektron shaklda <b>Ta’lim muassasasining</b> <b>marketing.tsul.uz</b> saytidan olingan taqdirda uning shartlari bilan tanishib, rozi bo’lgan holda bu haqda tegishli tugmani bosadi va <b>Kontraktni</b> yuklab oladi.
    <br/>

    </p>


    <p class="center bold">
       <u>3. TO’LOV MIQDORLARI VA MUDDATLARI  </u>
    </p>
    <p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    3.1. 2020/2021 o‘quv yilida @if($data->step == 1) stipendiyali @else stipendiyasiz @endif  shaklda ta’lim olish uchun <b> Talaba </b> tomonidan to’lanishi lozim bo’lgan to’lov summasi pandemiya sharoitini inobatga olgan holda 10 (o’n) foiz chegirma bilan @if($data->step == 1) <b> 13 940 117 </b> (O’n uch million to’qqiz yuz qirq ming bir yuz o’n yetti)  @else <b> 8 804 117 </b> (Sakkiz million sakkiz yuz to‘rt ming bir yuz o‘n yetti)  @endif so‘mni tashkil etadi va <b> Kontraktning </b> ushbu bobida belgilangan tartibda to’lanadi. Mazkur summa mehnatga haq to'lashning eng kam miqdori o’zgarishi bilan mos ravishda <b> Ta’lim muassasasi </b> tomonidan o’zgartirilishi mumkin.
     <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    3.2. <b>Talaba</b> kuzgi semestr uchun @if($data->step == 1) <b> 6 970 058 </b> (olti million to’qqiz yuz yetmish ming ellik sakkiz) @else <b> 4 402 058 </b> (to‘rt million to‘rt yuz ikki ming ellik sakkiz) @endif so‘mni quyidagi muddatlarda to’laydi:
     <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    15-oktyabgacha -@if($data->step == 1) 3 485 029 @else 2 201 029 @endif so’m;
     <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    15-dekabrgacha -@if($data->step == 1) 3 485 029 @else 2 201 029 @endif so’m.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    3.3. <b>Talaba</b> bahorgi semestr uchun  @if($data->step == 1) <b> 6 970 059 </b> (olti million to’qqiz yuz yetmish ming ellik to'qqiz) @else <b> 4 402 059 </b> (to‘rt million to‘rt yuz ikki ming ellik to'qqiz) @endif so‘mni quyidagi muddatlarda to’laydi:
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    15-fevralgacha -@if($data->step == 1) 3 485 029 @else 2 201 029 @endif so’m;
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    1-maygacha      -@if($data->step == 1) 3 485 030 @else 2 201 030 @endif so’m.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    3.4. <b>Talaba</b> tomonidan <b>Kontrakt</b> bo‘yicha o‘qitish qiymatini to‘lashda to‘lov topshiriqnomasida shartnomaning tartib raqami va sanasi, ID raqamini, <b>Talaba</b>ning familiyasi, ismi, sharifi hamda o‘qiyotgan kursi to‘liq ko‘rsatiladi.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    3.5. <b>Talaba</b> tegishli fanlar bo‘yicha akademik qarzdorlikni qayta topshirish sharti bilan keyingi kurs (semestr)ga o‘tkazilgan taqdirda, keyingi semestr uchun to‘lov <b>Talaba</b> tomonidan akademik qarzdorlik topshirilgunga qadar amalga oshiriladi.
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    3.6. O’zbekiston Respublikasi Vazirlar Mahkamasining 2020 yil 31 yanvardagi 59-son qaroriga va Toshkent davlat yuridik universiteti rektorining buyrug‘iga asosan har oyda o‘rnatilgan muddat va tartibda stipendiya to‘lovlarini amalga oshiradi (to‘lov-kontrakt qiymatini tegishli semestri uchun to’liq amalga oshirilganda
        so’ng stipendiya to’lanadi va to‘lov-kontrakt qiymatini stipendiyali shaklda to‘lash haqida murojaat qilgan talabalarga stipendiya to’lanadi);
    <br/>

    </p>

 <p class="center bold">
       <u>4. SHARTNOMANI BEKOR QILISH </u>
    </p>
    <p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    4. Kontrakt quyidagi hollarda bekor qilinadi:
     <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    4.1. Tomonlarning o‘zaro roziligi bilan.
     <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;
    4.2. Ta’lim muasasasining tashabbusiga ko‘ra Ustavi va boshqa ichki hujjatlariga muvofiq Talaba talabalar safidan chiqarilganda.
     <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    4.3. O‘qitish qiymati belgilangan muddat ichida to‘lanmasa (bunda, Ta’lim muassasasi ushbu shartnomani bir tomonlama bekor qiladi, Talaba Talabalar safidan chiqariladi).
     <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    4.4. Talabaning tashabbusiga ko‘ra (yozma murojaatga asosan).
     <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;
    4.5. Kontraktning 2.1.3-bandida ko’rsatilgan hollarda (Ta’lim muassasasi tomonidan Kontraktning bir tomonlama bekor qilinishi va talabalar safidan chiqarilishi haqida Talabaga yozma xabarnoma yuborish orqali).
     <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    4.6. Qonunchilikda ko‘rsatilgan boshqa hollarda.


    </p>


    <p class="center bold">
       <u>5. FORS-MAJOR HOLATLAR </u>
    </p>
     <p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    5.1. Ushbu Kontraktga asosan majburiyatlarni bajarilmasligi holatlari yengib bo'lmaydigan kuchlar (fors-major) holatlar natijasida vujudga kelganda Tomonlar o'z majburiyatlarini bajarmaslikdan qisman yoki to'liq ozod bo'ladilar.
     <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    5.2. Yengib bo'lmaydigan kuchlar (fors-major) holatlariga Tomonlarning irodasi va faoliyatiga bog'liq bo'lmagan tabiat hodisalari (pandemiya, zilzila, ko'chki, bo'ron, qurg'oqchilik va boshqalar) yoki ijtimoiy-iqtisodiy holatlar (urush holati, qamal, davlat manfaatlarini ko'zlab import va eksportni taqiqlash va boshqalar) sababli yuzaga kelgan sharoitlarda Tomonlarga qabul qilingan majburiyatlarni bajarish imkonini bermaydigan favqulodda, oldini olib bo'lmaydigan va kutilmagan holatlar kiradi.
     <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    5.3. Kontrakt Tomonlaridan qaysi biri uchun majburiyatlarni yengib bo'lmaydigan kuchlar (fors-major) holatlari sababli bajarmaslik ma'lum bo'lsa, darhol ikkinchi tomonga bu xaqda 10 kun ichida ushbu holatlar harakati sababini dalillar bilan taqdim etishi lozim.
     <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    5.4. Kontraktga asosan majburiyatlarni ijro qilish muddati ushbu yengib bo'lmaydigan kuchlar (fors-major) holatlar davom etish muddatiga qadar uzaytiriladi. Agar yengib bo'lmaydigan kuchlar (fors-major) ta'siri 30 (o’ttiz) kundan ortiqroq davom qilsa, Tomonlar tashabbusiga binoan shartnoma bekor qilinishi mumkin.
    </p>

    <p class="center bold">
       <u>6. YAKUNIY QOIDALAR </u>
    </p>
    <p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        6.1. Kontrakt bevosita Tomonlar tomonidan imzolangan paytdan e’tiboran kuchga kiradi, Kontraktning 6.2-bandida ko’rsatilgan holat bundan mustasno.
         <br/>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         6.2. Kontrakt elektron shaklda Ta’lim muassasasining marketing.tsul.uz saytida joylashtirilgan bo’lib, Talaba o’z ID raqami va passport ma’lumotlarini kiritganidan so’ng uning shartlari bilan tanishib, rozi bo’lgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi. Kontrakt Talaba tomonidan yuklab olingan paytdan e’tiboran tuzilgan va kuchga kirgan hisoblanadi.
         <br/>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Talaba Kontrakt shartlari bilan norozi bo’lgan taqdirda uch ish kunida, biroq joriy yilning 5 oktyabga qadar murojaat qilishi mumkin. Kontraktni tuzmagan va to’lovlarni amalga oshirmagan Talabani Ta’lim muassasasi talabalar safidan chiqarishga haqli.
         <br/>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        6.3. Tomonlar o‘rtasida vujudga keladigan nizolar o’zaro muzokaralar olib borish hamda talabnoma yuborish orqali hal etiladi, Kontraktning 4.2-4.5 bandlarida ko’rsatilgan holatlar bundan mustasno.
        <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        6.4. Mehnatga haq to‘lashning eng kam miqdori o‘zgarganda mos ravishda to‘lov-kontrakt qiymati miqdori navbatdagi semestr boshidan oshiriladi.
         <br/>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        6.5. Kontrakt bo’yicha o’z majburiyatlarini bajarmagan Tomon qonunda belgilangan javobgarlikka tortiladi.

        </p>




        <span class="page-break"></span>


    <p class="center bold">
        Tomonlarning manzillari va to`lov rekvizitlari
    </p>



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

        @if($data->step == 1)
            <span class="page-break"></span>
        <div class="col-md-12 text-center">
            <b>
                Toshkent davlat yuridik universitetida o‘qitish uchun 2020 yil
                @if($data->getting_date)
                {{date('Y' , strtotime($data->getting_date))}} yil «{{ date('d' , strtotime($data->getting_date)) }}» {{ get_month_name(date('m' , strtotime($data->getting_date))) }}
                @else
            {{date('Y')}} yil «{{ date('d') }}» {{ get_month_name(date('m')) }}
                @endif
                dagi
                    ikki tomonlama (stipendiyali shaklda)  _______________ -son KONTRAKTga
                    2-sonli Qo’shimcha kelishuv
            </b>
        </div>

        <p style="padding-bottom: 2px !important; margin-bottom: 2px !important;">
            Toshkent davlat yuridik universiteti (keyingi o‘rinlarda – Ta’lim muassasasi) nomidan Ustav asosida ish yurituvchi Rektor Xakimov Raxim Rasuljonovich bir tomondan va talaba {{$data->fio()}}  (keyingi o‘rinlarda – Talaba) O’zbekiston Respublikasi Prezidentinning 2020 yil 30 dekabrdagi “O’zbekiston Respublikasining “2021 yil uchun O’zbekiston Respublikasining Davlat byudjeti to’g’risida”gi Qonuni ijrosini ta’minlash chora-tadbirlari to’g’risida”gi PQ-4938-son qarorga асосан 2021-yil 1-fevraldan boshlab budjet muassasalari va tashkilotlari xodimlarining ish haqi hamda stipendiyalar miqdori 1,1 barobarga oshirilganligi tufayli 2020 yil “___”_____________dagi ikki tomonlama (stipendiyali shaklda)  _______________ -son Kontraktga quyidagi Qo’shimcha kelishuvni tuzdilar:
            Toshkent davlat yuridik universiteti nomidan Ustav asosida ish yurituvchi Rektor Xakimov Raxim Rasuljonovich (keyingi o‘rinlarda – Ta’lim muassasasi) bir tomondan va  talaba  {{$data->fio()}}  (keyingi o‘rinlarda – Talaba)  ikkinchi tomondan, tomonlar o’rtasida tuzilgan Toshkent davlat yuridik universitetida o’qitish uchun 2020 yil “_____” ____________dagi _____________________-son kontraktga quyidagilar haqida mazkur  Qo’shimcha kelishuvni tuzdilar:
        </p>
        <p style="padding-bottom: 2px !important; margin-bottom: 2px !important;">
            1. Kontraktning 3.3-bandi quyidagi tahrirda berilsin:
            “3.3. Talaba bahorgi semestr uchun 7 269 659 (yetti million ikki yuz oltmish to’qqiz ming olti yuz ellik to’qqiz) so‘mni quyidagi muddatlarda to‘laydi:
            15-fevralgacha – 3 634 829 so‘m;
            1-maygacha – 3 634 830 so‘m”.

        </p>
        <p style="padding-bottom: 2px !important; margin-bottom: 2px !important;">
           2. Ushbu Qo’shimcha kelishuv elektron shaklda Ta’lim muassasasining marketing.tsul.uz. saytida joylashtirilgan va Talaba o’z ID raqami va pasport ma’lumotlarini kiritganidan so’ng uning shartlari bilan tanishib, rozi bo’lgan holda bu haqda tegishli tugmani bosadi va Qo’shimcha kelishuvni yuklab oladi. Qo’shimcha kelishuv Talaba tomonidan yuklab olingan paytdan e’tiboran tuzilgan va kuchga kirgan hisoblanadi.
        </p>
        <p style="padding-bottom: 2px !important; margin-bottom: 2px !important;">
           3. Ushbu Qo’shimcha kelishuv 2020 yil “_____” ____________dagi  ______________-son kontraktning ajralmas qismi hisoblanadi va kontraktning qolgan qismi o’zgarishsiz qoladi.
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
            @endif




</div>
</body>
</html>
