<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offre étudiant</title>
    <link rel="stylesheet" href="../assets/css/main.css ?v=<?= time() ?>">
    <link rel="stylesheet" href="../assets/css/etudiant.css ?v=<?= time() ?>">

</head>

<body>
    <?php require_once('../assets/include/header.php'); ?>
    <main>
        <div class="offre_page">

            <div class="colonne_gauche">
                <h1>Étudiant</h1>
                <strong>Accompagnement des étudiants</strong>
                <p>Examens, entretiens, première expérience pro : apprenez à performer quand ça compte, avec les mêmes outils que les sportifs de haut niveau.</p>
                <p>Je travaille sur :</p>
                <ul>
                    <li>Utiliser les méthodes de préparation mentale des sportifs de haut niveau dans vos études et votre vie pro</li>
                    <li>Maîtriser les techniques de respiration pour améliorer votre attention et votre concentration</li>
                    <li>Construire des routines, une organisation solide et apprendre à cloisonner vos activités</li>
                    <li>Renforcer votre confiance et votre estime de vous-même</li>
                    <li>Identifier et mettre en avant vos points forts pour faire la différence</li>
                    <li>Gérer le stress pour performer durant vos entretiens professionnels et vos examens</li>
                    <li>Profiter d'un regard d'expérience pour vous conseiller dans vos choix d'orientation</li>
                </ul>
                <strong>Objectif :</strong>
                <p class="objectif">Avancer avec clarté, confiance et efficacité.</p>
                <a class="prendre_rdv" href="./pages/rdv.php">Prendre rendez-vous</a>
            </div>

            <div class="colonne_droite">
                <div class="photo-etudiant">
                    <img src="../assets/img/etudiant_img.png" alt="Etudiant">
                </div>

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
    </main>
    <script src="../assets/js/evaluation.js?v=<?= time() ?>"></script>
</body>