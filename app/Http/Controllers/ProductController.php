<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index($subdomain)
    {
        $products = Product::all();

        return view("products.index",compact('products', 'subdomain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create($subdomain)
    {
        return view("products.create", compact('subdomain'));
    }

    /**
     * Store the specified resource in storage.
     *
     * @param Request $request
     * @return null
     */
    public function store($subdomain, Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|regex:/^[a-zA-Z0-9.,\s]+$/|min:3|max:100',
            'quantity' => 'required|integer',
//            'image'      => 'mimes:jpeg,png,bmp,jpg,gif,webp,svg|max:2048',
            'price'    => 'required|integer'
        ]);

        $data = [
            'name'       => $request['name'],
            'quantity'   => $request['quantity'],
            'price'      => $request['price'],
            "created_at" => Carbon::now(),
        ];

        DB::table('products')->insert($data);

        return redirect()->route('products.index',['subdomain' => $subdomain])->with('success', "Product successfully created.");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($subdomain, $id)
    {
        $editProduct = Product::find($id);

        return view("products.edit",compact('editProduct','subdomain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return null
     */
    public function update($subdomain, Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|regex:/^[a-zA-Z0-9.,\s]+$/|min:3|max:100',
            'quantity' => 'required|integer',
//            'image'      => 'mimes:jpeg,png,bmp,jpg,gif,webp,svg|max:2048',
            'price'  => 'required|integer'
        ]);

        $data = [
            'name'       => $request['name'],
            'quantity'      => $request['quantity'],
            'price'       => $request['price'],
            'updated_at' => Carbon::now(),
        ];

        DB::table('products')->insert($data);

        return redirect()->route('products.index',['subdomain' => $subdomain])->with('success', "User has been successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return null
     */
    public function destroy($subdomain, $id)
    {
        Product::where('id',$id)->delete();

        return redirect()->back();
    }
}
