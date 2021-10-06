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

    </style>

    <div class="container-fluid" style="min-height: auto; padding: 0px">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                            <div>
                                <h4 class="card-title">Talaba turiga mumkin bo'lgan shartnomalar (Stipendiya
                                    bo'yicha)</h4>
                            </div>
                            <div>
                                <button class="btn btn-outline-success" data-toggle="modal"
                                        data-target="#agreement_type_modal"><i class="fa fa-plus-circle"></i> Qo'shish
                                </button>
                                <div class="modal fade" id="agreement_type_modal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Shartnomaga ruhsat
                                                    berish</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="agreement_type_store"
                                                      action="<?php echo e(route('payment_admin.student_type.agreement_type.store')); ?>"
                                                      method="post">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field('POST')); ?>

                                                    <input type="text" hidden value="<?php echo e($data->id); ?>" name="type_id">
                                                    <div class="text-danger col-md-12">
                                                        <?php if(Session::has('agreement_type_error')): ?>
                                                            <?php if($errors->any()): ?>
                                                                <ul>
                                                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li><?php echo e($error); ?></li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            <?php endif; ?>
                                                        <?php endif; ?>

                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <p>
                                                            Shartnoma:
                                                        </p>
                                                        <select name="agreement_type_id" class="form-control" id="">
                                                            <?php $__currentLoopData = $other_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($item1->id); ?>"><?php echo e($item1->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <p>
                                                            Narx
                                                        </p>
                                                        <input type="number" class="form-control" name="price">
                                                    </div>



















                                                </form>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" form="agreement_type_store"
                                                        class="btn btn-primary">Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="multi_col_order"
                                           class="table table-striped table-bordered no-wrap export">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nomi</th>
                                            <th>Narx</th>
                                            <th>Amallar</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        <?php $__currentLoopData = $data->agreement_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e(++$i); ?></td>
                                                <td>
                                                    <?php echo e($item->name); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($item->pivot->price_part1); ?> / <?php echo e($item->pivot->price_part2); ?>

                                                </td>

                                                <td style="width: 1px">
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-light text-danger delete-button"
                                                                id="delete-type<?php echo e($item->id); ?>"><i
                                                                    class="fa fa-trash"></i></button>
                                                        <form id="form-delete-type<?php echo e($item->id); ?>"
                                                              action="<?php echo e(route('payment_admin.student_type.agreement_type.destroy')); ?>"
                                                              method="post">
                                                            <?php echo e(method_field('DELETE')); ?>

                                                            <?php echo e(csrf_field()); ?>

                                                            <input type="text" name="element_id" hidden
                                                                   value="<?php echo e($item->id); ?>">
                                                            <input type="text" name="type_id" hidden
                                                                   value="<?php echo e($data->id); ?>">
                                                        </form>
                                                    </div>
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
    </div>
    <div class="container-fluid" style="min-height: auto; padding: 0px">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                            <div>
                                <h4 class="card-title">Talaba turiga mumkin bo'lgan shartnomalar (Tomonlar
                                    bo'yicha)</h4>
                            </div>
                            <div>
                                <button class="btn btn-outline-success" data-toggle="modal"
                                        data-target="#agreement_side_type_modal"><i class="fa fa-plus-circle"></i>
                                    Qo'shish
                                </button>
                                <div class="modal fade" id="agreement_side_type_modal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Shartnomaga ruhsat
                                                    berish</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="agreement_side_type_store"
                                                      action="<?php echo e(route('payment_admin.student_type.agreement_side_type.store')); ?>"
                                                      method="post">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field('POST')); ?>

                                                    <input type="text" hidden value="<?php echo e($data->id); ?>" name="type_id">
                                                    <div class="text-danger col-md-12">
                                                         <?php if(Session::has('agreement_side_type_error')): ?>
                                                            <?php if($errors->any()): ?>
                                                                <ul>
                                                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li><?php echo e($error); ?></li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <p>
                                                            Shartnoma:
                                                        </p>
                                                        <select name="agreement_side_type_id" class="form-control" id="">
                                                            <?php $__currentLoopData = $other_side_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($item1->id); ?>"><?php echo e($item1->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>

                                                </form>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" form="agreement_side_type_store"
                                                        class="btn btn-primary">Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="multi_col_order"
                                           class="table table-striped table-bordered no-wrap export">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nomi</th>
                                            <th>Amallar</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        <?php $__currentLoopData = $data->agreement_side_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e(++$i); ?></td>
                                                <td>
                                                    <?php echo e($item->name); ?>

                                                </td>

                                                <td style="width: 1px">
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-light text-danger delete-button"
                                                                id="delete-side-type<?php echo e($item->id); ?>"><i
                                                                    class="fa fa-trash"></i></button>
                                                        <form id="form-delete-side-type<?php echo e($item->id); ?>"
                                                              action="<?php echo e(route('payment_admin.student_type.agreement_side_type.destroy')); ?>"
                                                              method="post">
                                                            <?php echo e(method_field('DELETE')); ?>

                                                            <?php echo e(csrf_field()); ?>

                                                            <input type="text" name="element_id" hidden
                                                                   value="<?php echo e($item->id); ?>">
                                                            <input type="text" name="type_id" hidden
                                                                   value="<?php echo e($data->id); ?>">
                                                        </form>
                                                    </div>
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
    </div>
    <div class="container-fluid" style="min-height: auto; padding: 0px">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                            <div>
                                <h4 class="card-title">Boshqa shartnomalar</h4>
                            </div>
                            <div>
                                <button class="btn btn-outline-success" data-toggle="modal"
                                        data-target="#other_agreement_modal"><i class="fa fa-plus-circle"></i>
                                    Qo'shish
                                </button>
                                <div class="modal fade" id="other_agreement_modal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Shartnomaga ruhsat
                                                    berish</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="other_agreement_type_store"
                                                      action="<?php echo e(route('payment_admin.student_type.other_agreement_type.store')); ?>"
                                                      method="post">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field('POST')); ?>

                                                    <input type="text" hidden value="<?php echo e($data->id); ?>" name="type_id">
                                                    <div class="text-danger col-md-12">
                                                         <?php if(Session::has('other_agreement_type_error')): ?>
                                                            <?php if($errors->any()): ?>
                                                                <ul>
                                                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li><?php echo e($error); ?></li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-md-12 form-group">
                                                        <p>
                                                            Shartnoma:
                                                        </p>
                                                        <select name="other_agreement_type_id" class="form-control" id="">
                                                            <?php $__currentLoopData = $other_agreements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($item3->id); ?>"><?php echo e($item3->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>

                                                </form>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" form="other_agreement_type_store"
                                                        class="btn btn-primary">Save changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="multi_col_order"
                                           class="table table-striped table-bordered no-wrap export">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nomi</th>
                                            <th>Amallar</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        <?php $__currentLoopData = $data->other_agreement_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e(++$i); ?></td>
                                                <td>
                                                    <?php echo e($item->name); ?>

                                                </td>

                                                <td style="width: 1px">
                                                    <div class="d-flex">
                                                        <button type="button"
                                                                class="btn btn-light text-danger delete-button"
                                                                id="delete-other-type<?php echo e($item->id); ?>"><i
                                                                    class="fa fa-trash"></i></button>
                                                        <form id="form-delete-other-type<?php echo e($item->id); ?>"
                                                              action="<?php echo e(route('payment_admin.student_type.other_agreement_type.destroy')); ?>"
                                                              method="post">
                                                            <?php echo e(method_field('DELETE')); ?>

                                                            <?php echo e(csrf_field()); ?>

                                                            <input type="text" name="element_id" hidden
                                                                   value="<?php echo e($item->id); ?>">
                                                            <input type="text" name="type_id" hidden
                                                                   value="<?php echo e($data->id); ?>">
                                                        </form>
                                                    </div>
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
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        $('.delete-button').click(function () {
            var id = $(this).attr('id');
            if (confirm('O`chirasizmi')) {
                $('#form-' + id).submit();
            }
        })
    </script>
    <?php if(Session::has('agreement_type_error')): ?>
        <script>
            $('button[data-target="#agreement_type_modal"]').click();
        </script>
    <?php endif; ?>
    <?php if(Session::has('agreement_side_type_error')): ?>
        <script>
            $('button[data-target="#agreement_side_type_modal"]').click();
        </script>
    <?php endif; ?>
    <?php if(Session::has('other_agreement_type_error')): ?>
        <script>
            $('button[data-target="#other_agreement_modal"]').click();
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin_jamshid', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>