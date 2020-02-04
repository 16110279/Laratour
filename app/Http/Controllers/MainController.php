<?php

namespace App\Http\Controllers;
use App\Destination;
use App\Tour;
use App\TourDestination;
use App\Countries;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Countries::orderBy('name')->get();
        // $array = [];
        foreach($country as $key => $val)
        {
            $count = Destination::where('country_id',$val->id)->count();
            $data [] = array(
                'id' => $val->id,
                'name' => $val->name,
                'image' => $val->image,
                'count' => $count
            ) ;
            // $array['count'] = $dst;
            // $array['name'] = $val->name;
        }

        // @dump($data);


        // @dump($country);
        $grouptour = Tour::with('country')->get();
        $individualtour = Tour::where('category','Individual')->get();
        return view('index', compact('grouptour','individualtour','data'));
    }

    public function traveldestination(Request $request)
    {
        $country = Countries::all();

        if($request->has('category') && $request->has('countries'))
        {
            $tour = Tour::with('country')->where('category',$request->category)->where('country_id',$request->countries)->get();
            return view('traveldestination', compact('tour','country'));

            // @dump($tour); 
        // return view('traveldestination',  ["tour"=>\App\Tour::paginate(9)]);
        }

            if($request->has('countries'))
    {
                    $tour = Tour::with('country')->where('country_id',$request->countries)->get();
                return view('traveldestination', compact('tour','country'));

                }


        else {
            $tour = Tour::with('country')->get();
                        return view('traveldestination', compact('tour','country'));

        }

        dump($tour);

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

    public function berita()
    {
        return view('berita');
    }

    public function destination()
    {
        // $dst = Destination::with('countries')->get();
        return view('destination',  ["dst"=>\App\Destination::paginate(9)]);
       
    }
}
