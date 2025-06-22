@extends('layouts.app')

@section('title', 'Form Wali Siswa')

@section('content')
    <div class="container mx-auto p-6">
        <x-form-data-wali-siswa :wali="$wali" />
    </div>
@endsection
