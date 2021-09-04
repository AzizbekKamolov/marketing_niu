<?php $__env->startSection('content'); ?>
<style type="text/css">
     *{
      box-sizing: content-box !important;
    }
    .error{
        color: red;
    }
    input {
        width: 80% !important;
    }
    table.blueTable {
  border: 1px solid #000000;
  background-color: #FFFFFF;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
    padding: 10px;
}
table.blueTable tbody td {
  font-size: 13px;
    padding: 10px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}
table.blueTable thead {
  background: #FFFFFF;
  border-bottom: 1px solid #000000;
}
table.blueTable thead th {
  font-size: 13px;
  font-weight: bold;
  color: #000000;
  border-left: 1px solid #000000;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot td {
  font-size: 14px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #000000;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
    .lll{
        margin-top: 10px;
    }



</style>
<?php
    function yuzlik($yuz){
          $yuz = intval($yuz);
          $ar_mln = array(
          '0' => '',
          '1' => 'ming',
          '2' => 'million'
        );
        $ar_son = array(
          '0' => '',
          '1' => 'bir',
          '2' => 'ikki',
          '3' => 'uch',
          '4' => 'to`rt',
          '5' => 'besh',
          '6' => 'olti',
          '7' => 'yetti',
          '8' => 'sakkiz',
          '9' => 'to`qqiz',
        );
        $ar_on = array(
          '0' => '',
          '1' => 'o`n',
          '2' => 'yigirma',
          '3' => 'o`ttiz',
          '4' => 'qirq',
          '5' => 'ellik',
          '6' => 'oltmish',
          '7' => 'yetmish',
          '8' => 'sakson',
          '9' => 'to`qson'
        );
        if ($yuz > 99) {
          $birlar = $yuz%10;
          $bb = $yuz/10;
          $onlar = $bb%10;
          $bb = $bb/10;
          $yuzlar = $bb%10;
          $text = $ar_son[$yuzlar].' yuz '.$ar_on[$onlar].' '.$ar_son[$birlar];
        }
        elseif($yuz<100 && $yuz > 9){
          $birlar = $yuz%10;
          $bb = $yuz/10;
          $onlar = $bb%10;
          $text = $ar_on[$onlar].' '.$ar_son[$birlar];
        }
        elseif($yuz>0 && $yuz < 10){
          $text = $ar_son[$yuz];
        }
        else{
          $text = '';
        }

          return $text;
}
    function convert_to_word($number){
        $result = number_format($number , '2');
        $result = explode('.', $result);
        $bir = explode(',' , $result[0]);
        $re_bir = array_reverse($bir);
        $ar_mln = array(
          '0' => '',
          '1' => 'ming',
          '2' => 'million',
          '3' => 'milliard'
        );
        $ar_son = array(
          '0' => '',
          '1' => 'bir',
          '2' => 'ikki',
          '3' => 'uch',
          '4' => 'to`rt',
          '5' => 'besh',
          '6' => 'olti',
          '7' => 'yetti',
          '8' => 'sakkiz',
          '9' => 'to`qqiz',
        );
        $ar_on = array(
          '0' => '',
          '1' => 'o`n',
          '2' => 'yigirma',
          '3' => 'o`ttiz',
          '4' => 'qirq',
          '5' => 'ellik',
          '6' => 'oltmish',
          '7' => 'yetmish',
          '8' => 'sakson',
          '9' => 'to`qson'
        );

        $ar_text = [];
        $i = 0;
        foreach ($re_bir as $key => $value) {
          // echo $value%10;
          if (yuzlik($value) != '') {

          $ar_text[$i] = yuzlik($value).' '.$ar_mln[$key].' ';
          }
          else{
            $ar_text[$i] = '';
          }
          // echo yuzlik($value).' '.$ar_mln[$key].' ' ;
          $i++;
        }
        $ress = array_reverse($ar_text);
        $ress = implode(' ', $ress).' so`m ';
        return $ress;
    }


//echo $ress;
?>
    <div class="containerform" style="">
        <div class="row" style="margin-left: 0px; margin-right: 0px;">
            <div class="signup-content" style="margin: 0px;">
                <div class="signup-form" style="width: 100%; ">
                    <h2 class="form-title">
                        <?php echo e($student->fio()); ?>

                    </h2><br>
                    <div style="width: 100%; text-align: center">
                    <p><b>(<?php echo e($student->get_type_name()); ?>)</b></p>

                    </div>
                     <div style="width: 100%; text-align: center; align-items: center">
                         <span class="error">
                             Eslatma!
                         </span>
                         <p style="max-width: 500px; text-align: center; margin-left: auto; margin-right: auto">
                             Tizim sinov rejimida ishlayotganligi uchun ma`lumotlaringizda biron bir xatolikni ko`rsangiz marketing bo`limiga xabar berishingizni so`raymiz.
                         </p>
                    </div>
                    <div style="">
                        <div class="lll border p-3 ">
                            <b><p>Shartnoma pul miqdorlari</p></b>
                            <hr>
                            <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <p>
                                    <?php echo e($price->description); ?> -
                                    <b>
                                        <?php if($loop->last && $student->status_new == 20 && $student->course == 4): ?>
                                            <?php
                                            $chiq = $price->amount;
                                            $chiq = $chiq-941600;
                                            ?>
                                            <?php echo e(number_format($chiq , 1)); ?>

                                        <?php else: ?>
                                            <?php echo e(number_format($price->amount , 1)); ?>

                                         <?php endif; ?>
                                    </b>
                                <hr>
                                </p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            if ($student->status_new == 20 && $student->course == 4){
                                $umumiy_tolov = $all_price->sum('amount')-941600;
                            }
                            else{
                                $umumiy_tolov = $all_price->sum('amount');

                            }
                            ?>
                                <p style="text-align: center">
                                    <b>2020-2021-o`quv yili uchun umumiy to`lov summasi</b><br>
                                    <b><?php echo e(number_format($umumiy_tolov , 1)); ?></b>

                                </p>
                        </div>
                        <div class="lll border p-3 ">
                            <b><p>To'lovlar tarixi</p></b>
                            <hr>
                            <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p>

                                    <b>
                                        <b><?php echo e(number_format($payment->amount , 1)); ?> so'm</b>
                                        <?php echo e($payment->description); ?>

                                    </b>
                                <hr>
                                </p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="border p-3">
                            <p>Umumiy to'lanishi kerak bo'lgan summa: <b><?php echo e(number_format($umumiy_tolov , 1)); ?> so'm</b></p>
                            <?php if($prices): ?>
                             <p>
                                <b>(<?php echo e(convert_to_word($umumiy_tolov)); ?>)</b>
                            </p>
                            <?php endif; ?>
                            <hr>
                            <p>Umumiy to'langan summa: <b><?php echo e(number_format($payments->sum('amount') , 1)); ?> so'm</b></p>
                            <?php if($payments): ?>
                             <p>
                                <b>(<?php echo e(convert_to_word($payments->sum('amount'))); ?>)</b>
                            </p>
                            <?php endif; ?>

                            <hr>
                            <p>Qolgan qarz: <br></p>
                                <?php
                                $payms = $payments->sum('amount');
                                ?>
                                <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->last && $student->status_new == 20 && $student->course == 4): ?>
                                        <?php
                                        $pr->amount = $pr->amount-941600;
                                        ?>
                                    <?php endif; ?>
                                    <?php
                                    $qarz = $pr->amount - $payms;
                                    $ortgan = $pr->amount - $payms;
                                    if ( $qarz> 0){
                                        $ortgan = 0;
                                    }
                                    elseif($qarz < 0){
                                        $qarz = 0;
                                        $ortgan = $ortgan*(-1);
                                    }
                                        $payms = $ortgan;

                                    ?>
                                        <p><?php echo e($pr->description); ?> uchun:  <b><?php echo e(number_format($qarz , 1)); ?> so'm</b></p>
                                    <?php if($qarz): ?>
                                     <p>
                                        <b>(<?php echo e(convert_to_word($qarz)); ?>)</b>
                                    </p>
                                    <?php endif; ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <hr>

                            <p>Ortgan pul miqdori: <b><?php echo e(number_format($ortgan , 1)); ?> so'm</b></p>
                            <?php if($ortgan): ?>
                            <p>
                                <b>(<?php echo e(convert_to_word($ortgan)); ?>)</b>
                            </p>
                            <?php endif; ?>


                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script type="text/javascript">
    $('.form-submit').click(function(){

            alert("khg");
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.marketing2021', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>