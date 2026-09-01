<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Géneros · MyBookshelf</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    >

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Inter:wght@400;500;600;700&display=swap');

        :root {
            --ink: #10243e;
            --brand: #1d5f9e;
            --brand-dark: #123f6b;
            --sky: #4f8fc4;
            --sky-light: #7fb2dd;
            --brand-light: #eaf3fb;
            --paper: #ffffff;
            --star: #f2b134;
        }

        * {
            font-family: 'Inter', sans-serif;
        }

        h1, h2, h3, .display-serif {
            font-family: 'Fraunces', serif;
            color: var(--ink);
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #f4f8fc;
            color: var(--ink);
        }

        main {
            flex: 1;
        }

        /* Navbar */
        .navbar-brand {
            font-family: 'Fraunces', serif;
            font-weight: 600;
            font-size: 1.35rem;
            letter-spacing: .2px;
        }

        .navbar-mybs {
            background-color: var(--ink);
        }

        .navbar-mybs .nav-link {
            color: rgba(255,255,255,.75);
        }

        .navbar-mybs .nav-link.active,
        .navbar-mybs .nav-link:hover {
            color: #fff;
        }

        /* Buttons & accents */
        .bg-brand { background-color: var(--brand) !important; }

        .btn-brand {
            background-color: var(--brand);
            border-color: var(--brand);
            color: #fff;
        }
        .btn-brand:hover, .btn-brand:focus {
            background-color: var(--brand-dark);
            border-color: var(--brand-dark);
            color: #fff;
        }

        .btn-outline-brand {
            color: var(--brand);
            border-color: var(--brand);
            background: #fff;
        }
        .btn-outline-brand:hover, .btn-outline-brand:focus {
            background-color: var(--brand);
            border-color: var(--brand);
            color: #fff;
        }

        .text-brand { color: var(--brand) !important; }

        .badge-soft {
            background-color: var(--brand-light);
            color: var(--brand-dark);
            font-weight: 500;
            padding: .4em .75em;
            border-radius: 50rem;
        }

        /* Cards */
        .panel {
            background: var(--paper);
            border-radius: 1.1rem;
            border: 1px solid #e3edf7;
        }

        /* Hero (home) */
        .hero-panel {
            background: linear-gradient(150deg, #ffffff 55%, var(--brand-light) 100%);
            border-radius: 1.4rem;
            border: 1px solid #e3edf7;
        }

        .stat-card {
            background: var(--paper);
            border: 1px solid #e3edf7;
            border-radius: .9rem;
            padding: 1rem 1.2rem;
        }

        .stat-number {
            font-family: 'Fraunces', serif;
            font-size: 1.6rem;
            color: var(--ink);
            line-height: 1;
        }

        .stat-label {
            font-size: .82rem;
            color: #5b7089;
        }

        .book-stack {
            position: relative;
            height: 230px;
        }

        .spine {
            position: absolute;
            border-radius: .45rem;
            box-shadow: 0 14px 28px rgba(16, 36, 62, .18);
        }

        .spine-1 { width: 72%; height: 36px; background: var(--brand); top: 38%; left: 12%; transform: rotate(-4deg); }
        .spine-2 { width: 58%; height: 32px; background: var(--sky); top: 54%; left: 22%; transform: rotate(3deg); }
        .spine-3 { width: 48%; height: 28px; background: var(--brand-dark); top: 68%; left: 6%; transform: rotate(-2deg); }

        .book-stack i {
            position: absolute;
            top: 6%;
            right: 18%;
            font-size: 2.8rem;
            color: var(--sky-light);
        }

        .feature-icon {
            width: 54px;
            height: 54px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 1.4rem;
            background: var(--brand-light);
            color: var(--brand-dark);
        }

        .feature-card {
            position: relative;
            overflow: hidden;
            border-radius: 1.1rem;
        }
        .feature-card::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--brand), var(--sky-light));
        }

        /* Book cards (listing) */
        .book-card {
            background: var(--paper);
            border: 1px solid #e3edf7;
            border-radius: 1rem;
            overflow: hidden;
            height: 100%;
            transition: box-shadow .15s ease, transform .15s ease;
        }
        .book-card:hover {
            box-shadow: 0 16px 30px rgba(16, 36, 62, .12);
            transform: translateY(-2px);
        }

        .book-cover {
            height: 130px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            color: rgba(255,255,255,.9);
        }

        .cover-a { background: linear-gradient(135deg, #1d5f9e, #123f6b); }
        .cover-b { background: linear-gradient(135deg, #4f8fc4, #1d5f9e); }
        .cover-c { background: linear-gradient(135deg, #2c6ea5, #10243e); }
        .cover-d { background: linear-gradient(135deg, #7fb2dd, #2c6ea5); }

        .book-title {
            font-family: 'Fraunces', serif;
            font-size: 1.05rem;
            margin-bottom: .1rem;
        }

        .book-author {
            font-size: .88rem;
            color: #5b7089;
            margin-bottom: .5rem;
        }

        .star-display i {
            color: var(--star);
            font-size: .95rem;
        }
        .star-display i.bi-star {
            color: #d7e3ee;
        }

        /* Star rating input (create/edit forms) */
        .star-rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
            gap: .2rem;
        }
        .star-rating input { display: none; }
        .star-rating label {
            font-size: 1.7rem;
            color: #d7e3ee;
            cursor: pointer;
            transition: color .15s ease;
        }
        .star-rating input:checked ~ label,
        .star-rating label:hover,
        .star-rating label:hover ~ label {
            color: var(--star);
        }

        .form-section-title {
            font-family: 'Fraunces', serif;
            font-size: 1.05rem;
            color: var(--ink);
            margin-bottom: 1rem;
            padding-bottom: .5rem;
            border-bottom: 1px solid #e3edf7;
        }

        .cover-hero {
            border-radius: 1rem;
            min-height: 260px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.4rem;
            color: rgba(255,255,255,.9);
        }

    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-mybs shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="base.html">
            <i class="bi bi-bookmark-star me-2"></i>
            MyBookshelf
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
            aria-controls="mainNavbar"
            aria-expanded="false"
            aria-label="Abrir navegação"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="base.html">
                        <i class="bi bi-house me-1"></i>
                        Início
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="livros.html">
                        <i class="bi bi-journal-bookmark me-1"></i>
                        Meus Livros
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="generos.html">
                        <i class="bi bi-tags me-1"></i>
                        Géneros
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


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

<footer class="bg-white border-top py-3">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
                <span class="text-secondary small">
                    <i class="bi bi-bookmark-star text-brand me-1"></i>
                    MyBookshelf
                </span>
            <span class="text-secondary small">MiniProjeto Laravel &middot; registo pessoal de leituras</span>
        </div>
    </div>
</footer>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>
