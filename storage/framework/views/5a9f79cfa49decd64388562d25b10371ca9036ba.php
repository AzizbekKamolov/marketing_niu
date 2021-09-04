<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>

        body{
            font-family: DejaVu Sans, sans-serif;
            font-size: 16px;
        }
        .col-md-12 b{
            display: block;
            text-align: center;
        }
        .break{
            page-break-after: always;
        }
        .rekvizit{
           
        }
        .rekvizit-item{
            width: 49%;
            display: inline-block;
        }
        
       
    </style>
</head>
<body>

    <?php
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
    ?>
   
<div class="row">
<div class="col-md-12 text-center">
    <b>
        Чуқурлаштирилган таълим йўналиши асосида ўқитиш бўйича икки томонлама 
ТЎЛОВ-КОНТРАКТ ШАРТНОМАСИ
    </b>
</div>

<div class="col-md-12 text-center">
    <b>
       № _________
    </b>
</div>

<div class="col-md-12 text-center">
    <b>
       ИД:<?php echo e($data->id_code); ?>

    </b>
</div>
<div class="rekvizit">
    <div class="rekvizit-item">Тошкент ш.</div>
    <?php if($data->getting_date): ?>
    <div class="rekvizit-item"> 2020 йил « <?php echo e(date('d' , strtotime($data->getting_date))); ?> » <?php echo e(get_month_name(date('m' , strtotime($data->getting_date)))); ?></div>

    <?php else: ?>
    <div class="rekvizit-item"> 2020 йил « <?php echo e(date('d')); ?> » <?php echo e(get_month_name(date('m'))); ?></div>

    <?php endif; ?>
</div>




                                                                       

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Тошкент давлат юридик университети қошидаги академик лицей (кейинги ўринларда – Таълим муассасаси) номидан Уставга асосан иш юритувчи директор 
Бобоқулов Шохназар Очилович бир томондан, ва <b><?php echo e(date('d-m-Y' , strtotime($data->birthday))); ?></b> йилда туғилган 
                                
<b><?php echo e($data->address); ?>да</b> яшовчи <b><?php echo e($data->fio()); ?></b> нинг  
           
ота-онаси <b><?php echo e($data->parent_name); ?></b>  
(кейинги ўринларда – ўқувчининг ота-онаси) иккинчи томондан (биргаликда – Томонлар), ўқувчини 2020-2021 йил давомида ўқитиш мақсадида мазкур икки томонлама контрактни (кейинги ўринларда – Контракт) Ўзбекистон Республикаси Президентининг 2020 йил 29 апрелдаги ПФ5987-сон “Ўзбекистон Республикасида юридик таълим ва фанни тубдан такомиллаштириш бўйича қўшимча чора-тадбирлар тўғрисида”ги Фармони, Олий ва ўрта махсус, касб-ҳунар таълими муассасаларида ўқитишнинг тўлов-контракт шакли ва ундан тушган маблағларни тақсимлаш тартиби тўғрисидаги низом (рўйхат рақами 2431, 2013 йил 26 феврал) ҳамда ТДЮУ ректорининг 2020 йил 30 июндаги “Тошкент давлат юридик университети қошидаги академик лицейда ўқувчиларнинг тўлов-контракт асосида ўқитиш миқдорини белгилаш тўғрисида”ги 08/123-сон бўйруғига мувофиқ туздилар.


<div class="col-md-12 text-center">
    <b>
       1. КОНТРАКТ ПРЕДМЕТИ
    </b>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    1. Мазкур Контрактга асосан Таълим муассасаси ўқувчини 2020/2021 ўқув йили давомида белгиланган таълим стандартлари ва ўқув дастурларига мувофиқ ўқитади, ўқувчининг ота-онаси эса Контрактнинг 3-бобида кўрсатилган тартиб ва миқдордаги тўловни амалга оширади ҳамда ўқувчини Таълим муассасасида белгиланган тартибга мувофиқ таълим олиш учун шароит яратиш мажбуриятини олади.
<div class="col-md-12 text-center">
    <b>
       2. ТОМОНЛАРНИНГ ҲУҚУҚ ВА МАЖБУРИЯТЛАРИ
    </b>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

2.1. Таълим муассасасининг ҳуқуқлари:
2.1.1. Ўқувчининг ота-онаси шартномавий мажбуриятлари бажарилишини, Контракт бўйича тўловларни ўз вақтида амалга оширишни талаб қилиш, шу жумладан ўқувчининг Таълим муассасасининг ички ҳужжатларида белгиланган қоидаларга риоя қилишни, ўқув машғулотларида мунтазам қатнашишини назорат қилиш.<br>
2.1.2 Ўқувчининг ота-онаси томонидан ўқитиш учун белгиланган миқдордаги тўловни ўз вақтида амалга оширмаган тақдирда ёки ўқувчи Таълим муассасасининг ички ҳужжатларида белгиланган қоидаларга риоя қилмаган, бир семестр давомида дарсларни узрли сабабларсиз 74 соатдан ортиқ қолдирганда белгиланган тартибда ўқувчилар сафидан четлаштириш, тегишли курсда қолдириш бошқа чораларни қўллаш.<br>
2.1.3.Ўқувчи семестр натижаси бўйича белгиланган муддатларда фанларни ўзлаштира олмаганда яъни академик қарздор бўлганда таълим муассасаси ушбу шартномани бир томонлама бекор қилади.<br>
2.1.4.Ўқувчи Таълим муассасасининг ички ҳужжатларида белгиланган қоидаларни қўпол равишда бузган, хусусан ҳуқуқбузарлик содир этган ҳолларда Контрактни бир томонлама бекор қилиш. <br>
2.2. Таълим муассасасининг мажбуриятлари:<br>
2.2.1. Ўқитиш учун Ўзбекистон Республикасининг “Таълим тўғрисида”ги Қонуни ва Кадрлар тайёрлаш миллий дастурига мувофиқ Таълим муассасаси Устави ва бошқа ички ҳужжатларида назарда тутилган зарур шарт-шароитларни яратади.<br>
2.2.2. Ўқувчиларнинг қонун ҳужжатларида белгиланган ҳуқуқларининг бажарилишини таъминлайди.<br>
2.2.3. Ўқувчини тасдиқланган ўқув режа ва дастурларга мувофиқ давлат стандарти талаблари даражасида ўқитади.<br>
2.2.4. Ўқувчи Таълим муассасасини мувоффақиятли тамомлаганда белгиланган тартибда диплом беради.<br>
2.3. Ўқувчининг ота-онаси ҳуқуқлари:<br>
2.3.1. Таълим муассасасидан шартномавий мажбуриятлари бажарилишини талаб қилиш.<br>
2.3.2. Ўқиш учун бир йиллик тўлов суммасини бир йўла тўлиқ тўлаш ёки иккига бўлиб тўлаш. <br>
Ўқувчи:<br>
2.3.3. Таълим муассасасида тасдиқланган ўқув режа ва дастурларга мувофиқ давлат стандарти талаблари даражасида таълим олиш. <br>
2.3.4. Таълим муассасасининг Ахборот-ресурс маркази, спорт иншоотларидан фойдаланиш.  <br>
2.4. Ўқувчининг ота-онаси мажбуриятлари: <br>
2.4.1. Жорий ўқув йили учун белгиланган ўқитиш қийматини Контрактнинг 3-бобида кўрсатилган тартиб ва миқдорда ўз вақтида тўлайди. <br>
2.4.2. Контрактни имзолангандан кейин Таълим муассасасига тақдим этади. <br>
Ўқувчи: <br>
2.4.3. Таълим муассасасининг Устави ва бошқа ички ҳужжатлари талабларига қатъий риоя қилади. <br>
2.4.4. Ўқув машғулотларида мунтазам қатнашади. <br>
2.4.5. Таълим муассасасида белгиланган тартиб ва доирада таълим олади ҳамда ушбу жараёнда билим даражасини ошириб боради. <br>
<div class="col-md-12 text-center">
    <b>
       3. ТЎЛОВ МИҚДОРЛАРИ ВА МУДДАТЛАРИ
    </b>
</div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

3.1. 2020/2021 ўқув йили учун тўлов-контракт асосида ўқитиш қиймати 2020 йилнинг 
1 октябридан бошлаб меҳнатга ҳақ тўлаш энг кам миқдорининг 10 баробари миқдорида, яъни 6 793 300 (олти миллион етти юз тўқсон уч минг уч юз)    сўмни ташкил этади ва Контрактнинг ушбу бобида белгиланган тартибда тўланади. Мазкур сумма меҳнатга ҳақ тўлашнинг энг кам миқдори ўзгариши билан мос равишда Таълим муассасаси томонидан ўзгартирилиши мумкин. <br>
 3.2. Ўқувчининг ота-онаси кузги семестр учун 3 396 650 (уч миллион уч юз тўқсон олти минг олти юз эллик) сўмни қуйидаги муддатда тўлайди: 
    15-октябгача -3 396 650 сўм; <br>
3.3. Ўқувчининг ота-онаси баҳорги семестр учун 3 396 650 (уч миллион уч юз тўқсон олти минг олти юз эллик) сўмни қуйидаги муддатда тўлайди: 
    15-мартгача -3 396 650 сўм; <br>
3.4. Ўқувчининг ота-онаси томонидан Контракт бўйича ўқитиш қийматини тўлашда тўлов топшириқномасида шартноманинг тартиб рақами ва санаси, ўқувчининг фамилияси, исми, шарифи тўлиқ кўрсатилади. <br>
3.5. Таълим муассасасига абитуриентнинг ўқишга қабул қилинганлиги тўғрисидаги буйруқ бир йиллик ўқитиш қийматининг камида 50 фоизи тўлангандан сўнг, бир ойлик муддатдан кечиктирилмасдан чиқарилади. <br>
3.6. Ўқувчи тегишли фанлар бўйича академик қарздорликни қайта топшириш шарти билан кейинги курс (семестр)га ўтказилган тақдирда, кейинги семестр учун тўлов Ўқувчининг ота-онаси томонидан академик қарздорлик топширилгунга қадар амалга оширилади. <br>


<div class="col-md-12 text-center">
    <b>
       4. ШАРТНОМАНИ БЕКОР ҚИЛИШ
    </b>
</div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
4. Контракт қуйидаги ҳолларда бекор қилинади: <br>
4.1. Томонларнинг ўзаро розилиги билан. <br>
4.2. Таълим муасасасининг ташаббусига кўра Устави ва бошқа ички ҳужжатларига мувофиқ ўқувчилар сафидан чиқарилганда. <br>
4.3. Ўқитиш қиймати белгиланган муддат ичида тўланмаса (бунда, Таълим муассасаси ушбу шартномани бир томонлама бекор қилади, ўқувчи ўқувчилар сафидан чиқарилади). <br>
4.4. Ўқувчининг ота-онаси ташаббусига кўра (ёзма мурожаатга асосан). <br>
4.5. Контрактнинг 2.1.3-бандида кўрсатилган ҳолларда (Таълим муассасаси томонидан Контрактнинг бир томонлама бекор қилиниши ва ўқувчилар сафидан чиқарилиши ҳақида Ўқувчининг ота-онасига ёзма хабарнома юбориш орқали). <br>
4.6. Қонунчиликда кўрсатилган бошқа ҳолларда. <br>

<div class="col-md-12 text-center">
    <b>
       5. ФОРС-МАЖОР ҲОЛАТЛАР
    </b>
</div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
5.1. Ушбу Контрактга асосан мажбуриятларни бажарилмаслиги ҳолатлари енгиб бўлмайдиган кучлар (форс-мажор) ҳолатлар натижасида вужудга келганда Томонлар ўз мажбуриятларини бажармасликдан қисман ёки тўлиқ озод бўладилар. <br>
5.2. Енгиб бўлмайдиган кучлар (форс-мажор) ҳолатларига Томонларнинг иродаси ва фаолиятига боғлиқ бўлмаган табиат ҳодисалари (пандемия, зилзила, кўчки, бўрон, қурғоқчилик ва бошқалар) ёки ижтимоий-иқтисодий ҳолатлар (уруш ҳолати, қамал, давлат манфаатларини кўзлаб импорт ва экспортни тақиқлаш ва бошқалар) сабабли юзага келган шароитларда Томонларга қабул қилинган мажбуриятларни бажариш имконини бермайдиган фавқулодда, олдини олиб бўлмайдиган ва кутилмаган ҳолатлар киради. <br>
5.3. Контракт Томонларидан қайси бири учун мажбуриятларни енгиб бўлмайдиган кучлар (форс-мажор) ҳолатлари сабабли бажармаслик маълум бўлса, дарҳол иккинчи томонга бу хақда 30 кун ичида ушбу ҳолатлар ҳаракати сабабини далиллар билан тақдим этиши лозим. <br>
5.4. Контрактга асосан мажбуриятларни ижро қилиш муддати ушбу енгиб бўлмайдиган кучлар (форс-мажор) ҳолатлар давом этиш муддатига қадар узайтирилади. Агар енгиб бўлмайдиган кучлар (форс-мажор) таъсири 90 (тўқсон) кундан ортиқроқ давом этса, Томонлар ташаббусига биноан шартнома бекор қилиниши мумкин. <br>
<div class="col-md-12 text-center">
    <b>
       6. ЯКУНИЙ ҚОИДАЛАР
    </b>
</div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


6.1. Томонлар ўртасида вужудга келадиган низолар ўзаро музокаралар олиб бориш ҳамда талабнома юбориш орқали ҳал этилади, Контрактнинг 4.2-4.5 бандларида кўрсатилган ҳолатлар бундан мустасно. <br>
6.2. Меҳнатга ҳақ тўлашнинг энг кам миқдори ўзгарганда мос равишда тўлов-контракт қиймати миқдори навбатдаги семестр бошидан оширилади. <br>
6.3. Ўқувчи ўқувчилар сафидан четлаштирилганда ёхуд белгиланган муддатларда фанларни ўзлаштира олмаганлиги яъни академик қарздор бўлганлиги сабабли курсдан қолдирилганда таълим муассасаси томонидан унинг тегишли ўқув семестри учун амалга оширилган тўлови қайтариб берилмайди. <br>
<span class="break"></span>

<div class="col-md-12 text-center">
    <b>
       7. ТОМОНЛАРНИНГ МАНЗИЛЛАРИ ВА ТЎЛОВ РЕКВИЗИТЛАРИ
    </b>
</div>

<div class="rekvizit" style="margin-top: 50px;">
    <div class="rekvizit-item" ><b style="text-align: center; display: block;">Таълим муассасаси</b></div>
    <div class="rekvizit-item" >  <b style="text-align: center; display: block;">Ўқувчининг ота-онаси</b></div>
</div>

<div class="rekvizit" style="position: relative;">
    <div class="rekvizit-item" style="  position: absolute; left: 0; top: 0;">
        
        
            <img src="<?php echo e(public_path("pechat/pechat_lyceum.jpg")); ?>" style="width: 100%; height: auto; transform: scale(1.2);">
        
    </div>
    <div class="rekvizit-item" style="position: absolute; top: 0; right: 0;">
        
           
            <p style="line-height: 30px;">
                

<b><?php echo e($data->parent_name); ?></b><br>
 

 Манзили: <b> <?php echo e($data->address); ?></b>

Паспорт серияси: <b><?php echo e($data->parent_pass_seria); ?></b> рақами <b><?php echo e($data->parent_pass_number); ?></b> <br>


Имзо ______________ <br>

            </p>
        
    </div>
</div>


</div>



</body>
</html>