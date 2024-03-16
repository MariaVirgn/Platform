function showOptions() {
    const quantity = document.getElementById('quantity').value;
    const optionsDiv = document.getElementById('options');
    const optionsForm = document.getElementById('optionsForm');

    optionsForm.innerHTML = ''; // Clear previous options

    for (let i = 1; i <= quantity; i++) {
        const label = document.createElement('label');
        label.innerHTML = `Pilihan ${i} :`;
        const input = document.createElement('input');
        input.type = 'text';
        input.placeholder = `Teks Pilihan ${i}`;
        input.required = true;
        input.name = `option${i}`;
        optionsForm.appendChild(label);
        optionsForm.appendChild(input);
    }

    optionsDiv.style.display = 'block';
}

function showResult() {
    const name = document.getElementById('name').value;
    const quantity = document.getElementById('quantity').value;
    const optionsForm = document.getElementById('optionsForm');
    const resultDiv = document.getElementById('result');
    const resultText = document.getElementById('resultText');

    let selectedOption;

    for (let i = 1; i <= quantity; i++) {
        const option = document.querySelector(`input[name="option${i}"]`);
        if (option.value === '') {
            alert('Semua Teks Pilihan harus diisi.');
            return;
        }

        // No need to check if the option is checked for text inputs
        selectedOption = option.value;
    }

    
    resultText.innerHTML = `Hallo, nama saya ${name}, saya mempunyai sejumlah ${quantity} pilihan yaitu `;
    for (let i = 1; i <= quantity; i++) {
        resultText.innerHTML += `<span>${document.querySelector(`input[name="option${i}"]`).value}</span>`;
        if (i < quantity) {
            resultText.innerHTML += ', ';
        }
    }
    resultText.innerHTML += `, dan saya memilih ${selectedOption}.`;

    resultDiv.style.display = 'block';
}
