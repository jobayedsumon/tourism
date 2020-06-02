<?php

namespace App\Http\Controllers;

use App\UserReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{

    public function index()
    {
        $user = User::first();
        $post = Post::first();

        $rating = $post->rating([
            'title' => 'Some title',
            'body' => 'Some body',
            'rating' => 5,
        ], $user);

        dd($rating);
    }


    public function show($id)
    {

    }

    public function writeReview($id,Request $request)
    {

        try {
            UserReview::create([
                'component_id' => $id,
                'component_type' => $request->review_type,
                'rating' => $request->rating,
                'review' => $request->review,
                'user_name' => Auth::user()->name
            ]);
            DB::table('users')->where('email',Auth::user()->email)->increment('reward_point',2);
        }catch (\Exception $exception){
            dd($exception->getMessage());
        }

        return back();

    }



}
