<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::all();
        return view('Product.list', ['products' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new product();
        $product -> title = Input::get('name');
        $product -> description = Input::get('description');
        $product -> price = Input::get('price');
        $product -> thumbnail = Input::get('thumbnail');
        $product -> category = Input::get('category');
        $product -> save();
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
        $product = product::all();
        return view('Product.list', ['products', $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $productedit = product::find($id);
        if($productedit == null){
            return 'Sản phẩm không tồn tại hoặc đã bị xóa.';
        }
        return view('Product.edit') -> with('products', $productedit);
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
        $product = product::find($id);
        if($product == null){
            return 'Sản phẩm không tồn tại hoặc đã bị xóa.';
        }
        $product -> title = Input::get('name');
        $product -> description = Input::get('description');
        $product -> price = Input::get('price');
        $product -> thumbnail = Input::get('thumbnail');
        $product -> category = Input::get('category');
        $product -> save();
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
        $product = product::destroy($id);
        if($product == null){
            return response('Sản phẩm không tồn tại hoặc đã bị xóa', '/404');
        }
        return response('delete', 200);
    }
}
