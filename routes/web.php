<?php

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
Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['organizer']], function () {
        Route::post('dashboard/members/invite','MemberController@invite')->name('members.invite');
        Route::get('dashboard', "DashboardController@index")->name('dashboard');
        Route::get('dashboard/member', 'MemberController@index')->name('dashboard.member.index');
        Route::get('dashboard/organizer', 'DashboardController@organizer')->name('dashboard.member.organizer');
        Route::post('dashboard/member', 'MemberController@invite')->name('dashboard.member.invite');
        Route::get('dashboard/event/create', 'EventController@create')->name('dashboard.event.create');
        Route::post('dashboard/event/store', 'EventController@store')->name('dashboard.event.store');
        Route::get('dashboard/event/{event}', 'EventController@show')->name('dashboard.event.show');
        Route::get('dashboard/event/{event}/ticket', 'TicketController@index')->name('dashboard.event.ticket.index');
        Route::get('dashboard/event/{event}/attendee', 'EventController@show_attendee')->name('dashboard.event.attendee');
    });

    Route::get('logout', 'Auth\LoginController@logout');


});


Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();

Route::get('/404', function() {
    return view('404');
});

Route::get('/500', function() {
    return view('500');
});

// Route::get('/home', 'HomeController@index')->name('home');
