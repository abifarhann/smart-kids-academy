@extends('layouts.app')

@section('title', 'Form Mentor')

@section('content')
    <div class="container mx-auto p-6">
        <x-form-data-mentor :mentor="$mentor" />
    </div>
@endsection
