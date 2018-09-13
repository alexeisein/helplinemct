<?php
use Illuminate\Http\Request;
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

Route::get('/welcome', function () {
	// return view('welcome');
	return redirect()->route('homepage');
});

Route::group(['prefix' => 'keyareas'], function(){

	Route::name('keyareas.ross')->get('ross_procedure', function () {
		return view('pages.keyareas.ross_procedure');
		});
	Route::name('keyareas.valve')->get('valve_repair', function () {
		return view('pages.keyareas.valve_repair');
		});
	Route::name('keyareas.dors')->get('Dors_Procedure', function () {
		return view('pages.keyareas.dors_procedure');
		});
	Route::name('keyareas.lvad')->get('lvad', function () {
		return view('pages.keyareas.lvad');
		});
	Route::name('keyareas.cabg')->get('cabg', function () {
		return view('pages.keyareas.cabg');
		});
	Route::name('keyareas.joint')->get('joint_replacement', function () {
		return view('pages.keyareas.joint_replacement');
		});
	Route::name('keyareas.liver')->get('liver_transplant', function () {
		return view('pages.keyareas.liver_transplant');
		});
	Route::name('keyareas.kidney')->get('kidney_transplant', function () {
		return view('pages.keyareas.kidney_transplant');
		});
	Route::name('keyareas.bone')->get('bone_marrow_transplant', function () {
		return view('pages.keyareas.bone_marrow');
		});
	Route::name('keyareas.cochlear')->get('cochlear_implant', function () {
		return view('pages.keyareas.cochlear');
		});
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', "PageController@index")->name('homepage');
Route::get('/about', "PageController@about");
Route::get('/testimonies', "PageController@testimonies");
Route::get('/accommodation', "PageController@accommodation");
Route::get('/contact', "PageController@getContact");
Route::post('/contact', "PageController@postContact")->name('page.contact');
Route::get('/specialities', "PageController@specialities");
Route::get('/keyareas', "PageController@keyareas");

Route::get('/services', "PageController@services");
Route::get('/appointment', "PageController@appointment");
Route::post('/appointment', "PageController@postAppointment");
Route::get('/facilities', "PageController@facilities")->name('page.facilities');
Route::get('/maintenance', "PageController@offline")->name('page.offline');


//TREATMENT
Route::get('/treatment', "TreatmentController@index")->name('treatment.index');
Route::get('/treatment/{treatmentSlug}', "TreatmentController@show")->name('treatment.show');
// HOSPITALS
Route::get('/hospital', "HospitalController@index")->name('hospital.index');
Route::get('/hospital/{hospital}', "HospitalController@show")->name('hospital.show');
//DOCTORS
Route::get('/doctor', "DoctorController@index")->name('doctor.index');
Route::get('/doctor/{doctor}', "DoctorController@show")->name('doctor.show');
// QUERRIES
Route::get('/search/doctor', "DoctorController@index")->name('doctor.search');
Route::get('/search/hospital', "HospitalController@index")->name('hospital.search');
