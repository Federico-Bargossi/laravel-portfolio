@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col">
                <h1 class="display-5 fw-bold">Area Admin</h1>
                <p class="text-muted">Benvenuto nella tua area amministrativa. Qui puoi gestire il contenuto del tuo
                    portfolio.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title">Gestione Progetti</h5>
                        <p class="card-text">Visualizza, modifica o elimina i tuoi progetti.</p>
                        <a href="{{ route('project.index') }}" class="btn btn-primary">Vai ai Progetti</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title">Profilo Utente</h5>
                        <p class="card-text">Modifica le informazioni del tuo profilo e le credenziali.</p>
                        <a href="{{ route('profile.edit') }}" class="btn btn-secondary">Modifica Profilo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
