document.addEventListener('DOMContentLoaded', function () {
    const options = document.querySelectorAll('input[name="formOption"]'); // Sélectionner tous les boutons radio
    const typeInput = document.getElementById('type');                 // Le champ caché dans form2
    const field1 = document.getElementById('dynamicField1');          
    const field2 = document.getElementById('dynamicField2');

    // Fonction pour mettre à jour les champs cachés
    function toggleForms() {
        const selectedOption = document.querySelector('input[name="formOption"]:checked');    // Récupère le bouton sélectionné
        if (selectedOption) {                                                                // Si un bouton a été sélectionné
            const value = selectedOption.value;                                             // Récupère la value du bouton
            if (value === 'type1') {
                field1.style.display = 'none';
                field2.style.display = 'block';
            } else {
                field1.style.display = 'block';
                field2.style.display = 'none';

                // Met à jour le champ caché en fonction du bouton radio sélectionné
                if (selectedOption.id === 'option1') {
                    typeInput.value = 'Adhésion simple personne morale'; // Adhésion simple personne morale
                } else if (selectedOption.id === 'option2') {
                    typeInput.value = 'Adhésion association de soutien'; // Adhésion association de soutien
                }else if (selectedOption.id === 'option3') {
                    typeInput.value = 'Adhésion association de partenariat'; // Adhésion association de partenariat
                } else if (selectedOption.id === 'option4') {
                    typeInput.value = 'Adhésion entreprise'; // Adhésion entreprise
                }
            }
        }
    }

    // Ajoutez un écouteur d'événements pour chaque bouton radio
    options.forEach(option => {
        option.addEventListener('change', toggleForms);
    });

    // Vérifiez la sélection initiale (au cas où un bouton serait pré-sélectionné)
    toggleForms();
});



// Script venant de la branche master
    // Dynamically load Font Awesome script
(function loadFontAwesome() {
    const script = document.createElement('script');
    script.src = "https://kit.fontawesome.com/a076d05399.js";
    script.crossOrigin = "anonymous";
    document.head.appendChild(script);
})();

// Function to display an image and highlight the active card
function displayImage(imageSrc, element) {
    const activityImage = document.getElementById("activity-image");
    const activityCards = document.querySelectorAll('.activity-card');

    if (activityImage) {
        activityImage.src = imageSrc;
    }

    activityCards.forEach(card => {
        card.classList.remove('active');
    });

    if (element) {
        element.classList.add('active');
    }
}

// Logic for rotating thumbnail items
(function handleThumbnailRotation() {
    const thumbnail = document.querySelector('.thumbnail');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');

    if (!thumbnail || !prevButton || !nextButton) {
        console.warn("Thumbnail or navigation buttons not found.");
        return;
    }

    const items = Array.from(thumbnail.children);

    // Rotate items forward
    function rotateNext() {
        const firstItem = items.shift(); // Remove the first item
        items.push(firstItem); // Add it to the end
        updateItemsOrder();
    }

    // Rotate items backward
    function rotatePrev() {
        const lastItem = items.pop(); // Remove the last item
        items.unshift(lastItem); // Add it to the front
        updateItemsOrder();
    }

    // Update the DOM to reflect the new order
    function updateItemsOrder() {
        thumbnail.innerHTML = ''; // Clear all items
        items.forEach(item => thumbnail.appendChild(item)); // Re-add items in the new order
    }

    // Attach event listeners
    nextButton.addEventListener('click', rotateNext);
    prevButton.addEventListener('click', rotatePrev);
})();

