@extends('layouts.marketing_enno')
@section('content')
<style type="text/css">
    .flex{
        display: flex;

    }
    .betwen{
        justify-content: space-between;
    }
</style>
<div class="container">
<div class="col-md-12 text-center">
    <b>
            Toshkent davlat yuridik universitetida o‘qitish uchun
            ikki tomonlama KONTRAKT ( @if($data->step == 1) stipendiyali @else stipendiyasiz @endif shaklda @if(date('Y-m-d' , strtotime($data->created_at)) > '2020-10-05') , 1-kurs uchun @endif)
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
    <div>
         @if($data->getting_date)
                {{date('Y' , strtotime($data->getting_date))}} yil «{{ date('d' , strtotime($data->getting_date)) }}» {{ get_month_name(date('m' , strtotime($data->getting_date))) }}
                @else
            {{date('Y')}} yil «{{ date('d') }}» {{ get_month_name(date('m')) }}
                @endif
    </div>
</div>



Toshkent davlat yuridik universiteti (keyingi o‘rinlarda – <b>Ta’lim muassasasi</b>) nomidan Ustavga asosan ish yurituvchi Rektor Xakimov Raxim Rasuljonovich bir tomondan,
va @if($data->created_at > '2020-10-05 00:00:000') talabalikka tavsiya etilgan abiturient @endif  <b>{{ $data->birthday }}</b> yilda tug‘ilgan <b>{{ $data->fio() }}</b>
(keyingi o‘rinlarda – <b>Talaba</b>) ikkinchi tomondan (birgalikda – Tomonlar), “Yurisprudensiya” ta’lim yo‘nalishi bo‘yicha <b>Talaba</b>ni @if($data->created_at > '2020-10-05 00:00:000')  bakalavriat 1-kurs davomida  @endif o‘qitish maqsadida mazkur ikki tomonlama @if($data->step == 2) stipendiyali @else stipendiyasiz @endif kontraktni (keyingi o‘rinlarda – Kontrakt)  Oliy va o‘rta maxsus, kasb-hunar ta’limi muassasalarida o‘qitishning to‘lov-kontrakt shakli va undan tushgan mablag‘larni taqsimlash tartibi to‘g‘risidagi nizom (ro‘yxat raqami 2431, 2013 yil 26 fevral), O‘zbekiston Respublikasi Vazirlar Mahkamasining 2019 yil 3 dekabrdagi 967-son qarori, Toshkent davlat yuridik universiteti rektorining 2020 yil 16 sentyabrdagi 02-121-son buyrug‘i, O’zbekiston Respublikasi ta’lim muassasalariga o’qishga qabul qilish bo’yicha Davlat komissiyasining 2020 yil 25 sentyabrdagi 5-son qaroriga muvofiq tuzdilar:


<div class="col-md-12 text-center">
    <b>
           1. KONTRAKT PREDMETI

    </b>
</div>

    1. Mazkur Kontraktga asosan <b>Ta’lim muassasasi</b> <b>Talaba</b>ni 2020/2021 o‘quv yili davomida belgilangan ta’lim standartlari va o‘quv dasturlariga muvofiq o‘qitadi, <b>Talaba</b> esa Kontraktning 3-bobida ko’rsatilgan tartib va miqdordagi to‘lovni amalga oshiradi hamda <b>Ta’lim muassasasi</b>da belgilangan tartibga muvofiq ta’lim olish majburiyatini oladi.



<div class="col-md-12 text-center">
    <b>
           2. TOMONLARNING HUQUQ VA MAJBURIYATLARI

    </b>
</div>

2.1. <b>Ta’lim muassasasi</b>ning huquqlari: <br>
2.1.1. <b>Talaba</b>dan shartnomaviy majburiyatlari bajarilishini, shu jumladan <b>Ta’lim muassasasi</b>ning ichki hujjatlarida belgilangan qoidalarga rioya qilishni, o’quv mash‘ulotlarida muntazam qatnashishni, Kontrakt bo‘yicha to‘lovlarni o‘z vaqtida amalga oshirishni talab qilish. <br>
2.1.2. <b>Ta’lim muassasasi</b>ning ichki hujjatlarida belgilangan qoidalarga rioya qilmagan, bir semestr davomida darslarni uzrli sabablarsiz 74 soatdan ortiq qoldirgan yoki o‘qitish uchun belgilangan miqdordagi to‘lovni o‘z vaqtida amalga oshirmagan <b>Talaba</b>ga nisbatan belgilangan tartibda <b>talaba</b>lar safidan chetlashtirish, tegishli kursda qoldirish yoki boshqa choralarni qo‘llash. <br>
2.1.3. <b>Talaba</b> <b>Ta’lim muassasasi</b>ning ichki hujjatlarida belgilangan qoidalarni qo’pol ravishda buzgan, xususan huquqbuzarlik sodir etgan hollarda Kontraktni bir tomonlama bekor qilish. <br>
2.1.4. Mehnatga haq to‘lashning eng kam miqdori o‘zgarishi bilan mos ravishda Kontrakt bo‘yicha to‘lov miqdorini o‘zgartirish. <br>
2.1.5. Istisno tariqasida Kontrakt bo‘yicha to‘lov muddatlarini uzaytirish (<b>Ta’lim muassasasi</b>ning buyrug‘i orqali). <br>
2.2. <b>Ta’lim muassasasi</b>ning majburiyatlari: <br>
2.2.1. O‘qitish uchun O‘zbekiston Respublikasining “Ta’lim to‘g‘risida”gi Qonuni va Kadrlar tayyorlash milliy dasturiga muvofiq <b>Ta’lim muassasasi</b> Ustavi va boshqa ichki hujjatlarida nazarda tutilgan zarur shart-sharoitlarni yaratadi. <br>
2.2.2. <b>Talaba</b>larning qonun hujjatlarida belgilangan huquqlarining bajarilishini ta‘minlaydi. <br>
2.2.3. <b>Talaba</b>ni tasdiqlangan o‘quv reja va dasturlarga muvofiq davlat standarti talablari darajasida o‘qitadi. <br>
2.2.4. <b>Talaba</b> bakalavriat yo‘nalishini muvaffaqiyatli tamomlaganda belgilangan tartibda diplom beradi. <br>
@if($data->step == 1)
2.2.5. <b>Talaba</b>ga belgilangan miqdor va muddatlarda stipendiya to’lash. <br>
@endif
@if(date('Y-m-d' , strtotime($data->created_at)) > '2020-10-05')
2.2.6.  Abituriyent  o’quv yilining birinchi yarmi uchun to’lovni amalga oshirganidan so’ng uni <b>talaba</b>lar safiga qabul qilish.  <br>
@endif

2.3. <b>Talaba</b>ning huquqlari: <br>
2.3.1. <b>Ta’lim muassasasi</b>dan shartnomaviy majburiyatlari bajarilishini talab qilish. <br>
2.3.2. <b>Ta’lim muassasasi</b>da tasdiqlangan o‘quv reja va dasturlarga muvofiq davlat standarti talablari darajasida ta’lim olish. <br>
2.3.3. <b>Ta’lim muassasasi</b>ning Axborot-resurs markazi, sport inshooti, Wi-Fi hududlaridan foydalanish. <br>
2.3.4. <b>Ta’lim muassasasi</b>ning ta’lim jarayonlarini yaxshilashga doir takliflar berish. <br>
2.3.5. O‘qish uchun bir yillik to’lov summasini bir yola to’liq to’lash. <br>
2.3.6. Kontrakt bo‘yicha to‘lovni stipendiyasiz yoki @if($data->step == 1) stipendiyali @else stipendiyasiz @endif shaklini joriy yilning
20 oktyabrga qadar tanlash. <br>
2.4. <b>Talaba</b>ning majburiyatlari: <br>
2.4.1. Joriy o‘quv yili uchun belgilangan o‘qitish qiymatini Kontraktning 3-bobida ko‘rsatilgan tartib va miqdorda o‘z vaqtida to‘laydi. <br>
2.4.2. Toshkent davlat yuridik universiteti Ustavi va boshqa ichki hujjatlari talablariga qat’iy rioya qiladi. <br>
2.4.3. O’quv mashg’ulotlarida muntazam qatnashadi. <br>
2.4.4. <b>Ta’lim muassasasi</b>da belgilangan tartib va doirada ta’lim oladi hamda ushbu jarayonda bilim darajasini oshirib boradi. <br>
2.4.5. Kontrakt bo‘yicha to‘lovni stipendiyasiz yoki  @if($data->step == 1) stipendiyali @else stipendiyasiz @endif  shaklini joriy yilning
20 oktyabrga qadar tanlaydi. <br>
2.4.6. Kontraktni imzolangandan keyin <b>Ta’lim muassasasi</b>ga taqdim etadi. Kontrakt elektron shaklda <b>Ta’lim muassasasi</b>ning marketing.tsul.uz saytidan olingan taqdirda uning shartlari bilan tanishib, rozi bo’lgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi. <br>

<div class="col-md-12 text-center">
    <b>
        3. TO’LOV MIQDORLARI VA MUDDATLARI

    </b>
</div>

3.1. 2020/2021 o‘quv yilida @if($data->step == 1) stipendiyali @else stipendiyasiz @endif shaklda ta’lim olish uchun <b>Talaba</b> tomonidan to‘lanishi lozim bo‘lgan to’lov summasi pandemiya sharoitini inobatga olgan holda 10 (o’n) foiz chegirma bilan @if($data->step == 1) 13 940 117 (O’n uch million to’qqiz yuz qirq ming bir yuz o’n yetti) @else 8 804 117 (sakkiz million sakkiz yuz to’rt ming bir yuz o’n yetti) @endif  so‘mni tashkil etadi va Kontraktning ushbu bobida belgilangan tartibda to’lanadi. Mazkur summa mehnatga haq to’lashning eng kam miqdori o’zgarishi bilan mos ravishda <b>Ta’lim muassasasi</b> tomonidan o’zgartirilishi mumkin. <br>
3.2. <b>Talaba</b> o’quv yilining birinchi yarmi uchun @if($data->step == 1) 6 970 058 (olti million to‘qqiz yuz yetmish ming ellik sakkiz) @else 4 402 058 (to’rt million to’rt yuz ikki ming ellik sakkiz) @endif  so‘mni 2020 yilning 1 noyabrgacha to‘laydi. <br>
3.3. <b>Talaba</b> o’quv yilining ikkinchi yarmi uchun @if($data->step == 1) 6 970 059 (olti million to‘qqiz yuz yetmish ming ellik to‘qqiz) @else 4 402 059 (to’rt million to’rt yuz ikki ming ellik to‘qqiz) @endif  so‘mni 2020 yilning 1 martgacha to‘laydi. <br>
3.4. <b>Talaba</b> tomonidan Kontrakt bo‘yicha o‘qitish qiymatini to‘lashda to‘lov topshiriqnomasida ID raqamini, <b>Talaba</b>ning familiyasi, ismi, sharifi hamda o‘qiyotgan kursi to‘liq ko‘rsatiladi. <br>
3.5. <b>Talaba</b> tegishli fanlar bo‘yicha akademik qarzdorlikni qayta topshirish sharti bilan keyingi kurs (semestr)ga o‘tkazilgan taqdirda, keyingi semestr uchun to‘lov <b>Talaba</b> tomonidan akademik qarzdorlik topshirilgunga qadar amalga oshiriladi. <br>
3.6. O‘zbekiston Respublikasi Vazirlar Mahkamasining 2020 yil 31 yanvardagi 59-son qaroriga va Toshkent davlat yuridik universiteti rektorining buyrug‘iga asosan har oyda o‘rnatilgan muddat va tartibda stipendiya to‘lovlarini amalga oshiradi (to‘lov-kontrakt qiymatini tegishli semestri uchun to‘liq amalga oshirilganda so’ng stipendiya to’lanadi va to‘lov-kontrakt qiymatini @if($data->step == 1) stipendiyali @else stipendiyasiz @endif shaklda to‘lash haqida murojaat qilgan <b>talaba</b>larga stipendiya to’lanadi). <br>

<div class="col-md-12 text-center">
    <b>
        4. SHARTNOMANI BEKOR QILISH

    </b>
</div>


4. Kontrakt quyidagi hollarda bekor qilinadi: <br>
4.1. Tomonlarning o‘zaro roziligi bilan. <br>
4.2. Ta’lim muasasasining tashabbusiga ko‘ra Ustavi va boshqa ichki hujjatlariga muvofiq <b>Talaba</b> <b>talaba</b>lar safidan chiqarilganda. <br>
4.3. O‘qitish qiymati belgilangan muddat ichida to‘lanmasa (bunda, <b>Ta’lim muassasasi</b> Kontraktni ni bir tomonlama bekor qiladi, <b>Talaba</b> <b>Talaba</b>lar safidan chiqariladi). <br>
4.4. <b>Talaba</b>ning tashabbusiga ko‘ra (yozma murojaatga asosan). <br>
4.5. Kontraktning 2.1.3-bandida ko‘rsatilgan hollarda (<b>Ta’lim muassasasi</b> tomonidan Kontraktning bir tomonlama bekor qilinishi va <b>talaba</b>lar safidan chiqarilishi haqida <b>Talaba</b>ga yozma xabarnoma yuborish orqali). <br>
4.6. Qonunchilikda ko‘rsatilgan boshqa hollarda. <br>

<div class="col-md-12 text-center">
    <b>
        5. FORS-MAJOR HOLATLAR

    </b>
</div>


5.1. Ushbu Kontraktga asosan majburiyatlarni bajarilmasligi holatlari yengib bo'lmaydigan kuchlar (fors-major) holatlar natijasida vujudga kelganda Tomonlar o'z majburiyatlarini bajarmaslikdan qisman yoki to‘liq ozod bo‘ladilar. <br>
5.2. Yengib bo'lmaydigan kuchlar (fors-major) holatlariga Tomonlarning irodasi va faoliyatiga bog‘liq bo‘lmagan tabiat hodisalari (pandemiya, zilzila, ko'chki, bo'ron, qurg‘oqchilik va boshqalar) yoki ijtimoiy-iqtisodiy holatlar (urush holati, qamal, davlat manfaatlarini ko‘zlab import va eksportni taqiqlash va boshqalar) sababli yuzaga kelgan sharoitlarda Tomonlarga qabul qilingan majburiyatlarni bajarish imkonini bermaydigan favqulodda, oldini olib bo'lmaydigan va kutilmagan holatlar kiradi. <br>
5.3. Kontrakt Tomonlaridan qaysi biri uchun majburiyatlarni yengib bo‘lmaydigan kuchlar (fors-major) holatlari sababli bajarmaslik ma'lum bo'lsa, darhol ikkinchi tomonga bu xaqda 10 kun ichida ushbu holatlar harakati sababini dalillar bilan taqdim etishi lozim. <br>
5.4. Kontraktga asosan majburiyatlarni ijro qilish muddati ushbu yengib bo'lmaydigan kuchlar (fors-major) holatlar davom etish muddatiga qadar uzaytiriladi. Agar yengib bo'lmaydigan kuchlar (fors-major) ta'siri 30 (o‘ttiz) kundan ortiqroq davom qilsa, Tomonlar tashabbusiga binoan shartnoma bekor qilinishi mumkin. <br>

<div class="col-md-12 text-center">
    <b>
        6. YAKUNIY QOIDALAR

    </b>
</div>


6.1. Kontrakt bevosita Tomonlar tomonidan imzolangan paytdan e’tiboran kuchga kiradi, Kontraktning 6.2-bandida ko’rsatilgan holat bundan mustasno.  <br>
6.2. Kontrakt elektron shaklda <b>Ta’lim muassasasi</b>ning marketing.tsul.uz saytida joylashtirilgan bo’lib, <b>Talaba</b> o’z ID raqami va passport ma’lumotlarini kiritganidan so’ng uning shartlari bilan tanishib, rozi bo’lgan holda bu haqda tegishli tugmani bosadi va Kontraktni yuklab oladi. Kontrakt <b>Talaba</b> tomonidan yuklab olingan paytdan e’tiboran tuzilgan va kuchga kirgan hisoblanadi.  <br>
<b>Talaba</b> Kontrakt shartlari bilan norozi bo’lgan taqdirda uch ish kunida, biroq joriy yilning 20 oktyabga qadar murojaat qilishi mumkin. Kontraktni tuzmagan va to’lovlarni amalga oshirmagan <b>Talaba</b>ni <b>Ta’lim muassasasi</b> <b>talaba</b>lar safidan chiqarishga haqli. <br>
6.3. Tomonlar o‘rtasida vujudga keladigan nizolar o’zaro muzokaralar olib borish hamda talabnoma yuborish orqali hal etiladi, Kontraktning 4.2-4.5 bandlarida ko’rsatilgan holatlar bundan mustasno. <br>
6.4. Mehnatga haq to‘lashning eng kam miqdori o‘zgarganda mos ravishda to‘lov-kontrakt qiymati miqdori navbatdagi semestr boshidan oshiriladi. <br>
6.5. Kontrakt bo’yicha o’z majburiyatlarini bajarmagan Tomon qonunda belgilangan javobgarlikka tortiladi. <br>

     <span class="page-break"></span>
        <div class="col-md-12 text-center">
    <b>
        2020 yil “___”_____________dagi  _________________ -son kontrakt
1-sonli Qo’shimcha kelishuv
    </b>
        </div>
{{--        <span style="float: left;">Toshkent sh.</span>--}}
{{--        <span style="float: right;">2020 yil «{{ date('d') }}» {{ get_month_name(date('m')) }} </span>--}}

        <p>
Toshkent davlat yuridik universiteti nomidan Ustav asosida ish yurituvchi Rektor Xakimov Raxim Rasuljonovich (keyingi o‘rinlarda – Ta’lim muassasasi) bir tomondan va  talaba  {{$data->fio()}}  (keyingi o‘rinlarda – Talaba)  ikkinchi tomondan, tomonlar o’rtasida tuzilgan Toshkent davlat yuridik universitetida o’qitish uchun 2020 yil “_____” ____________dagi _____________________-son kontraktga quyidagilar haqida mazkur  Qo’shimcha kelishuvni tuzdilar:
        </p>
        <p>
1. Kontraktning 6-bobidagi “Tomonlarning manzillari va to’lov rekvizitlari” bo’limida  Ta’lim muassasasi rekvizitlaridagi hisob raqamiga oid qatorlaridagi                                                      “Sh.h.r: 400910860262667950100009001” yozuvli raqam o’zgartirilib, quyidagi tahrirda berilsin:
  “Sh.h.r: 400910860262667094100009002”.
        </p>
        <p>
2. Ushbu Qo’shimcha kelishuv elektron shaklda Ta’lim muassasasining marketing.tsul.uz. saytida joylashtirilgan va Ta’lim muassasasi tomonidan Talabaga tegishli xabar berilgandan so’ng  Talaba o’z ID raqami va pasport ma’lumotlarini kiritganidan so’ng uning shartlari bilan tanishib, rozi bo’lgan holda bu haqda tegishli tugmani bosadi va Qo’shimcha kelishuvni yuklab oladi. Qo’shimcha kelishuv Talaba tomonidan yuklab olingan paytdan e’tiboran tuzilgan va kuchga kirgan hisoblanadi.
        </p>
        <p>
            3. Ushbu  Qo’shimcha kelishuv 2020 yil “_____” ____________dagi  ______________-son kontraktning ajralmas qismi hisoblanadi va kontraktning qolgan qismi o’zgarishsiz qoladi.
        </p>
        <div class="row">
            <div class="col-md-6">
                Ta’lim muassasasi

                O‘zbekiston Respublikasi
                Moliya vazirligi G‘aznachiligi
                Bank: HKKM MB Toshkent sh. B.B.
                H/r: 23402000300100001010
                STIR: 201122919, MFO: 00014
                Sh.h.r: 400910860262667094100009002
                STIR: 201122349, KOD 7950100
                Tel.: (71) 233-66-36,
                Manzil: Sayilgoh ko‘chasi, 35-uy.

                Rektor            ________________ R. Xakimov

                Bosh buxgalter v.b.____________M.Parpiyev

                Shartnomaviy ta’lim xizmatlari
                 bo‘limi boshlig‘i ___________ A.Xundibayev

                Katta yuriskonsult ______________E.Xosilov
            </div>
            <div class="col-md-6">
                        Talaba
                    {{$data->fio()}}
                    (F.I.SH)
                    ____________________________________
                    Pasport seriyasi {{$data->passport_seria}}  raqami {{$data->passport_number}}


                    Imzo ______________

            </div>
        </div>

<div class="col-md-12 text-center">
    <button class="tasdiq btn btn-success">
         Men , Talaba <b>{{ $data->fio() }}</b> , Toshkent davlat yuridik universitetida o'qitish uchun Kontrakt mazmuni bilan to'liq tanishdim va uning shartlariga roziman hamda shaxsiy ma`lumotlarim to'g'riligini tasdiqlayman
    </button>
</div>

</div>


<form style="display: none" method="post" id="hehe" action="{{ route('shartnoma.get') }}">
               {{ csrf_field() }}
               <input type="text" readonly="true" value="{{ $data->id }}" name="data_id" hidden="true">
           </form>

@endsection

@section('js')

<script type="text/javascript">
   $(document).ready(function(){
    alert("dfjd");
   });


</script>
@endsection
