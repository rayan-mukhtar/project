<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        try {
            $departments = Department::with('categories')->get();
            return view('index', compact('departments'));
        } catch (\Exception $e) {
            return 'page not found';
        }
    }

    public function show(Department $department)
    {
        try {
            $categories = $department->categories()->with('projects')->get();
            if (!$department) {
                abort(404); // إعادة توجيه إلى صفحة "Page Not Found"
            }
            return view('SoftwareEngineering', compact('department', 'categories'));
        } catch (\Exception $e) {
            return 'page not found';
        }
    }
}
