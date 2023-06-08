@extends('layouts.admin')

@section('content')
    <h1 class="text-center">{{ $project->title }}</h1>
    <div class="d-flex justify-content-between">
        @if ($project->type)
            <div>Tipo: {{ $project->type->name }}</div>
        @else
            <div>Nessuna Categoria</div>
        @endif
        <div>{{ $project->slug }}</div>
    </div>
    <h3>Contenuto</h3>
    <p class="mt-4">{{ $project->content }}</p>
    <h3>Descrizione</h3>
    <p class="mt-4">{{ $project->description }}</p>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary my-3">Torna alla lista</a>
    <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-warning my-3 mx-1 d-inline-block">Modifica</a>
    <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
        @csrf
        @method('DELETE')
        <button onclick="confirmation()" type="submit" class="btn btn-danger">
            Elimina
        </button>
    </form>
@endsection
