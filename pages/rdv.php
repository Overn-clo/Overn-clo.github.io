<!DOCTYPE html>
<html lang="en">

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

        <div class="texte_rdv">
            <h2>Prendre rendez-vous</h2>
            <p>Choisis un créneau directement dans mon agenda :</p>
        </div>

        <div class="calendly-wrapper">
            <div class="calendly-inline-widget"
                data-url="https://calendly.com/eric8124/30min?hide_event_type_details=1&hide_gdpr_banner=1"
                style="min-width:320px; height:700px;">
            </div>
        </div>
        
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
    </main>
</body>

</html>