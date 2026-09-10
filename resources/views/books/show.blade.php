@extends('layout.main')

@section('content')

    <main>
        <div class="container py-5">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('books.index') }}">Meus Livros</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $book->title }}</li>
                </ol>
            </nav>

            <div class="panel">
                <div class="card-body p-4 p-lg-5">

                    <div class="row g-4">

                        <div class="col-md-4">
                            <div class="cover-hero cover-b">
                                <i class="bi bi-book"></i>
                            </div>
                        </div>

                        <div class="col-md-8">

                        <span class="badge-soft mb-2 d-inline-block">
                            {{ $book->genre->name ?? 'Sem género' }}
                        </span>

                            <h1 class="h3 mb-1">{{ $book->title }}</h1>

                            <p class="text-secondary mb-3">
                                <i class="bi bi-person me-1"></i>
                                {{ $book->author }}
                            </p>

                            <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                                <div class="star-display" style="font-size: 1.1rem;">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="bi {{ $i <= $book->rating ? 'bi-star-fill' : 'bi-star' }}"></i>
                                    @endfor
                                </div>
                                <span class="text-secondary small">
                                <i class="bi bi-calendar3 me-1"></i>
                                Lido em {{ $book->year_read }}
                            </span>
                            </div>

                            @if($book->notes)
                                <h2 class="h6 text-uppercase text-secondary" style="letter-spacing: .04em;">A minha opinião</h2>
                                <p class="mb-4">
                                    {{ $book->notes }}
                                </p>
                            @endif

                            <div class="d-flex gap-2">
                                <a href="{{ route('books.edit', $book) }}" class="btn btn-outline-brand">
                                    <i class="bi bi-pencil me-1"></i>
                                    Editar
                                </a>
                                <a href="{{ route('books.index') }}" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-left me-1"></i>
                                    Voltar à estante
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>

    </main>

@endsection
