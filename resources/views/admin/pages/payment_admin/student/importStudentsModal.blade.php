<div class="modal fade" id="importStudentsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Talabalar  ro'yxatini import qilish</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('import.students')}}" method="post" id="importForm" enctype="multipart/form-data">
         {{csrf_field()}}

          <div class="form-group">
            <label for="status_new">Shartnoma turi</label>
            <select name="status_new" id="status_new" class="form-control">
              @foreach($types as $type)
                <option value="{{$type->id}}">
                  {{$type->name}}</option>

              @endforeach
            </select>
          </div>
          <div class="form-group mb-3">
            <label for="">File</label>
            <input type="file" accept=".xlsx" name="file" class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" form="importForm" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>