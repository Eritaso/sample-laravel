<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name', 'profession',
    ];

    public function getDipsProfessionAttribute()
    {
        switch ($this->profession) {
            case 0:
                $profession = '学生';
                break;
            case 1:
                $profession = '会社員';
                break;
            case 2:
                $profession = 'フリーター';
        }
        return $profession;
    }

    public function profileSkills ()
    {
        return $this->belongsToMany('App\Models\Skill', 'profiles_skills', 'profile_id', 'skill_id');
    }
}
