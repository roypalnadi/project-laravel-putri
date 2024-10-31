@extends('layouts.app')

@section('content')
    @php
        $title = "Dashboard";
        $breadcrumbs = [
            ['name' => 'Homes', 'link' => '#'],
            ['name' => 'Dashboard', 'link' => '#'],
        ];
        $rooms = [
            (object)['id' => 1, 'number' => '101'],
            (object)['id' => 2, 'number' => '102'],
            // Add more room objects as needed
        ];
    @endphp

    <x-content :title="$title" :breadcrumbs="$breadcrumbs" />
    <x-reservation-dashboard />
@endsection
