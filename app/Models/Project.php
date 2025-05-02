<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supervisor;
use App\Models\Department;
use App\Models\Category;
use App\Models\Student;


class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'abstract',
        'pdf_file',
        'source_code_file',
        'ppt_file',
        'user_id',
        'department_id',
        'year',
        'term',
    ];

    public function user()
    {
        return $this->belongsTo(User::class); // علاقة متعدد إلى واحد
    }

    public function supervisors()
    {
        return $this->belongsToMany(Supervisor::class, 'supervisor_project'); // علاقة متعدد إلى متعدد
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_project');
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
