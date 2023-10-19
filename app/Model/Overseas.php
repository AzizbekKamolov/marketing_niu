<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;

class Overseas extends Model
{
    protected $table = 'overseas';
    protected $fillable = [];
    public $timestamps = true;

    public function getSpeciality()
    {
        $lang = StudyLanguage::find($this->study_language);
        $sp = Spec::where('lang',$lang->lang)->first()->first();
        return $sp->name;
    }
    public function getSpec_code()
    {
        $lang = StudyLanguage::find($this->study_language);
        $sp = Spec::where('lang',$lang->lang)->first();
        return $sp->code;
    }
    public function getForeignLang()
    {
        $language = Language::find($this->foreign_lang);
        return $language->name;
    }
    public function getStudyLang()
    {
        $language = StudyLanguage::find($this->study_language);
        return $language->name;
    }
    public function getHighEducation()
    {
        if(!empty($this->h_educ_univer_name))
            return "Bor";
        else return "Yo'q";
    }
    public function getHighEducationName()
    {
        if(!empty($this->h_educ_univer_name))
            return $this->h_educ_univer_name;
        else return "";
    }
    public function getDegree()
    {
        if(empty($this->h_educ_univer_name))
            return "O'rta maxsus";
        else return "Oliy";
    }
    public function getBirthPlace()
    {
        $country = Country::where('CountryID',$this->birth_place)->first();
        return $country->name;
    }
    public function getCitizenship()
    {
        $country = Country::where('CountryID',$this->citizenship)->first();
        return $country->name;
    }
    public function getStatus()
    {
        if($this->status == 0)
            return "<span style='color:blue;'>"."Yangi"."</span>";
        if($this->status == 1)
            return "<span class='text-success'>"."Qabul qilindi"."</span>";
        if($this->status == 2)
            return "<span class='text-danger'>"."Rad etildi"."</span>";
    }
    public function getGender()
    {
        if(!$this->gender)
            return 'Erkak';
        if($this->gender)
            return "Ayol";
    }
}
