<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ForgotPasswordController;


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
    return view('frontend.home');
})->name('/');

Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('change-password', [AuthController::class, 'showFormChangePassword'])->name('change.form');
Route::post('change-password', [AuthController::class, 'changePassword'])->name('change.password');


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home.index');
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/create', [UserController::class, 'store'])->name('users.store');
        Route::get('/{id}', [UserController::class, 'detail'])->whereNumber('id')->name('users.detail');
        Route::get('/{id}/comments/{id_comment?}', [UserController::class, 'getComment'])->name('users.getComment');
        Route::get('{id}/update', [UserController::class, 'update'])->name('users.update');
        Route::post('{id}/update', [UserController::class, 'edit'])->name('users.edit');
        Route::get('{id}/delete', [UserController::class, 'destroy'])->name('users.delete');
        Route::get('/search', [UserController::class, 'search'])->name('users.search');
    });

    Route::prefix('books')->group(function () {
        Route::get('', [BookController::class, 'index'])->name('books.index');
        Route::get('/create', [BookController::class, 'create'])->name('books.create');
        Route::post('/create', [BookController::class, 'store'])->name('books.store');
        Route::get('{id}/update', [BookController::class, 'edit'])->name('books.update');
        Route::post('{id}/update', [BookController::class, 'update'])->name('books.edit');
        Route::get('{id}/delete', [BookController::class, 'destroy'])->name('books.delete');
        Route::get('/trash', [BookController::class, 'showTrashBook'])->name('books.trash');
        Route::get('/{id}/trash', [BookController::class, 'hardDestroy'])->name('books.hardDelete');
        Route::get('/{id}/restore', [BookController::class, 'restore'])->name('books.restore');
        Route::get('/search', [BookController::class, 'search'])->name('books.search');

    });


    Route::prefix('categories')->group(function () {
        Route::get('', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/create', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::post('{id}/edit', [CategoryController::class, 'update'])->name('categories.update');
        Route::get('{id}/delete', [CategoryController::class, 'destroy'])->name('categories.delete');
        Route::get('/search', [CategoryController::class, 'search'])->name('categories.search');
    });


    Route::prefix('students')->group(function () {
        Route::get('', [StudentController::class, 'index'])->name('students.index');
        Route::get('/create', [StudentController::class, 'create'])->name('students.create');
        Route::post('/create', [StudentController::class, 'store'])->name('students.store');
        Route::get('{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
        Route::post('{id}/edit', [StudentController::class, 'update'])->name('students.update');
        Route::get('{id}/delete', [StudentController::class, 'destroy'])->name('students.delete');
        Route::get('/trash', [StudentController::class, 'showTrashStudent'])->name('students.trash');
        Route::get('/{id}/trash', [StudentController::class, 'hardDestroy'])->name('students.hardDelete');
        Route::get('/{id}/restore', [StudentController::class, 'restore'])->name('students.restore');
        Route::get('/search', [StudentController::class, 'search'])->name('students.search');

    });

    Route::prefix('borrows')->group(function () {
        Route::get('', [BorrowController::class, 'index'])->name('borrows.index');
        Route::get('/find-student/{idStudent}', [BorrowController::class, 'findStudent']);
        Route::get('/find-book/{idBook}', [BorrowController::class, 'findBook']);
        Route::get('/create', [BorrowController::class, 'create'])->name('borrows.create');
        Route::post("/create", [BorrowController::class, 'store']);
        Route::get('/search-student', [BorrowController::class, 'searchStudent']);
        Route::get('/search-book', [BorrowController::class, 'searchBook']);
        Route::get('/{id}/edit', [BorrowController::class, 'edit'])->name('borrows.edit');
        Route::post('/{id}/edit', [BorrowController::class, 'update'])->name('borrows.update');
        Route::get('/{id}/delete', [BorrowController::class, 'delete'])->name('borrows.delete');
        Route::get('/trash', [BorrowController::class, 'showTrashBorrow'])->name('borrows.trash');
        Route::get('/{id}/trash', [BorrowController::class, 'hardDestroy'])->name('borrows.hardDelete');
        Route::get('/{id}/restore', [BorrowController::class, 'restore'])->name('borrows.restore');
        Route::get('/search', [BorrowController::class, 'search'])->name('borrows.search');

    });
});
Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirect']);
Route::get('/callback/{provider}', [SocialController::class, 'callback']);


// Route::get('/user', function (){
//     return view('users.list');
// });
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/refresh-captcha', [AuthController::class, 'refreshCaptcha']);


Route::get('/borrow', [PrintController::class, 'index']);
Route::get('/print', [PrintController::class, 'print']);
Route::get('/pdf', [PrintController::class, 'pdf']);





