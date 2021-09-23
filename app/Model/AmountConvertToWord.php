<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AmountConvertToWord extends Model
{
    public function convert_to_word($number)
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
            if ($this->yuzlik($value) != '') {

                $ar_text[$i] = $this->yuzlik($value) . ' ' . $ar_mln[$key] . ' ';
            } else {
                $ar_text[$i] = '';
            }
            // echo yuzlik($value).' '.$ar_mln[$key].' ' ;
            $i++;
        }
        $ress = array_reverse($ar_text);
        $ress = implode(' ', $ress);
        return $ress;
    }

    public function yuzlik($yuz)
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


}