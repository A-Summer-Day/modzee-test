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
		
		return response()->view('welcome',['user' => $user]);
	}
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayVersionTwo()
    {
		$user = User::with('images')->first();
		
		return response()->view('welcome-version-2',['user' => $user]);
	}
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayVersionThree()
    {
		$user = User::with('images')->first();
		
		return response()->view('welcome-version-2',['user' => $user]);
	}
}
