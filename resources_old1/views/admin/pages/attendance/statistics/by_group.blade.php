s@extends('layouts.admin_jamshid')

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
        text-align: center
    }

    table{
        width: 100%;
    }
    table , td, th {
        border: 1px solid #595959;
        border-collapse: collapse;
    }
    td, th {
        padding: 9px;
        width: 30px;
        height: 25px;
    }
    th {
        background: #f0e6cc;
    }
    .even {
        background: #fbf8f0;
    }
    .odd {
        background: #fefcf9;
    }
    td{
        text-align: center;
    }
    td input{
        max-width: 70px;
    }
    .date{
        padding: 5px;
        background-color: green;
        color: white;
        font-weight: bold;
        border-radius: 3px;
    }
    .date2{
        margin-bottom: 15px;
        margin-top: -22px;

    }
    .border-table-date{
        border: 1px solid green;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
    }
    .table-responsive{
        max-height: 600px;
        overflow: hidden;
        overflow-y: scroll;
        overflow-x: scroll;
    }

</style>

            <div class="container-fluid">
          
                <div class="row">
                   
                   
                    <div class="col-12">
                        <div class="card">
                        
                            <div class="card-body">
                                <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                                      <div class="">
                                          <h4 class="card-title">Guruh bo'yicha davomatlar </h4>
                                      
                                      </div>

                                        <div style="display: flex;">
                                      <form action="{{ route('statistic_by_group_date' , ['id' => $faculty->id]) }}" method="put">
                                          {{ csrf_field() }}
                                          {{ method_field('put') }}
                                     
                                          <div style="display: flex;">
                                              <input type="date" name="date_attendance" class="form-control" value="{{ $date }}">
                                              <button class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i></button>
                                          </div>
                                       </form>
                                      <div>
                                          <button class="btn btn-light button_excel" onclick="tabletoexcel('table_to_excel')">Excel export</button>
                                      </div>
                                     </div>
                                     
                                     
                                </div>
                              
                              <div class="border-table-date">
                                  <div class="col-md-12 date2">
                                      <span class="date">
                                          {{ $date }}-uchun davomat hisoboti
                                      </span>
                                  </div>
                                  <div id="birnarsa">
                                      
                                  </div>
                                <div class="table-responsive" id="grid">
                                   
                                    <table  id="table2excel"  class="table table-striped table-bordered no-wrap table_to_excel">
                                        <thead>
                                            <tr>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                           
                                        </tbody>

                                 
                                    </table>
                                </div>
                              </div>
                              
                            </div>
                      
                         
                        </div>
                    </div>
                   
                   
                   
                </div>
            </div>

@endsection
@section('js')
<script type="text/javascript">


</script>
@endsection
