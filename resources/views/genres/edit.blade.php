@extends('layout.main')

@section('content')

<main>
    <div class="container py-5">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="generos.html">Géneros</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>

        <h1 class="h3 mb-4">Editar Género</h1>

        <div class="panel">
            <div class="card-body p-4 p-lg-5">

                <form action="#" method="POST">

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="Clássico" required>
                    </div>

                    <div class="mb-4">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Breve descrição do género...">Obras consagradas ao longo do tempo.</textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="generos.html" class="btn btn-outline-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-brand">
                            <i class="bi bi-check-lg me-1"></i>
                            Atualizar Género
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>

</main>

@endsection
