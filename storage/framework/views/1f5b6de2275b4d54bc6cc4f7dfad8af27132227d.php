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
                                          <h4 class="card-title"> Tasdqilangan superkontraktlar ro'yhati</h4>
                                      </div>
                                      <div>
                                      	<button href="" class="btn btn-success id-kod-form-submit">ID KODNI SAQLASH <i class="fa fa-id-card" aria-hidden="true"></i></button>
                                      </div>
                                     
                                </div>

                                
                              
                                <div class="table-responsive">
                                    <table  class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>F.I.O</th>
                                                <th>Pasport</th>
                                                <th>Telefon</th>
                                                <th>Ball</th>
                                                <th>Barobar</th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <form action="<?php echo e(route('store_id_code')); ?>" class="id-kod-form" method="post">
                                            <?php echo e(csrf_field()); ?>

                                              <?php $i = 0; ?>
                                             <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <tr <?php if($item->status == 3): ?> style="background-color: #9AE19A" <?php endif; ?>>
                                                 <td><?php echo e(++$i); ?></td>
                                                 <td>
                                                     <?php echo e($item->fio()); ?>


                                                 </td>
                                                
                                                 <td>
                                                     <?php echo e($item->passport_serial); ?><?php echo e($item->passport_number); ?>

                                                 </td>
                                                 <td>
                                                     <?php echo e($item->phone); ?>

                                                 </td>
                                                 <td>
                                                     <?php echo e($item->ball); ?>

                                                 </td>
                                                 <td>
                                                     <?php echo e($item->getAmount()->name); ?>

                                                 </td>

                                                 <td class="last-td">
                                                  <input type="text" name="input[<?php echo e($item->id); ?>]">
                                                 </td>
                                                 
                                             </tr>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           </form>
                                        </tbody>

                                 
                                    </table>
                                </div>
                            </div>
                             <div class="col-12" style="display: flex; justify-content: flex-end;">
                                  <?php echo e($data->links()); ?>

                            </div>
                        </div>
                    </div>
                   
                   
                </div>
            </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
 $('.id-kod-form-submit').click(function(){
  $('.id-kod-form').submit();
 });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_jamshid', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>