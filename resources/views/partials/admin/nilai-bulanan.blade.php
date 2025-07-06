@extends('layouts.app')

@section('title', 'Nilai Bulanan Siswa')

@section('content')
    <div class="container mx-auto p-6">
       <x-tabel-nilai-bulanan :mapelList="$mapelList" :dataSiswa="$dataSiswa"/>
    </div>
@endsection
