@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-xl font-bold mb-4">Daftar Kendaraan Parkir</h2>
    <table class="table-auto w-full border-collapse border">
        <thead>
            <tr class="bg-gray-200">
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Plat Nomor</th>
                <th class="border px-4 py-2">Jenis Kendaraan</th>
                <th class="border px-4 py-2">Waktu Masuk</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td class="border px-4 py-2">{{ $item->id }}</td>
                <td class="border px-4 py-2">{{ $item->plat_nomor }}</td>
                <td class="border px-4 py-2">{{ $item->jenis_kendaraan }}</td>
                <td class="border px-4 py-2">{{ $item->waktu_masuk }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
