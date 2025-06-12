@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    {{-- <form action="/bis/cari" method="GET" class="form-inline">
        <label class="form-label mr-2">Cari Data Bis :</label>
        <input type="text" name="cari" placeholder="Cari Bis ..." class="form-control mr-2">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form> --}}

    <br />

    <table class="table table-striped">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ strtoupper($k->namalengkap) }}</td> {{-- Uppercase --}}
                <td>{{ $k->divisi }}</td>
                <td>{{ strtolower($k->departemen) }}</td> {{-- Lowercase --}}
                <td>
                    {{-- <a href="/bis/edit/{{ $b->bis_id }}" class="btn btn-success">Edit</a> --}}
                    <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    <br />
    <a href="/karyawan/tambah" class="btn btn-danger mb-2"> + Tambah Karyawan Baru</a>

    {{ $karyawan->links() }} <!-- hanya bisa dipake dengan paginate, saat get() harus dihapus -->
@endsection
