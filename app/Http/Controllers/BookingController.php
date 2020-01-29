<?php

namespace App\Http\Controllers;
use App\Boooking;
use App\TourPricing;
use App\BookingItems;
use App\PaymentOptions;
use App\Payment;
use App\Bookings;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Tour;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $booking = Bookings::all();
        $menu = 'Booking';
           if(request()->ajax())
        {
            return datatables()->of(Bookings::with('BookingItems')->latest()->get())
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-success btn-sm"><li class="fas fa-pencil-alt"></li></button>';
                        $button .= '&nbsp;&nbsp;';
                         $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><li class="fas fa-trash"></li></button>';

                        // $button .= '<button type="button" name="delete" onclick="deleteAction('.$data->id.')" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.booking', compact('booking', 'menu'));

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

        $total = 0;

        $bookingArr = array();
        
        @dump($request->data);

        foreach ($request->data as $value) {
            // $tourPricing = TourPricing::findOrFail($value['id']);
            $qty = $value['qty'];
            $sub_total = $value['price'] * $qty;
            $total += $sub_total;
    
            $bookingArr[] = new BookingItems([
                'tourpricings_id' => $value['id'],
                'price' => $value['price'],
                'qty' => $value['qty'],
                'subtotal' => $sub_total,
            ]);

            }

            $booking = new Bookings;
    
            $date = Carbon::now()->format('Y');
            $booking->booking_code = ($date) . '' . (Carbon::now()->timestamp + rand(1, 1000));
            $booking->name = $request->name;
            $booking->phone = $request->phone;
            $booking->email = $request->email;
            $booking->message = $request->message;
            $booking->total = $total + rand(1, 1000);
            $booking->save();
            
            $booking_item = $booking->BookingItems()->saveMany($bookingArr);

            $booking = Bookings::latest('created_at')->first();;


        return redirect('tour/booking/'.$booking->booking_code);
        // return redirect('/'.$booking->booking_code);


            // return response()->json([
            //     'status' => true,
            //     'message' => 'Data Stored',
            //     'data' => $booking,
            //     'transaction_item' => $booking_item
            // ]);

        
                    @dump($total);


        // $tourPricing = $request->
        

        // foreach($request->camera_id as $key => $value){
        //     $camera = Camera::findOrFail($value);
        //     $qty = $request->item_qty[$key];
        //     $sub_total = $camera->camera_price * $qty;
        //     $total += $sub_total;

        //     $bookingArr[] = new BookingItem([
        //         'camera_id' => $camera->id,
        //         'item_qty' => $qty,
        //         'item_price' => $camera->camera_price,
        //         'item_subtotal' => $sub_total
        //     ]);
        // }




       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $booking = Bookings::with('bookingItems')->where('booking_code',$id)->first();
    //     return view('booking-step2',compact('booking'));
    // }

    public function bookingpayment($id)
    {
        $payment = PaymentOptions::all();
        $booking = Bookings::with('bookingItems')->where('booking_code',$id)->first();
        $payment_check = Payment::where('booking_id',$booking->id)->get();
        $pay = Payment::where('booking_id',$booking->id)->first();
        // @dump($payment_check);

        if($payment_check->isEmpty())
        {
        return view('booking-step2',compact('booking','payment'));
        }

        if($payment_check->isNotEmpty())
        {
        return view('booking-step3',compact('booking','pay'));
        }

        // if($booking->)
        // return view('booking-step2',compact('booking','payment'));
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
}
