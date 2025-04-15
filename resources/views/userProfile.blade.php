@extends('layouts.app')

@section('title', 'Profilo Utente')

@section('content')
<style>
    .bg-classic{
        background-color:rgb(248, 112, 189);
    }
    body{
    background-color:rgba(247, 207, 171, 0.55);
  }
  .camera-upload {
    position: relative;
    display: inline-block;
  }
  .camera-upload input[type="file"] {
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
  }
  .camera-icon {
    font-size: 1.2rem;
    color: #6c757d;
    transition: all 0.3s;
  }
  .camera-upload:hover .camera-icon {
    color: #0d6efd;
  }
</style>
<div class="container py-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <!-- Sidebar Profilo -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <div class="position-relative mb-3">
                        <form action="{{route('upload.image') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="camera-upload position-absolute bottom-0 end-0">
                            <!-- Input file nascosto ma cliccabile -->
                            <input type="file" accept="image/*" class="d-none" id="avatar-upload" name="profile_image" id="profile_image">
                            <label for="avatar-upload" class="btn btn-sm btn-outline-secondary rounded-circle p-2">
                                <i class="fas fa-camera camera-icon"></i>
                            </label>
                            </div>
                        </div>
                        <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" class="rounded-circle" style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%;"  alt="Avatar">
                        <h4>Ciao {{ auth()->user()->name }}!</h4>
                        <p class="text-muted">{{ auth()->user()->email }}</p>
                        <div class="d-grid gap-2 mt-4">
                            <button class="btn bg-classic" type="submit">
                                <i class="fas fa-cog me-2"></i>Salva modifiche
                                <div style="font-size: 12px;">max 2M</div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="card shadow-sm mt-4">
                <div class="card-header bg-classic text-white">
                    <h6 class="mb-0">Statistiche</h6>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between py-2 border-bottom">
                        <span>Preferiti</span>
                        <span class="fw-bold">5</span>
                    </div>
                    <div class="d-flex justify-content-between py-2">
                        <span>Membro dal</span>
                        <span class="fw-bold">{{ auth()->user()->created_at->format('d/m/Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contenuto Principale -->
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-classic text-white">
                    <h5 class="mb-0">Informazioni Profilo</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('updateUserProfile') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nome</label>
                                <input type="text" class="form-control" value="{{ auth()->user()->name }}" name="name" id="name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" value="{{ auth()->user()->email }}" name="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Nuova password">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Conferma Passowrd</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Conferma password">
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn bg-classic">Salva modifiche</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection