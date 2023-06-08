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
                    To‘lov kontrakt (uch tomonlama kontrakt) asosida mutaxassis tayyorlashga
                </h4>
                <h4 class="text-bold">SHARTNOMASI № {{$student->id_code}}</h4>
                <h4 class="text-bold">ID: <b>{{$student->id_code}}</b></h4>
            </div>
            {{--            <div style="display: inline-block; width: 49%" class="">--}}
            {{--                {{$dateArray['year']}} yil “{{$dateArray['day']}} ” {{$dateArray['month']}}--}}
            {{--            </div>--}}
            {{--            <div style="display: inline-block; width: 49%" class=" text-right">--}}
            {{--                <span>Toshkent shahri</span>--}}
            {{--            </div>--}}
            <div class="col-md-6 text-left"><p>Angren shahri</p></div>
            <div class="col-md-6 text-right"><p>{{$dateArray['year']}} yil “{{$dateArray['day']}}
                    ” {{$dateArray['month']}}</p></div>
            <div class="col-md-12 mt-1 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp O‘zbekiston Respublikasi Vazirlar mahkamasi huzuridagi Ta’lim sifatini
                    nazorat qilish inspeksiyasi tomonidan nodavlat ta’lim xizmatlarini ko‘rsatish uchun berilgan
                    056518-sonli
                    litsenziya va Ustaviga asosan faoliyat yuritvuchi <b>“Angren Universiteti” MChJ</b> (keyingi
                    o‘rinlarda «Universitet» deb ataladi)
                    nomidan rektor @include('student.agreements_by_id.show.includes.include_variables') bir tomondan,
                    va {{ $student->fio() }}
                    ikkinchi tomondan (keyingi o’rinlarda - Buyurtmachi) yoki
                    ____________________________________________ nomidan
                    _______________________________ ga asosan ish yurutuvchi
                    ________________________________________________uchinchi tomondan
                    (keyingi o’rinlarda - Buyurtmachi) va talabalikka tavsiya etilgan abituriyent
                    {{ $student->fio() }} (keyingi o’rinlarda - Talaba), birgalikda Tomonlar),
                    <b>60110100-Pedagogika va psixologiya ta`lim</b> yo‘nalishi bo‘yicha Talabani bakalavriat 1-kurs
                    1-semestr davomida o‘qitish
                    maqsadida mazkur shartnomani (keyingi o‘rinlarda - Kontrakt) quyidagi shartlar asosida tuzdilar:

                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    1. 1. KONTRAKT PREDMETI
                </h4>
            </div>
            <div class="col-md-12 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.1.</b> 1.1. Mazkur Kontraktga asosan Ta’lim muassasasi
                    5 o‘quv yili davomida belgilangan ta’lim standartlari va o‘quv dasturlariga muvofiq
                    o‘qitadi, Buyurtmachi esa Kontraktning 3-bobida ko‘rsatilgan tartib va miqdordagi to’lovni amalga
                    oshiradi hamda Talaba Ta’lim muassasasida belgilangan tartibga muvofiq ta’lim olish majburiyatini
                    oladi
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.2.</b> Ta’lim shakli: <b>Sirtqi </b>
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp <b>1.2.</b> O’qish muddati: <b>5 yil</b>
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
                    <b>2.1.</b> <b>Taʻlim muassasasining huquqlari</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.1. Talabadan/Buyurtmachidan shartnomaviy majburiyatlari bajarilishini, shu jumladan
                    Ta’lim muassasasining ichki hujjatlarida belgilangan qoidalarga rioya qilishni, o‘quv
                    mashg‘ulotlarida muntazam qatnashishni, Kontrakt bo‘yicha to’lovlarni o‘z vaqtida amalga oshirishni
                    talab qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.2 Talaba Ta’lim muassasasining ichki hujjatlarida belgilangan qoidalarga rioya qilmagan,
                    darslarni uzrli sabablarsiz qoldirib, o‘quv yili davomida talabalarni o‘quv soatlari bo‘yicha
                    imtihonlarga qabul qilish uchun zarur bo‘lgan minimal o‘quv soatlari mavjud bo‘lmagan taqdirda
                    Talabaning imtihonlarga kirishini cheklash (talabalarga imtihon topshirish uchun zarur bo‘lgan o‘quv
                    soatlari miqdori Universitetning ichki qoidalari bilan tartibga solinadi) yoki Buyurtmachi o‘qitish
                    uchun belgilangan miqdordagi to’lovni o‘z vaqtida amalga oshirmagan bo‘lsa Ta’lim muassasasi
                    Talabaga nisbatan belgilangan tartibda talabalar safidan chetlashtirish, tegishli kursda qoldirish
                    yoki boshqa choralarni qo‘llash.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.3 Talaba va/yoki Buyurtmachi tomonidan ushbu Shartnoma shartlariga amal qilinmagan
                    holatda va/yoki ushbu Shartnomada ko’rsatilgan muddatda to’lov amalga oshirilmagan holatda,
                    Universitet rahbariyatining qaroriga binoan mazkur shartnomani bir tomonlama bekor qilish. Bunda
                    talaba yoki to'lovchining muqaddam amalga oshirgan to'lovlari qaytarilmaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.4. Talaba Ta’lim muassasasining ichki hujjatlarida belgilangan qoidalarni qo‘pol ravishda
                    buzgan, xususan huquqbuzarlik sodir etgan hollarda Kontraktni bir tomonlama bekor qilish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.5. Istisno tariqasida Kontrakt bo’yicha to’lov muddatlarini uzaytirish (Ta’lim muassasasining
                    buyrug’i orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.6. Buyurtmachi kontraktning 3-bobida ko’rsatilgan tartib va miqdorda o’z vaqtida to’lovni
                    amalga oshirmaganida, Talabani barcha o’quv va imtihon jarayonlariga qo’ymaslik.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.7. Talabaning rasmiy hujjatlarining asl nusxasini (o‘rta yoki o‘rta maxsus ma’lumot to‘g‘risida
                    attestat va/yoki diplom, Universitet diplomi yoki boshqa hujjatlar) Universitetning o‘qish va boshqa
                    xizmatlari to’lovini (kitoblarni qaytarish yoki ularning narxini) 100% miqdorida to‘langunga qadar,
                    shuningdek Universitetga yetkazilgan zararning o‘rni qoplanmaguncha va penya to‘langunga qadar
                    saqlash.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.1.8. O‘zbekiston Respublikasining amaldagi qonunchiligi va universitet nizomida nazarda tutilgan
                    boshqa huquqlarni amalga oshirish.
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
                    2.2.1. O‘qitish uchun O‘zbekiston Respublikasining “Ta’lim to‘g‘risida”gi Qonuniga muvofiq Ta’lim
                    muassasasi Ustavi va boshqa ichki hujjatlarida nazarda tutilgan zarur shart-sharoitlarni yaratadi
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.2. Talabalarning qonun hujjatlarida belgilangan huquqlarining bajarilishini ta’minlaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.3. Talabani tasdiqlangan o’quv reja va dasturlarga muvofiq darajada o‘qitadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.4. Talaba bakalavriat yo’nalishini muvaffaqiyatli tamomlaganda, belgilangan tartibda diplom
                    beradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.2.5. Abituriyent o’quv yilining birinchi yarmi uchun yoki to’liq to’lovni amalga oshirganidan
                    so‘ng uni talabalar safiga qabul qilish.
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
                    2.3.1. Ta’lim muassasasidan shartnomaviy majburiyatlari bajarilishini talab qilish
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.2. Ta’lim muassasasida tasdiqlangan o’quv reja va dasturlarga muvofiq darajada ta’lim olish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.3. Ta’lim muassasasining ta’lim jarayonlarini yaxshilashga doir takliflar berish.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.3.4. O‘qish uchun to’lov turini 3-bobga asosan tanlash.
                </p>
            </div>
            <div class="col-md-12 mb-1 ">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    <b>2.4.</b> <b>2.4. Talaba va Buyurtmachining majburiyatlari:</b>
                </p>
            </div>
            <div class="col-md-12 mb-1 page-break">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.1. Buyurtmachi joriy o‘quv yili uchun belgilangan o‘qitish qiymatini Kontraktning 3-bobida
                    ko’rsatilgan tartib va miqdorda o‘z vaqtida to’laydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.2. Universitet Ustavi va boshqa ichki hujjatlari talablariga qat’iy rioya qiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.3. Talaba o’quv mashg’ulotlarida muntazam qatnashadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.4. Talaba Ta’lim muassasasida belgilangan tartib va doirada ta’lim oladi hamda ushbu jarayonda
                    bilim darajasini oshirib boradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.5. Kontraktni imzolaganidan keyin Ta’lim muassasasiga taqdim etadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    2.4.6. Talaba va buyurtmachi o’rtasidagi huquqiy majburiyatlar o’zaro kelishuv asosida boshqariladi
                    va ushbu o‘zaro kelishuvni amalga oshirish uchun Universitet hech qanday majburiyatni o‘z zimmasiga
                    olmaydi.

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
                    3.1. Ta’lim muassasasida o’qish davrida ta’lim xizmatini ko’rsatish narxi Respublikada belgilangan
                    Mehnatga haq to‘lashning eng kam miqdoriga bog‘liq holda hisoblanadi
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.2. Ta'lim uchun to'lov O’zbekiston Respublikasi milliy valyutasida (UZS) Universitetning bank
                    hisob raqamiga o'tkazish yo'li bilan va/yoki O'zbekiston Respublikasi qonunchiligi bilan ruxsat
                    etilgan boshqa usulda amalga oshiriladi.

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.3. To`lanishi lozim bo’lgan to’lov summasi {{ $student->all_summa }} ({{ $student->all_summa_word }})
                    so‘mni tashkil etadi va
                    quyidagi muddatlarda amalga oshiriladi: <br>
                    &nbsp &nbsp &nbsp &nbsp &nbsp • belgilangan to‘lov miqdorining kamida 50 foizini talabalikka tavsiya etilgan abiturientlar uchun
                    10.04.2023 gacha; <br>
                    &nbsp &nbsp &nbsp &nbsp &nbsp • belgilangan to‘lov miqdorining qolgan qismini (100%) 05.05.2023 gacha amalga oshirishi lozim.

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.4. To‘lovning to‘liq summasini uch ish kuni ichida to‘lagan talaba yoki buyurtmachiga sirtqi
                    ta’lim uchun 500 000 (besh yuz ming ) so‘m, kunduzgi ta’lim uchun 1 000 000 (bir million) so‘m
                    miqdorda chegirma beriladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.5. Agar Talaba qoniqarsiz natijalar tufayli bir yoki bir nechta kurslardan topshira olmasa, o‘qish
                    to‘lovi quyidagicha to‘lanadi:
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.5.1. Agar Talaba bir semestrda 12 dan kam kredit olsa, u o‘qish uchun to‘lovni olgan akademik
                    kreditlar soniga qarab to‘lashi shart. Bitta kreditning qiymati 300 000 (uch yuz ming) so‘mga teng.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.5.2. Agar Talaba bir semestrda 12 yoki undan ortiq kredit olgan bo‘lsa, talaba Qabul nizomida
                    ko‘rsatilgan bir semestr uchun o‘qish to‘lovining yarmini to‘lashi shart.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.6. To‘lovni amalga oshirayotganda Talaba va/yoki Buyurtmachi to‘lov hujjatlarida talabaning to'liq
                    ismi, sharifini, talaba o'qiyotgan fakultet nomi, kursi, shuningdek, talabaning pasport seriya va
                    raqamini ko'rsatishi shart.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.7. O‘zbekiston Respublikasida Mehnatga haq to‘lashning eng kam miqdori oshirilganda Universitet
                    ta’lim uchun belgilangan to'lov miqdorini bir tomonlama shunga muvofiq miqdorda oshirishga haqlidir,
                    bu haqda Universitet Talabani 15 kalendar kun oldin xabardor qiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.8. O‘qish boshlanganda va/yoki Talabani kursga qabul qilish to‘g‘risidagi qaror kuchga kirgandan
                    keyin to‘langan har qanday summa qaytarilmaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    3.9. Talaba o‘qishdan chetlatilgan taqdirda, chetlatilish sabablaridan qat’i nazar, Universitetga
                    ta’lim uchun to'langan pul mablag'lari Universitet tomonidan qaytarilmaydi.
                </p>
            </div>
            <div class="col-md-12 text-center">
                <h4 class="text-bold">
                    4. KONTRAKTNI BEKOR QILISH
                </h4>
            </div>
            <div class="col-md-12 mb-1">
                <h4 class="text-bold">
                    Kontrakt quyidagi hollarda bekor qilinadi:
                </h4>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.1. Tomonlarning o‘zaro roziligi bilan
                </p>
            </div>
            <div class="col-md-12 mb-1">
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.2. Ta’lim muasasasining tashabbusiga ko‘ra Ustavi va boshqa ichki hujjatlariga muvofiq Talaba
                    talabalar safidan chiqarilganda.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.3. Kontrakt to’lov miqdori belgilangan muddat ichida to’lanmasa (bunda, Ta’lim muassasasi
                    Kontraktini bir tomonlama bekor qiladi, Talaba talabalar safidan chiqariladi).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.4. Buyurtmachining tashabbusiga ko‘ra (yozma murojaatga asosan).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.5. Kontraktning 2.1.3-bandida ko’rsatilgan hollarda (Ta’lim muassasasi tomonidan Kontraktning bir
                    tomonlama bekor qilinishi va talabalar safidan chiqarilishi haqida Buyurtmachiga yozma xabarnoma
                    yuborish orqali).
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.6. Qonunchilikda ko‘rsatilgan boshqa hollarda.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    4.7. Kontrakt bekor qilingan barcha holatlarda Buyurtmachi amalga oshirgan to’lov miqdoridan Ta’lim
                    muasasasi ko’rsatgan ta’lim xizmatlari qiymati va davriga monand mablag’lar Ta’lim muasasasi
                    foydasiga ushlab qolinadi. Agar Buyurtmachi ungacha muddatda to’lovni amalga oshirmagan bo’lgan
                    taqdirda Buyurtmachi ushbu qarzdorlikni to’lashni o‘z majburiyatiga oladi
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
                    5.1. Ushbu Kontraktga asosan majburiyatlarning bajarilmasligi holatlari yengib bo'lmaydigan kuchlar
                    (fors-major) ta’siri natijasida vujudga kelganda, Tomonlar o’z majburiyatlarini bajarmaslikdan
                    qisman yoki to’liq ozod bo’ladilar.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.2. Yengib bo’lmaydigan kuchlar (fors-major) holatlariga Tomonlarning irodasi va faoliyatiga
                    bog’liq bo’lmagan tabiat hodisalari (zilzila, ko‘chki, bo‘ron, qurg'oqchilik va boshqalar) yoki
                    ijtimoiy-iqtisodiy holatlar (urush holati, qamal, davlat manfaatlarini ko‘zlab) sababli yuzaga
                    kelgan sharoitlarda Tomonlarga qabul qilingan majburiyatlarni bajarish imkonini bermaydigan
                    favqulodda, oldini olib bo'lmaydigan va kutilmagan holatlar kiradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.3. Kontrakt Tomonlaridan qaysi biri uchun majburiyatlarni yengib bo’lmaydigan kuchlar (fors-
                    major) holatlari sababli bajarmaslik ma’lum bo‘lsa, darhol ikkinchi tomonga bu xaqda 10 (o’n) kun
                    ichida ushbu holatlar harakati sababini dalillar bilan taqdim etishi lozim. Masofaviy ta’lim bundan
                    mustasno holat hisoblanadi. Universitet masofaviy uslubda ta’lim berish imkonini yo‘lga qo‘yish
                    huquqiga ega va Talaba va Buyurtmachi bu uslubda ta’lim olishga roziligini bildiradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.4. Kontraktga asosan majburiyatlarni ijro qilish muddati ushbu yengib bo’lmaydigan kuchlar (fors-
                    major) va holatlar davom etish muddatiga qadar uzaytiriladi. Agar yengib bo’lmaydigan kuchlar (fors-
                    major) ta’siri 90 (to’qson) kundan ortiqroq davom etsa, Tomonlar kelishuviga binoan shartnoma bekor
                    qilinishi mumkin. Masofaviy ta’lim bundan mustasno holat hisoblanadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    5.5. Fors-major holatlari ta’limni masofaviy amalga oshirishga imkon bersa, tomonlar o’z
                    majburiyatlarini masofaviy ta’limga asosan amalga oshiradilar. Bunda Talaba masofaviy ta’limda
                    qatnashish uchun barcha talab qilingan texnik va boshqa jixatdan sharoyitga ega bo'lishi kerak.
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
                    6.1. Kontrakt bevosita Tomonlar tomonidan imzolangan paytdan e’tiboran kuchga kiradi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.2. Taraflar ushbu shartnomadan kelib chiqadigan yoki yuzaga kelishi mumkin bo‘lgan barcha nizolar
                    yoki kelishmovchiliklarni do’stona muzokaralar orqali hal qilish uchun barcha sa’y-harakatlarni
                    amalga oshiradilar, Kontraktning 4.2., 4.3., 4.4., 4.5. bandlarida ko‘rsatilgan holatlar bundan
                    mustasno.

                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.3. Shartnomaning har qanday o'zgarishi, O'zbekiston Respublikasining amaldagi qonunchiligiga
                    muvofiq yozma ravishda amalga oshiriladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.4. Ushbu shartnomadan kelib chiqadigan har qanday nizo, kelishmovchilik yoki da’voni, shuningdek,
                    shartnomaga amal qilmaslik, uni vaqtincha to’xtatish yoki bekor qilishni do‘stona muzokaralar orqali
                    hal etishning imkoniyati bo’lmasa, O‘zbekiston Respublikasi qonun hujjatlariga muvofiq sud orqali
                    tartibga solinadi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.5. Kontrakt bo‘yicha o‘z majburiyatlarini bajarmagan Tomon qonunda belgilangan javobgarlikka
                    tortiladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.6. Buyurtmachi/Talaba tomonidan taqdim qilingan barcha hujjatlar, hujjatlardagi ma’lumotlarning
                    ishonchliligi, to’g’riligi, haqqoniyligi bo‘yicha javobgarlik Buyurtmachi/Talaba zimmasiga
                    yuklanadi. Talaba/Buyurtmachi tomonidan hujjatlami qalbakilashtirish huquqbuzarligi ta’lim
                    muassasasi tomonidan aniqlanganda darhol huquqni muhofaza qiluvchi organlarga xabar beriladi, Talaba
                    talabalar safidan chetlashtiriladi. Bunday holatlar uchun jinoyiy javobgarlik mavjudligini ma’lum
                    qilamiz. (O’zbekiston Respublikasi Jinoyat kodeksining 228-moddasi). Agar bunday holat Talaba ta’lim
                    muassasasidan bakalavr diplomini u taqdim qilgan qalbaki hujjat(lar) yoki hujjatlardagi
                    qalbakilashtirilgan ma’lumotlar asosida olgan bo‘lsa, unda diplom haqiqiy emas deb topiladi va ushbu
                    holat yuzasidan huquqni muhofaza qiluvchi organlarga xabar beriladi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.7. Ushbu shartnomaning 6.8. bandida ko‘rsatilgan huquqbuzarlik sodir etilgan bo’lsa
                    Talaba/Buyurtmachi tomonidan amalga oshirilgan shartnoma to‘lovi qaytarilmaydi.
                </p>
                <p>
                    &nbsp &nbsp &nbsp &nbsp
                    6.8. Ushbu shartnoma O‘zbekiston Respublikasining amaldagi qonunchiligiga muvofiq O‘zbekiston
                    Respublikasi Fuqarolik kodeksining kelishuvlar to‘g‘risidagi qoidalardan kelib chiqqan holda
                    tuzilgan.
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
