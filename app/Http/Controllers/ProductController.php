<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    
    /**
     * Show the products
     */
    public function show()
    {
         return 'Hello world';
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
 

        $datas =$request->all();
        unset($datas['_token']); 
         $product = Product::create( $datas );
         return redirect()->route('home')->with('success','Added Successfully');
    }
    public function add(){
        return view("add");
    }
    public function edit($id){
        $product = Product::find($id);
        if(!$product){
            return redirect()->route("home")->withErrors(["Product Not Found"]);
        }
        return view("edit",["product"=>$product]);
    }
    
    public function update(Request $request, $id){
        
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
 

        $datas =$request->all();
        unset($datas['_token']);  
        $product = Product::find($id);
        if(!$product){
            return redirect()->route("home")->withErrors(["Product Not Found"]);
        }
        $product->name= $validated['name'];
        $product->price= $validated['price'];
        $product->quantity= $validated['quantity'];
        $product->save();

        return redirect()->route('edit', ['id' => $id])->with("sucess","Updated");
 
    }

    public function delete($id){
        if($product = Product::find($id) ){
            $product->delete();
        return redirect()->route("home")->with("sucess","Deleted!");
    }else{
        
        return redirect()->route("home")->withErrors(["Product Not Found"]);
    }
    }
    public function view($id){
        $product = Product::find($id);
        if(!$product){
            return redirect()->route("home")->withErrors(["Product Not Found"]);
        }
        return view("view", ["product"=> $product]);
    }

}
