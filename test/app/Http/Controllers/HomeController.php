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
		$user = User::with('images')->first();
		
		return response()->view('gallery',['user' => $user]);
	}
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayCarousel()
    {
		$user = User::with('images')->first();
		
		return response()->view('gallery-carousel',['user' => $user]);
	}
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayFancybox()
    {
		$user = User::with('images')->first();
		
		return response()->view('gallery-fancybox',['user' => $user]);
	}
}
