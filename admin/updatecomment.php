<?php
require '../connection.php';
$success = "";


$sql = "UPDATE comments
SET name='$_POST[name]', email='$_POST[email]', message='$_POST[message]', is_approved='$_POST[is_approved]'
WHERE id_comment='$_POST[id_comment]'";

if ($conn->query($sql) === TRUE) {
        $success = "Approved";
   header("Location: admin.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
