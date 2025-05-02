<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'qualification',
        'email',
        'phone',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'supervisor_project'); // علاقة متعدد إلى متعدد
    }
}
