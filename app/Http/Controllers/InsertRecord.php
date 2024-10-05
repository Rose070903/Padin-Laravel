<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertRecord extends Controller
{
    public Static function insert(Request $request) {

        $name = $request['name'];
        $year = $request['year'];
        $program = $request['program'];

        $inserted = DB::table("users")
        ->insert([
            "name" => $name,
            "year" => $year,
            "program" => $program
        ]);

        if($inserted) {
            return [
                "success"   => true,
                "message"   => "Successfully registered"
            ];
        }

        else {
            return [
                "success"   => false,
                "message"   => "Failed to register"
            ];
        }

        return $request;

    }
}
