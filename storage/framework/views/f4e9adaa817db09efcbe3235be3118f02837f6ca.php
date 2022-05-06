<style type="text/css">
    li a {
        cursor: pointer;
    }
</style>

<?php if(Auth::user()->role == 6 ): ?>

    <li class="sidebar-item"><a class="sidebar-link active" href="/backoffice/student" aria-expanded="false"><i
                data-feather="home" class="feather-icon"></i><span class="hide-menu">Barcha Talabalar</span></a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> (bakalavr) </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <?php
                $types_bakalavr_super = 'Test\Model\Type'::where('degree' , 1)->where('contract_type' , 'super')->get();
            ?>
            <?php $__currentLoopData = $types_bakalavr_super; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="<?php echo e(route('amount_type_marketing' , ['type' => $item->id])); ?>"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu"><?php echo e($item->name); ?></span></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> (magister)</span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <?php
                $types_magistr_super = 'Test\Model\Type'::where('degree' , 2)->where('contract_type' , 'super')->get();
            ?>
            <?php $__currentLoopData = $types_magistr_super; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="<?php echo e(route('super_for_marketing_magister_by_amount' , ['type' => $item->id])); ?>"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu"> <?php echo e($item->name); ?></span></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> (sirtqi)</span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <?php
                $types_sirtqi_super = 'Test\Model\Type'::where('degree' , 3)->where('contract_type' , 'super')->get();
            ?>
            <?php $__currentLoopData = $types_sirtqi_super; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="<?php echo e(route('amount_type_marketing' , ['type' => $item->id])); ?>"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu"> <?php echo e($item->name); ?></span></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> bakalavr <br> id berilganlar</span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <?php $__currentLoopData = $types_bakalavr_super; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="<?php echo e(route('super_mar_type_sum' , ['type' => $item->id ])); ?>"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu"><?php echo e($item->name); ?></span></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> magistr <br> id berilganlar</span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <?php $__currentLoopData = $types_magistr_super; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="<?php echo e(route('super_mar_type_sum' , ['type' => $item->id])); ?>"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu"><?php echo e($item->name); ?></span></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> sirtqi <br> id berilganlar</span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <?php $__currentLoopData = $types_sirtqi_super; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="<?php echo e(route('super_mar_type_sum' , ['type' => $item->id])); ?>"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu"><?php echo e($item->name); ?></span></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </li>

<?php endif; ?>

<?php if(Auth::user()->role == 7): ?>

    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/student" aria-expanded="false"><i
                data-feather="home" class="feather-icon"></i><span class="hide-menu">Barcha Talabalar</span></a>
    </li>
    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/super" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Superkontrakt <br> (bakalavr)</span></a>
    </li>
    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/super-magister" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Superkontraktlar <br> (magister)</span></a></li>
<?php endif; ?>

<?php if(Auth::user()->role == 5): ?>

    
    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/super" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Superkontrakt <br> (bakalavr)</span></a>
    </li>
    <?php
        $bak_sup_dirs = 'Test\Model\Direction'::where('type' , 1)->orWhere('type' , 3)->get();
    ?>
    <?php $__currentLoopData = $bak_sup_dirs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $it): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <i data-feather="file-text" class="feather-icon"></i>
                <span class="hide-menu"><?php echo e($it->name); ?> </span>
            </a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="<?php echo e(route('dir_lang_type' , ['dir' => $it->id , 'lang' => 1])); ?>"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="<?php echo e(route('dir_lang_type' , ['dir' => $it->id , 'lang' => 2])); ?>"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

            </ul>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    

    
    


    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Tasdiqlanganlar </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <?php
                $types_bakalavr_super = 'Test\Model\Type'::where('degree' , 1)->where('contract_type' , 'super')->get();
            ?>
            <?php $__currentLoopData = $types_bakalavr_super; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="<?php echo e(route('amount_type' , ['type' => $item->id])); ?>"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu"><?php echo e($item->name); ?></span></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
            
            
            
            
        </ul>
    </li>

    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/super-magister" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Superkontraktlar <br> (magistr)</span></a></li>
    <?php
        $mag_sup_dirs = 'Test\Model\Direction'::where('type' , 2)->get();
    ?>
    <?php $__currentLoopData = $mag_sup_dirs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $it): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <i data-feather="file-text" class="feather-icon"></i>
                <span class="hide-menu"><?php echo e($it->name); ?> </span>
            </a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="<?php echo e(route('magister_dir_lang_super' , ['dir' => $it->id , 'lang' => 1])); ?>"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="<?php echo e(route('magister_dir_lang_super' , ['dir' => $it->id , 'lang' => 2])); ?>"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

            </ul>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Tasdiqlanganlar <br> magistr </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <?php
                $types_magistr_super = 'Test\Model\Type'::where('degree' , 2)->where('contract_type' , 'super')->get();
            ?>
            <?php $__currentLoopData = $types_magistr_super; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="<?php echo e(route('amount_magistr_type' , ['type' => $item->id])); ?>"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu"><?php echo e($item->name); ?></span></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
            
            
            
            
        </ul>
    </li>


<?php endif; ?>

<?php if(Auth::user()->role == 9): ?>

    <li class="sidebar-item"><a class="sidebar-link active" href="<?php echo e(route('attendance.index')); ?>"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Davomat qilish </span> </a></li>
    <li class="sidebar-item"><a class="sidebar-link active" href="<?php echo e(route('attendance.all')); ?>" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Barcha davomatlar </span> </a>
    </li>
    <li class="sidebar-item"><a class="sidebar-link active" href="<?php echo e(route('group.index')); ?>" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Guruhlar </span> </a></li>

<?php endif; ?>
<?php if(Auth::user()->role == 10): ?>

    <li class="sidebar-item"><a class="sidebar-link active" href="<?php echo e(route('statistic_by_faculty')); ?>"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Fakultetlar bo'yicha </span> </a></li>
    <li class="sidebar-item"><a class="sidebar-link active" href="<?php echo e(route('statistic_six_day')); ?>" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Ohirgi 5 kun </span> </a></li>


<?php endif; ?>
<?php if(Auth::user()->role == 11): ?>
    <li class="sidebar-item <?php if(Request::is('backoffice/payment-admin-students')): ?> selected <?php endif; ?>"><a
            class="sidebar-link  " href="<?php echo e(route('payment_admin.student.index')); ?>" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Barcha talabalar </span> </a>
    </li>
    <li class="sidebar-item"><a class="sidebar-link " href="<?php echo e(route('payment_admin.student.no_checkeds')); ?>"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Tasdiqlanmaganlar </span> </a></li>
    <li class="sidebar-item"><a class="sidebar-link " href="<?php echo e(route('month.index')); ?>" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Stipendiyalar </span> </a></li>
    <li class="sidebar-item"><a class="sidebar-link " href="<?php echo e(route('payment_admin.student_types')); ?>"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Talaba turlari </span> </a></li>
    <li class="sidebar-item"><a class="sidebar-link " href="<?php echo e(route('payment_admin.credits.index')); ?>"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Kreditlar </span> </a></li>
    <li class="sidebar-item"><a class="sidebar-link " href="<?php echo e(route('credit_prices.index')); ?>"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Kredit narxlari </span> </a></li>
<?php endif; ?>
<?php if(Auth::user()->role == 12): ?>
    <li class="sidebar-item <?php if(Request::is('backoffice/ttj-admin/ttj-admin-students')): ?> selected <?php endif; ?>"><a
            class="sidebar-link  " href="<?php echo e(route('ttj_admin.students')); ?>" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Barcha talabalar </span> </a>
    </li>
    <li class="sidebar-item bg-success text-white"><a class="sidebar-link text-white"
                                                      href="<?php echo e(route('ttj_admin.students.type' , ['type' => 1])); ?>"
                                                      aria-expanded="false"><i data-feather="tag"
                                                                               class="feather-icon text-white"></i><span
                class="hide-menu">Ruxsat berilganlar </span> </a></li>
    <li class="sidebar-item bg-orange text-white"><a class="sidebar-link text-white"
                                                     href="<?php echo e(route('ttj_admin.students.type' , ['type' => 0])); ?>"
                                                     aria-expanded="false"><i
                data-feather="tag" class="feather-icon text-white"></i><span
                class="hide-menu">Ruxsat berilmaganlar </span> </a></li>

<?php endif; ?>
<?php if(Auth::user()->role == 13): ?>
    <?php
        $user = \Illuminate\Support\Facades\Auth::user();
        $dirs = \Test\Model\Direction::where('type' , $user->type)->get();
        $types = \Test\Model\Type::where('contract_type' , 'super')->where('degree' , $user->type)->get();
    ?>
    <li class="sidebar-item <?php if(Request::is('backoffice/super')): ?> selected <?php endif; ?>"><a
            class="sidebar-link  " href="<?php echo e(route('super.index')); ?>" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Barchasi </span> </a></li>
    <?php $__currentLoopData = $dirs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <i data-feather="file-text" class="feather-icon"></i>
                <span class="hide-menu"><?php echo e($dir->name); ?> </span>
            </a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="<?php echo e(route('dir_lang_type' , ['dir' => $dir->id , 'lang' => 1])); ?>"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="<?php echo e(route('dir_lang_type' , ['dir' => $dir->id , 'lang' => 2])); ?>"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

            </ul>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <hr>
    <li class="sidebar-item <?php if(Request::is('backoffice/super-index-accepteds')): ?> selected <?php endif; ?>"><a
            class="sidebar-link  " href="<?php echo e(route('super.index.accepteds')); ?>" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Tasdiqlanganlar </span> </a>
    </li>
    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="sidebar-item"><a class="sidebar-link "
                                    href="<?php echo e(route('amount_type' , ['type' => $item->id])); ?>"
                                    aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                    class="hide-menu"><?php echo e($item->name); ?></span></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endif; ?>
<?php if(Auth::user()->role == 14): ?>
    <?php

        $types = \Test\Model\LyceumAmount::all();
    ?>
    <li class="sidebar-item <?php if(Request::is('backoffice/lyceum-admin/super/index')): ?> selected <?php endif; ?>"><a
            class="sidebar-link  " href="<?php echo e(route('super.lyceum.index')); ?>" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Barchasi </span> </a></li>
    <hr>
    <li class="sidebar-item <?php if(Request::is('backoffice/lyceum-admin/super/index-parent-data/0')): ?> selected <?php endif; ?>"><a
            class="sidebar-link  " href="<?php echo e(route('super.lyceum.index.parent.data' , ['status' => 0])); ?>" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Ota onasining <br> ma'lumoti yoki ID <br> yo'qlar </span> </a></li>
    <hr>
    <li class="sidebar-item <?php if(Request::is('backoffice/lyceum-admin/super/index-status/1')): ?> selected <?php endif; ?>"><a
            class="sidebar-link  " href="<?php echo e(route('super.lyceum.index.by_status' , ['status' => 1])); ?>" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Tasdiqlanmaganlar </span> </a></li>
    <hr>
    <li class="sidebar-item <?php if(Request::is('backoffice/lyceum-admin/super/index-status/2')): ?> selected <?php endif; ?>"><a
            class="sidebar-link  " href="<?php echo e(route('super.lyceum.index.by_status' , ['status' => 2])); ?>" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Tasdiqlanganlar </span> </a></li>
     <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="sidebar-item"><a class="sidebar-link "
                                    href="<?php echo e(route('super.lyceum.index.by_amount' , ['amount' => $item->id])); ?>"
                                    aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                    class="hide-menu"><?php echo e($item->name); ?></span></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php if(Auth::user()->role == 15): ?>

    <li class="sidebar-item <?php if(Request::is('backoffice/lyceum-admin/students/index')): ?> selected <?php endif; ?>"><a
            class="sidebar-link  " href="<?php echo e(route('students.lyceum.index')); ?>" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Barchasi </span> </a></li>
    <?php endif; ?>
