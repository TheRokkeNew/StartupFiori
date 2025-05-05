@extends('layouts.app')

@section('title', 'Modifica Utente')

@section('content')
<div class="container">
    <h1 class="mb-4">Modifica Utente</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.users.edit', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

    <div class="mb-3">
        <label for="role" class="form-label">Ruoli</label>
        <select class="form-select" id="role" name="role">
            <option value="" {{ is_null($user->role) ? 'selected' : '' }}>Nessun ruolo</option>
            <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="supervisor" {{ $user->role === 'supervisor' ? 'selected' : '' }}>Supervisor</option>
        </select>
    </div>


        <button type="submit" class="btn btn-primary">Salva Modifiche</button>
    </form>
</div>
@endsection
