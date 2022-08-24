<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
 
        return ['categories' => $categories];
    }

    public function show()
    {
        $categories = DB::table('categories')->get();

        return view('categories', ['categories' => $categories]);
    }
}
