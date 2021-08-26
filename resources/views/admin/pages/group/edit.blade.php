											<div class="modal fade" id="edit_group{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												<form action="{{route('group.change' )}}" method="post">
													{{csrf_field()}}
												
                                                  
                                                    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px;">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLongTitle">Guruhni o`zgartirish</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <div class="row">
                                                            <div class="form-group col-md-12">
                                                              <label>Nomi</label>
                                                              <input type="text" name="name" class="form-control" value="{{$item->name}}">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                              <label>Kurs</label>
                                                              <select class="form-control" name="course">
                                                                
                                                                @for($ii = 1; $ii <= 4; $ii++)
                                                                <option @if($item->course == $ii) selected="true" @endif value="{{$ii}}">{{$ii}}</option>
                                                                @endfor
                                                              </select>
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                              <label>O'quvchilar soni</label>
                                                              <input type="text" name="students_count" class="form-control" value="{{$item->students_count}}">
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <input type="text" hidden="true" readonly="true" name="group_id" value="{{$item->id}}">
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
                                                          <button type="submit" class="btn btn-primary">Saqlash</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                   </form>
                                                </div>