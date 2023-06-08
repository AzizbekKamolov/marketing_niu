<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
    <div class="modal-content">
        <form action="{{route('payment_admin.student.payment.store')}}" method="post">
            {{csrf_field()}}

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{$student->fio()}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="">To'lov summasi</label>
                <input type="text" class="form-control payment_amount" name="amount">
            </div>
            <div class="col-md-6 form-group">
                <label for="">To'lov sanasi</label>
                <input type="date" class="form-control" name="payment_date">
            </div>
            <div class="col-md-12 form-group">
                <label for="">Izoh</label>
                <textarea name="description" id="" cols="30" rows="4" class="form-control" ></textarea>
            </div>
            <input type="text" hidden readonly value="{{$student->id}}" name="student_id">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
        <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Saqlash</button>
      </div>
        </form>
    </div>
  </div>
</div>
