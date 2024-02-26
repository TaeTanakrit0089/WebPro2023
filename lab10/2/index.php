<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width = device - width, initial - scale = 1.0" name="viewport">
    <meta content="#2242A6" name="theme-color">
    <title>65070089 - Fundamental Web Programming Lab .</title>
    <link href="styles.css?v=1.0" rel="stylesheet">
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<nav class="topnav">
    <div class="sook_north d-flex justify-content-between">
        <div class="d-flex flex-row">
            <div class="nav-item active">
                <a class="nav-link text-white" href="/"> Home</a>
            </div>
        </div>
        <div class="my-auto py-0 sook_text"><a
                    class="nav-link text-white" href="https://youtu.be/XT_aaSkD5rs?si=xGK5Kh-LRoW43eOQ&t=4">
                King Mongkut's Institute of Technology Ladkrabang</a></div>
    </div>
    <div class="sook_south"></div>
</nav>


<div class="" id="body_container" style="margin-top: 31px">
    <div id="question" class="mt-4 quiz-container">
        <h1 class="">Quiz</h1>
        <form id="myForm" method="post">
            <h3 id="q_problem">1.) What is the full form of SQL?</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="ืchoice_a" name="answer" value="A">
                <label class="form-check-label" for="ืchoice_a" id="q_a">Not Null</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="ืchoice_b" name="answer" value="B">
                <label class="form-check-label" for="ืchoice_b" id="q_b">Not Null</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="ืchoice_c" name="answer" value="C">
                <label class="form-check-label" for="ืchoice_c" id="q_c">Not Null</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="ืchoice_d" name="answer" value="D">
                <label class="form-check-label" for="ืchoice_d" id="q_d">Not Null</label>
            </div>
            <input class="btn btn-primary mt-3" type="submit" id="submitBtn" name="submitBtn"
                   value="Submit">
        </form>
    </div>

    <div id="result" class="mt-4 quiz-container">
        <h1>🎉 Congratulation!</h1>
        <div class="d-flex flex-row">
            <h3 style="font-size: 144px; font-weight: 400">4</h3>
            <div class="d-flex flex-column-reverse">
                <p style="font-size: 50px">/10</p>
            </div>

        </div>

    </div>


</div>

<div align="right" class="emailspin"><img alt="" border="0" src=" ../assets/emailspin.gif"><br>
    65070089@kmitl.ac.th<br>
    Any problem with the website, feel free to contact me.
</div>
</body>

</html>

<script src="script.js"></script>