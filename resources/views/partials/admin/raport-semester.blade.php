@extends('layouts.app')

@section('title', 'Nilai Semester Siswa')

@section('content')
    <div class="container mx-auto p-6">
       <x-raport-nilai-semester :base64Pdf="$base64Pdf" :siswa="$siswa" :tahunAjar="$tahunAjar" :semester="$semester"/>
    </div>
@endsection
