<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez-vous</title>
    <link rel="stylesheet" href="../assets/css/main.css ?v=<?= time() ?>">
    <link rel="stylesheet" href="../assets/css/rdv.css ?v=<?= time() ?>">
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
</head>

<body>
    <?php require_once('../assets/include/header.php'); ?>

    <main>

        <div class="conteneur">

            <div class="texte_rdv">
                <h2>Prendre rendez-vous</h2>
                <p>Renseigne tes informations pour pré-remplir le formulaire :</p>
            </div>

            <div class="form-rdv" id="form-rdv">
                <input type="text" id="client-nom" placeholder="Prénom et nom" />
                <input type="email" id="client-email" placeholder="Email" />
                <select id="client-type">
                    <option value="">-- Ton profil --</option>
                    <option value="Etudiant">Etudiant</option>
                    <option value="Rugbyman">Rugbyman</option>
                    <option value="Autre">Autre</option>
                </select>
                <input type="text" id="client-question" placeholder="Vous avez des questions avant le rendez-vous ? Posez les ici."/>
                <button onclick="afficherCalendly()">Choisir un créneau →</button>
            </div>

        </div>
        <div class="calendly-wrapper" id="calendly-wrapper" style="display:none;">
            <div id="calendly-container" style="min-width:320px; height:700px;"></div>
        </div>

        <script src="https://assets.calendly.com/assets/external/widget.js"></script>
        <script src="../assets/js/rdv.js?v=<?= time() ?>"></script>

    </main>
        <?php require_once('../assets/include/footer.php'); ?>
</body>

</html>