<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    use HasFactory;

    public function file()
    {
        return $this->hasMany(TaskType::class, 'task_type_id', 'id');
    }
}
