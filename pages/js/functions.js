document.addEventListener('DOMContentLoaded', function () {
    const options = document.querySelectorAll('input[name="formOption"]'); // Sélectionner tous les boutons radio
    const form1 = document.getElementById('form1');
    const form2 = document.getElementById('form2');
    const typeInput = document.getElementById('type');                 // Le champ caché dans form2

    // Fonction pour afficher le formulaire et mettre à jour le champ caché
    function toggleForms() {
        const selectedOption = document.querySelector('input[name="formOption"]:checked');    // Récupère le bouton sélectionné
        if (selectedOption) {                                                                // Si un bouton a été sélectionné
            const value = selectedOption.value;                                             // Récupère la value du bouton (form1 ou form2)
            if (value === 'form1') {
                form1.style.display = 'block';
                form2.style.display = 'none';
            } else if (value === 'form2') {
                form1.style.display = 'none';
                form2.style.display = 'block';

                // Met à jour le champ caché en fonction du bouton radio sélectionné
                if (selectedOption.id === 'option2') {
                    typeInput.value = 'Adhésion association de soutien'; // Adhésion association de soutien
                } else if (selectedOption.id === 'option3') {
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
