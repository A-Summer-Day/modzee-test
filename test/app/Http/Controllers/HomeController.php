<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Image;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		/* Since there is only 1 user record in the database, we fetch it with first
		If there are more than 1, we can twist this data fetch easily by providing either the id of the user, or if we have authentication implemented, we can just fetch that id diectly from auth()->user() */
		$user = User::with('images')->first();
		
		return response()->view('gallery',['user' => $user]);
	}
	
	/**
     * Display a listing of the resource, cararousel view.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayCarousel()
    {
		$user = User::with('images')->first();
		
		return response()->view('gallery-carousel',['user' => $user]);
	}
	
	/**
     * Display a listing of the resource, fancybox view.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayFancybox()
    {
		$user = User::with('images')->first();
		
		return response()->view('gallery-fancybox',['user' => $user]);
	}
}
