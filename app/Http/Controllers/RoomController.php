<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $rooms  = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        $hotel_data = Hotel::all();
        return view('rooms.create', compact('hotel_data'));
    }


    public function store(Request $request)
    {
        $this->validate($request,
            [
                'hotel'                 => 'required',
                'single_ac'             => 'numeric',
                'single_ac_cost'        => 'numeric',
                'single_non_ac'         => 'numeric',
                'single_non_ac_cost'    => 'numeric',
                'double_ac'             => 'numeric',
                'double_ac_cost'        => 'numeric',
                'double_non_ac'         => 'numeric',
                'double_non_ac_cost'    => 'numeric',
                'discount'              => 'nullable',
                'internet'              => 'nullable',
                'tv'                    => 'nullable',
            ]);

       Room::create  ([
            'hotels_id'            => request('hotel'),
            'single_ac'            => request('single_ac'),
            'single_ac_cost'       => request('single_ac_cost'),
            'single_non_ac'        => request('single_non_ac'),
            'single_non_ac_cost'   => request('single_non_ac_cost'),
            'double_ac'            => request('double_ac'),
            'double_ac_cost'       => request('double_ac_cost'),
            'double_non_ac'        => request('double_non_ac'),
            'double_non_ac_cost'   => request('double_non_ac_cost'),
            'discount'             => request('discount'),
            'availability'         => request('availability'),
            'internet'             => request('internet'),
            'tv'                   => request('tv'),
        ]);
        return redirect()->route('room.index');

    }


    public function show($id)
    {
        $room = Room::find($id);
        return view('rooms.show', compact('room'));
    }


    public function edit($id)
    {
        $room   = Room::find($id);
        $hotel  = Hotel::all();
        return view('rooms.edit', compact('room', 'hotel'));
    }


    public function update(Request $request, $id)
    {

        $room_data = Room::find($id);
        $room_data->update ([
            'hotels_id'            => request('hotel'),
            'single_ac'            => request('single_ac'),
            'single_ac_cost'       => request('single_ac_cost'),
            'single_non_ac'        => request('single_non_ac'),
            'single_non_ac_cost'   => request('single_non_ac_cost'),
            'double_ac'            => request('double_ac'),
            'double_ac_cost'       => request('double_ac_cost'),
            'double_non_ac'        => request('double_non_ac'),
            'double_non_ac_cost'   => request('double_non_ac_cost'),
            'discount'             => request('discount'),
            'availability'         => request('availability'),
            'internet'             => request('internet'),
            'tv'                   => request('tv'),
        ]);
    }

    public function destroy($id)
    {
        $room   = Room::findOrFail($id);
        $room->delete();
        return redirect()->back();
    }
}
