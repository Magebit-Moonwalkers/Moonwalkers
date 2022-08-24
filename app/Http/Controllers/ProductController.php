<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listProducts(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    public function showById(Request $request)
    {
        $id = $request->id;
        return view('admin-productView', compact('id'));
    }

    public function store (array $params) {
        $collection = collect($params);
        $product = new Product($collection->all());
        $product->save();
    }

    public function update () {

    }

    public function delete () {
        
    }
}
