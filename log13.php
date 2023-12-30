<?php
include "nn.php";
if($connection)
{
    echo "Sign in  Successfull";

}
else{
    echo "Error:".mysqli_error($connection);
}

$fullname=$_POST['full_name'];
$phonenumber=$_POST['phone_number'];
$donationdetails=$_POST['donation_details'];
$messagetoneedy=$_POST['message_to_needy'];
$addresstopickup=$_POST['address_to_pickup'];




$query="CREATE TABLE donation (Fullname VARCHAR(30) NOT NULL, Phonenumber VARCHAR(30),Donationdetails VARCHAR(30),Messagetoneedy VARCHAR(30),Addresstopickup VARCHAR(30));";

/*if(mysqli_query($connection,$query))
{
    echo "table created";
}
else{
    echo "Error:".mysqli_error($connection)."<br>";
}

*/
$query="INSERT INTO donation  VALUES('$fullname','$phonenumber','$donationdetails','$messagetoneedy','$addresstopickup');";
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
