<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Auth; //nunca olvidar esta jodia 




class UserController extends Controller
{
 /*   public function index() {
         return view('projects.create', [
            'users' => User::latest()->paginate(15)  //maneras de paginar: paginate(), cursorPaginate(),
        ]);
    }

    public function getUsersAll(){
         return view('projects.index', [
            'projects' => Project::select()->where('user_id' , Auth::user()->id)->paginate(10)
        ]);
    }

    public function show(User $user)
    {
        return view ('projects._form', [
            'user'=> $user
        ]);
    }*/
}
