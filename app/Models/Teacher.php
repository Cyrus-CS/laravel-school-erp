<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    public function contracts() : HasMany{
        return $this->hasMany(TeacherContract::class);
    }
}