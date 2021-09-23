@extends('layouts.admin_jamshid')

@section('content')

<style type="text/css">
    .pagination li a{
        padding: 12px;
        border: 1px solid #E8EEF3;
        margin-left: 2px;
        margin-right: 2px;
    }
    .pagination li.active span{
        padding: 12px;
        border: 1px solid #E8EEF3 !important;
        background-color: #5f76e8;
        margin-left: 5px;
        margin-right: 5px;
        color: white;
    }
    .border-default{
        border: 1px solid #E8EEF3 ;

    }
    .last-td{
        width: 1px;
        padding-left: 3px !important;
        padding-right: 3px !important;
    }
    .error{
      color: red;
    }
    .yashil{
      background-color: #6EE170;
      color: white;
    }
    .qizil{
      background-color: #E15C4F;
      color: white;
    }

</style>

            <div class="container-fluid">
          
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                                      <div>
                                          <h4 class="card-title">Talaba ma`lumotlari </h4>
                                      </div>
                                      <div>
                                        @if(Auth::user()->role == 5)
                                         <a href="{{ route('super.edit' , ['id' => $data->id]) }}" class="btn btn-link">O'zgartirish <i class="fa fa-edit" aria-hidden="true"></i></a>
                                         <a href="{{ route('super.index') }}" class="btn btn-info">Ro'yhat <i class="fa fa-list" aria-hidden="true"></i></a>
                                         
                                         @if($data->status == 1)
                                          <button href="" class="btn btn-success " data-toggle="modal" data-target="#exampleModal" >Arizani tasdiqlash <i class="fa fa-check-square" aria-hidden="true"></i></button>
                                          @elseif($data->status == 2)
                                          <button href="" class="btn btn-danger " data-toggle="modal" data-target="#exampleModalback" >Bekor qilish <i class="fa fa-check-square" aria-hidden="true"></i></button>

                                         @endif
                                         @endif
                                         

                                      </div>


                                     {{--  <div>
                                          <a class="btn btn-success" href="{{ route('super.create') }}">+ Yangi talaba</a>
                                      </div> --}}
                                </div>
                                

                               
                                      <div class="row">
                                        
                                        <div class="col-md-4 form-group">
                                          <label>Ismi  <span class="error">   @if ($errors->has('first_name')) | {{ $errors->first('first_name') }} @endif </span></label>
                                          <input readonly="true" type="text" name="first_name" class="form-control" value="@if(old('first_name')){{ old('first_name') }}@else{{ $data->first_name }}@endif">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Familiyasi  <span class="error">   @if ($errors->has('last_name')) | {{ $errors->first('last_name') }} @endif </span></label>
                                          <input readonly="true" type="text" name="last_name" class="form-control" value="@if(old('last_name')){{ old('last_name') }}@else{{ $data->last_name }}@endif">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Otasining ismi  <span class="error">  @if ($errors->has('middle_name')) | {{ $errors->first('middle_name') }} @endif </span></label>
                                          <input readonly="true" type="text" name="middle_name" class="form-control" value="@if(old('middle_name')){{ old('middle_name') }}@else{{ $data->middle_name }}@endif">
                                        </div>
                                       
                                        {{--  <div class="col-md-4 form-group">
                                          <label>Tug'ilgan sanasi  <span class="error">  @if ($errors->has('birthday')) | {{ $errors->first('birthday') }} @endif </span></label>
                                          <input readonly="true" type="date" name="birthday" class="form-control" value="@if(old('birthday')){{ old('birthday') }}@else{{ $data->birthday }}@endif">
                                        </div> --}}
                                          <div class="col-md-4 form-group">
                                          <label>Telefon  <span class="error">  @if ($errors->has('phone')) | {{ $errors->first('phone') }} @endif </span></label>
                                          <input readonly="true" type="text" name="phone" class="form-control" value="@if(old('phone')){{ old('phone') }}@else{{ $data->phone }}@endif">
                                        </div>
                                         <div class="col-md-4 form-group">
                                          <label>Jinsi  <span class="error">  @if ($errors->has('gender')) | {{ $errors->first('gender') }} @endif </span></label>
                                          <div style="display: flex; justify-content: space-around; width: 100%;">
                                            <div >
                                              <label>Erkak</label>
                                            <input readonly="true" disabled="true" type="radio" name="gender" @if($data->gender == 1) checked="true" @endif  value="1">
                                            </div>
                                            <div >
                                              <label>Ayol</label>
                                            <input readonly="true" disabled="true" type="radio" name="gender" @if($data->gender == 0) checked="true" @endif value="0">
                                            </div>
                                          </div>
                                        </div>
                                      
                                       {{--  <div class="col-md-4 form-group">
                                          <label>Viloyat  <span class="error">  @if ($errors->has('region')) | {{ $errors->first('region') }} @endif </span></label>
                                          <select class="form-control region_id" name="region" disabled="true">
                                            @foreach($regions as $item)
                                            <option @if(old('region')) @if(old('region') == $item->id) selected="true" @endif @elseif($data->region == $item->id) selected="true" @endif value="{{ $item->id }}">{{ $item->name_uz }}</option>
                                            @endforeach
                                          </select>
                                        </div> --}}
                                         <div class="col-md-4 form-group">
                                          <label>Viloyat  <span class="error">  @if ($errors->has('region')) | {{ $errors->first('region') }} @endif </span></label>
                                          <input type="text" readonly="true" class="form-control" value="{{ $data->viloyat }}" name="">
                                        </div>
                                        {{-- <div class="col-md-4 form-group">
                                          <label>Tuman  <span class="error">  @if ($errors->has('area')) | {{ $errors->first('area') }} @endif </span></label>
                                          <select class="form-control area_id" name="area" disabled="true">
                                            @if(old('region'))
                                            @php 
                                            $areas_old = Area::where('region_id' , old('region'))->get();
                                            @endphp
                                            @foreach($areas_old as $item)
                                            <option @if(old('area')) @if(old('area') == $item->id) selected="true" @endif   @endif value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                            @else
                                            @php 
                                            $areas_old = 'Test\Model\Area'::where('region_id' , $data->region)->get();
                                            @endphp
                                            @foreach($areas_old as $item)
                                            <option  @if($data->area == $item->id) selected="true" @endif   value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                            @endif
                                          </select>
                                        </div> --}}
                                        <div class="col-md-4 form-group">
                                          <label>Tuman  <span class="error">  @if ($errors->has('area')) | {{ $errors->first('area') }} @endif </span></label>
                                          <input type="text" readonly="true" class="form-control" value="{{ $data->tuman }}" name="">
                                          
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Manzili  <span class="error">  @if ($errors->has('address')) | {{ $errors->first('address') }} @endif </span></label>
                                          <input readonly="true" type="text" name="address" class="form-control" value="@if(old('address')){{ old('address') }}@else{{ $data->address }}@endif">
                                        </div>
                                        <div class="col-md-4 " style="padding-left: 15px !important; ">
                                          <div class="form-group">
                                            <label>Pasport seriasi va raqami  <span class="error">  @if ($errors->has('passport_seria')) | {{ $errors->first('passport_seria') }} @endif @if ($errors->has('passport_number')) {{ $errors->first('passport_number') }} @endif </span></label>
                                            <div style="display: flex;">
                                              <div class="col-md-4">
                                                <input readonly="true" type="text" name="passport_seria" class="form-control" value="@if(old('passport_seria')){{ old('passport_seria') }}@else{{ $data->passport_serial }}@endif">
                                              
                                            </div>
                                              <div class="col-md-8">
                                                <input readonly="true" type="text" name="passport_number" class="form-control" value="@if(old('passport_number')){{ old('passport_number') }}@else{{ $data->passport_number }}@endif">
                                                
                                              </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                        {{-- <div class="col-md-4 form-group">
                                          <label>Kim tomonidan berilgan  <span class="error">  @if ($errors->has('passport_given_by')) | {{ $errors->first('passport_given_by') }} @endif </span></label>
                                          <input readonly="true" type="text" name="passport_given_by" class="form-control" value="@if(old('passport_given_by')){{ old('passport_given_by') }}@else{{ $data->passport_given_by }}@endif">
                                        </div> --}}

                                        {{--  <div class="col-md-4 form-group">
                                          <label>Pasport berilgan sanasi  <span class="error">  @if ($errors->has('passport_given_date')) | {{ $errors->first('passport_given_date') }} @endif </span></label>
                                          <input readonly="true" type="date" name="passport_given_date" class="form-control" value="@if(old('passport_given_date')){{ old('passport_given_date') }}@else{{ $data->passport_given_date }}@endif">
                                        </div> --}}
                                         <div class="col-md-4 form-group">
                                          <label>DTM ID raqami<span class="error">  @if ($errors->has('passport_given_date')) | {{ $errors->first('passport_given_date') }} @endif </span></label>
                                          <input readonly="true" type="text" name="passport_given_date" class="form-control" value="@if(old('passport_given_date')){{ old('passport_given_date') }}@else{{ $data->dtm_id }}@endif">
                                        </div>
                                       {{--  <div class="col-md-4 form-group">
                                          <label>Pasport amal qilish muddati  <span class="error">  @if ($errors->has('passport_issued_date')) | {{ $errors->first('passport_issued_date') }} @endif </span></label>
                                          <input readonly="true" type="date" name="passport_issued_date" class="form-control" value="@if(old('passport_issued_date')){{ old('passport_issued_date') }}@else{{$data->passport_issued_date}}@endif">
                                        </div> --}}
                                         <div class="col-md-4 form-group">
                                          <label>To'plagan bali  <span class="error">  @if ($errors->has('passport_issued_date')) | {{ $errors->first('passport_issued_date') }} @endif </span></label>
                                          <input readonly="true" type="text" name="passport_issued_date" class="form-control" value="@if(old('passport_issued_date')){{ old('passport_issued_date') }}@else{{$data->ball}}@endif">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Tanlagan yo'nalishi  <span class="error">  @if ($errors->has('passport_issued_date')) | {{ $errors->first('passport_issued_date') }} @endif </span></label>
                                          <input readonly="true" type="text" name="passport_issued_date" class="form-control" value="{{$data->dir()->name}}">
                                        </div>
                                         <div class="col-md-4 form-group">
                                          <label>Ariza holati  </label>
                                         <p class="form-control @if($data->status == 2) yashil @elseif($data->status == 1) qizil @endif">
                                           {{ $data->getStatus() }}
                                         </p>
                                        </div>
                                         <div class="col-md-4 form-group">
                                          <label> Darajasi </label>
                                         <p class="form-control @if($data->type == 2) yashil @elseif($data->type == 1) qizil @endif">
                                           {{ $data->getType() }}
                                         </p>
                                        </div>
                                          <div class="col-md-4 form-group">
                                              <label> Pasport jshshir </label>
                                              <p class="form-control">
                                                  {{ $data->passport_jshshir }}
                                              </p>
                                          </div>
                                        @if($data->status == 2 || $data->status == 3)  
                                         <div class="col-md-4 form-group border">
                                          <label><b>Shartnoma summasi</b>  </label> <br>
                                           {{ $data->getAmount()->allamount() }} so'm
                                        </div>
                                        @endif

                                        <div class="col-md-6">
                                            <style>
                                              table tr td{
                                                border: 1px solid black;
                                                padding-left: 10px;
                                                padding-right: 10px;
                                              }
                                            </style>
                                              @if($data->dir())
                                                {!! $data->dir()->min_ball !!}
                                              @endif
                                        </div>
                                        <div class="col-md-6">
                                          
                                        </div>
                                       
                                         {{-- <div class="col-md-3 form-group">
                                          <label>Pasport amal qilish muddati</label>
                                          <input type="date" name="first_name" class="form-control">
                                        </div> --}}
                                        
                                      </div>

                            </div>
                         
                        </div>
                    </div>
                   
                   
                </div>
            </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form action="{{ route('tasdiqlash') }}" class="tasdiqlash-modal" method="post">
    {{ csrf_field() }}
    <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <p>
              <strong>{{ $data->fio() }}</strong> ni arizasini tasdiqlash uchun kontrakt miqdorini tanlang
            </p>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" hidden="true" readonly="true" name="super_id" value="{{ $data->id }}">
              @php
              $amounts = 'Test\Model\Amount'::where('type' , $data->type)->get();
              $types = 'Test\Model\Type'::where('degree' , $data->type)->where('contract_type' , 'super')->get();
              @endphp
              <select class="form-control" name="amount_id" required="required" >
                <option value="">Tanlang</option>
                @foreach($types as $item)
                <option value="{{ $item->id }}">{{ $item->allamount() }}</option>

                @endforeach
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
        <button  class="btn btn-success ariza-tasdiqlash" type="button" >Tasdiqlash</button>
      </div>
    </div>
  </div>
  </form>
</div>

<div class="modal fade" id="exampleModalback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ $data->fio() }} ni arizasini bekor qilmoqchimisz?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
        <a href="{{ route('reject' , ['id' => $data->id]) }}" type="button" class="btn btn-danger">Ha</a>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
  // $(document).ready(function(){
  //   if ($('.region_id').val() != "") {
  //     var id = $('.region_id').val();
  //     var url = '/backoffice/get-area-by-region/'+id;
  //     $.ajax({
  //       url: url,
  //       success: function(html){
  //         console.log(html);
  //         var txt = '';
  //         $.each(html , function(key , value){
  //           txt = txt+ '<option value="'+value['id']+'">'+value['name']+'</optioin>';
  //         });
  //         $('.area_id').html(txt);
  //       }
  //     });

  //   }
  // });
  $('.region_id').change(function(){
    if ($(this).val() != "") {
      var id = $(this).val();
      var url = '/backoffice/get-area-by-region/'+id;
      $.ajax({
        url: url,
        success: function(html){
          console.log(html);
          var txt = '';
          $.each(html , function(key , value){
            txt = txt+ '<option value="'+value['id']+'">'+value['name']+'</optioin>';
          });
          $('.area_id').html(txt);
        }
      });

    }
  });
</script>
<script type="text/javascript">
  $('.ariza-tasdiqlash').click(function(){
    if ($('select[name="amount_id"]').val() != "") {
      $('.tasdiqlash-modal').submit();
    }
  });
</script>
@endsection