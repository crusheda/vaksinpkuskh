@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">
                <a>Tutorial Sistem Vaksinasi</a>
            </div>
            <div class="card-body">
                <p>Untuk tutorial pada sistem vaksin ini terdapat <kbd>2 Tahap</kbd> , yaitu : </p>
                <p><i class="bx bx-chevron-right"></i> Tahap pertama yaitu menambahkan Jenis Vaksin. <button class="btn btn-primary btn-sm" onclick="window.location.href='{{ url('jenis') }}'">KLIK DISINI</button> untuk menambahkan sekarang.</p>
                <img src="{{ asset('img/tutor/jenis_vaksin.jpg') }}" class="img-fluid" alt=""><br><br>
                <p><i class="bx bx-chevron-right"></i> Tahap Kedua yaitu mengatur Tanggal Vaksin. <button class="btn btn-primary btn-sm" onclick="window.location.href='{{ url('tanggal') }}'">KLIK DISINI</button> untuk mengatur/menambah sekarang.</p>
                <img src="{{ asset('img/tutor/tgl_vaksin.jpg') }}" class="img-fluid" alt=""><br><br>
                <p><i class="bx bx-chevron-right"></i> Untuk menonaktifkan Tanggal yang sudah kadaluwarsa dapat dilakukan pada Menu Pengaturan Tanggal Vaksin <button class="btn btn-primary btn-sm" onclick="window.location.href='{{ url('tanggal') }}'">KLIK DISINI</button> .</p>
                <img src="{{ asset('img/tutor/nonaktif_tgl_vaksin.jpg') }}" class="img-fluid" alt=""><br><br>
                <p><i class="bx bx-chevron-right"></i> Untuk melihat Data Vaksin yang masuk bisa <button class="btn btn-primary btn-sm" onclick="window.location.href='{{ url('peserta') }}'">KLIK DISINI</button> seperti gambar dibawah ini</p>
                <img src="{{ asset('img/tutor/daftar_vaksin.jpg') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>

{{-- <script src="{{ asset('js/jquery.min.js') }}"></script>
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
</script> --}}
@endsection
