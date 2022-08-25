<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_Attribute;
use Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $product = DB::table('products')->where('product_id', $request->id)->get()->first();
        $attributes = DB::table('product_attributes')->join('attributes', 'product_attributes.attribute_id','=', 'attributes.attribute_id')->where('product_id', $request->id)->get();
        // $id = $request->id;

        $brandsContr = new BrandController();
        $brands = $brandsContr->index();
    
        $categoriesContr = new CategoryController();
        $categories = $categoriesContr->index();

        return view('admin-productView')->with(compact('brands'))->with(compact('categories'))->with(compact('product'))->with(compact('attributes'));
    }

    /**
     * Store a new product.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        echo gettype($request->quantity);
        $rules = array (
            'name' => 'required|max:255',
            'product_code' => 'required|max:255|unique:products,product_code',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric|min:0',
            'description' => 'required',
            'category' => 'required',
            'brand' => 'required'
        );

        $this->validate($request, $rules);

        //adding product
        $product = new Product();
        $product->name = $request->name;
        $product->product_code = $request->product_code;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->brand_id = $request->brand;
        $product->category_id = $request->category;

        //extracting all attributes
        $attributeContr = new AttributeController();
        $attributes = $attributeContr->index();


        $product->save();

        foreach ($attributes as $attribute) {
            $attributeName = $attribute->name;
            $attributeId = $attribute->attribute_id;
            if ($request->$attributeName) {
                $productAttribute = new Product_Attribute();
                $productAttribute->product_id = $this->getLastProductId();
                $productAttribute->attribute_value = $request->$attributeName; 
                $productAttribute->attribute_id = $attributeId;
                $productAttribute->save();
            }
        }

        print_r($product);
        // return redirect()->route('modify-products');
    }

    public function update () {

    }

    public function delete () {
        
    }

    public function getLastProductId() { 
        $lastProduct = DB::table('products')->latest('product_id')->first();
        return $lastProduct ? $lastProduct->product_id : 0;
    }

    public function showAllProductsInCategory($category) {
        $category_id = DB::table('categories')->where('name', $category)->value('category_id');
        $products = DB::table('products')->where('category_id', $category_id)->get();
        
        $images = array();
        foreach($products as $product) {
            $image = DB::table('images')->where('product_id', $product->product_id)->first();
            array_push($images, $image);
        }

        return view('products-in-category', ['products' => $products, 'category' => $category, 'images' => $images]);
    }

    public function showProduct($category, $id) {
        $product = DB::table('products')->where('product_id', $id)->first();

        return view('product', ['product' => $product]);
    }
}
