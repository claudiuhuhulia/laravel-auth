@extends('layouts.app')
@section('title', 'Modifica Project')

@section('content')
    <header class="d-flex justify-content-between align-items center">
        <h1>Modifica Projetto</h1>
        <a class="btn btn-secondary my-3" href="{{ route('admin.projects.index') }}"><i
                class="fas fa-arrow-left me-2"></i>Torna
            indietro</a>
    </header>
    <hr>
    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Inserisci il nome del progetto" value="{{ old('name', $project->name) }}"
                        maxlength="50" required>
                </div>
            </div>
            <div class="col-6">

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" disabled
                        value="{{ Str::slug(old('name', $project->name), '-') }}">
                </div>
            </div>

            <div class="col-12">
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="10" required>{{ old('content', $project->content) }}</textarea>
                </div>
            </div>
            <div class="col-11">
                <div class="mb-3">
                    <label for="image" class="form-label">Url dell'immagine</label>
                    <input type="url" class="form-control" id="image" name="image"
                        value="{{ old('image', $project->image) }}" placeholder="Insersisci un url valido">
                </div>
            </div>
            <div class="col-1">
                <img src="{{ old('image', $project->image ?? 'https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=') }}"
                    alt="preview" class="img-fluid my-2" id="image-preview">
            </div>
            <hr>
            <div class="d-flex justify-content-end mt-2">
                <button class="btn btn-success">
                    <i class="fas fa-floppy-disk me-2"></i>Salva
                </button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    @Vite('resources/js/image-previewer.js')
    @Vite('resources/js/slug-generator.js')



@endsection
