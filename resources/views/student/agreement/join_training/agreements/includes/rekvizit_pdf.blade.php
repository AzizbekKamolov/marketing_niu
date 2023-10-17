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
                            <img src="{{public_path('/pechat/pechat-join-2022.png')}}" alt="" style="width: 100%">
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
