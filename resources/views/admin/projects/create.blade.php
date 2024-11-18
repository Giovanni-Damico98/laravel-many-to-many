@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card w-100 pt-2">
            <div class="card-body">
                <h5 class="card-title">Crea un nuovo progetto</h5>
                <form action="{{ route('admin.projects.store') }}" method="POST"
                    onsubmit="return confirm('Sei sicuro di voler creare questo progetto?');">
                    @csrf

                    <div class="form-group">
                        <label for="name">Nome del progetto</label>
                        <input type="text" name="name" id="name" class="form-control" required>
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
                        <label for="date">Iniziato in data</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="languages">Linguaggio utilizzato</label>
                        <input type="text" name="languages" id="languages" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Crea il progetto</button>
                    <button type="reset" class="btn btn-warning mx-1 mt-3">Pulisci</button>
                    <a href="{{ route('admin.projects.store') }}" class="btn btn-danger mt-3">Torna alla home</a>
                </form>
            </div>
        </div>
    </div>
@endsection
