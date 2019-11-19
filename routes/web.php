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


    Route::get('/createOrganizer', 'OrganizerController@create')->name('organizer.create');
    Route::post('/createOrganizer', 'OrganizerController@store')->name('organizer.store');
    Route::get('/mytickets', 'TicketController@mytickets')->name('mytickets');
    Route::get('/event/{event}', 'EventController@show1')->name('attendee.event.show');
    Route::get('/organizer/{organizer}', 'OrganizerController@show')->name('attendee.organizer.show ');


    Route::post('invitation/accept', 'MemberController@accept')->name('member.invite.accept');
    Route::post('invitation/decline', 'MemberController@decline')->name('member.invite.decline');


    Route::group(['middleware' => ['organizer']], function () {
        Route::get('dashboard', "DashboardController@index")->name('dashboard');
        Route::get('dashboard/organizer', 'DashboardController@organizer')->name('dashboard.member.organizer');
        Route::get('dashboard/organizer/{organizer}/edit', "OrganizerController@edit");

        // TODO: 3 dibawah ini harusnya post
        Route::post('dashboard/member/kick/{user}', 'MemberController@kick')->name('kick');
        Route::post('dashboard/member/revoke/{user}', 'MemberController@revokeAdmin')->name('revoke.admin');
        Route::post('dashboard/member/admin/{user}', 'MemberController@setAdmin')->name('set.admin');
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
        Route::post('dashboard/event/{event}/ticket', 'TicketController@store')->name('dashboard.event.ticket.store');
        Route::post('dashboard/ticket/{ticket}/attendee/{user}/remove', 'TicketController@removeAttendee')->name('user.ticket.remove');
        Route::post('dashboard/ticket/{ticket}/attendee/{user}/approve', 'TicketController@approveAttendee')->name('user.ticket.approve');
        Route::post('dashboard/ticket/{ticket}/attendee/{user}/decline', 'TicketController@declineAttendee')->name('user.ticket.decline');
        Route::post('dashboard/ticket/{ticket}/attendee/checkin', 'TicketController@postCheckin')->name('dashboard.event.checkin.post');
        Route::get('dashboard/event/{event}/checkin', 'TicketController@indexCheckin')->name('dashboard.event.checkin.index');
    });

    Route::get('logout', 'Auth\LoginController@logout');


});

Route::get('/satu', function () {
    return view('satu');
});

Route::get('/', 'HomeController@show');

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
