<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
    <div class="modal-content">
        <form action="{{route('payment_admin.store.payment.history')}}" method="post">
            {{csrf_field()}}

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ddd</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="">
                    Passport seria va raqam
                    <span class="error">
                                                @if ($errors->has('passport_seria'))
                            | {{ $errors->first('passport_seria') }} @endif
                        @if ($errors->has('passport_number'))
                            | {{ $errors->first('passport_number') }} @endif
                        @if ($errors->has('passport_seria_number'))
                            | {{ $errors->first('passport_seria_number') }} @endif
                                            </span>
                    <div style="display: flex; margin-top: 7px;">
                        <input required type="text" class="form-control" style="width: 30%"
                               name="passport_seria"
                               value="@if(old('passport_seria')){{old('passport_seria')}}@endif">
                        <input required type="text" class="form-control" style="width: 70%"
                               name="passport_number"
                               value="@if(old('passport_number')){{old('passport_number')}}@endif">
                    </div>
                </label>
            </div>
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
            <input type="text" hidden readonly value="11" name="student_id">
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
