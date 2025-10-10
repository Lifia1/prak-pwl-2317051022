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
</style>

<div class="form-container">
    <h1>Buat Mata Kuliah Baru</h1>
    
    <div class="form-card">
        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf
            
            <label for="nama_mk">Nama Mata Kuliah</label>
            <input type="text" 
                   id="nama_mk" 
                   name="nama_mk" 
                   value="{{ old('nama_mk') }}"
                   required>
            @error('nama_mk')
                <div class="error-message">{{ $message }}</div>
            @enderror
            
            <label for="sks">SKS</label>
            <input type="number" 
                   id="sks" 
                   name="sks" 
                   value="{{ old('sks') }}"
                   min="1" 
                   max="6"
                   required>
            @error('sks')
                <div class="error-message">{{ $message }}</div>
            @enderror
            
            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>
</div>
@endsection