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

    Route::get('/make_org', function () {
        return view('attendee/pages/make_org');
    });
    Route::post('/make_org', 'OrganizerController@store');
    Route::get('/mytickets/{id}', 'TicketController@show');
    Route::get('/biner', 'EventController@show1');
    Route::get('/default', 'OrganizerController@show');
    Route::post('invitation/accept', 'MemberController@accept')->name('member.invite.accept');
    Route::post('invitation/decline', 'MemberController@decline')->name('member.invite.decline');


    Route::group(['middleware' => ['organizer']], function () {
        Route::get('dashboard', "DashboardController@index")->name('dashboard');
        Route::get('dashboard/organizer', 'DashboardController@organizer')->name('dashboard.member.organizer');
        Route::get('dashboard/organizer/{organizer}/edit', "OrganizerController@edit");

        // TODO: 3 dibawah ini harusnya post
        Route::get('dashboard/member/kick/{user}', 'MemberController@kick')->name('kick');
        Route::get('dashboard/member/revoke/{user}', 'MemberController@revokeAdmin')->name('revoke.admin');
        Route::get('dashboard/member/admin/{user}', 'MemberController@setAdmin')->name('set.admin');
        Route::post('dashboard/member/invite','MemberController@invite')->name('members.invite');
        Route::get('dashboard/member', 'MemberController@index')->name('dashboard.member.index');
        Route::post('dashboard/member', 'MemberController@invite')->name('dashboard.member.invite');

        Route::get('dashboard/event/create', 'EventController@create')->name('dashboard.event.create');
        Route::post('dashboard/event/store', 'EventController@store')->name('dashboard.event.store');
        Route::get('dashboard/event/{event}', 'EventController@show')->name('dashboard.event.show');
        Route::get('dashboard/event/{event}/edit', 'EventController@edit')->name('dashboard.event.edit');
        Route::get('dashboard/event/{event}/attendee', 'EventController@show_attendee')->name('dashboard.event.attendee.index');

        Route::get('dashboard/event/{event}/ticket', 'TicketController@index')->name('dashboard.event.ticket.index');
        Route::post('dashboard/event/{event}/ticket', 'TicketController@store')->name('dashboard.event.ticket.store');
    });

    Route::get('logout', 'Auth\LoginController@logout');


});


Route::get('/', function () {
    return view('attendee/pages/index');
});

Route::get('/howit', function () {
    return view('attendee/pages/howit');
});

Route::get('/event', function () {
    return view('attendee/pages/event');
});

Route::get('/contact', function () {
    return view('attendee/pages/contact');
});


Auth::routes();

Route::get('/404', function() {
    return view('404');
});

Route::get('/500', function() {
    return view('500');
});

// Route::get('/home', 'HomeController@index')->name('home');
