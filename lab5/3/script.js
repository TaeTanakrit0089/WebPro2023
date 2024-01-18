let requestURL = 'person.json';
let request = new XMLHttpRequest();
request.onreadystatechange = function () {
    if (request.readyState === 4 && request.status === 200) {
        displayData(JSON.parse(request.responseText));
    }
};
request.open("GET", requestURL, true);
request.send();

function displayData(data) {
    const paragraph = document.createElement("p");
    console.log(data)
    paragraph.innerHTML = `${data[0].firstName} ${data[0].lastName}, ${data[0].gender.type} years old.<br>
    ${data[0].address.streetAddress} ${data[0].address.city} ${data[0].address.state}<br>
    ${data[0].address.postalCode}<br>
    ${data[0].phoneNumber[0].type}: ${data[0].phoneNumber[0].number}<br>
    ${data[0].phoneNumber[1].type}: ${data[0].phoneNumber[1].number}`;
    document.getElementById("result").appendChild(paragraph)


    //John Smith, male 25 years old.
//
//21 2nd Street New York NY
//
//10021
//
//home: 212 555-1234
//
//fax: 646 555-4567


    // const appElement = document.getElementById('result');
    //
    // const table = document.createElement('table');
    //
    // const headerRow = table.insertRow();
    // for (const key in data[0]) {
    //     const th = document.createElement('th');
    //     th.textContent = key;
    //     headerRow.appendChild(th);
    // }
    //
    // data.forEach(person => {
    //     const row = table.insertRow();
    //     for (const key in person) {
    //         const cell = row.insertCell();
    //         cell.textContent = JSON.stringify(person[key]);
    //     }
    // });
    //
    // appElement.appendChild(table);
}
