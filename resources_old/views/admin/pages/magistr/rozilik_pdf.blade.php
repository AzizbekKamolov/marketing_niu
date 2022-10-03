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
        	ROZILIK  XATI
    </p>
  
   
  
    <br>
    <p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


Men, Toshkent davlat yuridik universiteti talabasi  <b>{{ $data->fio() }}</b>, ID raqam <b>{{ $data->id_code }}</b>, pasport seriya <b>{{ $data->passport_seria }}</b> raqami <b>{{ $data->passport_number }}</b>, mazkur universitetda o’qitish uchun kontrakt mazmuni bilan to’liq tanishdim va uning shartlariga roziman.




    </p>

 

    <span style="width: 70%">
						
Talaba <b>{{ $data->fio() }}</b>

    </span>

    <span style="float: right; width: 30%">
	Sana <b>{{ $data->getting_date }}</b>
</span>



</div>
</body>
</html>