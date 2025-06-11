@extends('template')

@section('content')
    <h3>Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Nama </label>
                </div>
                <div class="col-6">
                    <input type="text" required="required" name="nama" class="form-control" value="{{ $p->pegawai_nama }}"> <br />
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label class="control-label">Jabatan </label>
                </div>
                <div class="col-6">
                    <input type="text" required="required" name="jabatan" class="form-control" value="{{ $p->pegawai_jabatan }}"> <br />
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label class="control-label">Umur </label>
                </div>
                <div class="col-6">
                    <input type="number" required="required" name="umur" class="form-control" value="{{ $p->pegawai_umur }}"> <br />
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label class="control-label">Alamat </label>
                </div>
                <div class="col-6">
                    <textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea> <br />
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach


@endsection
