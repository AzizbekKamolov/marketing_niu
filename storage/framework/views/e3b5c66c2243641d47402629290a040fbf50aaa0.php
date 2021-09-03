<?php $__env->startSection('content'); ?>
    <style type="text/css">
        fieldset.scheduler-border {
            width: inherit; /* Or auto */
            padding: 0 10px; /* To give a bit of padding on the left and right */
            border-bottom: none;
        }
    </style>

    <div class="col-md-12">
        <div class="col-md-8  ml-auto mr-auto">
            <div class="row">
                <div class="col-md-4 form-group">
                    <p for="">F.I.O</p>
                    <input type="text" disabled class="form-control"
                           value="<?php echo e($data->last_name.' '.$data->first_name.' '.$data->middle_name); ?>">
                </div>
                <div class="col-md-4 form-group">
                    <p for="">Passport</p>
                    <input type="text" disabled class="form-control"
                           value="<?php echo e($data->passport_seria.' '.$data->passport_number); ?>">
                </div>
                <div class="col-md-4 form-group">
                    <p for="">Tug'ilgan kun</p>
                    <input type="text" disabled class="form-control"
                           value="<?php echo e($data->birthday); ?>">
                </div>

                <div class="col-md-4 form-group">
                    <p for="">Ta'lim turi</p>
                    <input type="text" disabled class="form-control"
                           value="<?php echo e($data->type ? $data->type->name :''); ?>">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Shartnomalar</h3>
                </div>
                <fieldset class="scheduler-border border w-100 p-3">
                    <legend class="scheduler-border w-auto">To'lov kontrakti uchun</legend>
                    <?php $__currentLoopData = $data->type->agreement_side_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12 form-group  w-100 text-center ">
                            <button class="btn btn-light p-3 w-100 border" data-toggle="modal"
                                    data-target="#agreement_modal<?php echo e($item->id); ?>">
                                <?php echo e($item->name); ?>

                            </button>
                            <div class="modal fade" id="agreement_modal<?php echo e($item->id); ?>" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?php echo e($item->name); ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo e(route('student.agreement.show_agreement')); ?>"
                                                  id="form<?php echo e($item->id); ?>" method="post">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('POST')); ?>

                                                <input type="text" hidden value="<?php echo e($data->id); ?>" name="student_id">
                                                <input type="text" hidden value="<?php echo e($item->id); ?>"
                                                       name="agreement_side_type_id">
                                                <div class="row">
                                                    <div class="col-md-12 text-left">
                                                        <div class="form-group">
                                                            <p for="">Tanlang</p>
                                                            <select name="agreement_type_id" class="form-control" id="">
                                                                <?php $__currentLoopData = $data->type->agreement_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_types): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($item_types->id); ?>"><?php echo e($item_types->name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bekor
                                                qilish
                                            </button>
                                            <button type="submit" form="form<?php echo e($item->id); ?>" class="btn btn-primary">
                                                Shartnomani ko`rish
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </fieldset>
                <fieldset class="scheduler-border border w-100 p-3">
                    <legend class="scheduler-border w-auto">Boshqa shartnomalar </legend>
                    <?php $__currentLoopData = $data->type->other_agreement_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="col-md-12 form-group  w-100 text-center ">
                            <button class="btn btn-light p-3 w-100 border" data-toggle="modal"
                                    data-target="#other_agreement_modal<?php echo e($item->id); ?>">
                              <?php echo e($item->name); ?>

                            </button>
                          <div class="modal fade" id="other_agreement_modal<?php echo e($item->id); ?>" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo e(route('student.other_agreement.show_agreement')); ?>"
                                                  id="form_other<?php echo e($item->id); ?>" method="post">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('POST')); ?>

                                                <input type="text" hidden value="<?php echo e($data->id); ?>" name="student_id">
                                                <input type="text" hidden value="<?php echo e($item->id); ?>"
                                                       name="other_agreement_type_id">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <h2><?php echo e($item->name); ?></h2>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bekor
                                                qilish
                                            </button>
                                            <button type="submit" form="form_other<?php echo e($item->id); ?>" class="btn btn-primary">
                                                Shartnomani ko`rish
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </fieldset>
            </div>
        </div>
    </div>

    
    


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.marketing_enno', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>