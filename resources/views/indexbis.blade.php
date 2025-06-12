@extends('template')

@section('content')
    <h3>Data Bis</h3>

    <a href="/bis/tambah" class="btn btn-danger mb-2"> + Tambah Bis Baru</a>

    <form action="/bis/cari" method="GET" class="form-inline">
        <label class="form-label mr-2">Cari Data Bis :</label>
        <input type="text" name="cari" placeholder="Cari Bis ..." class="form-control mr-2">
        <input type="submit" value="CARI" class="btn btn-warning">
    </form>

    <br />

    <table class="table table-striped">
        <tr>
            <th>Merk</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($bis as $b)
            <tr>
                <td>{{ $b->merk_bis }}</td>
                <td>{{ $b->harga_bis }}</td>
                <td>{{ $b->tersedia }}</td>
                <td>{{ $b->berat }}</td>
                <td>
                    <a href="/bis/edit/{{ $b->bis_id }}" class="btn btn-warning">Edit</a>
                    <a href="/bis/hapus/{{ $b->bis_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $bis->links() }} <!-- hanya bisa dipake dengan paginate, saat get() harus dihapus -->
@endsection
