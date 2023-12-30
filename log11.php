<?php
include "nn.php";
if($connection)
{
    echo "Login Successfull";

}
else{
    echo "Error:".mysqli_error($connection);
}

$name=$_POST['uname'];
$password=$_POST['password'];

$query="CREATE TABLE loginn (username VARCHAR(30) NOT NULL, pass VARCHAR(30));";

/*if(mysqli_query($connection,$query))
{
    echo "table created";
}
else{
    echo "Error:".mysqli_error($connection)."<br>";
}*/

$query="INSERT INTO loginn VALUES('$name','$password');";
if(mysqli_query($connection,$query))
{
    echo "Your Data Inserted";

}
else{
    echo "Error:".mysqli_error($connectiob);

}
mysqli_close($connection);
?>
<a href="homeee.html" class="link-btn"><button>OPEN HOME PAGE</button></a>
