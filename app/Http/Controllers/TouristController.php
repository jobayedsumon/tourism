<?php

namespace App\Http\Controllers;

use App\Tourist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TouristController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    {
        $tourists = Tourist::all();
        return view('tourists.index', compact('tourists'));
    }

    public function create()  
    {
        return view('tourists.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'location'       => 'required|max:255',
                'touristspot'    => 'required|max:255',               
                
            ]);

        $images = array();
        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {

                $name = $image->getClientOriginalName();
                $image->storeAs('public/upload', $name);
                $images[] = $name;

            }
        }

       Tourist::create  ([
            'location'     => request('location'),
            'touristspot'  => request('touristspot'),
            'details'      => request('details'),
            'images'        => implode("|", $images),
           'latitude'      => $request->latitude,
           'longitude'     => $request->longitude
        ]);
        return redirect()->route('tourists.index');

    }

    public function destroy($id)
    {
        $tourist   = Tourist::findOrFail($id);
        $tourist->delete();
        return redirect()->back();
    }
    
}
   