<?php
if (isset($_POST['sub']))
{
$conn = mysqli_connect('localhost', 'root', '', 'test1');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$id=$_POST['id'];
$nm=$_POST['nm'];
$em=$_POST['em'];
$pass=$_POST['pass'];

$sql = "UPDATE test1 SET name='$nm',email='$em',pass='$pass' where id=$id";

if (mysqli_query($conn, $sql)) {
  header("location:crude.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <center>
        <h1>Update</h1>
        <form <?php $SELF_PHP;?> method="POST">
            <input type="text" placeholder="Create id" name="id">
            <br>
            <input type="text" placeholder="Enter Your Name" name="nm">
            <br>
            <input type="text" placeholder="Enter Your Email" name="em">
            <br>
            <input type="text" placeholder="Create Password" name="pass">
            <br>
            <input type="submit" placeholder="Submit" name="sub">
        </form>
    </center>
    </body>
</html>