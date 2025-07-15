@extends('layouts.app')

@section('title', 'Data Mata Pelajaran')

@section('content')
    <div class="container mx-auto p-6">
        <x-tabel-program :dataProgram="$dataProgram" />
    </div>
@endsection
