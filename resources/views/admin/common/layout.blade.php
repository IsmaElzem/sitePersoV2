<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ismaël Zemmouj">
    <link rel="shortcut icon" href="{{ asset('img/favicon_iz.ico') }}" type="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--[if gte IE 7]>
        <link rel="stylesheet" href="{{ asset('css/fix_internet_explorer.css') }}">
        <![endif]-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <![if !IE]>
    <link rel="stylesheet" href="{{ asset('css/index-admin.css?v=').time() }}">
    <![endif]>

</head>
<body>

<!-- Début navbar -->
<nav class="navbar navbar-expand-lg banniere fixed-top">
    <div class="container">
        <span class="navbar-brand brandSite">Ismaël Zemmouj</span>
        <button class="navbar-toggler float-end" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
                style="outline-color: #3DB9C3;">
            <span style="color: #3DB9C3"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active me-3">
                    <a class="nav-link hoverNav" href="#section_presentation">Profil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item active me-3">
                    <a class="nav-link hoverNav" href="#section_experiences">Parcours
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item active me-3">
                    <a class="nav-link hoverNav" href="#section_competence">Compétences
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item active me-3">
                    <a class="nav-link hoverNav" href="#section_projets">Projets réalisés
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item active me-3">
                    <a class="nav-link hoverNav" href="#section_contact">Contact
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" style="color: #154360;">Connexion
                    </a>
                </li>

                @if (Auth::check())
                    @if (auth()->user()->role_id == 3)
                        <li class="nav-item active me-3">
                            <a class="nav-link hoverNav" href="{{ route('admin') }}">Panel Admin
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ auth()->user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                                    {{ __('Déconnexion') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- Fin navbar -->

<!-- Fin courbe gauche -->
<div class="container">
    <!-- Début courbe droite -->
    <div class="courbe_droite"></div>
    <!-- Fin courbe droite -->

    @yield('content')

</div>

<!-- DEBUT FOOTER -->
<footer class="pt-4 my-md-5 pt-md-5 border-top mb-4">
    <div class="row text-center">
        <div class="col-12 col-md">
            <p class="text-muted credit"><script>document.write(new Date().getFullYear())</script> - Ismaël Zemmouj - v2.0</p>
        </div>
    </div>
</footer>
<!-- FIN FOOTER -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/c0a7d0130b.js" crossorigin="anonymous"></script>





</body>
</html>
