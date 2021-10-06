<?php $__env->startSection('content'); ?>

<style type="text/css">
    .pagination li a{
        padding: 12px;
        border: 1px solid #E8EEF3;
        margin-left: 2px;
        margin-right: 2px;
    }
    .pagination li.active span{
        padding: 12px;
        border: 1px solid #E8EEF3 !important;
        background-color: #5f76e8;
        margin-left: 5px;
        margin-right: 5px;
        color: white;
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
                                          <h4 class="card-title">Talabalar turlari</h4>
                                      </div>
                                    <div>
                                    </div>

                                </div>


                                <div class="table-responsive">
                                    <table  id="multi_col_order"  class="table table-striped table-bordered no-wrap export">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nomi</th>
                                                <th>Darajasi</th>
                                                <th>Shartnoma turlari(stipendiya boyicha)</th>
                                                <th>Shartnoma turlari(tomonlar boyicha)</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0; ?>
                                           <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <tr>
                                               <td><?php echo e(++$i); ?></td>
                                               <td>
                                                   <a href="<?php echo e(route('payment_admin.student_types_show' , ['id' => $item->id])); ?>">
                                                   <?php echo e($item->name); ?></a>
                                               </td>
                                               <td>
                                                   <span style="color: #60C3C3">
                                                   <?php echo e($item->degree === 1 ?'Bakalavr':''); ?></span>
                                                   <span style="color: #C3BE26">
                                                       <?php echo e($item->degree === 2 ?'Magistr':''); ?></span>
                                               </td>
                                                <td>
                                                   <?php $__currentLoopData = $item->agreement_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agreemen_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                       <span><?php echo e($agreemen_type->name); ?></span> <br>
                                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               </td>
                                               <td>
                                                   <?php $__currentLoopData = $item->agreement_side_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agreemen_side): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                       <span><?php echo e($agreemen_side->name); ?></span> <br>
                                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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