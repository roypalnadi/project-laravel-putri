@extends('layouts.app')

@section('content')
@php
        $title = "Data Kamar";
        $breadcrumbs = [
            ['name' => 'Homes', 'link' => '#'],
            ['name' => 'Data Kamar', 'link' => '#'],
        ];
        $rooms = [
            (object)['id' => 1, 'number' => '101'],
            (object)['id' => 2, 'number' => '102'],
            // Add more room objects as needed
        ];
    @endphp

    <x-content :title="$title" :breadcrumbs="$breadcrumbs" />
   {{-- resources/views/data-kamar.blade.php --}}


    <!-- Pesan notifikasi statis -->
    <div class="alert alert-success">Kamar berhasil ditambahkan!</div>

    <div class="mb-3">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addKamarModal">Tambah Kamar</button>
    </div>

    <!-- Tabel Data Kamar (Statis) -->
    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nomor Kamar</th>
                <th>Status Kamar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ([['id' => 1, 'nomor' => 101, 'status' => 'ON'], ['id' => 2, 'nomor' => 102, 'status' => 'ON']] as $index => $kamar)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $kamar['nomor'] }}</td>
                    <td>{{ $kamar['status'] }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm text-white">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal untuk Menambah Kamar -->
<div class="modal fade" id="addKamarModal" tabindex="-1" aria-labelledby="addKamarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Form statis tanpa action untuk saat ini -->
        <form>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addKamarModalLabel">Tambah Kamar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nomor_kamar" class="form-label">Nomor Kamar</label>
                        <input type="text" class="form-control" id="nomor_kamar" required>
                    </div>
                    <div class="mb-3">
                        <label for="status_kamar" class="form-label">Status Kamar</label>
                        <select class="form-select" id="status_kamar" required>
                            <option>ON</option>
                            <option>OFF</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Tambah Kamar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
