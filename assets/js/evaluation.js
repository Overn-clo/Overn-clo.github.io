const etats = {};

function slide(idEvaluation, direction) {
    const conteneur = document.getElementById(idEvaluation);
    const piste = conteneur.querySelector('.eval-piste');
    const points = conteneur.querySelectorAll('.point');
    const nbCartes = points.length;

    if (!etats[idEvaluation]) etats[idEvaluation] = 0;

    etats[idEvaluation] = (etats[idEvaluation] + direction + nbCartes) % nbCartes;

    piste.style.transform = `translateX(-${etats[idEvaluation] * 100}%)`;

    points.forEach(p => p.classList.remove('active'));
    points[etats[idEvaluation]].classList.add('active');
}

// Défilement automatique toutes les 5 secondes
setInterval(() => slide('eval-etudiant', 1), 5000);
setInterval(() => slide('eval-sport', 1), 5000);