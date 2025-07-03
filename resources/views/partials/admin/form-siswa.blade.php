@extends('layouts.app')

@section('title', 'Form Siswa')

@section('content')
    <div class="container mx-auto p-6">
        <x-form-data-siswa :data-wali="$dataWali" :siswa="$siswa" :tingkat-pendidikan="$tingkatPendidikan" />
    </div>
@endsection
