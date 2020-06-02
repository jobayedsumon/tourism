<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Hotel;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('book.index', compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotel_data = Hotel::all();
        return view('book.create', compact('hotel_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request,
//            [
//                'price'             => 'required',
//                'room_no'           => 'required',
//                'room_environment'  => 'required',
//                'room_type'         => 'required',
//                'total_room'        => 'required',
//                'phone'             => 'required',
//                'check_in'          => 'required',
//                'check_out'         => 'required',
//            ]);
//        dd($request->all());

        Book::create([
            'hotels_id'         => request('hotel','1'),
            'customer_id'       => request('customer','1'),
            'price'             => request('price','1'),
            'room_no'           => request('room_no','1'),
            'room_environment'  => request('room_environment'),
            'room_type'         => request('room_type'),
            'total_room'        => request('total_room'),
            'name'              => request('name'),
            'phone'             => request('phone'),
            'email'             => request('email'),
            'check_in'          => \Carbon\Carbon::parse(request('check_in')),
            'check_out'         => \Carbon\Carbon::parse(request('check_out')),
        ]);
        return redirect()->back();
    }


    public function show($id)
    {
        $book_detail = Book::find($id);
        return view('book.show', compact('book_detail'));
    }

    public function edit($id)
    {
        $book   = Book::find($id);
        $hotel  = Hotel::all();
        return view('book.edit', compact('book','hotel'));
    }


    public function update(Request $request,$id)
    {
        $book = Book::find($id);

        $book->update([
            'hotels_id'         => request('hotel'),
            'customer_id'       => request('customer'),
            'price'             => request('price'),
            'room_no'           => request('room_no'),
            'room_environment'  => request('room_environment'),
            'room_type'         => request('room_type'),
            'total_room'        => request('total_room'),
            'name'              => request('name'),
            'phone'             => request('phone'),
            'email'             => request('email'),
            'check_in'          => request('check_in'),
            'check_out'         => request('check_out'),
        ]);
        return redirect()->route('book.index');
    }


    public function destroy(Book $book)
    {
        //
    }
}
