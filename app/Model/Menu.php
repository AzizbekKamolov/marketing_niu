<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;

class Menu
{
    public static function getLocaleName($lan)
    {
        if($lan=='uz')
            return "O'zbekcha";
        if($lan=='ru')
            return "Русский";
        if($lan=='en')
            return "English";
    }

}
