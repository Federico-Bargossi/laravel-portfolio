@extends('layouts.project')

@section('title')
    progetto numero {{ $project->id }}
@endsection


@section('content')
    <div class="d-flex py-4">
        <a class="btn btn-outline-warning me-4" href="{{ route('project.edit', $project) }}">Modifica</a>
        <form action="{{ route('project.destroy', $project) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-outline-danger me-4" value="Elimina">
        </form>
        <a class="btn btn-success" href="{{ route('project.index', $project) }}">Torna a tutti i progetti</a>
    </div>

    <div class="d-flex justify-content-center mt-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Autore: {{ $project->author }}, Categoria:
                    {{ $project->category->name }}</h6>
                <small>
                    @if ($project->technologies->isNotEmpty())
                        @foreach ($project->technologies as $tag)
                            <span class="badge bg-primary">{{ $tag->name }}</span>
                        @endforeach
                    @endif
                </small>
                <p class="card-text">{{ $project->content }}</p>
            </div>
        </div>
    </div>
@endsection
