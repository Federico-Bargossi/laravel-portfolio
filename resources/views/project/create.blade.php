@extends('layouts.project')

@section('title', 'Aggiungi un progetto')

@section('content')


    <form action="{{ route('project.store') }}" method="POST">
        @csrf

        <div class="form-control mb-3 d-flex flex-column">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title">
        </div>


        <div class="form-control mb-3 d-flex flex-column">
            <label for="author">Autore</label>
            <input type="text" name="author" id="author">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="category_id">Categoria</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-control mb-3 d-flex flex-wrap gap-3">
            @foreach ($technologies as $technology)
                <div class="tags me-2">
                    <input type="checkbox" name="technologies[]" value="{{$technology->id}}" id="technology-{{$technology->id}}">
                    <label for="technology-{{$technology->id}}">{{ $technology->name }}</label>
                </div>
            @endforeach
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="content">contenuto</label>
            <textarea name="content" id="content"></textarea>
        </div>

        <input type="submit" value="Salva">
    </form>

@endsection
