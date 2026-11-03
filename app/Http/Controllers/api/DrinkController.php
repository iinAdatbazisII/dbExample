<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DrinkController extends Controller
{
    public function getDrinks(){

    $drinks = DB::table('drinks')->get();

    return $drinks;

    }

    public function getDrinkNames(){

        $drink = DB::table('drinks')
        ->select('drink as Ital')
        ->get();

        return $drink;
    }

    public function getDrinkById(){

        // $drink = DB::table('drinks')
        // ->where('id', 2)
        // ->firstOrFail();

        $drink = DB::table('drinks')
        ->find(2);

        //json response, asszociativ tombben kulcs ertekpar
        return response()->json(['drink' => $drink ]);
    }
    
}
