<?php $__env->startSection('content'); ?>
    <section class="section my-4 my-sm-2 my-md-2 my-lg-2 my-xl-2">
        <div class="container">

            <div class="col-12 d-flex">

                <div class="container-fluid">
                    <fieldset disabled>
                        <div class="row g-2">

                            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                <label for="validationDefaultUsername" class="form-label text-muted">F.I.O</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-0 iconSpan"
                                          id="inputGroupPrepend2"><b>FIO</b></span>
                                    <input type="text" class="form-control" id="studentID"
                                           aria-describedby="inputGroupPrepend2" required value="<?php echo e($data->fio()); ?>">
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                <label for="validationDefaultUsername"
                                       class="form-label text-muted">Passport</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-0 iconSpan" id="inputGroupPrepend2"><i
                                                class="fas fa-audio-description"></i></span>
                                    <input style="text-transform:uppercase" type="text" maxlength="2"
                                           class="form-control" id="passportSeria"
                                           aria-describedby="inputGroupPrepend2"
                                           required value="<?php echo e($data->passport_seria.' '.$data->passport_number); ?>">
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                <label for="validationDefaultUsername" class="form-label text-muted">Tug'ulgan
                                    sanasi</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-0 iconSpan" id="inputGroupPrepend2"><i
                                                class="far fa-user"></i></span>
                                    <input type="text" class="form-control" id="validationDefaultUsername"
                                           aria-describedby="inputGroupPrepend2" required
                                           value="<?php echo e($data->birthday); ?>">
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                <label for="validationDefaultUsername" class="form-label text-muted">Ta'lim
                                    turi</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-0 iconSpan" id="inputGroupPrepend2"><i
                                                class="fas fa-book-reader"></i></span>
                                    <input type="text" class="form-control" id="validationDefaultUsername"
                                           aria-describedby="inputGroupPrepend2" required
                                           value="<?php echo e($data->type ? $data->type->name :''); ?>">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                <label for="validationDefaultUsername" class="form-label text-muted">Kurs</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-0 iconSpan" id="inputGroupPrepend2"><i
                                                class="fas fa-book-reader"></i></span>
                                    <input type="text" class="form-control" id="validationDefaultUsername"
                                           aria-describedby="inputGroupPrepend2" required
                                           value="<?php echo e($data->course ? $data->course :''); ?>">
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="col-12 my-3">
                        <div>
                            <h1 class="fs-3 text-center">Shartnomalar</h1>
                        </div>

                        <fieldset class="scheduler-border myBorder rounded w-100 p-3 my-2">
                            <legend class="scheduler-border w-auto">To'lov kontrakti uchun</legend>
                            <?php $__currentLoopData = $agreement_side_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-12 my-3 myBorder">
                                    <button type="button"
                                            class="btn border  border-2 w-100 text-center py-sm-1 py-md-2 py-xl-3"
                                            data-bs-toggle="modal"
                                            data-bs-target="#agreement_modal<?php echo e($item->id); ?>" ><?php echo e($item->name); ?></button>
                                    <div class="modal fade" id="agreement_modal<?php echo e($item->id); ?>" tabindex="-1"
                                         role="dialog"
                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo e($item->name); ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">

                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo e(route('student.agreement.show_agreement')); ?>"
                                                          id="form<?php echo e($item->id); ?>" method="post">
                                                        <?php echo e(csrf_field()); ?>

                                                        <?php echo e(method_field('POST')); ?>

                                                        <input type="text" hidden value="<?php echo e($data->id); ?>"
                                                               name="student_id">
                                                        <input type="text" hidden value="<?php echo e($item->id); ?>"
                                                               name="agreement_side_type_id">
                                                        <div class="row">
                                                            <div class="col-md-12 text-left">
                                                                <div class="form-group">
                                                                    <p for="">Tanlang</p>
                                                                    <select name="agreement_type_id"
                                                                            class="form-control" id="">
                                                                        <?php $__currentLoopData = $agreement_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_types): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($item_types->id); ?>"><?php echo e($item_types->name); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Bekor
                                                        qilish
                                                    </button>
                                                    <button type="submit" form="form<?php echo e($item->id); ?>"
                                                            class="btn btn-primary">
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
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        // $('button[data-toggle="modal"]').click(function(){
        //     var target = $(this).attr('data-target');
        //     var modal = $(target);
        //     var myModal = new bootstrap.Modal(modal)
        //     modal.modal('show')
        // })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.marketing2021', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>