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
