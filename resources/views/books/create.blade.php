@extends('layout.main')

@section('content')

<main>
    <div class="container py-5">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="livros.html">Meus Livros</a></li>
                <li class="breadcrumb-item active" aria-current="page">Adicionar</li>
            </ol>
        </nav>

        <h1 class="h3 mb-4">Adicionar Livro</h1>

        <div class="panel">
            <div class="card-body p-4 p-lg-5">

                <form action="#" method="POST">

                    <p class="form-section-title">Detalhes do livro</p>

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ex: Os Maias" required>
                    </div>

                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Ex: Eça de Queirós" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="genero_id" class="form-label">Género</label>
                            <select class="form-select" id="genero_id" name="genero_id" required>
                                <option value="" disabled selected>Selecione um género</option>
                                <option value="1">Ficção</option><option value="2">Clássico</option><option value="3">Fantasia</option><option value="4">Poesia</option><option value="5">Distopia</option><option value="6">Infantil</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="ano_leitura" class="form-label">Ano que leu</label>
                            <input type="number" class="form-control" id="ano_leitura" name="ano_leitura" placeholder="Ex: 2024" min="1900" max="2100" required>
                        </div>
                    </div>

                    <p class="form-section-title mt-4">A minha leitura</p>

                    <div class="mb-4">
                        <label class="form-label d-block">Avaliação</label>
                        <div class="star-rating">
                            <input type="radio" id="star5" name="avaliacao" value="5">
                            <label for="star5" title="5 estrelas"><i class="bi bi-star-fill"></i></label>
                            <input type="radio" id="star4" name="avaliacao" value="4">
                            <label for="star4" title="4 estrelas"><i class="bi bi-star-fill"></i></label>
                            <input type="radio" id="star3" name="avaliacao" value="3">
                            <label for="star3" title="3 estrelas"><i class="bi bi-star-fill"></i></label>
                            <input type="radio" id="star2" name="avaliacao" value="2">
                            <label for="star2" title="2 estrelas"><i class="bi bi-star-fill"></i></label>
                            <input type="radio" id="star1" name="avaliacao" value="1">
                            <label for="star1" title="1 estrelas"><i class="bi bi-star-fill"></i></label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="notas" class="form-label">Notas / o que achei</label>
                        <textarea class="form-control" id="notas" name="notas" rows="4" placeholder="Escreva a sua opinião sobre o livro..."></textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="livros.html" class="btn btn-outline-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-brand">
                            <i class="bi bi-check-lg me-1"></i>
                            Guardar na Estante
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>

</main>

@endsection

