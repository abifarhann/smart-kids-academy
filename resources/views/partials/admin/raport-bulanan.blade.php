@extends('layouts.app')

@section('title', 'Nilai Bulanan Siswa')

@section('content')
    <div class="container mx-auto p-6">
        <x-raport-nilai-bulan :base64Pdf="$base64Pdf" :siswa="$siswa" :bulan="$bulan" :semester="$semester" />
    </div>
@endsection
