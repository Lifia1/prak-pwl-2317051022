@extends('layouts.app')
@section('content')
<style>
    .container {
        max-width: 900px;
        margin: 2rem auto;
        padding: 0 1rem;
    }

    h1 {
        font-family: "Georgia", serif;
        color: #6b4f2c;
        text-align: center;
        margin-bottom: 1.5rem;
        font-size: 1.6rem;
        font-weight: 700;
    }

    .user-table {
        width: 100%;
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #e5e5e5;
    }

    .user-table thead {
        background: #6b4f2c;
        color: #fff;
    }

    .user-table th,
    .user-table td {
        padding: 0.85rem 1rem;
        text-align: left;
        font-size: 0.95rem;
    }

    .user-table tbody tr:nth-child(even) {
        background: #fafafa;
    }

    .user-table tbody tr:hover {
        background: #f3f0eb;
    }

    .badge {
        display: inline-block;
        padding: 0.35rem 0.7rem;
        border-radius: 12px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .badge-id {
        background: #6b4f2c;
        color: #fff;
    }

    .badge-kelas {
        background: #d4c2a8;
        color: #444;
    }
</style>

<div class="container">
    <h1>Daftar Pengguna</h1>
    
    <table class="user-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td><span class="badge badge-id">#{{ $user->id }}</span></td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->nim }}</td>
                    <td><span class="badge badge-kelas">{{ $user->nama_kelas }}</span></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
