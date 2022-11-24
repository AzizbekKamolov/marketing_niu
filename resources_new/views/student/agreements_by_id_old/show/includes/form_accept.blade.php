@if($which_process == 'show')
    <div class="col-md-12 text-center" style="padding-bottom: 50px">
        <div class="tasdiq btn-success "
             style="width: 100%; padding: 10px !important;margin-left:10px; margin-right: 10px ">
            <p>
                Men , Talaba <b>{{ $student->fio() }}</b> , shartnoma mazmuni bilan to'liq tanishdim va
                uning
                shartlariga roziman hamda shaxsiy ma`lumotlarim
                to'g'riligini tasdiqlayman
            </p>
        </div>
        <form id="accept-form" action="{{route('student.agreement.pdf_agreement')}}" method="post">
            {{csrf_field()}}
            {{method_field('POST')}}
            <input type="text" hidden value="{{$student->id}}" name="student_id">
            <input type="text" hidden value="{{$agreement_type->id}}" name="agreement_type_id">
            <input type="text" hidden value="{{$agreement_side_type->id}}" name="agreement_side_type_id">
            <input type="text" hidden value="{{$getting_date}}" name="getting_date">
        </form>
    </div>
@endif