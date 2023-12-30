<?php
include "nn.php";
if($connection)
{
    echo "Succefull:";

}
else{
    echo "Error:".mysqli_error($connection);
}

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['oname'];
$material=$_POST['service'];
$query="CREATE TABLE material(username VARCHAR(30) NOT NULL,email VARCHAR(50),phone VARCHAR(50),address VARCHAR(50),material VARCHAR(50));";

/*if(mysqli_query($connection,$query))
{
    echo "table created";
}
else{
    echo "Error:".mysqli_error($connection)."<br>";
}
*/
$query="INSERT INTO material VALUES('$name','$email','$phone','$address','$material');";
if(mysqli_query($connection,$query))
{
    echo "Service Noted";

}
else{
    echo "Error:".mysqli_error($connectiob);

}
mysqli_close($connection);
?>
<a href="homeee.html" class="link-btn"><button>Back To Home Page</button></a>
