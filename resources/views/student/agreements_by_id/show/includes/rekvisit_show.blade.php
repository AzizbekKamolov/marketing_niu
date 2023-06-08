<div class="col-md-12 text-center">
    <h4 class="text-bold">
       7. Tomonlarning manzillari va to`lov rekvizitlari
    </h4>
</div>
<div class="col-md-12">
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td class="w-50" style="width: 49%">
                <p class="w-100 text-center text-bold">
                    Ta’lim muassasasi
                </p>
            </td>
            <td class="w-50" style="width: 49%">
                <p class="w-100 text-center text-bold">
                    Talaba
                </p>
            </td>
        </tr>
        <tr>
            @if($which_process == 'show')
                <td class="w-50" style="width: 49%">
                    <p class="text-bold">
                        “ANGREN UNIVERSITETI” MCHJ
                    </p>
                    <p>
                    <p class="text-bold">Yuridik manzili:</p>
                    Toshkent viloyati, Angren shahri, Ozodlik MFY,<br>
                    Fleyshmaxer ko’chasi, 2-uy.<br>
                    <span class="text-bold">To‘lov rekvizitlari:</span>
                    <br>
                    <span class="text-bold">H/r:</span> 20208000105586065001 <br>
                    <span class="text-bold">INN:</span> 310 009 930 <br>
                    <span class="text-bold">MФО:</span> 01125 <br>
                    AT Xalq Banki Mirzo Ulug‘bek filiali
                    <br>
                    Rahbar: Sindarov Komil Oydinovich
                    <br>
                    <br>
{{--                    <img src="{{asset('pechat\imzo.jpg')}}" alt="" width="100">--}}
{{--                    <img src="{{asset('pechat\pechat.png')}}" alt="" width="120">--}}
                    <br>
                    <span class="text-bold">Imzo:</span> _________________ <br>
                </td>
            @endif
            @if($which_process == 'pdf')
                <td class="w-50" style="width: 49%">
                    <img src="{{public_path('/pechat/angren.png')}}" alt="" style="width: 100%">
                </td>
            @endif
            <td class="w-50">

                <p class="word-line">
                    <b>{{$student->fio()}}</b>
                </p>
                <p class="w-100 text-center">
                    (F.I.Sh.)
                </p>
{{--                <p>--}}
{{--                    Manzili: <b>{{$student->address}}</b>--}}
{{--                </p>--}}

                <p>
                    Pasport seriyasi <b>{{$student->passport_seria}}</b> raqami
                    <b>{{$student->passport_number}}</b>
                </p>
                <p>
                    Tel: <b>{{$student->phone}}</b>
                </p>
                <br>
                <p>
                    Imzo _________________
                </p>
            </td>
        </tr>
        </tbody>
    </table>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td class="w-50" style="width: 49%">
                <p class="w-100 text-center text-bold">
                    BUYURTMACHI (TASHKILOT)
                </p>
            </td>
        </tr>
        <tr>
                <td class="w-50 text-center" style="width: 49%">
                    <p>
                    <span class="text-bold">Tashkilot nomi:</span> _____________________________________________________________________________________ <br>
                    <span class="text-bold">Manzil:</span> ______________________________________________________________________________________________ <br>
                    <span class="text-bold">Bank:</span> ________________________________________________________________________________________________ <br>
                    <span class="text-bold">X/r:</span> __________________________________________________________________________________________________ <br>
                    <span class="text-bold">Bank kodi:</span> ___________________________________________________________________________________________ <br>
                    <span class="text-bold">STIR:</span> ________________________________________________________________________________________________ <br>
                    <span class="text-bold">Telefon:</span> _____________________________________________________________________________________________ <br>
                    <span class="text-bold">Rektor:</span> ______________________________________________________________________________________________ <br>
                    <span class="text-bold">Imzo:</span> ________________________________________________________________________________________________ <br>
                </td>
        </tr>
        </tbody>
    </table>
    <br>
    <br>
    @if($which_process == 'pdf')
        <img src="data:image/png;base64, {{$qrcode}} ">
    @endif
</div>