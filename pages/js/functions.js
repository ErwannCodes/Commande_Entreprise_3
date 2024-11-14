.addEventListener('DOMContentLoaded', function () {
    const option1 = document.getElementById('option1');
    const option2 = document.getElementById('option2');
    const option3 = document.getElementById('option3');
    const option4 = document.getElementById('option4');

    const form1 = document.getElementById('form1');
    const form2 = document.getElementById('form2');

    option1.addEventListener('change', function () {
        if (option1.checked) {
            form1.style.display = 'block';
            form2.style.display = 'none';
        }
    });

    option2.addEventListener('change', function () {
        if (option2.checked) {
            form1.style.display = 'none';
            form2.style.display = 'block';
        }
    });

    option3.addEventListener('change', function () {
        if (option1.checked) {
            form1.style.display = 'block';
            form2.style.display = 'none';
        }
    });

    option4.addEventListener('change', function () {
        if (option2.checked) {
            form1.style.display = 'none';
            form2.style.display = 'block';
        }
    });
});
