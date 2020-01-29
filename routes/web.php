<?php

use App\Itineraries;
use App\TourSchedule;
use App\ItineraryContent;
use App\Tour;
use App\Countries;
use App\TourPricing;
use App\Destination;

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

// Route::get('/', function () {
//     $tour = Tour::all();
//     return view('index')->with('tour',$tour);
// });

// Route::get('tour/{slug}', function($slug)
// {
//     $tour = Tour::where('slug',$slug)->first();
//     return view('slug')->with('tour',$tour);
// });


Route::get('tour/{slug}','TourPackagesController@slug');


// Route::get('/urlslug', function () {
//     return view('urlslug');
// });

Route::post('tour/booking' ,'TourPackagesController@add');
Route::post('tour/booking/save-payment' ,'PaymentController@store');
Route::post('tour/booking/save-booking' ,'BookingController@store');
Route::get('tour/booking/{codeid}' ,'BookingController@bookingpayment');
// Route::get('booking/{codeid}','BookingController@show');
// Route::post('tour/{slug}/booking', function () {
//     // return view('urlslug');
// });


// route::get('/destination','MainController@destination');
route::get('/','MainController@index');
route::get('/travel-destination','MainController@traveldestination');
route::get('/destination','MainController@destination');
// route::get('/group-tour/{tour}','TourPackagesController@detail');


Route::get('/dev', function () {


    $tour = Tour::with('destination.countries')->where('id',1)->first();
    $destination = Destination::with('countries')->get();
        // @dump($tour->destination);
    // $tour->destination()->attach(3);
    // $tour->destination()->detach(1);
    // dd($tour->destination);

    
    // $country = Countries::all();

$countries = Countries::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

    $schedule = TourSchedule::all();

    $price = TourPricing::where('tour_id',1)->get();
    $itineraries = ItineraryContent::all();
   
    return view('slug',compact('destination','price','tour','itineraries','schedule','countries'));

});

Route::get('destination/get_by_country', 'DestinationController@get_by_country')->name('admin.destination.get_by_country');


Route::get('/jaka', function () {


    $tour = Tour::with('destination.countries')->where('id',1)->first();
    $destination = Destination::with('countries')->get();
        // @dump($tour->destination);
    // $tour->destination()->attach(3);
    // $tour->destination()->detach(1);
    // dd($tour->destination);
    
    $schedule = TourSchedule::all();

    $price = TourPricing::where('tour_id',1)->get();
    $itineraries = ItineraryContent::all();
   
    return view('jaka',compact('destination','price','tour','itineraries','schedule'));

});


Route::get('admin/','AdminController@index');
Route::get('admin/tour/','AdminController@managetour');
Route::get('admin/tour/create','AdminController@createtour');
Route::get('admin/tour/{id}/edit','AdminController@edittour');
Route::post('admin/tour/create','AdminController@storetour');


Route::get('dynamic-field', 'DynamicFieldController@index');

Route::post('dynamic-field/insert', 'DynamicFieldController@insert')->name('dynamic-field.insert');
// Route::post('dynamic-field/insert', 'DynamicFieldController@insert')->name('dynamic-field.insert');

Route::resource('dst-ajax', 'DestinationController');
Route::resource('booking-ajax', 'BookingController');
// Route::get('admin-ajax/{id}/editdestination', 'AdminController@')->name('admin-ajax.managedestination');



Route::get('admin/destination','DestinationController@index');
// Route::get('admin-ajax/{id}/editdestination','AdminController@editdestination')->name('admin-ajax.editdestination');
Route::post('dst-ajax/update', 'DestinationController@update')->name('dst-ajax.update');
Route::delete('dst-ajax/destroy/{id}', 'DestinationController@destroy');

Route::get('admin/booking', 'BookingController@index');
Route::get('admin/', 'AdminController@index');

Route::resource('ajax-crud', 'AjaxCrudController');

Route::post('ajax-crud/update', 'AjaxCrudController@update')->name('ajax-crud.update');

Route::get('ajax-crud/destroy/{id}', 'AjaxCrudController@destroy');
