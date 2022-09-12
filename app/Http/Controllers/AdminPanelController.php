<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AdminPanelController extends Controller
{
    public function home(){
    	return view('admin.home');
    }
    public function users(){
    	$users= User::get()->toArray();
    	return view('admin.users')->with(['users'=> $users]);
    }
}
