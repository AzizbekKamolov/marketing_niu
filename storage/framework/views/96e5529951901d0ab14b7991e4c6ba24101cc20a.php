<?php $__env->startSection('content'); ?>

<style type="text/css">
    .error{
        color: #ff414b;
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
                                          <h4 class="card-title">Talabalar ro'yhati</h4>
                                      </div>
                                    <div>
                                            <button class="btn btn-success form_submit" type="submit" form="student_create"><i class="fa fa-save"></i> Saqlash</button>
                                            <button type="button" class="btn btn-light back_button_js"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Ortga</button>
                                    </div>

                                </div>
                                <form id="student_create" action="<?php echo e(route('payment_admin.student.store')); ?>" class="form1" method="post">
                                    <?php echo e(csrf_field()); ?>

                                <div class="table-responsive" style="overflow-x: unset">
                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                ID KOD
                                                <span class="error">
                                                <?php if($errors->has('id_code')): ?> | <?php echo e($errors->first('id_code')); ?> <?php endif; ?>
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="id_code" value="<?php if(old('id_code')): ?><?php echo e(old('id_code')); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Ism
                                                <span class="error">
                                                <?php if($errors->has('first_name')): ?> | <?php echo e($errors->first('first_name')); ?> <?php endif; ?>
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="first_name" value="<?php if(old('first_name')): ?><?php echo e(old('first_name')); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Familiya
                                                <span class="error">
                                                <?php if($errors->has('last_name')): ?> | <?php echo e($errors->first('last_name')); ?> <?php endif; ?>
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="last_name" value="<?php if(old('last_name')): ?><?php echo e(old('last_name')); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Otasining ismi
                                                <span class="error">
                                                <?php if($errors->has('middle_name')): ?> | <?php echo e($errors->first('middle_name')); ?> <?php endif; ?>
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="middle_name" value="<?php if(old('middle_name')): ?><?php echo e(old('middle_name')); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Tug'ilgan sana
                                                <span class="error">
                                                <?php if($errors->has('birthday')): ?> | <?php echo e($errors->first('birthday')); ?> <?php endif; ?>
                                            </span>
                                            </label>
                                            <input required type="date" class="form-control" name="birthday" value="<?php if(old('birthday')): ?><?php echo e(old('birthday')); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Telefon
                                                <span class="error">
                                                <?php if($errors->has('phone')): ?> | <?php echo e($errors->first('phone')); ?> <?php endif; ?>
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="phone" value="<?php if(old('phone')): ?><?php echo e(old('phone')); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Viloyat
                                                <span class="error">
                                                <?php if($errors->has('region_id')): ?> | <?php echo e($errors->first('region_id')); ?> <?php endif; ?>
                                            </span>
                                            </label>
                                            <select name="region" id="" class="form-control">
                                                <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php if(old('region')==$region->id): ?> selected <?php endif; ?>  value="<?php echo e($region->id); ?>"><?php echo e($region->name_uz); ?></option>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Tuman/Shahar
                                                <span class="error">
                                                <?php if($errors->has('area')): ?> | <?php echo e($errors->first('area')); ?> <?php endif; ?>
                                            </span>
                                            </label>
                                            <select name="area" id="" class="form-control">
                                                <?php if(old('region')): ?>
                                                    <?php
                                                    $ar = 'Test\Model\Area'::where('region_id' , old('region'))->get();
                                                    ?>
                                                    <?php $__currentLoopData = $ar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option  <?php if(old('area')==$item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                <?php endif; ?>

                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">
                                                Manzil
                                                <span class="error">
                                                <?php if($errors->has('address')): ?> | <?php echo e($errors->first('address')); ?> <?php endif; ?>
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="address" value="<?php if(old('address')): ?><?php echo e(old('address')); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Passport seria va raqam
                                                <span class="error">
                                                <?php if($errors->has('passport_seria')): ?> | <?php echo e($errors->first('passport_seria')); ?> <?php endif; ?>
                                                <?php if($errors->has('passport_number')): ?> | <?php echo e($errors->first('passport_number')); ?> <?php endif; ?>
                                                <?php if($errors->has('passport_seria_number')): ?> | <?php echo e($errors->first('passport_seria_number')); ?> <?php endif; ?>
                                            </span>
                                                <div style="display: flex; margin-top: 7px;" >
                                                    <input required type="text" class="form-control" style="width: 30%" name="passport_seria" value="<?php if(old('passport_seria')): ?><?php echo e(old('passport_seria')); ?><?php endif; ?>">
                                                    <input required type="text" class="form-control" style="width: 70%" name="passport_number" value="<?php if(old('passport_number')): ?><?php echo e(old('passport_number')); ?><?php endif; ?>">
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Passport berilgan sana
                                                <span class="error">
                                                <?php if($errors->has('passport_given_date')): ?> | <?php echo e($errors->first('passport_given_date')); ?> <?php endif; ?>
                                            </span>
                                            </label>
                                            <input required type="date" class="form-control" name="passport_given_date" value="<?php if(old('passport_given_date')): ?><?php echo e(old('passport_given_date')); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Passport amal qilish muddati
                                                <span class="error">
                                                <?php if($errors->has('passport_issued_date')): ?> | <?php echo e($errors->first('passport_issued_date')); ?> <?php endif; ?>
                                            </span>
                                            </label>
                                            <input required type="date" class="form-control" name="passport_issued_date" value="<?php if(old('passport_issued_date')): ?><?php echo e(old('passport_issued_date')); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Kim tomonidan berilgan
                                                <span class="error">
                                                <?php if($errors->has('passport_given_by')): ?> | <?php echo e($errors->first('passport_given_by')); ?> <?php endif; ?>
                                            </span>
                                            </label>
                                            <input required type="text" class="form-control" name="passport_given_by" value="<?php if(old('passport_given_by')): ?><?php echo e(old('passport_given_by')); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Jinsi
                                                <span class="error">
                                                <?php if($errors->has('gender')): ?> | <?php echo e($errors->first('gender')); ?> <?php endif; ?>
                                            </span>
                                            </label>
                                            <select name="gender" id="" class="form-control">
                                                <option   <?php if(old('gender') == 1): ?> selected <?php endif; ?>  value="1">Erkak</option>
                                                <option <?php if( old('gender') == 0): ?> selected <?php endif; ?>  value="0">Ayol</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Ta'lim turi
                                                <span class="error">

                                            </span>
                                            </label>
                                            <select name="type_degree" id="" class="form-control">
                                                <option <?php if(old('type_degree') == 1): ?> selected <?php endif; ?> value="1">Bakalavr</option>
                                                <option <?php if(old('type_degree') == 2): ?> selected <?php endif; ?> value="2">Magistr</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="">
                                                Shartnoma turi
                                                <span class="error">
                                                <?php if($errors->has('status_new')): ?> | <?php echo e($errors->first('status_new')); ?> <?php endif; ?>
                                            </span>
                                            </label>
                                            <select name="status_new" id="" class="form-control">
                                                <?php
                                                $types = 'Test\Model\Type'::all();
                                                ?>
                                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php if(old('status_new') ==$type->id): ?> selected <?php endif; ?>  value="<?php echo e($type->id); ?>">
                                                        <?php echo e($type->name); ?></option>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            </div>

                        </div>
                    </div>


                </div>
            </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        // $('.form_submit').click(function(){
        //     var t = confirm('Saqlansinmi?');
        //     if (t){
        //         $('.form1').submit();
        //     }
        //     else{
        //
        //     }
        // });
        function region_change(id){
            var url = '/backoffice/get-area-by-region/'+id;
            $.ajax({
                url: url,
                method: 'GET',
                success:function(result){
                    console.log(result);
                    // var result2 = JSON.parse(result.toString());
                    var txt = '';
                    var old = '<?php echo e(old('area')); ?>';

                    $.each(result , function(key , value){
                        if(old == value['id']){
                            var bb = 'selected';
                        }
                        else{
                            var bb = '';

                        }
                        txt = txt + '<option '+bb+' value="'+value['id']+'">'+value['name']+'</option>';
                    });
                    $('select[name="area"]').html(txt);
                }

            });
        }
        $('select[name="region"]').change(function(){
            var id = $(this).val();
            region_change(id);
        });
        $(document).ready(function(){
            var id = $('select[name="region"]').val();
            if(id != ''){
                region_change(id);
            }
            var type_id = $('select[name="type_degree"]').val();
            if(type_id != ''){
                get_type_by_degree(type_id);
            }
        });
        $('select[name="type_degree"]').change(function(){
            var type_id = $(this).val();
            if(type_id != ''){
                get_type_by_degree(type_id);
            }
        });
    </script>
    <script>
        $('input[name="passport_seria"]').inputmask({
            'mask':'AA',
        });
        $('input[name="passport_number"]').inputmask({
            'mask':'9999999',
        });
        $('input[name="phone"]').inputmask({
            'mask':'+\\9\\98\\999999999',
        });
        $('input[name="id_code"]').inputmask({
            'regex':'[0-9]*',
        });
    </script>
    <script>
        function get_type_by_degree(id){
            var url = '/backoffice/get-type-by-degree/'+id;
            $.ajax({
                url: url,
                method: 'GET',
                success:function(result3){
                    console.log(result3);
                    var txt = '';
                    var old = '<?php echo e(old('status_new')); ?>';
                    $.each(JSON.parse(result3) , function(key , value){
                        if(old == value['id']){
                            var gg = 'selected';
                        }
                        else{
                            var gg = '';
                        }
                        txt = txt + '<option '+gg+' value="'+value['id']+'">'+value['name']+'</option>';
                    });
                    $('select[name="status_new"]').html(txt);
                }
            });
        }

    </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.admin_jamshid', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>