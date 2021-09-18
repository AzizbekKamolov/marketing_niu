@extends('layouts.marketing2021')
<style>
.unselectable{
    margin: 20px auto;
}
.error{
  color: red;
}
</style>

@section('content')
    <div class="unselectable">
      <main id="main">
          <section id="featured-services" class="featured-services">
              <div class="container">

                  <div class="row">
                      <div class="col-lg-6 col-md-6">
                          <div class="icon-box" style="border-top: 3px solid #16df7e;">
                              <div class="icon">Shaxsiy ma'lumotlar</div>

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
                                  <span class="title"><a>{{$data->viloyat}}, {{$data->tuman}}, {{$data->address}}</a></span>
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
                                  <span class="title"><a>@if($data->type==1) {{"Bakalavr"}} @else {{"Magister "}} @endif</a></span>
                              </div>
                              <div>
                                  <span class="title"><a>Yo'nalish:</a></span>
                                  <span class="title"><a>@if($data->type==1){{ $data->dir()->name }}  @else {{ $data->dir }}  @endif</a></span>
                              </div>

                              <div>
                                  <span class="title"><a>Telefon raqam:</a></span>
                                  <span class="title"><a>{{$data->phone}}</a></span>
                              </div>
                              <div>
                                  <span class="title"><a>Jinsi:</a></span>
                                  <span class="title"><a>@if($data->gender==1)Erkak @else Ayol @endif</a></span>
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

                          <form action="{{ route('checkstore') }}" method="post" class="super-user-form">
                            {{ csrf_field() }}
                           <div class="icon-box" style="height: 100%; border-top: 3px solid #16df7e;">
    {{--                              <div class="icon"><i class="icofont-computer"></i></div>--}}
                                    <span>So'ralgan ma'lumotlarni kiriting</span>
                                   <div class="border p-1">
                                    <span>DTM ID raqamingiz  <span class="error">  @if($errors->has('dtm_id')) | {{ $errors->first('dtm_id') }}@endif</span> </span>
                                    <input type="text" class="form-control" required name="dtm_id" placeholder="DTM ID" value="{{ old('dtm_id') }}">
                                    <span>To'plagan balingiz <span class="error">  @if($errors->has('ball')) | {{ $errors->first('ball') }}@endif</span> </span>
                                    <input type="text" class="form-control" required name="ball" placeholder="To`plangan ball" value="{{ old('ball') }}">
                                    <span>Qo'shimcha telefon raqamlar <span class="error">  @if($errors->has('tel1')) | {{ $errors->first('tel1') }}@endif</span> </span>
                                    <input type="text" class="form-control telefon-inputmask" required name="tel1" placeholder="Qo'shimcha telefon raqam" value="{{ old('tel1') }}">
                                    <span class="error">  @if($errors->has('tel2')) | {{ $errors->first('tel2') }}@endif</span> 
                                    <input type="text" class="form-control telefon-inputmask" required name="tel2" placeholder="Qo'shimcha telefon raqam" value="{{ old('tel2') }}">
                                  </div>
                                  <h4 class="title"><a >Diqqat bilan tekshiring!</a></h4>
                                  <p class="description">Barcha ma'lumotlarim to'g'ri ekanligini tasdiqlayman </p>
                                  
                                  <input type="text" readonly="true" hidden="true" name="super_id" value="{{ $data->id }}">
                                 

                               <div style="">
                                
                                  
                                
                                   {{-- <a href="{{route('checkstore',['id'=>$data->id])}}" class="btn-get-started scrollto">Tasdiqlash <i class="icofont-check-circled"></i>  </a> --}}
                                   <a   class="btn btn-success tasdiqlash">Tasdiqlash <i class="icofont-check-circled"></i>  </a>
                               </div>
                           </div>
                           </form>

                      </div>

                  </div>

              </div>

          </section>

      </main>
    </div>
@endsection
@section('js')
<script type="text/javascript">
  $('.tasdiqlash').click(function(){
      if(confirm('Tasdiqlaysizmi?')){
          $('.super-user-form').submit();
      }
  })
</script>
@endsection

