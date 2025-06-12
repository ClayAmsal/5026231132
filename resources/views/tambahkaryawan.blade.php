@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    <a href="/karyawan"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke karyawan/store untuk dilakukan routing --}}
    <form action="/karyawan/store" method="post">
        {{ csrf_field() }}
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Kode Pegawai </label>
            </div>
            <div class="col-6">
                <input type="text" name="kode" required="required" class="form-control"> <br />
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <label class="control-label">Nama </label>
            </div>
            <div class="col-6">
                <input type="text" name="nama" required="required" class="form-control"> <br />
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <label class="control-label">Divisi </label>
            </div>
            <div class="col-6">
                <input type="text" name="divisi" required="required" class="form-control"> <br />
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <label class="control-label">Departemen </label>
            </div>
            <div class="col-6">
                <input type="text" name="departemen" required="required" class="form-control"> <br />
                <input type="submit" value="Simpan Data" class="btn btn-danger">
            </div>
        </div>

    </form>
@endsection

