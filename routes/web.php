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


    Route::post('invitation/accept', 'MemberController@accept')->name('member.invite.accept');
    Route::post('invitation/decline', 'MemberController@decline')->name('member.invite.decline');


    Route::group(['middleware' => ['organizer']], function () {
        Route::get('dashboard', "DashboardController@index")->name('dashboard');
        Route::get('dashboard/organizer', 'DashboardController@organizer')->name('dashboard.organizer');
        Route::get('dashboard/organizer/{organizer}/edit', "OrganizerController@edit")->name('dashboard.organizer.edit');
        Route::post('dashboard/organizer/{organizer}/edit', "OrganizerController@update")->name('dashboard.organizer.update');


        Route::post('dashboard/member/kick/{user}', 'MemberController@kick')->name('kick');
        Route::post('dashboard/member/revoke/{user}', 'MemberController@revokeAdmin')->name('revoke.admin');
        Route::post('dashboard/member/admin/{user}', 'MemberController@setAdmin')->name('set.admin');
        Route::post('dashboard/member/invite','MemberController@invite')->name('members.invite');
        Route::get('dashboard/member', 'MemberController@index')->name('dashboard.member.index');
        Route::post('dashboard/member', 'MemberController@invite')->name('dashboard.member.invite');

        Route::get('dashboard/event/create', 'EventController@create')->name('dashboard.event.create');
        Route::post('dashboard/event/store', 'EventController@store')->name('dashboard.event.store');
        Route::post('dashboard/event/{event}/remove', 'EventController@destroy')->name('dashboard.event.remove');
        Route::post('dashboard/event/{event}/finish', 'EventController@finish')->name('dashboard.event.finish');
        Route::get('dashboard/event/{event}', 'EventController@show')->name('dashboard.event.show');
        Route::get('dashboard/event/{event}/edit', 'EventController@edit')->name('dashboard.event.edit');
        Route::post('dashboard/event/{event}/edit', 'EventController@update')->name('dashboard.event.update');
        Route::get('dashboard/event/{event}/attendee', 'EventController@show_attendee')->name('dashboard.event.attendee.index');

        Route::get('dashboard/event/{event}/ticket', 'TicketController@index')->name('dashboard.event.ticket.index');
        Route::post('dashboard/event/{event}/ticket', 'TicketController@store')->name('dashboard.event.ticket.store');
        Route::post('dashboard/event/{event}/ticket', 'TicketController@store')->name('dashboard.event.ticket.store');
        Route::post('dashboard/ticket/{ticket}/attendee/{user}/remove', 'TicketController@removeAttendee')->name('user.ticket.remove');
        Route::post('dashboard/ticket/{ticket}/attendee/{user}/approve', 'TicketController@approveAttendee')->name('user.ticket.approve');
        Route::post('dashboard/ticket/{ticket}/attendee/{user}/decline', 'TicketController@declineAttendee')->name('user.ticket.decline');
        Route::post('dashboard/event/{event}/attendee/checkin', 'TicketController@postCheckin')->name('dashboard.event.checkin.post');
        Route::get('dashboard/event/{event}/checkin', 'TicketController@indexCheckin')->name('dashboard.event.checkin.index');
    });


    Route::group(['middleware' => ['admin']], function () {
        Route::get('dashboard/users', 'UserController@index')->name('dashboard.user.index');
        Route::post('dashboard/users/{user}/delete', 'UserController@destroy')->name('delete.user');

        Route::get('dashboard/organizers', 'OrganizerController@index')->name('dashboard.organizer.index');
        Route::post('dashboard/organizers/{organizer}', 'OrganizerController@destroy')->name('delete.organizer');

        Route::get('dashboard/events', 'eventController@index')->name('dashboard.event.index');
        Route::post('dashboard/events/{event}/delete', 'eventController@adminDestroy')->name('delete.event');
        Route::post('dashboard/events/{event}/approve', 'eventController@approve')->name('approve.event');
    });
    Route::get('logout', 'Auth\LoginController@logout');


});

Route::get('/event/{event}', 'EventController@show1')->name('attendee.event.show');
Route::get('/organizer/{organizer}', 'OrganizerController@show')->name('attendee.organizer.show');
Route::get('/event', 'AttendeePagesController@event')->name('attendee.event');



Route::get('/satu', function () {
    return view('satu');
});

Route::get('/', function () {
    return view('attendee/pages/index');
});

Route::get('/howit', function () {
    return view('attendee/pages/howit');
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
