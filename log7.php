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
$quantity=$_POST['oname'];
$payment=$_POST['service'];
$query="CREATE TABLE jeans(username VARCHAR(30) NOT NULL,email VARCHAR(50),phone VARCHAR(50),quantity VARCHAR(50),payment VARCHAR(50));";
/*
if(mysqli_query($connection,$query))
{
    echo "table created";
}
else{
    echo "Error:".mysqli_error($connection)."<br>";
}
*/
$query="INSERT INTO jeans VALUES('$name','$email','$phone','$quantity','$payment');";
if(mysqli_query($connection,$query))
{
    echo "values inserted";

}
else{
    echo "Error:".mysqli_error($connectiob);

}
mysqli_close($connection);
?>
<a href="homeee.html" class="link-btn"><button>OK</button></a>
