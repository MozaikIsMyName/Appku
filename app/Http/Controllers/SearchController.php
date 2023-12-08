<?php

namespace App\Http\Controllers;

use App\Models\search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $Data = Data::all();
        return view('dashboard.data.create',compact('Data'));

    }

    public function search(Request $request)
    {
        $search = $request->search;

        $Data =Data::where(Function($query) use($search){

            $query->where('Alamat', 'like', "$search%")
            ->orWhere('Asal_Sekolah','like', "%$search%");
            
            })
            ->get();
            
        return view('dashboard.data.create', compact('Data','search'));
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
    public function show(search $search)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(search $search)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, search $search)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(search $search)
    {
        //
    }
}
