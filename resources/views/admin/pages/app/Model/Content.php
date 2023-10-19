<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Content extends Model
{
    protected $table = "content";
    protected $fillable = [
        'name_uz','name_ru','content_uz','content_ru','topic_id'
    ];
    public $timestamps = true;

    public function topic()
    {
        return $this->belongsTo('Test\Model\Topic');
    }
    public function getCreator()
    {
        if(User::where("id",$this->created_by)->exists())
            return User::find($this->created_by)->name;
        else
            return "Aniqlanmadi :(";
    }
    public function getUpdater()
    {
        if(User::where("id",$this->updated_by)->exists())
            return User::find($this->updated_by)->name;
        else
            return "Aniqlanmadi :(";
    }
    public function getStatus()
    {
        if($this->status==1)
            return "Aktiv";
        else return "Passiv";
    }
    public function getContentRu()
    {
            return Storage::url($this->content_ru);
    }
    public function getContentUz()
    {
            return Storage::url($this->content_uz);
    }
}
