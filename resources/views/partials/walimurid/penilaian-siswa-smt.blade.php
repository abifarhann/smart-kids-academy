@extends('layouts.app')

@section('title', 'Penilaian Siswa')

@section('content')
    <div class="container mx-auto space-y-6 p-6">
        <x-card-header-smt :waliMurid="$waliMurid" :dataSiswa="$dataSiswa" />
    </div>
@endsection
