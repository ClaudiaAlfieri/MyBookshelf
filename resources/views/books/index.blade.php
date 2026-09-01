@extends('layout.main')

@section('content')

<main>
    <div class="container py-5">

        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
            <div>
                <h1 class="h3 mb-1">Meus Livros</h1>
                <p class="text-secondary mb-0">Tudo o que já leu, com autor, ano e avaliação.</p>
            </div>

            <a href="livros-create.html" class="btn btn-brand">
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
                        <option>Ficção</option>
                        <option>Clássico</option>
                        <option>Fantasia</option>
                        <option>Poesia</option>
                        <option>Distopia</option>
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
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="book-card">
                    <div class="book-cover cover-a">
                        <i class="bi bi-book-half"></i>
                    </div>
                    <div class="p-3">
                        <span class="badge-soft mb-2 d-inline-block">Fantasia</span>
                        <h3 class="book-title">A Menina do Mar</h3>
                        <p class="book-author">Sophia de Mello Breyner</p>
                        <div class="star-display mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="text-secondary small mb-3">
                            <i class="bi bi-calendar3 me-1"></i>
                            Lido em 2022
                        </p>
                        <div class="d-flex gap-1">
                            <a href="livros-show.html" class="btn btn-sm btn-outline-brand flex-fill" title="Ver">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="livros-edit.html" class="btn btn-sm btn-outline-brand flex-fill" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger flex-fill" title="Remover">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="book-card">
                    <div class="book-cover cover-b">
                        <i class="bi bi-book"></i>
                    </div>
                    <div class="p-3">
                        <span class="badge-soft mb-2 d-inline-block">Ficção</span>
                        <h3 class="book-title">Ensaio sobre a Cegueira</h3>
                        <p class="book-author">José Saramago</p>
                        <div class="star-display mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div>
                        <p class="text-secondary small mb-3">
                            <i class="bi bi-calendar3 me-1"></i>
                            Lido em 2023
                        </p>
                        <div class="d-flex gap-1">
                            <a href="livros-show.html" class="btn btn-sm btn-outline-brand flex-fill" title="Ver">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="livros-edit.html" class="btn btn-sm btn-outline-brand flex-fill" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger flex-fill" title="Remover">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="book-card">
                    <div class="book-cover cover-c">
                        <i class="bi bi-journal-text"></i>
                    </div>
                    <div class="p-3">
                        <span class="badge-soft mb-2 d-inline-block">Clássico</span>
                        <h3 class="book-title">Os Maias</h3>
                        <p class="book-author">Eça de Queirós</p>
                        <div class="star-display mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="text-secondary small mb-3">
                            <i class="bi bi-calendar3 me-1"></i>
                            Lido em 2021
                        </p>
                        <div class="d-flex gap-1">
                            <a href="livros-show.html" class="btn btn-sm btn-outline-brand flex-fill" title="Ver">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="livros-edit.html" class="btn btn-sm btn-outline-brand flex-fill" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger flex-fill" title="Remover">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="book-card">
                    <div class="book-cover cover-d">
                        <i class="bi bi-book-half"></i>
                    </div>
                    <div class="p-3">
                        <span class="badge-soft mb-2 d-inline-block">Poesia</span>
                        <h3 class="book-title">Mensagem</h3>
                        <p class="book-author">Fernando Pessoa</p>
                        <div class="star-display mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></div>
                        <p class="text-secondary small mb-3">
                            <i class="bi bi-calendar3 me-1"></i>
                            Lido em 2024
                        </p>
                        <div class="d-flex gap-1">
                            <a href="livros-show.html" class="btn btn-sm btn-outline-brand flex-fill" title="Ver">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="livros-edit.html" class="btn btn-sm btn-outline-brand flex-fill" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger flex-fill" title="Remover">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="book-card">
                    <div class="book-cover cover-b">
                        <i class="bi bi-journal-text"></i>
                    </div>
                    <div class="p-3">
                        <span class="badge-soft mb-2 d-inline-block">Ficção</span>
                        <h3 class="book-title">Memorial do Convento</h3>
                        <p class="book-author">José Saramago</p>
                        <div class="star-display mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></div>
                        <p class="text-secondary small mb-3">
                            <i class="bi bi-calendar3 me-1"></i>
                            Lido em 2023
                        </p>
                        <div class="d-flex gap-1">
                            <a href="livros-show.html" class="btn btn-sm btn-outline-brand flex-fill" title="Ver">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="livros-edit.html" class="btn btn-sm btn-outline-brand flex-fill" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger flex-fill" title="Remover">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="book-card">
                    <div class="book-cover cover-a">
                        <i class="bi bi-book"></i>
                    </div>
                    <div class="p-3">
                        <span class="badge-soft mb-2 d-inline-block">Distopia</span>
                        <h3 class="book-title">1984</h3>
                        <p class="book-author">George Orwell</p>
                        <div class="star-display mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="text-secondary small mb-3">
                            <i class="bi bi-calendar3 me-1"></i>
                            Lido em 2024
                        </p>
                        <div class="d-flex gap-1">
                            <a href="livros-show.html" class="btn btn-sm btn-outline-brand flex-fill" title="Ver">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="livros-edit.html" class="btn btn-sm btn-outline-brand flex-fill" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger flex-fill" title="Remover">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>

@endsection
