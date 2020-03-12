<?php
ob_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/table.css" />
</head>
<body>

<header>
  <a href="admin.php">Citrus</a>

<a href="logout.php">Logout</a>
</header>

<?php
include("auth.php");  ?>

<h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
 
<h1>Comments information</h1>
<div style="overflow-x:auto;">
<table>

<tr>
<th>Name</th>
<th>Email</th>
<!-- <th>Message</th> -->
<th>Approvement</th>
<th></th>
</tr>

<?php
require '../connection.php';
$conn->set_charset("utf-8");
$sql = "SELECT id_comment, name, email, message, is_approved FROM comments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
$id_comment=$row["id_comment"]; 
?>
<tr>
<td><?php echo $row["name"]?></td>
<td><?php echo $row["email"]?></td>
<!-- <td><?php echo $row["message"]?></td> -->
<td><?php echo empty($row["is_approved"]) ? "Not approved" : "Approved"?></td>
<td><a href="editcomment.php?id_comment=<?php echo $row["id_comment"]?>">Edit &#10132;</a></td>
</tr>

        <?php
    }
} else {
    echo "No results";
}
$conn->close();
?>

</table>
</div>

<?php
ob_flush();
?>
