@extends('layouts.app')


@section('content')
    @php
        $title = "Riwayat";
        $breadcrumbs = [
            ['name' => 'Homes', 'link' => '#'],
            ['name' => 'Riwayat', 'link' => '#'],
        ];
        $rooms = [
            (object)['id' => 1, 'number' => '101'],
            (object)['id' => 2, 'number' => '102'],
            // Add more room objects as needed
        ];
    @endphp

    <x-content :title="$title" :breadcrumbs="$breadcrumbs" />
    <x-reservation-riwayat />

@endsection
