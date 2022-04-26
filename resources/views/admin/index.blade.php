@extends('admin.common.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">

                <div class="mt-3 mb-3 text-center">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#InformationsPerso">Mes informations perso.</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ExperiencePro">Expériences pro.</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ParcoursUniversitaire">Parcours universitaire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Competences">Compétences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ProjetsRealiser">Projets réalisés</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Contact">Contact</a>
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
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="aProposDeMoi" class="form-label">A propos de moi</label>
                                    <textarea type="text" class="form-control" id="aProposDeMoi" row="5"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="RaisonSite" class="form-label">Mais pourquoi ce site ?</label>
                                    <textarea type="text" class="form-control" id="RaisonSite" row="5"></textarea>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="nom" class="form-label">Nom / Prénom</label>
                                    <input type="text" class="form-control" id="nom">
                                </div>
                                <div class="col-md-2">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="text" class="form-control" id="age">
                                </div>
                                <div class="col-md-2">
                                    <label for="localisation" class="form-label">Localisation</label>
                                    <input type="text" class="form-control" id="localisation">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="hobbies" class="form-label">Hobbies</label>
                                    <textarea type="text" class="form-control" id="hobbies" row="2"></textarea>
                                </div>
                                <div class="col-md-3">
                                    <label for="pointsForts" class="form-label">Points forts</label>
                                    <textarea type="text" class="form-control" id="pointsForts" row="2"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mx-auto">
                                    <a class="btn btn-primary" href="#" role="button">Modifier</a>
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
                        <div class="tab-pane fade" id="ExperiencePro">
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
                                            <th scope="col">Entreprise</th>
                                            <th scope="col">Poste</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Détail</th>
                                            <th scope="col">Logo</th>
                                            <th scope="col">Action</th>
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

@endsection
