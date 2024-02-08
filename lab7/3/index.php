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
                    class="nav-link text-white" href="https://youtu.be/XT_aaSkD5rs?si=xGK5Kh-LRoW43eOQ&t=4">
                King Mongkut's Institute of Technology Ladkrabang</a></div>
    </div>
    <div class="sook_south"></div>
</nav>


<div class="" id="body_container" style="margin-top: 31px">

    <h1 class='center' style="margin-top:20px;">Form</h1>

    <div class="container">
        <!--        <form role="form" method="post" action="index.php" onsubmit="this.form.submit()">-->
        <!--            <div class="form-group">-->
        <!--                <label for="email">Name:</label>-->
        <!--                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="">-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="pwd">Address:</label>-->
        <!--                <label for="address"></label><textarea type="password" class="form-control" name="address" id="address"-->
        <!--                                                       placeholder="Enter address"></textarea>-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="pwd">Age:</label>-->
        <!--                <input type="number" class="form-control" name="age" id="age" placeholder="Enter age" value="">-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="pwd">Profession:</label>-->
        <!--                <input type="text" class="form-control" name="profession" id="profession" placeholder="Enter profession"-->
        <!--                       value="">-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="pwd">Residental Status:</label><br>-->
        <!--                <input type="radio" name="residential" id="res_1" value="Resident" checked="true"><label-->
        <!--                        for="res_y">Resident</label>-->
        <!--                <input type="radio" name="residential" id="res_2" value="Non-Resident"><label-->
        <!--                        for="res_n">Non-Resident</label>-->
        <!--            </div>-->
        <!---->
        <!--            <button type="submit" class="btn btn-primary mt-3">Submit</button>-->
        <!--        </form>-->


        <?php
        $name = "";
        $address = "";
        $age = "";
        $profession = "";
        $residential = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = isset($_POST["name"]) ? $_POST["name"] : "";
            $address = isset($_POST["address"]) ? $_POST["address"] : "";
            $age = isset($_POST["age"]) ? $_POST["age"] : "";
            $profession = isset($_POST["profession"]) ? $_POST["profession"] : "";
            $residential = isset($_POST["residential"]) ? $_POST["residential"] : "";

//            echo $residential;
        }


        echo '
            <form role="form" method="post" action="index.php" onsubmit="this.form.submit()">
                <div class="form-group">
                    <label for="email">Name:</label>
                    <input type="text" class="form-control';
        if (strlen($name) < 5 && $name !== "") echo " text-danger ";
        echo '" name="name" id="name" placeholder="Enter name" value="' . $name . '">
                </div>
                <div class="form-group">
                    <label for="pwd">Address:</label>
                    <textarea class="form-control';
        if (strlen($address) < 5 && $address !== "") echo " text-danger ";
        echo '" name="address" id="address" placeholder="Enter address">' . $address . '</textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Age:</label>
                    <input type="number" class="form-control';
        echo '" name="age" id="age" placeholder="Enter age" value="' . $age . '">
                </div>
                <div class="form-group">
                    <label for="pwd">Profession:</label>
                    <input type="text" class="form-control';
        if (strlen($profession) < 5 && $profession !== "") echo " text-danger ";
        echo '" name="profession" id="profession" placeholder="Enter profession" value="' . $profession . '">
                </div>
                <div class="form-group">
                    <label for="pwd">Residential Status:</label><br>
                    <input type="radio" name="residential" id="res_1" value="Resident" ';
        if ($residential === "Resident")
            echo ' checked';
        echo '><label for="res_y">Resident</label>
                    <input type="radio" name="residential" id="res_2" value="Non-Resident"';
        if ($residential === "Non-Resident")
            echo ' checked';
        echo '><label for="res_n">Non-Resident</label>
                </div>
            
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
';
        ?>
    </div>
</div>

<div align="right" class="emailspin"><img alt="" border="0" src="../assets/emailspin.gif"><br>
    65070089@kmitl.ac.th<br>
    Any problem with the website, feel free to contact me.
</div>
</body>

</html>