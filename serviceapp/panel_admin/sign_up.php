<?php
include 'connectionmain.php';
$myname=$_POST['name'];
$mymail=$_POST['mailuu'];
$mypwd=$_POST['pwduu'];
$uuid=uniqid('',true);
$qquery="SELECT * FROM login_service WHERE uname='$myname'";
$emy=mysqli_query($con,$qquery);
 $login_row=mysqli_num_rows($emy);
 $row = mysqli_fetch_array($emy);
 if ($login_row>0) {
$responq['exits'] =TRUE;
$responq['user_det']['username']=$row['uname'];
$responq['user_det']['mail_id']=$row['uemail'];
$responq['user_det']['password']=$row['upass'];
$responq['user_det']['uuid']=$row['user_id'];
 }
 else {
   $rqlqry="INSERT INTO login_service (user_id,uname,uemail,upass) VALUES ('$uuid','$myname','$mymail','$mypwd')";
   $emyq=mysqli_query($con,$rqlqry);
   $qquery="SELECT * FROM login_service WHERE uname='$myname'";
   $emyqq=mysqli_query($con,$qquery);
    $row2 = mysqli_fetch_array($emyqq);
   $responq['exits'] =FALSE;
   $responq['user_det']['username']=$row2['uname'];
   $responq['user_det']['mail_id']=$row2['uemail'];
   $responq['user_det']['password']=$row2['upass'];
   $responq['user_det']['uuid']=$row2['user_id'];

 }

echo json_encode($responq);
mysqli_close($con);
 ?>
