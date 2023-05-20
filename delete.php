<?php 
if (isset($_POST['sub']))
{
$conn = mysqli_connect('localhost', 'root', '', 'test1');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$id=$_POST['id'];

$sql = "delete from test1  where id=$id ";

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
        <form <?php $SELF_PHP;?> method="POST">
            <input type="text" placeholder="Enter Id" name="id">
            <input type="Submit" placeholder="Submit" name="sub">
        </form>
    </center>
    </body>
</html>