<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\QueController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/indexx', function () {
    return view('indexx');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/reports', function () {
    return view('reports');
});
Route::get('/guidely', function () {
    return view('guidely');
});
Route::get('/main', function () {
    return view('main');
});

Route::get('/main-3', function () {
    return view('main-3');
});
Route::get('/calendar-2', function () {
    return view('calendar-2');
});
Route::get('/timeline', function () {
    return view('timeline');
});

Route::get('/task', function () {
    return view('task');
});


Route::get('/settings', function () {
    return view('settings');
});

Route::get('/display', function () {
    return view('display');
});

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/display1', function () {
    return view('display1');
});
Route::get('/inspections', function () {
    return view('inspections');
});
// Route::get('/templates', function () {
//     return view('templates');
// });
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/issues', function () {
    return view('issues');
});

Route::get('/newtemp', function () {
    return view('newtemp');
});

Route::get('/xyz', function () {
    return view('abc');
});

Route::resource('tasks', TasksController::class);
Route::get('/index', [TasksController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TasksController::class, 'store'])->name('tasks.store');
Route::get('/create', [TasksController::class, 'create'])->name('tasks.create');

Route::get('list', [TasksController::class, 'myproject'])->name('task.submit');
Route::get('firebase','FirebaseController@index');
Route::get('firebase-get-data', 'FirebaseController@getData');

Route::get('/list1', [FirebaseController::class, 'retrieve'])->name('list.display');
Route::get('/list2', [FirebaseController::class, 'retrieve2'])->name('list.display');
Route::get('/list3', [FirebaseController::class, 'retrieve3'])->name('list.display');
Route::get('/list4', [FirebaseController::class, 'retrieve4'])->name('list.display');
Route::get('/reports', [FirebaseController::class, 'record'])->name('reports.display');

Route::post('/report', [FirebaseController::class, 'display'])->name('report.display');
Route::post('/templateEdit', [QueController::class, 'question'])->name('templates.edit');
Route::get('/templates2', [QueController::class, 'question2'])->name('templates.display');
Route::get('/templates3', [QueController::class, 'question3'])->name('templates.display');

<<<<<<< Updated upstream
Route::post('/questionSave', [QueController::class, 'store'])->name('tasks.store');
=======
Route::post('/questionSave', [QueController::class, 'store'])->name('question.store');
Route::post('/questionEdit', [QueController::class, 'edit'])->name('question.edit');
>>>>>>> Stashed changes
Route::post('/templateSave', [FirebaseController::class, 'template'])->name('template.store');
Route::post('/deleteUser', [FirebaseController::class, 'delete'])->name('delete.user');
Route::post('/verifyUser', [FirebaseController::class, 'verify'])->name('verify.user');

<<<<<<< Updated upstream
Route::get('/userpg', [FirebaseController::class, 'tempDisplay'])->name('template.display');
Route::post('/addSection', [QueController::class, 'section'])->name('add.section');
=======
Route::get('/templates', [FirebaseController::class, 'tempDisplay'])->name('template.display');
Route::post('/addSection', [QueController::class, 'section'])->name('add.section');

Route::post('/sectionQuestion', [QueController::class, 'viewSectionQue'])->name('section.display');


>>>>>>> Stashed changes
