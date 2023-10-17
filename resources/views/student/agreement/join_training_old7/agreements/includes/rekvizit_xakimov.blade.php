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
                    @include('student.agreement.join_training.agreements.includes.for_side_type_2_head')
                </p>
            </td>
        </tr>
        <tr>
            <td class="w-50" style="width: 49%">
                @if($type_show == 'pdf')
                    <img src="{{public_path('/pechat/pechat_yangi.png')}}" alt="" style="width: 100%">
                @elseif($type_show == 'show')
                    <p>
                        Oʻzbekiston Respublikasi
                        Moliya vazirligi Gʻaznachiligi
                        Bank: HKKM MB Toshkent sh. B.B.
                        H/r: 23402000300100001010
                        STIR: 201122919, MFO: 00014
                        Sh.h.r: 400910860262667950100009001
                        STIR: 201122349, KOD 7950100
                        Tel.: (71) 233-66-36,
                        Manzil: Sayilgoh koʻchasi, 35 uy.


                    </p>
                    <p>
                        Rektor _____________ R. Xakimov
                    </p>
                    <p>
                        Bosh buxgalter _______________ M.Parpiyev
                    </p>
                    <p>
                        Shartnomaviy ta’lim xizmatlari
                        boʻlimi boshligʻi

                        ___________ A.Xundibayev

                    </p>
                    <p>
                        Katta yuriskonsult ______________E.Xosilov

                    </p>
                @endif
            </td>
            <td class="w-50" style="width: 49%">
               @include('student.agreement.join_training.agreements.includes.for_side_type_2_foot')
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
                    Talaba _________________
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</div>
@if($type_show == 'show')
    <div class="col-md-12 text-center" style="padding-bottom: 50px">
        <div class="tasdiq btn-success "
             style="width: 100%; padding: 10px !important;margin-left:10px; margin-right: 10px ">
            <p>
                Men , Talaba <b>{{ $student->fio() }}</b> , shartnoma mazmuni bilan to'liq tanishdim va uning
                shartlariga roziman hamda shaxsiy ma`lumotlarim
                to'g'riligini tasdiqlayman
            </p>
        </div>
        <form id="accept-form" action="{{route('student.agreement.join_training.pdf_agreement')}}"
              method="post">
            {{csrf_field()}}
            {{method_field('POST')}}
            <input type="text" hidden value="{{$student->id}}" name="student_id">
            <input type="text" hidden value="{{$getting_date}}" name="getting_date">
            <input type="text" hidden value="{{$agreement_side_type_id}}" name="agreement_side_type_id">
        </form>
    </div>
@endif
