getRemoteData("person.json");

async function getRemoteData(url) {
    let datObject = await fetch(url);
    let data = await datObject.json();
    data = data[0];

    let text = data.firstName + " " + data.lastName +
        ", " + data.age + "years old.<br>" +
        data.address.streetAddress + " " + data.address.city + " " + data.address.state + " " + "<br>" +
        data.address.postalCode + "<br>"
    ;
    data.phoneNumber.forEach((x) => {
        text += x.type + " : " + x.number + "<br>";
    })

    document.getElementById("result").innerHTML = text;
}