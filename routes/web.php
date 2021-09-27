<?php


use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index');

Route::get('import', function () {
    return view('excel-import');
})->middleware(['auth'])->name('admin.import');

use \Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UserImport;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use \Maatwebsite\Excel\Excel as Excel2;
use App\Imports\TeamImport;

Route::post('import', function (Request $request) {
    HeadingRowFormatter::default('none');

    Excel::import(new UserImport, request()->file('excel'), null, Excel2::XLSX);
    Excel::import(new TeamImport, request()->file('excel'), null, Excel2::XLSX);

});

use App\Http\Controllers\AuthController;
Route::get('login', [AuthController::class, 'showLoginForm'])->name('auth.loginForm');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
