@extends('layouts.project')

@section('title', 'modifica un progetto')

@section('content')

    <form action="{{ route('project.update', $project) }}"   method="POST">
        @csrf 
        @method("PUT")

        <div class="form-control mb-3 d-flex flex-column">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{$project->title}}">
        </div>


        <div class="form-control mb-3 d-flex flex-column">
            <label for="author">Autore</label>
            <input type="text" name="author" id="author" value="{{$project->author}}">
        </div>

         <div class="form-control mb-3 d-flex flex-column">
            <label for="category_id">Categoria</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{ $project->category_id == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

         <div class="form-control mb-3 d-flex flex-wrap gap-3">
            @foreach ($technologies as $technology)
                <div class="tags me-2">
                    <input type="checkbox" name="technologies[]" value="{{$technology->id}}" id="technology-{{$technology->id}}" {{$project->technologies->contains($technology->id) ? 'checked' : ''}}>
                    <label for="technology-{{$technology->id}}">{{ $technology->name }}</label>
                </div>
            @endforeach
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="content">contenuto</label>
            <textarea name="content" id="content">{{$project->content}}</textarea>
        </div>

        <input type="submit" value="Salva">
    </form>

@endsection
