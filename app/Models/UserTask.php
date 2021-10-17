<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    use HasFactory;

    public function option()
    {
        return $this->belongsTo(Option::class);
    }

    public function processing_status()
    {
        return $this->belongsTo(ProcessingStatus::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
