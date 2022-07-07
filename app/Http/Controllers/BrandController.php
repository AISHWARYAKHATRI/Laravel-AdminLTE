<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout/brand');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout/brandAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand;
        $brand->brandName = $request['brandName'];
        $brand->status = $request['status'];
        $brand->save();
        return redirect('brand/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = Brand::all();
        $data = compact('brand');
        return view('layout/brand')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        if(is_null($brand)){
            return view('layout/brand');
        }else{
            $data = compact('brand');
            return view('layout/brandEdit')->with($data);
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
        $brand = Brand::find($id);
        $brand->brandName = $request['brandName'];
        $brand->status = $request['status'];
        $brand->save();
        return redirect('brand/show')->with('message', 'Brand Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $brand = Brand::find($id);
       if(!is_null($brand)){
        $brand->delete();
       }
       return redirect('brand/show')->with('message', 'Brand Deleted!');
    }
    
    public function profile($id){
        $brand = Brand::find($id);
        $data = compact('brand');
        if(!is_null($brand)){
            return view('layout/brandProfile')->with($data);
        }
    }
}
