<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Models\Student;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.home');
});
// Route::get('/contact', [AdminController::class, 'contact'])->name('contact');
Route::get('/contact/{id}/{name}', [AdminController::class, 'contact'])->name('contact');
Route::get('/home', [AdminController::class, 'home'])->name('home');

Route::get('/student', [StudentController::class, 'viewStudents'])->name('view');
Route::get('/add', [StudentController::class, 'add'])->name('add');
Route::post('/add', [StudentController::class, 'add'])->name('add');
    
// Route::get('/student/{id}', [StudentController::class, 'viewStudents'])->name('view');

// Delete
Route::get('add/{id}',function($id){
    $student=Student::find($id);
    $student->delete();
    return redirect('student');
});
Route::get('edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::post('edit/{id}', [StudentController::class, 'edit'])->name('edit');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

