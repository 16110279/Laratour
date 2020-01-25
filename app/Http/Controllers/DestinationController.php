<?php

namespace App\Http\Controllers;
use App\Destination;
use App\Countries;

use Illuminate\Http\Request;
use Validator;
use Storage;
class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Countries::orderBy('name')->get();
        $menu = 'Destination';
           if(request()->ajax())
        {
            return datatables()->of(Destination::with('countries')->latest()->get())
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
        return view('admin.destination', compact('country', 'menu'));
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
                $rules = array(
            'name'    =>  'required',
            'desc'     =>  'required',
            'image'         =>  'required|image|max:2048'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('img/destination/'), $new_name);

        $form_data = array(
            'name'        =>  $request->name,
            'desc'         =>  $request->desc,
            'country_id' => $request->country_id,
            'image'             =>  $new_name
        );

        Destination::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);
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
          if(request()->ajax())
        {
            $data = Destination::with('countries')->where('id',$id)->first();
            return response()->json(['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $rules = array(
                'name'    =>  'required',
                'desc'     =>  'required',
                'image'         =>  'image|max:2048'
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $rules = array(
                'name'    =>  'required',
                'desc'     =>  'required'
            );

            $error = Validator::make($request->all(), $rules);

            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
        }

        $form_data = array(
            'name'       =>   $request->name,
            'desc'        =>   $request->desc,
            'country_id'        =>   $request->country_id,
            'image'            =>   $image_name
        );
        Destination::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Data is successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dst = Destination::findOrFail($id);
        Storage::delete('img' . '/destination/' . $dst->image);

        $dst->delete();


    }

    public function destinasi_asia()
    {
        $benua = 'Asia';
        return view('destinasi/daftar_negara', compact('benua'));
    }

    public function get_by_country(Request $request)
    {
        // abort_unless(\Gate::allows('city_access'), 401);

        if (!$request->country_id) {
            $html = '<option value="">'.trans('global.pleaseSelect').'</option>';
        } else {
            $html = '';
            $cities = Destination::where('country_id', $request->country_id)->get();
            foreach ($cities as $city) {
                $html .= '<option value="'.$city->id.'">'.$city->name.'</option>';
            }
    }

    return response()->json(['html' => $html]);
}
}
