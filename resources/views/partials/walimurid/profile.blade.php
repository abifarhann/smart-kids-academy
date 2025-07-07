@extends('layouts.app')

@section('title', 'Data Diri')

@section('content')
    <div class="container mx-auto p-6">
       <x-card-profile :waliMurid="$waliMurid" :dataSiswa="$dataSiswa" />
    </div>
@endsection
