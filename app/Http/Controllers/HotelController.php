<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }

    public function create()
    {
        return view('hotels.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name'           => 'required|max:255',
                'description'    => 'min:10',
                'tourist_area'   => 'required',
                'address'        => 'required',
                'transportation' => 'required',
                'area'           => 'required',
                'phone'          => 'required|max:11',
                'email'          => 'required|email',
                'website'        => 'max:255',
            ]);

        $images = array();
        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {

                $name = $image->getClientOriginalName();
                $image->storeAs('public/hotels', $name);
                $images[] = $name;

            }
        }
        if ($request->hasFile('feature_image')) {
            $filename = $request->feature_image->getClientOriginalName();
            $request->feature_image->storeAs('public/hotel/feature_image', $filename);
        }

        Hotel::create([
            'name'          => request('name'),
            'description'   => request('description'),
            'tourist_area'  => request('tourist_area'),
            'address'       => request('address'),
            'transportation' => request('transportation'),
            'area'          => request('area'),
            'phone'         => request('phone'),
            'email'         => request('email'),
            'website'       => request('website'),
            'feature_image' => $filename,
            'images'        => implode("|", $images),
            'parking'       => request('parking'),
            'tourist'       => request('tourist'),
            'car'           => request('car'),
            'pool'          => request('pool'),
            'restaurant'    => request('restaurant'),
            'gym'           => request('gym'),
            'latitude'      => $request->latitude,
            'longitude'     => $request->longitude
        ]);
       return redirect()->route('hotel.index');
    }

    public function show($id)
    {
        $hotel_detail = Hotel::find($id);
        return view('hotels.show', compact('hotel_detail'));
    }

    public function edit($id)
    {
        $hotel = Hotel::find($id);
        return view('hotels.edit', compact('hotel'));
    }
 

    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'name'           => 'required|max:255',
                'description'    => 'min:10',
                'tourist_area'   => 'required',
                'address'        => 'required',
                'transportation' => 'required',
                'area'           => 'required',
                'phone'          => 'required|max:11',
                'email'          => 'required|email',
                'website'        => 'max:255',
            ]);
        $hotels = Hotel::findorFail($id);

        $images = array();
        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {

                $name = $image->getClientOriginalName();
                $image->storeAs('public/hotels', $name);
                $images[] = $name;

            }
        }
        if ($request->hasFile('feature_image')) {
            $filename = $request->feature_image->getClientOriginalName();
            $request->feature_image->storeAs('public/hotel/feature_image', $filename);
        }
        $hotels->update([
            'name'          => request('name'),
            'description'   => request('description'),
            'tourist_area'  => request('tourist_area'),
            'address'       => request('address'),
            'transportation' => request('transportation'),
            'area'          => request('area'),
            'phone'         => request('phone'),
            'email'         => request('email'),
            'website'       => request('website'),
            'feature_image' => $filename,
            'images'        => implode("|", $images),
            'parking'       => request('parking'),
            'tourist'       => request('tourist'),
            'car'           => request('car'),
            'pool'          => request('pool'),
            'restaurant'    => request('restaurant'),
            'gym'           => request('gym'),
        ]);
        return redirect()->route('hotel.index');
    }


    public function destroy($id)
    {
        $hotel   = Hotel::findOrFail($id);
        $hotel->delete();
        return redirect()->back();

    }
}
