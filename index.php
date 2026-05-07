<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="./assets/css/main.css ?v=<?= time() ?>">
</head>

<body>
    <?php require_once('./assets/include/header.php'); ?>

    <main>
        <div class="intro">
            <div class="texte_intro">
                <b>Envie de <strong>performer</strong> ?</b>
                <p>Accompagnement mental pour rugbymans et étudiants.</p>
                <a href="./pages/rdv.php">Démarrer maintenant !</a>
                <a href="./pages/methode.php">Voir mes méthodes</a>
            </div>

            <div class="image_Eric">
                <img class="img" src="./assets/img/Eric_img.png">
            </div>
        </div>

        <div class="pk_voir_prepa">
            <div class="texte">
                <b>Pression, doute, perte de plaisir, baisse de performance ?</b>
                <h1>C'est ici que j'interviens !</h1>
                <p>Mon but est de faire en sorte de vous redonnez le courage et de ouvrir les yeux sur votre valeur.
                <p>La performance est ma <a class="lien-parcours" href="./pages/parcours.php">philosophie</a>, elle doit être vécue pleinement.</p>
            </div>
        </div>

        <div class="offres">
            <div class="texte_offre">
                <b>DEUX <em>UNIVERS</em>, UNE SEULE <em>MISSION</em></b>
                <p>Le rugby et les études partagent les mêmes défis : pression, gestion du stress, confiance en soin et bien plus encore. Je vois aide à les maitriser.</p>
                <h2>Mes offres :</h2>
            </div>

            <div class="offres_conteneur">
                <div class="offre_etudiant">
                    <div class="texte1offre">
                        <h2>Étudiant</h2>
                        <strong>Accompagnement des étudiants</strong>
                        <p>Je travaille sur :</p>
                        <ul>
                            <li>La confiance en soi</li>
                            <li>La gestion du stress</li>
                            <li>La concentration</li>
                            <li>La clarté du projet</li>
                            <li>L'organisation</li>
                            <li>Le passage à l'action</li>
                            <li>Le plaisir</li>
                        </ul>
                        <strong>Objectif :</strong>
                        <p class="objectif">Avancer avec clarté, confiance et efficacité.</p>
                        <a class="prendre_rdv" href="./pages/rdv.php">Prendre rendez-vous</a>
                    </div>
                </div>

                <div class="offre_sport">
                    <div class="texte2offre">
                        <h2>Sports</h2>
                        <strong>Accompagnement des jeunes rugbymen</strong>
                        <p>Je travaille sur :</p>
                        <ul>
                            <li>La gestion de la pression</li>
                            <li>La confiance en soi</li>
                            <li>La concentration</li>
                            <li>La gestion des erreurs</li>
                            <li>Le plaisir de jouer</li>
                            <li>La place dans le collectif</li>
                        </ul>
                        <strong>Objectif :</strong>
                        <p class="objectif">Performer individuellement tout en renforçant le collectif.</p>
                        <a class="prendre_rdv" href="./pages/rdv.php">Prendre rendez-vous</a>
                    </div>
                </div>
            </div>
            <div class="texte_offre">
                <p> </p>
            </div>
        </div>


    </main>
</body>

</html>