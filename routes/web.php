<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// })->name('index');

Route::get('/', [DepartmentController::class, 'index'])->name('departments.index');

Route::get('/departments/{department}', [DepartmentController::class, 'show'])->name('departments.show');

Route::get('/categories/{category}/{department}', [CategoriesController::class, 'show'])->name('categories.show');

Route::get('/project/{id}', [ProjectController::class, 'view'])->name('view.project');

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/download/{fileName}/{id}', [ProjectController::class, 'download'])->name('download.project.file');

Route::get('/view/{fileName}', [ProjectController::class, 'viewPdf'])->name('view.project.file');


Route::get('/projects/filter/{departmentId}/{categoryId}', [ProjectController::class, 'advancedSearch'])->name('advancedSearch');




Route::get('/show-image/{id}', function ($id) {
    $imagePath = DB::table('images')->where('id', $id)->value('image_path');

    if (file_exists($imagePath)) {
        return response()->file($imagePath);
    } else {
        abort(404, 'File not found.');
    }
});









// Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');















// Software Engineering
// Route::get('/softwareEngineering', function () {
//     return view('SoftwareEngineering');
// })->name(name: 'swe');

// Route::get('/web', function () {
//     return view('softwareEngineeringProjects.webApp');
// })->name(name: 'web');


// Route::get('/mobileApp', function () {
//     return view('softwareEngineeringProjects.mobileApp');
// })->name(name: 'mobileApp');


// Route::get('/dataBase', function () {
//     return view('softwareEngineeringProjects.dataBase');
// })->name(name: 'db');


// Route::get('/ai', function () {
//     return view('softwareEngineeringProjects.ai');
// })->name(name: 'ai');



// Network Engineering

// Route::get('/NetworkEngineering', function () {
//     return view('NetworkEngineering');
// })->name('nete');



// Route::get('/sdn', function () {
//     return view('networkingProjects.sdn');
// })->name(name: 'sdn');


// Route::get('/sdWan', function () {
//     return view('networkingProjects.sd_Wan');
// })->name(name: 'sdwan');


// Route::get('/security', function () {
//     return view('networkingProjects.security');
// })->name(name: 'security');



// Route::get('/cisco', function () {
//     return view('networkingProjects.cisco');
// })->name(name: 'cisco');




// // Control Engineering

// Route::get('/controlEngineering', function () {
//     return view('controlEngineering');
// })->name('ctrle');




// Route::get('/controlEngineering', function () {
//     return view('controlEngineering');
// })->name('ctrle');


// Route::get('arduino', function () {
//     return view('controlprojects.arduino');
// })->name('arduino');


// Route::get('/classicalControl', function () {
//     return view('controlprojects.classicalControl');
// })->name('classicalControl');


// Route::get('/iot', function () {
//     return view('controlprojects.iot');
// })->name('iot');




// Route::get('/projects', function () {
//     return view('ProjectsView');
// })->name('PV');
//////////////////////////////////////////////////////////////////////////////

// Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');




// Route::get('/Project', function () {
//     return view('SpecificProject');
// });
