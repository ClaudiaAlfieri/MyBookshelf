@extends('layout.main')

@section('content')

    <main>
        <div class="container py-5">

            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
                <div>
                    <h1 class="h3 mb-1">Meus Livros</h1>
                    <p class="text-secondary mb-0">Tudo o que já leu, com autor, ano e avaliação.</p>
                </div>

                <a href="{{ route('books.create') }}" class="btn btn-brand">
                    <i class="bi bi-plus-lg me-1"></i>
                    Adicionar Livro
                </a>
            </div>

            <div class="panel p-3 mb-4">
                <div class="row g-2 align-items-center">
                    <div class="col-md-7">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0">
                                <i class="bi bi-search text-secondary"></i>
                            </span>
                            <input
                                type="text"
                                class="form-control border-start-0 ps-0"
                                placeholder="Pesquisar por título ou autor..."
                            >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option selected>Todos os géneros</option>
                            @foreach($genres as $genre)
                                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select">
                            <option selected>Mais recentes</option>
                            <option>Melhor avaliados</option>
                            <option>Título A-Z</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row g-3">

                @forelse($books as $book)

                    @php
                        $covers = ['cover-a', 'cover-b', 'cover-c', 'cover-d'];
                        $icons  = ['bi-book-half', 'bi-book', 'bi-journal-text'];
                        $cover  = $covers[$loop->index % count($covers)];
                        $icon   = $icons[$loop->index % count($icons)];
                    @endphp

                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="book-card">
                            <div class="book-cover {{ $cover }}">
                                <i class="bi {{ $icon }}"></i>
                            </div>
                            <div class="p-3">
                            <span class="badge-soft mb-2 d-inline-block">
                                {{ $book->genre->name ?? 'Sem género' }}
                            </span>

                                <h3 class="book-title">{{ $book->title }}</h3>
                                <p class="book-author">{{ $book->author }}</p>

                                <div class="star-display mb-2">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="bi {{ $i <= $book->rating ? 'bi-star-fill' : 'bi-star' }}"></i>
                                    @endfor
                                </div>

                                <p class="text-secondary small mb-3">
                                    <i class="bi bi-calendar3 me-1"></i>
                                    Lido em {{ $book->year_read }}
                                </p>

                                <div class="d-flex gap-1">
                                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-outline-brand flex-fill" title="Ver">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-outline-brand flex-fill" title="Editar">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="flex-fill">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger w-100" title="Remover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty

                    <div class="col-12">
                        <div class="panel p-5 text-center text-secondary">
                            <i class="bi bi-journal-x mb-2" style="font-size: 2rem;"></i>
                            <p class="mb-0">Ainda não adicionou nenhum livro à sua estante.</p>
                        </div>
                    </div>

                @endforelse

            </div>

        </div>

    </main>

@endsection
