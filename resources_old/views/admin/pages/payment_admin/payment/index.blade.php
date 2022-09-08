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

</style>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                                      <div>
                                          <h4 class="card-title">To'lovlar ro'yhati</h4>
                                      </div>
                                    <div>
                                        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i> To'lov kiritish</button>
{{--                                        <button class="btn btn-success pdf_button"><i class="fa fa-plus"></i> EXCEL</button>--}}
                                        <button type="button" class="btn btn-light back_button_js"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Ortga</button>


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p style="color: black"><strong>Talaba:</strong> {{$student->fio()}}</p>
                                        <p style="color: black"><strong>Passport:</strong> {{$student->passport_seria}}{{$student->passport_number}}</p>
                                        <p style="color: black"><strong>Tug'ilgan kuni:</strong> {{$student->birthday}}</p>
                                        <p style="color: black"><strong>Telefon:</strong> {{$student->phone}}</p>
                                        <p style="color: black"><strong>Manzil:</strong> {{$student->address}}</p>
                                        <p style="color: black"><strong>Ta`lim turi:</strong> {{$student->get_type_name()}}</p>
                                    </div>
                                    <div class="col-md-6 " >
                                        <div class="w-100 border-default p-3 text-center" style="color: black">
                                        <h1>{{$student->id_code}}</h1>

                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive mb-2" style="display:flex;justify-content: flex-end">
                                    <button class="btn btn-light excel_button" style="background-color: #026E39; color: white; border-radius: 3px;"><i class="fas fa-file-excel" aria-hidden="true"></i></button>
                                </div>
                                <div class="table-responsive">
                                    <table    class="table  table-bordered  export">
                                        <thead>
                                            <tr>
                                                <th class="last-td">#</th>
                                                <th>Summa</th>
                                                <th>Sana</th>
                                                <th>Qarzi</th>
                                                <th>Izoh</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 0; @endphp
                                           @foreach($student->payments() as $item)
                                               <tr>
                                                   <td class="last-td">{{++$i}}</td>
                                                   <td>{{$item->amount}}</td>
                                                   <td>{{$item->payment_date}}</td>
                                                   <td></td>
                                                   <td>{{$item->description}}</td>
                                                   <td class="last-td">
                                                       <form  action="{{route('payment_admin.student.payment.delete' , ['id' => $item->id])}}" method="post">
                                                           <a href="#" class="btn btn-light btn_delete" style="color: #cc3b38"><i class="fa fa-trash"></i></a>
                                                           {{csrf_field()}}
                                                           {{method_field('DELETE')}}
                                                           {{--                                                           <input type="text">--}}
                                                       </form>
                                                   </td>
                                               </tr>
                                           @endforeach
                                        </tbody>


                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>


@include('admin.pages.payment_admin.payment.create_payment')
@endsection

@section('js')
    <script>
        $('.btn_delete').click(function(){
            var t = confirm('O`chirilsinmi malumotni qayta tiklab bo`lmaydi!');
            if (t){
                $(this).parent().submit();
            }
        });
    </script>
    <script>
        $('.payment_amount').inputmask({
            'regex':'[0-9 .]*'
        });
    </script>

@endsection



