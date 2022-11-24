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

</style>

            <div class="container-fluid">
          
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                                      <div>
                                          <h4 class="card-title">Talaba ma`lumotlarini o'zgartirish | {{ $data->fio() }}</h4>
                                      </div>
                                      <div>
                                         <a href="{{ route('super.show' , ['id' => $data->id]) }}" class="btn btn-link">Ko'rish <i class="fa fa-eye" aria-hidden="true"></i></a>
                                         <a href="{{ route('super.index') }}" class="btn btn-info">Ro'yhat <i class="fa fa-list" aria-hidden="true"></i></a>
                                      </div>


                                     {{--  <div>
                                          <a class="btn btn-success" href="{{ route('student.create') }}">+ Yangi talaba</a>
                                      </div> --}}
                                </div>
                                <form action="{{ route('super.update' , ['id' => $data->id]) }}" method="post" >
                                  {{ csrf_field() }}
                                  {{ method_field('put') }}

                               
                                      <div class="row">
                                       
                                        <div class="col-md-4 form-group">
                                          <label>Ismi  <span class="error">   @if ($errors->has('first_name')) | {{ $errors->first('first_name') }} @endif </span></label>
                                          <input type="text" name="first_name" class="form-control" value="@if(old('first_name')){{ old('first_name') }}@else{{ $data->first_name }}@endif">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Familiyasi  <span class="error">   @if ($errors->has('last_name')) | {{ $errors->first('last_name') }} @endif </span></label>
                                          <input type="text" name="last_name" class="form-control" value="@if(old('last_name')){{ old('last_name') }}@else{{ $data->last_name }}@endif">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Otasining ismi  <span class="error">  @if ($errors->has('middle_name')) | {{ $errors->first('middle_name') }} @endif </span></label>
                                          <input type="text" name="middle_name" class="form-control" value="@if(old('middle_name')){{ old('middle_name') }}@else{{ $data->middle_name }}@endif">
                                        </div>
                                       
                                       {{--   <div class="col-md-4 form-group">
                                          <label>Tug'ilgan sanasi  <span class="error">  @if ($errors->has('birthday')) | {{ $errors->first('birthday') }} @endif </span></label>
                                          <input type="date" name="birthday" class="form-control" value="@if(old('birthday')){{ old('birthday') }}@else{{ $data->birthday }}@endif">
                                        </div> --}}
                                         <div class="col-md-4 form-group">
                                          <label>Telefon  <span class="error">  @if ($errors->has('phone')) | {{ $errors->first('phone') }} @endif </span></label>
                                          <input type="text" name="phone" class="form-control" value="@if(old('phone')){{ old('phone') }}@else{{ $data->phone }}@endif">
                                        </div>
                                         <div class="col-md-4 form-group">
                                          <label>Jinsi  <span class="error">  @if ($errors->has('gender')) | {{ $errors->first('gender') }} @endif </span></label>
                                          <div style="display: flex; justify-content: space-around; width: 100%;">
                                            <div >
                                              <label>Erkak</label>
                                            <input type="radio" name="gender" @if(old('gender')) @if(old('gender') == 1) checked="true" @endif @else @if($data->gender == 1) checked="true" @endif  @endif value="1">
                                            </div>
                                            <div >
                                              <label>Ayol</label>
                                            <input type="radio" name="gender"   @if(old('gender')) @if(old('gender') == 0) checked="true" @endif @else @if($data->gender == 0) checked="true" @endif  @endif  value="0">
                                            </div>
                                          </div>
                                        </div>
                                       
                                        {{-- <div class="col-md-4 form-group">
                                          <label>Viloyat  <span class="error">  @if ($errors->has('region')) | {{ $errors->first('region') }} @endif </span></label>
                                          <select class="form-control region_id" name="region">
                                            @foreach($regions as $item)
                                            <option @if(old('region')) @if(old('region') == $item->id) selected="true" @endif @elseif($data->region == $item->id) selected="true" @endif value="{{ $item->id }}">{{ $item->name_uz }}</option>
                                            @endforeach
                                          </select>
                                        </div> --}}
                                        <div class="col-md-4 form-group">
                                          <label>Viloyat  <span class="error">  @if ($errors->has('region')) | {{ $errors->first('region') }} @endif </span></label>
                                         <input type="text" readonly="true" name="region" value="{{ $data->viloyat }}" class="form-control">
                                        </div>
                                        {{-- <div class="col-md-4 form-group">
                                          <label>Tuman  <span class="error">  @if ($errors->has('area')) | {{ $errors->first('area') }} @endif </span></label>
                                          <select class="form-control area_id" name="area">
                                            @if(old('region'))
                                            @php 
                                            $areas_old = 'Test\Model\Area'::where('region_id' , old('region'))->get();
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
                                         <input type="text" readonly="true" class="form-control" name="area" value="{{ $data->tuman }}">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Manzili  <span class="error">  @if ($errors->has('address')) | {{ $errors->first('address') }} @endif </span></label>
                                          <input type="text" name="address" class="form-control" value="@if(old('address')){{ old('address') }}@else{{ $data->address }}@endif">
                                        </div>
                                        <div class="col-md-4 " style="padding-left: 15px !important; ">
                                          <div class="form-group">
                                            <label>Pasport seriasi va raqami  <span class="error">  @if ($errors->has('passport_serial')) | {{ $errors->first('passport_serial') }} @endif @if ($errors->has('passport_number')) {{ $errors->first('passport_number') }} @endif </span></label>
                                            <div style="display: flex;">
                                              <div class="col-md-4">
                                                <input type="text" name="passport_serial" class="form-control" value="@if(old('passport_serial')){{ old('passport_serial') }}@else{{ $data->passport_serial }}@endif">
                                              
                                            </div>
                                              <div class="col-md-8">
                                                <input type="text" name="passport_number" class="form-control" value="@if(old('passport_number')){{ old('passport_number') }}@else{{ $data->passport_number }}@endif">
                                                
                                              </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                        {{-- <div class="col-md-4 form-group">
                                          <label>Kim tomonidan berilgan  <span class="error">  @if ($errors->has('passport_given_by')) | {{ $errors->first('passport_given_by') }} @endif </span></label>
                                          <input type="text" name="passport_given_by" class="form-control" value="@if(old('passport_given_by')){{ old('passport_given_by') }}@else{{ $data->passport_given_by }}@endif">
                                        </div>
                                         <div class="col-md-4 form-group">
                                          <label>Pasport berilgan sanasi  <span class="error">  @if ($errors->has('passport_given_date')) | {{ $errors->first('passport_given_date') }} @endif </span></label>
                                          <input type="date" name="passport_given_date" class="form-control" value="@if(old('passport_given_date')){{ old('passport_given_date') }}@else{{ $data->passport_given_date }}@endif">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Pasport amal qilish muddati  <span class="error">  @if ($errors->has('passport_issued_date')) | {{ $errors->first('passport_issued_date') }} @endif </span></label>
                                          <input type="date" name="passport_issued_date" class="form-control" value="@if(old('passport_issued_date')){{ old('passport_issued_date') }}@else{{$data->passport_issued_date}}@endif">
                                        </div> --}}
                                         <div class="col-md-4 form-group">
                                          <label>DTM ID raqami<span class="error">  @if ($errors->has('dtm_id')) | {{ $errors->first('dtm_id') }} @endif </span></label>
                                          <input  type="text" name="dtm_id" class="form-control" value="@if(old('dtm_id')){{ old('dtm_id') }}@else{{ $data->dtm_id }}@endif">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>To'plagan bali  <span class="error">  @if ($errors->has('ball')) | {{ $errors->first('ball') }} @endif </span></label>
                                          <input  type="text" name="ball" class="form-control" value="@if(old('ball')){{ old('ball') }}@else{{$data->ball}}@endif">
                                        </div>
                                         <div class="col-md-4 form-group">
                                          <label>Tanlagan yo'nalishi  <span class="error">  @if ($errors->has('dir')) | {{ $errors->first('dir') }} @endif </span></label>
                                          <input readonly="true" type="text"  class="form-control" value="{{$data->dir()->name}}">
                                          <input type="text" hidden="true" readonly="true" name="dir" value="{{ $data->dir()->id }}">
                                        </div>
                                         <div class="col-md-4 form-group">
                                          <label>Saqlash</label>
                                          <input type="submit" class="btn btn-success form-control" >
                                        </div>
                                         {{-- <div class="col-md-3 form-group">
                                          <label>Pasport amal qilish muddati</label>
                                          <input type="date" name="first_name" class="form-control">
                                        </div> --}}
                                        
                                      </div>
                                  </form>

                            </div>
                         
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
@endsection