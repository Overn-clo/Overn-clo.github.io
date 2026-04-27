<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Méthode</title>
    <link rel="stylesheet" href="../assets/css/main.css ?v=<?= time() ?>">
    <link rel="stylesheet" href="../assets/css/methode.css ?v=<?= time() ?>">

</head>

<body>
    <?php require_once('../assets/include/header.php'); ?>
    <main>
        <div class="fonctionne">
            <div class="texte">
                <div class="mini-texte">
                    <h1>Comment je fonctionne</h1>
                    <p>Mon approche repose sur 4 piliers :</p>
                </div>
                <div class="conteneur-zone">
                    <div class="zone">
                        <strong>1. Identité & valeurs</strong>
                        <p>Mieux se connaître pour mieux performer.</p>
                    </div>
                    <div class="zone">
                        <strong>2. Gestion des émotions & respiration</strong>
                        <p>Apprendre à se réguler dans l'action.</p>
                    </div>
                    <div class="zone">
                        <strong>3. Concentration & attention</strong>
                        <p>Être pleinement présent dans les moments clés.</p>
                    </div>
                    <div class="zone">
                        <strong>4. Plaisir & engagement</strong>
                        <p>Retrouver du plaisir pour libérer la performance.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="offres">
            <div class="offre_etudiant">
                <div class="texte">
                    <h2>Mes offres :</h2>
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
                    <a class="prendre_rdv" href="rdv.php">Prendre rendez-vous</a>
                </div>
                <div class="photo-etudiant">
                    <img class="photo" src="../assets/img/etudiant_img.png">

                    <div class="evaluation" id="eval-etudiant">
                        <div class="eval-piste">
                            <div class="eval-carte">
                                <span class="eval-pseudo">Thomas R.</span>
                                <p class="eval-commentaire">"Une aide précieuse pour retrouver confiance avant mes examens."</p>
                                <div class="etoiles">★★★★★</div>
                            </div>
                            <div class="eval-carte">
                                <span class="eval-pseudo">Léa M.</span>
                                <p class="eval-commentaire">"J'ai enfin réussi à structurer mon projet professionnel."</p>
                                <div class="etoiles">★★★★★</div>
                            </div>
                            <div class="eval-carte">
                                <span class="eval-pseudo">Hugo D.</span>
                                <p class="eval-commentaire">"Des séances concrètes qui m'ont vraiment aidé à passer à l'action."</p>
                                <div class="etoiles">★★★★☆</div>
                            </div>
                        </div>
                        <div class="eval-nav">
                            <div class="eval-points">
                                <span class="point active"></span>
                                <span class="point"></span>
                                <span class="point"></span>
                            </div>
                            <div class="eval-fleches">
                                <button class="fleche" onclick="slide('eval-etudiant', -1)">←</button>
                                <button class="fleche" onclick="slide('eval-etudiant', 1)">→</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="separateur"></div>

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
                    <a class="prendre_rdv" href="rdv.php">Prendre rendez-vous</a>
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

</html>