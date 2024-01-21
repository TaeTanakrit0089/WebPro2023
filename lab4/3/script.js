function addTableRow() {
    const idInput = document.getElementById("formStudentIDInput");
    const firstNameInput = document.getElementById("formNameInput");
    const lastNameInput = document.getElementById("formSurnameInput");

    if (idInput.value.length !== 8)
        return window.alert("Invalid Student ID!");
    if (!firstNameInput.value.trim())
        return window.alert("First Name is blank");
    if (!lastNameInput.value.trim())
        return window.alert("Last Name is blank");

    const table = document.getElementById("table");

    const rowCount = table.tBodies[0].rows.length;
    const columnData = [rowCount + 1, idInput.value, firstNameInput.value, lastNameInput.value];

    const tableRow = document.createElement("tr");
    columnData.forEach((x) => {
        const newColumn = document.createElement("td");
        newColumn.innerText = x;
        tableRow.appendChild(newColumn);
    })
    table.getElementsByTagName('tbody')[0].appendChild(tableRow);

    idInput.value = "";
    firstNameInput.value = "";
    lastNameInput.value = "";
}