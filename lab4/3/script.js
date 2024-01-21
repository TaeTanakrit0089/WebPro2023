let requestURL = 'questionAnswerData.json';
let request = new XMLHttpRequest();
request.onreadystatechange = function () {
    if (request.readyState === 4 && request.status === 200) {
        dataDisplay(JSON.parse(request.responseText));
    }
};
request.open("GET", requestURL, true);
request.send();

function dataDisplay(data) {
    let text = '';
    text += data.squadName + '<br>';
    text += data.homeTown + '<br>';

    for (...
. )
    {

    }
    document.getElementById("out").innerHTML = text;
}