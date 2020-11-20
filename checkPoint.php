<?php
if(isset($_POST['username']) &&  isset($_POST['pass'])){

$email    = $_POST['username'];
$password = $_POST['pass'];

include('dbConnect/databaseConnection.php');
//die;
$sql = "INSERT INTO login(Email_ID,password,status)VALUES('$email','$password',1)";
$result=mysqli_query($conn,$sql);

if(!$result){
echo"error";

}
else {
echo"Success";


}







}
?>