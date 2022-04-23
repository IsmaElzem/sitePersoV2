<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Ismaël Zemmouj">
        <link rel="shortcut icon" href="favicon.ico" type="">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
              integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!--[if gte IE 7]>
        <link rel="stylesheet" href="{{ asset('css/fix_internet_explorer.css') }}">
        <![endif]-->


        <![if !IE]>
        <link rel="stylesheet" href="{{ asset('css/page_principale.css') }}">
        <![endif]>


        <title>Zemmouj Ismaël</title>
    </head>
    <body>
    <!-- Début courbe gauche -->

        <!-- Navbar pour écran > 767.98 -->
        <div class="navbar_verticale_large_screen">
            <div class="courbe_gauche"></div>
            <div class="nav_marker_change_color">
                <div class="nav_point_accueil"></div>
                <div class="nav_text_accueil nav_spe"><a href="#section_presentation" class="nav_btn_rond">Profil</a></div>
            </div>
            <div class="nav_marker_change_color">
                <div class="nav_point_parcours"></div>
                <div class="nav_text_parcours"><a href="#section_experiences" class="nav_btn_rond">Parcours</a></div>
            </div>
            <div class="nav_marker_change_color">
                <div class="nav_point_competences"></div>
                <div class="nav_text_competences"><a href="#section_competence" class="nav_btn_rond">Compétences</a></div>
            </div>
            <div class="nav_marker_change_color">
                <div class="nav_point_projets"></div>
                <div class="nav_text_projets"><a href="#section_projets" class="nav_btn_rond">Projets réalisés</a></div>
            </div>
            <div class="nav_marker_change_color">
                <div class="nav_point_contact"></div>
                <div class="nav_text_contact"><a href="#section_contact" class="nav_btn_rond">Contact</a></div>
            </div>
        </div>

        <!-- Navbar pour écran < 767.98 -->

        <div class="navbar_small_screen">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" aria-label="Eighth navbar example">
                <div class="container">
                    <a class="navbar-brand">IZE</a>
                    <div class="navbar-toggler dropdown-toggle" type="button" data-toggle="dropdown"
                         data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false"
                         aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </div>
                    <div class="collapse navbar-collapse text-center dropdown-test" id="navbarsExample07">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#section_presentation">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section_experiences">Parcours</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section_competence">Compétences</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section_projets">Projets réalisés</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section_contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

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
                    <a class="text-muted credit">2020 - Ismaël Zemmouj - v1.0</a>
                </div>
            </div>
        </footer>
        <!-- FIN FOOTER -->

    </body>
</html>
