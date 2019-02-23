<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name', 'profession',
    ];


    public function getProfessionAttribute()
    {
        switch ($this->profession) {
            case 0:
                $text = '学生';
                break;
            case 1:
                $text = '会社員';
                break;
            case 2:
                $text = 'フリーター';
        }
        return $text;
    }

    public function profileSkills ()
    {
        return $this->belongsToMany();
    }
}
