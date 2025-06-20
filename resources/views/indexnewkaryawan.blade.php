@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    <a href="/eas/tambah" class="btn btn-danger mb-2"> + Tambah Karyawan Baru</a>

    <br />

    <table class="table table-striped">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>
            <th>Opsi</th>
        </tr>
        @foreach ($newkaryawan as $k)
            <tr>
                <td>{{ $k->nip }}</td>
                <td>{{ $k->nama }}</td>
                <td>{{ $k->pangkat }}</td>
                <td>{{ number_format($k->gaji, 0, ',', '.') }}</td>
                <td>
                    <a href="/eas/hapus/{{ $k->nip }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    <br />

@endsection
