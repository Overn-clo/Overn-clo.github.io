function afficherCalendly() {
    const nom = document.getElementById('client-nom').value.trim();
    const email = document.getElementById('client-email').value.trim();
    const type = document.getElementById('client-type').value.trim();
    const question = document.getElementById('client-question').value.trim();

    if (!nom || !email || !type) {
        alert('Merci de remplir les champs obligatoires.');
        return;
    }

    const url = 'https://calendly.com/eric8124/30min'
        + '?hide_event_type_details=1'
        + '&hide_gdpr_banner=1'
        + '&name=' + encodeURIComponent(nom)
        + '&email=' + encodeURIComponent(email)
        + '&a1=' + encodeURIComponent(type)
        + '&a2=' + encodeURIComponent(question);

    Calendly.initInlineWidget({
        url: url,
        parentElement: document.getElementById('calendly-container'),
    });

    document.getElementById('form-rdv').style.display = 'none';
    document.getElementById('calendly-wrapper').style.display = 'block';
    document.querySelector('.texte_rdv').innerHTML = '<h2>Choisissez un créneau</h2>';
}