@extends('layout.main')

@section('content')

    <main>
        <div class="container py-5">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('genres.index') }}">Géneros</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Novo</li>
                </ol>
            </nav>

            <h1 class="h3 mb-4">Novo Género</h1>

            {{--Resumo dos erros--}}

            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <strong>Existem Erros no formulário</strong>
                </div>
            @endif

            <div class="panel">
                <div class="card-body p-4 p-lg-5">

                    <form action="{{ route('genres.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="form-label">Nome</label>
                            <input
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Ex: Ficção Científica"
                            >
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('genres.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-brand">
                                <i class="bi bi-check-lg me-1"></i>
                                Guardar Género
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </main>

@endsection
