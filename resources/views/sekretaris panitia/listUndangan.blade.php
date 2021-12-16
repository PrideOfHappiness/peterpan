@extends('Mahasiswa\dashboardMhs')

@section('layout')
        <h1>Daftar Undangan</h1>
@endsection

@section('isi')
<table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Penerima</th>
                <th scope="col">Event</th>
                <th scope="col">Ruangan</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data_surat as $item)
              <tr>
              <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['event'] }}</td>
                <td>{{ $item['ruangan'] }}</td>
                <td {{ $item['status'] }} </td>
                <td>
                    <!-- <a href="#" class="badge bg-info">Detail</span></a> -->
                    <a href="#" class="badge bg-warning">Edit</span></a>
                    <a href="#" class="badge bg-danger">Delete</a>
                </td>
                <td></td>
              </tr>
            @endforeach
            </tbody>
</table>
@endsection
