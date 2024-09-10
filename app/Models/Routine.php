<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Routine extends Model
{
    use HasFactory;

    public function batch():BelongsTo
    {
        return $this->belongsTo(Batch::class);
    }
    public function course_module():BelongsTo
    {
        return $this->belongsTo(CourseModule::class);
    }
}
