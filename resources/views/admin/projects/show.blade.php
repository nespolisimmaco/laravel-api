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
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary my-3">Torna alla lista</a>
    <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-warning my-3 mx-1 d-inline-block">Modifica</a>
@endsection
