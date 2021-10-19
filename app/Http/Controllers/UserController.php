<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $users = User::all();

        return view("users.index", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return null
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|regex:/^[a-zA-Z0-9.,\s]+$/|min:3|max:100',
            'email' => 'required|email|unique:users',
//            'image'      => 'mimes:jpeg,png,bmp,jpg,gif,webp,svg|max:2048',
            'role'  => 'required'
        ]);

        $data = [
            'name'       => $request['name'],
            'email'      => $request['email'],
            'role'       => $request['role'],
            'password'   => Hash::make($request['admin']),
            "created_at" => Carbon::now(),
        ];

        DB::table('users')->insertGetId($data);

        return redirect()->route('users.index')->with('success', "User successfully created !");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return null
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view("users.edit", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return null
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|regex:/^[a-zA-Z0-9.,\s]+$/|min:3|max:100',
            'email' => 'required|email',
//            'image'      => 'mimes:jpeg,png,bmp,jpg,gif,webp,svg|max:2048',
            'role'  => 'required'
        ]);

        $data = [
            'name'       => $request['name'],
            'email'      => $request['email'],
            'role'       => $request['role'],
            'password'   => Hash::make($request['admin']),
            'updated_at' => Carbon::now(),
        ];

        DB::table('users')->where('id',$request['id'])->update($data);

        return redirect()->route('users.index')->with('success', "User has been successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return null
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();

        return redirect()->back()->with('');
    }
}
