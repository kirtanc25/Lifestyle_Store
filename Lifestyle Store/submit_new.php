<?php
if(isset($_POST['submit_password']))
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
    $query = "update users set password='$pass' where email='$email'";
  $select=mysqli_query($con,$query);
    echo 'Password Changed Successfully!';
}
?>