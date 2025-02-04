<?php

namespace App\Http\Controllers;


use App\Models\users;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;




class UserContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $data = DB::connection('mongodb')->table('Users')->get();
        // return $data;
        
        $users = users::all();
        return $users;
        
        // return Inertia::render('About', [
        //     'users' => $users
            
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = users::all();
        return $users;
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
    public function show(users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users $users)
    {
        //
    }
}
