import "flowbite";


const citizenshipSelect = document.querySelector('select[name="citizenship"]');
const importationPurpose = document.querySelector('select[name="import_purpose"]');

const passportNumberInput = document.querySelector('input[name="passport_number"]');
const passportLabel = document.querySelector('label[name="passport_number"]');

const idNumberInput = document.querySelector('input[name="id_number"]');
const idtLabel = document.querySelector('label[name="id_number"]');

const specificPurposeInput = document.querySelector('input[name="specific_purpose"]');
const specificPurposeLabel = document.querySelector('label[name="specific_purpose"]');

citizenshipSelect.addEventListener('change', function() {
    if (citizenshipSelect.value === 'Foreigner') {
        passportNumberInput.style.display = 'block';
        passportLabel.style.display = 'block';

        idNumberInput.style.display = 'none';
        idtLabel.style.display = 'none';
    } else if (citizenshipSelect.value === 'Rwandan') {
        idNumberInput.style.display = 'block';
        idtLabel.style.display = 'block';

        passportNumberInput.style.display = 'none';
        passportLabel.style.display = 'none';
    }
});

passportNumberInput.style.display = 'none';
passportLabel.style.display = 'none';
idNumberInput.style.display = 'none';
idtLabel.style.display = 'none';

importationPurpose.addEventListener('change', function() {
    if (importationPurpose.value === 'Other') {
        specificPurposeInput.style.display = 'block';
        specificPurposeLabel.style.display = 'block';
    } else {
        specificPurposeInput.style.display = 'none';
        specificPurposeLabel.style.display = 'none';
    }
});

