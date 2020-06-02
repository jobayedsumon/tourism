<?php

namespace App\Http\Controllers;

use App\CheckoutComment;
use App\Models\Hotel;
use App\UserReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CheckoutCommentController extends Controller
{
    public function writeCheckoutComments($id,Request $request)
    {
        $hotel = Hotel::find($id);

        $hotel_lat = $hotel->latitude;
        $hotel_lon = $hotel->longitude;
        $my_lat = $request->latitude;
        $my_lon = $request->longitude;

        $point_a = DB::raw("ST_GEOMFROMTEXT('POINT($hotel_lon $hotel_lat)')");
        $point_b = DB::raw("ST_GEOMFROMTEXT('POINT($my_lon $my_lat)')");
        $distance = DB::select("select st_distance($point_a , $point_b)/1000 as distance")[0];
        if($distance->distance > 2){
            return  Redirect::back()->withErrors(['distance' => 'You are not near the hotel']);
        }

        try {
            CheckoutComment::create([
                'component_id' => $id,
                'component_type' => $request->review_type,
                'review' => $request->review,
                'user_name' => Auth::user()->name,
                'user_id' => Auth::user()->id
            ]);
//            DB::table('users')->where('email',Auth::user()->email)->increment('reward_point',2);
        }catch (\Exception $exception){
            dd($exception->getMessage());
        }

        return back();
    }
}
