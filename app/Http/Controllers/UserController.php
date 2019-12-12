<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\RoleUser;
use App\Phone;

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

    public function searchRole()
    {
        return view('client.pages.search_role');
    }

    public function resultRole(Request $request)
    {
       $user_id = $request->idUser;
       $phone = $request->phone;
       $name_role = $request->name_role;

        $result = User::where('id', 'like', "%$user_id%")
                      ->whereHas('phone', function($q) use ($phone) {
                        $q->where('number','like', "%$phone%");
                      })
                      ->whereHas('role', function($q) use ($name_role) {
                        $q->where('name', 'like', "%$name_role%");
                      })
                      ->get();

       return view('client.pages.search_role', compact('result'));

    } 

}
