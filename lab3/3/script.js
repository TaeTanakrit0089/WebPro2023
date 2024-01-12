var scores = [100, 95, 45, 60, 20];
var isShow = false;
var clickCount = 0;

function viewChart() {
    for (let i = 0; i <= 4; i++)
        if (!isShow)
            document.getElementById(("row" + (i + 1))).style.width = scores[i] + "%";
        else
            document.getElementById(("row" + (i + 1))).style.width = "150px";
    isShow = !isShow;
    showScore();
    if (++clickCount % 5 === 0)
        window.open("https://youtu.be/gDjMZvYWUdo?si=b1LwYBFxANt5kTpO")
}


function showScore() {
    for (let i = 0; i <= 4; i++)
        if (isShow)
            document.querySelector("#row" + (i + 1) + " .score").style.opacity = 1;
        else
            document.querySelector("#row" + (i + 1) + " .score").style.opacity = 0;
}