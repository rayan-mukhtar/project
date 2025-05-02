<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'name', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
