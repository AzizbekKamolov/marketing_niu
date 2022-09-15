@extends('layouts.marketing2021')
@section('content')

    <div class="containerform" style="">
        <div class="row justify-content-center" style="margin-left: 0px; margin-right: 0px;">
            <div class="col-xl-6 col-md-8 col-sm-12 ">
                <h2 class="form-title" style="width: 100%; text-align: center">
                    {{$student->fio()}}
                </h2><br>
                <div style="width: 100%; text-align: center">
                    <p><b>({{$student->get_type_name()}})</b></p>

                </div>
                <div style="width: 100%; text-align: center; align-items: center">
                         <span class="error">
                             Eslatma!
                         </span>
                    <p style="max-width: 500px; text-align: center; margin-left: auto; margin-right: auto">
                        Tizim sinov rejimida ishlayotganligi uchun ma`lumotlaringizda biron bir xatolikni ko`rsangiz
                        marketing bo`limiga xabar berishingizni so`raymiz.
                    </p>
                </div>
                <div style="" class="text-center">
                    <hr>
                    <p>Barcha kreditlar: <b>{{$credits->sum('credits')}} kredit</b></p>
{{--                    <p>To`langan kreditlar: <b>{{$credit_payments->sum('credits')}}</b></p>--}}
{{--                    <p>Qarzdorlik: <b>--}}
{{--                            @if($credits->sum('credits')>$credit_payments->sum('credits'))--}}
{{--                                {{$credits->sum('credits')-$credit_payments->sum('credits')}} kredit--}}
{{--                            @else--}}
{{--                                <b>Yo'q</b>--}}
{{--                            @endif--}}
{{--                        </b></p>--}}
{{--                    <form action="{{route('student.credits.agreement')}}" method="post">--}}
{{--                        {{csrf_field()}}--}}
{{--                        <input type="text" hidden name="id_code" value="{{$student->id_code}}">--}}
{{--                        <button class="btn btn-success w-100">Shartnoma olish</button>--}}

{{--                    </form>--}}
                </div>
                <div class="w-100 text-center">
                    <hr>
                    <p>Kreditlarga shartnomalar olish</p>

                </div>
                    @foreach($credits as $key =>$credit)
                <div class="border p-3">
                        <p>{{$key+1}}) Kredit soni <b>{{$credit->credits}}</b> . <br> Izoh - {{$credit->description}} </p>
                        <form action="{{route('student.credits.agreement')}}" method="post">
                            {{csrf_field()}}
                            <input type="text" hidden name="id_code" value="{{$student->id_code}}">
                            <input type="text" hidden name="credit_id" value="{{$credit->id}}">
                            <button class="btn btn-success w-100">Shartnoma olish ( {{$credit->description}} - {{$credit->credits}} kredit )</button>
                        </form>
                </div>
                    @endforeach
                <div class="w-100 text-center">
                    <hr>
                    <p>Kredit uchun to`lovlar</p>

                </div>
                <div>
                    @foreach($credit_payments as $key =>$credit)
                        <p>{{$key+1}}) Kredit soni <b>{{$credit->credits}}</b></p>
                        <p> To`lov summasi <b>{{$credit->amount}}</b> ({{$credit->description}}) </p>
                    @endforeach
                </div>
            </div>


        </div>
    </div>


@endsection

@section('js')

@endsection
