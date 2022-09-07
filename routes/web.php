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
Route::group(['middleware' => ['headerMenu']], function() {
    Route::get('/', function () {
        return view('front.index');
    })->name('main');
    // Convocation 2021 Instructions
    Route::get('/convocation-instructions', function () {
        return view('front.instructions-conv');
    })->name('convocation-instructions');

    // TUF Medals List

    Route::get('/tuf-medals-list', 'Front\TUFMedalsController@index')->name('tuf-medals-list');
    Route::get('/get/tuf-medals-list', 'Front\TUFMedalsController@getTUFMedals')->name('getTUFMedals');

    // UMDC Medals List

    Route::get('/umdc-medals-list', 'Front\UmdcMedalsController@index')->name('umdc-medals-list');
    Route::get('/get/umdc-medals-list', 'Front\UmdcMedalsController@getUMDCMedals')->name('getUMDCMedals');

    // TUF Students List

    Route::get('/tuf-students-list', 'Front\TUFStudentsController@index')->name('tuf-students-list');
    Route::get('/get/tuf-students-list', 'Front\TUFStudentsController@getTUFStudents')->name('getTUFStudents');


    // UMDC Students List

    Route::get('/umdc-students-list', 'Front\UMDCStudentsController@index')->name('umdc-students-list');
    Route::get('/get/umdc-students-list', 'Front\UMDCStudentsController@getUMDCStudents')->name('getUMDCStudents');

    Route::get('medal-lists/{slug}','Front\MedalListsController@index')->name('medal-lists');

    //###############################################################

    Auth::routes(['verify' => true, 'register' => false]);

    Route::get('/register', function () {
        return view('front.register_closed');
    })->name('register');
    //###############################################################
    // Auth::routes(['verify' => true]);
    //###############################################################

    //Front Controllers
    Route::group(['middleware' => ['auth','xss','verified','headerMenu']], function() {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/dashboard', 'Front\DashboardController@index')->name('candidate_dashboard');
        Route::get('/personal', 'Front\PersonalController@personal')->name('personal');
        Route::post('/personal/{slug}', 'Front\PersonalController@savePersonal')->name('savePersonal');
        Route::get('/eligible-guest', 'Front\PersonalController@eligibleGuest')->name('eligibleGuest');
        Route::post('/eligible-guest/{slug}', 'Front\PersonalController@saveEligibleGuest')->name('saveEligibleGuest');
        // Route::get('/eligible-voucher', 'Front\PersonalController@eligibleVoucher')->name('eligibleVoucher');

        Route::get('/eligible-voucher', function () {
            return view('front.register_closed');
        })->name('eligibleVoucher');

        Route::post('/eligible-voucher/{slug}', 'Front\PersonalController@saveEligibleVoucher')->name('saveEligibleVoucher');
        Route::get('generate-voucher/{slug}','Front\PersonalController@generateVoucher')->name('generateVoucher');
        Route::get('downloadGatePassEligible/{id}', 'Front\DashboardController@GatePass')->name('downloadGatePassEligible');
        Route::get('downloadGatePassGuest/{id}', 'Front\DashboardController@GuestGatePass')->name('downloadGatePassGuest');
    });
});

//Admin Controllers
Route::group(['middleware' => ['auth','isAdmin','xss','verified'],'prefix'=>'admin'], function() {
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin_dashboard');
    Route::resource('permission_group','Admin\PermissionGroupController');
    Route::resource('permission','Admin\PermissionController');
    Route::resource('role','Admin\RoleController');
    Route::get('get/roles','Admin\RoleController@getRoles')->name('getRoles');
    Route::resource('user','Admin\UserController');
    Route::get('get/users','Admin\UserController@getUsers')->name('getUsers');
    //Eligibles
    Route::resource('eligibles','Admin\EligibleController');
    Route::get('get/eligibles','Admin\EligibleController@getEligibles')->name('getEligibles');
    Route::post('/eligible/fetch-seats', 'Admin\EligibleController@fetchSeats')->name('fetchSeats');
    Route::post('/eligible/fetch-selected-seats', 'Admin\EligibleController@fetchSelectedSeats')->name('fetchSelectedSeats');
    Route::post('eligible-csv-upload', 'Admin\EligibleController@csvUpload')->name('eligible-csv-upload');
    //Session
    Route::resource('session','Admin\ConvocationSessionController');
    Route::get('get/session','Admin\ConvocationSessionController@getSession')->name('getSession');
    //Campuses
    Route::resource('campuses','Admin\CampusController');
    Route::get('get/campuses','Admin\CampusController@getCampuses')->name('getCampuses');
    //Venue
    Route::resource('venue','Admin\VenueController');
    Route::get('get/venue','Admin\VenueController@getVenue')->name('getVenue');
    //Seat
    Route::resource('conv-seats','Admin\SeatsController');
    Route::get('get/conv-seats','Admin\SeatsController@getSeats')->name('getSeats');
    //Eligible Types
    Route::resource('eligible-types','Admin\EligibleTypesController');
    Route::get('get/eligible-types','Admin\EligibleTypesController@getEligibleTypes')->name('getEligibleTypes');
     //Medals
     Route::resource('medals','Admin\MedalsController');
     Route::get('get/medals','Admin\MedalsController@getMedals')->name('getMedals');
    //Document Types
    Route::resource('doc-types','Admin\DocTypeController');
    Route::get('get/doc-types','Admin\DocTypeController@getDocTypes')->name('getDocTypes');
    //Guest
    Route::resource('guest','Admin\GuestController');
    Route::get('get/guest','Admin\GuestController@getGuest')->name('getGuest');
    Route::post('/guest/fetch-seats-guest', 'Admin\GuestController@fetchSeats')->name('guestFetchSeats');
    Route::post('/guest/fetch-selected-guest', 'Admin\GuestController@fetchSelectedSeats')->name('guestFetchSelectedSeats');
    Route::post('/guest/fetch-users', 'Admin\GuestController@fetchusers')->name('fetchusers');
    //Candidate Registration
    Route::resource('candidate_registration','Admin\UserEligibleController');
    Route::get('get/candidate_registration','Admin\UserEligibleController@getUsers')->name('getCandidateRegistration');
    // gatepass
    Route::get('downloadPass/{id}', 'Admin\GatePassController@CandidatePass')->name('downloadGatePass');
    // Guest gatepass
    Route::get('downloadGuestPass/{id}', 'Admin\GatePassController@GuestGatePass')->name('GuestGatePass');
    //Account
    Route::resource('account','Admin\AccountController');
    Route::get('get/account','Admin\AccountController@getAccount')->name('getAccount');
    Route::get('get/account/eligible','Admin\AccountController@getAccountEligible')->name('getAccountEligible');
    Route::get('get/account/eligible-user','Admin\AccountController@getAccountEligibleUser')->name('getAccountEligibleUser');
    Route::post('approve/account/eligible-user/{id}','Admin\AccountController@approveFee')->name('approveFee');
    Route::post('reject/account/eligible-user/{id}','Admin\AccountController@rejectFee')->name('rejectFee');
    Route::post('approve/eligible/account/eligible-user/{id}','Admin\AccountController@approveEligibleFee')->name('approveEligibleFee');
    Route::post('reject/eligible/account/eligible-user/{id}','Admin\AccountController@rejectEligibleFee')->name('rejectEligibleFee');
    //Regalias
    Route::resource('regalias-list','Admin\RegaliasController');
    Route::get('get/regalias-list','Admin\RegaliasController@getRegalia')->name('getRegalia');
    //User Ledger
    Route::resource('users-ledger-list','Admin\UserLedgerController');
    Route::get('get/users-ledger-list','Admin\UserLedgerController@getUserLedgers')->name('getUserLedgers');
    Route::post('/guest/fetch-users-ledger-list', 'Admin\UserLedgerController@fetchAllUsers')->name('fetchAllUsers');
    //Reports
    Route::get('/report/paid_eligibles', 'Admin\ReportController@paidEligibles')->name('paidEligibles');
    Route::get('report/get/paid_eligibles','Admin\ReportController@getPaidEligibles')->name('getPaidEligibles');
    Route::get('/report/not_paid_eligibles', 'Admin\ReportController@notPaidEligibles')->name('notPaidEligibles');
    Route::get('report/get/not_paid_eligibles','Admin\ReportController@getNotPaidEligibles')->name('getNotPaidEligibles');
    Route::get('/report/final_summary', 'Admin\ReportController@finalSummary')->name('finalSummary');
    Route::get('/report/register_candidates', 'Admin\ReportController@registerCandidates')->name('registerCandidates');
    Route::get('report/get/register_candidates','Admin\ReportController@getRegisterCandidates')->name('getRegisterCandidates');
    Route::get('/report/register_guests', 'Admin\ReportController@registerGuests')->name('registerGuests');
    Route::get('report/get/register_guests','Admin\ReportController@getregisterGuests')->name('getregisterGuests');
    Route::get('/report/user_positions', 'Admin\ReportController@userPositions')->name('userPositions');
    Route::get('/report/attendance_candidates', 'Admin\ReportController@attendanceCandidates')->name('attendanceCandidates');
    Route::get('report/get/attendance_candidates','Admin\ReportController@getattendanceCandidates')->name('getattendanceCandidates');
    Route::get('/report/attendance_guests', 'Admin\ReportController@attendanceGuests')->name('attendanceGuests');
    Route::get('report/get/attendance_guests','Admin\ReportController@getattendanceGuests')->name('getattendanceGuests');
    //Medal List Category
    Route::resource('medal-category','Admin\MedalListCategoryController');
    Route::get('get/medal-category','Admin\MedalListCategoryController@GetMedalCate')->name('get-medel-category');

    //Config
    Route::resource('con-config','Admin\ConvocationsConfig');
    Route::get('get/con-config','Admin\ConvocationsConfig@conConfig')->name('get-conConfig');

});
//Route Without XSS Middeware
Route::group(['middleware' => ['auth','isAdmin','verified'],'prefix'=>'admin'], function() {
    //Medal List Category
    Route::resource('medal-list','Admin\MedalListController');
    Route::get('get/medal-list','Admin\MedalListController@GetMedalList')->name('get-medal-list');
    Route::post('medal-list-ckeditor','Admin\MedalListController@ckeditorUpload')->name('medal-list-ckeditor');
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect(route('login'));
});
