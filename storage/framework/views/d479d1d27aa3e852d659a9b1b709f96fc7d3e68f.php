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
    .error{
      color: red;
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
                                         
                                         <a href="<?php echo e(route('student.index')); ?>" class="btn btn-info">Ro'yhat <i class="fa fa-list" aria-hidden="true"></i></a>

                                      </div>


                                     
                                </div>
                                

                               
                                      <div class="row">
                                        <div class="col-md-4 form-group">
                                          <label>ID KOD  <span class="error">   <?php if($errors->has('id_code')): ?> | <?php echo e($errors->first('id_code')); ?> <?php endif; ?> </span> </label>
                                          <input readonly="true" type="text" name="id_code"  class="form-control" value="<?php if(old('id_code')): ?><?php echo e(old('id_code')); ?><?php else: ?><?php echo e($data->id_code); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Ismi  <span class="error">   <?php if($errors->has('first_name')): ?> | <?php echo e($errors->first('first_name')); ?> <?php endif; ?> </span></label>
                                          <input readonly="true" type="text" name="first_name" class="form-control" value="<?php if(old('first_name')): ?><?php echo e(old('first_name')); ?><?php else: ?><?php echo e($data->first_name); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Familiyasi  <span class="error">   <?php if($errors->has('last_name')): ?> | <?php echo e($errors->first('last_name')); ?> <?php endif; ?> </span></label>
                                          <input readonly="true" type="text" name="last_name" class="form-control" value="<?php if(old('last_name')): ?><?php echo e(old('last_name')); ?><?php else: ?><?php echo e($data->last_name); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Otasining ismi  <span class="error">  <?php if($errors->has('middle_name')): ?> | <?php echo e($errors->first('middle_name')); ?> <?php endif; ?> </span></label>
                                          <input readonly="true" type="text" name="middle_name" class="form-control" value="<?php if(old('middle_name')): ?><?php echo e(old('middle_name')); ?><?php else: ?><?php echo e($data->middle_name); ?><?php endif; ?>">
                                        </div>
                                       
                                         <div class="col-md-4 form-group">
                                          <label>Tug'ilgan sanasi  <span class="error">  <?php if($errors->has('birthday')): ?> | <?php echo e($errors->first('birthday')); ?> <?php endif; ?> </span></label>
                                          <input readonly="true" type="date" name="birthday" class="form-control" value="<?php if(old('birthday')): ?><?php echo e(old('birthday')); ?><?php else: ?><?php echo e($data->birthday); ?><?php endif; ?>">
                                        </div>
                                         <div class="col-md-4 form-group">
                                          <label>Jinsi  <span class="error">  <?php if($errors->has('gender')): ?> | <?php echo e($errors->first('gender')); ?> <?php endif; ?> </span></label>
                                          <div style="display: flex; justify-content: space-around; width: 100%;">
                                            <div >
                                              <label>Erkak</label>
                                            <input readonly="true" disabled="true" type="radio" name="gender" <?php if($data->gender == 1): ?> checked="true" <?php endif; ?>  value="1">
                                            </div>
                                            <div >
                                              <label>Ayol</label>
                                            <input readonly="true" disabled="true" type="radio" name="gender" <?php if($data->gender == 0): ?> checked="true" <?php endif; ?> value="0">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Telefon  <span class="error">  <?php if($errors->has('phone')): ?> | <?php echo e($errors->first('phone')); ?> <?php endif; ?> </span></label>
                                          <input readonly="true" type="text" name="phone" class="form-control" value="<?php if(old('phone')): ?><?php echo e(old('phone')); ?><?php else: ?><?php echo e($data->phone); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Viloyat  <span class="error">  <?php if($errors->has('region')): ?> | <?php echo e($errors->first('region')); ?> <?php endif; ?> </span></label>
                                          <select class="form-control region_id" name="region" disabled="true">
                                            <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php if(old('region')): ?> <?php if(old('region') == $item->id): ?> selected="true" <?php endif; ?> <?php elseif($data->region == $item->id): ?> selected="true" <?php endif; ?> value="<?php echo e($item->id); ?>"><?php echo e($item->name_uz); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Tuman  <span class="error">  <?php if($errors->has('area')): ?> | <?php echo e($errors->first('area')); ?> <?php endif; ?> </span></label>
                                          <select class="form-control area_id" name="area" disabled="true">
                                            <?php if(old('region')): ?>
                                            <?php 
                                            $areas_old = Area::where('region_id' , old('region'))->get();
                                            ?>
                                            <?php $__currentLoopData = $areas_old; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php if(old('area')): ?> <?php if(old('area') == $item->id): ?> selected="true" <?php endif; ?>   <?php endif; ?> value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                            <?php 
                                            $areas_old = 'Test\Model\Area'::where('region_id' , $data->region)->get();
                                            ?>
                                            <?php $__currentLoopData = $areas_old; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option  <?php if($data->area == $item->id): ?> selected="true" <?php endif; ?>   value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                          </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Manzili  <span class="error">  <?php if($errors->has('address')): ?> | <?php echo e($errors->first('address')); ?> <?php endif; ?> </span></label>
                                          <input readonly="true" type="text" name="address" class="form-control" value="<?php if(old('address')): ?><?php echo e(old('address')); ?><?php else: ?><?php echo e($data->address); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-4 " style="padding-left: 15px !important; ">
                                          <div class="form-group">
                                            <label>Pasport seriasi va raqami  <span class="error">  <?php if($errors->has('passport_seria')): ?> | <?php echo e($errors->first('passport_seria')); ?> <?php endif; ?> <?php if($errors->has('passport_number')): ?> <?php echo e($errors->first('passport_number')); ?> <?php endif; ?> </span></label>
                                            <div style="display: flex;">
                                              <div class="col-md-4">
                                                <input readonly="true" type="text" name="passport_seria" class="form-control" value="<?php if(old('passport_seria')): ?><?php echo e(old('passport_seria')); ?><?php else: ?><?php echo e($data->passport_seria); ?><?php endif; ?>">
                                              
                                            </div>
                                              <div class="col-md-8">
                                                <input readonly="true" type="text" name="passport_number" class="form-control" value="<?php if(old('passport_number')): ?><?php echo e(old('passport_number')); ?><?php else: ?><?php echo e($data->passport_number); ?><?php endif; ?>">
                                                
                                              </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 form-group">
                                          <label>Kim tomonidan berilgan  <span class="error">  <?php if($errors->has('passport_given_by')): ?> | <?php echo e($errors->first('passport_given_by')); ?> <?php endif; ?> </span></label>
                                          <input readonly="true" type="text" name="passport_given_by" class="form-control" value="<?php if(old('passport_given_by')): ?><?php echo e(old('passport_given_by')); ?><?php else: ?><?php echo e($data->passport_given_by); ?><?php endif; ?>">
                                        </div>
                                         <div class="col-md-4 form-group">
                                          <label>Pasport berilgan sanasi  <span class="error">  <?php if($errors->has('passport_given_date')): ?> | <?php echo e($errors->first('passport_given_date')); ?> <?php endif; ?> </span></label>
                                          <input readonly="true" type="date" name="passport_given_date" class="form-control" value="<?php if(old('passport_given_date')): ?><?php echo e(old('passport_given_date')); ?><?php else: ?><?php echo e($data->passport_given_date); ?><?php endif; ?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                          <label>Pasport amal qilish muddati  <span class="error">  <?php if($errors->has('passport_issued_date')): ?> | <?php echo e($errors->first('passport_issued_date')); ?> <?php endif; ?> </span></label>
                                          <input readonly="true" type="date" name="passport_issued_date" class="form-control" value="<?php if(old('passport_issued_date')): ?><?php echo e(old('passport_issued_date')); ?><?php else: ?><?php echo e($data->passport_issued_date); ?><?php endif; ?>">
                                        </div>
                                          <div class="col-md-4 form-group">
                                          <label>Talim turi  <span class="error">   </span></label>
                                          <input readonly="true" type="text" name="passport_issued_date" class="form-control" value="<?php echo e($data->type ? $data->type->name :''); ?>">
                                        </div>
                                       
                                         
                                        
                                      </div>

                                    
                            </div>
                         
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
  $('.region_id').change(function(){
    if ($(this).val() != "") {
      var id = $(this).val();
      var url = '/backoffice/get-area-by-region/'+id;
      $.ajax({
        url: url,
        success: function(html){
          console.log(html);
          var txt = '';
          $.each(html , function(key , value){
            txt = txt+ '<option value="'+value['id']+'">'+value['name']+'</optioin>';
          });
          $('.area_id').html(txt);
        }
      });

    }
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_jamshid', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>