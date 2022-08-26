<?php

namespace App\Http\Controllers;

use App\Models\Image;
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

    public function index()
    {
        $products = DB::table('products')->get();
 
        return $products;
    }

    public function showById(Request $request)
    {
        $product = DB::table('products')->where('product_id', $request->id)->get()->first();
        $attributes = DB::table('product_attributes')->join('attributes', 'product_attributes.attribute_id','=', 'attributes.attribute_id')->where('product_id', $request->id)->get();

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
        $rules = array (
            'name' => 'required|max:255',
            'product_code' => 'required|max:255|unique:products,product_code',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric|min:0',
            'description' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        );

        $this->validate($request, $rules);

        //adding product
        $product = new Product();
        $product->name = (string)$request->name;
        $product->product_code = (string)$request->product_code;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->brand_id = $request->brand;
        $product->category_id = $request->category;
        $product->save();

        $productId = $this->getLastProductId();

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/products'), $imageName);
        $image = new Image();
        $image->src = '/images/products/'.$imageName;
        $image->product_id = $productId;

        $image->save();

        //extracting all attributes
        $attributeContr = new AttributeController();
        $attributes = $attributeContr->index();

        

        foreach ($attributes as $attribute) {
            $attributeName = $attribute->name;
            $attributeId = $attribute->attribute_id;
            if ($request->$attributeName) {
                $productAttribute = new Product_Attribute();
                $productAttribute->product_id = $productId;
                $productAttribute->attribute_value = $request->$attributeName; 
                $productAttribute->attribute_id = $attributeId;
                $productAttribute->save();
            }
        }

        return redirect()->route('modify-products');
    }

    public function update () {

    }

    public function delete ($id) {
        DB::table('products')->where('product_id', $id)->delete();
        DB::table('product_attributes')->where('product_id', $id)->delete();
        return redirect()->route('modify-products');        
    }

    public function getLastProductId() { 
        $lastProduct = DB::table('products')->latest('product_id')->first();
        return $lastProduct ? $lastProduct->product_id : 0;
    }

    public function showAllProductsInCategory($category) {
        $category_id = DB::table('categories')->where('name', $category)->value('category_id');
        if ($category_id) {
            $products = DB::table('products')->where('category_id', $category_id)->get();
        
        $images = array();
        foreach($products as $product) {
            $image = DB::table('images')->where('product_id', $product->product_id)->first();
            array_push($images, $image);
        }

        return view('products-in-category', ['products' => $products, 'category' => $category, 'images' => $images]);
        }
        return view('/errors/404');
    }

    public function showProduct($category = null, $id) {
        $product = DB::table('products')->where('product_id', $id)->first();
        if ($product) {
            $images = DB::table('images')->where('product_id', $id)->get();
            $brand = DB::table('brands')->where('brand_id', $product->brand_id)->value('name');

            $attributes = DB::table('attributes')->join('product_attributes', 'attributes.attribute_id', '=', 'product_attributes.attribute_id')->where('product_attributes.product_id', $id)->select('attributes.name', 'product_attributes.attribute_value')->get();

            return view('product', ['product' => $product, 'images' => $images, 'brand' => $brand, 'attributes' => $attributes]);
        }
        return view('/errors/404');
    }

    public function showSearchedProduct($id) {
        $product = DB::table('products')->where('product_id', $id)->first();
        $images = DB::table('images')->where('product_id', $id)->get();
        $brand = DB::table('brands')->where('brand_id', $product->brand_id)->value('name');

        $attributes = DB::table('attributes')->join('product_attributes', 'attributes.attribute_id', '=', 'product_attributes.attribute_id')->where('product_attributes.product_id', $id)->select('attributes.name', 'product_attributes.attribute_value')->get();

        return view('product', ['product' => $product, 'images' => $images, 'brand' => $brand, 'attributes' => $attributes]);
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function showAllProductsForSearchRequest(Request $request) {
        $search = $request->main_search;
        $searchArray = explode(" ",$search);
        $productIds = [];
        foreach ($searchArray as $keyword) {
            $productTableResults = Product::where('name', 'LIKE', "%$keyword%")->pluck('product_id')->toArray();
            $productAttributeTableResults = Product_Attribute::where('attribute_value', 'LIKE', "%$keyword%")->pluck('product_id')->toArray();
            $productIds = array_merge($productTableResults, $productAttributeTableResults);
        }

        $products = array();
        $images = array();
        foreach ($productIds as $productId) {
            $products = array_merge($products, Product::where('product_id', '=', "$productId")->get()->toArray());
            $image = DB::table('images')->where('product_id', "$productId")->first();
            array_push($images, $image);
        }

        return view('products-in-search')->with(compact('products'))->with(compact('images'))->with(compact('search'));
    }
}