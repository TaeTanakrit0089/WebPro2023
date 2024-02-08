<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="#2242A6" name="theme-color">
    <title>65070089 - Fundamental Web Programming Lab.</title>
    <link href="styles.css?v=1.0" rel="stylesheet">
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<nav class="topnav">
    <div class="sook_north d-flex justify-content-between ">
        <div class="d-flex flex-row gap-1">
            <div class="nav-item active">
                <a class="nav-link text-white text-decoration-none" href="#">Home</a>
            </div>
        </div>
        <div class="my-auto py-0 sook_text"><a
                    class="nav-link text-white" href="https://youtu.be/XT_aaSkD5rs?si=xGK5Kh-LRoW43eOQ&t=4"
            >
                King Mongkut's Institute of Technology Ladkrabang</a></div>
    </div>
    <div class="sook_south"></div>
</nav>


<div class="" id="body_container" style="margin-top: 31px">

    <h1 class='center' style="margin-top:20px;">Year 2024</h1>
    <form method="post">
        <label for="month"></label><select class="center selectS" name="month" id="month" onchange="this.form.submit()">
            <option value='01' selected>January</option>
            <option value='02'>February</option>
            <option value='03'>March</option>
            <option value='04'>April</option>
            <option value='05'>May</option>
            <option value='06'>June</option>
            <option value='07'>July</option>
            <option value='08'>August</option>
            <option value='09'>September</option>
            <option value='10'>October</option>
            <option value='11'>November</option>
            <option value='12'>December</option>
        </select>
    </form>

    <div class="mt-4" style="max-width: 250px">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $selected_month = $_POST["month"];
            $year = 2024;
            $days_in_month = cal_days_in_month(CAL_GREGORIAN, $selected_month, $year);
            $first_day_of_month = date("N", strtotime("$year-$selected_month-1"));
            $month_name = date("F", strtotime("$year-$selected_month-1"));

            echo "<h2>$month_name $year</h2>";
            echo "<table class='table'>";
            echo "<tr><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr>";

            $day_counter = 0;
            $output = "<tr>";
            for ($i = 1; $i < $first_day_of_month; $i++) {
                $output .= "<td></td>";
                $day_counter++;
            }
            for ($day = 1; $day <= $days_in_month; $day++) {
                $output .= "<td>$day</td>";
                $day_counter++;
                if ($day_counter % 7 == 0) {
                    $output .= "</tr><tr>";
                }
            }
            $output .= "</tr>";
            echo $output;
            echo "</table>";
        }
        ?>
    </div>
</div>

<div align="right" class="emailspin"><img alt="" border="0" src="../assets/emailspin.gif"><br>
    65070089@kmitl.ac.th<br>
    Any problem with the website, feel free to contact me.
</div>
</body>

</html>