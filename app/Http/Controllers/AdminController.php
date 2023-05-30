<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.v-index', ['admins' => User::where('role', 2)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.v-addAdmin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request['password'] = Hash::make('12345');
        $post = User::create($request->all());
        if($post) {
            return redirect('/admin')->with('success','data berhasil di tambahkan');
        } else {
            return redirect('/admin')->route('admin')->with('success','data gagal di tambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.v-editAdmin', [
            'data' => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = User::find($id);
        $data->update($request->all());
        if($data) {
            return redirect('/admin')->with('success','data berhasil di ubah');
        } else {
            return redirect('/admin')->route('admin')->with('success','data gagal di ubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('/admin')->with('success','data berhasil di delete');
    }
}
