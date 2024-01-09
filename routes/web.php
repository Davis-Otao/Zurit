<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\NetworthController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('budgetplanner', function () {
    return view('budgetplanner');
});

Route::get('networthcalculator', function () {
    return view('networthcalculator');
});

Route::get('debtmanager', function () {
    return view('debtmanager');
});

Route::get('investmentplanner', function () {
    return view('investmentplanner');
});

Route::get('contactus', function () {
    return view('contactus');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::post('Register', function () {
    return view('index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/budget-planner', [UserController::class, 'showBudgetPlanner']);

Route::get('admin', function(){
    return view('admin');
})->name('admin')->middleware('admin');

Route::get('editor', function(){
    return view('editor');
})->name('editor')->middleware('editor');

Route::get('user', function(){
    return view('user');
})->name('user')->middleware('user');

Route::get('books_admindash', function () {
    return view('books_admindash');
})->name('books_admindash');

Route::get('blogs', function () {
    return view('blogs');
});

Route::get('blogs_admindash', function () {
    return view('blogs_admindash');
})->name('blogs_admindash');

Route::get('training', function () {
    return view('training');
});

Route::get('userhome', [BlogController::class, 'showUserHome']);
Route::get('home', [BlogController::class, 'showUserHome']);
Route::get('user_budgetplanner', [BlogController::class, 'showuser_budgetplanner']);
Route::get('user_networthcalc', [BlogController::class, 'showuser_networthcalc']);
Route::get('user_debtcalc', [BlogController::class, 'showuser_debtcalc']);
Route::get('user_investmentplanner', [BlogController::class, 'showuser_investmentplanner']);
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('users/{user}', [UserController::class, 'edit'])->name('user.edit');



Route::get('books', [BookController::class, 'index']);
Route::get('bookdetails/{id}',[BookController::class,'show'])->name('bookdetails');
Route::get('booklist',[BookController::class,'index'])->name('booklist');
Route::get('bookadd',[BookController::class,'create'])->name('bookadd');
Route::post('bookadd',[BookController::class,'store'])->name('bookadd.store'); 
Route::get('bookedit/{id}',[BookController::class,'edit'])->name('bookedit');
Route::put('bookupdate/{id}',[BookController::class,'update'])->name('bookupdate'); 
Route::delete('bookdelete/{id}',[BookController::class,'destroy'])->name('bookdelete'); 

Route::get('blogs', [BlogController::class, 'index']);
Route::get('blogdetails/{id}',[BlogController::class,'show'])->name('blogdetails');
Route::get('bloglist',[BlogController::class,'index'])->name('bloglist');
Route::get('blogadd',[BlogController::class,'create'])->name('blogadd');
Route::post('blogadd',[BlogController::class,'store'])->name('blogadd.store'); 
Route::get('blogedit/{id}',[BlogController::class,'edit'])->name('blogedit');
Route::put('blogupdate/{id}',[BlogController::class,'update'])->name('blogupdate'); 
Route::delete('blogdelete/{id}',[BlogController::class,'destroy'])->name('blogdelete'); 

//Budget Planner Routes
Route::post('/storeIncome', [BudgetController::class, 'storeIncome'])->name('storeIncome');
Route::post('/storeExpense', [BudgetController::class, 'storeExpense'])->name('storeExpense');
Route::get('user_budgetplanner', [BudgetController::class, 'showBudgetData']);
Route::get('budget', [BudgetController::class, 'showBudgetData']);
Route::get('netIncome', [BudgetController::class, 'showNetIncome']);

//Investment Calculator Routes
Route::post('storemonthlyInvestment', [InvestmentController::class, 'storemonthlyInvestment'])->name('storemonthlyInvestment');
Route::get('user_investmentplanner', [InvestmentController::class, 'showinvestmentData']);

//Net Worth Calculator Routes
Route::post('storeAsset', [NetworthController::class, 'storeAsset'])->name('storeAsset');
Route::post('storeLiability', [NetworthController::class, 'storeLiability'])->name('storeLiability');
Route::get('user_networthcalc', [NetworthController::class, 'showNetworth']);