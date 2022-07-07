<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::with('brand')->get();
        return view('layout/dashboard', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::all();
        $data = compact('brand');
        return view('layout/productAdd')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $dT = $request->all();
        // dd($dT);
        $product = new Product;
        // $product->brand = $request['brand'];
        $product->productName =  $request['productName'];
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileext = $file->getClientOriginalExtension();
            $filename=time().'.'.$fileext;
            $file->move('public/Image/', $filename);
            $product->image = $filename; 
        }
        $product->brandID = $request['brandID'];
        $product->sku = $request['sku'];
        $product->price = $request['price'];
        $product->qty = $request['qty'];
        $product->shortDesc = $request['shortDesc'];
        $product->longDesc = $request['longDesc'];
        $product->wt = $request['wt'];        
        $product->save();

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $attendance = Attendance::with('student')->get();
        // return view('generate')->with('attendance',$attendance);
        // $product = Product::all();
        // $product = Product::with('brandData')->all();
        // echo '<pre>';dd($product);

        // die();

        // $data = compact('product');
        // $brand = Product::with('brand', 'product')->get();
        // dd('hi');
        // return view('layout/dashboard')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id1, $id2)
    {
        $product = Product::find($id1);
        $brand = Brand::all();
        // $brand = Product::find($id1)->brandName;
        // $selectedBrand = Brand::find($id2);
        if(is_null($product)){
            return redirect('layout/dashboard');
        }else{
            $data1 = compact('product');
            $data2 = compact('brand');
            // $data3 = compact('selectedBrand');
            return view('layout/productEdit')->with($data1)->with($data2);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->brandID = $request['brandID'];
        $product->productName =  $request['productName'];
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileext = $file->getClientOriginalExtension();
            $filename=time().'.'.$fileext;
            $file->move('public/Image/', $filename);
            $product->image = $filename; 
        }
        $product->sku = $request['sku'];
        $product->price = $request['price'];
        $product->qty = $request['qty'];
        $product->shortDesc = $request['shortDesc'];
        $product->longDesc = $request['longDesc'];
        $product->wt = $request['wt'];        
        $product->save();

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product  = Product::find($id); // find the particulr id in customer modal. Find targets the primary key.
        if(!is_null($product)){
            $product->delete();
        }
        return redirect('/product');
    }
    
    public function profile($id){
        $product = Product::find($id);
        $data = compact('product');
        return view('layout/productProfile')->with($data);
    }
}

