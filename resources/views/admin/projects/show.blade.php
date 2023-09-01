@extends('layouts.app')
@section('title', 'Project')

@section('content')
    <header>
        <h1>{{ $project->name }}</h1>
    </header>
    <hr>
    <div class="clearfix">
        <img class="float-start me-2" src="{{ $project->image }}" alt="{{ $project->name }}">
        <p>{{ $project->content }}</p>
        <div>
            <strong>Creato il:</strong>{{ $project->created_at }}
            <strong>Ultima modifica:</strong>{{ $project->updated_at }}
        </div>
    </div>
    <hr>
    <footer class="d-flex justify-content-between">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Torna alla lista</a>
        <div class="d-flex justify-content-end">

            <a class="btn btn-warning mx-2" href="{{ route('admin.projects.edit', $project) }}">
                <i class="fas fa-pencil me-2"></i>Modifica
            </a>
            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">
                    <i class="fas fa-trash me-2">
                    </i>
                    Elimina

                </button>
            </form>
        </div>
    </footer>
@endsection