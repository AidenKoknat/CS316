<?php

if (isset($_POST["formButton"])) {
    require_once "database.php";
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $type = $_POST["type"];
    if (isset($_POST["emptySelect"])) {
        $emptySelect = $_POST["emptySelect"];
    }
    else {
        die("form error");
    }
    $frequency = $_POST["freq"];

    #conversions
    if ($type == "Text") {
        $type = 0;
    }
    if ($type == "Phone") {
        $type = 1;
    }

    if ($emptySelect == "Concert Alerts") {
        $emptySelect = 0;
    }
    else if ($emptySelect == "") {
        die("Form error");
    }
    else {
        $emptySelect = 1;
    }

    $sql = "INSERT INTO newsletter (Name, PhoneNumber, TextOrPhone, MessageType, Frequency) VALUES ('$name', '$phone', $type, $emptySelect, $frequency);";
    $query = "INSERT INTO newsletter (Name, PhoneNumber, TextOrPhone, MessageType, Frequency) VALUES ('$name', '$phone', $type, $emptySelect, $frequency);";
    mysqli_query($connection, $query);

}
?>