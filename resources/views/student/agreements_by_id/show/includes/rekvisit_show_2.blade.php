<div class="col-md-12 text-center">
    <h4 class="text-bold">
        8. TOMONLARNING REKVIZITLARI VA IMZOLARI
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
                    Ta’lim oluvchi:
                </p>
            </td>
        </tr>
        <tr>
{{--            @if($which_process == 'show')--}}
                <td class="w-50" style="width: 49%">
                    <p class="text-bold">
                        Navoiy Innovatsiyalar Universiteti NTM
                    </p>
                    <span class="text-bold">Pochta manzili:</span>
                    Navoiy vilovati, Karmana tumani, Toshkent ko'chasi, 39-uy<br>
                    <span class="text-bold">E-mail</span>
                    navoiyinnovatsiyalarinstituti@gmail.com <br>
                    <span class="text-bold">Tel:</span>
                    +998 95 277 00 99
                    <span class="text-bold">Faks:</span>
                    +998 95 277 00 88 <br>
                    <span class="text-bold">Bank rekvizitlari:</span><br>
                    <span>“Invest Finance Bank" ATB</span><br>
                    <span class="text-bold">H/r:</span> 20212000605461327002 <br>
                    <span class="text-bold">INN:</span> 309037476 <br>
                    <span class="text-bold">MФО:</span> 01148 <br>
                    AT Xalq Banki Mirzo Ulug‘bek filiali
                    <br>
                    Rahbar: B.F.Yalg’ashev
                    <br>
                    <br>
                    {{--                    <img src="{{asset('pechat\imzo.jpg')}}" alt="" width="100">--}}
                    {{--                    <img src="{{asset('pechat\pechat.png')}}" alt="" width="120">--}}
                    <br>
                    <span class="text-bold">Imzo:</span> _________________ <br>
                </td>
{{--            @endif--}}
{{--            @if($which_process == 'pdf')--}}
{{--                <td class="w-50" style="width: 49%">--}}
{{--                    <img src="{{public_path('/pechat/angren.png')}}" alt="" style="width: 100%">--}}
{{--                </td>--}}
{{--            @endif--}}
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
{{--                <p>--}}
{{--                    Imzo _________________--}}
{{--                </p>--}}
            </td>
        </tr>
        </tbody>
    </table>

    @if($which_process == 'pdf')
        <img src="{{$qrcode}} " width="200">
    @endif
</div>