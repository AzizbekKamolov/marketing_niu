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
                                          <h4 class="card-title">Talabalar ro'yhati</h4>
                                      </div>
                                      <?php if(!isset($type)): ?>
                                      <div>
                                          <a class="btn btn-success" href="<?php echo e(route('student.create')); ?>">+ Yangi talaba</a>
                                      </div>
                                      <?php endif; ?>
                                </div>













                                <div class="table-responsive">
                                    <table   id="multi_col_order" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>F.I.O</th>
                                                <th>ID KOD</th>
                                                <th>Pasport</th>
                                                <th>Tug'ulgan</th>
                                                <th>Telefon</th>
                                                <th>Holati</th>
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
                                                   <?php echo e($item->phone); ?>

                                               </td>
                                               <td>




                                                   <?php if($item->status_getting()): ?>
                                                        Olgan <a href="<?php echo e(route('rozilik_student' , ['id' => $item->id])); ?>" class="btn btn-default"><i class="fa fa-print"></i></a>
                                                   <?php endif; ?>
                                               </td>
                                               <td class="last-td">
                                                       <a href="<?php echo e(route('student.show' , ['id' => $item->id])); ?>" class="btn btn-light"> <i class="fa fa-eye"></i> </a>
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
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
  $('.search-button').click(function(){
    var txt = $('.search-input').val();
    if (txt != "") {
        var url = '/backoffice/search-student/'+txt;
        // alert(url);
        window.location.href = url;
    }
    else{
         var url = '/backoffice/student/';
        // alert(url);
        window.location.href = url;
    }
  });
  $('.search-clear').click(function(e){
     var url = '/backoffice/student/';
        // alert(url);
        window.location.href = url;
        
  });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_jamshid', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>