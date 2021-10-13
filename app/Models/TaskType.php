<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskType extends Model
{
    use HasFactory;

    public function userTask()
    {
        return $this->belongsTo(UserTask::class, 'task_type_id', 'id');
    }
}
