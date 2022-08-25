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

    public function index()
    {
        $products = DB::table('products')->get();
 
        return $products;
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



//Celestron
//$productIds = Array ( [0] => 1 [1] => 2 [2] => 4 )

/*
Array ( [0] => App\Models\Product Object ( [connection:protected] => mysql [table:protected] => products [primaryKey:protected] => id [keyType:protected] => int [incrementing] => 1 [with:protected] => Array ( ) [withCount:protected] => Array ( ) [preventsLazyLoading] => [perPage:protected] => 15 [exists] => 1 [wasRecentlyCreated] => [escapeWhenCastingToString:protected] => [attributes:protected] => Array ( [product_id] => 4 [name] => Celestron Travel Scope 70 ”Solar system edition” telescope [product_code] => 822035S [price] => 175 [quantity] => 1 [brand_id] => 7 [category_id] => 1 [created_at] => [updated_at] => ) [original:protected] => Array ( [product_id] => 4 [name] => Celestron Travel Scope 70 ”Solar system edition” telescope [product_code] => 822035S [price] => 175 [quantity] => 1 [brand_id] => 7 [category_id] => 1 [created_at] => [updated_at] => ) [changes:protected] => Array ( ) [casts:protected] => Array ( ) [classCastCache:protected] => Array ( ) [attributeCastCache:protected] => Array ( ) [dates:protected] => Array ( ) [dateFormat:protected] => [appends:protected] => Array ( ) [dispatchesEvents:protected] => Array ( ) [observables:protected] => Array ( ) [relations:protected] => Array ( ) [touches:protected] => Array ( ) [timestamps] => 1 [hidden:protected] => Array ( ) [visible:protected] => Array ( ) [fillable:protected] => Array ( [0] => product_id [1] => name [2] => product_code [3] => price [4] => quantity [5] => brand_id [6] => category_id ) [guarded:protected] => Array ( [0] => * ) ) ) [escapeWhenCastingToString:protected] => )
*/