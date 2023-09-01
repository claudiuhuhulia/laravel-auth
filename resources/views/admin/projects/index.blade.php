@extends('layouts.app')

@section('title', 'Projects')


@section('content')
    <header class="d-flex justify-content-between align-items-center">
        <h1>Projects</h1>
        <a class="btn btn-success" href="{{ route('admin.projects.create') }}">Nuovo Progetto</a>
    </header>
    <hr>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NAME</th>
                <th scope="col">SLUG</th>
                <th scope="col">CREATO IL</th>
                <th scope="col" colspan="3">ULTIMA MODIFICA</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>{{ $project->created_at }}</td>
                    <td>{{ $project->updated_at }}</td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.projects.show', $project) }}">
                                <i class="fas fa-eye">
                                </i></a>
                            <a class="btn btn-sm btn-warning mx-2" href="{{ route('admin.projects.edit', $project) }}">
                                <i class="fas fa-pencil"></i>
                            </a>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center" colspan="6"></td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
