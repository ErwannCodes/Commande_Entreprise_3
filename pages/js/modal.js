// Fonction pour ouvrir le modal avec des détails
function openModal(activityDetails) {
    const modal = document.createElement('div');
    modal.classList.add('modal');
    modal.innerHTML = `
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            ${activityDetails}
        </div>
    `;
    document.body.appendChild(modal);

    // Fermer le modal en cliquant sur le bouton de fermeture
    modal.querySelector('.close-btn').addEventListener('click', () => {
        modal.remove();
    });

    // Fermer le modal en cliquant à l'extérieur du contenu
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.remove();
        }
    });
}

// Associer la fonction openModal aux boutons
document.querySelectorAll('.details-btn').forEach((button) => {
    button.addEventListener('click', (e) => {
        const activityCard = e.target.closest('.activity-card');
        const detailsHTML = activityCard.querySelector('.details').innerHTML;
        openModal(detailsHTML);
    });
});
