@extends('layouts.marketing2021')
@section('content')
    <style type="text/css">
        * {
            box-sizing: content-box !important;
        }

        .error {
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

        table.blueTable tfoot .links a {
            display: inline-block;
            background: #000000;
            color: #FFFFFF;
            padding: 2px 8px;
            border-radius: 5px;
        }

        .lll {
            margin-top: 10px;
        }


    </style>
    <?php
    function yuzlik($yuz)
    {
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
            $birlar = $yuz % 10;
            $bb = $yuz / 10;
            $onlar = $bb % 10;
            $bb = $bb / 10;
            $yuzlar = $bb % 10;
            $text = $ar_son[$yuzlar] . ' yuz ' . $ar_on[$onlar] . ' ' . $ar_son[$birlar];
        } elseif ($yuz < 100 && $yuz > 9) {
            $birlar = $yuz % 10;
            $bb = $yuz / 10;
            $onlar = $bb % 10;
            $text = $ar_on[$onlar] . ' ' . $ar_son[$birlar];
        } elseif ($yuz > 0 && $yuz < 10) {
            $text = $ar_son[$yuz];
        } else {
            $text = '';
        }

        return $text;
    }
    function convert_to_word($number)
    {
        $result = number_format($number, '2');
        $result = explode('.', $result);
        $bir = explode(',', $result[0]);
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

                $ar_text[$i] = yuzlik($value) . ' ' . $ar_mln[$key] . ' ';
            } else {
                $ar_text[$i] = '';
            }
            // echo yuzlik($value).' '.$ar_mln[$key].' ' ;
            $i++;
        }
        $ress = array_reverse($ar_text);
        $ress = implode(' ', $ress) . ' so`m ';
        return $ress;
    }


    //echo $ress;
    ?>
    <div class="containerform" style="">
        <div class="row" style="margin-left: 0px; margin-right: 0px;">
            <div class="signup-content" style="margin: 0px;">
                <div class="signup-form" style="width: 100%; ">
                    <h2 class="form-title">
                        {{$student->fio()}}
                    </h2><br>
                    <div style="width: 100%; text-align: center">
                        <p><b>({{$student->get_type_name()}})</b></p>

                    </div>
                    <div style="width: 100%; text-align: center; align-items: center">
                         <span class="error">
                             Eslatma!
                         </span>
                        <p style="max-width: 500px; text-align: center; margin-left: auto; margin-right: auto">
                            Tizim sinov rejimida ishlayotganligi uchun ma`lumotlaringizda biron bir xatolikni ko`rsangiz
                            marketing bo`limiga xabar berishingizni so`raymiz.
                        </p>
                    </div>
                    <div style="">
                        <div class="lll border p-3 ">
                            <p style="text-align: center">
                                <b>2021-2022-o`quv yili uchun umumiy to`lov summasi</b><br>
                                @if($last_payment)
                                        <b>{{number_format($last_payment->need_payment , 1)}}</b>
                                    @endif

                            </p>
                        </div>
                        <div class="lll border p-3 ">
                            <b><p>To'lovlar tarixi</p></b>
                            <hr>
                            @foreach($payments as $payment)
                                <p>

                                    <b>
                                        <b>{{number_format($payment->amount , 1)}} so'm</b>
                                        {{$payment->description}}
                                    </b>
                                <hr>
                                </p>
                            @endforeach
                        </div>
                        <div class="border p-3">
                            <p>Umumiy to'lanishi kerak bo'lgan summa:
                                @if($last_payment)
                                <b>{{number_format($last_payment->need_payment , 1)}}</b>
                                    @endif</p>
                            @if($last_payment)
                                <p>
                                    <b>({{convert_to_word($last_payment->need_payment)}})</b>
                                </p>
                            @endif
                            <hr>
                            <p>Umumiy to'langan summa: <b>{{number_format($payments->sum('amount') , 1)}} so'm</b></p>
                            @if($payments)
                                <p>
                                    <b>({{convert_to_word($payments->sum('amount'))}})</b>
                                </p>
                            @endif

                            <hr>


                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection

@section('js')

    <script type="text/javascript">
        $('.form-submit').click(function () {

            alert("khg");
        });

    </script>
@endsection
