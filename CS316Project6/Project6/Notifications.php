<?php
require_once './database.php';

if (isset($_POST["searchName"])) {
    $nameSearch = "SELECT * FROM newsletter WHERE ";
    $name = $_POST["searchName"];
    if ($name > 0) {
        $nameSearch .= "Name LIKE \"%$name%\" ";
        $result = $connection->query($nameSearch);
        echo "Search Results: <br>";
        echo "-------------------------------------- <br>";
        while ($row = $result->fetch_assoc()) {
            echo "ID Number: ";
            echo $row["ID Num"];
            echo "<br>";
            echo "Name: "; 
            echo $row["Name"];
            echo "<br>";
            echo "Phone Number: ";
            echo $row["PhoneNumber"];
            echo "<br>";
            echo "Text or Phone: ";
            if ($row["TextOrPhone"] == 0) {
                echo "Text <br>";
            }
            else {
                echo "Phone <br>";
            }
    
            echo "Message Type: ";
            if ($row["MessageType"] == 0) {
                echo "Concert Notifications <br>";
            }
            else {
                echo "Fun Facts about Nardolillo <br>";
            }
    
            echo "Frequency: ";
            if ($row["Frequency"] == 0) {
                echo "Once a month <br>";
            }
            else if ($row["Frequency"] == 1) {
                echo "Once a week <br>";
            }
            else {
                echo "Once a year <br>";
            }
            echo "-------------------------------------- <br>";
        }
    }
}

$sql = "SELECT * FROM newsletter;";
$result = $connection->query($sql);

echo "<br> List of Members: <br>";
echo "-------------------------------------- <br>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID Number: ";
        echo $row["ID Num"];
        echo "<br>";
        echo "Name: "; 
        echo $row["Name"];
        echo "<br>";
        echo "Phone Number: ";
        echo $row["PhoneNumber"];
        echo "<br>";
        echo "Text or Phone: ";
        if ($row["TextOrPhone"] == 0) {
            echo "Text <br>";
        }
        else {
            echo "Phone <br>";
        }

        echo "Message Type: ";
        if ($row["MessageType"] == 0) {
            echo "Concert Notifications <br>";
        }
        else {
            echo "Fun Facts about Nardolillo <br>";
        }

        echo "Frequency: ";
        if ($row["Frequency"] == 0) {
            echo "Once a month <br>";
        }
        else if ($row["Frequency"] == 1) {
            echo "Once a week <br>";
        }
        else {
            echo "Once a year <br>";
        }
        echo "-------------------------------------- <br>";
    }
}
else {
    echo "no results";
}
?>