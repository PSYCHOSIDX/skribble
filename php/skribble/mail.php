<?php 
if(isset($_POST['esubmit']))
{
    $email=$_POST['email'];
    $to ="siddheshkamath40@gmail.com";
    $sub ="Connect for Work";
   // $name =$_POST['name'];
    $from="artsskribble@gmail.com";
    $msg =$_POST['msg'];
   $headers = "From: $from";
}


if(mail($to,$sub,$msg,$headers))
{
header("Location:index.php");

}
else{
    header("Location:index.php");
}



?>