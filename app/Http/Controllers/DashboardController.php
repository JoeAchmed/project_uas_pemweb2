<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan page dashboard admin
        return view('admin.dashboard');
    }

    /**
     * Display a listing of the resource.
     */
    public function productList()
    {
        // menampilkan page list produk admin
        return view('admin.produk.list');
    }

    /**
     * Display a listing of the resource.
     */
    public function categoryProduct()
    {
        // menampilkan page kategori produk admin
        return view('admin.produk.kategori');
    }

    /**
     * Display a listing of the resource.
     */
    public function orders()
    {
        // menampilkan page pesanan admin
        return view('admin.pesanan.list');
    }

    /**
     * Display a listing of the resource.
     */
    public function users()
    {
        // menampilkan page pesanan admin
        return view('admin.user.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
