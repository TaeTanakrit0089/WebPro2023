var num = 0;
var pre_src = "http://10.0.15.21/lab/lab3/images/";
var post_src = ".png";
var r1c1 = document.getElementById("r1c1");
var r1c2 = document.getElementById("r1c2");
var r2c1 = document.getElementById("r2c1");
var r2c2 = document.getElementById("r2c2");

function rotateImage() {
    console.log(num)
    // var abs_num = Math.abs(num);
    var num_test = ++num % 4;
    var order;
    if (num_test === 0)
        order = [1, 2, 3, 4]
    else if (num_test === 1)
        order = [3, 1, 4, 2]
    else if (num_test === 2)
        order = [4, 3, 2, 1]
    else if (num_test === 3)
        order = [2, 4, 1, 3]
    r1c1.src = pre_src + order[0] + post_src;
    r1c2.src = pre_src + order[1] + post_src;
    r2c1.src = pre_src + order[2] + post_src;
    r2c2.src = pre_src + order[3] + post_src;
    if (num === 20)
        window.open("https://youtu.be/sKFpFmQSeGs?si=RzQ7BQR_A2au4d-N")
}