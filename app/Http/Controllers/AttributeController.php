<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttributeController extends Controller
{
    /**
     * Show a list of all attributes.
     *
     * @return \Illuminate\Support\Collection 
     */
    public function index()
    {
        $attributes = DB::table('attributes')->get();

        return $attributes;
    }

    public function getAttributeIdByName() 
    {
        return true;
    }
}
