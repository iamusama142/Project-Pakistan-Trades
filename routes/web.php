<?php

use App\Http\Controllers\AddaccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CreditvoucherController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\PakTraderController;
use App\Http\Controllers\LeadgerController;
use App\Http\Controllers\DebitvoucherController;
use App\Http\Controllers\genralvoucherController;
use App\Http\Controllers\PDFcontroller;
use App\Http\Controllers\saledata;
use App\Http\Controllers\WheatsaleController;
use App\Models\generalvoucher;

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
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/wheatsalepurchase', function () {
    return view('wheatsalepurchase');
});
Route::post('/add', [PakTraderController::class, 'store'])->name('data.store');
Route::get('/wheatsalepurchase', [PakTraderController::class, 'show_name_group']);
Route::get('/salepurchasedata', function () {
    return view('showwheatsalepurchase');
});
// Route::get('/salepurchasedata', [PakTraderController::class ,'showwheatsalepurchase'])->name('wheat.showsalepurchase');
Route::get('/editsalepurchase/{id}', [PakTraderController::class, 'edit_salepurchase_data'])->name('editwheatpurchase.edit');
Route::post('/updatesalepurchase/{id}', [PakTraderController::class, 'update_salepurchase_data'])->name('salepurchase.update');

// PDF Route
Route::get('/salepurchasedata', [PakTraderController::class, 'pdfshowdownload'])->name('wheat.showsalepurchase');
Route::post('/salepurchasedata', [PakTraderController::class, 'pdfshowdownload'])->name('wheat.showsalepurchase');

Route::get('auth-login', [AdminController::class, 'index']);
Route::post('auth-login', [AdminController::class, 'auth'])->name('auth');
Route::group(['middleware' => 'admin_auth'], function () {
});

Route::get('/addaccountgroup', function () {
    return view('addaccountgroup');
});
Route::post('/groupinsert', [GroupController::class, 'store_group_data']);
Route::get('/groupdata', [GroupController::class, 'show_group_data'])->name('accountgrouplist.showgroup');
Route::get('/update/{uid}', [GroupController::class, 'update_group_data']);
Route::post('/edit/{eid}', [GroupController::class, 'edit_group_data']);
Route::get('/addaccount', function () {
    return view('addaccount');
});

Route::get('/addaccount', [AddaccountController::class, 'Show_Group']);
Route::get('/editaccounts', [AddaccountController::class, 'Show_Group_edit']);
Route::post('/fullsubmit', [AddaccountController::class, 'store']);
Route::get('/showaccount', [AddaccountController::class, 'show'])->name('accountlist.showaccount');
Route::get('/edit/{id}', [AddaccountController::class, 'edit'])->name('account.edit');
Route::post('/update/{id}', [AddaccountController::class, 'update'])->name('account.update');

Route::get('/leadger', function () {
    return view('leader-form');
});

Route::get('/leadger', [LeadgerController::class, 'showleadger'])->name('wheat.showsalepurchase');
Route::get('/leader-des', [LeadgerController::class, 'showdescription'])->name('wheat.showdescription');

Route::get('/saledata', function () {
    return view('saledata');
});
Route::get('/showwheatsalepurchase', [PakTraderController::class, 'show_name_select']);
Route::get('/saledata', [saledata::class, 'pdfshowdownload'])->name('wheat.showsalepurchase');
Route::post('/saledata', [saledata::class, 'pdfshowdownload'])->name('wheat.showsalepurchase');
Route::get('/salepurchaser', [saledata::class, 'show_name_group']);
Route::get('/showsale', [saledata::class, 'show_name_select']);
Route::get('/editsale/{id}', [saledata::class, 'editsaledata'])->name('editwheatpurchase.edit');
Route::post('/updatesale/{id}', [saledata::class, 'updatesaledata'])->name('salepurchase.update');
Route::get('/debitvoucher', function () {
    return view('debitvoucher');
});
Route::get('/debitvoucher', [DebitvoucherController::class, 'accountshow']);
Route::post('/adddebit', [DebitvoucherController::class, 'storedebit']);
Route::get('/creditvoucher', function () {
    return view('creditvoucher');
});
Route::get('creditvoucher', [CreditvoucherController::class, 'accountshowS']);
Route::post('/addcredit', [CreditvoucherController::class, 'storecredit']);

Route::get('/generalvoucher', function () {
    return view('generalvoucher');
});
Route::get('generalvoucher', [genralvoucherController::class, 'accountshowgenral']);
Route::post('generalform', [genralvoucherController::class, 'generalstore'])->name('storegeneravoucher.store');
Route::post('/generalPDF', [genralvoucherController::class, 'generatePDF']);
Route::get('leadger', [LeadgerController::class, 'leadgerdetail']);
Route::post('leadger', [LeadgerController::class, 'leadgerdetail']);
