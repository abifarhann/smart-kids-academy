@extends('layouts.app')

@section('title', 'Data Mata Pelajaran')

@section('content')
    <div class="container mx-auto p-6">
        <x-tabel-mapel :dataWali="$dataWali" />
    </div>
@endsection