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

	Route::view('/ross_procedure', 'pages.keyareas.ross_procedure')->name('keyareas.ross');
	Route::view('/valve_repair', 'pages.keyareas.valve_repair')->name('keyareas.valve');
	Route::view('/Dors_Procedure', 'pages.keyareas.dors_procedure')->name('keyareas.lvad');
	Route::view('/lvad', 'pages.keyareas.lvad')->name('keyareas.dors');
	Route::view('/cabg', 'pages.keyareas.cabg')->name('keyareas.cabg');
	Route::view('/joint_replacement', 'pages.keyareas.joint_replacement')->name('keyareas.joint');
	Route::view('/liver_transplant', 'pages.keyareas.liver_transplant')->name('keyareas.liver');
	Route::view('/kidney_transplant', 'pages.keyareas.kidney_transplant')->name('keyareas.kidney');
	Route::view('/bone_marrow_transplant', 'pages.keyareas.bone_marrow')->name('keyareas.bone');
	Route::view('/cochlear_implant', 'pages.keyareas.cochlear')->name('keyareas.cochlear');
	
});


Auth::routes();

Route::view('/home', 'pages.index')->name('homepage');
Route::view('/main', 'pages.main');
Route::view('/', 'pages.index');
Route::view('/about', "PageController@about");
Route::view('/testimonies', 'pages.testimonies');
Route::view('/accommodation', 'pages.accommodation');
Route::view('/contact', 'pages.contact');
Route::post('/contact', "PageController@postContact")->name('page.contact');
Route::post('/enquiry', "PageController@enquiry")->name('page.enquiry');
Route::view('/specialities', 'pages.specialities');
Route::view('/keyareas', 'pages.keyareas');
Route::view('/services', 'pages.services');
Route::view('/appointment', 'pages.appointment');
Route::post('/appointment', "PageController@postAppointment");
Route::view('/facilities', 'pages.facilities');
Route::view('/maintenance', 'pages.maintenance');


//TREATMENT
Route::get('/treatment', "TreatmentController@index")->name('treatment.index');
Route::get('/treatment/{treatmentSlug}', "TreatmentController@show")->name('treatment.show');

// HOSPITALS
Route::get('/hospital', "HospitalController@index")->name('hospital.index');
Route::get('/hospital/{hospital}', "HospitalController@show")->name('hospital.show');
Route::post('/hospital/', "HospitalController@store")->name('hospital.store');
Route::patch('/hospital/{hospital}', "HospitalController@update")->name('hospital.update');
Route::get('/hospital/{hospital}/edit', "HospitalController@edit")->name('hospital.edit');
Route::delete('/hospital/{hospital}', "HospitalController@destroy")->name('hospital.destroy');

// LOCATION
Route::get('/location', "LocationController@index")->name('location.index');
Route::post('/location/', "LocationController@store")->name('location.store');
Route::patch('/location/{location}', "LocationController@update")->name('location.update');
Route::get('/location/{location}/edit', "LocationController@edit")->name('location.edit');
Route::delete('/location/{location}', "LocationController@destroy")->name('location.destroy');

// DEPARTMENT
Route::get('/department', "DepartmentController@index")->name('department.index');
Route::post('/department/', "DepartmentController@store")->name('department.store');
Route::get('/department/{department}', "DepartmentController@show")->name('department.show');
Route::patch('/department/{department}', "DepartmentController@update")->name('department.update');
Route::get('/department/{department}/edit', "DepartmentController@edit")->name('department.edit');
Route::delete('/department/{department}', "DepartmentController@destroy")->name('department.destroy');

// FACILITY-COMFORT
Route::get('/comfort', "ComfortController@index")->name('comfort.index');
Route::post('/comfort/', "ComfortController@store")->name('comfort.store');
Route::patch('/comfort/{comfort}', "ComfortController@update")->name('comfort.update');
Route::get('/comfort/{comfort}/edit', "ComfortController@edit")->name('comfort.edit');
Route::delete('/comfort/{comfort}', "ComfortController@destroy")->name('comfort.destroy');

// FACILITY-MONEY MATTER
Route::get('/moneymatter', "MoneyMatterController@index")->name('moneymatter.index');
Route::post('/moneymatter/', "MoneyMatterController@store")->name('moneymatter.store');
Route::patch('/moneymatter/{moneymatter}', "MoneyMatterController@update")->name('moneymatter.update');
Route::get('/moneymatter/{moneymatter}/edit', "MoneyMatterController@edit")->name('moneymatter.edit');
Route::delete('/moneymatter/{moneymatter}', "MoneyMatterController@destroy")->name('moneymatter.destroy');

// FACILITY-FOOD
Route::get('/food', "FoodController@index")->name('food.index');
Route::post('/food/', "FoodController@store")->name('food.store');
Route::patch('/food/{food}', "FoodController@update")->name('food.update');
Route::get('/food/{food}/edit', "FoodController@edit")->name('food.edit');
Route::delete('/food/{food}', "FoodController@destroy")->name('food.destroy');

// FACILITY-TREATMENT RELATED
Route::get('/treatmentrelated', "TreatmentRelatedController@index")->name('treatmentrelated.index');
Route::post('/treatmentrelated/', "TreatmentRelatedController@store")->name('treatmentrelated.store');
Route::patch('/treatmentrelated/{treatmentrelated}', "TreatmentRelatedController@update")->name('treatmentrelated.update');
Route::get('/treatmentrelated/{treatmentrelated}/edit', "TreatmentRelatedController@edit")->name('treatmentrelated.edit');
Route::delete('/treatmentrelated/{treatmentrelated}', "TreatmentRelatedController@destroy")->name('treatmentrelated.destroy');

// FACILITY-LANGUAGE
Route::get('/language', "LanguageController@index")->name('language.index');
Route::post('/language/', "LanguageController@store")->name('language.store');
Route::patch('/language/{language}', "LanguageController@update")->name('language.update');
Route::get('/language/{language}/edit', "LanguageController@edit")->name('language.edit');
Route::delete('/language/{language}', "LanguageController@destroy")->name('language.destroy');

// FACILITY-TRANSPORTATION
Route::get('/transportation', "TransportationController@index")->name('transportation.index');
Route::post('/transportation/', "TransportationController@store")->name('transportation.store');
Route::patch('/transportation/{transportation}', "TransportationController@update")->name('transportation.update');
Route::get('/transportation/{transportation}/edit', "TransportationController@edit")->name('transportation.edit');
Route::delete('/transportation/{transportation}', "TransportationController@destroy")->name('transportation.destroy');

//DOCTORS
Route::get('/doctor', "DoctorController@index")->name('doctor.index');
Route::get('/doctor/{doctor}', "DoctorController@show")->name('doctor.show');
Route::get('/doctor/department/{deptname}', "DoctorController@docDept")->name('doc_dept.index');

// QUERRIES
Route::get('/search/doctor', "DoctorController@index")->name('doctor.search');
Route::get('/search/doctor/city', "DoctorController@city")->name('doctor.city');
Route::get('/search/hospital', "HospitalController@index")->name('hospital.search');
Route::get('/search/treatment', "TreatmentController@index")->name('treatment.search');
