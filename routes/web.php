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

Route::get('/loginpg', function () {
    return view('loginpg');
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

Route::get('/displayQue', function () {
    return view('displayQue');
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

Route::post('/questionSave', [QueController::class, 'store'])->name('question.store');
Route::post('/templateSave', [FirebaseController::class, 'template'])->name('template.store');
Route::post('/deleteUser', [FirebaseController::class, 'delete'])->name('delete.user');
Route::post('/verifyUser', [FirebaseController::class, 'verify'])->name('verify.user');

Route::get('/userpg', [FirebaseController::class, 'tempDisplay'])->name('template.display');
Route::post('/addSection', [QueController::class, 'xyz'])->name('add.section');
Route::get('/addQuestionDisplay', [FirebaseController::class, 'addQuestionDisplay'])->name('addQuestion.display');


Route::post('/sectionQuestion', [QueController::class, 'viewSectionQue'])->name('section.display');

Route::post('/AddQuestion', [QueController::class, 'AddQuestion'])->name('Question.Addition');

Route::get('/levelList', [FirebaseController::class, 'levelList'])->name('levelList.display');

Route::post('/levelSave', [FirebaseController::class, 'levelSave'])->name('levelSave.store');

Route::get('/layerList', [FirebaseController::class, 'layerList'])->name('layerList.display');

Route::post('/layerSave', [FirebaseController::class, 'layerSave'])->name('layerSave.store');

Route::get('/machineList', [FirebaseController::class, 'machineList'])->name('machineList.display');

Route::post('/machineSave', [FirebaseController::class, 'machineSave'])->name('machineSave.store');

Route::post('/machineEdit', [FirebaseController::class, 'machineEdit'])->name('machineEdit.edit');

Route::post('/layerEdit', [FirebaseController::class, 'layerEdit'])->name('layerEdit.edit');

Route::post('/levelEdit', [FirebaseController::class, 'levelEdit'])->name('levelEdit.edit');

Route::get('/userList', [FirebaseController::class, 'userList'])->name('userList.display');

Route::post('/userEdit', [FirebaseController::class, 'userEdit'])->name('userEdit.edit');

Route::get('/displayQue', [FirebaseController::class, 'queView'])->name('question.display');

Route::post('/QueEdit', [FirebaseController::class, 'queEdit'])->name('question.edit');

Route::get('/section', [FirebaseController::class, 'sectionList'])->name('sectionList.display');

Route::post('/sectionSave', [FirebaseController::class, 'sectionSave'])->name('sectionSave.store');


Route::get('/task', [FirebaseController::class, 'task'])->name('task.store');

Route::post('/taskSave', [FirebaseController::class, 'taskSave'])->name('taskSave.store');

Route::get('/taskList', [FirebaseController::class, 'taskList'])->name('taskList.display');

Route::post('/taskEdit', [FirebaseController::class, 'taskEdit'])->name('taskEdit.edit');


Route::get('/noticeList', [FirebaseController::class, 'noticeList'])->name('noticeList.display');

Route::post('/noticeSave', [FirebaseController::class, 'noticeSave'])->name('noticeSave.store');