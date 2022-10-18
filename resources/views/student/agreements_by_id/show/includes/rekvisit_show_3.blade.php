<div class="col-md-12 text-center">
    <h4 class="text-bold">
        Tomonlarning manzillari va to`lov rekvizitlari
    </h4>
</div>
<div class="col-md-12">
    <table class="w-100">
        <tbody>
        <tr>
            <td class="w-50" style="width: 49%">
                <p class="w-100 text-center text-bold">
                    Ta’lim muassasasi
                </p>
            </td>
            <td class="w-50" style="width: 49%">
                <p class="w-100 text-center text-bold">
                    Tashkilot
                </p>
            </td>
        </tr>
        <tr>
            @if($which_process == 'show')
                <td class="w-50" style="width: 30%">
                    <p>
                        Toshkent davlat yuridik universiteti
                    </p>
                    <p>
                        Oʻzbekiston Respublikasi
                        Moliya vazirligi Gʻaznachiligi
                        Bank: HKKM MB Toshkent sh. B.B.
                        H/r: 23402000300100001010
                        STIR: 201122919, MFO: 00014
                        Sh.h.r: 400910860262667094100009002
                        STIR: 201122349, KOD 7950100
                        Tel.: (71) 233-66-36,
                        Manzil: Sayilgoh koʻchasi, 35-uy.
                    </p>
                    <p>
                        Rektor _____________ A. Tashkulov
                    </p>
                    <p>
                        Bosh buxgalter _______________ M.Parpiyev
                    </p>
                    <p>
                        Talabalarga xizmat koʻrsatish
                        boʻlimi boshligʻi
                        ___________ S.Rajabboyev

                    </p>
                    <p>
                        Yuriskonsult ______________D.Aliboyev

                    </p>
                </td>
            @endif
            @if($which_process == 'pdf')
                <td class="w-50" style="width: 49%">
                    <img src="{{public_path('/pechat/pechat-2022-simple.jpg')}}" alt="" style="width: 100%">
                </td>
            @endif
            <td class="w-50" style="width: 49%; font-size: 9px">

                <p class="word-line">
                    &nbsp <br>
                </p>
                <p class="w-100 text-center">
                    (yuridik shaxsning nomi)
                </p>
                <p class="word-line">
                    Pochta manzili:
                </p>
                <p class="word-line">
                    Bank:
                </p>
                <p class="word-line">
                    H/r:
                </p>
                <p class="word-line">
                    MFO:
                </p>
               <p class="word-line">
                    STIR:
                </p>
                <p class="word-line">
                    OKONX:
                </p>
                <p class="word-line">
                    Tel:
                </p>

                <p><b>Talaba</b></p>
                <p class="word-line">
                    <b>{{$student->fio()}}</b>
                </p>
                <p class="w-100 text-center">
                    (F.I.Sh.)
                </p>
                <p>
                    Manzili: <b>{{$student->address}}</b>
                </p>

                <p>
                    Pasport seriyasi <b>{{$student->passport_seria}}</b> raqami
                    <b>{{$student->passport_number}}</b>
                </p>
                <p>
                    Tel: <b>{{$student->phone}}</b>
                </p>
                <p>
                    Imzo _________________
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</div>