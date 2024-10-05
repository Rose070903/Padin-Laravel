<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateRecord extends Controller
{
    public static function update(Request $request) {
        $updated = DB::table("users")
        ->where("id", $request["id"])
        ->update([
            "name" => $request['name'],
            "year" => $request['year'],
            "program" => $request['program']
        ]);
        if($updated) {
            return [
                "success"   => true,
                "message"   => "Successfully updated"
            ];
        }

        else {
            return [
                "success"   => false,
                "message"   => "Failed to update"
            ];
        }
    }
}
