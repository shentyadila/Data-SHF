<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {
    	$response = Http::get('https://reqres.in/api/users?page=2');
    	$data = $response->json();
    	return view('index',compact('data'));
    }

    public function index2()
    {
    	$response = Http::get('https://reqres.in/api/users/2');
    	$data = $response->json();
    	return view('index2',compact('data2'));
    }
}
