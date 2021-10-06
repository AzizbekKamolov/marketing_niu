<?php $__env->startSection('content'); ?>

    <style type="text/css">
        .pagination li a {
            padding: 12px;
            border: 1px solid #E8EEF3;
            margin-left: 2px;
            margin-right: 2px;
        }

        .pagination li.active span {
            padding: 12px;
            border: 1px solid #E8EEF3 !important;
            background-color: #5f76e8;
            margin-left: 5px;
            margin-right: 5px;
            color: white;
        }

        .border-default {
            border: 1px solid #E8EEF3;

        }

        .last-td {
            width: 1px;
            padding-left: 3px !important;
            padding-right: 3px !important;
        }

        .error {
            color: red;
        }

        .yashil {
            background-color: #6EE170;
            color: white;
        }

        .qizil {
            background-color: #E15C4F;
            color: white;
        }

    </style>
    <style type="text/css">
        table.tableizer-table {
            font-size: 12px;
            border: 1px solid #CCC;
            font-family: Arial, Helvetica, sans-serif;
        }

        .tableizer-table td {
            padding: 4px;
            margin: 3px;
            border: 1px solid #CCC;
        }

        .tableizer-table th {
            background-color: #104E8B;
            color: #FFF;
            font-weight: bold;
        }
    </style>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                            <div>
                                <h4 class="card-title">Talaba ma`lumotlari </h4>
                            </div>
                            <div>
                                <?php if(Auth::user()->role == 13): ?>
                                    
                                    
                                    <a href="<?php echo e(route('super.index')); ?>" class="btn btn-info">Ro'yhat <i
                                                class="fa fa-list" aria-hidden="true"></i></a>

                                    <?php if($data->status == 1): ?>
                                        <button href="" class="btn btn-success " data-toggle="modal"
                                                data-target="#exampleModal">Arizani tasdiqlash <i
                                                    class="fa fa-check-square" aria-hidden="true"></i></button>
                                    <?php elseif($data->status == 2): ?>
                                        <button href="" class="btn btn-danger " data-toggle="modal"
                                                data-target="#exampleModalback">Bekor qilish <i
                                                    class="fa fa-check-square" aria-hidden="true"></i></button>

                                    <?php endif; ?>
                                <?php endif; ?>


                            </div>


                            
                        </div>


                        <div class="row">

                            <div class="col-md-4 form-group">
                                <label>Ismi <span class="error">   <?php if($errors->has('first_name')): ?>
                                            | <?php echo e($errors->first('first_name')); ?> <?php endif; ?> </span></label>
                                <input readonly="true" type="text" name="first_name" class="form-control"
                                       value="<?php if(old('first_name')): ?><?php echo e(old('first_name')); ?><?php else: ?><?php echo e($data->first_name); ?><?php endif; ?>">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Familiyasi <span class="error">   <?php if($errors->has('last_name')): ?>
                                            | <?php echo e($errors->first('last_name')); ?> <?php endif; ?> </span></label>
                                <input readonly="true" type="text" name="last_name" class="form-control"
                                       value="<?php if(old('last_name')): ?><?php echo e(old('last_name')); ?><?php else: ?><?php echo e($data->last_name); ?><?php endif; ?>">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Otasining ismi <span class="error">  <?php if($errors->has('middle_name')): ?>
                                            | <?php echo e($errors->first('middle_name')); ?> <?php endif; ?> </span></label>
                                <input readonly="true" type="text" name="middle_name" class="form-control"
                                       value="<?php if(old('middle_name')): ?><?php echo e(old('middle_name')); ?><?php else: ?><?php echo e($data->middle_name); ?><?php endif; ?>">
                            </div>

                            
                            <div class="col-md-4 form-group">
                                <label>Telefon <span class="error">  <?php if($errors->has('phone')): ?>
                                            | <?php echo e($errors->first('phone')); ?> <?php endif; ?> </span></label>
                                <input readonly="true" type="text" name="phone" class="form-control"
                                       value="<?php if(old('phone')): ?><?php echo e(old('phone')); ?><?php else: ?><?php echo e($data->phone); ?><?php endif; ?>">
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            

                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            

                            
                            <div class="col-md-4 form-group">
                                <label>Manzili <span class="error">  <?php if($errors->has('address')): ?>
                                            | <?php echo e($errors->first('address')); ?> <?php endif; ?> </span></label>
                                <input readonly="true" type="text" name="address" class="form-control"
                                       value="<?php if(old('address')): ?><?php echo e(old('address')); ?><?php else: ?><?php echo e($data->address); ?><?php endif; ?>">
                            </div>
                            <div class="col-md-4 " style="padding-left: 15px !important; ">
                                <div class="form-group">
                                    <label>Pasport seriasi va raqami <span class="error">  <?php if($errors->has('passport_seria')): ?>
                                                | <?php echo e($errors->first('passport_seria')); ?> <?php endif; ?> <?php if($errors->has('passport_number')): ?> <?php echo e($errors->first('passport_number')); ?> <?php endif; ?> </span></label>
                                    <div style="display: flex;">
                                        <div class="col-md-4">
                                            <input readonly="true" type="text" name="passport_seria"
                                                   class="form-control"
                                                   value="<?php if(old('passport_seria')): ?><?php echo e(old('passport_seria')); ?><?php else: ?><?php echo e($data->passport_serial); ?><?php endif; ?>">

                                        </div>
                                        <div class="col-md-8">
                                            <input readonly="true" type="text" name="passport_number"
                                                   class="form-control"
                                                   value="<?php if(old('passport_number')): ?><?php echo e(old('passport_number')); ?><?php else: ?><?php echo e($data->passport_number); ?><?php endif; ?>">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                            
                            <div class="col-md-4 form-group">
                                <label>DTM ID raqami<span class="error">  <?php if($errors->has('passport_given_date')): ?>
                                            | <?php echo e($errors->first('passport_given_date')); ?> <?php endif; ?> </span></label>
                                <input readonly="true" type="text" name="passport_given_date" class="form-control"
                                       value="<?php if(old('passport_given_date')): ?><?php echo e(old('passport_given_date')); ?><?php else: ?><?php echo e($data->dtm_id); ?><?php endif; ?>">
                            </div>
                            
                            <div class="col-md-4 form-group">
                                <label> Pasport jshshir </label>
                                <p class="form-control">
                                    <?php echo e($data->passport_jshshir); ?>

                                </p>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Tanlagan yo'nalishi <span class="error">  <?php if($errors->has('passport_issued_date')): ?>
                                            | <?php echo e($errors->first('passport_issued_date')); ?> <?php endif; ?> </span></label>
                                <input readonly="true" type="text" name="passport_issued_date" class="form-control"
                                       value="<?php echo e($data->dir()->name); ?>">
                            </div>
                            <div class="col-md-4 form-group">
                                <label> Til </label>
                                 <input readonly="true" type="text" name="passport_issued_date" class="form-control"
                                       value="<?php echo e($data->lang()->name); ?>">

                            </div>
                            <div class="col-md-4 form-group">
                                <label> Darajasi </label>
                                 <input readonly="true" type="text" name="passport_issued_date" class="form-control"
                                       value="<?php echo e($data->getType()); ?>">

                            </div>

                            <div class="col-md-4 form-group">
                                <label> Izoh </label>
                                <p class="form-control">
                                    <?php echo e($data->comment); ?>:
                                    
                                    <?php echo e($data->description); ?>

                                </p>
                            </div>

                            

                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label>To'plagan bali <span class="error">  <?php if($errors->has('passport_issued_date')): ?>
                                            | <?php echo e($errors->first('passport_issued_date')); ?> <?php endif; ?> </span></label>
                                <input readonly="true" type="text" name="passport_issued_date" class="form-control"
                                       value="<?php if(old('passport_issued_date')): ?><?php echo e(old('passport_issued_date')); ?><?php else: ?><?php echo e($data->ball); ?><?php endif; ?>">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>O'tish bali <span class="error">  </span></label>
                                <input readonly="true" type="text" name="passport_issued_date" class="form-control"
                                       value="<?php if(old('passport_issued_date')): ?><?php echo e(old('passport_issued_date')); ?><?php else: ?><?php echo e($data->passed_ball); ?><?php endif; ?>">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Yetmagan ball <span class="error">  </span></label>
                                <input readonly="true" type="text" name="passport_issued_date" class="form-control"
                                       value="<?php if(old('passport_issued_date')): ?><?php echo e(old('passport_issued_date')); ?><?php else: ?><?php echo e($data->difference_ball); ?><?php endif; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <?php if($data->status == 2 || $data->status == 3): ?>
                                <div class="col-md-4 form-group border">
                                    <label><b>Shartnoma summasi</b> </label> <br>
                                    <?php echo e($data->getAmount()->allamount()); ?> so'm
                                </div>
                            <?php endif; ?>
                            <div class="col-md-4 form-group">
                                <label>Ariza holati </label>
                                <p class="form-control <?php if($data->status == 2): ?> yashil <?php elseif($data->status == 1): ?> qizil <?php endif; ?>">
                                    <?php echo e($data->getStatus()); ?>

                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <?php echo $passed_ball ? $passed_ball->table_html :''; ?>

                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <form action="<?php echo e(route('tasdiqlash')); ?>" class="tasdiqlash-modal" method="post">
            <?php echo e(csrf_field()); ?>

            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    <strong><?php echo e($data->fio()); ?></strong> ni arizasini tasdiqlash uchun kontrakt miqdorini
                                    tanlang
                                </p>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" hidden="true" readonly="true" name="super_id"
                                           value="<?php echo e($data->id); ?>">
                                    <?php
                                        $amounts = 'Test\Model\Amount'::where('type' , $data->type)->get();
                                        $types = 'Test\Model\Type'::where('degree' , $data->type)->where('contract_type' , 'super')->get();
                                    ?>
                                    <select class="form-control" name="amount_id" required="required">
                                        <option value="">Tanlang</option>
                                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->allamount()); ?></option>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
                        <button class="btn btn-success ariza-tasdiqlash" type="button">Tasdiqlash</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="exampleModalback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo e($data->fio()); ?> ni arizasini bekor qilmoqchimisz?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
                    <a href="<?php echo e(route('reject' , ['id' => $data->id])); ?>" type="button" class="btn btn-danger">Ha</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        // $(document).ready(function(){
        //   if ($('.region_id').val() != "") {
        //     var id = $('.region_id').val();
        //     var url = '/backoffice/get-area-by-region/'+id;
        //     $.ajax({
        //       url: url,
        //       success: function(html){
        //         console.log(html);
        //         var txt = '';
        //         $.each(html , function(key , value){
        //           txt = txt+ '<option value="'+value['id']+'">'+value['name']+'</optioin>';
        //         });
        //         $('.area_id').html(txt);
        //       }
        //     });

        //   }
        // });
        $('.region_id').change(function () {
            if ($(this).val() != "") {
                var id = $(this).val();
                var url = '/backoffice/get-area-by-region/' + id;
                $.ajax({
                    url: url,
                    success: function (html) {
                        console.log(html);
                        var txt = '';
                        $.each(html, function (key, value) {
                            txt = txt + '<option value="' + value['id'] + '">' + value['name'] + '</optioin>';
                        });
                        $('.area_id').html(txt);
                    }
                });

            }
        });
    </script>
    <script type="text/javascript">
        $('.ariza-tasdiqlash').click(function () {
            if ($('select[name="amount_id"]').val() != "") {
                $('.tasdiqlash-modal').submit();
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_jamshid', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>