
<style>
    /*table{*/
    /*    border: 1px solid black;*/

    /*}*/
    /*table td{*/
    /*    border: 1px solid black;*/

    /*}*/
    /*table{*/

    /*}*/
    body {
        font-family: DejaVu Sans, sans-serif !important;
        font-size: 11px;
    }
</style>
<style>
    table.blueTable {
        border: 1px solid #000000;
        background-color: #FFFFFF;
        width: 100%;
        text-align: left;
        border-collapse: collapse;
    }

    table.blueTable td, table.blueTable th {
        border: 1px solid #AAAAAA;
        padding: 3px 2px;
    }

    table.blueTable tbody td {
        font-size: 11px !important;
        padding: 0 !important;
        text-align: center;
        color: #000000;
        vertical-align: middle;

    }
    .verticalText
            {
                text-align: center;
                vertical-align: middle;
                width: 20px;
                margin: 0px;
                padding: 0px;
                padding-left: 3px;
                padding-right: 3px;
                padding-top: 10px;
                white-space: nowrap;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
            };

    table.blueTable thead {
        background: #FFFFFF;
        border-bottom: 1px solid #000000;

    }

    table.blueTable thead th {
        font-size: 13px;
        font-weight: normal;
        color: #000000;
        border-left: 1px solid #D0E4F5;
    }

    table.blueTable thead th:first-child {
        border-left: none;
    }

    table.blueTable tfoot td {
        font-size: 14px;
    }

    table.blueTable tfoot .links {
        text-align: right;
    }

    table.blueTable tfoot .links a {
        display: inline-block;
        background: #1C6EA4;
        color: #FFFFFF;
        padding: 2px 8px;
        border-radius: 5px;
    }

    @page {
        margin-top: 0.2in !important;
        margin-bottom: 0.2in !important;
        margin-left: 0.2in !important;
        margin-right: 0.2in !important;
    }
</style>

<div style="width: 100%">
    <div style="text-align: center">
        <p>
            ХИСОБ ВАРАК-ФАКТУРА № ____
        </p>
        <p>
            "_____" ________________ 2021 й.
        </p>
        <p>
            "_____" ________________ 2021 й.
        </p>
        <p>
            ID № <b>002-00{{$student->id_code}}</b>
        </p>
    </div>
</div>
<div style="width: 100%; padding-top: 50px">
    <div style=" width: 49%; display: inline-block">

        <p>Етказиб берувчи: Т.Д.Ю.У</p>
        <p>Манзил:Ташкент шахри,Сайилгох-35 кўчаси</p>
        <p>Ўзбекистон Молия Вазирлиги Ғазначилиги</p>
        <p>Ҳ/р:23402000300100001010 ИНН: 201122919</p>
        <p>ХККМ МБ Тошкент.ш МФО 00014</p>
        <p>Шх/р 400910860262667094100009002</p>
        <p>ХККМ МБ Тошкент.ш ББ МФО 00014</p>
        <p>ИНН 201122349 ОКОНХ 92110</p>

    </div>
    <div style="width: 49%; display: inline-block; text-align: right">
        <span style="display: inline-block; width: max-content; text-align: left">
            <p>
            Буюртмачи:_____________________________
        </p>
        <p>
            Манзил:________________________________
        </p>
        <p>Телефон:_______________________________</p>
        <p>Ҳ/р №__________________________________</p>
        <p>Банк:__________________________________</p>
        <p>шахар:_________________________________</p>
        <p>ИНН :__________________________________</p>
        <p>МФО ОКОНХ____________________________</p>
        </span>
    </div>


</div>
<div style="width: 100%">
    <table class="blueTable">
        <tbody>
        <tr>
            <td rowspan="2">Товар (иш, хизмат) номи</td>
            <td rowspan="2">ўлчов бирлиги</td>
            <td rowspan="2">сони</td>
            <td rowspan="2">нархи</td>
            <td rowspan="2">Етказиб бериш киймати</td>
            <td colspan="2">Акциз солиғи</td>
            <td colspan="2">ҚҚС</td>
            <td rowspan="2">Етказиб беришнинг акциз солиги ва ККс хисобга олинган киймати</td>
        </tr>
        <tr>
            <td>ставкаси</td>
            <td>сумма</td>
            <td>ставкаси</td>
            <td>сумма</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>5</td>
        </tr>
        <tr>
            <td>{{$student->course}}-курс талабаси <br><br> {{$student->last_name}} <br> {{$student->first_name}} <br>{{$student->middle_name}} <br> 2021/2022
                ўқув йили учун
                контракт тўлови
            </td>
            <td>сум</td>
            <td>1</td>
            <td > <div class="verticalText">{{$student->all_summa}}</div></td>
            <td></td>
            <td colspan="2">АКЦИЗ СОЛИҒИСИЗ</td>
            <td colspan="2">ҚҚСсиз</td>
            <td> <div class="verticalText"> {{$student->all_summa}} </div></td>
        </tr>
        <tr>
            <td>Жами тўлов</td>
            <td></td>
            <td>1</td>
            <td></td>
            <td>0</td>
            <td colspan="2"></td>
            <td colspan="2">0</td>
            <td>0</td>
        </tr>
        </tbody>
    </table>
</div>
<div style="width: 100%; padding-top: 30px">
    <span style="position: absolute; z-index: 1; margin-left: 200px; ">{{$student->all_summa_word}}</span>
        <img src="{{asset('files/pechat/schot/pechat1.png')}}" style="width: 100%;margin-top: 5px" alt="">
</div>
