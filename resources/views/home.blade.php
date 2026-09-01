@extends('layout.main')

@section('content')

    <main>
        <div class="container py-5">

            <section class="hero-panel p-4 p-lg-5 mb-5">
                <div class="row align-items-center g-4">

                    <div class="col-lg-7">
                        <h1 class="display-serif fw-semibold mb-3" style="font-size: 2.6rem;">
                            A sua estante, sempre à mão.
                        </h1>

                        <p class="lead text-secondary mb-4" style="max-width: 42ch;">
                            Guarde os livros que já leu, quem escreveu,
                            em que ano leu e o que achou de cada um &mdash;
                            tudo num só lugar.
                        </p>

                        <div class="d-flex flex-wrap gap-2 mb-4">
                            <a href="livros-create.html" class="btn btn-brand">
                                <i class="bi bi-plus-lg me-2"></i>
                                Adicionar Livro
                            </a>
                            <a href="livros.html" class="btn btn-outline-brand">
                                <i class="bi bi-journal-bookmark me-2"></i>
                                Ver a Estante
                            </a>
                        </div>

                        <div class="row g-3" style="max-width: 480px;">
                            <div class="col-4">
                                <div class="stat-card text-center">
                                    <div class="stat-number">12</div>
                                    <div class="stat-label">livros lidos</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-card text-center">
                                    <div class="stat-number">4.3<i class="bi bi-star-fill ms-1" style="font-size:.9rem; color: var(--star);"></i></div>
                                    <div class="stat-label">média das notas</div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-card text-center">
                                    <div class="stat-number" style="font-size: 1.15rem;">Ficção</div>
                                    <div class="stat-label">género favorito</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="book-stack">
                            <div class="spine spine-1"></div>
                            <div class="spine spine-2"></div>
                            <div class="spine spine-3"></div>
                            <i class="bi bi-bookmark-star"></i>
                        </div>
                    </div>

                </div>
            </section>

            <div class="row g-4">

                <div class="col-md-6">
                    <div class="panel feature-card h-100">
                        <div class="card-body p-4">
                            <div class="feature-icon mb-3">
                                <i class="bi bi-journal-bookmark"></i>
                            </div>
                            <h2 class="h4">Meus Livros</h2>
                            <p class="text-secondary">
                                Veja tudo o que já leu, com autor, ano de leitura
                                e a nota que deu a cada livro.
                            </p>
                            <a href="livros.html" class="btn btn-outline-brand">
                                Ver estante
                                <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel feature-card h-100">
                        <div class="card-body p-4">
                            <div class="feature-icon mb-3">
                                <i class="bi bi-tags"></i>
                            </div>
                            <h2 class="h4">Géneros</h2>
                            <p class="text-secondary">
                                Organize os seus livros por género
                                e acompanhe o que mais costuma ler.
                            </p>
                            <a href="generos.html" class="btn btn-outline-brand">
                                Ver géneros
                                <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </main>

@endsection
