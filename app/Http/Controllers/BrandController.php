<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
     /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Support\Collection 
     */
    public function index()
    {
        $brands = DB::table('brands')->get();
 
        return $brands;
    }
}
