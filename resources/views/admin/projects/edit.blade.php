@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card w-100 pt-2">
            <div class="card-body">
                <h5 class="card-title">Edit Project</h5>
                <form action="{{ route('admin.projects.update', $project->id) }}" method="POST"
                    onsubmit="return confirm('Sei sicuro di voler modificare questo progetto?');">
                    @csrf
                    @method('PUT') <!-- Metodo PUT per l'aggiornamento -->

                    <div class="form-group">
                        <label for="name">Project Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ old('name', $project->name) }}" required>
                    </div>

                    <div class="form-group my-3">
                        <label for="project_type_id" class="mb-1">Tipo di progetto</label> <br>
                        <select name="type_id" id="project_type_id">
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group my-3">
                        <label for="project_technology" class="mb-1">Seleziona Tecnologie</label> <br>
                        @foreach ($technologies as $technology)
                            <div class="form-check">
                                <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                                    id="technology-{{ $technology->id }}" class="form-check-input">
                                <label for="technology-{{ $technology->id }}" class="form-check-label">
                                    {{ $technology->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>

                    <div class="form-group">
                        <label for="date">Started on</label>
                        <input type="date" name="date" id="date" class="form-control"
                            value="{{ old('date', $project->date) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="languages">Languages used</label>
                        <input type="text" name="languages" id="languages" class="form-control"
                            value="{{ old('languages', $project->languages) }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $project->description) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Update Project</button>
                </form>
            </div>
        </div>
    </div>
@endsection
