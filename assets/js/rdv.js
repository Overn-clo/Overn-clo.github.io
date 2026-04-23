function afficherCalendly() {
    const nom = document.getElementById('client-nom').value.trim();
    const email = document.getElementById('client-email').value.trim();
    const type = document.getElementById('client-type').value.trim();

    if (!nom || !email || !type) {
        alert('Merci de remplir tous les champs.');
        return;
    }

    const url = 'https://calendly.com/eric8124/30min'
        + '?hide_event_type_details=1'
        + '&hide_gdpr_banner=1'
        + '&name=' + encodeURIComponent(nom)
        + '&email=' + encodeURIComponent(email)
        + '&type=' + encodeURIComponent(type);

    Calendly.initInlineWidget({
        url: url,
        parentElement: document.getElementById('calendly-container'),
    });

    document.getElementById('form-rdv').style.display = 'none';
    document.getElementById('calendly-wrapper').style.display = 'block';
    document.getgetElementById('texte-rdv').innerHTML = '<h2>Choisissez un créneau</h2>';
}