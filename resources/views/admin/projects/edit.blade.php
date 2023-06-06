@extends('layouts.admin')

@section('content')
    <h1 class="text-center">Modifica un progetto</h1>
    <div class="container">

        <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $project->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenuto</label>
                <textarea class="form-control" name="content" id="content">{{ old('content', $project->content) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description">{{ old('description', $project->description) }}</textarea>
            </div>
            <button class="btn btn-success my-2" type="submit">Invia</button>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary my-3 mx-1">Torna alla lista</a>
        </form>
    </div>
@endsection
