<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Department;

class CategoriesController extends Controller
{
    public function show(Category $category, Department $department)
    {
        try {
            // $projects = $category->projects()->get();
            $projects = $category->projects()->where('department_id', $department->id)->get();
            if (!$category) {
                abort(404); // إعادة توجيه إلى صفحة "Page Not Found"
            }

            // جلب السنوات المتوفرة من المشاريع
            $years = $projects->pluck('year')->unique();

            // تمرير التصنيف والمشاريع والقسم والسنوات إلى العرض
            return view('ProjectsView', compact('category', 'projects', 'department', 'years'));
        } catch (\Exception $e) {
            return 'page not found';
        }
    }
}
