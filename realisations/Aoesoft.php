<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AOESoft - Présentation du Projet</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../css/theme.css" rel="stylesheet" type="text/css"/>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h1>AOESoft</h1>
                <p class="lead">Application de gestion pour centres de contrôle technique</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <img src="../img/AOEsoft.png" alt="AOESoft" class="img-responsive">
            </div>
            <div class="col-md-6">
                <h2>À propos du projet</h2>
                <p>AOESoft est une application de gestion complète développée pour les centres de contrôle technique automobile par MECALan. Elle permet de gérer les contrôles techniques, composée de plusieurs logiciels qui permettent d'effectuer tous les tests nécessaires pour valider un contrôle. C'est un outil complet qui se couple avec tous les appareils nécessaires au contrôle technique.</p>
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
                            <i class="fa fa-file-text fa-3x mb-3"></i>
                            <h3>Contrôle technique</h3>
                            <p>Validation du contrôle et génération des documents</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box text-center">
                            <i class="fa fa-pencil fa-3x mb-3"></i>
                            <h3>Maintenance et Matériels</h3>
                            <p>Maintenance à distance sur les postes clients</p>
                            <p>Listes des différents appareils disponibles ainsi que leurs caractéristiques </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box text-center">
                            <i class="fa fa-users fa-3x mb-3"></i>
                            <h3>Gestion clients</h3>
                            <p>Base de données clients et historique</p>
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
                        <h3>Sous compétences</h3>
                        <ul>
                            <li>Développement d'applications Windows</li>
                            <li>Gestion de bases de données</li>
                            <li>Interface utilisateur intuitive</li>
                            <li>Génération de fichiers rapports</li>
                        </ul>
                    </div>
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
                            <p>Etant donné que l'AOESoft est en production chez les clients, je ne pouvais pas faire de modifications en direct dessus, j'ai utilisé les branches que WinDev propose. Ensuite il suffit que je réintègre mes modifications sur l'AOESoft.</p>
                            <li>Importation de DLLs qui permettent de lier SONOSoft à AOESoft </li>
                            <li>Intégration de SONOSoft dans l'AOESoft</li>
                            <li>Intégration MGT (RPM Counter) dans SONOSoft</li>
                            <li>Intégration Pistolet IR dans SONOSoft</li>
                        </ul>
                        <h3>Difficultés rencontrées</h3>
                        <ul>
                            <li>Nouveau langage de programmation WLanguage et IDE</li>
                            <li>Pair-programming</li>
                            <li>Design Fenêtres et Libellés</li>
                            <li>Rendus intègres à fournir</li>
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
