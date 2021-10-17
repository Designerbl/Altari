<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public function purpose()
    {
        return $this->belongsTo(Purpose::class);
    }

    public function task_type()
    {
        return $this->belongsTo(TaskType::class);
    }
}
