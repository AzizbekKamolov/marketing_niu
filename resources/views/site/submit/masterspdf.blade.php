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

        li {
            float: left;
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

    <p style="text-align: right;">
        Toshkent davlat yuridik universiteti <br/>rektori R. Hakimovga <br/>
    <u> {{$data->last_name}} {{$data->first_name}} {{$data->middle_name }} </u> dan<br/>
    </p>

<div>
    <h3 style="text-align: center; text-transform: uppercase; ">Ariza</h3>
    <h4 style="text-align: center;">Toshkent davlat yuridik univetsiteti <br>
    magistraturasiga qabul qilish to'grisida</h4>
</div>

<p style="width: 600px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Menga <u> {{" ".$data->getSpeciality()." "}} </u> magistratura mutaxassisligi, ta’limning <u> {{ $data->getLang() }} </u> tiliga, masofaviy shakldagi o'qishga qabul qilishingizni so'rayman.
</p>
<p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Ma’lumotim <u> {{ $data->background_study }} </u> ni <u> {{ $data->backgraund_grad_year }} </u> yilda tugatganman.
</p>
<p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Ma’lumotim haqidagi hujjat (diplom): seriyasi <u>{{ $data->back_cert_series }}</u>, raqami <u>{{ $data->back_cert_numbers }}</u>.
</p>
<p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Men {{$data->punkt}} tufayli kirish test sinovlarisiz o‘qishga kirish huquqiga egaman.
    <br>
    Magistraturada <u> {{ $data->getLang() }} </u> tilida o‘qiyman.

</p>
<p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Tug‘ilgan vaqtim va joyim: <u> {{ $data->birth_date }} </u>, <u> {{$data->getBirthPlace() }} </u>.
</p>

<p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Fuqaroligim <u> {{ $data->getCitizenship() }} </u>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Doimiy yashash joyim: <u> {{ $data->living_address }} </u>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Pasportga (ID-kartaga) oid ma’lumotlar: <u> {{ $data->passport_serial }} - {{ $data->passport_number }} </u>,  
    <u> {{ $data->passport_given_date }} </u> da {{ $data->passport_issued_by }} tomonidan.

</p>

<p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Mehnat faoliyatim bo‘yicha quyidagilarni ma’lum qilaman*: __________________________ .<br>
    ____________________________________________________________________________________

</p>

<p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Magistraturada o‘qishni tugatgandan so‘ng kamida uch yil uzluksiz ishlash majburiyati bilan tanishdim.
    <br>

</p>




<ul style="clear: both;">
    <li style="width: 250px;">
        <p style="padding: 0;margin: 0;text-align: center">
           <b> {{$data->last_name}} {{$data->first_name}} {{$data->middle_name }} </b>
        </p>
        <hr style="padding: 0;margin:0; border-top: 0.8px solid black;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(Fuqaroning F.I.Sh.)</p>
    </li>

    <li>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </li>
    <li style="width: 100px;">
        <p style="padding: 0;margin: 0;text-align: center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <hr style="padding: 0;margin:0; border-top: 0.8px solid black;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(imzo)</p>
    </li>

    <li style="width: 150px; margin-left: 50px">
        <p style="padding: 0;margin: 0;text-align: center">
            {{ date('d-m-Y', strtotime($data->created_at)) }}
        </p>
        <hr style="padding: 0;margin:0; border-top: 0.8px solid black;">
        <p style="padding: 0;margin: 0;font-size: 10px;text-align: center">(ariza berilgan sana)</p>
    </li>

  
    
</ul>

</div>
</body>
</html>