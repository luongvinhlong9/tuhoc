<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\Users\MenuController;
use App\Http\Controllers\Admin\Users\SubjectController;
use App\Http\Controllers\Admin\Users\DocumentsController;
use App\Http\Controllers\Admin\Users\PostsController;
use App\Http\Controllers\Admin\Users\QuestionsController;
use App\Http\Controllers\Admin\Users\Userscontroller;
use App\Http\Controllers\MainController as ControllersMainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/manage', [LoginController::class, 'manage']);

// Route::post('/user', [App\Http\Controllers\MainController::class,'index'])->name('user');


// Route::post('/', [App\Http\Controllers\MainController::class, 'manage']);
Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
// Route::get('/login', [App\Http\Controllers\MainController::class, 'login']);
Route::get('/login', [App\Http\Controllers\User\UserController::class, 'index'])->name('login');
Route::post('user/login/manage', [App\Http\Controllers\User\UserController::class, 'manage']);


#Dang ki
Route::get('register', [App\Http\Controllers\MainController::class, 'showRegister'])->name('showRegister');
Route::post('register', [App\Http\Controllers\MainController::class, 'register'])->name('register');
// Route::get('/detailDocument/{id}', [App\Http\Controllers\MainController::class, 'detail']);


Route::middleware(['auth'])->group(function () {

    #admin
    Route::prefix('admin')->group(function () {

        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);
        Route::get('login', [MainController::class, 'logout']);

        #menu
        Route::prefix('menus')->group(function () {
            Route::get('add-subject', [MenuController::class, 'create']);
            Route::post('add-subject', [MenuController::class, 'create']);
        });

        #subject
        Route::prefix('subjects')->group(function () {
            Route::get('main', [SubjectController::class, 'index']);
            Route::post('main', [SubjectController::class, 'index']);
            Route::get('add-subject', [SubjectController::class, 'create']);
            Route::post('add-subject', [SubjectController::class, 'create']);
            Route::post('add-subject', [SubjectController::class, 'add']);
            Route::get('list', [SubjectController::class, 'showList']);
        });

        #document
        Route::prefix('documents')->group(function () {
            Route::get('main', [DocumentsController::class, 'index']);
            Route::post('main', [DocumentsController::class, 'index']);
            Route::get('add-document', [DocumentsController::class, 'create']);
            Route::post('add-document', [DocumentsController::class, 'create']);
            Route::post('add-document', [DocumentsController::class, 'add']);
            Route::get('/detail/{id}', [DocumentsController::class, 'detail']);
            Route::get('/delete/{id}', [DocumentsController::class, 'delete']);
            Route::get('/edit/{id}', [DocumentsController::class, 'edit']);
            Route::post('/update', [DocumentsController::class, 'update'])->name('update');
        });

        #post
        Route::prefix('posts')->group(function () {
            Route::get('main', [PostsController::class, 'index']);
            Route::get('add-post', [PostsController::class, 'add']);
            Route::get('/delete/{id}', [PostsController::class, 'delete']);
        });

        #question_anwer
        Route::prefix('questions')->group(function () {
            Route::get('main', [QuestionsController::class, 'index']);
            Route::get('add-question', [QuestionsController::class, 'add']);
            Route::get('detail/{id}', [QuestionsController::class, 'detail']);
            Route::get('/edit/{id}', [QuestionsController::class, 'edit']);
            Route::post('/update', [QuestionsController::class, 'update']);
            Route::get('/delete/{id}', [QuestionsController::class, 'delete']);
        });

        #user
        Route::prefix('users')->group(function () {
            Route::get('main', [Userscontroller::class, 'index']);
            Route::get('/edit/{id}', [Userscontroller::class, 'edit']);
            Route::post('/update', [Userscontroller::class, 'update'])->name('update');
            Route::get('/edit-status/{id}', [Userscontroller::class, 'editStatus']);
        });
    });

    #user
    Route::prefix('user')->group(function () {
        Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('user');
        Route::get('/info', [App\Http\Controllers\User\Usercontroller::class, 'edit']);
        Route::get('/forum', [App\Http\Controllers\User\Usercontroller::class, 'forum']);
    });
});

Route::get('/testing', [App\Http\Controllers\MainController::class, 'testing']);
Route::get('/view-documents{id}', [App\Http\Controllers\MainController::class, 'detailDocument']);


#forum
Route::get('/forum', [App\Http\Controllers\MainController::class, 'forum'])->name('forum');
Route::get('/forum-view{id}', [App\Http\Controllers\MainController::class, 'viewPost']);
Route::get('/create-post', [App\Http\Controllers\MainController::class, 'createPost']);
Route::post('/create-post', [App\Http\Controllers\MainController::class, 'createPost']);
Route::post('/create-post', [App\Http\Controllers\MainController::class, 'store']);

#question
Route::get('/exam', [App\Http\Controllers\MainController::class, 'exam']);
Route::get('/view-exam{id}', [App\Http\Controllers\MainController::class, 'detailExam'])->name('detailExam');
Route::get('/exam-result{id}', [App\Http\Controllers\MainController::class, 'getScore']);

#favorite
Route::get('/favorite{id}', [App\Http\Controllers\Admin\Users\FavoritesController::class, 'index']);
Route::post('/favorite{doc_id}{uid}', [App\Http\Controllers\Admin\Users\FavoritesController::class, 'add']);

Route::get('/documents-{name}', [App\Http\Controllers\MainController::class, 'documentsBySubjects']);

// Route::get('add-document', [DocumentsController::class, 'create']);
// Route::post('add-document', [DocumentsController::class, 'create']);
// Route::post('add-document', [DocumentsController::class, 'add']);
// Route::get('/forum', [App\Http\Controllers\User\Usercontroller::class,'forum']);
