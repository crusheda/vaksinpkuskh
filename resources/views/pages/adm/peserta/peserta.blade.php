@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Peserta Terdaftar Vaksinasi</p>
                <div class="table-responsive">
                <table id="table" class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tgl</th>
                        <th>Jam</th>
                        <th>Vaksin</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>HP</th>
                        <th>Alamat</th>
                        <th>Ditambahkan</th>
                        {{-- <th>Aksi</th> --}}
                    </tr>
                    </thead>
                    <tbody>
                        @if(count($list['show']) > 0)
                        @foreach($list['show'] as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tgl_vaksin)->isoFormat('dddd, D MMMM Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tgl_vaksin)->isoFormat('HH:mm a') }}</td>
                                <td>{{ $item->nama_vaksin }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->hp }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->created_at }}</td>
                                {{-- <td></td> --}}
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

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#table').DataTable(
            {
                paging: true,
                searching: true,
                dom: 'Bfrtip',
                stateSave: true,
                buttons: [
                    'excel', 'pdf','colvis'
                ],
                language: {
                    buttons: {
                        colvis: 'Sembunyikan Kolom',
                        excel: 'Jadikan Excell',
                        pdf: 'Jadikan PDF',
                    }
                },
                order: [[ 8, "desc" ]]
            }
        );
    } );
</script>
@endsection
