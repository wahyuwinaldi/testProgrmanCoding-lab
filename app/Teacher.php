<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = ['name', 'nip'];

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}