function calculateNumber() {
    let value1 = parseFloat(document.querySelector('input[aria-label="Value1"]').value);
    let value2 = parseFloat(document.querySelector('input[aria-label="Value2"]').value);
    let calculatedValue = value1 + value2;
    if (isNaN(calculatedValue)) {
        window.alert("Calculation Error!");
        return
    }


    let resultElement = document.querySelector('input[aria-label="Result"]');
    resultElement.placeholder = value1 + value2;

    divClassList = ["form-container", "blur-effect", "history-box"]
    let divBox = document.createElement("div");
    divClassList.forEach((x) => divBox.classList.add(x));
    divBox.innerHTML = "<div class=\"d-flex flex-column\">\n" +
        "                <div class=\"d-flex flex-row\">" + value1 + " + " + value2 + "</div>\n" +
        "                <div class=\"d-flex flex-row-reverse\">\n" +
        "                    <h2>" + calculatedValue + "</h2>\n" +
        "                </div>\n" +
        "            </div>"

    let historyDiv = document.getElementById("history")
    // if (!historyDiv.childNodes.length)
    //     document.getElementById("history").appendChild(divBox);
    // else
    historyDiv.insertBefore(divBox, historyDiv.childNodes[0]);

    // window.alert(value1 + value2);
}