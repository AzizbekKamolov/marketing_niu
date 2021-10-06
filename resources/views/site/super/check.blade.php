@extends('layouts.marketing2021')
<style>
    .unselectable {
        margin: 20px auto;
    }

    .error {
        color: red;
    }
</style>

@section('content')
    <div class="unselectable">
        <main id="main">
            <section id="featured-services" class="featured-services">
                <div class="container">

                    <div class="row">
                        @php
                            $status_pet = $data->status_petition();

                        @endphp
                        <div class="col-md-12 text-center">
                            <div
                                class="alert @if($status_pet['status'] == 1) alert-primary @endif @if($status_pet['status'] == 2) alert-info @endif @if($status_pet['status'] == 3) alert-success @endif">
                                @if($status_pet['status'] == 0) Ariza berilmagan @endif
                                @if($status_pet['status'] == 1) Ariza ko`rib chiqilmoqda (Ariza tasdiqlansa siz bilan bog'lanishadi) @endif
                                    @if($status_pet['status'] == 2) Ariza ko`rildi (Siz bilan bog'lanishlarini kuting) @endif
                                    @if($status_pet['status'] == 3) Ariza tasdiqlandi. (Marketing bo'limi bilan bog'lanib o'zingizga tegishli id-kodni olishingiz va u orqali shartnoma yuklab olishingiz mumkin) @endif
                            </div>
                            @if($status_pet['status'] >= 1)
                            <div class="">
                                <p>Ariza ma'lumotlari:</p>
{{--                                <p>--}}
{{--                                    F.I.O: <b>{{$status_pet['super']->last_name.' '.$status_pet['super']->first_name.' '.$status_pet['super']->middle_name}}</b>--}}
{{--                                </p>--}}
                                <p>
                                    Ariza topshirilgan yo`nalish: <b>{{$status_pet['super']->dir()->name}}</b>
                                </p>
                            </div>
                                @endif
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="icon-box" style="border-top: 3px solid #16df7e;">
                                <div class="icon">Shaxsiy ma'lumotlar</div>
                                @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                @endif

                                <div>
                                    <span class="title"><a>Ismi:</a></span>
                                    <span class="title"><a>{{$data->first_name}}</a></span>
                                </div>
                                <div>
                                    <span class="title"><a>Familiyasi:</a></span>
                                    <span class="title"><a>{{$data->last_name}}</a></span>
                                </div>
                                <div>
                                    <span class="title"><a>Otasini ismi:</a></span>
                                    <span class="title"><a>{{$data->middle_name}}</a></span>
                                </div>
                                {{--  <div>
                                     <span class="title"><a>Tug'ilgan sana:</a></span>
                                     <span class="title"><a>{{$data->birthday}}</a></span>
                                 </div> --}}
                                <div>
                                    <span class="title"><a>Manzil:</a></span>
                                    <span class="title"><a>{{$data->address}}</a></span>
                                </div>

                            </div>


                            <div class="icon-box" style="border-top: 3px solid #16df7e;">
                                <div class="icon">Pasport ma'lumotlari</div>
                                <div>
                                    <span class="title"><a>Pasport seriya:</a></span>
                                    <span class="title"><a>{{$data->passport_serial}}</a></span>
                                </div>
                                <div>
                                    <span class="title"><a>Pasport raqami:</a></span>
                                    <span class="title"><a>{{$data->passport_number}}</a></span>
                                </div>
                                {{--  <div>
                                     <span class="title"><a>Berilgan sana:</a></span>
                                     <span class="title"><a>{{$data->passport_given_date}}</a></span>
                                 </div>
                                 <div>
                                     <span class="title"><a>Berilgan:</a></span>
                                     <span class="title"><a>{{$data->passport_issued_by}}</a></span>
                                 </div> --}}


                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">

                            <div class="icon-box" style="border-top: 3px solid #16df7e;">
                                <div class="icon">Qo'shimcha ma'lumotlar</div>
                                <div>
                                    <span class="title"><a>Daraja:</a></span>
                                    <span
                                        class="title"><a>@if($data->type==1) {{"Bakalavr"}} @elseif($data->type == 2) {{"Magister "}} @else {{"Sirtqi"}} @endif</a></span>
                                </div>
{{--                                <div>--}}
{{--                                    <span class="title"><a>Telefon raqam:</a></span>--}}
{{--                                    <span class="title"><a>{{$data->phone}}</a></span>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <span class="title"><a>Jinsi:</a></span>--}}
{{--                                    <span class="title"><a>@if($data->gender==1)Erkak @elseif($data->gender==0) Ayol @else  @endif</a></span>--}}
{{--                                </div>--}}
                                <div>
                                    <span class="title"><a>DTM ID:</a></span>
                                    <span class="title"><a>{{$data->dtm_id}}</a></span>
                                </div>
                                <div>
                                    <span class="title"><a>To'plangan ball:</a></span>
                                    <span class="title"><a>{{$data->ball}}</a></span>
                                </div>
                                <div>
                                    <span class="title"><a>Izoh</a></span>
                                    <span class="title"><a><b>{{$data->description}}</b></a></span>
                                </div>
                                {{--  <div>
                                     <span class="title"><a>O'tish bali:</a></span>
                                     <span class="title"><a>{{$data->min_ball}}</a></span>
                                 </div>
                                 <div>
                                     <span class="title"><a>To'plangan ball:</a></span>
                                     <span class="title"><a>{{$data->ball}}</a></span>
                                 </div> --}}
                            </div>
                             @if($status_pet['status'] == 0)

                            <form action="{{ route('checkstore') }}" method="post" class="super-user-form">
                                {{ csrf_field() }}
                                <div class="icon-box" style="height: 100%; border-top: 3px solid #16df7e;">
                                    {{--                              <div class="icon"><i class="icofont-computer"></i></div>--}}
                                    <span>So'ralgan ma'lumotlarni kiriting</span>
                                    <div class="border p-1">
                                        <span>Yo'nalishni tanlang <span class="error">  @if($errors->has('tel1'))
                                                    | {{ $errors->first('tel1') }}@endif</span> </span>
                                        <select name="dir_id" class="form-control" id="">
                                            @foreach($data->selected_dirs() as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        <span>Qo'shimcha telefon raqamlar <span class="error tel1_error">  @if($errors->has('tel1'))
                                                    | {{ $errors->first('tel1') }}@endif</span> </span>
                                        <input type="text" class="form-control telefon-inputmask" required name="tel1"
                                               placeholder="Qo'shimcha telefon raqam" value="{{ old('tel1') }}">
                                        <span class="error tel2_error">  @if($errors->has('tel2'))
                                                | {{ $errors->first('tel2') }}@endif</span>
                                        <input type="text " class="form-control telefon-inputmask" required name="tel2"
                                               placeholder="Qo'shimcha telefon raqam" value="{{ old('tel2') }}">
                                    </div>
                                    <h4 class="title"><a>Diqqat bilan tekshiring!</a></h4>
                                    <p class="description">Barcha ma'lumotlarim to'g'ri ekanligini tasdiqlayman </p>

                                    <input type="text" readonly="true" hidden="true" name="super_id"
                                           value="{{ $data->id }}">


                                    <div style="">


                                        {{-- <a href="{{route('checkstore',['id'=>$data->id])}}" class="btn-get-started scrollto">Tasdiqlash <i class="icofont-check-circled"></i>  </a> --}}
                                        <a class="btn btn-success tasdiqlash">Tasdiqlash <i
                                                class="icofont-check-circled"></i> </a>
                                    </div>
                                </div>
                            </form>
                                 @endif

                        </div>

                    </div>

                </div>

            </section>

        </main>
    </div>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js"></script>
    <script type="text/javascript">
        $('.telefon-inputmask').inputmask({
            'mask': '+\\9\\98999999999'
        })
        $('.tasdiqlash').click(function () {
            if (confirm('Tasdiqlaysizmi?')) {
                var tel1 = $('input[name="tel1"]').val();
                var tel2 = $('input[name="tel2"]').val();
                if (tel1 != '' && tel2 != '') {
                    $('.super-user-form').submit();
                } else {
                    if (tel1 == '') {
                        $('.tel1_error').html('Telefon raqam kiriting')
                    }
                    if (tel2 == '') {
                        $('.tel2_error').html('Telefon raqam kiriting')
                    }
                }
            }
        })
    </script>
@endsection

