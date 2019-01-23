<?php
if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];
  $con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
  $select=mysqli_query( $con,"select email,password from users where md5(email)='$email' and md5(password)='$pass'");
  if(mysqli_num_rows($select)==1)
  {
    ?>
        <center>
    <form method="post" action="submit_new.php">

    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    </center>
    <?php
  }
}
?>