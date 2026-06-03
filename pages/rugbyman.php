<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offre Rugbyman</title>
    <link rel="stylesheet" href="../assets/css/main.css?v=<?= time() ?>">
    <link rel="stylesheet" href="../assets/css/rugbyman.css?v=<?= time() ?>">
</head>

<body>
    <?php require_once('../assets/include/header.php'); ?>
    <main>
        <div class="offre_page">

            <div class="colonne_gauche">
                <h1>Sports</h1>
                <strong>Accompagnement des jeunes rugbymen</strong>
                <p>Pour les rugbymans de 10 ans à adulte qui veulent donner le meilleur d'eux-mêmes sur le terrain.</p>
                <p>Je travaille sur :</p>
                <ul>
                    <li>Le stress, apprendre à s'en servir plutôt que le subir</li>
                    <li>Retrouver confiance et oser prendre des initiatives sur le terrain</li>
                    <li>Développer son attention et sa concentration grâce à des méthodes d'entraînement cognitif utilisées dans les grands clubs</li>
                    <li>Mieux gérer ses émotions pour rester lucide dans les moments clés</li>
                    <li>Apprendre les différentes techniques de respiration pour les utiliser au quotidien</li>
                    <li>Construire des routines solides pour performer quand ça compte</li>
                </ul>
                <strong>Objectif :</strong>
                <p class="objectif">Performer individuellement tout en renforçant le collectif.</p>
                <a class="prendre_rdv" href="rdv.php">Prendre rendez-vous</a>
            </div>

            <div class="colonne_droite">
                <div class="photo-rugbyman">
                    <img src="../assets/img/rugbyman_img.png" alt="Rugbyman">
                </div>

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
        <?php require_once('../assets/include/footer.php'); ?>
</body>

</html>