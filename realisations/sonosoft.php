<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SONOSoft - Présentation du Projet</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../css/theme.css" rel="stylesheet" type="text/css"/>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h1>SONOSoft</h1>
                <p class="lead">Application de mesure du niveau sonore</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <img src="../img/sono.png" alt="Sonomètre" class="img-responsive">
            </div>
            <div class="col-md-6">
                <h2>À propos du projet</h2>
                <p> SONOSoft est une application développée pour faire passer les tests de niveaux sonores pour les véhicules de catégorie L (2 roues). Elle permet de recueillir le niveau sonore des véhicules grâce à un sonomètre et valider les normes imposées pour ce type de véhicule par le Ministère du Transport et l'UTC .</p>
                <div class="mt-4">
                    <h3>Technologies utilisées</h3>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-success"></i> WinDev 2024</li>
                        <li><i class="fa fa-check text-success"></i> HFSQL</li>
                        <li><i class="fa fa-check text-success"></i> WLanguage</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <h2>Fonctionnalités principales</h2>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="feature-box text-center">
                            <i class="fa fa-microphone fa-3x mb-3"></i>
                            <p>Enregistrement des données sonores</p>
                            <p>Conformité avec les normes de l'UTC </p>
                            <p>Validation du test</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box text-center">
                            <i class="fa fa-chart fa-3x mb-3"></i>
                            <h3>Analyse</h3>
                            <p>Visualisation des données </p>
                            <p>Comparaison des niveaux sonores</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box text-center">
                            <i class="fa fa-bell fa-3x mb-3"></i>
                            <h3>Alertes personnalisables</h3>
                            <p>Notifications lorsque le niveau sonore dépasse un seuil défini</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <h2>Compétences développées</h2>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h3>Sous-compétences</h3>
                        <ul>
                            <li>Exploiter des référentiels, normes et standards adoptés par le prestataire informatique (UTC)</li>
                            <li>Mettre en place et vérifier les niveaux d’habilitation associés à un service (Remote maintenance)</li>
                            <li>Gérer des sauvegardes grâce au GDS </li>
                            <li>Recenser et identifier les ressources numériques grâce à l'onglet MATERIELS</li>
                        </ul>
                    </div>
                    <ul> </ul>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
                <h2>Mes missions</h2>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h3>Missions techniques</h3>
                        <ul>
                            <p>Etant donné que l'AOESoft est en production chez les clients, je ne pouvais pas faire de modifications en direct dessus, j'ai créé une branche(fonctionnalité WinDev propose). Ensuite il suffit que je reintègre mes modificatons sur l'AOESoft.</p>
                            <li>J'ai fait l'initialisation des périphériques qui permet de connecter le sonomètre à SONOSoft</li>
                            <li>J'ai également fait les requêtes génériques qui permettent de communiquer entre l'appareil et le logiciel</li>
                            <li>J'ai fait également les requêtes permettant de communiquer entre la base de données et SONOSoft ainsi récupérer les valeurs sonores pour les exploiter</li>
                        </ul>
                    </div>
                    <h3>Difficultés rencontrées</h3>
                        <ul>
                            <li>Nouveau langage de programmation WLanguage et iDE</li>
                            <li>Pair-programming</li>
                            <li>Design Fenêtres et Libellés</li>
                            <li>Rendus intègres à fournir</li>
                        </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <a href="../index.php#products" class="btn btn-primary">Retour au portfolio</a>
                <button id="openDiagramBtn" class="btn btn-secondary">Voir le Diagramme</button>
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
        // Pop-up
        var modal = document.getElementById("diagramModal");

        // Bouton pour ouvrir le Pop-up
        var btn = document.getElementById("openDiagramBtn");

        // Fermer le pop-up
        var span = document.getElementsByClassName("close-btn")[0];

        // Ouvrir le pop-up au click du bouton
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // Fermer le pop-up au click du x
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Fermer le pop-up au click en dehors du pop-up
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    </style>
</body>
</html>
