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

class vaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = peserta_vaksin::get();
        $jenis = jenis_vaksin::get();
        $tgl = tanggal_vaksin::get();

        if (!empty($tgl)) {
            for($count = 0; $count < count($tgl); $count++)
            {
                $pushKuota[] = $tgl[$count]->kuota;
            }
            $total_kuota = array_sum($pushKuota);
        } else {
            $total_kuota = 0;
        }

        // print_r($tgl);
        // die();

        $data = [
            'show' => $show,
            'total_kuota' => $total_kuota,
            'jenis'=> $jenis,
            'tgl'  => $tgl,
        ];

        return view('pages.vaksin.index')->with('list', $data);
        // return view('pages.vaksin.index');
    }

    public function apiAll($id)
    {
        $show = DB::table('daftar_vaksin')
                ->join('jenis_vaksin', 'daftar_vaksin.id_vaksin', '=', 'jenis_vaksin.id')
                ->join('tgl_vaksin', 'daftar_vaksin.id_tgl', '=', 'tgl_vaksin.id')
                ->select('daftar_vaksin.*')
                ->where('daftar_vaksin.deleted_at', null)
                ->get();

        $data = [
            'show' => $show,
            // 'tgl'  => $tgl,
            // 'jenis'=> $jenis
        ];

        return response()->json($data, 200);
    }

    public function apiGetTgl($id)
    {
        $data = DB::table('tgl_vaksin')
                ->select('tgl')
                ->where('id_vaksin', $id)
                ->where('deleted_at', null)
                ->groupBy('tgl')
                ->get();

        return response()->json($data, 200);
    }

    public function apiGetJam($id)
    {
        $data = DB::table('tgl_vaksin')
                ->select('id','jam')
                ->where('tgl', $id)
                ->where('deleted_at', null)
                ->groupBy('id','jam')
                ->get();

        return response()->json($data, 200);
    }

    public function apiGetKuota($id)
    {
        $getCountPeserta = "SELECT id_tgl,count(nama) as jumlah FROM daftar_vaksin WHERE id_tgl = $id AND deleted_at IS NULL GROUP BY id_tgl,nama";
        $countPeserta = DB::select($getCountPeserta);
        $getTgl = tanggal_vaksin::where('id', $id)->first();

        // print_r($countPeserta[0]->jumlah);
        // // print_r($id);
        // die();

        if (!empty($countPeserta)) {
            if ($getTgl->kuota > $countPeserta[0]->jumlah) {
                $kuotaNow = $getTgl->kuota - $countPeserta[0]->jumlah;
            } else {
                $kuotaNow = 0;
            }
        } else {
            $kuotaNow = $getTgl->kuota;
        }

        return response()->json($kuotaNow, 200);
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
        $request->validate([
            'nama' => 'required|max:250',
            'nik' => 'required|min:15|max:16',
            'hp' => 'required|min:10|max:14',
            'alamat' => 'required|min:10|max:250',
        ]);

        $data = new peserta_vaksin;
        $data->id_vaksin = $request->vaksin;
        $data->id_tgl = $request->id_tgl;
        $data->nama = $request->nama;
        $data->nik = $request->nik;
        $data->hp = $request->hp;
        $data->alamat = $request->alamat;
        $data->save();

        $getTgl = tanggal_vaksin::where('id', $request->id_tgl)->first();
        $tgl = Carbon::parse($getTgl->datetime)->subMinutes(30);
        $minTgl = $tgl->isoFormat('dddd, D MMMM Y , HH:mm a');

        return redirect()->back()->with('message','Pendaftaran a/n '.$request->nama.' Berhasil. Silakan datang kembali dengan membawa semua persyaratan Pada '.$minTgl.'. Terima kasih');
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
