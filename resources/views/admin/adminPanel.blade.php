@extends('layouts.app')

@section('title', 'Pannello Admin - FamilyFinance')

@section('content')
<div class="container">
    <!-- Titolo e breadcrumb -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Pannello di Amministrazione</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Admin</li>
            </ol>
        </nav>
    </div>

    <!-- Statistiche rapide -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card border-primary">
                <div class="card-body">
                    <h5 class="card-title">Utenti</h5>
                    <p class="display-6">{{$totalUsers}}</p>
                    <a href="#" class="small">Vedi tutti</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-success">
                <div class="card-body">
                    <h5 class="card-title">Fiori</h5>
                    <p class="display-6">{{ $totalFlowers }}</p>
                    <a href="{{ route('flowers.index') }}" class="small">Vedi</a>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3">
            <div class="card border-warning">
                <div class="card-body">
                    <h5 class="card-title">Transazioni</h5>
                    <p class="display-6">156</p>
                    <a href="#" class="small">Vedi tutte</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-danger">
                <div class="card-body">
                    <h5 class="card-title">Report</h5>
                    <p class="display-6">12</p>
                    <a href="#" class="small">Genera nuovo</a>
                </div>
            </div>
        </div> -->
    </div>

    <!-- Sezione principale -->
    <div class="row">
        <!-- Tabella utenti -->
        <div class="col-md-8">
            <div class="card shadow-sm mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Gestione Utenti</h5>
                    <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-primary">+ Nuovo Utente</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Ruolo</th>
                                    <th>Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @foreach ($user->roles as $role)
                                            <span class="badge bg-primary">{{ $role->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.users.edit.view', $user->id) }}" class="btn btn-sm btn-outline-secondary">Modifica</a>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Elimina</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Azioni rapide -->
        <!-- <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Azioni Rapide</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary text-start">
                            <i class="bi bi-people-fill me-2"></i>Gestisci Famiglie
                        </button>
                        <button class="btn btn-outline-success text-start">
                            <i class="bi bi-cash-stack me-2"></i>Verifica Transazioni
                        </button>
                        <button class="btn btn-outline-warning text-start">
                            <i class="bi bi-gear-fill me-2"></i>Impostazioni Sistema
                        </button>
                        <button class="btn btn-outline-danger text-start">
                            <i class="bi bi-file-earmark-text me-2"></i>Genera Report
                        </button>
                    </div>
                </div>
            </div>

        </div> -->
    </div>
</div>
@endsection