<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function profiles()
    {
        return $this->belongsToMany('App\Models\Profile');
    }

    public function getManySkillAttribute ()
    {
        return str_replace(',', '', $this->skill);
    }
}
