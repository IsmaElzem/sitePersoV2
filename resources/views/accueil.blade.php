@extends('common.layout')

@section('content')

    <!-- DEBUT PREMIERE SECTION (PRESENTATION) -->
    <div id="section_presentation"></div>
    <div class="row">
        <div class="col">
            <!-- Début en tête Ismaël Zemmouj -->
            <div class="ligne_horizontale">
                <div class="ligne_horizontale_1"></div>
                <h3 class="text-center titre_principal">Ismaël Zemmouj</h3>
                <div class="ligne_horizontale_2"></div>
            </div>
            <!-- Fin en tête Ismaël Zemmouj -->
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">À propos de moi</h5>
                    Je suis un tout jeune consultant IT dans le secteur public, j'aime être au contact des clients
                    (difficiles en ces temps-ci) afin de les accompagner durant leurs transformations numériques.
                    Travailler en équipe est aussi une chose que j'apprécie fortement (nous apprenons davantage et plus
                    rapidement en équipe !) <br/><br/>Outre cela, j'ai des connaissances sur quelques langages (tel que
                    java, les langages web...) et j'essaie au mieux de m'améliorer en me challengeant des projets
                    personnels, tel que ce site-là.
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <!-- Début Image -->
                    <img src="{{ asset('img/moi.png') }}" class="col-md-4 img-responsive" alt="Moi">

                    <!-- Fin Image -->
                    <h5 class="card-title mt-4">Mais pourquoi ce site ?</h5>
                    Baignant dans la technologie de l'informatique depuis désormais 6 ans, j'ai décidé de me mettre aux
                    défis de faire ce site afin de continuer d'utiliser les différentes compétences que j'ai pu acquérir
                    grâce à mon cursus universitaire.
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title text-center">Quelques détails...</h5>
                    <b>Nom :</b><br>
                    Ismaël Zemmouj<br>
                    <b>Age :</b><br>
                    26 ans<br>
                    <b>Localisation :</b><br>
                    Picardie, France<br>
                    <b>Hobbies :</b><br>
                    Sport (course, football, tennis...)<br>
                    Sciences (astronomie, informatique)<br>
                    <b>Points forts :</b><br>
                    <ul>
                        <li>Force d'adaptation</li>
                        <li>Travail d'équipe</li>
                        <li>Qualité d'analyse</li>
                        <li>Qualité relationnelle</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- FIN PREMIERE SECTION (PRESENTATION) -->

    <!-- DEBUT 2ND SECTION (EXPERIENCES) -->

    <div id="section_experiences"></div>
    <div class="row">
        <div class="col">
            <div class="ligne_horizontale">
                <div class="ligne_horizontale_1"></div>
                <h3 class="text-center titre_principal">Parcours</h3>
                <div class="ligne_horizontale_2"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col text-center">
            <p class="h5 titre_principal">Professionnelle</p>
        </div>
    </div>

    <div class="timeline-container">
        <div class="timeline-block timeline-block-right">
            <div class="marker"></div>
            <div class="timeline-content">
                <img src="{{ asset('img/DXC_Technology_logo.svg') }}" class="logo_dxc img-responsive" alt="Moi">
                <h3>Consultant Junior</h3>
                <span>Février 2020 à aujourd'hui</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <div class="timeline-block timeline-block-left">
            <div class="marker"></div>
            <div class="timeline-content">
                <img src="{{ asset('img/Volkswagen_logo.svg') }}" class="logo_vw img-responsive" alt="Moi">
                <h3>Assistant chef de projet</h3>
                <span>Avril à septembre 2019</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <div class="timeline-block timeline-block-right">
            <div class="marker"></div>
            <div class="timeline-content">
                <img src="{{ asset('img/logo_baltazare.png') }}" class="logo_baltazare img-responsive" alt="Moi">
                <h3>Gestion de projet</h3>
                <span>Juillet et août 2018</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <div class="timeline-block timeline-block-left">
            <div class="marker"></div>
            <div class="timeline-content">
                <img src="{{ asset('img/upjv_logo.svg') }}" class="logo_upjv img-responsive" alt="Moi">
                <h3>Moniteur en centre de langue</h3>
                <span>Novembre 2016 à avril 2017</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <div class="timeline-block timeline-block-right">
            <div class="marker"></div>
            <div class="timeline-content">
                <img src="{{ asset('img/parc_asterix_logo.png') }}" class="logo_parc_asterix img-responsive" alt="Moi">
                <h3>Opérateur en ventes</h3>
                <span>Été 2014/15/16/17</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>



    <!-- FIN 2ND SECTION (EXPERIENCES) -->


    <!-- DEBUT 3EME SECTION (UNIVERSITAIRE) -->

    <div class="row">
        <div class="col text-center">
            <p class="h5 titre_principal">Universitaire</p>
        </div>
    </div>

    <div class="timeline-container">
        <div class="timeline-block timeline-block-right">
            <div class="marker"></div>
            <div class="timeline-content">
                <img src="{{ asset('img/upjv_logo.svg') }}" class="logo_upjv img-responsive" alt="Moi">
                <h3>Master MIAGE spé. OSIE</h3>
                <span>Date d'obtention : Septembre 2020</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <div class="timeline-block timeline-block-left">
            <div class="marker"></div>
            <div class="timeline-content">
                <img src="{{ asset('img/upjv_logo.svg') }}" class="logo_upjv img-responsive" alt="Moi">
                <h3>Licence MIAGE</h3>
                <span>Date d'obtention : Septembre 2018</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>

    <!-- FIN 3EME SECTION (UNIVERSITAIRE) -->

    <!-- DEBUT 4EME SECTION (COMPETENCES) -->

    <!-- Début compétence informatiques -->
    <div id="section_competence"></div>
    <div class="row">
        <div class="col">
            <div class="ligne_horizontale">
                <div class="ligne_horizontale_1"></div>
                <h3 class="text-center titre_principal">Compétences</h3>
                <div class="ligne_horizontale_2"></div>
            </div>
        </div>
    </div>
    <p class="h5 text-center titre_principal">Informatique</p>

    <div class="row mt-5">
        <div class="col-md-6 text-md-end">
            <ul>
                <li class="d-flex justify-content-between">
                    <span class="">Gestion de projet Agile</span>
                    <span class="all_star">
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                  		</span>
                </li>
            </ul>
        </div>

        <div class="col-md-6 text-md-end">
            <ul>
                <li class="d-flex justify-content-between">
                    <span class="">Bootstrap</span>
                    <span class="all_star">
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                  		</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 text-md-end">
            <ul>
                <li class="d-flex justify-content-between">
                    <span class="">Java</span>
                    <span class="all_star">
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                  		</span>
                </li>
            </ul>
        </div>

        <div class="col-md-6 text-md-end">
            <ul>
                <li class="d-flex justify-content-between">
                    <span class="">Pattern MVC</span>
                    <span class="all_star">
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                  		</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 text-md-end">
            <ul>
                <li class="d-flex justify-content-between">
                    <span class="">Programmation Orienté Objet</span>
                    <span class="all_star">
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                  		</span>
                </li>
            </ul>
        </div>

        <div class="col-md-6 text-md-end">
            <ul>
                <li class="d-flex justify-content-between">
                    <span class="">PHP</span>
                    <span class="all_star">
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                  		</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 text-md-end">
            <ul>
                <li class="d-flex justify-content-between">
                    <span class="">HTML(5)</span>
                    <span class="all_star">
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                  		</span>
                </li>
            </ul>
        </div>

        <div class="col-md-6 text-md-end">
            <ul>
                <li class="d-flex justify-content-between">
                    <span class="">Laravel</span>
                    <span class="all_star">
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                  		</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 text-md-end">
            <ul>
                <li class="d-flex justify-content-between">
                    <span class="">CSS(3)</span>
                    <span class="all_star">
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                    		<span class="fas fa-star"></span>
                  		</span>
                </li>
            </ul>
        </div>

        <div class="col-md-6 text-md-end">
            <ul>
                <li class="d-flex justify-content-between">
                    <span class="">JavaScript</span>
                    <span class="all_star">
                    		<span class="fas fa-star"></span>
                  		</span>
                </li>
            </ul>
        </div>
    </div>




    <!-- Fin compétence informatiques -->

    <!-- Début compétence Linguistique -->

    <div class="ligne_horizontale_1"></div>
    <p class="h5 text-center titre_principal">Langues</p>
    <div id="#centrer_element">
        <div class="row mt-5">
            <div class="col-md-6 text-md-end" id="align_element_milieu">
                <ul>
                    <li class="d-flex justify-content-between">
                        <span class="">Français</span>
                        <span class="all_star">
			                    <span class="fas fa-star"></span>
			                    <span class="fas fa-star"></span>
			                    <span class="fas fa-star"></span>
			                    <span class="fas fa-star"></span>
			                    <span class="fas fa-star"></span>
	                  		</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 text-md-end" id="align_element_milieu">
                <ul>
                    <li class="d-flex justify-content-between">
                        <span class="">Anglais</span>
                        <span class="all_star">
			                    <span class="fas fa-star"></span>
			                    <span class="fas fa-star"></span>
			                    <span class="fas fa-star"></span>
			                    <span class="fas fa-star"></span>
	                  		</span>
                    </li>
                </ul>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 text-md-end" id="align_element_milieu">
                <ul>
                    <li class="d-flex justify-content-between">
                        <span class="">Arabe</span>
                        <span class="all_star">
			                    <span class="fas fa-star"></span>
			                    <span class="fas fa-star"></span>
			                    <span class="fas fa-star"></span>
		                  	</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 text-md-end" id="align_element_milieu">
                <ul>
                    <li class="d-flex justify-content-between">
                        <span class="">Espagnol</span>
                        <span class="all_star">
			                    <span class="fas fa-star"></span>
			                    <span class="fas fa-star"></span>
	                  		</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Fin compétence Linguistique -->

    <!-- FIN 4EME SECTION (COMPETENCES) -->


    <!-- DEBUT 5EME SECTION (PROJETS REALISES) -->

    <div id="section_projets"></div>
    <div class="row">
        <div class="col">
            <div class="ligne_horizontale">
                <div class="ligne_horizontale_1"></div>
                <h3 class="text-center titre_principal">
                    Projets réalisés &nbsp;&nbsp;<a href="https://github.com/IsmaElzem" class="fab fa-github"></a></i>
                </h3>
                <div class="ligne_horizontale_2"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 text-center d-flex align-items-stretch mt-5">
            <div class="card img_test" style="width: 18rem;">
                <img class="card-img-top img-fluid thumbnail zoom" src="{{ asset('img/img_reseau_urbain_code.png') }}"
                     alt="Card image cap">
                <div class="card-body d-inline-flex flex-column">
                    <h5 class="card-title mt-2">Réseau Urbain</h5>
                    <p class="card-text">Simulateur d'un réseau urbain classique, en créant un graphe à partir de noeud,
                        qui contiennent un arrêt et la liste des noeuds fils. Ce projet a été fait pour le module
                        "Porgrammation orienté objet". Seul le code l'interface graphique n'a pas été fait par mes
                        soins.</p>
                    <a href="https://github.com/IsmaElzem/reseauUrbain"
                       class="btn btn-secondary btn-sm mt-auto">Voir</a>
                </div>
            </div>
        </div>


        <div class="col-md-4 text-center d-flex align-items-stretch mt-5">
            <div class="card img_test" style="width: 18rem;">
                <img class="card-img-top img-fluid thumbnail zoom" src="{{ asset('img/img_shot_code.png') }}" alt="Card image cap">
                <div class="card-body d-inline-flex flex-column">
                    <h5 class="card-title mt-2">Shoot em up</h5>
                    <p class="card-text">Détruire le plus de vaisseau ennemi possible, tel est le but. Vous avez 5 vies,
                        lorsqu'un ennemi vous touche, cela vous retire une vie. Si le vaisseau touche le sol, cela vous
                        retire également une vie. Votre score est affiché en haut à droite. Lorsque vous avez perdu,
                        vous êtes automatiquement renvoyé dans le menu principal.</p>
                    <a href="https://github.com/IsmaElzem/reseauUrbain"
                       class="btn btn-secondary btn-sm mt-auto">Voir</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 text-center d-flex align-items-stretch mt-5">
            <div class="card img_test" style="width: 18rem;">
                <img class="card-img-top img-fluid thumbnail zoom" src="{{ asset('img/img_puissance4_code.png') }}"
                     alt="Card image cap">
                <div class="card-body d-inline-flex flex-column">
                    <h5 class="card-title mt-2">Puissance 4</h5>
                    <p class="card-text">Jeu "Puissance 4" en assembleur 68k. Grille.png correspond à l'interprétation
                        qu'on doit avoir de la grille du jeu.
                        La musique peut être changée comme bon vous semble, il suffit de l'appeler "classic" et que ça
                        soit au format ".wav". Projet fait au cours de l'année universitaure 2016/2017.</p>
                    <a href="https://github.com/IsmaElzem/Puissance4" class="btn btn-secondary btn-sm mt-auto">Voir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- FIN 5EME SECTION (PROJETS REALISES) -->

    <!-- DEBUT 6EME SECTION (CONTACT) -->

    <div id="section_contact"></div>
    <div class="row">
        <div class="col">
            <div class="ligne_horizontale">
                <div class="ligne_horizontale_1"></div>
                <h3 class="text-center titre_principal">Contacts</h3>
                <div class="ligne_horizontale_2"></div>
            </div>
        </div>
    </div>

    <div class="row text-center mt-5">
        <div class="col-12">
            <p class="h5">Pour toutes questions, informations ou autres, vous pouvez me contacter par... </p>
            <br/><br/>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-6 align-items-stretch">
            <i class=""></i>
            <a href="mailto:zemmouj.ismael@gmail.com?subject = Feedback&body = Message"
               class="fas fa-at fa-3x mt-3"></a>
            <p class="h5">Mail</p>
        </div>
        <div class="col-6 align-items-stretch">
            <a href="https://www.linkedin.com/in/isma%C3%ABl-zemmouj-02b235128/" class="fab fa-linkedin fa-3x mt-3"></a>
            <p class="h5">LinkedIn</p>
        </div>
    </div>


    <!-- FIN 6EME SECTION (CONTACT) -->

@endsection
