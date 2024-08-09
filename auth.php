
    <?php
    if(isset($_POST['Signup']))
    
    $s="localhost";
    $u="root";
    $p="";
    $db="restaurant";
    $conn=mysqli_connect($s,$u,$p,$db);

    $userName=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirm_password'];


    $sql="INSERT INTO `signup` (username,email,password,confirm_password)VALUES('$userName', 'email','$password','$confirmPassword')";
    $a=mysqli_query($conn,$sql);

    if(!$a)
    {
        echo"data no added";
    }
    else{
        header("Location: http://localhost/Restaurant/login.html");       
    }
    ?>
