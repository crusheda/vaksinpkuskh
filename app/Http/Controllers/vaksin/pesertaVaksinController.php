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

class pesertaVaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = DB::table('daftar_vaksin')
                ->join('jenis_vaksin', 'daftar_vaksin.id_vaksin', '=', 'jenis_vaksin.id')
                ->join('tgl_vaksin', 'daftar_vaksin.id_tgl', '=', 'tgl_vaksin.id')
                ->select('daftar_vaksin.*','jenis_vaksin.nama_vaksin','tgl_vaksin.datetime as tgl_vaksin')
                ->where('daftar_vaksin.deleted_at', null)
                ->get();

        $data = [
            'show' => $show
        ];

        return view('pages.adm.peserta.peserta')->with('list', $data);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
