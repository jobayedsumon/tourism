<?php

namespace App\Http\Controllers;

use App\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TransportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
 
    public function index()  
    {
        $transports = Transport::all();
        return view('transports.index', compact('transports'));
    }

    public function create()
    {
        return view('transports.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'transportname'  => 'required|max:255',
                'transporttype'  => 'required|max:255',
                'to'           	 => 'required|max:255',
                'address'        => 'required|max:255',
                'number'         => 'required|max:255',
                'ac'             => 'required|max:255',
                'nonac'          => 'required|max:255',
                
            ]);

       Transport::create  ([
            'transportname'		=> request('transportname'),
            'transporttype'     => request('transporttype'),
            'to'	           	=> request('to'),
            'address'           => request('address'),
            'number'            => request('number'),
            'ac'                => request('ac'),
            'nonac'             => request('nonac'),
        ]);
        return redirect()->route('transports.index');

    }

    public function destroy($id)
    {
        $transport   = Transport::findOrFail($id);
        $transport->delete();
        return redirect()->back();
    }
    
}
