<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Category;
use App\Models\Post;
class HomeController extends Controller
{
    //
    public function index(){
        $allCategories = ["Category 1", "Category 2"];

        // Get categories from database using facedes
        //$allCategories = DB::table('categories')->get();

        // Get categories from model using Eloquent (Laravel layer)
        //$allCategories = Category::all();

        //Getting posts
        //$posts = Post::orderBy('id', 'desc')->get(); 
        
        //Getting posts using Eloquent
        //$posts = Post::latest()->get();

        //$posts = Post::where('category_id', request('category_id'))->latest()->get(); 

        $posts = Post::when(request('category_id'), function ($query) { 
            $query->where('category_id', request('category_id'));
        })->latest()->get();

        //return view('home');
       /* return view('home', [
            'categories'=> $allCategories,
            'posts' => $posts
        
        ]);
        */

        $categories = Category::all(); 
        return view('home', compact('categories', 'posts')); 

    }
}
