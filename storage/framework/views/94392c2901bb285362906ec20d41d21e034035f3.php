<?php $__env->startSection('content'); ?>

    <style type="text/css">
        .error {
            color: #ff414b;
        }

        .border-default {
            border: 1px solid #E8EEF3;

        }

        .last-td {
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
                                <h4 class="card-title">Talaba</h4>
                            </div>
                            <div>

                                
                                <button type="button" class="btn btn-light back_button_js"><i
                                        class="fa fa-arrow-circle-left" aria-hidden="true"></i> Ortga
                                </button>

                            </div>

                        </div>

                        <div class="table-responsive" style="overflow-x: unset">
                            <div class="row">
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        ID KOD
                                        <span class="error">
                                                <?php if($errors->has('id_code')): ?> | <?php echo e($errors->first('id_code')); ?> <?php endif; ?>
                                            </span>
                                    </label>
                                    <input readonly type="text" class="form-control" name="id_code"
                                           value="<?php if(old('id_code')): ?><?php echo e(old('id_code')); ?><?php else: ?><?php echo e($data->id_code); ?><?php endif; ?>">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Ism
                                        <span class="error">
                                                <?php if($errors->has('first_name')): ?>
                                                | <?php echo e($errors->first('first_name')); ?> <?php endif; ?>
                                            </span>
                                    </label>
                                    <input readonly type="text" class="form-control" name="first_name"
                                           value="<?php if(old('first_name')): ?><?php echo e(old('first_name')); ?><?php else: ?><?php echo e($data->first_name); ?><?php endif; ?>">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Familiya
                                        <span class="error">
                                                <?php if($errors->has('last_name')): ?>
                                                | <?php echo e($errors->first('last_name')); ?> <?php endif; ?>
                                            </span>
                                    </label>
                                    <input readonly type="text" class="form-control" name="last_name"
                                           value="<?php if(old('last_name')): ?><?php echo e(old('last_name')); ?><?php else: ?><?php echo e($data->last_name); ?><?php endif; ?>">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Otasining ismi
                                        <span class="error">
                                                <?php if($errors->has('middle_name')): ?>
                                                | <?php echo e($errors->first('middle_name')); ?> <?php endif; ?>
                                            </span>
                                    </label>
                                    <input readonly type="text" class="form-control" name="middle_name"
                                           value="<?php if(old('middle_name')): ?><?php echo e(old('middle_name')); ?><?php else: ?><?php echo e($data->middle_name); ?><?php endif; ?>">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Tug'ilgan sana
                                        <span class="error">
                                                <?php if($errors->has('birthday')): ?> | <?php echo e($errors->first('birthday')); ?> <?php endif; ?>
                                            </span>
                                    </label>
                                    <input readonly type="date" class="form-control" name="birthday"
                                           value="<?php if(old('birthday')): ?><?php echo e(old('birthday')); ?><?php else: ?><?php echo e($data->birthday); ?><?php endif; ?>">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Telefon
                                        <span class="error">
                                                <?php if($errors->has('phone')): ?> | <?php echo e($errors->first('phone')); ?> <?php endif; ?>
                                            </span>
                                    </label>
                                    <input readonly type="text" class="form-control" name="phone"
                                           value="<?php if(old('phone')): ?><?php echo e(old('phone')); ?><?php else: ?><?php echo e($data->phone); ?><?php endif; ?>">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Viloyat
                                        <span class="error">
                                                <?php if($errors->has('region_id')): ?>
                                                | <?php echo e($errors->first('region_id')); ?> <?php endif; ?>
                                            </span>
                                    </label>
                                    <select disabled name="region" id="" class="form-control">
                                        <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php if(old('region')): ?> <?php if(old('region')==$region->id): ?> selected
                                                    <?php endif; ?> <?php else: ?> <?php if($data->region == $region->id): ?> selected
                                                    <?php endif; ?> <?php endif; ?> value="<?php echo e($region->id); ?>"><?php echo e($region->name_uz); ?></option>
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Tuman/Shahar
                                        <span class="error">
                                                <?php if($errors->has('area_id')): ?> | <?php echo e($errors->first('area_id')); ?> <?php endif; ?>
                                            </span>
                                    </label>
                                    <select disabled name="area" id="" class="form-control">
                                        <?php if(old('region')): ?>
                                            <?php
                                                $ar = 'Test\Model\Area'::where('region_id' , old('region'))->get();
                                            ?>
                                            <?php $__currentLoopData = $ar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if(old('area')): ?> <?php if(old('area')==$item->id): ?> selected
                                                        <?php endif; ?> <?php else: ?> <?php if($data->area == $item->id): ?> selected
                                                        <?php endif; ?> <?php endif; ?> value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <?php
                                                $ar = 'Test\Model\Area'::where('region_id' , $data->region)->get();
                                            ?>
                                            <?php $__currentLoopData = $ar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if($data->area == $item->id): ?> selected
                                                        <?php endif; ?>  value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
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
                                    <input readonly type="text" class="form-control" name="address"
                                           value="<?php if(old('address')): ?><?php echo e(old('address')); ?><?php else: ?><?php echo e($data->address); ?><?php endif; ?>">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Passport seria va raqam
                                        <span class="error">
                                                <?php if($errors->has('passport_seria')): ?>
                                                | <?php echo e($errors->first('passport_seria')); ?> <?php endif; ?>
                                            <?php if($errors->has('passport_number')): ?>
                                                | <?php echo e($errors->first('passport_number')); ?> <?php endif; ?>
                                            </span>
                                        <div style="display: flex; margin-top: 7px;">
                                            <input readonly type="text" class="form-control" style="width: 30%"
                                                   name="passport_seria"
                                                   value="<?php if(old('passport_seria')): ?><?php echo e(old('passport_seria')); ?><?php else: ?><?php echo e($data->passport_seria); ?><?php endif; ?>">
                                            <input readonly type="text" class="form-control" style="width: 70%"
                                                   name="passport_number"
                                                   value="<?php if(old('passport_number')): ?><?php echo e(old('passport_number')); ?><?php else: ?><?php echo e($data->passport_number); ?><?php endif; ?>">
                                        </div>
                                    </label>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Passport berilgan sana
                                        <span class="error">
                                                <?php if($errors->has('passport_given_date')): ?>
                                                | <?php echo e($errors->first('passport_given_date')); ?> <?php endif; ?>
                                            </span>
                                    </label>
                                    <input readonly type="date" class="form-control" name="passport_given_date"
                                           value="<?php if(old('passport_given_date')): ?><?php echo e(old('passport_given_date')); ?><?php else: ?><?php echo e($data->passport_given_date); ?><?php endif; ?>">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Passport amal qilish muddati
                                        <span class="error">
                                                <?php if($errors->has('passport_issued_date')): ?>
                                                | <?php echo e($errors->first('passport_issued_date')); ?> <?php endif; ?>
                                            </span>
                                    </label>
                                    <input readonly type="date" class="form-control" name="passport_issued_date"
                                           value="<?php if(old('passport_issued_date')): ?><?php echo e(old('passport_issued_date')); ?><?php else: ?><?php echo e($data->passport_issued_date); ?><?php endif; ?>">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Kim tomonidan berilgan
                                        <span class="error">
                                                <?php if($errors->has('passport_given_by')): ?>
                                                | <?php echo e($errors->first('passport_given_by')); ?> <?php endif; ?>
                                            </span>
                                    </label>
                                    <input readonly type="text" class="form-control" name="passport_given_by"
                                           value="<?php if(old('passport_given_by')): ?><?php echo e(old('passport_given_by')); ?><?php else: ?><?php echo e($data->passport_given_by); ?><?php endif; ?>">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Jinsi
                                        <span class="error">
                                                <?php if($errors->has('gender')): ?> | <?php echo e($errors->first('gender')); ?> <?php endif; ?>
                                            </span>
                                    </label>
                                    <select disabled name="gender" id="" class="form-control">
                                        <option <?php if(old('gender')): ?> <?php if(old('gender') == 1): ?> selected
                                                <?php endif; ?> <?php else: ?> <?php if($data->gender == 1): ?> selected <?php endif; ?> <?php endif; ?> value="1">
                                            Erkak
                                        </option>
                                        <option <?php if(old('gender')): ?> <?php if(old('gender') == 0): ?> selected
                                                <?php endif; ?> <?php else: ?> <?php if($data->gender == 0): ?> selected <?php endif; ?> <?php endif; ?> value="0">
                                            Ayol
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Ta'lim turi
                                        <span class="error">

                                            </span>
                                    </label>
                                    <select disabled name="type_degree" id="" class="form-control">
                                        <option <?php if($data->get_type()->degree == 1): ?> selected <?php endif; ?> value="1">Bakalavr
                                        </option>
                                        <option <?php if($data->get_type()->degree == 2): ?> selected <?php endif; ?> value="2">Magistr
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Ta'lim turi
                                        <span class="error">
                                                <?php if($errors->has('status_new')): ?>
                                                | <?php echo e($errors->first('status_new')); ?> <?php endif; ?>
                                            </span>
                                    </label>
                                    <select disabled name="status_new" id="" class="form-control">
                                        <?php
                                            $types = 'Test\Model\Type'::all();
                                        ?>
                                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php if(old('status_new')): ?> <?php if(old('status_new') ==$type->id): ?> selected
                                                    <?php endif; ?> <?php else: ?> <?php if($data->status_new == $type->id): ?> selected
                                                    <?php endif; ?> <?php endif; ?> value="<?php echo e($type->id); ?>">
                                                <?php echo e($type->name); ?></option>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="">
                                        Kurs
                                        <span class="error">
                                                <?php if($errors->has('course')): ?> | <?php echo e($errors->first('course')); ?> <?php endif; ?>
                                            </span>
                                    </label>
                                    <input type="number" class="form-control" name="course"
                                           value="<?php echo e($data->course); ?>" disabled>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="card">

                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                            <div>
                                <h4 class="card-title">Chegirmalar</h4>
                            </div>
                        </div>

                        <div class="" style="overflow-x: unset">
                            <div class="row">
                                <div class="col-md-12" style="display: flex; justify-content: space-between">
                                    <p>Kontrakt to'lovi uchun chegirmalar</p>
                                    <button class="btn btn-outline-success" data-toggle="modal"
                                            data-target="#add-agreement-discount-modal"><i class="fa fa-plus"></i>
                                        Qo'shish
                                    </button>
                                    <div class="modal fade" id="add-agreement-discount-modal" tabindex="-1"
                                         role="dialog"
                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Kontrakt to'lovi
                                                        uchun chegirma</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="agreement-discount-store-1"
                                                          action="<?php echo e(route('payment_admin.discount.store')); ?>"
                                                          method="post">
                                                        <?php echo e(csrf_field()); ?>

                                                        <div class="form-group">
                                                            <p>
                                                                Chegirma foizi (%):
                                                            </p>
                                                            <input type="number" class="form-control" name="percent">
                                                            <input type="number" hidden class="form-control" name="type"
                                                                   value="1">
                                                            <input type="text" hidden name="student_id"
                                                                   value="<?php echo e($data->id); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <p>
                                                                Izoh
                                                            </p>
                                                            <textarea name="description" id="" cols="30" rows="10"
                                                                      class="form-control"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Bekor qilish
                                                    </button>
                                                    <button type="submit" form="agreement-discount-store-1"
                                                            class="btn btn-primary">Saqlash
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered no-wrap">
                                    <thead>
                                    <tr>
                                        <th>Izoh</th>
                                        <th>Chegirma</th>
                                        <th>Amallar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $data->agreement_discounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php echo e($item->description); ?>

                                            </td>
                                            <td>
                                                <?php echo e($item->percent); ?>

                                            </td>
                                            <td>
                                                <button class="btn btn-light text-danger delete-button"
                                                        id="discount-delete-<?php echo e($item->id); ?>"><i class="fa fa-trash"></i>
                                                </button>
                                                <form id="form-discount-delete-<?php echo e($item->id); ?>"
                                                      action="<?php echo e(route('payment_admin.discount.destroy')); ?>"
                                                      method="post">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <input type="text" hidden value="<?php echo e($data->id); ?>" name="student_id">
                                                    <input type="text" hidden value="<?php echo e($item->id); ?>" name="discount_id">
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>


                                </table>

                            </div>
                            <div class="row">
                                <div class="col-md-12" style="display: flex; justify-content: space-between">
                                    <p>Boshqa to'lovlar uchun chegirmalar</p>
                                    <button class="btn btn-outline-success" data-toggle="modal"
                                            data-target="#add-other-agreement-discount-modal"><i class="fa fa-plus"></i>
                                        Qo'shish
                                    </button>
                                    <div class="modal fade" id="add-other-agreement-discount-modal" tabindex="-1"
                                         role="dialog"
                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Boshqa to'lovlar
                                                        uchun chegirma</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="agreement-discount-store-2"
                                                          action="<?php echo e(route('payment_admin.discount.store')); ?>"
                                                          method="post">
                                                        <?php echo e(csrf_field()); ?>

                                                        <div class="form-group">
                                                            <p>
                                                                Chegirma foizi (%):
                                                            </p>
                                                            <input type="number" class="form-control" name="percent">
                                                            <input type="number" hidden class="form-control" name="type"
                                                                   value="2">
                                                            <input type="text" hidden name="student_id"
                                                                   value="<?php echo e($data->id); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <p>
                                                                To'ov shartnoma turi
                                                            </p>
                                                            <select name="agreement_id" class="form-control" id="">
                                                                <?php $__currentLoopData = $other_agreement_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($oth->id); ?>"><?php echo e($oth->name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <p>
                                                                Izoh
                                                            </p>
                                                            <textarea name="description" id="" cols="30" rows="10"
                                                                      class="form-control"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Bekor qilish
                                                    </button>
                                                    <button type="submit" form="agreement-discount-store-2"
                                                            class="btn btn-primary">Saqlash
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered no-wrap">
                                    <thead>
                                    <tr>
                                        <th>Nomi</th>
                                        <th>Izoh</th>
                                        <th>Chegirma</th>
                                        <th>Amallar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $data->other_agreement_discounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php echo e($item->agreement_type->name); ?>

                                            </td>
                                            <td>
                                                <?php echo e($item->description); ?>

                                            </td>
                                            <td>
                                                <?php echo e($item->percent); ?>

                                            </td>
                                            <td>
                                                <button class="btn btn-light text-danger delete-button"
                                                        id="discount-delete-<?php echo e($item->id); ?>"><i class="fa fa-trash"></i>
                                                </button>
                                                <form id="form-discount-delete-<?php echo e($item->id); ?>"
                                                      action="<?php echo e(route('payment_admin.discount.destroy')); ?>"
                                                      method="post">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <input type="text" hidden value="<?php echo e($data->id); ?>" name="student_id">
                                                    <input type="text" hidden value="<?php echo e($item->id); ?>" name="discount_id">
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>


                                </table>

                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('.delete-button').click(function () {
            var id = $(this).attr('id');
            if (confirm('O`chirasizmio')) {
                $('#form-' + id).submit();
            }
        })
    </script>
    <script>
        $('.form_submit').click(function () {
            var t = confirm('Saqlansinmi?');
            if (t) {
                $('.form1').submit();
            } else {

            }
        });

        function region_change(id) {
            var url = '/backoffice/get-area-by-region/' + id;
            $.ajax({
                url: url,
                method: 'GET',
                success: function (result) {
                    console.log(result);
                    // var result2 = JSON.parse(result.toString());
                    var txt = '';
                    var old = '<?php echo e(old('area')); ?>';

                    $.each(result, function (key, value) {
                        if (old == value['id']) {
                            var bb = 'selected';
                        } else {
                            var bb = '';

                        }
                        txt = txt + '<option ' + bb + ' value="' + value['id'] + '">' + value['name'] + '</option>';
                    });
                    $('select[name="area"]').html(txt);
                }

            });
        }

        $('select[name="region"]').change(function () {
            var id = $(this).val();
            region_change(id);
        });
        // $(document).ready(function(){
        //     var id = $('select[name="region"]').val();
        //     if(id != ''){
        //         region_change(id);
        //     }
        // });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin_jamshid', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>