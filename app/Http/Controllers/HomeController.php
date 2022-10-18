<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
// use App\Models\Contact;

class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
        public function featuredSection()
        {
            // Fetch latest 4 categories 
            $categories = Category::all()->take(3)->sortByDesc('created_at');
            // Take latest 6 products
            $products = Product::all()->take(6)->sortByDesc('created_at');
            return view('home', compact('products', 'categories'));
        }
    
        public function listProducts()
        {
            // Fetch all products paginate 6 per page 
            $products = Product::paginate(6);
            // Fetch all categories
            $categories = Category::all();
            return view('shop', compact('products', 'categories'));
        }
        public function search(Request $request)
        {
            // Query the products
            $products = Product::query();
            // Compare name of product with search
            if($request->input('search')){
                $products = $products->where('name' , 'LIKE' , '%' .$request->search . '%');
            }
            // Paginate the result
            $products = $products->paginate(5);
            return view('search',compact('products'));
        }
    
        public function filter(Request $request, $id)
        {
            //Get the category id from incoming request
            $category_id = $request->id;
            // Fecth the products with matching category_id
            $products = Product::where('category_id', $category_id)->paginate(6);
            // Get all categories and pass it to view
            $categories = Category::all();
            return view ('shop', compact('products', 'categories'));
    
        }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
}
