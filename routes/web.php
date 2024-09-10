<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PusriController;
use App\Http\Controllers\CodeController;
use App\Models\Code;
use App\Models\Pusri;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/login', [HomeController::class, 'authenticate']); 
Route::get('/dashboard', [PusriController::class, 'dashboard'])->name('dashboard');  
Route::get('/tables', [PusriController::class, 'tables']);
Route::get('/tables/{project_id}/{code_id}', [PusriController::class, 'tables'])->name('tables'); 
Route::get('/code/{project_id}', [PusriController::class, 'code'])->name('codes');
Route::post('/new-data', [CodeController::class, 'add_code']);
Route::post('/upload-data', [CodeController::class, 'upload_attachment']);
Route::post('/new-code', [CodeController::class, 'add_code2']);
Route::post('/new-project', [PusriController::class, 'add_project']);
Route::post('/upload-file', [CodeController::class, 'upload_file']);
Route::post('/edit-code', [CodeController::class, 'edit_code']);
Route::post('/delete-code/{id}', [CodeController::class, 'delete_code']);