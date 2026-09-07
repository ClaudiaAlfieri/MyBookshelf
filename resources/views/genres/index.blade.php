@extends('layout.main')

@section('content')

    <main>
        <div class="container py-5">

            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
                <div>
                    <h1 class="h3 mb-1">Géneros</h1>
                    <p class="text-secondary mb-0">Organize a sua estante por género literário.</p>
                </div>

                <a href="{{ route('genres.create') }}" class="btn btn-brand">
                    <i class="bi bi-plus-lg me-1"></i>
                    Novo Género
                </a>
            </div>

            <div class="panel">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                        <tr style="background-color: var(--brand-light);">
                            <th>#</th>
                            <th>Nome</th>
                            <th>Livros</th>
                            <th class="text-end">Ações</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($genres as $genre)
                            <tr>
                                <td>{{ $genre->id }}</td>
                                <td class="fw-medium">{{ $genre->name }}</td>
                                <td>
                                <span class="badge-soft">
                                    {{ $genre->books_count }} {{ Str::plural('livro', $genre->books_count) }}
                                </span>
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-sm btn-outline-brand me-1" title="Editar">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <form action="{{ route('genres.destroy', $genre->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Eliminar">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-secondary py-4">
                                    Ainda não existem géneros cadastrados.
                                </td>
                            </tr>
                        @endforelse

                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </main>

@endsection
