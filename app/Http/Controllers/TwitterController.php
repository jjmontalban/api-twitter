<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Twitter;


class TwitterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function twitterUserTimeLine()
    {
    	$data = Twitter::getUserTimeline(['count' => 10, 'format' => 'array']);
    	return view('twitter',compact('data'));
    }


	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function tweet(Request $request)
    {
    	$this->validate($request, [ 'tweet' => 'required' ]);

    	$newTwitte = ['status' => $request->tweet];
    	$twitter = Twitter::postTweet($newTwitte);
    	
    	return back();
    }



}
