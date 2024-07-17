@extends('layouts.app')

@section('content')
<div class="container">
<img src="{{ asset('images/logo_karang_taruna.jpeg') }}" alt="Logo Karang Taruna" class="logo">

    <h1>Daftar Budget</h1>
    <a href="{{ route('budgets.create') }}" class="btn btn-primary">Tambah Budget</a>
    <a href="{{ route('budgets.report') }}" class="btn btn-success">Unduh Laporan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Deskripsi</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($budgets as $budget)
            <tr>
                <td>{{ $budget->description }}</td>
                <td>{{ $budget->amount }}</td>
                <td>{{ $budget->date }}</td>
                <td>
                    <a href="{{ route('budgets.edit', $budget->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('budgets.destroy', $budget->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
