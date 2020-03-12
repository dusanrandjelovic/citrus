<?php
ob_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/table.css" />
</head>
<body>

<header>
  <a href="admin.php">Citrus</a>

<nav>
<a href="admin.php">All comments</a>
<a href="logout.php">Logout</a>
</nav>
</header>

<main>
      
<h1>Edit</h1>

<?php
require '../connection.php';
$sql = "SELECT id_comment, name, email, message, is_approved FROM comments WHERE id_comment=$_GET[id_comment]";
$result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)) {
echo "<form action=updatecomment.php method=POST>";
echo "<label for=name>Name</label>";
echo "<input type=text name=name value='". $row["name"]."'>";
echo "<label for=email>Email</label>";
echo "<input type=text name=email value='". $row["email"]."'>";
echo "<label for=message>Message</label>";
echo "<textarea name=message value='". $row["message"]."'>". $row["message"]."</textarea>";
echo "<label for=is_approved>Approvement</label>";
echo "<select name=is_approved>";
echo "<option value=1>Approve</option>";
echo "<option value=0>Disapprove</option>";
echo "</select>";
echo "<input type=hidden name=id_comment value='". $row["id_comment"]."'>";
echo "<input type=submit value=Submit id=dugme>";
echo"</form>";


    }

$conn->close();
?>

</main>

<?php
ob_flush();
?>
