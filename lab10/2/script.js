const form = document.getElementById('myForm');
const submitBtn = document.getElementById('submitBtn');

var current_question = 0;
var answers = [];

if (current_question === 0)
    pushForm()

submitBtn.addEventListener('click', (event) => {
    event.preventDefault(); // Prevent default form submission

    const radioButtons = document.querySelectorAll('input[name="answer"]');

    let isChecked = false;

    // Check if any radio button is checked
    radioButtons.forEach(function (radioButton) {
        if (radioButton.checked) {
            isChecked = true;
        }
    });

    // If none of the radio buttons is checked, display a warning
    if (!isChecked) {
        alert('Please select an option before submitting.');
        return null;
    }

    const formData = new FormData(form); // Get form data
    const form_data_json = Object.fromEntries(formData.entries()); // Convert to object
    const data = {
        answer: form_data_json.answer, // Assuming 'data' contains form data
        answers: answers,
        current_question: current_question,
    };
    pushForm(data)
});


function pushForm(data) {

    if (data === null) {
        data = {
            current_question: current_question
        };
    }
    const jsonData = JSON.stringify(data); // Wrap data in an object with key 'data'
    // console.log(jsonData)

    fetch('process.php', { // Send data to process.php
        method: 'POST',
        body: jsonData,
        headers: {'Content-Type': 'application/json'}
    })
        .then(response => response.json()) // Parse response as JSON
        .then(data => {
            if (data.hasOwnProperty("total_score")) {
                return showResult(data);
            }
            console.log(data)
            document.getElementById("q_problem").innerText = data["QID"] + ".) " + data["Stem"]
            document.getElementById("q_a").innerText = data["Alt_A"]
            document.getElementById("q_b").innerText = data["Alt_B"]
            document.getElementById("q_c").innerText = data["Alt_C"]
            document.getElementById("q_d").innerText = data["Alt_D"]

            current_question = data["QID"];
            answers = data["answers"];
            form.reset();
        })
        .catch(error => console.error(error)); // Handle errors
}

function showResult(data) {
    document.getElementById("score").innerText = data["total_score"];
    document.getElementById("result").style.display = "block";
    document.getElementById("question").style.display = "none";
}