@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    <a href="/eas"> Kembali</a>

    <br />
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br />
    {{-- action mengarah ke karyawan/store untuk dilakukan routing --}}
    <form action="/eas/store" method="post">
        {{ csrf_field() }}
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">NIP </label>
            </div>
            <div class="col-6">
                <input type="text" name="nip" required="required" class="form-control"> <br />
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
                <label class="control-label">Pangkat </label>
            </div>
            <div class="col-6">
                <input type="text" name="pangkat" required="required" class="form-control"> <br />
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <label class="control-label">Gaji </label>
            </div>
            <div class="col-6">
                <input type="number" name="gaji" required="required" class="form-control"> <br />
                <input type="submit" value="Simpan Data" class="btn btn-danger">
            </div>
        </div>

    </form>
@endsection
