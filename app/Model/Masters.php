<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Masters extends Model
{
    protected $table = "masters";
    
    public function getLang()
    {
        $lang = StudyLanguage::find($this->course_lang);
        
        return $lang->name;
    }
    
     public function getSpeciality()
    {
        $lang = StudyLanguage::find($this->course_lang);
        $sp = Course::find($this->course_id);
        return $sp->name;
    }
    
    public function getSpec_code()
    {
        $lang = StudyLanguage::find($this->course_lang);
        $sp = Course::find($this->course_id);
        return $sp->code;
    }
    public function getForeignLang()
    {
        $language = Language::find($this->foreign_lang);
        return $language->name;
    }
    public function getGender()
    {
        if(!$this->gender)
            return 'Erkak';
        if($this->gender)
            return "Ayol";
    }
    public function getBirthPlace()
    {
        $contry = Country::where('CountryID',$this->birth_place)->first();
        return $contry->name;
    }
    public function getNationality()
    {
        $contry = Nationality::where('id',$this->nationality)->first();
        return $contry->name;
    }
    public function getCitizenship()
    {
        $contry = Country::where('CountryID',$this->citizenship)->first();
        return $contry->name;
    }
    public function getLangCert()
    {
        $cert = Certificate::find($this->lang_cert_type);
        return $cert->name;
    }
    public function getStatus()
    {
        if($this->status==0)
        {
            return "Hujjat to'ldirilgan";
        }
    }
    public function passportFile()
    {
        $filename = $this->passport_copy;
        return asset('/storage/app/public/bg.jpg');
    }
    public function getCourse()
    {
        $course = Course::find($this->course_id);
        return $course->name;
    }
    public function getCourseLang()
    {
        $lang = StudyLanguage::find($this->course_lang);
        return $lang->name;
    }
    public function foreignLang()
    {
        $lang = Language::find($this->foreign_lang);
        return $lang->name;
    }
    public function getCerificate()
    {
        $lang = Certificate::find($this->lang_cert_type);
        return $lang->name;
    }
    public function getPrettyPhone($phone)
    {
        if(strlen($phone) == 12) {
            $string = '';
            $phone = str_replace(' ', '', $phone);
            $phone = str_replace('+', '', $phone);
            $country_code = substr($phone, 0, 3);
            $local_code = substr($phone, 3, 2);
            $rest = substr($phone, 5, 12);
            return '+'.$country_code . ' ' . $local_code . ' ' . $rest;
        } else return $phone.' ';
    }
}