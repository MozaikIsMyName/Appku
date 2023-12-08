<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Exports\DataExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreDashboardDataRequest;
use App\Http\Requests\UpdateDashboardDataRequest;

use Illuminate\Http\Request;
use DB;

class DashboardDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Data = DB::table('Data')->paginate(5);
        return view('dashboard.data.create',compact('Data'));

    }

    public function dataexport()
    {
        return Excel::download(new DataExport, 'data.xlsx');
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
       
        $Data = new Data;
        $Data->ID = $request->txtid;
        $Data->NIS = $request->txtnis;
        $Data->Nama = $request->txtname;
        $Data->Asal_Sekolah = $request->txtasal_sekolah;
        $Data->Tanggal_Lahir = $request->txttanggal_lahir;
        $Data->Jenis_Kelamin = $request->txtjenis_kelamin;
        $Data->Alamat = $request->txtalamat;
        $Data->Kota = $request->txtkota;
        $Data->save();

        return redirect('/dashboard/data')->with('msg','Add New Student Successfully');
    }

    public function delete_data($ID)
    {
        Data::destroy($ID);

        return back ();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_data($ID)
    {
        $Data = Data::find($ID);

        return view('/dashboard/data/edit_form' , compact('Data')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_Data(Request $request , $ID)
    {
        $Data = Data::find($ID);

        $Data->ID = $request->txtid;
        $Data->NIS = $request->txtnis;
        $Data->Nama = $request->txtname;
        $Data->Asal_Sekolah = $request->txtasal_sekolah;
        $Data->Tanggal_Lahir = $request->txttanggal_lahir;
        $Data->Jenis_Kelamin = $request->txtjenis_kelamin;
        $Data->Alamat = $request->txtalamat;
        $Data->Kota = $request->txtkota;
        $Data->save();

        return redirect('/dashboard/data')->with('msg','Add New Student Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Data $Data)
    {
        Data::destroy($Data->ID);
        return redirect('/dashboard/data')->with('succes', 'Baris Sudah Terhapus!');
    }
}
