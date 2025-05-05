<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation du Projet</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../css/theme.css" rel="stylesheet" type="text/css"/>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h1>Welcome Training</h1>
                <p class="lead">Application de gestion de présences det de signatures en lignes</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <img src="../img/Wt.png" alt="Welcome_training" class="img-responsive">
            </div>
            <div class="col-md-6">
                <h2>À propos du projet</h2>
                <p>Welcome Training est une application de gestion de présence et de signature en ligne. Suite à certains dysfonctionnements de notre apllication de gestion de présence en ligne Bienvenue Formation,on a décidé de faire une application du même type en corrigeant les lacunes de notre application par défaut</p>
                <div class="mt-4">
                    <h3>Technologies utilisées</h3>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-success"></i> PHP</li>
                        <li><i class="fa fa-check text-success"></i> MySQL</li>
                        <li><i class="fa fa-check text-success"></i> HTML/CSS</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <h2>Objectifs de l'application</h2>
                <div class="row mt-4">
                    <div class="col-md-3">
                        <div class="feature-box text-center">
                            <i class="fa fa-users fa-3x mb-3"></i>
                            <h3>Gestion des utilisateurs</h3>
                            <p>Enseignants, élèves et administrateurs.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="feature-box text-center">
                            <i class="fa fa-chalkboard-teacher fa-3x mb-3"></i>
                            <h3>Organisation des classes</h3>
                            <p>CRUD des affectations des élèves et des enseignants aux classes.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="feature-box text-center">
                            <i class="fa fa-book fa-3x mb-3"></i>
                            <h3>Gestion des matières</h3>
                            <p>Configuration des matières et des horaires pour chaque classe.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="feature-box text-center">
                            <i class="fa fa-signature fa-3x mb-3"></i>
                            <h3>Signature en ligne</h3>
                            <p>Validation électronique de la présence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <h2>Fonctionnalités</h2>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h3>Profils utilisateurs</h3>
                        <p>Cette fonctionnalité permet la gestion des rôles, incluant les administrateurs, enseignants et élèves, avec des droits et accès spécifiques pour chacun.</p>
                    </div>
                    <div class="col-md-6">
                        <h3>Connexion / Authentification</h3>
                        <p>Le système offre une authentification sécurisée, avec la possibilité de récupérer les mots de passe de manière sécurisée.</p>
                    </div>
                    <div class="col-md-6">
                        <h3>Classes</h3>
                        <p>Les administrateurs peuvent créer, lire, mettre à jour et supprimer des classes, ainsi qu'affecter des enseignants et des élèves à ces classes.</p>
                    </div>
                    <div class="col-md-6">
                        <h3>Matières et emploi du temps</h3>
                        <p>Cette fonctionnalité permet la gestion des matières enseignées et la planification des horaires pour chaque classe.</p>
                    </div>
                    <div class="col-md-6">
                        <h3>Signature en ligne</h3>
                        <p>Les utilisateurs peuvent valider leur présence électroniquement, avec un système sécurisé d'horodatage pour garantir l'authenticité.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
                <h2>Difficultés rencontrées</h2>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <ul>
                            <li>Tableau de bord administrateur</li>
                            <li>Affecter un emploi du temps à un élève</li>
                            <li>Se souvenir de moi</li>
                            <li>Mot de passe oublié</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 text-center">
                <a href="../index.php#products" class="btn btn-primary">Retour au portfolio</a>
                <button id="openDiagramBtn" class="btn btn-secondary">Voir le Diagramme</button>
            </div>
        </div>
    </div>
  
    <!-- Pop-up Diagramme -->
    <div id="diagramModal" class="modal" style="display:none;">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <h2>Mon Diagramme</h2>
                <img src="../img/SONOSoft.png" alt="diagramme" class="img-responsive">
            </div>
        </div>
    </div>

    <style>
        .feature-box {
            padding: 20px;
            border-radius: 8px;
            background-color: var(--background-color);
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .feature-box:hover {
            transform: translateY(-5px);
        }

        .feature-box i {
            color: var(--link-color);
        }

        h1, h2, h3 {
            color: var(--text-color);
        }

        p, li {
            color: var(--text-color);
        }

        .btn-primary {
            background-color: var(--link-color);
            border-color: var(--link-color);
        }

        .btn-primary:hover {
            opacity: 0.9;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close-btn {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close-btn:hover,
        .close-btn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

    <script>
        // Get the modal
        var modal = document.getElementById("diagramModal");

        // Get the button that opens the modal
        var btn = document.getElementById("openDiagramBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close-btn")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
