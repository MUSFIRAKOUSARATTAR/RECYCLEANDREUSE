<?php
include "nn.php";
if($connection)
{
    echo "COnnection Succefull:";

}
else{
    echo "Error:".mysqli_error($connection);
}

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$service=$_POST['service'];
$original=$_POST['oname'];
$materialweight=$_POST['weight'];
$uploadmaterial=$_POST['upload'];
$descript=$_POST['description'];
$query="CREATE TABLE services(username VARCHAR(30) NOT NULL,email VARCHAR(50),phone VARCHAR(50),services VARCHAR(50),original VARCHAR(50),materialweight VARCHAR(50),uploadmaterial VARCHAR(50),descript VARCHAR(50));";
/*
if(mysqli_query($connection,$query))
{
    echo "table created";
}
else{
    echo "Error:".mysqli_error($connection)."<br>";
}*/

$query="INSERT INTO services VALUES('$name','$email','$phone','$service','$original','$materialweight','$uploadmaterial','$descript');";
if(mysqli_query($connection,$query))
{
    echo "values inserted";

}
else{
    echo "Error:".mysqli_error($connectiob);

}
mysqli_close($connection);
?>
<a href="" class="link-btn"><button>OK</button></a>
