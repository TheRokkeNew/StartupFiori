@extends('layouts.app')

@section('title', 'Crea Nuovo Utente - FlowerFormula')

@section('content')
<div class="container">
    <!-- Intestazione della pagina con breadcrumb -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Crea Nuovo Utente</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.panel') }}">Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Crea Nuovo Utente</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Dati dell'Utente</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.users.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" name="name" id="name" 
                                   class="form-control @error('name') is-invalid @enderror" 
                                   value="{{ old('name') }}" required>
                            <!-- Messaggio di errore per il campo nome -->
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Campo Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   value="{{ old('email') }}" required>
                            <!-- Messaggio di errore per il campo email -->
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" 
                                   class="form-control @error('password') is-invalid @enderror" required>
                            <!-- Messaggio di errore per il campo password -->
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Conferma Password</label>
                            <input type="password" name="password_confirmation" 
                                   id="password_confirmation" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="roles" class="form-label">Ruolo</label>
                            <select name="roles[]" id="roles" class="form-select" multiple>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Crea Utente</button>
                        <a href="{{ route('admin.panel') }}" class="btn btn-outline-secondary">Annulla</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection