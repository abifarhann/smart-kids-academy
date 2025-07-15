@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')
    <div class="container mx-auto p-6">
        <x-tabel-siswa :data="$dataSiswa" :tingkatPendidikanList="$tingkatPendidikanList" :programList="$programList" />
    </div>
@endsection
