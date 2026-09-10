@extends('layout.main')

@section('content')

    <main>
        <div class="container py-5">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('books.index') }}">Meus Livros</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('books.show', $book) }}">{{ $book->title }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Editar</li>
                </ol>
            </nav>

            <h1 class="h3 mb-4">Editar Livro</h1>

            {{--Resumo dos erros--}}

            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <strong>Existem Erros no formulário</strong>
                </div>
            @endif

            <div class="panel">
                <div class="card-body p-4 p-lg-5">

                    <form action="{{ route('books.update', $book) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <p class="form-section-title">Detalhes do livro</p>

                        <div class="mb-3">
                            <label for="title" class="form-label">Título</label>
                            <input
                                type="text"
                                class="form-control @error('title') is-invalid @enderror"
                                id="title"
                                name="title"
                                value="{{ old('title', $book->title) }}"
                            >
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="author" class="form-label">Autor</label>
                            <input
                                type="text"
                                class="form-control @error('author') is-invalid @enderror"
                                id="author"
                                name="author"
                                value="{{ old('author', $book->author) }}"
                            >
                            @error('author')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="genre_id" class="form-label">Género</label>
                                <select class="form-select @error('genre_id') is-invalid @enderror" id="genre_id" name="genre_id">
                                    <option value="" disabled>Selecione um género</option>
                                    @foreach($genres as $genre)
                                        <option value="{{ $genre->id }}" {{ old('genre_id', $book->genre_id) == $genre->id ? 'selected' : '' }}>
                                            {{ $genre->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('genre_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="year_read" class="form-label">Ano que leu</label>
                                <input
                                    type="number"
                                    class="form-control @error('year_read') is-invalid @enderror"
                                    id="year_read"
                                    name="year_read"
                                    value="{{ old('year_read', $book->year_read) }}"
                                    min="1900"
                                    max="2100"
                                >
                                @error('year_read')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <p class="form-section-title mt-4">A minha leitura</p>

                        <div class="mb-4">
                            <label class="form-label d-block">Avaliação</label>
                            <div class="star-rating">
                                @for($i = 5; $i >= 1; $i--)
                                    <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}" {{ old('rating', $book->rating) == $i ? 'checked' : '' }}>
                                    <label for="star{{ $i }}" title="{{ $i }} estrelas"><i class="bi bi-star-fill"></i></label>
                                @endfor
                            </div>
                            @error('rating')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="notes" class="form-label">Notas / o que achei</label>
                            <textarea
                                class="form-control @error('notes') is-invalid @enderror"
                                id="notes"
                                name="notes"
                                rows="4"
                            >{{ old('notes', $book->notes) }}</textarea>
                            @error('notes')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('books.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-brand">
                                <i class="bi bi-check-lg me-1"></i>
                                Atualizar Livro
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </main>

@endsection
