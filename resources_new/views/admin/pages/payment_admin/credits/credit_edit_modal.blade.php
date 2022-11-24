<div class="modal fade" id="creditEditModal{{$item->id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$item->fio()}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('payment_admin.credits.update')}}" id="creditUpdateForm{{$item->id}}" method="post">
                    {{csrf_field()}}
                <div class="form-group">
                    <label for="">Kredit soni</label>
                    <input type="number" class="form-control" value="{{$item->credits->sum('credits')}}" name="credits">
                </div>
                <input hidden type="text" value="{{$item->id}}" name="student_id">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bekor qilish</button>
                <button type="submit" class="btn btn-primary" form="creditUpdateForm{{$item->id}}">Saqlash</button>
            </div>
        </div>
    </div>
</div>
