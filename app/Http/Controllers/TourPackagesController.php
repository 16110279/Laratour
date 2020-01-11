<?php

namespace App\Http\Controllers;
use App\Tour;
use App\ItineraryContent;
use App\Destination;
use App\TourDestination;
use App\TourSchedule;
use Illuminate\Http\Request;
use App\TourPricing;

class TourPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function detail(Tour $tour)
    {
        // $url = $url_slug;
        $value = $tour->id;
        // $value = Tour::where('url_slug', $tour->$url_slug)->first();
        // $value = TourDestination::where('tour_id',6)->get();
        return view('detail',compact('value'));
    }

    public function slug($slug)
    {
        
    $tour = Tour::where('slug',$slug)->first();
        $itineraries = ItineraryContent::all();

    $dest = TourDestination::where('tour_id',$tour->id)->get();

    // $user = Tour::find(1);	
        $schedule = TourSchedule::where('tour_id',$tour->id)->get();
    $price = TourPricing::where('tour_id',$tour->id)->get();
    $itineraries = ItineraryContent::all();

    // $a = Tour::find(1)->destination()->orderBy('name')->get();

    // $a = dd($user->destination);

    // $destination = TourDestination::with('destination')->where('tour_id',$tour->id)->get();
    return view('detail',compact('tour','dest','price','schedule','itineraries','itineraries'));

    // return view('slug')->with('tour',$tour);
    }

}
