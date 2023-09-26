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
    <div class="col-md-2"></div>
    <div class="col-md-8 ">
        <div class="row">
            <div class="col-md-12 text-center text-bold">
                <h4 class="text-bold">
                    OLIY TA’LIM XIZMATLARINI KO‘RSATISH TO‘G‘RISIDA
                </h4>
                <h4 class="text-bold">SHARTNOMASI № {{$student->id_code}}</h4>
            </div>
            {{--            <div style="display: inline-block; width: 49%" class="">--}}
            {{--                {{$dateArray['year']}} yil “{{$dateArray['day']}} ” {{$dateArray['month']}}--}}
            {{--            </div>--}}
            {{--            <div style="display: inline-block; width: 49%" class=" text-right">--}}
            {{--                <span>Toshkent shahri</span>--}}
            {{--            </div>--}}
            <div class="col-md-6 text-left"><p>Navoiy viloyat</p></div>
            <div class="col-md-6 text-right"><p>{{$dateArray['year']}} yil “{{$dateArray['day']}}
                    ” {{$dateArray['month']}}</p></div>
            <div class="col-md-12 mt-1 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp Navoiy Innovatsiyalar universiteti NTM (keyingi o‘rinlarda – Ta’lim muassasasi
                    OTM) nomidan Ustavga asosan ish yurutuvchi rektor
                    @include('student.agreements_by_id.show.includes.include_variables') bir
                    tomondan, va {{ $student->fio() }} (keying o’rinlarda – Talaba), birgalikda – Tomonlar, Talabani
                    bakalavriat {{ $student->course }}-kurs davomida o‘qitish maqsadida mazkur shartnomani (keyingi
                    o‘rinlarda–Shartnoma) quyidagi
                    shartlar asosida tuzdilar:


                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    1. SHARTNOMA PREDMETI
                </h4>
            </div>
            <div class="col-md-12 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.1.</b> Mazkur Shartnomaga asosan OTM 2023-2024 o‘quv yili davomida
                    belgilangan ta’lim standartlari va o‘quv dasturlariga muvofiq o‘qitadi, Buyurtmachi esa
                    Shartnomaning 3-bobida ko‘rsatilgan tartib va miqdordagi to‘lovni amalga oshiradi hamda Talaba OTMda
                    belgilangan tartibga muvofiq ta’lim olish majburiyatini oladi:
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.2.</b> Ta’lim bosqichi: <b>Bakalavr</b>
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.3.</b> Ta’lim shakli: <b>Kunduzgi</b>
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.4.</b> O’qish davomiyligi: <b>4 (to'rt) yil</b>
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.5.</b> Ta’lim yo‘nalishi: <b>Filologiya tillarini o'qitish (Ingliz tili)</b>
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
                    <b>2.1.</b> <b>OTMning huquqlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.1. Talaba va Buyurtmachidan ushbu shartnoma majburiyatlarini bajarilishini, shu jumladan OTMning
                    ichki hujjatlarida belgilangan qoidalarga rioya qilishni, o‘quv mashg‘ulotlarida muntazam
                    qatnashishni, Shartnoma bo‘yicha to‘lovlarni o‘z vaqtida amalga oshirishni talab qilish;
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.2 Talaba OTMning ichki hujjatlarida belgilangan qoidalarga rioya qilmagan, bir semestr davomida
                    darslarni uzrli sabablarsiz 74 soatdan ortiq qoldirgan yoki Buyurtmachi o‘qitish uchun belgilangan
                    miqdordagi to‘lovni o‘z vaqtida amalga oshirmagan bo‘lsa, OTM Talabaga nisbatan belgilangan tartibda
                    talabalar safidan chetlashtirish, tegishli kursda qoldirish yoki boshqa choralarni qo‘llash;
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.3 . Talaba OTMning ichki hujjatlarida belgilangan qoidalarni bir marta qo‘pol yoki muntazam
                    ravishda buzgan, huquqbuzarlik yoki jinoyat sodir etgan hollarda Shartnomani bir tomonlama bekor
                    qilish;
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.4. Istisno tariqasida Shartnoma bo‘yicha to‘lov muddatlarini uzaytirish (OTMning rektor buyrug‘i
                    orqali);
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.5. Buyurtmachi shartnomaning 3-bobida ko‘rsatilgan tartib va miqdorda o‘z vaqtida to‘lovni
                    amalga oshirmaganida, Talabani barcha imtihon(oraliq va yakuniy) jarayonlariga qo‘ymaslik;
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.6. Talabaga nisbatan Kredit-modul tizimi to‘g‘risidagi nizomga asosan tegishli choralar ko‘rish
                    huquqiga ega.
                </p>

            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.2.</b> <b>OTMning majburiyatlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.1. O‘qitish uchun O‘zbekiston Respublikasining “Ta’lim to‘g‘risida”gi Qonuniga muvofiq OTM
                    Ustavi va boshqa ichki hujjatlarida nazarda tutilgan zarur shart-sharoitlarni yaratadi
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.2. Talabalarning qonun hujjatlarida belgilangan huquqlarining bajarilishini ta‘minlaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.3. Talabani tasdiqlangan o‘quv reja va dasturlarga muvofiq darajada o‘qitadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.4. Talaba bakalavriat yo‘nalishini muvaffaqiyatli tamomlaganda, belgilangan tartibda O‘zbekiston
                    Respublikasi davlat va nodavlat tashkilotlarida tan olinadigan davlat namunasidagi diplom beradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.5. Imtihondan muvafiyaqatli o‘tgan yoki oshirilgan to‘lov shartnomasi asosida talabalikka
                    tavsiya etilgan abituriyent o‘quv yilining birinchi yarmi uchun yoki to‘liq to‘lovni amalga
                    oshirganidan so‘ng uni talabalar safiga qabul qilish.
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.3.</b> <b>Talaba va Buyurtmachining huquqlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.1. OTMdan ushbu shartnoma majburiyatlari bajarilishini talab qilish;
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.2. OTMda tasdiqlangan o‘quv reja va dasturlarga muvofiq darajada ta’lim olish;
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.3. OTMning ta’lim jarayonlarini yaxshilashga doir takliflar berish;
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.4. O‘qish uchun to‘lov turini mazkur shartnomaning 3-bobga asosan tanlash;
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.5. OTM imkon berganda (agar tanlangan filialda belgilangan yo‘nalish, ta’lim shakli, ta’lim
                    tilida bo‘sh o‘rin bo‘lsa) OTMning boshqa filialiga o‘qishni ko‘chirish huquqiga ega.
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.4.</b> <b>Talaba va Buyurtmachining majburiyatlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 page-break">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.1. Buyurtmachi joriy o‘quv yili uchun belgilangan o‘qitish qiymatini Shartnomaning 3-bobida
                    ko‘rsatilgan tartib va miqdorda o‘z vaqtida to‘laydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.2. OTM Ustavi va boshqa ichki hujjatlari talablariga qat’iy rioya qiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.3. Talaba o‘quv mashg‘ulotlarida muntazam qatnashadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.4. Talaba OTMda belgilangan tartib va doirada ta’lim oladi hamda ushbu jarayonda bilim
                    darajasini oshirib boradi. Qo‘ldirilgan darslar OTM tomonidan qoplab berilmaydi va ushbu darslar
                    uchun qayta hisob-kitob qilinmaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.5. Shartnomani imzolaganidan keyin uning bir nusxasini va boshqa talab qilingan hujjatlarni
                    OTMga taqdim etadi. Hujjatlar (ushbu shartnomani imzolangan nusxasi, diplom, attestat va yoki
                    shahodatnoma asli, belgilangan fotosurat, shaxsni tasdiqlovchi hujjat nusxasi) va yoki ularning
                    nusxalarini OTM tomonidan belgilangan muddatda qisman va yoki to‘liq taqdim etilmasligi talabalikka
                    qabul qilmaslikka asos bo‘ladi.

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
                    3.1. 2023-2024 o‘quv yilida ta’lim olish uchun to‘lov summasi {{ $student->all_summa }}
                    ({{ $student->all_summa_word }})
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2. Buyurtmachi shartnoma to‘lov miqdorini 3.1. bandida ko‘rsatilgan 10 bank kuni ichida ushbu
                    to‘lovni teng ikki qismga bo‘lib to‘lashi mumkin bo‘ladi.

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3. To‘lov-shartnoma asosida o‘qish istagini bildirgan abituriyentlarga birinchi yarim yillik uchun
                    toʼlov shartnomasi summasini 50% miqdorini
                    {{ $type->part1 }} yoki Talim muassasasi komissiyasi tomonidan belgilangan muddatgacha, bahorgi
                    semestr (ikkinchi yarim yillik) uchun
                    {{ $type->part2 }} qadar ikkiga boʼlib toʼlash;

                </p>

                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.4. Buyurtmachi tomonidan Shartnoma bo‘yicha o‘qitish qiymatini to‘lashda to‘lov topshiriqnomasida
                    Talabaning familiyasi, ismi, sharifi hamda o‘qiyotgan kursi to‘liq ko‘rsatiladi.

                </p>


                <div class="col-md-12 text-center">
                    <h4 class="text-bold">
                        4. KONTRAKTNI BEKOR QILISH
                    </h4>
                </div>

                <div class="col-md-12 mb-1">
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.1. Shartnoma quyidagi hollarda OTM tomonidan bir tomonlama bekor qilinadi:
                    </p>
                </div>
                <div class="col-md-12 mb-1">
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.1.1. Ustav va boshqa ichki hujjatlariga muvofiq Talaba talabalar safidan chiqarilganda;
                    </p>
                </div>
                <div class="col-md-12 mb-1">
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.1.2. Shartnoma to‘lov miqdori belgilangan muddat ichida to‘lanmasa;
                    </p>
                </div>
                <div class="col-md-12 mb-1">
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.1.3. Shartnomaning 2.1.2, 2.1.3.-bandlarida ko‘rsatilgan hollarda;
                    </p>
                </div>
                <div class="col-md-12 mb-1">
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.1.4. Talaba tomonidan qabul imtihonlarida ayyorlik, tovlamachilik, firibgarlik va boshqa
                        shunga o‘xshash belgilangan tartibga zid yollar bilan o‘qishga qabul qilinganligi aniqlanganida;
                    </p>
                </div>
                <div class="col-md-12 mb-1">
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.1.5. Talaba o‘qish davri (oquv davri deganda joriy o‘quv yili uchun tasdiqlangan yillik o‘quv
                        reja taqvimi nazarda tutiladi) davomida korrupsiya yoki korrupsiya holatlari bilan bo‘gliq
                        huquqbuzarlikni amalga oshirganida va yoki urunganida (o‘qituvchi-pedagog, xodimlarga pul,
                        qimmatbaho sovg‘a (3 AQSH $ ko‘p miqdorda) va boshqalar taklif qilish, berish va yoki bunda
                        vositachilik qilish);
                    </p>
                </div>
                <div class="col-md-12 mb-1">
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.1.6. Talaba va Buyurtmachi ОТМning qonuniy talablarini bajarmaganida;
                    </p>
                </div>
                <div class="col-md-12 mb-1">
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.2. Talaba darslarga qatnashgan yoki qatnashmaganligidan qat’iy nazar shartnoma OTM tomonidan
                        bir tomonlama bekor qilingan barcha holatlarda Buyurtmachi Talaba amalga oshirgan to‘lov
                        qaytarilmaydi. Agar Buyurtmachi Talaba ungacha muddatda ushbu shartnomada belgilangan (1-semestr
                        to‘lovi miqdorida; agar shartnoma 2-semestr davrida bekor qilinsa – 1-yillik to‘lov miqdorida)
                        to‘lovni amalga oshirmagan bo‘lgan taqdirda Buyurtmachi Talaba ushbu qarzdorlikni to‘lashni o‘z
                        mujburiyatiga oladi;
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.3. OTM tomonidan shartnoma bir tomonlama bekor qilinganda va Talaba talabalar safidan
                        chiqarilganda OTM Buyurtmachiga yozma xabarnoma yuborish huquqiga ega.
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.4. Shartnoma Talaba tomonidan uning arizasiga muvofiq bir tomonlama bekor qilinishi mumkin.
                        Bunda Talaba darslarga qatnashgan yoki qatnashmaganligidan qat’iy nazar shartnoma Talaba
                        tomonidan bir tomonlama bekor qilingan barcha holatlarda Talaba amalga oshirgan to‘lov
                        qaytarilmaydi. Agar Talaba ungacha muddatda ushbu shartnomada belgilangan (1-semestr to‘lovi
                        miqdorida; agar Talaba shartnomani 2-semestr davrida bekor qilsa – 1-yillik to‘lov miqdorida)
                        to‘lovni amalga oshirmagan bo‘lgan taqdirda ushbu qarzdorlikni to‘lashni o‘z mujburiyatiga
                        oladi.
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.5. Shartnoma taraflar ixtiyoriga bog‘liq bo‘lmagan holatlarga ko‘ra bekor qilinishi mumkin:
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.5.1. Talaba tomonidan tanlangan ta’lim shakli, yo‘nalishi, tili bo‘yicha qabul rejasida
                        ko‘rsatilgan miqdorda guruh shakllanmagan bo‘lsa.
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.5.2. Talaba vafot etsa.
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.5.3. Ushbu holatlarda OTM 10 ish kuni ichida Talabaga agar imkoni bo‘lsa OTMning boshqa
                        filialida yoki boshqa ta’lim shaklida, tilida, yo‘nalishida o‘qishni davom ettirishni taklif
                        qiladi. Talaba ushbu taklifga 10 ish kuni ichida javob xati bilan murojat qilishi shart bo‘ladi,
                        aks holda ushbu shartnoma bekor qilingan hisoblanadi va Talaba talabalar safidan chiqariladi.
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.5.4. Shartnoma taraflar ixtiyoriga bog‘liq bo‘lmagan holatlarga ko‘ra bekor qilinganda OTM
                        tomonidan Talabaga qoldiq summani qaytarilishi bilan bog‘liq sarf-xarajatlar (bank
                        komissiyalari, kanselyariya xarajatlari va boshqalar) ushbu qoldiq summadan chegirilib qolingan
                        holda 10 bank ish kunida Talaba arizasiga asosan qaytariladi.
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        4.5.5. OTMning boshqa bino joyga ko‘chirishi, masofaviy ta’lim shakliga o‘tishi taraflar
                        ixtiyoriga bog‘liq bo‘lmagan holat hisoblanmaydi va Talaba OTMning talabiga ko‘ra boshqa bino
                        joyda yoki masofaviy ta’lim shaklida o‘qishni davom ettirishi kerak bo‘ladi. Bu holatda Talaba
                        ushbu shartlarga rozi bo‘lmasa va o‘qishini davom ettirmasa OTM shartnomaning 4.1. bandiga
                        muvofiq sharnomani bir tomonlama bekor qilib amalga oshirilgan to‘lovni qaytarmaydi, agar Talaba
                        ungacha muddatda ushbu shartnomada belgilangan (1-semestr to‘lovi miqdorida; agar shartnoma
                        2-semestr davrida bekor qilinsa – 1-yillik to‘lov miqdorida) to‘lovni amalga oshirmagan bo‘lgan
                        taqdirda Talaba ushbu qarzdorlikni to‘lashni o‘z mujburiyatiga oladi.
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
                        5.1. Ushbu Shartnomaga asosan majburiyatlarning bajarilmasligi holatlari yengib bo‘lmaydigan
                        kuchlar (fors-major) ta’siri natijasida vujudga kelganda, Tomonlar o‘z majburiyatlarini
                        bajarmaslikdan qisman yoki to‘liq ozod bo‘ladilar, agar fors-major hukumat tomonidan rasman
                        e’lon qilinsa, masofaviy ta’lim shaklida o‘qishni imkoni bo‘lmasa va ular 3 oydan uzoq davom
                        etsa
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        5.2. Yengib bo‘lmaydigan kuchlar (fors-major) holatlariga Tomonlarning irodasi va faoliyatiga
                        bog‘liq bo‘lmagan tabiat hodisalari (zilzila, ko‘chki, bo‘ron, qurg‘oqchilik va boshqalar, agar
                        ular 3 oydan uzoq davom etsa) yoki ijtimoiy-iqtisodiy holatlar (urush holati, qamal, davlat
                        manfaatlarini ko‘zlab, agar ular 3 oydan uzoq davom etsa) sababli yuzaga kelgan sharoitlarda
                        Tomonlarga qabul qilingan majburiyatlarni bajarish imkonini bermaydigan favqulodda, oldini olib
                        bo‘lmaydigan va kutilmagan holatlar kiradi.
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        5.3. Shartnoma Tomonlaridan qaysi biri uchun majburiyatlarni yengib bo‘lmaydigan kuchlar
                        (fors-major) holatlari sababli bajarmaslik ma’lum bo‘lsa, darhol ikkinchi tomonga bu xaqida 10
                        kun ichida ushbu holatlar harakati sababini dalillar bilan taqdim etishi lozim. Ushbu holatda
                        OTM masofaviy uslubda ta’lim berish imkonini yo‘lga qo‘yish huquqiga ega va Talaba bu uslubda
                        ta’lim olishga roziligini bildiradi. Ushbu holatlarda OTM 10 ish kuni ichida Talabaga masofaviy
                        uslubda o‘qishni davom ettirishni taklif qiladi. Talaba ushbu taklifga 10 ish kuni ichida yozma
                        murojat bilan javob taqdim qilishi shart bo‘ladi, aks holda ushbu shartnoma bekor qilingan
                        hisoblanadi, Talaba talabalar safidan chiqariladi va to‘lov qaytarilmaydi. Agar Talaba masofaviy
                        ta’lim shaklida o‘qishni davom ettirishga norozi bo‘lsa, ushbu shartnoma bekor qilinadi va
                        to‘lov qaytarilmaydi, agar Talaba ungacha muddatda ushbu shartnomada belgilangan (1-semestr
                        to‘lovi miqdorida; agar shartnoma
                        2-semestr davrida bekor qilinsa – 1-yillik to‘lov miqdorida) to‘lovni amalga oshirmagan bo‘lgan
                        taqdirda Talaba ushbu qarzdorlikni to‘lashni o‘z mujburiyatiga oladi yoki Talaba yozma
                        murojatiga binoan o‘qishni keyingi yilga shu davridan qaytadan o‘qish sharti bilan davom
                        ettirishi mumkin bo‘ladi (an’anaviy ta’limga o‘tish imkoni bo‘lsa).

                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        5.4. Yengib bo‘lmaydigan kuchlar (fors-major) davrida masofaviy shaklda ta’lim jarayonini yo‘lga
                        qo‘yish imkoni bo‘lmasa, hukumat tomonidan rasman e’lon qilingan bo‘lsa va yengib bo‘lmaydigan
                        kuchlar (fors major) ta’siri 3 (uch) oydan ortiqroq davom etsa shartnomaga asosan
                        majburiyatlarni ijro qilish muddati ushbu yengib bo‘lmaydigan kuchlar (fors-major) davom etish
                        muddatiga qadar uzaytiriladi. Fors-major davridan uch oydan keyin shartnoma bir tomonlama bekor
                        qilinishi mumkin. Bu holatda Talaba yozma murojaatiga asosan xizmat davriga (o‘qish kalendar
                        rejasiga asoslangan holda har bir dars soati – kunduzgi va kechgi ta’lim shakli uchun; har bir
                        oy – sirtqi ta’lim shakli uchun) mutanosib ravishda to‘lov summasidan chegirilib qoldiq to‘lov
                        summasi Talabaga 30 kalendar kun ichida qaytarib beriladi.
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        5.5. Ushbu shartnomaning 5.3. bandida ko‘rsatilgan shartga asosan fors-major holatlari ta’limni
                        masofaviy amalga oshirishga imkon bersa, tomonlar o‘z majburiyatlarini masofaviy ta’limga asosan
                        amalga oshiradilar. Bunda Talaba masofaviy ta’lim olish uchun uchun talab qilingan barcha texnik
                        va boshqa jihatdan sharoitni yaratishni o‘z zimmasiga oladi.
                    </p>
                </div>
                <div class="col-md-12 text-center">
                    <h4 class="text-bold">
                        6. TOMONLARNING JAVOBGARLIGI
                    </h4>
                </div>
                <div class="col-md-12 mb-1">
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        6.1. Tomonlarning biri ushbu shartnoma majburiyatlarini bajarmagan yoki lozim darajada
                        bajarmagan taqdirda boshqa tarafga yetkazilgan zararni ushbu shartnomada va amaldagi
                        qonunchilikda belgilangan tartibda to‘laydi.
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        6.2. Buyurtmachi tomonidan mazkur shartnoma shartlari tegishli tarzda bajarilmasligi natijasida
                        yuzaga keladigan zararlarni OTMga qoplab berishi shart.

                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        6.3. Tomonlar o‘rtasidagi barcha nizolar oldindan muzokaralar yo‘li bilan hal qilinadi. Agar
                        o‘zaro rozilikka erishilmasa, nizolar O‘zbekiston Respublikasi qonunchiligiga va tomonlar
                        kelishuviga asosan Toshkent shahar sudlarida ko‘rib chiqiladi.
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        6.4. OTM Talabaning shaxsiy va boshqa mulkiga javobgar emas, Talaba o‘ziga tegishli bo‘lgan
                        mulkni OTM hududida yo‘qotib qo‘ysa, mulkiga zarar etsa va boshqa shunga o‘xshash holatlar sodir
                        bo‘lsa OTM javobgar hisoblanmaydi.
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        6.5. Davlat, xususiy va boshqa oliy ta’lim muassasalarida belgilangan chegirmalar, imtiyozlar
                        “Navoiy Innovatsiyalar universiteti NTM” OTMga tatbiq etilmaydi, bunday holatlar OTM ichki
                        hujjatlari bilan belgilanadi.
                    </p>

                </div>
                <div class="col-md-12 text-center">
                    <h4 class="text-bold">
                        7. YAKUNIY QOIDALAR VA NIZOLARNI HAL QILISH TARTIBI
                    </h4>
                </div>
                <div class="col-md-12 mb-1">
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        7.1. Ushbu shartnomani bajarish jarayonida kelib chiqishi mumkin bo‘lgan nizo va ziddiyatlar
                        tomonlar o‘rtasida muzokaralar olib borish yo‘li bilan hal etiladi.
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        7.2. Muzokaralar olib borish yo‘li bilan nizoni hal etish imkoniyati bo‘lmagan taqdirda,
                        tomonlar
                        nizolarni hal etish uchun amaldagi qonunchilikka muvofiq iqtisodiy sudga murojaat etishlari
                        mumkin.

                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        7.3. “Ta’lim muassasa” axborotlar va xabarnomalarni internetdagi veb-saytida, axborot tizimida
                        yoki e’lonlar taxtasida e’lon joylashtirish orqali xabar berishi mumkin.
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        7.4. Shartnoma 3 (uch) nusxada, tomonlarning har biri uchun bir nusxadan tuzildi va uchala nusxa
                        ham bir xil huquqiy kuchga ega.
                    </p>
                    <p>
                        &nbsp &nbsp &nbsp &nbsp
                        7.5. Ushbu shartnomaga qo‘shimcha bitim kiritilgan taqdirda ushbu barcha kiritilgan qo‘shimcha
                        bitimlar shartnomaning ajralmas qismi hisoblanadi.
                    </p>

                </div>
                @include('student.agreements_by_id.show.includes.rekvisit_show_2')
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
