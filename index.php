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
                <p>Rugbyman, entraîneur de jeunes, ancien policier.</p>
                <p>Un accident sur le terrain qui a tout changé.</p>
                <p>J'ai reconstruit ma vie professionnelle de zéro et je sais ce que ça demande vraiment.</p>
                <p>Aujourd'hui dans l'enseignement supérieur et préparateur mental, je mets ce parcours au service de votre performance.</p>
                <a href="./pages/rdv.php">Démarrer maintenant !</a>
                <a href="./pages/methode.php">Voir mes méthodes</a>
            </div>

            <div class="image_Eric">
                <img class="img" src="./assets/img/Eric_img.png">
            </div>
        </div>

        <div class="pk_voir_prepa">
            <div class="texte">
                <b class="titre">Pression, doute, perte de plaisir, baisse de performance ?</b>
                <h1>C'est ici que j'interviens !</h1>
                <p>Mon but est de vous redonner confiance et de vous aider à reconnaître votre valeur.</p>
                <p>La performance est ma <a class="lien_parcours" href="./pages/parcours.php">philosophie</a> — elle doit être vécue pleinement.</p>
            </div>
        </div>

        <div class="offres">
            <div class="texte_offre">
                <b>DEUX <em>UNIVERS</em>, UNE SEULE <em>MISSION</em></b>
                <p>Le rugby et les études partagent les mêmes défis : pression, gestion du stress, confiance en soi et bien plus encore. Je vous aide à les maîtriser.</p>
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
                        <a class="voir_detail" href="./pages/etudiant.php">Voir plus de détail</a>
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
                        <a class="voir_detail" href="./pages/rugbyman.php">Voir plus de détail</a>
                    </div>
                </div>
            </div>
            <div class="texte_promo">
                <b class="titre">PREMIER APPEL OFFERT</b>
                <p class="text">30 minutes pour faire connaissance, cerner votre situation et vous dire clairement comment je peux vous aider. Sans engagement.</p>
                <p class="text">Basé à Toulouse — Interventions dans tout le Sud-Ouest et en France entière.</p>
            </div>
        </div>

        <div class="format">
            <div class="texte">
                <div class="mini-texte">
                    <b class="titre">Format d'accompagnement</b>
                </div>
                <div class="conteneur-format">
                    <div class="zone-format">
                        <strong>Séance terrain</strong>
                        <p>Des sessions en présentiel, directement sur le terrain ou dans votre environnement.
                            Pour travailler au plus près de la réalité.</p>
                    </div>
                    <div class="zone-format">
                        <strong>Séances visio</strong>
                        <p>Sessions individuelles en ligne, flexibles, accessibles partout en France.</p>
                    </div>
                    <div class="zone-format">
                        <strong>Suivi collectif</strong>
                        <p>Interventions en équipe ou en groupe classe, en présentiel ou à distance.</p>
                    </div>
                    <div class="zone-format">
                        <strong>Accompagnement</strong>
                        <p>Suivi sur plusieurs semaines autour d'une compétition ou d'un examen clé.</p>
                    </div>
                    <div class="zone-format">
                        <strong>Formation</strong>
                        <p>Ateliers de performance mentale pour académies, clubs et établissements.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="fonctionne">
            <div class="texte">
                <div class="mini-texte">
                    <b class="titre">Comment je fonctionne</b>
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

        <div class="presentation_eric">
            <div class="texte">
                <b class="titre">MON CHEMIN</b>
                <h2>Mon Parcours</h2>
                <div class="textes_colonnes">
                    <div class="parcour1">
                        <p>À 26 ans, tout s'arrête. <b>Un accident sur un terrain de rugby</b> met fin brutalement à ma pratique. Trois opérations du dos, des séquelles à la jambe… et la décision de quitter la police.</p>

                        <p>Du jour au lendemain, je perds mes repères : le terrain, l'engagement, le cadre. Commence alors une période de doute, de remise en question et de reconstruction. Une période difficile, mais fondatrice.</p>

                        <strong>Je fais alors un choix : me reconstruire.</strong>

                        <p>Je reprends mes études à 26 ans et obtiens un Master 2 en école de commerce. Cette étape <b>forge ma capacité à rebondir, à m'adapter et à avancer malgré l'incertitude.</b> Je débute ensuite chez Airbus en tant que consultant en transfert de connaissances, avant de rejoindre les écoles EPSI pour développer le campus de Toulouse.</p>
                    </div>

                    <div class="separateur"></div>

                    <div class="parcours2">
                        <p>Depuis plus de <b>6 ans</b>, j'accompagne des étudiants dans des moments clés : orientation, recherche d'alternance, confiance en soi et passage à l'action. Aujourd'hui, en tant que coordinateur national, je travaille également sur la performance des équipes.</p>

                        <p>En parallèle, je reste profondément ancré dans le rugby. Diplômé entraîneur, j'ai accompagné pendant 5 ans des équipes cadets et juniors au <b>niveau national.</b></p>

                        <p>C'est là qu'une évidence s'impose : <b>la performance se joue avant tout dans la tête.</b> Je me forme alors à la préparation mentale, notamment avec <b>Olivier Lepretre et Christian Ramos</b>, et complète cette approche avec la Catch & Think Academy, spécialisée dans la concentration et l'attention.</p>

                        <p>Aujourd'hui, j'accompagne les jeunes rugbymen et les étudiants à performer dans des environnements exigeants.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>