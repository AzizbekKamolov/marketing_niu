<html>
<head>
    <meta charset="utf-8">
    <style>
        body{
            font-family: DejaVu Sans;
        }
        ul {
            list-style-type: none;
        }

        li {
            float: left;
        }
    </style>
</head>
<body>
<center>
    <table>
        <tr>
            <td width="30">
                <img src="{{ asset('/photos/logo.png') }}" style="max-width:90px;height: auto">
            </td>
            <td width="30">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td width="35">
                <div align="right" style="text-align: center;line-height: 0.9">
                    Toshkent davlat yuridik<br>
                    universiteti rektori<br>
                    <ul style="margin: 0;padding: 0">
                        <li style="width: 280px;">
                            <p style="padding: 0;margin: 0;text-align: center">R.Hakimov</p>
                            <hr style="padding: 0;margin:0;">
                            <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(F.I.O)</p>
                        </li>
                        <li style="width: 20px;">
                            ga
                        </li>
                    </ul>
                    <ul style="margin: 0;padding: 0;clear: both;margin-top: -10px;">
                        <li style="width: 280px;">
                            <p style="padding: 0;margin: 0;text-align: center">{{ $data->last_name." ".$data->first_name }}</p>
                            <hr style="padding: 0;margin:0;">
                        </li>
                    </ul>
                    <ul style="margin: 0;padding: 0;clear: both">
                        <li style="width: 280px;">
                            <p style="padding: 0;margin: 0;text-align: center">{{ $data->middle_name." " }}</p>
                            <hr style="padding: 0;margin:0;">
                            <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(Xorijiy fuqaroning F.I.O (to'liq yoziladi))</p>
                        </li>
                        <li style="width: 20px;">
                            dan
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
    </table>
</center>
<div style="margin-top: 50px;">
    <h3 style="margin-left: 47%;margin-bottom: 0">Ariza</h3>
    <p style="margin-top:0px;line-height: 0.8;text-align: center">Toshkent davlat yuridik universiteti bakalavriatiga<br> xorijiy fuqarolarni qabul qilish haqida </p>
</div>
<ul style="clear: both;margin-left: 40px;">
    <li style="width: 60px;">
        Menga
    </li>
    <li style="width: 490px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->getSpec_code().", ".$data->getSpeciality() }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(ta'lim yo'nailishi kodi va nomi)</p>
    </li>
    <li style="width: 150px;">
        ta'lim
    </li>
</ul>
<ul style="clear: both;">
    <li style="width: 90px;">
        yo'nalishi,
    </li>
    <li style="width: 150px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->getStudyLang() }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(o'zbek, rus)</p>
    </li>
    <li style="width: 90px;">
        &nbsp;&nbsp;o'quv tili,
    </li>
    <li style="width: 320px;">
        <p style="padding: 0;margin: 0;text-align: center">kunduzgi</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(kunduzgi, maxsus, sirtqi)</p>
    </li>
</ul>
<ul style="clear: both;">
    <li style="line-height: 0.8">
        o'quv shakliga o'qishga kirish uchun o'tkazildigan suhbatda qatnashishga ruxsat beringizni so'rayman.
    </li>
</ul>
<div style="height: 35px;"></div>
<ul style="clear: both;margin-top: 15px;margin-left: 40px;">
    <li style="width: 150px;">
        Oliy ma'lumotim
    </li>
    <li style="width: 200px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->getHighEducation() }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(bor, yo'q)</p>
    </li>
</ul>
<ul style="clear: both;margin-top: 15px;margin-left: 40px;">
    <li style="width: 100px;">
        Ma'lumotim
    </li>
    <li style="width: 320px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->getDegree() }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(o'rta, o'rta maxsus, oliy)</p>
    </li>
    <li style="width: 15px;">
        ,
    </li>
</ul>
<ul style="clear: both;margin-top: 15px;">
    <li style="width: 435px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->background_study }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(tugatgan ta'lim muassasasi nomi)</p>
    </li>
    <li style="width: 22px;">
        ni
    </li>
    <li style="width: 50px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->backgraund_grad_year }}</p>
        <hr style="padding: 0;margin:0;">
    </li>
    <li style="width: 200px;">
        yilda tugatganman
    </li>
</ul>
<ul style="clear: both;margin-left: 40px;">
    <li style="width: 510px;">
        Ma'lumotim haqidagi hujjat (shahodatnoma, diplom) seriyasi
    </li>
    <li style="width: 60px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->back_cert_series }}</p>
        <hr style="padding: 0;margin:0;">
    </li>
    <li style="width: 40px;">
        va
    </li>
</ul>
<ul style="clear: both;">
    <li style="width: 80px;">
        raqami
    </li>
    <li style="width: 280px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->back_cert_numbers }}</p>
        <hr style="padding: 0;margin:0;">
    </li>
</ul>
<ul style="clear: both;margin-left: 40px;">
    <li style="width: 360px;">
        Ma'lumotim haqidagi hujjat bo'yicha
    </li>
    <li style="width: 200px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->getForeignLang() }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(xorijiy til(lar)ning nomi)</p>
    </li>
</ul>
<ul style="clear: both;">
    <li style="width: 500px;">
        til(lar)ini o'zlashtirganman
    </li>
</ul>
<ul style="clear: both;margin-left: 40px;">
    <li style="width: 90px;">
       Suhbatni
    </li>
    <li style="width: 350px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->getStudyLang() }}</p>
        <hr style="padding: 0;margin:0;">
    </li>
    <li style="width: 180px;">
        tilida topshiraman
    </li>
</ul>
<ul style="clear: both;margin-left: 40px;">
    <li style="width: 90px;">
    </li>
    <li style="width: 530px;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: justify">(suhbatdan o'tayotgan xorijiy fuqaro TDYU ta'lim tillarini bilishi shart yoki
            O'zbekiston Respublikasi Oliy va o'rta maxsus ta'lim vazirligi tomonidan belgilanadigan muassasalar tomonidan o'qitish tilini (o'zbek, rus tillari)
            bilishi to'g'risidagi sertifikatga ega bo'lishi kerak)</p>
    </li>
</ul>

<ul style="clear: both;margin-top: 20px;">
    <li style="width: 220px;">
        Tug'ilgan vaqtim va joy
    </li>
    <li style="width: 45px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ date('Y',strtotime($data->birth_date)) }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(yil)</p>
    </li>
    <li style="width: 30px;">
        yil
    </li>
    <li style="width: 45px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ date('d',strtotime($data->birth_date)) }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(kun)</p>
    </li>
    <li style="width: 45px;margin-left: 10px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ date('m',strtotime($data->birth_date)) }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(oy)</p>
    </li>
    <li style="width: 15px;">
        ,
    </li>
    <li style="width: 235px;margin-left: 10px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->getBirthPlace() }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(tug'ilgan joyi)</p>
    </li>

</ul>
<ul style="clear: both;margin-top: 20px;margin-left: 40px;">
    <li style="width: 90px;">
        Fuqaroligim
    </li>
    <li style="width: 515px;margin-left: 10px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->getCitizenship() }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(fuqarolik passport bo'yicha ko'rsatiladi)</p>
    </li>
</ul>
<ul style="clear: both;margin-top: 20px;margin-left: 40px;">
    <li style="width: 155px;">
       Doimiy turar joyim
    </li>
    <li style="width: 450px;margin-left: 10px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->living_address }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(passport bo'yicha doimiy turar joyi(mamlakat, viloyat, shahar, tuman, qishloq, ovul, ko'cha, uy va xonadon raqami) to'liq ko'rsatiladi)</p>
    </li>
</ul>
<div style="clear: both;page-break-after: always"></div>

<ul style="clear: both;margin-top: 20px;margin-left: 40px;">
    <li style="width: 200px;">
        Passport ma'lumotlarim
    </li>
    <li style="width: 40px;margin-left: 2px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->passport_serial }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(seriya)</p>
    </li>
    <li style="width: 110px;margin-left: 10px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->passport_number }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(raqami)</p>
    </li>
    <li style="width: 20px;">
        ,
    </li>
    <li style="width: 225px;margin-left: 10px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->passport_expiration_date }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(qachon berilagn)</p>
    </li>
</ul>
<ul style="clear: both;margin-top: 0px;margin-left: 0px;">
    <li style="width: 655px;margin-left: 2px;">
        <p style="padding: 0;margin: 0;text-align: left">{{ $data->passport_issued_by }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(kim tomonidan berilgan)</p>
    </li>
</ul>
<ul style="clear: both;margin-top: 30px;margin-left: 40px;">
    <li style="width: 630px;margin-left: 2px;">
        <p style="padding: 0;margin: 0;text-align: left;line-height: 0.8">Xalqaro va respublika olimpiadalari,
            tanlovlari va sport musobaqalarida ishtirok etganlik haqida ma'lumot (ishtirok etgan bolsa):</p>
    </li>
</ul>
<ul style="clear: both;margin-top: 40px;margin-left: 0px;">
    <li style="width: 95.5%;margin-top: 30px;">
        <p style="padding: 0;margin: 0;text-align: left">{{ $data->more_info }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(tanlov ixtisosligi, sport musobaqasi turi va o'tkazilgan sanasi, egallagan o'rin)</p>
    </li>
</ul>
<div style="clear: both;margin-top: 30px;">
    <p style="text-align: center">Suhbat o'tkazish tartib va qoidalari bilan tanishdim.</p>
</div>
<ul style="clear: both;margin-top: 30px;margin-left: 0px;">
    <li style="width: 300px;margin-left: 0px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ $data->last_name." ".$data->first_name." ".$data->middle_name }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(xorijiy fuqaroning FIO)</p>
    </li>
    <li style="width: 100px;margin-left: 45px;">
        <p style="padding: 0;margin: 0;text-align: center">&nbsp;</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(imzo)</p>
    </li>
    <li style="width: 160px;margin-left: 45px;">
        <p style="padding: 0;margin: 0;text-align: center">{{ date('d.m.Y',strtotime($data->created_at)) }}</p>
        <hr style="padding: 0;margin:0;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(ariza topshirilgan sana)</p>
    </li>
</ul>

</body>
</html>