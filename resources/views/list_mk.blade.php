@extends('layouts.app')

@section('content')
<style>
    .form-container {
        max-width: 600px;
        margin: 2rem auto;
    }
    h1 {
        font-family: "Georgia", serif;
        color: #6b4f2c;
        text-align: center;
        margin-bottom: 1.5rem;
        font-size: 1.6rem;
    }
    .form-card {
        background: #fff;
        border-radius: 8px;
        padding: 1.5rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    label {
        font-weight: 600;
        font-size: 0.9rem;
        color: #444;
        margin-bottom: 0.4rem;
        display: block;
    }
    input, select {
        width: 100%;
        padding: 0.7rem;
        border: 1.8px solid #ddd;
        border-radius: 6px;
        margin-bottom: 1rem;
        transition: border-color 0.2s;
        box-sizing: border-box;
    }
    input:focus, select:focus {
        border-color: #6b4f2c;
        outline: none;
    }
    .btn-submit {
        width: 100%;
        padding: 0.8rem;
        background: #6b4f2c;
        color: #fff;
        border: none;
        border-radius: 6px;
        font-weight: 600;
        cursor: pointer;
    }
    .btn-submit:hover {
        background: #523a20;
    }
    .error-message {
        color: #d32f2f;
        font-size: 0.85rem;
        margin-top: -0.5rem;
        margin-bottom: 1rem;
    }

    /* Tabel bergaya sama seperti list user */
    .matakuliah-table {
        width: 100%;
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #e5e5e5;
    }

    .matakuliah-table thead {
        background: #6b4f2c;
        color: #fff;
    }

    .matakuliah-table th,
    .matakuliah-table td {
        padding: 0.85rem 1rem;
        text-align: left;
        font-size: 0.95rem;
    }

    .matakuliah-table tbody tr:nth-child(even) {
        background: #fafafa;
    }

    .matakuliah-table tbody tr:hover {
        background: #f3f0eb;
    }

    /* Badge mirip list user */
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

    .badge-sks {
        background: #d4c2a8;
        color: #444;
    }
</style>

<div class="container">
    <h1>Daftar Mata Kuliah</h1>
    
    <table class="matakuliah-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mks as $mk)
            <tr>
                <td><span class="badge badge-id">#{{ $mk->id }}</span></td>
                <td>{{ $mk->nama_mk }}</td>
                <td><span class="badge badge-sks">{{ $mk->sks }}</span></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
