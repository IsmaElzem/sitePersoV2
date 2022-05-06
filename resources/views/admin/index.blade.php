@extends('admin.common.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">

                <div class="mt-3 mb-3 text-center">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="nav-item">
                            <a class="nav-link" href="#InformationsPerso" data-toggle="tab">Mes informations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experiencePro" data-toggle="tab">Expériences pro.</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ParcoursUniversitaire" data-toggle="tab">Université</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Competences" data-toggle="tab">Compétences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ProjetsRealiser" data-toggle="tab">Projets réalisés</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Contact" data-toggle="tab">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="mt-3 mb-3 text-center">

                    <div class="tab-content">

                      <!------------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      ------------------------  Informations personnelles  ---------------------------
                      --------------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      ------------------------------------------------------------------------------->
                        <div class="tab-pane fade show active" id="InformationsPerso">

                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">{{ __('Modifier mes informations') }}</div>

                                        <div class="card-body">
                                            <!-- Début form -->
                                            <form method="POST" id="formCreation" enctype="multipart/form-data" action="#">
                                                @csrf

                                                <!-- DEBUT NOM -->
                                                <div class="form-group row my-3">
                                                    <label for="nom"
                                                           class="col-md-2 col-form-label text-md-end">{{ __('Nom') }}</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="nom">
                                                    </div>
                                                </div>
                                                <!-- FIN NOM -->

                                                <!-- DEBUT PRENOM -->
                                                <div class="form-group row my-3">
                                                    <label for="prenom"
                                                           class="col-md-2 col-form-label text-md-end">{{ __('Prenom') }}</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="prenom">
                                                    </div>
                                                </div>
                                                <!-- FIN PRENOM -->

                                                <!-- DEBUT AGE -->
                                                <div class="form-group row my-3">
                                                    <label for="age"
                                                           class="col-md-2 col-form-label text-md-end">{{ __('Age') }}</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="age">
                                                    </div>
                                                </div>
                                                <!-- FIN AGE -->

                                                <!-- DEBUT LOCALISATION -->
                                                <div class="form-group row my-3">
                                                    <label for="localisation"
                                                           class="col-md-2 col-form-label text-md-end">{{ __('Localisation') }}</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="localisation">
                                                    </div>
                                                </div>
                                                <!-- FIN LOCALISATION -->

                                                <!-- DEBUT HOBBIES -->
                                                <div class="form-group row my-3">
                                                    <label for="hobbies"
                                                           class="col-md-2 col-form-label text-md-end">{{ __('Hobbies') }}</label>
                                                    <div class="col-md-3">
                                                        <textarea type="text" class="form-control" id="hobbies" row="2"></textarea>
                                                    </div>
                                                </div>
                                                <!-- FIN HOBBIES -->

                                                <!-- DEBUT POINTS FORTS -->
                                                <div class="form-group row my-3">
                                                    <label for="pointsForts"
                                                           class="col-md-2 col-form-label text-md-end">{{ __('Points Forts') }}</label>
                                                    <div class="col-md-3">
                                                        <textarea type="text" class="form-control" id="pointsForts" row="2"></textarea>
                                                    </div>
                                                </div>
                                                <!-- FIN POINTS FORTS -->

                                                <!-- DEBUT A PROPOS -->
                                                <div class="form-group row mb-3">
                                                    <label for="aPropos"
                                                           class="col-md-2 col-form-label text-md-end">{{ __('A propos') }}</label>
                                                    <div class="col-md-10">
                                                        <textarea type="text" class="form-control" id="aPropos" row="5"></textarea>
                                                    </div>
                                                </div>
                                                <!-- FIN À PROPOS -->

                                                <!-- DEBUT PQ CE SITE -->
                                                <div class="form-group row">
                                                    <label for="raisonSite"
                                                           class="col-md-2 col-form-label text-md-end">{{ __('Mais pourquoi ce site ?') }}</label>
                                                    <div class="col-md-10">
                                                        <textarea type="text" class="form-control" id="raisonSite" row="5"></textarea>
                                                    </div>
                                                </div>
                                                <!-- FIN PQ CE SITE -->

                                                <!-- DEBUT BTN VALIDE -->
                                                <div class="row text-center my-3 justify-content-center">
                                                    <div class="col-md-12">
                                                        <button type="submit" form="formCreation" class="btn btn-primary">
                                                            Valider
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- FIN BTN VALIDE -->

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!----------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      ------------------------  Expériences professionnelles  ------------------------
                      --------------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      ------------------------------------------------------------------------------->
                        <div class="tab-pane fade" id="experiencePro">

                            <div class="row">
                                <div class="col-md-12 mx-auto">
                                    <h3>
                                        Mes expériences professionnelles <a class="btn btn-primary" href="#" role="button">+</a>
                                    </h3>

                                </div>
                            </div>
                            {{-- @if(!is_null($experiencePro))--}}
                            <div class="row ">
                                <div class="col-md-12">
                                    <table id="listeCompetences" class="table table-striped table-hover" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Entreprise</th>
                                            <th>Poste</th>
                                            <th>Date</th>
                                            <th>Détail</th>
                                            <th>Logo</th>
                                            <th class="col-md-2">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>DXC</td>
                                            <td>Consultant junior</td>
                                            <td>Février 2020 à aujourd'hui</td>
                                            <td>Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.</td>
                                            <td>Insérer un fichier</td>
                                            <td>
                                                <a href="#" class="me-2"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="me-2"><i class="fa-solid fa-trash-can"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- @else
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="alert alert-warning">
                                                Aucune compétence.
                                            </div>
                                         </div>
                                    </div>
                                @endif

                                <!--  Début pagination -->
                                <div class="row my-5">
                                    <div class="col-md-12">

                                        <div class="d-flex justify-content-center mt-4">
                                            {!! $experiencePro->links() !!}
                                        </div>

                                    </div>
                                </div>
                                <!-- Fin pagination -->
                                --}}
                        </div>



                        <!----------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      ------------------------  Parcours universitaire  ------------------------------
                      --------------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      ------------------------------------------------------------------------------->
                        <div class="tab-pane fade" id="ParcoursUniversitaire">
                            <div class="row">
                                <div class="col-md-12 mx-auto">
                                    <a class="btn btn-primary" href="#" role="button">Ajouter</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Université</th>
                                            <th scope="col">Diplôme</th>
                                            <th scope="col">Date d'obtention</th>
                                            <th scope="col">Détail</th>
                                            <th scope="col">Logo</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Université de Picardie Jules Verne</td>
                                            <td>Master MIAGE spé. OSIE</td>
                                            <td>Septembre 2020</td>
                                            <td>Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.</td>
                                            <td>Insérer un fichier</td>
                                            <td>
                                                <a href="#" class="me-2"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="me-2"><i class="fa-solid fa-trash-can"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!----------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      ------------------------  Competences  -----------------------------------------
                      --------------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      ------------------------------------------------------------------------------->
                        <div class="tab-pane fade" id="Competences">
                            <div class="row">
                                <div class="col-md-12 mx-auto">
                                    <a class="btn btn-primary" href="#" role="button">Ajouter</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Catégorie</th>
                                            <th scope="col">Compétence</th>
                                            <th scope="col">Nombre étoile</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Informatique</td>
                                            <td>Excel VBA</td>
                                            <td>2</td>
                                            <td>
                                                <a href="#" class="me-2"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="me-2"><i class="fa-solid fa-trash-can"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!----------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      ------------------------  Projets Réalisés  ------------------------------------
                      --------------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      ------------------------------------------------------------------------------->
                        <div class="tab-pane fade" id="ProjetsRealiser">
                            <div class="row">
                                <div class="col-md-12 mx-auto">
                                    <a class="btn btn-primary" href="#" role="button">Ajouter</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Le Panier d'Elias</td>
                                            <td>Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.</td>
                                            <td>Insérer un fichier</td>
                                            <td>
                                                <a href="#" class="me-2"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="me-2"><i class="fa-solid fa-trash-can"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!----------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      ------------------------  Contact  ---------------------------------------------
                      --------------------------------------------------------------------------------
                      --------------------------------------------------------------------------------
                      ------------------------------------------------------------------------------->
                        <div class="tab-pane fade" id="Contact">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="insererMail" class="form-label">Email</label>
                                    <input class="form-control form-control-sm" type="email" id="insererMail" disabled>
                                    <label for="linkedin" class="form-label">Lien linkedin</label>
                                    <input class="form-control form-control-sm" type="text" id="linkedin" disabled>
                                    <a class="btn btn-primary" href="#" role="button">Ajouter</a>
                                    <a class="btn btn-primary" href="#" role="button">Modifier</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    @section('js')
        <script type="text/javascript">
            $(document).ready(function() {
                $('#listeCompetences').DataTable({
                    language: {
                        url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/fr_fr.json'
                    },
                    pageLength: 10
                });
            } );
        </script>
    @endsection




@endsection
