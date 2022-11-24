<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .right {
            width: 50%;
            text-align: right;
        }

        .left {
            /*width: 50%;*/
            text-align: right;
            width: 300px;
            background-color: red;
        }

        .all {
            padding-right: 20px;
            padding-left: 20px;
            line-height: 20px;
        }

        .flex {
            display: flex;
            justify-content: flex-end;
        }

        .center {
            text-align: center;
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .w-50 {
            width: 50%;

        }

        .date-fio {
            padding-top: 50px;
        }

        * {
            font-family: DejaVu Sans;
        }

        .jj {
            background-color: blue;
            display: flex;
            text-align: right;
        }

        .w-100 {
            width: 100%;
        }
    </style>
</head>

<body>
<div class="all">
    <div style="display: flex; justify-content: flex-end; width: 100%; background-color: blue;">
        {{-- <div style="width: 300px; height: 100px; background-color: red;"></div> --}}
        <div style="padding-left: 40%; text-align: right">
            <p>
                TDYU prorektori - akademik litsey direktori  <br>
                I.R.Rustambekovga  fuqaro <br>
                <b>{{ $data->last_name }} {{ $data->first_name }} {{ $data->middle_name }}</b> dan <br>
                telefon : <br>
                @if($data->tel1)
                    <b>{{ $data->tel1 }}</b>, <br>
                @endif
                @if($data->tel2)
                    <b>{{ $data->tel2 }}</b>, <br>
                @endif
            </p>
        </div>
    </div>
    <br>


    <div class="center">
        ARIZA
    </div>

    <div class="body" style="margin-bottom: 50px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Men abituriyent
        <b>{{ $data->last_name }} {{ $data->first_name }} {{ $data->middle_name }}</b> 2022/2023 o'quv yilida Toshkent
        davlat yuridik universiteti qoshidagi M.S.Vosiqova nomidagi akademik litseyga
        o'qishga kirish maqsadida test sinovlarini topshirdim va <b>{{ $data->ball }}</b> ball to'plagan holda
        <b>@if($data->lang == 1) o'zbek @elseif($data->lang == 2) rus @endif</b> guruhiga talabalikka tavsiya etilmadim.
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Ta`lim olishga bo'lgan xohishim va tabaqalashtirilgan to'lov-kontraktni to'lay olish imkonim mavjudligidan kelib
        chiqib, meni Toshkent davlat yuridik universiteti qoshidagi akademik litseyga
        tabaqalashtirilgan to'lov-kontrakt asosida o'qishga qabul qilishingizni so'rayman.
        To'lovni o'z vaqtida amalga oshirishga kafolat beraman.
    </div>


    <div class="date-fio" style="display: flex; padding-top: 50px;">
        <div class="" style="width: 200px; float: left;">
            <div class="date"><b>{{ $data->getting_date }}</b></div>
        </div>
        <br>
        <div class="" style="float: right;">
            <div class="fio"><b>{{ $data->last_name }} {{ $data->first_name }} {{ $data->middle_name }}</b></div>
        </div>
    </div>

</div>


</body>
</html>