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
</style>

<div class="form-container">
    <h1>Buat Pengguna Baru</h1>

    <div class="form-card">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>

            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" required>

            <label for="kelas_id">Kelas</label>
            <select name="kelas_id" id="kelas_id" required>
                <option value="">Pilih Kelas</option>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>
</div>
@endsection
