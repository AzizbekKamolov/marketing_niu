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

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; padding-bottom: 15px;">
                            <div>
                                <h4 class="card-title">Talabalar ro'yhati</h4>
                            </div>

                        </div>


                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered no-wrap">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>F.I.O</th>
                                    <th>ID KOD</th>
                                    <th>Pasport</th>
                                    <th>Tug'ilgan</th>
                                    <th>Turi</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$i); ?></td>
                                        <td>
                                            <?php echo e($item->fio()); ?>

                                        </td>
                                        <td>
                                            <?php echo e($item->id_code); ?>

                                        </td>
                                        <td>
                                            <?php echo e($item->passport_seria); ?><?php echo e($item->passport_number); ?>

                                        </td>
                                        <td>
                                            <?php echo e(date('m-d-Y', strtotime($item->birthday))); ?>

                                        </td>
                                        <td>
                                            <?php echo e($item->type ? $item->type->name :''); ?>

                                        </td>

                                        <td class="last-td">
                                            <div class="d-flex">
                                                <a class="btn btn-success"
                                                   href="<?php echo e(route('payment_admin.student.check.edit' , ['id' => $item->id])); ?>">
                                                    <i class="fa fa-edit"></i> </a>
                                                <a href="<?php echo e(route('payment_admin.student.show' , ['id' => $item->id])); ?>"
                                                   class="btn btn-light" style="color: #000000"><i
                                                            class="fa fa-eye"></i></a>

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

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin_jamshid', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>