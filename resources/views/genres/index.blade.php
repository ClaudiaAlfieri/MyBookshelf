@extends('layout.main')

@section('content')

<main>
    <div class="container py-5">

        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
            <div>
                <h1 class="h3 mb-1">Géneros</h1>
                <p class="text-secondary mb-0">Organize a sua estante por género literário.</p>
            </div>

            <a href="generos-create.html" class="btn btn-brand">
                <i class="bi bi-plus-lg me-1"></i>
                Novo Género
            </a>
        </div>

        <div class="panel">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                    <tr style="background-color: var(--brand-light);">
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Livros</th>
                        <th class="text-end">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="fw-medium">Ficção</td>
                        <td class="text-secondary">Narrativas criadas pela imaginação do autor.</td>
                        <td><span class="badge-soft">4 livros</span></td>
                        <td class="text-end">
                            <a href="generos-edit.html" class="btn btn-sm btn-outline-brand me-1" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger" title="Eliminar">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-medium">Clássico</td>
                        <td class="text-secondary">Obras consagradas ao longo do tempo.</td>
                        <td><span class="badge-soft">2 livros</span></td>
                        <td class="text-end">
                            <a href="generos-edit.html" class="btn btn-sm btn-outline-brand me-1" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger" title="Eliminar">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-medium">Fantasia</td>
                        <td class="text-secondary">Mundos e histórias fora da nossa realidade.</td>
                        <td><span class="badge-soft">3 livros</span></td>
                        <td class="text-end">
                            <a href="generos-edit.html" class="btn btn-sm btn-outline-brand me-1" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger" title="Eliminar">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-medium">Poesia</td>
                        <td class="text-secondary">Textos com forte carga expressiva e rítmica.</td>
                        <td><span class="badge-soft">1 livros</span></td>
                        <td class="text-end">
                            <a href="generos-edit.html" class="btn btn-sm btn-outline-brand me-1" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger" title="Eliminar">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-medium">Distopia</td>
                        <td class="text-secondary">Sociedades futuras marcadas por opressão.</td>
                        <td><span class="badge-soft">2 livros</span></td>
                        <td class="text-end">
                            <a href="generos-edit.html" class="btn btn-sm btn-outline-brand me-1" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-outline-danger" title="Eliminar">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</main>

@endsection
