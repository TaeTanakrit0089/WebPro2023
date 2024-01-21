const csvFilePath = 'employees.csv';

// Fetch the CSV file
fetch(csvFilePath)
    .then(response => response.text())
    .then(csvData => {
        const jsonData = convertCsvToJson(csvData);
        console.log(jsonData);

        addElementstoResult(jsonData);
    })
    .catch(error => console.error('Error fetching or converting CSV file:', error));

function convertCsvToJson(csv) {
    const lines = csv.split('\n');
    const headers = lines[0].split(',').map(header => header.trim());

    const customHeaders = ["id", "gender", "lastName", "firstName", "position", "address"];

    const jsonData = [];

    for (let i = 0; i < lines.length; i++) {
        const values = lines[i].split(',').map(value => value.trim());

        const record = {};
        for (let j = 0; j < headers.length; j++)
            record[customHeaders[j]] = values[j];
        jsonData.push(record);
    }

    return jsonData;
}

function addElementstoResult(elements) {
    let parent = document.getElementById("result");

    let text = "<ol>"
    elements.forEach((x, y) => {
        text += "<li>" + "<b>" + x.firstName + " " + x.lastName + "</b>"
            + " (" + x.gender + ") is a " + x.position + ", " + x.address

            + "</li>"
    })
    text += "</ol>"
    parent.innerHTML = text;
}