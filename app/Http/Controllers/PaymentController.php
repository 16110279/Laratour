<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Storage;
use App\Payment;
use App\Bookings;
use Illuminate\Http\Request;

class PaymentController extends Controller
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
        @dump($request->payment_option_id);
        //
        // @dump($request);
        $bukti_tf = $this->imageUpload($request);
        
        $store = Payment::create([
            'fee' => $request->fee,
            'booking_id' => $request->booking_id,
            'atas_nama' => $request->atas_nama,
            'bukti_transfer' => $bukti_tf,
            'payment_option_id' => $request->payment_option_id,

        ]);

        $booking = Bookings::where('id',$request->booking_id)->first();

        
        return redirect('tour/booking/'.$booking->booking_code);

    }
        private function imageUpload($request, $location = 'img/payment/')
    {
        // $product = Product::findOrFail($id);
        $uploadedFile = $request->file('bukti_transfer');
        $filename = strtolower(str_replace(' ', '_', $request->atas_nama)) . '-' . (Carbon::now()->timestamp + rand(1, 1000));
        $path = $uploadedFile->storeAs($location, $filename . '.' . $uploadedFile->getClientOriginalExtension());

        return $filename . '.' . $uploadedFile->getClientOriginalExtension();
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
}
