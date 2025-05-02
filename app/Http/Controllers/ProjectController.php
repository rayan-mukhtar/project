<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;


class ProjectController extends Controller
{
    public function index()
    {
        try {
            $projects = Project::all();
            $departments = Department::all();
            $categories = Category::all();
            return view('ProjectsView', compact('projects', 'departments', 'categories'));
        } catch (\Exception $e) {
            return 'page not found';
        }
    }

    public function view($id)
    {
        try {
            $project = Project::findOrFail($id);
            $project->students;
            // dd($project);
            return view('SpecificProject', compact('project'));
        } catch (\Exception $e) {
            return 'page not found';
        }
    }


    public function download($fileName, $id)
    {
        try {
            $project = Project::findOrFail($id);
            $filePath = urldecode($fileName);

            $project->increment('downloads_count');

            return response()->download($filePath);
        } catch (\Exception $e) {
            return 'page not found';
        }
    }

    public function viewPdf($fileName)
    {
        try {

            $filePath = urldecode($fileName);
            return response()->file($filePath, [
                'Content-Type' => 'application/pdf', // تحديد نوع المحتوى
            ]);
        } catch (\Exception $e) {

            return 'page not found';
        }
    }

    public function advancedSearch(Request $request, $departmentId, $categoryId)
    {
        try {
            $department = Department::findOrFail($departmentId);
            $category = Category::findOrFail($categoryId);

            // بناء الاستعلام لفلترة المشاريع
            $query = Project::where('department_id', $departmentId)
                ->whereHas('categories', function ($query) use ($categoryId) {
                    $query->where('category_id', $categoryId);
                });

            // إضافة الفلاتر بناءً على السنة والفصل
            if ($request->filled('year')) {
                $query->where('year', $request->year);
            }
            if ($request->filled('term')) {
                $query->where('term', $request->term);
            }
            if ($request->has('sort') && $request->sort === 'most_downloaded') {
                $query->orderBy('downloads_count', 'desc');
            }
            // جلب المشاريع بعد تطبيق الفلاتر
            $projects = $query->get();
            // dd($request->all());            // جلب السنوات المتوفرة
            $years = Project::select('year')->distinct()->pluck('year');

            // عرض المشاريع مع الفلاتر المتاحة
            return view('ProjectsView', compact('projects', 'years', 'department', 'category'));
        } catch (\Exception $e) {
            return 'page not found';
        }
    }
}
