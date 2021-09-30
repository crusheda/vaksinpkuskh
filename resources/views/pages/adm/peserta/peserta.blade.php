@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Peserta Terdaftar Vaksinasi</p>
                <div class="table-responsive">
                <table id="recent-purchases-listing" class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tgl Daftar</th>
                        <th>Vaksin</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>HP</th>
                        <th>Alamat</th>
                        <th>Ditambahkan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(count($list['show']) > 0)
                        @foreach($list['show'] as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->id_tgl }}</td>
                                <td>{{ $item->id_vaksin }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->hp }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
