<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['submit']))
{
    



    $s="localhost";
    $u="root";
    $p="";
    $db="restaurant";
    $conn=mysqli_connect($s,$u,$p,$db);

    $username=$_POST['username'];
    $password=$_POST['password'];

if(!$conn){
    die("connection failed:" .mysqli_connect_error());

}

$sql="SELECT username,password FROM student WHERE username=\"$username\"";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    $row=mysqli_fetch_assoc($result);
    if($row["username"]==$username && $row["password"]==$password)
    {
        header("location:index.html");
    }
    else{
       
        header("location:forget-password.php");
    }
}

else {
    
  header('location:signup.php');
  echo "Error:".$sql.'<br>'.mysqli_error($conn);
}
}
else{
    header("location:index.html");
}
mysqli_close($conn);
?>
</body>
</html>   