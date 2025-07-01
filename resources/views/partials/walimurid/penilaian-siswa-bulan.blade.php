@extends('layouts.app')

@section('title', 'Penilaian Siswa')

@section('content')
    <div class="container mx-auto p-6">
       <x-card-header-bln />
       <x-chart-bln-js />
       <x-card-bulan />
    </div>
@endsection