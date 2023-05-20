<?php 
if(isset($_POST['sub']))
{

    // Create connection
    $conn = new mysqli("localhost", "root", "", "test1");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM test1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    ?>
<table class=" table table-hover">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>pass</th>
    </tr><?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  ?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['pass'];?></td>
    </tr>
        <?php
    }
    ?>
    </table>
    <?php
    } else {
    echo "0 results";
    }
    $conn->close();
}
}
?>
<html>
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <form <?PHP $SELF_PHP;?> method="post">
        <br><br>
    <center>
       
        <input type="submit" name="sub" class='btn btn-primary' value="Display">
    </center>
        </form>
    </body>
</html>