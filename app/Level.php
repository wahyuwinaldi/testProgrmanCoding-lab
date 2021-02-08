<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
