<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offre Rugbyman</title>
    <link rel="stylesheet" href="../assets/css/main.css ?v=<?= time() ?>">
    <link rel="stylesheet" href="../assets/css/rugbyman.css ?v=<?= time() ?>">

</head>

<body>
    <?php require_once('../assets/include/header.php'); ?>
    <main>
        <div class="offre_sport">
            <div class="texte">
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
            <div class="photo-rugbyman">
                <img class="photo" src="../assets/img/rugbyman_img.png">

                <div class="evaluation" id="eval-sport">
                    <div class="eval-piste">
                        <div class="eval-carte">
                            <span class="eval-pseudo">Maxime B.</span>
                            <p class="eval-commentaire">"Mes performances sur le terrain ont clairement progressé."</p>
                            <div class="etoiles">★★★★★</div>
                        </div>
                        <div class="eval-carte">
                            <span class="eval-pseudo">Romain T.</span>
                            <p class="eval-commentaire">"J'arrive mieux à gérer la pression avant les matchs importants."</p>
                            <div class="etoiles">★★★★★</div>
                        </div>
                        <div class="eval-carte">
                            <span class="eval-pseudo">Antoine L.</span>
                            <p class="eval-commentaire">"Le travail sur la concentration a changé mon jeu."</p>
                            <div class="etoiles">★★★★★</div>
                        </div>
                    </div>
                    <div class="eval-nav">
                        <div class="eval-points">
                            <span class="point active"></span>
                            <span class="point"></span>
                            <span class="point"></span>
                        </div>
                        <div class="eval-fleches">
                            <button class="fleche" onclick="slide('eval-sport', -1)">←</button>
                            <button class="fleche" onclick="slide('eval-sport', 1)">→</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../assets/js/evaluation.js?v=<?= time() ?>"></script>
</body>