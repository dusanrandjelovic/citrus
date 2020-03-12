<?php
require 'header.php';
include('addcomment.php');
?>
 <div><?php echo $success ?></div>
    <div><?php echo $nameErr?></div>
        <div><?php echo $emailErr?></div>
          <div><?php echo $messageErr?></div>

<div class="products">
 
<?php
require 'connection.php';
$conn->set_charset("utf-8");
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

?>

<div>
  <img src="<?php echo $row["image"]?>" alt="image">
<h3><?php echo $row["title"]?></h3>
<p><?php echo $row["description"]?></p>
</div>

        <?php
    }
} else {
    echo "There is no products";
}
$conn->close();
?>

</div>
<div class="comments">
  <h2>Comments</h2>
<?php
require 'connection.php';
$conn->set_charset("utf-8");
$sql = "SELECT id_comment, name, message FROM comments WHERE is_approved = 1 ORDER BY id_comment DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

?>

  <div>
<h3><?php echo $row["name"]?></h3>
<p><?php echo $row["message"]?></p>
</div>


        <?php
    }
} else {
    echo "No comments";
}
$conn->close();
?>
</div>
<div class="contactform">
<h2>Add a comment</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
<label for="name">Name</label>
<input type="text" name="name">
<label for="email">Email</label>
<input type="text" name="email">
<label for="message">Message</label>
<textarea name="message" rows="8" cols="80"></textarea>

<input id="dugme" type="submit" value="Submit" id="dugme">
    </form>
</div>
<?php
require 'footer.php';
?>
