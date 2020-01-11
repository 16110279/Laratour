<?php

use App\Itineraries;
use App\TourSchedule;
use App\ItineraryContent;
use App\Tour;
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


// route::get('/destination','MainController@destination');
route::get('/','MainController@index');
// route::get('/group-tour/{tour}','TourPackagesController@detail');


Route::get('/dev', function () {


    $tour = Tour::with('destination.countries')->where('id',1)->first();
    $destination = Destination::with('countries')->get();
        // @dump($tour->destination);
    // $tour->destination()->attach(3);
    // $tour->destination()->detach(1);
    // dd($tour->destination);
    
    $schedule = TourSchedule::all();

    $price = TourPricing::where('tour_id',1)->get();
    $itineraries = ItineraryContent::all();
   
    return view('slug',compact('destination','price','tour','itineraries','schedule'));

});