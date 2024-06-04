<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Category;
class HomeController extends Controller
{
    //
    public function index(){
        $allCategories = ["Category 1", "Category 2"];

        // Get categories from database using facedes
        //$allCategories = DB::table('categories')->get();

        // Get categories from model using Eloquent (Laravel layer)
        $allCategories = Category::all();

        //return view('home');
        return view('home', ['categories'=> $allCategories]);

    }
}
