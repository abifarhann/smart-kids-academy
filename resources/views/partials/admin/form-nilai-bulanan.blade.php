@extends('layouts.app')

@section('title', 'Tambah Nilai Bulanan Siswa')

@section('content')
    <div class="container mx-auto p-6">
        <x-form-nilai-bln :dataSiswa="$dataSiswa" :nilai="$nilai" :mapelBerdasarkanTingkat="$mapelBerdasarkanTingkat" :dataMentor="$dataMentor" :groupId="$groupId" />
    </div>
@endsection
