<?php
include "nn.php";
if($connection)
{
    echo "Sign in  Successfull";

}
else{
    echo "Error:".mysqli_error($connection);
}

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
$phonenumber=$_POST['phone'];
$dateofbirth=$_POST['birth'];
$gender=$_POST['gender'];
$username=$_POST['uname'];
$password=$_POST['pwd'];



$query="CREATE TABLE SignIn (firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30),email VARCHAR(30),phonenumber VARCHAR(30),dateofbirth VARCHAR(30),gender VARCHAR(30),username VARCHAR(30),password VARCHAR(30));";
/*
if(mysqli_query($connection,$query))
{
    echo "table created";
}
else{
    echo "Error:".mysqli_error($connection)."<br>";
}

*/
$query="INSERT INTO SignIn  VALUES('$firstname','$lastname','$email','$phonenumber','$dateofbirth','$gender','$username','$password');";
if(mysqli_query($connection,$query))
{
    echo "You can login through your user name ..!";

}
else{
    echo "Error:".mysqli_error($connectiob);

}
mysqli_close($connection);
?>
<a href="homeee.html" class="link-btn"><button>OPEN HOME PAGE</button></a>
