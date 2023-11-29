<?php

namespace App\Http\Controllers;

use Illuminate\View\View ;
 
use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
      /**
     * Hme
     */
    public function home(): View
    {
        $products = Product::orderBy("id","desc")->get();
       
        
        // var_dump( $products );
         return view('home', ['products'=> $products,'total' =>  $products->count()]);
    }
    
}
