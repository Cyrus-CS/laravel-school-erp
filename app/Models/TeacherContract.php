<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeacherContract extends Model
{
    public function teacher() : BelongsTo{
        return $this->belongsTo(Teacher::class);
    }

}