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
            margin-bottom: 4px !important;
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
       <b>KONTRAKT</b> 
      (stipendiyasiz shaklda)
    </h5>
  
  </div>
  <div class="col-md-12">
    <div class="col-md-6 ml-auto mr-auto text-center">
      ID: 002-00{{ $data->id_code }}
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
         <b>2020 yil «{{ date('d' , strtotime($data->getting_date)) }}» {{ get_month_name(date('m' , strtotime($data->getting_date))) }}</b>
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

                                                                           
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Toshkent davlat yuridik universiteti (keyingi oʻrinlarda – <b>Ta’lim muassasasi</b>) nomidan Ustavga asosan ish yurituvchi rektor Xakimov Raxim Rasuljonovich bir tomondan, va <b>{{ date('d-m-Y' , strtotime($data->birthday)) }}</b> yilda tugʻilgan <b>{{ $data->fio() }}</b>
                                                                                                                
(keyingi oʻrinlarda – <b>Talaba</b>) ikkinchi tomondan (birgalikda – Tomonlar) “Yurisprudensiya” ta’lim yoʻnalishi doirasida M.S.Narikbayev nomidagi QOZGYU (Qozogʻiston Respublikasi) (keyingi oʻrinlarda – QOZGYU universiteti) bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha <b>talaba</b>ni bakalavriat bosqichida oʻqitish maqsadida mazkur  <b>kontrakt</b> ni (keyingi oʻrinlarda –  <b>Kontrakt</b> ) Oʻzbekiston Respublikasi Prezidentining 2020-yil 29-apreldagi 
PF–5987-son Farmoni, 2019-yil 11-iyuldagi PQ–4391-son qarori, Oʻzbekiston Respublikasi Vazirlar Mahkamasining 2019 yil 3 dekabrdagi 967-son qarori hamda Oliy va oʻrta maxsus, kasb-hunar ta’limi muassasalarida oʻqitishning toʻlov- <b>kontrakt</b>  shakli va undan tushgan mablagʻlarni taqsimlash tartibi toʻgʻrisidagi nizomga (roʻyxat raqami 2431, 2013 yil 26 fevral) muvofiq tuzdilar:

<div class="col-md-12">
    
    <h5>
      1.  <b>KONTRAKT</b>  PREDMETI
    </h5>
  
</div>


<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  1.1. Mazkur  <b>Kontrakt</b> ga asosan <b>Ta’lim muassasasi</b> <b>Talaba</b>ni 2022/2023 oʻquv yili hamda 2023/2024 oʻquv yilining bahorgi semestri  davomida belgilangan ta’lim standartlari va oʻquv dasturlariga muvofiq oʻqitadi, <b>Talaba</b> esa  <b>Kontrakt</b> ning 2-bobida koʻrsatilgan tartib va miqdordagi toʻlovni amalga oshiradi hamda <b>Ta’lim muassasasi</b>da belgilangan tartibga muvofiq ta‘lim olish majburiyatini oladi.
</p>

<div class="col-md-12">
    
    <h5>
      2.  HISOB-KITOB QILISH TARTIBI
    </h5>
  
</div>


<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  2.1. QOZGYU universiteti bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha <b>Talaba</b> 2022/2023 oʻquv yili hamda 2023/2024 oʻquv yilining bahorgi semestri davomida <b>Ta’lim muassasasi</b>da ta’lim olishini inobatga olgan holda  <b>Kontrakt</b>  boʻyicha toʻlovlar miqdori va muddatlari quyidagicha belgilandi:
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
2022/2023 oʻquv yili uchun toʻlov 139 (bir yuz oʻttiz toʻqqiz) bazaviy hisoblash miqdorini tashkil qiladi va quyidagi muddatlarda <b>Ta’lim muassasasi</b>ga toʻlanadi:
  
</p>
<p style="padding-left: 100px;">
  2022-yil 15-oktyabgacha – 34,75 (oʻttiz toʻrtu, yetmish besh) bazaviy hisoblash miqdori;<br>
2022-yil 15-dekabrgacha – 34,75 (oʻttiz toʻrtu, yetmish besh) bazaviy hisoblash miqdori;<br>
2023-yil 15-fevralgacha – 34,75 (oʻttiz toʻrtu, yetmish besh) bazaviy hisoblash miqdori;<br>
2023-yil 01-maygacha – 34,75 (oʻttiz toʻrtu, yetmish besh) bazaviy hisoblash miqdori.<br>

</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
2.1.2. 2023/2024 oʻquv yilining bahorgi semestri uchun toʻlov 93 (toʻqson uch) bazaviy hisoblash miqdorini tashkil qiladi va quyidagi muddatlarda toʻlanadi:
  
</p>
<p style="padding-left: 100px;">
  2024-yil 15-fevralgacha – 46,5 (qirq oltiyu, besh) bazaviy hisoblash miqdori;<br>
2024-yil 01-maygacha – 46,5 (qirq oltiyu, besh) bazaviy hisoblash miqdori.<br>

</p>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
2.2.  <b>Kontrakt</b> ni amal qilish davrida bazaviy hisoblash miqdori oʻzgargan taqdirda  <b>Kontrakt</b>  boʻyicha tegishli ravishda oʻzgargan toʻlov miqdori oʻquv yilining keyingi davrida uchun toʻlanadi.
  
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
2.3. QOZGYU universiteti bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha  <b>Kontrakt</b> ni stipendiyasiz shakldan stipendiyali shakliga oʻtishga yoʻl qoʻyilmaydi.
  
</p>

<div class="col-md-12">
    
    <h5>
      3. TOMONLARNING HUQUQ VA MAJBURIYATLARI
    </h5>
  
</div>


<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.1. <b>Ta’lim muassasasi</b>ning huquqlari:
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.1.1. <b>Talaba</b>dan shartnomaviy majburiyatlari bajarilishini, shu jumladan <b>Ta’lim muassasasi</b>ning ichki hujjatlarida belgilangan qoidalarga rioya qilishni, oʻquv mashgʻulotlarida muntazam qatnashishni,  <b>Kontrakt</b>  boʻyicha toʻlovlarni oʻz vaqtida amalga oshirishni talab qilish.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.1.2. <b>Ta’lim muassasasi</b>ning ichki hujjatlarida belgilangan qoidalarga rioya qilmagan, bir semestr davomida darslarni uzrli sabablarsiz 74 soatdan ortiq qoldirgan yoki oʻqitish uchun belgilangan miqdordagi toʻlovni oʻz vaqtida amalga oshirmagan <b>Talaba</b>ga nisbatan belgilangan tartibda <b>talaba</b>lar safidan chetlashtirish, tegishli kursda qoldirish yoki boshqa choralarni qoʻllash.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.1.3. <b>Talaba</b> <b>Ta’lim muassasasi</b>ning ichki hujjatlarida belgilangan qoidalarni qoʻpol ravishda buzgan, xususan huquqbuzarlik sodir etgan hollarda  <b>Kontrakt</b> ni bir tomonlama bekor qilish. 
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.1.4. Istisno tariqasida  <b>Kontrakt</b>  boʻyicha toʻlov muddatlarini uzaytirish (<b>Ta’lim muassasasi</b>ning buyrugʻi orqali).
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.2. <b>Ta’lim muassasasi</b>ning majburiyatlari:
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.2.1. Oʻqitish uchun Oʻzbekiston Respublikasining “Ta’lim toʻgʻrisida”gi Qonuni va Kadrlar tayyorlash milliy dasturiga muvofiq <b>Ta’lim muassasasi</b> Ustavi va boshqa ichki hujjatlarida nazarda tutilgan zarur shart-sharoitlarni yaratadi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.2.2. <b>Talaba</b>larning qonun hujjatlarida belgilangan huquqlarining bajarilishini ta’minlaydi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.2.3. <b>Talaba</b>ni tasdiqlangan oʻquv reja va dasturlarga muvofiq davlat standarti talablari darajasida oʻqitadi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.2.4. <b>Talaba</b> QOZGYU universiteti bilan tuzilgan qoʻshma ta’lim dasturi boʻyicha bakalavriat yoʻnalishini muvaffaqiyatli tamomlaganda belgilangan tartibda diplom beradi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.2.5. QOZGYU universitetining xatiga asosan <b>Talaba</b>ni <b>talaba</b>lar safiga kiritadi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.3. <b>Talaba</b>ning huquqlari:
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.3.1. <b>Ta’lim muassasasi</b>dan shartnomaviy majburiyatlari bajarilishini talab qilish.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.3.2. <b>Ta’lim muassasasi</b>da tasdiqlangan oʻquv reja va dasturlarga muvofiq davlat standarti talablari darajasida ta’lim olish.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.3.3. <b>Ta’lim muassasasi</b>ning Axborot-resurs markazi, sport inshooti, Wi-Fi hududlaridan foydalanish.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.3.4. <b>Ta’lim muassasasi</b>ning ta’lim jarayonlarini yaxshilashga doir takliflar berish.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.3.5. Oʻqish uchun bir yillik toʻlov summasini bir yola toʻliq toʻlash.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.4. <b>Talaba</b>ning majburiyatlari:
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.4.1. Joriy oʻquv yili uchun belgilangan oʻqitish qiymatini  <b>Kontrakt</b> ning 2-bobida koʻrsatilgan tartib va miqdorda oʻz vaqtida toʻlaydi.
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
3.4.4. <b>Ta’lim muassasasi</b>da belgilangan tartib va doirada ta’lim oladi hamda ushbu jarayonda bilim darajasini oshirib boradi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
3.4.5.  <b>Kontrakt</b> ni imzolangandan keyin <b>Ta’lim muassasasi</b>ga taqdim etadi.  <b>Kontrakt</b>  elektron shaklda <b>Ta’lim muassasasi</b>ning marketing.tsul.uz saytidan olingan taqdirda uning shartlari bilan tanishib, rozi boʻlgan holda bu haqda tegishli tugmani bosadi va  <b>Kontrakt</b> ni yuklab oladi.
</p>


<div class="col-md-12">
    
    <h5>
      4. SHARTNOMANI BEKOR QILISH
    </h5>
  
</div>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4.  <b>Kontrakt</b>  quyidagi hollarda bekor qilinadi:
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4.1. Tomonlarning oʻzaro roziligi bilan.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4.2. Ta’lim muasasasining tashabbusiga koʻra Ustavi va boshqa ichki hujjatlariga muvofiq <b>Talaba</b> <b>talaba</b>lar safidan chiqarilganda.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4.3. Oʻqitish qiymati belgilangan muddat ichida toʻlanmasa (bunda, <b>Ta’lim muassasasi</b>  <b>Kontrakt</b> ni bir tomonlama bekor qiladi, <b>Talaba</b> <b>Talaba</b>lar safidan chiqariladi).
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4.4. <b>Talaba</b>ning tashabbusiga koʻra (yozma murojaatga asosan).
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4.5.  <b>Kontrakt</b> ning 3.1.3-bandida koʻrsatilgan hollarda (<b>Ta’lim muassasasi</b> tomonidan  <b>Kontrakt</b> ning bir tomonlama bekor qilinishi va <b>talaba</b>lar safidan chiqarilishi haqida <b>Talaba</b>ga yozma xabarnoma yuborish orqali).
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4.6. <b>Talaba</b> Ta’lim muasasasining <b>talaba</b>lari safidan chiqarilganda QOZGYU universitetining <b>talaba</b>lari safidan ham avtomatik ravishda chiqariladi, shuningdek <b>Talaba</b> QOZGYU universitetining <b>talaba</b>lari safidan chiqarilganda Ta’lim muasasasining <b>talaba</b>lari safidan avtomatik ravishda chiqariladi.
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
5.1. Ushbu  <b>Kontrakt</b> ga asosan majburiyatlarni bajarilmasligi holatlari yengib boʻlmaydigan kuchlar (fors-major) holatlar natijasida vujudga kelganda Tomonlar oʻz majburiyatlarini bajarmaslikdan qisman yoki toʻliq ozod boʻladilar.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
5.2. Yengib boʻlmaydigan kuchlar (fors-major) holatlariga Tomonlarning irodasi va faoliyatiga bogʻliq boʻlmagan tabiat hodisalari (pandemiya, zilzila, koʻchki, boʻron, qurgʻoqchilik va boshqalar) yoki ijtimoiy-iqtisodiy holatlar (urush holati, qamal, davlat manfaatlarini koʻzlab import va eksportni taqiqlash va boshqalar) sababli yuzaga kelgan sharoitlarda Tomonlarga qabul qilingan majburiyatlarni bajarish imkonini bermaydigan favqulodda, oldini olib boʻlmaydigan va kutilmagan holatlar kiradi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
5.3.  <b>Kontrakt</b>  Tomonlaridan qaysi biri uchun majburiyatlarni yengib boʻlmaydigan kuchlar (fors-major) holatlari sababli bajarmaslik ma’lum boʻlsa, darhol ikkinchi tomonga bu xaqda 10 kun ichida ushbu holatlar harakati sababini dalillar bilan taqdim etishi lozim.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
5.4.  <b>Kontrakt</b> ga asosan majburiyatlarni ijro qilish muddati ushbu yengib boʻlmaydigan kuchlar (fors-major) holatlar davom etish muddatiga qadar uzaytiriladi. Agar yengib boʻlmaydigan kuchlar (fors-major) ta’siri 30 (oʻttiz) kundan ortiqroq davom qilsa, Tomonlar tashabbusiga binoan shartnoma bekor qilinishi mumkin.
</p>

<div class="col-md-12">
    
    <h5>
      6. YAKUNIY QOIDALAR
      
    </h5>
  
</div>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
6.1.  <b>Kontrakt</b>  bevosita Tomonlar tomonidan imzolangan paytdan e’tiboran kuchga kiradi,  <b>Kontrakt</b> ning 6.2-bandida koʻrsatilgan holat bundan mustasno. 
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
6.2.  <b>Kontrakt</b>  elektron shaklda <b>Ta’lim muassasasi</b>ning marketing.tsul.uz saytida joylashtirilgan boʻlib, <b>Talaba</b> oʻz passport ma’lumotlarini kiritganidan soʻng uning shartlari bilan tanishib, rozi boʻlgan holda bu haqda tegishli tugmani bosadi va  <b>Kontrakt</b> ni yuklab oladi.  <b>Kontrakt</b>  <b>Talaba</b> tomonidan yuklab olingan paytdan e’tiboran tuzilgan va kuchga kirgan hisoblanadi.
<b>Talaba</b>  <b>Kontrakt</b>  shartlari bilan norozi boʻlgan taqdirda uch ish kunida, biroq joriy yilning 15 oktyabga qadar murojaat qilishi mumkin.  <b>Kontrakt</b> ni tuzmagan va toʻlovlarni amalga oshirmagan <b>Talaba</b>ni <b>Ta’lim muassasasi</b> <b>talaba</b>lar safidan chiqarishga haqli.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
6.3. <b>Talaba</b> tomonidan shartnoma boʻyicha oʻqitish qiymatini toʻlashda toʻlov topshiriqnomasida shartnomaning tartib raqami va sanasi, <b>talaba</b>ning familiyasi, ismi, sharifi hamda oʻqiyotgan kursi toʻliq koʻrsatiladi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
6.4. Tomonlar oʻrtasida vujudga keladigan nizolar oʻzaro muzokaralar olib borish hamda talabnoma yuborish orqali hal etiladi,  <b>Kontrakt</b> ning 4.2-4.6 bandlarida koʻrsatilgan holatlar bundan mustasno.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
6.5. Ta’lim muasasasida oʻqitishning modul tizimi sharoitlarida <b>talaba</b>lar bilimini nazorat qilish tartibi va baholash mezonlari toʻgʻrisidagi nizom (roʻyxat raqami 2780, 2016 yil 22 aprel)ga muvofiq qayta oʻzlashtirish uchun belgilangan tartibda oʻquv fanlari boʻyicha kelgusi semestrning yakuniy nazorat davri boshlangunga qadar tegishli fanlar boʻyicha akademik qarzdorlikni qayta topshirish sharti bilan keyingi kurs (semestr)ga oʻtkazilgan <b>Talaba</b>dan ushbu semestr uchun ham toʻlov undiriladi.
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
6.6. QOZGYU universiteti va <b>Talaba</b> oʻrtasida mutaxassisni qoʻshma ta’lim dasturi boʻyicha tayorlash haqida ikki tomonlama shartnoma( <b>kontrakt</b> ) tuzilmagan taqdirda, mazkur  <b>Kontrakt</b>  oʻz kuchini yoʻqotadi.
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
                <b>Ta’lim muassasasi</b>
            </p>
            <img src="{{ public_path("pechat/pechat3.jpg") }}" alt="" style="width: 100%; height: auto;">
                 
    </div>
    <div style="display: inline-block; width: 49%; text-align: left;" class="abs2">
        <p style="text-align: center !important; ">
            <b>Talaba</b>
        </p>


                <b>{{ $data->fio() }}</b>
                <br>
                Yashash manzili: <b>{{ $data->address }}</b> <br>

                Pasport seriyasi:  <b>{{ $data->passport_seria }}</b>  <br>
                Raqami: <b>{{ $data->passport_number }}</b><br>

                Тел: <b>{{ $data->phone }}</b><br>

                Imzo ______________



    </div>
</div>




</div>

</body>
</html>