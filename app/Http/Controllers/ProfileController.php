<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class ProfileController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {  
       $user = User::find($id);
        
       return view('users.profile',[
              'user' => $user,    
           ]);
    }

    public function edit($id)
    {

       $user = User::find($id);
        
       return view('users.profile_edit',[
              'user' => $user,    
           ]);
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
