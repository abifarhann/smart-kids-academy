@extends('layouts.app')

@section('title', 'Form Mata Pelajaran')

@section('content')
    <div class="container mx-auto p-6">
        <x-form-data-mapel :mapel="$mapel" :tingkatPendidikan="$tingkatPendidikan" />
    </div>
@endsection
