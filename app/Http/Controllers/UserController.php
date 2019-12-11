<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function searchUser(Request $request)
    {
    	return view('client.pages.search_user');
    }

    public function resultSearch(Request $request)
    {
    	$idUser = $request->idUser;
    	$name = $request->name;
    	$class = $request->class;

    	$result = User::where('id', 'like', "%$idUser%")
    			    ->where('name', 'like', "%$name%")
    			    ->where('class', 'like', "%$class%")
    			    ->get();
    	return view('client.pages.search_user', compact('result') );
    }
}
