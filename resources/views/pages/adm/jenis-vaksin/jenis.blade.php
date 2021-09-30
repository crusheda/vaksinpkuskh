@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">
                <a class="card-title">Daftar Nama Vaksin</a>
            </div>
            <div class="card-body">
                <button class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button><br><br>
                <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Vaksin</th>
                            <th>Stok</th>
                            <th>Ditambahkan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(count($list['show']) > 0)
                            @foreach($list['show'] as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama_vaksin }}</td>
                                    <td>{{ $item->stok }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-warning text-white btn-icon-text" data-toggle="modal" data-target="#ubah{{ $item->id }}"><i class="bx bx-edit btn-icon-prepend"></i> Ubah</button>
                                            <button type="button" class="btn btn-danger btn-icon-text" data-toggle="modal" data-target="#hapus{{ $item->id }}"><i class="bx bx-trash btn-icon-prepend"></i> Hapus</button>
                                        </div>
                                    </td>
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

<div class="modal fade bd-example-modal-lg" id="tambah" role="dialog" aria-labelledby="confirmFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">
            Tambah Jenis Vaksin
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <form class="form-auth-small" action="{{ route('jenis.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <label>Nama Vaksin : </label>
                        <input type="text" name="nama_vaksin" class="form-control" placeholder="CoronaVac" autofocus required>
                        <br>
                    </div>
                    <div class="col">
                        <label>Stok :</label>
                        <input type="number" name="stok" class="form-control" placeholder="" required>
                        <br>
                    </div>
                </div>

        </div>
        <div class="modal-footer">

                <center><button class="btn btn-primary">Submit</button></center><br>
            </form>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>

@foreach($list['show'] as $item)
<div class="modal fade bd-example-modal-lg" id="ubah{{ $item->id }}" role="dialog" aria-labelledby="confirmFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">
            Ubah Jenis Vaksin</span>
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            {{ Form::model($item, array('route' => array('jenis.update', $item->id), 'method' => 'PUT')) }}
                @csrf
                <input type="text" class="form-control" name="id" value="{{ $item->id }}" hidden>
                <div class="row">
                    <div class="col">
                        <label>Nama Vaksin : </label>
                        <input type="text" name="nama_vaksin" class="form-control" value="{{ $item->nama_vaksin }}" placeholder="CoronaVac" autofocus required>
                        <br>
                    </div>
                    <div class="col">
                        <label>Stok :</label>
                        <input type="number" name="stok" class="form-control" value="{{ $item->stok }}" placeholder="" required>
                        <br>
                    </div>
                </div>

        </div>
        <div class="modal-footer">

                <center><button class="btn btn-primary pull-right">Submit</button></center><br>
            </form>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
@endforeach

@foreach($list['show'] as $item)
<div class="modal fade bd-example-modal-lg" id="hapus{{ $item->id }}" role="dialog" aria-labelledby="confirmFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">
            Yakin ingin Menghapus?
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <p>
                Nama Vaksin : {{ $item->nama_vaksin }} <br>
                Stok : {{ $item->stok }}
            </p>
        </div>
        <div class="modal-footer">
            @if(count($list) > 0)
                <form action="{{ route('jenis.destroy', $item->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            @endif
        </div>
      </div>
    </div>
</div>
@endforeach

@endsection
