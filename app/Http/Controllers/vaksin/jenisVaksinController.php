<?php

namespace App\Http\Controllers\vaksin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Models\peserta_vaksin;
use App\Models\jenis_vaksin;
use App\Models\tanggal_vaksin;
use Carbon\Carbon;
use Response;
use Auth;

class jenisVaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = jenis_vaksin::get();

        $data = [
            'show' => $show
        ];

        return view('pages.adm.jenis-vaksin.jenis')->with('list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new jenis_vaksin;
        $data->nama_vaksin = $request->nama_vaksin;
        $data->stok = $request->stok;
        $data->save();

        return redirect()->back()->with('message','Tambah Vaksin Baru Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = jenis_vaksin::find($id);
        $data->nama_vaksin = $request->nama_vaksin;
        $data->stok = $request->stok;
        $data->save();

        return redirect()->back()->with('message','Ubah Vaksin Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = jenis_vaksin::find($id);
        $data->delete();

        return redirect()->back()->with('message','Hapus Vaksin Berhasil');
    }
}
