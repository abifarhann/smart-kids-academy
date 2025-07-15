@extends('layouts.app')

@section('title', 'Data Mentor')

@section('content')
    <div class="container mx-auto p-6">
        <x-tabel-mentor :dataMentor="$dataMentor" :tingkatPendidikanList="$tingkatPendidikanList" :programList="$programList" />
    </div>
@endsection
