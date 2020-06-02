<?php

namespace App\Http\Controllers;

use App\CheckoutComment;
use App\Models\Hotel;
use App\Models\Customer;
use App\Models\User;
use App\Transport;
use App\Tourist;
use App\UserReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth')->only('booking');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontendIndex()
    {
        $customer = Customer::first();
        $hotels = Hotel::all();
        return view('frontend.layouts.master', compact('hotels','customer'));
    }

    public function backendIndex()
    {
        return view('layouts.master');
    }

    public function profile()
    {
        return view('profile.index');
    }

    public function edit()
    {
        return view('profile.edit');
    }

    public function passwordUpdate(Request $request)
    {
        $this->validate($request, [
            'password' => 'string|min:6|confirmed',
        ]);

        $data = [

            'password' => bcrypt(request('password')),
        ];

        $user = User::find(auth()->user()->id);

        if ($user->password && !Hash::check($request->current_password, $user->password))
            return back()->withErrors(['current_password' => ['Password doesn\'t match']]);

        $user->update($data);
        return redirect()->route('profile.index');
    }

    public function profilePicture(Request $request)
    {
        $this->validate($request, [
            'profile_pic' => 'nullable|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($request->hasFile('profile_pic')) {
            $filename = auth()->user()->id . '.' . $request->profile_pic->getClientOriginalExtension();
            $request->profile_pic->storeAs('public/user/profile', $filename);
        }

        if (isset($filename)) $data['profile_pic'] = $filename;
        $user = User::find(auth()->user()->id);
        $user->update($data);
        return redirect()->route('profile.index');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'string',
            'email' => 'string|email|max:255',
            'phone' => 'nullable|max:11',

        ]);
        $user = User::find(auth()->user()->id);
        $user->update([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'address' => request('address'),
        ]);
        return redirect()->route('profile.index');
    }
    //Hotel Search
    public function search(Request $request){
        $search = $request->input('search');

        $hotels = Hotel::where('name', 'like', "$search%")
            ->orWhere('area', 'like', "$search%")
            ->get();

        return view('frontend.index.result', compact('hotels'));
    }

    public function showhotel(){

        $hotel = Hotel::all();
        return view('frontend.index.index',compact('hotel'));
    }

    public function viewhotel($id)
    {

        $hotel = Hotel::find($id);
        $data = $this->getRattingData($id,1);
        $avg_rating = $data['avg_rating'];
        $review_statistics = $data['review_statistics'];
        $user_review_info = $data['user_review_info'];
        $checkout_comments = CheckoutComment::all();
        return view('frontend.index.search_details',compact('hotel','avg_rating','review_statistics','user_review_info','checkout_comments'));
    }


    public function find(Request $request){
        $search = $request->input('search');

        $hotels = Hotel::where('name', 'like', "$search%")
            ->orWhere('area', 'like', "$search%")
            ->get();

        return view('frontend.index.searchresult',compact('hotels'));
    }

    public function booking()
    {
        return view('frontend.index.booking');
    }
    public function Userprofile()
    {
        return view('frontend.index.profile');
    }

    public function UserprofileEdit()
    {
        return view('frontend.index.profile-edit');
    }

    //Transport Search
    public function transports()
    {
        return view('frontend.transport.create');
    }

    public function findTransport(Request $request){
        $search = $request->input('search');

        $transports = Transport::where('transportname', 'like', "$search%")
            ->orWhere('to', 'like', "$search%")
            ->get();

        return view('frontend.transport.result',compact('transports'));
    }

    public function showTransport(){

        $transport = Transport::all();

        return view('frontend.transport.index',compact('transport'));
    }

    public function viewTransport($id){

        $transport = Transport::find($id);
        $data = $this->getRattingData($id,2);
        $avg_rating = $data['avg_rating'];
        $review_statistics = $data['review_statistics'];
        $user_review_info = $data['user_review_info'];
        return view('frontend.transport.search_details',compact('transport','avg_rating','review_statistics','user_review_info'));
    }

    //Tourist Spot Search
    public function tourists()
    {
        return view('frontend.tourist.create');
    }

    public function findTourist(Request $request){
        $search = $request->input('search');

        $tourists = Tourist::where('location', 'like', "$search%")
            ->orWhere('touristspot', 'like', "$search%")
            ->get();

        return view('frontend.tourist.result',compact('tourists'));
    }

    public function viewTourist($id){
        $tourist = Tourist::find($id);
        $data = $this->getRattingData($id,3);
        $avg_rating = $data['avg_rating'];
        $review_statistics = $data['review_statistics'];
        $user_review_info = $data['user_review_info'];
        $nearByHotels = json_encode(Hotel::where('tourist_area','LIKE',"%$tourist->touristspot%")->orwhere('tourist_area','LIKE',"%$tourist->location%")->get()->toArray());
        return view('frontend.tourist.search_details',compact('tourist','avg_rating','review_statistics','user_review_info','nearByHotels'));
    }

    public function showTourist(){

        $tourist = Tourist::all();

        return view('frontend.tourist.index',compact('tourist'));
    }
    public function getRattingData($id,$type)
    {
        $user_review_info = UserReview::where('component_type',$type)->where('component_id',$id)
            ->orderBy('created_at','DESC')
            ->paginate(6);
        $avg_rating = UserReview::select(DB::raw('AVG(rating) AS avg_rating'))
            ->where('component_type',$type)
            ->where('component_id',$id)
            ->first();

        $review_statistics = UserReview::select(['rating',DB::raw("COUNT('rating') AS total")])
            ->where('component_type',$type)
            ->where('component_id',$id)
            ->groupBy('rating')
            ->orderBy('rating')
            ->get();

        return [
            'user_review_info' => $user_review_info,
            'avg_rating' => $avg_rating,
            'review_statistics' => $review_statistics
        ];
    }
}
