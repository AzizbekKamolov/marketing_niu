<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Test\Model\Direction;
use Test\Model\Lang;


class Result extends Model
{
    protected $table = "result_structure_ready";
    public $timestamps = false;


    public function getStatus()
    {
        if ($this->status == 0) {
            return "Status nol";
        }
        if ($this->status == 1) {
            return "Status 1";
        }
    }

    public function dir()
    {
        $dir = Direction::where('id', $this->dir)->where('status', 1)->first();
        return $dir;
    }

    public function lang()
    {
        $dir = Lang::where('id', $this->lang)->where('status', 1)->first();
        return $dir;
    }

    public function selected_dirs()
    {
        $dir_ids = \GuzzleHttp\json_decode($this->dir_array);
        $my_array = [];
        $eduTypes = json_decode($this->edu_types);
        foreach (json_decode($this->dir_array) as $key => $t) {
            $myDir = Direction::find($t);
            $eduType = EduType::find($eduTypes[$key]);
            $myDir->eduTypeName = $eduType->name;
            $myDir->eduTypeId = $eduType->id;
            $my_array[] = $myDir;
        }
        return $my_array;
    }

    public function status_petition()
    {
        $result = [];
        if (!Super::where('passport_serial', $this->passport_serial)->where('passport_number', $this->passport_number)->where(function ($query) {
            if ($this->comment == 'perevod') {
                $query->where('comment', 'perevod');
            }
        })->exists()) {
            $result['status'] = 0;
        } else {
            $super = Super::where('passport_serial', $this->passport_serial)->where('passport_number', $this->passport_number)->where(function ($query) {
                if ($this->comment == 'perevod') {
                    $query->where('comment', 'perevod');
                }
            })->first();
            if ($super->status == 1) {
                $result['status'] = 1;
                $result['super'] = $super;
            } elseif ($super->status == 2) {
                $type = Type::find($super->amount_id);
                $result['status'] = 2;
                $result['super'] = $super;
                $result['type'] = $type;
            } elseif ($super->status == 3) {
                $student = StudentPayment::where('passport_seria', $this->passport_serial)->where('passport_number', $this->passport_number)->first();
                $type = Type::find($student->status_new);
                $result['status'] = 3;
                $result['super'] = $super;
                $result['type'] = $type;
                $result['data'] = $student;
            }
        }
        return $result;
    }


}
