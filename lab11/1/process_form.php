<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $employeeID = $_POST["employee_ID"];
    $firstname = $_POST["Firstname"];
    $lastname = $_POST["Lastname"];
    $address = $_POST["Address"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];

    // Depending on the button clicked, perform the appropriate action
    if (isset($_POST["save"])) {
        echo 'save';
        // Save data action
        // Perform operations to save the data, such as storing it in a database
        // Example: saveData($employeeID, $firstname, $lastname, $address, $email, $phone);
    } elseif (isset($_POST["show"])) {
        echo 'show';
        // Show data action
        // Perform operations to show the data, such as displaying it on a webpage
        // Example: showData($employeeID, $firstname, $lastname, $address, $email, $phone);
    } elseif (isset($_POST["clear"])) {
        header('Refresh: 0; URL = index.php');
        // Clear data action
        // Perform operations to clear the data, such as resetting form fields
        // Example: clearData();
    }
}
?>
<?php
