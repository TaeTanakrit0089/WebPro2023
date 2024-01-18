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
        for (let j = 0; j < headers.length; j++) {
            record[customHeaders[j]] = values[j];
        }

        jsonData.push(record);
    }

    return jsonData;
}

function addElementstoResult(elements) {
    for (let i = 0; i < elements.length; i++) {
        const pTag = document.createElement('p');
        pTag.innerHTML = `${elements[i].id}.) <b>${elements[i].firstName} ${elements[i].lastName}</b> (${elements[i].gender}) is a ${elements[i].position} at ${elements[i].address}`;
        document.getElementById("result").appendChild(pTag);
    }
}