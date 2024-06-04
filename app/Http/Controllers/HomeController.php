<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    //
    public function index(){
        $allCategories = ["Category 1", "Category 2"];

        $allCategories = DB::table('categories')->get();
        //return view('home');
        return view('home', ['categories'=> $allCategories]);

    }
}
