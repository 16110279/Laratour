<?php

namespace App\Http\Controllers;
use App\TourPricing;
use App\Countries;
use App\TourDestination;
use App\Tour;
use App\Destination;
use App\TourSchedule;
use App\ItineraryContent;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Storage;
use Validator;


use Illuminate\Support\Str;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
    }

    public function managetour()
    {
        $menu = 'Tours';
        $tour = Tour::with('country')->get();
        return view('admin.managetour', compact('tour','menu'));

    }

    public function createtour()
    {
       $menu = 'Tours';
        $countries = Countries::orderBy('name')->get()->pluck('name', 'id');

        // $country = Countries::all();

        return view('admin.createtour',compact('countries','menu'));
    }

    public function edittour($id)
    {
        $countries = Countries::orderBy('name')->get()->pluck('name', 'id');
        $tourscd = TourSchedule::where('tour_id',$id)->get();

        $date = array();
        foreach ($tourscd as $key => $scd) {
            $date_start = str_replace('-', '/', $scd['date_start'] );
            $date_start = date("d/m/Y", strtotime($date_start));
            $date_end = str_replace('-', '/', $scd['date_end'] );
            $date_end = date("d/m/Y", strtotime($date_end));
            $date[] = array(
                
                    'date_start' => $date_start,
                    'date_end' => $date_end,
                
                );
            
        }


        $tourprice = TourPricing::where('tour_id',$id)->get();

       
        // @dump($tourprice);   

        // $country = Countries::all();

        return view('admin.edittour',compact('countries','date','tourprice'));
    }


    public function storetour(Request $request)
    {
               $tour = Tour::latest('created_at')->first();;
        $tour_id = $tour->id;

        $str = (explode(",",$request->Dates));

        @dump($str);
    
        // $date = array();

        foreach ($str as $key => $value) {
            // echo date('d/m/Y', strtotime($value. ' + 10 days')); 
            $date = str_replace('/', '-', $value );
            $date = date("Y-m-d", strtotime($date));
            $newDate = date("Y-m-d", strtotime($date. + $request->duration .'days'));
            // echo "<br>";
            // echo $newDate;

            //      $date = TourSchedule::create([
            //          'tour_id' => $tour_id,
            //      'date_start' => $date,
            //     'date_end' => $newDate,
            // ]);

            

            // $TourSch = TourSchedule::all();
        }

            @dump($date);

        
 
        // $gambar = $this->imageUpload($request);

        // if($tour->name == $request->tour_name && $tour->country_id == $request->country_id)
        // {
        //     echo 'Sama';

        // }

        // else {
            

            // echo 'Beda';


    //    $request->validate([
            // 'product_name' => ['required', 'string'],
            // 'category_id' => ['required'],
            // 'product_price' => ['required', 'numeric', 'min:0'],
            // 'category_id' => ['required'],
            // 'status' => ['required'],
            // 'product_gambar' => ['required'],
        // ]);

   
        
        // @dump($request->date);

        // echo $request->date_start ."-" .$request->date_end;



        // $store = Tour::create([
        //     'name' => $request->tour_name,
        //     'slug' => Str::slug($request->tour_name),
        //     'img' => $gambar,
        //     'itinerary' => '',
        //     'country_id' => $request->country_id ,
        // ]);

   
            # code...

        // $dstArr = array();


        // foreach ($request->destination_id as $key => $value) {
       
        // $tourdst = TourDestination::create([
        //         'destination_id' => $value,
        //         'tour_id' => $tour_id ,
        // ]);


        // }
    
    foreach ($request->data as $key => $value) {

    // @dump($value);

    $cek = TourPricing::where('name',$value['name'])->first();
    @dump($cek);



        

        //   $date = TourPricing::create([
        //     'tour_id' => $tour_id,
        //     'name' => $value['name'],
        //     'price' => $value['price'],
        //     ]);

    }
        // $tourdst = TourDestination::create([
        //         'destination_id' => $value,
        //         'tour_id' => $tour_id ,
        // ]);

            // dump($value);

        
 

        

    


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

    private function imageUpload($request, $location = 'img')
    {
        // $product = Product::findOrFail($id);
        $uploadedFile = $request->file('img');
        $filename = strtolower(str_replace(' ', '_', $request->tour_name)) . '-' . (Carbon::now()->timestamp + rand(1, 1000));
        $path = $uploadedFile->storeAs($location, $filename . '.' . $uploadedFile->getClientOriginalExtension());

        return $filename . '.' . $uploadedFile->getClientOriginalExtension();
    }
}
