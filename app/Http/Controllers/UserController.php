<?php

namespace App\Http\Controllers;

use App\User;
use DB;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // code
    }


    public function show($id = null)
    {
      $user_data = User::find($id);
      return response()->json($user_data);
    }
}
