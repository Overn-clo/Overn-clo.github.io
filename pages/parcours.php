<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcours</title>
    <link rel="stylesheet" href="../assets/css/main.css ?v=<?= time() ?>">
    <link rel="stylesheet" href="../assets/css/parcours.css ?v=<?= time() ?>">

</head>

<body>
    <?php require_once('../assets/include/header.php'); ?>
    <main class="conteneur">
        <div class="presentation_eric">
            <div class="texte">
                <h1>Mon Parcours</h1>
                <p>Je suis Eric </p>
            </div>

            <div class="img_Eric">
                <img class="photo" src="../assets/img/Eric_img.png" alt="Photo_profil">
            </div>
        </div>

        <div class="presentation_mentor">
            <div class="img_mentor">
                <img class="photo" src="../assets/img/mentor_img.png" alt="Photo_profil_m">
            </div>

            <div class="texte">
                <h1>Mon mentor</h1>
                <p>Je suis son mentor</p>
            </div>
        </div>
    </main>
</body>

</html>