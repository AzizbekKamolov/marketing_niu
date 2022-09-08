<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .right {
            width: 50%;
            text-align: right;
        }

        .left {
            /*width: 50%;*/
            text-align: right;
            width: 300px;
            background-color: red;
        }

        .all {
            padding-right: 20px;
            padding-left: 20px;
            line-height: 20px;
        }

        .flex {
            display: flex;
            justify-content: flex-end;
        }

        .center {
            text-align: center;
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .w-50 {
            width: 50%;

        }

        .date-fio {
            padding-top: 50px;
        }

        * {
            font-family: DejaVu Sans;
        }

        .jj {
            background-color: blue;
            display: flex;
            text-align: right;
        }

        .w-100 {
            width: 100%;
        }
    </style>
</head>

<body>
<div class="all">
    <div style="display: flex; justify-content: flex-end; width: 100%; background-color: blue;">
        
        <div style="padding-left: 40%; text-align: right">
            <p>
                Toshkent davlat yuridik universiteti <br>
                rektori A.D.Tashkulov ga <br>
                

                <b><?php echo e($data->last_name); ?> <?php echo e($data->first_name); ?> <?php echo e($data->middle_name); ?></b> dan <br>
                telefon : <br>
                <?php if($data->tel1): ?>
                    <b><?php echo e($data->tel1); ?></b>, <br>
                <?php endif; ?>
                <?php if($data->tel2): ?>
                    <b><?php echo e($data->tel2); ?></b>, <br>
                <?php endif; ?>
            </p>
        </div>
    </div>
    <br>


    <div class="center">
        ARIZA
    </div>

    <div class="body" style="margin-bottom: 50px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Men abituriyent
        <b><?php echo e($data->last_name); ?> <?php echo e($data->first_name); ?> <?php echo e($data->middle_name); ?></b> 2021/2022 o'quv yilida Toshkent
        davlat yuridik universiteti
        <b> <?php if($data->type==1): ?> <?php echo e("bakalavriyatining"); ?> <?php elseif($data->type==2): ?> <?php echo e("magistaturasining "); ?> <?php elseif($data->type == 3): ?>  <?php endif; ?> </b>
        <b> <?php if($data->type==1): ?><?php echo e($data->dir()->name); ?> <?php echo e("ta`lim yo'nalishiga"); ?> <?php elseif($data->type == 2): ?> <?php echo e($data->dir()->name); ?> <?php echo e("mutahasisligiga"); ?> <?php elseif($data->type == 3): ?> <?php echo e($data->dir()->name); ?> <?php echo e("yo`nalishiga"); ?> <?php endif; ?> </b>
        o'qishga kirish maqsadida test sinovlarini topshirdim va <b><?php echo e($data->ball); ?></b> ball to'plagan holda
        <b><?php if($data->lang == 1): ?> o'zbek <?php elseif($data->lang == 2): ?> rus <?php endif; ?></b> guruhiga talabalikka tavsiya etilmadim.
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php if($data->type==1): ?> <?php echo e("Bakalavriyat"); ?> <?php elseif($data->type == 2): ?> <?php echo e("Magistratura bosqichida "); ?> <?php else: ?> <?php echo e("sirtqi"); ?> <?php endif; ?>
        ta`lim olishga bo'lgan xohishim va tabaqalashtirilgan to'lov-kontraktni to'lay olish imkonim mavjudligidan kelib
        chiqib, meni Toshkent davlat yuridik universiteti
        <b> <?php if($data->type==1): ?> <?php echo e("bakalavriyatiga"); ?> <?php elseif($data->type == 2): ?> <?php echo e("magistraturasiga "); ?> <?php else: ?> <?php echo e("sirtqi"); ?> <?php endif; ?> </b>
        tabaqalashtirilgan to'lov-kontrakt asosida o'qishga qabul qilishingizni so'rayman.
        To'lovni o'z vaqtida amalga oshirishga kafolat beraman.
    </div>


    <div class="date-fio" style="display: flex; padding-top: 50px;">
        <div class="" style="width: 200px; float: left;">
            <div class="date"><b><?php echo e(date('d-m-Y')); ?></b></div>
        </div>
        <br>
        <div class="" style="float: right;">
            <div class="fio"><b><?php echo e($data->last_name); ?> <?php echo e($data->first_name); ?> <?php echo e($data->middle_name); ?></b></div>
        </div>


    </div>

</div>


</body>
</html>