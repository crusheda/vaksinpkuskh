@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">
                <a class="card-title">Daftar Tanggal Vaksin</a>
            </div>
            <div class="card-body">
                <button class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button><br><br>
                <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Vaksin</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Kuota</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(count($list['show']) > 0)
                            @foreach($list['show'] as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->id_vaksin }}</td>
                                    <td>{{ $item->tgl }}</td>
                                    <td>{{ $item->jam }}</td>
                                    <td>{{ $item->kuota }}</td>
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
            Tambah Tanggal Vaksin
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <form class="form-auth-small" action="{{ route('tanggal.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <label>Jenis Vaksin</label>
                        <select class="form-control" name="id_vaksin" required>
                          <option selected hidden>Pilih</option>
                              @if(count($list['jenis']) > 0)
                                  @foreach($list['jenis'] as $item)
                                      <option value="{{ $item->id }}">{{ $item->nama_vaksin }}</option>
                                  @endforeach
                              @endif
                        </select>
                    </div>
                    <div class="col">
                        <label>Tanggal Vaksin : </label>
                        <input type="datetime-local" name="datetime" class="form-control" placeholder="" required>
                        <br>
                    </div>
                    <div class="col">
                        <label>Kuota :</label>
                        <input type="number" name="kuota" class="form-control" placeholder="" required>
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
            Ubah Tanggal Vaksin</span>
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            {{ Form::model($item, array('route' => array('tanggal.update', $item->id), 'method' => 'PUT')) }}
                @csrf
                <input type="text" class="form-control" name="id" value="{{ $item->id }}" hidden>
                <div class="row">
                    <div class="col">
                        <label>Jenis Vaksin</label>
                        <select class="form-control" name="id_vaksin" required>
                          <option selected hidden>Pilih</option>
                              @if(count($list['jenis']) > 0)
                                  @foreach($list['jenis'] as $items)
                                      <option value="{{ $items->id }}" @if ($item->id_vaksin == $items->id) echo selected @endif>{{ $items->nama_vaksin }}</option>
                                  @endforeach
                              @endif
                        </select>
                    </div>
                    <div class="col">
                        <label>Tanggal Vaksin : </label>
                        <input type="datetime-local" name="datetime" value="<?php echo strftime('%Y-%m-%dT%H:%M:%S', strtotime($item->datetime)); ?>" class="form-control" placeholder="">
                        <br>
                    </div>
                    <div class="col">
                        <label>Stok :</label>
                        <input type="number" name="kuota" class="form-control" value="{{ $item->kuota }}" placeholder="" required>
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
