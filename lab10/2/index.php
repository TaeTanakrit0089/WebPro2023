<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width = device - width, initial - scale = 1.0" name="viewport">
    <meta content="#2242A6" name="theme-color">
    <title>65070089 - Fundamental Web Programming Lab .</title>
    <link href="styles.css?v=1.2" rel="stylesheet">
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body topmargin="">
<nav class="topnav p-1">
    <div class="sook_north blur-effect d-flex justify-content-between">
        <div class="d-flex flex-row">
            <div class="nav-item active">
                <a class="nav-link text-white" href="/"> Home</a>
            </div>
        </div>
        <div class="my-auto py-0 sook_text"><a
                    class="nav-link text-white" href="https://youtu.be/XT_aaSkD5rs?si=xGK5Kh-LRoW43eOQ&t=4">
                King Mongkut's Institute of Technology Ladkrabang</a></div>
    </div>
    <div class="sook_south blur-effect"></div>
</nav>


<div class="" id="body_container" style="padding-top: 54px !important">
    <div id="intro" class="mt-4 quiz-container  blur-effect">
        <h1>Morality and Ethics!</h1>
        <ol class="mt-4" style="font-size: 22px; font-weight: 300">
            <li>คุณธรรมและจริยธรรมที่จะส่งเสริมในวิชานี้คือ ความซื่อสัตย์  ซึ่งนักศึกษาจะต้องยึดถือไว้อย่างเคร่งครัด
            </li>
            <li>ในการทดสอบสอบย่อย (Quiz) หากพบว่านักศึกษาทำการทุจริต เช่น รับความช่วยเหลือจากผู้อื่น
                หรือให้ความช่วยเหลือผู้อื่น ฯลฯ นักศึกษาจะได้รับการลงโทษ คือ จะปรับผลคะแนนการทดสอบย่อย (Quiz)
                ทั้งหมดทุกครั้งในวิชานี้เป็น 0
            </li>
            <li>ในการสอบกลางภาคและสอบปลายภาค หากพบว่ามีการทุจริต นักศึกษาจะถูกดำเนินการทางวินัยตามข้อบังคับสถาบัน</li>
        </ol>
        <form id="startQuiz" method="post">
            <div class="d-flex flex-row justify-content-center">
                <input class="btn btn-primary mt-3" type="submit" id="startQuiz" name="startQuiz"
                       value="Start Quiz">
            </div>

        </form>
    </div>


    <div id="question" class="mt-4 quiz-container  blur-effect">
        <h1 class="">Quiz</h1>
        <form class="mt-3" id="myForm" method="post">
            <h3 id="q_problem">Your internet is god damn slow</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="ืchoice_a" name="answer" value="A">
                <label class="form-check-label" for="ืchoice_a" id="q_a"></label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="ืchoice_b" name="answer" value="B">
                <label class="form-check-label" for="ืchoice_b" id="q_b"></label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="ืchoice_c" name="answer" value="C">
                <label class="form-check-label" for="ืchoice_c" id="q_c"></label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="ืchoice_d" name="answer" value="D">
                <label class="form-check-label" for="ืchoice_d" id="q_d"></label>
            </div>
            <input class="btn btn-primary mt-3" type="submit" id="submitBtn" name="submitBtn"
                   value="Submit">
        </form>
    </div>

    <div id="result" class="mt-4 quiz-container  blur-effect">
        <h1>🎉 Congratulation!</h1>
        <div class="d-flex flex-row">
            <h3 id="score" style="font-size: 144px; font-weight: 400"></h3>
            <div style="font-size: 50px" class="d-flex flex-column-reverse">
                <div class="d-flex flex-row">
                    <p>/</p>
                    <p id="all_questions"></p>
                </div>

            </div>
        </div>
    </div>


</div>

<div align="right" class="emailspin" style="color: white"><img alt="" border="0" src=" ../assets/emailspin.gif"><br>
    65070089@kmitl.ac.th<br>
    Any problem with the website, feel free to contact me.
</div>
</body>

</html>

<script src="script.js"></script>