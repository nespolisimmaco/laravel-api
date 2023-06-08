@extends('layouts.admin')

@section('content')
    <h1 class="text-center">Crea un nuovo progetto</h1>
    <div class="container">

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenuto</label>
                <textarea class="form-control" name="content" id="content">{{ old('content') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="type">Tipo</label>
                <select class="form-select" id="type" name="type_id">
                    <option value="">Seleziona</option>
                    @foreach ($types as $type)
                        <option @selected(old('type_id') == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-success my-2" type="submit">Invia</button>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary my-3 mx-1">Torna alla lista</a>
        </form>
    </div>
@endsection
