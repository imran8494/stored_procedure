<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoredProcedureController extends Controller
{
    //

    public function users()
    {
        $data = DB::select("CALL get_users_data()");
        return view('welcome',compact('data'));
    }

    public function single_users($id)
    {
        $single_users = DB::select(
            'CALL get_users_by_userid('.$id.')'
        );

        return view('single_users',compact('single_users'));
    }

}
