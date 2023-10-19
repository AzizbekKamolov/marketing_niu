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
                                          <h4 class="card-title">Talaba qo'shish</h4>
                                      </div>
                                      <div>
                                         <a href="{{ route('student.index') }}" class="btn btn-info">Ro'yhat <i class="fa fa-list" aria-hidden="true"></i></a>
                                      </div>


                                     {{--  <div>
                                          <a class="btn btn-success" href="{{ route('student.create') }}">+ Yangi talaba</a>
                                      </div> --}}
                                </div>
                                <form action="{{ route('student.store') }}" method="post" >
                                  {{ csrf_field() }}

                               
                                      <div class="row">
                                        
                                        <div class="col-md-4 form-group">
                                          <label>Ismi  <span class="error">   @if ($errors->has('first_name')) | {{ $errors->first('first_name') }} @endif </span></label>
                                          <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Familiyasi  <span class="error">   @if ($errors->has('last_name')) | {{ $errors->first('last_name') }} @endif </span></label>
                                          <input type="text" name="last_name" class="form-control" value="{{ old('id_code') }}">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Otasining ismi  <span class="error">  @if ($errors->has('middle_name')) | {{ $errors->first('middle_name') }} @endif </span></label>
                                          <input type="text" name="middle_name" class="form-control" value="{{ old('middle_name') }}">
                                        </div>
                                       
                                         <div class="col-md-4 form-group">
                                          <label>Tug'ilgan sanasi  <span class="error">  @if ($errors->has('birthday')) | {{ $errors->first('birthday') }} @endif </span></label>
                                          <input type="date" name="birthday" class="form-control" value="{{ old('birthday') }}">
                                        </div>
                                         <div class="col-md-4 form-group">
                                          <label>Jinsi  <span class="error">  @if ($errors->has('gender')) | {{ $errors->first('gender') }} @endif </span></label>
                                          <div style="display: flex; justify-content: space-around; width: 100%;">
                                            <div >
                                              <label>Erkak</label>
                                            <input type="radio" name="gender" @if( old('gender') == null || old('gender') == 1) checked="true" @endif  value="1">
                                            </div>
                                            <div >
                                              <label>Ayol</label>
                                            <input type="radio" name="gender" @if(old('gender') == 0) checked="true" @endif value="0">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Telefon  <span class="error">  @if ($errors->has('phone')) | {{ $errors->first('phone') }} @endif </span></label>
                                          <input type="text" name="phone" class="form-control phone-inputmask" value="{{ old('phone') }}">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Viloyat  <span class="error">  @if ($errors->has('region')) | {{ $errors->first('region') }} @endif </span></label>
                                          <select class="form-control region_id" name="region">
                                            @foreach($regions as $item)
                                            <option value="{{ $item->id }}">{{ $item->name_uz }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Tuman  <span class="error">  @if ($errors->has('area')) | {{ $errors->first('area') }} @endif </span></label>
                                          <select class="form-control area_id" name="area">
                                            
                                          </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Manzili  <span class="error">  @if ($errors->has('address')) | {{ $errors->first('address') }} @endif </span></label>
                                          <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                                        </div>
                                        <div class="col-md-4 " style="padding-left: 15px !important; ">
                                          <div class="form-group">
                                            <label>Pasport seriasi va raqami  <span class="error">  @if ($errors->has('passport_seria')) | {{ $errors->first('passport_seria') }} @endif @if ($errors->has('passport_number')) {{ $errors->first('passport_number') }} @endif </span></label>
                                            <div style="display: flex;">
                                              <div class="col-md-4">
                                                <input type="text" name="passport_seria" class="form-control passport-seria-inputmask" value="{{ old('passport_seria') }}">
                                              
                                            </div>
                                              <div class="col-md-8">
                                                <input type="text" name="passport_number" class="form-control passport-number-inputmask" value="{{ old('passport_number') }}">
                                                
                                              </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 form-group">
                                          <label>Kim tomonidan berilgan  <span class="error">  @if ($errors->has('passport_given_by')) | {{ $errors->first('passport_given_by') }} @endif </span></label>
                                          <input type="text" name="passport_given_by" class="form-control" value="{{ old('passport_given_by') }}">
                                        </div>
                                         <div class="col-md-4 form-group">
                                          <label>Pasport berilgan sanasi  <span class="error">  @if ($errors->has('passport_given_date')) | {{ $errors->first('passport_given_date') }} @endif </span></label>
                                          <input type="date" name="passport_given_date" class="form-control pssport-given-date" value="{{ old('passport_given_date') }}">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Pasport amal qilish muddati  <span class="error">  @if ($errors->has('passport_issued_date')) | {{ $errors->first('passport_issued_date') }} @endif </span></label>
                                          <input type="date" name="passport_issued_date" pattern="dd-mm-yyyy" class="form-control passport-issued-date" value="{{ old('passport_issued_date') }}">
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
  $(document).ready(function(){
    if ($('.region_id').val() != "") {
      var id = $('.region_id').val();
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
  $('body').click(function() {
        var d = new Date();
        var year = d.getFullYear();
        var month = d.getMonth();
        var day = d.getDate();
        var c = new Date(year + 10, month, day);

           var passport_issued_date = $('.pssport-given-date').val();
      if (passport_issued_date) {
        var year=parseInt(passport_issued_date.substring(0, 4));
        var month=parseInt(passport_issued_date.substring(5, 7))-1;
        var day=parseInt(passport_issued_date.substring(8, 10));
        var now=parseInt(passport_issued_date.substring(0, 4))+parseInt(10);
       
        var now_year=(month+now);

        if(month!="0"&&day=="1"){

              var c = new Date(year + 10, month-1, day-1);

        }
        if(month=="0"&&day=="1"){

            var c = new Date(year + 10, month, day-1);

      }
      else{
        var c = new Date(year + 10, month, day-1);
      }

      var  day1=c.getDate();
      var  month1=c.getMonth()+1;
      var  year1=c.getFullYear();

     if(day1<10){
                day1="0"+c.getDate();
      }
      if(month1<10){
                month1="0"+(c.getMonth()+1);

      }
           var year_all=c.getFullYear();
     var new_date=(year_all+"-"+month1+"-"+day1);

          $('.passport-issued-date').val(new_date);
      }


});
</script>
@endsection