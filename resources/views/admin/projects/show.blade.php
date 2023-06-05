@extends('layouts.admin')

@section('content')
    <h1 class="text-center">{{ $project->title }}</h1>
    <div class="text-end">
        {{ $project->slug }}
    </div>
    <h3>Contenuto</h3>
    <p class="mt-4">{{ $project->content }}</p>
    <h3>Descrizione</h3>
    <p class="mt-4">{{ $project->description }}</p>
@endsection
