@extends('layouts.app')

@section('title', 'Form Admin')

@section('content')
    <div class="container mx-auto p-6">
        <x-form-data-admin :admin="$admin" />
    </div>
@endsection
