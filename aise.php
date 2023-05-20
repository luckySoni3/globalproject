<?php
if(isset($_POST['sub']))
{
$con=new mysqli('localhost','root','','test1');
$id=$_POST['id'];
$nm=$_POST['nm'];
$em=$_POST['email'];
$pass=$_POST['pass'];
$sql="insert into test1 values('$id','$nm','$em','$pass')";
$result= mysqli_query($con, $sql);
if($result)
{
    echo 'data inserted successfully';
}
else
{
    die(mysql_error($con));
}
}
?>
<html>
    <head>
        <title>
            
        </title>
    </head>
    <body>
        <form <?PHP $SELF_PHP;?> method="POST">
            <input type="text" name="id" placeholder="enter id"><br>
        <input type="text" name="nm" placeholder="enter name"><br>
        <input type="email" name="email" placeholder="enter email"><br>
        <input type="password" name="pass" placeholder="Enter password"><br>
        <input type="submit" name="sub" placeholder="submit"><br>
        </form>
    </body>
</html>