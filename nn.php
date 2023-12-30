<?php
$connection=mysqli_connect("localhost","root","home@123","RECYCLE");
if($connection)
{
echo "Successfull";
}
else{
echo "Error:".mysqli_error($connection);
}

?>
