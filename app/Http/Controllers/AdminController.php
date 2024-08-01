<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd('admin');
        $headers = \Schema::getColumnListing('users');
        $users = User::get();
        return view('admin.index', compact('headers', 'users'));
        // $dosen = Dosen::find(1); // Find the lecturer with ID 1
        // $matkuls = $dosen->matkul; // Retrieve the related courses
        // $kls = $dosen->kelas; // Retrieve the related courses
        // dd($kls);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $dosen
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
