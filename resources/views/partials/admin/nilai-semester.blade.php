@extends('layouts.app')

@section('title', 'Nilai Semester Siswa')

@section('content')
    <div class="container mx-auto p-6">
       <x-tabel-nilai-smt :dataSiswa="$dataSiswa" :mapelList="$mapelList" :tingkatPendidikanList="$tingkatPendidikanList" :programList="$programList" :tahunAjarList="$tahunAjarList"/>
    </div>
@endsection
