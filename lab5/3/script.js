getRemoteData("questionAnswerData.json");

async function getRemoteData(url) {
    let datObject = await fetch(url);
    let data = await datObject.json();

    data.forEach((x, y) => {
        let node = document.createElement("div");
        node.classList.add("mt-3")

        let header = document.createElement("h5");
        header.innerText = (y + 1) + ") " + x.question

        node.appendChild(header)
        node.id = "q_" + (y + 1)

        document.getElementById("result").appendChild(node)

        Object.keys(x.answers).forEach((key, num) => {
            var value = x.answers[key];

            if (key === "correct") return document.getElementById("q" + (y + 1) + value).checked = true;

            let formElement = document.createElement("div");
            formElement.classList.add("form-check");

            var radioInput = document.createElement("input");
            radioInput.setAttribute("type", "radio");
            radioInput.setAttribute("class", "form-check-input");
            radioInput.setAttribute("name", "form" + y);
            radioInput.setAttribute("id", "q" + (y + 1) + key);

            var labelElement = document.createElement("label");
            labelElement.setAttribute("class", "form-check-label");

            if (key !== "correct") labelElement.innerText = value;

            formElement.appendChild(radioInput)
            formElement.appendChild(labelElement)

            node.appendChild(formElement)
        });
    })
}