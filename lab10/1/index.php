<?php

class MyDB extends SQLite3
{
    function __construct() {
        $this->open('customers.db');
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["delete_last_row"] == "Delete The Last Row") {
        // 1. Connect to Database


        // 2. Open Database
        $db = new MyDB();
        if (!$db)
            echo $db->lastErrorMsg();

        // 3. QUERY
        $sql = "DELETE FROM customers WHERE CustomerId = (SELECT MAX(CustomerId) FROM customers)";

        $ret = $db->exec($sql);
        if (!$ret)
            echo $db->lastErrorMsg();

        // 4. Close database
        $db->close();
    }
    unset($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF - 8">
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

    <?php
    // 2. Open Database
    $db = new MyDB();
    if (!$db)
        echo $db->lastErrorMsg();

    // 3. Query Execution
    $sql = "SELECT * from customers";
    $ret = $db->query($sql);


    $cnt = "SELECT COUNT(*) FROM customers";
    // Execute the query and store the result object
    $result = $db->query($cnt);
    // Fetch the first row (which contains the count value)
    $row = $result->fetchArray(SQLITE3_ASSOC);
    // Extract the count value from the row
    $count = $row["COUNT(*)"];
    // Echo the count value
    //    echo $count;
    if ($count == 0) {
        $insert_data = <<<EOF
INSERT INTO "customers" VALUES (1,'Luís','Gonçalves','Embraer - Empresa Brasileira de Aeronáutica S.A.','Av. Brigadeiro Faria Lima, 2170','São José dos Campos','SP','Brazil','12227-000','+55 (12) 3923-5555','+55 (12) 3923-5566','luisg@embraer.com.br',3);
INSERT INTO "customers" VALUES (2,'Leonie','Köhler',NULL,'Theodor-Heuss-Straße 34','Stuttgart',NULL,'Germany','70174','+49 0711 2842222',NULL,'leonekohler@surfeu.de',5);
INSERT INTO "customers" VALUES (3,'François','Tremblay',NULL,'1498 rue Bélanger','Montréal','QC','Canada','H2G 1A7','+1 (514) 721-4711',NULL,'ftremblay@gmail.com',3);
INSERT INTO "customers" VALUES (4,'Bjørn','Hansen',NULL,'Ullevålsveien 14','Oslo',NULL,'Norway','0171','+47 22 44 22 22',NULL,'bjorn.hansen@yahoo.no',4);
INSERT INTO "customers" VALUES (5,'František','Wichterlová','JetBrains s.r.o.','Klanova 9/506','Prague',NULL,'Czech Republic','14700','+420 2 4172 5555','+420 2 4172 5555','frantisekw@jetbrains.com',4);
INSERT INTO "customers" VALUES (6,'Helena','Holý',NULL,'Rilská 3174/6','Prague',NULL,'Czech Republic','14300','+420 2 4177 0449',NULL,'hholy@gmail.com',5);
INSERT INTO "customers" VALUES (7,'Astrid','Gruber',NULL,'Rotenturmstraße 4, 1010 Innere Stadt','Vienne',NULL,'Austria','1010','+43 01 5134505',NULL,'astrid.gruber@apple.at',5);
INSERT INTO "customers" VALUES (8,'Daan','Peeters',NULL,'Grétrystraat 63','Brussels',NULL,'Belgium','1000','+32 02 219 03 03',NULL,'daan_peeters@apple.be',4);
INSERT INTO "customers" VALUES (9,'Kara','Nielsen',NULL,'Sønder Boulevard 51','Copenhagen',NULL,'Denmark','1720','+453 3331 9991',NULL,'kara.nielsen@jubii.dk',4);
INSERT INTO "customers" VALUES (10,'Eduardo','Martins','Woodstock Discos','Rua Dr. Falcão Filho, 155','São Paulo','SP','Brazil','01007-010','+55 (11) 3033-5446','+55 (11) 3033-4564','eduardo@woodstock.com.br',4);
INSERT INTO "customers" VALUES (11,'Alexandre','Rocha','Banco do Brasil S.A.','Av. Paulista, 2022','São Paulo','SP','Brazil','01310-200','+55 (11) 3055-3278','+55 (11) 3055-8131','alero@uol.com.br',5);
INSERT INTO "customers" VALUES (12,'Roberto','Almeida','Riotur','Praça Pio X, 119','Rio de Janeiro','RJ','Brazil','20040-020','+55 (21) 2271-7000','+55 (21) 2271-7070','roberto.almeida@riotur.gov.br',3);
INSERT INTO "customers" VALUES (13,'Fernanda','Ramos',NULL,'Qe 7 Bloco G','Brasília','DF','Brazil','71020-677','+55 (61) 3363-5547','+55 (61) 3363-7855','fernadaramos4@uol.com.br',4);
INSERT INTO "customers" VALUES (14,'Mark','Philips','Telus','8210 111 ST NW','Edmonton','AB','Canada','T6G 2C7','+1 (780) 434-4554','+1 (780) 434-5565','mphilips12@shaw.ca',5);
INSERT INTO "customers" VALUES (15,'Jennifer','Peterson','Rogers Canada','700 W Pender Street','Vancouver','BC','Canada','V6C 1G8','+1 (604) 688-2255','+1 (604) 688-8756','jenniferp@rogers.ca',3);
INSERT INTO "customers" VALUES (16,'Frank','Harris','Google Inc.','1600 Amphitheatre Parkway','Mountain View','CA','USA','94043-1351','+1 (650) 253-0000','+1 (650) 253-0000','fharris@google.com',4);
INSERT INTO "customers" VALUES (17,'Jack','Smith','Microsoft Corporation','1 Microsoft Way','Redmond','WA','USA','98052-8300','+1 (425) 882-8080','+1 (425) 882-8081','jacksmith@microsoft.com',5);
INSERT INTO "customers" VALUES (18,'Michelle','Brooks',NULL,'627 Broadway','New York','NY','USA','10012-2612','+1 (212) 221-3546','+1 (212) 221-4679','michelleb@aol.com',3);
INSERT INTO "customers" VALUES (19,'Tim','Goyer','Apple Inc.','1 Infinite Loop','Cupertino','CA','USA','95014','+1 (408) 996-1010','+1 (408) 996-1011','tgoyer@apple.com',3);
INSERT INTO "customers" VALUES (20,'Dan','Miller',NULL,'541 Del Medio Avenue','Mountain View','CA','USA','94040-111','+1 (650) 644-3358',NULL,'dmiller@comcast.com',4);
EOF;
        $db->exec($insert_data);
    }
    echo ' <table class="table">
<thead>
<tr>
      <th scope = "col"> ID</th>
      <th scope = "col"> Name</th>
      <th scope = "col"> Address</th>
      <th scope = "col"> Phone</th>
      <th scope = "col"> Email</th>
    </tr>
</thead>
<tbody>';

    //    if ($ret->fetchArray(SQLITE3_ASSOC) === false)
    //        echo "Database is empty";

    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        echo "<tr> ";
        echo "<th scope = 'row'> " . $row['CustomerId'] . "</th> ";
        echo "<td> " . $row['FirstName'] . " " . $row['LastName'] . "</td> ";
        echo "<td> " . $row['Address'] . "</td>";
        echo "<td> " . $row['Phone'] . "</td>";
        echo "<td> " . $row['Email'] . "</td>";
        echo " </tr > ";
    }
    echo '</tbody></table>';
    //    echo "Operation done successfully < br>";


    // 4. Close database
    $db->close();


    ?>

    <form id="form1" action="index.php" method="post">
        <input type="submit" id="delete_last_row" name="delete_last_row" value="Delete The Last Row">
    </form>
</div>

<div align="right" class="emailspin"><img alt="" border="0" src=" ../assets/emailspin.gif"><br>
    65070089@kmitl.ac.th<br>
    Any problem with the website, feel free to contact me.
</div>
</body>

</html>