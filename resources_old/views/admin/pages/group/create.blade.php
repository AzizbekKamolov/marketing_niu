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
        text-align: center;
    }
    table thead tr th{
    	padding: 10px !important;

    }
    table tbody tr td{
    	padding: 10px !important;

    	
    }
    table tbody tr td input{
    	padding: 3px !important;
    	width: 100%;
    }
    table tbody tr .last-td input{
    	padding: 3px !important;
    	width: 60%;
    }
    table tbody tr td select{
    	padding: 7px !important;
    	width: 100%;
    }

</style>

            <div class="container-fluid">
          
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('group.store')}}" method="post">
                            {{csrf_field()}}
                        <div class="card">
                            
                            <div class="card-body">
                                <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                                      <div >
                                          <h4 class="card-title">Yangi guruhlar qo'shish</h4>
                                      </div>
                                       
                                       <div>
                                          <button class="btn btn-success"> <i class="fa fa-save"></i> Guruhlarni saqlash</button>
                                      </div>
                                      
                                     
                                     
                                </div>
                                {{-- <div class="col-md-12 form-group">
                                    <label>Fakultet</label>
                                           @php
                                                    $fff = 'Test\Model\Faculty'::where('dekan_id' , Auth::user()->id)->get();
                                                    @endphp
                                                    <select name="faculty_id" class="form-control" style="overflow: hidden;">
                                                        @foreach($fff as $f)
                                                        <option value="{{ $f->id }}">{{ $f->name }}</option>
                                                        @endforeach
                                                    </select>
                                </div> --}}
                               
                              
                                <div class="table-responsive" style="max-height: 700px; overflow: hidden; overflow-y: scroll;">
                                    <table     class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>#</th>
                                                <th>Nomi</th>
                                                <th>Kurs</th>
                                                <th>O'quvchilar soni</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="add-group-table">
                                           <tr >
	                                           	<td class="last-td ">
	                                           		<button class="btn btn-success add-input">
	                                           			<i class="fa fa-plus"></i>
	                                           		</button>
	                                           	</td>
	                                           	<td class="last-td">1</td>
	                                           	<td>
	                                           		<input type="text" name="input[1][name]">
	                                           	</td>
                                                
	                                           	<td>
	                                           		<select name="input[1][course]">

	                                           			
                                                        @if(Auth::user()->id == 19)
	                                           			<option  value="magister">Magister</option>
                                                        @else
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        @endif
	                                           		</select>
	                                           	</td>
	                                           	<td class="last-td">
	                                           		<input type="number" name="input[1][students_count]">
	                                           	</td>
                                           </tr>
                                        </tbody>

                                 
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                    </form>
                    </div>
                   
                   
                </div>
            </div>

@endsection
@section('js')
<script type="text/javascript">
	var tartib = 2;
	$('body').on('click' , '.add-input' , function(){
		// alert("dfj");
		
		$('.add-input').remove();
		var tr_one = ' <tr ><td class="last-td"><button class="btn btn-success add-input"><i class="fa fa-plus"></i></button></td><td class="last-td">'+tartib+'</td><td><input type="text" name="input['+tartib+'][name]"></td><td><select name="input['+tartib+'][course]" ><option>1</option><option>2</option><option>3</option><option>4</option><option>Magister</option></select></td><td class="last-td"><input type="number" name="input['+tartib+'][students_count]"></td></tr>';
		$('.add-group-table').append(tr_one);
        $('.table-responsive').scrollTop(10000000000000000000000000);
        // $('.table-responsive').scrollTop($('.table-responsive').height);
		tartib++;

	});
</script>
@endsection