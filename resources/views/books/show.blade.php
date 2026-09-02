@extends('layout.main')

@section('content')

<main>
    <div class="container py-5">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="livros.html">Meus Livros</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ensaio sobre a Cegueira</li>
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

                        <span class="badge-soft mb-2 d-inline-block">Ficção</span>

                        <h1 class="h3 mb-1">Ensaio sobre a Cegueira</h1>

                        <p class="text-secondary mb-3">
                            <i class="bi bi-person me-1"></i>
                            José Saramago
                        </p>

                        <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                            <div class="star-display" style="font-size: 1.1rem;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <span class="text-secondary small">
                                    <i class="bi bi-calendar3 me-1"></i>
                                    Lido em 2023
                                </span>
                        </div>

                        <h2 class="h6 text-uppercase text-secondary" style="letter-spacing: .04em;">A minha opinião</h2>
                        <p class="mb-4">
                            Um livro que me marcou pela forma como retrata o
                            comportamento humano em situações extremas.
                            Difícil de largar &mdash; li em poucos dias.
                        </p>

                        <div class="d-flex gap-2">
                            <a href="livros-edit.html" class="btn btn-outline-brand">
                                <i class="bi bi-pencil me-1"></i>
                                Editar
                            </a>
                            <a href="livros.html" class="btn btn-outline-secondary">
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
