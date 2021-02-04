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

Route::get('/', 'HomeController@index');

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
     Route::get('/addmatch', function () {
      return view('admin.addmatch',['active'=> 'addmatch']);
   });
   Route::get('/addgame', function () {
      return view('admin.addgame',['active'=> 'addgame']);
   });
     Route::get('/ongoing_match', function () {
        return view('admin.ongoing_match',['active'=> ['match','ongoing_match']]);
     });
     Route::get('/pending_match', function () {
        return view('admin.pending_match',['active'=> ['match','pending_match']]);
     });
    Route::get('/complete_match', function () {
        return view('admin.complete_match',['active'=> ['match','complete_match']]);
     });
    Route::get('/user', function () {
       return view('admin.user',['active'=> 'user']);
    });
    Route::get('/index', function () {
        return view('admin.index',['active'=> 'index']);
     });
    Route::get('/add_money', function () {
        return view('admin.add_money',['active'=> 'add_money']);
     });
    Route::get('/lucky_draw', function () {
        return view('admin.lucky_draw',['active'=> 'lucky_draw']);
     });
    Route::get('/product', function () {
        return view('admin.product',['active'=> 'product']);
     });
    Route::get('/reward', function () {
        return view('admin.reward',['active'=> 'reward']);
     });
    Route::get('/redeem', function () {
        return view('admin.redeem',['active'=> 'redeem']);
     });
   Route::get('/about_us', function () {
      return view('admin.about_us',['active'=> ['config','about_us']]);
   });
   Route::get('/faq', function () {
      return view('admin.faq',['active'=> ['config','faq']]);
   });
   Route::get('/customer_support', function () {
      return view('admin.customer_support',['active'=> ['config','customer_support']]);
   });
   Route::get('/privacy_policy', function () {
      return view('admin.privacy_policy',['active'=> ['config','privacy_policy']]);
   });
   Route::get('/terms_and_conditions', function () {
      return view('admin.terms_and_conditions',['active'=> ['config','terms_and_conditions']]);
   });
   Route::get('/game', function () {
      return view('admin.game',['active'=> 'game']);
   });
   Route::get('/rules', function () {
        return view('admin.rules',['active'=> 'rules']);
     });
   Route::get('/redeem_option', function () {
        return view('admin.redeem_option',['active'=> 'redeem_option']);
     });
   Route::get('/notification', function () {
      return view('admin.notification',['active'=> 'notification']);
   });
   Route::get('/reset_password', function () {
      return view('admin.reset_password',['active'=> 'reset_password']);
   });
});
    //Print Reports
    Route::get('/report/lucky_draw', 'PrintReportToPDF@print');
    Route::get('/report/test', 'PrintReportToPDF@print_Test');
    Route::get('/report/bookings_list', 'PrintReportToPDF@print_Booking');
