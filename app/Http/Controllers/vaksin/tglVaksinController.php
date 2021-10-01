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

class tglVaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tgl = tanggal_vaksin::get();
        $jenis = jenis_vaksin::get();
        $show = DB::table('tgl_vaksin')
                ->join('jenis_vaksin', 'tgl_vaksin.id_vaksin', '=', 'jenis_vaksin.id')
                ->select('tgl_vaksin.*','jenis_vaksin.nama_vaksin')
                ->where('tgl_vaksin.deleted_at', null)
                ->get();

        $data = [
            'show' => $show,
            'tgl' => $tgl,
            'jenis' => $jenis
        ];

        return view('pages.adm.tanggal.tgl')->with('list', $data);
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
        $now = Carbon::now();
        $tgl = Carbon::parse($request->datetime)->isoFormat('YYYY-MM-DD');
        $jam = Carbon::parse($request->datetime)->isoFormat('HH:mm');

        $data = new tanggal_vaksin;
        $data->id_vaksin = $request->id_vaksin;
        $data->tgl = $tgl;
        $data->jam = $jam;
        $data->kuota = $request->kuota;
        $data->datetime = $request->datetime;
        $data->save();

        return redirect()->back()->with('message','Tambah Tanggal Vaksin Baru Berhasil');
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
        $now = Carbon::now();
        $tgl = Carbon::parse($request->datetime)->isoFormat('YYYY-MM-DD');
        $jam = Carbon::parse($request->datetime)->isoFormat('HH:mm');

        $data = tanggal_vaksin::find($id);
        $data->id_vaksin = $request->id_vaksin;
        $data->tgl = $tgl;
        $data->jam = $jam;
        $data->kuota = $request->kuota;
        $data->datetime = $request->datetime;
        $data->save();

        return redirect()->back()->with('message','Ubah Tanggal Vaksin Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = tanggal_vaksin::find($id);
        $data->delete();

        return redirect()->back()->with('message','Tanggal Vaksin Berhasil Dinonaktifkan');
    }
}
