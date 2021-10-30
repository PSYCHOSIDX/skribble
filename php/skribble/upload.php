<?php 

include 'connection.php';

if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $content_des = $_POST['content_des'];
    $link = $_POST['link'];
    $file = $_FILES['photo'];

    $filen = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if($fileerror == 0)
    {
        $destfile = 'uploadx/'.$filen;

        move_uploaded_file($filepath, $destfile);

        $insertq = "INSERT INTO post (title, content_des, link, photo) VALUES ('$title', '$content_des', '$link', '$destfile');";


        $query = mysqli_query($con,$insertq);

      

       header("location: index.php");
    }

}

?>