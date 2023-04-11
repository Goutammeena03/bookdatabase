<?php
include('connection.php');
if (isset($_POST['submit']))
{
    $bookname=$_POST['bookname'];
    $authorname=$_POST['authorname'];
    $price=$_POST['price'];

    $sql="INSERT INTO bookname set
    bookname='$bookname',
    authorname='$authorname',
    price='$price'
    " ;
    $res=mysqli_query($conn,$sql);

    if ($res==true)
    {
        header("location:index.php");
   }
   else{
        header("location:action.php");
   }
}
>?