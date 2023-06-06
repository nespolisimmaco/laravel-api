@extends('layouts.admin')

@section('content')
    <div class="my-2 text-end">
        <a class="btn btn-secondary" href="{{ route('admin.projects.create') }}">Crea un nuovo fumetto</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-primary">
                            <i class="fa-solid fa-circle-info"></i>
                        </a>
                        <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-warning">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
