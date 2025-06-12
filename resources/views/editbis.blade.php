@extends('template')

@section('content')
    <h3>Edit Bis</h3>

    <a href="/bis"> Kembali</a>

    <br />
    <br />

    @foreach ($bis as $b)
        <form action="/bis/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $b->bis_id }}"> <br />
            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Merk </label>
                </div>
                <div class="col-6">
                    <input type="text" name="merk" required="required" class="form-control" value="{{ $b->merk_bis }}"> <br />
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label class="control-label">Harga </label>
                </div>
                <div class="col-6">
                    <input type="text" name="harga" required="required" class="form-control" value="{{ $b->harga_bis }}"> <br />
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label class="control-label">Tersedia </label>
                </div>
                <div class="col-6">
                    <input type="number" name="tersedia" min="0" max="1" step="1" required="required"
                        class="form-control" value="{{ $b->tersedia }}"> <br />
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label class="control-label">Berat </label>
                </div>
                <div class="col-6">
                    <input type="number" name="berat" step="any" required="required" class="form-control"
                        value="{{ $b->berat }}"> <br />
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-danger">
        </form>
    @endforeach
@endsection
