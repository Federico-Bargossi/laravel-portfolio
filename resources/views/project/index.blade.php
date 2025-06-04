@extends('layouts.project')

@section("title", "Tutti i progetti");

@section("content")

    <div class="container mt-4">
        <a class="btn btn-primary mb-4" href="{{ route("project.create" )}}">Aggiungi un progetto</a>
        <a class="btn btn-success mb-4" href="{{ route("dashboard")}}">Torna alla dashboard</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Titolo</th>
                    <th>Autore</th>
                    <th>Content</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($project as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->author }}</td>
                        <td>{{ $item->content }}</td>
                        <td>
                           <a href="{{ route("project.show", $item->id)}}">Visualizza Contenuto</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection


    
